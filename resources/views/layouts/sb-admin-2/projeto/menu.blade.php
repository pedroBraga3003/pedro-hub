<ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion " id="accordionSidebar"> <!-- toggled -->
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
        <div class="sidebar-brand-text font-black-ops-one" style="font-weight: normal; font-size: 95%;">
            <!-- <font style="color:#01ADB5">N</font><font style="color:#01BAC3">ossa</font> <font style="color:#01ADB5">F</font><font style="color:#01BAC3">ábrica</font> -->
            Pedro Henrique
        </div>
        <div class="pl-1">
            <i class="fas fa-cog"></i>
        </div>
    </a>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
    <a class="nav-link" href="{{ route('home') }}">
        <i class="fas fa-fw fa-home"></i>
        <span>Inicio</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menu-cadastros" aria-expanded="true" aria-controls="menu-cadastros">
            <i class="fas fa-fw fa-list"></i>
            <span>Cadastros</span>
        </a>
        <div id="menu-cadastros" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Acessar:</h6>
                <a class="collapse-item" href="{{ route('clientes.index') }}"><i class="fas fa-users"></i> Clientes</a>
            </div>
        </div> 
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>