<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="image/bannnnner.jpg">

    <title>SELL/BUY BITCOIN</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

    <!-- Custom styles for this template -->
    <link href="theme.css" rel="stylesheet">

    <link href="Flowpaynew.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
      <style> 
.exc-form{
    background-color: aqua;
    width: 70%;
    margin: auto;
    height: auto;
}
.exc-artc{
    background-color: aliceblue;
    width: 50%;
    height:auto;
    float: left;
    margin-top: 5px;
}
    </style>
  </head>
  <body>
    <div>
        <!--Banner clear the 2nd and 3rd div!!-->
       <div class="pagebanner"><a href="flowpayz.html"><div class="bann-imagefloat" id="logo-show"><img src="image/logo-new.png" width="100%" height="160px" alt="Page Banner"></div></a><div class="bann-imagefloat"></div><div class="bann-imagefloat"></div></div>
    <!--clear div end!!-->
      <nav class="navbar navbar-inverse">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="flowpayz.html">HOME</a></li>
                <!--Btc begining -->
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">BITCOIN<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="Bitcoin.html">Buy Bitcoin</a></li>
                  <li><a href="Bitcoin.html">Sell Bitcoin</a></li>
                </ul>
              </li>
                <!--Btc end -->
                <!--Paypal start -->
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PAYPAL<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="Bitcoin.html">Buy Paypal</a></li>
                  <li><a href="Bitcoin.html">Sell Paypal</a></li>
                </ul>
              </li>
                <!--Paypal end -->
                <!--perfect money start-->
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PERFECT MONEY<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="Bitcoin.html">Buy Perfect Money</a></li>
                  <li><a href="Bitcoin.html">Sell Perfect Money</a></li>
                </ul>
              </li>
                <!--perfect money end-->
            <!--Etheruem start-->
                 <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ETHEREUM<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="Bitcoin.html">Buy Etheruem</a></li>
                  <li><a href="Bitcoin.html">Sell Etheruem</a></li>
                </ul>
              </li>
            <!-- Etheruem Start--> 
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">MORE<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="about.html">ABOUT US</a></li>
                    <li><a href="support.html">SUPPORT</a></li>
                    <li><a href="faq.html">FAQ</a></li>
                </ul>
                </li>  
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>
       
        <div id="wrapper-main">
        <div class="hero-image">
            <div id="heroimage-child">
                <div id="but-wrapp">
        <button class="selt" onclick="showBitcoin()">
        <img src="image/Bitcoin.png">
            </button>
    <button class="selt" onclick="showEthereum()">
        <img src="image/ether.png">
            </button>
    <button class="selt" onclick="showPaypal()">
       <img src="image/paypal.png">
            </button>
    <button class="selt" onclick="showPerfect()">
       <img src="image/pm.png">
            </button>
        </div>
            <!--Currency Start here -->
            <div class="exc-form currency" id="bitcoin">
            <p class="stext" style="color:White">
                <input type="radio" value="text" name="change" onclick="document.getElementById('buyImage').style.display='block'; document.getElementById('buyText').style.display='none'">
                View Steps in Image&ensp;
                <input type="radio" value="text" name="change" onclick="document.getElementById('buyText').style.display='block'; document.getElementById('buyImage').style.display='none'">
                View Steps in Text
                </p>
                <div class="exc-artc">
                <img id="buyImage" src=image/steps%20to%20buy.png height="900px" width="100%">
                <div id="buyText"><h2>How To Buy/Sell Bitcoin</h2><p>1) Click Either Sell Bitcoin or Buy Bitcoin</p>
                <p>2) Enter Your Name For verification</p>
                <p>3) The Amount of Bitcoin You Want to sell</p>
                <p>4) Note That the Amount of Bitcoin you want to sell will be automatically Generated In Dollar And Naira</p>
                <p>5) Enter your BWA(Bitcoin wallet Address) Your Wallet Address,your address look like<br>This : 8HQYWehpSk98hx2PrqAmdwzgiy9zC1DmbcG</p>
                <p>6) Choose Your Bank</p>
                <p>7) Enter Your Account Name</p>
                <p>8) Enter Your Account Number</p>
                <p>9) Type Some Additional Info</p>
                <p>10) Then <b>SUBMIT</b></p>
                    <i>Be Fear free all your provided information is save and secure your information<br>will not be divulge to anyone or any Agency</i><br><br>
                    <b>Thanks For Selling To Us !!!</b>
                    </div>
                </div>
            <div class="exc-artc">
    <form enctype="text/plain" action="mailto:ibraheemsaheed@gmail.com" method="post">
    <h2 class="s-text">BITCOIN</h2>
    <p class="stext" required="require"><input type="radio" value="sell" name="sell/buy">SELL BITCOIN &ensp;<input type="radio" value="buy" name="sell/buy">BUY BITCOIN</p>
    <span class="s-text">Name:</span><br>
    <input type="text" name="Name" placeholder="Name" required="require">
        <br>
    <span class="s-text">Amount(btc):</span><br>
    <input type="text" id="btc" name="btc" placeholder="Paste The Bitcoin Amount here">
         <br>
    <span class="s-text">Amount in(&#36;):</span>
         <br>
    <input type="text" id="dols" name="dols" onchange="btcConvert(this);" onkeyup="btcConvert(this);" placeholder="Amount you get in Dollar">
        <br>
            <span class="s-text">Amount in (<strike>N</strike>):</span><br>
    <input type="text" id="nai" name="nai" placeholder="Amount you get in Naira" readonly="true"><br>
    <span class="s-text" >Bitcoin Wallet Address:</span><br>
    <input type="text" name="Name" placeholder="8HQYWehpSk98hx2PrqAmdwzgiy9zC1DmbcG" require="required" ><br>
    <span class="s-text">Choose Bank</span><br>
    <select class="stext">
    <option>First Bank</option>
    <option  class="back-change" selected>Guaranty Trust Bank</option>
    <option>Union Bank of Africa(UBA)</option>
    <option class="back-change">Diamond Bank</option>
    <option>Polaris Bank</option>
    <option class="back-change">Eco Bank</option>
    </select><br>
    <span class="s-text">Account Name:</span><br>
    <input type="text" name="Name" placeholder="Account Name" require="required" ><br>
    <span class="s-text">Account Number</span><br>
    <input type="text" name="Name" placeholder="Account Number" require="required" ><br>
    <span class="s-text">Additional Info</span><br>
   <textarea placeholder="Write Message...."></textarea><br>
    <input type="submit" name="submit" value="SUBMIT">
    </form>
                </div>
            </div>
            <div class="exc-form currency" id="ether">
                <div id="abt-cont">
                <h2 class="s-text" style="text-decoration: none;text-align: center">ETHEREUM IS CURRENTLY<br>NOT AVAILABLE...</h2>
                </div>
            </div>
            <div class="exc-form currency" id="Pp">
            <div id="abt-cont">
                <h2 class="s-text" style="text-decoration: none;text-align: center">PAYPAL IS CURRENTLY<br>NOT AVAILABLE...</h2>
                </div>
            </div>
            <div class="exc-form currency" id="Pm">
            <div id="abt-cont">
                <h2 class="s-text" style="text-decoration: none;text-align: center">PERFECT MONEY IS CURRENTLY<br>NOT AVAILABLE...</h2>
                </div>
            </div>
        </div></div>
            </div>
 <!-- /container -->
      <div class="footer">
        <div class="foot-cont-wrap">
          <div class="foot-cont">
            <h3 class="cont-head">Resources</h3>
               <p class="Rss-p">&raquo;<a href="Bitcoin.html"> Buy/Sell E-Currency</a></p>
                <p class="Rss-p">&raquo;<a href="about.html"> About Us</a></p>
               <p class="Rss-p">&raquo;<a href="support.html">
                   Support</a></p>
               <p class="Rss-p">&raquo;<a href="faq.html"> FAQs</a></p>
              <p class="Rss-p">&raquo;<a href="support.html">
                  Help</a></p>
            </div>
             <div class="foot-cont">
            <h3 class="cont-head">Socials</h3>
                 <p>Whatsapp<i class="icon"><img src="image/whatsapp.png" width="15px" height="15px"></i>:(+234) 814 688 3588 / 08146063877</p>
                 <p>Facebook<i class="icon"><img src="image/facebook.png" width="15px" height="15px"></i>:<a href="">www.facebook.com/flowpay</a></p>
                 <p>Instagram<i class="icon"><img src="image/instagram.png" width="15px" height="15px"></i>:<a href=""></a></p>
                 <p>Telegram<i class="icon"><img src=""></i>:<a href=""></a></p>
            </div>
            <div class="foot-cont">
            <h3 class="cont-head">Contact</h3>
              <p><i class="icon"><img src="image/Call.png" width="15px" height="15px"></i>(+234) 814 688 3588</p>
              <p><i class="icon"><img src="image/email.png" width="20px" height="15px"></i>Contact@Flowpay.com</p>
              <p><i class="icon"><img src="image/location.png" width="15px" height="20px"></i>No 17b Egbeda Street Isale-Aro, Osogbo, Osun State, Nigeria</p>
            </div>
          </div>
        <div class="wrapper-copyr">
            <p class="copyright"><a href="flowpayz.html" id="linkfoot">Flowpay.com</a> <b>2019 All Rights Reserved</b></p></div>
        </div>
      </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   <script>
        function btcConvert(input){
            var price = "345";
            var output = input.value * price;
            var co = document.getElementById('nai');
            nai.value=output.toFixed(1);
        }
        </script>
    <script type="text/javascript"></script><script>
      function showBitcoin(){
          
          document.getElementById("bitcoin").style.display = "block"; 
          document.getElementById("ether").style.display = "none"; 
          
         document.getElementById("Pm").style.display = "none";
          document.getElementById("Pp").style.display = "none";
          
          
      }
       function showEthereum(){
              
            document.getElementById("ether").style.display = "block"; 
           document.getElementById("bitcoin").style.display = "none"; 
           document.getElementById("Pm").style.display = "none";
           
          document.getElementById("Pp").style.display = "none";
              
          }
          function showPerfect(){
              
              document.getElementById("Pm").style.display = "block"; 
             document.getElementById("ether").style.display = "none"; 
           document.getElementById("bitcoin").style.display = "none"; 
              
          document.getElementById("Pp").style.display = "none";
          }
      function showPaypal(){
              
              document.getElementById("Pp").style.display = "block"; 
             document.getElementById("ether").style.display = "none"; 
           document.getElementById("bitcoin").style.display = "none"; 
              
          document.getElementById("Pm").style.display = "none";
          }
      </script>
      <script src="//code.tidio.co/kkw2yrddmvkie05qisoplzwrrr31lhs7.js"></script>
    <script src="assets/js/ie-emulation-modes-warning.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
