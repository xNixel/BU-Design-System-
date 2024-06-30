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
                    <p class="text-body">In the realm of user interface design, an accordion is a versatile and dynamic
                        component that facilitates efficient organization and navigation of content.</p>
                    <p class="text-body">This collection exemplifies a rich assortment of accordion interfaces,
                        providing an array of visually appealing and functionally robust options for designing intuitive
                        user experiences.</p>

                </section>

                <hr class="my-5">

                <!-- Heading 2 |  -->
                <section id="head2">
                    <h2 class="pb-3 text-heading">iBU Accordion</h2>
                    <p class="text-body">...</p>
                </section>

                <hr class="my-5">

                <!-- Heading 3 |  -->
                <section id="head3">

                    <h2 class="pb-3 text-heading">Basic Accordion</h2>
                    <p class="text-body">The accordion uses collapse internally to make it collapsible. To render an
                        accordion that's expanded, add the
                        <?php echo $GLOBALS['copy'] ?>.open</button> class on the
                        <?php echo $GLOBALS['copy'] ?>.accordion.</button>.
                    </p>

                    <!-- Code Preview Widget -->
                    <?php $code = '
                        <div class="accordion" id="accordionExample">
                            <div class="card accordion-item active">
                                <h2 class="accordion-header" id="headingOne">
                                    <button type="button" class="accordion-button" data-bs-toggle="collapse"
                                        data-bs-target="#accordionOne" aria-expanded="true" aria-controls="accordionOne"
                                        role="tabpanel">
                                        Accordion Item 1
                                    </button>
                                </h2>

                                <div id="accordionOne" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Lemon drops chocolate cake gummies carrot cake chupa chups muffin topping. Sesame
                                        snaps icing marzipan gummi
                                        bears macaroon dragée danish caramels powder. Bear claw dragée pastry topping
                                        soufflé. Wafer gummi bears
                                        marshmallow pastry pie.
                                    </div>
                                </div>
                            </div>
                            <div class="card accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#accordionTwo" aria-expanded="false" aria-controls="accordionTwo"
                                        role="tabpanel">
                                        Accordion Item 2
                                    </button>
                                </h2>
                                <div id="accordionTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Dessert ice cream donut oat cake jelly-o pie sugar plum cheesecake. Bear claw dragée
                                        oat cake dragée ice
                                        cream halvah tootsie roll. Danish cake oat cake pie macaroon tart donut gummies.
                                        Jelly beans candy canes
                                        carrot cake. Fruitcake chocolate chupa chups.
                                    </div>
                                </div>
                            </div>
                            <div class="card accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#accordionThree" aria-expanded="false"
                                        aria-controls="accordionThree" role="tabpanel">
                                        Accordion Item 3
                                    </button>
                                </h2>
                                <div id="accordionThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Oat cake toffee chocolate bar jujubes. Marshmallow brownie lemon drops cheesecake.
                                        Bonbon gingerbread
                                        marshmallow sweet jelly beans muffin. Sweet roll bear claw candy canes oat cake
                                        dragée caramels. Ice cream
                                        wafer danish cookie caramels muffin.
                                    </div>
                                </div>
                            </div>
                        </div>';

                    include $path . 'widgets/code_preview.php';

                    ?>

                </section>

                <hr class="my-5">

                <!-- Heading 4 |  -->
                <section id="head4">
                    <h2 class="pb-3 text-heading">Accordion without Arrow</h2>
                    <p class="text-body">For accordion without arrow, use
                        <?php echo $GLOBALS['copy'] ?>.accordion-without-arrow</button> class
                        with
                        <?php echo $GLOBALS['copy'] ?>.accordion</button> class.
                    </p>

                    <!-- Code Preview Widget -->
                    <?php $code = '
                        <div id="accordionIcon" class="accordion accordion-without-arrow">
                            <div class="accordion-item card">
                                <h2 class="accordion-header text-body d-flex justify-content-between" id="accordionIconOne">
                                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#accordionIcon-1" aria-controls="accordionIcon-1">
                                        Accordion Item 1
                                    </button>
                                </h2>

                                <div id="accordionIcon-1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionIcon">
                                    <div class="accordion-body">
                                        Lemon drops chocolate cake gummies carrot cake chupa chups muffin topping. Sesame
                                        snaps icing marzipan gummi bears macaroon dragée danish caramels powder. Bear 
                                        claw dragée pastry topping soufflé. Wafer gummi bears marshmallow pastry pie.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item card">
                                <h2 class="accordion-header text-body d-flex justify-content-between" id="accordionIconTwo">
                                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#accordionIcon-2" aria-controls="accordionIcon-2">
                                        Accordion Item 2
                                    </button>
                                </h2>
                                <div id="accordionIcon-2" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionIcon">
                                    <div class="accordion-body">
                                        Dessert ice cream donut oat cake jelly-o pie sugar plum cheesecake. Bear claw dragée
                                        oat cake dragée ice cream halvah tootsie roll. Danish cake oat cake pie macaroon tart 
                                        donut gummies. Jelly beans candy canes carrot cake. Fruitcake chocolate chupa chups.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item card active">
                                <h2 class="accordion-header text-body d-flex justify-content-between"
                                    id="accordionIconThree">
                                    <button type="button" class="accordion-button" data-bs-toggle="collapse"
                                        data-bs-target="#accordionIcon-3" aria-expanded="true"
                                        aria-controls="accordionIcon-3" role="tabpanel">
                                        Accordion Item 3
                                    </button>
                                </h2>
                                <div id="accordionIcon-3" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordionIcon">
                                    <div class="accordion-body">
                                        Oat cake toffee chocolate bar jujubes. Marshmallow brownie lemon drops cheesecake.
                                        Bonbon gingerbread marshmallow sweet jelly beans muffin. Sweet roll bear claw 
                                        candy canes oat cake dragée caramels. Ice cream wafer danish cookie caramels muffin.
                                    </div>
                                </div>
                            </div>
                        </div>';

                    include $path . 'widgets/code_preview.php';

                    ?>

                </section>

                <hr class="my-5">

                <!-- Heading 5 |  -->
                <section id="head5">
                    <h2 class="pb-3 text-heading">Accordion with Icon</h2>
                    <p class="text-body">To add icon before the Accordion header. </p>
                    <p class="text-body">Omit the
                        <?php echo $GLOBALS['copy'] ?>data-bs-parent</button>
                        attribute on each
                        <?php echo $GLOBALS['copy'] ?>.accordion-collapse</button> to make
                        accordion items stay open when another item is opened.
                    </p>

                    <!-- Code Preview Widget -->
                    <?php $code = '
                        <div class="accordion" id="accordionWithIcon">
                        <div class="card accordion-item active mb-2">
                            <h2 class="accordion-header d-flex align-items-center">
                                <button type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#accordionWithIcon-1" aria-expanded="true">
                                <i class="bx bx-bar-chart-alt-2 me-2"></i>
                                Header Option 1
                                </button>
                            </h2>
                            
                            <div id="accordionWithIcon-1" class="accordion-collapse collapse show" >
                                <div class="accordion-body">
                                Lemon drops chocolate cake gummies carrot cake chupa chups muffin topping. Sesame snaps icing marzipan gummi
                                bears macaroon dragée danish caramels powder. Bear claw dragée pastry topping soufflé. Wafer gummi bears
                                marshmallow pastry pie.
                                </div>
                            </div>
                            </div>
                            
                            <div class="accordion-item card">
                            <h2 class="accordion-header d-flex align-items-center">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionWithIcon-2" aria-expanded="false">
                                <i class="bx bx-briefcase me-2"></i>
                                Header Option 2
                                </button>
                            </h2>
                            <div id="accordionWithIcon-2" class="accordion-collapse collapse" >
                                <div class="accordion-body">
                                Dessert ice cream donut oat cake jelly-o pie sugar plum cheesecake. Bear claw dragée oat cake dragée ice
                                cream
                                halvah tootsie roll. Danish cake oat cake pie macaroon tart donut gummies. Jelly beans candy canes carrot
                                cake.
                                Fruitcake chocolate chupa chups.
                                </div>
                            </div>
                            </div>
                            
                            <div class="accordion-item card">
                            <h2 class="accordion-header d-flex align-items-center">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionWithIcon-3" aria-expanded="false">
                                <i class="bx bx-gift me-2"></i>
                                Header Option 3
                                </button>
                            </h2>
                            <div id="accordionWithIcon-3" class="accordion-collapse collapse" >
                                <div class="accordion-body">
                                Oat cake toffee chocolate bar jujubes. Marshmallow brownie lemon drops cheesecake. Bonbon gingerbread
                                marshmallow
                                sweet jelly beans muffin. Sweet roll bear claw candy canes oat cake dragée caramels. Ice cream wafer danish
                                cookie caramels muffin.
                                </div>
                            </div>
                        </div>
                        </div>';

                    include $path . 'widgets/code_preview.php';

                    ?>

                </section>

                <hr class="my-5">

                <!-- Heading 6 |  -->
                <section id="head6">
                    <h2 class="pb-3 text-heading">Accordion Header Color</h2>
                    <p class="text-body">This class will add header text color to open accordion card.</p>

                    <!-- Code Preview Widget -->
                    <?php $code = '
                        <div class="accordion accordion-header-primary" id="accordionStyle1">
                        <div class="accordion-item card">
                          <h2 class="accordion-header">
                            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionStyle1-1" aria-expanded="false">
                              Header Option 1
                            </button>
                          </h2>
                        
                          <div id="accordionStyle1-1" class="accordion-collapse collapse" data-bs-parent="#accordionStyle1">
                            <div class="accordion-body">
                              Lemon drops chocolate cake gummies carrot cake chupa chups muffin topping. Sesame snaps icing marzipan gummi
                              bears macaroon dragée danish caramels powder. Bear claw dragée pastry topping soufflé. Wafer gummi bears
                              marshmallow pastry pie.
                            </div>
                          </div>
                        </div>
                        
                        <div class="accordion-item card">
                          <h2 class="accordion-header">
                            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionStyle1-2" aria-expanded="false">
                              Header Option 2
                            </button>
                          </h2>
                          <div id="accordionStyle1-2" class="accordion-collapse collapse" data-bs-parent="#accordionStyle1">
                            <div class="accordion-body">
                              Dessert ice cream donut oat cake jelly-o pie sugar plum cheesecake. Bear claw dragée oat cake dragée ice
                              cream
                              halvah tootsie roll. Danish cake oat cake pie macaroon tart donut gummies. Jelly beans candy canes carrot
                              cake.
                              Fruitcake chocolate chupa chups.
                            </div>
                          </div>
                        </div>
                        
                        <div class="card accordion-item active mb-2">
                          <h2 class="accordion-header">
                            <button type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#accordionStyle1-3" aria-expanded="true">
                              Header Option 3
                            </button>
                          </h2>
                          <div id="accordionStyle1-3" class="accordion-collapse collapse show" data-bs-parent="#accordionStyle1">
                            <div class="accordion-body">
                              Oat cake toffee chocolate bar jujubes. Marshmallow brownie lemon drops cheesecake. Bonbon gingerbread
                              marshmallow
                              sweet jelly beans muffin. Sweet roll bear claw candy canes oat cake dragée caramels. Ice cream wafer danish
                              cookie caramels muffin.
                            </div>
                          </div>
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
            $GLOBALS['head2'] = "iBU Accordion";
            $GLOBALS['head3'] = "Basic Accordion";
            $GLOBALS['head4'] = "Accordion without Arrow";
            $GLOBALS['head5'] = "Accordion with Icon";
            $GLOBALS['head6'] = "Accordion Header Color";

            include $path . 'widgets/overview.php'; ?>

        </div>

    </div>
    <?php include $path . 'widgets/footer.php'; ?>
    <?php include $path . 'widgets/modals.php'; ?>
    <?php include $path . 'components/footer.php'; ?>
</body>

</html>