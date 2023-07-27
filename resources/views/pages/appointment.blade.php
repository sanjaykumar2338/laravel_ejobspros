@extends('layouts.getquote')
@section('content')

<!-- header close  -->
<section class="get-section">
    <div class="container">
	    @if (Session::has('message'))
		   <div class="alert alert-info">{{ Session::get('message') }}</div>
		@endif

	    <form class="mt-5" name="get_quote" method="post" action="{{url('post_appointment')}}">
	    	@csrf
	        <h5>Schedule an Appointment</h5>
	        <div class="row ">
	        <div class="col-lg-6 col-md-12 col-sm-12 ">
	            <input type="text" placeholder="Your Name" name="your_name" value="{{old('your_name')}}">
	            @if ($errors->has('your_name'))
                    <span class="text-danger">{{ $errors->first('your_name') }}</span>
                @endif
	        </div>
	        <div class="col-lg-6 col-md-12 col-sm-12 ">
	            <input type="text" placeholder="Last Name" name="last_name" value="{{old('last_name')}}">
	            @if ($errors->has('last_name'))
                    <span class="text-danger">{{ $errors->first('last_name') }}</span>
                @endif
	        </div>
	        <div class="col-lg-6 col-md-12 col-sm-12 ">
	            <input type="email" placeholder="Email" name="email" value="{{old('email')}}">
	            @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
	        </div>
	        <div class="col-lg-6 col-md-12 col-sm-12 ">
	            <input type="tel" placeholder="Contact Number" name="contact_number" value="{{old('contact_number')}}">
	            @if ($errors->has('contact_number'))
                    <span class="text-danger">{{ $errors->first('contact_number') }}</span>
                @endif
	        </div>
	        
	        <div class="col-lg-12  ">
	            <input type="url" placeholder="Website url" name="website_url" value="{{old('website_url')}}">
	            @if ($errors->has('website_url'))
                    <span class="text-danger">{{ $errors->first('website_url') }}</span>
                @endif
	        </div>

	        <div class="col-lg-6  ">
	            <input type="date" placeholder="Date" name="date" value="{{old('date')}}">
	            @if ($errors->has('website_url'))
                    <span class="text-danger">{{ $errors->first('date') }}</span>
                @endif
	        </div>


			<div class="col-lg-6">
	            <input type="time" placeholder="Time" name="time" value="{{old('time')}}">
	            @if ($errors->has('website_url'))
                    <span class="text-danger">{{ $errors->first('time') }}</span>
                @endif
	        </div>

	        <div class="col-lg-12">
	            <input type="place" placeholder="Place" name="place" value="{{old('place')}}">
	            @if ($errors->has('website_url'))
                    <span class="text-danger">{{ $errors->first('place') }}</span>
                @endif
	        </div>
	        <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>
	        <input type="hidden" name="category" value="Free Consultation" id="category">
            <input type="hidden" name="sub_category" value="Quote" id="sub_category">
	     </div> 
	     <button class="mt-3" type="submit" name="submit_form">SEND </button>
    </form>

    </div>
</section>
<!-- sectionc close  -->
<section class="get-f">
    @include('includes.map')
</section>
<!-- section close     -->
@stop