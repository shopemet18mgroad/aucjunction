<?php 
	//include('./header.php');
?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Closed auction</h1>
            
          </div>

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
							
								<input type="text" class="form-control" placeholder="Search.." name="search">
								<button class="form-control" type="submit"><i class="fa fa-search"></i></button>
					
						</form>
					</td>
				</div>
			
			</form>
		
		<table class="table table-striped table-bordered table-sm text-center mt-5"  width="100%" cellspacing="0">
				<thead class="bg-primary text-white">
				<tr>
					<tr><th>Auction Id</th>
						<th>Company Name </th>
						<th>Lot No</th>
						<th>Lot Name</th>
						<th>Location</th>
						<th>Starting Date</th>
						<th>Closing Date</th>
						<th>Status</th>
					</tr>
				</tr>
				</thead>
				<tbody>
				<tr><td><a href="">EEMT/BBR/OMFED LTD/1/Shashi Nagar/99087/19-20</a></td>		
					<td class="up">BHEL Ltd.</td>
					<td class="up">M293</td>
					<td class="up">Horizontal Boring Machine</td>
					<td class="up">Uttrakhand</td>
					<td class="up">20-07-2019</td>
					<td class="up">21-07-2019</td>
					<td class="up" style="color:orange">Shortlisted</td>
				</tr>
				<tr><td><a href="">EEMT/BBR/OMFED LTD/1/Shashi Nagar/99087/19-20</a></td>												
					<td class="up">BSP</td>
					<td class="up">E687</td>
					<td class="up">SS Iron rod</td>
					<td class="up">Bhilai</td>
					<td class="up">16-03-2020</td>
					<td class="up">17-03-2020</td>
					<td class="up" style="color:green"><b>Winner</b></td>
				</tr>
				<tr><td><a href="">EEMT/BBR/OMFED LTD/1/Shashi Nagar/99087/19-20</a></td>												
					<td class="up">Paradip port  trust</td>
					<td class="up">E689</td>
					<td class="up">Jig Boring Machine</td>
					<td class="up">Gandhi</td>
					<td class="up">14-01-2020</td>
					<td class="up">15-01-2020</td>
					<td class="up" style="color:orange">Shortlisted</td>
				</tr>
				<tr><td><a href="">EEMT/BBR/OMFED LTD/1/Shashi Nagar/99087/19-20</a></td>												
					<td class="up">Paradip </td>
					<td class="up">E689</td>
					<td class="up">Boring Machine</td>
					<td class="up">Gandhi</td>
					<td class="up">14-01-2020</td>
					<td class="up">15-01-2020</td>
					<td class="up">Lost</td>
				</tr>
				</tbody>
		 </table>
		</div>
		</div>
		<!--Pagination -->

        <div class="row">
		
			<div class="col-sm-12 col-md-10">
				<div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
				<ul class="pagination offset-lg-11">
				<li class="paginate_button page-item previous disabled" id="dataTable_previous">
				<a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
				</li>
				<li class="paginate_button page-item active">
				<a href="#" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">1</a>
				</li>
				<li class="paginate_button page-item next disabled" id="dataTable_next">
				<a href="#" aria-controls="dataTable" data-dt-idx="2" tabindex="0" class="page-link">Next</a>
				</li>
				</ul>
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
