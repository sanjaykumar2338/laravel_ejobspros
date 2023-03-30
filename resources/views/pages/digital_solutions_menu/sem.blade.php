@extends('layouts.getquote')
@section('content')

	<!-- header close  -->
    <section class="section1 seo d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12  z-3 d-flex align-items-center">
                    <div class="text">
                        <h5>SEO to Drive Traffic, Achieve Conversions, and Increase Profitability</h5>
                        <p>The use of search engine optimization (SEO) has the potential to increase your business revenue by helping your website climb to the top of Google’s search engine. If you feel like your company’s website is faltering and not showing up at the top of the search results then you definitely want to take the time to learn more about SEO.</p>
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
                        <input type="hidden" name="sub_category" value="Search Engine Optimization Seo" id="sub_category">

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
                            <img src="{{url('/asset/images/sem/search-engine-optimization-Section1-min.png')}}" alt="">
                        </div>
                        <div class="text mt-lg-2">
                            <h3>What is SEO?</h3>
                            <p>SEO is a tool you can use to improve your online presence to gain more exposure, increase user traffic, and gain conversions. The process of SEO consists of using keywords that the search engines recognize when someone runs a search seeking results that match their query. SEO is also handy for grabbing the attention of clients in your particular geographic location. Your website should be well-rounded with good information, informative blog posts, helpful product descriptions (if an eCommerce site), backlinks, and photos with keyword labels.</p>
                        </div>
                    </div>
                </div>
                <!-- col-close  -->
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="card-design" style="margin-top: -80px;">
                        <div class="img">
                            <img src="{{url('/asset/images/sem/search-engine-optimization-Section1-min.png')}}" alt="">
                        </div>
                        <div class="text mt-lg-2">
                            <h3>Local Marketing Guru</h3>
                            <p>Known to excel in developing local marketing tactics with a twist to maximize ROI; hire a local marketing guru to grow your social media and local customer base. Build a segmented email list to improve customer loyalty, redesign your brand to reflect efficiency and streamline your e-commerce process to improve sales.</p>
                        </div>
                    </div>
                </div>
                <!-- col-close  -->
                <!-- col-close  -->
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="card-design" style="margin-top: 0px;">
                        <div class="img">
                            <img src="{{url('/asset/images/sem/search-engine-optimization-Section3-min.png')}}" alt="">
                        </div>
                        <div class="text mt-lg-2">
                            <h3>Researching for SEO</h3>
                            <p>Everything hinges on keywords. One of the best ways to make sure Google takes notice of your business website and ranks it higher is to research the most commonly searched keywords for your particular niche and then use them on your website. You’ll also want to make sure that you use geographic words throughout your website so you grab the attention of local traffic.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="card-design">
                        <div class="img">
                            <img src="{{url('/asset/images/a.2.avif')}}" alt="">
                        </div>
                        <div class="text mt-lg-2">
                            <h3>Hiring an SEO Specialist</h3>
                            <p>Yes, you could carry out a little research and try to tackle your website’s SEO, but utilizing an SEO expert is your best course of action.At eJobs4pros, our team helps businesses use their websites to generate sales. Our marketing services target your preferred audience and help your website rise above the competition by scoring a top spot on any search results.We offer digital media and SEO marketing services that meet your particular needs. Our comprehensive strategy covers all key areas of SEO such as the following:

                            <ul>
                                <li>Business profiles</li>
                                <li>Local SEO</li>
                                <li>Social media</li>
                                <li>Content marketing</li>
                                <li>Content optimization</li>
                            </ul>

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="card-design">
                        <div class="img">
                            <img src="{{url('/asset/images/sem/search-engine-optimization-Section4-min.png')}}" alt="">
                        </div>
                        <div class="text mt-lg-2">
                            <h3>Why Work with eJobs4Pros?</h3>
                            <p>SEO marketing is not just about clicks. Yes, once your website appears at the top of the search results, many will click on the site but you also need to provide them with a reason to stay on your site. First impressions are everything. SEO is a great marketing tool but we also focus on conversions and sales. Let your talented teamwork for you. We’ll use search engine optimization to truly bring your business to the forefront of the competition.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- col-close  -->
            </div>
        </div>
    </div>

    <div class="seo-f">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d184552.57289742303!2d-79.51814179377936!3d43.71815566213178!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d4cb90d7c63ba5%3A0x323555502ab4c477!2sToronto%2C%20ON%2C%20Canada!5e0!3m2!1sen!2sin!4v1678602016785!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
@stop