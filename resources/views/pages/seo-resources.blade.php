@extends('layouts.getquote')
@section('content')
    
    <title>SEO Resources - Tools for Website Audit Reports and Proposal</title>
    <meta name="description" content="Our search engine optimization resources include SEO tools that generate website audit reports, page speed statistics and competitor analysis; Get a proposal.">

	<!-- header close  -->
    <section class="section1 seo d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12  z-3 d-flex align-items-center">
                    <div class="text">
                        <h5> TALK TO WEBSITE
                            DESIGN EXPERT</h5>
                            <p> Schedule a free consultation to discover digital marketing strategies that can help your business reach it’s online marketing goals.</p>
                          <p> Learn more about SEO and optimization that makes a website rank at top of search engine result pages. Get more details, Speak to an expert marketing consultant now!                          </p>
                          </div>
                </div>
                    <!-- col-cose  -->
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="style-1">

                            @if (Session::has('message'))
                               <div class="alert alert-info">{{ Session::get('message') }}</div>
                            @endif

                            <form action="sumbit" id="main_frm">

                                <h3>SEO RESOURCES</h3>

                                <div class="form-1  mt-5 d-flex align-items-center" action="sumbit">
                                    <input type="radio" required id="Website Audit" name="services" value="Website Audit">
                                    <label for="Website Audit">Website Audit</label>
                                </div>
              
                                <div class="form-1 mt-3  d-flex align-items-center">
                                 <input type="radio" required id="Website Speed Grade" name="services" value="Website Speed Grade">
                                  <label for="Website Speed Grade">Website Speed Grade</label>
                                </div>
              
                                <div class="form-1 mt-3 d-flex align-items-center">
                                    <input type="radio" required id="Competitor Analysis" name="services" value="Competitor Analysis">
                                   <label for="Competitor Analysis">Competitor Analysis</label>
                                </div>
                               
                               <button type="submit"  value="submit" class="btn-submit mt-4 web_design_btn">CONTINUE</button>

                            </form>
                        <!-- form  -->
                       </div>


                    <!-- I AM LOOKING FOR:FORM HTML CLOSE  -->
                    <form class="GET-A-QUOTE" method="post" action="{{url('/post_quote')}}">

                      @csrf
                      <div class="form-style-2" style="display:none;">
                        <h4> GET A QUOTE</h4>
                        <!-- heading close  -->
                        <input type="text" required name="your_name" placeholder="First Name">
                        <input type="text" required name="last_name" placeholder="Last Name">
                        <input type="email" required name="email" placeholder="email">
                        <input type="tel" name="contact_number" placeholder="contact number">
                        <input type="text" name="website_url" placeholder="Website url">

                        <input type="hidden" name="category" value="Web Design" id="category">
                        <input type="hidden" name="sub_category" id="sub_category">
                        <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>
                        <button class="" type="submit" name="frm_submit">Send</button>
                        <button class="back_last_btn"> Back</button>
                      </div>

                  </form>
                  <!-- GET-A-QUOTE FORM CLOSE  -->
                  </div>
            </div>
        </div>
    </section>
    <!-- section close  -->
    <section class="web-section1">
        <div class="container">
            <div class="text-center">
                <h5> SEO RESOURCES
                </h5>
            </div>
            <div class="row g-md-3  g-sm-3 mt-4">
                <div class="col-lg-4 col-md-6 col-sm-12 ">
                  <div class="card-style">
                      <div class="img">
                        <img src="{{url('/asset/images/w-1.png')}}" alt="">
                      </div>
                      <div class="text">
                        <h3>Website
                            Audit
                            </h3>
                            <p> Let us perform a website audit to analyze your web presence. The use of an audit is the first step needed to implement a successful SEO plan and achieve measurable future results. Using an SEO audit, we can identify issues that might impact your site’s organic search performance. This is an integral first step towards your website’s long term success so you gain valuable traffic, optimum ranking, and increased revenue.</p>

                            <a href="{{url('seo-resources/website-audit')}}"><button style="padding: 2px 17px;" class="Learn">Learn more</button></a>
                            <a href="{{url('free-consultation/get-a-quote')}}"><button style="padding: 2px 17px;" class="Learn">start now</button></a>

                      </div>
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-6 col-sm-12 ">
                    <div class="card-style">
                      <div class="img">
                        <img src="{{url('/asset/images/wp-1.png')}}" alt="">
                      </div>
                      <div class="text">
                        <h3>Website Speed
                            Grade
                            </h3>
                            <p> Your website requires speed for success. Ideally, an e-commerce web page should load in under two seconds but the best should only take half a second. Honestly, speed matters when it comes to customer service. Most people will navigate away from a page if it takes too long to load. Let our experts look at your web speed grade and then help achieve the fast response you need to pull ahead of the competition.</p>

                            <a href="{{url('seo-resources/website-speed')}}"><button style="padding: 2px 17px;" class="Learn">Learn more</button></a>
                            <a href="{{url('free-consultation/get-a-quote')}}"><button style="padding: 2px 17px;" class="Learn">start now</button></a>


                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12 ">
                    <div class="card-style">
                      <div class="img">
                        <img src="{{url('/asset/images/ca-1.png')}}" alt="">
                      </div>
                      <div class="text">
                        <h3>Competitor
                            Analysis
                            </h3>
                            <p> In order to achieve success, you have to know and understand your competition. We can perform a competitive analysis which is a strategy used to examine your major competitors. Our team will research their products, marketing strategies, SEO, and sales. We will look at their customer reviews, too. The crucial intelligence information that we gather will lay the framework for your own success.</p>

                            <a href="{{url('seo-resources/competitor-analysis')}}"><button style="padding: 2px 17px;" class="Learn">Learn more</button></a>
                            <a href="{{url('free-consultation/get-a-quote')}}"><button style="padding: 2px 17px;" class="Learn">start now</button></a>
                            
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </section>
    <!-- section close -->
    <div class="seo-f">
      @include('includes.map')
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