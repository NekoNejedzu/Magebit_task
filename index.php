<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script defer src="app.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
</head>
<body>
    <header>
        <img class="logo", src="Union.png">
        <img class="logoname", src="pineapple.png">
        <nav>
            <ul>
                <li><a href="#">About</a></li>
                <li><a href="#">How it works</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
        </nav>

    </header>
    <div class="desktop">
        <span id="inputtext"></span>
     <div class="image">
          <img src="image_summer.png" alt="peanaple_image">
      </div>
      <div class="mobilecontent">
            <form id="form" class="form" onsubmit=" return checkInputs()" action="insert.php" method="POST">
                <div class="text">
                    <h1>Subscribe to newsletter</h1>
                    <h2>Subscribe to our newsletter and get 10% discount on pineapple glasses.</h2>
                </div>  
                <div class="input">
                <input type="text", id="emailinput", placeholder="Type your email address here…" name="emailinput">
                <small></small>
            </div>
            <button  class="arrow-button" id="submit-button" onclick="" name="submit" type="submit">
                <img src="ic_arrow.png" alt="arrow-icon">
            </button>
            <div id="error-msg" class="error-txt error-style"><?php echo (isset($_GET['errmsg']))?$_GET['errmsg']:'';?></div>
            <div class="checkbox">
                <label class="container">I agree to terms of service
                    <input type="checkbox" checked="checked" id="checkbox" name="checkbox">
                    <span class="checkmark"></span>  
                  </label>
            </div>
            </form>
           <div class="thank-you" id="thank-you" hidden >
            <img src="trophie.png" alt="trophie-image" class="trophie-image">
            <h1>Thanks for subscribing!</h1>
            <h2>You have successfully subscribed to our email listing. Check your email for the discount code.</h2>
           </div> 
        
        <div class="line">
        </div>
        <div class="social">
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-youtube"></a>
            <a href="#" class="fa fa-instagram"></a>
        </div>
    </div>
      </div>
      
</body>
</html>