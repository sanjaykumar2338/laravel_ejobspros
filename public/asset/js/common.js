$(document).ready(function(){

	localStorage.setItem('last_frm','');
	$('.heading_title').show();

	//header get quote form
	$("input[name='services']").click(function() {
		console.log( this.value )
	});

	$('.quote_continue').on('click', function(e){
		e.preventDefault();
		var radioValue = $("input[name='services']:checked").val();
		if (typeof radioValue  !== "undefined"){
			$('#main-form').hide();
			$('#'+radioValue+'-frm').show();
		}
	});

	$('.quote_back').on('click', function(e){
		e.preventDefault();
		$('.other_frm').hide();
		$('#main-form').show();
		$('.heading_title').show();
	});

	$('.back_last_btn').on('click', function(e){
		e.preventDefault();
		$('.form-style-2').hide();
		$('#main-form').hide();
		$('.other_frm').hide();

		let frm = localStorage.getItem('last_frm');
		$('#'+frm).show();
		$('.heading_title').show();
	});

	$('.quote_continue_next').on('click', function(e){
		e.preventDefault();
		let frm = $(this).closest('form').attr('id');

		if ($("#"+frm+" input:radio:checked").length > 0)
		{
		  localStorage.setItem('last_frm',frm);
		  $('.other_frm').hide();
		  $('.heading_title').hide();
		  $('.form-style-2').show();

		  $('#category').val($("input[name='services']:checked").val());
		  $('#sub_category').val($("#"+frm+" input:radio:checked").val());
		}
		else
		{
		   //alert('else');
		}
	});

	$(".alert-info").fadeTo(2000, 500).slideUp(500, function(){
    	$(".alert-info").slideUp(500);
	});

	$('label').on('click', function(){
		$(this).prev().attr('checked',true);
	})
});

var slideIndex = 1;
setInterval(function(){
  showSlides(slideIndex +=1);
},2000)

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}

window.ParsleyConfig = {
    errorsWrapper: '<div></div>',
    errorTemplate: '<div class="alert alert-danger parsley" role="alert"></div>',
    errorClass: 'has-error',
    successClass: 'has-success'
};

//alert($('#publish_key').val())
Stripe.setPublishableKey($('#publish_key').val());
jQuery(function($) {
    $('#payment-form').submit(function(event) {
        var $form = $(this);
        $form.parsley().subscribe('parsley:form:validate', function(formInstance) {
            formInstance.submitEvent.preventDefault();
            alert();
            return false;
        });
        $form.find('#submitBtn').prop('disabled', true);
        Stripe.card.createToken($form, stripeResponseHandler);
        return false;
    });
});
function stripeResponseHandler(status, response) {
    var $form = $('#payment-form');
    if (response.error) {
        $form.find('.payment-errors').text(response.error.message);
        $form.find('.payment-errors').addClass('alert alert-danger');
        $form.find('#submitBtn').prop('disabled', false);
        $('#submitBtn').button('reset');
    } else {
        var token = response.id;
        $form.append($('<input type="hidden" name="stripeToken" />').val(token));
        $form.get(0).submit();
    }
};
