<!-- ======== Switch Color  =================-->
<div class="switch-color">
    <div class="icon"><i class="fa fa-cog fa-spin fa-2x"></i></div>
    <div class="box">
        <h4>color</h4>
        <ul>
            <li><a href="#" data-switch-color="green"  class="colorstyle" style="background-color:#95c41F;"></a></li>
            <li><a href="#" data-switch-color="pink"  class="colorstyle" style="background-color:#ff2761;"></a></li>
            <li><a href="#" data-switch-color="orange"  class="colorstyle" style="background-color:#f76d2b;"></a></li> 
            <li><a href="#" data-switch-color="red"  class="colorstyle" style="background-color:#de302f;"></a></li>
            <li><a href="#" data-switch-color="purple"  class="colorstyle" style="background-color:#6054c2;"></a></li> 
        </ul>
        <ul>
           <li><a href="#" data-switch-color="skyblue"  class="colorstyle" style="background-color:#2196f3;"></a></li> 
           <li><a href="#" data-switch-color="darkgreen"  class="colorstyle" style="background-color:#07895a;"></a></li> 
           <li><a href="#" data-switch-color="darkblue"  class="colorstyle" style="background-color:#3b44ff;"></a></li> 
           <li><a href="#" data-switch-color="darkgrey"  class="colorstyle" style="background-color:#838060;"></a></li> 
           <li><a href="#" data-switch-color="turquoise"  class="colorstyle" style="background-color:#08ded4;"></a></li> 
        </ul>
    </div>
</div>
<!--======== /Switch Color  =================-->
<!--======== Fix Button  =================-->
<ul class="fixbutton">
  <li><a href="#categorie" data-toggle="modal"><span>Categories</span><i class="fa fa-align-justify"></i></a></li>
  <li><a href="{{URL::to('Cart')}}" target="_blank"><span>Cart</span><i class="fa fa-shopping-cart"></i></a></li>
  <li><a href="#views" data-toggle="modal"><span>Recent View</span><i class="fa fa-eye"></i></a></li>
  <li><a class="scrollup"><span>Go to Top</span><i class="fa fa-angle-double-up"></i></a></li>  
</ul>
<!--======== /Fix Button  =================-->
<!--========= Header =============--> 
<header>
    <!--====== Tophead ========--> 
    <nav class="tophead">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-lg-5">
                    <ul class="hlogin">
                        <li><a href="{{URL::to('Auth/login')}}" title="Login"><i class="fa fa-lock"></i>Login</a></li>
                        <li><a href="{{URL::to('Auth/register')}}" title="Register"><i class="fa fa-user"></i>Register</a></li>
                    </ul>
                </div>
                <div class="col-xs-6 col-sm-6 col-lg-7 text-right">
                    <ul>
                        <li><a href="{{URL::to('Wish')}}" title="Wish List"><i class="fa fa-shopping-basket"></i>Wish List</a></li>
                        <li><a href="{{URL::to('Checkout')}}" title="Checkout"><i class="fa fa-share"></i>Checkout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!--======== /Tophead ======--> 
    <!--======== Midhead ========--> 
    <div class="midhead">
        <div class="container">
            <div class="row">
                <!-- Searchbox -->
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <a href="{{URL::to('/')}}" title="Online Fashion | Home">
                        <img src="{{URL::to('public/images/student_logo.jpg')}}" height="40px" width="130px" alt="Pcube Online Fashion">
                    </a>
                </div>
                <!-- /Searchbox -->
                <!-- Logo -->
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-4 text-center">
                    <div class="search">
                        <input type="search" name="search" placeholder="search">
                        <button type="button"><i class="fa fa-search"></i></button>
                    </div>
                </div>
                <!-- /Logo -->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5 text-right">
                    <!-- Call -->
                    <div class="cartbox">
                        <i class="fa fa-phone fa-2x"></i>
                        <span><b>+91 8929820320</b></span>
                        <span>We are open 7 am - 7pm</span>
                    </div>
                    <!-- /Call -->
                    <!-- Basket -->
                    <div class="cartbox basket">
                        <i class="fa fa-cart-plus fa-2x"></i>
                        <span><b>Shopping Cart</b></span>
                        <span>2 Item <i class="fa fa-angle-down"></i></span>
                        <ul class="shopdata">
                            <li class="cartempty">
                                <table>
                                    <tr>
                                        <td><a href="#">Your Cart Empty</a></td>
                                    </tr>
                                </table>
                            </li>
                            <li class="cartfull">
                                <table>
                                    <tr>
                                        <td><a href="#"><img src="{{URL::to('public/images/tt.jpg')}}" alt="imgname"></a></td>
                                        <td><a href="#">Kielbasa hamburg</a> <br> - <small>Select Green</small></td>
                                        <td>X <br>1</td>
                                        <td>$ 56</td>
                                        <td><a href="#" data-toggle="tooltip" data-placement="top" title="delete"><i class="fa fa-trash"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="#"><img src="{{URL::to('public/images/tt.jpg')}}" alt="imgname"></a></td>
                                        <td><a href="#">Kielbasa hamburg</a> <br> - <small>Select Green</small></td>
                                        <td>X <br>1</td>
                                        <td>$ 56</td>
                                        <td><a href="#" data-toggle="tooltip" data-placement="top" title="delete"><i class="fa fa-trash"></i></a></td>
                                    </tr>
                                </table>
                            </li>
                            <li class="cartbutton">
                                <a href="{{URL::to('Cart')}}" title="View">View Cart</a>
                                <a href="{{URL::to('Checkout')}}" title="Checkout">Checkout</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /Basket -->
                </div>
            </div>
        </div>
    </div>
    <!--======= /Midhead =========-->
    <!--========= Menu ===========--> 
    <div class="menu">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <a class="mobile"><i class="fa fa-bars fa-2x"></i>Menu</a>
                    <ul>
                        <li><a class="closemenu">close</a></li>
                        <li class="singlesub">
                            <a class="active" href="{{URL::to('/')}}" title="Home">Home</a>
                        </li>
                        <li><a href="{{URl::to('About')}}" title="About">About</a></li>
                        <li class="singlesub"><a href="{{URL::to('Services')}}" title="Services">Services</a>
                        <li><a href="javascript:void(0)" title="Category">Categories<i class="fa fa-angle-down"></i></a>
                            <!-- SUBMENU -->
                            <div class="submenus">
                                <ul class="col-sm-12 col-lg-3">
                                    <li>Stationary</li>
                                    <li><a href="listing-left.html" title="Clothing">Pen</a></li>
                                    <li><a href="listing-left.html" title="Handbags">Pencil</a></li>
                                    <li><a href="listing-left.html" title="Maternity">Eraser</a></li>
                                    <li><a href="listing-left.html" title="Footwear">Sharpner</a></li>
                                    <li><a href="listing-left.html" title="Jeans">Geomatry Box</a></li>
                                    <li><a href="listing-left.html" title="Jeans">Art Color</a></li>
                                    <li><a href="listing-left.html" title="Jeans">Copy</a></li>
                                    <li><a href="listing-left.html" title="Jeans">Books</a></li>
                                </ul>
                                <ul class="col-sm-12 col-lg-3">
                                    <li>Gift</li>
                                    <li><a href="listing-left.html" title="Car body cover">Diary</a></li>
                                    <li><a href="listing-left.html" title="Bike body cove">Photoframe</a></li>
                                    <li><a href="listing-left.html" title="Car air freshner">Home Decor</a></li>
                                    <li><a href="listing-left.html" title="Vehicle washing & cleaning">Flower</a></li>
                                    <li><a href="listing-left.html" title="Car Sun Shade">Griting Cards</a></li>
                                    <li><a href="listing-left.html" title="Car Mat">Other</a></li>
                                </ul>
                                <ul class="col-sm-12 col-lg-3">
                                    <li>Sports</li>
                                    <li><a href="listing-left.html" title="Cricket">Cricket</a></li>
                                    <li><a href="listing-left.html" title="Badminton">Badminton</a></li>
                                    <li><a href="listing-left.html" title="Football">Football</a></li>
                                    <li><a href="listing-left.html" title="Skating">Vollyboll</a></li>
                                    <li><a href="listing-left.html" title="Cycling">Caremboard</a></li>
                                    <li><a href="listing-left.html" title="Swimmimg">Ludo & Chess Board</a></li>
                                </ul>
                                <ul class="col-sm-12 col-lg-3">
                                    <li>Others</li>
                                    <li><a href="listing-left.html" title="Western Wear">Western Wear</a></li>
                                    <li><a href="listing-left.html" title="Ethnic Wear">Ethnic Wear</a></li>
                                    <li><a href="listing-left.html" title="Footwear">Footwear</a></li>
                                    <li><a href="listing-left.html" title="Beauty & Grooming">Beauty & Grooming</a></li>
                                    <li><a href="listing-left.html" title="Winter & Seasonal Wear">Winter & Seasonal Wear</a></li>
                                    <li><a href="listing-left.html" title="Jewellery">Jewellery</a></li>
                                </ul>
                            </div>
                            <!-- /SUBMENU -->
                        </li>
                        <li><a href="{{URL::to('Shop')}}" title="Shop">Shop</a></li>
                        </li>
                        <li class="singlesub"><a href="{{URL::to('Blog')}}" title="Blog">Blog</a>
                        </li>
                        <li><a href="{{URL::to('Contact')}}" title="Contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--========= /Menu =========--> 
</header> 
<!--========== /Header ==========