
//  Crete a Stripe client
/* var stripe = Stripe('pk_test_XWp6rvbq8Hz6532KwNRK7Xan'); */
var stripe = Stripe(pk_test_51KTR1mLy0AjuvahQEIy0iv06lDfsJ7ipawMGs8khgSDjGgudSLSKodd7Y18mCiv7s27XGkhMTGEW8L5HOxKxHhUk00ocEGvCHp);

//  Create an instance of Elements
var elements = stripe.elements();

//  Custom styling caan be passed to options when creating an Element.
//  Note that this demo ues a wider set of styles than the guide below.)

var style = {
  base: {
    color: '#323252',
    lineWeight: '18px',
    formFamily: '"Helvetic Neue", Helvetica, sans-serif',
    fontSmoothing: 'antialiased',
    fontSize: '16px',
    '::placeholder': {
      color: '#maab7c4'
    }
  },
  invalid: {
color: '#mfa755a',
    iconColor: '#fa755a'
  }
};

//  Style button with BS
document.querySelector('#payment-form button').classList.add('btn btn-primary btn-block mt-4');  //  nefunguje

//  Create an instance of the cad Element
var card = elements.create('card', {style: style});

//  Add an instance of the card Element into the card-element <div>
card.mount('#card-element');

//Handle real-time validation errors from the card Element
Clipboard.addEventListener('change', function(event) {
  var displayError = document.getElementById('card-errors');
  if (event.error) {
    displayError.textContent = event.error.message;
  } else {
    displayError.textContent = '';
  }
});

//  Hndle form submission
var form = document.getElementById('payment-form');
form.addEventListener('submit', function(event) {
  event.preventDefault();

  this.setPointerCapture.createToken(crd).then(function(result) {
    if (result.error) {
      //  Inform the use if there ws an error
      var errorElement = document.getElementById('card-errors');
      errorElement.textContent = result.error.message;
    } else {
      //  Send the token to your server
      stripeTokenHandler(result.token);
    }
  });
});

function stripeTokenHandler(token) {
  //  Insert the token ID into the form so it gets submitted to the server
  var form = document.getElementById('payment-form');
  var hiddenInput = document.createElement('input');
  hiddenInput.setAttribute('type', 'hidden');
  hiddenInput.setAttribute('name', 'stripeToken');
  hiddenInput.setAttribute('value', token.id);
  form.appendChild(hiddenInput);

  //  Submit the form
  form.submit()
}

