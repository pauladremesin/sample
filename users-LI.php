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
    padding-left: 80%;
	}

	.has-text-centered{
		color: #99cc67;
    font-size: 40px;
    margin-left: 50px;
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
  font-size: 15px;
  color: #818181;
  
}

.sidenav a:hover {
  color: #f1f1f1;
}




/*icon css*/
	.icon {
		color: white;
		padding-top: 18px;
    font-family: montserrat;
		
	}
/*icon css*/
	.fa-user{
		color: white
	}

/*hero and dashboard position css*/

	.awit {
		position: fixed;
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

  .columns{
    
    background-color: #fff;
    padding: 0;
    padding-top: 150px;
    margin: 
  }

  .column .card {
    height: 250px;
    margin: 50px;
    margin-top: 15px;
    border-radius: 10px;
    border:solid 1px #99cc67;
    padding-top: 30px;
  }
  
  .column .card:hover{
    height: 260px;
    margin: 50px;
    margin-top: 15px;
    border-radius: 10px;
    width: 500px;

  }

  .card p{
    text-align: center;
    padding-top: 80px;
    font-size:45px;
  }

  .card p:hover{
    font-size: 50px;
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
  <span class="icon" style="padding-left: 65px;">
  <i class="fas fa-user-shield"></i>
  <a href="admin.php" style="padding-left: 16px;">ADMINS</a>
  </span>
  <br><span class="icon" style="padding-left: 58px;">
  <i class="fas fa-users"></i>
  <a href="users.php" style="padding-left: 17px;">USERS</a>
  </span>
  <br>
  <span class="icon" style="padding-left: 90px; , padding-right: 0px;">
  <i class="fas fa-handshake"></i>
  <a href="transaction.php" style="padding-left: 14px;">TRANSACTIONS</a>
  </span>
  <br>
  <span class="icon" style="padding-left: 67px; padding-right: 0px;">
  <i class="fas fa-mail-bulk"></i>
  <a href="request.php">REQUEST</a>
  </span>
  <br>
  <span class="icon" style="padding-left: 57px;">
  <i class="fas fa-chart-line"></i>
  <a href="sales.php">SALES</a>
  </span>
  <br>
  <span class="icon" style="padding-left: 66px;">
  <i class="fas fa-sign-out-alt"></i>
  <a href="login.php">LOGOUT</a>
  </span>
  

<!-- text footer -->

  <footer>
        <h5>ZERTERRA | 2019</h5>
    </footer>
</div>


<!-- TOP NAV -->
<section class="awit">
<section class="hero">
  <div class="hero-body">
    <div class="container">
      <h1 class="title" style="padding-top: 10px;">
      <span class="">
      	<span style="font-family: montserrat;"> ADMIN</span>
 <i class="far fa-user"></i>
  
  </span>
      </h1>
    </div>
  </div>
</section>
<div class="level-item has-text-centered" style="
    padding-top: 10px;
    margin-top: 10px;
    width: 500px;
    font-family: montserrat;
">
	USERS
	</div>


<hr class="hr">
</section>


<!-- user -->
<div>
<div class="columns">
  <div class="column is-5" style="margin-left: 190px;">
    <div class="card">
  
      <div class="media-content">
        <img src="images/pendingIcon.png" style="height: 126px; width: 126px; ">
        <p>USERS LIST</p>
      </div>
    </div>

  </div>

  <div class="column is-5">
   <div class="card">
  
      <div class="media-content">
        <p>USERS INFO</p>
      </div>
    </div>

   
  </div>
  </div>
  
</div>
</div>


</body>
</html>