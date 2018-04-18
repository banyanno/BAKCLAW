
<form  class="form-horizontal" id="formCourt"   >
                            <fieldset>
                        
                                <!-- Form Name -->
                                <!--<legend>Address Details</legend>-->
                        
                                <!-- Text input-->
                                <div class="form-group">
                                <input id="caseregisid" name="caseregisid" type="hidden">
                                <input id="caseclientid" name="caseclientid" type="hidden">
                                </div>
                                <div class="form-group">
                                <div class="col-sm-12"> 
                                        <label for="cientname" class="control-label" >ទទួលពីតុលាការ</label>
                                        <select class="form-control" name="courtname" id="courtname">
                                            <option value="">...</option>
                                            <option value="ភ្នំពេញ">ភ្នំពេញ</option>
                                            <option value="កណ្តាល">កណ្តាល</option>
                                            <option value="កំពង់ស្ពឺ">កំពង់ស្ពឺ</option>
                                            <option value="តាកែវ">តាកែវ</option>
                                            <option value="កំពង់ឆ្នាំង">កំពង់ឆ្នាំង</option>
                                            <option value="កំពត">កំពត</option>
                                            <option value="ស្វាយរៀង">ស្វាយរៀង</option>
                                            <option value="ព្រៃវែង">ព្រៃវែង</option>
                                            <option value="កំពង់ចាម">កំពង់ចាម</option>
                                            <option value="កំពង់ធំ">កំពង់ធំ</option>
                                            <option value="ក្រចេះ">ក្រចេះ</option>
                                            <option value="ស្ទឹងត្រែង">ស្ទឹងត្រែង</option>
                                            <option value="មណ្ឌលគិរី">មណ្ឌលគិរី</option>
                                            <option value="រតនគិរី">រតនគិរី</option>
                                            <option value="កោះកុង">កោះកុង</option>
                                            <option value="ពោធិសាត់">ពោធិសាត់</option>
                                            <option value="បាត់ដំបង">បាត់ដំបង</option>
                                            <option value="ប៉ៃលិន">ប៉ៃលិន</option>
                                            <option value="បន្ទាយមានជ័យ">បន្ទាយមានជ័យ</option>
                                            <option value="ឧត្តរមានជ័យ">ឧត្តរមានជ័យ</option>
                                            <option value="ព្រះវិហារ">ព្រះវិហារ</option>
                                            <option value="សៀមរាប">សៀមរាប</option>
                                            <option value="ព្រះសីហនុ">ព្រះសីហនុ</option>
                                            <option value="ត្បូងឃ្មុំ">ត្បូងឃ្មុំ</option>
                                            <option value="ឧទ្ធរណ៍">ឧទ្ធរណ៍</option>
                                            <option value="កំពូល">កំពូល</option>
                                        </select>
                                </div>
                                
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-6"> 
                                            <label for="clientage" class="control-label" >លិខិតស្នើសុំមេធាវី,លេខ៖</label>
                                            <input type="text"  class="form-control" id="clientage" name="clientage"  placeholder="...">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="datecourt" class="control-label" >ចុះថ្ងៃទី៖</label>
                                        <input type="text" readonly="readonly" class="form-control" id="datecourt" name="datecourt" placeholder="yyyy-mm-dd"> 
                                            <!--
                                                <?php
                                                    foreach($lawyers as $lawyer){
                                                        echo "<option value='".$lawyer->id."'>".$lawyer->lawyer_name_kh."</option>";

                                                    }
                                                ?>
                                                -->   
                                                    <!-- Code Php here -->
                                       
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                        <div class="x_panel" > <!-- start panel poor in court -->
                                               <div class="x_title">
                                               <i class="fa fa-bar-chart fa-lg"></i>
                                               អត្តសញ្ញាណជនក្រីក្រ
                                               <ul class="nav navbar-right panel_toolbox">
                                               <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                                               <div class="clearfix"></div>
                                               </ul>
                                               </div>
                                                <div   class= "x_content"> <!-- start panel body poor-->
                                                <div class="radio">
                                                    <label>
                                                    <input type="radio" name="adults" id="adult" value="1">
                                                        មានសំគាល់ជនក្រីក្រ
                                                    </label>
                                                    <label>
                                                    <input type="radio" name="adults" id="minner" value="0">
                                                        គ្មានប័ណសំគាល់ជនក្រីក្រ
                                                    </label>
                                                </div>
                                                <br>
                                                <lable class="control-label"><space>ថ្ងៃសម្ភាសន៏</space></label>
                                                <input type="text" readonly="readonly" class="form-control" id="datepoorinterview" name="datepoorinterview" placeholder="yyyy-mm-dd"> 
                                               
                                                <label  class="control-label"><space>សំគាល់សម្ភាសជនក្រីក្រ</space></label>
                                                <textarea id="clientnote" name="clientnote" class="resizable_textarea form-control" placeholder="..."></textarea>
                                               
                                                </div><!--End panel body poor-->    
                                    </div>  <!-- End panel poor in court -->
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="radio">
                                            <label>
                                            <input type="radio" name="isclient" id="client" value="1">
                                            ​​​​អាចទទួលពាក្យបណ្តឹង
                                            </label>
                                            <label>
                                            <input type="radio" name="isclient" id="otherclient" value="0">
                                            ​​​​មិនអាចទទួលពាក្យបណ្តឹង
                                            </label>
                                        </div>
                                    </div>
                                </div>                       
                               <div class="form-group"> <!--start group-->
                               
                                        <div class="" role="tabpanel" data-example-id="togglable-tabs"><!--Start main tab in court-->
                                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist"><!-- start nav tab bar -->
                                            <li role="presentation" class="active"><a href="#tab_requestlawyer" id="requestlawyer-tab1" role="tab" data-toggle="tab" aria-expanded="true">ចាត់តាំងមេធាវី</a></li>
                                            <li role="presentation" class=""><a href="#tab_moneylawyer" id="money-tab" role="tab" data-toggle="tab" aria-expanded="false">ប្រាក់ឌបត្តម្ហមេធាវី</a></li>
                                        </ul>  <!-- End nav tab bar -->
                                        <div id="myTabContent" class="tab-content"> <!-- start tab body -->
                                       
                                        <div role="tabpanel" class="tab-pane fade active in" id="tab_requestlawyer" aria-labelledby="tab_requestlawyer">
                  <form class="form-inline">
                  <div class="col-sm-4"> 
                  <div class="form-group">
                    <label for="ex3">ឈ្មោះមេធាវី</label>
                    <input type="text" id="ex3" class="form-control" placeholder=" ">
                  </div>
                  </div>
                  <div class="col-sm-4">
                  <div class="form-group">
                    <label for="ex4">លិខិតចាត់តាំង,លេខ</label>
                    <input type="email" id="ex4" class="form-control" placeholder=" ">
                  </div>
                  </div>
                  <div class="col-sm-4">
                  <div class="form-group">
                    <label for="ex4">ចុះថ្ងៃទី</label>
                    <input type="email" id="ex4" class="form-control" placeholder=" ">
                  </div>
                  </div>
                </form>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab_moneylawyer" aria-labelledby="tab_moneylawyer">
                                        <p>Client</p>
                                        </div>
                                        </div> <!-- End tab body -->
                                                    
                                      

                                        </div> <!-- main tab in court-->
                                      
                                        </div> <!--end group-->
                            </fieldset>
                        
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">  បិត  </button>
                                <button type="button" id="btnSave"  onclick="SaveOrUpdateClient()"  class="btn btn-info"> រក្សាទុក </button>
                            </div><!--End modal body-->
</form>
