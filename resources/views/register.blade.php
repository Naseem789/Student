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
                    <li>Register</li>
                </ul>
            </div>
        </div>
    </div>
</div>  
<!--======== /Breadcrumb ===========-->   
<!--======= CHECKOUT ==============-->
<div class="checkout">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <!--===== Details ==========-->
        <div class="legend">
          <h6>Personal Information</h6>
            <!-- Tab panes -->
          <div class="tab-content">
            <!--====== Guest =======-->
              <form>
                <div class="form-control">
                  <label class="col-sm-12 col-lg-4">
                    First name 
                  </label>
                  <div class="col-sm-12 col-lg-8">
                    <input type="text" name="fname" class="textprop">
                  </div>
                </div>
                <div class="form-control">
                  <label class="col-sm-12 col-lg-4">
                    Last name 
                  </label>
                  <div class="col-sm-12 col-lg-8">
                    <input type="text" name="lname" class="textprop">
                  </div>
                </div>
                <div class="form-control">
                  <label class="col-sm-12 col-lg-4">
                    Email
                  </label>
                  <div class="col-sm-12 col-lg-8">
                    <input type="text" name="email" class="textprop">
                  </div>
                </div>
                <div class="form-control">
                  <label class="col-xs-4 col-sm-4 col-lg-4">
                    Gender
                  </label>
                  <div class="col-xs-4 col-sm-4 col-lg-2">
                    <input type="radio" id="mr" name="gender">
                    <label for="mr" class="radio">Male</label>
                  </div>
                  <div class="col-xs-4 col-sm-4 col-lg-2">
                    <input type="radio" id="mrs" name="gender">
                    <label for="mrs" class="radio">Female.</label>
                  </div>
                </div>
                <!-- <div class="form-control">
                  <p class="para">Create an account (optional)<br><b>And save time on your next order!</b></p>
                </div> -->
                <div class="form-control">
                  <label class="col-sm-12 col-lg-4">
                    Password
                  </label>
                  <div class="col-sm-12 col-lg-8">
                    <input type="password" name="Password" class="textprop">
                  </div>
                </div>
                <div class="form-control">
                  <label class="col-sm-12 col-lg-4">
                    Birthdate
                  </label>
                  <div class="col-sm-12 col-lg-8">
                    <input type="text" name="dob" class="textprop" placeholder="MM/DD/YYYY">
                    <p class="example">(E.g.: 05/31/1970)</p>
                    <p><input type="checkbox" name="partner" id="partner"><label for="partner" class="checkbox">Receive offers from our partners</label></p>
                    <p><input type="checkbox" name="notice" id="notice"><label for="notice" class="checkbox">Sign up for our newsletter You may unsubscribe at any moment. For that purpose, please find our contact info in the legal notice.</label></p>
                  </div>
                </div>
                <div class="form-control last">
                  <div class="col-sm-12 text-right">
                    <input type="submit" value="continue" class="button">
                  </div>
                </div>
              </form>
          </div>
        </div>             
      </div>
    </div>
  </div>
</div>
<!--======= /CHECKOUT =============-->
<!--========= Footer ============-->
    @include('footer');
<!--======== /Footer =============-->

    @include('script');
</body>  
</html>