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
                    <p class="text-body">Provide a visual cue and initiate actions when clicked or tapped.</p>
                    <p class="text-body">Buttons are interactive UI elements that provide a visual cue for users to
                        initiate specific functions within an interface. When clicked or tapped, buttons trigger actions
                        such as submitting a form, navigating to a different page, or triggering an event. Buttons play
                        a crucial role in guiding users through applications and enhancing the overall user experience.
                    </p>

                </section>

                <hr class="my-5">

                <!-- Heading 2 |  -->
                <section id="head2">
                    <h2 class="pb-3 text-heading">Basic Buttons</h2>
                    <p class="text-body">Bootstrap includes several predefined button styles, each serving its own
                        semantic purpose, with a few extras thrown in for more control.</p>

                    <!-- Code Preview Widget -->
                    <?php $code = '
                        <button type="button" class="btn btn-primary">Primary</button>
                        <button type="button" class="btn btn-secondary">Secondary</button>
                        <button type="button" class="btn btn-success">Success</button>
                        <button type="button" class="btn btn-danger">Danger</button>
                        <button type="button" class="btn btn-warning">Warning</button>
                        <button type="button" class="btn btn-info">Info</button>
                        <button type="button" class="btn btn-dark">Dark</button>';

                    include $path . 'widgets/code_preview.php';

                    ?>

                </section>

                <hr class="my-5">

                <!-- Heading 3 |  -->
                <section id="head3">

                    <h2 class="pb-3 text-heading">Label Button</h2>
                    <p class="text-body">In need of a button, but with light background colors? Replace the default
                        modifier classes with the
                        <?php echo $GLOBALS['copy'] ?>.btn-label-*</button>.
                    </p>

                    <!-- Code Preview Widget -->
                    <?php $code = '
                        <button type="button" class="btn btn-label-primary">Primary</button>
                        <button type="button" class="btn btn-label-secondary">Secondary</button>
                        <button type="button" class="btn btn-label-success">Success</button>
                        <button type="button" class="btn btn-label-danger">Danger</button>
                        <button type="button" class="btn btn-label-warning">Warning</button>
                        <button type="button" class="btn btn-label-info">Info</button>
                        <button type="button" class="btn btn-label-dark">Dark</button>';

                    include $path . 'widgets/code_preview.php';

                    ?>

                </section>

                <hr class="my-5">

                <!-- Heading 4 |  -->
                <section id="head4">

                    <h2 class="pb-3 text-heading">Outline Button</h2>
                    <p class="text-body">In need of a button, but not the hefty background colors they bring? Replace
                        the default modifier classes with the .btn-outline-* ones to remove all background images and
                        colors on any button.</p>

                    <!-- Code Preview Widget -->
                    <?php $code = '
                        <button type="button" class="btn btn-outline-primary">Primary</button>
                        <button type="button" class="btn btn-outline-secondary">Secondary</button>
                        <button type="button" class="btn btn-outline-success">Success</button>
                        <button type="button" class="btn btn-outline-danger">Danger</button>
                        <button type="button" class="btn btn-outline-warning">Warning</button>
                        <button type="button" class="btn btn-outline-info">Info</button>
                        <button type="button" class="btn btn-outline-dark">Dark</button>';

                    include $path . 'widgets/code_preview.php';

                    ?>

                </section>

                <hr class="my-5">

                <!-- Heading 5 |  -->
                <section id="head5">

                    <h2 class="pb-3 text-heading">Rounded Button</h2>
                    <p class="text-body">Just add extra class
                        <?php echo $GLOBALS['copy'] ?>.rounded-pill</button> to create rounded buttons.
                    </p>

                    <!-- Code Preview Widget -->
                    <?php $code = '
                        <div>
                            <button type="button" class="btn rounded-pill me-2 btn-primary">Primary</button>
                            <button type="button" class="btn rounded-pill me-2 btn-secondary">Secondary</button>
                            <button type="button" class="btn rounded-pill me-2 btn-success">Success</button>
                            <button type="button" class="btn rounded-pill me-2 btn-danger">Danger</button>
                            <button type="button" class="btn rounded-pill me-2 btn-warning">Warning</button>
                            <button type="button" class="btn rounded-pill me-2 btn-info">Info</button>
                            <button type="button" class="btn rounded-pill me-2 btn-dark">Dark</button>
                    
                        </div>

                        <div class="my-3">
                            <button type="button" class="btn rounded-pill me-2 btn-label-primary">Primary</button>
                            <button type="button" class="btn rounded-pill me-2 btn-label-secondary">Secondary</button>
                            <button type="button" class="btn rounded-pill me-2 btn-label-success">Success</button>
                            <button type="button" class="btn rounded-pill me-2 btn-label-danger">Danger</button>
                            <button type="button" class="btn rounded-pill me-2 btn-label-warning">Warning</button>
                            <button type="button" class="btn rounded-pill me-2 btn-label-info">Info</button>
                            <button type="button" class="btn rounded-pill me-2 btn-label-dark">Dark</button>

                        </div>

                        <div>
                            <button type="button" class="btn rounded-pill me-2 btn-outline-primary">Primary</button>
                            <button type="button" class="btn rounded-pill me-2 btn-outline-secondary">Secondary</button>
                            <button type="button" class="btn rounded-pill me-2 btn-outline-success">Success</button>
                            <button type="button" class="btn rounded-pill me-2 btn-outline-danger">Danger</button>
                            <button type="button" class="btn rounded-pill me-2 btn-outline-warning">Warning</button>
                            <button type="button" class="btn rounded-pill me-2 btn-outline-info">Info</button>
                            <button type="button" class="btn rounded-pill me-2 btn-outline-dark">Dark</button>
                        
                        </div>';

                    include $path . 'widgets/code_preview.php';

                    ?>

                </section>

                <hr class="my-5">

                <!-- Heading 6 |  -->
                <section id="head6">

                    <h2 class="pb-3 text-heading">Icon Button</h2>

                    <ul style="padding: 0; list-style: none">

                        <!-- Subheading 6.1 |  -->
                        <section id="head6_item1">
                            <dt class="text-body-emphasis">Icon Default </dt>

                            <!-- Code Preview Widget -->
                            <?php $code = '
                                <div>
                                    <button type="button" class="btn btn-primary me-2">
                                        <span class="tf-icons bx bx-pie-chart-alt me-1"></span> Primary
                                    </button>
                                    <button type="button" class="btn btn-secondary me-2">
                                        <span class="tf-icons bx bx-bell me-1"></span> Secondary
                                    </button>

                                </div>

                                <div class="my-3">
                                    <button type="button" class="btn btn-label-primary me-2">
                                        <span class="tf-icons bx bx-pie-chart-alt me-1"></span> Primary
                                    </button>
                                    <button type="button" class="btn btn-label-secondary me-2">
                                        <span class="tf-icons bx bx-bell me-1"></span> Secondary
                                    </button>

                                </div>

                                <div>
                                    <button type="button" class="btn btn-outline-primary me-2">
                                        <span class="tf-icons bx bx-pie-chart-alt me-1"></span> Primary
                                    </button>
                                    <button type="button" class="btn btn-outline-secondary me-2">
                                        <span class="tf-icons bx bx-bell me-1"></span> Secondary
                                    </button>
                                
                                </div>';

                            include $path . 'widgets/code_preview.php';

                            ?>

                        </section>

                        <!-- Subheading 6.2 |  -->
                        <section id="head6_item2" class="pt-5">
                            <dt class="text-body-emphasis">Icon Only</dt>

                            <!-- Code Preview Widget -->
                            <?php $code = '
                                <button type="button" class="btn btn-icon me-2 btn-primary">
                                    <span class="tf-icons bx bx-pie-chart-alt"></span>
                                </button>
                                <button type="button" class="btn btn-icon me-2 btn-secondary">
                                    <span class="tf-icons bx bx-bell"></span>
                                </button>
                                <button type="button" class="btn btn-icon me-2 btn-label-primary">
                                    <span class="tf-icons bx bx-pie-chart-alt"></span>
                                </button>
                                <button type="button" class="btn btn-icon me-2 btn-label-secondary">
                                    <span class="tf-icons bx bx-bell"></span>
                                </button>
                                <button type="button" class="btn btn-icon me-2 btn-outline-primary">
                                    <span class="tf-icons bx bx-pie-chart-alt"></span>
                                </button>
                                <button type="button" class="btn btn-icon me-2 btn-outline-secondary">
                                    <span class="tf-icons bx bx-bell"></span>
                                </button>';

                            include $path . 'widgets/code_preview.php';

                            ?>

                        </section>

                    </ul>

                </section>

                <hr class="my-5">

                <!-- Heading 7 |  -->
                <section id="head7">

                    <h2 class="pb-3 text-heading">Social Button</h2>
                    <p class="text-body">Create social icons by using respective social media class as mentioned in
                        below table.</p>
                    <p class="text-body">You can also create rounded social buttons by using <button class="btn-code"
                            <?php echo $GLOBALS['copy'] ?>>.rounded-pill</button> class, label social button by using
                        <?php echo $GLOBALS['copy'] ?>.btn-label-{value}</button> class and
                        outline social buttons by using
                        <?php echo $GLOBALS['copy'] ?>.btn-outline-{value}</button> class.
                    </p>

                    <!-- Code Preview Widget -->
                    <?php $code = '
                        <div>
                            <button type="button" class="btn btn-facebook">
                                <i class="tf-icons bx bxl-facebook me-1"></i> Facebook
                            </button>

                            <button type="button" class="btn btn-twitter">
                                <i class="tf-icons bx bxl-twitter me-1"></i> Twitter
                            </button>

                            <button type="button" class="btn btn-google-plus">
                                <i class="tf-icons bx bxl-google-plus me-1"></i> Google+
                            </button>

                            <button type="button" class="btn btn-instagram">
                                <i class="tf-icons bx bxl-instagram me-1"></i> Instagram
                            </button>

                        </div>

                        <div class="my-3">
                            <button type="button" class="btn btn-linkedin">
                                <i class="tf-icons bx bxl-linkedin me-1"></i> Linkedin
                            </button>

                            <button type="button" class="btn btn-github">
                                <i class="tf-icons bx bxl-github me-1"></i> Github
                            </button>
                            
                            <button type="button" class="btn btn-dribbble">
                                <i class="tf-icons bx bxl-dribbble me-1"></i> Dribbble
                            </button>

                            <button type="button" class="btn btn-pinterest">
                                <i class="tf-icons bx bxl-pinterest me-1"></i> Pinterest
                            </button>
                        </div>

                        <div>
                            <button type="button" class="btn btn-slack">
                                <i class="tf-icons bx bxl-slack me-1"></i> Slack
                            </button>

                            <button type="button" class="btn btn-reddit">
                                <i class="tf-icons bx bxl-reddit me-1"></i> Reddit
                            </button>

                            <button type="button" class="btn btn-youtube">
                                <i class="tf-icons bx bxl-youtube me-1"></i> Youtube
                            </button>

                            <button type="button" class="btn btn-vimeo">
                                <i class="tf-icons bx bxl-vimeo me-1"></i> Vimeo
                            </button>
                        </div>';

                    include $path . 'widgets/code_preview.php';

                    ?>

                </section>

                <hr class="my-5">

                <!-- Heading 8 |  -->
                <section id="head8">

                    <h2 class="pb-3 text-heading">Size</h2>
                    <p class="text-body">Fancy larger or smaller buttons? Add
                        <?php echo $GLOBALS['copy'] ?>.btn-xl</button>,
                        <?php echo $GLOBALS['copy'] ?>.btn-lg</button>,
                        <?php echo $GLOBALS['copy'] ?>.btn-sm</button> or
                        <?php echo $GLOBALS['copy'] ?>.btn-xs</button> for
                        additional sizes.
                    </p>


                    <!-- Code Preview Widget -->
                    <?php $code = '
                        <button type="button" class="btn btn-xl btn-primary">Button xl</button>
                        <button type="button" class="btn btn-lg btn-primary">Button lg</button>
                        <button type="button" class="btn btn-primary">Button</button>
                        <button type="button" class="btn btn-sm btn-primary">Button sm</button>
                        <button type="button" class="btn btn-xs btn-primary">Button xs</button>';

                    include $path . 'widgets/code_preview.php';

                    ?>

                    <ul class="mt-5" style="padding: 0; list-style: none">

                        <!-- Subheading 8.1 |  -->
                        <section id="head8_item1">
                            <dt class="text-body-emphasis">Block Button</dt>
                            <dd class="text-body mt-2">Create responsive stacks of full-width, “block buttons” with a
                                mix of our display and gap utilities.
                            </dd>

                            <!-- Code Preview Widget -->
                            <?php $code = '
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button class="btn btn-primary btn-lg" type="button">Button</button>
                                    <button class="btn btn-secondary btn-lg" type="button">Button</button>
                                </div>';

                            include $path . 'widgets/code_preview.php';

                            ?>

                        </section>

                    </ul>

                </section>

                <hr class="my-5">

                <!-- Heading 9 |  -->
                <section id="head9">

                    <h2 class="pb-3 text-heading">Button State</h2>
                    <ul style="padding: 0; list-style: none">

                        <!-- Subheading 9.1 |  -->
                        <section id="head9_item1">
                            <dt class="text-body-emphasis">Active State</dt>
                            <dd class="text-body mt-2">Buttons will appear pressed (with a darker background, darker
                                border, and inset shadow) when active. There's no need to add a class to buttons as they
                                use a pseudo-class.
                            </dd>
                            <dd class="text-body">However, you
                                can still force the same active appearance with
                                <?php echo $GLOBALS['copy'] ?>.active</button> (and include the
                                <?php echo $GLOBALS['copy'] ?>aria-pressed="true"</button>
                                attribute) should you need to replicate the state programmatically.
                            </dd>

                            <!-- Code Preview Widget -->
                            <?php $code = '
                                <a href="#" class="btn btn-primary active" role="button" aria-pressed="true">Primary link</a>
                                <a href="#" class="btn btn-secondary active" role="button" aria-pressed="true">Link</a>';

                            include $path . 'widgets/code_preview.php';

                            ?>

                        </section>

                        <div class="mt-5"></div>

                        <section id="head9_item2">
                            <dt class="text-body-emphasis">Disabled State</dt>
                            <dd class="text-body mt-2">Make buttons look inactive by adding the disabled boolean
                                attribute to any &lt;button&gt; element.
                            </dd>
                            <dd class="text-body">&lt;a&gt;s don't support the disabled attribute, so you must add the
                                <?php echo $GLOBALS['copy'] ?>.disabled</button> class to make
                                it visually appear disabled.
                            </dd>

                            <!-- Code Preview Widget -->
                            <?php $code = '
                                    <button type="button" class="btn btn-primary" disabled>Primary button</button>
                                    <a href="#" class="btn btn-secondary disabled" tabindex="-1" role="button" aria-disabled="true">Link</a>';

                            include $path . 'widgets/code_preview.php';

                            ?>

                        </section>

                    </ul>

                </section>

                <hr class="my-5">

                <!-- Heading 10 |  -->
                <section id="head10">

                    <h2 class="pb-3 text-heading">Button Plugin</h2>
                    <p class="text-body">The button plugin allows you to create simple on/off toggle buttons.</p>

                    <ul style="padding: 0; list-style: none">

                        <!-- Subheading 10.1 |  -->
                        <section id="head10_item1">
                            <dt class="text-body-emphasis">Toggle State</dt>
                            <dd class="text-body mt-2">Add data-bs-toggle="button" to toggle a button's active state. If
                                you're pre-toggling a button, you must manually add the
                                <?php echo $GLOBALS['copy'] ?>.active</button> class and
                                <?php echo $GLOBALS['copy'] ?>aria-pressed="true"</button> to
                                ensure that it is conveyed appropriately to assistive technologies.
                            </dd>

                            <!-- Code Preview Widget -->
                            <?php $code = '
                                <button type="button" class="btn btn-primary" data-bs-toggle="button">Toggle button</button>
                                <button type="button" class="btn btn-primary active" data-bs-toggle="button" aria-pressed="true">Active toggle button</button>
                                <button type="button" class="btn btn-primary" disabled data-bs-toggle="button">Disabled toggle button</button>';

                            include $path . 'widgets/code_preview.php';

                            ?>

                        </section>

                        <div class="mt-5"></div>

                        <section id="head10_item2">
                            <dt class="text-body-emphasis">Toggle Button</dt>
                            <dd class="text-body mt-2">Create button-like checkboxes and radio buttons by using .btn
                                styles rather than
                                <?php echo $GLOBALS['copy'] ?>.form-check-label</button> on the &lt;label&gt; elements.
                                These toggle buttons can further be grouped in a button group if needed.
                            </dd>

                            <!-- Code Preview Widget -->
                            <?php $code = '
                                    <div class="d-block">
                                        <input type="checkbox" class="btn-check" id="btn-check">
                                        <label class="btn btn-primary" for="btn-check">Single toggle</label>
                                    </div>
                                    <div class="d-block">
                                        <input type="checkbox" class="btn-check" id="btn-check-2" checked>
                                        <label class="btn btn-primary" for="btn-check-2">Checked</label>
                                    </div>
                                    <div class="d-block">
                                        <input type="checkbox" class="btn-check" id="btn-check-3" checked>
                                        <label class="btn btn-primary" for="btn-check-3">Checked</label>
                                    </div>';

                            include $path . 'widgets/code_preview.php';

                            ?>

                        </section>

                        <div class="mt-5"></div>

                        <section id="head10_item3">
                            <dt class="text-body-emphasis">Checkbox</dt>
                            <dd class="text-body mt-2">Combine button-like checkbox and radio toggle buttons into a
                                seamless looking button group.
                            </dd>

                            <!-- Code Preview Widget -->
                            <?php $code = '
                                <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                                    <input type="checkbox" class="btn-check" id="btncheck1">
                                    <label class="btn btn-outline-primary" for="btncheck1">Checkbox 1</label>
                                    
                                    <input type="checkbox" class="btn-check" id="btncheck2">
                                    <label class="btn btn-outline-primary" for="btncheck2">Checkbox 2</label>
                                    
                                    <input type="checkbox" class="btn-check" id="btncheck3">
                                    <label class="btn btn-outline-primary" for="btncheck3">Checkbox 3</label>
                                </div>';

                            include $path . 'widgets/code_preview.php';

                            ?>

                            <!-- Code Preview Widget -->
                            <?php $code = '
                                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio1" checked>
                                    <label class="btn btn-outline-primary" for="btnradio1">Radio 1</label>

                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio2">
                                    <label class="btn btn-outline-primary" for="btnradio2">Radio 2</label>

                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio3">
                                    <label class="btn btn-outline-primary" for="btnradio3">Radio 3</label>
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
            $GLOBALS['head2'] = "Basic Button";
            $GLOBALS['head3'] = "Label Button";
            $GLOBALS['head4'] = "Outline Button";
            $GLOBALS['head5'] = "Rounded Button";
            $GLOBALS['head6'] = "Icon Button";
            $GLOBALS['head6_item1'] = "Icon Default";
            $GLOBALS['head6_item2'] = "Icon Only";
            $GLOBALS['head7'] = "Social Button";
            $GLOBALS['head8'] = "Size";
            $GLOBALS['head8_item1'] = "Block Button";
            $GLOBALS['head9'] = "Button State";
            $GLOBALS['head9_item1'] = "Active State";
            $GLOBALS['head9_item2'] = "Disabled State";
            $GLOBALS['head10'] = "Button Plugin";
            $GLOBALS['head10_item1'] = "Toggle States";
            $GLOBALS['head10_item2'] = "Toggle Button";
            $GLOBALS['head10_item3'] = "Checkbox & Radio Button";

            include $path . 'widgets/overview.php'; ?>

        </div>

    </div>
    <?php include $path . 'widgets/footer.php'; ?>
    <?php include $path . 'widgets/modals.php'; ?>
    <?php include $path . 'components/footer.php'; ?>
</body>

</html>