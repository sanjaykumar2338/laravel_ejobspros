@extends('layouts.getquote')
@section('content')
<title>Digital Marketing Solutions for Large and Small Business</title>
<meta name="description" content="We provide digital solutions that large and small businesses can benefit from. Our web development and marketing packages will help you compete for customers.">
<!-- header close  -->
<section class="section1 banner-s-1 d-flex align-items-center">
   <div class="container">
      <div class="row">
         <div class="col-lg-6 col-md-12 col-sm-12  d-flex align-items-center z-3">
            <div class="text-style">
               <h4> TALK TO WEBSITE
                  DESIGN EXPERT
               </h4>
               <p> Schedule a free consultation to discover digital marketing strategies that can help your business reach it’s online marketing goals.</p>
               <p> Learn more about SEO and optimization that makes a website rank at top of search engine result pages. Get more details, Speak to an expert marketing consultant now!                          </p>
            </div>
         </div>
         <!-- col-close  -->
         <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="style-1">
               @if (Session::has('message'))
               <div class="alert alert-info">{{ Session::get('message') }}</div>
               @endif
               <form action="sumbit" id="main_frm">
                  <h3>DIGITAL SOLUTIONS</h3>
                  <div class="form-1  mt-5 d-flex align-items-center" action="sumbit">
                       <input type="radio" required id="Success Essentials" name="services" value="Success Essentials">
                     <label for="Success Essentials">Success Essentials</label>
                  </div>
                  <div class="form-1 mt-3  d-flex align-items-center">
                       <input type="radio" required id="Competitive Edge" name="services" value="Competitive Edge">
                     <label for="Competitive Edge">Competitive Edge</label>
                  </div>
                  <div class="form-1 mt-3 d-flex align-items-center">
                       <input type="radio" required id="Social E-Commerce" name="services" value="Social E-Commerce">
                     <label for="Social E-Commerce">Social E-Commerce</label>
                  </div>
                  <div class="form-1 mt-3 d-flex align-items-center">
                       <input type="radio" required id="Pay Per Lead" name="services" value="Pay Per Lead">
                     <label for="Pay Per Lead">Pay Per Lead</label>
                  </div>
                  <div class="form-1 mt-3 d-flex align-items-center">
                       <input type="radio" required id="Pay Per Performance" name="services" value="Pay Per Performance">
                     <label for="Pay Per Performance">Pay Per Performance</label>
                  </div>
                  <div class="form-1 mt-3 d-flex align-items-center">
                       <input type="radio" required id="Branding" name="services" value="Branding">
                     <label for="Branding">Branding</label>
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
                  <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>
                  <button class="" type="submit" name="frm_submit">Send</button>
                  <button class="back_last_btn"> Back</button>
               </div>
            </form>
            <!-- GET-A-QUOTE FORM CLOSE  -->
         </div>
      </div>
   </div>
</section>
<!-- banner close  -->
<section class="web-section1">
   <div class="container">
      <div class="text-center">
         <h4> DIGITAL SOLUTIONS
         </h4>
      </div>
      <div class="row   g-md-3  g-sm-3 mt-4">
         <div class="col-lg-4 col-md-6 col-sm-12 ">
            <div class="card-style">
               <div class="img">
                  <img src="{{url('/asset/images/s-2.png')}}" alt="">
               </div>
               <div class="text">
                  <h3>Success
                     Essentials
                  </h3>
                  <p> We know you want to make an impressive digital footprint which is why we offer a turnkey integrated marketing package to meet your needs. Let us help you improve your online sales with our custom social shop solutions.</p>

                  <a href="{{url('digital-solutions/success-essentials')}}"><button class="Learn">Learn more</button></a>
                  <a href="{{url('free-consultation/get-a-quote')}}"><button class="Learn">start now</button></a>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 col-sm-12 ">
            <div class="card-style">
               <div class="img">
                  <img src="{{url('/asset/images/e-1.png')}}" alt="">
               </div>
               <div class="text">
                  <h3>Competitive
                     Edge
                  </h3>
                  <p> Businesses with the competitive edge stay ahead. Our team implements real solutions that render impressive instant results. We offer a truly budget-friendly turnkey ecommerce solution that comes with remarketing tips that are designed to generate real, impressive leads.</p>

                  <a href="{{url('digital-solutions/competitive-edge')}}"><button class="Learn">Learn more</button></a>
                  <a href="{{url('free-consultation/get-a-quote')}}"><button class="Learn">start now</button></a>

               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 col-sm-12  ">
            <div class="card-style">
               <div class="img">
                  <img src="{{url('/asset/images/e-2.png')}}" alt="">
               </div>
               <div class="text">
                  <h3>Social
                     E-Commerce
                  </h3>
                  <p> Social media is booming and the use of social e-commerce holds the promise of substantially increasing your online sales and helping your brand gain even greater recognition.                                </p>

                  <a href="{{url('digital-solutions/social-ecommerce')}}"><button class="Learn">Learn more</button></a>
                  <a href="{{url('free-consultation/get-a-quote')}}"><button class="Learn">start now</button></a>

               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 col-sm-12 ">
            <div class="card-style">
               <div class="img">
                  <img src="{{url('/asset/images/p-1.png')}}" alt="">
               </div>
               <div class="text ">
                  <h3>Pay
                     Per Lead
                  </h3>
                  <p>Let our skilled agents draft a successful sales funnel, nurture leads and create an automated engagement strategy.
                     We will drive traffic to your e-commerce store to increase sales. With our effective digital knowledge, we can attract qualified leads to grow your business in ways you never dreamed possible. Best of all we provide pay per lead!
                  </p>

                  <a href="{{url('digital-solutions/pay-per-lead')}}"><button class="Learn">Learn more</button></a>
                  <a href="{{url('free-consultation/get-a-quote')}}"><button class="Learn">start now</button></a>

               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 col-sm-12 ">
            <div class="card-style">
               <div class="img">
                  <img src="{{url('/asset/images/pe-1.png')}}" alt="">
               </div>
               <div class="text ">
                  <h3>Pay Per
                     Performance
                  </h3>
                  <p> With Pay Per Performance, you don’t have to worry about paying if our team does not provide you with the impressive results you seek. Working with us helps minimize risks so you can gain the results you seek without worry. We can help your business grow!</p>

                  <a href="{{url('digital-solutions/pay-per-performance-2')}}"><button class="Learn">Learn more</button></a>
                  <a href="{{url('free-consultation/get-a-quote')}}"><button class="Learn">start now</button></a>

               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 col-sm-12 ">
            <div class="card-style">
               <div class="img">
                  <img src="{{url('/asset/images/br-1.png')}}" alt="">
               </div>
               <div class="text">
                  <h3>Branding
                  </h3>
                  <p> Use attention grabbing product photos, compel customers with relevant stories and manage order fulfilment with ease. Get a product catalog upgrade.                                </p>

                  <a href="{{url('digital-solutions/branding2')}}"><button class="Learn">Learn more</button></a>
                  <a href="{{url('free-consultation/get-a-quote')}}"><button class="Learn">start now</button></a>

               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 col-sm-12 ">
            <div class="card-style">
               <div class="img">
                  <img src="{{url('/asset/images/m-1.png')}}" alt="">
               </div>
               <div class="text">
                  <h3> Website Maintenance
                  </h3>
                  <p> Without proper website maintenance you will lose your edge against the competition. We can help you stay ahead of the game and keep things running smoothly with regular updates and a strong focus on staying relevant. Let us spur continued traffic growth, strengthen your website’s SEO and push your Google rankings to the top.</p>

                  <a href="{{url('digital-solutions/maintenance')}}"><button class="Learn">Learn more</button></a>
                  <a href="{{url('free-consultation/get-a-quote')}}"><button class="Learn">start now</button></a>

               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- section close  -->
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