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
                    <li>Checkout</li>
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
      <div class="col-sm-12 col-lg-8">
        <!--===== Details ==========-->
        <div class="legend">
          <h6>Personal Information</h6>
            <!--======= Nav tabs ===========-->
          <ul>
            <li class="guest active"><a href="#guest" data-toggle="tab">Order as a guest </a></li>
            <li class="signin"><a href="#sign" data-toggle="tab">Sign In</a></li>
          </ul>
            <!-- Tab panes -->
          <div class="tab-content">
            <!--====== Guest =======-->
            <div class="tab-pane active" id="guest">
              <form>
                <div class="form-control">
                  <label class="col-xs-4 col-sm-4 col-lg-4">
                    Title
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
                  <p class="para">Create an account (optional)<br><b>And save time on your next order!</b></p>
                </div>
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
            <!--====== Sign =======-->
            <div class="tab-pane" id="sign">
              <form>
                <div class="form-control">
                  <label class="col-sm-12 col-lg-4">
                    Email
                  </label>
                  <div class="col-sm-12 col-lg-8">
                    <input type="text" name="email">
                  </div>
                </div>
                <div class="form-control">
                  <label class="col-sm-12 col-lg-4">
                    Password
                  </label>
                  <div class="col-sm-12 col-lg-8">
                    <input type="password" name="Password">
                    <a class="para">Forgot Password</a>
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
        <!--===== Address ==========-->
        <div class="legend disable">
          <h6>Address</h6>
          <form>
            <div class="form-control">
              <label class="col-sm-12 col-lg-4">
                Company
              </label>
              <div class="col-sm-12 col-lg-8">
                <input type="text" name="company" class="textprop">
              </div>
            </div>
            <div class="form-control">
              <label class="col-sm-12 col-lg-4">
                Address 1* 
              </label>
              <div class="col-sm-12 col-lg-8">
                <input type="text" name="address1" class="textprop">
              </div>
            </div>
            <div class="form-control">
              <label class="col-sm-12 col-lg-4">
                Address 2* 
              </label>
              <div class="col-sm-12 col-lg-8">
                <input type="text" name="address2" class="textprop">
              </div>
            </div>
            <div class="form-control">
              <label class="col-sm-12 col-lg-4">
                City* 
              </label>
              <div class="col-sm-12 col-lg-8">
                <input type="text" name="city" class="textprop">
              </div>
            </div>
            <div class="form-control">
              <label class="col-sm-12 col-lg-4">
                Postal Code* 
              </label>
              <div class="col-sm-12 col-lg-8">
                <input type="text" name="code" class="textprop">
              </div>
            </div>
            <div class="form-control">
              <label class="col-sm-12 col-lg-4">
                State* 
              </label>
              <div class="col-sm-12 col-lg-8">
                <input type="text" name="state" class="textprop">
              </div>
            </div>
            <div class="form-control">
              <label class="col-sm-12 col-lg-4">
                Country* 
              </label>
              <div class="col-sm-12 col-lg-8">
                <input type="text" name="country" class="textprop">
              </div>
            </div>
            <div class="form-control">
              <label class="col-sm-12 col-lg-4">
                Invoice 
              </label>
              <div class="col-sm-12 col-lg-8">
                <input type="checkbox" id="invoice" name="gender" class="textprop">
                <label for="invoice" class="checkbox invoice">Use this address for invoice too</label>
              </div>
            </div>
            <div class="form-control last">
              <div class="col-sm-12 text-right">
                <input type="submit" value="continue" class="button">
              </div>
            </div>
          </form>
        </div> 
        <!--===== Shipping Method ==========-->
        <div class="legend disable">
          <h6>Shipping Method</h6>
          <form>
            <div class="form-control">
              <label class="col-sm-12 col-lg-4">
                Shipping Rate
              </label>
              <div class="col-sm-12 col-lg-8">
                <input type="radio" id="flat" name="flat" class="textprop">
                <label for="flat" class="radio">Flat Shipping Rate - £3.81 </label>
              </div>
            </div>
            <div class="form-control last">
              <div class="col-sm-12 text-right">
                <input type="submit" value="continue" class="button">
              </div>
            </div>
          </form>
        </div> 
        <!--===== Payment ==========-->
        <div class="legend disable">
          <h6>Payment</h6>
          <form>
            <div class="form-control">
              <label class="col-sm-12 col-lg-4">
                COD
              </label>
              <div class="col-sm-12 col-lg-8">
                <input type="radio" id="cod" name="cod" class="textprop">
                <label for="cod" class="radio">Cash On Delivery</label>
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
      <div class="col-sm-12 col-lg-4">
        <div class="legend">
          <h6>Shopping Cart</h6>
          <a class="para cartitem" title="Item">1 Items</a>
          <div class="cartbox">
            <table>
              <tbody>
                <tr>
                  <td><img src="{{URL::to('public/images/tt.jpg')}}" alt="hamburg"></td>
                  <td>Kielbasa hamburg</td>
                  <td>$50.99</td>
                </tr>
                <tr>
                  <td><img src="{{URL::to('public/images/tt.jpg')}}" alt="hamburg"></td>
                  <td>Kielbasa hamburg</td>
                  <td>$50.99</td>
                </tr>
                <tr>
                  <td><img src="{{URL::to('public/images/tt.jpg')}}" alt="hamburg"></td>
                  <td>Kielbasa hamburg</td>
                  <td>$50.99</td>
                </tr>
              </tbody>
            </table>
          </div>
          <table>
            <tbody>
              <tr>
                <td>SubTotal</td>
                <td><b>$50.99</b></td>
              </tr>
              <tr>
                <td>Shipping</td>
                <td><b>$5.00</b></td>
              </tr>
            </tbody>
          </table>
          <table class="ltable">
            <tbody>
              <tr>
                <td>Total (tax excl.)</td>
                <td><b>$50.99</b></td>
              </tr>
              <tr>
                <td>Taxes</td>
                <td><b>$5.00</b></td>
              </tr>
            </tbody>
          </table>
        </div>
        <ul class="secure">
          <li><i class="fa fa-shield fa-2x"></i> Security policy (edit with Customer reassurance module)</li>
          <li><i class="fa fa-truck fa-2x"></i> Delivery policy (edit with Customer reassurance module)</li>
          <li><i class="fa fa-exchange fa-2x"></i> Return policy (edit with Customer reassurance module)</li>
        </ul>
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