@extends('layouts.getquote')
@section('content')
    
    <title>Pay for Performance Services to Buy Traffic and Sell Online</title>
    <meta name="description" content="We provide a pay for performance package that keeps you focused on your business. Activate your landing page to buy traffic and generate engagement and sales.">

	<!-- header close  -->
    <section class="section1 seo d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12  z-3 d-flex align-items-center">
                    <div class="text">
                        <h5>Pay Per Performance Seo Services for Your Business</h5>
                        <p>With Pay Per Performance, you can hyper target your audience and sales prospects. Best of all – you only pay for SEO when you see results!</p>
                        
                        <p>Our team helps you minimize the risks so you achieve measurable and impressive SEO-driven results. The marketing fee and pay per sale all become very affordable when you achieve the results you seek.</p>

                        <p>If your business is in a good place to increase its volume then let our team help you grow with pay per performance. You’ll only pay for SEO once you see improved traffic, ranking, and revenue!</p>
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
                        <input type="hidden" name="sub_category" value="Pay Per Performance" id="sub_category">

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