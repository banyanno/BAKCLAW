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
	<form name="form" id="form">	
    <div id="myTabContent" class="tab-content">  
        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
			<br />
			<div class="form-group">
				<label class="control-label-kh">ឈ្មោះ (ជាខ្មែរ)</label>
				<input  maxlength="100" type="text" name="namekh" required="required" class="form-control" placeholder="ជាខ្មែរ"  />
			</div>
			<div class="form-group">
				<label class="control-label-kh">ជាឡាតាំង</label>
				<input maxlength="100" type="text" name="nameeng" required="required" class="form-control" placeholder="ឈ្មោះឡាតាំង" />
			</div>
			<div class="form-group">
				<label class="control-label-kh">ថ្ងៃ ខែ ឆ្នាំកំណើត</label>
				<input type="text" class="form-control" name="dob" required="required" data-inputmask="'mask': '99/99/9999'" placeholder="DD/MM/YYYY">
			</div>
			<div class="form-group">
				<label class="control-label-kh">អត្តលេខ</label>
				<input maxlength="100" type="text" name="id" required="required" class="form-control" placeholder="អត្តលេខ" />
			</div>
        </div>
        <div id="tab_content2" role="tabpanel" class="tab-pane fade" aria-labelledby="profile-tab">
			<br />
			<div class="form-group">
				<label class="control-label-kh"><b>២.១ វិញ្ញាបនប័ត្រសម្បទាវិជ្ជាជីវៈមេធាវី</b></label>
			</div>
			<div class="form-group">
			  <table>
			   <tr>
				  <td><label class="control-label-kh">២.១.១ បញ្ចប់ &nbsp;&nbsp;</label>    </td>
				  <td><input type="checkbox" name="end_cert">&nbsp;&nbsp;</td>
				  <td><label class="control-label-kh">ថ្ងៃទី ខែ ឆ្នាំ&nbsp;&nbsp;</label>    </td>
				  <td><input type="text" class="form-control" name="date_of_completion" required="required" data-inputmask="'mask': '99/99/9999'" placeholder="DD/MM/YYYY">&nbsp;&nbsp;</td>
			   </tr>	
			  </table>
			</div>							
			<div class="form-group">
			  <table>
			   <tr>
				  <td><label class="control-label-kh">២.១.២	ចប់កម្មសិក្សា  &nbsp;&nbsp;</label>    </td>
				  <td><input type="checkbox" name="end_prob">&nbsp;&nbsp;</td>
				  <td><label class="control-label-kh">ថ្ងៃទី ខែ ឆ្នាំ&nbsp;&nbsp;</label>    </td>
				  <td><input type="text" name="date_of_prob" class="form-control" required="required" data-inputmask="'mask': '99/99/9999'" placeholder="DD/MM/YYYY">&nbsp;&nbsp;</td>
			   </tr>	
			  </table>
			</div>														
			<div class="form-group">
			  <table>
			   <tr>
				  <td><label class="control-label-kh">២.១.៣	កម្មសិក្សាត្រូវបន្ត&nbsp;&nbsp;</label>    </td>
				  <td><input type="checkbox" name="pursue_study">&nbsp;&nbsp;</td>
			   </tr>	
			  </table>
			</div>				
			<div class="form-group">
			  <table>
			   <tr>
				  <td><label class="control-label-kh">២.១.៤	ក្រុមប្រឹក្សាអនុម័តឲ្យប្រកបពេញសិទ្ធិ &nbsp;&nbsp;</label>    </td>
				  <td><input type="checkbox" name="is_fulltime">&nbsp;&nbsp;</td>
				  <td><label class="control-label-kh">សេចក្តីសម្រេច                                      &nbsp;&nbsp;</label>    </td>
				  <td><input type="text" class="form-control" name="date_of_fulltme" required="required" data-inputmask="'mask': '99/99/9999'" placeholder="DD/MM/YYYY">&nbsp;&nbsp;</td>
				  <td>(ចុះលេខ និង ថ្ងៃខែឆ្នាំ)</td> 
			   </tr>	
			  </table>
			</div>
			<hr />
			<div class="form-group">
				<label class="control-label-kh"><b>២.២	លក្ខខណ្ឌប្រកបតាមមាត្រា ៣២</b></label>
			</div>
			<div class="form-group">
			  <table>
			   <tr>
				  <td><label class="control-label-kh">២.២.១ ត្រូវបំពេញសុក្រិត្យការ &nbsp;&nbsp;</label>    </td>
				  <td><input type="checkbox" name="fairness">&nbsp;&nbsp;</td>
				  <td><label class="control-label-kh">ចាប់ផ្តើមថ្ងៃ ខែ ឆ្នាំ&nbsp;&nbsp;</label>    </td>
				  <td><input type="text" class="form-control" name="fairness_date" required="required" data-inputmask="'mask': '99/99/9999'" placeholder="DD/MM/YYYY">&nbsp;&nbsp;</td>
			   </tr>	
			  </table>
			</div>								
			<div class="form-group">
			  <table>
			   <tr>
				  <td><label class="control-label-kh">២.២.២	លើកលែងបំពេញសុក្រិត្យការ &nbsp;&nbsp;</label>    </td>
				  <td><input type="checkbox" name="without_fairness">&nbsp;&nbsp;</td>
				  <td><label class="control-label-kh">សេចក្តីសម្រេច&nbsp;&nbsp;</label>    </td>
				  <td><input type="text" class="form-control" name="fairness_verdict" required="required" data-inputmask="'mask': '99/99/9999'" placeholder="DD/MM/YYYY">&nbsp;&nbsp;</td>
				  <td>លេខ .... (ចុះលេខ និង ថ្ងៃខែឆ្នាំ)</td>
			   </tr>	
			  </table>
			</div>								
			<div class="form-group">
			  <table>
			   <tr>
				  <td><label class="control-label-kh">២.២.៣	កម្មសិក្សា&nbsp;&nbsp;</label>    </td>
				  <td><input type="checkbox" name="probation">&nbsp;&nbsp;</td>
				  <td><label class="control-label-kh">ថ្ងៃ ខែ ឆ្នាំ&nbsp;&nbsp;</label>    </td>
				  <td><input type="text" class="form-control" name="probation_date" required="required" data-inputmask="'mask': '99/99/9999'" placeholder="DD/MM/YYYY">&nbsp;&nbsp;</td>
			   </tr>	
			  </table>
			</div>								
			<div class="form-group">
			  <table>
			   <tr>
				  <td><label class="control-label-kh">២.២.៥	មិនបាច់ធ្វើកម្មសិក្សា&nbsp;&nbsp;</label>    </td>
				  <td><input type="checkbox" name="no_probabtion">&nbsp;&nbsp;</td>
				  <td><label class="control-label-kh">សេចក្តីសម្រេចលេខ&nbsp;&nbsp;</label>    </td>
				  <td><input type="text" name="probabtion_verdict" class="form-control" required="required">&nbsp;&nbsp;</td>
				  <td>(ចុះលេខ និង ថ្ងៃខែឆ្នាំ)</td> 
			   </tr>	
			  </table>
			</div>	
			<div class="form-group">
			  <table>
			   <tr>
				  <td><label class="control-label-kh">២.២.៦	ក្រុមប្រឹក្សាអនុម័តឲ្យប្រកបពេញសិទ្ធិ  &nbsp;&nbsp;</label></td>
				  <td><input type="checkbox" name="allow_fulltime">&nbsp;&nbsp;</td>
				  <td><label class="control-label-kh">&nbsp;&nbsp;សេចក្តីសម្រេច លេខ&nbsp;&nbsp;</label></td>
				  <td><input type="text" class="form-control" required="required" name="fulltime_verdict" >&nbsp;&nbsp;</td>
				  <td>(ចុះលេខ និង ថ្ងៃខែឆ្នាំ)</td> 
			   </tr>	
			  </table>
			</div>							
			<hr />
			<div class="form-group">
				<label class="control-label-kh"><b>២.៣	ការប្រកបវិជ្ជាជីវៈ</b></label>
			</div>								
			<div class="form-group">
			  <table>
			   <tr>
				  <td><label class="control-label-kh">២.៣.១	ការិយាល័យឈ្មោះ &nbsp;&nbsp;</label></td>
				  <td><input type="text" class="form-control" name="firm_name" required="required">&nbsp;&nbsp;
				   </td>
				   <td><label class="control-label-kh">&nbsp;&nbsp;លិខិតអនុញ្ញាតលេខ &nbsp;&nbsp;</label></td> 
				  <td><input type="text" class="form-control" name="approval_id" required="required">&nbsp;&nbsp;
				   </td>
			   </tr>	
			  </table>
			</div>									
			<div class="form-group">
			  <table>
			   <tr>
				  <td><label class="control-label-kh">២.៣.២	លិខិតអនុញ្ញាតឲ្យប្រកបលេខ&nbsp;&nbsp;</label></td>
				  <td><input type="text" class="form-control" name="approval_number" required="required">&nbsp;&nbsp;
				   </td>
				   <td><label class="control-label-kh">&nbsp;&nbsp;អស់សុពលភាពត្រឹមថ្ងៃ ខែ ឆ្នាំ&nbsp;&nbsp;</label></td> 
				  <td><input type="text" class="form-control" name="date_of_validity" required="required" data-inputmask="'mask': '99/99/9999'" placeholder="DD/MM/YYYY">&nbsp;&nbsp;
				   </td>
			   </tr>	
			  </table>
			</div>				
			<hr />
			<div class="form-group">
				<label class="control-label-kh"><b>២.៤	ការនៅក្រៅបញ្ជីគណៈមេធាវី</b></label>
			</div>								
			<div class="form-group">
			  <table>
			   <tr>
				  <td><label class="control-label-kh">២.៤.១	តាមសេចក្តីស្នើសុំ &nbsp;&nbsp;</label></td>
				  <td><input type="checkbox" name="follow_proposal">&nbsp;&nbsp;
				   </td>
				   <td><label class="control-label-kh">&nbsp;&nbsp;អស់សុពលភាពត្រឹមថ្ងៃ ខែ ឆ្នាំ&nbsp;&nbsp;</label></td> 
				  <td><input type="text" class="form-control" name="date_of_out_validity" required="required" data-inputmask="'mask': '99/99/9999'" placeholder="DD/MM/YYYY">&nbsp;&nbsp;
				   </td>
			   </tr>	
			  </table>
			</div>									
			<div class="form-group">
			  <table>
			   <tr>
				  <td><label class="control-label-kh">២.៤.២	តាមសេចក្តីសម្រេចដាក់ឲ្យនៅក្រៅបញ្ជី &nbsp;&nbsp;</label></td>
				  <td><input type="checkbox" name="is_out">&nbsp;&nbsp;
				   </td>
				   <td><label class="control-label-kh">&nbsp;&nbsp;សេចក្តីសម្រេច លេខឆ្នាំ&nbsp;&nbsp;</label></td> 
				  <td><input type="text" class="form-control" name="date_of_verdict" required="required">&nbsp;&nbsp;
				   </td>
				  <td>(ចុះលេខ និង ថ្ងៃខែឆ្នាំ)</td> 
			   </tr>	
			  </table>
			</div>
			<hr />									
			<div class="form-group">
				<label class="control-label-kh"><b>២.៥ ការហាមឃាត់មិនឲ្យប្រកប</b></label>
			</div>														
			<div class="form-group">
			  <table>
			   <tr>
				  <td><label class="control-label-kh">២.៥.១	សេចក្តីសម្រេច&nbsp;&nbsp;</label></td>
				  <td><input type="text" class="form-control" name="final_statement" required="required">&nbsp;&nbsp;
				   </td>
			   </tr>	
			  </table>
			</div>	
        </div>
        <div id="tab_content3" role="tabpanel" class="tab-pane fade" aria-labelledby="profile-tab">
		  <div class="form-group after-add-edu-more">	
			<div class="form-group">
				<table>
		 		  <tr>
					<td><label class="control-label-kh">លើកទី ១&nbsp;&nbsp;</label></td>
					<td><label class="control-label-kh">ចំនួនម៉ោងសិក្សា៖&nbsp;&nbsp;</label></td>
					<td><input type="text" name="class_hours" class="form-control" required="required">&nbsp;&nbsp;
					</td>
		 		  </tr>	
		        </table>
	   		</div>
		  </div>	   
		<!-- This is where the form elements are dynamically generated-->
			<div class="copy-edu hide">
				<hr />	
				<div class="form-group">		
					<table>
				    	<tr>
						<td><label class="control-label-kh">លើកទីបន្ទាប់&nbsp;&nbsp;</label></td>
						<td><label class="control-label-kh">ចំនួនម៉ោងសិក្សា៖&nbsp;&nbsp;</label></td>
						<td><input type="text" name="class_hours" class="form-control" required="required">&nbsp;&nbsp;
						</td>
						</tr>									  
					</table>
					<br />
					<div class="input-group-btn"> 
						<button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>				  
					</div>										
			    </div>
			</div>			
		<!-- -->			   
	
			<div class="input-group-btn"> 
				<button class="btn btn-success add-edu-more" type="button"><i class="glyphicon glyphicon-plus"></i> Add</button>
			</div>	   
        </div> <!-- End Tab3-->
        <div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="profile-tab">
			<div class="form-group after-add-more">
				<table>
				 <tr>
					<td><label class="control-label-kh">៤.១ បណ្តឹង&nbsp;&nbsp;</label></td>
					<td><input type="checkbox" name="is_sued">&nbsp;&nbsp;</td>
					<td><label class="control-label-kh">បរិយាយសង្ខេប&nbsp;&nbsp;</label></td>
					<td><input type="text" class="form-control" name="compliant_des">&nbsp;&nbsp;
					</td> 
				 </tr>
				
				 <tr>
					<td><label class="control-label-kh">ចប់ដោយការផ្សះផ្សារបស់ប្រធាន&nbsp;&nbsp;</label></td>
					<td><input type="checkbox" name="end_compliant_by_president">&nbsp;&nbsp;</td>						   
				 </tr>	
				 
				 <tr>
					<td><label class="control-label-kh">ត្រូវធ្វើអធិការកិច្ច&nbsp;&nbsp;</label></td>
					<td><input type="checkbox" name="to_be_inspected">&nbsp;&nbsp;</td>
					<td><label class="control-label-kh">របាយការណ៍អធិការកិច្ច&nbsp;&nbsp;</label></td>
					<td><input type="button" value="Download របាយការណ៍">&nbsp;&nbsp;</td>
				 </tr>		
				 							  
				 <tr>
					<td><label class="control-label-kh">សេចក្តីសម្រេចក្រុមប្រឹក្សា៖</label></td>
					<td colspan=3>
					<?php
					foreach($council_decision as $decision){
						echo "<input type='radio' name='council_decision' value='".$decision->id."'>";	
						echo " &nbsp;&nbsp;";
						echo "<label class='control-label-kh'>".$decision->decision;
						echo "&nbsp;&nbsp;</label>";	
					}
					?>
					</td>
				 </tr>										  
				</table>
	   		</div>
		<!-- This is where the form elements are dynamically generated-->
			<div class="copy hide">
				<hr />	
				<div class="form-group">		
					<table>
				    	<tr>
							<td><label class="control-label-kh">៤.១ បណ្តឹង&nbsp;&nbsp;</label></td>
							<td><input type="checkbox" name="is_sued">&nbsp;&nbsp;</td>
							<td><label class="control-label-kh">បរិយាយសង្ខេប&nbsp;&nbsp;</label></td>
							<td><input type="text" class="form-control" name="compliant_des">&nbsp;&nbsp;
							</td> 
						</tr>
						<tr>
							<td><label class="control-label-kh">ចប់ដោយការផ្សះផ្សារបស់ប្រធាន&nbsp;&nbsp;</label></td>
							<td><input type="checkbox" name="end_compliant_by_president">&nbsp;&nbsp;</td>						   
							</tr>	
						<tr>
							<td><label class="control-label-kh">ត្រូវធ្វើអធិការកិច្ច&nbsp;&nbsp;</label></td>
							<td><input type="checkbox" name="to_be_inspected">&nbsp;&nbsp;</td>
							<td><label class="control-label-kh">របាយការណ៍អធិការកិច្ច&nbsp;&nbsp;</label></td>
							<td><input type="button" value="Download របាយការណ៍">&nbsp;&nbsp;</td>
						</tr>										  
						<tr>
						<td><label class="control-label-kh">សេចក្តីសម្រេចក្រុមប្រឹក្សា៖</label></td>
						<td colspan=3>
						<?php
						foreach($council_decision as $decision){
							echo "<input type='radio' name='council_decision' value='".$decision->id."'>";	
							echo " &nbsp;&nbsp;";
							echo "<label class='control-label-kh'>".$decision->decision;
							echo "&nbsp;&nbsp;</label>";	
						}
						?>
						</td>
						</tr>										  
					</table>
					<br />
					<div class="input-group-btn"> 
						<button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>				  
					</div>										
			    </div>
			</div>			
		<!-- -->
			<div class="input-group-btn"> 
				<button class="btn btn-success add-more" type="button"><i class="glyphicon glyphicon-plus"></i> Add</button>
			</div>	
		</div> <!-- end content tab4-->
		<button type="button" id="go" class="btn btn-success btn-lg pull-right"><label>Submit</label></button>
	   </div>
	</form>	
</div>