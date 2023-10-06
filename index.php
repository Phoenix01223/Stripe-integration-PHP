<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://js.stripe.com/v3/"></script>
    <title>Topshare Portfolio Manager</title>
</head>

<body>
    <div class="container">
        <header class="header">
            <hgroup>
                <h1 class="site-title">
                    <a href="" title="Topshare Portfolio Manager">Topshare Portfolio Manager</a>
                </h1>
                <h2 class="site-description">A desktop portfolio management program for Australian share investors</h2>
            </hgroup>
            <a href="">
                <img src="https://topshare.com.au/wp/wp-content/uploads/2021/01/Banner-Topshare.jpg"
                    class="header-image" width="960" height="250" alt="Topshare Portfolio Manager">
            </a>
        </header>
        <div id="main">
            <div id="primary" class="site-content">
                <div id="content" role="main">
                    <article id="post-380" class="post-380 page type-page status-publish hentry">
                        <header class="entry-header">
                            <h1 class="entry-title">Topshare Payment – New V3 Licence</h1>
                        </header>
                        <div class="entry-content">
                            <div class="stripe-form-wrap">
                                <form class="stripe-payment-form" id="payment-form">
                                    <p><b>Secure payment page</b></p>
                                    <h3 class="stripe-payment-form-section">Payment Options</h3>
                                    <div class="stripe-payment-form-row">
                                        <label>Australian Dollar</label>
                                        <input type="text" size="20" name="amount" class="amountShown required"
                                            value="50" autocomplete="off">
                                    </div>
                                    <h3 class="stripe-payment-form-section">Billing Information</h3>
                                    <div class="stripe-payment-form-row">
                                        <label>First Name</label>
                                        <input type="text" size="20" name="fname" class="fname required" value=""
                                            autocomplete="off">
                                    </div>
                                    <div class="stripe-payment-form-row">
                                        <label>Last Name</label>
                                        <input type="text" size="20" name="lname" class="lname required" value=""
                                            autocomplete="off">
                                    </div>
                                    <div class="stripe-payment-form-row">
                                        <label>Email Address</label>
                                        <input type="text" size="20" name="email" class="email email required" value=""
                                            autocomplete="off">
                                    </div>
                                    <h3 class="stripe-payment-form-section">Payment Information</h3>
                                    <div class="stripe-payment-form-row stripe-payment-form-cards-image">
                                        <img src="https://topshare.com.au/wp/wp-content/plugins/diglabs-stripe-payments/images/types.png"
                                            alt="cc types">
                                    </div>
                                    <div class="stripe-payment-form-row">
                                        <label>Card Number</label>
                                        <div id="card-number-element" class="custom-stripe-element"></div>
                                    </div>
                                    <div class="stripe-payment-form-row">
                                        <label>CVC</label>
                                        <div id="card-cvc-element" class="custom-stripe-element"></div>
                                    </div>
                                    <div class="stripe-payment-form-row">
                                        <label>Expiration</label>
                                        <div id="card-expiry-element" class="custom-stripe-element"></div>
                                    </div>
                                    <div class="stripe-payment-form-row-submit">
                                        <button class="stripe-payment-form-submit" type="submit">Submit</button>
                                    </div>
                                    <div class="stripe-payment-form-row-progress">
                                        <span class="stripe-payment-form-message" id="error-msg"></span>
                                    </div>
                                </form>
                            </div>
                            <div class="stripe-payment-receipt">
                                <p></p>
                                <p><strong>Thank You, {fname} {lname}</strong>
                                </p>
                                <p><strong>$ {amount} is making its way to our bank account.</strong></p>
                                <p>A receipt has been sent to <strong>{email}</strong>.</p>
                                <p>Transaction ID: {id}</p>
                                <p></p>
                            </div>
                        </div>
                        <footer class="entry-meta">
                        </footer>
                    </article>
                    <div id="comments" class="comments-area">
                    </div>
                </div>
            </div>
            <div id="secondary" class="widget-area" role="complementary">
                <aside id="text-2" class="widget widget_text">
                    <h3 class="widget-title">Topshare advantages</h3>
                    <div class="textwidget">
                        <ul>
                            <li>Amazing support: phone, email and forum - just read our <a href="">testimonials</a></li>
                            <li>Multiple portfolios</li>
                            <li>Properly handles splits, consolidations, partial sale, trust distributions, capital
                                returns, merge/ demerge, etc</li>
                            <li>Australian handling of dividend imputation and franking credits</li>
                            <li>Australian Capital Gains rules for individuals, SMSF and companies</li>
                            <li>Easy transaction import from broker's PDF or CSV file</li>
                            <li>Gain insights into the performance of your investments</li>
                            <li><b>NEW!</b> Now supports crypto currencies</li>
                            <li><b>NEW!</b> Better support for traders as well as investors</li>
                            <li><a href="https://www.youtube.com/playlist?list=PLuNsnUZR39VBZUjdNy5p2LsFute0MwBzQ"
                                    target="_blank">See example videos</a></li>
                        </ul>
                    </div>
                </aside>
                <aside id="text-7" class="widget widget_text">
                    <div class="textwidget">
                        <p><img src="https://topshare.com.au/wp/wp-content/uploads/2017/03/iStock-467952626.jpg" alt="">
                        </p>
                    </div>
                </aside>
            </div>
        </div>
        <footer id="colophon" role="contentinfo">
            <div class="site-info">
                All material on this website © 2002 - 2023 Microtax Pty Ltd, ACN 169 286 033
            </div>
        </footer>
    </div>
</body>
<script>
    var stripe = Stripe('pk_test_oZfLWdpu6hYJkAcn69VhyPQO');
    var elements = stripe.elements();
    var form = document.getElementById('payment-form');

    var style = {
        base: {
            iconColor: '#666EE8',
            color: 'black',
            lineHeight: 'normal',
            fontWeight: 300,
            fontFamily: "Open Sans, Helvetica, Arial, sans-serif",
            fontSize: '13px',

            '::placeholder': {
                color: '#CFD7E0',
            },
        },
    };

    var cardNumberElement = elements.create('cardNumber', { style: style });
    cardNumberElement.mount('#card-number-element');

    var cardExpiryElement = elements.create('cardExpiry', { style: style });
    cardExpiryElement.mount('#card-expiry-element');

    var cardCvcElement = elements.create('cardCvc', { style: style });
    cardCvcElement.mount('#card-cvc-element');


    form.addEventListener('submit', function (event) {
        event.preventDefault();

        stripe.createToken(cardNumberElement).then((result) => {
            console.log(result.token.id)
        })

        // var amount = document.getElementById('amount').value;
        // var fname = document.getElementById('fname').value;
        // var lname = document.getElementById('lname').value;
        // var email = document.getElementById('email').value;
        // var cardNumber = document.getElementById('cardNumber').value;
        // var month = document.getElementById('month').value;
        // var year = document.getElementById('year').value.substring(2);
        // var cvv = document.getElementById('cvc').value;

        // var cardNumber = '4242424242424242'; // Card number (replace with user input)
        // var expMonth = '12'; // Expiration month (replace with user input)
        // var expYear = '25'; // Expiration year (replace with user input)
        // var cvc = '123'; // CVC/CVV (replace with user input)

        // // Create a token with the card details.
        // stripe.createToken('card', {
        //     number: cardNumber,
        //     exp_month: expMonth,
        //     exp_year: expYear,
        //     cvc: cvc,
        // }).then(function (result) {
        //     if (result.error) {
        //         // Handle errors (e.g., invalid card details).
        //         console.error(result.error);
        //     } else {
        //         // Token represents the card information.
        //         var token = result.token;

        //         // Access card details from the token object.
        //         var cardBrand = token.card.brand; // Card brand (e.g., Visa, Mastercard).
        //         var cardLast4 = token.card.last4; // Last 4 digits of the card number.

        //         // You can use these card details as needed (e.g., display them to the user).
        //         console.log('Card brand:', cardBrand);
        //         console.log('Last 4 digits:', cardLast4);

        //         // Now you can send the token to your server for payment processing.
        //         // Send the token to your server via AJAX or another method.
        //     }
        // });

        // Create a payment method with collected card details
        // stripe.createPaymentMethod({
        //     type: 'card',
        //     card: {
        //         number: cardNumber,
        //         exp_month: month,
        //         exp_year: year,
        //         cvc: cvv,
        //     },
        //     billing_details: {
        //         name: `${fname} ${lname}`,
        //         email: email,
        //     },
        // }).then(function (result) {
        //     if (result.error) {
        //         // Handle error
        //         console.error(result.error);
        //         var errorElement = document.getElementById('error-msg');
        //         errorElement.innerHTML = result.error.message;
        //         console.log(result.error.message)
        //     } else {
        //         var paymentMethodId = result.paymentMethod.id;
        //         console.log(result);
        //         // Submit paymentMethodId to your server for further processing
        //     }
        // });
    });
</script>

</html>