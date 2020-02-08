<?php
	function arkademy(){
		$name = "Riowaldy Indrawan";
		$age = 23;
		$address = "Jalan Lubawang No. 20 RT 3/1 Ds. Krajan Kalianget, Kecamatan Banyuglugur, Kabupaten Situbondo";
		$hobbies = array("Travel","Coding","Writing","Reading");
		$is_married = False;
			class school{
				public $name;
				public $year_in;
				public $year_out;
				public $major;
			}
			$list_school_value = new school();
			$list_school_value->name = "UPN Veteran Jawa Timur";
			$list_school_value->year_in = 2015;
			$list_school_value->year_out = 2020;
			$list_school_value->major = "Information System";
		$list_school = array($list_school_value);
			class skill{
				public $skill_name;
				public $level;
			}
			$skillA = new skill();
			$skillA->skill_name = "PHP & Laravel Framework";
			$skillA->level = "Advanced";
			$skillB = new skill();
			$skillB->skill_name = "CSS / Bootstrap";
			$skillB->level = "Advanced";
			$skillC = new skill();
			$skillC->skill_name = "Javascript";
			$skillC->level = "Beginner";
		$skills = array($skillA,$skillB,$skillC);
		$interest_in_coding = True;
		$array = array("name"=>$name,"age"=>$age,"address"=>$address,"hobbies"=>$hobbies,"is_married"=>$is_married,"list_school"=>$list_school,"skills"=>$skills,"interest_in_coding"=>$interest_in_coding);
		$json = json_encode($array);
		echo $json;
	}
	echo arkademy();
?>