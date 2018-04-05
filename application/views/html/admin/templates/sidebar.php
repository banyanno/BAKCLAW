<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
                
      <ul class="nav side-menu">
					<li><a href="<?php echo base_url();?>administrator"><i class="fa fa-home"></i> 
						<?php echo $this->lang->line('dashboard_menu'); ?> <span class="label label-success pull-right"></span></a>
					</li>	
  <?php foreach($permission as $p){ 
          if($p->PERMIS_LABEL == "Adminstrate"){      
  ?>						
          <li><a><i class="fa fa-user"></i> <?php echo $this->lang->line('lawyer_menu'); ?> <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <!-- <li><a href="administrator/new_lawyer_form">$this->lang->line('lawyer_menu_add'); </a></li> -->
					    <li><a href="<?php echo base_url();?>administrator/profiles"><?php echo $this->lang->line('lawyer_menu_profiles'); ?></a></li>
					   <!-- <li><a href="<?php //echo base_url();?>administrator/document_status"><?php //echo $this->lang->line('processing_doc'); ?></a></li> -->
            </ul>
          </li>
      <?php }
        elseif ($p->PERMIS_LABEL == "Legal AID") { ?>
         
         <li><a><i class="fa fa-user"></i> <?php echo $this->lang->line('legal_menu'); ?> <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <!-- <li><a href="administrator/new_lawyer_form">$this->lang->line('lawyer_menu_add'); </a></li> -->
					    <li><a href="<?php echo base_url();?>CaseRegis_Controller/dashboardlaid"><?php echo $this->lang->line('legal_menu_dasbord'); ?></a></li>
					   <!-- <li><a href="<?php //echo base_url();?>administrator/document_status"><?php //echo $this->lang->line('processing_doc'); ?></a></li> -->
            </ul>
          </li>
          <li><a><i class="fa fa-user"></i> <?php echo $this->lang->line('sys_para_menu'); ?> <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <!-- <li><a href="administrator/new_lawyer_form">$this->lang->line('lawyer_menu_add'); </a></li> -->
              <li><a href="<?php echo base_url();?>systempara/dashboard_client"><?php echo $this->lang->line('sys_para_client'); ?></a></li>
					    <li><a href="<?php echo base_url();?>administrator/profiles"><?php echo $this->lang->line('sys_para_cash'); ?></a></li>
              <li><a href="<?php echo base_url();?>administrator/profiles"><?php echo $this->lang->line('sys_para_offense'); ?></a></li>
              <li><a href="<?php echo base_url();?>administrator/profiles"><?php echo $this->lang->line('sys_para_court'); ?></a></li>
					   <!-- <li><a href="<?php //echo base_url();?>administrator/document_status"><?php //echo $this->lang->line('processing_doc'); ?></a></li> -->
            </ul>
          </li>
      
       <?php } 
      
        }
      ?>
	<!--			  <li><a><i class="fa fa-gavel"></i> <?php //echo $this->lang->line('legalaids_menu'); ?> <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.html">Information</a></li>
                    </ul>
                  </li>
		-->			
	<?php foreach($permission as $p){ 
          if($p->PERMIS_LABEL == "Inspect"){      
  ?>	
          <li><a><i class="fa fa-eye"></i> <?php echo $this->lang->line('inspection_menu'); ?> <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li>
                  <a href="<?php echo base_url();?>administrator/inspection"><?php echo $this->lang->line('inspection_apply'); ?></a></li>
                <li>
                  <a href="<?php echo base_url();?>administrator/inspection_list"><?php echo $this->lang->line('inspection_menu_list'); ?></a>
                </li>
              </ul>
          </li>
      <?php break; } 
        }
      ?>	

	<?php foreach($permission as $p){ 
          if($p->PERMIS_LABEL == "Super"){      
  ?>      		
				  <li><a><i class="fa fa-users"></i> <?php echo $this->lang->line('users_menu'); ?> <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
					      <li><a href="<?php echo base_url();?>administrator/new_user_form"><?php echo $this->lang->line('users_menu_add'); ?></a></li>
					      <li><a href="<?php echo base_url();?>administrator/users"><?php echo $this->lang->line('users_menu_list'); ?></a></li>	
                <li><a href="<?php echo base_url();?>administrator/user_roles"><?php echo $this->lang->line('users_menu_auth'); ?></a></li>
              </ul>
          </li>	
      <?php break; } 
        }
      ?>			  
          <li><a href="<?php echo base_url();?>administrator/change_passwd"><i class="fa fa-key"></i> 
						<?php echo $this->lang->line('change_passwd'); ?> <span class="label label-success pull-right"></span></a>
				  </li>				

				  <li><a><i class="fa fa-file-pdf-o"></i> <?php echo $this->lang->line('reports_menu'); ?> <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
					      <li><a href="<?php echo base_url();?>administrator/reports/inspection_report"><?php echo $this->lang->line('reports_menu_inspec'); ?></a></li>
					      <li><a href="<?php echo base_url();?>administrator/reports/licensing_report"><?php echo $this->lang->line('reports_menu_license'); ?></a></li>	
                <li><a href="<?php echo base_url();?>administrator/reports/membership_report"><?php echo $this->lang->line('reports_menu_membership'); ?></a></li>
              </ul>
          </li>						
      </ul>
    </div>
</div>