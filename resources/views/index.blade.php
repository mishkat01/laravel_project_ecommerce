@extends('dashboard') 
@section('user')

  <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                    <span></span> My Account
                </div>
            </div>
        </div>
        <div class="page-content pt-150 pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 m-auto">
<div class="row">
<div class="col-md-3">
<div class="dashboard-menu">
<ul class="nav flex-column" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" id="dashboard-tab" data-bs-toggle="tab" href="#dashboard" role="tab" aria-controls="dashboard" aria-selected="false"><i class="fi-rs-settings-sliders mr-10"></i>Dashboard</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="orders-tab" data-bs-toggle="tab" href="#orders" role="tab" aria-controls="orders" aria-selected="false"><i class="fi-rs-shopping-bag mr-10"></i>Orders</a>
    </li>
  

    <li class="nav-item">
        <a class="nav-link" id="account-detail-tab" data-bs-toggle="tab" href="#account-detail" role="tab" aria-controls="account-detail" aria-selected="true"><i class="fi-rs-user mr-10"></i>Account details</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('user.logout')}}"><i class="fi-rs-sign-out mr-10"></i>Logout</a>
    </li>
</ul>
</div>
</div>
<div class="col-md-9">
<div class="tab-content account dashboard-content pl-50">
<div class="tab-pane fade active show" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
    <div class="card">
        <div class="card-header">
            <h3 class="mb-0">Hello! {{ Auth::user()->name }}</h3>
        </div>
        <div class="card-body">
            <p>
                From your account dashboard. you can easily check &amp; view your <a href="#">recent orders</a>,<br />
                manage your <a href="#">shipping and billing addresses</a> and <a href="#">edit your password and account details.</a>
            </p>
        </div>
    </div>
</div>
<div class="tab-pane fade" id="orders" role="tabpanel" aria-labelledby="orders-tab">
    <div class="card">
        <div class="card-header">
            <h3 class="mb-0">Your Orders</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Order</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Total</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#1357</td>
                            <td>March 45, 2020</td>
                            <td>Processing</td>
                            <td>$125.00 for 2 item</td>
                            <td><a href="#" class="btn-small d-block">View</a></td>
                        </tr>
                        <tr>
                            <td>#2468</td>
                            <td>June 29, 2020</td>
                            <td>Completed</td>
                            <td>$364.00 for 5 item</td>
                            <td><a href="#" class="btn-small d-block">View</a></td>
                        </tr>
                        <tr>
                            <td>#2366</td>
                            <td>August 02, 2020</td>
                            <td>Completed</td>
                            <td>$280.00 for 3 item</td>
                            <td><a href="#" class="btn-small d-block">View</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<div class="tab-pane fade" id="account-detail" role="tabpanel" aria-labelledby="account-detail-tab">
    <div class="card">
        <div class="card-header">
            <h5>Account Details</h5>
        </div>
        <div class="card-body">
            <p>Already have an account? <a href="page-login.html">Log in instead!</a></p>
            <form method="post" name="enq">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label>First Name <span class="required">*</span></label>
                        <input required="" class="form-control" name="name" type="text" />
                    </div>
                    <div class="form-group col-md-6">
                        <label>Last Name <span class="required">*</span></label>
                        <input required="" class="form-control" name="phone" />
                    </div>
                    <div class="form-group col-md-12">
                        <label>Display Name <span class="required">*</span></label>
                        <input required="" class="form-control" name="dname" type="text" />
                    </div>
                    <div class="form-group col-md-12">
                        <label>Email Address <span class="required">*</span></label>
                        <input required="" class="form-control" name="email" type="email" />
                    </div>
                    <div class="form-group col-md-12">
                        <label>Current Password <span class="required">*</span></label>
                        <input required="" class="form-control" name="password" type="password" />
                    </div>
                    <div class="form-group col-md-12">
                        <label>New Password <span class="required">*</span></label>
                        <input required="" class="form-control" name="npassword" type="password" />
                    </div>
                    <div class="form-group col-md-12">
                        <label>Confirm Password <span class="required">*</span></label>
                        <input required="" class="form-control" name="cpassword" type="password" />
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-fill-out submit font-weight-bold" name="submit" value="Submit">Save Change</button>
                    </div>
                </div>
            </form>
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

@endsection