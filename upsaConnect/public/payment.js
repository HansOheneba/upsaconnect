const paymentForm = document.getElementById('paymentForm');
paymentForm.addEventListener("submit", payWithPaystack, false);

function payWithPaystack(e) {
  e.preventDefault();

  let handler = PaystackPop.setup({
    key: 'pk_test_6e0b59f920a908dbabed12a9ecf49c1b30b2499a', 
    email: document.getElementById("email-address").value,
    amount: document.getElementById("amount").value * 100,
    currency: "GHS",
    ref: ''+Math.floor((Math.random() * 1000000000) + 1), 
    label: "Donate to UPSA",
    onClose: function(){
      alert('Window closed.');
    },
    callback: function(response){
      let message = 'Payment complete! Reference: ' + response.reference;
      alert(message);
      if(response.status === 'success') {
        window.location.href = 'thankYou.html';
      } else {
        alert('Payment failed!');
      }
    }
  });

  handler.openIframe();
}