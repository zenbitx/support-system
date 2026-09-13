<header class="admin-topbar">

    <div class="d-flex align-items-center">

        {{-- Mobile Menu --}}
        <button type="button"
                class="btn btn-light d-lg-none me-3"
                data-bs-toggle="offcanvas"
                data-bs-target="#mobileSidebar">

            <i class="fa fa-bars"></i>

        </button>


        {{-- Page Title --}}
        <div>

            <h5 class="mb-0">
                @yield('page-title', 'Dashboard')
            </h5>

            <small class="text-muted d-none d-md-block">
                @yield('page-description', 'Welcome to your admin panel')
            </small>

        </div>

    </div>


    {{-- Right Side --}}
    <div class="d-flex align-items-center gap-2">


        {{-- Search --}}
        <button class="btn btn-light d-none d-md-inline-flex">

            <i class="fa fa-search"></i>

        </button>


        {{-- Notifications --}}
        <button class="btn btn-light position-relative">

            <i class="fa fa-bell"></i>

            <span class="position-absolute top-0 start-100 translate-middle
                         badge rounded-pill bg-danger">

                3

            </span>

        </button>


        {{-- User Dropdown --}}
        <div class="dropdown">

            <button class="btn btn-light dropdown-toggle d-flex align-items-center"
                    type="button"
                    data-bs-toggle="dropdown">

                <span class="topbar-avatar me-2">

                    {{ strtoupper(substr(auth()->user()->name ?? 'A', 0, 1)) }}

                </span>

                <span class="d-none d-md-inline">

                    {{ auth()->user()->name ?? 'Admin' }}

                </span>

            </button>


            <ul class="dropdown-menu dropdown-menu-end">

                <li>

                    <a class="dropdown-item"
                       href="#">

                        <i class="fa fa-user me-2"></i>

                        Profile

                    </a>

                </li>

                <li>

                    <a class="dropdown-item"
                       href="#">

                        <i class="fa fa-cog me-2"></i>

                        Settings

                    </a>

                </li>

                <li>
                    <hr class="dropdown-divider">
                </li>

                <li>

                    <form method="POST"
                          action="{{ route('logout') }}">

                        @csrf

                        <button type="submit"
                                class="dropdown-item text-danger">

                            <i class="fa fa-sign-out me-2"></i>

                            Logout

                        </button>

                    </form>

                </li>

            </ul>

        </div>

    </div>

</header>
