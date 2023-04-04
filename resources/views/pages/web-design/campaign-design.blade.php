@extends('layouts.getquote')
@section('content')

	<!-- header close  -->
    <section class="section1 seo d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12  z-3 d-flex align-items-center">
                    <div class="text">
                        <h5>Campaign Design</h5>
                        <p>A website launch requires a campaign design. Utilizing a concrete marketing plan will help propel any business to the lead by driving traffic and boosting conversions.</p>
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

                        <input type="hidden" name="category" value="Web Design" id="category">
                        <input type="hidden" name="sub_category" value="Campaign Design" id="sub_category">

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
        <div class="col-sm-7">
            <h3>A Foundation of Analytics</h3>
            <p>Our team provides you with the analytics you need so you can measure the results of yoru website launch. Typically, you’ll see widescale changes in the amount of traffic so you’ll need a baseline to gauge the site’s success.</p>

            <ul>
                <li>Establish user actions through solid analytics.</li>
                <li>Track user actions</li>
                <li>Create events to achieve goals</li>
            </ul>
        </div>
        <div class="col-sm-5">
           <div class="img">
                <img style="max-height: 401px;" src="{{url('/asset/images/website/Campaign-Design-Section1-min.png')}}" alt="">
            </div>
        </div>
      </div>
    </div>

    <div class="container w-section">   
      <div class="row">
        <div class="col-sm-5">
           <div class="img">
                <img style="max-height: 531px;" src="{{url('/asset/images/website/Campaign-Design-Section2-min.png')}}" alt="">
            </div>
        </div>
        <div class="col-sm-7">
            <h3>SEO to build the website</h3>
            <p>Using tailored SEO, our team will create a noticeable website that creates organic traffic from search engine results. The use of keywords also leads to purchasing decisions.</p>

            <ul>
                <li>Compare keywords from your old website with the new and evolving website.</li>
                <li>Utilize keywords in the headings of the website.</li>
                <li>Ensure that all redirects point towards the new website.</li>
                <li>Fix broken links where needed.</li>
                <li>Create internal links where needed.</li>
                <li>Shema markup to ensure Google search success.</li>
            </ul>
        </div>
      </div>
    </div>

    <div class="container w-section">   
      <div class="row">
        <div class="col-sm-7">
            <h3>Search Engine Marketing</h3>
            <p>Utilize paid advertising on search engines to drive more traffic. SEM provides quick results for a website launch when you don’t want to wait around for slower results.</p>
            <p>SEO and SEM focus on the use of keywords – however, SEM can push your business higher and faster in search engine rankings.</p>
            <ul>
                <li>Design, test, and prepare the website.</li>
                <li>Provide a bold CTA.</li>
                <li>Landing page design that captures information from leads and goes directly to the new website.</li>
                <li>Formulate an affordable website ad campaign to run for several months</li>
                <li>Create internal links where needed.</li>
                <li>Capture all conversion rates and record them for tracking.</li>
            </ul>
        </div>

         <div class="col-sm-5">
           <div class="img">
                <img style="max-height: 531px;" src="{{url('/asset/images/website/Campaign-Design-Section3-min-1.png')}}" alt="">
            </div>
        </div>
      </div>
    </div>

    <div class="container w-section">   
      <div class="row">
        <div class="col-sm-5">
           <div class="img">
                <img style="max-height: 531px;" src="{{url('/asset/images/website/Campaign-Design-Section4-min.png')}}" alt="">
            </div>
        </div>
        <div class="col-sm-7">
            <h3>Social Media</h3>
            <p>Social media is an integral part of any campaign. Our team will help create social media graphics to spur excitement and interest prior to a campaign launch. Provide giveaways, special offers, and animated videos.Our team will perform the following:</p>
            <ul>
                <li>Analyze all social media platforms that perform best for engagement.</li>
                <li>Use the platforms for specific content.</li>
                <li>Share animated or live-action videos – videos such as a message from the CEO, new product launch, etc.</li>
                <li>Create necessary announcements.</li>
                <li>Design an email newsletter.</li>
                <li>Spur an email campaign pointing towards the website campaign launch.</li>
            </ul>
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
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d184552.57289742303!2d-79.51814179377936!3d43.71815566213178!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d4cb90d7c63ba5%3A0x323555502ab4c477!2sToronto%2C%20ON%2C%20Canada!5e0!3m2!1sen!2sin!4v1678602016785!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
@stop