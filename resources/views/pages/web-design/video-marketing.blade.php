@extends('layouts.getquote')
@section('content')

	<!-- header close  -->
    <section class="section1 seo d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12  z-3 d-flex align-items-center">
                    <div class="text">
                        <h5>What is Video Marketing, and Why Does Your Business Need It?</h5>
                        <p>Is video marketing a necessity? YES! Brands need an effective digital marketing strategy. Video has become an integral part of every channel and platform.</p>
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
                        <input type="hidden" name="sub_category" value="Video Marketing" id="sub_category">

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
                <img style="max-height: 488px;" src="{{url('/asset/images/video-Marketing-Section1-min.png')}}" alt="">
            </div>
        </div>
        <div class="col-sm-7">
            <h3>Video Marketing</h3>
            <p>A video marketing plan is crucial in your campaign and outreach efforts, especially when combined with a social media marketing strategy. Look on any social media platform, and you’ll soon discover that video is king. Consumers enjoy watching short videos on social channels.</p>

            <p>With a video, you can offer authentic and straightforward information about your brand and products that your audience will retain!</p>

            <p>Best of all – video production is wonderfully cost-effective and won’t chisel away at your organization’s bottom line. You can shoot a quality 4k video using a smartphone and upload it effortlessly onto social media.</p>

            <p>Whether you choose to use premium camera equipment, optimum lighting, and superior editing software, or you simply opt to share smartphone videos of your business, video marketing is simple, cost-effective, and successful.</p>
        </div>
      </div>
    </div>

    <div class="container w-section">   
      <div class="row">
        <div class="col-sm-7">
            <h3>eJobs4Pros and Video Marketing</h3>
            <p>If you are unsure where to begin with video marketing, let the pros at ejobs4Pros handle all of your video marketing needs. We will lay out an effective strategy that might include combining social media with video marketing to truly build and hone brand awareness and drive traffic to your website.</p>
        </div>
        <div class="col-sm-5">
           <div class="img">
                <img style="max-height: 511px;" src="{{url('/asset/images/video-Marketing-Section2-min.png')}}" alt="">
            </div>
        </div>
      </div>
    </div>

    <div class="container w-section">   
      <div class="row">
        <div class="col-sm-5">
           <div class="img">
                <img style="max-height: 551px;" src="{{url('/asset/images/video-Marketing-Section3-min.png')}}" alt="">
            </div>
        </div>
        <div class="col-sm-7">
            <h3>Video for Landing Pages and Emails</h3>
            <p>Video marketing is not just for social media. Your landing page can benefit from the video too! Studies have shown that placing a video on a landing page can increase conversion by an astonishing 80 percent.</p>

            <p>Adding video to an email subject line increases <a href="https://blog.depositphotos.com/2017-video-marketing-stats-why-you-need-to-start-using-video-infographic.html">open rates by 19%.</a></p>

            <p>Many customers report that watching a video helps them make a buying decision. It can showcase a product, how it works, and functions so that the consumer can make a choice.</p>

            <p>Video is a goldmine of potential. Let the experts at eJobs4Pros show you exactly to use video marketing to build brand awareness, drive traffic, achieve conversions, and better market your products!</p>
        </div>
      </div>
    </div>

    <div class="container w-section">   
      <div class="row">
        <div class="col-sm-7">
            <h3>The potential of video marketing is endless!</h3>
            <p>If you are looking for a versatile and cost-effective tool, then try video marketing! It can be used during the entire customer buying journey to increase engagement.</p>

            <p>Create the following videos for effective marketing:</p>
            <ul>
                <li>Onboarding videos</li>
                <li>Knowlege-based videos</li>
                <li>Support video calls</li>
                <li>Customer stories and testimonials</li>
                <li>Meet the team videos</li>
                <li>Product descriptions</li>
                <li>Product reviews</li>
                <li>DIY with products</li>
                <li>Personalized outreach</li>
            </ul>
        </div>
        <div class="col-sm-5">
           <div class="img">
                <img style="max-height: 511px;" src="{{url('/asset/images/video-Marketing-Section4-min.png')}}" alt="">
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