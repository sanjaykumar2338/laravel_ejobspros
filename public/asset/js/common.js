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