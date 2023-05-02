@extends('layouts.getquote')
@section('content')

	<!-- header close  -->
    <section class="section1 seo d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12  z-3 d-flex align-items-center">
                    <div class="text">
                        <h5>Local Marketing – Target Clients and Customers Within a Specific Geographic Location</h5>
                        <p>Often called location-based or geo-neighborhood marketing – local marketing reaches your community which is usually the heart of your business.</p>

                        <p>Local marketing is necessary for any brick and mortar business that wants to reach customers and clients within a particular physical radius (typically 50 miles). This form of marketing is used by tradesmen, healthcare providers, and even physical retail businesses to pull in new customers.</p>

                        <p>At eJobs4Pros, we offer a variety of inbound and outbound marketing strategies for people within your business’s local area.</p>
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
                        <input type="hidden" name="sub_category" value="Local Marketing" id="sub_category">

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
                            <img src="{{url('/asset/images/local/Local-Marketing-Section1-min.png')}}" alt="">
                        </div>
                        <div class="text mt-lg-2">
                            <h3>Studies show that over 90 percent of all consumers rely on the internet to find local businesses</h3>
                            <p>When a would-be customer is searching for a particular business or service, they use their smartphone, tablet, or computer to run a local search. It is imperative that your business comes up at the top of the search results for your area, or you risk having your would-be customer/client going to your competition’s doorstep instead of your own.</p>
                            
                            <p>Our skilled team at eJobs4Pros specializes in hyperlocal marketing, a very focused form of targeted marketing to bring in qualified leads from a specific geographical area or neighborhood. We help reach would-be customers who are performing a ‘near me’ search using their mobile devices.</p>

                            <p>Research carried out by Google shows that near-me searches have grown by as much as 200 percent as more users turn to their mobile phones to find local businesses and services.</p>

                            <p>Let our team create a robust local marketing strategy so that your business achieves a #1 rank on Google’s local search box.</p>
                        </div>
                    </div>
                </div>
                <!-- col-close  -->
                <div class="col-lg-6 col-md-6 col-sm-12" style="margin-top: -156px;">
                    <div class="card-design">
                        <div class="img">
                            <img src="{{url('/asset/images/local/help.png')}}" alt="">
                        </div>
                        <div class="text mt-lg-2">
                            <h3>Let our team create a robust local marketing strategy so that your business achieves a #1 rank on Google’s local search box.</h3>
                
                            <style type="text/css">
                                .LIST_TYPE a {
                                    color: #007bff;
                                    background-color: transparent;
                                }
                            </style>

                            <h4>We can help:</h4>
                            <ul style="list-style-type: decimal;" class="LIST_TYPE">
                              <li><a href="">Improve local branding</a></li>
                              <li><a href="">Promote local visibility</a></li>
                              <li><a href="">Engage with the local community via social media and other vital areas of digital marketing.</a></li>
                              <li><a href="">Increase customer loyalty</a></li>
                              <li><a href="">Push your website to the top of search results using various marketing tools such as SEO, web design, and more.</a></li>
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
                  <span class="SEM">Local SEO</span>
                  <p class="mt-3">Nowadays, everyone uses their devices to search for local business, to see products, find out hours of operation, and business proximity. With local SEO, we can increase your business’s visibility, so it comes up on more search types and gives you a boost ahead of the competition.</p>
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
                  <span class="SEM">Social Media Marketing</span>
                  <p class="mt-3">Our team can help you reach potential customers, hone your brand, and inspire customer loyalty using social media.</p>
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
                  <span class="SEM">Google Search Ads</span>
                  <p class="mt-3">Using region-specific keywords, we can help you gain a higher ROI on your Google search ads by targeting potential customers interested in your form of services in their areas.</p>
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
                  <span class="SEM">Mobile Marketing</span>
                  <p class="mt-3">Your site must be mobile-friendly to appeal to mobile users seeking a local business. We can create mobile-friendly landing pages that target specific geographic areas.</p>
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