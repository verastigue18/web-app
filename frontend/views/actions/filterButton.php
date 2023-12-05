<link rel="stylesheet" href="../assets/styles/filterButton.modal.css">

<div class="modal modal-filter" id="modal-filter">
    <div class="wrapper-filter">
        <div class="wrapper-block">
            <div class="filter-head">
                <h4>Filter</h4>
                <span id="close-filter" class="btn-close">&times;</span>
            </div>
            <form action="" class="form-filter">
                <div class="form-block">
                    <h5>Order Type:</h5>
                    <div class="checkbox-block">
                        <div class="checkbox">
                            <input type="radio" id="homeDelivery" value="Home Delivery" name="orderType">
                            <label for="homeDelivery">Home Delivery</label>
                        </div>
                        <div class="checkbox">
                            <input type="radio" id="pickUp" value="Pick Up" name="orderType">
                            <label for="pickUp">Pick Up</label>
                        </div>
                    </div>
                </div>

                <div class="form-block">
                    <h5>Status</h5>
                    <div class="input-block">
                        <select name="" id="">
                            <option value="" selected disabled>All</option>
                            <option value="Pending">Pending</option>
                            <option value="In-progress">In-progress</option>
                            <option value="Completed">Completed</option>
                            <option value="Cancelled">Cancelled</option>
                        </select>
                    </div>
                </div>

                <div class="form-block">
                    <h5>Customer</h5>
                    <div class="input-block">
                        <select name="" id="">
                            <option value="" selected disabled>All</option>
                        </select>
                    </div>
                </div>

                <div class="form-block">
                    <h5>Ammount</h5>
                    <div class="amount-block">
                        <div class="amount-box">
                            <label for="">From</label>
                            <input type="number" name="" id="" placeholder="0.00">
                        </div>

                        <div class="amount-box">
                            <label for="">To</label>
                            <input type="number" name="" id="" placeholder="0.00">
                        </div>
                    </div>
                </div>
            </form>
            
            <button class="btn-filter" id="submit-filter" type="submit">Filter</button>
        </div>
    </div>
</div>