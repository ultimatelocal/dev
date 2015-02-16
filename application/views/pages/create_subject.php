<div id="page-content">
    <div class="panel panel-primary">
        <div class="panel panel-heading">

        </div>
        <div class="panel panel-body">
            <div id="demo-bv-wz">
                    <div class="wz-heading">

                            <!--progress bar-->
                            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                            <div class="progress progress-sm progress-light-base">
                                    <div class="progress-bar progress-bar-primary" style="width: 0%; margin: 0px 12.5%;"></div>
                            </div>

                            <!--nav-->
                            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                            <ul class="wz-icon-bw wz-nav-off wz-steps">



                                    <li class="col-xs-3 active bv-tab-error">
                                            <a title="Account" href="#demo-bv-tab1" data-toggle="tab" aria-expanded="true">
                                                    <span class="icon-wrap icon-wrap-sm icon-circle bg-mint">
                                                    <i class="wz-icon fa fa-info fa-2x"></i>
                                                    <i class="wz-icon-done fa fa-check fa-2x"></i>
                                            </span>
                                            </a>
                                    </li>
                                    <li class="col-xs-3">
                                            <a title="Profile" href="#demo-bv-tab2" data-toggle="tab">
                                                    <span class="icon-wrap icon-wrap-sm icon-circle bg-info">
                                                    <i class="wz-icon fa fa-user fa-2x"></i>
                                                    <i class="wz-icon-done fa fa-check fa-2x"></i>
                                            </span>
                                            </a>
                                    </li>
                                    <li class="col-xs-3">
                                            <a title="Address" href="#demo-bv-tab3" data-toggle="tab">
                                                    <span class="icon-wrap icon-wrap-sm icon-circle bg-warning">
                                                    <i class="wz-icon fa fa-home fa-2x"></i>
                                                    <i class="wz-icon-done fa fa-check fa-2x"></i>
                                            </span>
                                            </a>
                                    </li>
                                    <li class="col-xs-3">
                                            <a title="Finish" href="#demo-bv-tab4" data-toggle="tab">
                                                    <span class="icon-wrap icon-wrap-sm icon-circle bg-success">
                                                    <i class="wz-icon fa fa-heart fa-2x"></i>
                                                    <i class="wz-icon-done fa fa-check fa-2x"></i>
                                            </span>
                                            </a>
                                    </li>
                            </ul>
                    </div>





                    <!--form-->
                    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                    <form class="form-horizontal bv-form" id="demo-bv-wz-form" novalidate="novalidate"><button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;" disabled="disabled"></button>
                            <div class="panel-body">
                                    <div class="tab-content">

                                            <!--First tab-->
                                            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                                            <div class="tab-pane active in" id="demo-bv-tab1">
                                                    <div class="form-group has-feedback has-error">
                                                            <label class="col-lg-3 control-label">Username</label>
                                                            <div class="col-lg-7">
                                                                    <input type="text" placeholder="Username" name="username" class="form-control" data-bv-field="username"><i style="" class="form-control-feedback fa fa-times-circle fa-lg" data-bv-icon-for="username"></i>
                                                            <small style="" class="help-block" data-bv-validator="notEmpty" data-bv-for="username" data-bv-result="INVALID">The username is required.</small></div>
                                                    </div>

                                                    <div class="form-group has-feedback has-error">
                                                            <label class="col-lg-3 control-label">Email address</label>
                                                            <div class="col-lg-7">
                                                                    <input type="email" placeholder="Email" name="email" class="form-control" data-bv-field="email"><i style="" class="form-control-feedback fa fa-times-circle fa-lg" data-bv-icon-for="email"></i>
                                                            <small style="" class="help-block" data-bv-validator="notEmpty" data-bv-for="email" data-bv-result="INVALID">The email address is required and can't be empty</small><small style="display: none;" class="help-block" data-bv-validator="emailAddress" data-bv-for="email" data-bv-result="VALID">The input is not a valid email address</small></div>
                                                    </div>
                                            </div>


                                            <!--Second tab-->
                                            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                                            <div class="tab-pane fade" id="demo-bv-tab2">
                                                    <div class="form-group has-feedback">
                                                            <label class="col-lg-3 control-label">First name</label>
                                                            <div class="col-lg-7">
                                                                    <input type="text" class="form-control" name="firstName" placeholder="First name" data-bv-field="firstName"><i style="display: none;" class="form-control-feedback" data-bv-icon-for="firstName"></i>
                                                            <small style="display: none;" class="help-block" data-bv-validator="notEmpty" data-bv-for="firstName" data-bv-result="NOT_VALIDATED">The first name is required and cannot be empty</small><small style="display: none;" class="help-block" data-bv-validator="regexp" data-bv-for="firstName" data-bv-result="NOT_VALIDATED">The first name can only consist of alphabetical characters and spaces</small></div>
                                                    </div>

                                                    <div class="form-group has-feedback">
                                                            <label class="col-lg-3 control-label">Last name</label>
                                                            <div class="col-lg-7">
                                                                    <input type="text" class="form-control" name="lastName" placeholder="Last name" data-bv-field="lastName"><i style="display: none;" class="form-control-feedback" data-bv-icon-for="lastName"></i>
                                                            <small style="display: none;" class="help-block" data-bv-validator="notEmpty" data-bv-for="lastName" data-bv-result="NOT_VALIDATED">The last name is required and cannot be empty</small><small style="display: none;" class="help-block" data-bv-validator="regexp" data-bv-for="lastName" data-bv-result="NOT_VALIDATED">The last name can only consist of alphabetical characters and spaces</small></div>
                                                    </div>
                                            </div>



                                            <!--Third tab-->
                                            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

                                            <div class="tab-pane" id="demo-bv-tab3">
                                                    <div class="form-group has-feedback">
                                                            <label class="col-lg-3 control-label">Phone Number</label>
                                                            <div class="col-lg-7">
                                                                    <input type="text" class="form-control" name="phoneNumber" placeholder="Phone number" data-bv-field="phoneNumber"><i style="display: none;" class="form-control-feedback" data-bv-icon-for="phoneNumber"></i>
                                                            <small style="display: none;" class="help-block" data-bv-validator="notEmpty" data-bv-for="phoneNumber" data-bv-result="NOT_VALIDATED">The phone number is required and cannot be empty</small><small style="display: none;" class="help-block" data-bv-validator="digits" data-bv-for="phoneNumber" data-bv-result="NOT_VALIDATED">The value can contain only digits</small></div>
                                                    </div>

                                                    <div class="form-group has-feedback">
                                                            <label class="col-lg-3 control-label">Address</label>
                                                            <div class="col-lg-7">
                                                                    <input type="text" class="form-control" name="address" placeholder="Phone number" data-bv-field="address"><i style="display: none;" class="form-control-feedback" data-bv-icon-for="address"></i>
                                                            <small style="display: none;" class="help-block" data-bv-validator="notEmpty" data-bv-for="address" data-bv-result="NOT_VALIDATED">The address is required</small></div>
                                                    </div>
                                            </div>


                                            <!--Fourth tab-->
                                            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                                            <div class="tab-pane  mar-btm text-center" id="demo-bv-tab4">
                                                    <h4>Thank you</h4>
                                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                                            </div>

                                    </div>
                            </div>


                            <!--Footer button-->
                            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                            <div class="panel-footer text-right">
                                    <div class="box-inline">
                                            <button class="previous btn btn-primary disabled" type="button">Previous</button>
                                            <button class="next btn btn-primary" type="button">Next</button>
                                            <button disabled="" class="finish btn btn-warning" type="button" style="display: none;">Finish</button>
                                    </div>
                            </div>
                    </form>
            </div>
        </div>
    </div>
</div>