@extends('layouts.getquote')
@section('content')

 <!-- header close  -->
<section class="banner-s-1 d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12  d-flex align-items-center z-3">
                    <div class="text-style">
                        <h4> TALK TO WEBSITE
                            DESIGN EXPERT</h4>
                            <p> Schedule a free consultation to discover digital marketing strategies that can help your business reach it’s online marketing goals.</p>
                          <p> Learn more about SEO and optimization that makes a website rank at top of search engine result pages. Get more details, Speak to an expert marketing consultant now!                          </p>
                          </div>
                </div>
                <!-- col-close  -->
                <div class="col-lg-6 col-md-12 col-sm-12  z-3">
                    <div class="style-1">
                        <h3>DIGITAL SOLUTIONS
                        </h3>
                    <form action="sumbit">
                        <div class="form-1  mt-5 d-flex align-items-center" action="sumbit">
                            <input type="radio" id="Success Essentials" name="services" value="Success Essentials">
                        <label for="Success Essentials">Success Essentials</label>
                        </div>
      
                        <div class="form-1 mt-3  d-flex align-items-center">
                            <input type="radio" id="Competitive Edge" name="services" value="Competitive Edge">
                          <label for="Competitive Edge">Competitive Edge</label>
                          </div>
      
                          <div class="form-1 mt-3 d-flex align-items-center">
                              <input type="radio" id="Social E-Commerce" name="services" value="Social E-Commerce">
                           <label for="Social E-Commerce">Social E-Commerce</label>
                           </div>
      
                           <div class="form-1 mt-3 d-flex align-items-center">
                              <input type="radio" id="Pay Per Lead" name="services" value="Pay Per Lead">
                            <label for="Pay Per Lead">Pay Per Lead</label>
                            </div>
      
                             <div class="form-1 mt-3 d-flex align-items-center">
                                <input type="radio" id="Pay Per Performance" name="services" value="Pay Per Performance">
                             <label for="Pay Per Performance">Pay Per Performance</label>
                           </div>
                           <div class="form-1 mt-3 d-flex align-items-center">
                              <input type="radio" id="Branding" name="services" value="Branding">
                           <label for="Branding">Branding</label>
                         </div>
                           <button type="submit" value="submit" class="btn-submit mt-4">CONTINUE</button>
                           </form>
                        <!-- form  -->
                           </div>
                </div>
            </div>
        </div>
    </section>
        <!-- banner close  -->
        <section class="section-to">
            <div class="container">
                <div class="text-center">
                    <h4> DIGITAL SOLUTIONS
                    </h4>

                </div>
                <div class="row   g-md-3  g-sm-3 mt-4">
                    <div class="col-lg-4 col-md-6 col-sm-12 ">
                        <div class="style-box">
                          <div class="img">
                            <img src="{{url('/asset/images/s-2.png')}}" alt="">
                          </div>
                          <div class="text">
                            <h3>Success
                                Essentials
                                </h3>
                                <p> We know you want to make an impressive digital footprint which is why we offer a turnkey integrated marketing package to meet your needs. Let us help you improve your online sales with our custom social shop solutions.                                </p>
                          </div>
                        </div>
                      </div>

                      <div class="col-lg-4 col-md-6 col-sm-12 ">
                        <div class="style-box">
                          <div class="img">
                            <img src="{{url('/asset/images/e-1.png')}}" alt="">
                          </div>
                          <div class="text">
                            <h3>Competitive
                                Edge
                                </h3>
                                <p> Businesses with the competitive edge stay ahead. Our team implements real solutions that render impressive instant results. We offer a truly budget-friendly turnkey ecommerce solution that comes with remarketing tips that are designed to generate real, impressive leads.</p>
                          </div>
                        </div>
                      </div>

                      <div class="col-lg-4 col-md-6 col-sm-12  ">
                        <div class="style-box">
                          <div class="img">
                            <img src="{{url('/asset/images/e-2.png')}}" alt="">
                          </div>
                          <div class="text">
                            <h3>Social
                                E-Commerce
                                </h3>
                                <p> Social media is booming and the use of social e-commerce holds the promise of substantially increasing your online sales and helping your brand gain even greater recognition.                                </p>
                              </div>
                        </div>
                      </div>

                      <div class="col-lg-4 col-md-6 col-sm-12 ">
                        <div class="style-box">
                          <div class="img">
                            <img src="{{url('/asset/images/p-1.png')}}" alt="">
                          </div>
                          <div class="text ">
                            <h3>Pay
                                Per Lead
                                </h3>
                                <p>Let our skilled agents draft a successful sales funnel, nurture leads and create an automated engagement strategy.

                                  We will drive traffic to your e-commerce store to increase sales. With our effective digital knowledge, we can attract qualified leads to grow your business in ways you never dreamed possible. Best of all we provide pay per lead!</p>
                          </div>
                        </div>
                      </div>

                      <div class="col-lg-4 col-md-6 col-sm-12 ">
                        <div class="style-box">
                          <div class="img">
                            <img src="{{url('/asset/images/pe-1.png')}}" alt="">
                          </div>
                          <div class="text ">
                            <h3>Pay Per
                                Performance
                                </h3>
                                <p> With Pay Per Performance, you don’t have to worry about paying if our team does not provide you with the impressive results you seek. Working with us helps minimize risks so you can gain the results you seek without worry. We can help your business grow!</p>
                          </div>
                        </div>
                      </div>

                      <div class="col-lg-4 col-md-6 col-sm-12 ">
                        <div class="style-box">
                          <div class="img">
                            <img src="{{url('/asset/images/br-1.png')}}" alt="">
                          </div>
                          <div class="text">
                            <h3>Branding
                                </h3>
                                <p> Use attention grabbing product photos, compel customers with relevant stories and manage order fulfilment with ease. Get a product catalog upgrade.                                </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-6 col-sm-12 ">
                        <div class="style-box">
                          <div class="img">
                            <img src="{{url('/asset/images/m-1.png')}}" alt="">
                          </div>
                          <div class="text">
                            <h3> Website Maintenance
                                </h3>
                                <p> Without proper website maintenance you will lose your edge against the competition. We can help you stay ahead of the game and keep things running smoothly with regular updates and a strong focus on staying relevant. Let us spur continued traffic growth, strengthen your website’s SEO and push your Google rankings to the top.</p>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
    </section>
<!-- section close  -->
<section class="get-f">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d184552.57289742303!2d-79.51814179377936!3d43.71815566213178!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d4cb90d7c63ba5%3A0x323555502ab4c477!2sToronto%2C%20ON%2C%20Canada!5e0!3m2!1sen!2sin!4v1678602016785!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
<!-- section close     -->
@stop