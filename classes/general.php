<?php
Class Create{
	public function fwd_numbers($names,$number){
	global $pdo;
	$p = $pdo->prepare("INSERT INTO fwd_numbers VALUES('','$names','$number')");
	$p->execute();
	}

}

Class Fetch{
	public function get_numbers(){
		global $pdo;
		$p = $pdo->prepare("SELECT * FROM fwd_numbers");
		$p->execute();
		$arr = $p->fetchAll();
		return $arr;
	}
	public function get_fwd_numbers(){
		global $pdo;
		$nums = array();
		$p = $pdo->prepare("SELECT * FROM fwd_numbers");
		$p->execute();
		while($arr = $p->fetchAll()){
			$num = $arr['nums'];
			$nums[] = $num;
		} 
		if(!empty($nums))
				{ return join('<br />', $nums);
			}

	}
	public function get_voice(){
		global $pdo;
		$p = $pdo->prepare("SELECT * FROM incoming");
		$p->execute();
		$ar = $p->fetchAll();
		foreach ($ar as $k) {
			echo "<tr>
                   <td>1</td>
                   <td>".$k['received_by']."</td>
                   <td>".$k['call_source']."</td>
                   <td>".$k['call_time']."</td>
                   <td class='pull-right'>
                     <audio controls>
                        <source src='".$k['call_recording']."' type='audio/mpeg'>
                           Your browser does not support the audio tag.
                        </audio>
                   </td>
                 </tr>";
			}
		}

	function show_nums(){
	global $connect;
	$check = mysqli_query($connect,"SELECT * FROM fwd_numbers");
	echo mysqli_error($connect);
		 $nums = array();
            while ($run = mysqli_fetch_array($check,MYSQLI_BOTH)) {
            $n = $run['nums'];
            $nums[] = $n;
            }
            if(!empty($nums))
				{
			return join(',', $nums);
		}  
	}
}

?>