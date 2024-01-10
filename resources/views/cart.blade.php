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
                    <li>Cart</li>
                </ul>
            </div>
        </div>
    </div>
</div>  
<!--======== /Breadcrumb ===========-->   
<!--======= Cart ==============-->
<div class="cart">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <!--===== Details ==========-->
        <div class="legend">
          <h6>Shopping Cart</h6>
           <div class="table-responsive"> 
                <table>
                    <tr>
                        <th class="text-center">Image</th>
                        <th>Product Name</th>
                        <th>Model</th>
                        <th>Quantity</th>
                        <th class="text-right">Unit Price</th>
                        <th class="text-right">Total</th>
                    </tr>
                    <tr>
                        <td class="text-center"><a href="#" title="Kielbasa hamburg"><img src="{{URL::to('public/images/tt.jpg')}}" alt="cartimg"></a></td>
                        <td><a href="#">Kielbasa hamburg</a> <br><small>- Select Green</small></td>
                        <td>e19</td>
                        <td>
                            <ul>
                                <li><input type="text" class="inputtext" placeholder="1"></li>
                                <li><button title="Update" data-toggle="tooltip" data-placement="top"><i class="fa fa-refresh"></i></button></li>
                                <li><button title="Remove" data-toggle="tooltip" data-placement="top"><i class="fa fa-trash"></i></button></li>
                            </ul>
                        </td>
                        <td class="text-right">$ 56</td>
                        <td class="text-right">$ 56</td>
                    </tr>
                    <tr>
                        <td class="text-center"><a href="#" title="Kielbasa hamburg"><img src="{{URL::to('public/images/tt.jpg')}}" alt="cartimg"></a></td>
                        <td><a href="#">Kielbasa hamburg</a> <br><small>- Select Green</small></td>
                        <td>e19</td>
                        <td>
                            <ul>
                                <li><input type="text" class="inputtext" placeholder="1"></li>
                                <li><button title="Update" data-toggle="tooltip" data-placement="top"><i class="fa fa-refresh"></i></button></li>
                                <li><button title="Remove" data-toggle="tooltip" data-placement="top"><i class="fa fa-trash"></i></button></li>
                            </ul>
                        </td>
                        <td class="text-right">$ 56</td>
                        <td class="text-right">$ 56</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="legend">
            <h6>What would you like to do next?</h6>
            <div id="accordionone" class="panel-group" role="tablist">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab">
                        <a data-toggle="collapse" data-parent="#accordionone" href="#collapseOne">
                            Use Coupon Code
                        </a>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                      <div class="panel-body">
                       <label class="col-sm-12 col-lg-3 control-label">Enter your coupon here</label>
                            <div class="col-sm-12 col-lg-9">
                                <input name="coupon" value="" placeholder="Enter your coupon here" class="commentext" type="text">
                                <div class="input-group-btn">
                                <input value="Apply Coupon" data-loading-text="Loading..." class="button pull-right" type="button">
                                </div>
                            </div>  
                      </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionone" href="#collapseTwo">
                            Estimate Shipping & Taxes 
                        </a>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                      <div class="panel-body">
                       <p>Enter your destination to get a shipping estimate.</p>
                       <label class="col-sm-12 col-lg-3 control-label">Country</label>
                            <div class="col-sm-12 col-lg-9">
                                <select class="commentext">
                                    <option> --- Please Select --- </option>
                                    <option>Aaland Islands</option>
                                    <option>Afghanistan</option>
                                    <option>Albania</option>
                                    <option>Algeria</option>
                                    <option>American Samoa</option>
                                    <option>Andorra</option>
                                    <option>Angola</option>
                                    <option>Anguilla</option>
                                </select>
                            </div>
                       <label class="col-sm-12 col-lg-3 control-label">Region / State</label>
                            <div class="col-sm-12 col-lg-9">
                                <select class="commentext">
                                    <option> --- Please Select --- </option>
                                    <option>Aaland Islands</option>
                                    <option>Afghanistan</option>
                                    <option>Albania</option>
                                    <option>Algeria</option>
                                    <option>American Samoa</option>
                                    <option>Andorra</option>
                                    <option>Angola</option>
                                    <option>Anguilla</option>
                                </select>
                            </div>
                       <label class="col-sm-12 col-lg-3 control-label">Post Code</label>
                            <div class="col-sm-12 col-lg-9">
                                <input name="coupon" value="" placeholder="Post Code" type="text" class="commentext">
                            </div>
                            <div class="col-sm-12">
                                <button type="button" class="button pull-right">Get Quotes</button>
                            </div>
                      </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionone" href="#collapseThree">
                            Use Gift Certificate 
                        </a>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                      <div class="panel-body">
                        <label class="col-sm-12 col-lg-3 control-label">Enter your gift certificate code here</label>
                            <div class="col-sm-12 col-lg-9">
                                <input name="coupon" value="" placeholder="Enter your gift certificate code here" type="text" class="commentext">
                                <div class="input-group-btn">
                                <input value="Apply Coupon" data-loading-text="Loading..." class="button pull-right" type="button">
                                </div>
                            </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="totaldata">
            <div class="col-sm-12 col-lg-4 col-lg-offset-8 Rpadded">
                <table class="table table-bordered">
                    <tr>
                        <td class="text-right"><strong>Sub-Total:</strong></td>
                        <td class="text-right"><span class="WebRupee"></span>$ 1,100.00</td>
                    </tr>
                    <tr>
                        <td class="text-right"><strong>Eco Tax (-2.00):</strong></td>
                        <td class="text-right"><span class="WebRupee"></span>$ 2.00</td>
                    </tr>
                    <tr>
                        <td class="text-right"><strong>VAT (20%):</strong></td>
                        <td class="text-right"><span class="WebRupee"></span>$ 220.00</td>
                    </tr>
                    <tr>
                        <td class="text-right"><strong>Total:</strong></td>
                        <td class="text-right"><span class="WebRupee"></span>$ 1,322.00</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="endbutton">
            <a href="{{URL::to('/')}}" class="button" title="Continue Shopping">Continue Shopping</a>
            <a href="checkout.html" class="button" title="Checkout">Checkout</a>
        </div>           
      </div>
    </div>
  </div>
</div>
<!--======= /Cart =============-->
<!--========= Footer ============-->
    @include('footer');
<!--======== /Footer =============-->

    @include('script');
</body>  
</html>