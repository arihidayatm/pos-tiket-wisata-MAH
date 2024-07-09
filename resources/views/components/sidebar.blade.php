<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ url('home') }}">WISATA MAHDEV</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ url('home') }}">MAH</a>
        </div>
        <ul class="sidebar-menu">
            <li class="nav-item  ">
                <a href="{{ url('home') }}" class="nav-link ">
                    <i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>

            <li class="menu-header">Masters</li>
            <li class="nav-item ">
                <a href="{{ route('users.index') }}" class="nav-link ">
                    <i class="fas fa-users"></i>
                    <span>Users</span></a>
            </li>

            <li class="nav-item ">
                <a href="{{ route('categories.index') }}" class="nav-link ">
                    <i class="fas fa-newspaper"></i>
                    <span>Categories</span></a>
            </li>

            <li class="nav-item ">
                <a href="{{ route('products.index') }}" class="nav-link ">
                    <i class="fas fa-ticket"></i>
                    <span>Tickets</span></a>
            </li>

            <li class="nav-item ">
                <a href="{{ route('orders.index') }}" class="nav-link ">
                    <i class="fas fa-file"></i>
                    <span>Orders</span></a>
            </li>



    </aside>
</div>
