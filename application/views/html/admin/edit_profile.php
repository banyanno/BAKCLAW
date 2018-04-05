<div class="" role="tabpanel" data-example-id="togglable-tabs">
    <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
        <li role="presentation" class="active">
			<a href="#tab_content11" id="tab1" role="home-tab" data-toggle="tab" aria-expanded="true">
			<span style="font-family: Khmer OS Siemreap, Kh Battambang; font-size: 16px; font-weight: bold">អត្តសញ្ញាណមេធាវី
			</span></a>
        </li>
        <li role="presentation" class="">
			<a href="#tab_content22" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">
			<span style="font-family: Khmer OS Siemreap, Kh Battambang; font-size: 16px; font-weight: bold">ការបំពេញលក្ខខណ្ឌប្រកបវិជ្ជាជីវៈ
			</span></a>
        </li>
        <li role="presentation" class="">
			<a href="#tab_content33" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">
			<span style="font-family: Khmer OS Siemreap, Kh Battambang; font-size: 16px; font-weight: bold">ការអប់រំបន្ត
			</span></a>
        </li>
        <li role="presentation" class="">
			<a href="#tab_content44" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">
			<span style="font-family: Khmer OS Siemreap, Kh Battambang; font-size: 16px; font-weight: bold">វិធានការវិន័យ
			</span></a>
        </li>
    </ul>
	<form name="form" id="form">	
    <div id="myTabContent" class="tab-content">
<!-- Start of Tab11-->      
      <div id="tab_content11" role="tabpanel" class="tab-pane fade active in" aria-labelledby="home-tab">
            <br />
            <div class="form-group">
              <table>
                <tr>
                    <td><label class="control-label-kh">ឈ្មោះ (ជាខ្មែរ):&emsp;</label></td>
                    <td><input type="text" class="form-control" name="e_name_kh" id="e_name_kh" value="<?php echo $lawyer[0]->lawyer_name_kh; ?>"></td>
                </tr>
                <tr>
                    <td><label class="control-label-kh">ជាឡាតាំង​:</label></td>
                    <td><input type="text" class="form-control" name="e_name_en" id="e_name_en" value="<?php echo $lawyer[0]->lawyer_name_en; ?>"></td>
                </tr>
                <tr>
                    <td><label class="control-label-kh">ថ្ងៃ ខែ ឆ្នាំកំណើត:</label></td>
                    <td><input type="text" class="form-control" name="e_dob" id="e_dob" value="<?php echo $lawyer[0]->lawyer_dob; ?>"></td>
                </tr>
                <tr>
                    <td><label class="control-label-kh">អត្តលេខ:</label></td>
                    <td><input type="text" class="form-control" name="e_lawyer_code" id="e_lawyer_code" value="<?php echo $lawyer[0]->lawyer_code; ?>"></td>
                </tr>
              </table>                								
            </div>
      </div>
<!-- End of Tab 11-->
      <div id="tab_content22" role="tabpanel" class="tab-pane fade" aria-labelledby="profile-tab">
        <?php 
            foreach($conditions as $cond){
                $date_of_completion = $cond->date_of_completion;
                $date_of_prob = $cond->date_of_prob;
                $is_pursue_study = $cond->is_pursue_study;
                $date_of_fulltime = $cond->date_of_fulltime;
                $date_of_righteousness = $cond->date_of_righteousness;
                $date_of_without_righteousness = $cond->date_of_without_righteousness;
                $date_of_prob_righteousness = $cond->date_of_prob_righteousness ; 
                $no_prob_righteousness = $cond->no_prob_righteousness;
                $fulltime_approval = $cond->fulltime_approval;
                $firm_name = $cond->firm_name;
                $authorisation_number = $cond->authorisation_number; 
                $permission_number = $cond->permission_number; 
                $firm_validity = $cond->firm_validity; 
                $out_bar_validity = $cond->out_bar_validity; 
                $out_bar_decision = $cond->out_bar_decision; 
                $prohibition_statement = $cond->prohibition_statement ; 

            }
        ?>
    
            <br />
			<br />
			<div class="form-group">
				<label class="control-label-kh"><b>២.១ វិញ្ញាបនប័ត្រសម្បទាវិជ្ជាជីវៈមេធាវី</b></label>
			</div>
			<div class="form-group">
			  <table>
			   <tr>
				  <td><label class="control-label-kh">២.១.១ បញ្ចប់ &nbsp;&nbsp;</label>    </td>
				  <td><input type="checkbox" name="is_completion" id="is_completion" <?php echo $date_of_completion?"checked='checked'":""; ?>>&nbsp;&nbsp;</td>
				  <td><label class="control-label-kh">ថ្ងៃទី ខែ ឆ្នាំ&nbsp;&nbsp;</label>    </td>
				  <td><input type="text" class="form-control" name="date_of_completion" id="date_of_completion" data-inputmask="'mask': '99/99/9999'" value="<?php echo $date_of_completion;?>">&nbsp;&nbsp;</td>
			   </tr>	
			  </table>
			</div>							
			<div class="form-group">
			  <table>
			   <tr>
				  <td><label class="control-label-kh">២.១.២	ចប់កម្មសិក្សា  &nbsp;&nbsp;</label>    </td>
				  <td><input type="checkbox" name="end_prob" id="end_prob" <?php echo $date_of_prob?"checked='checked'":""; ?>>&nbsp;&nbsp;</td>
				  <td><label class="control-label-kh">ថ្ងៃទី ខែ ឆ្នាំ&nbsp;&nbsp;</label>    </td>
				  <td><input type="text" name="date_of_prob" class="form-control" id="date_of_prob" data-inputmask="'mask': '99/99/9999'" value="<?php echo $date_of_prob;?>">&nbsp;&nbsp;</td>
			   </tr>	
			  </table>
			</div>														
			<div class="form-group">
			  <table>
			   <tr>
				  <td><label class="control-label-kh">២.១.៣	កម្មសិក្សាត្រូវបន្ត&nbsp;&nbsp;</label>    </td>
				  <td><input type="checkbox" name="is_pursue_study" <?php echo $is_pursue_study?"checked='checked'":""; ?>>&nbsp;&nbsp;</td>
			   </tr>	
			  </table>
			</div>				
			<div class="form-group">
			  <table>
			   <tr>
				  <td><label class="control-label-kh">២.១.៤	ក្រុមប្រឹក្សាអនុម័តឲ្យប្រកបពេញសិទ្ធិ &nbsp;&nbsp;</label>    </td>
				  <td><input type="checkbox" name="is_fulltime" id="is_fulltime" <?php echo $date_of_fulltime?"checked='checked'":"";?>>&nbsp;&nbsp;</td>
				  <td><label class="control-label-kh">សេចក្តីសម្រេច                                      &nbsp;&nbsp;</label>    </td>
				  <td><input type="text" class="form-control" name="date_of_fulltime" id="date_of_fulltime" data-inputmask="'mask': '99/99/9999'" value="<?php echo $date_of_fulltime;?>">&nbsp;&nbsp;</td>
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
				  <td><input type="checkbox" name="righteousness" id="righteousness" <?php echo $date_of_righteousness?"checked='checked'":""; ?>>&nbsp;&nbsp;</td>
				  <td><label class="control-label-kh">ចាប់ផ្តើមថ្ងៃ ខែ ឆ្នាំ&nbsp;&nbsp;</label>    </td>
				  <td><input type="text" class="form-control" name="date_of_righteousness" id="date_of_righteousness" data-inputmask="'mask': '99/99/9999'" value="<?php echo $date_of_righteousness; ?>">&nbsp;&nbsp;</td>
			   </tr>	
			  </table>
			</div>								
			<div class="form-group">
			  <table>
			   <tr>
				  <td><label class="control-label-kh">២.២.២	លើកលែងបំពេញសុក្រិត្យការ &nbsp;&nbsp;</label>    </td>
				  <td><input type="checkbox" name="without_righteousness" id="without_righteousness" <?php echo $date_of_without_righteousness?"checked='checked'":""; ?>>&nbsp;&nbsp;</td>
				  <td><label class="control-label-kh">សេចក្តីសម្រេច&nbsp;&nbsp;</label>    </td>
				  <td><input type="text" class="form-control" name="date_of_without_righteousness" id="date_of_without_righteousness" data-inputmask="'mask': '99/99/9999'" value="<?php echo $date_of_without_righteousness;?>">&nbsp;&nbsp;</td>
				  <td>លេខ .... (ចុះលេខ និង ថ្ងៃខែឆ្នាំ)</td>
			   </tr>	
			  </table>
			</div>								
			<div class="form-group">
			  <table>
			   <tr>
				  <td><label class="control-label-kh">២.២.៣	កម្មសិក្សា&nbsp;&nbsp;</label>    </td>
				  <td><input type="checkbox" name="prob_righteousness" id="prob_righteousness" <?php echo $date_of_prob_righteousness?"checked='checked'":""; ?>>&nbsp;&nbsp;</td>
				  <td><label class="control-label-kh">ថ្ងៃ ខែ ឆ្នាំ&nbsp;&nbsp;</label>    </td>
				  <td><input type="text" class="form-control" name="date_of_prob_righteousness" id="date_of_prob_righteousness" data-inputmask="'mask': '99/99/9999'" value="<?php echo $date_of_prob_righteousness; ?>">&nbsp;&nbsp;</td>
			   </tr>	
			  </table>
			</div>								
			<div class="form-group">
			  <table>
			   <tr>
				  <td><label class="control-label-kh">២.២.៥	មិនបាច់ធ្វើកម្មសិក្សា&nbsp;&nbsp;</label>    </td>
				  <td><input type="checkbox" name="is_no_prob_righteousness" id="is_no_prob_righteousness" <?php echo $no_prob_righteousness?"checked='checked'":""; ?>>&nbsp;&nbsp;</td>
				  <td><label class="control-label-kh">សេចក្តីសម្រេចលេខ&nbsp;&nbsp;</label>    </td>
				  <td><input type="text" name="no_prob_righteousness " id="no_prob_righteousness " class="form-control" value="<?php echo $no_prob_righteousness;?>" >&nbsp;&nbsp;</td>
				  <td>(ចុះលេខ និង ថ្ងៃខែឆ្នាំ)</td> 
			   </tr>	
			  </table>
			</div>	
			<div class="form-group">
			  <table>
			   <tr>
				  <td><label class="control-label-kh">២.២.៦	ក្រុមប្រឹក្សាអនុម័តឲ្យប្រកបពេញសិទ្ធិ  &nbsp;&nbsp;</label></td>
				  <td><input type="checkbox" name="is_fulltime_approval" id="is_fulltime_approval" <?php echo $fulltime_approval?"checked='checked'":"" ?>>&nbsp;&nbsp;</td>
				  <td><label class="control-label-kh">&nbsp;&nbsp;សេចក្តីសម្រេច លេខ&nbsp;&nbsp;</label></td>
				  <td><input type="text" class="form-control" name="fulltime_approval" id="fulltime_approval" value="<?php echo $fulltime_approval;?>" >&nbsp;&nbsp;</td>
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
				  <td><input type="text" class="form-control" name="firm_name" value="<?php echo $firm_name;?>">&nbsp;&nbsp;
				   </td>
				   <td><label class="control-label-kh">&nbsp;&nbsp;លិខិតអនុញ្ញាតលេខ &nbsp;&nbsp;</label></td> 
				  <td><input type="text" class="form-control" name="authorisation_number" value="<?php echo $authorisation_number;?>">&nbsp;&nbsp;
				   </td>
			   </tr>	
			  </table>
			</div>									
			<div class="form-group">
			  <table>
			   <tr>
				  <td><label class="control-label-kh">២.៣.២	លិខិតអនុញ្ញាតឲ្យប្រកបលេខ&nbsp;&nbsp;</label></td>
				  <td><input type="text" class="form-control" name="permission_number" value="<?php echo $permission_number;?>">&nbsp;&nbsp;
				   </td>
				   <td><label class="control-label-kh">&nbsp;&nbsp;អស់សុពលភាពត្រឹមថ្ងៃ ខែ ឆ្នាំ&nbsp;&nbsp;</label></td> 
				  <td><input type="text" class="form-control" name="firm_validity" data-inputmask="'mask': '99/99/9999'" value="<?php echo $firm_validity;?>">&nbsp;&nbsp;
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
				  <td><input type="checkbox" name="is_out_bar_validity" id="is_out_bar_validity"<?php echo $out_bar_validity?"checked='checked'":""; ?>> &nbsp;&nbsp;
				   </td>
				   <td><label class="control-label-kh">&nbsp;&nbsp;អស់សុពលភាពត្រឹមថ្ងៃ ខែ ឆ្នាំ&nbsp;&nbsp;</label></td> 
				  <td><input type="text" class="form-control" name="out_bar_validity" id="out_bar_validity" data-inputmask="'mask': '99/99/9999'" value="<?php echo $out_bar_validity; ?>">&nbsp;&nbsp;
				   </td>
			   </tr>	
			  </table>
			</div>									
			<div class="form-group">
			  <table>
			   <tr>
				  <td><label class="control-label-kh">២.៤.២	តាមសេចក្តីសម្រេចដាក់ឲ្យនៅក្រៅបញ្ជី &nbsp;&nbsp;</label></td>
				  <td><input type="checkbox" name="is_out_bar_decision" id="is_out_bar_decision" <?php echo $out_bar_decision?"checked='checked'":""; ?>>&nbsp;&nbsp;
				   </td>
				   <td><label class="control-label-kh">&nbsp;&nbsp;សេចក្តីសម្រេច លេខឆ្នាំ&nbsp;&nbsp;</label></td> 
				  <td><input type="text" class="form-control" name="out_bar_decision" id="out_bar_decision" value="<?php echo $out_bar_decision; ?>">&nbsp;&nbsp;
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
				  <td><input type="text" class="form-control" name="final_statement" value="<?php echo $prohibition_statement; ?>">&nbsp;&nbsp;
				   </td>
			   </tr>	
			  </table>
			</div>	

      </div>
<!-- End of Tab 22-->
      <div id="tab_content33" role="tabpanel" class="tab-pane fade" aria-labelledby="profile-tab">
        <br />
			<?php
			foreach($education as $edu){
				$i=1;
			?>
				<div class="form-group">
					<table>
						<tr>
						<td><label class="control-label-kh">លើកទី <?php echo $i;?>&emsp;</label></td>
						<td><label class="control-label-kh">ចំនួនម៉ោងសិក្សា៖&emsp;</label></td>
						<td><input type="text" name="number_of_hours" class="form-control" value="<?php echo $edu->number_of_hours; ?>">&nbsp;&nbsp;
						</td>
						</tr>	
					</table>
	   		</div>	
			<?php
				$i++;}
			?>
      </div> 
<!-- End of Tab 33-->
        <div id="tab_content44" role="tabpanel" class="tab-pane fade" aria-labelledby="profile-tab">
        <p>This is tab 4</p>
		    </div> <!-- end content tab4-->
		      <button type="button" id="update" data-dismiss="modal" class="btn btn-success btn-lg pull-right"><label>Update</label></button>
	   </div>
<!-- End of Tab 44-->
    </div>
	</form>	
</div>
<script src="<?php echo base_url();?>public/vendors/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url();?>public/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>public/build/js/formwizard.js"></script>
<script src="<?php echo base_url();?>public/vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
<script src="<?php echo base_url();?>public/build/js/custom.min.js"></script>