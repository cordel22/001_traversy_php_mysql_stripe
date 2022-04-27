<!DOCTYPE html>
<html lang="eng">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Pay Page</title>
</head>

<body>
  <div class="container">
    <h2 class="my-4 text-center">Intro To React Course [$50]</h2>
    <form action="./charge.php" method="post" id="payment-form">
      <div class="form-row">
        <!-- <label for="card-element">
          Credit or debit card
        </label> -->
        <input type="text" name="first_name" class="form-control.mb-3 StripeElement StripeElement--Empty" placeholder="First Name">
        <input type="text" name="last_name" class="form-control.mb-3 StripeElement StripeElement--Empty" placeholder="Last Name">
        <input type="email" name="email" class="form-control.mb-3 StripeElement StripeElement--Empty" placeholder="Email">
        <div id="card-element" class="form-control">
          <!-- a Stripe Element will be inserted here, -->
        </div>

        <!--  Used to display form errors -->
        <div class="card-errors" role="alert"></div>
      </div>

      <button>Submit Payment</button>
    </form>
  </div>
  <script src="https://ajax.googlepis.com/ajax/libs/jquery/3.2.1/jquery.min.min.js"></script>
  <script src="https://js.stripe.com/v3/"></script>
  <script src="./js/charge.js"></script>

</body>

</html>