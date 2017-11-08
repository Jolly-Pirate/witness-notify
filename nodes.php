<?php
$node;

	function checknode($x){
		$data = '{"jsonrpc": "2.0", "method": "get_accounts", "params": [["mahdiyari"]], "id": 1}'; // Testing Node
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $x);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		$result = curl_exec($ch);
		if($result == false || $result == null || $result == ''){
			return 0;
		}else{
			try{	
				if(json_decode($result)->id == 1){
					return 1;
				}else{
					return 0;
				}
			}catch(Exception $e){
				return 0;
			}
		}
		curl_close($ch);
	}
	function setknode($x){
		$GLOBALS['node'] = $x;
		return 1;
	}
	if(checknode('https://steemd.privex.io/')){
		setknode('https://steemd.privex.io/');
	}elseif(checknode('https://steemd.steemit.com/')){
		setknode('https://steemd.steemit.com/');
	}elseif(checknode('https://gtg.steem.house:8090/')){
		setknode('https://gtg.steem.house:8090/');
	}else{
		die('Nodes Down.');
	}
?> 
