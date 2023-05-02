@extends('layouts.getquote')
@section('content')

	<!-- header close  -->
    <section class="section1 seo d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12  z-3 d-flex align-items-center">
                    <div class="text">
                        <h5>Spring Ahead of the Competition with Promoting and Marketing</h5>
                        <p>Let eJobs4Pros give you the tools needed to promote indeed and market your products and eCommerce site.</p>

                        <p>Promoting and marketing goods online is not for the faint of heart. The eCommerce industry is booming, and competition is fierce. You’ll want to work with a skilled team of digital marketers who are familiar with the challenges of online promotions. At eJobs4Pros, our team is ready to meet your needs, whether they are localized geo-marketing or on a global scale.</p>
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

                        <input type="hidden" name="category" value="Digital Marketing" id="category">
                        <input type="hidden" name="sub_category" value="Content Marketing" id="sub_category">

                        <button class="" type="submit" name="frm_submit">Send</button>
                      </div>

                  </form>
                <!-- GET-A-QUOTE FORM CLOSE  -->
                </div>
            </div>
        </div>
    </section>

    <div class="about-section-1">
        <div class="container">
            <div class="row g-4 justify-content-center align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="card-design">
                        <div class="img">
                            <img src="{{url('/asset/images/content/Content-Marketing-Section1-min-2.png')}}" alt="">
                        </div>
                        <div class="text mt-lg-2">
                            <h3>Promoting and Marketing Brands</h3>
                            <p>When promoting and marketing brands online, you have to contend with big names like Amazon – competition can heat up, and the price of advertising will increase. We understand your concern with profitability and maintaining your bottom line. Our team is here to help align your digital marketing goals for promotion with your ROI and budget.</p>
                            
                            <p>Our team provides a wide array of services to fit your specific needs.</p>
                        </div>
                    </div>
                </div>
                <!-- col-close  -->
                <div class="col-lg-6 col-md-6 col-sm-12" style="margin-top: 60px;">
                    <div class="card-design">
                        <div class="img">
                            <img src="{{url('/asset/images/content/Content-Marketing-Section2-min.png')}}" alt="">
                        </div>
                        <div class="text mt-lg-2">
                            <h3>Digital Marketing at eJobs4Pros</h3>
                
                            <style type="text/css">
                                .LIST_TYPE a {
                                    color: #007bff;
                                    background-color: transparent;
                                }
                            </style>

                            <h4>Our team can provide the following:</h4>
                            <ul style="list-style-type: decimal;" class="LIST_TYPE">
                              <li><a href="">Acquire High Rate Conversions</a></li>
                              <li><a href="">Establishment of Brand Reputation</a></li>
                              <li><a href="">Affordable Strategies</a></li>
                              <li><a href="">Reaching Customers</a></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section9" style="margin-top: -135px;">
        <div class="container">
            <div class="row mt-5 d-flex justify-content-lg-center  justify-content-md-center gap-4">
              <div class="col-lg-12 col-md-5 col-sm-12  edit-box">
                <div class="text">
                  <span class="SEM">Acquire High Rate Conversions</span>
                  <p class="mt-3">Through the use of digital marketing tools, we can help your business optimize conversion rates via campaigns and advertising. We use tools such as email marketing, SEM, and SEO to obtain accurate results.</p>
                </div>
              </div>
            </div>
        </div>
    </div>

    <div class="section9" style="margin-top: -135px;">
        <div class="container">
            <div class="row mt-5 d-flex justify-content-lg-center  justify-content-md-center gap-4">
              <div class="col-lg-12 col-md-5 col-sm-12  edit-box">
                <div class="text">
                  <span class="SEM">Establishment of Brand Reputation</span>
                  <p class="mt-3">One of the best ways to promote and sell products is by establishing a solid brand reputation to make genuine connections with your buyers and audience. Interaction is the key to getting our products noticed and letting potential clients know you are ready to perform critical services. Establishing a solid brand reputation lets customers know you genuinely care.</p>
                </div>
              </div>
            </div>
        </div>
    </div>

    <div class="section9" style="margin-top: -135px;">
        <div class="container">
            <div class="row mt-5 d-flex justify-content-lg-center  justify-content-md-center gap-4">
              <div class="col-lg-12 col-md-5 col-sm-12  edit-box">
                <div class="text">
                  <span class="SEM">Google Business Optimization</span>
                  <p class="mt-3">We know how important the bottom line is to our clients, and we strive to provide effective and affordable solutions. The promotion and launch of any product are costly with online advertising, but we are here to help you achieve our goals while retaining profitability.</p>
                </div>
              </div>
            </div>
        </div>
    </div>

    <div class="section9" style="margin-top: -135px;">
        <div class="container">
            <div class="row mt-5 d-flex justify-content-lg-center  justify-content-md-center gap-4">
              <div class="col-lg-12 col-md-5 col-sm-12  edit-box">
                <div class="text">
                  <span class="SEM">Affordable Strategies</span>
                  <p class="mt-3">We know how important the bottom line is to our clients, and we strive to provide effective and affordable solutions. The promotion and launch of any product are costly with online advertising, but we are here to help you achieve our goals while retaining profitability.</p>
                </div>
              </div>
            </div>
        </div>
    </div>

    <div class="section9" style="margin-top: -135px;">
        <div class="container">
            <div class="row mt-5 d-flex justify-content-lg-center  justify-content-md-center gap-4">
              <div class="col-lg-12 col-md-5 col-sm-12  edit-box">
                <div class="text">
                  <span class="SEM">Reaching Customers</span>
                  <p class="mt-3">Whether you want to reach customers online or via their mobile devices, our skilled team at eJobs4Pros has you covered. We specialize in mobile marketing and optimization.</p>
                </div>
              </div>
            </div>
        </div>
    </div>

    <div class="section9" style="margin-top: -135px;">
        <div class="container">
            <div class="row mt-5 d-flex justify-content-lg-center  justify-content-md-center gap-4">
              <div class="col-lg-12 col-md-5 col-sm-12  edit-box">
                <div class="text">
                  <span class="SEM">At eJobs4Pros</span>
                  <p class="mt-3">We can focus on your campaign design and website launch for success.</p>
                  <a href="{{url('contact-website-design-and-digital-marketing-professionals')}}">Contact us to learn more!</a>
                </div>
              </div>
            </div>
        </div>
    </div>

    <div class="seo-f">
      @include('includes.map')
    </div>
@stop