 <div class="vertical-menu">
    <div data-simplebar class="h-100">
        @auth()
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li>
                    <a href="{{ route('dashboard') }}" class="waves-effect">
                        <i class="ri-dashboard-line"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                  @canany(['users.index', 'roles.index', 'permissions.index'])
                    <li>
                        <a href="javascript: void(0);" class="waves-effect">
                            <i class="ri-account-circle-line"></i>
                            <span>Users</span>
                            <i class="float-right has-arrow"></i>
                        </a>
                        <ul class="sub-menu ml-3" aria-expanded="false">
                            @can(['users.index'])
                                <li><a class="nav-link" href="{{ route('users.index') }}"><i class=" ri-user-add-line"></i>
                                        Manage Users</a></li>
                            @endcan
                            @can(['permissions.index'])
                                <li><a class="nav-link" href="{{ route('permissions.index') }}"> <i class=" ri-lock-2-line"></i>
                                        Manage permission</a></li>
                            @endcan
                            @can(['roles.index'])
                                <li><a class="nav-link" href="{{ route('roles.index') }}"><i class="ri-share-line"></i> Manage
                                        Role</a></li>
                            @endcan
                        </ul>
                    </li>
                @endcanany


            </ul>
        </div>
        <!-- Sidebar -->
         @endauth
    </div>
</div>
