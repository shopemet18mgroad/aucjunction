<?php 
	//include('./header.php');
	print_r($activestat);

?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Profile</h1>
            
          </div> -->

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
			<div class="col-xl-12 col-lg-7">
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
			   <form class="form-inline">
					<div class="form-group mr-4 offset-sm-4">
						<td colspan="5">
						<form action="/action_page.php">
							
								<input type="text" for="gettable2" class="form-control gettable2" id="gettable2" placeholder="Search.." name="search">
								<button class="form-control" type="submit"><i class="fa fa-search"></i></button>
					
						</form>
					</td>
				</div>
			
		
			</form>
		
		<table class="table table-striped table-bordered table-sm text-center mt-5" id="dataTable" width="100%" cellspacing="0">
				<thead class="bg-primary text-white">
				<tr>
					<th>Seller Name</th>
					<th>Company Type</th>
					<th>Contact Person</th>
					<th>Location</th>
					<th>City</th>
					<th>Status</th>
					<th>Action</th>
				</tr>
				</thead>
				<tbody>
				<tr>												
					<td><?php echo $activestat[0]->sname; ?></td>
					<td>Steel metal</td>
					<td>S.R.Venkatesh</td>
					<td>Bangalore</td>
					<td>Shada Shiv Nagar</td>
					<td>Active</td>
					<td><a href=""><button type="button" class="btn btn-info btn-sm">Approve</button></a>
					<a href=""><button type="button" class="btn btn-info btn-sm">Reject</button></a></td>	
				</tr>
				<tr>												
					<td>BHEL</td>
					<td>Steel metal</td>
					<td>S.R.Venkatesh</td>
					<td>Bangalore</td>
					<td>Shada Shiv Nagar</td>
					<td>Active</td>
					<td><a href=""><button type="button" class="btn btn-info btn-sm">Approve</button></a>
					<a href=""><button type="button" class="btn btn-info btn-sm">Reject</button></a></td>
				</tr>
				<tr>												
					<td>BHEL</td>
					<td>Steel metal</td>
					<td>S.R.Venkatesh</td>
					<td>Bangalore</td>
					<td>Shada Shiv Nagar</td>
					<td>Inactive</td>
					<td><a href=""><button type="button" class="btn btn-info btn-sm">Approve</button></a>
					<a href=""><button type="button" class="btn btn-info btn-sm">Reject</button></a></td>
				</tr>
				<tr>												
					<td>BHEL</td>
					<td>Steel metal</td>
					<td>S.R.Venkatesh</td>
					<td>Bangalore</td>
					<td>Shada Shiv Nagar</td>
					<td>Active</td>
					<td><a href=""><button type="button" class="btn btn-info btn-sm">Approve</button></a>
					<a href=""><button type="button" class="btn btn-info btn-sm">Reject</button></a></td>
					</tr>
					<tr>												
						<td>BHEL</td>
						<td>Steel metal</td>
						<td>S.R.Venkatesh</td>
						<td>Bangalore</td>
						<td>Shada Shiv Nagar</td>
						<td>Inactive</td>
						<td><a href=""><button type="button" class="btn btn-info btn-sm">Approve</button></a>
						<a href=""><button type="button" class="btn btn-info btn-sm">Reject</button></a></td>
					</tr>
				</tbody>
		 </table>
		</div>
		</div>

		</div>
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
<?php 
	//include('./footer.php');
?>
</body>

</html>
