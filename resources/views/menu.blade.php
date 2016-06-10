<div class="navmenu navmenu-blue navmenu-fixed-left offcanvas-sm mtbr">
    <div class="menuTit">Navegación</div>
    <ul class="nav navmenu-nav">
        <li class="{{(Request::path()=='/')?'active':''}}">
            <a href="{!! asset('/') !!}">
                <i class="fa fa-desktop"></i> Dashboard
            </a>
        </li>
        <li class="{{(Request::path()=='PuntoDeVenta')?'active':''}}">
            <a href="{!! asset('/PuntoDeVenta') !!}">
                <i class="fa fa-shopping-bag"></i> Punto de venta
            </a>
        </li>
        <li class="{{(Request::path()=='Productos')?'active':''}}">
            <a href="{!! asset('/Productos') !!}">
                <i class="fa fa-barcode"></i> Productos
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
        <li class="{{(Request::path()=='Clientes')?'active':''}}">
            <a href="{!! asset('/Clientes') !!}">
                <i class="fa fa-heart"></i> Clientes
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
    <div class="menuTit">Contabiliadad</div>
    <ul class="nav navmenu-nav">
        <li class="{{(Request::path()=='cxc')?'active':''}}">
            <a href="{!! asset('/cxc') !!}">
                <i class="fa fa-fire-extinguisher"></i> Cuentas por Pagar
            </a>
        </li>
        <li class="{{(Request::path()=='cxc')?'active':''}}">
            <a href="{!! asset('/cxc') !!}">
                <i class="fa fa-magnet"></i> Cuentas por Cobrar
            </a>
        </li>
        <li class="{{(Request::path()=='Facturacion')?'active':''}}">
            <a href="{!! asset('/Facturacion') !!}">
                <i class="fa fa-file-pdf-o"></i> Facturación
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