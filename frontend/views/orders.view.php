<?php require('partials/head.php'); ?>
<link rel="stylesheet" href="../assets/styles/orders.view.css">

    <?php require('components/sidebar.php'); ?>
    <?php require('components/navbar.php'); ?>

    <?php require('actions/newOrder.php'); ?>

    <div class="container">
        <div class="content-block">
            <div class="content-header">
                <h4>Orders Summary</h4>
                
                <button class="open-adding">Create a New Order</button>
            </div>

            <div class="content-overview">
                <div class="overview-box box-1">
                    <div class="summary-container">
                        <img src="" alt="">
                        <span>This Week</span>
                    </div>
                    <div class="value-container">
                        <div class="value-box">
                            <span class="value-name" style="display: block;">All Orders</span>
                            <span class="value-num">0</span>
                        </div>
                        <div class="value-box">
                            <span class="value-name" style="display: block;">Pending</span>
                            <span class="value-num">0</span>
                        </div>
                        <div class="value-box">
                            <span class="value-name" style="display: block;">Completed</span>
                            <span class="value-num">0</span>
                        </div>
                    </div>
                </div>

                <div class="overview-box box-2">
                    <div class="summary-container">
                        <img src="" alt="">
                        <span>This Week</span>
                    </div>
                    <div class="value-container">
                        <div class="value-box">
                            <span class="value-name" style="display: block;">Canceled</span>
                            <span class="value-num">0</span>
                        </div>
                        <div class="value-box">
                            <span class="value-name" style="display: block;">Returned</span>
                            <span class="value-num">0</span>
                        </div>
                        <div class="value-box">
                            <span class="value-name" style="display: block;">Damaged</span>
                            <span class="value-num">0</span>
                        </div>
                    </div>
                </div>

                <div class="overview-box box-3">
                    <div class="summary-container">
                        <img src="" alt="">
                        <span>This Week</span>
                    </div>
                    <div class="value-container">
                        <div class="value-box">
                            <span class="value-name" style="display: block;">Abandoned cart</span>
                            <span class="value-num">0</span>
                        </div>
                        <div class="value-box">
                            <span class="value-name" style="display: block;">Customers</span>
                            <span class="value-num">0</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="table-bg">
                <div class="no-order-block">
                    <img src="" alt="">
                    <h3>No Order Yet?</h3>
                    <p>
                        Add product to your store and start <br>
                        selling to see orders here.
                    </p>
                    <button class="open-modal">New Order</button>
                </div>

                <?php require('actions/filterButton.php'); ?>

                <div class="table-block">
                    <div class="order-header">
                        <h3>Customers Order</h3>
                        <div class="action-button">
                            <input type="text" placeholder="Search" name="search">
                            <button class="open-filter">Filter</button>
                        </div>
                    </div>

                    <table>
                        <thead>
                            <tr class="table-header">
                                <th>Customers Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Oders</th>
                                <th>Order Total</th>
                                <th>Customers Since</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div> 
        </div>
    </div>


<?php
    require('partials/scripts.php');
    require('partials/foot.php'); 
?>