<?php include('includes/walkform.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2022 Walk For Animals - Register</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="scripts/jquery-3.2.1.min.js"></script>
    <script src="scripts/jquery.validate_t.js"></script>
  <script src="scripts/validTests.js"></script>
</head>

<body class="dregistration">
    <header>
        <h1><a href="index.html">Walk for Animals</a></h1>
        <a href="register.html">Register Now!</a>
    </header>
    <div class="taglink"></div>
    <nav>
        <ul>
            <li id="home"><a href="index.html">HOME</a></li>
            <li id="details"><a href="details.html">EVENT DETAILS</a></li>
            <li id="reg"><a href="register.html" class="current">REGISTRATION</a></li>
        </ul>
    </nav>
        <h2>Registration</h2>
        <p>Please fill out the form below to sign up and help save lives today!</p>
        <div class="form">
            <div id="formgraphic"></div>
            <!-- cute graphic to show at media query -->
            <form class="register" name="register" id="register" method="post" action="register.php" autocomplete="true">
                <fieldset id="type">
                    <legend>Registration Type:</legend>
                    <input type="radio" name="type" id="adult" value="adult" />
                    <label for="adult">Adult Early Bird - $20.00</label>
                    <input type="radio" name="type" id="child" value="child" />
                    <label for="child">Youth Early Bird - $10.00</label>
                    <input type="radio" name="type" id="cat" value="cat" />
                    <label for="cat">Cat Napper - $10.00 </br>Fundraising but not attending 
                    </label>
                </fieldset>
                <fieldset id=""info>
                    <legend>Participant Info:</legend>
                    <label for="name">Full Name</label>
                    <input type="text" name="name" id="name" class="size" required />
                    <label for="address">Address</label>
                    <input type="text" name="address" id="address" class="size" />
                    <label for="city">City</label>
                    <input type="text" name="city" id="city" class="size" />
                    <label for="state">State</label>
                    <select name="state" id="state" tabindex="0">
                        <option value="">--Please select one--</option>
                        <option value="AL">Alabama</option>
                        <option value="AK">Alaska</option>
                        <option value="AZ">Arizona</option>
                        <option value="AR">Arkansas</option>
                        <option value="CA">California</option>
                        <option value="CO">Colorado</option>
                        <option value="CT">Connecticut</option>
                        <option value="DE">Delaware</option>
                        <option value="DC">District of Columbia</option>
                        <option value="FL">Florida</option>
                        <option value="GA">Georgia</option>
                        <option value="HI">Hawaii</option>
                        <option value="ID">Idaho</option>
                        <option value="IL">Illinois</option>
                        <option value="IN">Indiana</option>
                        <option value="IA">Iowa</option>
                        <option value="KA">Kansas</option>
                        <option value="KY">Kentucky</option>
                        <option value="LA">Louisiana</option>
                        <option value="ME">Maine</option>
                        <option value="MD">Maryland</option>
                        <option value="MA">Massachusetts</option>
                        <option value="MI">Michigan</option>
                        <option value="MN">Minnesota</option>
                        <option value="MO">Missouri</option>
                        <option value="MT">Montana</option>
                        <option value="NE">Nebraska</option>
                        <option value="NV">Nevada</option>
                        <option value="NH">New Hampshire</option>
                        <option value="NJ">New Jersey</option>
                        <option value="NM">New Mexico</option>
                        <option value="NY">New York</option>
                        <option value="NC">North Carolina</option>
                        <option value="ND">North Dakota</option>
                        <option value="OH">Ohio</option>
                        <option value="OK">Oklahoma</option>
                        <option value="OR">Oregon</option>
                        <option value="PA">Pennsylvania</option>
                        <option value="RI">Rhode Island</option>
                        <option value="SC">South Carolina</option>
                        <option value="SD">South Dakota</option>
                        <option value="TN">Tennessee</option>
                        <option value="TX">Texas</option>
                        <option value="UT">Utah</option>
                        <option value="VT">Vermont</option>
                        <option value="VA">Virginia</option>
                        <option value="WA">Washington</option>
                        <option value="WV">West Virginia</option>
                        <option value="WI">Wisconsin</option>
                        <option value="WY">Wyoming</option>
                      </select>
                    <label for="zip">Zip Code</label>
                    <input type="text" name="zip" id="zip" class="size" />
                    <label for="email">Email Address:</label>
                    <input type="text" name="zip" id="zip" class="size" required/>
                </fieldset>
                    <fieldset id="tshirt">
                        <legend>T-Shirt Size:</legend>
                        <input type="radio" name="tshirt" id="xsmall" value="xsmall" />
                        <label for="xsmall">Extra-Small</label>
                        <input type="radio" name="tshirt" id="small" value="small" />
                        <label for="small">Small</label>
                        <input type="radio" name="tshirt" id="medium" value="medium" />
                        <label for="medium">Medium</label>
                        <input type="radio" name="tshirt" id="large" value="large" />
                        <label for="large">Large</label>
                        <input type="radio" name="tshirt" id="xl" value="xl" />
                        <label for="xl">Extra-Large</label>
                    </fieldset>
                    <fieldset id="submitbutton">
                        <input type="submit" name="submit" id="submit" value="Submit" class="size" />
                    </fieldset>
                    <input type="hidden" name="did_send" value="1">
            

            <?php
          //<!-- if the variable in hidden field is true .. form has been sent and php processed it correctly -->
          if($_REQUEST['did_send']==1){
            //<!-- start typing an open div tag with the correct class -->
            echo'<div class="'.$status.'">';
              //<!-- display the correct message using the variable you created in php -->
            echo $display_msg;
            echo '</div>';
          }?>
        </form>
        </div>



    <div id="doggo"></div>
    <footer>
        <div>
            <img src="images/mobile_sdhslogo.jpg"/>
            <small>San Diego Humane Society is a Charity Navigator Four Star rated organization and a Better Business
                Bureau Accredited charity. Tax ID: 95-1661688.</small>
            <div>
                <a href="instagram.com">
                    <div class="social">Instagram</div>
                </a>
                <a href="facebook.com">
                    <div class="social">Facebook</div>
                </a>
                <a href="twitter.com">
                    <div class="social">Twitter</div>
                </a>
                <a href="tiktok.com">
                    <div class="social">TikTok</div>
                </a>
                <a href="youtube.com">
                    <div class="social">Youtube.com</div>
                </a>
                <a href="linkedin.com">
                    <div class="social">Linkedin</div>
                </a>
            </div>
            <small>&copy;2022 Morgan Anneken Creative</small>
        </div>
    </footer>
</body>

</html>