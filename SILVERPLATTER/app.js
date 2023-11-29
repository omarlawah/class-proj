const addWorkers = document.getElementById('add-workers');
const addCustomers = document.getElementById('add-customers');
const addVehicles = document.getElementById('add-vehicles');
const addProducts = document.getElementById('add-products');
const addWorkdone = document.getElementById('add-workdone');
const addVisits = document.getElementById('add-visits');
const addSales = document.getElementById('add-sales');
let workerInputs = document.getElementById('workers-form');
let customerInputs = document.getElementById('customers-form');
let VehicleInputs = document.getElementById('vehicles-form');
let productInputs = document.getElementById('products-form');
let workdoneInputs = document.getElementById('workdone-form');
let visitsInputs = document.getElementById('visits-form');
let salesInputs = document.getElementById('sales-form');
let header = document.getElementById('header');
let main = document.getElementById('main');
let body = document.querySelector('body');

function toggleWorkerinfo(){
    workerInputs.classList.remove('hidden');
    main.classList.add('blurred');
    header.classList.add('blurred');
    
}
function toggleCustomerinfo(){
    customerInputs.classList.remove('hidden');
    main.classList.add('blurred');
    header.classList.add('blurred');
    
}
function toggleVehicleinfo(){
    VehicleInputs.classList.remove('hidden');
    main.classList.add('blurred');
    header.classList.add('blurred');
    
}
function toggleProductinfo(){
    productInputs.classList.remove('hidden');
    main.classList.add('blurred');
    header.classList.add('blurred');

}
function toggleWorkdoneinfo(){
    workdoneInputs.classList.remove('hidden');
    main.classList.add('blurred');
    header.classList.add('blurred');

}
function toggleVisitsinfo(){
    visitsInputs.classList.remove('hidden');
    main.classList.add('blurred');
    header.classList.add('blurred');

}
function toggleSalesinfo(){
    salesInputs.classList.remove('hidden');
    main.classList.add('blurred');
    header.classList.add('blurred');

}


function closePage(){
    workerInputs.classList.add('hidden');
    main.classList.remove('blurred');
    header.classList.remove('blurred');
    
}
function closePage2(){
    customerInputs.classList.add('hidden');
    main.classList.remove('blurred');
    header.classList.remove('blurred');
    
}
function closePage3(){
    VehicleInputs.classList.add('hidden');
    main.classList.remove('blurred');
    header.classList.remove('blurred');
    
}
function closePage4(){
    productInputs.classList.add('hidden');
    main.classList.remove('blurred');
    header.classList.remove('blurred');
    
}
function closePage4(){
    productInputs.classList.add('hidden');
    main.classList.remove('blurred');
    header.classList.remove('blurred');
    
}
function closePage5(){
    workdoneInputs.classList.add('hidden');
    main.classList.remove('blurred');
    header.classList.remove('blurred');
}
function closePage6(){
    visitsInputs.classList.add('hidden');
    main.classList.remove('blurred');
    header.classList.remove('blurred');
}
function closePage7(){
    salesInputs.classList.add('hidden');
    main.classList.remove('blurred');
    header.classList.remove('blurred');
}


