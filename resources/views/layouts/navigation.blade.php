<!-- Top bar START -->
<nav class="py-0 navbar top-bar navbar-light border-bottom py-xl-3">
    <div class="p-0 container-fluid">
        <div class="d-flex align-items-center w-100">
            <!-- Logo START -->
            <div class="d-flex align-items-center d-xl-none">
                <a class="navbar-brand" href="/dashboard">
                    <img class="light-mode-item navbar-brand-item h-30px" src="{{ asset('assets/images/logo.png') }}" alt="">
                </a>
            </div>
            <!-- Logo END -->
            <!-- Toggler for sidebar START -->
            <div class="navbar-expand-xl sidebar-offcanvas-menu">
                <button class="navbar-toggler me-auto" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar" aria-expanded="false"
                    aria-label="Toggle navigation" data-bs-auto-close="outside">
                    <i class="mb-0 bi bi-text-right fa-fw h2 lh-0 rtl-flip" data-bs-target="#offcanvasMenu"> </i>
                </button>
            </div>
            <!-- Toggler for sidebar END -->
            <!-- Top bar left -->
            <div class="navbar-expand-lg ms-auto ms-xl-0">

                <!-- Toggler for menubar START -->
                <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTopContent" aria-controls="navbarTopContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-animation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>
                <!-- Toggler for menubar END -->
            </div>
            <!-- Top bar left END -->
            <!-- Top bar right START -->
            <div class="ms-xl-auto">
                <ul class="flex-row navbar-nav align-items-center">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                    <a
                    :href="route('logout')" 
                    onclick="event.preventDefault();
                    this.closest('form').submit();"
                    class="btn btn-danger btn-sm">
                       <i class="ml-1 bi bi-power"></i> Se déconnecter
                    </a>
                    </form>
                </ul>
            </div>
            <!-- Top bar right END -->
        </div>
    </div>
</nav>
<!-- Top bar END -->