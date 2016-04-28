<script type="text/javascript" language="javascript">


	
	function compute_entrants(){
	var entrantsAdult = Math.abs((document.getElementById("adult").value));
	var entrantsKid = Math.abs((document.getElementById("kids").value));
		var adult_day, kids_day, tot_ent;
		var reg_adult_day,reg_kids_day, reg_adult_night, reg_kids_night,reg_adult_onight, reg_kids_onight;
		var from_time = document.getElementById("from_time").value;
		var to_time = document.getElementById("to_time").value;
			
		var tot_ent_regday;
	
		reg_adult_day = 120;
		reg_kids_day = 80;
		reg_adult_night = 140;
		reg_kids_night = 100;
		reg_adult_onight = 200;
		reg_kids_onight - 200;
	
	if(from_time == "07:30" && to_time == "18:00"){
	
	if(entrantsAdult != "" && entrantsKid !="" || entrantsAdult == 0 && entrantsKid !="" || entrantsAdult != "" && entrantsKid == 0 || entrantsAdult == 0 && entrantsKid == 0 ){
	var result = parseInt(entrantsAdult) + parseInt(entrantsKid);
	document.getElementById ("total_entrants").value=result;
	
	adult_day = Math.abs((document.getElementById("adult").value * parseInt(reg_adult_day)));
	kids_day = Math.abs((document.getElementById("kids").value * parseInt(reg_kids_day)));	
	tot_ent_regday = Math.abs((parseInt(kids_day) + parseInt(adult_day)));
	
	document.getElementById ("tot_ent").value= tot_ent_regday.toFixed(2);
		

	}}
	
	
	function entrancefee(){
	
		var adult, kids, tot_ent;
	tot_ent = Math.abs((document.getElementById("adult").value + document.getElementById("kids").value));
	document.getElementById ("tot_entrants").value=tot_ent.toFixed(2);
		
		
		
		
		}
	
	
	}
	</script>
    
    
    
    
    <?php

if (isset($_POST['from_time']) && ($_POST['to_time'])){

$result_fee;
	
$from_time = $_POST['from_time'];
$to_time = $_POST['to_time'];

$adult = $_POST['adult'];
$kids = $_POST['kids'];

$reg_day_adult = 120;
$reg_day_kids = 80;

$reg_n_adult = 140;
$reg_n_kids = 100;

$reg_on_adult = 200;
$reg_on_kids = 200;

$holi_day_adult = 140;
$holi_day_kids = 100;

$holi_n_adult = 150;
$holi_n_kids = 120;

$holi_on_adult = 200;
$holi_on_kids = 200;




if ($from_time == "7:30" && $to_time =="18:00"){
	
	$result_day = $adult * $reg_day_adult;
	
	}
	
elseif ($from_time == "18:00" && $to_time =="23:00"){
	
	
	
	}
	
elseif ($from_time == "19:00" && $to_time =="2:00"){
	
	
	
	}

}
?>