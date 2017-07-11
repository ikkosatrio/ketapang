@extends('main.template')
@section('content')
<!--breadcrumb-->
<section class="row header-breadcrumb">
    <div class="container">
        <div class="row m0 page-cover">
            <h2 class="page-cover-tittle">projects 1</h2>
        <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">projects 1</li>
        </ol>
        </div>
    </div>
</section>

<!--checkout-->
<section class="row check-project sectpad">
    <div class="container">
        <div class="row m0 section_header color">
            <h2>Checkout Our Projects</h2>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
        </div>
        
    </div>
</section>

<!-- Projects -->
<section class="row latest_projects sectpad projects-1">
    <div class="container">
        <div class="row m0 filter_row projects-menu">
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
            <div class="col-sm-3 col-xs-6 project indoor wood_supply">
                <div class="project-img">
                    <img src="{{base_url()}}assets/main/images/project_1/1.jpg" alt="">
                    <div class="project-text">
                        <ul class="list-unstyled">
                            <li><a href="projects-details.html"><i class="icon icon-Linked"></i></a></li>
                            <li><a href="images/project_1/1.jpg" data-source="projects-details.html" title="KITCHKEN RENOVATION" data-desc="Wood Work of Rack" class="popup"><i class="icon icon-Search"></i></a></li>
                        </ul>
                        <div class="row m0">
                            <a href="projects-details.html"><h3>Kitchken renovation</h3></a>
                            <p>Wood Work of Racks</p>
                        </div>
                    </div>
                </div>                
            </div>
            <div class="col-sm-3 col-xs-6 project indoor hardwood renovation renovation">
               <div class="project-img">
                    <img src="{{base_url()}}assets/main/images/project_1/2.jpg" alt="">
                    <div class="project-text">
                        <ul class="list-unstyled">
                            <li><a href="projects-details.html"><i class="icon icon-Linked"></i></a></li>
                            <li><a href="images/project_1/2.jpg" data-source="projects-details.html" title="KITCHKEN RENOVATION" data-desc="Wood Work of Rack" class="popup"><i class="icon icon-Search"></i></a></li>
                        </ul>
                        <div class="row m0">
                            <a href="projects-details.html"><h3>Kitchken renovation</h3></a>
                            <p>Wood Work of Racks</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xs-6 project indoor manufacturing  wood_supply">
                <div class="project-img">
                    <img src="{{base_url()}}assets/main/images/project_1/4.jpg" alt="">
                    <div class="project-text">
                        <ul class="list-unstyled">
                            <li><a href="projects-details.html"><i class="icon icon-Linked"></i></a></li>
                            <li><a href="images/project_1/4.jpg" data-source="projects-details.html" title="KITCHKEN RENOVATION" data-desc="Wood Work of Rack" class="popup"><i class="icon icon-Search"></i></a></li>
                        </ul>
                        <div class="row m0">
                            <a href="projects-details.html"><h3>Kitchken renovation</h3></a>
                            <p>Wood Work of Racks</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-xs-6 project manufacturing repairing indoor">
                <div class="project-img">
                    <img src="{{base_url()}}assets/main/images/project_1/3.jpg" alt="">
                    <div class="project-text">
                        <ul class="list-unstyled">
                            <li><a href="projects-details.html"><i class="icon icon-Linked"></i></a></li>
                            <li><a href="images/project_1/3.jpg" data-source="projects-details.html" title="KITCHKEN RENOVATION" data-desc="Wood Work of Rack" class="popup"><i class="icon icon-Search"></i></a></li>
                        </ul>
                        <div class="row m0">
                            <a href="projects-details.html"><h3>Kitchken renovation</h3></a>
                            <p>Wood Work of Racks</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-xs-6 project repairing">
                <div class="project-img">
                    <img src="{{base_url()}}assets/main/images/project_1/7.jpg" alt="">
                    <div class="project-text">
                        <ul class="list-unstyled">
                            <li><a href="projects-details.html"><i class="icon icon-Linked"></i></a></li>
                            <li><a href="images/project_1/7.jpg" data-source="projects-details.html" title="KITCHKEN RENOVATION" data-desc="Wood Work of Rack" class="popup"><i class="icon icon-Search"></i></a></li>
                        </ul>
                        <div class="row m0">
                            <a href="projects-details.html"><h3>Kitchken renovation</h3></a>
                            <p>Wood Work of Racks</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-xs-6 project wood_supply ">
                <div class="project-img">
                    <img src="{{base_url()}}assets/main/images/project_1/8.jpg" alt="">
                    <div class="project-text">
                        <ul class="list-unstyled">
                            <li><a href="projects-details.html"><i class="icon icon-Linked"></i></a></li>
                            <li><a href="images/project_1/8.jpg" data-source="projects-details.html" title="KITCHKEN RENOVATION" data-desc="Wood Work of Rack" class="popup"><i class="icon icon-Search"></i></a></li>
                        </ul>
                        <div class="row m0">
                            <a href="projects-details.html"><h3>Kitchken renovation</h3></a>
                            <p>Wood Work of Racks</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-xs-6 project indoor">
                <div class="project-img">
                    <img src="{{base_url()}}assets/main/images/project_1/5.jpg" alt="">
                    <div class="project-text">
                        <ul class="list-unstyled">
                            <li><a href="projects-details.html"><i class="icon icon-Linked"></i></a></li>
                            <li><a href="images/project_1/5.jpg" data-source="projects-details.html" title="KITCHKEN RENOVATION" data-desc="Wood Work of Rack" class="popup"><i class="icon icon-Search"></i></a></li>
                        </ul>
                        <div class="row m0">
                            <a href="projects-details.html"><h3>Kitchken renovation</h3></a>
                            <p>Wood Work of Racks</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-xs-6 project hardwood">
                <div class="project-img">
                    <img src="{{base_url()}}assets/main/images/project_1/6.jpg" alt="">
                    <div class="project-text">
                        <ul class="list-unstyled">
                            <li><a href="projects-details.html"><i class="icon icon-Linked"></i></a></li>
                            <li><a href="images/project_1/6.jpg" data-source="projects-details.html" title="KITCHKEN RENOVATION" data-desc="Wood Work of Rack" class="popup"><i class="icon icon-Search"></i></a></li>
                        </ul>
                        <div class="row m0">
                            <a href="projects-details.html"><h3>Kitchken renovation</h3></a>
                            <p>Wood Work of Racks</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xs-6 project indoor wood_supply renovation">
                <div class="project-img">
                    <img src="{{base_url()}}assets/main/images/project_1/10.jpg" alt="">
                    <div class="project-text">
                        <ul class="list-unstyled">
                            <li><a href="projects-details.html"><i class="icon icon-Linked"></i></a></li>
                            <li><a href="images/project_1/10.jpg" data-source="projects-details.html" title="KITCHKEN RENOVATION" data-desc="Wood Work of Rack" class="popup"><i class="icon icon-Search"></i></a></li>
                        </ul>
                        <div class="row m0">
                            <a href="projects-details.html"><h3>Kitchken renovation</h3></a>
                            <p>Wood Work of Racks</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-xs-6 project indoor renovation">
                <div class="project-img">
                    <img src="{{base_url()}}assets/main/images/project_1/9.jpg" alt="">
                    <div class="project-text">
                        <ul class="list-unstyled">
                            <li><a href="projects-details.html"><i class="icon icon-Linked"></i></a></li>
                            <li><a href="images/project_1/9.jpg" data-source="projects-details.html" title="KITCHKEN RENOVATION" data-desc="Wood Work of Rack" class="popup"><i class="icon icon-Search"></i></a></li>
                        </ul>
                        <div class="row m0">
                            <a href="projects-details.html"><h3>Kitchken renovation</h3></a>
                            <p>Wood Work of Racks</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection