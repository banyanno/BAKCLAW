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
                                    <div class="col-sm-2"> 
                                            <label for="clientage" class="control-label" >អាយុ៖</label>
                                            <input type="text"  class="form-control" id="clientage" name="clientage"  placeholder="...">
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="lawyer" class="control-label" >ភេទ៖</label>
                                      <select class="form-control" name="clientsex" id="clientsex">
                                            <option value="">...</option>
                                            <option value="ស្រី">ស្រី</option>
                                            <option value="ប្រុស">ប្រុស</option>
                                            <!--
                                                <?php
                                                    foreach($lawyers as $lawyer){
                                                        echo "<option value='".$lawyer->id."'>".$lawyer->lawyer_name_kh."</option>";

                                                    }
                                                ?>
                                                -->   
                                                    <!-- Code Php here -->
                                        </select>
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="radio">
                                            <label>
                                            <input type="radio" name="adults" id="adult" value="1">
                                            នីតិជន
                                            </label>
                                            <label>
                                            <input type="radio" name="adults" id="minner" value="0">
                                            អនីតិជន
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="radio">
                                            <label>
                                            <input type="radio" name="isclient" id="client" value="1">
                                            ​​​​កូនក្តី
                                            </label>
                                            <label>
                                            <input type="radio" name="isclient" id="otherclient" value="0">
                                               ភាគីម្ខាងទៀត/ដើមបណ្តឹងរដ្ឋប្បវេណី
                                            </label>
                                        </div>
                                    </div>
                                </div>                       
                                <div class="form-group">
                                   
                                    <div class="col-sm-12">
                                    <label class="control-label">សំគាល់</label>
                                    <textarea id="clientnote" name="clientnote" class="resizable_textarea form-control" placeholder="..."></textarea>
                                    </div>
                                </div>
                                
                            
                            </fieldset>
                        
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">  បិត  </button>
                                <button type="button" id="btnSave"  onclick="SaveOrUpdateClient()"  class="btn btn-info"> រក្សាទុក </button>
                            </div><!--End modal body-->
</form>