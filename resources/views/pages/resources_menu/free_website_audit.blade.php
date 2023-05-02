@extends('layouts.getquote')
@section('content')

<!-- header close  -->
    <section class="w-section">
        <div class="container">
            <h4> Learn the Importance of a Website Audit!
            </h4>
            <p> A website is a necessity for any business. Customers will learn about your organization, showcase your products, and promote your brand.
              Let the team at eJobs4Pros discover your website’s performance with a website audit! The website audit will uncover any potential problems and reveal how your site functions.</p>
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

                        <input type="hidden" name="category" value="Seo Resources" id="category">
                        <input type="hidden" name="sub_category" value="Website Audit" id="sub_category">

                        <button class="" type="submit" name="frm_submit">Send</button>
                      </div>

                  </form>
        </div>
    </section>    
    <!-- section close  -->
        <section class="c-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12  p-0">
                        <div class="box-style">
                            <div class="img">
                                <img src="{{url('/asset/images/a.1.avif')}}" alt="">
                            </div>
                            <div class="text">
                                <h3> Security Audit</h3>
                                <p> Is your website safe and protected from a potential cyberattack? Cybercriminals are getting smarter every day and using spyware, phishing, ransomware, malware, and more to attack. A security audit can reveal where you are the most vulnerable so you can take the steps needed to protect yourself and your customers.

                                    Our experts will take the best security measures to provide protection by examining your protective software, regular backups, encryption, access rights, two-factor authentication, and password policy.
                                    </p>
                                    <h3> Performance Audit</h3>
                                    <p> Website speed matters! If your website is not fast enough, many customers will navigate away. Speed also helps improve your ranking with SEO. Studies have shown that users are more likely to convert with a fast website which increases your bottom line!</p>
                                <h3>Code Review</h3>
                                <p> Clean code is a necessity. It helps improve your website’s performance. Unfortunately, sometimes code is not always up to standards. Our developers will perform a code audit to determine its performance.</p>
                                  </div>
                            
                        </div>
                    </div>
                    <!-- col-close  -->
                    <div class="col-lg-6 col-md-12 col-sm-12  p-0">
                        <div class="box-style">
                            <div class="img">
                                <img src="{{url('/asset/images/c-2.avif')}}" alt="">
                            </div>
                            <div class="text">
                                <h3>Website Extensions</h3>
                                <p> Website extensions are an extra function. They can be CMS or WordPress plugins. Let our experts review your website extensions to determine potential problems. We can then perform any necessary cleanups or replacements.
                                    </p>
                                    <h3>Website Theme Audit</h3>
                                    <p> Your website’s them is its visual appeal. It is what attracts visitors and helps to hone your brand image. A theme is also how your users interact with the site. Our website audit services will examine your website’s buttons, toolbars, elements, and sidebars.</p>
                                    </p>
                                    <h3> Server Configuration</h3>
                                    <p> Let us examine how your server is performing. Our DevOps team will analyze it and ensure that all configurations are up-to-date.                                    </p>
                                </div>
                        </div>
                    </div>
                    <!-- col-close  -->
                </div>
            </div>
</section>

 <!-- section close  -->
<section class="w-f">
@include('includes.map')
</section>
<!-- section close  -->
@stop