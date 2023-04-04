@extends('layouts.getquote')
@section('content')

	<!-- header close  -->
    <section class="section1 seo d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12  z-3 d-flex align-items-center">
                    <div class="text">
                        <h5>Marketing Automation CRM Website Creation</h5>

                        <p>Marketing automation CRM for website creation is not a luxury but a necessity. It gives you a window into how your customer interacts with your business. You’ll obtain detailed breakdowns of inquires, purchases, conversions, and more.Effective CRMs are automated and simplify all of the essential tasks.</p>
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
                        <input type="hidden" name="sub_category" value="Marketing Automation" id="sub_category">

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
                <img style="max-height: 358px;" src="{{url('/asset/images/website/Marketing-Page-Section1-min.png')}}" alt="">
            </div>
        </div>
        <div class="col-sm-7">
            <h3>The best CRMs provide the following</h3>
            <ol>
            	<li>Customer Conversation Histories</li>
            	<li>Lead Form Integration</li>
            	<li>Filter Of Customers</li>
            	<li>Automated Email</li>
            	<li>Visibility Tracking</li>
            	<li>Marketing Automation and Lead Nurturing</li>
        	</ol>
        </div>
      </div>
    </div>

    <section class="w-section">
        <div class="container">
            <h4>Customer Conversation Histories</h4>
            <p>Look back on all customer interactions and conversations with your company.<p>
        
            <h4>Lead Form Integration</h4>
            <p>A website visitor should be funneled via the landing page to complete a quick and straightforward form to subscribe to a newsletter, contact your sales team, sign up for a demo,download a guidebook, or sign up to win something. The goal of the CRM is to obtain email addresses and names.<p>

            <h4>Filter Of Customers</h4>
            <p>Segment your customers and prospects based on industry, value, date of the last contact, and geographic location. Such crucial information helps you to target marketing messages to capture the buyer’s attention effectively.<p>

            <h4>Automated Email</h4>
            <p>An automated CRM creates an organized email list, sends out follow-up emails, and sends communications to push the potential buyer based on where the prospect is within the entire buying process, such as if they have abandoned a cart.<p>

            <h4>Visibility and Tracking</h4>
            <p>You want to generate the most significant amount of revenue for your business – it’s all about the bottom line. An automated CRM lets you track leads that span from source to sale so you can understand the effectiveness of your marketing efforts.<p>
        	<p>Many CRMs do not provide this out of the box, but you can have it as an integration or add-on. It is a definite must-have to stay up-to-date on the revenue impact of your marketing campaigns.</p>

            <h4>Market Automation and Lead Nurturing</h4>
            <p>Building solid connections and relationships with your customers requires more than a single sale if you want to create stable connections with your customers. You want to hone the relationship using a successful sales funnel that takes the buyer through an entire journey. With automation, you can manage relationships and interactions with your existing customers, identify new leads, reach out to new potential buyers, bring in new business and provide service throughout the entire client relationship.<p>

        	<p>At eJobs4Pros, we have worked with innumerable business leaders to help them achieve their business goals. We can help take your website and business to the next level of success using CRM automation as one cornerstone. You can put everything on autopilot and let our skilled team help your business grow!</p>

        	<p>We can help you create a solid presence on the web by building a search engine-friendly website that is highly responsive and professional. Our web development team delivers quick and efficient results.</p>

        	<p>We will create personalized messages with marketing automation, review your business analytics, and target the right people with a precise delivery system honed to the optimum delivery time. A quality automation system streamlines and measures success with workflows and ongoing tasks to take the guesswork from successful marketing.</p>
        </div>
    </section> 

    <div class="container w-section">   
      <div class="row">
        <div class="col-sm-5">
           <div class="img">
                <img style="max-height: 358px;" src="{{url('/asset/images/website/Marketing-Page-Section2-min.png')}}" alt="">
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
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d184552.57289742303!2d-79.51814179377936!3d43.71815566213178!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d4cb90d7c63ba5%3A0x323555502ab4c477!2sToronto%2C%20ON%2C%20Canada!5e0!3m2!1sen!2sin!4v1678602016785!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
@stop