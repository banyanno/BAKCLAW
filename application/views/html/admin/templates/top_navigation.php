
        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
            <div class="nav toggle">
                    <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                  </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt=""><?php 
                              if(!empty($_SESSION['logged_in']))
                              {
                                echo $_SESSION['logged_in']['username'];

                              }
                              ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="<?php echo base_url(); ?>administrator/change_passwd"> <?php echo $this->lang->line('change_passwd'); ?></a></li>
<!--                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>-->
                    
                    <li><a href="<?php echo base_url();?>logout"><i class="fa fa-sign-out pull-right"></i><?php echo $this->lang->line('log_out'); ?></a></li>
                  </ul>
                </li>

                
  
				<li role="presentation" class="dropdown">
                  	<a href="<?php echo base_url();?>administrator/switch/khmer">
                    	<img src="<?php echo base_url();?>public/build/images/kh.svg" height="25" width="25"/>
                  	</a>
                </li>
				<li role="presentation" class="dropdown">
                  	<a href="<?php echo base_url();?>administrator/switch/english" >
                   		<img src="<?php echo base_url();?>public/build/images/gb.svg" height="25" width="25"/>
					</a>
                </li>
				
				</ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->