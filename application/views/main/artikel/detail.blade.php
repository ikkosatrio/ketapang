@extends('main.template')
@section('content')
<!--breadcrumb-->
<section class="row header-breadcrumb">
    <div class="container">
        <div class="row m0 page-cover">
            <h2 class="page-cover-tittle">Blog details</h2>
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">Blog details</li>
            </ol>
        </div>
    </div>
</section>
<!--blog-details-->
<section class="row blog_content">
    <div class="container">
        <div class="row sectpad">
            <div class="blog_section col-lg-8">
                <div class="row blog blog-details">
                    <div class="featured_img row m0">
                        <img src="{{base_url()}}assets/main/images/blogs/1.jpg" alt="" class="img-responsive">                    
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
                        <br>
                        <h4>Eaque ipsa quae ab illo inventore veritatis et quase</h4>
                        <p>Architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                        <br>
                        <ul class="nav post-list">
                            <li>Dolor sit amet, consectetur</li>
                            <li>Sdipiscing elit,</li>
                            <li>Seddo eiusmod tempor</li>
                            <li>Incididunt ut labore et</li>  
                            <li>Dolor sit amet, consectetur</li>
                            <li>Sdipiscing elit,</li>
                            <li>Seddo eiusmod tempor</li>
                            <li>Incididunt ut labore et</li>
                        </ul>
                        <br>
                        <h3>Two Column texts</h3>
                        <div class="row">
                            <div class="col-sm-6 info">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem ape riam, eaque ipsa quae ab illo invent ore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
                            </div>
                            <div class="col-sm-6 info">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem ape riam, eaque ipsa quae ab illo invent ore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
                            </div>
                        </div>
                        <br>
                        <blockquote>
                            <p>Ut enim ad minima veniam, quis nostrum exercitatio nem ullam corporis suscipit labori osam, nisi ut aliqu id ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur.</p>
                            <footer><a href="#">Michale John</a></footer>
                        </blockquote>
                    </div>
                </div> <!--Blog-->
                <div class="row m0 posts-social">
                    <div class="post-count">Share</div>
                    <ul class="nav social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    </ul>
                </div>
                <div class="row about-post-author">
                    <div class="media author-bio">
                        <div class="media-left">
                            <a href="#"><img src="{{base_url()}}assets/main/images/blogs/admin.jpg" alt="" class="img-responsive"></a>
                        </div>
                        <div class="media-body media-middle">
                            <h4><a href="#">administrator</a></h4>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium, totam rem ape riam, eaque ipsa quae ab illo invent ore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
                        </div>
                    </div>
                </div>
                <div class="comments row">
                    <h3 class="comments_count">Comments (5)</h3>                
                    <div class="media comment">
                        <div class="media-left"><img src="{{base_url()}}assets/main/images/blogs/coments1.jpg" alt=""></div>
                        <div class="media-body">
                            <h5 class="commenter-name">John Michale</h5>
                            <ul class="date-reply nav">
                                <li><a href="#">feb 02 2016</a></li>
                                <li><a href="#">reply</a></li>
                            </ul>
                            <p>Duis aute irure dolor in reprehenderit in vol uptate velit esse cillum dolore eu fugiat nulla pari atur. Excepteur sint occaecat cupidatat non proid pent.</p>
                        </div>
                    </div> <!--Comment-->              
                    <div class="media comment">
                        <div class="media-left"><img src="{{base_url()}}assets/main/images/blogs/coments1.jpg" alt=""></div>
                        <div class="media-body">
                            <h5 class="commenter-name">John Michale</h5>
                            <ul class="date-reply nav">
                                <li><a href="#">feb 02 2016</a></li>
                                <li><a href="#">reply</a></li>
                            </ul>
                            <p>Duis aute irure dolor in reprehenderit in vol uptate velit esse cillum dolore eu fugiat nulla pari atur. Excepteur sint occaecat cupidatat non proid pent.</p>
                        </div>
                    </div> <!--Comment-->              
                    <div class="media comment">
                        <div class="media-left"><img src="{{base_url()}}assets/main/images/blogs/coments1.jpg" alt=""></div>
                        <div class="media-body">
                            <h5 class="commenter-name">John Michale</h5>
                            <ul class="date-reply nav">
                                <li><a href="#">feb 02 2016</a></li>
                                <li><a href="#">reply</a></li>
                            </ul>
                            <p>Duis aute irure dolor in reprehenderit in vol uptate velit esse cillum dolore eu fugiat nulla pari atur. Excepteur sint occaecat cupidatat non proid pent.</p>                       
                            <div class="media comment reply">
                                <div class="media-left"><img src="{{base_url()}}assets/main/images/blogs/coments2.jpg" alt=""></div>
                                <div class="media-body">
                                    <h5 class="commenter-name">John Michale</h5>
                                    <ul class="date-reply nav">
                                        <li><a href="#">feb 02 2016</a></li>
                                        <li><a href="#">reply</a></li>
                                    </ul>
                                    <p>Duis aute irure dolor in reprehenderit in vol uptate velit esse cillum dolore eu fugiat nulla pari atur. Excepteur sint occaecat.</p>
                                </div>
                            </div> <!--Comment-->  
                        </div>
                    </div> <!--Comment-->              
                    <div class="media comment">
                        <div class="media-left"><img src="{{base_url()}}assets/main/images/blogs/coments1.jpg" alt=""></div>
                        <div class="media-body">
                            <h5 class="commenter-name">John Michale</h5>
                            <ul class="date-reply nav">
                                <li><a href="#">feb 02 2016</a></li>
                                <li><a href="#">reply</a></li>
                            </ul>
                            <p>Duis aute irure dolor in reprehenderit in vol uptate velit esse cillum dolore eu fugiat nulla pari atur. Excepteur sint occaecat cupidatat non proid pent.</p>
                        </div>
                    </div> <!--Comment-->
                </div> <!--Comments-->
<!--                    contact-->
                <form action="#" method="post" class="comment_form row m0">
                    <h3 class="leave-comment-title">Leave a Comment</h3>
                    <input type="text" class="form-control">
                    <input type="email" class="form-control">
                    <textarea class="form-control"></textarea>
                    <button type="submit" class="btn btn-primary submit">submit</button>
                </form>
            </div>
            <div class="sidebar_section col-lg-4">
                <div class="sidebar row m0 ">
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
                                    <h5 class="post-title"><a href="single.html">Neque porro quisua mest qui dolorem.</a></h5>
                                    <h5 class="post-date"><a href="#">20 june</a></h5>                            
                                </div>
                            </div> <!--Popular Post-->
                            <div class="media popular-post">
                                <div class="media-left"><a href="single.html"><img src="{{base_url()}}assets/main/images/blogs/post2.jpg" alt=""></a></div>
                                <div class="media-body">
                                    <h5 class="post-title"><a href="single.html">Neque porro quisua mest qui dolorem.</a></h5>
                                    <h5 class="post-date"><a href="#">20 june</a></h5>                            
                                </div>
                            </div> <!--Popular Post-->
                            <div class="media popular-post">
                                <div class="media-left"><a href="single.html"><img src="{{base_url()}}assets/main/images/blogs/post3.jpg" alt=""></a></div>
                                <div class="media-body">
                                    <h5 class="post-title"><a href="single.html">Neque porro quisua mest qui dolorem.</a></h5>
                                    <h5 class="post-date"><a href="#">20 june</a></h5>                            
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
                            <a href="#" class="widget-tag">Kitchen Renovation</a>
                            <a href="#" class="tag widget-tag active">Tips</a>
                            <a href="#" class="widget-tag">Indoor Furniture</a>
                            <a href="#" class="tag widget-tag">Repairing</a>
                            <a href="#" class="widget-tag">Wood Supply</a>
                            <a href="#" class="tag widget-tag">Flooring </a>
                        </div>
                    </div> <!--Tag Clouds-->
                </div>
            </div>
        </div>
    </div>
</section>
@endsection