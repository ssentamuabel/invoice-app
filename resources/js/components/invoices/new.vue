<script setup>

 import {onMounted , ref} from "vue"


 let form = ref([])
 let allcustomer = ref([])
 let customer_id = ref([])

 onMounted(async()=>{
    indexForm()
 })

 const indexForm = async ()=>{
    let response = await axios.get('/api/create_invoice')
    console.log('form', response.data)
 }
 
 const getAllCustomers = async ()=>{
    let response = await axios.get('/api/customers')
 }
</script>

<template>
    <div class="container">

   
    <!--==================== NEW INVOICE ====================-->
    <div class="invoices">
        
        <div class="card__header">
            <div>
                <h2 class="invoice__title">New Invoice</h2>
            </div>
            <div>
                
            </div>
        </div>

        <div class="card__content">
            <div class="card__content--header">
                <div>
                    <p class="my-1">Customer</p>
                    <select name="" id="" class="input">
                        <option value="">cust 1</option>
                    </select>
                </div>
                <div>
                    <p class="my-1">Date</p> 
                    <input id="date" placeholder="dd-mm-yyyy" type="date" class="input"> <!---->
                    <p class="my-1">Due Date</p> 
                    <input id="due_date" type="date" class="input">
                </div>
                <div>
                    <p class="my-1">Numero</p> 
                    <input type="text" class="input"> 
                    <p class="my-1">Reference(Optional)</p> 
                    <input type="text" class="input">
                </div>
            </div>
            <br><br>
            <div class="table">

                <div class="table--heading2">
                    <p>Item Description</p>
                    <p>Unit Price</p>
                    <p>Qty</p>
                    <p>Total</p>
                    <p></p>
                </div>
    
                <!-- item 1 -->
                <div class="table--items2">
                    <p>#093654 vjxhchkvhxc vkxckvjkxc jkvjxckvjkx </p>
                    <p>
                        <input type="text" class="input" >
                    </p>
                    <p>
                        <input type="text" class="input" >
                    </p>
                    <p>
                        $ 10000
                    </p>
                    <p style="color: red; font-size: 24px;cursor: pointer;">
                        &times;
                    </p>
                </div>
                <div style="padding: 10px 30px !important;">
                    <button class="btn btn-sm btn__open--modal">Add New Line</button>
                </div>
            </div>

            <div class="table__footer">
                <div class="document-footer" >
                    <p>Terms and Conditions</p>
                    <textarea cols="50" rows="7" class="textarea" ></textarea>
                </div>
                <div>
                    <div class="table__footer--subtotal">
                        <p>Sub Total</p>
                        <span>$ 1000</span>
                    </div>
                    <div class="table__footer--discount">
                        <p>Discount</p>
                        <input type="text" class="input">
                    </div>
                    <div class="table__footer--total">
                        <p>Grand Total</p>
                        <span>$ 1200</span>
                    </div>
                </div>
            </div>

           
        </div>
        <div class="card__header" style="margin-top: 40px;">
            <div>
                
            </div>
            <div>
                <a class="btn btn-secondary">
                    Save
                </a>
            </div>
        </div>
        
    </div>
    <!--==================== add modal items ====================-->
    <div class="modal main__modal ">
        <div class="modal__content">
            <span class="modal__close btn__close--modal">×</span>
            <h3 class="modal__title">Add Item</h3>
            <hr><br>
            <div class="modal__items">
                <select class="input my-1">
                    <option value="None">None</option>
                    <option value="None">LBC Padala</option>
                </select>
            </div>
            <br><hr>
            <div class="model__footer">
                <button class="btn btn-light mr-2 btn__close--modal">
                    Cancel
                </button>
                <button class="btn btn-light btn__close--modal ">Save</button>
            </div>
        </div>
    </div>
    
    <br><br><br>
    <!--==================== SHOW INVOICE ====================-->
    <div class="invoices">
        
        <div class="card__header">
            <div>
                <h2 class="invoice__title">Invoice</h2>
            </div>
            <div>
                
            </div>
        </div>
        <div>
            <div class="card__header--title ">
                <h1 class="mr-2">#1043</h1>
                <p>July 17, 2020 at 3:28 am </p>
            </div>
    
            <div>
                <ul  class="card__header-list">
                    <li>
                        <!-- Select Btn Option -->
                        <button class="selectBtnFlat">
                            <i class="fas fa-print"></i>
                            Print
                        </button>
                        <!-- End Select Btn Option -->
                    </li>
                    <li>
                        <!-- Select Btn Option -->
                        <button class="selectBtnFlat">
                            <i class=" fas fa-reply"></i>
                            Edit
                        </button>
                        <!-- End Select Btn Option -->
                    </li>
                    <li>
                        <!-- Select Btn Option -->
                        <button class="selectBtnFlat ">
                            <i class=" fas fa-pencil-alt"></i>
                            Delete
                        </button>
                        <!-- End Select Btn Option -->
                    </li>
                    
                </ul>
            </div>
        </div>

        <div class="table invoice">
            <div class="logo">
                <img src="" alt="" style="width: 200px;">
            </div>
            <div class="invoice__header--title">
                <p></p>
                <p class="invoice__header--title-1">Invoice</p>
                <p></p>
            </div>

            
            <div class="invoice__header--item">
                <div>
                    <h2>Invoice To:</h2>
                    <p>Customer 1</p>
                </div>
                <div>
                        <div class="invoice__header--item1">
                            <p>Invoice#</p>
                            <span>#1200</span>
                        </div>
                        <div class="invoice__header--item2">
                            <p>Date</p>
                            <span>12/12/2022</span>
                        </div>
                        <div class="invoice__header--item2">
                            <p>Due Date</p>
                            <span>12/12/2022</span>
                        </div>
                        <div class="invoice__header--item2">
                            <p>Reference</p>
                            <span>1045</span>
                        </div>
                    
                </div>
            </div>

            <div class="table py1">

                <div class="table--heading3">
                    <p>#</p>
                    <p>Item Description</p>
                    <p>Unit Price</p>
                    <p>Qty</p>
                    <p>Total</p>
                </div>
    
                <!-- item 1 -->
                <div class="table--items3">
                    <p>1</p>
                    <p>Lorem Ipsum is simply dummy text</p>
                    <p>$ 300</p>
                    <p>1</p>
                    <p>$ 300</p>
                </div>
                <div class="table--items3">
                    <p class="table--items--col2">
                        2
                    </p>
                    <p  class="table--items--col1 table--items--transactionId3">
                        Lorem Ipsum is simply dummy text 
                    </p>
                    <p class="table--items--col2">
                        $ 300
                    </p>
                    <p class="table--items--col3">
                        1
                    </p>
                    <p class="table--items--col5">
                        $ 300
                    </p>
                </div>
                <div class="table--items3">
                    <p class="table--items--col2">
                        3
                    </p>
                    <p  class="table--items--col1 table--items--transactionId3">
                        Lorem Ipsum is simply dummy text 
                    </p>
                    <p class="table--items--col2">
                        $ 300
                    </p>
                    <p class="table--items--col3">
                        1
                    </p>
                    <p class="table--items--col5">
                        $ 300
                    </p>
                </div>
                <div class="table--items3">
                    <p class="table--items--col2">
                        4
                    </p>
                    <p  class="table--items--col1 table--items--transactionId3">
                        Lorem Ipsum is simply dummy text 
                    </p>
                    <p class="table--items--col2">
                        $ 300
                    </p>
                    <p class="table--items--col3">
                        1
                    </p>
                    <p class="table--items--col5">
                        $ 300
                    </p>
                </div>
            </div>

            <div  class="invoice__subtotal">
                <div>
                    <h2>Thank you for your business</h2>   
                </div>
                <div>
                    <div class="invoice__subtotal--item1">
                        <p>Sub Total</p>
                        <span> $ 1200</span>
                    </div>
                    <div class="invoice__subtotal--item2">
                        <p>Discount</p>
                        <span>$ 100</span>
                    </div>
                    
                </div>
            </div>

            <div class="invoice__total">
                <div>
                    <h2>Terms and Conditions</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                </div>
                <div>
                    <div class="grand__total" >
                        <div class="grand__total--items">
                            <p>Grand Total</p>
                            <span>$ 1100</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="card__footer">
            <div>
                
            </div>
            <div>
                <a class="btn btn-secondary">
                    Save
                </a>
            </div>
        </div>
        
    </div>

    <br><br><br>
    <!--==================== EDIT INVOICE ====================-->
    <div class="invoices">
        
        <div class="card__header">
            <div>
                <h2 class="invoice__title">Edit Invoice</h2>
            </div>
            <div>
                
            </div>
        </div>

        <div class="card__content">
            <div class="card__content--header">
                <div>
                    <p class="my-1">Customer</p>
                    <select name="" id="" class="input">
                        <option value="">cust 1</option>
                    </select>
                </div>
                <div>
                    <p class="my-1">Date</p> 
                    <input id="date" placeholder="dd-mm-yyyy" type="date" class="input"> <!---->
                    <p class="my-1">Due Date</p> 
                    <input id="due_date" type="date" class="input">
                </div>
                <div>
                    <p class="my-1">Numero</p> 
                    <input type="text" class="input"> 
                    <p class="my-1">Reference(Optional)</p> 
                    <input type="text" class="input">
                </div>
            </div>
            <br><br>
            <div class="table">

                <div class="table--heading2">
                    <p>Item Description</p>
                    <p>Unit Price</p>
                    <p>Qty</p>
                    <p>Total</p>
                    <p></p>
                </div>
    
                <!-- item 1 -->
                <div class="table--items2">
                    <p>#093654 vjxhchkvhxc vkxckvjkxc jkvjxckvjkx </p>
                    <p>
                        <input type="text" class="input" >
                    </p>
                    <p>
                        <input type="text" class="input" >
                    </p>
                    <p>
                        $ 10000
                    </p>
                    <p style="color: red; font-size: 24px;cursor: pointer;">
                        &times;
                    </p>
                </div>
                <div style="padding: 10px 30px !important;">
                    <button class="btn btn-sm btn__open--modal">Add New Line</button>
                </div>
            </div>

            <div class="table__footer">
                <div class="document-footer" >
                    <p>Terms and Conditions</p>
                    <textarea cols="50" rows="7" class="textarea" ></textarea>
                </div>
                <div>
                    <div class="table__footer--subtotal">
                        <p>Sub Total</p>
                        <span>$ 1000</span>
                    </div>
                    <div class="table__footer--discount">
                        <p>Discount</p>
                        <input type="text" class="input">
                    </div>
                    <div class="table__footer--total">
                        <p>Grand Total</p>
                        <span>$ 1200</span>
                    </div>
                </div>
            </div>

           
        </div>
        <div class="card__header" style="margin-top: 40px;">
            <div>
                
            </div>
            <div>
                <a class="btn btn-secondary">
                    Save
                </a>
            </div>
        </div>
        
    </div>
    <!--==================== add modal items ====================-->
    <div class="modal main__modal ">
        <div class="modal__content">
            <span class="modal__close btn__close--modal">×</span>
            <h3 class="modal__title">Add Item</h3>
            <hr><br>
            <div class="modal__items">
                <select class="input my-1">
                    <option value="None">None</option>
                    <option value="None">LBC Padala</option>
                </select>
            </div>
            <br><hr>
            <div class="model__footer">
                <button class="btn btn-light mr-2 btn__close--modal">
                    Cancel
                </button>
                <button class="btn btn-light btn__close--modal ">Save</button>
            </div>
        </div>
    </div>
    </div>

    
</template>