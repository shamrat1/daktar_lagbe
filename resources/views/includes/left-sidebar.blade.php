<!-- Brand Logo -->
<a href="{{ url('/') }}" class="brand-link">
    <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
</a>

<!-- Sidebar -->
<div class="sidebar nano">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block">Alexander Pierce</a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview {{ isActive(['/','dashboard*']) }}">
                <a href="#" class="nav-link {{ isActive(['dashboard*','/']) }}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="#" class="nav-link {{ isActive('/') }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Dashboard v1</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link {{ isActive('dashboard2') }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Dashboard v2</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link {{ isActive('dashboard3') }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Dashboard v3</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item {{ isActive(['widget*']) }}">
                <a href="#" class="nav-link {{ isActive('widgets') }}">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                        Widgets
                        <span class="right badge badge-danger">New</span>
                    </p>
                </a>
            </li>
            <li class="nav-item has-treeview {{ isActive(['chart*']) }}">
                <a href="#" class="nav-link {{ isActive(['chart*']) }}">
                    <i class="nav-icon fas fa-chart-pie"></i>
                    <p>
                        Charts
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="#" class="nav-link {{ isActive('chart/chartjs') }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>ChartJS</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link {{ isActive('chart/flot') }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Flot</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link {{ isActive('chart/inline-chart') }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Inline</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item has-treeview {{ isActive('ui*') }}">
                <a href="#" class="nav-link {{ isActive('ui*') }}">
                    <i class="nav-icon fas fa-tree"></i>
                    <p>
                        UI Elements
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="#" class="nav-link {{ isActive('ui/general') }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>General</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link {{ isActive('ui/icons') }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Icons</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link {{ isActive('ui/buttons') }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Buttons</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link {{ isActive('ui/sliders') }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Sliders</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item has-treeview {{ isActive('form*') }}">
                <a href="#" class="nav-link {{ isActive('form*') }}">
                    <i class="nav-icon fas fa-edit"></i>
                    <p>
                        Forms
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="#" class="nav-link {{ isActive('form/general') }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>General Elements</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link {{ isActive('form/advance') }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Advanced Elements</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link {{ isActive('form/editor') }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Editors</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item has-treeview {{ isActive(['table*']) }}">
                <a href="#" class="nav-link {{ isActive(['table*']) }}">
                    <i class="nav-icon fas fa-table"></i>
                    <p>
                        Tables
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="#" class="nav-link {{ isActive('table/simple') }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Simple Tables</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link {{ isActive('table/data') }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Data Tables</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-header">EXAMPLES</li>
            <li class="nav-item">
                <a href="#" class="nav-link {{ isActive('calendar') }}">
                    <i class="nav-icon fas fa-calendar-alt"></i>
                    <p>
                        Calendar
                        <span class="badge badge-info right">2</span>
                    </p>
                </a>
            </li>
            <li class="nav-item has-treeview {{ isActive(['mailbox*']) }}">
                <a href="#" class="nav-link {{ isActive(['mailbox*']) }}">
                    <i class="nav-icon far fa-envelope"></i>
                    <p>
                        Mailbox
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="#" class="nav-link {{ isActive('mailbox/inbox') }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Inbox</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link {{ isActive('mailbox/compose') }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Compose</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link {{ isActive('mailbox/read') }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Read</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item has-treeview {{ isActive(['page*']) }}">
                <a href="#" class="nav-link {{ isActive(['page*']) }}">
                    <i class="nav-icon fas fa-book"></i>
                    <p>
                        Pages
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="#" class="nav-link {{ isActive('page/invoice') }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Invoice</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link {{ isActive('page/profile') }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Profile</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link {{ isActive('page/login') }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Login</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link {{ isActive('page/register') }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Register</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link {{ isActive('page/lockscreen') }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Lockscreen</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item has-treeview {{ isActive(['extra*']) }}">
                <a href="#" class="nav-link {{ isActive(['extra*']) }}">
                    <i class="nav-icon far fa-plus-square"></i>
                    <p>
                        Extras
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="#" class="nav-link {{ isActive('extra/404') }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Error 404</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link {{ isActive('extra/500') }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Error 500</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link {{ isActive('extra/blank') }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Blank Page</p>
                        </a>
                    </li>
                    {{--<li class="nav-item">--}}
                        {{--<a href="{{ action('ExtraController@starter') }}" class="nav-link {{ isActive('extra/starter') }}">--}}
                            {{--<i class="far fa-circle nav-icon"></i>--}}
                            {{--<p>Starter Page</p>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                </ul>
            </li>
            <li class="nav-header">MISCELLANEOUS</li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-file"></i>
                    <p>Documentation</p>
                </a>
            </li>
            <li class="nav-header">LABELS</li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon far fa-circle text-danger"></i>
                    <p class="text">Important</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon far fa-circle text-warning"></i>
                    <p>Warning</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon far fa-circle text-info"></i>
                    <p>Informational</p>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
