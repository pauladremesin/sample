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
    
  </title>
</head>
<body>
<button style="margin-top: 0px; margin-left: 250px;" class="button" type="button" onclick="myFunction()"  id="showModal3">EDIT</button>
                 <div class="container" id="app">
                  <div id="image-modal3" class="modal">
                    <div class="modal-background"></div>
                    <div class="modal-content" id="order-modal-content">
                     <div class="modal-card" id="order-modal3">
                    <header class="modal-card-head">

                      <p class="modal-card-title">EDIT ADMIN</p>

                      <button class="delete" aria-label="close" id="image-modal-close3"></button>

                    </header>
                    <section class="modal-card-body">
              
                      <div class="field">
                      <div class="control">
                        <input class="input1" type="text" placeholder="First Name" required="">
                      </div>
                      <div class="control">
                        <input class="input1" type="text" placeholder="Last Name" required="">
                      </div>
                      <div class="control">
                        <input class="input1" type="number" placeholder="Contant Number" required="">
                      </div>
                      <div class="control">
                        <input class="input1" type="email" placeholder="Email" required="">
                      </div>
                        <div class="control">
                        <input class="input1" type="text" placeholder="Role" required="">
                      </div>
                      </div>
                      
                      <button class="btn">OK</button>

                    </section>
                    </div>
                  </div>
                </div>
              </div>
            </div> 
</body>
</html>
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
