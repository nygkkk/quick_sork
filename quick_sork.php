function quick($arr){
	if(count($arr) <= 1){
		return $arr;
	}
	$temp = $arr[0];
	$left = array();
	$right = array();
	$count = count($arr);
	for($i = 1; $i < $count; $i++){
		if($arr[$i] < $temp){
			$left[] = $arr[$i];
		}else{
			$right[] = $arr[$i];
		}
	}
	return array_merge(quick($left), array($temp), quick($right));	
}
