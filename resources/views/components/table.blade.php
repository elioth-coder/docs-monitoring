@props(['documents'])
<h3 class="text-center text-uppercase mt-3">Monitoring Report of Documents</h3>
<div class="table-responsive my-3">
    @if (session('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <section class="d-flex align-items-center">
                <i class="bi bi-check-circle-fill fs-4 me-2"></i>
                {{ session('message') }}
            </section>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <table class="table table-hover table-bordered table-sm d-block">
        <thead class="text-center align-top">
            <tr>
                <th class="bg-warning">NO.</th>
                <th class="bg-warning text-center">ACTION</th>
                <th data-column="document_type" class="bg-warning">DOCUMENT TYPE</th>
                <th data-column="purpose" class="bg-warning">PURPOSE</th>
                <th data-column="name" class="bg-warning">NAME</th>
                <th data-column="program" class="bg-warning">PROGRAM</th>
                <th data-column="year_graduated" class="bg-warning">GRADUATION DATE</th>
                <th data-column="quantity" class="bg-warning">QTY.</th>
                <th data-column="action_needed" class="bg-warning">ACTION NEEDED</th>
                <th data-column="date_forwarded" class="bg-warning">DATE FORWARDED</th>
                <th data-column="date_returned" class="bg-warning">DATE RETURNED</th>
                <th data-column="status" class="bg-warning">STATUS</th>
                <th data-column="remarks" class="bg-warning">REMARKS</th>
            </tr>
        </thead>
        <tbody>
            @forelse($documents as $document)
                @php
                    $index = ($documents->currentPage() - 1) * $documents->perPage() + $loop->index + 1;
                @endphp
                <tr title="{{ $document->remarks ?? '' }}">
                <td class="text-end">{{ $index }}.</td>
                <td class="text-center" style="min-width: 170px;">
                    <form id="delete-document-{{ $document->id }}"
                        action="/documents/{{ $document->id }}" method="POST" class="d-none">
                        @csrf
                        @method('DELETE')
                        <button type="submit">DELETE</button>
                    </form>

                    <a href="/documents/{{ $document->id }}/copy#documents-form" title="Copy" class="btn btn-outline-dark btn-sm">
                        <i class="bi bi-copy"></i>
                    </a>
                    <a href="/documents/{{ $document->id }}/edit#documents-form" title="Edit" class="btn btn-outline-dark btn-sm">
                        <i class="bi bi-pencil"></i>
                    </a>
                    <button onclick="deleteDocument({{ $document->id }});" title="Delete" class="btn btn-outline-dark btn-sm">
                        <i class="bi bi-trash"></i>
                    </button>
                </td>
                <td data-column="document_type" class="text-nowrap">{{ $document->document_type }}</td>
                <td data-column="purpose" class="text-nowrap">{{ $document->purpose }}</td>
                <td data-column="name" class="text-nowrap">
                    <a class="link-primary " href="/documents/search?query={{ $document->name }}">
                        {{ $document->name }}
                    </a>
                </td>
                <td data-column="program" class="text-nowrap">{{ $document->program }}</td>
                <td data-column="year_graduated" class="text-nowrap">
                    {{ ($document->year_graduated) ? strtoupper(date('M. d, Y', strtotime($document->year_graduated))) : "" }}
                </td>
                <td data-column="quantity" class="text-nowrap">{{ $document->quantity }}</td>
                <td data-column="action_needed" class="text-nowrap">{{ $document->action_needed }}</td>
                <td data-column="date_forwarded" class="text-nowrap">
                    {{ ($document->date_forwarded) ? strtoupper(date('M. d, Y', strtotime($document->date_forwarded))) : "" }}
                </td>
                <td data-column="date_returned" class="text-nowrap">
                    {{ ($document->date_returned) ? strtoupper(date('M. d, Y', strtotime($document->date_returned))) : "" }}
                </td>
                <td data-column="status" class="text-nowrap">{{ $document->status }}</td>
                <td data-column="remarks" class="text-nowrap">{{ $document->remarks }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="11" class="text-center">No data found in the table.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    <div>
        <style>
            .pagination .page-item.active .page-link {
                background-color: rgb(255, 196, 19);
                border-color: rgb(255, 193, 7);
                color: rgb(0, 0, 0);
            }

            .pagination .page-item .page-link {
                color: rgb(0, 0, 0);
            }
        </style>
        {{ $documents->appends([
            'from'  => request('from'),
            'to'    => request('to'),
            'query' => request('query'),
        ])->links('pagination::bootstrap-5') }}
    </div>
</div>
<div class="d-flex align-items-center mb-3">
    <a id="print-report" target="_blank" href="/documents/print?{{ request()->getQueryString() }}" class="btn btn-outline-dark">
        <i class="bi bi-printer"></i>
        Print Report
    </a>
</div>
