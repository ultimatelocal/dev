</div>
<?php
$system_id = $this->session->userdata('system_id');
$userlevel = $this->session->userdata('userlvl');
?>
<!-- MAIN NAVIGATION -->
<!--===================================================-->

<nav id="mainnav-container" data-sm="mainnav-sm" data-all="mainnav-lg">
    <div id="mainnav">

        <!-- MAIN NAVIGATION : SHORTCUT -->
        <!--===================================================-->
        <!--        <div id="mainnav-shortcut">
                    <ul class="list-unstyled">-->
        <!-- Shortcut buttton-->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!--<li class="col-xs-4" data-content="Additional Sidebar">
        <a id="demo-toggle-aside" class="shortcut-grid" href="#" >
        <i class="fa fa-magic"></i>
        </a>
        </li>-->

        <!-- Shortcut buttton-->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!--<li class="col-xs-4" data-content="Notification">
        <a id="demo-alert" href="#" class="shortcut-grid">
        <i class="fa fa-bullhorn"></i>
        </a>
        </li>-->

        <!-- Shortcut buttton-->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!--						<li class="col-xs-4" data-content="Page Alerts">
                                                                <a id="demo-page-alert" href="#" class="shortcut-grid">
                                                                        <i class="fa fa-bell"></i>
                                                                </a>
                                                        </li>-->


        <!--            </ul>
                </div>-->
        <!--===================================================-->
        <!-- MAIN NAVIGATION : SHORTCUT -->

        <!-- MAIN NAVIGATION : MENU -->
        <!--===================================================-->
        <div id="mainnav-menu-wrap">
            <div class="nano">
                <div class="nano-content">
                    <ul id="mainnav-menu" class="list-group">

                        <!--Category name-->
                        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                        <li class="list-header">Navigation</li>



                        <!-- Menu list item -->
                        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                        <li>
                            <a href="<?php echo base_url() . "main/dashboard"; ?>">
                                <i class="fa fa-dashboard"></i>
                                <span class="menu-title"><strong>Dashboard</strong></span>
                            </a>
                        </li>


                        <!-- Menu list item-->
                        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                        <?php
                        if ($userlevel == 1) {
//1 = instructor 
//2 = student
//88 = admin
                            ?>
                            <li>
                                <a href="<?php echo base_url() . "subject/create_subject"; ?>">
                                    <i class="fa fa-plus-square"></i>

                                    <span class="menu-title">
                                        <strong>Create New Subject</strong> 
                                    </span>
                                </a>
                            </li>
                        <?php } ?>
                        <li>
                            <a href="#">
                                <i class="fa fa-book"></i>
                                <span class="menu-title">Subjects</span>
                                <i class="fa arrow"></i>
                            </a>

                            <!-- Menu sub -->
                            <ul class="collapse">

                                <?php
                                if (isset($subject)) {
                                    if ($subject != null) {
                                        foreach ($subject as $s) {
                                            echo '<li><a href="' . base_url() . "subject/index/" . $s['subjectid'] . '" data-subj_id="' . $s['subjectid'] . '">' . $s['subject_code'] . '</a></li>';
                                        }
                                    }
                                } else {
                                    echo "<li><a>No Enrolled Subject</a></li>";
                                }
                                ?>
                                <li class="list-divider"></li>
                                <li>
                                    <a href="#">Third Level<span class="fa plus-minus"></span></a>

                                    <!-- Menu sub -->
                                    <ul class="collapse">
                                        <li><a href="#">Third Level Item</a></li>
                                        <li><a href="#">Third Level Item</a></li>
                                        <li><a href="#">Third Level Item</a></li>
                                        <li><a href="#">Third Level Item</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--===================================================-->
        <!-- END OF MAIN NAVIGATION : MENU -->


    </div>
</nav>
<!--===================================================-->
<!-- END OF MAIN NAVIGATION -->