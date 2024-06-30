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
                    <p class="text-body">Provide a compact and intuitive way to select an option from a list. Dropdowns
                        are interactive elements that expand to display a list of options when activated.</p>
                    <p class="text-body">They allow users to select one option from the list, providing a concise and
                        user-friendly way to navigate or make choices within an interface. Dropdowns can be triggered by
                        a click or hover, making them a versatile and efficient way to present selectable items.</p>
                    <p class="text-body">Read the official
                        <a class="btn-link" href="https://getbootstrap.com/docs/5.3/components/card/"
                            target="_blank">Bootstrap
                            Documentation</a> for a full list of instructions and other options.
                    </p>

                    <hr class="my-5">

                    <ul style="padding: 0; list-style: none">

                        <!-- Subheading 1.1 |  -->
                        <section id="head1_item1">
                            <dt class="text-body-emphasis">Basic Dropdown</dt>
                            <dd class="mt-2 text-body">Any single
                                <?php echo $GLOBALS['copy'] ?>.btn</button> can be turned into a dropdown toggle with
                                some markup changes.
                                <?php echo $GLOBALS['copy'] ?>.dropdown</button> or
                                <?php echo $GLOBALS['copy'] ?>.btn-group</button> class used as wrapper of dropdown
                                toggle and dropdown menu.
                            </dd>

                            <div class="alert alert-primary d-flex align-items-center mt-4" role="alert">
                                <i class="material-icons-round me-3">info</i>
                                <div>
                                    You can use the predefined button styles (i.e solid, outline) in dropdown.
                                </div>
                            </div>

                            <!-- Code Preview Widget -->
                            <?php $code = '
                                <!-- Dropdown -->
                                <div class="btn-group me-3">
                                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Dropdown button
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                    </div>
                                    <!-- Dropdown with Icon -->
                                    <div class="btn-group me-3">
                                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButtonIcon" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-menu me-1"></i> Dropdown with Icon
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButtonIcon">
                                        <li><a class="dropdown-item d-flex align-items-center" href="javascript:void(0);"><i class="bx bx-chevron-right scaleX-n1-rtl"></i> Action</a></li>
                                        <li><a class="dropdown-item d-flex align-items-center" href="javascript:void(0);"><i class="bx bx-chevron-right scaleX-n1-rtl"></i> Another action</a></li>
                                        <li><a class="dropdown-item d-flex align-items-center" href="javascript:void(0);"><i class="bx bx-chevron-right scaleX-n1-rtl"></i> Something else here</a></li>
                                    </ul>
                                    </div>
                                    <!-- Icon Dropdown -->
                                    <div class="btn-group">
                                    <button type="button" class="btn btn-primary btn-icon rounded-pill dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                        <li>
                                        <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                    </ul>
                                </div>';

                            include $path . 'widgets/code_preview.php';

                            ?>


                        </section>

                        <div class="my-5"></div>

                        <!-- Subheading 1.2 |  -->
                        <section id="head1_item2">
                            <dt class="text-body-emphasis">Split Dropdown</dt>
                            <dd class="mt-2 text-body">Create split button dropdowns with virtually the same markup
                                as single button dropdowns, but with the addition of
                                <?php echo $GLOBALS['copy'] ?>.dropdown-toggle-split</button> for proper spacing around
                                the dropdown caret.
                            </dd>

                            <!-- Code Preview Widget -->
                            <?php $code = '
                                <!-- split primary button -->
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary">Split Dropdown</button>
                                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="visually-hidden">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                        <li>
                                        <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                    </ul>
                                </div>';

                            include $path . 'widgets/code_preview.php';

                            ?>

                        </section>

                        <div class="my-5"></div>

                        <!-- Subheading 1.3 |  -->
                        <section id="head1_item3">
                            <dt class="text-body-emphasis">Hidden Arrow</dt>
                            <dd class="mt-2 text-body">Use class
                                <?php echo $GLOBALS['copy'] ?>.hide-arrow</button> to hide dropdown arrow.
                            </dd>

                            <!-- Code Preview Widget -->
                            <?php $code = '
                                <!-- hidden arrow -->
                                <div class="btn-group">
                                  <button type="button" class="btn btn-primary dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false">Hidden Arrow</button>
                                  <ul class="dropdown-menu">
                                    <li> <a class="dropdown-item" href="javascript:void(0);">Action</a> </li>
                                    <li> <a class="dropdown-item" href="javascript:void(0);">Another action</a> </li>
                                    <li> <a class="dropdown-item" href="javascript:void(0);">Something else here</a> </li>
                                    <li>
                                      <hr class="dropdown-divider">
                                    </li>
                                    <li> <a class="dropdown-item" href="javascript:void(0);">Separated link</a> </li>
                                  </ul>
                                </div>';

                            include $path . 'widgets/code_preview.php';

                            ?>

                        </section>

                        <div class="my-5"></div>

                        <!-- Subheading 1.4 |  -->
                        <section id="head1_item4">
                            <dt class="text-body-emphasis">Open on Hover</dt>
                            <dd class="mt-2 text-body">You need to include below JS file for dropdown to work on hover.
                            </dd>

                            <!-- Code Preview Only Widget -->
                            <?php

                            $code = '
                            <script src="assets/vendor/js/dropdown-hover.js"></script>';

                            $preview_title = "CODE";
                            $preview_margin = "mt-4";

                            include $path . 'widgets/code_preview_only.php';

                            ?>

                            <dd class="mt-5 text-body">Use a data attribute
                                <?php echo $GLOBALS['copy'] ?>data-trigger="hover"</button> to work dropdown on
                                hover.
                            </dd>

                            <!-- Code Preview Widget -->
                            <?php $code = '
                                <!-- On hover dropdown button -->
                                <div class="btn-group" id="hover-dropdown-demo">
                                  <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" data-trigger="hover">Hover</button>
                                  <ul class="dropdown-menu">
                                    <li> <a class="dropdown-item" href="javascript:void(0);">Action</a> </li>
                                    <li> <a class="dropdown-item" href="javascript:void(0);">Another action</a> </li>
                                    <li> <a class="dropdown-item" href="javascript:void(0);">Something else here</a> </li>
                                    <li>
                                      <hr class="dropdown-divider">
                                    </li>
                                    <li> <a class="dropdown-item" href="javascript:void(0);">Separated link</a> </li>
                                  </ul>
                                </div>';

                            include $path . 'widgets/code_preview.php';

                            ?>

                        </section>

                    </ul>

                </section>

                <hr class="my-5">

                <!-- Heading 2 |  -->
                <section id="head2">
                    <h2 class="pb-3 text-heading">Alignment</h2>

                    <ul style="padding: 0; list-style: none">

                        <!-- Subheading 2.1 |  -->
                        <section id="head2_item1">
                            <dt class="text-body-emphasis">Menu Alignment</dt>
                            <dd class="mt-2 text-body">By default, a dropdown menu is automatically positioned 100% from
                                the top and along the left side of its parent.
                            </dd>
                            <dd class="mt-2 text-body">Use
                                <?php echo $GLOBALS['copy'] ?>.dropdown-menu-end</button> class with
                                <?php echo $GLOBALS['copy'] ?>.dropdown-menu</button> to right align
                                the dropdown menu. Use
                                <?php echo $GLOBALS['copy'] ?>.dropdown-menu-start</button> class with
                                <?php echo $GLOBALS['copy'] ?>.dropdown-menu</button> to
                                left align the dropdown menu.
                            </dd>

                            <div class="alert alert-primary d-flex align-items-center mt-4" role="alert">
                                <i class="material-icons-round me-3">info</i>
                                <div>
                                    Dropdowns are positioned thanks to Popper.js (except when they are
                                    contained in a navbar).
                                </div>
                            </div>

                            <!-- Code Preview Widget -->
                            <?php $code = '
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Right aligned dropdown menu
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><button class="dropdown-item" type="button">Action</button></li>
                                        <li><button class="dropdown-item" type="button">Another action</button></li>
                                        <li><button class="dropdown-item" type="button">Something else here</button></li>
                                    </ul>
                                </div>';

                            include $path . 'widgets/code_preview.php';

                            ?>

                        </section>

                        <div class="my-5"></div>

                        <!-- Subheading 2.2 |  -->
                        <section id="head2_item2">
                            <dt class="text-body-emphasis">Responsive Alignment</dt>
                            <dd class="mt-3 text-body">If you want to use responsive alignment, disable dynamic
                                positioning by adding the
                                <?php echo $GLOBALS['copy'] ?>data-bs-display="static"</button> attribute and use the
                                responsive variation classes.
                            </dd>
                            <dd class="mt-3 text-body">To align right the dropdown menu with the given breakpoint or
                                larger, add
                                <?php echo $GLOBALS['copy'] ?>.dropdown-menu-{sm|md|lg|xl|xxl}-end</button>.
                            </dd>
                            <dd class="mt-3 text-body">To align left the dropdown menu with the given breakpoint or
                                larger, add
                                <?php echo $GLOBALS['copy'] ?>.dropdown-menu-end</button> and
                                <?php echo $GLOBALS['copy'] ?>.dropdown-menu-{sm|md|lg|xl|xxl}-start</button>.
                            </dd>

                            <!-- Code Preview Widget -->
                            <?php $code = '
                                <!-- Left-aligned but right in large screen -->
                                <div class="btn-group me-3">
                                  <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-haspopup="true" aria-expanded="false">
                                    Left-aligned but right aligned when large screen
                                  </button>
                                  <ul class="dropdown-menu dropdown-menu-lg-end">
                                    <li><button class="dropdown-item" type="button">Action</button></li>
                                    <li><button class="dropdown-item" type="button">Another action</button></li>
                                    <li><button class="dropdown-item" type="button">Something else here</button></li>
                                  </ul>
                                </div>
                                <!-- Right-aligned but left in large screen -->
                                <div class="btn-group">
                                  <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-haspopup="true" aria-expanded="false">
                                    Right-aligned but left aligned when large screen
                                  </button>
                                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
                                    <li><button class="dropdown-item" type="button">Action</button></li>
                                    <li><button class="dropdown-item" type="button">Another action</button></li>
                                    <li><button class="dropdown-item" type="button">Something else here</button></li>
                                  </ul>
                                </div>';

                            include $path . 'widgets/code_preview.php';

                            ?>

                        </section>

                    </ul>

                </section>

                <hr class="my-5">

                <!-- Heading 3 |  -->
                <section id="head3">

                    <h2 class="pb-3 text-heading">Sizes</h2>
                    <p class="text-body">Button dropdowns work with buttons of all sizes, including default and split
                        dropdown buttons.
                    </p>

                    <!-- Code Preview Widget -->
                    <?php $code = '
                        <!-- Extra Large -->
                        <div class="btn-group">
                          <button class="btn btn-primary btn-xl dropdown-toggle" type="button" data-bs-toggle="dropdown">Extra large</button>
                          <ul class="dropdown-menu">
                            <li> <a class="dropdown-item" href="javascript:void(0);">Action</a> </li>
                            <li> <a class="dropdown-item" href="javascript:void(0);">Another action</a> </li>
                            <li> <a class="dropdown-item" href="javascript:void(0);">Something else here</a> </li>
                            <li>
                              <hr class="dropdown-divider">
                            </li>
                            <li> <a class="dropdown-item" href="javascript:void(0);">Separated link</a> </li>
                          </ul>
                        </div>
                        
                        <!-- Large -->
                        <div class="btn-group">
                          <button class="btn btn-primary btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown">Large</button>
                          <ul class="dropdown-menu">
                            <li> <a class="dropdown-item" href="javascript:void(0);">Action</a> </li>
                            <li> <a class="dropdown-item" href="javascript:void(0);">Another action</a> </li>
                            <li> <a class="dropdown-item" href="javascript:void(0);">Something else here</a> </li>
                            <li>
                              <hr class="dropdown-divider">
                            </li>
                            <li> <a class="dropdown-item" href="javascript:void(0);">Separated link</a> </li>
                          </ul>
                        </div>
                        
                        <!-- Default -->
                        <div class="btn-group">
                          <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">Default</button>
                          <ul class="dropdown-menu">
                            <li> <a class="dropdown-item" href="javascript:void(0);">Action</a> </li>
                            <li> <a class="dropdown-item" href="javascript:void(0);">Another action</a> </li>
                            <li> <a class="dropdown-item" href="javascript:void(0);">Something else here</a> </li>
                            <li>
                              <hr class="dropdown-divider">
                            </li>
                            <li> <a class="dropdown-item" href="javascript:void(0);">Separated link</a> </li>
                          </ul>
                        </div>
                        
                        <!-- Small -->
                        <div class="btn-group">
                          <button class="btn btn-primary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown">Small</button>
                          <ul class="dropdown-menu">
                            <li> <a class="dropdown-item" href="javascript:void(0);">Action</a> </li>
                            <li> <a class="dropdown-item" href="javascript:void(0);">Another action</a> </li>
                            <li> <a class="dropdown-item" href="javascript:void(0);">Something else here</a> </li>
                            <li>
                              <hr class="dropdown-divider">
                            </li>
                            <li> <a class="dropdown-item" href="javascript:void(0);">Separated link</a> </li>
                          </ul>
                        </div>
                        
                        <!-- Extra Small -->
                        <div class="btn-group">
                          <button class="btn btn-primary btn-xs dropdown-toggle" type="button" data-bs-toggle="dropdown">Extra small</button>
                          <ul class="dropdown-menu">
                            <li> <a class="dropdown-item" href="javascript:void(0);">Action</a> </li>
                            <li> <a class="dropdown-item" href="javascript:void(0);">Another action</a> </li>
                            <li> <a class="dropdown-item" href="javascript:void(0);">Something else here</a> </li>
                            <li>
                              <hr class="dropdown-divider">
                            </li>
                            <li> <a class="dropdown-item" href="javascript:void(0);">Separated link</a> </li>
                          </ul>
                        </div>';

                    include $path . 'widgets/code_preview.php';

                    ?>

                </section>

                <hr class="my-5">

                <!-- Heading 4 |  -->
                <section id="head4">

                    <h2 class="pb-3 text-heading">Directions</h2>
                    <p class="text-body">Default dropdown menus trigger below to the parent element.
                    </p>
                    <p class="text-body">Trigger dropdown menus above elements by adding
                        <?php echo $GLOBALS['copy'] ?>.dropup</button> to the parent element.
                    </p>
                    <p class="text-body">Trigger dropdown menus at the right of the elements by adding
                        <?php echo $GLOBALS['copy'] ?>.dropend</button> to the
                        parent element.
                    </p>
                    <p class="text-body">Trigger dropdown menus at the left of the elements by adding
                        <?php echo $GLOBALS['copy'] ?>.dropstart</button> to the
                        parent element.
                    </p>

                    <!-- Code Preview Widget -->
                    <?php $code = '
                        <!-- Dropdown button -->
                        <div class="btn-group dropdown">
                          <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                          </button>
                          <ul class="dropdown-menu">
                            <li> <a class="dropdown-item" href="javascript:void(0);">Action</a> </li>
                            <li> <a class="dropdown-item" href="javascript:void(0);">Another action</a> </li>
                            <li> <a class="dropdown-item" href="javascript:void(0);">Something else here</a> </li>
                            <li>
                              <hr class="dropdown-divider">
                            </li>
                            <li> <a class="dropdown-item" href="javascript:void(0);">Separated link</a> </li>
                          </ul>
                        </div>
                        
                        <!-- Dropup button -->
                        <div class="btn-group dropup">
                          <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropup
                          </button>
                          <ul class="dropdown-menu">
                            <li> <a class="dropdown-item" href="javascript:void(0);">Action</a> </li>
                            <li> <a class="dropdown-item" href="javascript:void(0);">Another action</a> </li>
                            <li> <a class="dropdown-item" href="javascript:void(0);">Something else here</a> </li>
                            <li>
                              <hr class="dropdown-divider">
                            </li>
                            <li> <a class="dropdown-item" href="javascript:void(0);">Separated link</a> </li>
                          </ul>
                        </div>
                        
                        <!-- Dropend button -->
                        <div class="btn-group dropend">
                          <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropend
                          </button>
                          <ul class="dropdown-menu">
                            <li> <a class="dropdown-item" href="javascript:void(0);">Action</a> </li>
                            <li> <a class="dropdown-item" href="javascript:void(0);">Another action</a> </li>
                            <li> <a class="dropdown-item" href="javascript:void(0);">Something else here</a> </li>
                            <li>
                              <hr class="dropdown-divider">
                            </li>
                            <li> <a class="dropdown-item" href="javascript:void(0);">Separated link</a> </li>
                          </ul>
                        </div>
                        
                        <!-- Dropstart button -->
                        <div class="btn-group dropstart">
                          <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropstart
                          </button>
                          <ul class="dropdown-menu">
                            <li> <a class="dropdown-item" href="javascript:void(0);">Action</a> </li>
                            <li> <a class="dropdown-item" href="javascript:void(0);">Another action</a> </li>
                            <li> <a class="dropdown-item" href="javascript:void(0);">Something else here</a> </li>
                            <li>
                              <hr class="dropdown-divider">
                            </li>
                            <li> <a class="dropdown-item" href="javascript:void(0);">Separated link</a> </li>
                          </ul>
                        </div>';

                    include $path . 'widgets/code_preview.php';

                    ?>

                </section>

                <hr class="my-5">

                <!-- Heading 5 |  -->
                <section id="head5">

                    <h2 class="pb-3 text-heading">Menu Items</h2>
                    <p class="text-body">Historically dropdown menu contents had to be links, but that's no longer the
                        case with v4. Now you can optionally use
                        <?php echo $GLOBALS['copy'] ?>&lt;button&gt;</button> elements in your dropdowns instead of
                        just
                        <?php echo $GLOBALS['copy'] ?>&lt;a&gt;</button>s.
                    </p>

                    <!-- Code Preview Widget -->
                    <?php $code = '
                        <!-- Dropdown with button options -->
                        <div class="btn-group">
                          <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenu">
                            <li><button class="dropdown-item" type="button">Action</button></li>
                            <li><button class="dropdown-item" type="button">Another action</button></li>
                            <li><button class="dropdown-item" type="button">Something else here</button></li>
                          </ul>
                        </div>';

                    include $path . 'widgets/code_preview.php';

                    ?>

                    <div class="my-5"></div>

                    <ul style="padding: 0; list-style: none">

                        <!-- Subheading 5.1 |  -->
                        <section id="head5_item1">
                            <dt class="text-body-emphasis">Non-interactive Dropdown</dt>
                            <dd class="mt-2 text-body">You can also create non-interactive dropdown items with
                                <?php echo $GLOBALS['copy'] ?>.dropdown-item-text</button>. Feel free to style further
                                with custom CSS or text utilities.
                            </dd>

                            <!-- Code Preview Widget -->
                            <?php $code = '
                                <div class="btn-group">
                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Dropdown
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><span class="dropdown-item-text">Dropdown item text</span></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </div>';

                            include $path . 'widgets/code_preview.php';

                            ?>

                        </section>

                        <div class="my-5"></div>

                        <!-- Subheading 5.2 |  -->
                        <section id="head5_item2">
                            <dt class="text-body-emphasis">Active Dropdown Item</dt>
                            <dd class="mt-3 text-body">Add
                                <?php echo $GLOBALS['copy'] ?>.active</button> class to items in the dropdown to style
                                them as active
                            </dd>

                            <!-- Code Preview Widget -->
                            <?php $code = '
                                <!-- Dropdown with active item -->
                                <div class="btn-group">
                                  <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Dropdown
                                  </button>
                                  <ul class="dropdown-menu">
                                    <li><span class="dropdown-item-text">Dropdown item text</span></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                    <li><a class="dropdown-item active" href="javascript:void(0);">Another action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                  </ul>
                                </div>';

                            include $path . 'widgets/code_preview.php';

                            ?>

                        </section>

                        <div class="my-5"></div>

                        <!-- Subheading 5.3 |  -->
                        <section id="head5_item3">
                            <dt class="text-body-emphasis">Disabled Dropdown Item</dt>
                            <dd class="mt-3 text-body">Add
                                <?php echo $GLOBALS['copy'] ?>.disabled</button> class to items in the dropdown to style
                                them as disabled.
                            </dd>

                            <!-- Code Preview Widget -->
                            <?php $code = '
                                <!-- Dropdown with disabled item -->
                                <div class="btn-group">
                                  <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Dropdown
                                  </button>
                                  <ul class="dropdown-menu">
                                    <li><span class="dropdown-item-text">Dropdown item text</span></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                    <li><a class="dropdown-item disabled" href="javascript:void(0);">Another action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                  </ul>
                                </div>';

                            include $path . 'widgets/code_preview.php';

                            ?>

                        </section>

                    </ul>

                </section>

                <hr class="my-5">

                <!-- Heading 6 |  -->
                <section id="head6">

                    <h2 class="pb-3 text-heading">Menu Content</h2>

                    <ul style="padding: 0; list-style: none">

                        <!-- Subheading 5.1 |  -->
                        <section id="head6_item1">
                            <dt class="text-body-emphasis">Headers</dt>
                            <dd class="mt-2 text-body">Add a header to label sections of actions in any dropdown menu.
                            </dd>

                            <!-- Code Preview Widget -->
                            <?php $code = '
                                <!-- Menu content Headers -->
                                <div class="btn-group">
                                  <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Dropdown
                                  </button>
                                  <ul class="dropdown-menu">
                                    <li>
                                      <h6 class="dropdown-header">Dropdown header</h6>
                                    </li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                  </ul>
                                </div>';

                            include $path . 'widgets/code_preview.php';

                            ?>

                        </section>

                        <div class="my-5"></div>

                        <!-- Subheading 6.2 |  -->
                        <section id="head6_item2">
                            <dt class="text-body-emphasis">Dividers</dt>
                            <dd class="mt-3 text-body">Separate groups of related menu items with a divider.
                            </dd>

                            <!-- Code Preview Widget -->
                            <?php $code = '
                                 <!-- Menu content Dividers -->
                                 <div class="btn-group">
                                  <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Dropdown
                                  </button>
                                  <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                    <li>
                                      <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                  </ul>
                                </div>';

                            include $path . 'widgets/code_preview.php';

                            ?>

                        </section>

                        <div class="my-5"></div>

                        <!-- Subheading 6.3 |  -->
                        <section id="head6_item3">
                            <dt class="text-body-emphasis">Text</dt>
                            <dd class="mt-3 text-body">Place any freeform text within a dropdown menu with text and use
                                <a class="btn-link" href="https://getbootstrap.com/docs/5.3/utilities/spacing/"
                                    target="_blank">spacing utilities</a>. Note that you'll likely need additional
                                sizing styles to constrain
                                the menu width.
                            </dd>

                            <!-- Code Preview Widget -->
                            <?php $code = '
                                <!-- Menu content text -->
                                <div class="btn-group">
                                  <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Dropdown
                                  </button>
                                  <div class="dropdown-menu p-4 text-muted" style="max-width: 200px;">
                                    <p>Some example text that’s free-flowing within the dropdown menu.</p>
                                    <p class="mb-0">And this is more example text.</p>
                                  </div>
                                </div>';

                            include $path . 'widgets/code_preview.php';

                            ?>

                        </section>

                        <div class="my-5"></div>

                        <!-- Subheading 6.4 |  -->
                        <section id="head6_item4">
                            <dt class="text-body-emphasis">Forms</dt>
                            <dd class="mt-3 text-body">Put a form within a dropdown menu, or make it into a dropdown
                                menu, and use <a class="btn-link"
                                    href="https://getbootstrap.com/docs/5.3/utilities/spacing/" target="_blank">margin
                                    or padding utilities</a> to give it the negative space you require.
                            </dd>

                            <!-- Code Preview Widget -->
                            <?php $code = '
                                <!-- Menu content forms -->
                                <div class="btn-group">
                                  <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Dropdown
                                  </button>
                                  <div class="dropdown-menu">
                                    <form class="px-4 py-3">
                                      <div class="mb-3">
                                        <label for="exampleDropdownFormEmail1" class="form-label">Email address</label>
                                        <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
                                      </div>
                                      <div class="mb-3">
                                        <label for="exampleDropdownFormPassword1" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
                                      </div>
                                      <div class="mb-3">
                                        <div class="form-check">
                                          <input type="checkbox" class="form-check-input" id="dropdownCheck">
                                          <label class="form-check-label" for="dropdownCheck">
                                            Remember me
                                          </label>
                                        </div>
                                      </div>
                                      <button type="button" class="btn btn-primary">Sign in</button>
                                    </form>
                                    <hr class="dropdown-divider">
                                    <a class="dropdown-item" href="javascript:void(0)">New around here? Sign up</a>
                                    <a class="dropdown-item" href="javascript:void(0)">Forgot password?</a>
                                  </div>
                                </div>';

                            include $path . 'widgets/code_preview.php';

                            ?>

                        </section>

                    </ul>

                </section>

                <hr class="my-5">

                <!-- Heading 7 |  -->
                <section id="head7">

                    <h2 class="pb-3 text-heading">Dropdown Options</h2>
                    <p class="text-body">By default, the dropdown menu is closed when clicking inside or outside the
                        dropdown menu. You can use the
                        <?php echo $GLOBALS['copy'] ?>autoClose</button> option to change this behavior of the dropdown.
                    </p>

                    <div class="mt-5"></div>

                    <ul style="padding: 0; list-style: none">

                        <!-- Subheading 7.1 |  -->
                        <section id="head7_item1">
                            <dt class="text-body-emphasis">Auto Close Behavior</dt>
                            <dd class="mt-2 text-body">By default, the dropdown menu is closed when clicking inside or
                                outside the dropdown menu. You can use the autoClose option to change this behavior of
                                the dropdown.
                            </dd>

                            <!-- Code Preview Widget -->
                            <?php $code = '
                                <!-- Default dropdown -->
                                <div class="btn-group">
                                  <button class="btn btn-primary dropdown-toggle" type="button" id="defaultDropdown" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                    Default dropdown
                                  </button>
                                  <ul class="dropdown-menu" aria-labelledby="defaultDropdown">
                                    <li><a class="dropdown-item" href="javascript:void(0)">Menu item</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Menu item</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Menu item</a></li>
                                  </ul>
                                </div>
                                
                                <!-- Clickable outside -->
                                <div class="btn-group">
                                  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuClickableOutside" data-bs-toggle="dropdown" data-bs-auto-close="inside" aria-expanded="false">
                                    Clickable outside
                                  </button>
                                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableOutside">
                                    <li><a class="dropdown-item" href="javascript:void(0)">Menu item</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Menu item</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Menu item</a></li>
                                  </ul>
                                </div>
                                
                                <!-- Clickable inside -->
                                <div class="btn-group">
                                  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuClickableInside" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                    Clickable inside
                                  </button>
                                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableInside">
                                    <li><a class="dropdown-item" href="javascript:void(0)">Menu item</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Menu item</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Menu item</a></li>
                                  </ul>
                                </div>
                                
                                <!-- Manual close -->
                                <div class="btn-group">
                                  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuClickable" data-bs-toggle="dropdown" data-bs-auto-close="false" aria-expanded="false">
                                    Manual close
                                  </button>
                                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickable">
                                    <li><a class="dropdown-item" href="javascript:void(0)">Menu item</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Menu item</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Menu item</a></li>
                                  </ul>
                                </div>';

                            include $path . 'widgets/code_preview.php';

                            ?>

                        </section>

                    </ul>

                </section>

                <!-- Spacer in case content is too short -->
                <div style="height: 25vh"></div>
            </div>

            <!-- Footer -->
            <?php

            $GLOBALS['head1'] = "Overview";
            $GLOBALS['head1_item1'] = "Basic Dropdown";
            $GLOBALS['head1_item2'] = "Split Dropdown";
            $GLOBALS['head1_item3'] = "Hidden Arrow";
            $GLOBALS['head1_item4'] = "Open on Hover";
            $GLOBALS['head2'] = "Alignment";
            $GLOBALS['head2_item1'] = "Menu Alignment";
            $GLOBALS['head2_item2'] = "Responsive Alignmnent";
            $GLOBALS['head3'] = "Sizes";
            $GLOBALS['head4'] = "Directions";
            $GLOBALS['head5'] = "Menu Items";
            $GLOBALS['head5_item1'] = "Non-interactive Dropdown";
            $GLOBALS['head5_item2'] = "Active Dropdown Item";
            $GLOBALS['head5_item3'] = "Disabled Dropdown Item";
            $GLOBALS['head6'] = "Menu Content";
            $GLOBALS['head6_item1'] = "Headers";
            $GLOBALS['head6_item2'] = "Dividers";
            $GLOBALS['head6_item3'] = "Text";
            $GLOBALS['head6_item4'] = "Forms";
            $GLOBALS['head7'] = "Dropdown Options";
            $GLOBALS['head7_item1'] = "Auto close Behavior";

            include $path . 'widgets/overview.php'; ?>

        </div>

    </div>
    <?php include $path . 'widgets/footer.php'; ?>
    <?php include $path . 'widgets/modals.php'; ?>
    <?php include $path . 'components/footer.php'; ?>
</body>

</html>