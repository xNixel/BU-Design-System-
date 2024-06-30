<?php

$path = '../../';
$filename = basename(__FILE__, '.php');

include_once $path . 'components/header.php'; ?>

<body>

  <?php include $path . 'widgets/navbar.php'; ?>

  <!-- TODO(patrick): widget offcanvas_sidebar Causing sidebar to error -->
  <!--  id of icon causing error -->
  <?php include $path . 'widgets/offcanvas_sidebar.php'; ?>
  <?php include $path . 'widgets/offcanvas_settings.php'; ?>


  <div class="container" style="margin-top: 56px;">
    <div class="main-content">

      <!-- Sidebar -->
      <div class="col-2 d-none d-md-none d-lg-block " id="sticky" style="height: 90vh">
        <?php include $path . 'widgets/sidebar.php'; ?>
      </div>

      <div class="content-holder min-vh-100 w-100" style="text-align: justify;">

        <!-- Heading 1 | Overview -->
        <section id="head1">
          <h1 class="pb-3 text-white">BU Design System Overview</h1>
          <p class="text-body">Bicol University Design system is a library of UI components that implements proper
            design system for customization for your own design.</p>

        </section>

        <hr class="my-5">

        <!-- Heading 2 | Introduction -->
        <section id="head2">
          <h2 class="pb-3 text-heading">Introduction</h2>
          <p class="text-body">The Bicol University Design system is an open-source library that includes a
            comprehensive collection of components that are ready for use in production right out of the box.</p>
          <p class="text-body">The Bicol University Design system is beautiful by design and features a suite of
            customization options for Bicol University that make it easy to implement your our design system on top of
            our
            components.</p>
        </section>

        <hr class="my-5">

        <!-- Heading 3 | Advantages -->
        <section id="head3">

          <h2 class="pb-3 text-heading">Advantages</h2>
          <ul style="padding: 0; list-style: none">

            <!-- Subheading 3.1 | Proper Guide -->
            <section id="head3_item1">
              <dt class="text-body-emphasis"><i class="ti ti-check"></i> Proper Guide</dt>
              <dd class="ps-4 mt-2 text-body">The BU Design System allows the user to be more knowledgeable on how to
                design and implement graphics along with its components.
              </dd>
            </section>

            <!-- Subheading 3.2 | Consistent -->
            <section id="head3_item2" class="pt-5">
              <dt class="text-body-emphasis"><i class="ti ti-check"></i> Consistent</dt>
              <dd class="ps-4 mt-2 text-body">Consistency is the key for a specific design system, it allows users
                to create something not out of context and would not create a distorted design.
              </dd>
            </section>

            <!-- Subheading 3.3 | Specific Design -->
            <section id="head3_item3" class="pt-5">
              <dt class="text-body-emphasis"><i class="ti ti-check"></i> Specific Design</dt>
              <dd class="ps-4 mt-2 text-body">It will come with its consistency, a specific design would show more brand
                name and can determine what it is in first look.
              </dd>
            </section>

            <!-- Subheading 3.4 | Complete -->
            <section id="head3_item4" class="pt-5">
              <dt class="text-body-emphasis"><i class="ti ti-check"></i> Complete</dt>
              <dd class="ps-4 mt-2">The BU design system comes with its UI inventory to help users with their certain
                design without sacrificing any resources that a design could be distorted
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
      $GLOBALS['head2'] = "Introduction";
      $GLOBALS['head3'] = "Advantages";
      $GLOBALS['head3_item1'] = "Proper Guide";
      $GLOBALS['head3_item2'] = "Consistent";
      $GLOBALS['head3_item3'] = "Specific Design";
      $GLOBALS['head3_item4'] = "Complete";

      include $path . 'widgets/overview.php'; ?>

    </div>

  </div>
  <?php include $path . 'widgets/footer.php'; ?>
  <?php include $path . 'widgets/modals.php'; ?>
  <?php include $path . 'components/footer.php'; ?>
</body>

</html>