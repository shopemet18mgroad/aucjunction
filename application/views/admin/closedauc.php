<?php 
	//include('./header.php');
?>
	
<link href="<?php echo base_url()."web_files/";?>css/tablestyle.css" rel="stylesheet" type="text/css">	
	
	
	
	
    <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Closed Auction List</h1>
            
          </div>

          <!-- Content Row -->
          <div class="row w-100">

            <!-- Earnings (Monthly) Card Example -->
			<div class="col-md-10 offset-sm-1 p-2">
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
			   <form class="form-inline">
					<div class="form-group mr-4 offset-sm-4">
						<td colspan="5">
						<!-- <form action="/action_page.php"> -->
								<!--<label for="gettable"></label>
								<input type="text" class="form-control gettable" id="gettable_closedauc" placeholder="Enter Company Name To Fetch Result"  size="70" name="search">
								
								<!--<button class="form-control" type="submit"><i class="fa fa-search"></i></button>-->
					
						<!-- </form> -->
					</td>
				</div>
			
		
			</form>
		
		<table class="table table-striped table-bordered table-sm text-center mt-5 " id="dataTable" width="100%" cellspacing="0">
				<thead class="bg-primary text-white">
				
					<tr><th>Auction Id</th>
						<th>Lot No</th>
						<th>Lot Name</th>
						<th>Buyer</th>
						<th>Closing Date/Time</th>
						<th>Bid Final Value</th>
						<th>Status</th>
					</tr>
			
				</thead>
				<tbody>
					<?php if(isset($sqldatarec)){ foreach($sqldatarec as $sqldata){ $datareciver = explode('|',$sqldata);?>
	<?php //print_r($datareciver); die; ?>
					<tr>												
						<b> <td data-label="Auction Id"> </b><?php echo $datareciver[0]; ?></td>
						<td data-label="Lot No"><?php echo $datareciver[1]; ?></td>
						<td data-label="Lot Name"><?php echo $datareciver[5]; ?></td>
						<td data-label="Buyer"><?php echo $datareciver[2];?></td>
						<td data-label="Closing Date/Time"><?php $aucclosettime = $datareciver[4];
							  $tmp = explode('.',$aucclosettime);
							  $aucclosettime = $tmp[0];
							  echo $aucclosettime;
						 ?></td>
						<td data-label="Bid Final Value"><?php echo $datareciver[3]; ?></td>
						<td style="color:orange;" data-label="Status"><b><?php if($datareciver[2]){
						echo "Shortlisted"	;
						}
						 ?></b></td>			
					</tr>
					
					<?php  }} ?>
				
				</tbody>
		 </table>
		</div>
		</div>
		 <!--Pagination -->

    
		
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
