<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul class="metismenu list-unstyled" id="side-menu">
                <li>
                    <a href="{{ route('root') }}" class="waves-effect">
                        <i class="bx bx-home"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('assignments.index') }}" class="waves-effect">
                        <i class="bx bx-task"></i>
                        <span>Assignment</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('solutions.index') }}" class="waves-effect">
                        <i class="mdi mdi-book-sync-outline"></i>
                        <span>Solution</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('contacts.index') }}" class="waves-effect">
                        <i class="mdi mdi-message-outline"></i>
                        <span>Contact</span>
                    </a>
                </li>


                @can('setting.index')
                    <li class="menu-title">Settings</li>
                    @can('usermanagements.index')
                        <li>
                            <a href="{{ route('usermanagements.index') }}" class="waves-effect">
                                <i class="mdi mdi-account"></i>
                                <span>Users</span>
                            </a>
                        </li>
                    @endcan
                    @can('roles.index')
                        <li>
                            <a href="{{ route('roles.index') }}" class="waves-effect">
                                <i class="bx bx-user-circle"></i>
                                <span>Role</span>
                            </a>
                        </li>
                    @endcan
                    @can('emailtemplate.index')
                        <li>
                            <a href="{{ route('emailtemplate.index') }}" class="waves-effect">
                                <i class="mdi mdi-email"></i>
                                <span>Email Template</span>
                            </a>
                        </li>
                    @endcan
                @endcan
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
