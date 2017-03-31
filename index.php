<?php $geo = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='. $_SERVER["REMOTE_ADDR"]));/* gets geoplugin to enable to geo locator. The plugin will detect users IP and change content accordingly*/
$country = $geo['geoplugin_countryName'];
?>

<!-- . $_SERVER["REMOTE_ADDR"] -->

<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8">
    <title>lookamazing</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link href='//fonts.googleapis.com/css?family=Raleway:400,300,600' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

    <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="stylesheet" href="stylesheets/normalize.css">
    <link rel="stylesheet" href="stylesheets/styles.css">


    <!-- Scripts
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://www.google.com/jsapi" type="text/javascript"></script>
    <script src="javascript/main.js" type="text/javascript"></script>

    <!-- Scripts code for show/hide content
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->


    <script type="text/javascript">
        google.load("jquery", "1.3.2");
    </script>
    <script>
        $(function() {
            $("[name=toggler]").click(function() {
                $('.toHide').hide();
                $("#blk-" + $(this).val()).show('slow');
            });
        });
    </script>

    <!-- End Script
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</head>

<body>
    <div class="container">
        <!-- wrap all content in a container -->

        <!-- Banner with logo
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->

        <section id="banner" role="banner">
            <div class="row">
                <div class="three columns">
                    <img class="logo" src="images/look-fantastic.png">
                </div>
                <div class="nine columns right">
                    <img class="digi" src="images/digi.png">
                    <!-- This logo will be set to display none on mobile-->
                </div>
            </div>
        </section>

        <!-- Delivery / Billing
      –––––––––––––––––––––––––––––––––––––––––––––––––– -->

        <section id="delivery" role="delivery">
            <div class="row">
                <div class="two columns">
                    1)
                </div>
                <div class="ten columns">
                    <h5>Please enter your delivery address</h5>
                    <form>
                        <div class="row">
                            <div class="six columns">
                                <label for="Title">Title</label>
                                <input class="u-full-width" type="email" placeholder="Dr/Mr/Mrs/Miss/Mister">
                                <label for="Title">First Name</label>
                                <input class="u-full-width" type="email" placeholder="Matt">
                                <label for="Title">Last Name</label>
                                <input class="u-full-width" type="email" placeholder="Wagg">
                                <label for="Title">Street Address</label>
                                <input class="u-full-width" type="email" placeholder="123 Fake Street">
                                <!-- PHP script - if country visiting is UK post code will be shown in form fields and United Kingdom will be shown for country -->
                                <?php
                                  if ($country == "United Kingdom") {
                                    echo '<label for="Title">Post Code</label>';
                                    echo '<input class="u-full-width" type="email" placeholder="ABC 123">';
                                  }
                                  else {
                                    /* If country visiting is anything but UK display zip code instead of post code */
                                    echo '<label for="Title">Zip Code</label>';
                                    echo '<input class="u-full-width" type="email" placeholder="ABC 123">';
                                  }
                                ?>
                                <select>
                                  <!-- If country visting is either one of the below (only ones below are for examples) display country in form field -->
                                <?php
                                  if ($country == "United Kingdom") {
                                    echo '<option selected>United Kingdom<option>';
                                  }

                                  elseif ($country == "China") {
                                    echo '<option selected>China<option>';
                                  }

                                  elseif ($country == "Singapore") {
                                    echo '<option selected>Singapore<option>';
                                  }

                                  elseif ($country == "Brazil") {
                                    echo '<option selected>Brazil<option>';
                                  }

                                  elseif ($country == "Ireland") {
                                    echo '<option selected>Ireland<option>';
                                  }

                                  elseif ($country == "Australia") {
                                    echo '<option selected>Brazil<option>';
                                  }

                                  elseif ($country == "United States") {
                                    echo '<option selected>United States<option>';
                                  }?>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <hr>
        </section>

        <!-- Select payment method
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->

        <section id="payment" role="payment">
            <div class="row">
                <div class="two columns">
                    2)
                </div>
                <div class="five columns">
                    <h5>Select your payment method</h5>
                    <!-- paypal payment method will launch modal -->
                    <button class="button-primary imagesmobile" id="myBtnPayPal" onclick="payPal()">PayPal</button>
                    <!-- alipay payment method will launch modal -->
                    <button class="button-primary imagesmobile" id="myBtnAliPay">AliPay</button>
                    <!-- credit card payment method trigger toggler and show/hide jquery form -->
                    <button class="button-primary imagesmobile" name="toggler" class="credit" value="1" id="rdb1">Credit Card</button>
                </div>
                <!-- Form for credit card will be displayed
                –––––––––––––––––––––––––––––––––––––––––––––––––– -->
                <div class="five columns">
                    <div id="blk-1" class="toHide" style="display:none">
                        <form>
                            <div class="row">
                                <!-- Card number label and form
                              –––––––––––––––––––––––––––––––––––––––––––––––––– -->
                                <div class="six columns">
                                    <label for="cardNumberInput">Card Number</label>
                                </div>
                                <div class="six columns">
                                    <input type="text" class="form" placeholder="Card number" id="cardnumberInput">
                                </div>
                            </div>
                            <div class="row">
                                <!-- Name on card label and form
                              –––––––––––––––––––––––––––––––––––––––––––––––––– -->
                                <div class="six columns">
                                    <label for="nameOnCard">Name on card</label>
                                </div>
                                <div class="six columns">
                                    <input type="text" placeholder="Name on card" id="nameOnCard">
                                </div>
                            </div>
                            <div class="row">
                                <!-- Expiry date label and form
                              –––––––––––––––––––––––––––––––––––––––––––––––––– -->
                                <div class="four columns">
                                    <label for="expiryDate">Expiry Date</label>
                                </div>
                                <div class="four columns">
                                    <select class="u-full-width" id="expirtyDate" placeholder="Month">
                                      <option value="Option 1">01</option>
                                      <option value="Option 2">02</option>
                                      <option value="Option 3">03</option>
                                      <option value="Option 1">04</option>
                                      <option value="Option 2">05</option>
                                      <option value="Option 3">06</option>
                                      <option value="Option 1">07</option>
                                      <option value="Option 2">08</option>
                                      <option value="Option 3">09</option>
                                      <option value="Option 1">10</option>
                                      <option value="Option 2">11</option>
                                      <option value="Option 3">12</option>
                                    </select>
                                </div>
                                <div class="four columns">
                                    <select class="u-full-width" id="expiryYear" placeholder="Year">
                                      <option value="Option 1">17</option>
                                      <option value="Option 2">18</option>
                                      <option value="Option 3">19</option>
                                      <option value="Option 1">20</option>
                                      <option value="Option 2">21</option>
                                      <option value="Option 3">22</option>
                                      <option value="Option 1">23</option>
                                      <option value="Option 2">24</option>
                                      <option value="Option 3">25</option>
                                      <option value="Option 1">26</option>
                                      <option value="Option 2">27</option>
                                      <option value="Option 3">28</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <!-- CV2 label and form
                              –––––––––––––––––––––––––––––––––––––––––––––––––– -->
                                <div class="six columns">
                                    <label for="cv2">CV2</label>
                                </div>
                                <div class="six columns">
                                    <input type="text" class="form" placeholder="CV2" id="cv2Input">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <hr>
        <section id="confirm" role="confirm">
            <div class="row">
                <div class="two columns">
                    3)
                </div>
                <div class="ten columns">
                    <h5>Is your billing address different?</h5>
                    <button class="button-primary" name="toggler" value="5" id="rdb5">Yes</button> <!-- Clicking this button will trigger the jquery and display the form fields for the new billing address -->
                    <button class="button-primary">No</button>
                    <div id="blk-5" class="toHide" style="display:none"> <!-- The section below is the billing address form fields which will show on trigger -->
                        <form>
                            <div class="row">
                                <div class="six columns">
                                  <label for="Title">Title</label>
                                  <input class="u-full-width" type="email" placeholder="Dr/Mr/Mrs/Miss/Mister">
                                  <label for="Title">First Name</label>
                                  <input class="u-full-width" type="email" placeholder="Matt">
                                  <label for="Title">Last Name</label>
                                  <input class="u-full-width" type="email" placeholder="Wagg">
                                  <label for="Title">Street Address</label>
                                  <input class="u-full-width" type="email" placeholder="123 Fake Street">
                                  <?php
                                    if ($country == "United Kingdom") {
                                      echo '<label for="Title">Post Code</label>';
                                      echo '<input class="u-full-width" type="email" placeholder="ABC 123">';
                                    }
                                    else {
                                      echo '<label for="Title">Zip Code</label>';
                                      echo '<input class="u-full-width" type="email" placeholder="ABC 123">';
                                    }
                                  ?>

                                  <select>
                                  <?php
                                    if ($country == "United Kingdom") {
                                      echo '<option selected>United Kingdom<option>';
                                    }

                                    elseif ($country == "China") {
                                      echo '<option selected>China<option>';
                                    }

                                    elseif ($country == "Singapore") {
                                      echo '<option selected>Singapore<option>';
                                    }

                                    elseif ($country == "Brazil") {
                                      echo '<option selected>Brazil<option>';
                                    }

                                    elseif ($country == "Ireland") {
                                      echo '<option selected>Ireland<option>';
                                    }

                                    elseif ($country == "Australia") {
                                      echo '<option selected>Brazil<option>';
                                    }

                                    elseif ($country == "United States") {
                                      echo '<option selected>United States<option>';
                                    }?>
                                  </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
              <div class="two columns">
                  4)
              </div>
                <div class="ten columns">
                    <button class="button-primary imagesmobile">Confirm Order</button>
                </div>
            </div>
    </div>
    </section>



    <!-- Modal for Paypal
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <div id="myModalPayPal" class="modal" role="paypal">

        <!-- Modal content -->
        <div class="modal-content">
            <div class="container">
                <img src="images/paypallogo.png" height="" width="100">
                <p>Selecting Paypal will re-direct you to the Paypal website.</p>
                <p>Please note that using the PayPal checkout will attract a 1% surcharge to the cost of your order.</p>
                <span class="closePayPal">&times;</span>
            </div>
        </div>

    </div>

    <!-- Modal for Alipay
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <div id="myModalAliPay" class="modal" role="alipay">

        <!-- Modal content -->
        <div class="modal-content">
            <div class="container">
                <img src="images/alipay.png" height="" width="100">
                <p>Selecting Alipay will re-direct you to the Alipay portal.</p>
                <p>Please note Alipay is only for China citizens.</p>
                <span class="closeAliPay">&times;</span>
            </div>
        </div>

    </div>
    </div>
    <!-- close container -->

    <!-- Script for modals
–––––––––––––––––––––––––––––––––––––––––––––––––– -->

    <script>
        // Get the modal Paypal
        var modalPayPal = document.getElementById('myModalPayPal');

        // Get the button that opens the modal
        var btnPayPal = document.getElementById("myBtnPayPal");

        // Get the <span> element that closes the modal
        var spanPayPal = document.getElementsByClassName("closePayPal")[0];


        // When the user clicks on the button, open the modal
        btnPayPal.onclick = function() {
            modalPayPal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        spanPayPal.onclick = function() {
            modalPayPal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modalPayPal.style.display = "none";
            }
        }

        // Get the modal Alipay
        var modalAliPay = document.getElementById('myModalAliPay');

        // Get the button that opens the modal
        var btnAliPay = document.getElementById("myBtnAliPay");

        // Get the <span> element that closes the modal
        var spanAliPay = document.getElementsByClassName("closeAliPay")[0];


        // When the user clicks on the button, open the modal
        btnAliPay.onclick = function() {
            modalAliPay.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        spanAliPay.onclick = function() {
            modalAliPay.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modalAliPay.style.display = "none";
            }
        }
    </script>
</body>

</html>
