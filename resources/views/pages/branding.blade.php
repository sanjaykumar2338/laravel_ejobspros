@extends('layouts.getquote')
@section('content')

<!-- header close  -->
<section class="get-section">
    <div class="container">
    	
        <h4> Branding Services for Your Business</h4>
        <p> Your brand is more than simply your business logo or name. It is your company’s identity and personality. With on-point branding, you can foster how your customers view and feel about your business.</p>
	    
	    @if (Session::has('message'))
		   <div class="alert alert-info">{{ Session::get('message') }}</div>
		@endif

	    <form class="mt-5" name="get_quote" method="post" action="{{url('post_quote')}}">
	    	@csrf
	        <h5> GET A QUOTE</h5>
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