<?php 
	//include('./header.php');
?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Re-Auction</h1>
           
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
			<div class="col-xl-12 col-lg-7">
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
               <table class="table table-striped text-left table-sm p-4" id="dataTable" width="100%" cellspacing="0">
    <thead class="bg-info text-white">
      <tr>
		<th colspan="10"><center>Re-Auction</center></th>  
      </tr>
    </thead>
    <tbody>
	 
	  <form action="<?php echo base_url();?>Admin_sellerreauction_update" method="POST" id="upload-form" enctype="multipart/form-data">
		  

	  <tr>
		  <td>Seller Name</td>
		  <td><input class="form-control w-50"  type="text" id="sname" name="sname" value="<?php echo  $scomp[0]->sname;?>" readonly>
		  </td>
	  </tr>

	  
	  
      
	  <tr>
		  <td>Auction Id</td>
		  <td><input class="form-control w-50"  type="text" id="sauctionid" name="sauctionid" value="<?php echo  $scomp[0]->sauctionid;?>" readonly></td>

	  </tr>
	  <tr>
		  <td>Seller Company Name</td>
		  <td><input class="form-control w-50"  type="text" id="scompanyname" name="scompanyname" value="<?php echo  $scomp[0]->scompanyname;?>" readonly>
		</td>
	  </tr>
	  


	  <tr>
		<td>Auction Start And End Date</td>
		<td><input class="form-control w-75" id="saucstartdate_time" name="saucstartdate_time" type="datetime-local" ><br>
		<input class="form-control w-75" id="saucclosedate_time" name="saucclosedate_time" type="datetime-local" >
		</td>
	</tr>
	


  <!-- The Modal -->
 
  
    </tbody>
  </table>
  
  <center><input type="submit" name="submit" class="btn btn-info" value="ReAuction" data-dismiss="modal"></center>
 	 </form>

			</div>
		
            </div>

          <!-- Content Row -->

          
        <!-- /.container-fluid -->

      
      <!-- End of Main Content -->

      <!-- Footer -->
     
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  
  
  
  
  <!-----myscript-->



<?php 
	//include('./footer.php');
?>
</body>

</html>
