<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
    text-decoration-color: white;
}

* {
  box-sizing: border-box;
}
.bg-img {
  /* The image used */
  background-image: url("bgfav.jpg");

  min-height: 1000px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}


.container {
  position: absolute;
  right: 20%;
  left: 30%;
  margin: 20px;
  max-height:100%;
  max-width: 580px;
  padding: 16px;
  background: rgba(0,0,0,0.45);
}

input[type=text], input[type=password],input[type=email] 
 {
  border-radius:8px;
  min-width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}


input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
button[type=submit] {
  margin-top: 4%;
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  border-radius: 2px;
  cursor: pointer;
  width: 40%;
  margin-left: 30%;
  margin-right: 30%;
  position: center;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}

@media screen and (max-width: 600px )
{
  .container{
    right: 0%;
    left: 0%;

    position: center;
    max-width: 100%
  }

  }
  .bg-img{
    max-height:100%;
    width: 100%;
  }
}

</style>
</head>
<body>



<div class="bg-img">
    <h1><center><p style="color: white;"><big><big>Successfully signed</big></big></p></center></h1>
<form name ="signup"    class="container">

    <p style="color: white" ><big><b><big>Thank you for signing up.You will receive regular updates from the website.</big></b></big></p><br>
    
      <center>
        <a href="index.html"<button>Home</button></a></center>
  </form>
</div>


</body>
</html>