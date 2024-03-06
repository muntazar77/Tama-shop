<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>aman</title>
    <link
      rel="stylesheet"
      href="css/fontawesome-free-5.15.3-web/css/all.min.css"
    />
    <!-- <link rel="stylesheet" href="css/style.css" /> -->
    <link rel="stylesheet" href="css/pay.css" />
  </head>
  <body>
    <header>
      <input type="checkbox" name="" id="toggler" />
      <label for="toggler" class="fas fa-bars"></label>
      <div id="menu-bar" class="fas fa-bars"></div>

      <!-- <a href="#" class="logo">Tama<span>.</span></a> -->
      <a href="#" class="logo"><span></span></a>

      <nav class="navbar">
        <a href="index.php">Go to Home</a>
        <a href="index.php">Go to Products</a>
     
      </nav>

      <div class="icons">
        <!-- <a href="#" class="fas fa-search" id="search-btn"></a>
        <a href="#" class="fas fa-user" id="login-btn"></a>
        <a href="#" class="fas fa-shopping-cart" onclick="openNav()"></a> -->
      </div>

    </header>

    <!-- login form container  -->

   
    
    <div class='container'>
        <div class='window'>
          <div class='order-info'>
            <div class='order-info-content'>
              <h2>Order Summary</h2>
                      <div class='line'></div>
              <table class='order-table'>
                <tbody>
                  <tr>
                    <td><img src='images/product/elect/11.jpg' class='full-width'></img>
                    </td>
                    <td>
                      <br> <span class='thin'>Nike</span>
                      <br> Free Run 3.0 Women<br> <span class='thin small'> Color: Grey/Orange, Size: 10.5<br><br></span>
                    </td>
      
                  </tr>
                  <tr>
                    <td>
                      <div class='price'>$99.95</div>
                    </td>
                  </tr>
                </tbody>
      
              </table>
              <div class='line'></div>
              <table class='order-table'>
                <tbody>
                  <tr>
                    <td><img src='images/product/clothes/12.png' class='full-width'></img>
                    </td>
                    <td>
                      <br> <span class='thin'>Fjällräven</span>
                      <br>Vintage Backpack<br> <span class='thin small'> Color: Olive, Size: 20L</span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class='price'>$235.95</div>
                    </td>
                  </tr>
                </tbody>
              </table>
              <div class='line'></div>
              <table class='order-table'>
                <tbody>
                  <tr>
                    <td><img src='images/product/elect/12.jpg' height="90" class='full-width'></img>
                    </td>
                    <td>
                      <br> <span class='thin'>Monobento</span>
                      <br>Double Lunchbox<br> <span class='thin small'> Color: Pink, Size: Medium</span>
                    </td>
      
                  </tr>
                  <tr>
                    <td>
                      <div class='price'>$25.95</div>
                    </td>
                  </tr>
                </tbody>
              </table>
              <div class='line'></div><br><br>
              <div class='total'>
                <span style='float:left;'>
                  <div class='thin dense'>VAT 19%</div>
                  <div class='thin dense'>Delivery</div>
                  TOTAL
                </span>
                <span style='float:right; text-align:right;'>
                  <div class='thin dense'>$68.75</div>
                  <div class='thin dense'>$4.95</div>
                  $435.55
                </span>
              </div>
      </div>
      </div>
              <div class='credit-info'>
                <div class='credit-info-content'>
                  <table class='half-input-table'>
                    <tr><td>Please select your card: </td><td><div class='dropdown' id='card-dropdown'><div class='dropdown-btn' id='current-card'>Visa</div>
                      <div class='dropdown-select'>
                      <ul>
                        <li>Master Card</li>
                        <li>American Express</li>
                        </ul></div>
                      </div>
                     </td></tr>
                  </table>
                  <img src='images/visa.png' height='80' class='credit-card-image' id='credit-card-image'></img>
                  Card Number
                  <input class='input-field'></input>
                  Card Holder
                  <input class='input-field'></input>
                  <table class='half-input-table'>
                    <tr>
                      <td> Expires
                        <input class='input-field'></input>
                      </td>
                      <td>CVC
                        <input class='input-field'></input>
                      </td>
                    </tr>
                  </table>
                  <button class='pay-btn'>Checkout</button>
                  <a  class='pay-btn' href="index.php">Checkout</a>
      
                </div>
      
              </div>
            </div>
      </div>



    <script src="js/jquery-3.6.0.js"></script>
    <!--===== SCROLL REVEAL =====-->

    <script src="js/scrpt.js"></script>
  </body>
</html>
