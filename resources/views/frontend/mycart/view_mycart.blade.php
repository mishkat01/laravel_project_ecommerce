@extends('frontend.master_dashboard')
@section('main')

 <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a> 
                    <span></span> Cart
                </div>
            </div>
        </div>
        <div class="container mb-80 mt-50">
            <div class="row">
                <div class="col-lg-8 mb-40">
                    <h4 class="heading-2 mb-10">Your Cart</h4>
                    <div class="d-flex justify-content-between">
                        <h6 class="text-body">There are products in your cart</h6>

                    </div>
                </div>
            </div>
            <div class="row" style="background-color: white">
                <div class="col-lg-12">
                    <div class="table-responsive shopping-summery">
                        <table class="table table-wishlist" style="width: 100%; height:70%">
                            <thead >
                                <tr class="main-heading">
                                    <th class="custome-checkbox start pl-30">

                                    </th>
                                    <th scope="col" colspan="2" style="text-align: center">Product</th>
                                    <th scope="col">Unit Price</th>
                                    <th scope="col" style="text-align: center">Quantity</th>
                                    <th scope="col">Subtotal</th>
                                    <th scope="col" class="end">Remove</th>
                                </tr>
                            </thead>
                            <tbody id="cartPage">


       


                            </tbody>
                        </table>
                    </div>


                    <div class="row mt-50">

                        <div class="table-responsive shopping-summery">
                            <table class="table table-wishlist" style="width: 100%; height:70%">
                                <thead >
                                    <tr class="main-heading">
                                      
                                        <th style="text-align: center">Price Details</th>
                                      
                                    </tr>
                                </thead>
                                <tbody >
                                  <tr>
                                    <td style="display: flex;">

                                        
                                        <h4>Total-> <span id="cartSubTotal"></span></h4>
                                    </td>
                               
                                    
                                  </tr>
    
           
    
    
                                </tbody>
                            </table>
                        </div>



                    </div>
                </div>

            </div>
        </div>




@endsection