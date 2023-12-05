<link rel="stylesheet" href="../assets/styles/sidebar.css">

<div class="sidebar">
    <div class="logo">
        <img class="logo-icon" src="" alt="">
        <h3 class="logo-name">BRAND</h3>
    </div>

    <ul class="nav-menu">
        <div class="top-menu">
            <a class="link <?= urlIs('/') ? 'active' : 'deactivate' ?>" href="/"><li class="nav-item">Dashboard</li></a>
            <a class="link <?= urlIs('/orders') ? 'active' : 'deactivate' ?>" href="/orders"><li class="nav-item">Orders</li></a>
            <a class="link <?= urlIs('/customers') ? 'active' : 'deactivate' ?>" href="/customers"><li class="nav-item">Customers</li></a>
            <a class="link <?= urlIs('/inventory') ? 'active' : 'deactivate' ?>" href="/inventory"><li class="nav-item">Inventory</li></a>
        </div>

        <div class="bottom-menu">
            <a class="link <?= urlIs('/settings') ? 'active' : 'deactivate' ?>" href="/settings"><li class="nav-item">Setting</li></a>
            <a class="link <?= urlIs('/logout') ? 'active' : 'deactivate' ?>" href="/logout"><li class="nav-item">Logout</li></a>
        </div>
    </ul>
</div>