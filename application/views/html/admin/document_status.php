        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
		  <div class="clearfix"></div>
          <!-- /top tiles -->
			<div class="row">
			   <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h3><?php echo $this->lang->line('processing_doc'); ?></h3>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
				<div class="form-group">
				 	 <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target=".bs-example-modal-lg"><label class="control-label-kh">បញ្ចូលទិន្នន័យមេធាវីថ្មី</label></button>
					
					 <button type="button" class="btn btn-success btn-sm"><label class="control-label-kh">តាមដានលំហូរឯកសារ</label></button>
					
					 <button type="button" class="btn btn-success btn-sm"><label class="control-label-kh">Update តារាង</label></button>	
				</div>
				
				 <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                        </div>
                        <div class="modal-body">
                          <h4>Text in a modal</h4>
                          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                          <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div>					  
                  <div class="form-group">  
					<table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>      					 
						  <th><label class="control-label-kh"><b>លេខរៀង</b></label></th>
                          <th><label class="control-label-kh"><b>ឈ្មោះ (ជាខ្មែរ)</b></label></th>
						  <th><label class="control-label-kh"><b>ឈ្មោះ (ជាឡាតាំង)</b></label></th>
						  <th><label class="control-label-kh"><b>ថ្អៃ ខែ ឆ្នាំកំណើត</b> </label></th>
						  <th><label class="control-label-kh"><b>អត្តលេខ</b></label></th>
						  <th><label class="control-label-kh"><b>ស្តេតតឺស</b></label></th>
						  <th><label class="control-label-kh"><b>កែប្រែ</b></label></th>	
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
						  <td><label class="control-label-kh">កុយ ពន្លឺ</label></td>
                          <td>Ponleu Koy</td>
                          <td>S2002</td>
                          <td>2011/04/25</td>
						  <td>Open</td>
						  <td><a class="btn btn-app1"><i class="fa fa-edit"></i><label class="control-label-kh">កែប្រែ</label></a>
                          </td>
                        </tr>
                        <tr>
                          <td>2</td>
						  <td><label class="control-label-kh">បាន យ៉ាណូ</label></td>
                          <td>Yanno Ban</td>
                          <td>S2003</td>
                          <td>2011/04/25</td>
						  <td>Open</td>
						  <td><a class="btn btn-app1"><i class="fa fa-edit"></i><label class="control-label-kh">កែប្រែ</label></a>
                          </td>
                        </tr>                       
                        <tr>
                          <td>3</td>
						  <td>dara</td>
                          <td>Dara Sok</td>
                          <td>S2004</td>
                          <td>2011/04/25</td>
						  <td>Open</td>
						  <td><a class="btn btn-app1"><i class="fa fa-edit"></i><label class="control-label-kh">កែប្រែ</label></a>
                          </td>
                        </tr>
                        <tr>
                          <td>4</td>
						  <td>khim</td>
                          <td>Khim Sok</td>
                          <td>S2005</td>
                          <td>2011/04/25</td>
						  <td>Open</td>
						  <td><a class="btn btn-app1"><i class="fa fa-edit"></i><label class="control-label-kh">កែប្រែ</label></a>
                          </td>
                        </tr>   
                        <tr>
                          <td>5</td>
						  <td>seng</td>
                          <td>Seng Khim</td>
                          <td>S2035</td>
                          <td>2011/04/25</td>
						  <td>Close</td>
						  <td><a class="btn btn-app1"><i class="fa fa-edit"></i><label class="control-label-kh">កែប្រែ</label></a>
                          </td>
                        </tr>   						  
                      </tbody>
                    </table>					  				  
                  </div>
				 </div>	  
                </div>
              </div>				
			</div>	
		</div>
        <!-- /page content -->

