 <?php 
	//include('./header.php');
?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h2 class="h3 mb-0 text-gray-800">Forthcoming Auction</h2>
            
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
			<div class="col-xl-12 col-lg-7">
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
			      <form class="form-inline">
			
				  <div class="form-group col-sm-3 mr-3 ">
				

					<!--<select class="form-control col-sm-12 ml-2" id="gettable_forthcomingauc" name="scategory" >
					
					<option value="" selected>Select</option>
				<option value="Ferrous">Ferrous</option>
				<option value="Non Ferrous">Non Ferrous</option>
				<option value="Minor Metals" >Minor Metals</option>
				<option value="Plain paper">Plain paper</option>
				<option value="Granules">Granules</option>
				<option value="All Construction Materials">All Construction Materials</option>
					</select>-->
					
				</div>

					<div class="form-group mr-5 col-sm-10 offset-sm-3  ">
						<td colspan="5">
						<!-- <form action="/action_page.php"> -->
								<!--<label for="gettable"></label>
								<input type="text" class="form-control gettable" id="gettable_forthcomingauc" placeholder="Enter Metal Name To Fetch Result"  size="70" name="search">-->
								<label for="gettable" ><strong>Category:</strong></label>
								
								<select class="form-control gettable col-sm-5 col-md-5 ml-2" id="gettable_forthcomingauc" name="scategory" >
					
					<option value="" selected>Select</option>
				<option value="Ferrous">Ferrous</option>
				<option value="Non Ferrous" >Non Ferrous</option>
				<option value="Minor Metals" >Minor Metals</option>
				<option value="Plain paper">Plain paper</option>
				<option value="Granules">Granules</option>
				<option value="All Construction Materials">All Construction Materials</option> 
			
					</select>

								
								<!--<button class="form-control" type="submit"><i class="fa fa-search"></i></button>-->
					
						<!-- </form> -->
					</td>
				</div>
			</form>
		<div class="ajaxrslt" id="ajaxrslt_forthcomingauc">
			<!----Insert Ajax Table Here------>
			
			<!---- ------>
		</div>
	
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
