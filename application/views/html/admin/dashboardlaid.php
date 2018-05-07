
<div class="right_col" role="main">
<div class="x_content" >
    <div class="navbar navbar-default">
    
        <div class="container-fluid">
            <!-- Collect the nav links, forms, and other content for toggling -->
            <button type="button" id="btnNewLAID" class="btn btn-info navbar-btn" onclick="ShowCaseRegis()">បង្កើតសំណុំរឿងថ្មី</button>
            <button type="button" class="btn btn-primary navbar-btn" onclick="RefreshClientList()">បង្ហាញទិន្នន័យ</button>
        </div>
    </div>
</div>
        <br/>
        <br/>
        <br/>     

    <!-- Top files -->
    <div class="row tile_count">
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
         <span class="count_top​​​ red"><i class="fa fa-user"></i> រឿងក្តីសរុប</span>
        <div class="count green"><?php echo $TotalCase ?></div>
        <span class="count_bottom">- ព្រហ្មទណ្ឌ:<i class="green"> <?php echo $TotalPenalties ?> </i></span><br>
        <span class="count_bottom">- រដ្ឋប្បវេណី:<i class="green"> <?php echo $TotalCivilParties ?> </i></span><br>
        <span class="count_bottom">- ពាណិជ្ជកម្ម:<i class="green"> <?php echo $TotalBusiness ?> </i></span><br>
        <span class="count_bottom">- ផ្សេងៗ:<i class="green"> <?php echo $TotalOther ?> </i></span>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-clock-o"></i> កូនក្តីសរុប</span>
        <div class="count">123.50</div>
       <!-- <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>-->
      </div>
      <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">                                
        <span class="count_top​​​ red"><i class="fa fa-user"></i> ចំនួនស្រី</span>
        <div class="count green">2,500</div>
      <!--  <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span> -->
      </div>
      <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-user"></i> ចំនួនប្រុស</span>
        <div class="count">4,567</div>
        <!--<span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>-->
      </div>
      <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-user"></i> អនីតិជន</span>
        <div class="count">2,315</div>
      <!--  <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>-->
      </div>
      <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-user"></i> រឿងក្តីអនីតិជន</span>
        <div class="count">7,325</div>
       <!-- <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>-->
      </div>
      </div><!-- End of top pay content -->
    
      <div class="row" >
          <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-default"> <!-- Begining Panel -->
                        <div class="panel-heading">សំណុំរឿង LAD</div>
                        <div class="panel-body">  	    
                              
                                        <table id="maintableLAID"  class="table table-striped jambo_table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th><label class="control-label-kh">លេខសំណុំរឿង</label></th>
                                                    <th><label class="control-label-kh">ចុះថ្ងៃទី</label></th>
                                                    <th><label class="control-label-kh">ប្រភេទសំណុំរឿង</label></th>
                                                    <th><label class="control-label-kh">បទចោទប្រកាន់</label></th>
                                                    <th><label class="control-label-kh">បញ្ជូនមកដោយ</label></th>
                                                    <th><label class="control-label-kh">កំណត់សំគាស់</label></th>
                                                    <th><label class="control-label-kh">ពត័មានលម្អិត</label></th>                                                                                                
                                                </tr>
                                            </thead>
                                      
                                        </table>
                               
                          </div>
                    </div><!-- Ending Panel -->
          </div>
          
          <div class="row"><!-- Start panel កូនក្តី​ និង  -->
          <div class="col-xs-6">
                <div class="panel panel-info"> <!-- Begining Panel -->
                        <div class="panel-heading">កូនក្តី</div>
                        <div class="panel-body">
                                        <table id="tableclientadult" class="table jambo_table table-bordered">
                                          <thead>
                                            <tr>
                                              <th>#</th>
                                              <th>ឈ្មោះ</th>
                                              <th>ភេទ</th>
                                              <th>អាយុ</th>
                                              <td>នីតិជន/អនីតិជន</td>
                                              <td>សំគាល់</td>
                                              <td>action</td>
                                            </tr>
                                          </thead>
                                          
                                        </table>
                                
                          </div>
                </div><!-- Ending Panel -->
            </div>
          <div class="col-xs-6">
                    <div class="panel panel-info"> <!-- Begining Panel -->
                        <div class="panel-heading">ភាគីម្ខាងទៀត/ដើមបណ្តឹងរដ្ឋប្បវេណី</div>
                        <div class="panel-body">
                                    <table id="tableclientminor" class="table jambo_table table-bordered table-striped">
                                      <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>ឈ្មោះ</th>
                                            <th>ភេទ</th>
                                            <th>អាយុ</th>
                                            <th>នីតិជន/អនីតិជន</th>
                                            <td>សំគាល់</td>
                                            <td>action</td>
                                        </tr>
                                      </thead>
                                     </table>
                          </div>
                    </div><!-- Ending Panel -->
                    </div>
          </div>
          </div> <!-- End of panel កូនក្តី -->
         

            <div class="x_content"> <!-- Start Tab តំណាក់កាលចូលរឿងក្តី -->
            <div class="" role="tabpanel" data-example-id="togglable-tabs">
            <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                <li role="presentation" class="active"><a href="#tab_receivebylawyer" id="court-tab" role="tab" data-toggle="tab" aria-expanded="true">ទទួលពី តុលាការ</a>
                </li>
                <li role="presentation" class=""><a href="#tab_content2" role="tab" id="client-tab" data-toggle="tab" aria-expanded="false">ទទួលពី កូនក្តី</a>
                </li>
                <li role="presentation" class=""><a href="#tab_content3" role="tab" id="police-tab" data-toggle="tab" aria-expanded="false">ទទួលពី នគបាល</a>
                </li>
                </li>
                <li role="presentation" class=""><a href="#tab_content4" role="tab" id="gendarmerie-tab" data-toggle="tab" aria-expanded="false">ទទួលពី អាវុធហត្ថ</a>
                </li>
                </li>
                <li role="presentation" class=""><a href="#tab_content5" role="tab" id="civil-authorities-tab" data-toggle="tab" aria-expanded="false">ទទួលពី អាជ្ញាធរស៊ីវិល</a>
                </li>
                </li>
                <li role="presentation" class=""><a href="#tab_content6" role="tab" id="ngo-tab" data-toggle="tab" aria-expanded="false">ទទួលពី អង្គការក្រៅរដ្ឋាភិបាល</a>
                </li>
                </li>
                <li role="presentation" class=""><a href="#tab_content7" role="tab" id="other-tab" data-toggle="tab" aria-expanded="false">ទទួលពី ផ្សេងៗ</a>
                </li>
            </ul>
            <div id="myTabContent" class="tab-content">
               <div role="tabpanel" class="tab-pane fade active in" id="tab_receivebylawyer" aria-labelledby="court-tab"> <!-- Start Body tab lawyer-->
                <div class="col-sm-6"> <!-- Start  Panel lawyer -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-info">
                            <div class="panel-heading">តុលាការ ប្រាក់ឌបត្ថម្ភមេធាវី និង លិខិតបេសកកម្ម</div>
                                <div class="panel-body"> 
                                        <div class="x_content"> <!-- start x content -->
                                                
                            
                                        </div> <!-- End x content -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End  Panel lawyer -->

                <div class="col-sm-6"> <!-- Start  Panel មេធាវីទទួលសំណុំរឿង -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-info">
                            <div class="panel-heading">មេធាវីទទួលសំណុំរឿង</div>
                                <div class="panel-body"> 
                                        <div class="x_content"> <!-- start x content -->
                                                
                            
                                        </div> <!-- End x content -->
                                </div>
                            </div>
                        </div>
                    </div>
                    </div><!-- End  Panel  មេធាវីទទួលសំណុំរឿង  -->  

                <div class="col-sm-12"> <!-- Start  Panel មេធាវីទទួលសំណុំរឿង -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-info">
                            <div class="panel-heading">ឯកសារទាក់ទងសំណុំ​រឿង</div>
                                <div class="panel-body"> 
                                        <div class="x_content"> <!-- start x content -->
                                                
                            
                                        </div> <!-- End x content -->
                                </div>
                            </div>
                        </div>
                    </div>
                    </div><!-- End  Panel  ឯកសារទាក់ទងសំណុំ​រឿង  -->  
                </div> <!-- End Body tab lawyer-->
                <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="client-tab">
                <p>Client</p>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="police-tab">
                <p>Police </p>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="gendarmerie-tab">
                <p>gendarmerie-tab</p>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="tab_content5" aria-labelledby="civil-authorities-tab">
                <p>civil-authorities</p>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="tab_content6" aria-labelledby="ngo-tab">
                <p>ngo-tab</p>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="tab_content7" aria-labelledby="other-tab">
                <p>other-tab</p>
                </div>
            </div>
            </div>

            </div> <!--End tab តំណាក់កាលចូលរឿងក្តី-->

</div><!-- End of main form -->

<div id="ModalCaseRegis"  class="modal fade" tabindex="-1" aria-hidden="true" aria-labelledby="ModalCaseRegis" style="display: none;"> <!--Start Modal Case Registration -->
    <div class="modal-dialog" style="width:45%;">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-xs-center">Case Registration</h4>
            </div>
            <div class="modal-body"><!--Start modal body -->
                <div id="add-class-messages"></div>
                    <div class="container-fluid">
                        <div class="row">
                        <?php 							
						    include("application/views/html/admin/modal_aid/caseregist_modal.php");
						 ?>
                        </div>
                    </div>
           </div> <!-- End modal body -->
        </div>
    <!-- /.modal-dialog -->
    </div>
</div> <!-- End Modal Case Registration -->

<div id="ModalClient" class="modal fade" tabindex="-1" aria-hidden="true"><!-- Start Modal client -->
    <div class="modal-dialog" style="width:30%;">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-xs-center">កូនក្តី</h4>
            </div>
            <div class="modal-body"><!--Start modal body -->
                <div id="messageclient"></div>
                    <div class="container-fluid">
                        <div class="row">
                        <?php 							
						    include("application/views/html/admin/modal_aid/client_modal.php");
						 ?>
                        </div>
                    </div>
           </div> <!-- End modal body -->
        </div>
    </div>
</div><!-- End Modal client -->



<div id="ModalCourt" class="modal fade" ><!-- Start Modal court by case regis -->
    <div class="modal-dialog" style="width:50%;">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-xs-center">កូនក្តី</h4>
            </div>
            <div class="modal-body"><!--Start modal body -->
                <div id="messagecourt"></div>
                    <div class="container-fluid">
                        <div class="row">
                        <?php 							
						    include("application/views/html/admin/modal_aid/court_modal.php");
						 ?>
                        </div>
                    </div>
           </div> <!-- End modal body -->
        </div>
    </div>
</div><!-- End Modal court by case regis -->

</div> <!-- End main HTML -->



