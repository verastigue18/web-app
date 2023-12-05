<link rel="stylesheet" href="../assets/styles/newOrder.modal.css">

<div class="modal modal-adding" id="modal-adding">
    <div class="wrapper">
        <div class="wrapper-block">
            <div class="header">
                <h3>Create New Order</h3>
                <span id="close-adding" class="btn-close" >&times;</span>
            </div>

            <div class="inner-content">
                <form action="" class="left-content">
                    <div class="top-form">
                        <h4>Order Details</h4>
                        <div class="isNew">
                            <label for="newCustomer">New Customer</label>
                            <input type="checkbox" name="newCustomer" id="newCustomer">
                        </div>
                    </div>

                    <div class="bottom-group">

                        <div class="new-customer-feild" id="newCustomerFeild">
                            <div class="input-feilds">
                                <input class="form-bg" type="text" placeholder="Customer Name" required>
                                <input class="form-bg" type="text" placeholder="Customer Email" required>
                                <input class="form-bg" type="number" placeholder="Mobile No. 09">
                            </div>
                        </div>

                        <div class="form-bg" id="selectCustomer">
                            <select name="" id="dropdownMenu" class="form-list">
                                <option value="" selected disabled>Select Customer</option>

                            </select>
                        </div>

                        <div class="form-input">
                            <div class="form-bg small-list">
                                <select name="" id="dropdownMenu" class="form-list">
                                    <option value="" selected disabled>Payment Type</option>
                                    <option value="">Online Payment</option>
                                    <option value="">Cash on Delivery</option>
                                </select>
                            </div>
                            <div class="form-bg small-list">
                                <select name="" id="dropdownMenu" class="form-list">
                                    <option value="" selected disabled>Order Type</option>
                                    <option value="">Pick Up</option>
                                    <option value="">Home Deliver</option>

                                </select>
                            </div>
                        </div>

                        <div class="form-input">
                            <div class="form-bg small-list">
                                <input type="date" name="" id="" class="form-list">
                            </div>
                            <div class="form-bg small-list">
                                <input type="time" name="" id="" class="form-list">
                            </div>
                        </div>

                        <div class="form-bg">
                            <select name="" id="dropdownMenu" class="form-list">
                                <option value="" selected disabled>Status</option>
                                <option value="">Pending</option>
                                <option value="">In-progress</option>
                                <option value="">Completed</option>
                                <option value="">Cancelled</option>

                            </select>
                        </div>

                        <div class="form-bg">
                            <input type="text" class="form-list" placeholder="Order Notes" style="he">
                        </div>

                    </div>

                    
                </form>
                <div class="right-content">
                    <div class="top-content">
                        <label for="">Item</label>
                        <div class="searchbar">
                            <img class="icon" src="" alt="">
                            <input class="search-input" type="text" placeholder="Search Product Name">
                        </div>
                    </div>

                    <div class="bottom-content">
                        <div class="icon-box">
                            <img src="" alt="" style="height: 60px; width: 60px;">
                        </div>
                        <div class="bottom-text">
                            <h3>Add Products to your Order</h3>
                            <p>Search and add products to this order.</p>
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="buttons">
                <button class="btn btn-outline" id="cancel-adding">Cancel</button>
                <button class="btn btn-background" id="submit-adding">Create Order</button>
            </div>
        </div>
    </div>
</div>
