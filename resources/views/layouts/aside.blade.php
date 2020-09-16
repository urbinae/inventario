<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
        <span class="brand-text font-weight-light">COPUSD</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               @can('escritorio')
                <li class="nav-item">
                    <a href="/" class="nav-link">
                        <i class="nav-icon fa fa-th"></i>
                        <p>
                            Escritorio
                        </p>
                    </a>
                </li>
                @endcan
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-pie-chart"></i>
                        <p>
                            Inventario
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @can('categories.index')
                        <li class="nav-item">
                            <a href="{{ route('categories.index') }}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Categorias</p>
                            </a>
                        </li>
                        @endcan
                        @can('products.index')
                        <li class="nav-item">
                            <a href="{{ route('products.index') }}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Productos</p>
                            </a>
                        </li>
                        @endcan
                        @can('purchases.index')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('purchases.index') }}">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Entradas</p>
                            </a>
                        </li>
                        @endcan
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-tree"></i>
                        <p>
                            Ventas
                            <i class="fa fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @can('products.index')
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Vender</p>
                            </a>
                        </li>
                        @endcan
                    </ul>
                </li>

                @can('admin')
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-table"></i>
                        <p>
                            Reportes
                            <i class="fa fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Reportes ventas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Reportes compras</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Reportes clientes</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Reportes proveedores</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Reportes empleados</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endcan
                @can('admin')
                <li class="nav-header">Administracion</li>

                @endcan
                @can('admin')
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-edit"></i>
                        <p>Gerencia
                            <i class="fa fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('users.index')}}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Usuarios</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('roles.index')}}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Roles</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('providers.index')}}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Proveedores</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Clientes</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endcan

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>