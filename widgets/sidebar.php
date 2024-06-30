<?php

// Current Path
$currentPage = $_SERVER['REQUEST_URI'];

// Paths
$getting_started = 'pages/getting_started/';
$content = 'pages/content/';

$components = 'pages/components/';
$components_UI_elements = 'pages/components/UI_elements/';
$components_extended_UI = 'pages/components/extended_UI/';
$components_forms = 'pages/components/forms/';

$about = 'pages/about/';

// Filename
$intro = basename($_SERVER["SCRIPT_FILENAME"], '.php');

// Active Setting
if (strpos(getcwd(), "UI_elements") !== false) {
  $UIelements_show = "show";
  $UIelements_active = "active";
} else {
  $UIelements_show = "";
  $UIelements_active = "";
}

if (strpos(getcwd(), "extended_UI") !== false) {
  $extendedUI_show = "show";
  $extendedUI_active = "active";
} else {
  $extendedUI_show = "";
  $extendedUI_active = "";
}

if (strpos(getcwd(), "forms") !== false) {
  $forms_show = "show";
  $forms_active = "active";
} else {
  $forms_show = "";
  $forms_active = "";
}

?>

<div class="col-1 pe-3 py-3 sidebar" style="width:100%; height: 90vh; overflow-y: auto;">

  <!-- Heading 1 | Getting Started -->
  <h5 class="mb-3 sidebar-head text-black d-flex align-items-center text-nowrap">
    <!-- Icon --> <i class="material-icons-round sidebar-head">grid_view</i>
    <!-- Spacer --> <span style="width: 4px;"></span>
    <!-- Title --> Getting Started
  </h5>

  <!-- Heading 1 | Items -->
  <div class="ps-4">
    <a class="d-block text-light-emphasis sidebar-item mb-2 h6 <?php echo $filename == 'introduction' ? 'active' : ''; ?>"
      href="<?php echo $path . $getting_started ?>introduction.php">
      Introduction
    </a>
    <a class="d-block text-light-emphasis sidebar-item mb-2 h6 <?php echo $filename == 'download' ? 'active' : ''; ?>"
      href="<?php echo $path . $getting_started ?>download.php">
      Download
    </a>
    <a class="d-block text-light-emphasis sidebar-item mb-2 h6 <?php echo $filename == 'faqs' ? 'active' : ''; ?>"
      href="<?php echo $path . $getting_started ?>faqs.php">FAQs</a>

    <a class="d-block text-light-emphasis sidebar-item mb-2 h6 <?php echo $filename == 'contribute' ? 'active' : ''; ?>"
      href="<?php echo $path . $getting_started ?>contribute.php">Contribute</a>
  </div>

  <!-- Heading 2 | Content  -->
  <h5 class="mt-4 mb-3 text-black sidebar-head d-flex align-items-center h5">
    <!-- Icon --> <i class="material-icons-round">layers</i>
    <!-- Spacer --> <span style="width: 4px;"></span>
    <!-- Title --> Content
  </h5>

  <!-- Heading 2 | Items -->
  <div class="ps-4">
    <a class="d-block text-light-emphasis sidebar-item mb-2 h6 <?php echo $filename == 'brand' ? 'active' : ''; ?>"
      href="<?php echo $path . $content ?>brand.php">Brand</a>

    <a class="d-block text-light-emphasis sidebar-item mb-2 h6 <?php echo $filename == 'color' ? 'active' : ''; ?>"
      href="<?php echo $path . $content ?>color.php">Color</a>

    <a class="d-block text-light-emphasis sidebar-item mb-2 h6 <?php echo $filename == 'icons' ? 'active' : ''; ?>"
      href="<?php echo $path . $content ?>icons.php">Icons</a>

    <a class="d-block text-light-emphasis sidebar-item mb-2 h6 <?php echo $filename == 'images' ? 'active' : ''; ?>"
      href="<?php echo $path . $content ?>images.php">Images</a>

    <a class="d-block text-light-emphasis sidebar-item mb-2 h6 <?php echo $filename == 'links' ? 'active' : ''; ?>"
      href="<?php echo $path . $content ?>links.php">Links</a>

    <a class="d-block text-light-emphasis sidebar-item mb-2 h6 <?php echo $filename == 'typography' ? 'active' : ''; ?>"
      href="<?php echo $path . $content ?>typography.php">Typography</a>

  </div>

  <!-- Heading 3 | Components -->
  <h5 class="mt-4 mb-3 text-black sidebar-head d-flex align-items-center">
    <!-- Icon --> <i class="material-icons-round" style="transform: rotate(45deg);">grid_view</i>
    <!-- Spacer --> <span style="width: 4px;"></span>
    <!-- Title --> Components
  </h5>

  <!-- Heading 3 | Items -->

  <!-- 3.1 | UI Elements -->
  <div class="ps-4">

    <!-- 3.1 | UI Elements -->
    <a class="d-block text-light-emphasis sidebar-item-collapse <?php echo $UIelements_active ?> collapse mb-2 h6 d-flex align-items-center"
      data-bs-toggle="collapse" href="#UIelementsCollapse" onclick="toggleSidebarItem(this)">
      <!-- Title --> UI Elements
      <!-- Icon --> <i class="material-icons ms-auto sidebar-icon <?php echo $UIelements_active ?>">
        keyboard_arrow_right</i>
    </a>

    <!-- 3.1 | Sub-items -->
    <div class="ps-3 collapse <?php echo $UIelements_show ?>" id="UIelementsCollapse">
      <a class="d-block text-light-emphasis sidebar-item mb-2 h6 <?php echo $filename == 'accordion' ? 'active' : ''; ?>"
        href="<?php echo $path . $components_UI_elements ?>accordion.php">Accordion</a>

      <a class="d-block text-light-emphasis sidebar-item mb-2 h6 <?php echo $filename == 'alerts' ? 'active' : ''; ?>"
        href="<?php echo $path . $components_UI_elements ?>alerts.php">Alerts</a>

      <a class="d-block text-light-emphasis sidebar-item mb-2 h6 <?php echo $filename == 'badges' ? 'active' : ''; ?>"
        href="<?php echo $path . $components_UI_elements ?>badges.php">Badges</a>

      <a class="d-block text-light-emphasis sidebar-item mb-2 h6 <?php echo $filename == 'buttons' ? 'active' : ''; ?>"
        href="<?php echo $path . $components_UI_elements ?>buttons.php">Buttons</a>

      <a class="d-block text-light-emphasis sidebar-item mb-2 h6 <?php echo $filename == 'cards' ? 'active' : ''; ?>"
        href="<?php echo $path . $components_UI_elements ?>cards.php">Cards</a>

      <a class="d-block text-light-emphasis sidebar-item mb-2 h6 <?php echo $filename == 'carousel' ? 'active' : ''; ?>"
        href="<?php echo $path . $components_UI_elements ?>carousel.php">Carousel</a>

      <a class="d-block text-light-emphasis sidebar-item mb-2 h6 <?php echo $filename == 'collapse' ? 'active' : ''; ?>"
        href="<?php echo $path . $components_UI_elements ?>collapse.php">Collapse</a>

      <a class="d-block text-light-emphasis sidebar-item mb-2 h6 <?php echo $filename == 'dropdown' ? 'active' : ''; ?>"
        href="<?php echo $path . $components_UI_elements ?>dropdown.php">Dropdown</a>

      <a class="d-block text-light-emphasis sidebar-item mb-2 h6 <?php echo $filename == 'footer' ? 'active' : ''; ?>"
        href="<?php echo $path . $components_UI_elements ?>footer.php">Footer</a>

      <a class="d-block text-light-emphasis sidebar-item mb-2 h6 <?php echo $filename == 'list_groups' ? 'active' : ''; ?>"
        href="<?php echo $path . $components_UI_elements ?>list_groups.php">List Groups</a>

      <a class="d-block text-light-emphasis sidebar-item mb-2 h6 <?php echo $filename == 'modal' ? 'active' : ''; ?>"
        href="<?php echo $path . $components_UI_elements ?>modal.php">Modal</a>

      <a class="d-block text-light-emphasis sidebar-item mb-2 h6 <?php echo $filename == 'menu' ? 'active' : ''; ?>"
        href="<?php echo $path . $components_UI_elements ?>menu.php">Menu</a>

      <a class="d-block text-light-emphasis sidebar-item mb-2 h6 <?php echo $filename == 'navbar' ? 'active' : ''; ?>"
        href="<?php echo $path . $components_UI_elements ?>navbar.php">Navbar</a>

      <a class="d-block text-light-emphasis sidebar-item mb-2 h6 <?php echo $filename == 'offcanvas' ? 'active' : ''; ?>"
        href="<?php echo $path . $components_UI_elements ?>offcanvas.php">Offcanvas</a>

      <a class="d-block text-light-emphasis sidebar-item mb-2 h6 <?php echo $filename == 'pagination' ? 'active' : ''; ?>"
        href="<?php echo $path . $components_UI_elements ?>pagination.php">Pagination</a>

      <a class="d-block text-light-emphasis sidebar-item mb-2 h6 <?php echo $filename == 'breadcrumbs' ? 'active' : ''; ?>"
        href="<?php echo $path . $components_UI_elements ?>breadcrumbs.php">Breadcrumbs</a>

      <a class="d-block text-light-emphasis sidebar-item mb-2 h6 <?php echo $filename == 'popovers' ? 'active' : ''; ?>"
        href="<?php echo $path . $components_UI_elements ?>popovers.php">Popovers</a>

      <a class="d-block text-light-emphasis sidebar-item mb-2 h6 <?php echo $filename == 'progress' ? 'active' : ''; ?>"
        href="<?php echo $path . $components_UI_elements ?>progress.php">Progress</a>

      <a class="d-block text-light-emphasis sidebar-item mb-2 h6 <?php echo $filename == 'spinner' ? 'active' : ''; ?>"
        href="<?php echo $path . $components_UI_elements ?>spinner.php">Spinner</a>

      <a class="d-block text-light-emphasis sidebar-item mb-2 h6 <?php echo $filename == 'navigation' ? 'active' : ''; ?>"
        href="<?php echo $path . $components_UI_elements ?>navigation.php">Navigation</a>

      <a class="d-block text-light-emphasis sidebar-item mb-2 h6 <?php echo $filename == 'tabs&pills' ? 'active' : ''; ?>"
        href="<?php echo $path . $components_UI_elements ?>tabs&pills.php">Tabs & Pills</a>

      <a class="d-block text-light-emphasis sidebar-item mb-2 h6 <?php echo $filename == 'toast' ? 'active' : ''; ?>"
        href="<?php echo $path . $components_UI_elements ?>toast.php">Toast</a>

      <a class="d-block text-light-emphasis sidebar-item mb-2 h6 <?php echo $filename == 'tooltip' ? 'active' : ''; ?>"
        href="<?php echo $path . $components_UI_elements ?>tooltip.php">Tooltip</a>

    </div>

    <!-- 3.2 | Extended UI -->
    <a class="d-block text-light-emphasis sidebar-item-collapse <?php echo $extendedUI_active ?> collapse mb-2 h6 d-flex align-items-center"
      data-bs-toggle="collapse" href="#extendedUICollapse" onclick="toggleSidebarItem(this)">
      <!-- Title --> Extended UI
      <!-- Icon --> <i class="material-icons ms-auto text-light-emphasis sidebar-icon <?php echo $extendedUI_active ?>">
        keyboard_arrow_right</i>
    </a>

    <!-- 3.2 | Sub-items -->
    <div class="ps-3 collapse <?php echo $extendedUI_show ?>" id="extendedUICollapse">
      <a class="d-block text-light-emphasis sidebar-item mb-2 h6 <?php echo $filename == 'avatar' ? 'active' : ''; ?>"
        href="<?php echo $path . $components_extended_UI ?>avatar.php">Avatar</a>

      <a class="d-block text-light-emphasis sidebar-item mb-2 h6 <?php echo $filename == 'blockui' ? 'active' : ''; ?>"
        href="<?php echo $path . $components_extended_UI ?>blockUI.php">BlockUI</a>

      <a class="d-block text-light-emphasis sidebar-item mb-2 h6 <?php echo $filename == 'drag&drop' ? 'active' : ''; ?>"
        href="<?php echo $path . $components_extended_UI ?>drag&drop.php">Drag & Drop</a>

      <a class="d-block text-light-emphasis sidebar-item mb-2 h6 <?php echo $filename == 'media_player' ? 'active' : ''; ?>"
        href="<?php echo $path . $components_extended_UI ?>media_player.php">Media Player</a>

      <a class="d-block text-light-emphasis sidebar-item mb-2 h6 <?php echo $filename == 'perfect_scrollbar' ? 'active' : ''; ?>"
        href="<?php echo $path . $components_extended_UI ?>perfect_scrollbar.php">Perfect Scrollbar</a>

      <a class="d-block text-light-emphasis sidebar-item mb-2 h6 <?php echo $filename == 'star_ratings' ? 'active' : ''; ?>"
        href="<?php echo $path . $components_extended_UI ?>star_ratings.php">Star Ratings</a>

      <a class="d-block text-light-emphasis sidebar-item mb-2 h6 <?php echo $filename == 'sweetalert2' ? 'active' : ''; ?>"
        href="<?php echo $path . $components_extended_UI ?>sweetAlert2.php">SweetAlert2</a>

      <a class="d-block text-light-emphasis sidebar-item mb-2 h6 <?php echo $filename == 'text_divider' ? 'active' : ''; ?>"
        href="<?php echo $path . $components_extended_UI ?>text_divider.php">Text Divider</a>

      <a class="d-block text-light-emphasis sidebar-item mb-2 h6 <?php echo $filename == 'timeline' ? 'active' : ''; ?>"
        href="<?php echo $path . $components_extended_UI ?>timeline.php">Timeline</a>

      <a class="d-block text-light-emphasis sidebar-item mb-2 h6 <?php echo $filename == 'tour' ? 'active' : ''; ?>"
        href="<?php echo $path . $components_extended_UI ?>tour.php">Tour</a>

      <a class="d-block text-light-emphasis sidebar-item mb-2 h6 <?php echo $filename == 'treeview' ? 'active' : ''; ?>"
        href="<?php echo $path . $components_extended_UI ?>treeview.php">Treeview</a>

      <a class="d-block text-light-emphasis sidebar-item mb-2 h6 <?php echo $filename == 'miscellaneous' ? 'active' : ''; ?>"
        href="<?php echo $path . $components_extended_UI ?>miscellaneous.php">Miscellaneous</a>

    </div>

    <!-- 3.3 | Forms -->
    <a class="d-block text-light-emphasis sidebar-item-collapse <?php echo $forms_active ?> collapse mb-2 h6 d-flex align-items-center"
      data-bs-toggle="collapse" href="#formsCollapse" onclick="toggleSidebarItem(this)">
      <!-- Title --> Forms
      <!-- Icon --> <i class="material-icons ms-auto sidebar-icon <?php echo $forms_active ?>">
        keyboard_arrow_right</i>
    </a>

    <!-- 3.3 | Sub-items -->
    <div class="ps-3 collapse <?php echo $forms_show ?>" id="formsCollapse">
      <a class="d-block text-light-emphasis sidebar-item mb-2 h6 <?php echo $filename == 'input' ? 'active' : ''; ?>"
        href="<?php echo $path . $components_forms ?>input.php">Input</a>

      <a class="d-block text-light-emphasis sidebar-item mb-2 h6 <?php echo $filename == 'input_groups' ? 'active' : ''; ?>"
        href="<?php echo $path . $components_forms ?>input_groups.php">Input Groups</a>

      <a class="d-block text-light-emphasis sidebar-item mb-2 h6 <?php echo $filename == 'custom_options' ? 'active' : ''; ?>"
        href="<?php echo $path . $components_forms ?>custom_options.php">Custom Options</a>

      <a class="d-block text-light-emphasis sidebar-item mb-2 h6 <?php echo $filename == 'editors' ? 'active' : ''; ?>"
        href="<?php echo $path . $components_forms ?>editors.php">Editors</a>

      <a class="d-block text-light-emphasis sidebar-item mb-2 h6 <?php echo $filename == 'file_upload' ? 'active' : ''; ?>"
        href="<?php echo $path . $components_forms ?>file_upload.php">File Upload</a>

      <a class="d-block text-light-emphasis sidebar-item mb-2 h6 <?php echo $filename == 'pickers' ? 'active' : ''; ?>"
        href="<?php echo $path . $components_forms ?>pickers.php">Pickers</a>

      <a class="d-block text-light-emphasis sidebar-item mb-2 h6 <?php echo $filename == 'select' ? 'active' : ''; ?>"
        href="<?php echo $path . $components_forms ?>select.php">Select</a>

      <a class="d-block text-light-emphasis sidebar-item mb-2 h6 <?php echo $filename == 'tags' ? 'active' : ''; ?>"
        href="<?php echo $path . $components_forms ?>tags.php">Tags</a>

      <a class="d-block text-light-emphasis sidebar-item mb-2 h6 <?php echo $filename == 'sliders' ? 'active' : ''; ?>"
        href="<?php echo $path . $components_forms ?>sliders.php">Sliders</a>

      <a class="d-block text-light-emphasis sidebar-item mb-2 h6 <?php echo $filename == 'switches' ? 'active' : ''; ?>"
        href="<?php echo $path . $components_forms ?>switches.php">Switches</a>

      <a class="d-block text-light-emphasis sidebar-item mb-2 h6 <?php echo $filename == 'extras' ? 'active' : ''; ?>"
        href="<?php echo $path . $components_forms ?>extras.php">Extras</a>

      <a class="d-block text-light-emphasis sidebar-item mb-2 h6 <?php echo $filename == 'validation' ? 'active' : ''; ?>"
        href="<?php echo $path . $components_forms ?>validation.php">Validation</a>

      <a class="d-block text-light-emphasis sidebar-item mb-2 h6 <?php echo $filename == 'wizard' ? 'active' : ''; ?>"
        href="<?php echo $path . $components_forms ?>wizard.php">Wizard</a>

      <a class="d-block text-light-emphasis sidebar-item mb-2 h6 <?php echo $filename == 'sticky_actions' ? 'active' : ''; ?>"
        href="<?php echo $path . $components_forms ?>sticky_actions.php">Sticky Actions</a>

    </div>

    <a class="d-block text-light-emphasis sidebar-item mb-2 h6"
      href="<?php echo $path . $components ?>tables.php">Tables</a>

    <a class="d-block text-light-emphasis sidebar-item mb-2 h6"
      href="<?php echo $path . $components ?>data_tables.php">Data Tables</a>

    <a class="d-block text-light-emphasis sidebar-item mb-2 h6"
      href="<?php echo $path . $components ?>utilities.php">Utilities</a>

  </div>

  <!-- Heading 4 | About -->
  <h5 class="mt-4 mb-3 text-black sidebar-head d-flex align-items-center">
    <!-- Icon --> <i class="material-icons sidebar-head">help</i>
    <!-- Spacer --> <span style="width: 4px;"></span>
    <!-- Title --> About
  </h5>

  <!-- Heading 4 | Items -->
  <div class="ps-4">
    <a class="d-block text-light-emphasis sidebar-item mb-2 h6 <?php echo $filename == 'overview' ? 'active' : ''; ?>"
      href="<?php echo $path . $about ?>overview.php">Overview</a>

    <a class="d-block text-light-emphasis sidebar-item mb-2 h6 <?php echo $filename == 'team' ? 'active' : ''; ?>"
      href="<?php echo $path . $about ?>team.php">Team</a>

    <a class="d-block text-light-emphasis sidebar-item mb-2 h6 <?php echo $filename == 'license' ? 'active' : ''; ?>"
      href="<?php echo $path . $about ?>license.php">License</a>
  </div>

</div>