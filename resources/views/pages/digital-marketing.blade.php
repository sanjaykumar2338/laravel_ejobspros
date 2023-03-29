@extends('layouts.getquote')
@section('content')


<!-- header close  -->
    <section class="section1 digital-section-1 d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12  d-flex align-items-center">
                    <div class="style">
                        <div class="text">
                            <h4> START A DIGITAL MARKETING CAMPAIGN</h4>
                            <p> Schedule a free consultation to discover digital marketing strategies that can help your business reach it’s online marketing goals. </p>
                          <p class="mt-1">Learn more about local SEO and optimization that makes a website rank at top of search engine result pages. Get more details, Speak to an expert marketing consultant now!
                          </p>
                          </div>
                    </div>
                </div>
                <!-- col-close  -->
                <div class="col-lg-6 col-md-12 sm-12">
                    <div class="style-1">                     
                      
                      @if (Session::has('message'))
                        <div class="alert alert-info">{{ Session::get('message') }}</div>
                      @endif

                      <form action="sumbit" id="main_frm">
                        <h3> DIGITAL MARKETING</h3>
                        <div class="form-1  mt-5 d-flex align-items-center" action="sumbit">
                         <input type="radio" required id="Content-Marketing" name="services" value="Content-Marketing">
                        <label for="Content-Marketing">Content Marketing</label>
                        </div>
      
                        <div class="form-1 mt-3  d-flex align-items-center">
                          <input type="radio" required id="Email-Marketing" name="services" value="Email-Marketing">
                          <label for="Email-Marketing">Email Marketing</label>
                        </div>
      
                          <div class="form-1 mt-3 d-flex align-items-center">
                            <input type="radio" required id="Local-Marketing" name="services" value="Local-Marketing">
                            <label for="Local-Marketing">Local Marketing</label>
                        </div>
      
                        <div class="form-1 mt-3 d-flex align-items-center">
                            <input type="radio" required id="Mobile-Marketing" name="services" value="Mobile-Marketing">
                            <label for="Mobile-Marketing">Mobile Marketing</label>
                        </div>
      
                        <div class="form-1 mt-3 d-flex align-items-center">
                          <input type="radio" required id="Paid Search Advertising - PPC" name="services" value="Paid Search Advertising - PPC">
                          <label for="Paid Search Advertising - PPC">Paid Search Advertising - PPC</label>
                        </div>
                        
                        <div class="form-1 mt-3 d-flex align-items-center">
                              <input type="radio" required id="Search Engine Optimization - SEO" name="services" value="Search Engine Optimization - SEO">
                            <label for="Search Engine Optimization - SEO">Search Engine Optimization - SEO</label>
                        </div>

                        <div class="form-1 mt-3 d-flex align-items-center">
                            <input type="radio" required id="Social Media Marketing - SMM" name="services" value="Social Media Marketing - SMM">
                            <label for="Social Media Marketing - SMM">Social Media Marketing - SMM</label>
                        </div>

                        <div class="form-1 mt-3 d-flex align-items-center">
                            <input type="radio" required id="Video-Marketing" name="services" value="Video-Marketing">
                            <label for="Video-Marketing">Video Marketing</label>
                        </div>
                           <button type="submit" value="submit" class="btn-submit mt-4 web_design_btn">CONTINUE</button>
                      </form>
                      
                      <!-- form  -->
                      </div>

                      <!-- I AM LOOKING FOR:FORM HTML CLOSE  -->
                    <form class="GET-A-QUOTE" method="post" action="{{url('/post_quote')}}">

                      @csrf
                      <div class="form-style-2">
                        <h4> GET A QUOTE</h4>
                        <!-- heading close  -->
                        <input type="text" required name="your_name" placeholder="First Name">
                        <input type="text" required name="last_name" placeholder="Last Name">
                        <input type="email" required name="email" placeholder="email">
                        <input type="tel" name="contact_number" placeholder="contact number">
                        <input type="text" name="website_url" placeholder="Website url">

                        <input type="hidden" name="category" value="Web Design" id="category">
                        <input type="hidden" name="sub_category" id="sub_category">

                        <button class="" type="submit" name="frm_submit">Send</button>
                        <button class="back_last_btn"> Back</button>
                      </div>

                    </form>
                    <!-- GET-A-QUOTE FORM CLOSE  -->

                </div>
            </div>
        </div>
    </section>
    <!-- digital-section-1 -->
    <section class="cards-section">
      <div class="container">
        <div class="text-center">
          <h4> DIGITAL MARKETING</h4>
        </div>
        <div class="row  g-md-3  g-sm-3 mt-3">
          <div class="col-lg-4 col-md-6 col-sm-12 ">
            <div class="style-box">
              <div class="img">
                <img src="{{url('/asset/images/d-1.png')}}" alt="">
              </div>
              <div class="text">
                <h3>Digital
                  Marketing</h3>
                  <p> Traditional marking has fallen by the wayside. Nowadays, it is imperative that companies have a strong digital marketing campaign to stay ahead of the competition.
                    Most of a company’s customers are online and on social media. In fact, they stay up-to-date via news and other online sites.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 ">
            <div class="style-box">
              <div class="img">
                <img src="{{url('/asset/images/d-2.png')}}" alt="">
              </div>
              <div class="text">
                <h3>CONTENT
                  MARKETING</h3>
                  <p> Quality content is a long term investment that produces effective results. Hire a content marketing expert with access to agency analytics tools for web page optimization, blog writing and story production.
                    Original content production and formatting is essential skills to get the best results with search engine indexing. We collaborate with small business owners, do our research to and provide creative website copy.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 ">
            <div class="style-box">
              <div class="img">
                <img src="{{url('/asset/images/d-3.png')}}" alt="">
              </div>
              <div class="text ">
                <h3>EMAIL
                  MARKETING</h3>
                  <p> Build a valued B2C relationship using creative email marketing strategies. Start a powerful email campaign with custom graphics and relevant messages. We utilize digital marketing sales techniques, effective template graphics and consistent newsletter blasts to maximize email conversion rate.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 ">
            <div class="style-box">
              <div class="img">
                <img src="{{url('/asset/images/d-4.png')}}" alt="">
              </div>
              <div class="text">
                <h3>LOCAL
                  MARKETING</h3>
                  <p> Reach the best online marketing agency for advice on social campaigns that target customers located near your establishment. Target customers in specific geographic locations with effective geo targeting and social media strategies.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 ">
            <div class="style-box">
              <div class="img">
                <img src="{{url('/asset/images/d-5.png')}}" alt="">
              </div>
              <div class="text">
                <h3>MOBILE
                  MARKETING</h3>
                  <p> Target locals with effective mobile optimization services such as social and text messaging, display ads and sales suggestions that convert. Reach customers, introduce your small business and get online orders. generate reaction from mobile shoppers.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 ">
            <div class="style-box">
              <div class="img">
                <img src="{{url('/asset/images/d-6.png')}}" alt="">
              </div>
              <div class="text ">
                <h3>PAID SEARCH
                  ADVERTISING</h3>
                  <p> Hire a PPC advertising strategist for best conversion results. Get the most out of your marketing budget and the best ROI for paid social ads. Compete for top placement at search engine pages with optimized actionable ads.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 ">
            <div class="style-box">
              <div class="img">
                <img src="{{url('/asset/images/d-7.png')}}" alt="">
              </div>
              <div class="text">
                <h3>SEARCH ENGINE
                  OPTIMIZATION – SEO</h3>
                  <p>Market research, competitive and customer trends analysis are the basis of insightful customer experience optimization. Explore the organic SEO tools here and hire a top rated SEO company for on-page and off-page optimization.                  </p>

              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 ">
            <div class="style-box">
              <div class="img">
                <img src="{{url('/asset/images/d-8.png')}}" alt="">
              </div>
              <div class="text">
                <h3>VIDEO
                  MARKETING</h3>
                  <p> Essential to brand growth, consistent video marketing provides is the best conversion tool for small businesses looking to reach customers and influence a target market. Hire a professional video marketing agency for the creative strategies.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 ">
            <div class="style-box">
              <div class="img">
                <img src="{{url('/asset/images/s-1.png')}}" alt="">
              </div>
              <div class="text ">
                <h3>SOCIAL MEDIA
                  MARKETING – SMM</h3>
                  <p> Creative posts, converting ads and consistent social engagement are elements of marketing campaigns designed to attract interest, claim reaction and generate conversion.

                  </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- cards-section close  -->
    <div class="d-section-2">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d184552.57289742303!2d-79.51814179377936!3d43.71815566213178!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d4cb90d7c63ba5%3A0x323555502ab4c477!2sToronto%2C%20ON%2C%20Canada!5e0!3m2!1sen!2sin!4v1678602016785!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
  $('.web_design_btn').on('click', function(e){
      e.preventDefault();
      var radioValue = $("input[name='services']:checked").val();
      if (typeof radioValue  !== "undefined"){
        $('#sub_category').val(radioValue);
        $('#main_frm').hide();
        $('.form-style-2').show();
      }
  });

  $('.back_last_btn').on('click', function(e){
    e.preventDefault();
    $('#main_frm').show();
    $('.form-style-2').hide();    
  });
</script>

@stop