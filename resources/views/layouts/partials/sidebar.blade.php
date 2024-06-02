<div id="app">
    <div id="sidebar" class='active'>
        <div class="sidebar-wrapper active">
<div class="sidebar-header">
    <img src="{{ asset('dist/assets/images/logo.svg') }}" alt="" srcset="">
</div>
<div class="sidebar-menu">
    <ul class="menu">
        
        <li class="sidebar-item {{ request()->is('/') ? 'active' : '' }} ">
            <a href="/" class='sidebar-link'>
                <i data-feather="home" width="20"></i> 
                <span>Dashboard</span>
            </a>
        </li>

        <li class="sidebar-item {{ request()->is('pegawai','tambahpegawai') ? 'active' : '' }} has-sub">
            <a href="#" class='sidebar-link'>
                <i data-feather="triangle" width="20"></i> 
                <span>Data Master</span>
            </a>
            <ul class="submenu {{ request()->is('pegawai','tambahpegawai') ? 'active' : '' }}">
                <li>
                    <a href="">Data Obat</a>
                </li>                       
                <li>
                    <a href="{{ route('pegawai') }}">Data Pegawai</a>
                </li>                        
                <li>
                    <a href="">Data Member</a>
                </li>
            </ul>
        </li>

        <li class="sidebar-item {{ request()->is('#') ? 'active' : '' }}">
            <a href="#" class='sidebar-link'>
                <i data-feather="briefcase" width="20"></i> 
                <span>Rekap Pembelian</span>
            </a>
        </li>
                
        <li class="sidebar-item {{ request()->is('#') ? 'active' : '' }} has-sub">
            <a href="#" class='sidebar-link'>
                <i data-feather="file-text" width="20"></i> 
                <span>Pengelolaan Chat</span>
            </a>                   
            <ul class="submenu {{ request()->is('#') ? 'active' : '' }}">                        
                <li>
                    <a href="form-element-input.html">History Chat</a>
                </li>
                
                <li>
                    <a href="form-element-input-group.html">Template Chat</a>
                </li>
            </ul>                    
        </li>      
    </ul>
</div>