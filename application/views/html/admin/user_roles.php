       <!-- page content -->
        <div class="right_col" role="main">
          <div class="">

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h3><?php echo $this->lang->line('users_auth_list'); ?></h3>
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
              <label class="control-label-kh"><?php echo $this->lang->line('auth_menu_add'); ?></label></button>                
            </div>
<!-- Modal -->
            <div class="modal fade bs-example-modal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                </button>
                                <h4><?php echo $this->lang->line('auth_menu_add'); ?></h4>
                              </div>
                              <div class="modal-body">
                                    <?php 							
                                      include("application/views/html/admin/modal_pages/new_auth_form_modal.php");
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
						      <th><label class="control-label-kh"><b>ល.រ</b></label></th>
						      <th><label class="control-label-kh"><b>ឈ្មោះសំគាល់</b></label></th>
                  <th><label class="control-label-kh"><b>មានសិទ្ធជា</b></label></th>
						      <th><label class="control-label-kh"><b>បង្កើតនៅថ្ងៃ</b></label></th>
						      <th><label class="control-label-kh"><b>ការដកសិទ្ធវិញ</b></label></th>	
                 </tr>
                </thead>
                <tbody>
                <?php
                      $i = 0;
                      foreach($auth_list as $auth)
                      {                       
                        echo "<tr><td>".++$i."</td><td>";
                        echo $auth->USER_NAME."</td><td>";
                        echo $auth->PERMIS_LABEL."</td><td>";
                        echo $auth->MODIDATE."</td><td>"; 
                        echo "<a class='btn btn-app1'>";
                        echo "<i class='fa fa-remove'></i>ដកសិទ្ធ</a></td></tr>";                     
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
