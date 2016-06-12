<div class="navmenu navmenu-blue navmenu-fixed-left offcanvas-sm mtbr">
    <div class="menuTit">Nav<span>egación</span></div>
    <ul class="nav navmenu-nav">
        <li class="{{(Request::path()=='/')?'active':''}}">
            <a href="{!! asset('/') !!}" data-toggle="tooltip" data-placement="right" title="Dashboard">
                <i class="fa fa-desktop"></i> <span>Dashboard</span>
            </a>
        </li>
        <li class="{{(Request::path()=='PuntoDeVenta')?'active':''}}">
            <a href="{!! asset('/PuntoDeVenta') !!}" data-toggle="tooltip" data-placement="right" title="Punto de venta">
                <i class="fa fa-shopping-bag"></i> <span>Punto de venta</span>
            </a>
        </li>
        <li class="{{(Request::path()=='Productos')?'active':''}}">
            <a href="{!! asset('/Productos') !!}" data-toggle="tooltip" data-placement="right" title="Productos">
                <i class="fa fa-barcode"></i> <span>Productos</span>
            </a>
        </li>
        <li class="{{(Request::path()=='Catalogos')?'active':''}}">
            <a href="{!! asset('/Catalogos') !!}" data-toggle="tooltip" data-placement="right" title="Catálogos">
                <i class="fa fa-file-text"></i> <span>Catálogos</span>
            </a>
        </li>
        <li class="{{(Request::path()=='Proveedores')?'active':''}}">
            <a href="{!! asset('/Proveedores') !!}" data-toggle="tooltip" data-placement="right" title="Proveedores">
                <i class="fa fa-truck"></i> <span>Proveedores</span>
            </a>
        </li>
        <li class="{{(Request::path()=='Clientes')?'active':''}}">
            <a href="{!! asset('/Clientes') !!}" data-toggle="tooltip" data-placement="right" title="Clientes">
                <i class="fa fa-heart"></i> <span>Clientes</span>
            </a>
        </li>
        <li class="dropdown {!! Util::menuActive(Request::path(), 'Reportes', 'keep-open open') !!}">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-bar-chart"></i> <span>Reportes</span> <b class="caret"></b>
            </a>
            <ul class="dropdown-menu navmenu-nav" role="menu">
                <li class="{{(Request::path()=='Reportes/Ventas')?'active':''}}">
                    <a href="{!! asset('/Reportes/Ventas') !!}">
                    <i class="fa fa-caret-right"></i> Ventas</a>
                </li>
                <li><a href="{!! asset('/') !!}"><i class="fa fa-caret-right"></i> Comisiones</a></li>
                <li><a href="{!! asset('/') !!}"><i class="fa fa-caret-right"></i> Inventario</a></li>
            </ul>
        </li>
    </ul>
    <div class="menuTit">Acc<span>iones</span></div>
    <ul class="nav navmenu-nav">
        <li class="{{(Request::path()=='Usuarios')?'active':''}}">
            <a href="{!! asset('/Usuarios') !!}" data-toggle="tooltip" data-placement="right" title="Usuarios">
                <i class="fa fa-users"></i> <span>Usuarios</span>
            </a>
        </li>
        <li>
            <a href="{!! asset('/logout') !!}" class="salirLink" data-toggle="tooltip" data-placement="right" title="Cerrar Sesión">
                <i class="fa fa-sign-out"></i> <span>Cerrar Sesión</span>
            </a>
        </li>
    </ul>
    <div class="menuTit">Con<span>tabiliadad</span></div>
    <ul class="nav navmenu-nav">
        <li class="{{(Request::path()=='cxc')?'active':''}}">
            <a href="{!! asset('/cxc') !!}" data-toggle="tooltip" data-placement="right" title="Cuentas por Pagar">
                <i class="fa fa-fire-extinguisher"></i> <span>Cuentas por Pagar</span>
            </a>
        </li>
        <li class="{{(Request::path()=='cxc')?'active':''}}">
            <a href="{!! asset('/cxc') !!}" data-toggle="tooltip" data-placement="right" title="Cuentas por Cobrar">
                <i class="fa fa-magnet"></i> <span>Cuentas por Cobrar</span>
            </a>
        </li>
        <li class="{{(Request::path()=='Facturacion')?'active':''}}">
            <a href="{!! asset('/Facturacion') !!}" data-toggle="tooltip" data-placement="right" title="Facturación">
                <i class="fa fa-file-pdf-o"></i> <span>Facturación</span>
            </a>
        </li>
    </ul>
    <div class="wrapp-colapse-menu">
        <a href="#" class="colpase-menu" data="1"><span>Esconder Menú</span> <i class="fa fa-angle-double-left"></i></a>
    </div>
</div>

<div class="navbar navbar-default navbar-fixed-top hidden-md hidden-lg">
    <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".navmenu">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">Nekkyn</a>
</div>  