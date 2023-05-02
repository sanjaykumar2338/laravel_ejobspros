@extends('layouts.getquote')
@section('content')

<title>Web Design Services for Conversion Centered Websites</title>
<meta name="description" content="We are an affordable website design firm that produces conversion-centered websites. Our web designers improve the ux design impact of your business.">

<div class="section1 banner-section d-flex align-items-center">
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
              <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="style-to">

                  @if (Session::has('message'))
                   <div class="alert alert-info">{{ Session::get('message') }}</div>
                  @endif
                  <!-- form  -->
                  <form action="sumbit" id="main_frm">
                    
                    <h3> WEB DESIGN</h3>

                    <div class="form-1  mt-5 d-flex align-items-center">
                      <input type="radio" required id="website" name="services" value="website">
                      <label for="website">website</label>
                    </div>

                    <div class="form-1 mt-3  d-flex align-items-center">
                      <input type="radio" required id="Landing-Page" name="services" value="Landing-Page">
                      <label for="Landing-Page">Landing Page</label>
                    </div>

                    <div class="form-1 mt-3 d-flex align-items-center">
                      <input type="radio" required id="Social-Shop" name="services" value="Social-Shop">
                      <label for="Social-Shop">Social Shop</label>
                    </div>

                    <div class="form-1 mt-3 d-flex align-items-center">
                      <input type="radio" required id="Marketing-Automation" name="services" value="Marketing-Automation">
                      <label for="Marketing-Automation">Marketing Automation</label>
                    </div>

                    <div class="form-1 mt-3 d-flex align-items-center">
                      <input type="radio" required id="Campaign-Design" name="services" value="Campaign-Design">
                      <label for="Campaign-Design">Campaign Design</label>
                     </div>
                     <div class="form-1 mt-3 d-flex align-items-center">
                      <input type="radio" required id="E-Catalog & Inventory" name="services" value="E-Catalog & Inventory">
                     <label for="E-Catalog & Inventory">E-Catalog & Inventory</label>
                   </div>
                    
                    <button type="submit" value="submit" class="btn-submit mt-4 web_design_btn">CONTINUE</button>
                    </form>
                  <!-- form  -->
                  </div>
                  
                  <!-- I AM LOOKING FOR:FORM HTML CLOSE  -->
                  <form class="GET-A-QUOTE" method="post" action="{{url('/post_quote')}}">

                      @csrf
                      <div class="form-style-2" style="display:none;">
                        <h4> GET A QUOTE</h4>
                        <!-- heading close  -->
                        <input type="text" required name="your_name" placeholder="First Name">
                        <input type="text" required name="last_name" placeholder="Last Name">
                        <input type="email" required name="email" placeholder="email">
                        <input type="tel" name="contact_number" placeholder="contact number">
                        <input type="text" name="website_url" placeholder="Website url">

                        <input type="hidden" name="category" value="Web Design" id="category">
                        <input type="hidden" name="sub_category" id="sub_category">

                        <button class="" type="submit" name="frm_submit">Send</button>
                        <button class="back_last_btn"> Back</button>
                      </div>

                  </form>
                  <!-- GET-A-QUOTE FORM CLOSE  -->


                
                </div>
            </div>
        </div>
    </div>  
    <!-- banner-section close    -->
    <style type="text/css">
      .Get {
    padding: 15px 30px 15px 30px;
    font-size: 17px;
    margin-left: 12px;
    outline: none;
    border: #005cff;
    border-radius: 5px;
    background-color: #59606b;
    border: 1px solid white;
    color: white;
    font-family: 'Poppins', sans-serif;
    position: relative;
    z-index: 7;
    margin-top: 10px;
  }
    </style>
    <div class="web-section1">
      <div class="container">
        <div class="text-center">
          <h5> Get a website in ONE week</h5>
        </div>
        <div class="row g-md-3  g-sm-3 mt-2">
          <div class="col-lg-4 col-md-6 col-sm-12 ">
            <div class="card-style">
              <div class="img">
                <img src="{{ url('/asset/images/web-1.png')}}" alt=""> 
              </div>  
              <div class="text">
              <h4>LANDING PAGE DESIGN</h4>
                <p> Designing funnel form promotions, tracking systems and custom Call-to-Action landing pages that invoke reaction is a skill we excel at. Track conversion rate, improve sales results and get the best ROI with effective sales pages.
                Meet your landing page designer, explore our lead conversion resources and generate more online sales with our high conversion landing page design.</p>
                 <a href="{{url('/web-design/landing-page')}}"><button class="Learn">Learn more</button></a>
                 <a href="{{url('/free-consultation/get-a-quote')}}"><button class="Learn">start now</button></a>
              </div>
            </div><br>
          </div>
          <!-- col-close  -->
          <div class="col-lg-4 col-md-6 col-sm-12 ">
            <div class="card-style">
              <div class="img">
                <img src="{{ url('/asset/images/web-3.png')}}" alt="">
              </div>
              <div class="text">
                <h4>SOCIAL SHOP DESIGN</h4>
                <p> Customize your social store, revamp brand pages and upgrade your product catalog to an ecommerce solution that fits your social media strategy, track inventory and maximize online sales. Our digital design services are perfect for fashion designers, product sellers and entrepreneurs.</p>
                <a href="{{url('web-design/social-shop')}}"><button class="Learn">Learn more</button></a>
                <a href="{{url('free-consultation/get-a-quote')}}"><button class="Learn">start now</button></a>
              </div>
            </div>
             <br>
          </div>
            <!-- col-close  -->
            <div class="col-lg-4 col-md-6 col-sm-12 ">
              <div class="card-style">
                <div class="img">
                  <img src="{{ url('/asset/images/web-4.png')}}" alt="">
                </div>
                <div class="text ">
                  <h4>MARKETING
                    AUTOMATION</h4>
                    <p> Email template design and social automation strategies play a principal role in taking a business to the next level. Talk about the best platform option for your business with an email, social and expert digital marketing automation tool designer for successful sales campaigns.</p>
                    <a href="{{url('web-design/marketing-automation')}}"><button class="Learn">Learn more</button></a>
                    <a href="{{url('free-consultation/get-a-quote')}}"><button class="Learn">start now</button></a>
                </div>
              </div><br>
            </div>
            <!-- col-close  -->
            <div class="col-lg-4 col-md-6 col-sm-12 ">
              <div class="card-style">
                <div class="img">
                  <img src="{{ url('/asset/images/web-5.png')}}" alt="">
                </div>
                <div class="text">
                  <h4>CAMPAIGN
                    DESIGN</h4>
                    <p> High conversion rate is a result of organic pages, successful display advertising and social ad campaigns. Display ads, videos and pages to maximize reaction. Get custom ads, pages, campaigns and strategies that follow digital stories, creative goals and marketing plans.</p>
                    <a href="{{url('web-design/campaign-design')}}"><button class="Learn">Learn more</button></a>
                    <a href="{{url('free-consultation/get-a-quote')}}"><button class="Learn">start now</button></a>
                </div>
              </div><br>
            </div>
            <!-- col-close  -->
            <div class="col-lg-4 col-md-6 col-sm-12 ">
              <div class="card-style">
                <div class="img">
                  <img src="{{ url('/asset/images/web-6.png')}}" alt="">
                </div>
                <div class="text">
                  <h4>E-CATALOG AND INVENTORY PLATFORM DESIGN</h4>
                  <p> Sell on social media, integrate a catalog with inventory and use a professional order fulfilment process. Use social media to generate more online sales, adopt to market changes and customer habits.                  </p>
                  <a href="{{url('web-design/e-catalog-inventory')}}"><button class="Learn">Learn more</button></a>
                  <a href="{{url('free-consultation/get-a-quote')}}"><button class="Learn">start now</button></a>
                </div>
              </div><br>
            </div>
        </div>
      </div>
    </div>

<!-- sectionc close  -->
<section class="get-f">
    @include('includes.map')
</section>
<!-- section close     -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
  $('.web_design_btn').on('click', function(e){
      e.preventDefault();
      var radioValue = $("input[name='services']:checked").val();
      if (typeof radioValue  !== "undefined"){
        $('#sub_category').val(radioValue);
        $('#main_frm').hide();
        $('.form-style-2').show();
      }
  });

  $('.back_last_btn').on('click', function(e){
    e.preventDefault();
    $('#main_frm').show();
    $('.form-style-2').hide();    
  });
</script>
@stop