<style>
    .nav-link {
        color: black;
    }
</style>
<nav class="navbar navbar-expand-lg bg-Secondary">
    <div class="container">
        <h5 class="fw-bold">Navbar</h5>
        <div class="navbar-nav ms-auto">
            <a class="fw-bold nav-link mx-2" href="{{ route ('/') }}">Home</a>
            <a class="fw-bold nav-link mx-2" href="{{ route ('contact') }}">Contact</a>
            @if(session()->has('name'))
            <div class="d-flex">
                @if (session("role")=='admin')
                <a class="fw-bold nav-link mx-2" href="{{ route ('adminDashboard') }}">Dashboard</a>
                @else
                <a class="fw-bold nav-link mx-2" href="{{ route ('userDashboard') }}">Dashboard</a>
                @endif
                <a style="color: red" class="fw-bold nav-link mx-2" href="{{ route ('logout') }}">Logout</a>
            </div>
            @else
            <a class="fw-bold nav-link mx-2" href="{{ route ('login') }}">Login</a>
            @endif
        </div>
    </div>
</nav>