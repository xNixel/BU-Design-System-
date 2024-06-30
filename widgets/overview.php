<div id="sticky" class="col-2 pt-3 d-none d-sm-block">
    <!-- Title -->
    <h6 class="overview-title text-dark"> On this page</h6>
    <hr style="margin-left: 12px">

    <!-- Contents -->
    <div class="small">

        <!-- Heading 1 -->
        <?php if (isset($GLOBALS['head1'])) {
            echo '<a class="d-block overview-head text-light-emphasis d-flex align-items-center" href="#head1">' . $GLOBALS['head1'] . '</a>';
        }
        ?>

        <!-- Heading 1 | Items-->
        <div class="ps-3">
            <?php if (isset($GLOBALS['head1_item1'])) {
                echo '<a class="d-block overview-item text-light-emphasis" href="#head1_item1">' . $GLOBALS['head1_item1'] . '</a>';
            } ?>

            <?php if (isset($GLOBALS['head1_item2'])) {
                echo '<a class="d-block overview-item text-light-emphasis" href="#head1_item2">' . $GLOBALS['head1_item2'] . '</a>';
            } ?>

            <?php if (isset($GLOBALS['head1_item3'])) {
                echo '<a class="d-block overview-item text-light-emphasis" href="#head1_item3">' . $GLOBALS['head1_item3'] . '</a>';
            } ?>

            <?php if (isset($GLOBALS['head1_item4'])) {
                echo '<a class="d-block overview-item text-light-emphasis" href="#head1_item4">' . $GLOBALS['head1_item4'] . '</a>';
            } ?>

            <?php if (isset($GLOBALS['head1_item5'])) {
                echo '<a class="d-block overview-item text-light-emphasis" href="#head1_item5">' . $GLOBALS['head1_item5'] . '</a>';
            } ?>
        </div>

        <!-- Heading 2 -->
        <?php if (isset($GLOBALS['head2'])) {
            echo '<a class="d-block overview-head text-light-emphasis d-flex align-items-center" href="#head2">' . $GLOBALS['head2'] . '</a>';
        } ?>

        <!-- Heading 2 | Items-->
        <div class="ps-3">
            <?php if (isset($GLOBALS['head2_item1'])) {
                echo '<a class="d-block overview-item text-light-emphasis" href="#head2_item1">' . $GLOBALS['head2_item1'] . '</a>';
            } ?>

            <?php if (isset($GLOBALS['head2_item2'])) {
                echo '<a class="d-block overview-item text-light-emphasis" href="#head2_item2">' . $GLOBALS['head2_item2'] . '</a>';
            } ?>

            <?php if (isset($GLOBALS['head2_item3'])) {
                echo '<a class="d-block overview-item text-light-emphasis" href="#head2_item3">' . $GLOBALS['head2_item3'] . '</a>';
            } ?>

            <?php if (isset($GLOBALS['head2_item4'])) {
                echo '<a class="d-block overview-item text-light-emphasis" href="#head2_item4">' . $GLOBALS['head2_item4'] . '</a>';
            } ?>

            <?php if (isset($GLOBALS['head2_item5'])) {
                echo '<a class="d-block overview-item text-light-emphasis" href="#head2_item5">' . $GLOBALS['head2_item5'] . '</a>';
            } ?>
        </div>

        <!-- Heading 3 -->
        <?php if (isset($GLOBALS['head3'])) {
            echo '<a class="d-block overview-head text-light-emphasis d-flex align-items-center " href="#head3">' . $GLOBALS['head3'] . '</a>';
        } ?>

        <!-- Heading 3 | Items-->
        <div class="ps-3">
            <?php if (isset($GLOBALS['head3_item1'])) {
                echo '<a class="d-block overview-item text-light-emphasis" href="#head3_item1">' . str_replace("_", ' ', $GLOBALS['head3_item1']) . '</a>';
            } ?>

            <?php if (isset($GLOBALS['head3_item2'])) {
                echo '<a class="d-block overview-item text-light-emphasis" href="#head3_item2">' . $GLOBALS['head3_item2'] . '</a>';
            } ?>

            <?php if (isset($GLOBALS['head3_item3'])) {
                echo '<a class="d-block overview-item text-light-emphasis" href="#head3_item3">' . $GLOBALS['head3_item3'] . '</a>';
            } ?>

            <?php if (isset($GLOBALS['head3_item4'])) {
                echo '<a class="d-block overview-item text-light-emphasis" href="#head3_item4">' . $GLOBALS['head3_item4'] . '</a>';
            } ?>

            <?php if (isset($GLOBALS['head3_item5'])) {
                echo '<a class="d-block overview-item text-light-emphasis" href="#head3_item5">' . $GLOBALS['head3_item5'] . '</a>';
            } ?>
        </div>

        <!-- Heading 4 -->
        <?php if (isset($GLOBALS['head4'])) {
            echo '<a class="d-block overview-head text-light-emphasis d-flex align-items-center" href="#head4">' . $GLOBALS['head4'] . '</a>';
        } ?>

        <!-- Heading 4 | Items-->
        <div class="ps-3">
            <?php if (isset($GLOBALS['head4_item1'])) {
                echo '<a class="d-block overview-item text-light-emphasis" href="#head4_item1">' . $GLOBALS['head4_item1'] . '</a>';
            } ?>

            <?php if (isset($GLOBALS['head4_item2'])) {
                echo '<a class="d-block overview-item text-light-emphasis" href="#head4_item2">' . $GLOBALS['head4_item2'] . '</a>';
            } ?>

            <?php if (isset($GLOBALS['head4_item3'])) {
                echo '<a class="d-block overview-item text-light-emphasis" href="#head4_item3">' . $GLOBALS['head4_item3'] . '</a>';
            } ?>

            <?php if (isset($GLOBALS['head4_item4'])) {
                echo '<a class="d-block overview-item text-light-emphasis" href="head4_item4">' . $GLOBALS['head4_item4'] . '</a>';
            } ?>

            <?php if (isset($GLOBALS['head4_item5'])) {
                echo '<a class="d-block overview-item text-light-emphasis" href="#head4_item5">' . $GLOBALS['head4_item5'] . '</a>';
            } ?>
        </div>

        <!-- Heading 5 -->
        <?php if (isset($GLOBALS['head5'])) {
            echo '<a class="d-block overview-head text-light-emphasis d-flex align-items-center" href="#head5">' . $GLOBALS['head5'] . '</a>';
        } ?>

        <!-- Heading 5 | Items-->
        <div class="ps-3">
            <?php if (isset($GLOBALS['head5_item1'])) {
                echo '<a class="d-block overview-item text-light-emphasis" href="#head5_item1">' . $GLOBALS['head5_item1'] . '</a>';
            } ?>

            <?php if (isset($GLOBALS['head5_item2'])) {
                echo '<a class="d-block overview-item text-light-emphasis" href="#head5_item2">' . $GLOBALS['head5_item2'] . '</a>';
            } ?>

            <?php if (isset($GLOBALS['head5_item3'])) {
                echo '<a class="d-block overview-item text-light-emphasis" href="#head5_item3">' . $GLOBALS['head5_item3'] . '</a>';
            } ?>

            <?php if (isset($GLOBALS['head5_item4'])) {
                echo '<a class="d-block overview-item text-light-emphasis" href="#head5_item4">' . $GLOBALS['head5_item4'] . '</a>';
            } ?>

            <?php if (isset($GLOBALS['head5_item5'])) {
                echo '<a class="d-block overview-item text-light-emphasis" href="#head5_item5">' . $GLOBALS['head5_item5'] . '</a>';
            } ?>
        </div>

        <!-- Heading 6 -->
        <?php if (isset($GLOBALS['head6'])) {
            echo '<a class="d-block overview-head text-light-emphasis d-flex align-items-center" href="#head6">' . $GLOBALS['head6'] . '</a>';
        } ?>

        <!-- Heading 6 | Items-->
        <div class="ps-3">
            <?php if (isset($GLOBALS['head6_item1'])) {
                echo '<a class="d-block overview-item text-light-emphasis" href="#head6_item1">' . $GLOBALS['head6_item1'] . '</a>';
            } ?>

            <?php if (isset($GLOBALS['head6_item2'])) {
                echo '<a class="d-block overview-item text-light-emphasis" href="#head6_item2">' . $GLOBALS['head6_item2'] . '</a>';
            } ?>

            <?php if (isset($GLOBALS['head6_item3'])) {
                echo '<a class="d-block overview-item text-light-emphasis" href="#head6_item3">' . $GLOBALS['head6_item3'] . '</a>';
            } ?>

            <?php if (isset($GLOBALS['head6_item4'])) {
                echo '<a class="d-block overview-item text-light-emphasis" href="#head6_item4">' . $GLOBALS['head6_item4'] . '</a>';
            } ?>

            <?php if (isset($GLOBALS['head6_item5'])) {
                echo '<a class="d-block overview-item text-light-emphasis" href="#head6_item5">' . $GLOBALS['head6_item5'] . '</a>';
            } ?>
        </div>

        <!-- Heading 7 -->
        <?php if (isset($GLOBALS['head7'])) {
            echo '<a class="d-block overview-head text-light-emphasis d-flex align-items-center" href="#head7">' . $GLOBALS['head7'] . '</a>';
        } ?>

        <!-- Heading 7 | Items-->
        <div class="ps-3">
            <?php if (isset($GLOBALS['head7_item1'])) {
                echo '<a class="d-block overview-item text-light-emphasis" href="#head7_item1">' . $GLOBALS['head7_item1'] . '</a>';
            } ?>

            <?php if (isset($GLOBALS['head7_item2'])) {
                echo '<a class="d-block overview-item text-light-emphasis" href="#head7_item2">' . $GLOBALS['head7_item2'] . '</a>';
            } ?>

            <?php if (isset($GLOBALS['head7_item3'])) {
                echo '<a class="d-block overview-item text-light-emphasis" href="#head7_item3">' . $GLOBALS['head7_item3'] . '</a>';
            } ?>

            <?php if (isset($GLOBALS['head7_item4'])) {
                echo '<a class="d-block overview-item text-light-emphasis" href="#head7_item4">' . $GLOBALS['head7_item4'] . '</a>';
            } ?>

            <?php if (isset($GLOBALS['head7_item5'])) {
                echo '<a class="d-block overview-item text-light-emphasis" href="#head7_item5">' . $GLOBALS['head7_item5'] . '</a>';
            } ?>
        </div>

        <!-- Heading 8 -->
        <?php if (isset($GLOBALS['head8'])) {
            echo '<a class="d-block overview-head text-light-emphasis d-flex align-items-center" href="#head8">' . $GLOBALS['head8'] . '</a>';
        } ?>

        <!-- Heading 8 | Items-->
        <div class="ps-3">
            <?php if (isset($GLOBALS['head8_item1'])) {
                echo '<a class="d-block overview-item text-light-emphasis" href="#head8_item1">' . $GLOBALS['head8_item1'] . '</a>';
            } ?>

            <?php if (isset($GLOBALS['head8_item2'])) {
                echo '<a class="d-block overview-item text-light-emphasis" href="#head8_item2">' . $GLOBALS['head8_item2'] . '</a>';
            } ?>

            <?php if (isset($GLOBALS['head8_item3'])) {
                echo '<a class="d-block overview-item text-light-emphasis" href="#head8_item3">' . $GLOBALS['head8_item3'] . '</a>';
            } ?>

            <?php if (isset($GLOBALS['head8_item4'])) {
                echo '<a class="d-block overview-item text-light-emphasis" href="#head8_item4">' . $GLOBALS['head8_item4'] . '</a>';
            } ?>

            <?php if (isset($GLOBALS['head8_item5'])) {
                echo '<a class="d-block overview-item text-light-emphasis" href="#head8_item5">' . $GLOBALS['head8_item5'] . '</a>';
            } ?>
        </div>

        <!-- Heading 9 -->
        <?php if (isset($GLOBALS['head9'])) {
            echo '<a class="d-block overview-head text-light-emphasis d-flex align-items-center" href="#head9">' . $GLOBALS['head9'] . '</a>';
        } ?>

        <!-- Heading 9 | Items-->
        <div class="ps-3">
            <?php if (isset($GLOBALS['head9_item1'])) {
                echo '<a class="d-block overview-item text-light-emphasis" href="#head9_item1">' . $GLOBALS['head9_item1'] . '</a>';
            } ?>

            <?php if (isset($GLOBALS['head9_item2'])) {
                echo '<a class="d-block overview-item text-light-emphasis" href="#head9_item2">' . $GLOBALS['head9_item2'] . '</a>';
            } ?>

            <?php if (isset($GLOBALS['head9_item3'])) {
                echo '<a class="d-block overview-item text-light-emphasis" href="#head9_item3">' . $GLOBALS['head9_item3'] . '</a>';
            } ?>

            <?php if (isset($GLOBALS['head9_item4'])) {
                echo '<a class="d-block overview-item text-light-emphasis" href="#head9_item4">' . $GLOBALS['head9_item4'] . '</a>';
            } ?>

            <?php if (isset($GLOBALS['head9_item5'])) {
                echo '<a class="d-block overview-item text-light-emphasis" href="#head9_item5">' . $GLOBALS['head9_item5'] . '</a>';
            } ?>
        </div>

        <!-- Heading 10 -->
        <?php if (isset($GLOBALS['head10'])) {
            echo '<a class="d-block overview-head text-light-emphasis d-flex align-items-center" href="#head10">' . $GLOBALS['head10'] . '</a>';
        } ?>

        <!-- Heading 10 | Items-->
        <div class="ps-3">
            <?php if (isset($GLOBALS['head10_item1'])) {
                echo '<a class="d-block overview-item text-light-emphasis" href="#head10_item1">' . $GLOBALS['head10_item1'] . '</a>';
            } ?>

            <?php if (isset($GLOBALS['head10_item2'])) {
                echo '<a class="d-block overview-item text-light-emphasis" href="#head10_item2">' . $GLOBALS['head10_item2'] . '</a>';
            } ?>

            <?php if (isset($GLOBALS['head10_item3'])) {
                echo '<a class="d-block overview-item text-light-emphasis" href="#head10_item3">' . $GLOBALS['head10_item3'] . '</a>';
            } ?>

            <?php if (isset($GLOBALS['head10_item4'])) {
                echo '<a class="d-block overview-item text-light-emphasis" href="#head10_item4">' . $GLOBALS['head10_item4'] . '</a>';
            } ?>

            <?php if (isset($GLOBALS['head10_item5'])) {
                echo '<a class="d-block overview-item text-light-emphasis" href="#head10_item5">' . $GLOBALS['head10_item5'] . '</a>';
            } ?>
        </div>

    </div>

</div>