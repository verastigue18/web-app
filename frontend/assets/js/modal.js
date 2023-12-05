// MODAL ADDING ORDERS
const modalAdding = document.getElementById('modal-adding');
const openAdding = document.querySelectorAll('.open-adding');
const closeAdding = document.getElementById('close-adding');
const cancelAdding = document.getElementById('cancel-adding');
const submitAdding = document.getElementById('submit-adding');

openAdding.forEach(button => {
    button.addEventListener('click', function() {
        modalAdding.style.display = 'block';
    })
})

closeAdding.addEventListener('click', function() {
    modalAdding.style.display = 'none';
})

cancelAdding.addEventListener('click', function() {
    modalAdding.style.display = 'none';
})

submitAdding.addEventListener('click', function() {
    alert('Adding');
    modalAdding.style.display = 'none'
})


// MODAL ADDING ORDERS

// FILTER
const modalFilter = document.getElementById('modal-filter');
const openFilter = document.querySelectorAll('.open-filter');
const closeFilter = document.getElementById('close-filter');
const submitFilter = document.getElementById('submit-filter');


openFilter.forEach(button => {
    button.addEventListener('click', function() {
        modalFilter.style.display = 'block';
    }) 
})

closeFilter.addEventListener('click', function() {
    modalFilter.style.display = 'none';
})

submitFilter.addEventListener('click', function() {
    alert('Filter');
    modalFilter.style.display = 'none'
})

// FILTER


// FOR NEW CUSTOMER hide 
document.getElementById('newCustomer').addEventListener('change', function() {
    const newCustomerFeild = document.getElementById('newCustomerFeild');
    const selectCustomer = document.getElementById('selectCustomer');
    if(this.checked) {
        newCustomerFeild.style.display = "block";
        selectCustomer.style.display = "none";
    } else {
        newCustomerFeild.style.display = "none";
        selectCustomer.style.display = "block"
    }
})


// Filter
