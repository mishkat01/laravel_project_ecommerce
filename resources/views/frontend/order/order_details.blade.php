@extends('dashboard')
@section('user')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-xxx" crossorigin="anonymous" />
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                <span></span> My Account
            </div>
        </div>
    </div>
    <div class="page-content pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 m-auto">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="dashboard-menu">
                                <ul class="nav flex-column" role="tablist">

                                    <li class="nav-item">
                                        <a class="nav-link" id="orders-tab" href="{{ route('dashboard') }}" role="tab"
                                            aria-controls="orders"><i class="fi-rs-shopping-bag mr-10"></i>Orders</a>
                                    </li>


                                    <li class="nav-item">
                                        <a class="nav-link" id="account-detail-tab" data-bs-toggle="tab"
                                            href="#account-detail" role="tab" aria-controls="account-detail"
                                            aria-selected="true"><i class="fi-rs-user mr-10"></i>Account details</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('user.logout') }}"><i
                                                class="fi-rs-sign-out mr-10"></i>Logout</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>shipping details</h4>
                                        </div>
                                        <hr>
                                        <div class="card-body">
                                            <table class="table" style="font-weight: 600;">
                                                <tr>
                                                    <th> Name</th>
                                                    <th>{{ $order->name }}</th>
                                                </tr>
                                                <tr>
                                                    <th> Phone</th>
                                                    <th>{{ $order->phone }}</th>
                                                </tr>
                                                <tr>
                                                    <th> Email</th>
                                                    <th>{{ $order->email }}</th>
                                                </tr>
                                                <tr>
                                                    <th> Adress</th>
                                                    <th>{{ $order->adress }}</th>
                                                </tr>
                                                <tr>
                                                    <th> Division</th>
                                                    <th>{{ $order->division_id }}</th>
                                                </tr>
                                                <tr>
                                                    <th> District</th>
                                                    <th>{{ $order->district_id }}</th>
                                                </tr>
                                                <tr>
                                                    <th> State</th>
                                                    <th>{{ $order->state_id }}</th>
                                                </tr>
                                                <tr>
                                                    <th> Post Code</th>
                                                    <th>{{ $order->post_code }}</th>
                                                </tr>
                                                <tr>
                                                    <th>Order Date</th>
                                                    <th>{{ $order->order_date }}</th>
                                                </tr>

                                            </table>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>shipping details
                                                <span class="text-danger"><br> Invoice No :{{ $order->invoice_no }}</span>
                                            </h4>
                                        </div>
                                        <hr>
                                        <div class="card-body">
                                            <table class="table" style="font-weight: 600;">

                                                <tr>
                                                    <th>Payment Method</th>
                                                    <th>{{ $order->payment_method }}</th>
                                                </tr>
                                                <tr>
                                                    <th>Payment type</th>
                                                    <th>{{ $order->payment_type }}</th>
                                                </tr>

                                                <tr>
                                                    <th>Order Status</th>
                                                    <th>{{ $order->status }}</th>
                                                </tr>
                                                @foreach ($orderItem as $item)
                                                    <tr>
                                                        <th>Order Item</th>
                                                        <th><img src="{{ asset($item->product->product_thambnail) }}"
                                                                alt="" width="80px"
                                                                height="80px"><span>{{ $item->product->product_name }}</span><br>

                                                            <span>quantity:{{ $item->qty }}</span>,
                                                            <span>price:{{ $item->price }}</span>
                                                        </th>
                                                    </tr>
                                                @endforeach
                                                <tr>
                                                    <th>Total Amount</th>
                                                    <th>{{ $order->amount }}</th>
                                                </tr>

                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
@endsection
