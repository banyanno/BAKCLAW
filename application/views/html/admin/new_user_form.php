        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          
          <!-- /top tiles -->
			
		<!-- FORM -->
			<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h3><?php echo $this->lang->line('users_menu_add'); ?></h3>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label-kh col-md-3 col-sm-3 col-xs-12" for="username">ឈ្មោះសំគាល់ (Username) <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="username" name="username" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label-kh col-md-3 col-sm-3 col-xs-12" for="passwd">លេខសំងាត់ (Password) <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="passwd" name="passwd" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label-kh col-md-3 col-sm-3 col-xs-12" for="name">ឈ្មោះបុគ្កលិក (Staff Name)
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="name" name="name" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="staff-id" class="control-label-kh col-md-3 col-sm-3 col-xs-12">លេខសំគាល់ខ្លួន (Staff ID) *</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="staff-id" name="staff-id" required="required" class="form-control col-md-7 col-xs-12" type="text" name="staff-id">
                        </div>
                      </div>
                    <!--
                      <div class="form-group">
                        <label class="control-label-kh col-md-3 col-sm-3 col-xs-12">ភេទ (Gender)</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div id="gender" class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" id="gender" name="gender" value="male"> &nbsp; <label class="control-label-kh">ប្រុស (Male)</label>&nbsp;
                            </label>
                            <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" id="gender" name="gender" value="female"> <label class="control-label-kh">ស្រី (Female)</label>
                            </label>
                          </div>
                        </div>
                      </div>
                      -->
                      <div class="form-group">
                        <label class="control-label-kh col-md-3 col-sm-3 col-xs-12">ថ្ងៃ ខែ ឆ្នាំកំណើត (Date Of Birth)
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="birthday" name="birthday" class="form-control" data-inputmask="'mask': '99/99/9999'" placeholder="DD/MM/YYYY">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label-kh col-md-3 col-sm-3 col-xs-12">Department<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="dep">
                          <?php
                            foreach($dep_list as $dep)
                            {

                              echo "<option value='".$dep->DEP_ID."'>".$dep->DEP_NAME."</option>";

                            }
                          ?>
                          </select>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button">Cancel</button>
						              <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="button" id="create_user" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>			
			
		<!-- END FORM -->	
			

        </div>
        <!-- /page content -->

