@extends('layouts.getquote')
@section('content')
<title>Free Marketing Consultation By Expert SEO Consultant</title>
<meta name="description" content="Fill out this form to book a free marketing consultation with an SEO consultant. Take advantage of SEO expertise, advice and services offered by top marketers.">
<!-- header close  -->
<div class="section1 banner-f d-flex align-items-center">
   <div class="container">
      <div class="row">
         <div class="col-lg-6 col-md-12 col-sm-12  d-flex align-items-center z-3">
            <div class="text">
               <h4> TALK TO WEBSITE
                  DESIGN EXPERT
               </h4>
               <p> Schedule a free consultation to discover digital marketing strategies that can help your business reach it’s online marketing goals.</p>
               <P> Learn more about SEO and optimization that makes a website rank at top of search engine result pages. Get more details, Speak to an expert marketing consultant now!                            </P>
            </div>
         </div>
         <!-- col-close  -->
         <div class="col-lg-6 col-md-12 col-sm-12  d-flex align-items-center z-3">
            <div class="style-1">
               @if (Session::has('message'))
               <div class="alert alert-info">{{ Session::get('message') }}</div>
               @endif
               <form action="sumbit" id="main_frm">
                  <h3>FREE CONSULTATION</h3>
                  <div class="form-1  mt-5 d-flex align-items-center" action="sumbit">
                       <input required type="radio" id="Get a Quote" name="services" value="Get a Quote">
                     <label for="Get a Quote">Get a Quote</label>
                  </div>
                  <div class="form-1 mt-3  d-flex align-items-center">
                       <input type="radio" required id="Get a Proposal" name="services" value="Get a Proposal">
                     <label for="Get a Proposal">Get a Proposal</label>
                  </div>
                  <div class="form-1 mt-3 d-flex align-items-center">
                       <input required type="radio" id="Schedule a Consultation" name="services" value="Schedule a Consultation">
                     <label for="Schedule a Consultation">Schedule a Consultation</label>
                  </div>
                  <div class="form-1 mt-3 d-flex align-items-center">
                       <input required type="radio" id="Call" name="services" value="Call">
                     <label for="Call">Call</label>
                  </div>
                  <div class="form-1 mt-3 d-flex align-items-center">
                       <input required type="radio" id="Email" name="services" value="Email">
                     <label for="Email">Email</label>
                  </div>
                  <div class="form-1 mt-3 d-flex align-items-center">
                       <input required type="radio" id="Chat" name="services" value="Chat">
                     <label for="Chat">Chat</label>
                  </div>
                  <div class="form-1 mt-3 d-flex align-items-center">
                       <input required type="radio" id="Get Coupon" name="services" value="Get Coupon">
                     <label for="Get Coupon">Get Coupon</label>
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
<!-- section close  -->
<section class="web-section1">
   <div class="container">
      <div class="text-center">
         <h4> FREE CONSULTATION
         </h4>
      </div>
      <div class="row g-md-3  g-sm-3 mt-4">
         <div class="col-lg-4 col-md-6 col-sm-12 ">
            <div class="card-style">
               <div class="img">
                  <img src="{{url('/asset/images/g-1.png')}}" alt="">
               </div>
               <div class="text">
                  <h3>Get a
                     Quote
                  </h3>
                  <P> Isn’t it time you took the serious steps needed to make your site a success? Our website design and marking company can help. Contact us to get a quote!                            </P>

                  <a href="{{url('free-consultation/get-a-quote')}}"><button class="Learn">start now</button></a>

               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 col-sm-12 ">
            <div class="card-style">
               <div class="img">
                  <img src="{{url('/asset/images/c-1.png')}}" alt="">
               </div>
               <div class="text">
                  <h3>Get a
                     Proposal
                  </h3>
                  <P> Our you curious to find out what our services include and the cost involved. Contact us today for a proposal!     </P>

                  <a href="{{url('free-consultation/get-a-proposal')}}"><button class="Learn">start now</button></a>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 col-sm-12 ">
            <div class="card-style">
               <div class="img">
                  <img src="{{url('/asset/images/sc-1.png')}}" alt="">
               </div>
               <div class="text">
                  <h3>Schedule a
                     Consultation
                  </h3>
                  <P> Our skilled team is here to answer any questions that you might have about our design and marketing service. Contact us to schedule a consultation!                            </P>

                  <a href="{{url('analysis/appointment')}}"><button class="Learn">start now</button></a>

               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 col-sm-12 ">
            <div class="card-style">
               <div class="img">
                  <img src="{{url('/asset/images/call-2.avif')}}" alt="">
               </div>
               <div class="text">
                  <h3>Call</h3>
                  <p> We encourage you to give us a call and talk to one of our agents. We are ready to answer your questions!                        </p>

                  <a href="{{url('contact-us')}}"><button class="Learn">start now</button></a>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 col-sm-12 ">
            <div class="card-style">
               <div class="img">
                  <img src="{{url('/asset/images/Email.png')}}" alt="">
               </div>
               <div class="text ">
                  <h3>Email</h3>
                  <P> Send us an email and we will respond back promptly!                        </P>

                  <a href="{{url('contact-us')}}"><button class="Learn">start now</button></a>

               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 col-sm-12 ">
           <div class="card-style">
               <div class="img">
                  <img src="{{url('/asset/images/Chat.png')}}" alt="">
               </div>
               <div class="text">
                  <h3>Chat
                  </h3>
                  <P> Would you like to chat with one of our agents? Reach out to us today to learn more about our services. We are here to answer your questions!                        </P>

                  <a href="{{url('contact-us')}}"><button class="Learn">start now</button></a>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 col-sm-12 ">
            <div class="card-style">
               <div class="img">
                  <img src="{{url('/asset/images/Get.png')}}" alt="">
               </div>
               <div class="text">
                  <h3>Get
                     Coupon
                  </h3>
                  <P> Are you interested in saving money? Yes, we have coupons! Contact us to learn more about how you can save on our services.                        </P>

                  <a href="{{url('coupon')}}"><button class="Learn">start now</button></a>

               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- section close  -->
<div class="f-1">
   @include('includes.map')
</div>
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