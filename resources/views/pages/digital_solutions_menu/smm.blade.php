@extends('layouts.getquote')
@section('content')

	<!-- header close  -->
    <section class="section1 seo d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12  z-3 d-flex align-items-center">
                    <div class="text">
                        <h5>Effectively Using Social Media Marketing</h5>
                        <p>Discover how to use social media to create brand awareness and grow your business.</p>
                        <p>Social media use is growing. Statista has <a target="_blank" href="https://www.statista.com/statistics/273476/percentage-of-us-population-with-a-social-network-profile/">reported</a> that 80 percent of people in the United States have a social media profile that they regularly use. The numbers are staggering; with 223 million adults using social media in the U.S. alone, there is little doubt that the platforms have the potential of becoming a social media marketing gold mine.</p>
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
                        <input type="hidden" name="sub_category" value="Social Media Marketing SMM" id="sub_category">

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
                            <img src="{{url('/asset/images/smm/Social-Media-Marketing-Section1-min.png')}}" alt="">
                        </div>
                        <div class="text mt-lg-2">
                            <h3>What is Social Media Marketing?</h3>
                            <p>Social media marketing utilizes social media platforms like Facebook, Twitter, YouTube, Snapchat, Instagram, LinkedIn, and Instagram to increase sales and market brands. The platforms have become practical tools to build a brand, drive traffic to a website, and increase sales.</p>
                            
                            <p>With social media tools, you’ll create impressive business profiles, engage with your followers/customers, publish unique content, advertise, and analyze your marketing results.</p>
                        </div>
                    </div>
                </div>
                <!-- col-close  -->
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="card-design" style="margin-top: -80px;">
                        <div class="img">
                            <img src="{{url('/asset/images/smm/Social-Media-Marketing-Section2-min.png')}}" alt="">
                        </div>
                        <div class="text mt-lg-2">
                            <h3>How eJobs4Pros Can Help Market Your Business via Social Media</h3>
                            <p>If you want to try social media marketing but have no idea how to start, let the professionals at eJobs4Pros successfully market your business!.</p>

                            <style type="text/css">
                                .LIST_TYPE a {
                                    color: #007bff;
                                    background-color: transparent;
                                }
                            </style>

                            <ul style="list-style-type: decimal;" class="LIST_TYPE">
                              <li><a href="">Increase Brand Awareness</a></li>
                              <li><a href="">Drive Traffic, Generate Leads, and Make Sales</a></li>
                              <li><a href="">Google Grow Your Brand</a></li>
                              <li><a href="">Foster Community Engagement</a></li>
                              <li><a href="">Drive Traffic</a></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section9" style="margin-top: -70px;">
        <div class="container">
            <div class="row mt-5 d-flex justify-content-lg-center  justify-content-md-center gap-4">
              <div class="col-lg-12 col-md-5 col-sm-12  edit-box">
                <div class="text">
                  <span class="SEM">Increase Brand Awareness</span>
                  <p class="mt-3">We can help get our business name out there. Our team will create authentic and memorable brand awareness that emphasizes your unique business personality and values.</p>

                  <div style="display: flex;font-size: 14px;">
                    <button style="font-size: 14px;" onclick="location.href='{{url("free-consultation/get-a-quote")}}'">Get a Quote</button>
                    <button style="font-size: 14px;"><a style="color: white;" href="tel:347-391-1811">347-391-1811</a></button>
                  </div>

                </div>
              </div>
            </div>
        </div>
    </div>

    <div class="section9" style="margin-top: -110px;">
        <div class="container">
            <div class="row mt-5 d-flex justify-content-lg-center  justify-content-md-center gap-4">
              <div class="col-lg-12 col-md-5 col-sm-12  edit-box">
                <div class="text">
                  <span class="SEM">Drive Traffic, Generate Leads, and Make Sales</span>
                  <p class="mt-3">Our marketing team will launch a compelling social media profile that appeals to followers, which will help drive traffic to yoru website, generate leads, and make sales. Alert customers to new products and provide promotional information to your followers. Let them know about your products and catalogs. Run exclusive deals for your followers. The sky is truly the limit with social media marketing!</p>

                  <div style="display: flex;font-size: 14px;">
                    <button style="font-size: 14px;" onclick="location.href='{{url("free-consultation/get-a-quote")}}'">Get a Quote</button>
                    <button style="font-size: 14px;"><a style="color: white;" href="tel:347-391-1811">347-391-1811</a></button>
                  </div>

                </div>
              </div>
            </div>
        </div>
    </div>

    <div class="section9" style="margin-top: -110px;">
        <div class="container">
            <div class="row mt-5 d-flex justify-content-lg-center  justify-content-md-center gap-4">
              <div class="col-lg-12 col-md-5 col-sm-12  edit-box">
                <div class="text">
                  <span class="SEM">Grow Your Brand</span>
                  <p class="mt-3">Bring in followers and introduce your brand to a new audience while retaining existing customers. Growing your audience means starting conversations and listening to your followers’ comments. Become the pulse of social media to appeal to your core audience truly.</p>

                  <div style="display: flex;font-size: 14px;">
                    <button style="font-size: 14px;" onclick="location.href='{{url("free-consultation/get-a-quote")}}'">Get a Quote</button>
                    <button style="font-size: 14px;"><a style="color: white;" href="tel:347-391-1811">347-391-1811</a></button>
                  </div>

                </div>
              </div>
            </div>
        </div>
    </div>

    <div class="section9" style="margin-top: -110px;">
        <div class="container">
            <div class="row mt-5 d-flex justify-content-lg-center  justify-content-md-center gap-4">
              <div class="col-lg-12 col-md-5 col-sm-12  edit-box">
                <div class="text">
                  <span class="SEM">Foster Community Engagement</span>
                  <p class="mt-3">Brands that engage with their audience via social media become memorable. They will grow their customer list and truly experience an onslaught of traffic to their website. Our social media marketing team knows how to promote your brand with user-generated content and hashtags.</p>

                  <div style="display: flex;font-size: 14px;">
                    <button style="font-size: 14px;" onclick="location.href='{{url("free-consultation/get-a-quote")}}'">Get a Quote</button>
                    <button style="font-size: 14px;"><a style="color: white;" href="tel:347-391-1811">347-391-1811</a></button>
                  </div>

                </div>
              </div>
            </div>
        </div>
    </div>

    <div class="section9" style="margin-top: -110px;">
        <div class="container">
            <div class="row mt-5 d-flex justify-content-lg-center  justify-content-md-center gap-4">
              <div class="col-lg-12 col-md-5 col-sm-12  edit-box">
                <div class="text">
                  <span class="SEM">Drive Traffic</span>
                  <p class="mt-3">If you want to generate leads, it is imperative that you drive traffic to yoru website. Social media gives people the nudge they need to visit your website so you can quickly convert them into customers.</p>

                  <p class="mt-3">We offer a combination of promotional; posts, social ads, and more to make accurate conversions, so you gain impressive ROI from social media marketing.</p>
                    
                  <p class="mt-3">Let the pros at eJobs4Pros create an effective social media strategy so you can achieve your goals. We will use a combination of the above list to help you achieve your business objective and grow your bottom line.</p>

                  <div style="display: flex;font-size: 14px;">
                    <button style="font-size: 14px;" onclick="location.href='{{url("free-consultation/get-a-quote")}}'">Get a Quote</button>
                    <button style="font-size: 14px;"><a style="color: white;" href="tel:347-391-1811">347-391-1811</a></button>
                  </div>

                </div>
              </div>
            </div>
        </div>
    </div>

    <div class="seo-f">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d184552.57289742303!2d-79.51814179377936!3d43.71815566213178!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d4cb90d7c63ba5%3A0x323555502ab4c477!2sToronto%2C%20ON%2C%20Canada!5e0!3m2!1sen!2sin!4v1678602016785!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
@stop