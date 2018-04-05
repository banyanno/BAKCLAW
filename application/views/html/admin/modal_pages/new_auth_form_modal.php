<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
<div class="form-group">
  <label class="control-label-kh col-md-5 col-sm-5 col-xs-8">ជ្រើសរើសឈ្មោះសំគាល់<span class="required">*</span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
	<select class="form-control" name="user">
	<?php
	  foreach($user_list as $user)
	  {
		  echo "<option value='".$user->USER_ID."'>".$user->USER_NAME."</option>";
	  }
	?>
	</select>
  </div>
</div>

<div class="form-group">
  <label class="control-label-kh col-md-5 col-sm-5 col-xs-8">អោយសិទ្ធជា<span class="required">*</span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
	<select class="form-control" name="perm">
	<?php
	  foreach($role_list as $role)
	  {
		  echo "<option value='".$role->PERMIS_ID."'>".$role->PERMIS_LABEL."</option>";
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
	<button type="button" id="authorise_user" class="btn btn-success">Submit</button>
  </div>
</div>

</form>