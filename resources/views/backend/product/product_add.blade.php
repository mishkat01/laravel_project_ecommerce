@extends('admin.admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


<div class="page-content">

				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Add New Product</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Add New Product</li>
							</ol>
						</nav>
					</div>

				</div>
				<!--end breadcrumb-->
				<form id="productForm" method="POST" action="{{ route('store.product') }}" enctype="multipart/form-data">
					@csrf
<div class="card">
  <div class="card-body p-4">
	  <h5 class="card-title">Add New Product</h5>
	  <hr/>
       <div class="form-body mt-4">
	    <div class="row">
		   <div class="col-lg-8">
           <div class="border border-3 p-4 rounded">


			<div class="mb-3">
				<label for="inputProductTitle" class="form-label">Product Name</label>
				<input type="text" name="product_name" class="form-control" id="inputProductTitle" placeholder="Enter product title">
			  </div>

            <div class="mb-3"> 
				<div class="form-group">
					<label for="inputProductTitle" class="form-label">Product Tags</label><br>
					<input name="product_tags" type="text" class="form-control" data-role="tagsinput" id="inputProductTitle" value='new Product,Top product'  style="display: none;">
				</div>
			  </div>

			



			  <div class="mb-3">
				<label for="inputProductDescription" class="form-label">Long Description</label>
				<textarea name="long_descp" class="form-control" id="inputProductDescription" rows="3"></textarea>
			  </div>
			  <div class="mb-3">
				<label for="inputProductDescription" class="form-label">Short Description</label>
				<textarea name="short_descp" class="form-control" id="inputProductDescription" rows="3"></textarea>
			  </div>


			 



  <div class="mb-3">
				<label for="inputProductTitle" class="form-label">Main Thambnail</label>
				<input name="product_thambnail" class="form-control" type="file" id="formFile" onchange="mainThamUrl(this)" >
				<img src="" alt="" id='mainThmb'>
			  </div>




  <div class="mb-3">
				<label for="inputProductTitle" class="form-label">Multiple Image</label>
				<input class="form-control" name="multi_img[]" type="file" id="multiImg" multiple="">
				
				<div class="row" id="preview_img">

				</div>
			  </div>



            </div>
		   </div>
		   <div class="col-lg-4">
			<div class="border border-3 p-4 rounded">
				<div class="row g-3">
				  <div class="col-md-6">
					  <label for="inputPrice" class="form-label">Product Price</label>
					  <input type="text" name="product_price" class="form-control" id="inputPrice" placeholder="00.00">
					</div>
					<div class="col-md-6">
					  <label for="inputCompareatprice" class="form-label">Discount Price </label>
					  <input type="text" name="discount_price" class="form-control" id="inputCompareatprice" placeholder="00.00">
					</div>
					<div class="col-md-6">
					  <label for="inputCostPerPrice" class="form-label">Product Code</label>
					  <input type="text" name="product_code" class="form-control" id="inputCostPerPrice" placeholder="00.00">
					</div>
					<div class="col-md-6">
					  <label for="inputStarPoints" class="form-label">Product Qnty</label>
					  <input type="text" name="product_qty" class="form-control" id="inputStarPoints" placeholder="00.00">
					</div>
  
  
					<div class="col-12">
					  <label for="inputProductType" class="form-label">Product Brand</label>

					  <select name="brand_id" class="form-control single-select select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true">
						@foreach($brands as $brand)
						<option value="{{$brand->id}}" data-select2-id="3">{{$brand->brand_name}}</option>
					@endforeach
					</select>
					</div>
  
					<div class="col-12">
					  <label for="inputVendor" class="form-label">Product Category</label>
					  <select name="category_id" class="form-control single-select select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true">
						@foreach($categories as $cat)
						<option value="{{$cat->id}}" data-select2-id="3">{{$cat->category_name}}</option>
					@endforeach
				
					</select>
					</div>
  
					<div class="col-12">
					  <label for="inputCollection" class="form-label">Product SubCategory</label>
					  <select name="subcategory_id" class="form-control single-select select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true">
						<option data-select2-id="3">select a category</option>
						<option data-select2-id="3"></option>
						
					</select>
					</div>
  
  
				
  
  
					<div class="col-12">
  
	   <div class="row g-3">
  
	   <div class="col-md-6">	
	  <div class="form-check">
			  <input class="form-check-input" name="hot_deals" type="checkbox" value="1" id="flexCheckDefault">
			  <label class="form-check-label" for="flexCheckDefault"> Hot Deals</label>
		  </div>
	  </div>
  
	  <div class="col-md-6">	
	  <div class="form-check">
			  <input class="form-check-input" name="featured" type="checkbox" value="1" id="flexCheckDefault">
			  <label class="form-check-label" for="flexCheckDefault">Featured</label>
		  </div>
	  </div>
  
  
  
  
  <div class="col-md-6">	
	  <div class="form-check">
			  <input class="form-check-input" name="speacial_offer" type="checkbox" value="1" id="flexCheckDefault">
			  <label class="form-check-label" for="flexCheckDefault">Special Offer</label>
		  </div>
	  </div>
  
  
	  <div class="col-md-6">	
	  <div class="form-check">
			  <input class="form-check-input" name="speacial_deal" type="checkbox" value="1" id="flexCheckDefault">
			  <label class="form-check-label" for="flexCheckDefault">Special Deals</label>
		  </div>
	  </div>
  
  
  
		  </div> <!-- // end row  -->
  
					</div>
  
  <hr>
  <br>
  
  
					<div class="col-12">
						<div class="d-grid">
						   <button type="submit" class="btn btn-primary">Save Product</button>
					  </div>
				  </div>
				  </form>
			  </div> 
		  </div>
		  </div>
	   </div><!--end row-->
	</div>
  </div>
</div>
<option value="{{$cat->id}}"> {{ $cat->category_name}}</option>

			</div>



<script type="text/javascript">
function mainThamUrl(input){
	if(input.files && input.files[0]){
		var reader = new FileReader();
		reader.onload = function(e){
			$('#mainThmb').attr('src',e.target.result).width(80).height(80);
		};
		reader.readAsDataURL(input.files[0]);
	}
}

</script>

<script> 
 
	$(document).ready(function(){
	 $('#multiImg').on('change', function(){ //on file input change
		if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
		{
			var data = $(this)[0].files; //this file data
			 
			$.each(data, function(index, file){ //loop though each file
				if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){ //check supported file type
					var fRead = new FileReader(); //new filereader
					fRead.onload = (function(file){ //trigger function on successful read
					return function(e) {
						var img = $('<img/>').addClass('thumb').attr('src', e.target.result) .width(100)
					.height(80); //create image element 
						$('#preview_img').append(img); //append image to output element
					};
					})(file);
					fRead.readAsDataURL(file); //URL representing the file's data.
				}
			});
			 
		}else{
			alert("Your browser doesn't support File API!"); //if File API is absent
		}
	 });
	});
	 
	</script>

<script type="text/javascript">
  		
	$(document).ready(function(){
		$('select[name="category_id"]').on('click', function(){
			var category_id = $(this).val();
			if (category_id) {
				$.ajax({
					url: "{{ url('/subcategory/ajax') }}/"+category_id,
					type: "GET",
					dataType:"json",
					success:function(data){
						$('select[name="subcategory_id"]').html('');
						var d =$('select[name="subcategory_id"]').empty();
						$.each(data, function(key, value){
							$('select[name="subcategory_id"]').append('<option value="'+ value.id + '">' + value.subcategory_name + '</option>');
						});
					},
				});
			} else {
				alert('danger');
			}
		});
	});
</script>


@endsection