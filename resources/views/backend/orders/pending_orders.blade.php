@extends('admin.admin_dashboard')
@section('admin')

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
    
     </div>
     </div>
    <!-- End Breadcrumb-->
      <div class="row">
        <div class="col-lg-12">
          <div class="card"> 
            <div class="card-header"><i class="fa fa-table"></i> All pending Order</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="default-datatable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Dates</th>
                        <th>Invoice</th>
                        <th>Amount</th>
                        <th>Payment</th>
                        <th>status</th>
                        <th>Action</th>
                     
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $key => $item)		
                    <tr>
                        <td> {{ $key+1 }} </td>
                        <td>{{ $item->order_date }}</td>
                        <td>{{ $item->invoice_no }}</td>
                        <td>${{ $item->amount }}</td>
                        <td>{{ $item->payment_method }}</td>
                        <td> <span class="badge rounded-pill bg-success"> {{ $item->status }}</span></td> 
        
                        <td>
        <a href=" " class="btn btn-info" title="Details"><i class="fa fa-eye"></i> </a>
        
        
                        </td> 
                    </tr>
                    @endforeach
                 
                </tbody>
                <tfoot>
                    <tr>
                    <th>SL</th>
                    <th>SL</th>
                    <th>Dates</th>
                    <th>Invoice</th>
                    <th>Amount</th>
                    <th>Payment</th>
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