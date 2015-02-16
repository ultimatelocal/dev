<div id="container" class="cls-container">

	<!-- BACKGROUND IMAGE -->
	<!--===================================================-->
	<div id="bg-overlay" class=""></div>
<!--bg-img img-balloon-->


	<!-- HEADER -->
	<!--===================================================-->
	<div class="cls-header cls-header-lg">
		<div class="cls-brand">
			<a class="box-inline" href="index.html">
				<!-- <img alt="Nifty Admin" src="images/logo.png" class="brand-icon"> -->
				<span class="brand-title">e-<span class="text-thin">dycian</span></span>
			</a>
		</div>
	</div>


	<!-- REGISTRATION FORM -->
	<!--===================================================-->

	<div class="cls-content">
            <h4>Create an Account</h4>
		<div class="cls-content-lg panel">
                    <div class="panel">

                            <!-- VALIDATION FORM WIZARD -->
                            <!--===================================================-->

                            <div id="reg-bv-wz">
                                    <div class="wz-heading">
                                            <!--progress bar-->
                                            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                                            <div class="progress progress-sm progress-light-base">
                                                    <div class="progress-bar progress-bar-primary"></div>
                                            </div>

                                            <!--nav-->
                                            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                                            
                                            <ul class="wz-icon-bw wz-nav-off">



                                                    <li class="col-xs-3">
                                                            <a data-toggle="tab" href="#reg-bv-tab1" title="Account">
                                                                    <span class="icon-wrap icon-wrap-sm icon-circle bg-info">
                                                                    <i class="wz-icon fa fa-info fa-2x"></i>
                                                                    <i class="wz-icon-done fa fa-check fa-2x"></i>
                                                            </span>
                                                            </a>
                                                    </li>
                                                    <li class="col-xs-3">
                                                            <a data-toggle="tab" href="#reg-bv-tab2" title="Personal Information">
                                                                    <span class="icon-wrap icon-wrap-sm icon-circle bg-info">
                                                                    <i class="wz-icon fa fa-user fa-2x"></i>
                                                                    <i class="wz-icon-done fa fa-check fa-2x"></i>
                                                            </span>
                                                            </a>
                                                    </li>
                                                    <li class="col-xs-3">
                                                            <a data-toggle="tab" href="#reg-bv-tab3" title="Guardian">
                                                                    <span class="icon-wrap icon-wrap-sm icon-circle bg-info">
                                                                    <i class="wz-icon fa fa-home fa-2x"></i>
                                                                    <i class="wz-icon-done fa fa-check fa-2x"></i>
                                                            </span>
                                                            </a>
                                                    </li>
                                                    <li class="col-xs-3">
                                                            <a data-toggle="tab" href="#reg-bv-tab4" title="Finish" id="finishtab">
                                                                    <span class="icon-wrap icon-wrap-sm icon-circle bg-success">
                                                                    <i class="wz-icon fa fa-check fa-2x"></i>
                                                                    <i class="wz-icon-done fa fa-check fa-2x"></i>
                                                            </span>
                                                            </a>
                                                    </li>
                                            </ul>
                                    </div>





                                    <!--form-->
                                    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                                    <form id="reg-bv-wz-form" class="form-horizontal" method="post">
                                            <div class="panel-body">
                                                    <div class="tab-content">

                                                            <!--First tab-->
                                                            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                                                            <div id="reg-bv-tab1" class="tab-pane">
                                                                    <div class="form-group">
                                                                            <label class="col-lg-3 control-label">Student System ID</label>
                                                                            <div class="col-lg-7">
                                                                                <input type="text" class="form-control" id="id" name="id" placeholder="Student Systen ID" maxlength="15"">
                                                                            </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                            <label class="col-lg-3 control-label">Username</label>
                                                                            <div class="col-lg-7">
                                                                                    <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                                                                            </div>
                                                                    </div>

                                                                    <div class="form-group">
                                                                            <label class="col-lg-3 control-label">Email address</label>
                                                                            <div class="col-lg-7">
                                                                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                                                            </div>
                                                                    </div>
                                                                
                                                                    <fieldset>
									<div class="form-group">
										<label class="col-lg-3 control-label">Password</label>
										<div class="col-lg-7">
											<input type="password" class="form-control" id="password" name="password" placeholder="Password">
										</div>
									</div>

									<div class="form-group">
										<label class="col-lg-3 control-label">Retype password</label>
										<div class="col-lg-7">
											<input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Retype password">
										</div>
									</div>
								</fieldset>
                                                            </div>


                                                            <!--Second tab-->
                                                            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                                                            <div id="reg-bv-tab2" class="tab-pane fade">
                                                                    <div class="form-group">
                                                                            <label class="col-lg-3 control-label">First name</label>
                                                                            <div class="col-lg-7">
                                                                                    <input type="text" placeholder="First name" id="firstName" name="firstName" class="form-control">
                                                                            </div>
                                                                    </div>

                                                                    <div class="form-group">
                                                                            <label class="col-lg-3 control-label">Last name</label>
                                                                            <div class="col-lg-7">
                                                                                    <input type="text" placeholder="Last name" id="lastName" name="lastName" class="form-control">
                                                                            </div>
                                                                    </div>
                                                                
                                                                    <div class="form-group">
                                                                            <label class="col-lg-3 control-label">Middle name</label>
                                                                            <div class="col-lg-7">
                                                                                    <input type="text" placeholder="Middle name" id="middleName" name="middleName" class="form-control">
                                                                            </div>
                                                                    </div>
                                                                
                                                                    <div class="form-group">
                                                                            <label class="col-lg-3 control-label">Birth Date</label>
                                                                            <div class="col-lg-7">
<!--                                                                                    <input type="text" placeholder="dd/mm/yyyy" class="form-control" id="reg-msk-date" name="birthDate">-->
                                                                                <div id="reg-dp-txtinput">
                                                                                    <input id="reg-msk-date" type="text" class="form-control" id="birthDate" name="birthDate" placeholder="mm/dd/yyyy">
                                                                                </div>
                                                                            </div>
                                                                    </div>
                                                                
                                                                    <div class="form-group">
                                                                         <label class="col-lg-3 control-label">Gender</label>
                                                                         <div class="col-lg-7">
                                                                            <select class="form-control" name="gender" id="gender">
                                                                                <option>Male</option>
                                                                                <option>Female</option>
                                                                            </select>
                                                                         </div>
                                                                    </div>
                                                                
                                                                    <div class="form-group">
                                                                        <label class="col-lg-3 control-label">Address</label>
                                                                        <div class="col-lg-7">
                                                                            <input type="text" placeholder="Address" id="address" name="address" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                
                                                                    <div class="form-group">
                                                                        <label class="col-lg-3 control-label">Mobile No.</label>
                                                                        <div class="col-lg-7">
                                                                            <!--<input type="text" placeholder="Mobile Number (0927123456)" name="mobileno" class="form-control">-->
                                                                            <input type="text" placeholder="(0999) 123-4567" class="form-control" id="reg-msk-phone" name="phoneNumber" maxlength="11">
                                                                        </div>
                                                                    </div>
                                                                
                                                            </div>



                                                            <!--Third tab-->
                                                            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

                                                            <div id="reg-bv-tab3" class="tab-pane">
                                                                    <div class="form-group">
                                                                            <label class="col-lg-3 control-label">Guardian Name</label>
                                                                            <div class="col-lg-7">
                                                                                    <input type="text" placeholder="Guardian Name" id="guardianName" name="guardianName" class="form-control">
                                                                            </div>
                                                                    </div>
                                                                
                                                                    <div class="form-group">
                                                                            <label class="col-lg-3 control-label">Phone Number</label>
                                                                            <div class="col-lg-7">
                                                                                <input type="text" placeholder="(0999) 123-4567" id="guardianNumber" name="guardianphoneNumber" class="form-control" maxlength="11"> <!--pattern=".{11,11}"-->
                                                                            </div>
                                                                    </div>

                                                                    <div class="form-group">
                                                                            <label class="col-lg-3 control-label">Guardian Address</label>
                                                                            <div class="col-lg-7">
                                                                                <input type="text" placeholder="Guardian Address" id="guardianAddress" name="guardianAddress" class="form-control">
                                                                            </div>
                                                                    </div>
                                                            </div>


                                                            <!--Fourth tab-->
                                                            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                                                            <div id="reg-bv-tab4" class="tab-pane  mar-btm text-center">
                                                                    <h4>Registration Success!</h4>
                                                                    <p class="text-muted">Thank you! </p>
                                                            </div>

                                                    </div>
                                            </div>


                                            <!--Footer button-->
                                            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                                            <div class="panel-footer text-right">
                                                    <div class="box-inline">
                                                            <button type="button" class="previous btn btn-primary">Previous</button>
                                                            <button type="button" class="next btn btn-primary">Next</button>
                                                            <button type="button" class="finish btn btn-success" disabled id="btnFinish" >Finish</button>
                                                    </div>
                                            </div>
                                    </form>
                            </div>

                            <!--===================================================-->
                            <!-- END OF CIRCULAR FORM WIZARD -->
                    </div>	
		</div>

		<div class="pad-ver">
			Already have an account ? <a href="<?php echo base_url()."main";?>" class="btn-link mar-rgt">Sign In</a>
		</div>
	</div>

	<!--===================================================-->
	<!-- END OF REGISTRATION FORM -->