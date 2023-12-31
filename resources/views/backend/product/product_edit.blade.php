@extends('admin.admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


<div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Edit Product</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">dashboard</a></li>
            <li class="breadcrumb-item"><a href="javaScript:void();">product</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Product</li>
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
              
            
               
            <form id="productForm" method="POST" action="{{ route('update.product') }}" >
                @csrf

              <input type="hidden" name="id" value="{{$products->id}}">
<div class="card">
<div class="card-body p-4">
  <h5 class="card-title">Edit Product</h5>
  <hr/>
   <div class="form-body mt-4">
    <div class="row">
       <div class="col-lg-8">
       <div class="border border-3 p-4 rounded">


        <div class="mb-3">
            <label for="inputProductTitle" class="form-label">Product Name</label>
            <input type="text" name="product_name" value="{{$products->product_name}}" class="form-control" id="inputProductTitle" placeholder="Enter product title">
          </div>

        <div class="mb-3"> 
            <div class="form-group">
                <label for="inputProductTitle" class="form-label">Product Tags</label><br>
                <input name="product_tags" type="text" class="form-control" data-role="tagsinput" id="inputProductTitle" value='{{$products->product_tags}}'  style="display: none;">
            </div>
          </div>

        



          <div class="mb-3">
            <label for="inputProductDescription" class="form-label">Long Description</label>
            <textarea  name="long_descp" class="form-control" id="inputProductDescription" rows="3">{{$products->long_descp}}</textarea>
          </div>
          <div class="mb-3">
            <label for="inputProductDescription" class="form-label">Short Description</label>
            <textarea name="short_descp" class="form-control" id="inputProductDescription" rows="3">{{$products->short_descp}}</textarea>
          </div>


         







        </div>
       </div>
       <div class="col-lg-4">
        <div class="border border-3 p-4 rounded">
            <div class="row g-3">
              <div class="col-md-6">
                  <label for="inputPrice" class="form-label">Product Price</label>
                  <input value="{{$products->selling_price}}" type="text" name="selling_price" class="form-control" id="inputPrice">
                </div>
                <div class="col-md-6">
                  <label for="inputCompareatprice" class="form-label">Discount Price </label>
                  <input type="text" name="discount_price" class="form-control" id="inputCompareatprice" value="{{$products->discount_price}}">
                </div>
                <div class="col-md-6">
                  <label for="inputCostPerPrice" class="form-label">Product Code</label>
                  <input type="text" name="product_code" class="form-control" id="inputCostPerPrice" value="{{$products->product_code}}">
                </div>
                <div class="col-md-6">
                  <label for="inputStarPoints" class="form-label">Product Qnty</label>
                  <input type="text" name="product_qty" class="form-control" id="inputStarPoints" value="{{$products->product_qty}}">
                </div>


                <div class="col-12">
                  <label for="inputProductType" class="form-label">Product Brand</label>

                  <select name="brand_id" class="form-control single-select select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true">
                    @foreach($brands as $brand)
                    {{-- id match then extract data --}}
                    <option value="{{$brand->id}}" {{($brand->id == $products->brand_id ? 'selected' : " " )}} data-select2-id="3">{{$brand->brand_name}}</option>
                @endforeach
                </select>
                </div>

                <div class="col-12">
                  <label for="inputVendor" class="form-label">Product Category</label>
                  <select name="category_id" class="form-control single-select select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true">
                    @foreach($categories as $cat)
                    <option value="{{$cat->id}}" {{($cat->id == $products->category_id ? 'selected' : " " )}} data-select2-id="3">{{$cat->category_name}}</option>
                @endforeach
            
                </select>
                </div>

                <div class="col-12">
                  <label for="inputCollection" class="form-label">Product SubCategory</label>
                  <select name="subcategory_id" class="form-control single-select select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true">
                    @foreach($subcategories as $subcat)
                    <option value="{{$subcat->id}}" {{($subcat->id == $products->subcategory_id ? 'selected' : " " )}} data-select2-id="3">{{$subcat->subcategory_name}}</option>
                @endforeach
                    
                </select>
                </div>


            


                <div class="col-12">

   <div class="row g-3">

   <div class="col-md-6">	
  <div class="form-check">
          <input {{ $products->hot_deals ==1 ? 'checked' : ''}} class="form-check-input" name="hot_deals" type="checkbox" value="1" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault"> Hot Deals</label>
      </div>
  </div>

  <div class="col-md-6">	
  <div class="form-check">
          <input {{ $products->featured ==1 ? 'checked' : ''}} class="form-check-input" name="featured" type="checkbox" value="1" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault">Featured</label>
      </div>
  </div>




<div class="col-md-6">	
  <div class="form-check">
          <input {{ $products->speacial_offer ==1 ? 'checked' : ''}} class="form-check-input" name="speacial_offer" type="checkbox" value="1" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault">Special Offer</label>
      </div>
  </div>


  <div class="col-md-6">	
  <div class="form-check">
          <input {{ $products->speacial_deal ==1 ? 'checked' : ''}} class="form-check-input" name="speacial_deal" type="checkbox" value="1" id="flexCheckDefault">
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