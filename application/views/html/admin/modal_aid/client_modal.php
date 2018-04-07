<form  class="form-horizontal" id="formclient"   >
                            <fieldset>
                        
                                <!-- Form Name -->
                                <!--<legend>Address Details</legend>-->
                        
                                <!-- Text input-->
                                <div class="form-group">
                                <input id="caseregisid" name="caseregisid" type="hidden">
                                </div>
                                <div class="form-group">
                                <div class="col-sm-12"> 
                                        <label for="cientname" class="control-label" >ឈ្មោះ</label>
                                        <input type="text"  class="form-control" id="clientname" name="clientname"  placeholder="...">
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
                                              <label class="control-label"><input id="adults" type="checkbox"> នីតិជន/អនីតជន</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                   
                                    <div class="col-sm-12">
                                    <label class="control-label">សំគាល់</label>
                                    <textarea id="clientnote " class="resizable_textarea form-control" placeholder="..."></textarea>
                                    </div>
                                </div>
                                
                            
                            </fieldset>
                        
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">  បិត  </button>
                                <button type="button" id="btnSave"  onclick="SaveOrUpdateClient()"  class="btn btn-info"> រក្សាទុក </button>
                            </div><!--End modal body-->
</form>