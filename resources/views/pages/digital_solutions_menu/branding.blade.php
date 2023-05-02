@extends('layouts.getquote')
@section('content')
    
    <title>Branding Services for Better Brand Awareness and Online Identity</title>
    <meta name="description" content="We provide small business branding services that improve brand awareness, identity and personality. Signup for a brand assessment and logo design evaluation.">

	<!-- header close  -->
    <section class="section1 seo d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12  z-3 d-flex align-items-center">
                    <div class="text">
                        <h5>Branding Services for Your Business</h5>
                        <p>Your brand is more than simply your business logo or name. It is your company’s identity and personality. With on-point branding, you can foster how your customers view and feel about your business.</p>
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
                        <input type="hidden" name="sub_category" value="Branding" id="sub_category">

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
                <h5>Digital Solutions - Branding
                </h5>
            </div>
            <div class="row g-md-3 g-sm-3 mt-4">
                <div class="col-lg-12 col-md-6 col-sm-12">
                    <div class="text">
                            <b>A strong brand creates an emotional response which inspires loyalty</b>
                            <p>Whether you need to create a brand identity from scratch or simply build on your current brand to gain more recognition, our team of experts can help! Effective branding will increase page effectiveness, convert visitors to customers and help you build clear cut and actionable goals.</p>

                            <b>Our online branding services include:</b>
                            <ul>
                                <li>Logo and digital design</li>
                                <li>Brand messaging</li>
                                <li>Brand positioning</li>
                                <li>Social media branding</li>
                                <li>Integrated branding</li>
                            </ul>

                            <p>Let our team build your brand identity or assist you with rebranding a current business. We will stabilize your brand’s positioning and handle messaging.</p>

                            <p>Our team will work with you to create a branding style with expert integrated branding services that works for your small business, online shop or specialty boutique.</p>
                      </div>
                    <div class="style-box ">
                      <div class="img">
                        <img height="500" src="{{url('/asset/images/Branding-Section1-min.png')}}" alt="">
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