<div class="right_col" role="main">
    <div class="x_content" >
        <div class="navbar navbar-default">
        
            <div class="container-fluid">
                <!-- Collect the nav links, forms, and other content for toggling -->
                <button type="button" class="btn btn-info navbar-btn" onclick="ShowClient()">បង្កើតកូនក្តីថ្មី</button>
                <button type="button" class="btn btn-primary navbar-btn" onclick="RefreshClientList()">បង្ហាញទិន្នន័យ</button>
            </div>
        </div>
    </div>
    <br>
<div class="form-group" id="load_table">
    <table id="clientTable" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>
                    <label class="control-label-kh">
                        <b>ល.រ</b>
                    </label>
                </th>
                <th>
                    <label class="control-label-kh">
                        <b>ឈ្មោះ​កូនក្តី</b>
                    </label>
                </th>
                <th>
                    <label class="control-label-kh">
                        <b>ភេទ</b>
                    </label>
                </th>
                <th>
                    <label class="control-label-kh">
                        <b>អាយុ</b>
                    </label>
                </th>
                <th>
                    <label class="control-label-kh">
                        <b>លេខអត្តសញ្ញាណ</b>
                    </label>
                </th>
                <th>
                    <label class="control-label-kh">
                        <b>លេខទូរស័ព្ទ</b>
                    </label>
                </th>
                <th>
                    <label class="control-label-kh">
                        <b>អាសយដ្ឋាន</b>
                    </label>
                </th>
              <th>
                    <label class="control-label-kh">
                        <b>action</b>
                    </label>
                </th>
            </tr>
        </thead>
      <!--  <tbody>
                <?php foreach($clients as $client){?>
                    <tr>
                        <td><?php echo $client->CLIENT_ID;?></td>
                        <td><?php echo $client->CLIENT_NAME;?></td>
                        <td><?php echo $client->CLIENT_SEX;?></td>
                        <td><?php echo $client->CLIENT_AGE;?></td>
                        <td><?php echo $client->CLIENT_NAT_ID;?></td>
                        <td><?php echo $client->CLIENT_TEL;?></td>
                        <td><?php echo $client->CLIENT_ADD;?></td>
                        <td>
						<button class="btn btn-warning btn-xs"  onclick="get_clientforUpdate(<?php echo $client->CLIENT_ID;?>)"><i class="glyphicon glyphicon-pencil"></i></button>
					    <button class="btn btn-danger btn-xs" onclick="delete_book(<?php echo $client->CLIENT_ID;?>)"><i class="glyphicon glyphicon-remove"></i></button>
					</td>
                    </tr>
                <?php }?>
        </tbody>-->
  
    </table>
</div>
    </div>
</div>

<div id="ModalExample"  class="modal fade bs-example-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-xs-center">Client Info</h4>
            </div>
            <div class="modal-body">
             <div id="add-class-messages"></div>
            <div class="container-fluid">
                <div class="row">
                <form  class="form-horizontal" id="insert_form"   >
                    <fieldset>
                
                        <!-- Form Name -->
                        <!--<legend>Address Details</legend>-->
                
                        <!-- Text input-->
                        <div class="form-group">
                        <input id="clientid" name="clientid" type="hidden">
                        </div>
                        <div class="form-group">
                            <label for="clientname" class="col-sm-2 control-label" >ឈ្មោះ កូនក្តី</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="clientname" name="clientname"  placeholder="Client Name" >
                            </div>
                        </div>
            
                        <div class="form-group">
                            <label for="clientsex" class="col-sm-2 control-label" >ភេទ</label>
                            <div class="col-sm-4"> 
                                <input type="text"  class="form-control" id="clientsex" name="clientsex"  placeholder="Sex">
                            </div>
                            <label class="col-sm-2 control-label">អាយុ</label>
                            <div class="col-sm-4">
                                <input id="clientage" name="clientage" type="text" placeholder="Age" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="textinput">អាសយដ្ឋាន</label>
                            <div class="col-sm-10">
                                <input id="clientaddress" name="clientaddress" type="text" placeholder="Address" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">លេខទូរស័ព្ទ</label>
                            <div class="col-sm-10">
                                <input id="clienttel" name="clienttel" type="text" placeholder="Tel" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" >លេខអត្តសញ្ញាណ</label>
                            <div class="col-sm-10">
                                    <input id="clientidcard" name="clientidcard" type="text" placeholder="IDCard" class="form-control">
                            </div>
                        </div>
                      
                       <!-- <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="pull-right">
                                   <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">បិត</button>
                                </div>
                            </div>
                        </div>-->
                
                    </fieldset>
                
                <div class="modal-footer">
            <button type="button" id="btnSave"  onclick="save()" class="btn btn-primary">Save</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>

          </div>
          </form>
                </div>
            </div>
           
        </div>
        <!-- /.modal-content -->
        </div>
    <!-- /.modal-dialog -->
    </div>
<!-- /.modal -->
</div>

