@extends('admin.admin_dashboard')
@section('admin')

<div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">All product</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">dashbord</a></li>
            <li class="breadcrumb-item"><a href="javaScript:void();">Tables</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data Tables</li>
         </ol>
	   </div>
	   <div class="col-sm-3">
       <div class="btn-group float-sm-right">
        <a href="{{ route('add.brand')}}">
        <button type="button" class="btn btn-outline-dark waves-effect waves-light"><i class="fa fa-cog mr-1"></i> Add Brand</button></a>
        <!-- <button type="button" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown">
        <span class="caret"></span>
        </button> -->
        <!-- <div class="dropdown-menu">
          <a href="javaScript:void();" class="dropdown-item">Action</a>
          <a href="javaScript:void();" class="dropdown-item">Another action</a>
          <a href="javaScript:void();" class="dropdown-item">Something else here</a>
          <div class="dropdown-divider"></div>
          <a href="javaScript:void();" class="dropdown-item">Separated link</a>
        </div> -->
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
              <table id="default-datatable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Product name</th>
                        <th>Product Image</th>
                        <th>Price</th>
                        <th>QTY</th>
                        <th>Discount</th>
                        <th>Status</th>
                     
                        <th>Action</th>
                     
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $key=> $item)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$item->product_name}}</td>
                        <td><img src="{{ asset($item->product_thambnail) }}" style="width:60px; height:40px;"></td>
                        <td>{{$item->product_price}}</td>
                        <td>{{$item->product_qty}}</td>
                        <td>{{$item->discount_price}}</td>
                        <td>{{$item->status}}</td>
                      
                        <td>
                            <a href="{{ route('edit.brand',$item->id) }}" class="btn btn-info">Edit</a>
                            <a href="{{ route('delete.brand',$item->id) }}" class="btn btn-danger" id="deleteButton" >Delete</a>
                        </td>
                   
                    </tr>
                    @endforeach
                 
                </tbody>
                <tfoot>
                    <tr>
                      <th>SL</th>
                      <th>Product name</th>
                      <th>Product Image</th>
                      <th>Price</th>
                      <th>QTY</th>
                      <th>Discount</th>
                      <th>Status</th>
                   
                      <th>Action</th>
                    </tr>
                </tfoot>
            </table>
            </div>
            </div>
          </div>
        </div>
      </div><!-- End Row-->



    </div>
    <!-- End container-fluid-->




@endsection