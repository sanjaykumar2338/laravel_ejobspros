@extends('layouts.getquote')
@section('content')

	<!-- header close  -->
    <section class="section1 seo d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12  z-3 d-flex align-items-center">
                    <div class="text">
                        <h5>E-Catalog & Inventory</h5>
                        <p>Most customers use mobile devices to shop online which makes it imperative to focus on designing eCommerce category pages for mobile browsers. In addition, it is becoming necessary to put greater focus on the site’s e-catalog and inventory.</p>
                    </div>
                </div>

                <!-- col-cose  -->
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <!-- I AM LOOKING FOR:FORM HTML CLOSE  -->
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

                        <input type="hidden" name="category" value="Web Design" id="category">
                        <input type="hidden" name="sub_category" value="E Catalog Inventory" id="sub_category">

                        <button class="" type="submit" name="frm_submit">Send</button>
                      </div>

                  </form>
                <!-- GET-A-QUOTE FORM CLOSE  -->
                </div>
            </div>
        </div>
    </section>

    <div class="container w-section">   
      <div class="row">
        <div class="col-sm-7">
            <h3>Importance of E-Catalogs and Accurate Inventory</h3>
            <p>Our team will identify and catalog all products to create an online inventory with a focus on expanding the site’s customer base by increasing the company’s accessibility.</p>

            <p>We will place your inventory line and connect it through a payment processing platform for ease of use and to create an additional sales channel. Also, providing an online catalog is a bonus for customer review. Our team can also integrate bar codes and any other coordinating systems needed for ordering, processing, or shipping the products.</p>

            <p>An e-catalog promotes the success of the inventory project by promoting new products with review options offered via email, advertising venues, social media, and even in-store signs.</p>
        </div>
        <div class="col-sm-5">
           <div class="img">
                <img style="max-height: 401px;" src="{{url('/asset/images/website/ECatalog-and-inventory-Section1-min.png')}}" alt="">
            </div>
        </div>
      </div>
    </div>

     <section class="w-section">
        <div class="container">
            <h4>eJobs4Pros provides the following</h4>
            <ul>
                <li>Enhance your catalog and inventory with product photos to spur online purchases.</li>
                <li>Product images influence shopper purchasing decisions.</li>
                <li>Online inventory increases customer service contact.</li>
                <li>Shoppers often make purchasing decisions based on product photos</li>
                <li>Inventory list that outlines product dimensions.</li>
                <li>Use the product inventory for ratings and reviews.</li>
                <li>Set up an inventory management system to integrate both online and offline inventory management.</li>
                <li>Create SEO-tailored descriptions for all products in the online inventory system.</li>
                <li>Publish your inventory online</li>
                <li>Create back-end functionality with the inventory management system</li>
                <li>Enter all photos, descriptions, and information for products offered so they automatically publish onto the website</li>
                <li>Create tabs and links to the sales platform, online inventory, or business website.</li>
                <li>Double-check the online inventory system by browsing all products, processing orders, and check links to guarantee functionality – make any necessary corrections.</li>
                <li>Update inventory when necessary such as when offering a discount, sale, or adding a new product to the list via the online management system.</li>
                <li>Update online inventory for purchases and returns so they link to order processing.</li>
            </ul>
        </div>
    </section>  


    <div class="container w-section">   
      <div class="row">
        <div class="col-sm-5">
           <div class="img">
                <img style="max-height: 531px;" src="{{url('/asset/images/website/ECatalog-and-inventory-Section3-min-1-1.png')}}" alt="">
            </div>
        </div>
        <div class="col-sm-7">
            <h3>E-Commerce Inventory</h3>
            <p>E-commerce inventory is imperative due to the complexity of selling on multiple channels and online. An inventory management system lets a business identify requirements and scale for the future if necessary. A successful system requires ongoing maintenance and observation to guarantee everything continues to run effectively.</p>

            <p>A functioning eCommerce inventory management system lets a company measure the amount, pricing, location, and products available. A business knows if things are overstocked, understocked, or out of stock. Clearly, an inventory management system ties heavily with a company’s financials and lets a business make an informed decision involving strategies such as marketing.</p>
            <p>Monitoring the logistics and analytics of inventory management lets a company stay ahead of all purchasing trends, fluctuating customer demands, and seasonal trends.</p>
            <p></p>
        </div>
      </div>
    </div>

    <section class="w-section">
        <div class="container">
            <h4>At eJobs4Pros</h4>
            <p>We know precisely how to design landing pages to achieve tangible results that convert visitors to leads.<p>

            <p><a href="{{url('contact-website-design-and-digital-marketing-professionals')}}">Contact us to learn more!</a></p>
        </div>
    </section>

    <div class="seo-f">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d184552.57289742303!2d-79.51814179377936!3d43.71815566213178!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d4cb90d7c63ba5%3A0x323555502ab4c477!2sToronto%2C%20ON%2C%20Canada!5e0!3m2!1sen!2sin!4v1678602016785!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
@stop