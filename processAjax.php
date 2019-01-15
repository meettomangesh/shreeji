<?php
	if(1==1){
		$response['status'] = 'success';
		$response['message'] = 'success';
	} else {
		$response['status'] = 'error';
		$response['message'] = 'error';
	}
	echo json_encode($response); 
//print_r($_POST);
?>