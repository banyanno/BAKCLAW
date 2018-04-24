
<form  class="form-horizontal" id="formCourt">
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
                                        <select class="form-control select_group courtname" name="courtname" id="courtname" style="width:100%;" maxlength="2">
                                            <option value="">ជ្រើសរើសតុលារ...</option>
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
                                            <table class="table table-bordered" id="lawyer_info_table"> <!-- Start create table list lawyer -->
                                            <thead>
                                                    <tr>
                                                        <th style="width:50%">ឈ្មោះមេធាវី</th>
                                                        <th style="width:10%">លិខិតចាត់តាំងលេខ</th>
                                                        <th style="width:20%">ថ្ងៃទី</th>
                                                        <th style="width:3%"><button type="button" id="add_row" class="btn btn-default" onclick="addRowToTable()"><i class="fa fa-plus"></i></button></th>
                                                    </tr>
                                                    <tbody>
                                                            <tr id="row_1">
                                                                <td>
                                                                <select class="form-control select_lawyer lawyer" data-row-id="row_1" id="lawyer_1" name="lawyer[]" style="width:100%;" require>
                                                                <option value=""></option>
                                                                <?php foreach ($lawyers as $k=>$v):  ?>
                                                                    <option value="<?php echo $v['id'] ?>"><?php echo $v['lawyer_name_kh'] ?></option>
                                                                <?php endforeach ?>
                                                                </select>
                                                                </td>
                                                                <td>
                                                                    <input type="text" name="aprovelawyer[]" id="aprovelawyer_1" class="form-control" require>
                                                                </td>
                                                                <td>
                                                                    <input type="text" name="aprovedate[]" id="aprovedate_1" class="form-control" require>
                                                                </td>
                                                                <td><button type="button" class="btn btn-default" onclick="removeRow('1')"><i class="fa fa-close"></i></button></td>
                                                            </tr>
                                                    </tbody>
                                            </thead>
                                            </table>      <!-- End create table list lawyer -->    
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
