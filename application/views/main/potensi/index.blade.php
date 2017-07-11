@extends('main.template')
@section('content')
<!--breadcrumb-->
<section class="row header-breadcrumb sectpad">
    <div class="container">
        <div class="row m0 page-cover">
            <h2 class="page-cover-tittle">Projects 3</h2>
        <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">Projects 3</li>
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
<section class="row latest_projects sectpad projects-3">
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
        <div class="projects3 row m0" id="projects">
            <div class="grid-sizer"></div>
            <div class="project project-listing project-item indoor wood_supply hardwood manufacturing">
                <div class="projects-img col-md-7 col-lg-8">
                    <div class="projects-img-hover">
                        <img src="{{base_url()}}assets/main/images/projects-3/1.jpg" alt="">
                    </div>
                    <a href="projects-details.html" class="projects-button">View details</a>
                </div>                
                <div class="projects-content">
                    <a href="projects-details.html"><h3>Kitchken renovation</h3></a>
                    <h4>Wood Work of Racks</h4>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laud antium, totam rem aperiam, eaque ipsa quae ab illo inventore </p>
                </div>
            </div>
            <div class="project project-listing project-item indoor wood_supply renovation manufacturing">
                <div class="projects-img col-md-7 col-lg-8">
                    <div class="projects-img-hover">
                        <img src="{{base_url()}}assets/main/images/projects-3/2.jpg" alt="">
                    </div>
                    <a href="projects-details.html" class="projects-button">View details</a>
                </div>                
                <div class="projects-content">
                    <a href="projects-details.html"><h3>Kitchken renovation</h3></a>
                    <h4>Wood Work of Racks</h4>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laud antium, totam rem aperiam, eaque ipsa quae ab illo inventore </p>
                </div>
            </div>
            <div class="project project-listing project-item indoor wood_supply hardwood">
                <div class="projects-img col-md-7 col-lg-8">
                    <div class="projects-img-hover">
                        <img src="{{base_url()}}assets/main/images/projects-3/3.jpg" alt="">
                    </div>
                    <a href="projects-details.html" class="projects-button">View details</a>
                </div>                
                <div class="projects-content">
                    <a href="projects-details.html"><h3>Kitchken renovation</h3></a>
                    <h4>Wood Work of Racks</h4>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laud antium, totam rem aperiam, eaque ipsa quae ab illo inventore </p>
                </div>
            </div>
            <div class="project project-listing project-item indoor wood_supply renovation repairing">
                <div class="projects-img col-md-7 col-lg-8">
                    <div class="projects-img-hover">
                        <img src="{{base_url()}}assets/main/images/projects-3/4.jpg" alt="">
                    </div>
                    <a href="projects-details.html" class="projects-button">View details</a>
                </div>                
                <div class="projects-content">
                    <a href="projects-details.html"><h3>Kitchken renovation</h3></a>
                    <h4>Wood Work of Racks</h4>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laud antium, totam rem aperiam, eaque ipsa quae ab illo inventore </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection