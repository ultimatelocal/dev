<?php $subj_id = $this->uri->segment(3); ?>
<div id="page-content">
    <div class="panel panel-dark"><!--
     Panel heading
     ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        --><div class="panel-heading lecture-panel-heading">
            <div class="panel-control">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#overview-tabs-box-1" data-toggle="tab">Overview</a>
                    </li>
                    <li><a href="#post-tabs-box-2" data-toggle="tab">Post</a>
                    </li>
                    <li><a href="#lecture-tabs-box-3" data-toggle="tab">Lectures and Videos</a></li>
                    <li><a href="#quiz-tabs-box-4" data-toggle="tab">Quiz</a></li>
                </ul>
            </div>
            <h3 class="panel-title"><?php // echo $subject_content;      ?></h3>
        </div><!--

         Panel body
         ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        --><div class="panel-body">
            <div class="tab-content">
                <div class="tab-pane fade in active" id="overview-tabs-box-1">
                    <h4 class="text-thin">
                        Subject Overview: 
                        <?php
                        //session data for all subject content
                        $array = $this->session->userdata('content');
                        $content = $array['content']['0'];
                        echo $content['subject_name'];
                        ?>
                        <br><br>Student List</h4>
                    <!--     MEMBER TABLE
                        ===================================================-->

                    <div class="panel">
                        <!--                        <div class="panel-heading">
                                                    <div class="panel-control">
                                                        <a class="fa fa-question-circle fa-lg fa-fw unselectable add-tooltip" href="#" data-original-title="<h4 class='text-thin'>Information</h4><p style='width:150px'>This is an information bubble to help the user.</p>" data-html="true" title=""></a>
                                                    </div>
                                                    <h3 class="panel-title">Students</h3>
                                                </div>-->

                        <div class="panel-body">
                            <div class="bootstrap-table">
                                <div class="fixed-table-container" style="padding-bottom: 0px;">
                                    <div class="fixed-table-header" style="display: block;">
                                        <table>

                                        </table>
                                    </div>
                                    <div class="fixed-table-body">
                                        <div class="fixed-table-loading" style="top: 37px; display: none;">Loading, please wait…</div>
                                        <?php if ($array['student_list'] != 'no student') { ?>
                                            <table data-select-item-name="toolbar1" data-search="true" data-show-columns="true" data-show-toggle="true" data-show-refresh="true" data-url="data1.json" data-pagination="true" data-sort-order="desc" data-sort-name="id" data-toolbar="#demo-custom-toolbar" class="table-striped table table-hover" id="subject_students-table" style="margin-top: 0px;">
                                                <thead style="display: table-header-group;">
                                                    <tr>
                                                        <th data-field="id" data-align="center" data-sortable="true" data-formatter="systemIdFormatter">System ID</th>
                                                        <th data-field="firstname" data-sortable="true" data-formatter="firstNameFormatter">First Name</th>
                                                        <th data-filed="lastname" data-sortable="true" data-formatter="lastNameFormatter">Last Name</th>
                                                        <th data-filed="section" data-align="center" data-sortable="true" data-sorter="sectionSorter">Section</th>
                                                        <th data-filed="grade" data-align="center" data-sortable="true" data-formatter="gradeFormatter">Grade</th>
                                                        <th data-filed="remarks" data-align="center" data-sortable="true" data-formatter="remarksFormatter">Remarks</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <?php
//                                                                                print_r($array['student_list']);
                                                    foreach ($array['student_list'] as $student) {
                                                        $firstname = $student['info']['0']['firstname'];
                                                        $lastname = $student['info']['0']['lastname'];
                                                        $section = $student['info']['1'];
                                                        if ($grade = $student['grade']['0']['student_grade'] != null) {
                                                            $grade = $student['grade']['0']['student_grade'];
                                                            if ($grade > 74) {
                                                                $remarks = '<div style="display:inline-block; width:80%; font-size:1em; max-width:100px; padding:5px" class="label label-success text-lg"> Passed</div>';
                                                            } elseif ($grade < 75) {
                                                                $remarks = '<div style="display:inline-block; width:80%; font-size:1em; max-width:100px; padding:5px" class="label label-danger text-lg"> Failed</div>';
                                                            }
                                                        } else {
                                                            $grade = 'N/A';
                                                            $remarks = '<div style="display:inline-block; width:80%; font-size:1em; max-width:100px; padding:5px" class="label label-warning text-lg"> N/A</div>';
                                                        }

                                                        //                                                    print_r($student);
                                                        echo '<tr data-index="0"><td style="text-align: center; "><a class="btn-link text-dark text-thin" href="#">' . $student['info']['0']['accountid'] . '</a></td>'
                                                        . '<td style=""><a class="btn-link" href="#">' . $firstname . '</a></td>'
                                                        . '<td style=""><a class="btn-link" href="#">' . $lastname . '</a></td>'
                                                        . '<td style="text-align: center; ">' . $section . '</td>'
                                                        . '<td style="text-align: center; ">' . $grade . '</td>'
                                                        . '<td style="text-align: center; ">' . $remarks . '</td>';
                                                        echo "</tr>";
                                                    }
                                                    ?>

                                                </tbody>
                                            </table>
                                            <?php
                                        } //end of if
                                        else {
                                            echo 'No student enrolled';
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <!--    ===================================================
                         END OF MEMBER TABLE -->

                </div>

                <!--tab for wall post-->
                <div class="tab-pane fade" id="post-tabs-box-2">
                    <h4 class="text-thin">Wall Post</h4>
                    <div class="col-lg-12"><!--
                        <!-- Update Status Form -->
                        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                        <div class="panel">
                            <div class="panel-body">
                                <textarea class="form-control" rows="2" placeholder="What are you thinking?"></textarea>
                                <div class="mar-top clearfix">
                                    <button class="btn btn-sm btn-primary pull-right" type="submit"><i class="fa fa-pencil fa-fw"></i> Share</button>
                                    <a class="btn btn-trans btn-icon fa fa-video-camera add-tooltip" href="#" data-original-title="Add Video" data-toggle="tooltip"></a>
                                    <a class="btn btn-trans btn-icon fa fa-camera add-tooltip" href="#" data-original-title="Add Photo" data-toggle="tooltip"></a>
                                    <a class="btn btn-trans btn-icon fa fa-file add-tooltip" href="#" data-original-title="Add File" data-toggle="tooltip"></a>
                                </div>
                            </div>
                        </div>
                        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                        <!-- Update Status Form -->




                        <div class="panel">
                            <div class="panel-body">

                                <!-- Newsfeed Content -->
                                <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                                <div class="media-block">

                                    <a class="media-left" href="#"><img class="img-circle img-sm" alt="Profile Picture" src="images/av4.png"></a>

                                    <div class="media-body">
                                        <div class="mar-btm">
                                            <a href="#" class="btn-link text-semibold media-heading box-inline">Lisa D.</a>
                                            <p class="text-muted text-sm"><i class="fa fa-mobile fa-lg"></i> - From Mobile - 11 min ago</p>
                                        </div>

                                        <p>consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>


                                        <div class="pad-ver">
                                            <a class="btn btn-sm btn-trans btn-hover-success" href="#"><i class="fa fa-thumbs-up"></i></a>
                                            <a class="btn btn-sm btn-trans btn-hover-danger" href="#"><i class="fa fa-thumbs-down"></i></a>
                                            <a class="btn btn-sm btn-trans btn-hover-primary" href="#">Comment</a>
                                        </div>

                                        <hr>


                                        <!-- Comments -->
                                        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                                        <div class="pad-">
                                            <div class="media-block">
                                                <a class="media-left" href="#"><img class="img-circle img-sm" alt="Profile Picture" src="images/av3.png"></a>

                                                <div class="media-body">
                                                    <div class="mar-btm">
                                                        <a href="#" class="btn-link text-semibold media-heading box-inline">Bobby Marz</a>
                                                        <p class="text-muted text-sm"><i class="fa fa-mobile fa-lg"></i> - From Mobile - 7 min ago</p>
                                                    </div>

                                                    <p>Sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>

                                                    <div class="pad-ver">
                                                        <a class="btn btn-sm btn-trans btn-hover-success active" href="#"><i class="fa fa-thumbs-up"></i> You Like it</a>
                                                        <a class="btn btn-sm btn-trans btn-hover-danger" href="#"><i class="fa fa-thumbs-down"></i></a>
                                                        <a class="btn btn-sm btn-trans btn-hover-primary" href="#">Comment</a>
                                                    </div>

                                                    <hr>

                                                </div>
                                            </div>

                                            <div class="media-block">
                                                <a class="media-left" href="#"><img class="img-circle img-sm" alt="Profile Picture" src="images/av6.png">
                                                </a>
                                                <div class="media-body">
                                                    <div class="mar-btm">
                                                        <a href="#" class="btn-link text-semibold media-heading box-inline">Lucy Moon</a>
                                                        <p class="text-muted text-sm"><i class="fa fa-globe fa-lg"></i> - From Web - 2 min ago</p>
                                                    </div>

                                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate ?</p>

                                                    <div class="pad-ver">
                                                        <a class="btn btn-sm btn-trans btn-hover-success" href="#"><i class="fa fa-thumbs-up"></i></a>
                                                        <a class="btn btn-sm btn-trans btn-hover-danger" href="#"><i class="fa fa-thumbs-down"></i></a>
                                                        <a class="btn btn-sm btn-trans btn-hover-primary" href="#">Comment</a>
                                                    </div>

                                                    <hr>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

                                    </div>
                                </div>
                                <!-- End of Newsfeed Content -->
                                <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->



                                <!-- Newsfeed Content -->
                                <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                                <div class="media-block pad-all">
                                    <a class="media-left" href="#">
                                        <img class="img-circle img-sm" alt="Profile Picture" src="images/av1.png">
                                    </a>

                                    <div class="media-body">
                                        <div class="mar-btm">
                                            <a href="#" class="btn-link text-semibold media-heading box-inline">John Doe</a>
                                            <p class="text-muted text-sm"><i class="fa fa-mobile fa-lg"></i> - From Mobile - 11 min ago</p>
                                        </div>

                                        <p>Lorem ipsum dolor sit amet.</p>

                                        <img class="img-responsive thumbnail" src="images/thumbs/img1.jpg" alt="Image">



                                        <div class="pad-ver">
                                            <span class="tag tag-sm"><i class="fa fa-heart text-danger"></i> 250 Likes</span>
                                            <a class="btn btn-sm btn-trans btn-hover-success" href="#"><i class="fa fa-thumbs-up"></i></a>
                                            <a class="btn btn-sm btn-trans btn-hover-danger" href="#"><i class="fa fa-thumbs-down"></i></a>
                                            <a class="btn btn-sm btn-trans btn-hover-primary" href="#">Comment</a>
                                        </div>

                                        <hr>



                                        <!-- Comments -->
                                        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                                        <div class="pad-top">
                                            <div class="media-block pad-all">
                                                <a class="media-left" href="#"><img class="img-circle img-sm" alt="Profile Picture" src="images/av5.png"></a>
                                                <div class="media-body">
                                                    <div class="mar-btm">
                                                        <a href="#" class="btn-link text-semibold media-heading box-inline">Maria Leanz</a>
                                                        <p class="text-muted text-sm"><i class="fa fa-globe fa-lg"></i> - From Web - 2 min ago</p>
                                                    </div>

                                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate ?</p>

                                                    <div>
                                                        <a class="btn btn-sm btn-trans btn-hover-success" href="#"><i class="fa fa-thumbs-up"></i></a>
                                                        <a class="btn btn-sm btn-trans btn-hover-danger" href="#"><i class="fa fa-thumbs-down"></i></a>
                                                        <a class="btn btn-sm btn-trans btn-hover-primary" href="#">Comment</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Newsfeed Content -->
                    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                </div>
                <!--end for tab of wall post-->

                <!--tab for lecture and video-->
                <div class="tab-pane fade" id="lecture-tabs-box-3">
                    <h4 class="text-thin">Lectures and Videos</h4>
                    <div class="col-lg-12">
                        <div class="panel">
                            <div class="panel-body">
                                <div class="bootstrap-table">
                                    <div class="fixed-table-container" style="padding-bottom: 0px;">
                                        <div class="fixed-table-header" style="display: block;">
                                            <table>

                                            </table>
                                        </div>
                                        <div class="fixed-table-body">
                                            <div class="fixed-table-loading" style="top: 37px; display: none;">Loading, please wait…</div>
                                            <?php
                                            // print_r($array['lectures']);
                                            if ($array['lectures'] != null) {
                                                ?>
                                                <table data-select-item-name="toolbar1" 
                                                       data-search="true" data-show-columns="true" 
                                                       data-show-toggle="true" data-show-refresh="true" 
                                                       data-pagination="true" data-sort-order="desc" 
                                                       data-sort-name="id" 
                                                       data-toolbar="#demo-custom-toolbar" 
                                                       class="table-striped table table-hover" 
                                                       id="lectures-table" style="margin-top: 0px;">
                                                    <thead style="display: table-header-group;">
                                                        <tr>
                                                            <th style="text-align: center;" data-field="subject_code" data-align="center">Lecture Code</th>
                                                            <th style="text-align: center;" data-field="title">Title</th>
        <!--                                                    <th style="text-align: center;" data-field="pdf_link">PDF</th>-->
                                                            <th style="text-align: center;" data-field="video_link">Video Link</th>
    <!--                                                            <th style="text-align: center;" data-field="description">Description</th>-->
                                                            <th style="text-align: center;" data-field="action">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        foreach ($array['lectures'] as $lectures) {
                                                            $lecture_id = $lectures['lectureid'];
                                                            $lecture_name = $lectures['lecture_name'];
                                                            $pdf_link = $lectures['pdf_link'];
                                                            $video_link = $lectures['video_link'];
                                                            $description = $lectures['lecture_desc'];

                                                            //                                                    print_r($student);
                                                            echo '<tr data-index="0">'
                                                            . '<td style="text-align: center; ">' . 'Uploads/'.$lecture_name . '</td>'
                                                            . '<td style="text-align: center;">'
                                                            . '<a class="btn-link" data-toggle="modal" '
                                                            . 'data-target="#myModal" data-book-loc="' . $pdf_link
                                                            . '" data-lec-title="' . $lecture_name
                                                            . '" href="#myModal">' . $lecture_name . '</a></td>'
                                                            . '<td style="text-align: center; ">';
                                                            if ($video_link != null) {
                                                                echo '<a class="btn-link" href="#myModal" '
                                                                . 'data-video-title="' . $lecture_name . '" '
                                                                . 'data-vid-loc="' . $video_link . '" '
                                                                . 'data-target="#myModal-video" data-toggle="modal">'
                                                                . '<i class="fa fa-youtube-play"></i>&nbsp; Watch Video</a>';
                                                            } else {
                                                                echo "No video";
                                                            }
                                                            echo '</td>';
                                                            //echo '<td style="text-align: center; ">' . $description . '</td>';
                                                            echo '<td style="text-align: center;">' .
                                                            '<button type="button" ' .
                                                            'class="btn btn-info" ' .
                                                            'data-lecture_id="' . $lecture_id . '"' .
                                                            'data-lecture_title="' . $lecture_name . '"' .
                                                            'data-lecture_pdf="' . $pdf_link . '"' .
                                                            'data-lecture_video="' . $video_link . '"' .
                                                            'id="btnedit_' . $lecture_id . '"' .
                                                            'data-toggle="modal"' .
                                                            'onclick="edit_lecture(' . $lecture_id . ');">' .
                                                            '<i class="fa fa-pencil fa-fw"></i>' .
                                                            'Edit</button>';

                                                            echo '&nbsp;<button type="button"' .
                                                            'class="btn btn-danger"' .
                                                            'onclick="delete_lecture(' . $lecture_id . ');">' .
                                                            '<i class="fa fa-trash fa-fw"></i>' .
                                                            'Delete</button>';
                                                            echo "</td>";
                                                            //. '<td style="">'. $title .'</td>'
                                                            echo "</tr>";
                                                        }
                                                        ?>

                                                    </tbody>
                                                </table>
                                                <?php
                                            } //end of if
                                            else {
                                                echo 'No Lectures Uploaded';
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <button id="btncreate_lecture" data-target="#addLecture" data-toggle="modal" class="btn btn-primary pull-right">Create Lecture</button>
                        </div>
                    </div>
                </div>
                <!--end for tab of lecture and video-->
                <div class="tab-pane fade" id="quiz-tabs-box-4">
                    <h4 class="text-thin">Quiz</h4>
                    <div class="col-lg-12">
                        <div class="panel">
                            <div class="panel-body">
                                <div class="bootstrap-table">
                                    <div class="fixed-table-container" style="padding-bottom: 0px;">
                                        <div class="fixed-table-header" style="display: block;">
                                            <table>

                                            </table>
                                        </div>
                                        <div class="fixed-table-body">
                                            <div class="fixed-table-loading" style="top: 37px; display: none;">Loading, please wait…</div>
                                            <table data-select-item-name="toolbar1" 
                                                   data-search="true" data-show-columns="true" 
                                                   data-show-toggle="true" data-show-refresh="true" 
                                                   data-pagination="true" data-sort-order="desc" 
                                                   data-sort-name="id" 
                                                   data-toolbar="#demo-custom-toolbar" 
                                                   class="table-striped table table-hover" 
                                                   id="lectures-table" style="margin-top: 0px;">
                                                <thead style="display: table-header-group;">
                                                    <tr>
                                                        <th style="text-align: center;" data-field="subject_code" data-align="center">Activity No.</th>
                                                        <th style="text-align: center;" data-field="title">Activity Title</th>
                                                        <th style="text-align: center;" data-field="video_link">Activity Type</th> 
                                                        <th style="text-align: center;" data-field="video_link">Time Limit</th>
                                                        <th style="text-align: center;" data-field="video_link">Date Start</th>
                                                        <th style="text-align: center;" data-field="video_link">Date End</th> 
                                                        <th style="text-align: center;" data-field="action">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr id="question_1">
                                                        <td style="text-align: center;">1</td>
                                                        <td style="text-align: center;">Activity 1</td>
                                                        <td style="text-align: center;">Multiple Choice</td>
                                                        <td style="text-align: center;">1 Hour</td>
                                                        <td style="text-align: center;">01/01/2013</td>
                                                        <td style="text-align: center;">01/01/2015</td>
                                                        <td style="text-align: center;">
                                                            <button class="btn btn-info" id="btneditact_1" onclick="edit_question(1);">
                                                                <i class="fa fa-pencil fa-fw"></i>&nbsp;Edit
                                                            </button>
                                                            <button class="btn btn-danger" id="btneditact_1" onclick="delete_question(1);">
                                                                <i class="fa fa-trash fa-fw"></i>&nbsp;Delete
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $array['lectures'] ?>
            </div>
        </div>
    </div>
</div>

<!-- MODAL -->
        <div class="modal fade bs-example-modal-lg" id="addLecture" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content"> 
                <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span>
                     <span class="sr-only">Close</span> </button>
                     <h4 class="modal-title" id="myModalLabel"><span id="title">Create Lecture</span>
                     <span style="z-index:5;" class="pull-right"><a id="download" href="#"></a> &nbsp;&nbsp;</span> </h4>
                </div> 
             <?php echo form_open_multipart('subject/do_upload');?> 
                <div class="modal-body">
                    <div class="form-group has-feedback">   
                    <label class="control-label">Lecture Title</label>
                        <input id="lecture_title" type="text" class="form-control" name="title" placeholder="Lecture Title"/>
                        <br/>
                        <label class="control-label">Lecture File&nbsp;</label>
                        <br/>
                        <span class="pull-left btn btn-default btn-file">
                            <input type="file" name="lecturefile" size="20" id="lecturefile"/>
                            Browse..
                        </span>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="btnsave_lecture">Upload</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>