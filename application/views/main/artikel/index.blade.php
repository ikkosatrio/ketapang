@extends('main.template')
@section('content')
<!--breadcrumb-->
<section class="row header-breadcrumb">
    <div class="container">
        <div class="row m0 page-cover">
            <h2 class="page-cover-tittle">Artikel</h2>
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">Blog V1</li>
            </ol>
        </div>
    </div>
</section>


<!--blog-details-->
<section class="row blog_content">
    <div class="container">
        <div class="row sectpad">
            <div class="blog_section col-lg-8">
                <!--Blog-->
                <div class="row blog">
                    <div class="featured_img row m0">
                        <a href="{{base_url('main/artikel/1')}}"><img src="{{base_url()}}assets/main/images/blogs/1.jpg" alt="" class="img-responsive"></a>                    
                    </div>
                    <div class="post-contents row m0">
                        <a href="blog-details.html" class="post-date">20<span>June</span></a>
                        <h4 class="post-title"><a href="blog-details.html">Services that we offers </a></h4>
                        <ul class="post-meta nav">
                            <li><i class="fa fa-user"></i>By: <a href="#">Admin</a></li>
                            <li><i class="fa fa-tag"></i><a href="#">Exterior Furniture Tips</a></li>
                            <li><i class="fa fa-comments"></i>Comments: <a href="#">8</a></li>
                        </ul>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consect etur, adipisci velit.</p>
                        <a href="blog-details.html" class="read-more submit">read more</a>
                    </div>
                </div>
                <div class="row blog">
                    <div class="featured_img row m0">
                        <a href="blog-details.html"><img src="{{base_url()}}assets/main/images/blogs/blog1.jpg" alt="" class="img-responsive"></a>                    
                    </div>
                    <div class="post-contents row m0">
                        <a href="blog-details.html" class="post-date">20<span>June</span></a>
                        <h4 class="post-title"><a href="blog-details.html">Services that we offers </a></h4>
                        <ul class="post-meta nav">
                            <li><i class="fa fa-user"></i>By: <a href="#">Admin</a></li>
                            <li><i class="fa fa-tag"></i><a href="#">Exterior Furniture Tips</a></li>
                            <li><i class="fa fa-comments"></i>Comments: <a href="#">8</a></li>
                        </ul>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consect etur, adipisci velit.</p>
                        <a href="blog-details.html" class="read-more submit">read more</a>
                    </div>
                </div>
                <div class="row blog">
                    <div class="featured_img row m0">
                        <a href="blog-details.html"><img src="{{base_url()}}assets/main/images/blogs/blog2.jpg" alt="" class="img-responsive"></a>                    
                    </div>
                    <div class="post-contents row m0">
                        <a href="blog-details.html" class="post-date">20<span>June</span></a>
                        <h4 class="post-title"><a href="blog-details.html">Services that we offers </a></h4>
                        <ul class="post-meta nav">
                            <li><i class="fa fa-user"></i>By: <a href="#">Admin</a></li>
                            <li><i class="fa fa-tag"></i><a href="#">Exterior Furniture Tips</a></li>
                            <li><i class="fa fa-comments"></i>Comments: <a href="#">8</a></li>
                        </ul>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consect etur, adipisci velit.</p>
                        <a href="blog-details.html" class="read-more submit">read more</a>
                    </div>
                </div>
                <ul class="pagination">
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li class="next"><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                </ul>
            </div>
            <div class="sidebar_section col-lg-4">
                <div class="sidebar row m0">
                    <div class="row widget widget-search">
                        <div class="row widget-inner">
                            <form action="#" class="search-form" method="get">
                                <div class="input-group">
                                    <input type="search" class="form-control" placeholder="Enter Search keywords">
                                    <span class="input-group-addon">
                                        <button type="submit"><i class="icon icon-Search"></i></button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div> <!--Search-->
                    <div class="row widget widget-categories">
                        <h4 class="widget-title">Categories</h4>
                        <div class="row widget-inner">
                            <ul class="nav categories">
                                <li><a href="#"><i class="fa fa-angle-right"></i>Interior Furniture Manfacturing</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Reparing of Wooden Almerah</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Hardwood Flooring</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Renovaion of office furnitures</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Make Quality Products</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Renovation of Kitchen</a></li>
                            </ul>
                        </div>
                    </div> <!--Categories-->
                    <div class="row widget widget-popular-posts">
                        <h4 class="widget-title">popular posts</h4>
                        <div class="row widget-inner">
                            <div class="media popular-post">
                                <div class="media-left"><a href="single.html"><img src="{{base_url()}}assets/main/images/blogs/post1.jpg" alt=""></a></div>
                                <div class="media-body">
                                    <h5 class="post-title"><a href="blog-details.html">Neque porro quisua mest qui dolorem.</a></h5>
                                    <h5 class="post-date"><a href="blog-details.html">20 june</a></h5>                            
                                </div>
                            </div> <!--Popular Post-->
                            <div class="media popular-post">
                                <div class="media-left"><a href="blog-details.html"><img src="{{base_url()}}assets/main/images/blogs/post2.jpg" alt=""></a></div>
                                <div class="media-body">
                                    <h5 class="post-title"><a href="blog-details.html">Neque porro quisua mest qui dolorem.</a></h5>
                                    <h5 class="post-date"><a href="blog-details.html">20 june</a></h5>                            
                                </div>
                            </div> <!--Popular Post-->
                            <div class="media popular-post">
                                <div class="media-left"><a href="blog-details.html"><img src="{{base_url()}}assets/main/images/blogs/post3.jpg" alt=""></a></div>
                                <div class="media-body">
                                    <h5 class="post-title"><a href="blog-details.html">Neque porro quisua mest qui dolorem.</a></h5>
                                    <h5 class="post-date"><a href="blog-details.html">20 june</a></h5>                            
                                </div>
                            </div> <!--Popular Post-->
                        </div>
                    </div> <!--Popular Posts-->
                    <div class="row widget text-widget-post">
                        <h4 class="widget-title">Text Widget</h4>
                        <div class="text-widegt widget-inner">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusant ium dolore que laudantium, totam rem aperiam, eaque ipsa quae ab illo inve ntore veritatis et quasi arc</p>
                        </div>
                    </div> <!--Tag Clouds-->
                    <div class="row widget widget-tag-clouds">
                        <h4 class="widget-title">tag clouds</h4>
                        <div class="row widget-inner clouds">
                            <a href="blog-details.html" class="widget-tag">Kitchen Renovation</a>
                            <a href="blog-details.html" class="tag widget-tag active">Tips</a>
                            <a href="blog-details.html" class="widget-tag">Indoor Furniture</a>
                            <a href="blog-details.html" class="tag widget-tag">Repairing</a>
                            <a href="blog-details.html" class="widget-tag">Wood Supply</a>
                            <a href="blog-details.html" class="tag widget-tag">Flooring </a>
                        </div>
                    </div> <!--Tag Clouds-->
                </div>
            </div>
        </div>
    </div>
</section>
@endsection