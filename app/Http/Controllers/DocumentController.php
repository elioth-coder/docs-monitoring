<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;

class DocumentController extends Controller
{
    public function index(Request $request)
    {
        $limit = $request->input('limit', 10);

        $documents = Document::orderBy('date_forwarded')->paginate($limit);

        return view('documents.index', [
            'documents' => $documents,
        ]);
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $limit = $request->input('limit', 10);
        $from  = $request->input('from');
        $to    = $request->input('to');

        $documents = Document::where('name', 'like', "%{$query}%")
            ->when($from && $to, function ($query) use ($from, $to) {
                $query->whereBetween('date_forwarded', [$from, $to]); // Adjust the date column as needed
            })
            ->when($from && !$to, function ($query) use ($from) {
                $query->whereDate('date_forwarded', '>=', $from);
            })
            ->orderBy('date_forwarded')
            ->paginate($limit);

        return view('documents.search', [
            'documents' => $documents,
        ]);
    }

    public function print(Request $request)
    {
        $query = $request->input('query');
        $from  = $request->input('from');
        $to    = $request->input('to');

        $documents = Document::where('name', 'like', "%{$query}%")
            ->when($from && $to, function ($query) use ($from, $to) {
                $query->whereBetween('date_forwarded', [$from, $to]); // Adjust the date column as needed
            })
            ->when($from && !$to, function ($query) use ($from) {
                $query->whereDate('date_forwarded', '>=', $from);
            })
            ->orderBy('date_forwarded')->get();

        return view('documents.print', [
            'documents' => $documents,
        ]);
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'document_type'  => ['nullable', 'string'],
            'purpose'        => ['nullable', 'string'],
            'name'           => ['required', 'string'],
            'program'        => ['nullable', 'string'],
            'year_graduated' => ['nullable', 'date'],
            'quantity'       => ['required', 'numeric'],
            'action_needed'  => ['required', 'string'],
            'date_forwarded' => ['nullable', 'date'],
            'date_returned'  => ['nullable', 'date'],
            'status'         => ['required', 'string'],
            'remarks'        => ['nullable', 'string'],
        ]);

        $document = Document::create($attributes);

        return redirect('/documents')->with([
            'message' => "Successfully created the document $document->name."
        ]);
    }

    public function destroy($id)
    {
        $document = Document::findOrFail($id);
        $document->delete();

        return redirect("/documents")
            ->with([
                'message' => 'Successfully deleted the document ' . $document->name . '.',
            ]);
    }

    public function edit(Request $request, $id)
    {
        $limit     = $request->input('limit', 10);
        $selected  = Document::findOrFail($id);
        $documents = Document::orderBy('date_forwarded')->paginate($limit);

        return view('documents.edit', [
            'documents' => $documents,
            'selected' => $selected,
        ]);
    }

    public function copy(Request $request, $id)
    {
        $limit     = $request->input('limit', 10);
        $selected  = Document::findOrFail($id);
        $documents = Document::orderBy('date_forwarded')->paginate($limit);

        return view('documents.copy', [
            'documents' => $documents,
            'selected' => $selected,
        ]);
    }

    public function update(Request $request, $id)
    {
        $document = Document::findOrFail($id);
        $rules = [
            'document_type'  => ['nullable', 'string'],
            'purpose'        => ['nullable', 'string'],
            'name'           => ['required', 'string'],
            'program'        => ['nullable', 'string'],
            'year_graduated' => ['nullable', 'date'],
            'quantity'       => ['required', 'numeric'],
            'action_needed'  => ['required', 'string'],
            'date_forwarded' => ['nullable', 'date'],
            'date_returned'  => ['nullable', 'date'],
            'status'         => ['required', 'string'],
            'remarks'        => ['nullable', 'string'],
        ];

        $attributes = $request->validate($rules);

        $document->update($attributes);

        return redirect('/documents')->with([
            'message' => "Successfully updated the document $document->name."
        ]);
    }

}
