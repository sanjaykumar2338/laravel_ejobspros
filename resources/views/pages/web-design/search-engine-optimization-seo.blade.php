@extends('layouts.getquote')
@section('content')

	<!-- header close  -->
    <section class="section1 seo d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12  z-3 d-flex align-items-center">
                    <div class="text">
                        <h5>SEO to Drive Traffic, Achieve Conversions, and Increase Profitability</h5>
                        <p>The use of search engine optimization (SEO) has the potential to increase your business revenue by helping your website climb to the top of Google’s search engine. If you feel like your company’s website is faltering and not showing up at the top of the search results then you definitely want to take the time to learn more about SEO</p>
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

    <div class="container w-section">   
      <div class="row">
        <div class="col-sm-5">
           <div class="img">
                <img style="max-height: 350px;" src="{{url('/asset/images/search-engine-optimization-Section1-min.png')}}" alt="">
            </div>
        </div>
        <div class="col-sm-7">
            <h3>What is SEO?</h3>
            <p>SEO is a tool you can use to improve your online presence to gain more exposure, increase user traffic, and gain conversions. The process of SEO consists of using keywords that the search engines recognize when someone runs a search seeking results that match their query. SEO is also handy for grabbing the attention of clients in your particular geographic location.</p>

            <p>Your website should be well-rounded with good information, informative blog posts, helpful product descriptions (if an eCommerce site), backlinks, and photos with keyword labels.</p>
        </div>
      </div>
    </div>

    <div class="container w-section">   
      <div class="row">
        <div class="col-sm-7">
            <h3>Researching for SEO</h3>
            <p>Everything hinges on keywords. One of the best ways to make sure Google takes notice of your business website and ranks it higher is to research the most commonly searched keywords for your particular niche and then use them on your website. You’ll also want to make sure that you use geographic words throughout your website so you grab the attention of local traffic.</p>

            <p>The benefits of paid search ads include:</p>

            <p><strong>High-intent audiences:</strong> People carrying out a geographic search for local businesses or eCommerce sites selling specific products are high intent audiences. You want to gain their traffic to your website to obtain their business. Paid search ads are highly beneficial.</p>

            <p><strong>Money well spent:</strong>  The bidding format of search engines lets you dictate what you can afford for an advertisement. You can set your maximum bid so you know exactly how much you will pay. There are no surprises so you can budget accordingly. Paid search ads deliver a great return on investment (ROI).</p>

            <p><strong>Immediate results:</strong>  Businesses quickly see measure results from paid search ads. There is no waiting!</p>
        </div>
        <div class="col-sm-5">
           <div class="img">
                <img style="max-height: 511px;" src="{{url('/asset/images/search-engine-optimization-Section1-min (1).png')}}" alt="">
            </div>
        </div>
      </div>
    </div>

    <div class="container w-section">   
      <div class="row">
        <div class="col-sm-5">
           <div class="img">
                <img style="max-height: 551px;" src="{{url('/asset/images/search-engine-optimization-Section3-min.png')}}" alt="">
            </div>
        </div>
        <div class="col-sm-7">
            <h3>Hiring an SEO Specialist</h3>
            <p>Yes, you could carry out a little research and try to tackle your website’s SEO, but utilizing an SEO expert is your best course of action.</p>

            <p>At eJobs4pros, our team helps businesses use their websites to generate sales. Our marketing services target your preferred audience and help your website rise above the competition by scoring a top spot on any search results.</p>

            <p>We offer digital media and SEO marketing services that meet your particular needs. Our comprehensive strategy covers all key areas of SEO such as the following:</p>

            <ol>
                <li>Business profiles</li>
                <li>Local SEO</li>
                <li>Social media</li>
                <li>Content marketing</li>
                <li>Content optimization</li>
            </ol>
        </div>
      </div>
    </div>

    <div class="container w-section">   
      <div class="row">
        <div class="col-sm-7">
            <h3>Why Work with eJobs4Pros?</h3>
            <p>SEO marketing is not just about clicks. Yes, once your website appears at the top of the search results, many will click on the site but you also need to provide them with a reason to stay on your site. First impressions are everything. SEO is a great marketing tool but we also focus on conversions and sales. Let your talented teamwork for you. We’ll use search engine optimization to truly bring your business to the forefront of the competition.</p>
        </div>
        <div class="col-sm-5">
           <div class="img">
                <img style="max-height: 511px;" src="{{url('/asset/images/search-engine-optimization-Section4-min.png')}}" alt="">
            </div>
        </div>
      </div>
    </div>

    <section class="w-section">
        <div class="container">
            <h4>At eJobs4Pros</h4>
            <p>We know precisely how to design landing pages to achieve tangible results that convert visitors to leads.<p>

            <p><a href="{{url('contact-website-design-and-digital-marketing-professionals')}}">Contact us to learn more!</a></p>
        </div>
    </section>

    <div class="seo-f">
      @include('includes.map')
    </div>
@stop