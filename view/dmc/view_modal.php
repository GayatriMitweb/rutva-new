<?php 

include "../../model/model.php";

 

$dmc_id = $_POST['dmc_id'];

$sq_dmc= mysql_fetch_assoc(mysql_query("select * from dmc_master where dmc_id='$dmc_id'"));
$mobile_no = $encrypt_decrypt->fnDecrypt($sq_dmc['mobile_no'], $secret_key);
$email_id = $encrypt_decrypt->fnDecrypt($sq_dmc['email_id'], $secret_key);

 

?>

<div class="modal fade profile_box_modal" id="dmc_view_modal" role="dialog" aria-labelledby="myModalLabel">

  	<div class="modal-dialog modal-lg" role="document">

    	<div class="modal-content">

      		<div class="modal-body profile_box_padding">

	      		<div>

				  <!-- Nav tabs -->

				  	<ul class="nav nav-tabs" role="tablist">

				    	<li role="presentation" class="active"><a href="#basic_information" aria-controls="home" role="tab" data-toggle="tab" class="tab_name">DMC Supplier Information</a></li>

				    	<li class="pull-right"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></li>

				  	</ul>



		            <div class="panel panel-default panel-body fieldset profile_background">

						<!-- Tab panes1 -->

						<div class="tab-content">

						    <!-- *****TAb1 start -->

						    <div role="tabpanel" class="tab-pane active" id="basic_information">

						     	<div class="row">

									<div class="col-md-12">

										<div class="profile_box main_block">

							        	<?php 

							        		$sq_city = mysql_fetch_assoc(mysql_query("select * from city_master where city_id='$sq_dmc[city_id]'")); 

							        	?>

							        		<div class="row">

           										<div class="col-md-6 right_border_none_sm" style="border-right: 1px solid #ddd">

							        				<span class="main_block"> 

							        					<i class="fa fa-angle-double-right cost_arrow" aria-hidden="true"></i>

							        				    <?php echo "<label>City Name <em>:</em></label> " .$sq_city['city_name']; ?>

							        				</span>

							        				<span class="main_block">

							        					<i class="fa fa-angle-double-right cost_arrow" aria-hidden="true"></i>

							        				    <?php echo "<label>DMC Name <em>:</em></label> " .$sq_dmc['company_name']; ?> 

							        				</span>

							        				<span class="main_block">

							        					<i class="fa fa-angle-double-right cost_arrow" aria-hidden="true"></i>

							        				    <?php echo "<label>Mobile No <em>:</em></label> " .$mobile_no ; ?>

							        				</span>

							        				<span class="main_block">

							        					<i class="fa fa-angle-double-right cost_arrow" aria-hidden="true"></i>

							        				    <?php echo "<label>Landline No <em>:</em></label> " .$sq_dmc['landline_no']; ?>

							        				</span>

							        				<span class="main_block"> 

							        					<i class="fa fa-angle-double-right cost_arrow" aria-hidden="true"></i>

							        				    <?php echo "<label>Email ID <em>:</em></label> " .$email_id; ?>

							        				</span>

							        				<span class="main_block">

							        					<i class="fa fa-angle-double-right cost_arrow" aria-hidden="true"></i>

							        				    <?php echo "<label>Contact Person <em>:</em></label> " .$sq_dmc['contact_person_name']; ?> 

							        				</span>

							        				<span class="main_block">

							        					<i class="fa fa-angle-double-right cost_arrow" aria-hidden="true"></i>

							        				    <?php echo "<label>Emergency Contact  <em>:</em></label> " .$sq_dmc['immergency_contact_no']; ?>

							        				</span>
							        				<?php $sq_state = mysql_fetch_assoc(mysql_query("select * from state_master where id='$sq_dmc[state_id]'"));
                   									 ?> 
							        				 <span class="main_block">

										                  <i class="fa fa-angle-double-right cost_arrow" aria-hidden="true"></i>

										                  <?php echo "<label>State <em>:</em></label>".$sq_state['state_name'] ?>

										            </span>	

							        				<span class="main_block">

							        					<i class="fa fa-angle-double-right cost_arrow" aria-hidden="true"></i>

							        				    <?php echo "<label>Website <em>:</em></label> " .$sq_dmc['website']; ?>

							        				</span>
							        				<span class="main_block">

							        				<i class="fa fa-angle-double-right cost_arrow" aria-hidden="true"></i> 

							        				    <?php echo "<label>Country <em>:</em></label> " .$sq_dmc['country']; ?>

							        				</span>

							        			</div>

							        			<div class="col-md-6">

							        				<span class="main_block"> 

							        					<i class="fa fa-angle-double-right cost_arrow" aria-hidden="true"></i>

							        				    <?php echo "<label>Bank Name <em>:</em></label> " .$sq_dmc['bank_name']; ?>

							        				</span>
							        				<span class="main_block">

							        					<i class="fa fa-angle-double-right cost_arrow" aria-hidden="true"></i>

							        				    <?php echo "<label>Account Name <em>:</em></label> " .$sq_dmc['account_name']; ?> 

							        				</span>
							        				<span class="main_block">

							        					<i class="fa fa-angle-double-right cost_arrow" aria-hidden="true"></i>

							        				    <?php echo "<label>Account No <em>:</em></label> " .$sq_dmc['account_no']; ?> 

							        				</span>

							        				<span class="main_block">

							        					<i class="fa fa-angle-double-right cost_arrow" aria-hidden="true"></i>

							        				    <?php echo "<label>Branch <em>:</em></label> " .$sq_dmc['branch']; ?>

							        				</span>

							        				<span class="main_block">

							        					<i class="fa fa-angle-double-right cost_arrow" aria-hidden="true"></i>

							        				    <?php echo "<label>IFSC/Swift Code <em>:</em></label> " .$sq_dmc['ifsc_code']; ?>

							        				</span>
							        				<span class="main_block">

							        					<i class="fa fa-angle-double-right cost_arrow" aria-hidden="true"></i>

							        				    <?php echo "<label>PAN/TAN No <em>:</em></label> " .$sq_dmc['pan_no']; ?>

							        				</span>
							        				<span class="main_block">

							        					<i class="fa fa-angle-double-right cost_arrow" aria-hidden="true"></i>

							        				    <?php echo "<label>Tax No <em>:</em></label> " .strtoupper($sq_dmc['service_tax_no']) ?>

							        				</span>
							        				<span class="main_block">

							        					<i class="fa fa-angle-double-right cost_arrow" aria-hidden="true"></i>

							        				    <?php echo "<label>Status <em>:</em></label> " .$sq_dmc['active_flag']; ?> 

							        				</span>

								    			</div> 

								    		</div>
											<div class="row">
											<div class="col-md-12">
												<span class="main_block">
													<i class="fa fa-angle-double-right cost_arrow" aria-hidden="true"></i>
													<?php echo "<label>Address <em>:</em></label> " .$sq_dmc['dmc_address']; ?>
												</span>
											</div>
											</div>
								    	</div>

								    </div>



								</div>  

						    </div>

						    <!-- ********Tab1 End******** --> 

						</div>

					</div>

		        </div>

    		</div>

    	</div>

	</div>

</div>



<script src="<?php echo BASE_URL ?>js/app/footer_scripts.js"></script>

<script>

$('#dmc_view_modal').modal('show');

</script>  

 

