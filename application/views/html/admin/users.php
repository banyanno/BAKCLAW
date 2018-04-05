       <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h3><?php echo $this->lang->line('users_list'); ?></h3>
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
                  <div class="form-group">
                       <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target=".bs-example-modal">
                       <label class="control-label-kh">បង្កើតអ្នកប្រើថ្មី</label></button>                
                       <button type="button" onclick="location.reload();" class="btn btn-success btn-sm"><label class="control-label-kh">Update តារាង</label></button>	
                  </div>
<!-- Modal -->
				 <div class="modal fade bs-example-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                    </button>
                    <h4><?php echo $this->lang->line('users_menu_add'); ?></h4>
                  </div>
                  <div class="modal-body">
                        <?php 							
							            include("application/views/html/admin/modal_pages/new_user_form_modal.php");
						          	?>
                  </div>
                </div>
            </div>
         </div>
<!-- End Modal -->
                  <div class="form-group"> 
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>      
                          <th class = "control-label-kh"><b>ល.រ</b></th>
						              <th class = "control-label-kh"><b>ឈ្មោះសំគាល់</b></th>
                          <th class = "control-label-kh"><b>ឈ្មោះបុគ្កលិក</b></th>
						              <th class = "control-label-kh"><b>លេខសំគាល់ខ្លួន</b></th>
						              <th class = "control-label-kh"><b>ថ្ងៃបង្កើត</b></th>
						              <th class = "control-label-kh"><b>isActive</b></th>
						              <th class = "control-label-kh"><b>កែប្រែ</b></th>	
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                      $i = 0;
                      foreach($user_list as $user)
                      {
                        
                        echo "<tr><td>".++$i."</td><td>";
                        echo $user->USER_NAME."</td><td>";
                        echo $user->USER_FULLNAME."</td><td>";
                        echo $user->USER_STAFFID."</td><td>";
                        echo $user->MODIDATE."</td><td>"; 
                        echo "Active</td><td>";   
                        echo "<a class='btn btn-app1' href='edit_user/".$user->USER_ID."'>";
                        echo "<i class='glyphicon glyphicon-edit'></i><label>កែប្រែ</label></a></td></tr>";
                      
                      }
                      ?> 						  
                      </tbody>
                    </table>
                  </div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
        <!-- /page content -->
