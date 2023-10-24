@extends('admin.admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<div class="container-fluid">
      <!-- Breadcrumb-->
     <!-- <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">User Profile</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">Rukada</a></li>
            <li class="breadcrumb-item"><a href="javaScript:void();">Pages</a></li>
            <li class="breadcrumb-item active" aria-current="page">User Profile</li>
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
     </div> -->
    <!-- End Breadcrumb-->

      <div class="row">
        <div class="col-lg-4">
           <div class="card profile-card-2">
            <div class="card-img-block">
                <img class="img-fluid" src=" {{asset('adminBackend/assets/images/gallery/31.jpg')}}" alt="Card image cap">
            </div>
            <div class="card-body pt-5">
                <!-- MY logic -->
            <img src="{{ !empty($adminData->photo) ? url('upload/admin_images/' . $adminData->photo) : url('uploads/img.jpg') }}" alt="" class="profile">
         
                <h5 class="card-title">{{ $adminData->name}}</h5>
                <p class="card-text">{{ $adminData->email}}</p>
                <div class="icon-block">
                  <a href="javascript:void();"><i class="fa fa-facebook bg-facebook text-white"></i></a>
				  <a href="javascript:void();"> <i class="fa fa-twitter bg-twitter text-white"></i></a>
				  <a href="javascript:void();"> <i class="fa fa-google-plus bg-google-plus text-white"></i></a>
                </div>
            </div>

            <div class="card-body border-top">
         
      
                  <div class="media align-items-center">
                   <div><img src="assets/images/timeline/angular-icon.svg" class="skill-img" alt="skill img"></div>
                     <div class="media-body text-left ml-3">
                       <div class="progress-wrapper">
                         <p class="text-muted">AngularJS <span class="float-right">70%</span></p>
                         <div class="progress" style="height: 7px;">
                          <div class="progress-bar gradient-ibiza" style="width:70%"></div>
                         </div>
                        </div>                   
                    </div>
                  </div>
                    <hr>
                  <div class="media align-items-center">
                   <div><img src="assets/images/timeline/react.svg" class="skill-img" alt="skill img"></div>
                     <div class="media-body text-left ml-3">
                       <div class="progress-wrapper">
                         <p class="text-muted">React JS <span class="float-right">35%</span></p>
                         <div class="progress" style="height: 7px;">
                          <div class="progress-bar gradient-scooter" style="width:35%"></div>
                         </div>
                        </div>                   
                    </div>
                  </div>
                  
              </div>
        </div>

        </div>

        <div class="col-lg-8">
           <div class="card">
            <div class="card-body">
           
            <div class="tab-content p-3">
               
             
                
                    <form>
                       
                        

                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">User name</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" value="{{$adminData->username}}" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Name</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" value="{{$adminData->name}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Email</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="email" value="{{$adminData->email}}">
                            </div>
                        </div>
                     
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Address</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="url" value="{{$adminData->address}}">
                            </div>
                        </div>
                      
                       
                       
                     
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Change Picture</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="file" id="image">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-9">
                            <img id="showImage" src="{{ !empty($adminData->photo) ? url('upload/admin_images/' . $adminData->photo) : url('uploads/img.jpg') }}" alt="" class="profile" width="100px" height="100px">

                              
                            </div>
                        </div> 

                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Phone</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" value="{{$adminData->phone}}">
                            </div>
                        </div>
                     
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-9">
                                <input type="reset" class="btn btn-secondary" value="Cancel">
                                <input type="button" class="btn btn-primary" value="Save Changes">
                            </div>
                        </div>
                    </form>
               
            </div>
        </div>
      </div>
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