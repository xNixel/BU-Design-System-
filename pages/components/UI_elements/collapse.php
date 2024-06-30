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
                    <p class="text-body">Provide a compact and organized interface by condensing information until
                        needed.</p>
                    <p class="text-body">The collapse feature allows you to hide and reveal content with ease. This can
                        be used to condense information into a compact space, making it easier to scan and understand.
                        When the content is collapsed, it is hidden from view, but it can be easily expanded when
                        needed. This can help to optimize screen space and create a more streamlined user experience.
                    </p>
                    <p class="text-body">Read the official
                        <a class="btn-link" href="https://getbootstrap.com/docs/5.3/components/carousel/"
                            target="_blank">Bootstrap
                            Documentation</a> for a full list of instructions and other options.
                    </p>

                </section>

                <hr class="my-5">

                <!-- Heading 2 |  -->
                <section id="head2">
                    <h2 class="pb-3 text-heading">Basic Collapse</h2>
                    <p class="text-body">The collapse JavaScript plugin is used to show and hide content. Buttons or
                        anchors are used as triggers that are mapped to specific elements you toggle. Collapsing an
                        element will animate the
                        <?php echo $GLOBALS['copy'] ?>height</button> from 0 to a specified height or from its current
                        height to 0. Given how CSS handles animations, you cannot use
                        <?php echo $GLOBALS['copy'] ?>padding</button> on a
                        <?php echo $GLOBALS['copy'] ?>.collapse</button> element. Instead, use the class as an
                        independent wrapping element.
                    </p>

                    <!-- Code Preview Widget -->
                    <?php $code = '
                        <p class="demo-inline-spacing">
                            <a class="btn btn-primary me-1" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                            Link with href
                            </a>
                            <button class="btn btn-primary me-1" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                            Button with data-bs-target
                            </button>
                        </p>
                        <div class="collapse" id="collapseExample">
                            <div class="d-flex p-3 border">
                            <img src="assets/img/elements/1.jpg" alt="collapse-image" height="125" class="me-4 mb-sm-0 mb-2">
                            <span>
                                Information and Communications Technology (ICTO)
                            </span>
                            </div>
                        </div>';

                    include $path . 'widgets/code_preview.php';

                    ?>

                </section>

                <hr class="my-5">

                <!-- Heading 3 |  -->
                <section id="head3">

                    <h2 class="pb-3 text-heading">Multiple Targets</h2>
                    <p class="text-body">A
                        <?php echo $GLOBALS['copy'] ?>&lt;button&gt;</button> or
                        <?php echo $GLOBALS['copy'] ?>&lt;a&gt;</button> can show and hide multiple
                        elements by referencing them with a selector in its href or data-bs-target attribute. Multiple
                        <?php echo $GLOBALS['copy'] ?>&lt;button&gt;</button> or
                        <?php echo $GLOBALS['copy'] ?>&lt;a&gt;</button> tags can show and hide a
                        single element if they each reference the
                        same element with their href or data-bs-target attribute.
                    </p>

                    <!-- Code Preview Widget -->
                    <?php $code = '
                        <p class="demo-inline-spacing">
                            <a class="btn btn-primary me-1" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Toggle first element</a>
                            <button class="btn btn-primary me-1" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">
                                Toggle second element
                            </button>
                            <button class="btn btn-primary me-1" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">
                                Toggle both elements
                            </button>
                        </p>
                        <div class="row">
                            <div class="col-12 col-md-6 mb-2 mb-md-0">
                                <div class="collapse multi-collapse" id="multiCollapseExample1">
                                <div class="d-flex p-3 border">
                                    <img src="assets/img/elements/2.jpg" alt="collapse-image" height="125" class="me-4 mb-sm-0 mb-2">
                                    <span>
                                    ...
                                    </span>
                                </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="collapse multi-collapse" id="multiCollapseExample2">
                                <div class="d-flex p-3 border">
                                    <img src="assets/img/elements/3.jpg" alt="collapse-image" height="125" class="me-4 mb-sm-0 mb-2">
                                    <span>
                                    ...
                                    </span>
                                </div>
                                </div>
                            </div>
                        </div>';

                    include $path . 'widgets/code_preview.php';

                    ?>

                </section>

                <!-- Spacer in case content is too short -->
                <div style="height: 50vh"></div>
            </div>

            <!-- Footer -->
            <?php

            $GLOBALS['head1'] = "Overview";
            $GLOBALS['head2'] = "Basic Collapse";
            $GLOBALS['head3'] = "Multiple Targets";

            include $path . 'widgets/overview.php'; ?>

        </div>

    </div>
    <?php include $path . 'widgets/footer.php'; ?>
    <?php include $path . 'widgets/modals.php'; ?>
    <?php include $path . 'components/footer.php'; ?>
</body>

</html>