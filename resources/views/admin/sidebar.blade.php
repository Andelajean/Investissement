<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse slimscrollsidebar">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
                    </span>
                </div>
            </li>
            <li class="user-pro">
                <a href="#" class="waves-effect"><img src="{{ asset('image/profil.jpg') }}" alt="user-img" class="img-circle"> <span class="hide-menu">ADMIN<span class="fa arrow"></span></span>
                </a>
                <ul class="nav nav-second-level">
                    <li><a href="{{ route('admin.profile') }}"><i class="ti-user"></i> My Profile</a></li>
                    <li><a href="{{ route('admin.balance') }}"><i class="ti-wallet"></i> My Balance</a></li>
                    <li><a href="{{ route('admin.contacts') }}"><i class="ti-email"></i> Inbox</a></li>
                    <li><a href="{{ route('admin.settings') }}"><i class="ti-settings"></i> Account Setting</a></li>
                    <li>
                        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fa fa-power-off"></i> Logout
                        </a>
                    </li>
                </ul>

            </li>
            <li><a href="{{ route('admin.depots') }}" class="waves-effect"><i class="mdi mdi-av-timer fa-fw"></i> <span class="hide-menu">Gestion des depots</span></a></li>
            <li><a href="{{ route('admin.transaction_retrait') }}" class="waves-effect"><i class="mdi mdi-av-timer fa-fw"></i> <span class="hide-menu">Demande de retrait</span></a></li>
           <li><a href="{{ route('admin.transaction_all') }}" class="waves-effect"><i class="mdi mdi-table fa-fw"></i> <span class="hide-menu">Transactions</span></a></li>
        </ul>
    </div>
</div>
