  <table id="datatable" class="table table-striped table-bordered">
            <thead>
              <tr>      					 
                <th><label class="control-label-kh"><b>ល.រ</b></label></th>
                <th><label class="control-label-kh"><b>អត្តលេខ</b></label></th>
                <th><label class="control-label-kh"><b>ឈ្មោះ (ជាខ្មែរ)</b></label></th>
                <th><label class="control-label-kh"><b>ឈ្មោះ (ជាឡាតាំង)</b></label></th>
                <th><label class="control-label-kh"><b>ថ្អៃ ខែ ឆ្នាំកំណើត</b> </label></th>
                <th><label class="control-label-kh"><b>ថ្ងៃកែប្រែ</b></label></th>
                <th><label class="control-label-kh"><b>ចូលមើល</b></label></th>
                <th><label class="control-label-kh"><b>កែប្រែ</b></label></th>	
              </tr>
            </thead>
            <tbody class='control-label-kh'>
            <?php
          //  print_r($lawyers);
            $i=1;
            foreach($lawyers as $lawyer){
              echo "<tr><td>".$i."</td><td>";
              echo $lawyer->lawyer_code."</td><td>";
              echo $lawyer->lawyer_name_kh."</td><td>";
              echo $lawyer->lawyer_name_en."</td><td>";
              echo $lawyer->lawyer_dob."</td><td>";
              echo $lawyer->modidate."</td>";
              echo "<td><a class='btn btn-app1' href='view_profile/".$lawyer->id."'>";
              echo "<i class='glyphicon glyphicon-eye-open'></i>";
              echo "<label>ចូលមើល</label></a></td>";
              echo "<td><a class='btn btn-app1' href='edit_profile/".$lawyer->id."'><i class='glyphicon glyphicon-edit'></i>";
              echo "<label>កែប្រែ</label></a></td></tr>";
              $i++;
            }
            ?> 						  
            </tbody>
          </table>	
  <!-- jQuery -->
    <script src="<?php echo base_url();?>public/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url();?>public/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>public/vendors/datatables.net/js/jquery.dataTables.js"></script>
    <script src="<?php echo base_url();?>public/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>public/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url();?>public/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>public/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?php echo base_url();?>public/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url();?>public/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url();?>public/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?php echo base_url();?>public/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="<?php echo base_url();?>public/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url();?>public/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="<?php echo base_url();?>public/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="<?php echo base_url();?>public/build/js/custom.min.js"></script>