<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>
<script>
var firebaseConfig = {
 apiKey: "AIzaSyAnIHx86grGxucN1zxdLllatNEvCzJb8Qs",
  authDomain: "idfirst-7874a.firebaseapp.com",
  projectId: "idfirst-7874a",
  storageBucket: "idfirst-7874a.appspot.com",
  messagingSenderId: "197236739882",
  appId: "1:197236739882:web:4cde50b427b2a779f89853",
  measurementId: "G-E00YHF866N"
};
firebase.initializeApp(firebaseConfig);
</script>
<script type="text/javascript">
window.onload = function () {
render();
};
function render() {
window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container');
recaptchaVerifier.render();
}
function sendOTP() {
var number = $("#number").val();
firebase.auth().signInWithPhoneNumber(number, window.recaptchaVerifier).then(function (confirmationResult) {
window.confirmationResult = confirmationResult;
coderesult = confirmationResult;
console.log(coderesult);
document.getElementById("v").style.display = "block";
document.getElementById("o").style.display = "none";
$("#successAuth").text("Message sent");
$("#successAuth").show();
}).catch(function (error) {
$("#error").text(error.message);
$("#error").show();
});
}
function verify() {
var code = $("#verification").val();
coderesult.confirm(code).then(function (result) {
var user = result.user;
console.log(user);
document.getElementById("as").style.display = "none";
document.getElementById("vc").style.display = "none";
$("#successOtpAuth").text("Auth is successful");
$("#successOtpAuth").show();
}).catch(function (error) {
$("#error").text(error.message);
$("#error").show();
});
}
</script>
