<div class="col-md-3">
    {{-- @foreach($laravelAdminMenus->menus as $section)
        @if($section->items) --}}
            <div class="card">
                <div class="card-header">
                    Menu
                </div>

                <div class="card-body">
                    <ul class="nav flex-column" role="tablist">
                        {{-- @foreach($section->items as $menu) --}}
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" href="{{ route('colleagues.index') }}">Colleagues</a>
                                <a class="nav-link" href="{{ route('notes.index') }}">Notes</a>
                                <a class="nav-link" href="{{ route('companies.index') }}">Companies</a>
                                <a class="nav-link" href="{{ route('customers.index') }}">Customers</a>
                                <a class="nav-link" href="{{ route('statusses.index') }}">Statusses</a>
                            </li>
                        {{-- @endforeach --}}
                    </ul>
                </div>
            </div>
            <br/>
        {{-- @endif
    @endforeach --}}
</div>
