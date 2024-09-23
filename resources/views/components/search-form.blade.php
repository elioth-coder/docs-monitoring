<div class="card px-4">
    <form class="my-4" action="/documents/search" method="GET">
        <div class="row">
            <div class="col d-flex">
                <div class="d-flex">
                    <select name="limit" class="form-select">
                        <option value="10" {{ request('limit') == 10 ? 'selected' : '' }}>10</option>
                        <option value="20" {{ request('limit') == 20 ? 'selected' : '' }}>20</option>
                        <option value="50" {{ request('limit') == 50 ? 'selected' : '' }}>50</option>
                        <option value="100" {{ request('limit') == 100 ? 'selected' : '' }}>100</option>
                    </select>
                </div>
                <div class="d-flex">
                    <input name="from"
                        type="date"
                        class="form-control mx-2"
                        value="{{ request()->query('from') }}"
                    />
                </div>
                <div class="d-flex">
                    <input name="to"
                        class="form-control mx-2"
                        type="date"
                        value="{{ request()->query('to') }}"
                    />
                </div>
            </div>
            <div class="col">
                <div class="input-group">
                    <input name="query"
                        type="search"
                        class="form-control"
                        placeholder="Search name of document."
                        aria-label="Recipient's username"
                        aria-describedby="basic-addon2"
                        value="{{ request()->query('query') }}"
                    />
                    <div class="input-group-append">
                        <button class="btn btn-warning" type="submit">
                            <i class="bi bi-search"></i>
                            Search
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row hide-columns m-0 mt-4">
            @php
                $columns = ['document_type', 'purpose', 'name', 'program', 'year_graduated', 'quantity', 'action_needed', 'date_forwarded', 'date_returned', 'status', 'remarks'];
            @endphp
            <div class="form-check form-check-inline col">
                <input onchange="toggleCheck(this);" class="form-check-input" type="checkbox" id="hide_columns_checkbox">
                <label class="form-check-label fw-bold" for="hide_columns_checkbox">HIDE COLUMNS</label>
            </div>
            @foreach($columns as $column)
                @php
                    $column_name = strtoupper(str_replace('_', ' ', $column));

                    if($column_name == 'YEAR GRADUATED') {
                        $column_name = 'GRADUATION DATE';
                    }
                @endphp
                <div class="form-check form-check-inline col">
                    <input onchange="toggleColumn(this);" class="form-check-input" name="hidden_columns[]" type="checkbox" id="{{ $column }}_checkbox" value="{{ $column }}">
                    <label class="form-check-label" for="{{ $column }}_checkbox">{{ ($column_name) }}</label>
                </div>
                @if($loop->index==4)
                    <div class="w-100"></div>
                @endif
            @endforeach
        </div>
    </form>
</div>
