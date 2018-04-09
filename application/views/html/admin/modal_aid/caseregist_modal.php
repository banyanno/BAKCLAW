<form  class="form-horizontal" id="formLAID"   >
                            <fieldset>
                        
                                <!-- Form Name -->
                                <!--<legend>Address Details</legend>-->
                        
                                <!-- Text input-->
                                <div class="form-group">
                                <input id="caseid" name="caseid" type="hidden">
                                </div>
                                <div class="form-group">
                                <div class="col-sm-12">
                                    <label for="caseno" class="control-label" for="caseno">លេខសំណុំរឿង</label>
                                    <input type="text"  class="form-control" id="caseno " name="caseno"  placeholder="Case No">
                                </div>
                               <!-- <label for="lawyer" class="col-sm-2 control-label" for="codeno">លេខសំណុំរឿង</label>
                                <div class="col-sm-10"> 
                                        <input type="text"  class="form-control" id="codeno" name="codeno"  placeholder="Code No">
                                    </div>
                                    -->
                                </div>
                                
                                <div class="form-group">
                                    <div class="col-sm-6">
                                        <label for="lawyer" class="control-label">ចុះថ្ងៃទី៖</label>
                                       
                                        <input type="text" readonly="readonly" class="form-control" id="dateregis" name="dateregis" placeholder="yyyy-mm-dd"> 
                                        

                                    </div>
                                     <div class="col-sm-6">
                                        <label class="control-label" for="project">ប្រភេទសំណុំរឿង៖</label> 
                                        <select class="form-control" name="typeofcase" id="typeofcase">
                                                <option value="">...</option>
                                                <option value="ព្រហ្មទណ្ឌ">ព្រហ្មទណ្ឌ</option>
                                                <option value="រដ្ឋប្បវេណី">រដ្ឋប្បវេណី</option>
                                                <option value="ពាណិជ្ជកម្ម">ពាណិជ្ជកម្ម</option>
                                                <option value="ផ្សេងៗ">ផ្សេងៗ</option>
                                        </select>
                                    </div>
                                </div>
                    
                                <div class="form-group">
                                <div class="col-sm-6"> 
                                    <label class="control-label" >បទចោទប្រកាន់៖</label>
                                    <input type="text" class="form-control" id="accusations" name="accusations">
                                    <!--<select class="form-control" name="case" id="case">
                                        <option value="">------</option>
                                        <?php
                                            foreach($cases as $case){
                                                echo "<option value='".$case->caseid."'>".$case->casename."</option>";
                                            }
                                        ?>
                                    </select>
                                    -->
                                    </div>
                                    <div class="col-sm-6">
                                    <label class="control-label">ទទួលសំណុំរឿងពី៖</label>
                                    <select class="form-control" name="getfrom" id="getfrom">
                                        <option value="">...</option>
                                        <option value="តុលាការ">តុលាការ</option>
                                        <option value="កូនក្តី">កូនក្តី</option>
                                        <option value="នគរបាល">នគរបាល</option>
                                        <option value="អាវុធហត្ថ">អាវុធហត្ថ</option>
                                        <option value="អាជ្ញាធរស៊ីវិល">អាជ្ញាធរស៊ីវិល</option>
                                        <option value="អង្គការក្រៅរដ្ឋាភិបាល">អង្គការក្រៅរដ្ឋាភិបាល</option>
                                        <option value="ផ្សេងៗ">ផ្សេងៗ</option>
                                        <!--<?php
                                            foreach($courts as $court){
                                            echo "<option value='".$court->courtid."'>".$court->courtname."</option>";
                                            }
                                        ?>
                                        -->
                                    </select>
                                    </div>
                                </div>
                             
                                <div class="form-group">
                                <div class="col-sm-12">
                                    <label class="control-label">សំគាល់៖</label>
                                    <textarea id="casenote" name="casenote"  class="form-control"></textarea>
                                    </div>
                                </div>
                                
                            
                            </fieldset>
                        
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">  បិត  </button>
                                <button type="button" id="btnSave"  onclick="SaveNewCaseRegis()"  class="btn btn-info"> រក្សាទុក </button>
                            </div><!--End modal body-->
</form>