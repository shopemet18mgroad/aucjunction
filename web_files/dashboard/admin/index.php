<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
	include('./headerdata.php');
?>        <!-- End of Topbar -->

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
					 <table class="table table-sm table-borderless">
					 <thead><th width="45%">Basic Info</th>
					 
					 </thead>
						<tbody>
						<tr><td><img class="img-fluid" src="../../img/manimg.jpg" alt="Chania" width="40" height="35"></td></tr>
						<tr>
							<td class="btxt">Seller Name:</td>
							<td><input class="form-control w-50" type="text" id="sname" name="sname"></td>
	 							 </tr>
						<tr>												
							<td class="btxt">Company Name:</td>
							<td><input class="form-control w-50" type="text" id="fcomp" name="fcomp" ></td>
							</tr>
						<tr>
							<td class="btxt">Company Type:</td>
							<td><input class="form-control w-50" type="text" id="fctype" name="fctype" ></td>
						</tr>  
						<tr>
							<td class="btxt">Contact Person:</td>
							<td><input class="form-control w-50" type="text" id="fcperson" name="fcperson" ></td>
						</tr>
						<tr>
							<td class="btxt"> CIN Number:</td>
							<td><input class="form-control w-50" type="text" id="cin" name="cin" ></td>
						</tr>  
						<tr>
							<td class="btxt">GST:</td>
							<td><input class="form-control w-50" type="text" id="gst" name="gst" ></td>
						</tr> 
						<tr>
							<td class="btxt">PCB Licence NO:</td>
							<td><input class="form-control w-50" type="text" id="pcb" name="pcb" ></td>
						</tr> 
					</tbody>
					</table>			

				<table class="table table-sm table-borderless">
					 <thead><th width="45%">Contact Info</th>
					 </thead>
						<tbody>
						<tr>
							<td class="btxt">Email:</td>
							<td><input class="form-control w-50" type="text" id="email"></td>
						</tr>
						<tr>
							<td class="btxt">Phone:</td>
							<td><input class="form-control w-50" type="text" id="phone"></td>
						</tr>
						<tr>
							<td class="btxt">Postal Address:</td>
							<td><input class="form-control w-50" type="text" id="paddress"></td>
						</tr> 
						<tr>
							<td class="btxt">City:</td>
							<td><input class="form-control w-50" type="text" id="city" name="city" ></td>
						</tr> 
						<tr>
							<td class="btxt">Pincode:</td>
							<td><input class="form-control w-50" type="text" id="pin" name="pin" ></td>
						</tr> 
						<tr>
							<td class="btxt">State /Union Ter.:</td>
							<td><input class="form-control w-50" type="text" id="state" name="state" ></td>
						</tr> 
						<tr>
							<td class="btxt">Country:</td>
							<td><input class="form-control w-50" type="text" id="country" name="country" value="INDIA" disabled></td>
						</tr>		
						</tbody>
					</table>	

				<table class="table table-sm table-borderless">
					 <thead><th width="45%">Account</th>
					 </thead>
					<tbody>
						<tr>
							<td class="btxt">Banker's Name:</td>
							<td><input class="form-control w-50" type="text" id="bankname" name="bankname" ></td>
						</tr> 
						<tr>
							<td class="btxt">Account Number:</td>
							<td><input class="form-control w-50" type="text" id="facc" name="facc" ></td>
						</tr> 
						<tr>
							<td class="btxt">Branch:</td>
							<td><input class="form-control w-50" type="text" id="fbranch" name="fbranch" ></td>
						</tr> 
						<tr>
							<td class="btxt">IFSC Code:</td>
							<td><input class="form-control w-50" type="text" id="fcode" name="fcode" ></td>
						</tr> 
						</tbody>
					</table>


				<table class="table table-sm table-borderless">
					 <thead><th width="45%">Documents</th>
					 </thead>
						<tbody>
							<tr>
								<td class="btxt">Upload Image1:</td>
								<td><form action="/action_page.php"> <input type="file" id="myFile" name="filename2"></form></td>
							</tr> 
							<tr>
								<td class="btxt">Upload Image2:</td>
								<td><form action="/action_page.php"> <input type="file" id="myFile" name="filename2"></form></td>
							</tr> 
							<tr>
								<td class="btxt">Upload Image3:</td>
								<td><form action="/action_page.php"> <input type="file" id="myFile" name="filename2"></form></td>
							</tr>		
						</tbody>
					</table>					
				<a href="#"><button type="button" class="btn btn-info offset-sm-3 mt-2">Update</button></a>
												
				<a href="#"><button type="button" class="btn btn-info offset-sm-1 mt-2">Cancel</button></a>
												
				<a href='#'><button type="button" class="btn btn-info offset-sm-1 mt-2">Approve</button></a>
				<i class="fa fa-check primary" aria-hidden="true">Approved</i>
				<a href="#"><i class="fa fa-times danger" aria-hidden="true">Approval Pending</i></a>
              </div>
            </div>

            <!-- Pie Chart -->

          </div>
        <!-- /.container-fluid -->

      </div>
	  
	  
      <!-- End of Main Content -->

      <!-- Footer -->
     <!--  <footer class="sticky-footer bg-white">
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
  <?php 
	include('./footerdata.php');
?>
</body>

</html>
