@extends('admin.admin_dashboard')
@section('admin')
    <div class="container-fluid">

        <!--Start Dashboard Content-->

        <div class="row mt-3">
            <div class="col-12 col-lg-6 col-xl-3">
                <div class="card gradient-bloody">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="media-body">
                                <p class="text-white">Total Orders</p>
                                <h4 class="text-white line-height-5">{{ $order_count }}</h4>
                            </div>
                            <div class="w-circle-icon rounded-circle border border-white">
                                <i class="fa fa-cart-plus text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3">
                <div class="card gradient-scooter">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="media-body">
                                <p class="text-white">Total User</p>
                                <h4 class="text-white line-height-5">{{ $user_count }}</h4>
                            </div>
                            <div class="w-circle-icon rounded-circle border border-white">
                                <i class="fa fa-money text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3">
                <div class="card gradient-blooker">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="media-body">
                                <p class="text-white">Pending Order</p>
                                <h4 class="text-white line-height-5"></h4>
                            </div>
                            <div class="w-circle-icon rounded-circle border border-white">
                                <i class="fa fa-users text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3">
                <div class="card gradient-ohhappiness">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="media-body">
                                <p class="text-white">Recived Order</p>
                                <h4 class="text-white line-height-5"></h4>
                            </div>
                            <div class="w-circle-icon rounded-circle border border-white">
                                <i class="fa fa-pie-chart text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--End Row-->




        <div class="row">
            <div class="col-lg-12">
                <div class="card bg-transparent shadow-none border border-light-3">
                    <div class="card-header border-0 bg-transparent bg-dark text-white">
                        Recent Orders Table
                        <div class="card-action">
                            <div class="dropdown">
                                <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret"
                                    data-toggle="dropdown">
                                    <i class="icon-options text-white"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="javascript:void();">Action</a>
                                    <a class="dropdown-item" href="javascript:void();">Another action</a>
                                    <a class="dropdown-item" href="javascript:void();">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="javascript:void();">Separated link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">

                        <table class="table align-items-center table-flush table-dark">
                            <thead>
                                <tr>

                                    <th>User</th>

                                    <th>invoice no</th>
                                    <th>Status</th>
                                    <th>Amount</th>

                                </tr>
                            </thead>
                            @foreach ($all_order as $order)
                                <tr>

                                    <td>{{ $order->name }}</td>


                                    <td>{{ $order->invoice_no }}</td>
                                    @if ($order->invoice_no == 'pending')
                                        <td><span class="btn btn-sm btn-outline-danger btn-round btn-block"
                                                style="background-color: red;!important">{{ $order->status }}</span>
                                        </td>
                                    @elseif($order->invoice_no == 'deliverd')
                                        <td><span
                                                class="btn btn-sm btn-outline-info btn-round btn-block">{{ $order->status }}</span>
                                        </td>
                                    @else
                                        <td><span
                                                class="btn btn-sm btn-outline-success btn-round btn-block">{{ $order->status }}</span>
                                        </td>
                                    @endif

                                    <td>৳ {{ $order->amount }}</td>
                            @endforeach
                        </table>

                    </div>
                </div>
            </div>
        </div><!--End Row-->

        <!--End Dashboard Content-->

    </div>
@endsection
