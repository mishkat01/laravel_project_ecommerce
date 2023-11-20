@extends('frontend.master_dashboard')
@section('main')
    <form method="post" action="{{ route('order') }}">
        @csrf
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                    <span></span> Checkout
                </div>
            </div>
        </div>
        <div class="container mb-80 mt-50">
            <div class="row">
                <div class="col-lg-8 mb-40">
                    <h3 class="heading-2 mb-10">Checkout</h3>
                    <div class="d-flex justify-content-between">
                        <h6 class="text-body">There are products in your cart</h6>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">

                    <div class="row">
                        <h4 class="mb-30">Billing Details</h4>



                        <div class="row">
                            <div class="form-group col-lg-6">
                                <input type="text" required="" name="name" value="{{ Auth::user()->name }}">
                            </div>
                            <div class="form-group col-lg-6">
                                <input type="text" required="" name="email" value="{{ Auth::user()->email }}">
                            </div>
                        </div>



                        <div class="row shipping_calculator">
                            <div class="form-group col-lg-6">
                                <input type="text" required="" name="division_id" placeholder="enter division">
                            </div>

                            <div class="form-group col-lg-6">
                                <input required="" type="text" name="phone" value="{{ Auth::user()->phone }}">
                            </div>
                        </div>

                        <div class="row shipping_calculator">
                            <div class="form-group col-lg-6">
                                <input type="text" required="" name="district_id" placeholder="enter district">
                            </div>
                            <div class="form-group col-lg-6">
                                <input required="" type="text" name="post_code" placeholder="Post Code *">
                            </div>
                        </div>


                        <div class="row shipping_calculator">
                            <div class="form-group col-lg-6">
                                <input type="text" required="" name="state_id" placeholder="enter divition">
                            </div>
                            <div class="form-group col-lg-6">
                                <input required="" type="text" name="address" value="{{ Auth::user()->address }}">
                            </div>
                        </div>





                        <div class="form-group mb-30">
                            <textarea rows="5" name="notes" placeholder="Additional information"></textarea>
                        </div>




                    </div>
                </div>


                <div class="col-lg-5">
                    <div class="border p-40 cart-totals ml-30 mb-50">
                        <div class="d-flex align-items-end justify-content-between mb-30">
                            <h4>Your Order</h4>
                            <h6 class="text-muted">Subtotal</h6>
                        </div>
                        <div class="divider-2 mb-30"></div>
                        <div class="table-responsive order_table checkout">
                            <table class="table no-border">
                                <tbody>
                                    @foreach ($carts as $item)
                                        <tr>
                                            <td class="image product-thumbnail"><img
                                                    src=" {{ asset($item->options->image) }}" alt="#"></td>
                                            <td>
                                                <h6 class="w-160 mb-5"><a href="shop-product-full.html"
                                                        class="text-heading">{{ $item->name }}</a></h6></span>
                                                <div class="product-rate-cover">



                                                </div>
                                            </td>
                                            <td>
                                                <h6 class="text-muted pl-20 pr-20">{{ $item->qty }}</h6>
                                            </td>
                                            <td>
                                                <h5> ৳{{ $item->price }}</h5>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>




                            <table class="table no-border">
                                <tbody>


                                    <tr>
                                        <td class="cart_total_label">
                                            <h6>Grand Total</h6>
                                        </td>
                                        <td class="cart_total_amount">
                                            <h4 class="text-brand text-end">৳ {{ $cartTotal }}</h4>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>





                        </div>
                    </div>
                    <div class="payment ml-30">
                        <h4 class="mb-30">Payment</h4>
                        <div class="payment_option">
                            <div class="custome-radio">
                                <input class="form-check-input" required="" type="radio" name="payment_option"
                                    id="exampleRadios3" checked="">
                                <label class="form-check-label" for="exampleRadios3" data-bs-toggle="collapse"
                                    data-target="#bankTranfer" aria-controls="bankTranfer">Direct Bank Transfer</label>
                            </div>
                            <div class="custome-radio">
                                <input class="form-check-input" required="" type="radio" name="payment_option"
                                    id="exampleRadios4" checked="">
                                <label class="form-check-label" for="exampleRadios4" data-bs-toggle="collapse"
                                    data-target="#checkPayment" aria-controls="checkPayment">Cash on delivery</label>
                            </div>
                            <div class="custome-radio">
                                <input class="form-check-input" required="" type="radio" name="payment_option"
                                    id="exampleRadios5" checked="">
                                <label class="form-check-label" for="exampleRadios5" data-bs-toggle="collapse"
                                    data-target="#paypal" aria-controls="paypal">Online Getway</label>
                            </div>
                        </div>
                        <div class="payment-logo d-flex">
                            <img class="mr-15" src="assets/imgs/theme/icons/payment-paypal.svg" alt="">
                            <img class="mr-15" src="assets/imgs/theme/icons/payment-visa.svg" alt="">
                            <img class="mr-15" src="assets/imgs/theme/icons/payment-master.svg" alt="">
                            <img src="assets/imgs/theme/icons/payment-zapper.svg" alt="">
                        </div>
                        <button class="btn btn-primary">Submit Payment</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
