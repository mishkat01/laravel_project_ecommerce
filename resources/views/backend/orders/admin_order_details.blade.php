@extends('admin.admin_dashboard')
@section('admin')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-xxx" crossorigin="anonymous" />

    <div class="container-fluid">
        <!-- Breadcrumb-->
        <div class="row pt-2 pb-2">
            <div class="col-sm-9">
                <h4 class="page-title">All Category</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javaScript:void();">dashbord</a></li>
                    <li class="breadcrumb-item"><a href="javaScript:void();">Tables</a></li>
                    <li class="breadcrumb-item active" aria-current="page">All Category</li>
                </ol>
            </div>
            <div class="col-sm-3">
                <div class="btn-group float-sm-right">
                    @if ($order->status == 'pending')
                        <a href="{{ route('confirm-deliverd', $order->id) }}">
                            <button style="color: black" type="button" class="btn  btn-success waves-effect waves-light"><i
                                    class="fa fa-cog mr-1"></i> Confirm </button></a>
                    @else
                        <button style="color: black" type="button" class="btn  btn-success waves-effect waves-light"><i
                                class="fa fa-cog mr-1"></i> Deliverd </button>
                    @endif


                </div>
            </div>
        </div>
        <!-- End Breadcrumb-->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header"><i class="fa fa-table"></i> Data Table Example</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div class="table-responsive">
                                <div class="card-header">
                                    <h4>shipping details</h4>
                                </div>

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
                                <div class="card-header">
                                    <h4>Order details
                                        <span class="text-danger"><br> Invoice No :{{ $order->invoice_no }}</span>
                                    </h4>
                                </div>


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

                                    <tr>
                                        <th>Order Status:</th>
                                        <th><span class="badge rounded-pill bg-warning">{{ $order->status }}</span>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>Total Amount</th>
                                        <th>{{ $order->amount }}</th>
                                    </tr>

                                </table>
                                <div class="card-header">
                                    <h4>Product details</h4>
                                </div>

                                <table class="table" style="font-weight: 600;">
                                    <tbody>
                                        <tr>
                                            <td class="col-md-1">
                                                <label>Image </label>
                                            </td>
                                            <td class="col-md-2">
                                                <label>Product Name </label>
                                            </td>

                                            <td class="col-md-2">
                                                <label>Product Code </label>
                                            </td>

                                            <td class="col-md-1">
                                                <label>Quantity </label>
                                            </td>

                                            <td class="col-md-3">
                                                <label>Price </label>
                                            </td>

                                        </tr>


                                        @foreach ($orderItem as $item)
                                            <tr>
                                                <td class="col-md-1">
                                                    <label><img src="{{ asset($item->product->product_thambnail) }}"
                                                            style="width:50px; height:50px;"> </label>
                                                </td>
                                                <td class="col-md-2">
                                                    <label>{{ $item->product->product_name }}</label>
                                                </td>

                                                <td class="col-md-2">
                                                    <label>{{ $item->product->product_code }} </label>
                                                </td>

                                                <td class="col-md-1">
                                                    <label>{{ $item->qty }} </label>
                                                </td>

                                                <td class="col-md-3">
                                                    <label>${{ $item->price }} <br> Total =
                                                        ${{ $item->price * $item->qty }} </label>
                                                </td>

                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Row-->



        </div>














        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    @endsection
