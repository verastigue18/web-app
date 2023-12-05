<?php require('partials/head.php'); ?>
<link rel="stylesheet" href="../assets/styles/dashboard.view.css">

    <?php require('components/sidebar.php'); ?>
    <?php require('components/navbar.php'); ?>

    <div class="container">
        <div class="content-block">
            <div class="content-overview">
                <div class="sales-overview">
                    <div class="sales-top">
                        <img src="" alt="">
                        <span class="pick-day">This Week</span>
                    </div>
                    <div class="sales-bottom">
                        <div class="num num-sales">
                            <span class="title-overview" >Sales</span>
                            <span class="value">$ 0.00</span>
                        </div>
                        <div class="num num-volume">
                            <span class="title-overview">Volume</span>
                            <span class="value">0</span>
                        </div>
                    </div>
                </div>

                <div class="customers-overview">
                    <div class="sales-top">
                        <img src="" alt="">
                        <span class="pick-day">This Week</span>
                    </div>
                    <div class="sales-bottom">
                        <div class="num num-sales">
                            <span class="title-overview" >Customers</span>
                            <span class="value">0</span>
                        </div>
                        <div class="num num-volume">
                            <span class="title-overview">Active</span>
                            <span class="value">0</span>
                        </div>
                    </div>
                </div>

                <div class="orders-overview">
                    <div class="sales-top">
                        <img src="" alt="">
                        <span class="pick-day">This Week</span>
                    </div>
                    <div class="sales-bottom">
                        <div class="num num-sales">
                            <span class="title-overview" >All Orders</span>
                            <span class="value">0</span>
                        </div>
                        <div class="num num-volume">
                            <span class="title-overview">Pending</span>
                            <span class="value">0</span>
                        </div>
                        <div class="num num-volume">
                            <span class="title-overview">Completed</span>
                            <span class="value">0</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="graph-container">
                <div class="sales-graph">
                    <div class="graph-heading">
                        <h3>Sales &  Purchase</h3>
                        <span>Weekly</span>
                    </div>
                    <div id="chart_div" style="width: 100%; height: 300px"></div>
                </div>
                <div class="orders-graph">
                    <div class="graph-heading">
                        <h3>Order Summary</h3>
                    </div>
                    <div id="curve_chart" style="width: 100%; height: 300px">

                    </div>
                </div>
            </div>

            <div class="table-container">
                <div class="tbl tbl-left">
                    <div class="table-heading">
                        <h3>Top Selling Stock</h3>
                        <a href="#">See All</a>
                    </div>

                    <table>
                        <tr>
                            <th>Name</th>
                            <th>Sold Quantity</th>
                            <th>Remaining Quantity</th>
                            <th>Price</th>
                        </tr>
                        <tr>
                            <td>Shoes</td>
                            <td>30</td>
                            <td>12</td>
                            <td>$ 23.2</td>
                        </tr>
                        <tr>
                            <td>Shoes</td>
                            <td>30</td>
                            <td>12</td>
                            <td>$ 23.2</td>
                        </tr>
                        <tr>
                            <td>Shoes</td>
                            <td>30</td>
                            <td>12</td>
                            <td>$ 23.2</td>
                        </tr>
                        <tr>
                            <td>Shoes</td>
                            <td>30</td>
                            <td>12</td>
                            <td>$ 23.2</td>
                        </tr>
                    </table>
                </div>
                <div class="tbl tbl-right">
                    <div class="table-heading">
                        <h3>Top Selling Stock</h3>
                        <a href="#">See All</a>
                    </div>

                    <ul class="product-list">
                        <li class="product-item">
                            <img class="product-img" src="" alt="">
                            <div class="product-details">
                                <span class="product-name" style="display: block;">Shoes</span>
                                <span class="product-quantity">Remaining Quantity: 2 pcs</span>
                            </div>
                            <span class="low-icon">Low</span>
                        </li>
                        <li class="product-item">
                            <img class="product-img" src="" alt="">
                            <div class="product-details">
                                <span class="product-name" style="display: block;">Shoes</span>
                                <span class="product-quantity">Remaining Quantity: 2 pcs</span>
                            </div>
                            <span class="low-icon">Low</span>
                        </li>
                        <li class="product-item">
                            <img class="product-img" src="" alt="">
                            <div class="product-details">
                                <span class="product-name" style="display: block;">Shoes</span>
                                <span class="product-quantity">Remaining Quantity: 2 pcs</span>
                            </div>
                            <span class="low-icon">Low</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


<?php
    require('partials/scripts.php');
    require('partials/foot.php'); 

?>