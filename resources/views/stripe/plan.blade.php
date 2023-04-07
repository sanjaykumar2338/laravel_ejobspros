
@extends('layouts.stripe')
@section('content')
<style>
.demo10{background:#C0BFBF;padding:30px 0}
.pricingTable10{text-align:center}
.pricingTable10 .pricingTable-header{padding:30px 0;background:#4d4d4d;position:relative;transition:all .3s ease 0s}
.pricingTable10:hover .pricingTable-header{background:#09b2c6}
.pricingTable10 .pricingTable-header:after,.pricingTable10 .pricingTable-header:before{content:"";width:16px;height:16px;border-radius:50%;border:1px solid #d9d9d8;position:absolute;bottom:12px}
.pricingTable10 .pricingTable-header:before{left:40px}
.pricingTable10 .pricingTable-header:after{right:40px}
.pricingTable10 .heading{font-size:18px;color:#fff;text-transform:uppercase;letter-spacing:2px;margin-top:0}
.pricingTable10 .price-value{display:inline-block;position:relative;font-size:55px;font-weight:700;color:#09b1c5;transition:all .3s ease 0s}
.pricingTable10:hover .price-value{color:#fff}
.pricingTable10 .currency{font-size:30px;font-weight:700;position:absolute;top:6px;left:-19px}
.pricingTable10 .month{font-size:16px;color:#fff;position:absolute;bottom:15px;right:-30px;text-transform:uppercase}
.pricingTable10 .pricing-content{padding-top:50px;background:#fff;position:relative}
.pricingTable10 .pricing-content:after,.pricingTable10 .pricing-content:before{content:"";width:16px;height:16px;border-radius:50%;border:1px solid #7c7c7c;position:absolute;top:12px}
.pricingTable10 .pricing-content:before{left:40px}
.pricingTable10 .pricing-content:after{right:40px}
.pricingTable10 .pricing-content ul{padding:0 20px;margin:0;list-style:none}
.pricingTable10 .pricing-content ul:after,.pricingTable10 .pricing-content ul:before{content:"";width:8px;height:46px;border-radius:3px;background:linear-gradient(to bottom,#818282 50%,#727373 50%);position:absolute;top:-22px;z-index:1;box-shadow:0 0 5px #707070;transition:all .3s ease 0s}
.pricingTable10:hover .pricing-content ul:after,.pricingTable10:hover .pricing-content ul:before{background:linear-gradient(to bottom,#40c4db 50%,#34bacc 50%)}
.pricingTable10 .pricing-content ul:before{left:44px}
.pricingTable10 .pricing-content ul:after{right:44px}
.pricingTable10 .pricing-content ul li{font-size:15px;font-weight:700;color:#777473;padding:10px 0;border-bottom:1px solid #d9d9d8}
.pricingTable10 .pricing-content ul li:last-child{border-bottom:none}
.pricingTable10 .read{display:inline-block;font-size:13px;color:#fff;text-transform:uppercase;background:#d9d9d8;padding:8px 25px;margin:30px 0;transition:all .3s ease 0s}
.pricingTable10 .read:hover{text-decoration:none}
.pricingTable10:hover .read{background:#09b1c5}
@media screen and (max-width:990px){.pricingTable10{margin-bottom:25px}
}
/* Credit to https://bootsnipp.com/snippets/92erW */
</style>

        <div class="demo10">
            <div class="container">
                <h4 class="py-4 text-center">Our Plans</h4>
                <h4 class="py-4 text-center">Here are strategies that we offer, starting with a proposal, we will achieve your business goals!</h4>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="pricingTable10">
                            <div class="pricingTable-header">
                                <h3 class="heading">Success Essentials</h3>
                                <span class="price-value">
                                    <span class="currency">$</span> 1500
                                    <span class="month">/mo</span>
                                </span>
                            </div>
                            <div class="pricing-content">                               
                                <ul>
                                    <li>Build an organic foundation</li>
                                </ul>
                                <br>
                                <a href="{{url('/digital-solutions/success-essentials')}}" class="read">Get Proposal</a>
                                <a href="#" class="read">sign up</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="pricingTable10">
                            <div class="pricingTable-header">
                                <h3 class="heading">Competitive Edge</h3>
                                <span class="price-value">
                                    <span class="currency">$</span> 1500
                                    <span class="month">/mo</span>
                                </span>
                            </div>
                            <div class="pricing-content">
                                <ul>
                                    <li>Compete for Orders</li>
                                </ul>
                                <br>
                                <a href="{{url('/digital-solutions/competitive-edge')}}" class="read">Get Proposal</a>
                                <a href="#" class="read">sign up</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="pricingTable10">
                            <div class="pricingTable-header">
                                <h3 class="heading">Social Ecommerce</h3>
                                <span class="price-value">
                                    <span class="currency">$</span> 1500
                                    <span class="month">/mo</span>
                                </span>
                            </div>
                            <div class="pricing-content">
                                <ul>
                                    <li>Social Integration & Promotion</li>
                                </ul>
                                <a href="{{url('/digital-solutions/social-ecommerce')}}" class="read">Get Proposal</a>
                                <a href="#" class="read">sign up</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="pricingTable10">
                            <div class="pricingTable-header">
                                <h3 class="heading">Pay Per Lead</h3>
                                <span class="price-value">
                                    <span class="currency">$</span> 1500
                                    <span class="month">/mo</span>
                                </span>
                            </div>
                            <div class="pricing-content">
                                <ul>
                                    <li>Social Platform Ads</li>
                                </ul>
                                <br>
                                <a href="{{url('/digital-solutions/pay-per-lead')}}" class="read">Get Proposal</a>
                                <a href="#" class="read">sign up</a>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">

                    <div class="col-md-3 col-sm-6">
                        <div class="pricingTable10">
                            <div class="pricingTable-header">
                                <h3 class="heading">Pay Per Performance</h3>
                                <span class="price-value">
                                    <span class="currency">$</span> 1500
                                    <span class="month">/mo</span>
                                </span>
                            </div>
                            <div class="pricing-content">
                                <ul>
                                    <li>Landing Page Rental</li>                                    
                                </ul>
                                <br>
                                <a href="{{url('/digital-solutions/pay-per-performance-2')}}" class="read">Get Proposal</a>
                                <a href="#" class="read">sign up</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="pricingTable10">
                            <div class="pricingTable-header">
                                <h3 class="heading">Branding</h3>
                                <span class="price-value">
                                    <span class="currency">$</span> 1500
                                    <span class="month">/mo</span>
                                </span>
                            </div>
                            <div class="pricing-content">
                                <ul>
                                    <li>Brand Recognition& Reputation Management</li>
                                </ul>
                                <a href="{{url('/digital-solutions/branding2')}}" class="read">Get Proposal</a>
                                <a href="#" class="read">sign up</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="pricingTable10">
                            <div class="pricingTable-header">
                                <h3 class="heading">Maintenance</h3>
                                <span class="price-value">
                                    <span class="currency">$</span> 1500
                                    <span class="month">/mo</span>
                                </span>
                            </div>
                            <div class="pricing-content">
                                <ul>
                                    <li>Design Update & Maintenance</li>
                                </ul>
                                <a href="{{url('/digital-solutions/maintenance')}}" class="read">Get Proposal</a>
                                <a href="#" class="read">sign up</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


@stop

       