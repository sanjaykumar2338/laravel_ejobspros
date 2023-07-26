@extends('layouts.getquote')
  @section('content')
    <!-- header close  -->
    @if (Session::has('message'))
       <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
    
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <section class="contact-banner d-flex align-items-center">
        <div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12 z-3">
                <div class="text">
                    <h4><u>Contact Web Designers and Digital Marketers Here</u></h4>
                    <p>When you are interested in taking your web design to the next level with a custom design or an effective digital marketing service, contact the team at eJobs4Pros. We offer affordable rates, quality design and effective optimization services.
                    Start by reaching out to our web support and marketing professionals for a free quote!
                    Our team is easy to reach. We would love to meet up via a call, online meeting or through the easy-to-use client dashboard. Work closely with our experts to instantly collaborate and coordinate plans and strategies.
                    We are located in the Northeastern United States, but we work with clients from every state.
                    Contact us to evaluate your online presence and market.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- section close  -->
    <section class="c-section-2">
        <div class="container">
            <div class="row g-3">
                <div class="col-lg-6">
                  <h1 class="Contact"> Contact Details</h1>
                    <div class="style-box">

                        <div class="row g-3">
                            <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                                <div class="styleling">
                                  <div class="img">
                                    <img src="{{url('/asset/images/location.png')}}" alt="">
                                  </div>
                                  <div class="text">
                                    <h5>Address</h5>
                                    <p>Wall Street West Lyndhurst, Lyndhurst, NJ, United States, 07071</p>
                                  </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                              <div class="styleling">
                                <div class="img">
                                  <img src="{{url('/asset/images/call.png')}}" alt="">
                                </div>
                                <div class="text">
                                  <h5> Phone Nunber</h5>
                                  <p><a href="tel:347-391-1811">347-391-1811</a></p><br/>
                                </div>
                              </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                            <div class="styleling">
                              <div class="img">
                                <img src="images/mail.png" alt="">
                              </div>
                              <div class="text">
                                <h5> Email id</h5>
                                <p><a href="mailto:Contact@Ejobs4pros.Com">Contact@Ejobs4pros.Com</a></p>
                              </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12  text-center">
                          <div class="styleling">
                            <div class="img">
                              <img src="{{url('/asset/images/watch.png')}}" alt="">
                            </div>
                            <div class="text">
                              <h5> Opening Hours</h5>
                              <p>9Am - 5PM</p>
                            </div>
                          </div>
                      </div>
                        </div>

                    </div>
                </div>
                <!-- col-close  -->
                <div class="col-lg-6 col-md-12 col-sm-12 d-flex align-items-center">
                  <div class="main-style">
                    <h5 class="Send"> Send us a message</h5>
                    <form class="mt-5" name="get_quote" method="post" action="{{url('contact-us-save')}}">
                      @csrf
                      <div class="row mt-2">
                        <div class="col-lg-12">
                          <input type="text" required name="name" placeholder="enter full name">
                        </div>
                        <div class="col-lg-6">
                          <input type="email" required name="email" placeholder="Email">
                        </div>
                        <div class="col-lg-6">
                          <input type="number" required name="phone_number" placeholder="contact number">
                        </div>
                        <div class="col-lg-12">
                          <input type="url"placeholder="website url" name="website_url">
                        </div>
                      </div>

                      <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>

                      <button class="s-b mt-3"> send</button>
                    </form>
                  </div>
                </div>
            </div>
        </div>
    </section>
     <section class="get-section">
      <div class="container">
        <div class="row g-3">
          <div class="col-lg-4">
            <h4>Get a Quote for you website
            </h4>
            <p>Simply ask us about our effective digital strategies to take your website design, search engine optimization and social media marketing to the next level. Click to start a live chat with a professional who can answer questions about your online goals!</p>
            <a href="https://www.facebook.com">Chat Now</a>
          </div>

          <div class="col-lg-4">
            <h4>Reach us by phone.
            </h4>
            <p>Click to call for advice on how to improve your website speed and increase search engine rank. Call for a fast quote and a detailed proposal. Call the web designers and digital marketers now!</p><br><br>
            <a href="tel:0013473911811">Call Now</a>
          </div>

          <div class="col-lg-4">
            <h4>We’re social.
            </h4>
            <p>Find us on social media where you can message your website problems directly to our team. Follow us on social media to find general advice that can help you improve your website and social presence. Connect and message us now!</p><br>
            <a href="tel:0013473911811">Call Now</a>
          </div>
        </div>
      </div>
    </section>

    <!-- section close  -->
    <section class="c-f-1">
      @include('includes.map')
    </section>
@stop