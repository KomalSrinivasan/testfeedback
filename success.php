<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <link href="logo.png" rel="icon" alt="The Inquisitive logo">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Success !</title>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
          <script   src="https://code.jquery.com/jquery-3.3.1.min.js"   integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="   crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/TweenMax.min.js"></script>
        <link rel="stylesheet" href="../assets/css/success.css">
</head>
<body>
<!-- partial:index.partial.html -->
<div class="screen un">
            <div class="border-top">
            </div>
            
       
            <!-- <img src="../openelective/tickmark.png" id="topIcon" width="200" height="175"> -->
            
            
            <h3 style="margin-top:-8px;">CONGRATUALTIONS!</h3>
            <p id="verify" style="margin-top:20px;">You have successfully submited feedback.</p>
             <a href="Sem3/sem3.html" id="show" ><button id="btnClick">Back to  Form</button></a> 

        </div>

        <script type="text/javascript">
  swal({
  title: "Thankyou!",
  text: "Your Feedback Submitted!",
  icon: "success",
  button: "OK!",
});

</script>
        
<!-- partial -->
<? session_destroy(); ?>

  <script  src="../assets/js/success.js"></script>

</body>
</html>
