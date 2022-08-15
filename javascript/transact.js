function payNow(){
    
    var deposite_form = document.forms.deposite_form;
    var username = deposite_form.username.value;
    var email = deposite_form.email.value;
    var phone = deposite_form.phone.value;
    var amount = deposite_form.amount.value;
    
    // get the payment method
    var payment_method = deposite_form.elements.method.value;
    // check the user prefered payment method.
    if(payment_method == 'card'){
        amount = amount * 400;
        payWithCard(username, email, phone, amount);
    }else if(payment_method == 'crypto'){
        payWithPaylot(email, amount);
    }else{
        alert('Please Select a Payment Method.')
    }
}


// using the Flutterwave api for payment function
function payWithCard(username, email, phone, amount) {
        var x = FlutterwaveCheckout({
          public_key: "FLWPUBK-77a44a95e144a5a5c8d351b00d35c031-X",
          tx_ref: "hooli-tx-1920bbtyt",
          amount: amount, // the plan amount
          currency: "NGN",
          payment_options: "card,mobilemoney,ussd",
          customer: {
            email: email, // the user email address
            phonenumber: phone, // the user phone number
            name: username, // the username
          },
          callback: function (data) { // specified callback function
            console.log(data);
            var deposite_form = document.forms.deposite_form;
            
            var transaction_id = data.transaction_id;
            deposite_form.transaction_id.value = transaction_id;
            
            var reference = data.tx_ref;
            deposite_form.reference.value = reference;
            // submit form
            deposite_form.submit();
            
          },
          customizations: {
            title: "My store",
            description: "Payment for items in cart",
            logo: "https://assets.piedpiper.com/logo.png",
          },
        });        
}


// using the Paylot api for payment function
function payWithPaylot(email, amount){
        paylot({
                amount: amount,
                key: 'pyt_pk-a53f52fd9fb74ee79779c91dd7c0b9a1',
                reference: Date.now(),
                currency: 'USD',
                payload: {
                    type: 'payment',
                    subject: 'Test payment',
                    email: email,
                    sendMail: true
                },
                onClose: function(){
                    console.log('I just closed the payment modal');
                }
            }, (err, tx) => {
                if(err){
                    console.log('An error has occured');
                }else{
                    //Transaction was successful
                    var reference= tx.reference;
                    var deposite_form = document.forms.deposite_form;
                    deposite_form.reference.value = reference;
                    // submit form
                    deposite_form.submit();
                }
            });        
}

/**
* Update the confirmation investment amount once there is a change.
*/
function update_invest_amount(){
    var amount = document.forms.invest_form.amount.value;
    document.getElementById('confirm_invest_amount').innerHTML = amount;
}

// submit the investment form
function investNow(){
    document.forms.invest_form.submit();
}

// update withdrawal data
function update_withdrawal_data(){
    var pin = document.getElementById('_pin').value;
    document.forms.withdrawal_data_form.pin.value = pin;
    document.forms.withdrawal_data_form.submit();
}

/**
* Update the confirmation withdrawal amount once there is a change.
*/
function update_withdraw_amount(){
    var amount = document.forms.withdraw_form.amount.value;
    document.getElementById('confirm_withdraw_amount').innerHTML = amount;
}

// submit the withdrawal form
function withdrawNow(){
    document.forms.withdraw_form.submit();
}

