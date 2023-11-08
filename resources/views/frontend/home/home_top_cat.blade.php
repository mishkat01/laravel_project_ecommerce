<style>
     

      .heading-box {
        background-color: rgb(17, 17, 17);
        padding: 8px;
        color: white;
        margin: 0;
        width: 300px;
        font-size: 15px;
      }

      .heading-line {
        width: 100%;
        height: 100px;
        background-color: black;
        margin: 0;
      }
    </style>
@php
$categories = App\Models\Category::orderBy('category_name','ASC')->limit(5)->get();    
@endphp

<section class="popular-categories section-padding" style="background-color:white">
            <div class="container wow animate__animated animate__fadeIn">
                <div class="section-title">
                    <div class="heading-box">Category</div>

                    <div class="heading-line"></div>
                </div>
                
                <div class="carausel-10-columns-cover position-relative">
                    <div class="carausel-10-columns" id="carausel-10-columns">
                        @foreach ($categories as $item)
                            
                        
                        <div class="card-2 bg-9 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                            <figure class="img-hover-scale overflow-hidden">
                                <a href="shop-grid-right.html"><img src="{{ asset($item->category_image) }}" alt="" /></a>
                            </figure>
                            <h6><a href="shop-grid-right.html">{{$item->category_name}}</a></h6>
                            <!-- <span>26 items</span> -->
                        </div>
                        @endforeach
                       
                    </div>
                </div>
            </div>
        </section>