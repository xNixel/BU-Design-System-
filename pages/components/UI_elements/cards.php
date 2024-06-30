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
                    <p class="text-body">Provide a structured layout for presenting data, images, or other media
                        elements in a concise and organized manner.</p>
                    <p class="text-body">Cards are versatile and visually appealing components that can be used to
                        display a variety of content. They are self-contained modules that provide a clear and concise
                        way to present information. Cards can be used to showcase products, display articles, or simply
                        provide a summary of information.</p>
                    <p class="text-body">Read the official
                        <a class="btn-link" href="https://getbootstrap.com/docs/5.3/components/card/"
                            target="_blank">Bootstrap
                            Documentation</a> for a full list of instructions and other options.
                    </p>

                </section>

                <hr class="my-5">

                <!-- Heading 2 |  -->
                <section id="head2">
                    <h2 class="pb-3 text-heading">Basic Example</h2>
                    <p class="text-body">Cards are built with as little markup and styles as possible, but still manage
                        to deliver a ton of control and customization. Built with flexbox, they offer easy alignment and
                        mix well with other Bootstrap components.</p>


                    <p class="text-body">Below is an example of a basic card with mixed content and a fixed width. Cards
                        have no fixed width to start, so they'll naturally fill the full width of its parent element.
                    </p>

                    <!-- Code Preview Widget -->
                    <?php $code = '
                        <div class="card" style="width: 18rem;">
                        <img src="assets/img/elements/5.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>';

                    include $path . 'widgets/code_preview.php';

                    ?>

                </section>

                <hr class="my-5">

                <!-- Heading 3 |  -->
                <section id="head3">

                    <h2 class="pb-3 text-heading">Content Types</h2>
                    <p class="text-body">Cards support a wide variety of content, including images, text, list groups,
                        links, and more. Below are examples of what's supported.</p>

                    <ul class="mt-5" style="padding: 0; list-style: none">

                        <!-- Subheading 3.2 |  -->
                        <section id="head3_item1">
                            <dt class="text-body-emphasis">Body</dt>
                            <dd class="text-body mt-2">The building block of a card is the
                                <?php echo $GLOBALS['copy'] ?>.card-body</button>. Use it whenever
                                you need a padded section within a card.
                            </dd>

                            <!-- Code Preview Widget -->
                            <?php $code = '
                                <div class="card">
                                    <div class="card-body">
                                    This is some text within a card body.
                                    </div>
                                </div>';

                            include $path . 'widgets/code_preview.php';

                            ?>

                        </section>

                        <div class="my-5"></div>

                        <!-- Subheading 3.1 |  -->
                        <section id="head3_item2">
                            <dt class="text-body-emphasis">Titles, Text, & Links</dt>
                            <dd class="text-body mt-2">Card titles are used by adding
                                <?php echo $GLOBALS['copy'] ?>.card-title</button> to a &lt;h*&gt; tag.
                                In the same way, links are added and placed next to each other by adding
                                <?php echo $GLOBALS['copy'] ?>.card-link</button> to an &lt;a&gt; tag.
                            </dd>

                            <!-- Code Preview Widget -->
                            <?php $code = '
                                <div class="card" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                                        <a href="#" class="card-link">Card link</a>
                                        <a href="#" class="card-link">Another link</a>
                                    </div>
                                </div>';

                            include $path . 'widgets/code_preview.php';

                            ?>

                        </section>

                        <div class="my-5"></div>

                        <!-- Subheading 3.3 |  -->
                        <section id="head3_item3">
                            <dt class="text-body-emphasis">Images</dt>
                            <dd class="text-body mt-2">
                                <?php echo $GLOBALS['copy'] ?>.card-img-top</button> places an image to the top of the
                                card. With
                                <?php echo $GLOBALS['copy'] ?>.card-text</button>, text can be added to the card. Text
                                within
                                <?php echo $GLOBALS['copy'] ?>.card-text</button> can also be styled with the standard
                                HTML tags.
                            </dd>

                            <!-- Code Preview Widget -->
                            <?php $code = '
                                <div class="card" style="width: 18rem;">
                                    <img src="assets/img/elements/2.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                                    </div>
                                </div>';

                            include $path . 'widgets/code_preview.php';

                            ?>

                        </section>

                        <div class="my-5"></div>

                        <!-- Subheading 3.4 |  -->
                        <section id="head3_item4">
                            <dt class="text-body-emphasis">List Groups</dt>
                            <dd class="text-body mt-2">
                                Create lists of content in a card with a flush list group.
                            </dd>

                            <!-- Code Preview Widget -->
                            <?php $code = '
                                <div class="card" style="width: 18rem;">
                                    <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Cras justo odio</li>
                                    <li class="list-group-item">Dapibus ac facilisis in</li>
                                    <li class="list-group-item">Vestibulum at eros</li>
                                    </ul>
                                </div>';

                            include $path . 'widgets/code_preview.php';

                            ?>

                        </section>

                        <div class="my-5"></div>

                        <!-- Subheading 3.5 |  -->
                        <section id="head3_item5">
                            <dt class="text-body-emphasis">Kitchen Sink</dt>
                            <dd class="text-body mt-2">
                                Mix and match multiple content types to create the card you need, or throw everything in
                                there. Shown below are image styles, blocks, text styles, and a list group—all wrapped
                                in a fixed-width card.
                            </dd>

                            <!-- Code Preview Widget -->
                            <?php $code = '
                                <div class="card" style="width: 18rem;">
                                    <img src="assets/img/elements/3.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                    <li class="list-group-item">An item</li>
                                    <li class="list-group-item">A second item</li>
                                    <li class="list-group-item">A third item</li>
                                    </ul>
                                    <div class="card-body">
                                    <a href="#" class="card-link">Card link</a>
                                    <a href="#" class="card-link">Another link</a>
                                    </div>
                                </div>';

                            include $path . 'widgets/code_preview.php';

                            ?>

                        </section>

                    </ul>

                </section>

                <hr class="my-5">

                <!-- Heading 4 |  -->
                <section id="head4">
                    <h2 class="pb-3 text-heading">Header and Footer</h2>
                    <p class="text-body">Add an optional header and/or footer within a card.</p>

                    <!-- Code Preview Widget -->
                    <?php $code = '
                        <div class="card text-center">
                            <div class="card-header">
                            Featured
                            </div>
                            <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                            <div class="card-footer text-muted">
                            2 days ago
                            </div>
                        </div>';

                    include $path . 'widgets/code_preview.php';

                    ?>

                </section>

                <hr class="my-5">

                <!-- Heading 5 |  -->
                <section id="head5">
                    <h2 class="pb-3 text-heading">Text Alignment</h2>
                    <p class="text-body">You can quickly change the text alignment of any card—in its entirety or
                        specific parts—with our text align classes.</p>

                    <!-- Code Preview Widget -->
                    <?php $code = '
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                        
                        <div class="card text-center" style="width: 18rem;">
                            <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                        
                        <div class="card text-end" style="width: 18rem;">
                            <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>';

                    include $path . 'widgets/code_preview.php';

                    ?>

                </section>

                <hr class="my-5">

                <!-- Heading 6 |  -->
                <section id="head6">
                    <h2 class="pb-3 text-heading">Images</h2>
                    <p class="text-body">Cards include a few options for working with images. Choose from appending
                        “image caps” at either end of a card, overlaying images with card content, or simply embedding
                        the image in a card.</p>

                    <ul class="mt-5" style="padding: 0; list-style: none">

                        <!-- Subheading 6.1 |  -->
                        <section id="head6_item1">
                            <dt class="text-body-emphasis">Image Caps</dt>
                            <dd class="text-body mt-2">Similar to headers and footers, cards can include top and bottom
                                “image caps”—images at the top or bottom of a card.
                            </dd>

                            <!-- Code Preview Widget -->
                            <?php $code = '
                                <div class="card mb-3">
                                    <img src="assets/img/elements/11.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                    <img src="assets/img/elements/18.jpg" class="card-img-bottom" alt="...">
                                </div>';

                            include $path . 'widgets/code_preview.php';

                            ?>

                        </section>

                        <div class="my-5"></div>

                        <!-- Subheading 6.2 |  -->
                        <section id="head6_item2">
                            <dt class="text-body-emphasis">Image Overlays</dt>
                            <dd class="text-body mt-2">Turn an image into a card background and overlay your card's
                                text. Depending on the image, you may or may not need additional styles or utilities.
                            </dd>

                            <!-- Code Preview Widget -->
                            <?php $code = '
                                <div class="card bg-dark text-white">
                                    <img src="assets/img/elements/7.jpg" class="card-img" alt="...">
                                    <div class="card-img-overlay">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text">Last updated 3 mins ago</p>
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
                    <h2 class="pb-3 text-heading">Horizontal</h2>
                    <p class="text-body">Using a combination of grid and utility classes, cards can be made horizontal
                        in a mobile-friendly and responsive way. In the example below, we remove the grid gutters with
                        <?php echo $GLOBALS['copy'] ?>.g-0</button> and use
                        <?php echo $GLOBALS['copy'] ?>.col-md-*</button> classes to make the card horizontal at the md
                        breakpoint. Further adjustments may be needed depending on your card content.
                    </p>

                    <!-- Code Preview Widget -->
                    <?php $code = '
                        <div class="row">
                            <div class="col-md">
                            <div class="card mb-3">
                                <div class="row g-0">
                                <div class="col-md-4">
                                    <img class="card-img card-img-left" src="assets/img/elements/2.jpg" alt="Card image" />
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">
                                        This is a wider card with supporting text below as a natural lead-in to additional content. This content
                                        is a
                                        little bit longer.
                                    </p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class="col-md">
                            <div class="card mb-3">
                                <div class="row g-0">
                                <div class="col-md-8">
                                    <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">
                                        This is a wider card with supporting text below as a natural lead-in to additional content. This content
                                        is a
                                        little bit longer.
                                    </p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <img class="card-img card-img-right" src="assets/img/elements/13.jpg" alt="Card image" />
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>';

                    include $path . 'widgets/code_preview.php';

                    ?>

                </section>

                <hr class="my-5">

                <!-- Heading 8 |  -->
                <section id="head8">
                    <h2 class="pb-3 text-heading">Card Styles</h2>
                    <p class="text-body">Cards include various options for customizing their backgrounds, borders, and
                        color.
                    </p>

                    <ul class="mt-5" style="padding: 0; list-style: none">

                        <!-- Subheading 3.1 |  -->
                        <section id="head8_item1">
                            <dt class="text-body-emphasis">Background and Color</dt>
                            <dd class="text-body mt-2">Use <a class="btn-link"
                                    href="https://getbootstrap.com/docs/5.3/utilities/text/" target="_blank">text</a>
                                and <a class="btn-link" href="https://getbootstrap.com/docs/5.3/utilities/background/"
                                    target="_blank">background</a> utilities to change the appearance of a
                                card.
                            </dd>

                            <!-- Code Preview Widget -->
                            <?php $code = '
                                <div class="row">
                                    <div class="col-md">
                                    <div class="card text-white bg-primary">
                                        <div class="card-header">Header</div>
                                        <div class="card-body">
                                        <h5 class="card-title text-white">Primary card title</h5>
                                        <p class="card-text">
                                            Some quick example text to build on the card title and make up the bulk of the card’s content.
                                        </p>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-md">
                                    <div class="card text-white bg-secondary">
                                        <div class="card-header">Header</div>
                                        <div class="card-body">
                                        <h5 class="card-title text-white">Secondary card title</h5>
                                        <p class="card-text">
                                            Some quick example text to build on the card title and make up the bulk of the card’s content.
                                        </p>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-md">
                                    <div class="card text-white bg-success">
                                        <div class="card-header">Header</div>
                                        <div class="card-body">
                                        <h5 class="card-title text-white">Success card title</h5>
                                        <p class="card-text">
                                            Some quick example text to build on the card title and make up the bulk of the card’s content.
                                        </p>
                                        </div>
                                    </div>
                                    </div>
                                </div>';

                            include $path . 'widgets/code_preview.php';

                            ?>

                        </section>

                        <div class="my-5"></div>

                        <!-- Subheading 3.2 |  -->
                        <section id="head8_item2">
                            <dt class="text-body-emphasis">Border</dt>
                            <dd class="text-body mt-2">Use <a class="btn-link"
                                    href="https://getbootstrap.com/docs/5.3/utilities/borders/"
                                    target="_blank">border</a> utilities to change just the
                                <?php echo $GLOBALS['copy'] ?>border-color</button> of a card.
                                Note that you can put
                                <?php echo $GLOBALS['copy'] ?>.text-{color}</button> classes on the parent
                                <?php echo $GLOBALS['copy'] ?>.card</button> or a
                                subset of the card's contents as shown below.
                            </dd>

                            <!-- Code Preview Widget -->
                            <?php $code = '
                                <div class="row">
                                    <div class="col-md">
                                    <div class="card shadow-none bg-transparent border border-primary">
                                        <div class="card-header">Header</div>
                                        <div class="card-body text-primary">
                                        <h5 class="card-title">Primary card title</h5>
                                        <p class="card-text">
                                            Some quick example text to build on the card title and make up the bulk of the card’s content.
                                        </p>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-md">
                                    <div class="card shadow-none bg-transparent border border-secondary">
                                        <div class="card-header">Header</div>
                                        <div class="card-body text-secondary">
                                        <h5 class="card-title">Secondary card title</h5>
                                        <p class="card-text">
                                            Some quick example text to build on the card title and make up the bulk of the card’s content.
                                        </p>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-md">
                                    <div class="card shadow-none bg-transparent border border-success">
                                        <div class="card-header">Header</div>
                                        <div class="card-body text-success">
                                        <h5 class="card-title">Success card title</h5>
                                        <p class="card-text">
                                            Some quick example text to build on the card title and make up the bulk of the card’s content.
                                        </p>
                                        </div>
                                    </div>
                                    </div>
                                    </div>';

                            include $path . 'widgets/code_preview.php';

                            ?>

                        </section>

                    </ul>

                </section>

                <hr class="my-5">

                <!-- Heading 9 |  -->
                <section id="head9">
                    <h2 class="pb-3 text-heading">Card Layouts</h2>
                    <p class="text-body">In addition to styling the content within cards, Bootstrap includes a few
                        options for laying out series of cards. For the time being, these layout options are not yet
                        responsive.
                    </p>

                    <ul class="mt-5" style="padding: 0; list-style: none">

                        <!-- Subheading 9.1 |  -->
                        <section id="head9_item1">
                            <dt class="text-body-emphasis">Card Groups</dt>
                            <dd class="text-body mt-2">Use card groups to render cards as a single, attached element
                                with equal width and height columns. Card groups use
                                <?php echo $GLOBALS['copy'] ?>display: flex;</button> to achieve their
                                uniform sizing.
                            </dd>

                            <!-- Code Preview Widget -->
                            <?php $code = '
                                <div class="card-group">
                                    <div class="card">
                                    <img src="assets/img/elements/11.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                    </div>
                                    <div class="card">
                                    <img src="assets/img/elements/5.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                    </div>
                                    <div class="card">
                                    <img src="assets/img/elements/8.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                    </div>
                                </div>';

                            include $path . 'widgets/code_preview.php';

                            ?>

                        </section>

                        <div class="my-5"></div>

                        <!-- Subheading 9.2 |  -->
                        <section id="head9_item2">
                            <dt class="text-body-emphasis">Grid Cards</dt>
                            <dd class="text-body mt-2">Use the Bootstrap grid system and its
                                <?php echo $GLOBALS['copy'] ?>.row-cols</button> classes to
                                control how many grid columns (wrapped around your cards) you show per row. For example,
                                here's
                                <?php echo $GLOBALS['copy'] ?>.row-cols-1</button> laying out the cards on one column,
                                and
                                <?php echo $GLOBALS['copy'] ?>.row-cols-md-2</button> splitting four
                                cards to equal width across multiple rows, from the medium breakpoint up.
                            </dd>

                            <!-- Code Preview Widget -->
                            <?php $code = '
                                <div class="row row-cols-1 row-cols-md-3 g-4">
                                    <div class="col">
                                    <div class="card h-100">
                                        <img class="card-img-top" src="assets/img/elements/19.jpg" alt="Card image cap" />
                                        <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col">
                                    <div class="card h-100">
                                        <img class="card-img-top" src="assets/img/elements/20.jpg" alt="Card image cap" />
                                        <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col">
                                    <div class="card h-100">
                                        <img class="card-img-top" src="assets/img/elements/21.jpg" alt="Card image cap" />
                                        <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col">
                                    <div class="card h-100">
                                        <img class="card-img-top" src="assets/img/elements/22.jpg" alt="Card image cap" />
                                        <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col">
                                    <div class="card h-100">
                                        <img class="card-img-top" src="assets/img/elements/23.jpg" alt="Card image cap" />
                                        <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col">
                                    <div class="card h-100">
                                        <img class="card-img-top" src="assets/img/elements/24.jpg" alt="Card image cap" />
                                        <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        </div>
                                    </div>
                                    </div>
                                    </div>';

                            include $path . 'widgets/code_preview.php';

                            ?>

                        </section>

                        <div class="my-5"></div>

                        <!-- Subheading 9.3 |  -->
                        <section id="head9_item3">
                            <dt class="text-body-emphasis">Masonry</dt>
                            <dd class="text-body mt-2">Masonry is not included in Bootstrap. Add it by including the
                                JavaScript plugin manually.
                            </dd>

                            <!-- Code Preview Only Widget -->
                            <?php

                            $code = '
                                    <script src="assets/vendor/libs/masonry/masonry.js">';

                            $preview_title = "MASONRY";
                            $preview_margin = "mt-5";

                            include $path . 'widgets/code_preview_only.php';

                            ?>

                            <dd class="text-body mt-4">By adding
                                <?php echo $GLOBALS['copy'] ?>data-masonry='{"percentPosition": true }'</button> to the
                                <?php echo $GLOBALS['copy'] ?>.row</button> wrapper, we can combine the powers of
                                Bootstrap's responsive grid and Masonry's positioning.
                            </dd>


                            <!-- Code Preview Widget -->
                            <?php $code = '
                                <div class="row gy-4" data-masonry=\'{"percentPosition": true }\'>
                                <div class="col-sm-6 col-lg-4">
                                  <div class="card">
                                    <img class="card-img-top" src="assets/img/elements/6.jpg" alt="Card image cap" />
                                    <div class="card-body">
                                      <h5 class="card-title">Card title that wraps to a new line</h5>
                                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                  <div class="card p-3">
                                    <figure class="p-3 mb-0">
                                      <blockquote class="blockquote">
                                        <p>A well-known quote, contained in a blockquote element.</p>
                                      </blockquote>
                                      <figcaption class="blockquote-footer mb-0 text-muted">
                                        Someone famous in <cite title="Source Title">Source Title</cite>
                                      </figcaption>
                                    </figure>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                  <div class="card">
                                    <img class="card-img-top" src="assets/img/elements/11.jpg" alt="Card image cap" />
                                    <div class="card-body">
                                      <h5 class="card-title">Card title</h5>
                                      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                  <div class="card bg-primary text-white text-center p-3">
                                    <figure class="mb-0">
                                      <blockquote class="blockquote">
                                        <p>A well-known quote, contained in a blockquote element.</p>
                                      </blockquote>
                                      <figcaption class="blockquote-footer mb-0 text-white">
                                        Someone famous in <cite title="Source Title">Source Title</cite>
                                      </figcaption>
                                    </figure>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                  <div class="card text-center">
                                    <div class="card-body">
                                      <h5 class="card-title">Card title</h5>
                                      <p class="card-text">This card has a regular title and short paragraph of text below it.</p>
                                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                  <div class="card">
                                    <img class="card-img-top" src="assets/img/elements/13.jpg" alt="Card image cap" />
                                  </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                  <div class="card p-3 text-end">
                                    <figure class="mb-0">
                                      <blockquote class="blockquote">
                                        <p>A well-known quote, contained in a blockquote element.</p>
                                      </blockquote>
                                      <figcaption class="blockquote-footer mb-0 text-muted">
                                        Someone famous in <cite title="Source Title">Source Title</cite>
                                      </figcaption>
                                    </figure>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                  <div class="card">
                                    <div class="card-body">
                                      <h5 class="card-title">Card title</h5>
                                      <p class="card-text">This is another card with title and supporting text below. This card has some additional content to make it slightly taller overall.</p>
                                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                  </div>
                                </div>
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
            $GLOBALS['head2'] = "Basic Example";
            $GLOBALS['head3'] = "Content Types";
            $GLOBALS['head3_item1'] = "Body";
            $GLOBALS['head3_item2'] = "Titles, Text, & Links";
            $GLOBALS['head3_item3'] = "Images";
            $GLOBALS['head3_item4'] = "List Groups";
            $GLOBALS['head3_item5'] = "Kitchen Sink";
            $GLOBALS['head4'] = "Header and Footer";
            $GLOBALS['head5'] = "Text Alignment";
            $GLOBALS['head6'] = "Images";
            $GLOBALS['head6_item1'] = "Image Caps";
            $GLOBALS['head6_item2'] = "Image Overlays";
            $GLOBALS['head7'] = "Horizontal";
            $GLOBALS['head8'] = "Card Styles";
            $GLOBALS['head8_item1'] = "Background and Color";
            $GLOBALS['head8_item2'] = "Border";
            $GLOBALS['head9'] = "Card Layouts";
            $GLOBALS['head9_item1'] = "Card Groups";
            $GLOBALS['head9_item2'] = "Grid Cards";
            $GLOBALS['head9_item3'] = "Masonry";

            include $path . 'widgets/overview.php'; ?>

        </div>

    </div>
    <?php include $path . 'widgets/footer.php'; ?>
    <?php include $path . 'widgets/modals.php'; ?>
    <?php include $path . 'components/footer.php'; ?>
</body>

</html>