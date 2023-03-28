@extends('layouts.getquote')
@section('content')


<div class="banner-section d-flex align-items-center">
        <div class="container">
            <div class="row">
              <div class="col-lg-6 col-md-12 col-sm-12 d-flex align-items-center ">
                <div class="style">
                  <div class="text">
                    <h4> TALK TO WEBSITE
                      DESIGN EXPERT</h4>
                      <p> Schedule a free consultation to discover digital marketing strategies that can help your business reach it’s online marketing goals.</p>
                      <p class="mt-1"> Learn more about SEO and optimization that makes a website rank at top of search engine result pages. Get more details, Speak to an expert marketing consultant now!                      </p>
                    </div>
                </div>
              </div>
              <!-- col-close  -->
              <div class="col-lg-6 col-md-12 col-sm-12  ">
                <div class="style-to">
                  <h3> WEB DESIGN</h3>
                  <!-- form  -->
                  <form action="sumbit">
                  <div class="form-1  mt-5 d-flex align-items-center">
                      <input type="radio" id="website" name="services" value="website">
                  <label for="website">website</label>
                  </div>

                  <div class="form-1 mt-3  d-flex align-items-center">
                      <input type="radio" id="Landing-Page" name="services" value="Landing-Page">
                    <label for="Landing-Page">Landing Page</label>
                    </div>

                    <div class="form-1 mt-3 d-flex align-items-center">
                        <input type="radio" id="Social-Shop" name="services" value="Social-Shop">
                     <label for="Social-Shop">Social Shop</label>
                     </div>

                     <div class="form-1 mt-3 d-flex align-items-center">
                        <input type="radio" id="Marketing-Automation" name="services" value="Marketing-Automation">
                      <label for="Marketing-Automation">Marketing Automation</label>
                      </div>

                       <div class="form-1 mt-3 d-flex align-items-center">
                          <input type="radio" id="Campaign-Design" name="services" value="Campaign-Design">
                       <label for="Campaign-Design">Campaign Design</label>
                     </div>
                     <div class="form-1 mt-3 d-flex align-items-center">
                        <input type="radio" id="E-Catalog & Inventory" name="services" value="E-Catalog & Inventory">
                     <label for="E-Catalog & Inventory">E-Catalog & Inventory</label>
                   </div>
                     <button type="submit" value="submit" class="btn-submit mt-4">CONTINUE</button>
                     </form>
                  <!-- form  -->
                </div>
                </div>
            </div>
        </div>
    </div>  
    <!-- banner-section close    -->
    <div class="web-section1">
      <div class="container">
        <div class="text-center">
          <h5> Get a website in ONE week</h5>
        </div>
        <div class="row g-md-3  g-sm-3 mt-2">
          <div class="col-lg-4 col-md-6 col-sm-12 ">
            <div class="card-style">
              <div class="img">
                <img src="{{ asset('/images/web-1.png')}}" alt="">
              </div>
              <div class="text">
              <h4>LANDING PAGE DESIGN</h4>
              <p> Designing funnel form promotions, tracking systems and custom Call-to-Action landing pages that invoke reaction is a skill we excel at. Track conversion rate, improve sales results and get the best ROI with effective sales pages.
                Meet your landing page designer, explore our lead conversion resources and generate more online sales with our high conversion landing page design.</p>
              </div>
            </div>
          </div>
          <!-- col-close  -->
          <div class="col-lg-4 col-md-6 col-sm-12 ">
            <div class="card-style">
              <div class="img">
                <img src="{{ asset('/images/web-2.png')}}" alt="">
              </div>
              <div class="text">
              <h4>LANDING PAGE DESIGN</h4>
              <p> Designing funnel form promotions, tracking systems and custom Call-to-Action landing pages that invoke reaction is a skill we excel at. Track conversion rate, improve sales results and get the best ROI with effective sales pages.
                Meet your landing page designer, explore our lead conversion resources and generate more online sales with our high conversion landing page design.</p>
              </div>
            </div>
          </div>
          <!-- col-close  -->
          <div class="col-lg-4 col-md-6 col-sm-12 ">
            <div class="card-style">
              <div class="img">
                <img src="{{ asset('/images/web-3.png')}}" alt="">
              </div>
              <div class="text">
                <h4>SOCIAL SHOP DESIGN</h4>
                <p> Customize your social store, revamp brand pages and upgrade your product catalog to an ecommerce solution that fits your social media strategy, track inventory and maximize online sales. Our digital design services are perfect for fashion designers, product sellers and entrepreneurs.</p>
              </div>
            </div>
          </div>
            <!-- col-close  -->
            <div class="col-lg-4 col-md-6 col-sm-12 ">
              <div class="card-style">
                <div class="img">
                  <img src="{{ asset('/images/web-4.png')}}" alt="">
                </div>
                <div class="text ">
                  <h4>MARKETING
                    AUTOMATION</h4>
                    <p> Email template design and social automation strategies play a principal role in taking a business to the next level. Talk about the best platform option for your business with an email, social and expert digital marketing automation tool designer for successful sales campaigns.</p>
                </div>
              </div>
            </div>
            <!-- col-close  -->
            <div class="col-lg-4 col-md-6 col-sm-12 ">
              <div class="card-style">
                <div class="img">
                  <img src="{{ asset('/images/web-5.png')}}" alt="">
                </div>
                <div class="text">
                  <h4>CAMPAIGN
                    DESIGN</h4>
                    <p> High conversion rate is a result of organic pages, successful display advertising and social ad campaigns. Display ads, videos and pages to maximize reaction. Get custom ads, pages, campaigns and strategies that follow digital stories, creative goals and marketing plans.</p>
                </div>
              </div>
            </div>
            <!-- col-close  -->
            <div class="col-lg-4 col-md-6 col-sm-12 ">
              <div class="card-style">
                <div class="img">
                  <img src="{{ asset('/images/web-6.png')}}" alt="">
                </div>
                <div class="text">
                  <h4>E-CATALOG AND INVENTORY PLATFORM DESIGN</h4>
                  <p> Sell on social media, integrate a catalog with inventory and use a professional order fulfilment process. Use social media to generate more online sales, adopt to market changes and customer habits.                  </p>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>

<!-- sectionc close  -->
<section class="get-f">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d184552.57289742303!2d-79.51814179377936!3d43.71815566213178!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d4cb90d7c63ba5%3A0x323555502ab4c477!2sToronto%2C%20ON%2C%20Canada!5e0!3m2!1sen!2sin!4v1678602016785!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
<!-- section close     -->
@stop