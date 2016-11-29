<!DOCTYPE html> <html lang="en"> 
<head>
  <title>check out</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="./css/checkout.css">
  <script src="./js/checkout.js"></script>


</head> 
<body>
<div class="containerNoBorder">
  <a href="http://yachaocs.com/" title="yachaocs - Buy, Sell and Connect">
    <div class="logo_head"></div>
  </a>

  <div class="centered-contents">
    <div class="checkoutContainer">
      <div class="checkoutPanel">
        <div class="checkoutPanelContent" style="width: 100%; height: auto;">
          <div class="checkoutPanelContentElement">
            <form>
              <div class="form_title">
                <h3 class="title_text" style="font-weight: bold;">Continue to</h3>
                <h3 class="checkout_text">
                <div class="title_line"></div><!-- react-text: 21 -->checkout<!-- /react-text --></h3>
              </div>
              <div class="error-message">Password must be at least 8 characters long and contain an uppercase letter, a lowercase letter, and a number.</div>
              <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email">
              </div>
              <div class="passwordDescription"><span class="text_c"></span></div>
              <div class="form-group" id="passwd">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password">
              </div>
              <button type="submit" class="btn btn-info fullwidth">Continue</button>
              <fieldset>
                <p class="signupSeparator">
                  <span class="text_c">
                    or
                  </span>
                </p>
                <button class="btn btn-primary fullwidth">Continue with Facebook</button>
              </fieldset>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>


</body>
 </html> 