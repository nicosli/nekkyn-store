<div class="navmenu navmenu-blue navmenu-fixed-left offcanvas-sm mtbr">
    <div class="menuTit">Navegación</div>
    <ul class="nav navmenu-nav">
        <li class="{{(Request::path()=='/')?'active':''}}">
            <a href="{!! asset('/') !!}">
                <i class="fa fa-desktop"></i> Dashboard
            </a>
        </li>
        <li>
            <a href="{!! asset('/') !!}">
                <i class="fa fa-credit-card"></i> Punto de venta
            </a>
        </li>
        <li>
            <a href="{!! asset('/') !!}">
                <i class="fa fa-barcode"></i> Almacén
            </a>
        </li>
        <li class="{{(Request::path()=='Catalogos')?'active':''}}">
            <a href="{!! asset('/Catalogos') !!}">
                <i class="fa fa-file-text"></i> Catálogos
            </a>
        </li>
        <li class="{{(Request::path()=='Proveedores')?'active':''}}">
            <a href="{!! asset('/Proveedores') !!}">
                <i class="fa fa-truck"></i> Proveedores
            </a>
        </li>
        <li>
            <a href="{!! asset('/') !!}">
                <i class="fa fa-bar-chart"></i> Reportes
            </a>
        </li>
    </ul>
    <div class="menuTit">Acciones</div>
    <ul class="nav navmenu-nav">
        <li class="{{(Request::path()=='Usuarios')?'active':''}}">
            <a href="{!! asset('/Usuarios') !!}">
                <i class="fa fa-users"></i> Usuarios
            </a>
        </li>
        <li>
            <a href="{!! asset('/logout') !!}" class="salirLink">
                <i class="fa fa-sign-out"></i> Cerrar Sesión
            </a>
        </li>
    </ul>
</div>

<div class="navbar navbar-default navbar-fixed-top hidden-md hidden-lg">
    <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".navmenu">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">Nekkyn</a>
</div>  