@extends('layouts.getquote')
@section('content')

	<!-- header close  -->
    <section class="section1 seo d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12  z-3 d-flex align-items-center">
                    <div class="text">
                        <h5>The Importance of Email Marketing</h5>
                        <p>Traditional marketing once relied on the U.S. Postal Service to distribute letters, pamphlets, and flyers. However, there is a new kid on the block – email marketing.</p>
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
                        <input type="hidden" name="sub_category" value="Email Marketing" id="sub_category">

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
                <img style="max-height: 527px;" src="{{url('/asset/images/Email-Marketing-Section1-min.png')}}" alt="">
            </div>
        </div>
        <div class="col-sm-7">
            <h3>The Effectiveness of Email Marketing</h3>
            <p>Email marketing campaigns are one of the best marketing tools to earn business leads and deliver an impressive high return on investment (ROI) — at eJob4Pros, our goal is to help you grow your bottom line.</p>

            <p>The use of email marking is affordable and remarkably effective. You can use emails to promote your products and services while inspiring customer loyalty. You simply use the emails to make customers aware of discounts, new products, changing product information, downloadables you are offering, or push them to carry out an activity such as renewing a membership.</p>

            <ul>
                <li>Whether you are using email as a soft sell to</li>
                <li>Educate about your business</li>
                <li>Driving a ‘funnel’ to spur the readers to make a purchase</li>
                <li>Darry out some other act</li>
            </ul>
        </div>
      </div>
    </div>

    <div class="container w-section">   
      <div class="row">
        <div class="col-sm-7">
            <h3>Emails are very concise and valuable to any business</h3>
            <p>Typically, all email marketing has one goal – to push the user toward some kind of action. You want the email read, and you also want to go further. You can build a relationship with the reader while driving traffic to your website, social media, blog, product, or elsewhere.</p>

            <p>Emails can even be segmented to target a particular demographic or geographic location.</p>

            <p>Our team at eJobs4Pros specialize in email marketing. We will create responsive designs, customize messages, send deliverable emails to inboxes, lounge trigger automated workflows and help your business connect with new customers.</p>

            <p>Studies have shown that 87 percent of business-to-business (B2B) marketers and 79 percent of business-to-consumer (B2C( businesses use email marketing campaigns.</p>
        </div>
        <div class="col-sm-5">
           <div class="img">
                <img style="max-height: 511px;" src="{{url('/asset/images/Email-Marketing-Section2-min.png')}}" alt="">
            </div>
        </div>
      </div>
    </div>

    <div class="container w-section">   
      <div class="row">
        <div class="col-sm-5">
           <div class="img">
                <img style="max-height: 514px;" src="{{url('/asset/images/Email-Marketing-Section3-min.png')}}" alt="">
            </div>
        </div>
        <div class="col-sm-7">
            <h3>Are you using email marketing services to grow and promote your business effectively?</h3>
            <p class="">Email marketing is a very concise strategy that requires experience and knowledge to carry out successfully, or you won’t achieve the results you seek. An uncoordinated promotion strategy will result in low customer volume and a decline in business or, at the very least, no uptick.</p>

            <p>At eJobs4Pros, we can help you capitalize on a conversion-focused email marketing campaign that genuinely renders results. Our team provides a diverse range of email marketing services designed to fit your particular needs and financial requirements.</p>

            <p>Please contact us today to <a href="{{url('contact-website-design-and-digital-marketing-professionals')}}">learn more</a>. We are happy to discuss the importance of email marketing campaigns and help you achieve your business goals.</p>
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