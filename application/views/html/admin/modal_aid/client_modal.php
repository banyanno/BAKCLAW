<form  class="form-horizontal" id="forclient"   >
                            <fieldset>
                        
                                <!-- Form Name -->
                                <!--<legend>Address Details</legend>-->
                        
                                <!-- Text input-->
                                <div class="form-group">
                                <input id="clientid" name="clientid" type="hidden">
                                </div>
                                <div class="form-group">
                                    <label for="lawyer" class="col-sm-2 control-label" for="codeno">ឈ្មោះ</label>
                                    <div class="col-sm-10"> 
                                        <input type="text"  class="form-control" id="clientid" name="clientid"  placeholder="Client Name">
                                    </div>
                                </div>
                                
                                    <div class="form-group">
                                        <label for="lawyer" class="col-sm-2 control-label" >ភេទ</label>
                                         <div class="col-sm-4">
                                        <select class="form-control" name="lawyer" id="lawyer">
                                    <option value="">ជ្រើសរើស មេធាវី</option>
                                    <?php
                                        foreach($lawyers as $lawyer){
                                            echo "<option value='".$lawyer->id."'>".$lawyer->lawyer_name_kh."</option>";

                                        }
                                    ?>
                                        
                                        <!-- Code Php here -->
                                    </select>
                                    </div>
                                  
                                    <!--<label class="col-sm-2" for="project"></label>-->
                                    <div class="col-sm-6"> 
                                              <label>  <input type="checkbox"> នីតិជន/អនីតជន</label>
                                    </div>
                                </div>
                                

                               
                               
                             
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">សំគាល់</label>
                                    <div class="col-sm-10">
                                    <textarea class="resizable_textarea form-control" placeholder="..."></textarea>
                                    </div>
                                </div>
                                
                            
                            </fieldset>
                        
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">  បិត  </button>
                                <button type="button" id="btnSave"  onclick="save()"  class="btn btn-info"> រក្សាទុក </button>
                            </div><!--End modal body-->
</form>