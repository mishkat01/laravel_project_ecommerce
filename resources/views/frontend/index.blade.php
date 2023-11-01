@extends('frontend.master_dashboard')
@section('main')


        @include('frontend.home.home_slider')
        <!--End hero slider-->
      
        @include('frontend.home.home_top_cat')

        <!--End category slider-->
      
        <!--End banners-->

        <style>
  .branch-with-border {
    height: 210px;
    border: 2px solid #ccc;
    padding: 10px;
  }
</style>

@include('frontend.home.home_new_products')
@include('frontend.home.home_product_2')
        <!--Products Tabs-->




        <!--End Best Sales-->









        <!-- TV Category -->

  
        <!--End TV Category -->





        <!-- Tshirt Category -->

 
        <!--End Tshirt Category -->








        <!-- Computer Category -->


        <!--End Computer Category -->







        <section class="section-padding mb-30" style="color:Black;">
            <div class="container">
                <div class="row">
                 <h4>The Leading Retail and Online Shop for Computers, Laptops, Monitors & Accessories in Bangladesh</h4>
                 <p>If you are looking for the best computer shop in Bangladesh you have to consider Ryans Computers, as it is a pioneer computer shop and e-commerce platform selling computer and IT products all over Bangladesh through its branches and website. It provides a fast, secure, and convenient online shopping experience with a broad product offering in categories ranging from desktop PC, laptop to office equipment, camera, and smart daily life accessories. Ryans is always endeavoring to offer its customers the best possible facility – including multiple payment options, EMI Facility, best price, cash on delivery, delivery in 64 districts, free home delivery inside Dhaka, Chattogram and Barishal city, 24/7 online support, and extensive customer service and warranty commitments.</p>
               
                 <div class="row">
  <!-- Branch 1 -->
  <div class="col-lg-3 col-6 mb-3">
    <div class="branch-with-border">
      <span class="branch-name">IDB BHABAN, DHAKA</span><br>
      123/5 BCS Computer City, Agargaon<br>
      Tel: +8809604442121 (Sales), +8801755513935 (Service) <br>
      Map Link: <a href="https://ryans.id/IDB-Bhaban-Branch" onclick="openMap(this.href)">https://ryans.id/IDB-Bhaban-Branch</a>
    </div>
  </div>

  <!-- Branch 2 -->
  <div class="col-lg-3 col-6 mb-3">
    <div class="branch-with-border">
      <span class="branch-name">BANANI, DHAKA</span><br>
      41 Kamal Ataturk Avenue, Banani<br>
      Tel: +8809638009072 (Sales), +8801755513933 (Service) <br>
      Map Link: <a href="https://ryans.id/Banani_Branch" onclick="openMap(this.href)">https://ryans.id/Banani_Branch</a>
    </div>
  </div>

  <!-- Branch 3 -->
  <div class="col-lg-3 col-6 mb-3">
    <div class="branch-with-border">
      <span class="branch-name">UTTARA-1, DHAKA</span><br>
      36 Sonargaon Janapath (Beside Uttara Adhunik Medical College & Hospital), 2nd Floor, Sector 9, Uttara<br>
      Tel: +8801755513929 (Sales), +8801755513930 (Service) <br>
      Map Link: <a href="https://ryans.id/Uttara-Branch" onclick="openMap(this.href)">https://ryans.id/Uttara-Branch</a>
    </div>
  </div>

  <!-- Branch 4 -->
  <div class="col-lg-3 col-6 mb-3">
    <div class="branch-with-border">
      <span class="branch-name">UTTARA-2, DHAKA</span><br>
      House Building, 11 Sonargaon Janapath, Sector 7, Uttara Dhaka 1230<br>
      Tel: +8801313467629 (Sales), +8801313467630 (Service) <br>
      Map Link: <a href="https://ryans.id/Uttara2-Branch" onclick="openMap(this.href)">https://ryans.id/Uttara2-Branch</a>
    </div>
  </div>

  <!-- Add more branches as needed -->
  <!-- ... -->

</div>
 

                </div>
            </div>
        </section>
        <!--End 4 columns-->









  <!--Vendor List -->

<div class="container">

  
                    <!--end vendor card-->
                 
                    <!--end vendor card-->
                  
                    <!--end vendor card-->
                 
                    <!--end vendor card-->

                </div> 
            </div>


 <!--End Vendor List -->

@endsection