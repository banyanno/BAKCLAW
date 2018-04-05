        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
		  <div class="clearfix"></div>
          <!-- /top tiles -->
			<div class="row">
			   <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h3><?php echo $this->lang->line('lawyer_list'); ?></h3>
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
					 <a class="btn btn-success btn-sm" ><label class="control-label-kh">ព្រីនឯកសារនេះ</label></a>
					 <a class="btn btn-success btn-sm" href="<?php echo base_url();?>administrator/profiles"><label class="control-label-kh">ត្រឡប់ទៅតារាងបញ្ជីឈ្មោះមេធាវីវិញ</label></a>
				</div>
	<hr />			
	<div class="" role="tabpanel" data-example-id="togglable-tabs">
    <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
        <li role="presentation" class="active">
			<a href="#tab_content1" id="tab1" role="home-tab" data-toggle="tab" aria-expanded="true">
			<span style="font-family: Khmer OS Siemreap, Kh Battambang; font-size: 16px; font-weight: bold">អត្តសញ្ញាណមេធាវី
			</span></a>
        </li>
        <li role="presentation" class="">
			<a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">
			<span style="font-family: Khmer OS Siemreap, Kh Battambang; font-size: 16px; font-weight: bold">ការបំពេញលក្ខខណ្ឌប្រកបវិជ្ជាជីវៈ
			</span></a>
        </li>
        <li role="presentation" class="">
			<a href="#tab_content3" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">
			<span style="font-family: Khmer OS Siemreap, Kh Battambang; font-size: 16px; font-weight: bold">ការអប់រំបន្ត
			</span></a>
        </li>
        <li role="presentation" class="">
			<a href="#tab_content4" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">
			<span style="font-family: Khmer OS Siemreap, Kh Battambang; font-size: 16px; font-weight: bold">វិធានការវិន័យ
			</span></a>
        </li>
    </ul>
					 <div id="myTabContent" class="tab-content">  
							<div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
								<br />
								<div class="form-group">
									<label class="control-label-kh">ឈ្មោះ (ជាខ្មែរ):	
									<?php echo $lawyer[0]->lawyer_name_kh; ?></label>								
								</div>
								<div class="form-group">
									<label class="control-label-kh">ជាឡាតាំង​: <?php echo $lawyer[0]->lawyer_name_en; ?></label>
								</div>
								<div class="form-group">
									<label class="control-label-kh">ថ្ងៃ ខែ ឆ្នាំកំណើត: <?php echo $lawyer[0]->lawyer_dob; ?></label>
								</div>
								<div class="form-group">
									<label class="control-label-kh">អត្តលេខ: <?php echo $lawyer[0]->lawyer_code; ?></label>								
								</div>
							</div>

							<div id="tab_content2" role="tabpanel" class="tab-pane fade" aria-labelledby="profile-tab">
								<br />
								<?php
								foreach($conditions as $condition){
								
								?>
								<div class="form-group">
									<label class="control-label-kh"><b>២.១ វិញ្ញាបនប័ត្រសម្បទាវិជ្ជាជីវៈមេធាវី</b></label>
								</div>
								<?php
								if($condition->date_of_completion){
								?>
								<div class="form-group">
								  <label class="control-label-kh">បញ្ចប់នៅ:&emsp;<?php echo $condition->date_of_completion; ?></label>
								</div>
								<?php
								}
								?>

								<?php
								if($condition->date_of_prob){
								?>							
								<div class="form-group">
									<label class="control-label-kh">ចប់កម្មសិក្សានៅ:&emsp;<?php echo $condition->date_of_prob; ?></label> 
								</div>
								<?php
								}
								?>		

								<?php
									if($condition->is_pursue_study){
								?>
								<div class="form-group">
										<label class="control-label-kh">កម្មសិក្សាត្រូវបន្ត</label> 
								</div>
								<?php
									}
								?>			
								<?php
								if($condition->date_of_fulltime){
								?>				
								<div class="form-group">
								  <label class="control-label-kh">ក្រុមប្រឹក្សាអនុម័តឲ្យប្រកបពេញសិទ្ធិ</label>									  
								  <label class="control-label-kh">សេចក្តីសម្រេច:&emsp;<?php echo $condition->date_of_fulltime; ?> (ចុះលេខ និង ថ្ងៃខែឆ្នាំ)</label>									   
								</div>
								<?php
									}
								?>
								<hr />
								<div class="form-group">
									<label class="control-label-kh"><b>២.២	លក្ខខណ្ឌប្រកបតាមមាត្រា ៣២</b></label>
								</div>
								<?php
								if($condition->date_of_righteousness){
								?>	
								<div class="form-group">
									<label class="control-label-kh">ត្រូវបំពេញសុក្រិត្យការ ចាប់ផ្តើមពី:&emsp;<?php echo $condition->date_of_righteousness; ?></label>
								</div>
								<?php
									}
								if($condition->date_of_without_righteousness){
								?>	
								<div class="form-group">
									<label class="control-label-kh">លើកលែងបំពេញសុក្រិត្យការ</label>
									<label class="control-label-kh">សេចក្តីសម្រេច:&emsp;<?php echo $condition->date_of_without_righteousness; ?> (ចុះលេខ និង ថ្ងៃខែឆ្នាំ)</label>
								</div>
								<?php
									}
								if($condition->date_of_prob_righteousness){
								?>									
								<div class="form-group">
									<label class="control-label-kh">កម្មសិក្សា</label>
									<label class="control-label-kh">ថ្ងៃ ខែ ឆ្នាំ:&emsp;<?php echo $condition->date_of_prob_righteousness; ?></label>
								</div>	
								<?php
									}
								if($condition->no_prob_righteousness){
								?>							
								<div class="form-group">
									  <label class="control-label-kh">២.២.៥	មិនបាច់ធ្វើកម្មសិក្សា</label>
									  <label class="control-label-kh">សេចក្តីសម្រេចលេខ:&emsp;<?php echo $condition->no_prob_righteousness; ?> (ចុះលេខ និង ថ្ងៃខែឆ្នាំ)</label>
								</div>	
								<?php
									}
								if($condition->fulltime_approval){
								?>
								<div class="form-group">
								  	<label class="control-label-kh">ក្រុមប្រឹក្សាអនុម័តឲ្យប្រកបពេញសិទ្ធិ</label>
									  <label class="control-label-kh">សេចក្តីសម្រេច លេខ:&emsp;<?php echo $condition->fulltime_approval; ?> (ចុះលេខ និង ថ្ងៃខែឆ្នាំ)</label>
								</div>
								<?php
								}
								?>							
								<hr />
								<div class="form-group">
									<label class="control-label-kh"><b>២.៣	ការប្រកបវិជ្ជាជីវៈ</b></label>
								</div>								
								<div class="form-group">
								<?php
								if($condition->firm_name){
								?>
								  <label class="control-label-kh">ការិយាល័យឈ្មោះ:&emsp;<?php echo $condition->firm_name; ?></label>
								<?php
								}
								if($condition->authorisation_number){
								?>
									<label class="control-label-kh">លិខិតអនុញ្ញាតលេខ:&emsp;<?php echo $condition->authorisation_number; ?></label>
								<?php
								}
								?>
								</div>									
								<div class="form-group">
								<?php
								if($condition->permission_number){
								?>
								  <label class="control-label-kh">លិខិតអនុញ្ញាតឲ្យប្រកបលេខ:&emsp;<?php echo $condition->permission_number; ?></label>
								<?php
								}
								if($condition->firm_validity){
								?>
								 	<label class="control-label-kh">អស់សុពលភាពត្រឹមថ្ងៃ ខែ ឆ្នាំ:&emsp;<?php echo $condition->firm_validity; ?></label> 
								<?php
								}
								?>
								</div>				
								<hr />
								<div class="form-group">
									<label class="control-label-kh"><b>២.៤	ការនៅក្រៅបញ្ជីគណៈមេធាវី</b></label>
								</div>
								<?php
								if($condition->out_bar_validity){
								?>								
								<div class="form-group">
								  <label class="control-label-kh">តាមសេចក្តីស្នើសុំ </label>
									<label class="control-label-kh">អស់សុពលភាពត្រឹមថ្ងៃ ខែ ឆ្នាំ:&emsp;<?php echo $condition->out_bar_validity; ?></label> 
								</div>
								<?php
								}
								if($condition->out_bar_decision){
								?>
								<div class="form-group">
								  <label class="control-label-kh">តាមសេចក្តីសម្រេចដាក់ឲ្យនៅក្រៅបញ្ជី</label>
									<label class="control-label-kh">សេចក្តីសម្រេច លេខឆ្នាំ:&emsp;<?php echo $condition->out_bar_decision; ?>  (ចុះលេខ និង ថ្ងៃខែឆ្នាំ)</label>
								</div>
								<?php
								}
								?>
								<hr />									
								<div class="form-group">
									<label class="control-label-kh"><b>២.៥ ការហាមឃាត់មិនឲ្យប្រកប</b></label>
								</div>
								<?php
								if($condition->prohibition_statement){
								?>														
								<div class="form-group">
								  <label class="control-label-kh">សេចក្តីសម្រេច:&emsp;<?php echo $condition->prohibition_statement; ?></label>
								</div>
								<?php
								}

								}
								?>	
							</div>
							<div id="tab_content3" role="tabpanel" class="tab-pane fade" aria-labelledby="profile-tab">
							  <br />
								<div class="form-group">
								<?php
									$i=1;
									$total_hour =0;
									foreach($education as $edu){
										echo "<p><label class='control-label-kh'><b>លើកទី ".$i."&emsp;</b></label></p>";
										echo "<p><label class='control-label-kh'>ចំនួនម៉ោងសិក្សា:&emsp;";
										echo	$edu->number_of_hours." ម៉ោង"."</label></p><hr />";
										$total_hour = $total_hour + $edu->number_of_hours;
										$i++;
									}
										echo "<p><label class='control-label-kh'>សរុបម៉ោងអប់រំបន្តមកទល់បច្ចុប្បន្ន:&emsp;";
										echo $total_hour." ម៉ោង</label></p>";
								?>
								</div>
							</div> <!-- End Tab3-->
							<div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="profile-tab">
								<br >
								<div class="form-group">
								<?php
									$i=1;
									foreach($discipline as $d){
										echo "<p><label class='control-label-kh'>បណ្តឹងទី ".$i."&emsp;</label></p>";	
										echo "<p><label class='control-label-kh'><i>បរិយាយសង្ខេប</i></label></p>";
										echo "<p>".$d->complaints_desc."</p>";
										echo "<p><label class='control-label-kh'>ចប់ដោយការផ្សះផ្សារបស់ប្រធាន:&emsp;".$d->is_presidential_reconciliation."</label></p>";
										echo "<p><label class='control-label-kh'>ត្រូវធ្វើអធិការកិច្ច:&emsp;".$d->is_inspection."</label></p>";
										echo "<p><label class='control-label-kh'>សេចក្តីសម្រេចក្រុមប្រឹក្សា:&emsp;".$d->cd_id."</label></p>";
										$i++;	
									}


								?>
								</div>
							</div> <!-- end content tab4-->
						   </div>
			</div>			  
				 </div>	  
                </div>
              </div>				
			</div>	
		</div>
        <!-- /page content -->

