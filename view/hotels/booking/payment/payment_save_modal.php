<?php 
$branch_status = $_POST['branch_status'];
$branch_admin_id = $_SESSION['branch_admin_id'];
$role_id = $_SESSION['role_id'];
?>
<input type="hidden" id="branch_admin_id1" name="branch_admin_id1" value="<?= $branch_admin_id ?>" >
<form id="frm_payment_save">
<div class="modal fade" id="payment_save_modal" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">New Receipt</h4>
      </div>
      <div class="modal-body">

        <div class="row">
          <div class="col-md-4 col-sm-6 col-xs-12 mg_bt_10">
              <select name="booking_id" id="booking_id" style="width:100%" onchange="get_outstanding('hotel',this.id);">
             <?php  get_hotel_booking_dropdown($role, $branch_admin_id, $branch_status,$emp_id,$role_id)  ?>
              </select>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 mg_bt_10">
            <input type="text" id="payment_date" name="payment_date" title="Date" placeholder="*Date" value="<?= date('d-m-Y') ?>" onchange="check_valid_date(this.id)">
          </div>          
         
          <div class="col-md-4 col-sm-6 col-xs-12 mg_bt_10">
            <select id="payment_mode" name="payment_mode" required title="Mode" onchange="payment_master_toggles(this.id, 'bank_name', 'transaction_id', 'bank_id');get_identifier_block('identifier','payment_mode','credit_card_details','credit_charges');get_credit_card_charges('identifier','payment_mode','payment_amount','credit_card_details','credit_charges')">
                <?php get_payment_mode_dropdown(); ?>
            </select>  
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 mg_bt_10">
            <input type="text" id="payment_amount" name="payment_amount" title="Amount" placeholder="*Amount" onchange="validate_balance(this.id);payment_amount_validate(this.id,'payment_mode','transaction_id','bank_name','bank_id');get_credit_card_charges('identifier','payment_mode','payment_amount','credit_card_details','credit_charges');">
          </div>
         
          <div class="col-md-4 col-sm-6 col-xs-12 mg_bt_10">
            <input type="text" id="bank_name" name="bank_name" onchange="fname_validate(this.id);"  class="form-control bank_suggest" placeholder="Bank Name" title="Bank Name" readonly />
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 mg_bt_10">
            <input type="text" id="transaction_id" name="transaction_id" onchange="validate_specialChar(this.id)" class="form-control" placeholder="Cheque No / ID" title="Cheque No / ID" readonly />
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <select name="bank_id" id="bank_id" title="Select Bank" disabled>
              <?php get_bank_dropdown() ?>
            </select>
          </div>
          </div>
				<div class="row mg_tp_10">
					<div class="col-md-4 col-sm-6 col-xs-12">
						<input class="hidden" type="text" id="credit_charges" name="credit_charges" title="Credit card charges" disabled>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<select class="hidden" id="identifier" onchange="get_credit_card_data('identifier','payment_mode','credit_card_details')" title="Identifier(4 digit)" required
						><option value=''>Select Identifier</option></select>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<input class="hidden" type="text" id="credit_card_details" name="credit_card_details" title="Credit card details" disabled>
					</div>
				</div>
        <div class="row mg_tp_10">
          <div class="col-md-4 col-sm-3">
            <input type="text" id="outstanding" name="outstanding" class="form-control" placeholder="Outstanding" title="Outstanding" readonly/>
          </div>
        </div>
        <div class="row mg_tp_20">
          <div class="col-md-9 col-sm-9">
           <span style="color: red;line-height: 35px;" data-original-title="" title="" class="note"><?= $txn_feild_note ?></span>
         </div>
        </div>

        <div class="row text-center mg_tp_20">
          <div class="col-xs-12">
              <button id="btn_payment_save" class="btn btn-sm btn-success"><i class="fa fa-floppy-o"></i>&nbsp;&nbsp;Save</button>
          </div>
        </div>


      </div>     
    </div>
  </div>
</div>
</form>
<script>
$('#payment_date').datetimepicker({ timepicker:false, format:'d-m-Y' });
$('#booking_id').select2();
$(function(){
  $('#frm_payment_save').validate({
      rules:{
              booking_id : { required: true },
              payment_amount : { required: true, number:true },
              payment_date : { required: true },
              payment_mode : { required : true },
              bank_name : { required : function(){  if($('#payment_mode').val()!="Cash"){ return true; }else{ return false; }  }  },
              transaction_id : { required : function(){  if($('#payment_mode').val()!="Cash"){ return true; }else{ return false; }  }  },     
              bank_id : { required : function(){  if($('#payment_mode').val()!="Cash"){ return true; }else{ return false; }  }  },     
      },
      submitHandler:function(form){

              var booking_id = $('#booking_id').val();
              var payment_amount = $('#payment_amount').val();
              var payment_date = $('#payment_date').val();
              var payment_mode = $('#payment_mode').val();
              var bank_name = $('#bank_name').val();
              var transaction_id = $('#transaction_id').val();
              var bank_id = $('#bank_id').val();
              var branch_admin_id = $('#branch_admin_id1').val();
              var credit_charges = $('#credit_charges').val();
              var credit_card_details = $('#credit_card_details').val();
              var base_url = $('#base_url').val();
              //Validation for booking and payment date in login financial year
              var check_date1 = $('#payment_date').val();
              $.post(base_url+'view/load_data/finance_date_validation.php', { check_date: check_date1 }, function(data){
                if(data !== 'valid'){
                  error_msg_alert("The Payment date does not match between selected Financial year.");
                  return false;
                } else{
                    $('#btn_payment_save').button('loading');
                   if($('#whatsapp_switch').val() == "on") whatsapp_send_r(booking_id, payment_amount, base_url);
                    $.ajax({
                      type:'post',
                      url: base_url+'controller/hotel/payment/payment_save.php',
                      data:{ booking_id : booking_id, payment_amount : payment_amount, payment_date : payment_date, payment_mode : payment_mode, bank_name : bank_name, transaction_id : transaction_id, bank_id : bank_id, branch_admin_id : branch_admin_id,credit_charges:credit_charges,credit_card_details:credit_card_details },
                      success:function(result){

                        $('#btn_payment_save').button('reset');
                        var msg = result.split('-');
                        if(msg[0]=='error'){
                          msg_alert(result);
                        }
                        else{
                          msg_alert(result);
                          reset_form('frm_payment_save');
                          $('#payment_save_modal').modal('hide');  
                          payment_list_reflect();
                        }
                      }
                    });
                  }
              });
      }
  });
});
</script>