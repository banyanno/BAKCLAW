                 <!-- Smart Wizard -->		
			<div class="container">
				<div class="stepwizard">
					<div class="stepwizard-row setup-panel">
						<div class="stepwizard-step">
							<a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
							<p style="font-family: Khmer OS Siemreap, Kh Battambang; font-size: 16px">អត្តសញ្ញាណមេធាវី</p>
						</div>
						<div class="stepwizard-step">
							<a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
							<p style="font-family: Khmer OS Siemreap, Kh Battambang; font-size: 16px">ការបំពេញលក្ខខណ្ឌប្រកបវិជ្ជាជីវៈ</p>
						</div>
						<div class="stepwizard-step">
							<a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
							<p style="font-family: Khmer OS Siemreap, Kh Battambang; font-size: 16px">ការអប់រំបន្ត</p>
						</div>
						<div class="stepwizard-step">
							<a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
							<p style="font-family: Khmer OS Siemreap, Kh Battambang; font-size: 16px">វិធានការវិន័យ</p>
						</div>
					</div>
				</div>
				<form name="form" id="form">
					<div class="row setup-content" id="step-1">
						<div class="col-xs-12">
							<div class="col-md-12">
								<h3 style="font-family: Khmer OS Siemreap, Kh Battambang; font-weight: bold"> ១. អត្តសញ្ញាណមេធាវី</h3>
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
								<button class="btn btn-primary nextBtn btn-lg pull-right" type="button" ><label class="control-label-kh">បន្ទាប់</label></button>
							</div>
						</div>
					</div>
					<div class="row setup-content" id="step-2">
						<div class="col-xs-12">
							<div class="col-md-12">
								<h3 style="font-family: Khmer OS Siemreap, Kh Battambang; font-weight: bold"> ២. ការបំពេញលក្ខខណ្ឌប្រកបវិជ្ជាជីវៈ</h3>
								<br />
								<div class="form-group">
									<label class="control-label-kh"><b>២.១ វិញ្ញាបនប័ត្រសម្បទាវិជ្ជាជីវៈមេធាវី</b></label>
								</div>
									<div class="form-group">
									  <table>
									   <tr>
										  <td><label class="control-label-kh">២.១.១ បញ្ចប់ &nbsp;&nbsp;</label>    </td>
										  <td><input type="checkbox" name="end_cert" class="flat">&nbsp;&nbsp;</td>
										  <td><label class="control-label-kh">ថ្ងៃទី ខែ ឆ្នាំ&nbsp;&nbsp;</label>    </td>
										  <td><input type="text" class="form-control" name="date_of_completion" required="required" data-inputmask="'mask': '99/99/9999'" placeholder="DD/MM/YYYY">&nbsp;&nbsp;</td>
									   </tr>	
									  </table>
									 </div>							
									<div class="form-group">
									  <table>
									   <tr>
										  <td><label class="control-label-kh">២.១.២	ចប់កម្មសិក្សា  &nbsp;&nbsp;</label>    </td>
										  <td><input type="checkbox" name="end_prob" class="flat">&nbsp;&nbsp;</td>
										  <td><label class="control-label-kh">ថ្ងៃទី ខែ ឆ្នាំ&nbsp;&nbsp;</label>    </td>
										  <td><input type="text" name="date_of_prob" class="form-control" required="required" data-inputmask="'mask': '99/99/9999'" placeholder="DD/MM/YYYY">&nbsp;&nbsp;</td>
									   </tr>	
									  </table>
									 </div>																
									<div class="form-group">
									  <table>
									   <tr>
										  <td><label class="control-label-kh">២.១.៣	កម្មសិក្សាត្រូវបន្ត&nbsp;&nbsp;</label>    </td>
										  <td><input type="checkbox" name="pursue_study" class="flat">&nbsp;&nbsp;</td>
									   </tr>	
									  </table>
									 </div>		
								
									<div class="form-group">
									  <table>
									   <tr>
										  <td><label class="control-label-kh">២.១.៤	ក្រុមប្រឹក្សាអនុម័តឲ្យប្រកបពេញសិទ្ធិ &nbsp;&nbsp;</label>    </td>
										  <td><input type="checkbox" name="is_fulltime" class="flat">&nbsp;&nbsp;</td>
										  <td><label class="control-label-kh">សេចក្តីសម្រេច                                      &nbsp;&nbsp;</label>    </td>
										  <td><input type="text" class="form-control" name="date_of_fulltme" required="required" data-inputmask="'mask': '99/99/9999'" placeholder="DD/MM/YYYY">&nbsp;&nbsp;</td>
										  <td>(ចុះលេខ និង ថ្ងៃខែឆ្នាំ)</td> 
									   </tr>	
									  </table>
									 </div>
								<br />
								<div class="form-group">
									<label class="control-label-kh"><b>២.២	លក្ខខណ្ឌប្រកបតាមមាត្រា ៣២</b></label>
								</div>
									<div class="form-group">
									  <table>
									   <tr>
										  <td><label class="control-label-kh">២.២.១ ត្រូវបំពេញសុក្រិត្យការ &nbsp;&nbsp;</label>    </td>
										  <td><input type="checkbox" class="flat">&nbsp;&nbsp;</td>
										  <td><label class="control-label-kh">ចាប់ផ្តើមថ្ងៃ ខែ ឆ្នាំ&nbsp;&nbsp;</label>    </td>
										  <td><input type="text" class="form-control" required="required" data-inputmask="'mask': '99/99/9999'" placeholder="DD/MM/YYYY">&nbsp;&nbsp;</td>
									   </tr>	
									  </table>
									 </div>								
									<div class="form-group">
									  <table>
									   <tr>
										  <td><label class="control-label-kh">២.២.២	លើកលែងបំពេញសុក្រិត្យការ &nbsp;&nbsp;</label>    </td>
										  <td><input type="checkbox" class="flat">&nbsp;&nbsp;</td>
										  <td><label class="control-label-kh">សេចក្តីសម្រេច&nbsp;&nbsp;</label>    </td>
										  <td><input type="text" class="form-control" required="required" data-inputmask="'mask': '99/99/9999'" placeholder="DD/MM/YYYY">&nbsp;&nbsp;</td>
										  <td>លេខ .... (ចុះលេខ និង ថ្ងៃខែឆ្នាំ)</td>
									   </tr>	
									  </table>
									 </div>								
									<div class="form-group">
									  <table>
									   <tr>
										  <td><label class="control-label-kh">២.២.៣	កម្មសិក្សា&nbsp;&nbsp;</label>    </td>
										  <td><input type="checkbox" class="flat">&nbsp;&nbsp;</td>
										  <td><label class="control-label-kh">ថ្ងៃ ខែ ឆ្នាំ&nbsp;&nbsp;</label>    </td>
										  <td><input type="text" class="form-control" required="required" data-inputmask="'mask': '99/99/9999'" placeholder="DD/MM/YYYY">&nbsp;&nbsp;</td>
									   </tr>	
									  </table>
									 </div>								
									<div class="form-group">
									  <table>
									   <tr>
										  <td><label class="control-label-kh">២.២.៥	មិនបាច់ធ្វើកម្មសិក្សា&nbsp;&nbsp;</label>    </td>
										  <td><input type="checkbox" class="flat">&nbsp;&nbsp;</td>
										  <td><label class="control-label-kh">សេចក្តីសម្រេចលេខ&nbsp;&nbsp;</label>    </td>
										  <td><input type="text" class="form-control" required="required">&nbsp;&nbsp;</td>
										  <td>(ចុះលេខ និង ថ្ងៃខែឆ្នាំ)</td> 
									   </tr>	
									  </table>
									 </div>	
									<div class="form-group">
									  <table>
									   <tr>
										  <td><label class="control-label-kh">២.២.៦	ក្រុមប្រឹក្សាអនុម័តឲ្យប្រកបពេញសិទ្ធិ  &nbsp;&nbsp;</label></td>
										  <td><input type="checkbox" class="flat">&nbsp;&nbsp;</td>
										  <td><label class="control-label-kh">&nbsp;&nbsp;សេចក្តីសម្រេច លេខ&nbsp;&nbsp;</label></td>
										  <td><input type="text" class="form-control" required="required" >&nbsp;&nbsp;</td>
										  <td>(ចុះលេខ និង ថ្ងៃខែឆ្នាំ)</td> 
									   </tr>	
									  </table>
									 </div>							
								<br />
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
								<br />
								<div class="form-group">
									<label class="control-label-kh"><b>២.៤	ការនៅក្រៅបញ្ជីគណៈមេធាវី</b></label>
								</div>								
									<div class="form-group">
									  <table>
									   <tr>
										  <td><label class="control-label-kh">២.៤.១	តាមសេចក្តីស្នើសុំ &nbsp;&nbsp;</label></td>
										  <td><input type="checkbox" name="follow_proposal" class="flat">&nbsp;&nbsp;
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
										  <td><input type="checkbox" name="is_out" class="flat">&nbsp;&nbsp;
										   </td>
										   <td><label class="control-label-kh">&nbsp;&nbsp;សេចក្តីសម្រេច លេខឆ្នាំ&nbsp;&nbsp;</label></td> 
										  <td><input type="text" class="form-control" name="date_of_verdict" required="required">&nbsp;&nbsp;
										   </td>
										  <td>(ចុះលេខ និង ថ្ងៃខែឆ្នាំ)</td> 
									   </tr>	
									  </table>
									 </div>									
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
								<button class="btn btn-primary nextBtn btn-lg pull-right" type="button" ><label class="control-label-kh">បន្ទាប់</label></button>
							</div>
						</div>
					</div>
					<div class="row setup-content" id="step-3">
						<div class="col-xs-12">
							<div class="col-md-12">
								<h3 style="font-family: Khmer OS Siemreap, Kh Battambang; font-weight: bold">៣.	ការអប់រំបន្ត</h3>
									<div class="form-group">
									  <table>
									   <tr>
										  <td><label class="control-label-kh">៣.១ លើកទី ១&nbsp;&nbsp;</label></td>
										  <td><input type="checkbox" name="attend_class" class="flat">&nbsp;&nbsp;</td>
										  <td><label class="control-label-kh">ចំនួនម៉ោងសិក្សា៖&nbsp;&nbsp;</label></td>
										  <td><input type="text" name="class_hours" class="form-control" required="required">&nbsp;&nbsp;
										  </td>
									   </tr>	
									  </table>
									 </div>
								
									<div class="form-group">
									  <table>
									   <tr>
										  <td><label class="control-label-kh">៣.២ សរុបម៉ោងអប់រំបន្តមកទល់បច្ចុប្បន្ន&nbsp;&nbsp;</label></td>
										  <td><input type="text" class="form-control" required="required">&nbsp;&nbsp;
										  </td>
									   </tr>	
									  </table>
									 </div>									
								<button class="btn btn-primary nextBtn btn-lg pull-right" type="button" ><label class="control-label-kh">បន្ទាប់</label></button>
							</div>
						</div>
					</div>
		
					<div class="row setup-content" id="step-4">
						<div class="col-xs-12">
							<div class="col-md-12">
								<h3 style="font-family: Khmer OS Siemreap, Kh Battambang; font-weight: bold">៤.	វិធានការវិន័យ</h3>
									<div class="form-group after-add-more">
									  <table>
									   <tr>
										  <td><label class="control-label-kh">៤.១ បណ្តឹង&nbsp;&nbsp;</label></td>
										  <td><input type="checkbox" name="is_sued" class="flat">&nbsp;&nbsp;</td>
										  <td><label class="control-label-kh">បរិយាយសង្ខេប&nbsp;&nbsp;</label></td>
										  <td><input type="text" class="form-control" name="compliant_des" required="required">&nbsp;&nbsp;
										  </td> 
									   </tr>
									   <tr>
										  <td><label class="control-label-kh">ចប់ដោយការផ្សះផ្សារបស់ប្រធាន&nbsp;&nbsp;</label></td>
										  <td><input type="checkbox" name="end_compliant_by_president" class="flat">&nbsp;&nbsp;</td>						   
									   </tr>	
									   <tr>
										  <td><label class="control-label-kh">ត្រូវធ្វើអធិការកិច្ច&nbsp;&nbsp;</label></td>
										  <td><input type="checkbox" name="to_be_inspected" class="flat">&nbsp;&nbsp;</td>
										  <td><label class="control-label-kh">របាយការណ៍អធិការកិច្ច&nbsp;&nbsp;</label></td>
										  <td><input type="button" value="Download របាយការណ៍">&nbsp;&nbsp;</td>
									   </tr>										  
									   <tr>
										  <td><label class="control-label-kh">សេចក្តីសម្រេចក្រុមប្រឹក្សា៖ ស្តីបន្ទោសផ្ទាល់មាត់ &nbsp;&nbsp;</label></td>
										  <td><input type="checkbox" name="end_by_oral_warning" class="flat">&nbsp;&nbsp;</td>
										  <td><label class="control-label-kh">ស្តីបន្ទោសជាលាយលក្ខណ៍អក្សរ&nbsp;&nbsp;</label></td>
										  <td><input type="checkbox" name="end_by_written_warning" class="flat">&nbsp;&nbsp;</td>
										  <td><label class="control-label-kh">លុបឈ្មោះចេញពីបញ្ជី&nbsp;&nbsp;</label></td> 
										  <td><input type="checkbox" name="end_by_termination" class="flat">&nbsp;&nbsp;</td>
									   </tr>										  
									  </table>
				
									 </div>
							
							 <div class="copy hide">
<!-- This is where the form elements are dynamically generated-->
								<hr />	
								<div class="form-group">		
									<table>
										<tr>
											<td><label class="control-label-kh">៤.១ បណ្តឹង&nbsp;&nbsp;</label></td>
											<td><input type="checkbox" name="is_sued" class="flat">&nbsp;&nbsp;</td>
											<td><label class="control-label-kh">បរិយាយសង្ខេប&nbsp;&nbsp;</label></td>
											<td><input type="text" class="form-control" name="compliant_des" required="required">&nbsp;&nbsp;
											</td> 
										</tr>
										<tr>
											<td><label class="control-label-kh">ចប់ដោយការផ្សះផ្សារបស់ប្រធាន&nbsp;&nbsp;</label></td>
											<td><input type="checkbox" name="end_compliant_by_president" class="flat">&nbsp;&nbsp;</td>						   
										</tr>	
										<tr>
											<td><label class="control-label-kh">ត្រូវធ្វើអធិការកិច្ច&nbsp;&nbsp;</label></td>
											<td><input type="checkbox" name="to_be_inspected" class="flat">&nbsp;&nbsp;</td>
											<td><label class="control-label-kh">របាយការណ៍អធិការកិច្ច&nbsp;&nbsp;</label></td>
											<td><input type="button" value="Download របាយការណ៍">&nbsp;&nbsp;</td>
										</tr>										  
										<tr>
											<td><label class="control-label-kh">សេចក្តីសម្រេចក្រុមប្រឹក្សា៖ ស្តីបន្ទោសផ្ទាល់មាត់ &nbsp;&nbsp;</label></td>
											<td><input type="checkbox" name="end_by_oral_warning" class="flat">&nbsp;&nbsp;</td>
											<td><label class="control-label-kh">ស្តីបន្ទោសជាលាយលក្ខណ៍អក្សរ&nbsp;&nbsp;</label></td>
							     			<td><input type="checkbox" name="end_by_written_warning" class="flat">&nbsp;&nbsp;</td>
											<td><label class="control-label-kh">លុបឈ្មោះចេញពីបញ្ជី&nbsp;&nbsp;</label></td> 
											<td><input type="checkbox" name="end_by_termination" class="flat">&nbsp;&nbsp;</td>
										</tr>										  
										</table>
										<br />
										<div class="input-group-btn"> 

												<button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
								  
										</div>										
									</div>
		
<!-- -->
							 </div>

							<div class="input-group-btn"> 

									<button class="btn btn-success add-more" type="button"><i class="glyphicon glyphicon-plus"></i> Add</button>
								
							</div>	 	
								<button type="button" id="go" class="btn btn-success btn-lg pull-right"><label>Submit</label></button> 							
							
							</div>
						</div>
					</div>
				</form>	
				</div>					  
                    <!-- Tabs -->
