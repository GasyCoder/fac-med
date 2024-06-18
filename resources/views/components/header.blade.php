<!-- Header START -->
<header class="navbar-light navbar-sticky">
    <!-- Nav START -->
    <nav class="navbar navbar-expand z-index-9">
        <div class="container">
            <!-- Logo START -->
            <a href="/">
                <img src="{{ asset('assets/images/logo.jpg') }}" width="82" height="82" alt="logo">
                <span style="display: inline;">Faculté de Médecine</span>
            </a>
            @auth
            <a href="/dashboard" class="btn btn-success btn-sm">
                <i class="ml-1 bi bi-person-circle"></i> Connecté Admin
            </a>
            @endauth
        </div>
    </nav>
    <!-- Nav END -->
    <hr class="my-0">
</header>
<!-- Header END -->