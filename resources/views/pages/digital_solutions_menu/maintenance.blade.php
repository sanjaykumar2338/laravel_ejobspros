@extends('layouts.getquote')
@section('content')
    
    <title>Website Maintenance Services- Domain Name and Hosting</title>
    <meta name="description" content="We provide domain name search, registration and website hosting services. Sign up to take advantage of our secure website features, functions and applications.">

	<!-- header close  -->
    <section class="section1 seo d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12  z-3 d-flex align-items-center">
                    <div class="text">
                        <h5>Maintenance Services for your Website</h5>
                        <p>We know the importance of website maintenance to keep running smoothly with no issues by regularly updating and staying relevant. A healthy website encourages continued traffic growth, pushes your Google rankings, and strengthens your SEO.</p>
                        
                        <p>Websites are crucial for companies big and small so you can effectively and successfully engage and retain customers. You don’t want to cut corners or let tasks go.</p>

                        <p>Learn the importance of website maintenance and how we can help!</p>
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
                        <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>
                        <input type="hidden" name="category" value="Digital Solutions" id="category">
                        <input type="hidden" name="sub_category" value="Maintenance" id="sub_category">

                        <button class="" type="submit" name="frm_submit">Send</button>
                      </div>

                  </form>
                <!-- GET-A-QUOTE FORM CLOSE  -->
                </div>
            </div>
        </div>
    </section>
    <div class="seo-f">
      @include('includes.map')
    </div>
@stop