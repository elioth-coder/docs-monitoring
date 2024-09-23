<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME') }}</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        html,
        body {
            font-family: 'Times New Roman';
        }

        @media print {
            @page {
                size: landscape;
            }

            body {
                margin: 1in;
            }
        }

        .no-break {
            page-break-inside: avoid;
        }
    </style>
</head>

<body>
    <h1 class="text-center mb-2" contenteditable="true">MONITORING REPORT OF DOCUMENTS</h1>
    <table class="table table-bordered table-sm d-block w-100">
        <thead class="text-center align-top">
            <tr>
                <th class="">NO.</th>
                @if (!in_array('document_type', request('hidden_columns') ?? []))
                    <th class="">DOCUMENT TYPE</th>
                @endif
                @if (!in_array('purpose', request('hidden_columns') ?? []))
                    <th class="">PURPOSE</th>
                @endif
                @if (!in_array('name', request('hidden_columns') ?? []))
                    <th class="">NAME</th>
                @endif
                @if (!in_array('program', request('hidden_columns') ?? []))
                    <th class="">PROGRAM</th>
                @endif
                @if (!in_array('year_graduated', request('hidden_columns') ?? []))
                    <th class="">GRADUATION DATE</th>
                @endif
                @if (!in_array('quantity', request('hidden_columns') ?? []))
                    <th class="">QTY.</th>
                @endif
                @if (!in_array('action_needed', request('hidden_columns') ?? []))
                    <th class="">ACTION NEEDED</th>
                @endif
                @if (!in_array('date_forwarded', request('hidden_columns') ?? []))
                    <th class="">DATE FORWARDED</th>
                @endif
                @if (!in_array('date_returned', request('hidden_columns') ?? []))
                    <th class="">DATE RETURNED</th>
                @endif
                @if (!in_array('status', request('hidden_columns') ?? []))
                    <th class="">STATUS</th>
                @endif
                @if (!in_array('remarks', request('hidden_columns') ?? []))
                    <th class="">REMARKS</th>
                @endif
            </tr>
        </thead>
        <tbody>
            @forelse($documents as $document)
                <tr>
                    <td class="text-end">{{ $loop->index + 1 }}.</td>
                    @if (!in_array('document_type', request('hidden_columns') ?? []))
                        <td class="text-nowrap">{{ $document->document_type }}</td>
                    @endif
                    @if (!in_array('purpose', request('hidden_columns') ?? []))
                        <td class="text-nowrap">{{ $document->purpose }}</td>
                    @endif
                    @if (!in_array('name', request('hidden_columns') ?? []))
                        <td class="text-nowrap">{{ $document->name }}</td>
                    @endif
                    @if (!in_array('program', request('hidden_columns') ?? []))
                        <td class="text-nowrap">{{ $document->program }}</td>
                    @endif
                    @if (!in_array('year_graduated', request('hidden_columns') ?? []))
                        <td class="text-nowrap">
                            {{ ($document->year_graduated) ? strtoupper(date('M. d, Y', strtotime($document->year_graduated))) : "" }}
                        </td>
                    @endif
                    @if (!in_array('quantity', request('hidden_columns') ?? []))
                        <td class="text-nowrap">{{ $document->quantity }}</td>
                    @endif
                    @if (!in_array('action_needed', request('hidden_columns') ?? []))
                        <td class="text-nowrap">{{ $document->action_needed }}</td>
                    @endif
                    @if (!in_array('date_forwarded', request('hidden_columns') ?? []))
                        <td class="text-nowrap">
                            {{ ($document->date_forwarded) ? strtoupper(date('M. d, Y', strtotime($document->date_forwarded))) : "" }}
                        </td>
                    @endif
                    @if (!in_array('date_returned', request('hidden_columns') ?? []))
                        <td class="text-nowrap">
                            {{ ($document->date_returned) ? strtoupper(date('M. d, Y', strtotime($document->date_returned))) : "" }}
                        </td>
                    @endif
                    @if (!in_array('status', request('hidden_columns') ?? []))
                        <td class="text-nowrap">{{ $document->status }}</td>
                    @endif
                    @if (!in_array('remarks', request('hidden_columns') ?? []))
                        <td class="text-nowrap">{{ $document->remarks }}</td>
                    @endif
                </tr>
            @empty
                <tr>
                    <td colspan="10" class="text-center">No data found in the table.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div class="mt-5 no-break">
        <section class="me-5 d-inline-block">
            <h6>Prepared by:</h6>
            <section class="ms-5 mt-3 d-inline-block text-center">
                <p contenteditable="true" class="m-0 text-decoration-underline fw-bold text-center">LOUIE MAR R. SABERDO, RN</p>
                <span contenteditable="true">Registrar I</span>
            </section>
        </section>
        <section class="me-5 d-inline-block">
            <h6>Approved by:</h6>
            <section class="ms-5 mt-3 d-inline-block text-center">
                <p contenteditable="true" class="m-0 text-decoration-underline fw-bold text-center">ALBERT C. BULAWAT, EdD</p>
                <span contenteditable="true">College Department Head</span>
            </section>
        </section>
    </div>
</body>

</html>
