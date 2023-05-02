@extends('layouts.getquote')
@section('content')
    
    <title>Website Services for Ecommerce and to Sell on Social Media</title>
    <meta name="description" content="Sign up for this package to make social media work for you. We provide ecommerce integration and social shop design services for popular social networks.">

	<!-- header close  -->
    <section class="section1 seo d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12  z-3 d-flex align-items-center">
                    <div class="text">
                        <h5>Social E-Commerce</h5>
                        <p>Are you tired of losing business to your competitors who seem more social media savvy?.</p>
                    </div>
                </div>

                <!-- col-cose  -->
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <!-- I AM LOOKING FOR:FORM HTML CLOSE  -->
                    <form class="GET-A-QUOTE" method="post" action="{{url('/post_quote')}}">
                      @csrf
                      <div class="form-style-2" style="display:block;">
                        <h4> GET A QUOTE</h4>
                        @if (Session::has('message'))
                            <div class="alert alert-info">{{ Session::get('message') }}</div>
                        @endif
                        <!-- heading close  -->
                        <input type="text" required name="your_name" placeholder="First Name">
                        <input type="text" required name="last_name" placeholder="Last Name">
                        <input type="email" required name="email" placeholder="email">
                        <input type="tel" name="contact_number" placeholder="contact number">
                        <input type="text" name="website_url" placeholder="Website url">

                        <input type="hidden" name="category" value="Digital Solutions" id="category">
                        <input type="hidden" name="sub_category" value="Social Ecommerce" id="sub_category">

                        <button class="" type="submit" name="frm_submit">Send</button>
                      </div>

                  </form>
                <!-- GET-A-QUOTE FORM CLOSE  -->
                </div>
            </div>
        </div>
    </section>

    <section class="seo-section-1">
        <div class="container">
            <div class="text-center">
                <h5>Digital Solutions - Social E-Commerce
                </h5>
            </div>
            <div class="row g-md-3 g-sm-3 mt-4">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="style-box ">
                      <div class="img">
                        <img src="{{url('/asset/images/Social-E-commerce-Section-1-min.png')}}" alt="">
                      </div>
                      <div class="text">
                            <p>Isn’t it time to make social media work for you? We help you target your demographics like never before so you can reach and connect like never before. Our team leverages social media campaigns, increases your online sales, and improves your brand’s recognition. We can create a rapport and build a network of potential leads. Social selling is an effect way to replace cold calling and is a necessary component needed to build your funnel</p>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="style-box">
                      <div class="img">
                        <img src="{{url('/asset/images/Social-E-commerce-Section-2-min-1.png')}}" alt="">
                      </div>
                      <div class="text">
                            <b>Effectively Reach Your Sales Targets</b>
                            <p>We’ll use social media channels to reach your sales targets:</p>

                            <ul>
                                <li>Connect with prospects</li>
                                <li>Develop and cultivate a relationship through brand identity</li>
                                <li>Engage to gain potential leads</li>
                            </ul>

                            <p>Our team will help you promote your products and effectively sell on social media platforms. We will help you reach and target your market and display content rich ads, social media optimization, ad management services, and consistent social posting. We will engage with prospect customers and truly promote your brand.</p>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </section>

    <div class="seo-f">
      @include('includes.map')
    </div>
@stop