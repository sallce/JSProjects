<!DOCTYPE html> <html lang="en"> 
<head>
  <title>check out</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./css/checkout_process.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="./js/checkout_process.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places&callback=initAutocomplete"
        async defer></script>


</head>
<body>
<div class="containerNoBorder">
  <a href="http://yachaocs.com/" title="Yachaocs - Buy, Sell and Connect">
    <div class="logo_head"></div>
  </a>

<div class="centered-contents">
	<div>
		<div class="progressContainer">
			<ul class="clearfix meter">
				<li data-step-number="1" class="step_1" style="z-index: 3;">
					<span class="stepText_activeStepText">Shipping</span>
				</li>
				<li data-step-number="2" class="step_1" style="z-index: 2;">
					<span class="stepText">Payment</span>
				</li>
				<li data-step-number="3" class="step_1" style="z-index: 1;">
					<span class="stepText">Review Order</span>
				</li>
			</ul>
		</div>
		<div class="checkoutPanel">
	        <div class="checkoutPanelContent" style="width: 100%; height: auto;">
	          <div class="checkoutPanelContentElement">
	          	<div class="editAddress">
	          		<form name="add_address" class="address-form">
	          			<div class="header"><h4 class="header_text" style="font-weight: 700;">add shipping address</h4>
	          			</div>
	          			<div class="error-message">Please fill out all required fields and correct invalid input.</div>
  						<div class="form-group">
	          				<label for="fullname" style="width: 100%; margin-bottom: 5px; font-weight: 700;">Full name</label>
	          				<input type="text" id="fullname" autocomplete="name" class="form-control" placeholder="Full name" name="full_name">
          				</div>
          				<div class="form-group">
	          				<label for="address1" style="width: 100%;">Address Line 1</label>
	          				<input type="text"  id="autocomplete" placeholder="Enter your address" autocomplete="shipping street-address" name="address_line_1" class="form-control" autocorrect="on" autocapitalize="on">
          				</div>
						<div class="form-group">
	          				<label for="address2" style="width: 100%;">Address Line 2</label>
	          				<input type="text" autocomplete="off" placeholder="Optional" id="address_line_2" name="address_line_2" class="form-control" autocorrect="on" autocapitalize="on">
          				</div>
          				<div class="row no-gutter">
	          				<div class="form-group col-md-6" style="width: 50%;">
		          				<label for="address2">City</label>
		          				<input type="text" id="locality" autocomplete="shipping address-level2" placeholder="City"  name="city" class="form-control" autocorrect="on" autocapitalize="on">
	          				</div>
	          				<div class="no-space">
		          				<div class="form-group col-md-2" style="width: 20%;">
			          				<label for="address2">State</label>
			          				<input type="text" autocomplete="shipping address-level1" placeholder="State" id="administrative_area_level_1" name="state" class="form-control" autocorrect="on" autocapitalize="on">
		          				</div>
		          				<div class="form-group col-md-4" style="width: 30%;">
			          				<label for="address2">Zip</label>
			          				<input type="text" autocomplete="shipping postal-code" placeholder="Zip code" id="postal_code" name="Zip" class="form-control" autocorrect="on" autocapitalize="on">
		          				</div>
	          				</div>
          				</div>

          				<div class="form-group">
	          				<label for="Phonenumber" style="width: 100%;">Phone number</label>
	          				<input type="text" autocomplete="tel" placeholder="Phone number" id="Phonenumber" name="Phonenumber" class="form-control" autocorrect="on" autocapitalize="on">
          				</div>

          				<button type="submit" class="btn btn-info fullwidth" style="width: 100%;">Add Address</button>

	          		</form>
	          	</div>
	          </div>
	        </div>
        </div>
	</div>
</div>
</div>
</body>
</html> 