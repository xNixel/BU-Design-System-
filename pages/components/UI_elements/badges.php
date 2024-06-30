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
                    <p class="text-body">Provide quick and concise information about UI components. Badges are small,
                        visually distinct elements that provide quick and concise information about UI components.</p>
                    <p class="text-body">They are typically displayed on buttons or icons, and they can be used to
                        highlight important or dynamic content, such as notification counts, status updates, or labels.
                        Badges can be customized to fit the style of the UI, and they can be used to convey a variety of
                        information.</p>
                    <p class="text-body">Read the official
                        <a class="btn-link" href="https://getbootstrap.com/docs/5.3/components/badge/"
                            target="_blank">Bootstrap
                            Documentation</a> for a full list of instructions and other options.
                    </p>

                </section>

                <hr class="my-5">

                <!-- Heading 2 |  -->
                <section id="head2">
                    <h2 class="pb-3 text-heading">Example</h2>
                    <p class="text-body">Badges scale to match the size of the immediate parent element by using
                        relative font sizing and em units.</p>

                    <!-- Code Preview Widget -->
                    <?php $code = '
                        <h1>Example heading <span class="badge bg-secondary">New</span></h1>
                        <h2>Example heading <span class="badge bg-secondary">New</span></h2>
                        <h3>Example heading <span class="badge bg-secondary">New</span></h3>
                        <h4>Example heading <span class="badge bg-secondary">New</span></h4>
                        <h5>Example heading <span class="badge bg-secondary">New</span></h5>
                        <h6>Example heading <span class="badge bg-secondary">New</span></h6>';

                    include $path . 'widgets/code_preview.php';

                    ?>


                </section>

                <hr class="my-5">

                <!-- Heading 3 |  -->
                <section id="head3">

                    <h2 class="pb-3 text-heading">Basic Badge</h2>
                    <p class="text-body">Set a background-color with contrasting foreground color with our
                        <?php echo $GLOBALS['copy'] ?>.text-bg-{color}</button> helpers.
                        Previously it was required to manually pair your choice of
                        <?php echo $GLOBALS['copy'] ?>.text-{color}</button> and
                        <?php echo $GLOBALS['copy'] ?>.bg-{color}</button>
                        utilities for styling, which you still may use if you prefer.
                    </p>

                    <!-- Code Preview Widget -->
                    <?php $code = '
                        <span class="badge bg-primary">Primary</span>
                        <span class="badge bg-secondary">Secondary</span>
                        <span class="badge bg-success">Success</span>
                        <span class="badge bg-danger">Danger</span>
                        <span class="badge bg-warning">Warning</span>
                        <span class="badge bg-info">Info</span>
                        <span class="badge bg-dark">Dark</span>';

                    include $path . 'widgets/code_preview.php';

                    ?>

                </section>

                <hr class="my-5">

                <!-- Heading 4 |  -->
                <section id="head4">

                    <h2 class="pb-3 text-heading">Label Badge</h2>
                    <p class="text-body">Badges with light background color. Replace the default modifier classes with
                        the
                        <?php echo $GLOBALS['copy'] ?>.bg-label-{value}.</button>
                    </p>

                    <!-- Code Preview Widget -->
                    <?php $code = '
                        <span class="badge bg-label-primary">Primary</span>
                        <span class="badge bg-label-secondary">Secondary</span>
                        <span class="badge bg-label-success">Success</span>
                        <span class="badge bg-label-danger">Danger</span>
                        <span class="badge bg-label-warning">Warning</span>
                        <span class="badge bg-label-info">Info</span>
                        <span class="badge bg-label-dark">Dark</span>';

                    include $path . 'widgets/code_preview.php';

                    ?>

                </section>

                <hr class="my-5">

                <!-- Heading 5 |  -->
                <section id="head5">

                    <h2 class="pb-3 text-heading">Button with Badge</h2>
                    <p class="text-body">Badges can be used as part of links or buttons to provide a counter.
                    </p>

                    <!-- Code Preview Widget -->
                    <?php $code = '
                        <p>
                        <button type="button" class="btn btn-primary me-3">
                            Text
                            <span class="badge bg-white text-primary ms-1">4</span>
                            </button>
                            <button type="button" class="btn btn-primary me-3">
                            Text
                            <span class="badge bg-secondary rounded-pill ms-1">4</span>
                            </button>
                        </p>
                        <p>
                            <button type="button" class="btn btn-label-primary me-3">
                            Text
                            <span class="badge bg-white text-primary ms-1">4</span>
                            </button>
                            <button type="button" class="btn btn-label-primary me-3">
                            Text
                            <span class="badge bg-secondary rounded-pill ms-1">4</span>
                            </button>
                        </p>
                        <p>
                            <button type="button" class="btn btn-outline-primary me-3">
                            Text
                            <span class="badge">4</span>
                            </button>
                            <button type="button" class="btn btn-outline-primary me-3">
                            Text
                            <span class="badge rounded-pill ms-1">4</span>
                            </button>
                        </p>';

                    include $path . 'widgets/code_preview.php';

                    ?>

                </section>

                <hr class="my-5">

                <!-- Heading 6 |  -->
                <section id="head6">

                    <h2 class="pb-3 text-heading">Badge Circle & Square</h2>
                    <p class="text-body">Make circle & square badge by using
                        <?php echo $GLOBALS['copy'] ?>.badge-center</button> class, use
                        <?php echo $GLOBALS['copy'] ?>.rounded-pills</button>
                        class for circle badge.
                    </p>
                    <p class="text-body">You can also use
                        <?php echo $GLOBALS['copy'] ?>.bg-label-{value}</button> style with this.
                    </p>

                    <!-- Code Preview Widget -->
                    <?php $code = '
                        <div class="row gy-3">
                        <div class="col-xl-6">
                            <h6>Basic</h6>
                            <div class="demo-inline-spacing">
                            <p>
                                <span class="badge badge-center rounded-pill bg-primary">1</span>
                                <span class="badge badge-center rounded-pill bg-secondary"><i class="bx bx-star"></i></span>
                            </p>
                            <p>
                                <span class="badge badge-center bg-primary">1</span>
                                <span class="badge badge-center bg-secondary"><i class="bx bx-star"></i></span>
                            </p>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <h6>Label</h6>
                            <div class="demo-inline-spacing">
                            <p>
                                <span class="badge badge-center rounded-pill bg-label-primary">1</span>
                                <span class="badge badge-center rounded-pill bg-label-secondary"><i class="bx bx-star"></i></span>
                            </p>
                            <p>
                                <span class="badge badge-center bg-label-primary">1</span>
                                <span class="badge badge-center bg-label-secondary"><i class="bx bx-star"></i></span>
                            </p>
                            </div>
                        </div>
                        </div>';

                    include $path . 'widgets/code_preview.php';

                    ?>

                </section>

                <hr class="my-5">

                <!-- Heading 7 |  -->
                <section id="head7">

                    <h2 class="pb-3 text-heading">Notifications</h2>
                    <p class="text-body">Use class
                        <?php echo $GLOBALS['copy'] ?>.badge-notifications</button> for notifications badges. You can
                        also create dot style
                        notifications by using
                        <?php echo $GLOBALS['copy'] ?>.badge-dot</button>.
                    </p>
                    <p class="text-body">Style notifications badges with
                        <?php echo $GLOBALS['copy'] ?>.bg-label-{value}</button>.
                    </p>

                    <!-- Code Preview Widget -->
                    <?php $code = '
                        <button type="button" class="btn btn-secondary text-nowrap d-inline-block me-3">
                            Badge
                            <span class="badge bg-primary badge-notifications">12</span>
                        </button>
                        <button type="button" class="btn btn-secondary text-nowrap d-inline-block me-3">
                            Label Badge
                            <span class="badge bg-white text-secondary badge-notifications">12</span>
                        </button>
                        <button type="button" class="btn btn-secondary text-nowrap d-inline-block me-3">
                            Pill
                            <span class="badge rounded-pill bg-info badge-notifications">12</span>
                        </button>
                        <button type="button" class="btn btn-secondary text-nowrap d-inline-block me-3">
                            Dot
                            <span class="badge badge-dot bg-danger badge-notifications"></span>
                        </button>
                        <button type="button" class="btn text-nowrap d-inline-block me-3">
                            <span class="tf-icons bx bx-envelope"></span>
                            <span class="badge bg-primary badge-notifications">6</span>
                        </button>
                        <button type="button" class="btn text-nowrap d-inline-block me-3">
                            <span class="tf-icons bx bxl-twitter"></span>
                            <span class="badge rounded-pill bg-label-info badge-notifications">5</span>
                        </button>
                        <button type="button" class="btn text-nowrap d-inline-block me-3">
                            <span class="tf-icons bx bx-bell"></span>
                            <span class="badge rounded-pill bg-danger badge-notifications">10</span>
                        </button>
                        <button type="button" class="btn text-nowrap d-inline-block me-3">
                            <span class="tf-icons bx bxl-facebook-square"></span>
                            <span class="badge rounded-pill bg-danger badge-dot badge-notifications"></span>
                        </button>';

                    include $path . 'widgets/code_preview.php';

                    ?>

                </section>

                <hr class="my-5">

                <!-- Heading 8 |  -->
                <section id="head8">
                    <h2 class="pb-3 text-heading">Dots Style</h2>
                    <p class="text-body">Use class
                        <?php echo $GLOBALS['copy'] ?>.badge-dot</button> to create dot style badge.
                    </p>

                    <!-- Code Preview Widget -->
                    <?php $code = '
                        <div class="d-flex align-items-center lh-1 me-3">
                            <span class="badge badge-dot bg-primary me-1"></span> Primary
                        </div>
                        <div class="d-flex align-items-center lh-1 me-3">
                            <span class="badge badge-dot bg-secondary me-1"></span> Secondary
                        </div>
                        <div class="d-flex align-items-center lh-1 me-3">
                            <span class="badge badge-dot bg-success me-1"></span> Success
                        </div>
                        <div class="d-flex align-items-center lh-1 me-3">
                            <span class="badge badge-dot bg-danger me-1"></span> Danger
                        </div>
                        <div class="d-flex align-items-center lh-1 me-3">
                            <span class="badge badge-dot bg-warning me-1"></span> Warning
                        </div>
                        <div class="d-flex align-items-center lh-1 me-3">
                            <span class="badge badge-dot bg-info me-1"></span> Info
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
            $GLOBALS['head2'] = "Example";
            $GLOBALS['head3'] = "Basic Badge";
            $GLOBALS['head4'] = "Label Badge";
            $GLOBALS['head5'] = "Button with Badge";
            $GLOBALS['head6'] = "Badge Circle & Square";
            $GLOBALS['head7'] = "Notifications";
            $GLOBALS['head8'] = "Dots Style";

            include $path . 'widgets/overview.php'; ?>

        </div>

    </div>
    <?php include $path . 'widgets/footer.php'; ?>
    <?php include $path . 'widgets/modals.php'; ?>
    <?php include $path . 'components/footer.php'; ?>
</body>

</html>