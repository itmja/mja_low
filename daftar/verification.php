<!DOCTYPE html>
<html>
  <head>
    <title>Firebase Phone Verification</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link href="main.css" rel="stylesheet">
  </head>
  <body>
    <form >
      <h1>Firebase Phone verification In PHP</h1>
      <div class="formcontainer">
      <hr/>
      <div class="container">
      <input type="text" id="verificationCode" placeholder="Enter verification code">
      
      </div>
     
      <button type="button" onclick="codeverify();">Verify code</button>
    
    </form>
    <script src="https://www.gstatic.com/firebasejs/8.3.1/firebase.js"></script>
    <script>
    // Your web app's Firebase configuration
    var firebaseConfig = {
                apiKey: "AIzaSyCur8HsK_bQ4lY-JG4vqihYDbCEax6S-TI",
                authDomain: "mitra-4b7a6.firebaseapp.com",
                projectId: "mitra-4b7a6",
                storageBucket: "mitra-4b7a6.appspot.com",
                messagingSenderId: "194254162379",
                appId: "1:194254162379:web:686e48ff38fbab52e38e4e",
                measurementId: "G-XL7Q6FDHX3"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
    
</script>
    <script src="firebase.js" type="text/javascript"></script>
  </body>
</html>