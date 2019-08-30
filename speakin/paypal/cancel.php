<?php
if (empty($_GET['token'])) {
  throw new Exception('UnAuthorized access');
}
// get the token
$token = $_REQUEST['token'];
$resData->success = false;
$resData->error->token = $token;
echo json_encode($resData);
