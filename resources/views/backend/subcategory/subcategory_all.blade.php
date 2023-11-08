@extends('admin.admin_dashboard')
@section('admin')

<div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">All SubCategory</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">dashbord</a></li>
            <li class="breadcrumb-item"><a href="javaScript:void();">Tables</a></li> 
            <li class="breadcrumb-item active" aria-current="page">All SubCategory</li>
         </ol>
	   </div>
	   <div class="col-sm-3">
       <div class="btn-group float-sm-right">
        <a href="{{ route('add.subcategory')}}">
        <button type="button" class="btn btn-outline-dark waves-effect waves-light"><i class="fa fa-cog mr-1"></i> Add SubCategory</button></a>
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
                        <th>Category Name</th>
                        <th>SubCategory name</th>
                       
                        <th>Action</th>
                     
                    </tr>
                </thead>
                <tbody>
                    @foreach($subcategories as $key=> $item)
                    <tr>
                        <td>{{$key+1}}</td>
                        <!-- call the category relationship function then access category table fields -->
                        <td>{{ $item['category']['category_name'] ?? 'N/A' }}</td>

                        <td>{{$item->subcategory_name}}</td>
                        <td>
                            <a href="{{ route('edit.subcategory',$item->id) }}" class="btn btn-info">Edit</a>
                            <a href="{{ route('delete.subcategory',$item->id) }}" class="btn btn-danger" id="deleteButton" >Delete</a>
                        </td>
                   
                    </tr>
                    @endforeach
                 
                </tbody>
                <tfoot>
                    <tr>
                    <th>SL</th>
                        <th>Category name</th>
                        <th>SubCategory name</th>
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