@extends('layouts.getquote')
@section('content')

	<!-- header close  -->
    <section class="section1 seo d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12  z-3 d-flex align-items-center">
                    <div class="text">
                        <h5>Make an Impression with your Website</h5>
                        <p>Let eJobs4Pros help merge superior web design with technology, so you achieve conversions = business growth!</p>

                        <p>Your business website is the touchpoint for your brand’s identity. It serves as a valuable business tool that helps drive traffic and achieve conversions. With an optimum website design, your business can achieve impressive growth potential. However, with a subpart site, you can damage your brand’s identity and compromise your company’s integrity. Let’s face it – your website is your first impression, and you have only one chance to get it right!</p>
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
                        <input type="hidden" name="sub_category" value="Website" id="sub_category">

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
                <img style="max-height: 365px;" src="{{url('/asset/images/website/Website-Design-Section1-min.png')}}" alt="">
            </div>
        </div>
        <div class="col-sm-7">
            <h3>Creating a website</h3>
            <p>Creating a website is never easy. Audiences expect the best. When someone visits your site, you have seconds to make an impression. Most visitors will quickly navigate away if they feel like the site is unworthy or takes too long to load.At eJobs4Pros, we build websites for performance. We don’t cut corners during strategic planning or visual graphic design. Our goal is to ensure that visitors to your website have a flawless experience, which will be instrumental in driving superior results</p>
        </div>
      </div>
    </div>

    <section class="w-section">
        <div class="container">
            <h4>How eJobs4Pros Builds a High Converting Website</h4>
            <p>Every website we build is tailored to meet your business’s particular needs – from sales to leads to engagement.</p>

            <p>When designing any website, we strive to put the site’s users first. We want to meet and exceed their needs and expectations when they visit your website. Our team focuses on providing user-friendly design navigation combined with valuable content that drives the visitor to learn more and reach out.</p>

            <h4>What Makes a Great Website?</h4>
            <p>The key to a unique and memorable website is design. Everything should look good and flow. All goals are clearly and concisely outlined, and conversion points are covered. Visitors want support on their journey, and they expect the website to provide the necessary steps needed. It’s almost like a roadmap pointing in the right direction.</p>
        </div>
    </section>  

    <div class="container w-section">   
      <div class="row">
        <div class="col-sm-5">
           <div class="img">
                <img style="max-height: 365px;" src="{{url('/asset/images/website/Website-Design-Section3-min.png')}}" alt="">
            </div>
        </div>
        <div class="col-sm-7">
            <h3>EJOBS4PROS Web Design and Visibility</h3>
            <p>A business must show up in the top search results rendered by a search engine’s today competitive world. At ejobs4Pros, our website design assure search engine visibility – we build relevant and engaging landing pages.</p>
        </div>
      </div>
    </div>

    <section class="w-section">
        <div class="container">
            
            <h4>Our Website Design Process</h4>
            <p>As experts in the field, the web design team at eJobs4Pros has worked designing many websites across a vast range of industries. We believe in working closely with our clients to hone your brand’s identity and truly gain a perspective on your business needs. We take the time to get to know you and to understand your company.<p>
        
            <p>Our team examines any data that you have and evaluates the performance of your existing site so we can pinpoint problem areas and work to correct them. We don’t want anything to hinge on the unknown. Our goal is always complete transparency through the creative process.</p>

        </div>
    </section> 

    <div class="container w-section">   
      <div class="row">
        <div class="col-sm-6">
           <div class="img">
                <img style="max-height: 495px;" src="{{url('/asset/images/website/Website-Design-Section4-min-2.png')}}" alt="">
            </div>
        </div>
        <div class="col-sm-6">
            <h3>WEBSITE DESIGN Lead With Impressive Website Strategy</h3>
            <p>Any website strategy must consider the structure, content, and goals of the business. Our team will work to identify challenges and opportunities while making valuable recommendations. <b>We will present a website strategy that goes from the creation of the website through to the final stages of development.</b></p>

            <p>We will identify all technical requirements and specifications. Then deliver a sitemap that will show the structure along with the page hierarchy. Wireframes are the next step in the pross. Every process we support with user data.</p>

            <p>With website design, all of our hard work pays off as we truly showcase your business brand. Many clients have steadfast brand guidelines, but others let us reimagine their brand. Our team is comfortable with either step in the web design process. We strive to meet all of our client’s particular needs.</p>
        </div>
      </div>
    </div>

     <div class="container w-section">   
      <div class="row">
        <div class="col-sm-5">
           <div class="img">
                <img style="max-height: 418px;" src="{{url('/asset/images/website/Website-Design-Section5-min.png')}}" alt="">
            </div>
        </div>
        <div class="col-sm-7">
            <h3>Let Us Inspire Your Website for Better Conversion</h3>
            <p>Within the pages of your website designs, we will create copywriting that not only converts but inspires. Words are powerful, and our team of writers knows how to yield them for the most significant advantage.</p>

            <p>We want your brand to live on in your visitor’s minds. Each page will unfold, and the words flow. We’ll look at service offering, product features, and more depending on your website’s needs.</p>

            <p>As with any website design, one of the critical components is the correct use of SEO to create relevance, obtain reach and spur discoverability. Building a website is like weaving fine textiles. Each thread is crucial, and SEO is one of those necessary threads. We provide web design created with optimized content for superior performance.</p>
        </div>
      </div>
    </div>

    <div class="seo-f">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d184552.57289742303!2d-79.51814179377936!3d43.71815566213178!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d4cb90d7c63ba5%3A0x323555502ab4c477!2sToronto%2C%20ON%2C%20Canada!5e0!3m2!1sen!2sin!4v1678602016785!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
@stop