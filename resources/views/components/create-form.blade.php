<div id="documents-form" class="card p-5 mb-5">
    <form action="/documents" method="POST">
        @csrf
        @method('POST')

        <h3>Create new document</h3>
        <hr>
        <div class="d-flex column-gap-3">
            <div class="mb-2 w-100">
                <label for="document_type" class="form-label">Document Type</label>
                <input type="text" class="form-control form-control-sm" placeholder="--" name="document_type" id="document_type" value="{{ old('document_type') ?? '' }}">
                @error('document_type')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-2 w-100">
                <label for="purpose" class="form-label">Purpose</label>
                <input type="text" class="form-control form-control-sm" placeholder="--" name="purpose" id="purpose" value="{{ old('purpose') ?? '' }}">
                @error('purpose')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-2">
            <label for="name" class="form-label">Document Name</label>
            <input type="text" class="form-control form-control-sm" placeholder="--" name="name" id="name" value="{{ old('name') ?? '' }}">
            @error('name')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="d-flex column-gap-3">
            <div class="mb-2 w-100">
                <label for="quantity" class="form-label">Quantity</label>
                <input type="text" class="form-control form-control-sm" placeholder="--" name="quantity" id="quantity" value="{{ old('quantity') ?? '' }}">
                @error('quantity')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-2 w-100">
                <label for="action_needed" class="form-label">Action Needed</label>
                <input type="text" class="form-control form-control-sm" placeholder="--" name="action_needed" id="action_needed" value="{{ old('action_needed') ?? '' }}">
                @error('action_needed')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="d-flex column-gap-3">
            <div class="mb-2 w-100">
                <label for="status" class="form-label">Status</label>
                <input type="text" class="form-control form-control-sm" placeholder="--" name="status" id="status" value="{{ old('status') ?? '' }}">
                @error('status')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-2 w-100">
                <label for="program" class="form-label">Program</label>
                <input type="text" class="form-control form-control-sm" placeholder="--" name="program" id="program" value="{{ old('program') ?? '' }}">
                @error('program')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="d-flex column-gap-3">
            <div class="mb-2 w-100"></div>
            <div class="mb-2 w-100">
                <label for="year_graduated" class="form-label">Graduation Date</label>
                <input type="date" class="form-control form-control-sm" placeholder="--" name="year_graduated" id="year_graduated" value="{{ old('year_graduated') ?? '' }}">
                @error('year_graduated')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-2">
            <label for="remarks" class="form-label">Remarks</label>
            <textarea class="form-control form-control-sm" placeholder="--" name="remarks" id="remarks" rows="4">{{ old('remarks') ?? '' }}</textarea>
            @error('remarks')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="d-flex column-gap-3">
            <div class="mb-2 w-100">
                <label for="date_forwarded" class="form-label">Date Forwarded</label>
                <input type="date" class="form-control form-control-sm" placeholder="--" name="date_forwarded" id="date_forwarded" value="{{ old('date_forwarded') ?? '' }}">
                @error('date_forwarded')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-2 w-100">
                <label for="date_returned" class="form-label">Date Returned</label>
                <input type="date" class="form-control form-control-sm" placeholder="--" name="date_returned" id="date_returned" value="{{ old('date_returned') ?? '' }}">
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
