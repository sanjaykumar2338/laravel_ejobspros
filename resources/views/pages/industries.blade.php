
@extends('layouts.main')
@section('content')
<!-- header close  -->
    <section class=" bg d-flex align-items-center" style='height:400px;background-image: url("{{url('/asset/images/portoflio.jpg')}}");'>
        <div class="container">
            <h3 class="Website" style="text-align: center;">Industries</h3>
            </div>
        </div>
    </section>
    <!-- bg--img-close  -->

    <style type="text/css">
    	body {font-family: "Lato", sans-serif;}

		.tablink {
		  background-color: #555;
		  color: white;
		  float: left;
		  border: none;
		  outline: none;
		  cursor: pointer;
		  padding: 14px 16px;
		  font-size: 17px;
		  width: 20%;
		}

		.tablink:hover {
		  background-color: #777;
		}

		/* Style the tab content */
		.tabcontent {
		  color: white;
		  display: none;
		  padding: 50px;
		  text-align: center;
		}
    </style>

    
    <button class="tablink main_class_btn" date-link='main_class'>All</button>
	<button class="tablink" date-link='Corporate'>Corporate</button>
	<button class="tablink" date-link='Personal'>Personal</button>
	<button class="tablink" date-link='Food'>Food & Restraurant</button>
	<button class="tablink" date-link='Shopping'>E-commerce / Shopping</button>

    <div class="about-section-1" style="padding: 0px 0px 0px 0px;margin-top: -120px;">
        <div class="container">
            <div class="row g-4 justify-content-center align-items-center">
                <div class="col-lg-4 col-md-6 col-sm-12 main_class Shopping">
                    <div class="card-design">
                        <div class="img">
                            <img src="{{url('/asset/images/portfolio/website7.jpg')}}" alt="">
                        </div>
                        <div class="text mt-lg-2">
                            <h3>Industries</h3>
                        </div>
                    </div>
                </div>

                <!-- col-close  -->
                <div class="col-lg-4 col-md-6 col-sm-12 main_class Personal">
                    <div class="card-design">
                        <div class="img">
                            <img src="{{url('/asset/images/portfolio/website2.jpg')}}" alt="">
                        </div>
                        <div class="text mt-lg-2">
                            <h3>Business</h3>
                        </div>
                    </div>
                </div>
                <!-- col-close  -->

                <!-- col-close  -->
                <div class="col-lg-4 col-md-6 col-sm-12 main_class Food">
                    <div class="card-design">
                        <div class="img">
                            <img src="{{url('/asset/images/portfolio/website3.jpg')}}" alt="">
                        </div>
                        <div class="text mt-lg-2">
                            <h3>Business</h3>
                        </div>
                    </div>
                </div>
                <!-- col-close  -->

                <!-- col-close  -->
                <div class="col-lg-4 col-md-6 col-sm-12 main_class Shopping">
                    <div class="card-design">
                        <div class="img">
                            <img src="{{url('/asset/images/portfolio/website4.jpg')}}" alt="">
                        </div>
                        <div class="text mt-lg-2">
                        	<h3>Business</h3>
                        </div>
                    </div>
                </div>
                <!-- col-close  -->

                <!-- col-close  -->
                <div class="col-lg-4 col-md-6 col-sm-12 main_class Corporate">
                    <div class="card-design">
                        <div class="img">
                            <img src="{{url('/asset/images/portfolio/website5.jpg')}}" alt="">
                        </div>
                        <div class="text mt-lg-2">
                            <h3>Business</h3>
                        </div>
                    </div>
                </div>
                <!-- col-close  -->

                <!-- col-close  -->
                <div class="col-lg-4 col-md-6 col-sm-12 main_class Food">
                    <div class="card-design">
                        <div class="img">
                            <img src="{{url('/asset/images/portfolio/website6.jpg')}}" alt="">
                        </div>
                        <div class="text mt-lg-2">
                            <h3>Business</h3>
                        </div>
                    </div>
                </div>
                <!-- col-close  -->

                <!-- col-close  -->
                <div class="col-lg-4 col-md-6 col-sm-12 main_class Shopping">
                    <div class="card-design">
                        <div class="img">
                            <img src="{{url('/asset/images/portfolio/website1.jpg')}}" alt="">
                        </div>
                        <div class="text mt-lg-2">
                            <h3>Business</h3>
                        </div>
                    </div>
                </div>
                <!-- col-close  -->

                <!-- col-close  -->
                <div class="col-lg-4 col-md-6 col-sm-12 main_class Shopping">
                    <div class="card-design">
                        <div class="img">
                            <img src="{{url('/asset/images/portfolio/website8.jpg')}}" alt="">
                        </div>
                        <div class="text mt-lg-2">
                        	<h3>Business</h3>
                        </div>
                    </div>
                </div>
                <!-- col-close  -->

            </div>
        </div>
    </div>
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
        	$('.main_class_btn').css('background-color','#005cff');        	
			$('.tablink').on('click', function(){
				$('.tablink').css('background-color','#777');
				$(this).css('background-color','#005cff');
				let shw = $(this).attr('date-link');
				$('.main_class').hide();
				$('.'+shw).show();
			})
		</script>
@stop

       