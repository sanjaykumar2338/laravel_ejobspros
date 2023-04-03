@extends('layouts.homepage')
@section('content')
    
    @if (Session::has('message'))
      <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <div class="section1  d-flex align-items-center">
        <div class="container">
            <div class="row gap-5">
            <div class="col-lg-6 col-md-12 col-sm-12  z-3 edit-box">
                <!-- text animtion  -->
                    <p class="all">All Services <span class="typed-text"></span><span class="cursor">&nbsp;</span></p>
                    <p class="We"> We design, build and optimize lead generating landing pages, organic and paid ads, websites, videos and social media business pages.</p>
                    <a href="tel:347-391-1811"><button class="tel">347-391-1811 </button></a>
               <a href="{{url('/free-consultation/get-a-quote')}}"><button class="Get"> Get a Free Quote Now</button></a>
                </div>
                <!-- col-close  -->

                <div class="col-lg-5 col-md-12 col-sm-12  z-3">
                    <div class="style">
                    <h3 class="heading_title"> I AM LOOKING FOR:</h3>
                    <!-- form  -->
                    <form action="sumbit" id="main-form">
                      <div class="form-1  mt-5 d-flex align-items-center" action="sumbit">
                        <input type="radio" id="Web-Design" required name="services" value="Web-Design">
                      <label for="Web-Design">Web Design</label>
                      </div>

                      <div class="form-1 mt-3  d-flex align-items-center">
                        <input type="radio" id="Digital-Marketing" required name="services" value="Digital-Marketing">
                        <label for="Digital-Marketing">Digital Marketing</label>
                      </div>

                      <div class="form-1 mt-3 d-flex align-items-center">
                          <input type="radio" id="Digital-Solutions" required name="services" value="Digital-Solutions">
                         <label for="Digital-Solutions">Digital Solutions</label>
                       </div>

                      <div class="form-1 mt-3 d-flex align-items-center">
                          <input type="radio" id="SEO-Resources" required name="services" value="SEO-Resources">
                          <label for="SEO-Resources">SEO Resources</label>
                      </div>

                      <div class="form-1 mt-3 d-flex align-items-center">
                            <input type="radio" id="Free-Consultation" required name="services" value="Free-Consultation">
                           <label for="Free-Consultation">  Free Consultation</label>
                     </div>
                      
                      <button type="submit" value="submit" class="btn-submit mt-4 quote_continue">CONTINUE</button>
                    </form>
                    

                    @include('pages.parts.form')
                  </div>

                  <!-- I AM LOOKING FOR:FORM HTML CLOSE  -->
                  <form class="GET-A-QUOTE" method="post" action="{{url('/post_quote')}}">

                      @csrf
                      <div class="form-style-2">
                        <h4> GET A QUOTE</h4>
                        <!-- heading close  -->
                        <input type="text" required name="your_name" placeholder="First Name">
                        <input type="text" required name="last_name" placeholder="Last Name">
                        <input type="email" required name="email" placeholder="email">
                        <input type="tel" name="contact_number" placeholder="contact number">
                        <input type="text" name="website_url" placeholder="Website url">

                        <input type="hidden" name="category" id="category">
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
    <!-- section1 close  -->
    <div class="section2">
      <div class="container">
        <div class="row mt-3 ">
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="style-1 d-flex ">
              <img src="{{ url('/asset/images/Social Selling.png')}}" alt="">
              <div class="text mt-4">
                <h4> Social Selling</h4>
                <p>Reach, connect and relate to your target demographics, Stay competitive and connected using influencer marketing strategies that leverage social media campaigns, improve recognition and increase online sales.</p>
              <a href="{{url('/digital-solutions/social-e-commerce')}}"><span class="start"> <i class="fa-sharp fa-solid fa-arrow-right"></i>Start Now</span></a>
              </div>
            </div>
          </div>
          <!-- col-close  -->
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="style-1 d-flex ">
              <img src="{{url('/asset/images/Integrated Marketing.png')}}" alt="">
              <div class="text mt-4">
                <h4>Integrated Marketing</h4>
                <p>Improve customer experience, engagement and loyalty using social platforms. Boost brand recognition with effective small business marketing upgrade.</p>
                <br/>
                <a href="{{ url('/digital-solutions/pay-per-performance')}}"><span class="start"> <i class="fa-sharp fa-solid fa-arrow-right"></i>Start Now</span></a>
              </div>
            </div>
          </div>
          <!-- col-clsoe  -->
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="style-1 d-flex ">
              <img src="{{ url('/asset/images/Conversion Rate Optimization.png')}}" alt="">
              <div class="text mt-4">
                <h4>Conversion Rate Optimization</h4>
                <p>increase page effectiveness, optimize actionable goals and convert visitors to customers. Reduce acquisition cost and generate revenue by connecting with qualified leads.                </p>
              <a href="{{url('/digital-solutions/branding')}}"><span class="start "> <i class="fa-sharp fa-solid fa-arrow-right"></i>Start Now</span></a>
              </div>
            </div>
          </div>
          <!-- col-close  -->
        </div>
      </div>
    </div>
    <!-- section1 close  -->

    <div class="section3 d-flex align-items-center">
      <div class="container">
        <div class="row  d-flex justify-content-center align-items-center">
        <div class="col-lg-5 col-md-12 col-sm-12   z-3">
          <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <span class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true"> Web Design</span>
            <span class="nav-link " id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false"> Digital Marketing</span>
            <span class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false"> SEO Resources</span>
            <span class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false"> Free Consultation</span>
          </div>
        </div>
        <!-- col-close  -->
        <div class="col-lg-7 col-md-12 col-sm-12  box  z-3 ">
          <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
              <p class="website"> WEBSITE AND MARKETING SERVICES</p>
              <h3> Web Design</h3>
              <p class="Build"> Build you online presence by relating your vision and goals to a professional website designer. Explore responsive and effective page designs here.</p>
              <p class="design"> Get a website design quote now!</p><hr>
              <p class="development"> cl Get a quote from a website development company that offers small business pricing plans.</p>
            <a href="{{url('/web-design')}}"><button class="Get mt-3">Get a Quote</button></a>
            <a href="tel:347-391-1811"><button class="tel">347-391-1811 </button></a>
            </div>

            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
              <p class="website"> WEBSITE AND MARKETING SERVICES</p>
              <h3>Digital Marketing</h3>
              <p class="Build"> Implement a custom digital marketing strategy that fits your small business needs. Grab attention, engage users and influence followers with organic optimization, social marketing campaigns and paid ads.</p>
              <p class="design"> Get a website design quote now!</p><hr>
              <p class="development">Contact the top rated digital marketing agency for quality SEO, SEM and SMM services.</p>
              <a href="{{url('/digital-marketing')}}"><button class="Get mt-3">Get a Quote</button></a>
              <a href="tel:347-391-1811"><button class="tel">347-391-1811 </button></a>
            </div>

            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">
              <p class="website"> WEBSITE AND MARKETING SERVICES</p>
              <h3>SEO Resources</h3>
              <p class="Build"> Do It Yourself website report generation tools are here and just a click away. Use the website analyzer to get a free website speed test.</p>
              <p class="design"> Get a FREE Website Grade now!</p><hr>
              <p class="development">Connect with a professional website analysis consultant for best market approach. Use the free website audit tools to generate reports and analyze page grade.</p>
              <a href="{{url('/seo-resources')}}"><button class="Get mt-3">Get a Quote</button></a>
              <a href="tel:347-391-1811"><button class="tel">347-391-1811 </button></a>
            </div>

            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab" tabindex="0">
              <p class="website"> WEBSITE AND MARKETING SERVICES</p>
              <h3>Free Consultation</h3>
              <p class="Build"> Discover effective marketing strategies that improves your business sales, and branding. Explore creative tactics that generate custom campaigns alongside an expert digital consultant.</p>
              <p class="design">Talk to a Digital Marketing Expert now!</p><hr>
              <p class="development">Discuss your online business plans with a web design and marketing professional. Start generating leads, sell more and build a digital brand. Get advice that Improves your conversion rate and your ROI here.</p>
              <a href="{{url('/free-consultation')}}"><button class="Get mt-3">Get a Quote</button></a>
            <a href="tel:347-391-1811"><button class="tel">347-391-1811 </button></a>
            </div>
          </div>
          </div>
        </div>
      </div>
      </div>
    </div>
    <!-- section3 close  -->
    
        <!-- section4  -->
        <div class="section4">
        <section id="particles-js">
          <div class="text-center text">
            <h4>DO YOU QUALIFY FOR A COUPON?</h4>
            <p> Tell us about your business, your design goals and marketing expectations.
              Tell us the website project scope and budget.</p>
            <button class="tel"><a onclick="location.href='{{url("coupon")}}'">Request a Coupon</button>
          </div>
        </section>
        </div>
        <!-- section4 close  -->
        <div class="section5">
          <div class="container">
            <div class="text-center">
              <h4> How It Works!</h4>
            </div>
            <div class="row mt-3 gap-2 d-flex align-items-center justify-content-center">
              <div class="col-lg-8 col-md-5 col-sm-12 ">
                <div class="card-style">
                 <div class="img">
                  <img src="{{ url('/asset/images/1.avif')}}" alt="">
                 </div>
                   <p class="EJOBS4PROS mt-2"> EJOBS4PROS</p>
                  <h3> How It Works!</h3>
                  <p>Do your Own Website Analysis here. Use the free SEO resources to get your website audit and page grades. Chat with an expert seo strategist now!                  </p>
                  <a href="{{url('analysis/appointment')}}"><button class="Start">Start a Project Now</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- section5 close  -->  
        <div class="section6 d-flex align-items-center">
          <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
              <div class="col-lg-5 col-md-12 col-sm-12  z-3">
                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  <span class="nav-link active" id="v-pills-home-tab-1" data-bs-toggle="pill" data-bs-target="#v-pills-home-1" type="button" role="tab" aria-controls="v-pills-home-1" aria-selected="true">  Success Essentials</span>
                  <span class="nav-link " id="v-pills-profile-tab-2" data-bs-toggle="pill" data-bs-target="#v-pills-profile-2" type="button" role="tab" aria-controls="v-pills-profile-2" aria-selected="false">  Competitive Edge</span>
                  <span class="nav-link" id="v-pills-messages-tab-3" data-bs-toggle="pill" data-bs-target="#v-pills-messages-3" type="button" role="tab" aria-controls="v-pills-messages-3" aria-selected="false"> Social E-Commerce</span>
                  <span class="nav-link" id="v-pills-settings-tab-4" data-bs-toggle="pill" data-bs-target="#v-pills-settings-4" type="button" role="tab" aria-controls="v-pills-settings-4" aria-selected="false"> Pay Per Load</span>
                  <span class="nav-link" id="v-pills-Performance-tab-5" data-bs-toggle="pill" data-bs-target="#v-pills-Performance-5" type="button" role="tab" aria-controls="v-pills-Performance-5" aria-selected="false">Pay Per Performance</span>
                  <span class="nav-link" id="v-pills-Branding-tab-6" data-bs-toggle="pill" data-bs-target="#v-pills-Branding-6" type="button" role="tab" aria-controls="v-pills-Branding-6" aria-selected="false">Branding</span>
                  <span class="nav-link" id="v-pills-Maintenance-tab-7" data-bs-toggle="pill" data-bs-target="#v-pills-Maintenance-7" type="button" role="tab" aria-controls="v-pills-Maintenance-7" aria-selected="false">Maintenance</span>
                </div>
              </div>
              <!-- col-close  -->
              <div class="col-lg-7 col-md-12 col-sm-12  box-edit  z-3 ">
                <div class="tab-content" id="v-pills-tabContent">
                  <div class="tab-pane fade show active" id="v-pills-home-1" role="tabpanel" aria-labelledby="v-pills-home-tab-1" tabindex="0">
                    <p class="DIGITAL">DIGITAL SOLUTIONS FOR ONLINE BUSINESSES</p>
                    <h3> Success Essentials</h3>
                    <p class=" Scale mt-4"> Scale your digital footprint and do business like the big online players. This turnkey integrated marketing package is perfect for designers and online sellers. Upgrade your e-commerce game to include integrated solutions.</p>
                    <a href="{{url('/digital-solutions/success-essentials')}}"><button class="Learn"> Learn More	</button></a>
                  <a href="{{url('/free-consultation/get-a-quote')}}"><button class="Now"> Start Now</button></a>
                  </div>
                  <div class="tab-pane fade" id="v-pills-profile-2" role="tabpanel" aria-labelledby="v-pills-profile-tab-2" tabindex="0">
                    <p class="DIGITAL">DIGITAL SOLUTIONS FOR ONLINE BUSINESSES</p>
                    <h3>Competitive Edge
                    </h3>
                    <p class=" Scale mt-4"></p>
                      <p class=" Scale"> The perfect package for sellers who want to bypass organic marketing and demand instant results. Start a budget friendly, turnkey e-commerce solution with custom remarketing campaigns setup to generate leads. Subscribe to services to strengthen your brand and customer relations now.</p>
                  <a href="{{url('/seo-resources/competitor-analysis')}}"><button class="Learn"> Learn More	</button></a>
                  <a href="{{url('/free-consultation/get-a-quote')}}"><button class="Now"> Start Now</button></a>
                  </div>
                  <div class="tab-pane fade" id="v-pills-messages-3" role="tabpanel" aria-labelledby="v-pills-messages-tab-3" tabindex="0">
                    <p class="DIGITAL">DIGITAL SOLUTIONS FOR ONLINE BUSINESSES</p>
                    <h3>Social E-Commerce</h3>
                    <p class=" Scale mt-4">Promote products and sell on social platforms that your customer is using. reach your target market with content rich ads.</p>
                      <p class=" Scale"> Get social media optimization, consistent social posting and ad management services to engage with prospect customers.</p>
               <a href="{{url('/digital-solutions/social-ecommerce')}}"><button class="Learn"> Learn More	</button></a>
               <a href="{{url('/free-consultation/get-a-quote')}}"><button class="Now"> Start Now</button></a>
                    </div>
                  <div class="tab-pane fade" id="v-pills-settings-4" role="tabpanel" aria-labelledby="v-pills-settings-tab-4" tabindex="0">
                    <p class="DIGITAL">DIGITAL SOLUTIONS FOR ONLINE BUSINESSES</p>
                    <h3>Pay Per Lead</h3>
                    <p class=" Scale mt-4">Attract shoppers and generate leads with creative, relevant and effective campaigns. respond and engage qualified leads that provide best ROI results. </p>
          <a href="{{url('/digital-solutions/pay-per-lead')}}"><button class="Learn"> Learn More	</button></a>
          <a href="{{url('/free-consultation/get-a-quote')}}"><button class="Now"> Start Now</button></a>
                </div>
                <div class="tab-pane fade" id="v-pills-Performance-5" role="tabpanel" aria-labelledby="v-pills-Performance-tab-5" tabindex="0">
                  <p class="DIGITAL">DIGITAL SOLUTIONS FOR ONLINE BUSINESSES</p>
                  <h3>Pay Per Performance</h3>
                  <p class=" Scale mt-4">minimize risk with performance based advertising and get measurable results that justify the marketing cost and pay per sale.</p>
             <a href="{{url('/digital-solutions/pay-per-performance-2')}}"><button class="Learn"> Learn More	</button></a>
             <a href="{{url('/free-consultation/get-a-quote')}}"><button class="Now"> Start Now</button></a>
                </div>
                <div class="tab-pane fade" id="v-pills-Branding-6" role="tabpanel" aria-labelledby="v-pills-Branding-tab-6" tabindex="0">
                  <p class="DIGITAL">DIGITAL SOLUTIONS FOR ONLINE BUSINESSES</p>
                  <h3>Branding</h3>
                  <p class=" Scale mt-4">Stand on top of your reputation, demand attention and receive recognition. Stand apart of your competitors, influence the market and strengthen customer loyalty.</p>
                  <p class=" Scale mt-4">Start your small business or corporate branding campaigns with an eye on results and reputation.</p>
                 <a href="{{url('/digital-solutions/branding2')}}"><button class="Learn"> Learn More	</button></a>
                 <a href="{{url('/free-consultation/get-a-quote')}}"><button class="Now"> Start Now</button></a>
                  </div>
                <div class="tab-pane fade" id="v-pills-Maintenance-7" role="tabpanel" aria-labelledby="v-pills-Maintenance-tab-7" tabindex="0">
                  <p class="DIGITAL">DIGITAL SOLUTIONS FOR ONLINE BUSINESSES</p>
                  <h3>Maintenance</h3>
                  <p class=" Scale mt-4">Website maintenance services are available including domain name registration, website hosting and third party plugin integration.</p>
                  <p class=" Scale mt-4">We are here to build a strong online foundation...</p>
                  <a href="{{url('/digital-solutions/maintenance')}}"><button class="Learn"> Learn More	</button></a>
                  <a href="{{url('/free-consultation/get-a-quote')}}"><button class="Now"> Start Now</button></a>
                  </div>
            </div>
          </div>
        </div>
        </div>
        </div>
        <!-- section6 close  -->
        <div class="section7">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-12 ">
                <div class="style">
                  <p class="WEB"> WEB DESIGN SERVICES FOR BUSINESS OWNERS</p>
                  <h3> Digital Design Experts</h3>
                  <P class="Schedule mt-2"> Schedule a free consultation to discover digital marketing strategies that can help your business reach it's online marketing goals.</P>
                  <P class="Schedule"> Learn more about SEO and optimization that makes a website rank at top of search engine result pages. Get more details, Speak to an expert marketing consultant now!</P>
                <a href="{{url('/web-design')}}"><button class="Learn-Now"> Learn Now</button></a>
                <a href="{{url('/free-consultation/get-a-quote')}}"><button class="Start-Now"> Start Now</button></a>
                </div>
              </div>
              <!-- col-close  -->
              <div class="col-lg-6 col-md-6 col-sm-12 style-g d-flex align-items-center">
                <div class="row">
                  <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="style-box text-center">
                      <div class="img">
                        <img src="{{ url('/asset/images/Website Desig.png')}}" alt="">
                      </div>
                      <div class="text">
                        <h4> Website Design</h4>
                      </div>
                    </div>
                  </div>
                  <!-- col-close  -->
                  <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="style-box text-center">
                      <div class="img">
                        <img src="{{ url('/asset/images/Landingpage Design.png')}}" alt="">
                      </div>
                      <div class="text">
                        <h4>Landingpage Design</h4>
                      </div>
                    </div>
                  </div>
                  <!-- col-close  -->
                  <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="style-box text-center">
                      <div class="img">
                        <img src="{{ url('/asset/images/Social Shop Design.png')}}" alt="">
                      </div>
                      <div class="text">
                        <h4> Social Shop Design</h4>
                      </div>
                    </div>
                  </div>
                  <!-- col-close  -->
                  <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="style-box text-center">
                      <div class="img">
                        <img src="{{ url('/asset/images/Maraketing Automation.png')}}" alt="">
                      </div>
                      <div class="text">
                        <h4> M.. Automation</h4>
                      </div>
                    </div>
                  </div>
                  <!-- col-close  -->
                  <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="style-box text-center">
                      <div class="img">
                        <img src="{{ url('/asset/images/Campaign Design.png')}}" alt="">
                      </div>
                      <div class="text">
                        <h4>Campaign Design</h4>
                      </div>
                    </div>
                  </div>
                  <!-- col-close  -->
                  <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="style-box text-center">
                      <div class="img">
                        <img src="{{ url('/asset/images/E-Catalog & Inventory.png')}}" alt="">
                      </div>
                      <div class="text">
                        <h4>E-Catalog & Inventory</h4>
                      </div>
                    </div>
                  </div>
                  <!-- col-lose  -->
                </div>
              </div>
            </div>
          </div>
        </div> 
        <!-- section7 close  -->
        <div class="section8 d-flex align-items-center">
          <div class="container">
            <div class="row d-flex align-items-center">
              <div class="col-lg-5 col-md-12 col-sm-12  z-3">
                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  <span class="nav-link active" id="v-pills-home-tab-Website" data-bs-toggle="pill" data-bs-target="#v-pills-home-Website" type="button" role="tab" aria-controls="v-pills-home-Website" aria-selected="true"> Website Audit</span>
                  <span class="nav-link" id="v-pills-profile-tab-Speed" data-bs-toggle="pill" data-bs-target="#v-pills-profile-Speed" type="button" role="tab" aria-controls="v-pills-profile-Speed" aria-selected="false">Website Speed Grade</span>
                  <span class="nav-link" id="v-pills-messages-tab-Analysis" data-bs-toggle="pill" data-bs-target="#v-pills-messages-Analysis" type="button" role="tab" aria-controls="v-pills-messages-Analysis" aria-selected="false">Competitor Analysis</span>
                </div>
              </div>
              <!-- col-lose  -->
              <div class="col-lg-6 col-md-12 col-sm-12  z-3 style">
                <div class="tab-content" id="v-pills-tabContent">
                  <div class="tab-pane fade show active" id="v-pills-home-Website" role="tabpanel" aria-labelledby="v-pills-home-tab-Website" tabindex="0">
                    <p class="SEO"> SEO RESOURCES & WEBSITE TESTING TOOLS</p>
                    <h3> Website Audit</h3>
                    <p class="Identify"> Identify your market position, evaluate your marketing strategies, discover page errors and explore strategies that quickly achieve your on page goals.</p>
                   <a href="{{url('/seo-resources/website-audit')}}"><button class="More mt-3"> Learn More	</button></a>
                  <a href="{{url('/free-consultation/get-a-quote')}}"><button class="More"> Start Now	</button></a>
                  </div>
                  <div class="tab-pane fade" id="v-pills-profile-Speed" role="tabpanel" aria-labelledby="v-pills-profile-tab-Speed" tabindex="0">
                    <p class="SEO"> SEO RESOURCES & WEBSITE TESTING TOOLS</p>
                    <h3>Website Speed Testing Tools</h3>
                    <p class="Identify"> Page download speed is essential to search engine ranking so start using the website testing tools to get page speed insights.</p>
                    <p class="Get"> Get advice, analyze and optimize all page elements</p>
                    <p class="Identify"> Take advantage of page speed optimization suggestions to clear the road for search inquires.</p>
                    <a href="{{url('/seo-resources/website-speed')}}"><button class="More mt-3"> Learn More	</button></a>
                    <a href="{{url('/free-consultation/get-a-quote')}}"><button class="More"> Start Now	</button></a>
                  </div>

                  <div class="tab-pane fade" id="v-pills-messages-Analysis" role="tabpanel" aria-labelledby="v-pills-messages-tab-Analysis" tabindex="0">
                    <p class="SEO"> SEO RESOURCES & WEBSITE TESTING TOOLS</p>
                    <h3>Competitor Analysis </h3>
                    <p class="Identify"> Page download speed is essential to search engine ranking so start using the website testing tools to get page speed insights.</p>
                    <p class="Get">Get advice, analyze and optimize all page elements</p>
                    <p class="Identify">Take advantage of page speed optimization suggestions to clear the road for search inquires.
                    </p>
                  <a href="{{url('/seo-resources/competitor-analysis')}}"><button class="More mt-3"> Learn More	</button></a>
                  <a href="{{url('/free-consultation/get-a-quote')}}"><button class="More"> Start Now	</button></a>
                  </div>
                </div>
              </div>
            </div>
          </div> 
        </div>
        <!-- section8 close  -->

        <div class="section9">
          <div class="container">
            <div class="text-center">
              <h4> SEARCH & SOCIAL MEDIA MARKETING MASTERS</h4>
              <p> Reach your marketing goals using search engines and social platforms. We design digital marketing campaigns that improve search engine ranking and social media ad impact; start an effective strategy managed by professional marketing experts here.</p>
            </div>
            <div class="row mt-5 d-flex justify-content-lg-center  justify-content-md-center gap-4">
              <div class="col-lg-3 col-md-5 col-sm-12  edit-box">
                <div class="img">
                  <img src="{{ url('/asset/images/card-1.avif')}}" alt="">
                </div>
                <div class="text">
                  <span class="SEM"> SEM </span>
                  <p class="mt-3"> Search engine marketing gurus are available to design strategies for online businesses, retail shops and companies.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                  <button onclick="location.href='{{url("digital-marketing/search-engine-optimization-seo")}}'"> Learn More</button>
                </div>
              </div>
              <!-- col-close  -->
              <div class="col-lg-3 col-md-5 col-sm-12  edit-box">
                <div class="img">
                  <img src="{{ url('/asset/images/card-2.avif')}}" alt="">
                </div>
                <div class="text">
                  <span class="SEM"> SMM </span>
                  <p class="mt-3"> Social media marketing experts are ready to customize campaigns that reach, engage and sell to customers on social media platforms.</p>
                  <button onclick="location.href='{{url("digital-marketing/social-media-marketing-smm")}}'"> Learn More</button>
                </div>
              </div>
              <!-- col-close  -->
              <div class="col-lg-3 col-md-5 col-sm-12  edit-box">
                <div class="img">
                  <img src="{{ url('/asset/images/card-3.avif')}}" alt="">
                </div>
                <div class="text">
                  <span class="SEM"> Branding</span>
                  <p class="mt-3"> Reputation management and growth experts are ready to provide digital branding and influence marketing strategies.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                  <button onclick="location.href='{{url("digital-solutions/branding2")}}'">Learn More</a></button>
                </div>
              </div>
              <!-- col-close  -->
              <div class="col-lg-3 col-md-5 col-sm-12  edit-box">
                <div class="img">
                  <img src="{{ url('/asset/images/card-4.avif')}}" alt="">
                </div>
                <div class="text">
                  <span class="SEM"> PPC </span>
                  <p class="mt-3"> Talk to a Google ads expert about a pay per click strategy. Start a paid search advertising campaign to instantly achieve sales goals.</p>
                  <button onclick="location.href='{{url("digital-solutions/pay-per-performance-2")}}'"> Learn More</button>
                </div>
              </div>
              <!-- col-close  -->
              <div class="col-lg-3 col-md-5 col-sm-12  edit-box">
                <div class="img">
                  <img src="{{ url('/asset/images/card-5.avif')}}" alt="">
                </div>
                <div class="text">
                  <span class="SEM"> Funnel Marketing</span>
                  <p class="mt-3"> Explore Affiliate marketing sales funnel strategies that generate high conversion rate. Custom build a sales funnel website here</p>
                  <button onclick="location.href='{{url("digital-marketing/local-marketing")}}'"> Learn More</button>
                </div>
              </div>
              <!-- col-close  -->
              <div class="col-lg-3 col-md-5 col-sm-12  edit-box">
                <div class="img">
                  <img src="{{ url('/asset/images/card-6.avif')}}" alt="">
                </div>
                <div class="text">
                  <span class="SEM"> Integrated Marketing</span>
                  <p class="mt-3">Discover integrated strategies designed to broadcast one message throughout popular social media platforms. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                  <button onclick="location.href='{{url("digital-marketing/content-marketing")}}'"> Learn More</button>
                </div>
              </div>
              <!-- col-close  -->
            </div>
          </div>
        </div>
        <!-- section9 close  -->


        <div class="section10">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-12  style">
                <h4>LET'S START A PROJECT TOGETHER. </h4>
                <p> Give us a call or drop by anytime, we endeavour to answer all enquiries
                  within 24 hours on business days.</p>
              </div>
              <!-- col-close  -->
              <div class="col-lg-6  col-md-6 col-sm-12 button  d-flex justify-content-lg-end align-items-center">
           <a href="tel:347-391-1811"><button>347-391-1811</button></a>
              </div>
            </div>
          </div>
        </div>
       <!-- section10 close  -->
       <div class="section11">
        <div class="container">
          <div class="slider">
            <div class="slide-track">
              <div class="slide">
                <img src="{{ url('/asset/images/1.avif')}}" alt="">
              </div>
              <div class="slide">
                <img src="{{ url('/asset/images/l2.png')}}" alt="">
              </div>
              <div class="slide">
                <img src="{{ url('/asset/images/l3.png')}}" alt="">
              </div>
              <div class="slide">
                <img src="{{ url('/asset/images/14.jpg')}}" alt="">
              </div>
              <div class="slide">
                <img src="{{ url('/asset/images/15.png')}}" alt="">
              </div>
              <div class="slide">
                <img src="{{ url('/asset/images/16.png')}}" alt="">
              </div>
              <div class="slide">
                <img src="{{ url('/asset/images/17.png')}}" alt="">
              </div>
              <div class="slide">
                <img src="{{ url('/asset/images/18.png')}}" alt="">
              </div>
            </div>
          </div>
        </div>
       </div>
       <!-- section11 close  -->
       <div class="section12">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d184552.57289742303!2d-79.51814179377936!3d43.71815566213178!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d4cb90d7c63ba5%3A0x323555502ab4c477!2sToronto%2C%20ON%2C%20Canada!5e0!3m2!1sen!2sin!4v1678602016785!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
       </div>
@stop