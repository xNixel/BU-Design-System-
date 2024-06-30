<?php

$path = '../../';
$filename = basename(__FILE__, '.php');

include_once $path . 'components/header.php'; ?>

<body>

    <?php include $path . 'widgets/navbar.php'; ?>
    <?php include $path . 'widgets/offcanvas_sidebar.php'; ?>
    <?php include $path . 'widgets/offcanvas_settings.php'; ?>


    <div class="container" style="margin-top: 56px;">
        <div class="main-content">

            <!-- Sidebar -->
            <div class="col-2 d-none d-md-none d-lg-block " id="sticky" style="height: 90vh">
                <?php include $path . 'widgets/sidebar.php'; ?>
            </div>

            <div class="content-holder min-vh-100 w-100" style="text-align: justify;">

                <!-- Heading 1 |  -->
                <section id="head1">
                    <h1 class="pb-3 text-white">
                        <?php echo $pagename ?>
                    </h1>
                    <p class="text-body">...</p>

                </section>

                <hr class="my-5">

                <!-- Heading 2 |  -->
                <section id="head2">
                    <h2 class="pb-3 text-heading">Heading 2</h2>
                    <p class="text-body">...</p>
                </section>

                <hr class="my-5">

                <!-- Heading 3 |  -->
                <section id="head3">

                    <h2 class="pb-3 text-heading">Heading 3</h2>
                    <ul style="padding: 0; list-style: none">

                        <!-- Subheading 3.1 |  -->
                        <section id="head3_item1">
                            <dt class="text-body-emphasis"><i class="ti ti-check"></i> Sub-Heading 1 </dt>
                            <dd class="ps-4 mt-2 text-body">...
                            </dd>
                        </section>

                        <!-- Subheading 3.2 |  -->
                        <section id="head3_item2" class="pt-5">
                            <dt class="text-body-emphasis"><i class="ti ti-check"></i> Sub-Heading 2</dt>
                            <dd class="ps-4 mt-2 text-body">...
                            </dd>
                        </section>

                        <!-- Subheading 3.3 |  -->
                        <section id="head3_item3" class="pt-5">
                            <dt class="text-body-emphasis"><i class="ti ti-check"></i> Sub-Heading 3</dt>
                            <dd class="ps-4 mt-2 text-body">...
                            </dd>
                        </section>

                    </ul>
                </section>

                <!-- Spacer in case content is too short -->
                <div style="height: 25vh"></div>
            </div>

            <!-- Footer -->
            <?php

            $GLOBALS['head1'] = "Overview";
            $GLOBALS['head2'] = "Heading 2";
            $GLOBALS['head3'] = "Heading 3";
            $GLOBALS['head3_item1'] = "Sub-heading 1";
            $GLOBALS['head3_item2'] = "Sub-heading 2";
            $GLOBALS['head3_item3'] = "Sub-heading 3";

            include $path . 'widgets/overview.php'; ?>

        </div>

    </div>
    <?php include $path . 'widgets/footer.php'; ?>
    <?php include $path . 'widgets/modals.php'; ?>
    <?php include $path . 'components/footer.php'; ?>
</body>

</html>