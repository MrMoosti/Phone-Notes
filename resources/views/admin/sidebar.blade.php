<div class="col-md-3">
    <div class="card">
        <div class="card-header">
            Menu
        </div>

        <div class="card-body">
            <ul class="nav flex-column" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link" href="{{ route('colleagues.index') }}">Colleagues</a>
                    <a class="nav-link" href="{{ url('/notes') }}">Notes</a>
                    <a class="nav-link" href="{{ route('companies.index') }}">Companies</a>
                    <a class="nav-link" href="{{ route('customers.index') }}">Customers</a>
                    <a class="nav-link" href="{{ route('statusses.index') }}">Statusses</a>
                </li>
            </ul>
        </div>
    </div>
    <br>
    <div class="card">
        <div class="card-header">
            My Information
        </div>

        <div class="card-body">
            <ul class="nav flex-column" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link" href="{{ url('my/notes') }}">My Notes</a>
                </li>
            </ul>
        </div>
    </div>
</div>
