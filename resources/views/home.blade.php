@extends('layouts.weblayout')

@section('content')

@include('includes.header')


     <div class="ct-mainSlider ct-u-backgroundMotive">
         <div class="ct-mainSlider--rightSide ct--col-md-push-7">
             <div class="ct-js-slick ct-slick ct-slick-dots--type3 ct-slick-dots--rightBottom" data-adaptiveheight="true" data-dots="true" data-arrows="false" data-infinite="true" data-autoplay="true">
                 <div class="item"><!-- item [1] -->
                     <img src="web_assets/images/demo-content/hostel-1.jpg" alt="Hostel" />
                 </div>
                 <div class="item"><!-- item [2] -->
                     <img src="web_assets/images/demo-content/hostel-4.jpg" alt="Hostel" />
                 </div>
                 <div class="item"><!-- item [3] -->
                     <img src="web_assets/images/demo-content/hostel-3.jpg" alt="Hostel" />
                 </div>
             </div>
         </div>
         <div class="ct-mainSlider--leftSide ct--col-md-pull-5">
             <div class="ct-mainSlider-miniImage hidden-xs">
                 <img src="web_assets/images/demo-content/mini-hostel.jpg" alt="" />
             </div>
             <div class="ct-bookingBox-fix ct-u-paddingTop30">
                 <div class="ct-bookingBox">
                     <div class="ct-bookingBox-inner">
                         <h2 class="ct-bookingBox-title ct-u-marginBottom30 text-uppercase">Book  <span class="ct-fw-300">a bed </span></h2>
                         <div class="clearfix"></div>
                         <form action="#" class="contactForm contactForm--type3">
                             <div class="form-group">
                                 <select class="demo-default ct-js-selectize" name="hostel">
                                     <option value="" />Select a Hostel 
                                     <option value="1" />The Sydney Harbour 
                                     <option value="2" />Casa Caracol 
                                     <option value="3" />The Clayzy House 
                                     <option value="4" />RE B&amp;B 
                                     <option value="5" />CamelBackpackers 
                                     <option value="6" />Fauzi Azar Inn 
                                 </select>
                             </div>
                             <div class="form-group">
                                 <div class="ct-datePicker">
                                     <input type="text" class="form-control ct-js-datePicker" placeholder="Select Date" required="" />
                                 </div>
                             </div>
                             <div class="form-group">
                                 <select class="demo-default ct-js-selectize">
                                     <option value="" />Number of Nights 
                                     <option value="1" />1 
                                     <option value="2" />2 
                                     <option value="3" />3 
                                     <option value="4" />4 
                                     <option value="5" />5 
                                     <option value="6" />6 
                                 </select>
                             </div>
                             <div class="form-group">
                                 <select class="demo-default ct-js-selectize">
                                     <option value="" />Currency 
                                     <option value="1" />Dollar 
                                     <option value="2" />Euro 
                                     <option value="3" />Franc 
                                     <option value="6" />Zloty 
                                 </select>
                             </div>
                             <div class="ct-u-paddingTop20">
                                 <button type="submit" class="btn btn-link text-uppercase">Book now  <span><i class="icon-right-small"></i></span></button>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
         <div class="clearfix"></div>
     </div>


     <div class="ct-u-paddingBoth20" data-background="#f2f2f2">
         <div class="container">
             <div class="row">
                 <div class="col-sm-12">
                     <div class="ct-js-slick ct-slick ct-slick-arrows--type1 ct-slick-arrow--position1" data-lgitems="6" data-mditems="5" data-smitems="3" data-xsitems="2" data-adaptiveheight="true" data-dots="false" data-arrows="true">
                         <div class="item">
                             <div class="item-inner text-center">
                                 <span class="ct-listIcon ct-listIcon--divider"><i class="fa fa-wifi"></i> Internet WIFI  </span>
                             </div>
                         </div>
                         <div class="item">
                             <div class="item-inner text-center">
                                 <span class="ct-listIcon ct-listIcon--divider"><i class="fa fa-credit-card"></i> Key cards </span>
                             </div>
                         </div>
                         <div class="item">
                             <div class="item-inner text-center">
                                 <span class="ct-listIcon ct-listIcon--divider"><i class="fa fa-motorcycle"></i> Bike rentals </span>
                             </div>
                         </div>
                         <div class="item">
                             <div class="item-inner text-center">
                                 <span class="ct-listIcon ct-listIcon--divider"><i class="fa fa-suitcase"></i> Baggage storage </span>
                             </div>
                         </div>
                         <div class="item">
                             <div class="item-inner text-center">
                                 <span class="ct-listIcon ct-listIcon--divider"><i class="fa fa-tree"></i> Garden & terrace </span>
                             </div>
                         </div>
                         <div class="item">
                             <div class="item-inner text-center">
                                 <span class="ct-listIcon ct-listIcon--divider"><i class="fa fa-clock-o"></i> 24 hours reception </span>
                             </div>
                         </div>
                         <div class="item">
                             <div class="item-inner text-center">
                                 <span class="ct-listIcon ct-listIcon--divider"><i class="fa fa-wifi"></i> Internet WIFI </span>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <section class="ct-u-paddingTop90 ct-u-paddingBottom40" data-background="#ffffff">
         <div class="container">
             <div class="row">
                 <div class="col-sm-4">
                     <div class="ct-iconBox ct-iconBox--type2 ct-u-marginBottom50">
                         <span class="ct-iconBox-icon">
                             <i class="icons8-map-marker"></i>
                         </span>
                         <h3 class="ct-iconBox-title text-uppercase">Map & <br /> DIRECTIONS </h3>
                         <p class="ct-iconBox-description">Located in the middle __ the historical centre of ______ only 2 minutes away. ____ easy to find. </p>
                         <a href="contact.html" class="btn btn-primary ct-u-marginTop10"><strong>Learn </strong> more  <span><i class="icon-right-small"></i></span></a>
                     </div>
                 </div>
                 <div class="col-sm-4">
                     <div class="ct-iconBox ct-iconBox--type2 ct-u-marginBottom50">
                         <span class="ct-iconBox-icon">
                             <i class="icons8-crown-filled"></i>
                         </span>
                         <h3 class="ct-iconBox-title text-uppercase">Services & <br /> Accomodations </h3>
                         <p class="ct-iconBox-description">We have many services _________ to you: towels, internet, __ curfew, 24 hour reception, ___. </p>
                         <a href="service.html" class="btn btn-primary ct-u-marginTop10"><strong>Learn </strong> more  <span><i class="icon-right-small"></i></span></a>
                     </div>
                 </div>
                 <div class="col-sm-4">
                     <div class="ct-iconBox ct-iconBox--type2 ct-u-marginBottom50">
                         <span class="ct-iconBox-icon">
                             <i class="icons8-museum-filled"></i>
                         </span>
                         <h3 class="ct-iconBox-title text-uppercase">great <br /> highlights </h3>
                         <p class="ct-iconBox-description">We really captured for ___ the most important monuments __ beautiful pictures. </p>
                         <a href="surroundings.html" class="btn btn-primary ct-u-marginTop10"><strong>Learn </strong> more  <span><i class="icon-right-small"></i></span></a>
                     </div>
                 </div>
             </div>
         </div>
     </section>


     <section class="ct-u-paddingTop100 ct-u-paddingBottom150" data-height="500" data-background="./web_assets/images/demo-content/media-section-1.jpg" data-background-mobile="./web_assets/images/demo-content/media-section-1.jpg">
         <div class="container">
             <div class="row">
                 <div class="col-sm-12">
                     <div class="ct-sectionHeader ct-sectionHeader--type1 text-center ct-u-marginBottom100">
                         <h3 class="ct-sectionHeader-title text-uppercase ct-u-colorWhite"> About US </h3>
                     </div>
                     <div class="ct-js-slick ct-slick ct-slick-dots--type2" data-xsitems="1" data-adaptiveheight="true" data-dots="true" data-arrows="false">
                         <div class="item">
                             <div class="item-inner text-center">
                                 <p class="ct-u-colorWhite">
                                    Our House - __ old factory building from ___ turn of the century - was restored and developed __ <br /> 1995.
                                    The typical ______-_________ charme of a brick ________ has been retained with _____,
                                    spacious <br /> rooms and a _________ garden. On each floor ___ can find large bathrooms.
                                 </p>
                             </div>
                         </div>
                         <div class="item">
                             <div class="item-inner text-center">
                                 <p class="ct-u-colorWhite">
                                    Our House - __ old factory building from ___ turn of the century - was restored and developed __ <br /> 1995.
                                    The typical ______-_________ charme of a brick ________ has been retained with _____,
                                    spacious <br /> rooms and a _________ garden. On each floor ___ can find large bathrooms.
                                 </p>
                             </div>
                         </div>
                         <div class="item">
                             <div class="item-inner text-center">
                                 <p class="ct-u-colorWhite">
                                    Our House - __ old factory building from ___ turn of the century - was restored and developed __ <br /> 1995.
                                    The typical ______-_________ charme of a brick ________ has been retained with _____,
                                    spacious <br /> rooms and a _________ garden. On each floor ___ can find large bathrooms.
                                 </p>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>

     <div class="ct-dividerBlock ct-u-paddingBoth30 animated" data-fx="fadeIn">
         <div class="container">
             <ul class="list-inline ct-js-socials ct-socials ct-socials--type1 ct-socials-tooltip text-center">
                 <li>
                     <a href="#" class="ct-social-link" data-social-hover-color="#3B5998"><i class="fa fa-facebook"></i>
                         <span class="ct-tooltipContent">Facebook </span>
                     </a>
                 </li>
                 <li>
                     <a href="#" class="ct-social-link" data-social-hover-color="#55acee"><i class="fa fa-twitter"></i>
                         <span class="ct-tooltipContent">Twitter </span>
                     </a>
                 </li>
                 <li>
                     <a href="#" class="ct-social-link" data-social-hover-color="#f26522"><i class="fa fa-rss"></i>
                         <span class="ct-tooltipContent">RSS </span>
                     </a>
                 </li>
                 <li>
                     <a href="#" class="ct-social-link" data-social-hover-color="#ea4c89"><i class="fa fa-dribbble"></i>
                         <span class="ct-tooltipContent">Dribble </span>
                     </a>
                 </li>
                 <li>
                     <a href="#" class="ct-social-link" data-social-hover-color="#45668e"><i class="fa fa-vk"></i>
                         <span class="ct-tooltipContent">VKontakte </span>
                     </a>
                 </li>
             </ul>
         </div>
     </div>

     <section class="ct-u-paddingTop90 ct-u-paddingBottom100" data-background="#ffffff">
         <div class="container">
             <div class="row">
                 <div class="col-sm-12">
                     <div class="ct-sectionHeader text-center">
                         <h3 class="ct-sectionHeader-title text-uppercase"> We offer  <span class="ct-fw-700">truly unique </span><br />
                          experiences &amp; great _____________
                         </h3>
                     </div>
                     <span class="ct-hr ct-hr--type1 ct-u-marginTop50 ct-u-marginBottom100" data-background="#f7f7f7">Line break </span>
                 </div>
             </div>
         </div>
         <div class="container">
             <div class="row">
                 <div class="ct-js-slick ct-slick ct-slick-dots--type1 ct-slick-dots--leftTop" data-lgitems="3" data-smitems="2" data-xsitems="1" data-adaptiveheight="true" data-dots="true" data-arrows="false">
                     <div class="item">
                         <div class="itemInner text-center ct-u-paddingHorizontal-15">
                             <a href="web_assets/images/demo-content/hostel-1.jpg" class="ct-imageBox ct-imageBox--type1 ct-u-marginBottom30 ct-js-popupImage ct-u-centerTable" data-effect="mfp-zoom-in">
                                 <figure>
                                     <img src="web_assets/images/demo-content/offer-thumbnail-1.jpg" alt="Image" />
                                     <figcaption>
                                         <h4 class="ct-imageBox-title">Twin Private Ensuite </h4>
                                         <span><i class="icon-right-small"></i></span>
                                     </figcaption>
                                 </figure>
                             </a>
                             <a href="web_assets/images/demo-content/hostel-3.jpg" class="ct-imageBox ct-imageBox--type1 ct-u-marginBottom30 ct-js-popupImage ct-u-centerTable" data-effect="mfp-zoom-in">
                                 <figure>
                                     <img src="web_assets/images/demo-content/offer-thumbnail-4.jpg" alt="Image" />
                                     <figcaption>
                                         <h4 class="ct-imageBox-title">Twin Private Ensuite </h4>
                                         <span><i class="icon-right-small"></i></span>
                                     </figcaption>
                                 </figure>
                             </a>
                         </div>
                     </div>
                     <div class="item">
                         <div class="itemInner text-center ct-u-paddingHorizontal-15">
                             <a href="web_assets/images/demo-content/hostel-3.jpg" class="ct-imageBox ct-imageBox--type1 ct-u-marginBottom30 ct-js-popupImage ct-u-centerTable" data-effect="mfp-zoom-in">
                                 <figure>
                                     <img src="web_assets/images/demo-content/offer-thumbnail-2.jpg" alt="Image" />
                                     <figcaption>
                                         <h4 class="ct-imageBox-title">Twin Private Ensuite </h4>
                                         <span><i class="icon-right-small"></i></span>
                                     </figcaption>
                                 </figure>
                             </a>
                             <a href="web_assets/images/demo-content/hostel-4.jpg" class="ct-imageBox ct-imageBox--type1 ct-u-marginBottom30 ct-js-popupImage ct-u-centerTable" data-effect="mfp-zoom-in">
                                 <figure>
                                     <img src="web_assets/images/demo-content/offer-thumbnail-5.jpg" alt="Image" />
                                     <figcaption>
                                         <h4 class="ct-imageBox-title">Twin Private Ensuite </h4>
                                         <span><i class="icon-right-small"></i></span>
                                     </figcaption>
                                 </figure>
                             </a>
                         </div>
                     </div>
                     <div class="item">
                         <div class="iteminner text-center ct-u-paddingHorizontal-15">
                             <a href="web_assets/images/demo-content/hostel-1.jpg" class="ct-imageBox ct-imageBox--type1 ct-u-marginBottom30 ct-js-popupImage ct-u-centerTable" data-effect="mfp-zoom-in">
                                 <figure>
                                     <img src="web_assets/images/demo-content/offer-thumbnail-3.jpg" alt="Image" />
                                     <figcaption>
                                         <h4 class="ct-imageBox-title">Twin Private Ensuite </h4>
                                         <span><i class="icon-right-small"></i></span>
                                     </figcaption>
                                 </figure>
                             </a>
                             <a href="web_assets/images/demo-content/hostel-1.jpg" class="ct-imageBox ct-imageBox--type1 ct-u-marginBottom30 ct-js-popupImage ct-u-centerTable" data-effect="mfp-zoom-in">
                                 <figure>
                                     <img src="web_assets/images/demo-content/offer-thumbnail-6.jpg" alt="Image" />
                                     <figcaption>
                                         <h4 class="ct-imageBox-title">Twin Private Ensuite </h4>
                                         <span><i class="icon-right-small"></i></span>
                                     </figcaption>
                                 </figure>
                             </a>
                         </div>
                     </div>
                     <div class="item">
                         <div class="itemInner text-center ct-u-paddingHorizontal-15">
                             <a href="web_assets/images/demo-content/hostel-3.jpg" class="ct-imageBox ct-imageBox--type1 ct-u-marginBottom30 ct-js-popupImage ct-u-centerTable" data-effect="mfp-zoom-in">
                                 <figure>
                                     <img src="web_assets/images/demo-content/offer-thumbnail-2.jpg" alt="Image" />
                                     <figcaption>
                                         <h4 class="ct-imageBox-title">Twin Private Ensuite </h4>
                                         <span><i class="icon-right-small"></i></span>
                                     </figcaption>
                                 </figure>
                             </a>
                             <a href="web_assets/images/demo-content/hostel-3.jpg" class="ct-imageBox ct-imageBox--type1 ct-u-marginBottom30 ct-js-popupImage ct-u-centerTable" data-effect="mfp-zoom-in">
                                 <figure>
                                     <img src="web_assets/images/demo-content/offer-thumbnail-4.jpg" alt="Image" />
                                     <figcaption>
                                         <h4 class="ct-imageBox-title">Twin Private Ensuite </h4>
                                         <span><i class="icon-right-small"></i></span>
                                     </figcaption>
                                 </figure>
                             </a>
                         </div>
                     </div>
                     <div class="item">
                         <div class="itemInner text-center ct-u-paddingHorizontal-15">
                             <a href="web_assets/images/demo-content/hostel-4.jpg" class="ct-imageBox ct-imageBox--type1 ct-u-marginBottom30 ct-js-popupImage ct-u-centerTable" data-effect="mfp-zoom-in">
                                 <figure>
                                     <img src="web_assets/images/demo-content/offer-thumbnail-1.jpg" alt="" />
                                     <figcaption>
                                         <h4 class="ct-imageBox-title">Twin Private Ensuite </h4>
                                         <span><i class="icon-right-small"></i></span>
                                     </figcaption>
                                 </figure>
                             </a>
                             <a href="web_assets/images/demo-content/hostel-1.jpg" class="ct-imageBox ct-imageBox--type1 ct-u-marginBottom30 ct-js-popupImage ct-u-centerTable" data-effect="mfp-zoom-in">
                                 <figure>
                                     <img src="web_assets/images/demo-content/offer-thumbnail-2.jpg" alt="" />
                                     <figcaption>
                                         <h4 class="ct-imageBox-title">Twin Private Ensuite </h4>
                                         <span><i class="icon-right-small"></i></span>
                                     </figcaption>
                                 </figure>
                             </a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>

     <section>
         <div class="ct-gallery-static ct-gallery--col4">
             <div class="ct-gallery-item ct-gallery-item--masonry animated" data-fx="fadeIn"><!-- Article 1 -->
                 <div class="ct-gallery-itemInner">
                     <div class="ct-portfolio ct-portfolio--masonry">
                         <div class="ct-articleBox text-center">
                             <a href="single-blog-post.html">
                                 <figure>
                                     <img src="web_assets/images/demo-content/article-thumbnail-1.jpg" alt="Image" />
                                     <figcaption>
                                         <span class="ct-articleBox-date">Thursday, July 02, 2015 </span>
                                         <h4 class="ct-articleBox-title">Our Impecable Cleaning Services & Staff </h4>
                                     </figcaption>
                                 </figure>
                                 <span class="btn btn-primary text-uppercase ct-articleBox-link"><strong>Read </strong> article </span>
                             </a>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="ct-gallery-item ct-gallery-item--masonry animated" data-fx="fadeIn" data-time="300"><!-- Article 2 -->
                 <div class="ct-gallery-itemInner">
                     <div class="ct-portfolio ct-portfolio--masonry">
                         <div class="ct-articleBox text-center">
                             <a href="single-blog-post.html">
                                 <figure>
                                     <img src="web_assets/images/demo-content/article-thumbnail-2.jpg" alt="Image" />
                                     <figcaption>
                                         <span class="ct-articleBox-date">Wednesday, July 01, 2015 </span>
                                         <h4 class="ct-articleBox-title">Grand New Opening Of ___ Hostel </h4>
                                     </figcaption>
                                 </figure>
                                 <span class="btn btn-primary text-uppercase ct-articleBox-link"><strong>Read </strong> article </span>
                             </a>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="ct-gallery-item ct-gallery-item--masonry animated" data-fx="fadeIn" data-time="600"><!-- Article 3 -->
                 <div class="ct-gallery-itemInner">
                     <div class="ct-portfolio ct-portfolio--masonry">
                         <div class="ct-articleBox text-center">
                             <a href="single-blog-post.html">
                                 <figure>
                                     <img src="web_assets/images/demo-content/article-thumbnail-3.jpg" alt="Image" />
                                     <figcaption>
                                         <span class="ct-articleBox-date">Sunday, June 5, 2015 </span>
                                         <h4 class="ct-articleBox-title">Our Beautiful Single Private ________ </h4>
                                     </figcaption>
                                 </figure>
                                 <span class="btn btn-primary text-uppercase ct-articleBox-link"><strong>Read </strong> article </span>
                             </a>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="ct-gallery-item ct-gallery-item--masonry animated" data-fx="fadeIn" data-time="900"><!-- Article 4 -->
                 <div class="ct-gallery-itemInner">
                     <div class="ct-portfolio ct-portfolio--masonry">
                         <div class="ct-articleBox text-center">
                             <a href="single-blog-post.html">
                                 <figure>
                                     <img src="web_assets/images/demo-content/article-thumbnail-4.jpg" alt="Image" />
                                     <figcaption>
                                         <span class="ct-articleBox-date">Thuesday, June 30, 2015 </span>
                                         <h4 class="ct-articleBox-title">Our Beautiful Double Private ________ </h4>
                                     </figcaption>
                                 </figure>
                                 <span class="btn btn-primary text-uppercase ct-articleBox-link">Read article </span>
                             </a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>

     <section class="ct-u-paddingTop90 ct-u-paddingBottom40" data-background="#ffffff">
         <div class="container">
             <div class="ct-sectionHeader ct-sectionHeader--type1 text-center ct-u-marginBottom50">
                 <h3 class="ct-sectionHeader-title text-uppercase"> our facilities </h3>
                 <p class="ct-u-paddingTop60">We offer a great ____ of facilties for your ___ comfort so you can ____ a great time at ___ hostel. </p>
             </div>
         </div>
         <div class="container">
             <div class="row">
                 <div class="col-md-4">
                     <a href="contact.html" class="ct-iconBox ct-iconBox--circle text-center ct-u-marginBottom50">
                         <span class="ct-iconBox-icon">1 </span>
                         <h5 class="ct-iconBox-title">Free Outdoor Swimming Pool </h5>
                         <p class="ct-iconBox-description">Our outdoor swimming pool ____ waterfall is perfect to ____ by on those 35 ______ days when lining up __ a museum. </p>
                     </a>
                 </div>
                 <div class="col-md-4">
                     <a href="contact.html" class="ct-iconBox ct-iconBox--circle text-center ct-u-marginBottom50">
                         <span class="ct-iconBox-icon">2 </span>
                         <h5 class="ct-iconBox-title">Free Use Of Fitness _________ </h5>
                         <p class="ct-iconBox-description">We have cardio fitness _________ free to all guests - to help you with ____ pizza andpasta guilt. </p>
                     </a>
                 </div>
                 <div class="col-md-4">
                     <a href="contact.html" class="ct-iconBox ct-iconBox--circle text-center ct-u-marginBottom50">
                         <span class="ct-iconBox-icon">3 </span>
                         <h5 class="ct-iconBox-title">Free Linen </h5>
                         <p class="ct-iconBox-description">Free linen for all __ our guests. In an ______ to minimise hygiene risks, ________ bags are not allowed __ be used. </p>
                     </a>
                 </div>
                 <div class="clearfix visible-lg visible-md"></div>
                 <div class="col-md-4">
                     <a href="contact.html" class="ct-iconBox ct-iconBox--circle text-center ct-u-marginBottom50">
                         <span class="ct-iconBox-icon">4 </span>
                         <h5 class="ct-iconBox-title">Opera Bar & Restaurant </h5>
                         <p class="ct-iconBox-description">Party in our very ___ basement bar! You'll also __ able to grab traditional _______ food without breaking your ______.  </p>
                     </a>
                 </div>
                 <div class="col-md-4">
                     <a href="contact.html" class="ct-iconBox ct-iconBox--circle text-center ct-u-marginBottom50">
                         <span class="ct-iconBox-icon">5 </span>
                         <h5 class="ct-iconBox-title">Opera Terrace Bar </h5>
                         <p class="ct-iconBox-description">The panoramic terrace is ____ perfect for that sundowner __ the end of the ___. So feel free to _____ it 100%! </p>
                     </a>
                 </div>
                 <div class="col-md-4">
                     <a href="contact.html" class="ct-iconBox ct-iconBox--circle text-center ct-u-marginBottom50">
                         <span class="ct-iconBox-icon">6 </span>
                         <h5 class="ct-iconBox-title">Laundry Facilities </h5>
                         <p class="ct-iconBox-description">We have great washing ________ and dryers for yours (___ your fellow travellers') benefit. __________  just for you! </p>
                     </a>
                 </div>
             </div>
         </div>
     </section>

     
     <section class="ct-u-paddingTop90 ct-u-paddingBottom100" data-background="#ffffff">
         <div class="container">
             <div class="ct-sectionHeader ct-sectionHeader--type1 ct-u-marginBottom75 text-center">
                 <h3 class="ct-sectionHeader-title text-uppercase"> Our rooms </h3>
             </div>
         </div>
         <div class="container">
             <ul class="list-unstyled list-inline ct-gallery-filters text-center"><!-- Isotope nav -->
                 <li data-filter=".first-floor" class="active"><span class="ct-fw-700">1st </span> floor </li>
                 <li data-filter=".second-floor"><span class="ct-fw-700">2st </span> floor </li>
                 <li data-filter=".third-floor"><span class="ct-fw-700">3st </span> floor </li>
             </ul>
             <div class="ct-gallery ct-gallery--col4 ct-gallery--withSpacing is-loaded ct-gallery-popup">
                 <div class="ct-gallery-item ct-gallery-item--masonry first-floor"><!-- Gallery's 1 item -->
                     <div class="ct-gallery-itemInner">
                         <div class="ct-portfolio ct-portfolio--masonry">
                             <a href="web_assets/images/demo-content/hostel-1.jpg" class="ct-galleryBox ct-js-popupImage" data-effect="mfp-zoom-in">
                                 <figure>
                                     <img src="web_assets/images/demo-content/portfolio-thumbnail-1.jpg" alt="" />
                                     <figcaption>
                                         <h4 class="text-uppercase ct-galleryBox-title">Double Room Ensuite </h4>
                                         <div class="ct-galleryBox-price">from  <span>$25 </span></div>
                                     </figcaption>
                                 </figure>
                             </a>
                         </div>
                     </div>
                 </div>
                 <div class="ct-gallery-item ct-gallery-item--masonry first-floor"><!-- Gallery's 2 item -->
                     <div class="ct-gallery-itemInner">
                         <div class="ct-portfolio ct-portfolio--masonry">
                             <a href="web_assets/images/demo-content/hostel-3.jpg" class="ct-galleryBox ct-js-popupImage" data-effect="mfp-zoom-in">
                                 <figure>
                                     <img src="web_assets/images/demo-content/portfolio-thumbnail-2.jpg" alt="" />
                                     <figcaption>
                                         <h4 class="text-uppercase ct-galleryBox-title">Double Room Ensuite </h4>
                                         <div class="ct-galleryBox-price">from  <span>$25 </span></div>
                                     </figcaption>
                                 </figure>
                             </a>
                         </div>
                     </div>
                 </div>
                 <div class="ct-gallery-item ct-gallery-item--masonry second-floor first-floor"><!-- Gallery's 3 item -->
                     <div class="ct-gallery-itemInner">
                         <div class="ct-portfolio ct-portfolio--masonry">
                             <a href="web_assets/images/demo-content/hostel-4.jpg" class="ct-galleryBox ct-js-popupImage" data-effect="mfp-zoom-in">
                                 <figure>
                                     <img src="web_assets/images/demo-content/portfolio-thumbnail-3.jpg" alt="" />
                                     <figcaption>
                                         <h4 class="text-uppercase ct-galleryBox-title">Double Room Ensuite </h4>
                                         <div class="ct-galleryBox-price">from  <span>$25 </span></div>
                                     </figcaption>
                                 </figure>
                             </a>
                         </div>
                     </div>
                 </div>
                 <div class="ct-gallery-item ct-gallery-item--masonry second-floor first-floor"><!-- Gallery's 4 item -->
                     <div class="ct-gallery-itemInner">
                         <div class="ct-portfolio ct-portfolio--masonry">
                             <a href="web_assets/images/demo-content/hostel-1.jpg" class="ct-galleryBox ct-js-popupImage" data-effect="mfp-zoom-in">
                                 <figure>
                                     <img src="web_assets/images/demo-content/portfolio-thumbnail-4.jpg" alt="" />
                                     <figcaption>
                                         <h4 class="text-uppercase ct-galleryBox-title">Double Room Ensuite </h4>
                                         <div class="ct-galleryBox-price">from  <span>$25 </span></div>
                                     </figcaption>
                                 </figure>
                             </a>
                         </div>
                     </div>
                 </div>
                 <div class="ct-gallery-item ct-gallery-item--masonry second-floor first-floor"><!-- Gallery's 5 item -->
                     <div class="ct-gallery-itemInner">
                         <div class="ct-portfolio ct-portfolio--masonry">
                             <a href="web_assets/images/demo-content/hostel-3.jpg" class="ct-galleryBox ct-js-popupImage" data-effect="mfp-zoom-in">
                                 <figure>
                                     <img src="web_assets/images/demo-content/portfolio-thumbnail-5.jpg" alt="" />
                                     <figcaption>
                                         <h4 class="text-uppercase ct-galleryBox-title">Double Room Ensuite </h4>
                                         <div class="ct-galleryBox-price">from  <span>$25 </span></div>
                                     </figcaption>
                                 </figure>
                             </a>
                         </div>
                     </div>
                 </div>
                 <div class="ct-gallery-item ct-gallery-item--masonry third-floor first-floor"><!-- Gallery's 6 item -->
                     <div class="ct-gallery-itemInner">
                         <div class="ct-portfolio ct-portfolio--masonry">
                             <a href="web_assets/images/demo-content/hostel-4.jpg" class="ct-galleryBox ct-js-popupImage" data-effect="mfp-zoom-in">
                                 <figure>
                                     <img src="web_assets/images/demo-content/portfolio-thumbnail-6.jpg" alt="" />
                                     <figcaption>
                                         <h4 class="text-uppercase ct-galleryBox-title">Double Room Ensuite </h4>
                                         <div class="ct-galleryBox-price">from  <span>$25 </span></div>
                                     </figcaption>
                                 </figure>
                             </a>
                         </div>
                     </div>
                 </div>
                 <div class="ct-gallery-item ct-gallery-item--masonry third-floor first-floor"><!-- Gallery's 7 item -->
                     <div class="ct-gallery-itemInner">
                         <div class="ct-portfolio ct-portfolio--masonry">
                             <a href="web_assets/images/demo-content/hostel-1.jpg" class="ct-galleryBox ct-js-popupImage" data-effect="mfp-zoom-in">
                                 <figure>
                                     <img src="web_assets/images/demo-content/portfolio-thumbnail-7.jpg" alt="" />
                                     <figcaption>
                                         <h4 class="text-uppercase ct-galleryBox-title">Double Room Ensuite </h4>
                                         <div class="ct-galleryBox-price">from  <span>$25 </span></div>
                                     </figcaption>
                                 </figure>
                             </a>
                         </div>
                     </div>
                 </div>
                 <div class="ct-gallery-item ct-gallery-item--masonry third-floor first-floor"><!-- Gallery's 8 item -->
                     <div class="ct-gallery-itemInner">
                         <div class="ct-portfolio ct-portfolio--masonry">
                             <a href="web_assets/images/demo-content/hostel-3.jpg" class="ct-galleryBox ct-js-popupImage" data-effect="mfp-zoom-in">
                                 <figure>
                                     <img src="web_assets/images/demo-content/portfolio-thumbnail-8.jpg" alt="" />
                                     <figcaption>
                                         <h4 class="text-uppercase ct-galleryBox-title">Double Room Ensuite </h4>
                                         <div class="ct-galleryBox-price">from  <span>$25 </span></div>
                                     </figcaption>
                                 </figure>
                             </a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     @include('includes.footer')
     
 </div><!-- Page Wrapper [end] -->

     <!-- JavaScripts -->
     <script src="{{ asset('web_assets/js/external.min.js')}}"></script>

     <!-- Main js file -->
     <script src="{{ asset('web_assets/js/main.js')}}"></script>

     <!-- Slick -->
     <script src="{{ asset('web_assets/js/slick/js/slick.js')}}"></script>
     <script src="{{ asset('web_assets/js/slick/js/init.js')}}"></script>

     <!-- Portfolio -->
     <script src="{{ asset('web_assets/js/portfolio/jquery.isotope.min.js')}}"></script>
     <script src="{{ asset('web_assets/js/portfolio/imagesloaded.js')}}"></script>
     <script src="{{ asset('web_assets/js/portfolio/init.js')}}"></script>

     <!-- Media Section -->
     <script src="{{ asset('web_assets/js/ct-mediaSection/js/smoothScroll.js')}}"></script>
     <script src="{{ asset('web_assets/js/ct-mediaSection/js/jquery.stellar.min.js')}}"></script>
     <script src="{{ asset('web_assets/js/ct-mediaSection/js/media-section.js')}}"></script>

     <!-- Selectize -->
     <script src="{{ asset('web_assets/js/selectize/selectize.min.js')}}"></script>

     <!-- Date time picker -->
     <script src="{{ asset('web_assets/js/datetime-picker/datetime-picker.min.js')}}"></script>
     <script src="{{ asset('web_assets/js/datetime-picker/init.js')}}"></script>

     <!-- Topbar and Navbar effects -->
     <script src="{{ asset('web_assets/js/headroom/headroom.js')}}"></script>
     <script src="{{ asset('web_assets/js/headroom/jQuery.headroom.js')}}"></script>
     <script src="{{ asset('web_assets/js/headroom/init.js')}}"></script>

     <!-- Magnific popup gallery -->
     <script src="{{ asset('web_assets/js/magnificpopup/magnificpopup.min.js')}}"></script>
     <script src="{{ asset('web_assets/js/magnificpopup/init.js')}}"></script>




 <!-- switcher -->
 <script src="../demo/js/demo.js"></script>
         
@endsection
