<?php
    session_start();
?>

<html lang="de">
<head>
    <!-- Meta-Tags -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="keywords" content="Testen, Seite"/>
    <meta name="copyright" content="@Manuel Weid"/>

    
   

    <link href="CSS/style_main.css" rel="stylesheet" type="text/css"/>
    <link href="CSS/theme_colors.css" rel="stylesheet" type="text/css"/>
    <!-- favicon -->
    <link rel="icon" type="image/svg+xml" href="./img/favicon/bootstrap-fill.svg" sizes="any"/>
    <link rel="shortcut icon" href="./img/favicon/favicon.ico"/>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="./JS/counter_up.js"></script>
    
    <title>Test-Page</title>
</head>


<body>
    <!-- offcanvas -->
    <nav class="navigation offcanvas offcanvas-start bg-secondary" tabindex="-1" id="topbar" aria-labelledby="sidebar-label">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="sidebar-label">Navigation</h5>
        <div class="close-nav" offcanvas-title href="#topbar" data-bs-toggle="offcanvas" aria-expanded="false" role="button" aria-controls="sidebar">
          <div class="nav-burger"></div>
        </div>
      </div>

      <div class="offcanvas-body">
        <p>
          Halvah sugar plum marshmallow gummi bears caramels. Muffin lemon drops jujubes candy jelly beans sweet roll. Cheesecake bonbon cookie shortbread chocolate bar cupcake. Caramels gummi bears tiramisu toffee jelly cupcake candy cake.
        </p>
      </div>
    </nav>
    
    <div class="open-nav shadow-lg" href="#topbar" data-bs-toggle="offcanvas" aria-expanded="false" role="button" aria-controls="sidebar">
      <div class="nav-burger"></div>
    </div>

    <main>
      <div class="wrapper-page-1 h-100 bg-primary">
        <div class="headline-wrapper p-lg-5 w-50 h-75 d-flex flex-column  justify-content-center">
          
            <div class="headline text-uppercase">Lorem Ipsum one page </div>
            <div class="secondaryline fs-2">Dessert muffin liquorice</div>
          
        </div>
        <div class="headline-bg d-flex flex-row h-100">
            <div class="headline-bg-left bg-white w-25"></div>
            <div class="headline-bg-right bg-light w-75">
              <video class="video-fluid embed-responsive  " playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                <source src="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4" type="video/mp4">
              </video>
            </div>
        </div>
      </div>
      <div class="wrapper-page-2 h-50 bg-light">
        <div class="d-flex flex-row h-100">
          <div class="left-side d-flex flex-column w-50 justify-content-center align-items-center">
            <div class="headline text-uppercase w-75 pb-2 "> features </div>
            <div class="secondaryline w-75">Cupcake dragée lollipop cheesecake bear claw marshmallow cotton candy. Danish icing bear claw pastry chocolate bar. Tootsie roll powder caramels cake gummies. Pie shortbread bonbon muffin marzipan wafer biscuit. Chupa chups powder cookie fruitcake carrot cake. Candy pudding chupa chups sesame snaps jelly-o. </div>
          </div>
          <div class="right-side w-50 p-2 d-flex flex-row ">
            <div class="container bg-white mw-50 m-1 py-2">
              <div class="count h-50 px-3 text-light lh-1">
                <h1>1</h1>
              </div>
              <div class="text h-50 p-1">
                <div class="headline px-3 fw-bold">
                  <h5>Chocolate</h5>
                </div>
                <div class="secondaryline px-3 lh-sm"> bar shortbread bonbon pastry sugar plum candy fruitcake sesame snaps icing. Toffee ice cream wafer sweet roll cake jujubes jelly dessert. Brownie marzipan pudding pie halvah toffee. Lemon drops cake oat cake cotton candy powder. Chocolate cake jujubes danish pudding powder toffee tart. </div>
              </div>
            </div>
            <div class="container bg-white mw-50 m-1 py-2">
              <div class="count h-50 px-3 text-light lh-1">
                <h1>2</h1>
              </div>
              <div class="text h-50  d-block p-1">
                <div class="headline px-3 fw-bold">
                  <h5>Fruitcake</h5>
                </div>
                <div class="secondaryline d-inline-block px-3 lh-sm">  powder cupcake apple pie chocolate bar powder sesame snaps. Wafer brownie sweet candy canes candy canes. Oat cake shortbread jelly-o jelly beans gingerbread. Sugar plum cake chocolate ice cream icing cheesecake. Pastry jelly jelly beans carrot cake caramels chupa chups cake. </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="three-test bg-white h-100">
        <canvas class="area">

        </canvas>
      </div>
      <div class="wrapper-page-4 h-50 bg-light d-flex flex-column justify-content-center align-items-center">
        <div class="inner-wrapper w-50 h-50 d-flex justify-content-center">
          <?php require ("./PHP/pageVisitor.php") ?>
        </div>
      </div>
      <div class="wrapper-page-5 h-100 bg-primary">

      </div>
      <div class="h-50 bg-secondary">

      </div>
    </main>
    <footer>

    </footer>
    
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
      <symbol id="bootstrap" viewBox="0 0 118 94" >
        <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
      </symbol>
      <symbol id="home" viewBox="0 0 16 16">
        <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
      </symbol>
      <symbol id="speedometer2" viewBox="0 0 16 16">
        <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
        <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"/>
      </symbol>
      <symbol id="table" viewBox="0 0 16 16">
        <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z"/>
      </symbol>
      <symbol id="people-circle" viewBox="0 0 16 16">
        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
      </symbol>
      <symbol id="grid" viewBox="0 0 16 16">
        <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"/>
      </symbol>
    </svg>

    <script type="module" src="JS/cloud_particles_effect.js" async></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>