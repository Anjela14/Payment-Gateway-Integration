<?php 
require_once('config.php'); 
?>
<html>
  <head>
    <title> Payment Gateway Integration </title>
    <meta name="viewport" content="width=device-width">
    <style>
      .razorpay-payment-button {
        color: #ffffff !important;
        background-color: #7266ba;
        border-color: #450368;
        font-size: 14px;
        padding: 10px;
      }
    </style>
  </head>
  <body>
    <form action="charge.php" method="POST">
    <!-- Note that the amount is in paise = 50 INR -->
    <script
        src="https://checkout.razorpay.com/v1/checkout.js"
        data-key="<?php echo $razor_api_key; ?>"
        data-amount="10000"
        data-buttontext="DONATE"
        data-name="Anjela Chattaraj"
        data-description="Payment Gateway"
        data-image="https://your-awesome-site.com/your_logo.jpg"
        data-prefill.name="Kim Taehyung"
        data-prefill.email="kim@gmail.com"
        data-theme.color="#036817"
    ></script>
    <input type="hidden" value="Hidden Element" name="hidden">
    </form>
  </body>
</html>












