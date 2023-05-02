@extends('layouts.getquote')
@section('content')

	<!-- header close  -->
    <section class="section1 seo d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12  z-3 d-flex align-items-center">
                    <div class="text">
                        <h5>Never Underestimate the Importance of Landing Pages</h5>
                        <p><b>Landing Pages Serve as Leading Tools in Conversion</b></p>

                        <p>At eJobs4Pros, we know that you have put a great deal of hard work into building and marketing your brand identity and business. Your web design looks lovely, and you have a solid social media presence. In most cases, you have probably also achieved an impressive email subscriber list. <b>Something is still missing, and it is one of the biggest challenges faced by business owners – landing page design.</b></p>
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
                        <input type="hidden" name="sub_category" value="Landing Page" id="sub_category">

                        <button class="" type="submit" name="frm_submit">Send</button>
                      </div>

                  </form>
                <!-- GET-A-QUOTE FORM CLOSE  -->
                </div>
            </div>
        </div>
    </section>

    <section class="w-section">
        <div class="container">
            <p>In today’s technology-driven world, it is critical to set up and correctly deploy your landing pages. Landing pages are the start of your sales funnel. They are essential tools in your conversion toolbox.</p>

            <h4>At eJobs4Pros, we know the importance of landing pages, and our team of designers is ready to meet your design needs.</h4>

            <p>One of the biggest challenges is bringing in new leads. The landing page is the page that your website visitor lands on after clicking on your link or ad.When properly designed, the landing page acts like an arrow or roadmap pointing the visitor in a single and specific direction such as:</p>

            <ul>
                <li>Making a purchase</li>
                <li>Learning more information</li>
                <li>Contacting</li>
                <li>Following up</li>
                <li>Subscribing to a newsletter</li>
                <li>Chatting with a bot</li>
                <li>Downloading a document</li>
            </ul>
        </div>
    </section>  

    <div class="container w-section">   
      <div class="row">
        <div class="col-sm-5">
           <div class="img">
                <img style="max-height: 606px;" src="{{url('/asset/images/website/Landing-Page-Section1-min.png')}}" alt="">
            </div>
        </div>
        <div class="col-sm-7">
            <h3>The landing page converts visitors to actively engage with your business.</h3>
            <p>A website is filled with information about your business or products. It is tailored for SEO and to obtain a lead with search engine results to pull in more traffic to the site. A landing page is built to convert.</p>

            <div class="container">
              <div class="row">
                <div class="col-12 col-sm-8 col-lg-12">
                  <h6 class="text-muted">Design of a landing page requires</h6> 
                  <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      Planning
                      <div class="image-parent">
                          <img src="{{url('/asset/images/website/Landing-Page-Section2-planning-2.png')}}" class="img-fluid" alt="quixote">
                      </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      Strategy
                      <div class="image-parent">
                          <img src="{{url('/asset/images/website/Landing-Page-Section2-planning-2.png')}}" class="img-fluid" alt="lay">
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">  
                      Targeting
                      <div class="image-parent">
                          <img src="{{url('/asset/images/website/Landing-Page-Section2-planning-2.png')}}" class="img-fluid" alt="things">
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">  
                      Focus
                      <div class="image-parent">
                          <img src="{{url('/asset/images/website/Landing-Page-Section2-planning-2.png')}}" class="img-fluid" alt="things">
                    </li>
                  </ul>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>

    <section class="w-section">
        <div class="container">
            <h3>Focus keep the goal in sight</h3>
            <p>The well-designed landing page does not make visitors think about what they want to do, or the process needed to achieve the goal. Instead, it guides them in a singular direction. A landing page will increase the business’s perceived value. A transform landing page should educate the visitor while providing compelling content to a visitor into a client.</p>  
        </div>
    </section>  

    <div class="container w-section">   
      <div class="row">
        <div class="col-sm-5">
           <div class="img">
                <img style="max-height: 341px;" src="{{url('/asset/images/website/Landing-Page-Section3-min-3.png')}}" alt="">
            </div>
        </div>
        <div class="col-sm-7">
            <h3>Types of Landing Pages</h3>
            <p>You will encounter several types of landing pages – each with its catchy name. At eJobs4Pros, our team is well-versed in landing page design. We will work with you to determine the most effective strategy for your</p>

            <h6 class="text-muted">business’s particular landing pages.</h6> 
            <ol>
                <li>Long Form</li>
                <li>Short Form</li>
                <li>Squeeze Pages</li>
                <li>Splash Pages</li>
                <li>Lead Capture</li>
                <li>Launching/Coming Soon</li>
            </ol>
        </div>
      </div>
    </div>

    <section class="w-section">
        <div class="container">
            <h4>Long Form</h4>
            <p>A long-form landing page is LONG. The page focuses on informing the visitor, so they feel comfortable purchasing your services. Many businesses, such as those in real estate, health, or education, rely on long-form landing pages to build confidence and push the visitor to make contact or purchase.<p>
        
            <h4>Short Form</h4>
            <p>The temporary form landing pages is delightfully light on copy but features images, stories and emotions. They are great if you offer something free such as a promotion and no long-term commitment action or expensive monetary request.<p>

            <h4>Squeeze Pages</h4>
            <p>You have probably heard of putting the ‘squeeze’ on a customer. A squeeze landing page is very minimalistic, so it does not distract from the goal. It is used to push a visitor to provide their contact information or email. Think of them as very straight and to the point without a lot of fluff.<p>

            <h4>Splash Pages</h4>
            <p>The Splash Page is a page where a visitor lands before entering the website. It is usually a promotional page with a disclaimer, announcement, or one-time offer. Splash pages are also used to request verification, acknowledgment, or click on the terms and conditions. Splash pages have only a brief message with a simple navigation link that promotes an opt-out or exit option.<p>

            <h4>Lead Capture</h4>
            <p>This is the most common form of a landing page. The lead capture collects information from your website’s traffic and then pushes them down the sales funnel.<p>

            <h4>Launching/Coming Soon</h4>
            <p>This is a remarkable landing page if your business has not been launched yet. A single CTA often offers emails with news or other important updates, such as your business’s grand opening. It is usually a simple hero image and value proposition or countdown timer.<p>
        </div>
    </section> 

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