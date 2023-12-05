<link rel="stylesheet" href="../assets/styles/newCustomers.action.css">

<div class="modal modal-newCustomer" id="modal-adding">
   <div class="wrapper">
        <div class="wrapper-block">
            <div class="wrapper-header">
                <h4>Add a new Customer</h4>
                <span class="btn-close" id="close-adding">&times;</span>
            </div>
            <p>Customer Information</p>
            <form action="" class="newCustomer-form">
                <input type="text" placeholder="Customer Namne">
                <input type="text" placeholder="Customer Email">
                <input type="number" placeholder="09123456789">
                <span>
                    <label for="">Add Address</label>
                    <input type="checkbox">
                </span>
                <input type="text" placeholder="Building No., Street Address">
                <input type="text" placeholder="City">
                <select name="" id="">
                    <option selected disabled>Province</option>
                    <option value="Rizal">Rizal</option>
                    <option value="Oriental Mindoro">Oriental Mindoro</option>
                </select>
                <select name="" id="">
                    <option selected disabled>Country</option>
                    <option value="Phillipines">Phillipines</option>
                    <option value="Phillipines">South Korea</option>
                </select>
            </form>
            <div class="buttons-newCustomer">
                    <button class="btn-outline" id="cancel-adding">Cancel</button>
                    <button type="submit" class="btn-background" id="submit-adding">Add</button>
                </div>
        </div>
   </div>
</div>
