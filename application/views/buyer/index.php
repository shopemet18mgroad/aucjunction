<?php 
	//include('./header.php');
?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
    <!--       <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Vendor Profile</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div> -->

          <!-- Content Row -->


          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Personal Info</h6>
               
                </div>
                <!-- Card Body -->
                <div class="card-body">
					 <table class="table table-sm table-borderless" id="section1">
					 <thead><th width="45%">Profile</th>
					 <th style="text-align:right"><a href="<?php echo base_url();?>buyer_editpersonal"><u>Edit Personal Info</u></a></th>
					 
					 </thead>
						<tbody>
						<tr><td><img class="img-fluid" src="<?php echo base_url()."web_files/";?>img/manimg.jpg" alt="Chania" width="40" height="35"></td></tr>
						
						 <form action = "<?phpdecho base_url();?>" method="POST" enctype="multipart/form-data">
						 
							<tr>
								<td>Buyer Name:</td>
								
								<td><?php echo $sqldata[0]->bname; ?></td>
							
							</tr> 
							<tr>
								<td>Company Name</td>
								<td><?php echo $sqldata[0]->bcompany; ?></td>
							</tr> 
							<tr>
								<td>Contact Person</td>
								<td><?php echo $sqldata[0]->bcontactperson; ?></td>
							</tr>  
							<tr>
								<td>Company Type:</td>
								<td><?php echo $sqldata[0]->bcomptype; ?></td>
							</tr> 	
							<tr>
								<td>Postal Address</td>
								<td><?php echo $sqldata[0]->baddress; ?></td>
							</tr> 
							
							<tr>
								<td>Pincode</td>
								<td><?php echo $sqldata[0]->bpin; ?></td>
							</tr>
							<tr>
								<td>State /Union Ter.</td>
								<td><?php echo $sqldata[0]->bstate; ?></td>
							</tr>
							<tr>
								<td>Country</td>
								<td>India</td>
							</tr>
							
							<tr>
								<td>PCB</td>
								<td><?php echo $sqldata[0]->bpcb; ?></td>
							</tr>
													
						</tbody>
					</table>			

				<table class="table table-sm table-borderless" id="section2">
					 <thead><th width="45%">Contact Info</th>
					 <th style="text-align:right"><a href="<?php echo base_url();?>buyer_editcontact"><u>Edit Contact Info</u></a></th>
					 </thead>
						<tbody>
							<tr>
								<td>Email</td>
								<td><?php echo $sqldata[0]->bemail; ?></td>
							</tr> 
							<tr>
								<td>Phone Number</td>
								<td><?php echo $sqldata[0]->bphone; ?></td>
							</tr> 
							<tr>
								<td>Pan Number</td>
								<td><?php echo $sqldata[0]->bpan; ?></td>
							</tr> 	
							<tr>
								<td>GST</td>
								<td><?php echo $sqldata[0]->bgst; ?></td>
							</tr> 
													
						</tbody>
					</table>	

				<table class="table table-sm table-borderless" id="section3">
					 <thead><th width="45%">Password</th>
					 <th style="text-align:right"><a href="<?php echo base_url();?>buyer_editpassword"><u>Edit Password</u></a></th>
					 </thead>
						<tbody>
							<tr>
								<td>Old Password</td>
								<td>******</td>
							</tr> 
							<tr>
								<td>New Password</td>
								<td>******</td>
							</tr> 
							<tr>
								<td>Confirm Password</td>
								<td>******</td>
							</tr>
											
						</tbody>
					</table>

				<table class="table table-sm table-borderless" id="section4">
					 <thead><th width="45%">Account</th>
					 <th style="text-align:right"><a href="<?php echo base_url();?>buyer_editaccount"><u>Edit Account</u></a></th>
					 </thead>
						<tbody>
							<tr>
								<td>Banker's Name</td>
								<td><?php echo $sqldata[0]->bbankname; ?></td>
							</tr> 
							<tr>
								<td>Account Number</td>
								<td><?php echo $sqldata[0]->baccountnumber; ?></td>
							</tr> 
							<tr>
								<td>Branch</td>
								<td><?php echo $sqldata[0]->bbranch; ?></td>
							</tr> 
							<tr>
								<td>IFSC Code</td>
								<td><?php echo $sqldata[0]->bifsccode; ?></td>
							</tr> 							
										
						</tbody>
					</table>


				<table class="table table-sm table-borderless" id="section5">
					 <thead><th width="45%">Documents</th>
					 <th style="text-align:right"><a href="<?php echo base_url();?>buyer_editdocument"><u>Edit documents</u></a></th>
					 </thead>
						<tbody>
						
							<tr>
								<td class="btxt">Upload Documents:</td>
								<td></td>
							</tr>
						<?php 
						$aucf = unserialize($sqldata[0]->bsigneddocument);
							if(unserialize($sqldata[0]->bsigneddocument) != NULL){
								$file = unserialize($sqldata[0]->bsigneddocument);
								  foreach($file as $fl){
								echo '<tr id="filess">';
								echo '<td class="btxt">Existing Documents</td>';
								echo '<td><div class="input_fields_wrap">';
								echo '<textarea class="form-control float-left mt-2 p-2 w-50" type="text" id="bsigneddocumentex" name="bsigneddocumentex[]" readonly>'.$fl.'</textarea>';
								echo '<input type="hidden" id="bsigneddocumentexcom" name="bsigneddocumentexcom[]" value="'.$fl.'">';
								echo '<a class="add_field_button1"><button type="button" onclick="$(this).parents(\'#filess\').remove()" class="btn btn-sm btn-primary ml-1 mb-5 mt-3">  <i class="fa fa-minus text-white"></i></button></a>';
								if(isset($aucf[0])){
								echo '<a href="'.base_url().'web_files/uploads/'. $aucf[0].'" target="_blank">';
								echo '<i class="fa fa-download ml-5 mb-5 mt-3"></i>';
								}
								echo '</a>';
								echo '</div></td>';
								echo '';
								echo '</tr>';
								  }
							}else{
								
							}
							
							
							?>								
							</form>					
						</tbody>
					</table>					
              
              </div>
            </div>

            <!-- Pie Chart -->

          </div>
        <!-- /.container-fluid -->

      </div>
	  
	  
      <!-- End of Main Content -->

      <!-- Footer -->
   <!--   <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy;rawmet 2020</span>
          </div>
        </div>
      </footer>-->
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
 
</body>

</html>
