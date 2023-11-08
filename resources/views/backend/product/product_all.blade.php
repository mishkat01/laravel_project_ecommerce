@extends('admin.admin_dashboard')
@section('admin')

<div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">All product</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">dashbord</a></li>
            <li class="breadcrumb-item"><a href="javaScript:void();">Product</a></li>
            <li class="breadcrumb-item active" aria-current="page">All Product <span class="badge badge-danger m-1" >{{count($products)}}</span></li>
         </ol>
	   </div>
	   <div class="col-sm-3">
       <div class="btn-group float-sm-right">
        <a href="{{ route('add.product')}}">
        <button type="button" class="btn btn-outline-dark waves-effect waves-light"><i class="fa fa-cog mr-1"></i> Add Product</button></a>
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
            <div class="card-header"><i class="fa fa-table"></i> All product</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="default-datatable" class="table table-bordered" >
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
                        <td><img src="{{ asset($item->product_thambnail) }}" style="width:80px; height:60px;"></td>
                        <td>{{$item->selling_price}}</td>
                        <td>{{$item->product_qty}}</td>
                        <td>
                          @if($item->discount_price== NULL)
                          <span class="badge badge-danger m-1" >No discount</span>
                          @else

                          @php
                            $amount = $item->selling_price - $item->discount_price;
                            $discount = ($amount/$item->selling_price)*100;
                          @endphp
                            <span class="badge badge-dark  m-1">{{ round($discount) }}%</span>

                          
                          @endif
                        </td>

                        
                        
                        
                        <td>
                          @if ($item->status==1)
                            <span class="badge badge-success m-1" >Active</span>
                          
                          @else
                          <span class="badge badge-danger m-1" >inactive</span>
                          
                              
                          @endif
                          </td>
                      
                        <td>
                            <a href="{{ route('edit.product',$item->id) }}" class="btn btn-info btn-sm" title="edit_data"><i class="fa fa-pencil"></i></a>
                            <a href="{{ route('delete.product',$item->id) }}" class="btn btn-danger btn-sm" id="deleteButton" title="Delete"><i class="fa fa-trash"></i></a>
                            <a href="{{ route('delete.product',$item->id) }}" class="btn btn-warning btn-sm" id="deleteButton" title="Details"><i class="fa fa-eye"></i></a>
                            @if ($item->status==1)
                            <a href="{{ route('delete.product',$item->id) }}" class="btn btn-primary btn-sm" id="deleteButton" title="Inactive"><i class="fa fa-solid fa-thumbs-down"></i></a>
                            @else
                            <a href="{{ route('delete.product',$item->id) }}" class="btn btn-primary btn-sm" id="deleteButton" title="Active"><i class="fa fa-solid fa-thumbs-up"></i></a>
                            @endif
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