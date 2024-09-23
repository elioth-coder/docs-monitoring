@props(['selected'])

<div id="documents-form" class="card p-5 mb-5">
    <form action="/documents/{{ $selected->id }}" method="POST">
        @csrf
        @method('PATCH')

        <h3>Edit this document</h3>
        <hr>
        <div class="d-flex column-gap-3">
            <div class="mb-2 w-100">
                @php
                    if($errors->has('document_type')) {
                        $document_type = old('document_type');
                    } else {
                        $document_type = (old('document_type')) ? old('document_type') : $selected->document_type;
                    }
                @endphp
                <label for="document_type" class="form-label">Document Type</label>
                <input type="text" class="form-control form-control-sm" placeholder="--" name="document_type" id="document_type" value="{{ $document_type }}">
                @error('document_type')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-2 w-100">
                @php
                    if($errors->has('purpose')) {
                        $purpose = old('purpose');
                    } else {
                        $purpose = (old('purpose')) ? old('purpose') : $selected->purpose;
                    }
                @endphp
                <label for="purpose" class="form-label">Purpose</label>
                <input type="text" class="form-control form-control-sm" placeholder="--" name="purpose" id="purpose" value="{{ $purpose }}">
                @error('purpose')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-2">
            @php
                if($errors->has('name')) {
                    $name = old('name');
                } else {
                    $name = (old('name')) ? old('name') : $selected->name;
                }
            @endphp
            <label for="name" class="form-label">Document Name</label>
            <input type="text" class="form-control form-control-sm" placeholder="--" name="name" id="name" value="{{ $name }}">
            @error('name')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="d-flex column-gap-3">
            <div class="mb-2 w-100">
                @php
                    if($errors->has('quantity')) {
                        $quantity = old('quantity');
                    } else {
                        $quantity = (old('quantity')) ? old('quantity') : $selected->quantity;
                    }
                @endphp
                <label for="quantity" class="form-label">Quantity</label>
                <input type="text" class="form-control form-control-sm" placeholder="--" name="quantity" id="quantity" value="{{ $quantity }}">
                @error('quantity')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-2 w-100">
                @php
                    if($errors->has('action_needed')) {
                        $action_needed = old('action_needed');
                    } else {
                        $action_needed = (old('action_needed')) ? old('action_needed') : $selected->action_needed;
                    }
                @endphp
                <label for="action_needed" class="form-label">Action Needed</label>
                <input type="text" class="form-control form-control-sm" placeholder="--" name="action_needed" id="action_needed" value="{{ $action_needed }}">
                @error('action_needed')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="d-flex column-gap-3">
            <div class="mb-2 w-100">
                @php
                    if($errors->has('status')) {
                        $status = old('status');
                    } else {
                        $status = (old('status')) ? old('status') : $selected->status;
                    }
                @endphp
                <label for="status" class="form-label">Status</label>
                <input type="text" class="form-control form-control-sm" placeholder="--" name="status" id="status" value="{{ $status }}">
                @error('status')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-2 w-100">
                @php
                    if($errors->has('program')) {
                        $program = old('program');
                    } else {
                        $program = (old('program')) ? old('program') : $selected->program;
                    }
                @endphp
                <label for="program" class="form-label">Program</label>
                <input type="text" class="form-control form-control-sm" placeholder="--" name="program" id="program" value="{{ $program }}">
                @error('program')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="d-flex column-gap-3">
            <div class="mb-2 w-100"></div>
            <div class="mb-2 w-100">
                @php
                    if($errors->has('year_graduated')) {
                        $year_graduated = old('year_graduated');
                    } else {
                        $year_graduated = (old('year_graduated')) ? old('year_graduated') : $selected->year_graduated;
                    }
                @endphp
                <label for="year_graduated" class="form-label">Graduation Date</label>
                <input type="date" class="form-control form-control-sm" placeholder="--" name="year_graduated" id="year_graduated" value="{{ $year_graduated }}">
                @error('year_graduated')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-2">
            @php
                if($errors->has('remarks')) {
                    $remarks = old('remarks');
                } else {
                    $remarks = (old('remarks')) ? old('remarks') : $selected->remarks;
                }
            @endphp
            <label for="remarks" class="form-label">Remarks</label>
            <textarea class="form-control form-control-sm" placeholder="--" name="remarks" id="remarks" rows="4">{{ $remarks }}</textarea>
            @error('remarks')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="d-flex column-gap-3">
            <div class="mb-2 w-100">
                @php
                    if($errors->has('date_forwarded')) {
                        $date_forwarded = old('date_forwarded');
                    } else {
                        $date_forwarded = (old('date_forwarded')) ? old('date_forwarded') : $selected->date_forwarded;
                    }
                @endphp
                <label for="date_forwarded" class="form-label">Date Forwarded</label>
                <input type="date" class="form-control form-control-sm" placeholder="--" name="date_forwarded" id="date_forwarded" value="{{ $date_forwarded }}">
                @error('date_forwarded')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-2 w-100">
                @php
                    if($errors->has('date_returned')) {
                        $date_returned = old('date_returned');
                    } else {
                        $date_returned = (old('date_returned')) ? old('date_returned') : $selected->date_returned;
                    }
                @endphp
                <label for="date_returned" class="form-label">Date Returned</label>
                <input type="date" class="form-control form-control-sm" placeholder="--" name="date_returned" id="date_returned" value="{{ $date_returned }}">
                @error('date_returned')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <hr>
        <div class="d-flex flex-row-reverse">
            <button type="submit" class="btn btn-warning w-25">Submit</button>
        </div>
    </form>
</div>
