<?php include('includes/walkform.php');?>
<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2022 Walk For Animals - Register</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    
  
</head>

<body class="dregistration <?php echo $status ?>">
<div class="overlay"></div>
    <div class="countdown">
        <div class="days">
            <span>0</span>
            <p>Days</p>
        </div>
        <div class="hours">
            <span>0</span>
            <p>Hours</p>
        </div>
        <div class="minutes">
            <span>0</span>
            <p>Minutes</p>
            <p>until</p>
            <p id="wfa"> 2022 Walk for Animals!</p>
        </div>
    </div>
    <header>
        <h1><a href="index.html">Walk for Animals</a></h1>
        <a href="register.php">Register Now!</a>
    </header>
    
    <h3 id="toggle-menu"><a href="#main-nav" title="open navigation"><i class="menu icon-menu"> </i>MENU</a></h3>
    <nav class="main-nav">
        <div class="taglink"></div>
        <ul>
            <li id="home"><a href="index.html">HOME</a></li>
            <li id="details"><a href="details.html">EVENT DETAILS</a></li>
            <li id="reg"><a href="register.php" class="current">REGISTRATION</a></li>
        </ul>
    </nav>
        <h2>Registration</h2>
        <p>Please fill out the form below to sign up and help save lives today!</p>
        <div class="form">
            <form class="register" name="register" id="register" method="post" action="register.php" autocomplete="true">
                <fieldset id="type">
                    <div></div>
                    <legend>Registration Type:</legend>
                    
                    <label><input type="radio" name="type" id="adult" value="adult" />Adult Early Bird - $20.00</label>

                    
                    <label><input type="radio" name="type" id="child" value="child" />Youth Early Bird - $10.00</label>

                    
                    <label><input type="radio" name="type" id="cat" value="cat" />Cat Napper - $10.00 - Fundraising but not attending 
                    </label>

                </fieldset>
                <fieldset id="info">
                    <legend>Participant Info:</legend>
                    <div></div>
                    <label for="name">Full Name</label>
                    <!-- <input type="text" name="name" id="name" class="size" required value="<?php //echo $senderName; ?>" /> -->
                    <input type="text" name="name" id="name" class="size" required />
                    <label for="address">Address</label>
                    <input type="text" name="address" id="address" class="size" required/>
                    <label for="city">City</label>
                    <input type="text" name="city" id="city" class="size" required/>
                    <label for="state">State</label>
                    <select name="state" id="state" tabindex="0" required>
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
                    <input type="text" name="zip" id="zip" class="size"required/>
                    <label for="email">Email Address:</label>
                    <input type="text" name="email" id="email" class="size" required/>
                </fieldset>
                    <fieldset id="tshirt">
                        <div></div>
                        <legend>T-Shirt Size:</legend>
                        
                        <label><input type="radio" name="tshirt" id="xsmall" value="xsmall" />Extra-Small</label>

                        
                        <label><input type="radio" name="tshirt" id="small" value="small" />Small</label>

                        
                        <label><input type="radio" name="tshirt" id="medium" value="medium" />Medium</label>

                        
                        <label><input type="radio" name="tshirt" id="large" value="large" />Large</label>

                        
                        <label><input type="radio" name="tshirt" id="xl" value="xl" />Extra-Large</label>

                    </fieldset>
                    <fieldset id="payment">
                        <legend>Payment Info:</legend>
                        <div></div>
                        <label for="chname">Cardholder Name</label>
                        <input type="text" name="chname" id="chname" class="size" required />
                        <label for="baddress">Billing Address</label>
                        <input type="text" name="baddress" id="baddress" class="size" required/>
                        <label for="bcity">City</label>
                        <input type="text" name="bcity" id="bcity" class="size" required/>
                        <label for="bstate">State</label>
                        <select name="bstate" id="bstate" tabindex="0" required>
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
                        <label for="bzip">Zip Code</label>
                        <input type="text" name="bzip" id="bzip" class="size" required/>
                        <label for="cc">Credit Card Number:</label>
                        <input type="text" name="cc" id="cc" class="size" required/>
                        <label for="exp">Expiration:</label>
                        <input type="text" name="exp" id="exp" class="size" required/>
                        <label for="ccv">CCV:</label>
                        <input type="text" name="ccv" id="ccv" class="size" required/>
                        
                    </fieldset>
                    <fieldset id="submitbutton">
                        <input type="submit" name="submit" id="submit" value="Submit" class="size" />
                    </fieldset>
                    <input type="hidden" name="did_send" value="1">
                    
                    <div class="<?php echo $status ?> hideme"><?php echo $display_msg; ?></div>
                  
                    
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="scripts/jquery.validate_t.js"></script>
<script src="scripts/validTests.js"></script>
<script src="scripts/main.js"></script>
</html>