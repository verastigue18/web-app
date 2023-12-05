<?php require('partials/head.php'); ?>
<link rel="stylesheet" href="../assets/styles/orders.view.css">

    <?php require('components/sidebar.php'); ?>
    <?php require('components/navbar.php'); ?>

    <?php require('actions/newCustomer.php'); ?>

    <div class="container">
        <div class="content-block">
            <div class="content-header">
                <h4>Customers Summary</h4>
                
                <button class="open-adding">Add New Customers</button>
            </div>

            <div class="content-overview">
                <div class="overview-box box-1" style="width: 100%;">
                    <div class="summary-container">
                        <img src="" alt="">
                        <span>This Week</span>
                    </div>
                    <div class="value-container">
                        <div class="value-box">
                            <span class="value-name" style="display: block;">All Customers</span>
                            <span class="value-num">0</span>
                        </div>
                        <div class="value-box">
                            <span class="value-name" style="display: block;">Active</span>
                            <span class="value-num">0</span>
                        </div>
                        <div class="value-box">
                            <span class="value-name" style="display: block;">In-active</span>
                            <span class="value-num">0</span>
                        </div>
                    </div>
                </div>

                <div class="overview-box box-3" style="width: 100%;">
                    <div class="summary-container">
                        <img src="" alt="">
                        <span>This Week</span>
                    </div>
                    <div class="value-container">
                        <div class="value-box">
                            <span class="value-name" style="display: block;">New Customers</span>
                            <span class="value-num">0</span>
                        </div>
                        <div class="value-box">
                            <span class="value-name" style="display: block;">Purchasing</span>
                            <span class="value-num">0</span>
                        </div>
                        <div class="value-box">
                            <span class="value-name" style="display: block;">Abandoned Carts</span>
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
                            <button class='open-filter'>Filter</button>
                        </div>
                    </div>

                    <table>
                        <thead>
                            <tr class="table-header">
                                <th>Customers Name</th>
                                <th>Order Date</th>
                                <th>Order Type</th>
                                <th>Tracking Id</th>
                                <th>Oder Total</th>
                                <th>Action</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Unclestan Lee</td>
                                <td>11/27/223</td>
                                <td>Home Delivery</td>
                                <td>123456789</td>
                                <td>$ 23.2</td>
                                <td>Completed</td>
                                <td>Completed</td>
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