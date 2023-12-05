<?php 

    $uri = parse_url($_SERVER['REQUEST_URI'])['path'];

    $routes = [
        '/' => 'controllers/dashboard.php',
        '/orders' => 'controllers/orders.php',
        '/customers' => 'controllers/customers.php',
        '/inventory' => 'controllers/inventory.php',
        '/settings' => 'controllers/settings.php',
        '/logout' => 'controllers/logout.php',
        '/signup' => 'controllers/signup.php',
        '/signin' => 'controllers/signin.php'
    ];

    if (array_key_exists($uri, $routes)) {
        require("{$routes[$uri]}");
    }



