<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="icon" href="images/plainlogo.png" type="image/gif" sizes="100x100">
  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
    <script type="text/javascript" src="dist/js/modal-fx.min.js"></script>
    <link rel="stylesheet" href="dist/css/modal-fx.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/bulma-modal-fx/dist/css/modal-fx.min.css" />
  <title>
    zerTERRA
  </title>

  <style>

body {
margin: 0;
background-color: #f2f2f2;
text-align: justify-all;

}

/*underline css*/
    .hr{
      background-color: #8fbc64;
      height: 3px;
      margin: 9px;
    }

    .subtitle { 
     margin: 0;
     padding: 0;
     padding-left: 170px;
       padding-top: 5px;
       color: #8fbc64;
       font-weight:500;
     font-size: 21.5px;
       font-family: 'Montserrat' , sans-serif;
    }
/*hero*/
  .hero-body{
    padding: 13px;
    background-color:#8fbc64;
    margin: 0;
    
  }

/*ADMIN CSS TEXT*/

  .title{
    color: #363636;
    font-size: 16px;
    font-weight: 600;
    line-height: 1.125;
    margin-right: auto;
    margin-left: auto;
    padding-left: 91%;
  }

  .has-text-centered{
    color: #99cc67;
    font-size: 40px;
    margin-left: 40px;
    padding-bottom: 12px;
    font-family: 'Montserrat Semi-Bold', sans-serif;


  }


/*side bar css*/
  .sidenav {
    height: 100%;
    width: 170px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #283a47;
    overflow-x: hidden;
    padding-top: 20px;


}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  text-align: justify-all;
  font-size: 12px;
  color: white;
  font-family: 'Montserrat Semi-Bold', sans-serif;
  
}

.sidenav a:hover {
  color: #f1f1f1;
}




/*icon css*/
  .icon {
    color: white;
    padding-top: 18px;
    
  }
/*icon css*/
  .fa-user{
    color: white
  }

/*hero and dashboard position css*/

  /*.awit {
    position: fixed;
    width: 100%;

  }*/
  
.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}


/*footer css*/

  footer {
   position: fixed;
   padding-left: 22px;
   bottom: 0;
   width: 10%;
   background-color: #283a47;
   color: gray;
   text-align: center;
   font-size: 15px;
}

#myDIV {
  text-align: center;
}

.columns{
    
    background-color: #fff;
    padding: 0px;
    height: 280px;
    margin: 0px;


    
  }

  .column .card{
    height: 250px;
    margin: 0px;
    border-radius: 10px;
    border:solid 1px #99cc67;
    padding-top: 30px;
  }
  
  .column .card:hover{
    margin: 0px;
    margin-top: 3px;
    border-radius: 10px;


  }

  .card p{
    text-align: center;
    padding-top: 0px;
    font-size: 33px;
  }

  .card p:hover{

    font-size: 35px;
  }


  .bernard {
    padding-left: 10px;
    padding-top: 170px;
    margin-left: 180px;
    margin-right: 20px;
    margin-bottom: 0px;

}

#customers {
  font-family: 'Montserrat Semi-Bold', sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #99cc67;
  color: white;
}

.button {
  background-color: #99cc67;
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
  font-family: 'Montserrat Semi-Bold', sans-serif;
  margin-bottom: 50px;
}

.fa-users {
  margin-left: 33%; margin-right: 30%;
}

.fa-truck {
  margin-left: 35%; margin-right: 30%;
  margin-top: 40px;
}

.fa-history {
  margin-left: 33%; margin-right: 30%;
  margin-top: 35px;
}

.fa-info-circle {
  margin-left: 33%; margin-right: 30%;
  margin-top: 35px;
}
  </style>

</head>

<body>

<!-- SIDEBAR --> 

<div class="sidenav">
  <img src="images/logo3.png" id="img" style="width: 100%; max-width: 120px" >
  <hr class="hr" style="
    margin-top: 5px;
">
  <span class="icon" style="padding-left: 81px;">
  <i class="fas fa-columns"></i>
  <a href="dashboard.php">DASHBOARD</a>
  </span>
  <br>
  <span class="icon" style="padding-left: 67px; padding-top: 30px;">
  <i class="fas fa-user-shield"></i>
  <a href="admin.php" style="padding-left: 13px;">ADMINS</a>
  </span>
  <br>
  <span class="icon" style="padding-left: 64px; padding-top: 30px;">
  <i class="fas fa-users"></i>
  <a href="users.php">USERS</a>
  </span>
  <br>
  <span class="icon" style="padding-left: 90px; , padding-right: 0px; padding-top: 30px;">
  <i class="fas fa-handshake"></i>
  <a href="transaction.php">TRANSACTIONS</a>
  </span>
  <br>
  <span class="icon" style="padding-left: 74px; padding-right: 0px; padding-top: 30px;">
  <i class="fas fa-mail-bulk"></i>
  <a href="request.php">REQUEST</a>
  </span>
  <br>
  <span class="icon" style="padding-left: 65px; padding-top: 30px;">
  <i class="fas fa-chart-line"></i>
  <a href="sales.php">SALES</a>
  </span>
  <br>
  <span class="icon" style="padding-left: 71px; padding-top: 30px;">
  <i class="fas fa-sign-out-alt"></i>
  <a href="login.php">LOGOUT</a>
  </span>


<!-- text footer -->

  <footer>
        <h5>ZERTERRA | 2019</h5>
    </footer>
</div>


<!-- TOP NAV -->
<section class="awit" id="myHeader">
<section class="hero">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
      <span class="">
        <span> ADMIN</span>
 <i class="far fa-user"></i>
  
  </span>
      </h1>
    </div>
  </div>
</section>
<div class="level-item has-text-centered" style="
    padding-top: 10px;
    margin-top: 10px;
    width: 450px;
">
  SALES
  </div>


<hr class="hr">
</section>


<!-- DASHBOARD PICTURE -->
<div>
  <img src="images/orders.png" style="width:100%; max-width: 1100px; height:550px; padding-left: 95px; margin-bottom: 0px; padding-right: 0px; " >
</div>



</body>
</html>




<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>



