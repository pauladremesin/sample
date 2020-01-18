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
    <link rel="stylesheet" href="dist/css/modal-fx.min.css" />
    <script type="text/javascript" src="dist/js/modal-fx.min.js"></script>
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
/*      margin: 9px;*/
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
    margin: 0;
    background-color:#8fbc64;
    
  }

/*ADMIN CSS TEXT*/

  .title{
    color: #363636;
    font-size: 16px;
    font-weight: 600;
   /* line-height: 1.125;
    margin-right: auto;
    margin-left: auto;
    padding-left: 1100px;*/
  }

  .has-text-centered{
    color: #99cc67;
    font-size: 40px;
    margin-left: 10px;
    padding-bottom: 12px;
    font-family: 'Montserrat Semi-Bold', sans-serif;
    padding-left: 90px;


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
    padding-top: 20px;
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
  margin-bottom: 0px;
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

#order-modal {
      height: 440px;
      width: 100%;
      max-width: 1000px;
}
.modal-card-head{
      background-color: white;
}
.modal-card-body{
      border-bottom-left-radius:6px;
      border-bottom-right-radius:6px;
      padding-top: 0;
      padding-bottom: 0;
      height: 340px;

}

            /*order modal*/
            @media screen and (max-width: 640px) {
                  #order-modal-content{
                        max-width: 600px;
                        max-height: 380px;
                  }
            }

            @media (min-width: 641px) and (max-width: 700px) {
                  #order-modal {
                        max-width: 950px;
                        height: 440px;
                        margin-top: 60px;
                        padding:0;
                   }

                  #order-modal-content {
                        max-width: 600px;
                        max-height: 490px;
                  }
                  .modal-card-head{
                        padding-bottom: 5px;
                         width: 480px;
                  }
                  .modal-card-body{
                        width: 480px;
                        height: 430px;
                  }
            }

            @media (min-width: 701px) and (max-width: 768px) {
                   #order-modal-content, .order-modal {
                        max-width: 800px;
                        max-height: 380px;
                  }
            }

            @media (min-width: 769px) and (max-width: 800px) {
                   #order-modal-content, .order-modal {
                        max-width: 800px;
                        max-height: 380px;
                  }
            }

            @media (min-width: 801px) and (max-width: 900px) {
                   #order-modal-content, .order-modal {
                        max-width: 600px;
                        max-height: 380px;
                  }
            }

            @media (min-width: 901px) and (max-width: 1025px) {
                   #order-modal-content, .order-modal {
                        max-width: 600px;
                        max-height: 380px;
                  }

            }

.input1{
    width: 100%;
    height: 40px;
    margin-top: 10px;
    border: solid #333 1px;
    padding: 10px;
    font-size: 16px;
    border-radius: 5px;
 }

 /*.input1:hover{
  border: solid #27a745 1px; 
 }
 .textarea1:hover{
  border: solid #27a745 1px; 
 }*/


 .textarea1 {
    display: block;
    width: 100%;
    max-width: 1158px;
    height: 100px;
    padding: .625em;
    margin-top: 10px;
    resize: none;
    border: solid #333 1px;
    font-size: 16px;
    border-radius: 5px;

}

 .btn{
  background-color: #99cc67;
  border: none;
  border-radius: 5px;
  color: white;
  padding: 8px 18px;
  font-size: 16px;
  cursor: pointer;
  margin-top: 10px;
  margin-left: 0;
 }

 
  </style>

</head>

<body>

<!-- SIDEBAR --> 

<div class="sidenav">
  <img src="images/logo3.png" id="img" style="width: 100%; max-width: 120px" >
  <hr class="hr" style="
    margin-top: 15px;
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
  <a id="showModal">USERS</a>
  </span>
    <div class="container">
                    <div id="service-modal" class="modal modal-fx-slideTop">
                    <div class="modal-background"></div>
                    <div class="modal-content">
                      <div class="card" id="card-modal">
              <div class="card-content">
                
                <div>
                <div class="columns">
                <div class="column is-6">
                <div class="card">
                <div class="media-content">
                <img src="images/userslistIcon.png" style="height: 130px; width: 130px;">
                <a href="users.php"><p>USERS LIST</p></a>
                </div>
                </div>
                </div>

                <div class="column is-6">
                <div class="card">
                <div class="media-content">
                <img src="images/usersinfo.png" style="height: 130px; width: 130px; ">
                <a href="user-info.php"><p>USERS INFO</p></a>
                </div>
                </div> 
                </div>
                </div>
                </div>


              
              </div>
            </div>
                    </div>
                    <button class="modal-close is-large" aria-label="close" id="image-modal-close"></button>
                  </div>
                </div>
  <span class="icon" style="padding-left: 90px; , padding-right: 0px; padding-top: 30px;">
  <i class="fas fa-handshake"></i>
  <a id="showModal1">TRANSACTIONS</a>
  </span>
  <div class="container">
                    <div id="service-modal1" class="modal modal-fx-slideTop">
                    <div class="modal-background"></div>
                    <div class="modal-content">
                      <div class="card" id="card-modal1">
              <div class="card-content">
                
                <div>
                <div class="columns">
                <div class="column is-6">
                <div class="card">
                <div class="media-content">
                <img src="images/pendingIcon.png" style="height: 126px; width: 126px; ">
                <a ><P>PENDING</P></a>
                </div>
                </div>
                </div>

                <div class="column is-6">
                <div class="card">
                <div class="media-content">
                <img src="images/deliveryIcon.png" style="height: 130px; width: 130px;"></i>
                <p>DELIVERY</p>
                </div>
                </div> 
                </div>
                </div>
                </div>


              
              </div>
            </div>
                    </div>
                    <button class="modal-close is-large" aria-label="close" id="image-modal-close1"></button>
                  </div>
                </div>
  
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

  

<!-- text footer -->

  <footer>
        <h5>ZERTERRA | 2019</h5>
    </footer>
</div>


<!-- TOP NAV -->
<section class="awit">
<section class="hero">
  <div class="hero-body">
    <div class="container" style="margin-left: 200px;">
      <!-- <h1 class="title-end">
      <span class=""> 
        <span> ADMIN</span>
 <i class="far fa-user"></i> -->
 <h1 claadss="title" style="margin-left: 1000px;">
       <span> ADMIN</span> <i class="far fa-user"></i>
      </h1>
  
  </span>
      </h1>
    </div>
  </div>
</section>
<div class="columns has-text-centered" style="height: 100px; background-color: #f2f2f2;">
  <div class="column is-5" style="padding-top: 20px;" >
    <span style="padding-left: 20px;">  USERS INFO  </span> 
  </div>
   <div class="column is-10" style="padding-top: 30px;">
    
  </div>
</div>




</section>

<hr class="hr">
<!-- TABLE DATA -->
 <?php
                      include "connection.php";

                      $sql = 'SELECT * FROM users_list';
                      $statement = $dbc->prepare($sql);
                      $statement->execute();
                      $account = $statement->fetchAll(PDO::FETCH_OBJ);
                      ?>

<div class="bernard" id="myHeader">

<form action="/retrieving.php" method="POST">

<table id="customers">
    <thead>
<tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Remaining Days</th>
    <th>Email</th>
    <th>Address</th>
    <th>Contact</th>
    <th style="text-align: center;">Action</th>
  
  </tr>
</thead>
<tbody>
                     <?php foreach($account as $users): ?>
                    <tr>
                        <td><?= $users->FirstName; ?></td>
                        <td><?= $users->LastName; ?></td>
                        <td><?= $users->RemainingDays; ?></td>
                        <td><?= $users->email; ?></td>
                        <td><?= $users->Address; ?></td>
                        <td><?= $users->Contact; ?></td>
                      

                        <td>
                        <a href="updateAccount.php?ID=<?= $users->ID ?>" class="btn btn-info btn-xl"> Update</a>
                        <br>
                        <br>
                        <a onclick="return confirm('Are you sure you want to delete this entry?')" href="delete.php?ID=<?= $users->ID ?>" class='btn btn-danger'> Delete</i></a>
                         </td>
                    </tr>
                     <?php endforeach; ?>
                 </tbody>


  </table>
</form>

<!-- <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Data Table Example</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                     <th>ID</th>
                      <th>Account Name</th>
                      <th>User Name</th>
                      <th>Role</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                   <tbody>
                     <?php foreach($account as $users): ?>
                    <tr>
                        <td><?= $users->ID; ?></td>
                        <td><?= $users->AccountName; ?></td>
                        <td><?= $users->Username; ?></td>
                        <td><?= $users->AccounType; ?></td>
                       
                        <td>
                         <a href="updateAccount.php?ID=<?= $users->ID ?>" class="btn btn-info btn-xl"><i class="far fa-edit"> Update</i></a>
                             <a onclick="return confirm('Are you sure you want to delete this entry?')" href="delete.php?ID=<?= $users->ID ?>" class='btn btn-danger'><i class="far fa-trash-alt"> Delete</i></a>
                         </td>
                    </tr>
                     <?php endforeach; ?>
                 </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>

        </div> -->

        </div>

</div>
</body>
</html>



<script>
function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>


<script>
                    var btn = document.querySelector('#showModal');
                    var modalDlg = document.querySelector('#service-modal');
                    var imageModalCloseBtn = document.querySelector('#image-modal-close');
                    btn.addEventListener('click', function(){
                      modalDlg.classList.add('is-active');
                    });

                    imageModalCloseBtn.addEventListener('click', function(){
                      modalDlg.classList.remove('is-active');
                    });
                    // .click(function() {
                    //   .addClass("is-active");  
                    // });

                    // $(".modal-close").click(function() {
                    //    $(".modal").removeClass("is-active");
                    // });
                  </script>  


<script>
                    var btn = document.querySelector('#showModal1');
                    var modalDlg2 = document.querySelector('#service-modal1');
                    var imageModalCloseBtn2 = document.querySelector('#image-modal-close1');
                    btn.addEventListener('click', function(){
                      modalDlg2.classList.add('is-active');
                    });

                    imageModalCloseBtn2.addEventListener('click', function(){
                      modalDlg2.classList.remove('is-active');
                    });
                    // .click(function() {
                    //   .addClass("is-active");  
                    // });

                    // $(".modal-close").click(function() {
                    //    $(".modal").removeClass("is-active");
                    // });
                  </script>  


<script>
                    var btn = document.querySelector('#showModal2');
                    var modalDlg3 = document.querySelector('#image-modal2');
                    var imageModalCloseBtn3 = document.querySelector('#image-modal-close2');
                    btn.addEventListener('click', function(){
                      modalDlg3.classList.add('is-active');
                    });

                    imageModalCloseBtn3.addEventListener('click', function(){
                      modalDlg3.classList.remove('is-active');
                    });
                    // .click(function() {
                    //   .addClass("is-active");  
                    // });

                    // $(".modal-close").click(function() {
                    //    $(".modal").removeClass("is-active");
                    // });
</script>


<script>
                    var btn = document.querySelector('#showModal3');
                    var modalDlg4 = document.querySelector('#image-modal3');
                    var imageModalCloseBtn4 = document.querySelector('#image-modal-close3');
                    btn.addEventListener('click', function(){
                      modalDlg4.classList.add('is-active');
                    });

                    imageModalCloseBtn4.addEventListener('click', function(){
                      modalDlg4.classList.remove('is-active');
                    });
                    // .click(function() {
                    //   .addClass("is-active");  
                    // });

                    // $(".modal-close").click(function() {
                    //    $(".modal").removeClass("is-active");
                    // });
</script>

<script>
                    var btn = document.querySelector('#showModal7');
                    var modalDlg5 = document.querySelector('#image-modal7');
                    var imageModalCloseBtn5 = document.querySelector('#image-modal-close7');
                    btn.addEventListener('click', function(){
                      modalDlg5.classList.add('is-active');
                    });

                    imageModalCloseBtn5.addEventListener('click', function(){
                      modalDlg5.classList.remove('is-active');
                    });
                    // .click(function() {
                    //   .addClass("is-active");  
                    // });

                    // $(".modal-close").click(function() {
                    //    $(".modal").removeClass("is-active");
                    // });
</script>


</body>
</html>



