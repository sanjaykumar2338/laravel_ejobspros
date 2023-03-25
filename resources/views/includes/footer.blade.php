       <!-- section12 close  -->
        <footer>
          <div class="container">
            <div class="row mt-5 gap-5 d-flex justify-content-lg-center align-items-center">
              <div class="col-lg-3 col-md-6 col-sm-12 mt-5 style-li">
                <img src="{{ asset('/images/logo.png')}}" alt="">
                <div class="d-flex align-items-center mt-5">
              <i class="fa-solid fa-envelope"></i>
                 <a href="mailto:contact@ejobs4pros.com"><li class="li"> contact@ejobs4pros.com</li></a>
                </div>
                <div class="d-flex align-items-center mt-4 icon-text">
                  <i class="fa-solid fa-phone"></i>
                  <a href="tel:347-391-1811"><li class="li">347-391-1811 </li></a>
                </div>
                <!-- call mail close  -->
                <div class="icon mt-4">
                  <i class="fa-brands fa-facebook"></i>
                  <i class="fa-brands fa-instagram"></i>
                  <i class="fa-brands fa-linkedin"></i>
                  <i class="fa-brands fa-twitter"></i>
                </div>
              </div>
            <!-- col-close  -->
            <div class="col-lg-2  col-md-5 col-sm-12  style">
              <h4> Quick Links</h4>
             <a href="index.html"><li>Home</li></a>
            <a href="DigitalMarketing.html"><li>digital markting</li></a>
              <li>industries</li>
              <li>rosources</li>
              <li>privacy policy</li>
            </div>
            <!-- col-close   -->
            <div class="col-lg-2  col-md-5 col-sm-12  style">
             <a href="about.html"><li>About us</li></a>
              <li>portfolio</li>
             <a href="digitalsolutions.html"><li>digital solution</li></a>
              <a href="Contact.html"><li>contact us</li></a>
              <li>terms of use</li>
            </div>
            <!-- col-close  -->
            <div class="col-lg-2  col-md-6 col-sm-12  style">
              <h4> Services</h4>
             <a href="websitedesign.html"><li>web design</li></a>
            <a href="DigitalMarketing.html"><li>digital marketing</li></a>
             <a href="digitalsolutions.html"> <li>digital solutions</li></a>
            <a href="seoresources.html"><li>seo resources</li></a>
              <a href="freeconsultation.html"><li>free consultaic</li></a>
            </div>
            <!-- col-close  -->
            </div>
          </div>
        </footer>  
          <!-- footer close  -->
        <!-- text js -->
<script>
	        const typedTextSpan = document.querySelector(".typed-text");
	        const cursorSpan = document.querySelector(".cursor");

	        const textArray = ["Ejobs4Pros", "Our Specialties in", "Wed Designing", "Digital Marketing","SEO Resources","Free Consultation",];
	        const typingDelay = 100;
	        const erasingDelay = 100;
	        const newTextDelay = 1700; // Delay between current and next text
	        let textArrayIndex = 0;
	        let charIndex = 0;

	    function type() {
	    if (charIndex < textArray[textArrayIndex].length) {
	        if(!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
	        typedTextSpan.textContent += textArray[textArrayIndex].charAt(charIndex);
	        charIndex++;
	        setTimeout(type, typingDelay);
	    } 
	    else {
	        cursorSpan.classList.remove("typing");
	        setTimeout(erase, newTextDelay);
	    }
	}

	    function erase() {
	        if (charIndex > 0) {
	        if(!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
	        typedTextSpan.textContent = textArray[textArrayIndex].substring(0, charIndex-1);
	        charIndex--;
	        setTimeout(erase, erasingDelay);
	    } 
	    else {
	        cursorSpan.classList.remove("typing");
	        textArrayIndex++;
	        if(textArrayIndex>=textArray.length) textArrayIndex=0;
	        setTimeout(type, typingDelay + 1100);
	    }
	    }

	    document.addEventListener("DOMContentLoaded", function() { // On DOM Load initiate the effect
	    if(textArray.length) setTimeout(type, newTextDelay + 250);
	    });
	    </script>
	    <!-- text js close  -->


	        <!-- background animtion cdn  -->
	        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/ScrollMagic.min.js"></script>
	        <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script>
  	particlesJS("particles-js", {
	  "particles": {
	    "number": {
	      "value": 290,
	      "density": {
	        "enable": true,
	        "value_area": 800
	      }
	    },
	    "color": {
	      "value": "#ffffff"
	    },
	    "shape": {
	      "type": "triangle",
	      "stroke": {
	        "width": 0,
	        "color": "#000000"
	      },
	      "polygon": {
	        "nb_sides": 10
	      },
	      "image": {
	        "src": "{{ asset('/img/github.svg')}}",
	        "width": 100,
	        "height": 100
	      }
	    },
	    "opacity": {
	      "value": 0.5,
	      "random": false,
	      "anim": {
	        "enable": false,
	        "speed": 1,
	        "opacity_min": 0.1,
	        "sync": false
	      }
	    },
	    "size": {
	      "value": 3,
	      "random": true,
	      "anim": {
	        "enable": false,
	        "speed": 40,
	        "size_min": 0.1,
	        "sync": false
	      }
	    },
	    "line_linked": {
	      "enable": true,
	      "distance": 150,
	      "color": "#ffffff",
	      "opacity": 0.4,
	      "width": 1
	    },
	    "move": {
	      "enable": true,
	      "speed": 6,
	      "direction": "none",
	      "random": true,
	      "straight": false,
	      "out_mode": "out",
	      "bounce": true,
	      "attract": {
	        "enable": false,
	        "rotateX": 600,
	        "rotateY": 1200
	      }
	    }
	  },
	  "interactivity": {
	    "detect_on": "window",
	    "events": {
	      "onhover": {
	        "enable": true,
	        "mode": "repulse"
	      },
	      "onclick": {
	        "enable": true,
	        "mode": "push"
	      },
	      "resize": true
	    },
	    "modes": {
	      "grab": {
	        "distance": 140,
	        "line_linked": {
	          "opacity": 1
	        }
	      },
	      "bubble": {
	        "distance": 400,
	        "size": 100,
	        "duration": 2,
	        "opacity": 8,
	        "speed": 3
	      },
	      "repulse": {
	        "distance": 100,
	        "duration": 0.4
	      },
	      "push": {
	        "particles_nb": 4
	      },
	      "remove": {
	        "particles_nb": 2
	      }
	    }
	  },
	  "retina_detect": true
	});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>