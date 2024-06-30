<?php

$path = '';

include_once 'components/header.php';

?>

<body>

  <?php include $path . 'widgets/navbar.php'; ?>
  <?php include $path . 'widgets/offcanvas_settings.php'; ?>

  <script>
    var search_bar = document.getElementById('search_bar');
    var search_button = document.getElementById('search_button');
    var search_button2 = document.getElementById('search_button2');
    var sidebar_button = document.getElementById('sidebar_button');

    search_bar.remove();
    search_button.remove();
    search_button2.remove();
    sidebar_button.remove();

  </script>

  <div
    style="background-image: linear-gradient(to bottom right, #0098ca50, #ff651030); margin-bottom: -48px; height: 95vh">
    <div class="container" style="margin-top: 56px; ">
      <div class="main-content">
        <div class="mt-5">
          <!-- Tagline -->
          <div class="row justify-content-center small">
            <div class="col-12 d-flex justify-content-center align-items-center">
              <button class="btn btn-version btn-sm px-2" style="color: black"><b>New in v1.0</b></button>
              <p class="mx-4 text-body" style="margin: auto;">The start of BU Design System!</p>
            </div>
          </div>

          <!-- Description -->
          <div class="row mt-5 justify-content-center align-items-center">
            <div class="col-12 col-md-7 d-flex flex-column align-items-center">
              <img class="img-fluid vw-10 w-50 w-md-25" src="assets/img/logo.png">
              <h1 class="display-5 mt-5 text-center text-black" style="font-weight: bolder">BU-tiful designs, with BUDz
              </h1>
              <p class="text-black-50 text-center mt-3">Comprehensive collection of visual assets, components, and UI
                elements that provides a solid foundation for building beautiful and consistent user interfaces.</p>
            </div>
          </div>

          <!-- Read the docs Button -->
          <div class="row mt-5">
            <div class="col-12 d-flex justify-content-center align-items-center">
              <a href="pages/getting_started/introduction.php" style="text-decoration: none">
                <button class="btn btn-docs btn-lg p-3 px-5 d-flex align-items-center">
                  <i class="ti-book pe-2"></i>
                  <span>Read the docs</span>
                </button>
              </a>
            </div>
          </div>

          <!-- Additional Space for Content -->

        </div>
      </div>
    </div>
  </div>

  <?php include $path . 'widgets/footer.php'; ?>
  <?php include $path . 'components/footer.php'; ?>
</body>

</html>