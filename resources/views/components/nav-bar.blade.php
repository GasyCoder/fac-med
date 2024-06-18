<!-- Sidebar START -->
<nav class="navbar sidebar navbar-expand-xl navbar-dark bg-dark">

    <!-- Navbar brand for xl START -->
    <div class="border-b d-flex align-items-center">
        <a class="navbar-brand" href="/dashboard">
            <img class="navbar-brand-item" src="{{ asset('assets/images/logo.png') }}" 
            width="80" height="80" alt="">
            Faculté de Médecine
        </a>
    </div>
    <hr>
    <!-- Navbar brand for xl END -->
    @php
        $candidatValide     = \App\Models\Candidate::where('status', 'Valide')->count();
        $candidatNoValide   = \App\Models\Candidate::where('status', 'NotValide')->count();
    @endphp
    <div class="flex-row offcanvas offcanvas-start custom-scrollbar h-100" data-bs-backdrop="true" tabindex="-1"
        id="offcanvasSidebar">
        <div class="offcanvas-body sidebar-content d-flex flex-column bg-dark">

            <!-- Sidebar menu START -->
            <ul class="navbar-nav flex-column" id="navbar-sidebar">

                <!-- Menu item 1 -->
                <li class="nav-item"><a href="/dashboard" class="nav-link @if(request()->routeIs('dashboard')) active @endif"><i
                  class="bi bi-house fa-fw me-2"></i>Tableau de bord</a></li>

                <!-- Title -->
                <li class="my-2 nav-item ms-2">Pages</li>

                <!-- Menu item 4 -->
                <li class="nav-item">
                    <a class="nav-link @if(request()->routeIs('c_valide')) active @endif" data-bs-toggle="collapse" href="#collapseinstructors" role="button"
                        aria-expanded="false" aria-controls="collapseinstructors">
                        <i class="fas fa-user-tie fa-fw me-2"></i>Candidats
                    </a>
                    <!-- Submenu -->
                    <ul class="nav collapse flex-column show" id="collapseinstructors" data-bs-parent="#navbar-sidebar">
                        {{-- <li class="nav-item"> 
                            <a class="nav-link" href="#">Ajouter</a></li> --}}
                        <li class="nav-item"> 
                            <a class="nav-link" href="{{ route('c_valide') }}">Validé
                                <span class="badge text-bg-success rounded-circle ms-2">{{ $candidatValide }}</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Non-validé
                                <span class="badge text-bg-danger rounded-circle ms-2">{{ $candidatNoValide }}</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Menu item 7 -->
                {{-- <li class="nav-item"> 
                <a class="nav-link" href="#">
                    <i class="fas fa-user-cog fa-fw me-2"></i>Paramètres
                </a>
                </li> --}}
            </ul>
            <!-- Sidebar menu end -->

            <!-- Sidebar footer START -->
            <div class="px-3 pt-3 mt-auto">
                <div class="d-flex align-items-center justify-content-between text-primary-hover">
                    <a class="mb-0 text-white h5 btn btn-primary btn-sm" href="/" data-bs-toggle="tooltip" data-bs-placement="top"
                        title="Accueil">
                        <i class="bi bi-globe"></i>
                    </a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                    <button class="mb-0 text-white h5 btn btn-danger btn-sm" :href="route('logout')" 
                    onclick="event.preventDefault();
                    this.closest('form').submit();"
                    data-bs-toggle="tooltip" data-bs-placement="top"
                        title="Déconnexion">
                        <i class="bi bi-power"></i>
                    </button>
                    </form>
                </div>
            </div>
            <!-- Sidebar footer END -->
        </div>
    </div>
</nav>
<!-- Sidebar END -->