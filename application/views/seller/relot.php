<?php 
	//include('./header.php');
?>
      

	  <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Re-Lot</h1>
           
          </div>

          <!-- Content Row -->
          <div class="row p-2">

            <!-- Earnings (Monthly) Card Example -->
			<div class="col-xl-12 col-lg-7">
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
               <table class="table table-striped table-sm text-left p-4" id="dataTable" width="100%" cellspacing="0">
    <thead class="bg-info text-white">
      <tr>
		<th colspan="10"><center>Re-Lot</center></th>  
      </tr>
    </thead>
    <tbody>
	<form name="myForm" action="<?php echo base_url();?>Seller_relot_update" method="POST" enctype="multipart/form-data">
	<tr>
		  <td width="11%">Auction Id</td>
		  <td width="4%" style="text-color:blue;"> <input type="text" class="form-control w-50" id="sauctionid" name="sauctionid" value="<?php echo  $scomps[0]->sauctionid; ?>" readonly></td>
	  </tr>
	  <tr>
		  <td>Seller</td>
		  <td><input class="form-control w-50"  type="text" id="sname" name="sname" placeholder="Search" value="<?php echo $scomps[0]->sname; ?>" aria-label="Search" readonly>
		</td>
	  </tr>
	  
	  <!--<tr>
		  <td>Lot No.</td>
		  <td style="color:blue;"><input class="form-control w-50"  type="text" id="slotno" name="slotno" aria-label="Search" readonly></td>
	  </tr>-->
      
	  <tr>
	   
		  <td>Lot Name</td>
		  <td><input class="form-control w-50" type="hidden" id="slotno" name="slotno" value="<?php echo $scomps[0]->slotno; ?>" >
		  <input class="form-control w-50" type="text" id="slotname" name="slotname" value="<?php echo $scomps[0]->slotname; ?>"></td>
	  </tr>
	  <tr>
		  <td width="11%">Category</td>
		  <td width="4%"><select class="form-control w-50" id="scategory" name="scategory">
				<option value="<?php echo $scomps[0]->scategory; ?>" selected><?php echo $scomps[0]->scategory; ?></option>
				<option value="Ferrous">Ferrous</option>
				<option value="Non Ferrous">Non Ferrous</option>
				<option value="Minor Metals" >Minor Metals</option>
				<option value="Plain paper">Plain paper</option>
				<option value="Granules">Granules</option>
				<option value="General">General</option>
				<option value="PCB">PCB</option>
				<option value="Dismantling">Dismantling</option>
				<option value="E Waste">E Waste</option>
				<option value="Machineries">Machineries</option>
				<option value="Properties">Properties</option>
				<option value="Miscellaneous">Miscellaneous</option>
				<option value="Timbers">Timbers</option>
				<option value="Transformers">Transformers</option>
				<option value="Hazardous">Hazardous</option>
				<option value="Plastic">Plastic</option>
				<option value="Oil">Oil</option>
				<option value="Coolant">Coolant</option>
				<option value="All Construction Materials">All Construction Materials</option>
				</select>
			</td>
	  </tr>
	   <tr>
		  <td>Description</td>
		  <td><textarea class="form-control w-75" type="text" id="sdescription" name="sdescription" value="<?php echo $scomps[0]->sdescription; ?>"><?php echo $scomps[0]->sdescription; ?></textarea></td>
	  </tr>
	  <tr>  												
		<td>Location Of Lot</td>
		<td><input class="form-control w-50" type="text" id="slotlocation" name="slotlocation" value="<?php echo $scomps[0]->slotlocation; ?>"></td>
	</tr>
	
	
	<tr>
		<td>Unit Of Measurement</td>
		<td><select class="form-control w-50" onchange="change();" id="sunitmeasurment" name="sunitmeasurment" value="<?php echo $scomps[0]->sunitmeasurment; ?>">
				<option value="<?php echo $scomps[0]->sunitmeasurment; ?>" selected><?php echo $scomps[0]->sunitmeasurment; ?></option>
				<option value="KG" selected>KG</option>
				<option value="Metric Ton">Metric Ton</option>
				<option value="Lot">Lot</option>
				<option value="Liter">Liter</option>
				<option value="Number">Number</option>
				<option value="Meter">Meter</option>
				</select></td>
	</tr>
	<tr>
		<td>Qty</td>
		<td><input class="form-control w-50" type="text" id="sqty" name="sqty" value="<?php echo $scomps[0]->sqty; ?>"></td>
	</tr>
	<tr>
		<td>Bid Base</td>
		<td><select class="form-control w-50" id="sbidbase" name="sbidbase" value="<?php echo $scomps[0]->sbidbase; ?>">
				<option value="<?php echo $scomps[0]->sbidbase; ?>" selected><?php echo $scomps[0]->sbidbase; ?></option>
				<option value="KG" selected>KG</option>
				<option value="Metric Ton">Metric Ton</option>
				<option value="Lot">Lot</option>
				<option value="Liter">Liter</option>
				<option value="Number">Number</option>
				<option value="Meter">Meter</option>
				</select></td>
	</tr>
	<tr>
	<td>GST</td>
	<td><input class="form-control w-50" type="text" id="sgst" name="sgst" placeholder="Exp. Max 28%" value="<?php echo $scomps[0]->sgst; ?>"></td>
    </tr>
	<tr>
		<td>HSN Code.</td>
		<td><input class="form-control w-50" type="text" id="shsncode" name="shsncode" value="<?php echo $scomps[0]->shsncode; ?>"></td>
    </tr>
  
     <tr>
		<td>Other Tax</td>
		<td><input class="form-control w-50" type="text" id="sothertax" name="sothertax"value="<?php echo $scomps[0]->sothertax; ?>"></td>
    </tr>
	<tr>
		<td>EMD Amount</td>
		<td><input class="form-control w-50" type="text" id="semdamount" name="semdamount"value="<?php echo $scomps[0]->semdamount; ?>"></td>
    </tr>
	<tr>

		<td>Minimum Increament</td>
		<td><input class="form-control w-50" type="text" id="sminincre" name="sminincre"value="<?php echo $scomps[0]->sminincre; ?>"></td>
	</tr>	
	
	<tr>

		<td>Expected Price</td>
		<td><input class="form-control w-50" type="text" id="sprice" name="sprice" value="<?php echo $scomps[0]->sprice; ?>"></td>
	</tr>
	<tr>
		<td>Starting Bid Price</td>
		<td><input class="form-control w-50" type="text" id="sstartbidprice" name="sstartbidprice" value="<?php echo $scomps[0]->sstartbidprice; ?>"></td>
	</tr>
	
	<tr>
		<td>Lifting Period</td>
		<td><input class="form-control w-75" type="datetime-local" id="sliftingperiod2" name="sliftingperiod2" value="<?php echo date('Y-m-d\TH:i', strtotime($scomps[0]->sliftingperiod2)); ?>">
		<input class="form-control w-50 mt-2" type="text" id="sliftingperiod" name="sliftingperiod" placeholder="Exp.15 days" value="<?php echo $scomps[0]->sliftingperiod; ?>"></td>
    </tr>
	<tr>
		<td>PCB Certificate</td>
		<td><div class="form-check form-check-inline">
			<input type="checkbox" class="form-check-input" id="spcbcertificate1[]" name="spcbcertificate" value="1" <?php
if($scomps[0]->spcbcertificate){echo "checked";}else{echo "unchecked";}		?>>
			<label class="form-check-label" for="exampleCheck1">Yes</label>
			</div>
			<div class="form-check form-check-inline">
			<input type="checkbox" class="form-check-input" id="spcbcertificate2[]" name="spcbcertificate" value="0" <?php
if($scomps[0]->spcbcertificate){echo "unchecked";}else{echo "checked";}		?>>
			<label class="form-check-label" for="exampleCheck1">No</label>
			</div></td>
    </tr>
  
    </tbody>
  </table>
  
  <center>
  
	<input type="submit"  name="submit" onclick="return validatelot()" class="btn btn-info text-white" value="Update Lot" data-dismiss="modal">
 <a href="<?php echo base_url();?>Seller_unsoldproduct"><button  class="btn btn-info">Cancel</button></a>
  </center>
  </form>
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
	<script>
  function change() {
  if (document.getElementById('sunitmeasurment').value == 'KG')
    document.getElementById("sbidbase").value = 'KG';
  else if (document.getElementById('sunitmeasurment').value == 'Metric Ton')
    document.getElementById("sbidbase").value = 'Metric Ton';
  else if (document.getElementById('sunitmeasurment').value == 'Lot')
    document.getElementById("sbidbase").value = 'Lot';
  else if (document.getElementById('sunitmeasurment').value == 'Liter')
    document.getElementById("sbidbase").value = 'Liter';
  else if (document.getElementById('sunitmeasurment').value == 'Number')
    document.getElementById("sbidbase").value = 'Number';
  else if (document.getElementById('sunitmeasurment').value == 'Meter')
    document.getElementById("sbidbase").value = 'Meter';
};

  </script>
<?php 
	//include('./footer.php');
?>

</body>

</html>
