<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>donationcamp</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


  <link rel="stylesheet" href="style.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">



</head>
<body>

<?php
  include "nav.php";
?>


  <section id="hero" style="margin-top:68px;">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <div class="carousel-inner" role="listbox">

        <div class="carousel-item active" style="background-image: url(https://c0.wallpaperflare.com/preview/610/331/738/balloons-charity-colorful-colourful.jpg); background-size: 100% 100%; background-repeat: no-repeat; background-position: center;">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp information">
              <h2 style="text-align: center;">It's easy to be generous with other people's money.</span></h2>
              <p style="text-align: center;">Love can be a natural endowment, a present, or a gift.<br>If it is not just a donation, it can be a divine talent.<br>Since love is a silver bullet, it can make the unimaginable possible through the power of its inspiration.<br>
              <h3 style="text-align: center;"></p>
                
                <form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_KW047XARYp9zpP" async> </script> </form>
            </div>
          </div>
        </div>
  </section>

<?php
  include "footer.php";
?>

</body>

</html>