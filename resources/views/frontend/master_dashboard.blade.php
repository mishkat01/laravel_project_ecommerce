<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <title>Ryans Computers</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="" />

    <meta name="csrf-token" content="{{ csrf_token() }}">
 



    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <!-- Favicon -->  
    <link rel="shortcut icon" href="https://www.ryanscomputers.com/assets/images/favicon.ico" type="image/x-icon">
    <!-- <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/imgs/theme/favicon.svg') }}" /> -->
    <!-- Template CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-xxx" crossorigin="anonymous" />

    <link href="https://cdn.jsdelivr.net/npm/toastr@2.1.4/build/toastr.min.css" rel="stylesheet">

   


    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/main.css?v=5.3') }}" />
</head>

<body>
    <!-- Modal -->

    <!-- Quick view -->
    @include("frontend.body.quickview")

    <!-- Header  -->
    
@include("frontend.body.header")
   
    <!--End header-->

 <main class="main">
        @yield('main')

    </main>
@include("frontend.body.footer")


   
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="text-center">
                    <img src="{{ asset('frontend/assets/imgs/theme/loading.gif') }}" alt="" />
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <!-- Vendor JS-->
    <script src="{{ asset('frontend/assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/slick.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/jquery.syotimer.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/waypoints.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/wow.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/magnific-popup.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/select2.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/counterup.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/images-loaded.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/isotope.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/scrollup.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/jquery.vticker-min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/jquery.theia.sticky.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/jquery.elevatezoom.js') }}"></script>
    <!-- Template  JS -->
    <script src="{{ asset('frontend/assets/js/main.js?v=5.3') }}"></script>
    <script src="{{ asset('frontend/assets/js/shop.js?v=5.3') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://cdn.jsdelivr.net/npm/toastr@2.1.4/build/toastr.min.js"></script>

    <script>
       @if(Session::has('message'))
       var type = "{{ Session::get('alert-type', 'info') }}"
       switch (type) {
         case 'info':
           toastr.info(" {{ Session::get('message') }} ");
           break;
   
         case 'success':
           toastr.success(" {{ Session::get('message') }} ");
           break;
   
         case 'warning':
           toastr.warning(" {{ Session::get('message') }} ");
           break;
   
         case 'error':
           toastr.error(" {{ Session::get('message') }} ");
           break;
       }
       @endif
     </script>

    <script>
        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
            }
        })

        function productView(id){
            // alert(id);
            $.ajax({
                type:'GET',
                url:'/product/view/model/'+id,
                dataType:'json',
                success:function(data){
                    // console.log(data)
                    $('#pname').text(data.product.product_name);
                    $('#pprice').text(data.product.discount_price);
                    $('#oldprice').text(data.product.selling_price);
                    $('#pcode').text(data.product.product_code);
                    $('#pimage').attr('src','/'+data.product.product_thambnail);
                    $('#pstock').text(data.product.product_qty);

                    $('#product_id').val(id);
                    $('#qty').val(1);

                    if(data.product.discount_price==null){
                        $('#pprice').text('');
                        $('#oldprice').text('');
                        $('#pprice').text(data.product.selling_price);
                    }else{
                        $('#pprice').text(data.product.selling_price);
                        $('#oldprice').text(data.product.selling_price);
                    }
                   

                }
            })
        }
        //End product view with model 

        //start product view cart with model
      function  addToCart(){
        var product_name= $('#pname').text();
        var id= $('#product_id').val();
        var qty= $('#qty').val();
        $.ajax({
            type:"POST",
            dataType : 'json',
            data : {
                qty:qty,
                product_name:product_name,
            },
            url : "/cart/data/store/"+id,
            success:function(data){
                miniCart();
                $('#closeModal').click();
                // console.log(data)

                //start message
                const Toast = Swal.mixin({
                    toast:true,
                    position: "top-end",
                    icon: "success",
                    
                    showConfirmButton: false,
                    timer: 1000
                })
                if($.isEmptyObject(data.error)){
                    Toast.fire({
                    
                    type: "success",
                    title: data.success,
                  
                    });
                }else{
                    Toast.fire({
                    
                    type: "error",
                    title: data.error,
                  
                    });
                        
                    }
                //end message
            }
        })

      }

           //start product view cart with model
           function  addToCarthome(){
        var product_name= $('#hname').text();
        var id= $('#hproduct_id').val();
        var qty= $('#hqty').val();
        $.ajax({
            type:"POST",
            dataType : 'json',
            data : {
                qty:qty,
                product_name:product_name,
            },
            url : "/hcart/data/store/"+id,
            success:function(data){
                miniCart();
                
                // console.log(data)

                //start message
                const Toast = Swal.mixin({
                    toast:true,
                    position: "top-end",
                    icon: "success",
                    
                    showConfirmButton: false,
                    timer: 1000
                })
                if($.isEmptyObject(data.error)){
                    Toast.fire({
                    
                    type: "success",
                    title: data.success,
                  
                    });
                }else{
                    Toast.fire({
                    
                    type: "error",
                    title: data.error,
                  
                    });
                        
                    }
                //end message
            }
        })

      }


          //start product Details add to cart
          function  addToCartDetails(){
        var product_name= $('#dpname').text();
        var id= $('#dproduct_id').val();
        var qty= $('#dqty').val();
        $.ajax({
            type:"POST",
            dataType : 'json',
            data : {
                qty:qty,
                product_name:product_name,
            },
            url : "/dcart/data/store/"+id,
            success:function(data){
                miniCart();
               
                // console.log(data)

                //start message
                const Toast = Swal.mixin({
                    toast:true,
                    position: "top-end",
                    icon: "success",
                    
                    showConfirmButton: false,
                    timer: 1000
                })
                if($.isEmptyObject(data.error)){
                    Toast.fire({
                    
                    type: "success",
                    title: data.success,
                  
                    });
                }else{
                    Toast.fire({
                    
                    type: "error",
                    title: data.error,
                  
                    });
                        
                    }
                //end message
            }
        })

      }//end details cart

    </script>

<script type="text/javascript">
    
    function miniCart(){
       $.ajax({
           type: 'GET',
           url: '/product/mini/cart',
           dataType: 'json',
           success:function(response){
               console.log(response)
            $('#cartQty').text(response.cartQty)
            
            $('span[id="cartSubTotal"]').text(response.cartTotal)
   
           var miniCart = ""
   
           $.each(response.carts, function(key,value){
              miniCart += ` 
              <br>
              <ul>
               <li>
                   <div class="shopping-cart-img">
                       <a href="shop-product-right.html"><img alt="Nest" src="/${value.options.image} " style="width:50px;height:50px;" /></a>
                   </div>
                   <div class="shopping-cart-title" style="margin: -73px 74px 14px; width" 146px;>
                       <h4><a href="shop-product-right.html"> ${value.name} </a></h4>
                       <h4><span>${value.qty} × </span>${value.price}</h4>
                   </div>
                   <div class="shopping-cart-delete" style="margin: -85px 1px 0px;">
                    <a type="submit" id="${value.rowId}" onclick="miniCartRemove(this.id)" ><i class="fi-rs-cross-small"></i></a>
                   </div>
               </li> 
           </ul>
            
                  `  
             });
   
               $('#miniCart').html(miniCart);
   
           }
   
       })
    }
     miniCart();
   //Mini Cart remove start 
    function miniCartRemove(rowId){
        $.ajax({
            type:"GET",
            url:'/minicart/product/remove/'+rowId,
            dataType: 'json',
            success: function(data){
                miniCart()
                  //start message
                  const Toast = Swal.mixin({
                    toast:true,
                    position: "top-end",
                    icon: "success",
                    
                    showConfirmButton: false,
                    timer: 1000
                })
                if($.isEmptyObject(data.error)){
                    Toast.fire({
                    
                    type: "success",
                    title: data.success,
                  
                    });
                }else{
                    Toast.fire({
                    
                    type: "error",
                    title: data.error,
                  
                    });
                        
                    }
                //end message
            }
        })
    }
   //remove end
   
   </script>

{{-- load my cart --}}
   <script>

function cart(){
       $.ajax({
           type: 'GET',
           url: '/get-cart-product',
           dataType: 'json',
           success:function(response){
               // console.log(response)
          
   
           var rows = ""
   
           $.each(response.carts, function(key,value){
            rows += ` 
                        <tr class="pt-30">
                        <td class="custome-checkbox pl-30">

                        </td>
                        <td class="image product-thumbnail pt-40" style="width:200px;"><img src="/${value.options.image}" alt="#"></td>
                        <td class="product-des product-name">
                            <h6 class="mb-5"><a class="product-name mb-10 text-heading" href="shop-product-right.html">${value.name}</a></h6>
                          
                        </td>
                        <td class="price" data-title="Price">
                            <h4 class="text-body">৳ ${value.price} </h4>
                        </td>

                      
                        <td class="text-center detail-info" data-title="Stock">
                            <div class="detail-extralink mr-15">
                                <div class="detail-qty border radius">

                                    <a type="submit" id="${value.rowId}" onclick="cartDec(this.id)" href="#" class="qty-down"><i class="fi-rs-angle-small-down"></i></a>

                                    <input type="text" name="quantity" class="qty-val" value="${value.qty}" min="1">
                                    
                                    <a type="submit" id="${value.rowId}" onclick="cartInc(this.id)" href="#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a>
                                     
                                </div>
                            </div>
                        </td>
                        <td class="price" data-title="Price">
                            <h4 class="text-brand">৳ ${value.subtotal} </h4>
                        </td>
                        <td class="action text-center" data-title="Remove">
                            <a type="submit" id="${value.rowId}" onclick="cartRemove(this.id)" class="text-body">
                                <i class="fi-rs-trash"></i>
                                </a>
                                </td>

                                
                                
                        </tr>

                  `  
             });
   
               $('#cartPage').html(rows);
   
           }
   
       })
    }
    cart();

     // Cart remove start 
     function cartRemove(rowId){
        $.ajax({
            type:'GET',
            url:'/cart-remove/'+rowId,
            dataType: 'json',
            success: function(data){
                cart()
                miniCart()
                  //start message
                  const Toast = Swal.mixin({
                    toast:true,
                    position: "top-end",
                    icon: "success",
                    
                    showConfirmButton: false,
                    timer: 1000
                })
                if($.isEmptyObject(data.error)){
                    Toast.fire({
                    
                    type: "success",
                    title: data.success,
                  
                    });
                }else{
                    Toast.fire({
                    
                    type: "error",
                    title: data.error,
                  
                    });
                        
                    }
                //end message
            }
        })
    }
    
        //remove end

        //cartdecc
        function cartDec(rowId){
            $.ajax({
                type:'GET',
                url:'/cart-dec/'+rowId,
                dataType: 'json',
                success: function(data){
                    cart()
                    miniCart()
                    
                }
            })
        }


        //cartinc

        function cartInc(rowId){
            $.ajax({
                type:'GET',
                url:'/cart-inc/'+rowId,
                dataType: 'json',
                success: function(data){
                    cart()
                    miniCart()
                    
                }
            })
        }
   </script>



</body>

</html>