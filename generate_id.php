<?php
ob_start ();
include_once 'includes/functions.php';
include_once 'includes/database2.php';
include_once 'includes/sessionV2.php';
$session = new session ();
// Set to true if using https
$session->start_session ( '_s', false );
$a = rand(0,22);

$barcode = strtoupper(substr(md5(date('dmYHis').rand(10000,99999)),$a,10));
echo '<input type="text" class="form-control" id="textinput"
														placeholder="Input Barcode" value="' . $barcode . '" name="barcode">';

