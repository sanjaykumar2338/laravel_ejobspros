
@extends('layouts.stripe')
@section('content')
 <style>
    .alert.parsley {
        margin-top: 5px;
        margin-bottom: 0px;
        padding: 10px 15px 10px 15px;
    }
    .check .alert {
        margin-top: 20px;
    }
    .credit-card-box .panel-title {
        display: inline;
        font-weight: bold;
    }
    .credit-card-box .display-td {
        display: table-cell;
        vertical-align: middle;
        width: 100%;
    }
    .credit-card-box .display-tr {
        display: table-row;
    }

    .parsley-required{
        color: red;
        list-style: none;
        margin-left: -31px;
    }
</style>
<br><br><br>
<div class="row">
  <div class="col-md-3 col-md-offset-3">
  </div>  
  <div class="col-md-6 col-md-offset-3">
    <div class="panel panel-default credit-card-box">
        <div class="panel-heading display-table" >
            <div class="row display-tr" >
                <strong><a target="_blank" href="{{url('digital-solutions')}}/{{str_replace(' ', '-', strtolower($plan->name))}}">Plan Name: {{$plan->name}}. more info</a></strong><br>
                <strong>Price: $1500.00/mo</strong>             
            </div>                    
        </div>
        <br>
        <div class="panel-body">
            <div class="col-md-12">
              {!! Form::open(['url' => url('order-post'), 'data-parsley-validate', 'id' => 'payment-form']) !!}
                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                  <button type="button" class="close" data-dismiss="alert">×</button> 
                        <strong>{{ $message }}</strong>
                </div>
                @endif   
                <input type="hidden" name="plane" value="{{$plan->test_stripe_id}}">             
                <div class="form-group" id="cc-group">
                    {!! Form::label(null, 'Credit card number:') !!}
                    {!! Form::text(null, null, [
                        'class'                         => 'form-control',
                        'required'                      => 'required',
                        'data-stripe'                   => 'number',
                        'data-parsley-type'             => 'number',
                        'maxlength'                     => '16',
                        'data-parsley-trigger'          => 'change focusout',
                        'data-parsley-class-handler'    => '#cc-group'
                        ]) !!}
                </div>
                <div class="form-group" id="ccv-group">
                    {!! Form::label(null, 'CVC (3 or 4 digit number):') !!}
                    {!! Form::text(null, null, [
                        'class'                         => 'form-control',
                        'required'                      => 'required',
                        'data-stripe'                   => 'cvc',
                        'data-parsley-type'             => 'number',
                        'data-parsley-trigger'          => 'change focusout',
                        'maxlength'                     => '4',
                        'data-parsley-class-handler'    => '#ccv-group'
                        ]) !!}
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group" id="exp-m-group">
                        {!! Form::label(null, 'Ex. Month') !!}
                        {!! Form::selectMonth(null, null, [
                            'class'                 => 'form-control',
                            'required'              => 'required',
                            'data-stripe'           => 'exp-month'
                        ], '%m') !!}
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group" id="exp-y-group">
                        {!! Form::label(null, 'Ex. Year') !!}
                        {!! Form::selectYear(null, date('Y'), date('Y') + 10, null, [
                            'class'             => 'form-control',
                            'required'          => 'required',
                            'data-stripe'       => 'exp-year'
                            ]) !!}
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group" id="coupon_code">
                        <label>Coupon Code</label>
                        <input type="text" class="form-control" name="coupon_code">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                      {!! Form::submit('Place order!', ['class' => 'btn btn-lg btn-block btn-primary btn-order', 'id' => 'submitBtn', 'style' => 'margin-bottom: 10px;']) !!}
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                        <span class="payment-errors" style="color: red;margin-top:10px;"></span>
                    </div>
                  </div>
                  <input type="hidden" name="publish_key" id="publish_key" value="pk_test_51MsUEMJ1zQ0384IFCFTnMFJNPdDhbKvU0X7YBMVYrB7QnamXdvMU7Q0GL9FVYFP8pZGDa0pkmji2OWotLzslzMge00OzOz0EEc">
              {!! Form::close() !!}
            </div>
        </div>
    </div>
  </div>
  <div class="col-md-3 col-md-offset-3">
  </div>
</div>
@stop

       