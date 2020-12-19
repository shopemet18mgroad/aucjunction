<?php 
	//include('./header.php');
?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Bid Data</h1>
            
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
			<div class="col-xl-12 col-lg-7">
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
			 <table class="table table-striped table-bordered table-sm text-center mt-5" id="dataTable" width="100%" cellspacing="0">
		<thead class="bg-warning text-white">
		<tr>
		<th colspan="12">Bidding History</th>
		</tr>
		
		
			<tr class="bg-primary text-white">
					<td>Auction Id</td>
					<td>Lot No</td>
					<td>Close Time</td>
					
				</tr>
				</thead>

				<tbody>
				<?php foreach($sqldata as $sqldata[0]){?>
				<tr>
				
					<td><b><a href="<?php echo base_url()."Seller_biddingdatadetail/biddetail2/".str_ireplace('/','-',$sqldata[0]->sauctionid)."/".$sqldata[0]->slotno;?>"><?php echo $sqldata[0]->sauctionid; ?></b></td>
					<td><?php echo $sqldata[0]->slotno; ?></td>
					<td><?php echo $sqldata[0]->saucclosedate_time; ?></td>
				</tr>
			<?php }?>
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
<script>
$(document).ready(function() {
    $('table.display').DataTable();
} );
</script>
  <!-- Scroll to Top Button-->
<?php 
	//include('./footer.php');
?>
</body>

</html>
