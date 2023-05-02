@extends('layouts.getquote')
@section('content')
    
    <title>Website Services for Selling Online, Branding and Social Media</title>
    <meta name="description" content="Sign up for this web package to get the essential features of a good website from selling online and brand identity design to social media integration.">

	<!-- header close  -->
    <section class="section1 seo d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12  z-3 d-flex align-items-center">
                    <div class="text">
                        <h5>Digital Solutions Services for Small Business</h5>
                        <p>You don’t need a large business to create an impressive digital footprint. We offer a turnkey integrated marketing package that is ideal for both online sellers and designers.</p>
                        
                        <p>Improve your online sales with custom social shop solutions, subscribe to take advantage of the essentials that make your e-commerce business a success.</p>
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

                        <input type="hidden" name="category" value="Digital Solutions" id="category">
                        <input type="hidden" name="sub_category" value="Success Essentials" id="sub_category">

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