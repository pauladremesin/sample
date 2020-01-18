<?php
    session_start();
    
include 'connection.php';

 
?>

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
      height: 360px;

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
  <a href="users.php" id="showModal">USERS</a>
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
    <span style="padding-left: 20px;">  USERS LIST  </span> 
  </div>
   <div class="column is-10" style="padding-top: 30px;">
    <span>
    <div>
    <button style="margin: 0; margin-left: 250px;" class="button is-green modal-button" data-target="#myModal" aria-haspopup="true"><i class="fas fa-user-plus"></i> ADD</button>
    <div class="modal" id="myModal">
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">ADD USERS</p>
      <button class="modal-close" aria-label="close"></button>
    </header>
     <form method="POST" class="modal-card-body">
              
                      <div class="field">
                      <div class="control">
                        <input class="input1" type="text" name="fname" placeholder="First Name" required="">
                      </div>
                      <div class="control">
                        <input class="input1" type="text" name="lname" placeholder="Last Name" required="">
                      </div>
                      <div class="control">
                        <input class="input1" type="email" name="email" placeholder="Email " required="">
                      </div>
                      <div class="control">
                        <input class="input1" type="text" name="address" placeholder="Address" required="">
                      </div>
                      <div class="control">
                        <input class="input1" type="number" name="contact" placeholder="Contact" required="">
                      </div>
                        <div class="control" style="margin-top: 10px;">
                       <!--  <input class="input1" type="text" name="role" placeholder="Role" required=""> -->
                       <div class="select">
                         
                      </div>
                      </div>
                      
                      
                      <button type="submit" class="button is-success" name="btn_add_user">Save</button>
                      
                      

                    </form>

                    </div>
                  </div>
                </div>
              </div>
     
      
   </span> 
  </div>
</div>




</section>

<hr class="hr">
<!-- TABLE DATA -->
 

<div class="bernard" id="myHeader">



<table id="customers">
    <thead>
<tr>
    <th>ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Remaining Days</th>
    <th>Action</th>
  </tr>
</thead>


<!-- TABLE CONTENT -->

 <tbody>
                           <?php

                         $sql = "SELECT * FROM users_list WHERE is_active='1'" ;
                          $result = $con->query($sql);
                            if ($result->num_rows > 0) {
                       while($row = $result->fetch_assoc()) 
                        {
                          $id = $row['id'];
                          $fname = $row['FirstName'];
                          $lname = $row['LastName'];
                          $rdays = $row['RemainingDays'];
                          $email = $row['email'];
                          $Address = $row['Address'];
                          $contact = $row['Contact'];
                      
                        ?>
                        
                          <tr>
                   

                    <td>
                        <?php echo $id; ?>
                    </td>

                     <td>
                        <?php echo $fname; ?>
                    </td>

                     <td>
                        <?php echo $lname; ?>
                    </td>

                     <td>
                        <?php echo $rdays; ?>
                    </td>
                    <td>
                       <button data-target="#edit<?php echo $id;?>" class="button is-primary is-small modal-button" id="btn_update" name="btn-update"><i class="far fa-edit"></i>
                           </button>

                             <div id="edit<?php echo $id; ?>" class="modal" role="dialog">
                               <div class="modal-background"></div>
                      <div class="modal-card">
                        <header class="modal-card-head">
                          <p class="modal-card-title">EDIT ACCOUNT</p>
                          <button class="modal-close" aria-label="close"></button>
                        </header>
                         <form method="POST" class="modal-card-body" style="padding-bottom: 10px;">
              
                      <div class="field">
                        <div class="control">
                        <div class="field">
                      <input type="hidden" name="edit_id" value="<?php echo $id; ?>">
                      </div>
                      </div>
                      <div class="control">
                        <input class="input1" type="text" name="edit_fname" value="<?php echo $fname; ?>" required="">
                      </div>
                      <div class="control">
                        <input class="input1" type="text" name="edit_lname" value="<?php echo $lname; ?>" required="">
                      </div>
                      <div class="control">
                        <input class="input1" type="email" name="edit_email" value="<?php echo $email; ?>"   required="">
                      </div>
                      <div class="control">
                        <input class="input1" type="text" name="edit_address" value="<?php echo $Address; ?>"  required="">
                      </div>
                      <div class="control">
                        <input class="input1" type="number" name="edit_contact" value="<?php echo $contact; ?>"  required="">
                      </div>
                        <div class="control" style="margin-top: 10px;">
                        
                       <!-- <div class="select">
                         <select style="width: 1000px; padding-top:5px; border:solid 1px;" name="role"required="">
                          <option >Super Admin</option>
                          <option>Admin</option>
                         </select>
                      </div> -->
                      </div>
                      </div>
                      
                      <button type="submit" name="updated_user" class="button is-success">Save</button>
                      <button class="button is-danger">Cancel</button>

                    </form>

                    </div>
                             </div>


                             <button data-target="#delete<?php echo $id;?>" class="button is-danger is-small modal-button"  id="btn_delete" name="btn-delete"><i class="fas fa-trash-alt"></i>
                          </button></a>


                    <div id="delete<?php echo $id; ?>" class="modal" role="dialog">

                    <div class="modal-background"></div>
                    <div class="modal-card">
                      <header class="modal-card-head">
                        <p class="modal-card-title">REMOVE ACCOUNT</p>
                        <button class="modal-close" aria-label="close"></button>
                      </header>
                <form method="POST" class="modal-card-body">
              
                      <div class="field">
                      <input type="hidden" name="delete_id" value="<?php echo $id; ?>">
                      </div>

                       <div class="is-danger">Are you Sure you want Delete <strong>
                                                "<?php echo $fname .' '.$lname;?>"?</strong> </div>
                                    <div class="modal-footer">
                          </div>
                      <div style = "margin-bottom: 10px; margin-top: 20px; margin-left: 400px; margin-right: auto;">
                         <button  class="button is-success" name="acnt_remove">REMOVE</button>
                          <button class="button is-danger">Cancel</button>
                      </div>
                </form>

                    </div>
                  </div>
                    </div>




                      </td>
                      
<?php 
}

              


if(isset($_POST['btn_add_user'])){

  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $contact = $_POST['contact'];
  
        $sql ="INSERT INTO users_list (FirstName,LastName,email,Address,Contact) VALUES ('$fname','$lname','$email','$address','$contact')";
        if($con->query($sql) === TRUE){
          echo "<script>window.alert('New Users is added!');</script>";
          echo '<script>window.location.href="users.php"</script>';
        }else{
          echo "<script>window.alert('Saving new record failed!');</script>";
        }
      }
  
      if(isset($_POST['acnt_remove'])){
        $delete_id = $_POST['delete_id'];
        
     

        $sql= "UPDATE users_list SET is_active='0' WHERE id='$delete_id'";
        if($con->query($sql) === TRUE){
                echo "<script>window.alert('RECORD IS DELETED!');</script>";
                echo '<script>window.location.href="users.php"</script>';
              }else{
                echo "<script>window.alert('SOMETHING WENT WRONG, PLEASE TRY AGAIN!');</script>";
              }
      }

      if(isset($_POST['updated_user'])){
        $id = $_POST['edit_id'];
        $fname = $_POST['edit_fname'];
        $lname = $_POST['edit_lname'];
        $Email= $_POST['edit_email'];
        $Address = $_POST['edit_address'];
        $contact = $_POST['edit_contact'];



        $sql = "UPDATE users_list SET FirstName='$fname',LastName='$lname',email='$Email',Address='$Address', Contact='$contact' WHERE id='$id'";
        if($con->query($sql) === TRUE){
                echo "<script>window.alert('RECORD IS UPDATED!');</script>";
                echo '<script>window.location.href="users.php"</script>';
              }else{
                echo "<script>window.alert('SOMETHING WENT WRONG, PLEASE TRY AGAIN!');</script>";
              }

            }

      }

?>
                    
</tr></tbody>

  </table>




        </div>

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

document.querySelectorAll('.modal-button').forEach(function(el) {
  el.addEventListener('click', function() {
    var target = document.querySelector(el.getAttribute('data-target'));
    
    target.classList.add('is-active');
    
    target.querySelector('.modal-close').addEventListener('click',   function() {
        target.classList.remove('is-active');
     });
  });
});
</script>


