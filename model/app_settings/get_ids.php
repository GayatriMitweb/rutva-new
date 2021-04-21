<?php 

//Group booking ID return

function get_group_booking_id($tourwise_traveler_id,$year){ 
  global $app_version;
  $year = ($year == '') ? $app_version : $year;
  $year = substr( $year, -2 );
  $nextyear = intval($year) + 1;
  return 'GB/'.$year.'-'.$nextyear.'/'.$tourwise_traveler_id; }

function get_group_booking_payment_id($payment_id,$year){ global $app_version;
  $year = ($year == '') ? $app_version : $year; 
  $year = substr( $year, -2 );
  $nextyear = intval($year) + 1;
  return 'GB/'.$year.'-'.$nextyear.'/P/'.$payment_id; }

function get_group_booking_group_refund_id($refund_id,$year){ global $app_version;
  $year = ($year == '') ? $app_version : $year; 
  $year = substr( $year, -2 );
  $nextyear = intval($year) + 1;
  return 'GB/'.$year.'-'.$nextyear.'/GR/'.$refund_id; }

function get_group_booking_traveler_refund_id($refund_id,$year){ global $app_version;
  $year = ($year == '') ? $app_version : $year; 
  $year = substr( $year, -2 );
  $nextyear = intval($year) + 1;
  return 'GB/'.$year.'-'.$nextyear.'/TR/'.$refund_id; }



//Package booking ID return

function get_package_booking_id($booking_id,$year){ global $app_version;
  $year = ($year == '') ? $app_version : $year; 
  $year = substr( $year, -2 );
  $nextyear = intval($year) + 1;
  return 'PB/'.$year.'-'.$nextyear.'/'.$booking_id; }

function get_package_booking_payment_id($payment_id,$year){ global $app_version;
  $year = ($year == '') ? $app_version : $year; 
  $year = substr( $year, -2 );
  $nextyear = intval($year) + 1;
  return 'PB/'.$year.'-'.$nextyear.'/P/'.$payment_id; }

function get_package_booking_refund_id($refund_id,$year){ global $app_version;
  $year = ($year == '') ? $app_version : $year; 
  $year = substr( $year, -2 );
  $nextyear = intval($year) + 1;
  return 'PB/'.$year.'-'.$nextyear.'/R/'.$refund_id; }

function get_b2b_booking_id($booking_id,$year){
  $year = substr( $year, -2 );
  $nextyear = intval($year) + 1;
  return 'B2B/'.$year.'-'.$nextyear.'/'.$booking_id; }

function get_b2b_booking_refund_id($booking_id,$year){
  $year = substr( $year, -2 );
  $nextyear = intval($year) + 1;
  return 'B2B/'.$year.'-'.$nextyear.'/R/'.$booking_id;
}

//Visa booking ID return
function get_visa_booking_id($visa_id, $year){
  global $app_version;
  $year = ($year == '') ? $app_version : $year;
  $year = substr( $year, -2 );
  $nextyear = intval($year) + 1;
 return 'VS/'.$year.'-'.$nextyear.'/'.$visa_id; 
}

function get_visa_booking_payment_id($payment_id,$year){ global $app_version;
  $year = ($year == '') ? $app_version : $year; 
  $year = substr( $year, -2 );
  $nextyear = intval($year) + 1;
  return 'VS/'.$year.'-'.$nextyear.'/P/'.$payment_id; }

function get_visa_booking_refund_id($refund_id,$year){ global $app_version;
  $year = ($year == '') ? $app_version : $year;  
  $year = substr( $year, -2 );
  $nextyear = intval($year) + 1;
  return 'VS/'.$year.'-'.$nextyear.'/R/'.$refund_id; }



//Passport booking ID return

function get_passport_booking_id($passport_id,$year){ global $app_version;
  $year = ($year == '') ? $app_version : $year; 
  $year = substr( $year, -2 );
  $nextyear = intval($year) + 1;
  return 'PS/'.$year.'-'.$nextyear.'/'.$passport_id; }

function get_passport_booking_payment_id($payment_id,$year){ global $app_version;
  $year = ($year == '') ? $app_version : $year; 
  $year = substr( $year, -2 );
  $nextyear = intval($year) + 1;
  return 'PS/'.$year.'-'.$nextyear.'/P/'.$payment_id; }

function get_passport_booking_refund_id($refund_id,$year){ global $app_version;
  $year = ($year == '') ? $app_version : $year; 
  $year = substr( $year, -2 );
  $nextyear = intval($year) + 1;
  return 'PS/'.$year.'-'.$nextyear.'/R/'.$refund_id; }



//Ticket booking ID return

function get_ticket_booking_id($ticket_id,$year){ global $app_version;
  $year = ($year == '') ? $app_version : $year; 
  $year = substr( $year, -2 );
  $nextyear = intval($year) + 1;
  return 'FLT/'.$year.'-'.$nextyear.'/'.$ticket_id; }

function get_ticket_booking_payment_id($payment_id,$year){ global $app_version;
  $year = ($year == '') ? $app_version : $year; 
  $year = substr( $year, -2 );
  $nextyear = intval($year) + 1;
  return 'FLT/'.$year.'-'.$nextyear.'/P/'.$payment_id; }

function get_ticket_booking_refund_id($refund_id,$year){ global $app_version;
  $year = ($year == '') ? $app_version : $year; 
  $year = substr( $year, -2 );
  $nextyear = intval($year) + 1;
  return 'FLT/'.$year.'-'.$nextyear.'/R/'.$refund_id; }



//Train Ticket booking ID return

function get_train_ticket_booking_id($train_ticket_id,$year){ global $app_version;
  $year = ($year == '') ? $app_version : $year; 
  $year = substr( $year, -2 );
  $nextyear = intval($year) + 1;
  return 'TTK/'.$year.'-'.$nextyear.'/'.$train_ticket_id; }

function get_train_ticket_booking_payment_id($payment_id,$year){ global $app_version;
  $year = ($year == '') ? $app_version : $year; 
  $year = substr( $year, -2 );
  $nextyear = intval($year) + 1;
  return 'TTK/'.$year.'-'.$nextyear.'/P/'.$payment_id; }

function get_train_ticket_booking_refund_id($refund_id,$year){ global $app_version;
  $year = ($year == '') ? $app_version : $year; 
  $year = substr( $year, -2 );
  $nextyear = intval($year) + 1;
  return 'TTK/'.$year.'-'.$nextyear.'/R/'.$refund_id; }



//Hotel booking ID return

function get_hotel_booking_id($booking_id,$year){ global $app_version;
  $year = ($year == '') ? $app_version : $year; 
  $year = substr( $year, -2 );
  $nextyear = intval($year) + 1;
  return 'HB/'.$year.'-'.$nextyear.'/'.$booking_id; }

function get_hotel_booking_payment_id($payment_id,$year){ global $app_version;
  $year = ($year == '') ? $app_version : $year; 
  $year = substr( $year, -2 );
  $nextyear = intval($year) + 1;
  return 'HB/'.$year.'-'.$nextyear.'/P/'.$payment_id; }

function get_hotel_booking_refund_id($refund_id,$year){ global $app_version;
  $year = ($year == '') ? $app_version : $year; 
  $year = substr( $year, -2 );
  $nextyear = intval($year) + 1;
  return 'HB/'.$year.'-'.$nextyear.'/R/'.$refund_id; }



//Car rental booking ID return

function get_car_rental_booking_id($booking_id,$year){ global $app_version;
  $year = ($year == '') ? $app_version : $year; 
  $year = substr( $year, -2 );
  $nextyear = intval($year) + 1;
  return 'CR/'.$year.'-'.$nextyear.'/'.$booking_id; }

function get_car_rental_booking_payment_id($payment_id,$year){ global $app_version;
  $year = ($year == '') ? $app_version : $year; 
  $year = substr( $year, -2 );
  $nextyear = intval($year) + 1;
  return 'CR/'.$year.'-'.$nextyear.'/P/'.$payment_id; }

function get_car_rental_booking_refund_id($refund_id,$year){ global $app_version;
  $year = ($year == '') ? $app_version : $year; 
  $year = substr( $year, -2 );
  $nextyear = intval($year) + 1;
  return 'CR/'.$year.'-'.$nextyear.'/R/'.$refund_id; }



//Car rental booking ID return

function ge_vendor_request_id($request_id,$year){ global $app_version;
  $year = ($year == '') ? $app_version : $year; 
  $year = substr( $year, -2 );
  $nextyear = intval($year) + 1;
  return 'VQR/'.$year.'-'.$nextyear.'/'.$request_id; }



//Employee salary ID return

function get_emp_salary_id($salary_id,$year){ global $app_version;
  $year = ($year == '') ? $app_version : $year; 
  $year = substr( $year, -2 );
  $nextyear = intval($year) + 1;
  return 'ES/'.$year.'-'.$nextyear.'/'.$salary_id; }



//Office Expense ID return

function get_other_expense_payment_id($expense_id,$year){ global $app_version;
  $year = ($year == '') ? $app_version : $year; 
  $year = substr( $year, -2 );
  $nextyear = intval($year) + 1;
  return 'OEP/'.$year.'-'.$nextyear.'/'.$expense_id; }
function get_other_expense_booking_id($expense_id,$year){ global $app_version;
  $year = ($year == '') ? $app_version : $year; 
  $year = substr( $year, -2 );
  $nextyear = intval($year) + 1;
  return 'OE/'.$year.'-'.$nextyear.'/'.$expense_id; }



//Other Income ID return

function get_other_income_payment_id($income_id,$year){ global $app_version;
  $year = ($year == '') ? $app_version : $year; 
  $year = substr( $year, -2 );
  $nextyear = intval($year) + 1;
  return 'OIP/'.$year.'-'.$nextyear.'/'.$income_id; }





//Vendor Payment

function get_vendor_estimate_id($estimate_id,$year){ global $app_version;
  $year = ($year == '') ? $app_version : $year; 
  $year = substr( $year, -2 );
  $nextyear = intval($year) + 1;
  return 'SE/'.$year.'-'.$nextyear.'/'.$estimate_id; }

function get_vendor_payment_id($payment_id,$year){ global $app_version;
  $year = ($year == '') ? $app_version : $year; 
  $year = substr( $year, -2 );
  $nextyear = intval($year) + 1;
  return 'SP/'.$year.'-'.$nextyear.'/'.$payment_id; }

function get_vendor_refund_id($refund_id,$year){ global $app_version; 
  $year = substr( $year, -2 );
  $nextyear = intval($year) + 1;
  return 'SR/'.$year.'-'.$nextyear.'/'.$refund_id; }



//TDS Payment

function get_tds_payment_id($payment_id,$year){ global $app_version;
  $year = ($year == '') ? $app_version : $year; 
  $year = substr( $year, -2 );
  $nextyear = intval($year) + 1;
  return 'TDS/'.$year.'-'.$nextyear.'/'.$payment_id; }





//Get Booking IDS

function get_booking_id($module){ $booking_id = ""; if($module==""){  } global $app_version;
$year = ($year == '') ? $app_version : $year; 
$year = substr( $year, -2 );
$nextyear = intval($year) + 1;
return $booking_id; }



//Get Miscellaneous booking id

function get_misc_booking_id($booking_id,$year){ global $app_version;
  $year = ($year == '') ? $app_version : $year;  
  $year = substr( $year, -2 );
$nextyear = intval($year) + 1;
  return 'MB/'.$year.'-'.$nextyear.'/'.$booking_id; }
function get_misc_booking_payment_id($payment_id,$year){ global $app_version;
  $year = ($year == '') ? $app_version : $year;
  $year = substr( $year, -2 );
$nextyear = intval($year) + 1;
  return 'MB/'.$year.'-'.$nextyear.'/P/'.$payment_id; }
function get_misc_booking_refund_id($refund_id,$year){  global $app_version;
  $year = ($year == '') ? $app_version : $year;
  $year = substr( $year, -2 );
$nextyear = intval($year) + 1;
  return 'MB/'.$year.'-'.$nextyear.'/R/'.$refund_id; }

//Get Bus booking id

function get_bus_booking_id($booking_id,$year){ global $app_version;
  $year = ($year == '') ? $app_version : $year;  
  $year = substr( $year, -2 );
$nextyear = intval($year) + 1;
  return 'BB/'.$year.'-'.$nextyear.'/'.$booking_id; }

function get_bus_booking_payment_id($payment_id,$year){ global $app_version;
  $year = ($year == '') ? $app_version : $year;  
  $year = substr( $year, -2 );
$nextyear = intval($year) + 1;
  return 'BB/'.$year.'-'.$nextyear.'/P/'.$payment_id; }

function get_bus_booking_refund_id($refund_id,$year){ global $app_version;
  $year = ($year == '') ? $app_version : $year;  
  $year = substr( $year, -2 );
$nextyear = intval($year) + 1;
  return 'BB/'.$year.'-'.$nextyear.'/R/'.$refund_id; }



//Get Forex booking id

function get_forex_booking_id($booking_id,$year){ global $app_version;
  $year = ($year == '') ? $app_version : $year;  
  $year = substr( $year, -2 );
$nextyear = intval($year) + 1;
  return 'FB/'.$year.'-'.$nextyear.'/'.$booking_id; }

function get_forex_booking_payment_id($payment_id,$year){ global $app_version;
  $year = ($year == '') ? $app_version : $year;  
  $year = substr( $year, -2 );
$nextyear = intval($year) + 1;
  return 'FB/'.$year.'-'.$nextyear.'/P/'.$payment_id; }



//Get Quotation ID

function get_quotation_id($quotation_id,$year){ global $app_version;
  $year = ($year == '') ? $app_version : $year; 
  $year = substr( $year, -2 );
$nextyear = intval($year) + 1;
  return 'QTP/'.$year.'-'.$nextyear.'/'.$quotation_id; }



//Get Enquiries ID

function get_enquiry_id($enquiry_id,$year){ global $app_version;
  $year = ($year == '') ? $app_version : $year; 
  $year = substr( $year, -2 );
$nextyear = intval($year) + 1;
  return 'ENQ/'.$year.'-'.$nextyear.'/'.$enquiry_id; }

//GST payment ID
function get_gst_payment_id($payment_id,$year){ global $app_version;
  $year = ($year == '') ? $app_version : $year;  return 'GP/'.'/P/'.$payment_id; }

//Flight supplier payment ID
function get_flight_supplier_payment_id($payment_id,$year){ global $app_version;
  $year = ($year == '') ? $app_version : $year;  return 'ASP/'.'/P/'.$payment_id; }

//visa supplier payment ID
function get_visa_supplier_payment_id($payment_id,$year){ global $app_version;
  $year = ($year == '') ? $app_version : $year;  return 'VSP/'.'/P/'.$payment_id; }

//Visa booking ID return

function get_exc_booking_id($exc_id,$year){ global $app_version;
  $year = ($year == '') ? $app_version : $year; 
  $year = substr( $year, -2 );
$nextyear = intval($year) + 1;
  return 'AS/'.$year.'-'.$nextyear.'/'.$exc_id; }

function get_exc_booking_payment_id($payment_id,$year){ global $app_version;
  $year = ($year == '') ? $app_version : $year; 
  $year = substr( $year, -2 );
$nextyear = intval($year) + 1;
  return 'AS/'.$year.'-'.$nextyear.'/P/'.$payment_id; }

function get_exc_booking_refund_id($refund_id,$year){ global $app_version;
  $year = ($year == '') ? $app_version : $year; 
  $year = substr( $year, -2 );
$nextyear = intval($year) + 1;
  return 'AS/'.$year.'-'.$nextyear.'/R/'.$refund_id; }

function get_jv_entry_id($jv_id,$year){ global $app_version;
  $year = ($year == '') ? $app_version : $year; 
  $year = substr( $year, -2 );
$nextyear = intval($year) + 1;
  return 'JV/'.$year.'-'.$nextyear.'/'.$jv_id; }

function get_credit_note_id($credit_id){ global $app_version;
  
  $year = substr( $year, -2 );
$nextyear = intval($year) + 1;
  return 'CN/'.$credit_id; }
function get_debit_note_id($debit_id,$year){ global $app_version;
  $year = ($year == '') ? $app_version : $year; 
  $year = substr( $year, -2 );
$nextyear = intval($year) + 1;
  return 'DN/'.$year.'-'.$nextyear.'/'.$debit_id; }

//customer Advance payment ID
function get_custadv_payment_id($payment_id,$year){ global $app_version;
  $year = ($year == '') ? $app_version : $year;  
  $year = substr( $year, -2 );
$nextyear = intval($year) + 1;
  return 'CAP/'.$year.'-'.$nextyear.'/P/'.$payment_id; }
?>
