@extends('layouts.getquote')
@section('content')

	<!-- header close  -->
    <section class="section1 seo d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12  z-3 d-flex align-items-center">
                    <div class="text">
                        <h5>Social Shop</h5>
                        <p>The social shop is becoming a leader in eCommerce. However, you might be wondering – what is so special about the social shop?</p>
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
                        <input type="hidden" name="sub_category" value="Social Shop" id="sub_category">

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
                <img style="max-height: 438px;" src="{{url('/asset/images/website/Social-Shop-Section1-min.png')}}" alt="">
            </div>
        </div>
        <div class="col-sm-7">
            <h3>History of the Social Shop</h3>
            <p>Pinterest was a ground-breaking social shop site that genuinely launched various browsing and shopping features that hinged on social sharing. At first, it was just a trendy site, but it quickly became a place to advertise and buy online. Many say that Pinterest is what has spurred the curative social shopping site that is currently trending.</p>

            <p>The world is an ever-evolving place. The rise of Facebook, Instagram, and Twitter has truly changed the way that people socialize. To add fuel to the flame, the Covid19 pandemic and global lockdowns have added to the need for socialization while social distancing. Clearly, the groundwork for the popularity of social shops has been laid and is only going to grow.</p>
        </div>
      </div>
    </div>

    <div class="container w-section">   
      <div class="row">
        <div class="col-sm-7">
            <h3>A New Generation of Social Shoppers</h3>
            <p>Social shopping is a way of catering to a new generation of shoppers who like certain aspects of social media, such as Facebook’s liking and sharing, and want to integrate it into their shopping experiences.</p>

            <p>Shopping has always been an experience to be shared between friends and family. Many people remember going to a mall with friends fondly. Social shopping takes it to a whole new level. You can remain social without having to physically visit a brick-and-mortar store.</p>
        </div>
        <div class="col-sm-5">
           <div class="img">
                <img style="max-height: 401px;" src="{{url('/asset/images/website/Social-Shop-Section2-min.png')}}" alt="">
            </div>
        </div>
      </div>
    </div>

    <div class="container w-section">   
      <div class="row">
        <div class="col-sm-5">
           <div class="img">
                <img style="max-height: 560px;" src="{{url('/asset/images/website/Social-Shop-Section3-min-1.png')}}" alt="">
            </div>
        </div>
        <div class="col-sm-7">
            <h3>Building a Social Shop Community</h3>
            <p class="">If you wonder what makes a social shop stand out, then let’s examine the key features of these stylish, almost boutique eCommerce sites. The social shopping site builds on community. They want their visitors to talk about the products and what makes them so unique.</p>

            <ul>
                <li>Presentation is always personal.</li>
                <li>Members and visitors have the opportunity to create persona-style boards and product lists.</li>
                <li>Some sites even encourage visitors to take polls or share blogs.</li>
                <li>Encourages sharing and recommendations.</li>
                <li>Can further share on social media giants like Facebook to make buying suggestions to friends and family.</li>
            </ul>

            <p class="">Social shops like ShopStyle and Kaboodle now recommend products to members in much the same way as the big contender Amazon. They gently guide the shopper through the entire shopping journey in a very positive way.</p>

            <p>Think about the impact of social media on shoppers. Around the world, <a href="https://sproutsocial.com/insights/instagram-stats/" target="_blank" rel="noopener">90 percent</a> of all Instagram users follow business profiles. What those businesses post affects the buyers. At least <a href="http://learn.podium.com/rs/841-BRM-380/images/2017-SOOR-Infographic.jpg" target="_blank" rel="noopener">93 percent</a> of consumers are influenced by online reviews, which impact their purchasing decisions. Launching a social shop is like embracing all aspects – social media, eCommerce, and buying trends.Launching a social shop is like embracing all aspects – social media, eCommerce, and buying trends.     </p>
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