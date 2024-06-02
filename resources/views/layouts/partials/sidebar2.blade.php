<div id="app">
    <div id="sidebar" class='active'>
        <div class="sidebar-wrapper active">
<div class="sidebar-header">
    <img src={{ asset("dist/assets/images/logo.svg") }} alt="" srcset="">
</div>
<div class="sidebar-menu">
    <ul class="menu">
        
        <li class="sidebar-item {{ request()->is('dashboard2') ? 'active' : '' }} ">
            <a href="{{ route('dashboard2') }}" class='sidebar-link'>
                <i data-feather="home" width="20"></i> 
                <span>Dashboard</span>
            </a>
        </li>

        <li class="sidebar-item {{ request()->is('index','form') ? 'active' : '' }} has-sub">
            <a href="#" class='sidebar-link'>
                <i data-feather="triangle" width="20"></i> 
                <span>Data Master</span>
            </a>
            <ul class="submenu {{ request()->is('index','form') ? 'active' : '' }}">
                <li>
                    <a href="{{ route('index') }}">Data Obat</a>
                </li>                       
                <li>                       
                <li>
                    <a href="">Data Member</a>
                </li>
            </ul>
        </li>

        <li class="sidebar-item {{ request()->is('rekap-pembelian') ? 'active' : '' }}">
            <a href="#" class='sidebar-link'>
                <i data-feather="briefcase" width="20"></i> 
                <span>Rekap Pembelian</span>
            </a>
        </li>
                
        <li class="sidebar-item {{ request()->is('pengelolaan-chat') ? 'active' : '' }} ">
            <a href="{{ route('kelola-chat2') }}" class='sidebar-link'>
                <i data-feather="file-text" width="20"></i> 
                <span>Pengelolaan Chat</span>
            </a>                  
        </li>      
    </ul>
</div>