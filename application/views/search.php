<?php 
	//include('./header.php');
?>

		<div class="container">
		  <div class="row">

			<div class="col-md-12">
					<div class="auclist-containertray">
							
							<div class="tab-holder w-100 ">
						
							<div class="tab-content w-100">
								<div class="tab-pane h-100 p-3 active border border-primary" id="home" role="tabpanel" aria-labelledby="home-tab" onclick="one()">
										<div class="table-holder"> 
											<table class="table table-bordered display" id="">
												<thead class="thead-auc">
													<tr>
														<th width="10%">SL No</th>
														<th width="30%">AUCTION ID</th>
														<th width="30%">DESCRIPTION</th>
														<th width="30%">LOCATION</th>
														
														
													</tr>
												</thead>
												<tbody>
													<?php if($searchresult){
														//print_r($searchresult);die;
														$xr = 1;
													foreach($searchresult as $searchres){?>
														<tr>
														<td><?php echo $xr;?></td>
														<td><?php echo $searchres['sauctionid'];?></td>
														<td><?php echo $searchres['sdescription'];?></td>
														<td><?php echo $searchres['slotlocation'];?></td>
													</tr>
														
													<?php $xr++;}}
														?>
													
													
										
												</tbody>
											</table>
										</div> 
			<div class="row mt-1">
			<div class="col-sm-12 col-md-10">
				<div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
				<ul class="pagination offset-lg-11">
				<li class="paginate_button page-item previous disabled" id="dataTable_previous">
				<a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
				</li>
				<li class="paginate_button page-item active">
				<a href="#home" aria-controls="dataTable" id="home" data-dt-idx="1" tabindex="0" class="page-link">1</a>
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
				
			
					</div>
					
			</div>
			
		  </div>
		</div>
	<script>
$(document).ready(function() {
    $('table.display').DataTable();
} );
</script>
		<?php 
	//include('./footer.php');
	?>