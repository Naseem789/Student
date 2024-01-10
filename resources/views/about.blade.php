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
					<li><a href="{{URL::to('/')}}"><i class="fa fa-home"></i> Home</a></li>
					<li>About Us</li>
				</ul>
			</div>
		</div>
	</div>
</div>  
<!--======== /Breadcrumb ===========-->
<!--======== About =================--> 
<section class="about">
	<div class="container">
		<div class="row">
      <div class="col-sm-12 col-lg-9">
        <h5 class="inheading"><span>Welcome to shop</span></h5>
          <div class="row">
            <div class="col-xs-12 col-sm-4 col-lg-4">
              <img src="{{URL::to('public/images/about-us.jpg')}}" alt="About" class="w-100">
            </div>
            <div class="col-xs-12 col-sm-8 col-lg-8">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus venenatis nibh eget rutrum semper. Sed vel felis id quam venenatis interdum eu eget urna. Vestibulum luctus purus ex, ut suscipit nisl pellentesque sit amet.</p>
              <p>Morbi condimentum quam vitae tellus rhoncus, vitae ullamcorper enim cursus. Integer mollis velit nibh, sed sollicitudin lorem congue nec. Sed ut purus suscipit diam laoreet egestas. Morbi sed sodales augue. Curabitur id vulputate erat. </p>
            </div>
          </div>
      </div>
			<div class="col-sm-12 col-lg-3">
        <h5 class="inheading"><span>Why Choose Us</span></h5>
        <ul class="left">
          <li><a href="#">Shipping & Returns</a></li>
          <li><a href="#">Secure Shopping</a></li>
          <li><a href="#">International Shipping</a></li>
          <li><a href="#">Affiliates</a></li>
          <li><a href="#">Group Sales</a></li>
        </ul>
			</div>
      <div class="col-sm-12">
        <div class="legend">
          <h6>Happy customer says</h6>
          <div class=" owl-carousel happyclient">
            <div class="item">
              <p>Dui nibh scelerisque justo, in congue, justo non cursus adipiscing, quis pretium turpis neque eget nulla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur dictum consectetur metus nec dignissim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In congue, justo non cursus adipiscing, dui nibh scelerisque justo non cursus adipiscing, dui nibh scelerisque justo, quis pretium turpis.</p>
              <p class="name"><span>- Join Doe - </span>Social Media Strategist</p>
            </div>
            <div class="item">
              <p>Dui nibh scelerisque justo, in congue, justo non cursus adipiscing, quis pretium turpis neque eget nulla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur dictum consectetur metus nec dignissim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In congue, justo non cursus adipiscing, dui nibh scelerisque justo non cursus adipiscing, dui nibh scelerisque justo, quis pretium turpis.</p>
              <p class="name"><span>- Join Doe - </span>Social Media Strategist</p>
            </div>
            <div class="item">
              <p>Dui nibh scelerisque justo, in congue, justo non cursus adipiscing, quis pretium turpis neque eget nulla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur dictum consectetur metus nec dignissim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In congue, justo non cursus adipiscing, dui nibh scelerisque justo non cursus adipiscing, dui nibh scelerisque justo, quis pretium turpis.</p>
              <p class="name"><span>- Join Doe - </span>Social Media Strategist</p>
            </div>
          </div>
        </div>
      </div>
		</div>
	</div>
</section>
<!--======= /About ==============-->	
<!--========= Footer ============-->
    @include('footer');
<!--======== /Footer =============-->
    @include('script');
</body>  
</html>