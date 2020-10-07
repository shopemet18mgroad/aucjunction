 <?php 
	include('./header.php');
?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h2 class="h3 mb-0 text-gray-800">Occupied Products</h2>
            
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
			<div class="col-xl-12 col-lg-7">
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
			   <form class="form-inline">
			  
			  <div class="form-group">
			  <label>Date</label>
			
					<input class="form-control col-sm-5 m-2" type="Date" id="sdate" name="sdate">
					<input class="form-control col-sm-5 ml-2" type="Date" id="ldate" name="ldate">
				</div>
				
				 <div class="form-group col-sm-3 mr-4">
				<label>Category:</label>

					<select class="form-control col-sm-5 ml-2" id="scategory" name="scategory">
					<option value="one" selected>Ferrous</option>
					<option value="two">Non Ferrous</option>
					<option value="three" >Minor Metals</option>
					<option value="four">Plain paper</option>
					<option value="five">Granules</option>
					<option value="six">All Construction Materials</option>
					</select>
				</div>

				<div class="form-group col-sm-3">
				<label>Seller:</label>
				 
					<select class="form-control col-sm-5 ml-1" id="seller" name="seller" >
					<option value="one" selected>BHEL</option>
					<option value="two">Exide</option>
					<option value="three" >Hindustan Ltd</option>
					<option value="four">Aditya Birla Group</option>
					<option value="five" >JSW Steel</option>
					<option value="six">Nalco</option>
					</select>
					<a href="#"><button type="button" class="btn btn-primary btn-sm ml-4 mt-2 mb-2">Search</button></a>
				</div>
			
		
			</form>
		
		<table class="table table-striped table-bordered table-sm text-center mt-5" id="dataTable" width="100%" cellspacing="0">
				<thead class="bg-primary text-white">
				<tr><th colspan="8" class="bg-info">Occupied Bidding Products</th></tr>
				<tr>
					<th>Auction Id</th>
					<th>Company Name</th>
					<th>Location</th>
					<th>Quantity</th>
					<th>Unit</th>
					<th>Price</th>
					<th>Date/Time</th>
				</tr>
				</thead>
				<tbody>
					<tr>												
						<td><a href="detailedbidding.php">BHEL/BBR/ISG LTD/2/Adarsh Vihar/25087/20-20</a></td>
						<td>BHEL</td>
						<td>Bangalore</td>
						<td>8.0</td>
						<td>MT</td>
						<td>80,000</td>
						<td>23-03-2020 23:00:00</td>
					</tr>
					<tr>												
						<td><a href="detailedbidding.php">BHEL/BBR/ISG LTD/2/Adarsh Vihar/25087/20-20</a></td>
						<td>BHEL</td>
						<td>Bangalore</td>
						<td>8.0</td>
						<td>MT</td>
						<td>80,000</td>
						<td>23-03-2020 23:00:00</td>
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
	include('./footer.php');
?>
</body>

</html>
