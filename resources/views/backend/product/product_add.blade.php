@extends('admin.admin_dashboard')
@section('admin')

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
					<input type="text" class="form-control" data-role="tagsinput" id="inputProductTitle" value='new Product,Top product'  style="display: none;">
				</div>
			  </div>

			



			  <div class="mb-3">
				<label for="inputProductDescription" class="form-label">Long Description</label>
				<textarea name="short_descp" class="form-control" id="inputProductDescription" rows="3"></textarea>
			  </div>
			  <div class="mb-3">
				<label for="inputProductDescription" class="form-label">Short Description</label>
				<textarea name="long_descp" class="form-control" id="inputProductDescription" rows="3"></textarea>
			  </div>


			 



  <div class="mb-3">
				<label for="inputProductTitle" class="form-label">Main Thambnail</label>
				<input name="product_thambnail" class="form-control" type="file" id="formFile">
			  </div>



  <div class="mb-3">
				<label for="inputProductTitle" class="form-label">Multiple Image</label>
				<input class="form-control" name="multi_img[]" type="file" id="formFileMultiple" multiple="">
			  </div>



            </div>
		   </div>
		   <div class="col-lg-4">
			<div class="border border-3 p-4 rounded">
				<div class="row g-3">
				  <div class="col-md-6">
					  <label for="inputPrice" class="form-label">Product Price</label>
					  <input type="text" name="selling_price" class="form-control" id="inputPrice" placeholder="00.00">
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
					  <select class="form-control single-select select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true">
						<option data-select2-id="3">India</option>
						<option data-select2-id="9">England</option>
						<option data-select2-id="10">America</option>
						<option data-select2-id="11">China</option>
						<option data-select2-id="12">Australiya</option>
						<option data-select2-id="13">Newzeland</option>
						<option data-select2-id="14">Dubai</option>
						<option data-select2-id="15">United Kingdom</option>
					</select>
					</div>
  
					<div class="col-12">
					  <label for="inputVendor" class="form-label">Product Category</label>
					  <select class="form-control single-select select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true">
						<option data-select2-id="3">India</option>
						<option data-select2-id="9">England</option>
						<option data-select2-id="10">America</option>
						<option data-select2-id="11">China</option>
						<option data-select2-id="12">Australiya</option>
						<option data-select2-id="13">Newzeland</option>
						<option data-select2-id="14">Dubai</option>
						<option data-select2-id="15">United Kingdom</option>
					</select>
					</div>
  
					<div class="col-12">
					  <label for="inputCollection" class="form-label">Product SubCategory</label>
					  <select class="form-control single-select select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true">
						<option data-select2-id="3">India</option>
						<option data-select2-id="9">England</option>
						<option data-select2-id="10">America</option>
						<option data-select2-id="11">China</option>
						<option data-select2-id="12">Australiya</option>
						<option data-select2-id="13">Newzeland</option>
						<option data-select2-id="14">Dubai</option>
						<option data-select2-id="15">United Kingdom</option>
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
			  <input class="form-check-input" name="special_offer" type="checkbox" value="1" id="flexCheckDefault">
			  <label class="form-check-label" for="flexCheckDefault">Special Offer</label>
		  </div>
	  </div>
  
  
	  <div class="col-md-6">	
	  <div class="form-check">
			  <input class="form-check-input" name="special_deals" type="checkbox" value="1" id="flexCheckDefault">
			  <label class="form-check-label" for="flexCheckDefault">Special Deals</label>
		  </div>
	  </div>
  
  
  
		  </div> <!-- // end row  -->
  
					</div>
  
  <hr>
  
  
					<div class="col-12">
						<div class="d-grid">
						   <button type="button" class="btn btn-primary">Save Product</button>
					  </div>
				  </div>
			  </div> 
		  </div>
		  </div>
	   </div><!--end row-->
	</div>
  </div>
</div>

			</div>






@endsection