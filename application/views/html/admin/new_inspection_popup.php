<div class="" role="tabpanel" data-example-id="togglable-tabs">
    <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
        <li role="presentation" class="active">
			<a href="#tab_content1" id="tab1" role="home-tab" data-toggle="tab" aria-expanded="true">
			<span style="font-family: Khmer OS Siemreap, Kh Battambang; font-size: 16px; font-weight: bold">អត្តសញ្ញាណមេធាវី
			</span></a>
        </li>
        <li role="presentation" class="">
			<a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">
			<span style="font-family: Khmer OS Siemreap, Kh Battambang; font-size: 16px; font-weight: bold">លក្ខណវិនិច្ឆ័យខាងកម្រិតវិជ្ជា
			</span></a>
        </li>
        <li role="presentation" class="">
			<a href="#tab_content3" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">
			<span style="font-family: Khmer OS Siemreap, Kh Battambang; font-size: 16px; font-weight: bold">លក្ខណវិនិច្ឆ័យខាងបទពិសោធ
			</span></a>
        </li>
        <li role="presentation" class="">
			<a href="#tab_content4" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">
			<span style="font-family: Khmer OS Siemreap, Kh Battambang; font-size: 16px; font-weight: bold">ការជឿនលឿន
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
			  <table>
			   <tr>
			   	  <td><label class="control-label-kh">បរិញ្ញាប័ត្រច្បាប់&emsp;</label></td>
				  <td><input type="checkbox" name="end_ba" class="flat">&emsp;</td>
				  <td><label class="control-label-kh">ចេញដោយសាកលវិទ្យាល័យ&emsp;</label></td>
				  <td><input placeholder="សូមវាយបញ្ចូល" class="form-control" />&emsp;</td>
				  <td>&emsp;<label class="control-label-kh">ថ្ងៃទី ខែ ឆ្នាំ&emsp;</label>    </td>
				  <td><input type="text" class="form-control" data-inputmask="'mask': '99/99/9999'" placeholder="DD/MM/YYYY">&nbsp;&nbsp;</td>
			   </tr>          	
			  </table>
			</div>

			<div class="form-group">
			  <table>
			   <tr>
			   	  <td><label class="control-label-kh">អនុបណ្ឌិតច្បាប់&emsp;</label></td>
				  <td><input type="checkbox" name="end_ma" class="flat">&emsp;</td>
				  <td><label class="control-label-kh">ចេញដោយសាកលវិទ្យាល័យ&emsp;</label></td>
				  <td><input placeholder="សូមវាយបញ្ចូល" class="form-control" />&emsp;</td>
				  <td>&emsp;<label class="control-label-kh">ថ្ងៃទី ខែ ឆ្នាំ&emsp;</label>    </td>
				  <td><input type="text" class="form-control" data-inputmask="'mask': '99/99/9999'" placeholder="DD/MM/YYYY">&nbsp;&nbsp;</td>
			   </tr>          	
			  </table>
			</div>

			<div class="form-group">
			  <table>
			   <tr>
			   	  <td><label class="control-label-kh">បណ្ឌិតច្បាប់&emsp;</label></td>
				  <td><input type="checkbox" name="end_phd" class="flat">&emsp;</td>
				  <td><label class="control-label-kh">ចេញដោយសាកលវិទ្យាល័យ&emsp;</label></td>
				  <td><input required="required" placeholder="សូមវាយបញ្ចូល" class="form-control" />&emsp;</td>
				  <td>&emsp;<label class="control-label-kh">ថ្ងៃទី ខែ ឆ្នាំ&emsp;</label>    </td>
				  <td><input type="text" class="form-control" data-inputmask="'mask': '99/99/9999'" placeholder="DD/MM/YYYY">&nbsp;&nbsp;</td>
			   </tr>          	
			  </table>
			</div>


        </div>
        <div id="tab_content3" role="tabpanel" class="tab-pane fade" aria-labelledby="profile-tab">
		<br />
			<div class="form-group">
			  <table>
			   <tr>
			   	  <td><label class="control-label-kh">ស្ថាប័ន&emsp;</label></td>
				  <td><input placeholder="សូមវាយបញ្ចូល" class="form-control" />&emsp;</td>
			   </tr>          	
			  </table>
			</div>
			<div class="form-group">
			  <table>
			   <tr>
			   	  <td><label class="control-label-kh">រៀបរាប់សង្ខេបពីបទពិសោធ&emsp;</label></td>
				  <td><input placeholder="សូមវាយបញ្ចូល" class="form-control" />&emsp;</td>
			   </tr>          	
			  </table>
			</div>
		<!-- -->			   
	   
        </div> <!-- End Tab3-->
        <div id="tab_content4" role="tabpanel" class="tab-pane fade" aria-labelledby="profile-tab">
		<br />

			<div class="form-group">
			  <table>
			   <tr>
			   	  <td><label class="control-label-kh">ថ្ងៃដាក់ពាក្យ&emsp;</label></td>
				  <td><input data-inputmask="'mask': '99/99/9999'" class="form-control" />&emsp;</td>
			   </tr>          	
			  </table>
			</div>

			<div class="form-group">
			  <table>
			   <tr>
			   	  <td><label class="control-label-kh">ចំណាត់ការ    ចាត់តាំងអធិការកិច្ចរួច&emsp;</label></td>
				  <td><input type="checkbox" name="end_phd" class="flat">&emsp;</td>
				  <td><label class="control-label-kh">មិនទាន់ចាត់តាំង  &emsp;</label></td>
				  <td><input type="checkbox" name="end_phd" class="flat">&emsp;</td>
			   </tr>          	
			  </table>
			</div>

			<div class="form-group">
			  <table>
			   <tr>
			   	  <td><label class="control-label-kh">របាយការណ៍អធិការកិច្ច&emsp;</label></td>
				  <td><input placeholder="សូមវាយបញ្ចូល" class="form-control" />&emsp;</td>
			  </tr>          	
			  </table>
			</div>

			<div class="form-group">
			  <table>
			   <tr>
			   	  <td><label class="control-label-kh">របាយការណ៍សម្ភាសន៍&emsp;</label></td>
				  <td><input placeholder="សូមវាយបញ្ចូល" class="form-control" />&emsp;</td>
			  </tr>          	
			  </table>
			</div>
	
			<div class="form-group">
			  <table>
			   <tr>
			   	  <td><label class="control-label-kh">ដាក់ជូនក្រុមប្រឹក្សាសម្រេច  ច្រានចោល &emsp;</label></td>
				  <td><input type="checkbox" name="end_phd" class="flat">&emsp;</td>
				  <td><label class="control-label-kh">សម្រេចឲ្យចូលប្រកប សេចក្តីសម្រេច &emsp;</label></td>
				  <td><input placeholder="សូមវាយបញ្ចូល" class="form-control" />&emsp;</td>
			  </tr>          	
			  </table>
			</div>

		</div> <!-- end content tab4-->
		<button type="button" id="go" class="btn btn-success btn-lg pull-right"><label>Submit</label></button>
	   </div>
	</form>	
</div>