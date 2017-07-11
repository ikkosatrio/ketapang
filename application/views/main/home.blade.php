@extends('main.template')
@section('content')
<section class="row experience-area">
   <div class="container">
       <div class="row">
           <div class="col-sm-5 worker-image">
               <img src="{{base_url()}}assets/main/images/expreence/1.png" alt="">
           </div>
           <div class="col-sm-7 experience-info">
              <div class="content">
                  <h2>OVER 15 YEARS EXPERIENCE IN INDUSTRY</h2> 
                  <p>Lorem ipsum dolor sit amet, cons ectetur elit. Vestibulum nec odios Suspe ndisse cursus mal suada faci lisis. Lorem ipsum dolor sit ametion consectetur elit. Vesti bulum nec.</p>  
              </div>
              <ul class="content-list">
                  <li><a href="{{base_url()}}assets/main/#">Interior Furniture Manfacturing</a></li>
                  <li><a href="{{base_url()}}assets/main/#">Reparing of wooden almerah</a></li>
                  <li><a href="{{base_url()}}assets/main/#">Hardwood Flooring</a></li>
                  <li><a href="{{base_url()}}assets/main/#">Renovaion of office furnitures</a></li>
                  <li><a href="{{base_url()}}assets/main/#">Make Quality Products</a></li>
              </ul>
              {{-- <div class="content-image">
              <img src="{{base_url()}}assets/main/images/expreence/2.jpg" alt="">
              </div> --}}
               
           </div>
       </div>
   </div>
</section>


<!--we-do-->
<section class="row sectpad we-do-section">
    <div class="container">
        <div class="row m0 section_header color">
           <h2>Artikel Terbaru</h2> 
        </div>
        <div class="we-do-slider">
            <div class="we-sliders">
                <div class="item">
                    <div class="post-image">
                        <img src="{{base_url()}}assets/main/images/we-do/1.jpg"  alt="">
                    </div>
                    <a href="{{base_url()}}assets/main/#"><h4>HARDWOOD FLOORING</h4></a>
                    <p>Lorem ipsum dolor sit amet, cons ecte tur elit. Vestibulum nec odios suspe ndisse ipsum dolor sit.</p>
                </div>
                <div class="item">
                    <div class="post-image">
                        <img src="{{base_url()}}assets/main/images/we-do/2.jpg"  alt="">
                    </div>
                    <a href="{{base_url()}}assets/main/#"><h4>Home Wood Work</h4></a>
                    <p>Lorem ipsum dolor sit amet, cons ecte tur elit. Vestibulum nec odios suspe ndisse ipsum dolor sit.</p>
                </div>
                <div class="item">
                    <div class="post-image">
                        <img src="{{base_url()}}assets/main/images/we-do/3.jpg"  alt="">
                    </div>
                    <a href="{{base_url()}}assets/main/#"><h4>Indoor Furniture</h4></a>
                    <p>Lorem ipsum dolor sit amet, cons ecte tur elit. Vestibulum nec odios suspe ndisse ipsum dolor sit.</p>
                </div>
                <div class="item">
                    <div class="post-image">
                        <img src="{{base_url()}}assets/main/images/we-do/4.jpg"  alt="">
                    </div>
                    <a href="{{base_url()}}assets/main/#"><h4>Outdoor Furniture</h4></a>
                    <p>Lorem ipsum dolor sit amet, cons ecte tur elit. Vestibulum nec odios suspe ndisse ipsum dolor sit.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Projects -->
<section class="row latest_projects sectpad projects-1">
    <div class="container">
        <div class="row m0 section_header">
            <h2>Our Latest Projects</h2>
        </div>
        <div class="row m0 filter_row">
            <ul class="nav project_filter" id="project_filter2">
                <li class="active" data-filter="*">all</li>
                <li data-filter=".indoor">indoor furniture</li>
                <li data-filter=".renovation">renovation of house</li>
                <li data-filter=".hardwood">hardwood flooring</li>
                <li data-filter=".wood_supply">wood supply</li>
                <li data-filter=".manufacturing">furniture manufacturing</li>
                <li data-filter=".repairing">repairing</li>
            </ul>
        </div>
        <div class="projects2 popup-gallery" id="projects">
            <div class="grid-sizer"></div>
            <div class="col-sm-3 col-xs-6 project indoor hardwood renovation renovation">
                <div class="project-img">
                    <img src="{{base_url()}}assets/main/images/latest-project/2.jpg" alt="">
                    <div class="project-text">
                        <ul class="list-unstyled">
                            <li><a href="{{base_url()}}assets/main/projects-details.html"><i class="icon icon-Linked"></i></a></li>
                            <li><a href="{{base_url()}}assets/main/images/latest-project/2.jpg" data-source="projects-details.html" title="KITCHKEN RENOVATION" data-desc="Wood Work of Rack" class="popup"><i class="icon icon-Search"></i></a></li>
                        </ul>
                        <div class="row m0">
                            <a href="{{base_url()}}assets/main/projects-details.html"><h3>Kitchken renovation</h3></a>
                            <p>Wood Work of Racks</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-xs-6 project repairing renovation">
                <div class="project-img">
                    <img src="{{base_url()}}assets/main/images/latest-project/5.jpg" alt="">
                    <div class="project-text">
                        <ul class="list-unstyled">
                            <li><a href="{{base_url()}}assets/main/projects-details.html"><i class="icon icon-Linked"></i></a></li>
                            <li><a href="{{base_url()}}assets/main/images/latest-project/5.jpg" data-source="projects-details.html" title="KITCHKEN RENOVATION" data-desc="Wood Work of Rack" class="popup"><i class="icon icon-Search"></i></a></li>
                        </ul>
                        <div class="row m0">
                            <a href="{{base_url()}}assets/main/projects-details.html"><h3>Kitchken renovation</h3></a>
                            <p>Wood Work of Racks</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--work-shop-->
<section class="row fluid-work-area">
    <div class="work-image">
        <img src="{{base_url()}}assets/main/images/workshop/work.jpg" alt="">
    </div>
    <div class="work-promo">
        <div class="promo-content">
            <h2>Welcome to Wood Workshop</h2>
            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quae rat voluptatem. Ut enim ad minima.</p>
            <h3>We are available for 24/7 for you requirements</h3>
            <ul class="nav">
                <li>Complete Savety Analysis</li>
                <li>Complete Savety Analysis</li>
                <li>Certified Company Since 2005</li>
                <li>Certified Company Since 2005</li>
            </ul>
        </div>
    </div>
</section>
<!--testimonial-->
<section class="row sectpad testimonial-area">
   <div class="container">
       <div class="row m0 section_header common">
           <h2>Artikel Populer</h2> 
        </div>
        <div class="testimonial-sliders">
            <div class="item">
                <div class="media testimonial">
                    <div class="media-left">
                        <a href="{{base_url()}}assets/main/#">
                            <img src="{{base_url()}}assets/main/images/testimonial/1.jpg"  alt="">
                        </a>
                    </div>
                    <div class="media-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipis cing elit, sed do eiusmod tempor incid idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                        <a href="{{base_url()}}assets/main/#">-  John Michale</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="media testimonial">
                    <div class="media-left">
                        <a href="{{base_url()}}assets/main/#">
                            <img src="{{base_url()}}assets/main/images/testimonial/2.jpg"  alt="">
                        </a>
                    </div>
                    <div class="media-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipis cing elit, sed do eiusmod tempor incid idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                        <a href="{{base_url()}}assets/main/#">-  John Michale</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="media testimonial">
                    <div class="media-left">
                        <a href="{{base_url()}}assets/main/#">
                            <img src="{{base_url()}}assets/main/images/testimonial/3.jpg"  alt="">
                        </a>
                    </div>
                    <div class="media-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipis cing elit, sed do eiusmod tempor incid idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                        <a href="{{base_url()}}assets/main/#">-  John Michale</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="media testimonial">
                    <div class="media-left">
                        <a href="{{base_url()}}assets/main/#">
                            <img src="{{base_url()}}assets/main/images/testimonial/4.jpg"  alt="">
                        </a>
                    </div>
                    <div class="media-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipis cing elit, sed do eiusmod tempor incid idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                        <a href="{{base_url()}}assets/main/#">-  John Michale</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="media testimonial">
                    <div class="media-left">
                        <a href="{{base_url()}}assets/main/#">
                            <img src="{{base_url()}}assets/main/images/testimonial/5.jpg"  alt="">
                        </a>
                    </div>
                    <div class="media-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipis cing elit, sed do eiusmod tempor incid idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                        <a href="{{base_url()}}assets/main/#">-  John Michale</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="media testimonial">
                    <div class="media-left">
                        <a href="{{base_url()}}assets/main/#">
                            <img src="{{base_url()}}assets/main/images/testimonial/6.jpg"  alt="">
                        </a>
                    </div>
                    <div class="media-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipis cing elit, sed do eiusmod tempor incid idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                        <a href="{{base_url()}}assets/main/#">-  John Michale</a>
                    </div>
                </div>
            </div>
        </div>
   </div>
</section>

<!-- latest-news-area -->
<section class="row sectpad latest-news-area">
    <div class="container">
        <div class="row m0 section_header">
           <h2>Artikel Populer</h2> 
        </div>
        <div class="row latest-content">
            <div class="col-sm-4 clo-xs-12 latest">
                <div class="row m0 latest-image">
                    <a href="{{base_url()}}assets/main/blog-details.html"><img src="{{base_url()}}assets/main/images/latest-news/1.jpg" alt=""></a>
                    <div class="latest-info-date"><a href="{{base_url()}}assets/main/#"><h3>14 <small>MAR</small></h3></a></div>
                </div>
                <div class="latest-news-text">
                    <a href="{{base_url()}}assets/main/blog.html">
                        <h4>Wood Work Adds Value to Your Property</h4>
                    </a>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusa nt ium dolor emque laudantium totam.</p>
                    <div class="row m0 latest-meta">
                        <a href="{{base_url()}}assets/main/#"><i class="fa fa-user"></i>Anjori Meyami</a> <a class="read_more" href="{{base_url()}}assets/main/single.html"><i class="fa fa-comments"></i> Comments: 6</a>
                    </div>
                </div>
            </div>    
            <div class="col-sm-4 clo-xs-12  latest">
                <div class="row m0 latest-image">
                    <a href="{{base_url()}}assets/main/blog-details.html"><img src="{{base_url()}}assets/main/images/latest-news/2.jpg" alt=""></a>
                    <div class="latest-info-date"><a href="{{base_url()}}assets/main/#"><h3>14 <small>MAR</small></h3></a></div>
                </div>
                <div class="latest-news-text">
                    <a href="{{base_url()}}assets/main/blog-details.html">
                        <h4>Wood Work Adds Value to Your Property</h4>
                    </a>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusa nt ium dolor emque laudantium totam.</p>
                    <div class="row m0 latest-meta">
                       <a href="{{base_url()}}assets/main/#"><i class="fa fa-user"></i>Anjori Meyami</a> <a class="read_more" href="{{base_url()}}assets/main/single.html"><i class="fa fa-comments"></i> Comments: 6</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 clo-xs-12 latest">
                <div class="row m0 latest-image">
                    <a href="{{base_url()}}assets/main/blog-details.html"><img src="{{base_url()}}assets/main/images/latest-news/3.jpg" alt=""></a>
                    <div class="latest-info-date"><a href="{{base_url()}}assets/main/#"><h3>14 <small>MAR</small></h3></a></div>
                </div>
                <div class="latest-news-text">
                    <a href="{{base_url()}}assets/main/blog.html">
                        <h4>Wood Work Adds Value to Your Property</h4>
                    </a>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusa nt ium dolor emque laudantium totam.</p>
                    <div class="row m0 latest-meta">
                        <a href="{{base_url()}}assets/main/#"><i class="fa fa-user"></i>Anjori Meyami</a> <a class="read_more" href="{{base_url()}}assets/main/single.html"><i class="fa fa-comments"></i> Comments: 6</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- clients -->
<section class="row clients">
    <div class="container">
        <div class="row m0 section_header">
            <h2>Produk Desa</h2>
        </div>
        <div class="row clients-logos">
            <div class="col-md-2 col-sm-3 col-xs-6 client">
                <div class="row m0 inner-logo">
                   <a href="{{base_url()}}assets/main/#"><img src="{{base_url()}}assets/main/images/clients-logo/1.png" alt=""></a>
                </div>
            </div>
            <div class="col-md-2 col-sm-3 col-xs-6 client">
                <div class="row m0 inner-logo">
                   <a href="{{base_url()}}assets/main/#"><img src="{{base_url()}}assets/main/images/clients-logo/2.png" alt=""></a>
                </div>
            </div>
            <div class="col-md-2 col-sm-3 col-xs-6 client">
                <div class="row m0 inner-logo">
                   <a href="{{base_url()}}assets/main/#"><img src="{{base_url()}}assets/main/images/clients-logo/3.png" alt=""></a>
                </div>
            </div>
            <div class="col-md-2 col-sm-3 col-xs-6 client">
                <div class="row m0 inner-logo">
                   <a href="{{base_url()}}assets/main/#"><img src="{{base_url()}}assets/main/images/clients-logo/4.png" alt=""></a>
                </div>
            </div>
            <div class="col-md-2 col-sm-3 col-xs-6 client">
                <div class="row m0 inner-logo">
                   <a href="{{base_url()}}assets/main/blog-details.html"><img src="{{base_url()}}assets/main/images/clients-logo/5.png" alt=""></a>
                </div>
            </div>
            <div class="col-md-2 col-sm-3 col-xs-6 client">
                <div class="row m0 inner-logo">
                   <a href="{{base_url()}}assets/main/blog-details.html"><img src="{{base_url()}}assets/main/images/clients-logo/6.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection