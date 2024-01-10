<!DOCTYPE HTML>
<html lang="en">
<head>
    @include('head');
</head>
<body>
    @include('header'); 
<!--========== Breadcrumb ==========-->
<div class="breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-left">
                <ul>
                    <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
                    <li>Listing Left</li>
                </ul>
            </div>
        </div>
    </div>
</div>  
<!--======== /Breadcrumb ===========-->
<!--======== Category ============-->
<section class="incategory">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-3">
                <div class="lcate">
                    <h6>Categories</h6>
                    <ul>
                        <li class="submenu"><a>Fashion<span><i class="fa fa-angle-down"></i></span></a>
                            <ul>
                                <li class="submenu"><a>Man</a>
                                    <ul>
                                        <li><a href="#">Jeans</a></li>
                                        <li><a href="#">T-Shirt</a></li>
                                        <li><a href="#">Shirt</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Woman</a></li>
                                <li><a href="#">Bag</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Trending <span>(69)</span></a></li>
                        <li><a href="#">New Arrivals <span>(70)</span></a></li>
                        <li><a href="#">Flowerpot<span>(25)</span></a></li>
                        <li><a href="#">Cups<span>(30)</span></a></li>
                        <li><a href="#">Beauty<span>(63)</span></a></li>
                        <li><a href="#">Wall Hook <span>(69)</span></a></li>
                        <li class="proall"><a href="#">Product All</a></li>
                    </ul>
                </div>
                <div class="lcate">
                    <h6>Color</h6>
                    <ul class="color">
                        <li><input type="radio" name="color" id="coll1"><label for="coll1">LightSalmon <span>13</span></label></li>
                        <li><input type="radio" name="color" id="coll2"><label for="coll2">Dark Salmon <span>23</span></label></li>
                        <li><input type="radio" name="color" id="coll3"><label for="coll3">Tomato <span>5</span></label></li>
                        <li><input type="radio" name="color" id="coll4"><label for="coll4">Deep Sky Blue<span>10</span></label></li>
                        <li><input type="radio" name="color" id="coll5"><label for="coll5">Electric Purple<span>9</span></label></li>
                        <li><input type="radio" name="color" id="coll6"><label for="coll6">Atlantis<span>11</span></label></li>
                        <li><input type="radio" name="color" id="coll7"><label for="coll7">Deep Lilac <span>4</span></label></li>
                    </ul>
                </div>
                <div class="lcate">
                    <h6>Filter By Price</h6>
                    <div class="filter">
                       <input type="hidden" id="range_46" class="irs-hidden-input">
                       <a href="#" class="button">Filter</a>
                    </div>
                </div>
                
                <div class="lcate">
                    <div class="lcateimg">
                        <a href="#">
                            <img src="{{URL::to('public/images/cate.jpg')}}" alt="cartgory" class="img-responsive">
                        </a>
                        <div class="inover">
                            <h3>Sale<br> 50%<br> Off</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-9">
                <div class="col-sm-12 padded">
                    <img src="{{URL::to('public/images/img-cate.jpg')}}" alt="Banner">
                </div>
                <div class="col-sm-12 padded">
                    <ul class="iconbar">
                        <li class="gridview"><a class="active" data-toggle="tooltip" data-placement="top" title="gridview"><i class="fa fa-th-large"></i></a></li>
                        <li class="listview"><a data-toggle="tooltip" data-placement="top" title="listview"><i class="fa fa-list-ul"></i></a></li>
                        <li>Showing 01-09 of 17 Results</li>
                    </ul>
                </div>
                <!--===== Largepage =========-->
                <div class="product">
                    <div class="col-sm-12 col-lg-3 item">
                        <span class="new">New</span>
                        <ul class="viewcart">
                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Cart"><i class="fa fa-cart-plus"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Compare"><i class="fa fa-refresh"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Click to View"><i class="fa fa-eye"></i></a></li>
                        </ul>
                        <a href="#" class="proimg">
                            <img src="{{URL::to('public/images/shirt.jpg')}}" alt="shirt" class="normal">
                            <img src="{{URL::to('public/images/shirthover.jpg')}}" alt="shirt" class="hoverimg">
                        </a>
                        <ul class="rating">
                            <li class="active"><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                        <p>Black Pants & Shirt</p>
                        <p class="price"><span>$150</span><span class="del">$450</span></p>
                        <div class="catedetail">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <button class="button"><i class="fa fa-heart-o"></i>Add to wish list</button>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-3 item">
                        <ul class="viewcart">
                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Cart"><i class="fa fa-cart-plus"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Compare"><i class="fa fa-refresh"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Click to View"><i class="fa fa-eye"></i></a></li>
                        </ul>
                        <a href="#" class="proimg">
                            <img src="{{URL::to('public/images/skirt.jpg')}}" alt="skirt" class="normal">
                            <img src="{{URL::to('public/images/skirthover.jpg')}}" alt="skirt" class="hoverimg">
                        </a>
                        <ul class="rating">
                            <li class="active"><i class="fa fa-star"></i></li>
                            <li class="active"><i class="fa fa-star"></i></li>
                            <li class="active"><i class="fa fa-star"></i></li>
                            <li class="active"><i class="fa fa-star"></i></li>
                            <li class="active"><i class="fa fa-star"></i></li>
                        </ul>
                        <p>Beautiful stylish skirt</p>
                        <p class="price"><span>$250</span><!-- <span class="del">$650</span> --></p>
                        <div class="catedetail">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <button class="button"><i class="fa fa-heart-o"></i>Add to wish list</button>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-3 item">
                        <ul class="viewcart">
                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Cart"><i class="fa fa-cart-plus"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Compare"><i class="fa fa-refresh"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Click to View"><i class="fa fa-eye"></i></a></li>
                        </ul>
                        <a href="#" class="proimg">
                            <img src="{{URL::to('public/images/wearing.jpg')}}" alt="wearing" class="normal">
                            <img src="{{URL::to('public/images/wearinghover.jpg')}}" alt="wearing" class="hoverimg">
                        </a>
                        <ul class="rating">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                        <p>Pretty Dress</p>
                        <p class="price"><span>$350</span><span class="del">$450</span></p>
                        <div class="catedetail">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <button class="button"><i class="fa fa-heart-o"></i>Add to wish list</button>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-3 item last">
                        <span class="new">25%</span>
                        <ul class="viewcart">
                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Cart"><i class="fa fa-cart-plus"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Compare"><i class="fa fa-refresh"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Click to View"><i class="fa fa-eye"></i></a></li>
                        </ul>
                        <a href="#" class="proimg">
                            <img src="{{URL::to('public/images/trouser.jpg')}}" alt="trouser" class="normal">
                            <img src="{{URL::to('public/images/trouserhover.jpg')}}" alt="trouser" class="hoverimg">
                        </a>
                        <ul class="rating">
                            <li class="active"><i class="fa fa-star"></i></li>
                            <li class="active"><i class="fa fa-star"></i></li>
                            <li class="active"><i class="fa fa-star"></i></li>
                            <li class="active"><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                        <p>trouser</p>
                        <p class="price"><span>$1050</span><!-- <span class="del">$650</span> --></p>
                        <div class="catedetail">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <button class="button"><i class="fa fa-heart-o"></i>Add to wish list</button>
                        </div>
                    </div>
                </div>
                <div class="product">
                    <div class="col-sm-12 col-lg-3 item">
                        <span class="new">New</span>
                        <ul class="viewcart">
                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Cart"><i class="fa fa-cart-plus"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Compare"><i class="fa fa-refresh"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Click to View"><i class="fa fa-eye"></i></a></li>
                        </ul>
                        <a href="#" class="proimg">
                            <img src="{{URL::to('public/images/shirt.jpg')}}" alt="shirt" class="normal">
                            <img src="{{URL::to('public/images/shirthover.jpg')}}" alt="shirt" class="hoverimg">
                        </a>
                        <ul class="rating">
                            <li class="active"><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                        <p>Black Pants & Shirt</p>
                        <p class="price"><span>$150</span><span class="del">$450</span></p>
                        <div class="catedetail">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <button class="button"><i class="fa fa-heart-o"></i>Add to wish list</button>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-3 item">
                        <ul class="viewcart">
                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Cart"><i class="fa fa-cart-plus"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Compare"><i class="fa fa-refresh"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Click to View"><i class="fa fa-eye"></i></a></li>
                        </ul>
                        <a href="#" class="proimg">
                            <img src="{{URL::to('public/images/skirt.jpg')}}" alt="skirt" class="normal">
                            <img src="{{URL::to('public/images/skirthover.jpg')}}" alt="skirt" class="hoverimg">
                        </a>
                        <ul class="rating">
                            <li class="active"><i class="fa fa-star"></i></li>
                            <li class="active"><i class="fa fa-star"></i></li>
                            <li class="active"><i class="fa fa-star"></i></li>
                            <li class="active"><i class="fa fa-star"></i></li>
                            <li class="active"><i class="fa fa-star"></i></li>
                        </ul>
                        <p>Beautiful stylish skirt</p>
                        <p class="price"><span>$250</span><!-- <span class="del">$650</span> --></p>
                        <div class="catedetail">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <button class="button"><i class="fa fa-heart-o"></i>Add to wish list</button>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-3 item">
                        <ul class="viewcart">
                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Cart"><i class="fa fa-cart-plus"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Compare"><i class="fa fa-refresh"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Click to View"><i class="fa fa-eye"></i></a></li>
                        </ul>
                        <a href="#" class="proimg">
                            <img src="{{URL::to('public/images/wearing.jpg')}}" alt="wearing" class="normal">
                            <img src="{{URL::to('public/images/wearinghover.jpg')}}" alt="wearing" class="hoverimg">
                        </a>
                        <ul class="rating">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                        <p>Pretty Dress</p>
                        <p class="price"><span>$350</span><span class="del">$450</span></p>
                        <div class="catedetail">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <button class="button"><i class="fa fa-heart-o"></i>Add to wish list</button>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-3 item last">
                        <span class="new">25%</span>
                        <ul class="viewcart">
                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Cart"><i class="fa fa-cart-plus"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Compare"><i class="fa fa-refresh"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Click to View"><i class="fa fa-eye"></i></a></li>
                        </ul>
                        <a href="#" class="proimg">
                            <img src="{{URL::to('public/images/trouser.jpg')}}" alt="trouser" class="normal">
                            <img src="{{URL::to('public/images/trouserhover.jpg')}}" alt="trouser" class="hoverimg">
                        </a>
                        <ul class="rating">
                            <li class="active"><i class="fa fa-star"></i></li>
                            <li class="active"><i class="fa fa-star"></i></li>
                            <li class="active"><i class="fa fa-star"></i></li>
                            <li class="active"><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                        <p>trouser</p>
                        <p class="price"><span>$1050</span><!-- <span class="del">$650</span> --></p>
                        <div class="catedetail">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <button class="button"><i class="fa fa-heart-o"></i>Add to wish list</button>
                        </div>
                    </div>
                </div>
                <!--======== Pagenation ======-->
                <div class="col-sm-12">
                    <ul class="page"> 
                        <li><a href="#"><i class="fa fa-long-arrow-left"></i> Previous</a></li>
                        <li><a class="active" href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">Next <i class="fa fa-long-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--======== /Category ============-->
    @include('footer');
    @include('script');
</body>  
</html>