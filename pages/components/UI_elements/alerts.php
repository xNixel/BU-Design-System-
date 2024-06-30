<?php

$path = '../../../';
$filename = basename(__FILE__, '.php');

include_once $path . 'components/header.php';
require_once $path . 'components/utils.php';

?>


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
                    <p class="text-body">Provide contextual feedback messages for typical user actions with the handful
                        of available and flexible alert messages.
                    </p>
                    <p class="text-body">Read the official
                        <a class="btn-link" href="https://getbootstrap.com/docs/5.3/components/alerts/"
                            target="_blank">Bootstrap
                            Documentation</a> for a full list of instructions and other options.
                    </p>

                </section>

                <hr class=" my-5">

                <!-- Heading 2 | Basic Alert -->
                <section id="head2">
                    <h2 class="pb-3 text-heading">Basic Alert</h2>
                    <p class="text-body">Alerts are available for any length of text.</p>

                    <!-- Code Preview Widget -->
                    <?php $code = '
                        <div class="alert alert-primary" role="alert">
                            This is a primary alert — check it out!
                        </div>
                        <div class="alert alert-secondary" role="alert">
                            This is a secondary alert — check it out!
                        </div>
                        <div class="alert alert-success" role="alert">
                            This is a success alert — check it out!
                        </div>
                        <div class="alert alert-danger" role="alert">
                            This is a danger alert — check it out!
                        </div>
                        <div class="alert alert-warning" role="alert">
                            This is a warning alert — check it out!
                        </div>
                        <div class="alert alert-info" role="alert">
                            This is an info alert — check it out!
                        </div>
                        <div class="alert alert-dark" role="alert">
                            This is a dark alert — check it out!
                        </div>';

                    include $path . 'widgets/code_preview.php';

                    ?>

                </section>

                <hr class="my-5">

                <!-- Heading 3 |  -->
                <section id="head3">

                    <h2 class="pb-3 text-heading">Link Color</h2>
                    <p class="text-body">Use the
                        <?php echo $GLOBALS['copy'] ?>.alert-link
                        </button> utility class to quickly provide matching colored links within any alert.
                    </p>

                    <!-- Code Preview Widget -->
                    <?php $code = '
                        <div class="alert alert-primary" role="alert">
                            A simple primary alert with 
                            <a href="javascript:void(0)" class="alert-link">an example link</a>. 
                            Give it a click if you like.
                        </div>

                        <div class="alert alert-secondary" role="alert">
                            A simple secondary alert with <a href="javascript:void(0)" class="alert-link">
                            an example link</a>. Give it a click if you like.
                        </div>

                        <div class="alert alert-success" role="alert">
                            A simple success alert with <a href="#" class="alert-link">
                            an example link</a>. Give it a click if you like.
                        </div>';

                    include $path . 'widgets/code_preview.php';

                    ?>

                </section>

                <hr class="my-5">

                <!-- Heading 4 |  -->
                <section id="head4">
                    <h2 class="pb-3 text-heading">Dismissible Alerts</h2>
                    <p class="text-body">Add
                        <?php echo $GLOBALS['copy'] ?>.alert-dismissible
                        </button> class to add close icon to dismiss alert.
                    </p>

                    <!-- Code Preview Widget -->
                    <?php $code = '
                        <div class="alert alert-primary alert-dismissible" role="alert">
                            This is a primary dismissible alert — check it out!
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            </button>
                        </div>
        
                        <div class="alert alert-secondary alert-dismissible" role="alert">
                            This is a primary dismissible alert — check it out!
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            </button>
                        </div>';

                    include $path . 'widgets/code_preview.php';

                    ?>

                </section>

                <hr class="my-5">

                <!-- Heading 5 |  -->
                <section id="head5">
                    <h2 class="pb-3 text-heading">Alert with Icon</h2>

                    <p class="text-body">You can also use icons to different alert variant using additional
                        class of
                        <?php echo $GLOBALS['copy'] ?>.d-flex</button> and
                        <?php echo $GLOBALS['copy'] ?>.align-items-center</button>.
                    </p>

                    <!-- Code Preview Widget -->
                    <?php $code = '
                        <div class="alert alert-primary d-flex align-items-center mt-4" role="alert">
                            <i class="material-icons-round me-2">info</i>
                            <div>
                                An example alert with an icon
                            </div>
                        </div>

                        <div class="alert alert-success d-flex align-items-center mt-4" role="alert">
                            <i class="material-icons-round me-2">check_circle</i>
                            <div>
                                An example success alert with an icon
                            </div>
                        </div>';

                    include $path . 'widgets/code_preview.php';

                    ?>

                    <p class="text-body mt-5">Here's an example of an alert with icon and content.
                    </p>

                    <?php $code = '
                        <div class="alert alert-primary d-flex mt-4" role="alert">
                            <span class="badge badge-center rounded-pill bg-primary border-label-primary p-3 me-2">
                                <i class="bx bx-command fs-6"></i>
                            </span>
                            <div class="d-flex flex-column ps-1">
                                <h6 class="alert-heading d-flex align-items-center fw-bold mb-1">For a watch</h6>
                                <span>This is a primary solid alert — check it out!</span>
                            </div>
                        </div>

                        <div class="alert alert-secondary d-flex" role="alert">
                            <span class="badge badge-center rounded-pill bg-secondary border-label-primary p-3 me-2">
                                <i class="bx bx-command fs-6"></i>
                            </span>
                            <div class="d-flex flex-column ps-1">
                                <h6 class="alert-heading d-flex align-items-center fw-bold mb-1">For a watch</h6>
                                <span>This is a secondary solid alert — check it out!</span>
                            </div>
                        </div>';

                    include $path . 'widgets/code_preview.php';

                    ?>

                </section>

                <!-- Spacer in case content is too short -->
                <div style="height: 25vh"></div>
            </div>

            <!-- Footer -->
            <?php

            $GLOBALS['head1'] = "Overview";
            $GLOBALS['head2'] = "Basic Alerts";
            $GLOBALS['head3'] = "Link Color";
            $GLOBALS['head4'] = "Dismissible Alerts";
            $GLOBALS['head5'] = "Alert with Icon";

            include $path . 'widgets/overview.php'; ?>

        </div>

    </div>
    <?php include $path . 'widgets/footer.php'; ?>
    <?php include $path . 'widgets/modals.php'; ?>
    <?php include $path . 'components/footer.php'; ?>
</body>

</html>