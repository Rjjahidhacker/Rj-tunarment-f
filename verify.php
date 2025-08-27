<?php
header('Content-Type: application/json');
// Simple placeholder: in production, replace this with the Bkash verify flow
// and check that transaction belongs to your merchant account and amount==200

$username = $_POST['username'] ?? '';
$payNumber = $_POST['payNumber'] ?? '';
$trxID = $_POST['trxID'] ?? '';

if(!$trxID){
  echo json_encode(['status'=>'Failed','error'=>'No trx']);
  exit;
}

// === MOCK RESPONSE for demo ===
// For testing locally return Success if trxID starts with "TRX"
if(stripos($trxID,'TRX')===0){
  // here, add DB update to give 'team' to $username
  echo json_encode(['status'=>'Success','amount'=>'200']);
} else {
  echo json_encode(['status'=>'Failed','error'=>'Invalid trx']);
}
?>