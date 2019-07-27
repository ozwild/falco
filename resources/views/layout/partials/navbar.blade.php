<nav>
    <div class="nav-wrapper">
        <a href="#" class="brand-logo" style="margin-left: 1em;">{{ config('app.name') }}</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="{{ route('accounts.index') }}">Accounts</a></li>
            <li><a href="{{ route('users.index') }}">Users</a></li>
        </ul>
    </div>
</nav>