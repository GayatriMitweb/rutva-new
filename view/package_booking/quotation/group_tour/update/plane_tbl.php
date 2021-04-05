<div class="row">
    <div class="col-xs-12 text-right mg_bt_10_sm_xs">
        <button type="button" class="btn btn-excel btn-sm" onClick="addRow('tbl_package_tour_quotation_dynamic_plane_update');event_airport('tbl_package_tour_quotation_dynamic_plane_update')"><i class="fa fa-plus"></i></button>
    </div>
</div>

<div class="row">
    <div class="col-xs-12">
        <div class="table-responsive">
        <table id="tbl_package_tour_quotation_dynamic_plane_update" name="tbl_package_tour_quotation_dynamic_plane_update" class="table table-bordered pd_bt_51">
			<?php 
			$sq_plane_count = mysql_num_rows(mysql_query("select * from group_tour_quotation_plane_entries where quotation_id='$quotation_id'"));
			if($sq_plane_count==0){
				?>
				<tr>
	                <td><input class="css-checkbox" id="chk_plan-1" type="checkbox"><label class="css-label" for="chk_plan-1"> <label></td>
	                <td><input maxlength="15" value="1" type="text" name="username" placeholder="Sr. No." class="form-control" disabled /></td>
					<td><input type="text" name="from_sector-1" id="from_sector-1" placeholder="From Sector" title="From Sector" style="width: 150px;">
					</td>
					<td><input type="text" name="to_sector-1" id="to_sector-1" placeholder="To Sector" title="To Sector" style="width: 150px;">
					</td>            
		            <td><select id="airline_name-1" class="app_select2 form-control" title="Airline Name" name="airline_name-1" style="width: 200px;">
			                <option value="">Airline Name</option>
			                <?php get_airline_name_dropdown(); ?>
			            </select>
	                </td>

		            <td><select name="plane_class-1" id="plane_class-1" title="Class" style="width: 100px;">
		            	<option value="">Class</option>
		            	<option value="Economy">Economy</option>
	                    <option value="Premium Economy">Premium Economy</option>
	                    <option value="Business">Business</option>
	                    <option value="First Class">First Class</option>
		           		</select></td>	            

		            <td><input type="text" id="txt_dapart-1" name="txt_dapart-1" class="app_datetimepicker" placeholder="Departure Date and Time" title="Departure Date and Time" style="width: 100px;" value="<?= date('d-m-Y H:i:s') ?>" onchange="get_to_datetime(this.id,'txt_arrval-1')" /></td>

		            <td><input type="text" id="txt_arrval-1" name="txt_arrval-1"  style="width: 100px;" class="app_datetimepicker" placeholder="Arrival Date Time" title="Arrival Date Time" value="<?= date('d-m-Y H:i:s') ?>"/></td>
					<td><input type="hidden" id="from_city-1"> </td>
					<td><input type="hidden" id="to_city-1"></td>
		        </tr>
		        <script>
	            	$('#txt_arrval1, #txt_dapart1').datetimepicker({format:'d-m-Y H:i:s' });
	            </script>
				<?php
			}
			else{
				$count = 0;
				$sq_q_plane = mysql_query("select * from group_tour_quotation_plane_entries where quotation_id='$quotation_id'");
				while($row_q_plane = mysql_fetch_assoc($sq_q_plane)){
					$count++;
					$sq_city = mysql_fetch_assoc(mysql_query("select city_name from city_master where city_id=".$row_q_plane['from_city']));
					$sq_city2 = mysql_fetch_assoc(mysql_query("select city_name from city_master where city_id=".$row_q_plane['to_city']));
					?>
					<tr>
						<td><input class="css-checkbox" id="chk_plan-<?= $offset.$count ?>_d" type="checkbox" disabled checked><label class="css-label" for="chk_plan-<?= $offset ?>"> </label></td>
		                <td><input maxlength="15" value="<?= $count ?>" type="text" name="username" placeholder="Sr. No." class="form-control" disabled /></td>
		                <td><input type="text" name="from_sector-1" id="from_sector-<?= $offset.$count ?>_d" placeholder="From Sector" title="From Sector" style="width: 360px;" value="<?php echo ($sq_city['city_name']) ? $sq_city['city_name']." - ".$row_q_plane['from_location'] : ''; ?>">
						</td>
						<td><input type="text" name="to_sector-1" id="to_sector-<?= $offset.$count ?>_d" placeholder="To Sector" title="To Sector" style="width: 360px;" value="<?php echo ($sq_city2['city_name']) ? $sq_city2['city_name']." - ".$row_q_plane['to_location'] : ''; ?>">
						</td>	
		                 <td><select id="airline_name-<?= $offset.$count ?>_d" class="app_select2 form-control" name="airline_name-<?= $offset.$count ?>_d" style="width: 200px !important;">
		                 	<?php if($sq_airline['airline_id']!='0'){
		                 	$sq_airline = mysql_fetch_assoc(mysql_query("select * from airline_master where airline_id='$row_q_plane[airline_name]'"));
		                 	?>
			                <option value="<?= $sq_airline['airline_id'] ?>"><?= $sq_airline['airline_name'].' ('.$sq_airline['airline_code'].')' ?></option>
			                      <?php } ?>
			                      <option value="">Airline Name</option>
			                      <?php get_airline_name_dropdown(); ?>
			            </select></td>		

			            <td><select name="plane_class-<?= $offset.$count ?>_d" id="plane_class-<?= $offset.$count ?>_d" title="Class">
			            		<?php if($row_q_plane['class']!=''){ ?>
			            		<option value="<?= $row_q_plane['class'] ?>"><?= $row_q_plane['class'] ?></option>
			            		<?php } ?>
				            	<option value="">Class</option>
				            	<option value="Economy">Economy</option>
			                    <option value="Premium Economy">Premium Economy</option>
			                    <option value="Business">Business</option>
			                    <option value="First Class">First Class</option>
				            </select></td>	
			            <td><input type="text" id="txt_dapart-<?= $offset.$count ?>_d" name="txt_dapart-<?= $offset.$count ?>_d" class="app_datetimepicker" placeholder="Departure Date and Time" title="Departure Date and Time" value="<?= date('d-m-Y H:i:s', strtotime($row_q_plane['dapart_time'])) ?>" onchange="get_to_datetime(this.id,'txt_arrval-<?= $offset.$count ?>_d')" /></td>
			            <td><input type="text" id="txt_arrval-<?= $offset.$count ?>_d" name="txt_arrval-<?= $offset.$count ?>_d" class="app_datetimepicker" placeholder="Arrival Date and Time" title="Arrival Date and Time" value="<?= date('d-m-Y H:i:s', strtotime($row_q_plane['arraval_time'])) ?>" /></td>
						<td><input type="hidden" id="from_city-<?= $offset.$count ?>_d" value="<?= $row_q_plane['from_city'] ?>"></td>
						<td><input type="hidden" id="to_city-<?= $offset.$count ?>_d" value="<?= $row_q_plane['to_city'] ?>"></td>
			            <td><input type="hidden" value="<?= $row_q_plane['id'] ?>"></td>
			        </tr>

		            <script>
		            	$('#txt_arrval-<?= $offset.$count ?>_d, #txt_dapart-<?= $offset.$count ?>_d').datetimepicker({ format:'d-m-Y H:i:s' });
		            	$('#airline_name-<?= $offset.$count ?>_d').select2();
		            </script>
					<?php
				}
			}
			?>                                            
        </table>
        </div>
    </div>
</div> 
<script>
	$(document).ready(function(){
		event_airport('tbl_package_tour_quotation_dynamic_plane_update');
	});
</script>
