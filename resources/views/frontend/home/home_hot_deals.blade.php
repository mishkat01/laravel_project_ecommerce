<style>
    .heading-box {
        background-color: rgb(17, 17, 17);
        padding: 8px;
        color: white;
        margin: 0;
        width: 150px;
        font-size: 18px;
    }

    .heading-line {
        width: 100%;
        height: 2px;
        background-color: black;
        margin: 0;
    }
</style>
@php
    $newProduct = App\Models\Product::where('hot_deals', 1)
        ->orderBy('id', 'ASC')
        ->limit(10)
        ->get();
@endphp

<section class="product-tabs section-padding position-relative">
    <div class="container">
        <div class="section-title style-2 wow animate__animated animate__fadeIn">
            <div class="heading-box">Hot Deals</div>

            <div class="heading-line"></div>

        </div>
        <!--End nav-tabs-->
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                <div class="row product-grid-4">

                    @foreach ($newProduct as $product)
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30 wow animate__animated animate__fadeIn"
                                data-wow-delay=".1s">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a
                                            href="{{ url('product/details/' . $product->id . '/' . $product->product_slug) }}">
                                            <img class="default-img" src="{{ asset($product->product_thambnail) }}"
                                                alt="" />
                                            <img class="hover-img" src="{{ asset($product->product_thambnail) }}"
                                                alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1"
                                        style="
                                      width: 42px;
                                  ">
                                        <ul>
                                            <li><a aria-label="Add To Wishlist" class="action-btn"
                                                    href="shop-wishlist.html"><i class="fi-rs-heart"></i></a></li>
                                            <li> <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i
                                                        class="fi-rs-shuffle"></i></a>
                                            </li>
                                            <li>
                                                <a onclick="productView(this.id)" id="{{ $product->id }}"
                                                    aria-label="Quick view" class="action-btn" data-bs-toggle="modal"
                                                    data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            </li>
                                        </ul>



                                    </div>
                                    @php
                                        $amount = $product->selling_price - $product->discount_price;
                                        $discount = ($amount / $product->selling_price) * 100;
                                    @endphp

                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        @if ($product->discount_price == null)
                                            <span class="new">New</span>
                                        @else
                                            <span class="hot">{{ round($discount) }} %</span>
                                        @endif

                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="shop-grid-right.html">{{ $product['category']['category_name'] }}</a>
                                    </div>
                                    <h2><a id="hname"
                                            href="{{ url('product/details/' . $product->id . '/' . $product->product_slug) }}">{{ $product->product_name }}</a>
                                    </h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    {{-- <div>
                                          <span class="font-small text-muted">By <a href="vendor-details-1.html">Intel</a></span>
                                      </div> --}}
                                    <div class="product-card-bottom">
                                        @if ($product->discount_price == null)
                                            <div class="product-price">
                                                <span>৳{{ $product->selling_price }}</span>

                                            </div>
                                        @else
                                            <div class="product-price">
                                                <span>৳{{ $product->discount_price }}</span>
                                                <span class="old-price">৳{{ $product->selling_price }}</span>
                                            </div>
                                        @endif

                                        <div class="add-cart" onclick="addToCarthome({{ $product->id }})">
                                            {{-- <input type="text" id="hproduct_id" value="{{ $product->id }}"> --}}
                                            <input type="hidden" id="hqty" value=1>
                                            <a type="submit" class="add"><i class="fi-rs-shopping-cart mr-5"></i>Add
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!--end product card-->


                    <!--end product card-->
                </div>
                <!--End product-grid-4-->
            </div>
            <!--En tab one-->

            <!--En tab seven-->
        </div>
        <!--End tab-content-->
    </div>
</section>
