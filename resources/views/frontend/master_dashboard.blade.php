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

        //start product view with model
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
                // console.log(data)

                //start message
                const Toast = Swal.mixin({
                    toast:true,
                    position: "top-end",
                    icon: "success",
                    
                    showConfirmButton: false,
                    timer: 3000
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

    </script>

</body>

</html>