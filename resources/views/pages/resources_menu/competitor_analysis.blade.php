@extends('layouts.getquote')
@section('content')

<section class="ca-section">
            <div class="container">
                <h4>Are You Ready to Stay Ahead of the Competition – Try a Competitor Analysis?</h4>
                <p> Competitor analysis (also called a competitive analysis) is like a window into what yoru competitors are doing in the industry. You can sneak a peek and then plan your own competitive marketing strategy. Basically, it helps you stay ahead by identifying your company’s strengths and weaknesses in relation to the competition.</p>     
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
                        <input type="hidden" name="sub_category" value="Competitor Aanalysis" id="sub_category">

                        <button class="" type="submit" name="frm_submit">Send</button>
                      </div>

                  </form>

            </div>
    </section>
    <!-- section close      -->
    <section class="s-section">
      <div class="container">
        <h4> Try a Competitor Analysis?</h4>
        <div class="row mt-5 g-3">
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="style">
              <div class="img">
                <img src="{{url('/asset/images/1-1.png')}}" alt="">
              </div>
              <div class="text">
                <h5> Carry out a Competitor Analysis
                </h5>
                <p>At eJobs4Pros, we’ll carry out a competitive analysis and then go over the results with you so you understand all key takeaways.                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="style">
              <div class="img">
                <img src="{{url('/asset/images/img-2-2.jpg')}}" alt="">
              </div>
              <div class="text">
                <h5> Learn the 4Ps of Your Competition
                </h5>
                <p>Product – Price – Promotion – Place
                  Learn the 4Ps of your competition so you can better reach your own market.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="style">
              <div class="img">
                <img src="{{url('/asset/images/img-3-3.jpg')}}" alt="">
              </div>
              <div class="text">
                <h5>Staying Ahead With a Competitive
                </h5>
                <p>A competitive analysis helps you identify your competition. You can examine their company’s  </p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="style">
            <div class="img">
              <img src="{{url('/asset/images/img-4-4.jpg')}}" alt="">
            </div>
            <div class="text">
              <h5>product

              </h5>
              <p>What is your competition selling?
                What product features and services do they have? </p>
          </div>
        </div>
      </div>
      </div>
    </section>
    <!-- section close  -->
    <section class="f-c">
      @include('includes.map')
    </section>
    <!-- section close  -->
@stop