@extends('layouts.getquote')
@section('content')
<!-- header close  -->
    <section class="speed-section">
        <div class="container">
            <h4> The Importance of Website Speed

            </h4>
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
                        <input type="hidden" name="sub_category" value="Website Speed Up" id="sub_category">

                        <button class="" type="submit" name="frm_submit">Send</button>
                      </div>

                  </form>
        </div>
    </section>
    <!-- section close  -->
    <section class="section-cards-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="box-style">
                        <div class="img">
                            <img src="{{url('/asset/images/card-img.png')}}" alt="">
                        </div>
                        <div class="text">
                            <h4> Make a Fast Impression! </h4>
                            <p> Your website is your chance at making a first impression on a visitor. Yoru business’s reputation hinges on how the interaction. You do not want.                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="box-style">
                        <div class="img">
                            <img src="{{url('/asset/images/card-img-2.jpg')}}" alt="">
                        </div>
                        <div class="text">
                            <h4> Optimize Your Website Speed
                            </h4>
                            <p> Optimizing your website’s  Website speed optimization is a part of digital marketing strategies. We can help decrease load times, so you enjoy greater conversions!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="box-style">
                        <div class="img">
                            <img src="{{url('/asset/images/card-img-4.jpg')}}" alt="">
                        </div>
                        <div class="text">
                            <h4> Complete Site Speed Optimization
                            </h4>
                            <p>Our team will review your website and implement the necessary plug-ins and tools to speed up your site! We will also offer recommendations.

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section close  -->
    <section class="spped-f">
      @include('includes.map')
    </section>
    <!-- section close  -->
@stop