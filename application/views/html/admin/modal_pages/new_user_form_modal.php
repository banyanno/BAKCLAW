<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

<div class="form-group">
  <label class="control-label-kh col-md-5 col-sm-5 col-xs-8" for="username">ឈ្មោះសំគាល់ (Username) <span class="required">*</span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
	<input type="text" id="username" name="username" required="required" class="form-control">
  </div>
</div>

<div class="form-group">
  <label class="control-label-kh col-md-5 col-sm-5 col-xs-8" for="passwd">លេខសំងាត់ (Password) <span class="required">*</span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
	<input type="text" id="passwd" name="passwd" required="required" class="form-control">
  </div>
</div>

<div class="form-group">
  <label class="control-label-kh col-md-5 col-sm-5 col-xs-8" for="name">ឈ្មោះបុគ្កលិក (Staff Name)
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
	<input type="text" id="name" name="name" class="form-control">
  </div>
</div>

<div class="form-group">
  <label for="staff-id" class="control-label-kh col-md-5 col-sm-5 col-xs-8">លេខសំគាល់ខ្លួន (Staff ID) *</label>
  <div class="col-md-6 col-sm-6 col-xs-12">
	<input id="staff-id" name="staff-id" required="required" class="form-control" type="text" name="staff-id">
  </div>
</div>

<div class="form-group">
  <label class="control-label-kh col-md-5 col-sm-5 col-xs-8">ថ្ងៃ ខែ ឆ្នាំកំណើត (Date Of Birth)
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
	<input type="text" id="birthday" name="birthday" class="form-control" data-inputmask="'mask': '99/99/9999'" placeholder="DD/MM/YYYY">
  </div>
</div>

<div class="form-group">
  <label class="control-label-kh col-md-5 col-sm-5 col-xs-8">Department<span class="required">*</span>
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
  <div class="col-md-6 col-md-offset-3">
	<button class="btn btn-primary" type="button">Cancel</button>
				<button class="btn btn-primary" type="reset">Reset</button>
	<button type="button" id="create_user" class="btn btn-success">Submit</button>
  </div>
</div>

</form>