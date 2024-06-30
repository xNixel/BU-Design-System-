<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasSidebar" aria-labelledby="offcanvasSidebarLabel">

    <!-- Header -->
    <div class="offcanvas-header bg-navbar navbar-brand">
        <h5 class="offcanvas-title ">
            <!-- Logo --><img src="<?php echo $path ?>assets/img/logo.png" class="pe-3" style="height: 2rem">
            <!-- Wordmark -->BU Design System
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <!-- Body -->
    <div class="offcanvas-body" style="width: 104%; overflow-x: hidden; overflow-y: hidden">

        <!-- Import Sidebar Widget -->
        <?php include $path . 'widgets/sidebar.php'; ?>
    </div>
</div>