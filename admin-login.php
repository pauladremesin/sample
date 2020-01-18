<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/plainlogo.png" type="image/gif" sizes="100x100">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script><link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <title>zerTERRA</title>

    <style>
body, html {
  height: 100%;
  margin: 0;


}

.bg {
 background-image: url(Herobanner.png);
    height: 663px;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    padding-top: 50px;
    width: 100%;
    max-width: 2000px;
}

  .input {
    margin-top: 20px;
    width: 100%;
    max-width: 300px;
     margin-left: 125px;
    margin-right: auto;
    font-family: Montserrat;
  }

  #uname{
    margin-top: 40px;
    margin-right: auto;
  }


  .button{
    border-radius: 5px;
    height: 40px;
    color: #333;
    font-family: Montserrat;
    margin-top: 20px;
    margin-left: 125px;
    background-color: #99cc67;
    border: none;
  }

  .is-transparent{
    width: 100%;
    /*max-width: 400px;*/
    border-top-right-radius:9px;
    border-bottom-right-radius:9px;
    background-color: rgb(54,54,54, 0.7);
    height:550px;
    max-width: 1500px;
  }

  .is-6{
     padding-left: 200px;
  }
  
  #card{
    background-color: rgb(54,54,54, 0);
  }
  .columns{
   
    margin: auto;
  }

  span{
      margin-left: 175px;
      margin-top: 20px;
  }

 label{
    color: white;
     margin-left: 125px;
  }
  label a{
    color: white;
     
  }
   label a:hover{
    border-bottom: solid 1px;
    color: white;
     
  }


  #card1{
    width: 100%;
    /*max-width: 400px;*/
    border-top-left-radius:9px;
    border-bottom-left-radius:9px;
    background-color: white;
    height:550px;
    max-width: 1500px;
  }

  img{
    width: 100%;
    margin:0;
    padding:0;
    max-width: 500px;
    margin-left: 45px;
  }

@media only screen and (max-width: 900px) {
  
}

</style>
</head>
<body>

<div class="bg">

<div class="card" id="card">
  <div class="card-content">
    <div class="content">
      <div class="columns">
  
  


  <div class="column is-6" style="padding:0;">
   <div class="card" id="card1">
     <div class="card-content">
       <div class="content">
         <img src="plainlogo.png">
       </div>
     </div>
   </div>
  </div>
  
<div class="column is-6" style="padding:0;">
   <div class="card is-transparent" style="padding:20px;">
    <div class="card-content">
    <div class="content">

      <span style="color:white; text-align: center; font-size: 50px;"><i class="fas fa-user"></i> LOG IN</span>
      <input class="input" placeholder="username" name="username" id="uname">
      <br>
      <input class="input" type="password" placeholder="password" name="pass">
      <br>
      <button name="login" class="button" ><a href="dashboard.php" style="color:white;">Login</a></button>
    </div>
     <label>
        <input type="checkbox" checked="checked" name="remember" class="rem"> Remember me
      </label>
      <br>
      <label>
        <a href="#"> Forgot Password? </a>
      </label>
    </div>
  </div>
</div>

</div>
    </div>
  </div>
</div>
<!--   
<div class="card is-transparent">
    <div class="card-content">
    <div class="content">
      <input class="input" placeholder="username" name="username">
      <br>
      <input class="input" type="password" placeholder="password" name="pass">
      <br>
      <button name="login" class="button" >Login</button>
    </div>
  </div>
</div> -->


</div>

</body>
</html>