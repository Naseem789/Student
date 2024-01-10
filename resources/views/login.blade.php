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
                    <li>Login</li>
                </ul>
            </div>
        </div>
    </div>
</div>  
<!--======== /Breadcrumb ===========-->  
<!--======== User =============-->
<section class="affiliate">
    <div class="container">   
        <div class="row">
            <div class="col-sm-12">
                <h5 class="inheading"><span>User Program</span></h5>
                <p>Your Store User program is free and enables members to earn revenue by placing a link or links on their web site which advertises Your Store or specific products on it. Any sales made to customers who have clicked on those links will earn the User commission. The standard commission rate is currently 5%.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-lg-6">
                <div class="legend">
                    <h6>New User</h6>
                    <p>I am not currently an user.</p>
                    <p>Click Continue below to create a new User account. Please note that this is not connected in any way to your User account.</p>
                    <input type="submit" name="submit" value="CONTINUE" class="button">
                </div>
            </div>
            <div class="col-sm-12 col-lg-6">
                <div class="legend">
                    <h6>User Login</h6>
                    <p>I am a returning user.</p>
                    <div class="form-control">
                        <input type="text" name="email" placeholder="User E-Mail">
                    </div>
                    <div class="form-control">
                     <input type="text" name="password" placeholder="Password">
                    </div>
                    <input type="submit" name="submit" value="LOGIN" class="button">
                </div>
            </div>
        </div>
    </div> 
</section>
<!--======== /User =============-->	
    @include('footer');

    @include('script');
</body>  
</html>