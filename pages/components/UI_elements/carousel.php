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
                    <p class="text-body">Provide a dynamic way to showcase rotating content.</p>
                    <p class="text-body">A carousel is a dynamic element that allows users to explore and interact with
                        content in an intuitive and engaging way. It showcases a rotating set of content, such as images
                        or slides, and allows users to manually or automatically slide from one item to another.
                        Carousels are often used to present information or media in an organized and visually appealing
                        manner.</p>
                    <p class="text-body">Read the official
                        <a class="btn-link" href="https://getbootstrap.com/docs/5.3/components/carousel/"
                            target="_blank">Bootstrap
                            Documentation</a> for a full list of instructions and other options.
                    </p>

                </section>

                <hr class="my-5">

                <!-- Heading 2 |  -->
                <section id="head2">
                    <h2 class="pb-3 text-heading">Example</h2>
                    <p class="text-body">Add captions to your slides easily with the
                        <?php echo $GLOBALS['copy'] ?>.carousel-caption</button> element within
                        any
                        <?php echo $GLOBALS['copy'] ?>.carousel-item</button>. They can be easily hidden on smaller
                        viewports, as shown below, with
                        optional <a class="btn-link" href="https://getbootstrap.com/docs/5.3/utilities/display/"
                            target="_blank">display</a> utilities. We hide them initially with
                        <?php echo $GLOBALS['copy'] ?>.d-none</button> and bring them
                        back on
                        medium-sized devices with
                        <?php echo $GLOBALS['copy'] ?>.d-md-block</button>.
                    </p>

                    <!-- Code Preview Widget -->
                    <?php $code = '
                        <div id="carouselExample" class="carousel slide col-md-8 offset-md-2" data-bs-ride="carousel">
                            <ol class="carousel-indicators">
                            <li data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"></li>
                            <li data-bs-target="#carouselExample" data-bs-slide-to="1"></li>
                            <li data-bs-target="#carouselExample" data-bs-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="assets/img/elements/13.jpg" alt="First slide" />
                                <div class="carousel-caption d-none d-md-block">
                                <h3>First slide</h3>
                                <p>Eos mutat malis maluisset et, agam ancillae quo te, in vim congue pertinacia.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="assets/img/elements/2.jpg" alt="Second slide" />
                                <div class="carousel-caption d-none d-md-block">
                                <h3>Second slide</h3>
                                <p>In numquam omittam sea.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="assets/img/elements/18.jpg" alt="Third slide" />
                                <div class="carousel-caption d-none d-md-block">
                                <h3>Third slide</h3>
                                <p>Lorem ipsum dolor sit amet, virtute consequat ea qui, minim graeco mel no.</p>
                                </div>
                            </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExample" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExample" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                            </a>
                        </div>';

                    include $path . 'widgets/code_preview.php';

                    ?>
                </section>

                <hr class="my-5">

                <!-- Heading 3 |  -->
                <section id="head3">

                    <h2 class="pb-3 text-heading">Swiper</h2>
                    <p class="text-body"><a class="btn-link" href="https://idangero.us/swiper/"
                            target="_blank">Swiper</a> is the most modern mobile touch slider with hardware accelerated
                        transitions.
                    </p>


                    <ul style="padding: 0; list-style: none">

                        <!-- Subheading 3.1 |  -->
                        <section id="head3_item1">
                            <dt class="text-body-emphasis">Usage</dt>
                            <dd class="mt-2 text-body">In order to use swiper on your page, It is required to
                                include the following vendors css in the "Vendors CSS" area from the page's header:
                            </dd>

                            <!-- Code Preview Only Widget -->
                            <?php

                            $code = '
                            <link rel="stylesheet" href="assets/vendor/libs/swiper/swiper.css" />';

                            $preview_title = "CODE";
                            $preview_margin = "mt-5";

                            include $path . 'widgets/code_preview_only.php';

                            ?>

                            <dd class="mt-5 text-body">Include the following custom page level style in the "Page CSS"
                                area from the page's header:
                            </dd>

                            <!-- Code Preview Only Widget -->
                            <?php

                            $code = '
                            <link rel="stylesheet" href="assets/vendor/css/pages/ui-carousel.css" />';

                            $preview_title = "CODE";
                            $preview_margin = "mt-4";

                            include $path . 'widgets/code_preview_only.php';

                            ?>

                            <dd class="mt-5 text-body">Include the following vendors script in the "Vendors JS" area
                                from the page's footer:
                            </dd>

                            <!-- Code Preview Only Widget -->
                            <?php

                            $code = '
                            <script src="assets/vendor/libs/swiper/swiper.js"></script>';

                            $preview_title = "CODE";
                            $preview_margin = "mt-4";

                            include $path . 'widgets/code_preview_only.php';

                            ?>

                            <dd class="mt-5 text-body">Include the following custom script in the "Page JS" area from
                                the page's footer:
                            </dd>

                            <!-- Code Preview Only Widget -->
                            <?php

                            $code = '
                            <script src="assets/js/ui-carousel.js"></script>';

                            $preview_title = "CODE";
                            $preview_margin = "mt-4";

                            include $path . 'widgets/code_preview_only.php';

                            ?>


                        </section>

                        <!-- Subheading 3.2 |  -->
                        <section id="head3_item2" class="pt-5">
                            <dt class="text-body-emphasis">Basic Example</dt>
                            <!-- Code Preview Widget -->
                            <?php $code = '
                            <div class="swiper" id="swiper-default">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide" style="background-image:url(assets/img/elements/1.jpg)">Slide 1</div>
                                    <div class="swiper-slide" style="background-image:url(assets/img/elements/5.jpg)">Slide 2</div>
                                    <div class="swiper-slide" style="background-image:url(assets/img/elements/12.jpg)">Slide 3</div>
                                    <div class="swiper-slide" style="background-image:url(assets/img/elements/7.jpg)">Slide 4</div>
                                    <div class="swiper-slide" style="background-image:url(assets/img/elements/11.jpg)">Slide 5</div>
                                </div>
                            </div>';

                            include $path . 'widgets/code_preview.php';

                            ?>

                            <div class="alert alert-primary d-flex align-items-center mt-5" role="alert">
                                <i class="material-icons-round me-3">info</i>
                                <div>
                                    Check <a
                                        href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/ui-carousel.html"
                                        class="alert-link">Swiper Demos</a> page
                                    for included example in this theme.
                                </div>
                            </div>

                            <div class="alert alert-primary d-flex align-items-center mt-2" role="alert">
                                <i class="material-icons-round me-3">info</i>
                                <div>
                                    Read the official
                                    <a href="https://idangero.us/swiper/demos/" class="alert-link">Swiper Demos for a
                                        full list of
                                        demos</a> and other options.
                                </div>
                            </div>
                        </section>

                    </ul>
                </section>

                <!-- Spacer in case content is too short -->
                <div style="height: 25vh"></div>
            </div>

            <!-- Footer -->
            <?php

            $GLOBALS['head1'] = "Overview";
            $GLOBALS['head2'] = "Example";
            $GLOBALS['head3'] = "Swiper";
            $GLOBALS['head3_item1'] = "Usage";
            $GLOBALS['head3_item2'] = "Basic Example";

            include $path . 'widgets/overview.php'; ?>

        </div>

    </div>
    <?php include $path . 'widgets/footer.php'; ?>
    <?php include $path . 'widgets/modals.php'; ?>
    <?php include $path . 'components/footer.php'; ?>
</body>

</html>