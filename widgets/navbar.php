<header>
  <nav class="navbar bg-navbar navbar-light navbar-expand-md bg-faded justify-content-center fixed-top shadow-sm">
    <div class="container d-flex align-items-center">

      <!-- Sidebar Toggler (Responsive Mode) -->
      <button class="navbar-toggler d-md-block d-lg-none focus-ring" id="sidebar_button" type="button"
        data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar"
        style="border: none; --bs-focus-ring-color: none; border-color: rgba(0,0,0,0)" data-toggle="tooltip"
        data-placement="bottom" title="Open Sidebar">
        <i class="material-icons">menu</i>
      </button>

      <!-- Navbar Branding -->
      <a class="navbar-brand d-flex align-items-center w-50 me-auto" href="<?php echo $path ?>index.php">
        <!-- Logo --> <img src="<?php echo $path ?>assets/img/logo.png" style="height: 2rem" class="pe-2">
        <!-- Wordmark --> BU DESIGN SYSTEM
      </a>

      <!-- Search Toggler (Responsive Mode) -->
      <a class="navbar-toggler focus-ring" id="search_button" type="button" href="#" data-bs-toggle="modal"
        data-bs-target="#searchModal" style="border: none; --bs-focus-ring-color: none; border-color: rgba(0,0,0,0)">
        <i class="material-icons">search</i>
      </a>

      <!-- Settings Toggler (Responsive Mode) -->
      <button class="navbar-toggler focus-ring" href="#" type="button" data-bs-toggle="offcanvas"
        data-bs-target="#offcanvasSettings" aria-controls="offcanvasSettings"
        style="border: none; --bs-focus-ring-color: none; border-color: rgba(0,0,0,0)">
        <i class="material-icons">more_horiz</i>
      </button>

      <!-- Navbar Items -->
      <div class="navbar-collapse w-100">

        <!-- Center Navbar Item -->
        <ul class="navbar-nav ms-auto w-100 align-content-center justify-content-center d-flex align-items-center">

          <!-- Search Bar -->
          <a href="#" data-bs-toggle="modal" data-bs-target="#searchModal" id="search_bar"
            class="d-flex justify-content-center d-none d-md-none d-lg-block">
            <div class="d-flex align-items-center bg-light p-2 rounded-2 shadow-sm text-black-50" style="width: 30vh">
              <i class="material-icons">search</i>
              <div> Search</div>
              <div class="border rounded-2 ms-auto justify-content-center d-flex px-2">Ctrl K</div>
            </div>
          </a>

        </ul>

        <!-- Right Navbar Items -->
        <ul class="nav navbar-nav ms-auto w-100 align-content-center justify-content-end d-flex align-items-center">

          <!-- Search Button (Responsive Mode - MD) -->
          <li class="nav-item d-none d-md-block d-lg-none">
            <a class="nav-link" id="search_button2" href="#" data-bs-toggle="modal" data-bs-target="#searchModal">
              <div style="height: 25px">
                <i class="material-icons-outlined">search</i>
              </div>
            </a>
          </li>

          <!-- Settings Button (Responsive Mode - MD) -->
          <li class="nav-item d-none d-md-block d-lg-none">
            <a class="nav-link" href="#" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSettings"
              aria-controls="offcanvasSettings"
              style="border: none; --bs-focus-ring-color: none; border-color: rgba(0,0,0,0)">
              <div style="height: 25px">
                <i class="material-icons-outlined">more_horiz</i>
              </div>
            </a>
          </li>

          <!-- Improved Theme Button -->
          <!-- TODO(patrick): Implement better button

          Reference:
          https://github.com/devmode-on/Animated-Dark-Mode-Button
          https://www.youtube.com/watch?v=MNf8DUej1Vo
        
         -->
          <!-- <li class="nav-item">
            <div class="btn">
              <div class="btn_indicator">
                <div class="btn_icon-container">
                  <i class="btn_icon fa-solid"></i>
                </div>
              </div>
            </div>
          </li> -->

          <!-- Theme Icon -->
          <li class="nav-item d-none d-md-none d-lg-block" style="cursor: default; pointer-events: none;">
            <a class="nav-link" href="#">
              <div class="d-flex" style="height: 25px">
                <i class="material-icons-outlined" id="darkmode_icon">dark_mode</i>
              </div>
            </a>
          </li>

          <!-- Theme Switch -->
          <li class="nav-item d-none d-md-none d-lg-block">
            <div class="form-check form-switch">
              <input class="form-check-input bg-light focus-ring lightSwitch"
                style="--bs-focus-ring-color: none; border-color: rgba(0,0,0,0) " type="checkbox" role="switch"
                data-toggle="tooltip" data-placement="bottom" title="Switch to Dark Mode">
            </div>
          </li>

          <!-- Vertical Divider -->
          <li class="nav-item d-none d-md-none d-lg-block" style="cursor: default; pointer-events: none;">
            <a class="nav-link" href="#">
              <div class="d-flex" style="height: 25px">
                <div class="vr"></div>
              </div>
            </a>
          </li>

          <!-- Version Dropdown -->
          <li class="nav-item dropdown d-none d-md-none d-lg-block">
            <a class="nav-link dropdown-toggle" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false"> v1.0 </a>
            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarScrollingDropdown">
              <li><a class="dropdown-item" href="#">v1.1</a></li>
              <li><a class="dropdown-item" href="#">v1.69</a></li>
              <li><a class="dropdown-item" href="#">v4.20</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">All Versions</a></li>
            </ul>
          </li>

        </ul>

      </div>
    </div>
  </nav>
</header>