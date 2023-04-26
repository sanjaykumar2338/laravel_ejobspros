@extends('layouts.getquote')
@section('content')

	<!-- header close  -->
    <section class="section1 seo d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12  z-3 d-flex align-items-center">
                    <div class="text">
                        <h5>Reach More Customers Using Mobile Marketing</h5>
                        <p><strong>A mobile marketing strategy is an effective marketing tool used to reach more customers via their mobile devices.</strong></p>
                        <p>Mobile marketing is an umbrella term that covers several marketing tools, processes, and techniques. They all share one goal – to target mobile users. With mobile marketing, you reach potential customers via their mobile devices using a multichannel strategy.</p>
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
                        <input type="hidden" name="sub_category" value="Mobile Marketing" id="sub_category">

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
                <img style="max-height: 374px;" src="{{url('/asset/images/Mobile-Marketing-Section1-min.png')}}" alt="">
            </div>
        </div>
        <div class="col-sm-7">
            <h3>Connect using the following:</h3>
            <ul>
                <li>SMS</li>
                <li>Social media</li>
                <li>Content marketing</li>
                <li>Mobile app</li>
                <li>Email</li>
            </ul>

            <p>With digital marketing, the goal is to expand brand awareness, foster engagement, drive traffic, and generate sales. Mobile marketing is one of the many tools that you can also use to transform and improve your business performance.</p>

            <p>Everyone owns a smartphone, and it is a fantastic way to use target advertising to gain impressive results. With targeted marketing, you put the content right in front of a particular demographic to attract the clients you know your services will appeal to. You can fast-track your target market and connect with them easily and in a very meaningful way.</p>

            <p>Mobile marketing focuses on ads that appear on phones and tablets. The mobile marketing ad format styles and customizations do vary. Your business needs an effective mobile marketing strategy to appeal to mobile users.</p>
        </div>
      </div>
    </div>

    <div class="container w-section">   
      <div class="row">
        <div class="col-sm-7">
            <h3>The most effective mobile marketing strategies for eCommerce consist of</h3>
            <ol>
                <li>Mobile-Friendly Content</li>
                <li>Voice Search Optimization</li>
                <li>Text Message Marketing</li>
                <li>Videos</li>
                <li>Mobile Apps</li>
            </ol>

            <h3>Mobile-Friendly Content</h3>
            <p>Your web pages are a crucial resource for your eCommerce business. You want to ensure that the content on your website is mobile-friendly. Every aspect of your website from the landing page to the online store’s checkout should function via a mobile device. You want mobile users to have a robust and satisfying experience. Not to mention, mobile-friendliness helps with search engine ranking. The website should load quickly and be responsive to highlight your products across a wide array of platforms with ease.</p>
            <h3>Voice Search Optimization</h3>
            <p>Smartphone users often use voice search instead of typing in phrases. Optimizing your web pages for voice search is quickly becoming a ‘must.’ Everything is tailored using long-tail phrases that people frequently say into their phones when searching.</p>
            <h3>Text Message Marketing</h3>
            <p>Text messaging marketing is a terrific way to reach smartphone users with sales or other deals. Marketing texts are a very personal way to connect. You should always try to personalize the text and keep it short. Provide real value so the recipient will look forward to your business texts and not end up blocking or unsubscribing.</p>
            <h3>Videos</h3>
            <p>Mobile users are hungry for videos. Marketing videos are a highly effective way to push purchase decisions. Many people remember information presented in a video better than something they visually read. One study shows that 85 percent of millennials have actually made a purchase after watching a mobile marketing video.</p>
            <h3>Mobile Apps</h3>
            <p>Developing your own mobile app appears to have a significant impact on customers. They are great to spur interest in your eCommerce site, influence purchasing decisions, and drive traffic.</p>
        </div>
        <div class="col-sm-5">
           <div class="img">
                <img style="max-height: 511px;" src="{{url('/asset/images/Mobile-Marketing-Section3-min.png')}}" alt="">
                <br><br><br><br>
                <img style="max-height: 511px;" src="{{url('/asset/images/Mobile-Marketing-Section2-min (1).png')}}" alt="">
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