@extends('admin.admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


<div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Update Category</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">home</a></li>
            <li class="breadcrumb-item"><a href="javaScript:void();">dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Update Category</li>
         </ol>
	   </div>
	   <div class="col-sm-3">
       <div class="btn-group float-sm-right">
        <button type="button" class="btn btn-outline-primary waves-effect waves-light"><i class="fa fa-cog mr-1"></i> Setting</button>
        <button type="button" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown">
        <span class="caret"></span>
        </button>
        <div class="dropdown-menu">
          <a href="javaScript:void();" class="dropdown-item">Action</a>
          <a href="javaScript:void();" class="dropdown-item">Another action</a>
          <a href="javaScript:void();" class="dropdown-item">Something else here</a>
          <div class="dropdown-divider"></div>
          <a href="javaScript:void();" class="dropdown-item">Separated link</a>
        </div>
      </div>
     </div>
     </div>

     <div class="card-body">
           
           <div class="tab-content p-3">
              
            
               
                   <form method="post" action="{{ route('update.category') }}" enctype="multipart/form-data">
                   @csrf
                      
                       <input type="hidden" name="id" value="{{ $categories->id}}">
                       <input type="hidden" name="old_image" value="{{ $categories->category_image}}">


                
                       <div class="form-group row">
                           <label class="col-lg-3 col-form-label form-control-label">Category Name</label>
                           <div class="col-lg-9">
                               <input class="form-control" type="text" name="category_name" value="{{ $categories->category_name }}">
                           </div>
                       </div>
                   
                    
                
                     
                      
                      
                    
                       <div class="form-group row">
                           <label class="col-lg-3 col-form-label form-control-label">Category Photo</label>
                           <div class="col-lg-9">
                               <input class="form-control" type="file" id="image" name="category_image">
                           </div>
                       </div>

                       <div class="form-group row">
                           <label class="col-lg-3 col-form-label form-control-label"></label>
                           <div class="col-lg-9">
                           <img id="showImage" src="{{  asset($categories->category_image) }}" alt="" class="profile" width="100px" height="100px">

                             
                           </div>
                       </div> 

                
                    
                       <div class="form-group row">
                           <label class="col-lg-3 col-form-label form-control-label"></label>
                           <div class="col-lg-9">
                               <input type="reset" class="btn btn-secondary" value="Cancel">
                               <input type="submit" class="btn btn-primary" value="Save Changes">
                           </div>
                       </div>
                   </form>
              
           </div>
       </div>

           <!-- MY jquery logic -->
    <script type="text/javascript">
	$(document).ready(function(){
		$('#image').change(function(e){
			var reader = new FileReader();
			reader.onload = function(e){
				$('#showImage').attr('src',e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});
</script>

@endsection