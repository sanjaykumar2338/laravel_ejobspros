@extends('layouts.getquote')
@section('content')

<!-- header close  -->
<section class="get-section">
    <div class="container">
        <h4>Get a Quote for you website
        </h4>
        <P> Like all business owners, you care about the bottom line of your business. You might be interested in digital marketing, SEO, website design, and more but you are wondering how much it’s going to cost. Contact us to get a quote today!</P>
	    
	    
	    
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

	        <input type="hidden" name="category" value="Free Consultation" id="category">
            <input type="hidden" name="sub_category" value="Get a Proposal" id="sub_category">
	     </div> 
	     <button class="mt-3" type="submit" name="submit_form">SEND </button>
    </form>

    </div>
</section>
<!-- sectionc close  -->
<section class="get-f">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d184552.57289742303!2d-79.51814179377936!3d43.71815566213178!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d4cb90d7c63ba5%3A0x323555502ab4c477!2sToronto%2C%20ON%2C%20Canada!5e0!3m2!1sen!2sin!4v1678602016785!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
<!-- section close     -->
@stop