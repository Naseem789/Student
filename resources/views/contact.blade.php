<!DOCTYPE HTML>
<html lang="en">
<head>
    @include('head');
</head>
<body>
    @include('header');   
<!--======== Services Inner ============-->
<div class="breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-left">
                <ul>
                    <li><a href="{{ URL::to('/')}}"><i class="fa fa-home"></i></a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
</div>  
<section class="contact">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-6">
                <h5 class="inheading"><span>Contact Us</span></h5>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <div class="row">
                    <div class="col-sm-12">
                        <input type="text" name="name" value="" placeholder="Your Name *" >
                    </div>
                    <div class="col-sm-12">
                        <input type="text" name="email" value="" placeholder="Email Address *">
                    </div>
                    <div class="col-sm-12">
                        <textarea placeholder="Enquiry *"></textarea>
                    </div>
                    <div class="col-sm-12">
                        <input type="submit" name="send" value="Submit" class="button">
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3555.208143484797!2d83.45712031436764!3d26.991964763173197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399153dea56aab9b%3A0xf60375da95508b49!2sStudent%20Book%20Center!5e0!3m2!1sen!2sin!4v1662104687021!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>
<!--========== /Services Inner ===============-->	
<!--========= Footer ============-->
    @include('footer');
<!--======== /Footer =============-->

    @include('script');
</body>  
</html>