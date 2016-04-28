<script type="text/javascript" language="javascript">


	
	function compute_entrants(){
	//var entrantsAdult = Math.abs((document.getElementById("adult").value));
	//var entrantsKids = Math.abs((document.getElementById("kids").value));
	var tot_ent_regday;
	
	
		var from_time = toString(document.getElementById("from_time").value);
		var to_time = toString(document.getElementById("to_time").value);
		var shift_select = document.getElementById("shift").value;
		
		var from_time_select = document.getElementById("from_time_select").value;
		var to_time_select = document.getElementById("to_time_select").value;
		entrants();
	
		//fixed hours
		if(shift_select == "day"){
		dayEntrants();
		entrants();

	
		}
		
	
		else if(shift_select == "night"){
		nightEntrants();
		entrants();
	
		}
		
		else if(shift_select == "onight"){
		onightEntrants();
		
		entrants();
	
		}
		
		
		//morning shift (7:30 am to 6:00 pm) only
		else if(from_time_select == "7:30" && to_time_select == "18:00"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "8:00" && to_time_select == "18:00"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "8:30" && to_time_select == "18:00"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "9:00" && to_time_select == "18:00"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "9:30" && to_time_select == "18:00"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "10:00" && to_time_select == "18:00"){
		dayEntrants();
		entrants();
			
		}
		else if(from_time_select == "10:30" && to_time_select == "18:00"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "11:00" && to_time_select == "18:00"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "11:30" && to_time_select == "18:00"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "12:00" && to_time_select == "18:00"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "12:30" && to_time_select == "18:00"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "13:00" && to_time_select == "18:00"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "13:30" && to_time_select == "18:00"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "14:00" && to_time_select == "18:00"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "14:30" && to_time_select == "18:00"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "15:00" && to_time_select == "18:00"){
		dayEntrants();
		entrants();
			
		}
		
		
		
		else if(from_time_select == "15:30" && to_time_select == "18:00"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "16:00" && to_time_select == "18:00"){
		dayEntrants();
		entrants();
			
		}
		
		
		
		else if(from_time_select == "16:30" && to_time_select == "18:00"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "17:00" && to_time_select == "18:00"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "17:30" && to_time_select == "18:00"){
		dayEntrants();
		entrants();
			
		}
		
		
		//--------------------------------------------------------------------------------------------------------------
		
		
		else if(from_time_select == "7:30" && to_time_select == "17:30"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "8:00" && to_time_select == "17:30"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "8:30" && to_time_select == "17:30"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "9:00" && to_time_select == "17:30"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "9:30" && to_time_select == "17:30"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "10:00" && to_time_select == "17:30"){
		dayEntrants();
		entrants();
			
		}
		else if(from_time_select == "10:30" && to_time_select == "17:30"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "11:00" && to_time_select == "17:30"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "11:30" && to_time_select == "17:30"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "12:00" && to_time_select == "17:30"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "12:30" && to_time_select == "17:30"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "13:00" && to_time_select == "17:30"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "13:30" && to_time_select == "17:30"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "14:00" && to_time_select == "17:30"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "14:30" && to_time_select == "17:30"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "15:00" && to_time_select == "17:30"){
		dayEntrants();
		entrants();
			
		}
		
		
		
		else if(from_time_select == "15:30" && to_time_select == "17:30"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "16:00" && to_time_select == "17:30"){
		dayEntrants();
		entrants();
			
		}
		
		
		
		else if(from_time_select == "16:30" && to_time_select == "17:30"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "17:00" && to_time_select == "17:30"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "17:30" && to_time_select == "17:30"){
		dayEntrants();
		entrants();
			
		}
		
		
			
		//--------------------------------------------------------------------------------------------------------------
		
		
		else if(from_time_select == "7:30" && to_time_select == "17:00"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "8:00" && to_time_select == "17:00"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "8:30" && to_time_select == "17:00"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "9:00" && to_time_select == "17:00"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "9:30" && to_time_select == "17:00"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "10:00" && to_time_select == "17:00"){
		dayEntrants();
		entrants();
			
		}
		else if(from_time_select == "10:30" && to_time_select == "17:00"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "11:00" && to_time_select == "17:00"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "11:30" && to_time_select == "17:00"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "12:00" && to_time_select == "17:00"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "12:30" && to_time_select == "17:00"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "13:00" && to_time_select == "17:00"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "13:30" && to_time_select == "17:00"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "14:00" && to_time_select == "17:00"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "14:30" && to_time_select == "17:00"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "15:00" && to_time_select == "17:00"){
		dayEntrants();
		entrants();
			
		}
		
		
		
		else if(from_time_select == "15:30" && to_time_select == "17:00"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "16:00" && to_time_select == "17:00"){
		dayEntrants();
		entrants();
			
		}
		
		
		
		else if(from_time_select == "16:30" && to_time_select == "17:00"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "17:30" && to_time_select == "17:00"){
		wrongtime();
			
		}
		
		
		
		// ----------------------------------------------------------------------------------------------------------------
		
		
		else if(from_time_select == "7:30" && to_time_select == "16:30"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "8:00" && to_time_select == "16:30"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "8:30" && to_time_select == "16:30"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "9:00" && to_time_select == "16:30"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "9:30" && to_time_select == "16:30"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "10:00" && to_time_select == "16:30"){
		dayEntrants();
		entrants();
			
		}
		else if(from_time_select == "10:30" && to_time_select == "16:30"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "11:00" && to_time_select == "16:30"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "11:30" && to_time_select == "16:30"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "12:00" && to_time_select == "16:30"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "12:30" && to_time_select == "16:30"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "13:00" && to_time_select == "16:30"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "13:30" && to_time_select == "16:30"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "14:00" && to_time_select == "16:30"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "14:30" && to_time_select == "16:30"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "15:00" && to_time_select == "16:30"){
		dayEntrants();
		entrants();
			
		}
		
		
		
		else if(from_time_select == "15:30" && to_time_select == "16:30"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "16:00" && to_time_select == "16:30"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "17:00" && to_time_select == "16:30"){
		wrongtime();
	
			
		}
		
		else if(from_time_select == "17:30" && to_time_select == "16:30"){
		wrongtime();
		}
		
		
		
		//--------------------------------------------------------------------------------------------------------------

		else if(from_time_select == "7:30" && to_time_select == "15:00"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "8:00" && to_time_select == "15:00"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "8:30" && to_time_select == "15:00"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "9:00" && to_time_select == "15:00"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "9:30" && to_time_select == "15:00"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "10:00" && to_time_select == "15:00"){
		dayEntrants();
		entrants();
			
		}
		else if(from_time_select == "10:30" && to_time_select == "15:00"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "11:00" && to_time_select == "15:00"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "11:30" && to_time_select == "15:00"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "12:00" && to_time_select == "15:00"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "12:30" && to_time_select == "15:00"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "13:00" && to_time_select == "15:00"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "13:30" && to_time_select == "15:00"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "14:00" && to_time_select == "15:00"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "14:30" && to_time_select == "15:00"){
		dayEntrants();
		entrants();
			
		}
		
	
		
		
		
		else if(from_time_select == "15:30" && to_time_select == "15:00"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "16:00" && to_time_select == "15:00"){
		wrongtime();
			
		}
		
		
		
		else if(from_time_select == "16:30" && to_time_select == "15:00"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "17:00" && to_time_select == "15:00"){
		wrongtime();
			
		}
		
		else if(from_time_select == "17:30" && to_time_select == "15:00"){
		wrongtime();
			
		}
		
		
        //--------------------------------------------------------------------------------------------------------------

		else if(from_time_select == "7:30" && to_time_select == "14:30"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "8:00" && to_time_select == "14:30"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "8:30" && to_time_select == "14:30"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "9:00" && to_time_select == "14:30"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "9:30" && to_time_select == "14:30"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "10:00" && to_time_select == "14:30"){
		dayEntrants();
		entrants();
			
		}
		else if(from_time_select == "10:30" && to_time_select == "14:30"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "11:00" && to_time_select == "14:30"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "11:30" && to_time_select == "14:30"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "12:00" && to_time_select == "14:30"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "12:30" && to_time_select == "14:30"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "13:00" && to_time_select == "14:30"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "13:30" && to_time_select == "14:30"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "14:00" && to_time_select == "14:30"){
		dayEntrants();
		entrants();
			
		}
		
		
		
		else if(from_time_select == "15:00" && to_time_select == "14:30"){
		wrongtime();
			
		}
		
		
		
		else if(from_time_select == "15:30" && to_time_select == "14:30"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "16:00" && to_time_select == "14:30"){
		wrongtime();
			
		}
		
		
		
		else if(from_time_select == "16:30" && to_time_select == "14:30"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "17:00" && to_time_select == "14:30"){
		wrongtime();
			
		}
		
		else if(from_time_select == "17:30" && to_time_select == "14:30"){
		wrongtime();
			
		}
		
		
        //--------------------------------------------------------------------------------------------------------------

		else if(from_time_select == "7:30" && to_time_select == "14:00"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "8:00" && to_time_select == "14:00"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "8:30" && to_time_select == "14:00"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "9:00" && to_time_select == "14:00"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "9:30" && to_time_select == "14:00"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "10:00" && to_time_select == "14:00"){
		dayEntrants();
		entrants();
			
		}
		else if(from_time_select == "10:30" && to_time_select == "14:00"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "11:00" && to_time_select == "14:00"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "11:30" && to_time_select == "14:00"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "12:00" && to_time_select == "14:00"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "12:30" && to_time_select == "14:00"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "13:00" && to_time_select == "14:00"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "13:30" && to_time_select == "14:00"){
		dayEntrants();
		entrants();
			
		}
		
		
	
		else if(from_time_select == "14:30" && to_time_select == "14:00"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "15:00" && to_time_select == "14:00"){
		wrongtime();
			
		}
		
		
		
		else if(from_time_select == "15:30" && to_time_select == "14:00"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "16:00" && to_time_select == "14:00"){
		wrongtime();
			
		}
		
		
		
		else if(from_time_select == "16:30" && to_time_select == "14:00"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "17:00" && to_time_select == "14:00"){
		wrongtime();
			
		}
		
		else if(from_time_select == "17:30" && to_time_select == "14:00"){
		wrongtime();
			
		}
		
		
        
        //--------------------------------------------------------------------------------------------------------------

		else if(from_time_select == "7:30" && to_time_select == "13:30"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "8:00" && to_time_select == "13:30"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "8:30" && to_time_select == "13:30"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "9:00" && to_time_select == "13:30"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "9:30" && to_time_select == "13:30"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "10:00" && to_time_select == "13:30"){
		dayEntrants();
		entrants();
			
		}
		else if(from_time_select == "10:30" && to_time_select == "13:30"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "11:00" && to_time_select == "13:30"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "11:30" && to_time_select == "13:30"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "12:00" && to_time_select == "13:30"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "12:30" && to_time_select == "13:30"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "13:00" && to_time_select == "13:30"){
		dayEntrants();
		entrants();
			
		}
		
	
		else if(from_time_select == "14:00" && to_time_select == "13:30"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "14:30" && to_time_select == "13:30"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "15:00" && to_time_select == "13:30"){
		wrongtime();
			
		}
		
		
		
		else if(from_time_select == "15:30" && to_time_select == "13:30"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "16:00" && to_time_select == "13:30"){
		wrongtime();
			
		}
		
		
		
		else if(from_time_select == "16:30" && to_time_select == "13:30"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "17:00" && to_time_select == "13:30"){
		wrongtime();
			
		}
		
		else if(from_time_select == "17:30" && to_time_select == "13:30"){
		wrongtime();
			
		}
		
		
        //--------------------------------------------------------------------------------------------------------------

		else if(from_time_select == "7:30" && to_time_select == "13:00"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "8:00" && to_time_select == "13:00"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "8:30" && to_time_select == "13:00"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "9:00" && to_time_select == "13:00"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "9:30" && to_time_select == "13:00"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "10:00" && to_time_select == "13:00"){
		dayEntrants();
		entrants();
			
		}
		else if(from_time_select == "10:30" && to_time_select == "13:00"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "11:00" && to_time_select == "13:00"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "11:30" && to_time_select == "13:00"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "12:00" && to_time_select == "13:00"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "12:30" && to_time_select == "13:00"){
		dayEntrants();
		entrants();
			
		}

		
		else if(from_time_select == "13:30" && to_time_select == "13:00"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "14:00" && to_time_select == "13:00"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "14:30" && to_time_select == "13:00"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "15:00" && to_time_select == "13:00"){
		wrongtime();
			
		}
		
		
		
		else if(from_time_select == "15:30" && to_time_select == "13:00"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "16:00" && to_time_select == "13:00"){
		wrongtime();
			
		}
		
		
		
		else if(from_time_select == "16:30" && to_time_select == "13:00"){
		wrongtime();
		}
		
		
		else if(from_time_select == "17:00" && to_time_select == "13:00"){
		wrongtime();
			
		}
		
		else if(from_time_select == "17:30" && to_time_select == "13:00"){
		wrongtime();
			
		}
		
		
        
        
        //--------------------------------------------------------------------------------------------------------------

		else if(from_time_select == "7:30" && to_time_select == "12:30"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "8:00" && to_time_select == "12:30"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "8:30" && to_time_select == "12:30"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "9:00" && to_time_select == "12:30"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "9:30" && to_time_select == "12:30"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "10:00" && to_time_select == "12:30"){
		dayEntrants();
		entrants();
			
		}
		else if(from_time_select == "10:30" && to_time_select == "12:30"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "11:00" && to_time_select == "12:30"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "11:30" && to_time_select == "12:30"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "12:00" && to_time_select == "12:30"){
		dayEntrants();
		entrants();
			
		}

		
		else if(from_time_select == "13:00" && to_time_select == "12:30"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "13:30" && to_time_select == "12:30"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "14:00" && to_time_select == "12:30"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "14:30" && to_time_select == "12:30"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "15:00" && to_time_select == "12:30"){
		wrongtime();
			
		}
		
		
		
		else if(from_time_select == "15:30" && to_time_select == "12:30"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "16:00" && to_time_select == "12:30"){
		wrongtime();
			
		}
		
		
		
		else if(from_time_select == "16:30" && to_time_select == "12:30"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "17:00" && to_time_select == "12:30"){
		wrongtime();
			
		}
		
		else if(from_time_select == "17:30" && to_time_select == "12:30"){
		wrongtime();
			
		}
		
		
        
        //--------------------------------------------------------------------------------------------------------------

		else if(from_time_select == "7:30" && to_time_select == "12:00"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "8:00" && to_time_select == "12:00"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "8:30" && to_time_select == "12:00"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "9:00" && to_time_select == "12:00"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "9:30" && to_time_select == "12:00"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "10:00" && to_time_select == "12:00"){
		dayEntrants();
		entrants();
			
		}
		else if(from_time_select == "10:30" && to_time_select == "12:00"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "11:00" && to_time_select == "12:00"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "11:30" && to_time_select == "12:00"){
		dayEntrants();
		entrants();
			
		}

		
		
		else if(from_time_select == "12:30" && to_time_select == "12:00"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "13:00" && to_time_select == "12:00"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "13:30" && to_time_select == "12:00"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "14:00" && to_time_select == "12:00"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "14:30" && to_time_select == "12:00"){
		wrongtime();
		}
		
		
		else if(from_time_select == "15:00" && to_time_select == "12:00"){
		wrongtime();
		}
		
		
		
		else if(from_time_select == "15:30" && to_time_select == "12:00"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "16:00" && to_time_select == "12:00"){
		wrongtime();
			
		}
		
		
		
		else if(from_time_select == "16:30" && to_time_select == "12:00"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "17:00" && to_time_select == "12:00"){
		wrongtime();
			
		}
		
		else if(from_time_select == "17:30" && to_time_select == "12:00"){
		wrongtime();
			
		}
		
		
        
        
        //--------------------------------------------------------------------------------------------------------------

		else if(from_time_select == "7:30" && to_time_select == "11:30"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "8:00" && to_time_select == "11:30"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "8:30" && to_time_select == "11:30"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "9:00" && to_time_select == "11:30"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "9:30" && to_time_select == "11:30"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "10:00" && to_time_select == "11:30"){
		dayEntrants();
		entrants();
			
		}
		else if(from_time_select == "10:30" && to_time_select == "11:30"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "11:00" && to_time_select == "11:30"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "12:00" && to_time_select == "11:30"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "12:30" && to_time_select == "11:30"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "13:00" && to_time_select == "11:30"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "13:30" && to_time_select == "11:30"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "14:00" && to_time_select == "11:30"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "14:30" && to_time_select == "11:30"){
		wrongtime();
		}
		
		
		else if(from_time_select == "15:00" && to_time_select == "11:30"){
		wrongtime();
		}
		
		
		
		else if(from_time_select == "15:30" && to_time_select == "11:30"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "16:00" && to_time_select == "11:30"){
		wrongtime();
			
		}
		
		
		
		else if(from_time_select == "16:30" && to_time_select == "11:30"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "17:00" && to_time_select == "11:30"){
		wrongtime();
		}
		
		else if(from_time_select == "17:30" && to_time_select == "11:30"){
		wrongtime();
			
		}
		
		
        //--------------------------------------------------------------------------------------------------------------

		else if(from_time_select == "7:30" && to_time_select == "11:00"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "8:00" && to_time_select == "11:00"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "8:30" && to_time_select == "11:00"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "9:00" && to_time_select == "11:00"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "9:30" && to_time_select == "11:00"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "10:00" && to_time_select == "11:00"){
		dayEntrants();
		entrants();
			
		}
		else if(from_time_select == "10:30" && to_time_select == "11:00"){
		dayEntrants();
		entrants();
			
		}

		
		else if(from_time_select == "11:30" && to_time_select == "11:00"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "12:00" && to_time_select == "11:00"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "12:30" && to_time_select == "11:00"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "13:00" && to_time_select == "11:00"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "13:30" && to_time_select == "11:00"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "14:00" && to_time_select == "11:00"){
		wrongtime();
		}
		
		
		else if(from_time_select == "14:30" && to_time_select == "11:00"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "15:00" && to_time_select == "11:00"){
		wrongtime();
			
		}
		
		
		
		else if(from_time_select == "15:30" && to_time_select == "11:00"){
		wrongtime();
		}
		
		
		else if(from_time_select == "16:00" && to_time_select == "11:00"){
		wrongtime();
		}
		
		
		
		else if(from_time_select == "16:30" && to_time_select == "11:00"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "17:00" && to_time_select == "11:00"){
		wrongtime();
			
		}
		
		else if(from_time_select == "17:30" && to_time_select == "11:00"){
		wrongtime();
		}
		
		
        //--------------------------------------------------------------------------------------------------------------

		else if(from_time_select == "7:30" && to_time_select == "10:30"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "8:00" && to_time_select == "10:30"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "8:30" && to_time_select == "10:30"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "9:00" && to_time_select == "10:30"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "9:30" && to_time_select == "10:30"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "10:00" && to_time_select == "10:30"){
		dayEntrants();
		entrants();
			
		}

		else if(from_time_select == "11:00" && to_time_select == "10:30"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "11:30" && to_time_select == "10:30"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "12:00" && to_time_select == "10:30"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "12:30" && to_time_select == "10:30"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "13:00" && to_time_select == "10:30"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "13:30" && to_time_select == "10:30"){
		wrongtime();
		}
		
		
		else if(from_time_select == "14:00" && to_time_select == "10:30"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "14:30" && to_time_select == "10:30"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "15:00" && to_time_select == "10:30"){
		wrongtime();
		}
		
		
		
		else if(from_time_select == "15:30" && to_time_select == "10:30"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "16:00" && to_time_select == "10:30"){
		wrongtime();
		}
		
		
		
		else if(from_time_select == "16:30" && to_time_select == "10:30"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "17:00" && to_time_select == "10:30"){
		wrongtime();
		}
		
		else if(from_time_select == "17:30" && to_time_select == "10:30"){
		wrongtime();
			
		}
		
		
        
        //--------------------------------------------------------------------------------------------------------------

		else if(from_time_select == "7:30" && to_time_select == "10:00"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "8:00" && to_time_select == "10:00"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "8:30" && to_time_select == "10:00"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "9:00" && to_time_select == "10:00"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "9:30" && to_time_select == "10:00"){
		dayEntrants();
		entrants();
			
		}
		

		else if(from_time_select == "10:30" && to_time_select == "10:00"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "11:00" && to_time_select == "10:00"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "11:30" && to_time_select == "10:00"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "12:00" && to_time_select == "10:00"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "12:30" && to_time_select == "10:00"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "13:00" && to_time_select == "10:00"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "13:30" && to_time_select == "10:00"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "14:00" && to_time_select == "10:00"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "14:30" && to_time_select == "10:00"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "15:00" && to_time_select == "10:00"){
		wrongtime();
			
		}
		
		
		
		else if(from_time_select == "15:30" && to_time_select == "10:00"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "16:00" && to_time_select == "10:00"){
		wrongtime();
			
		}
		
		
		
		else if(from_time_select == "16:30" && to_time_select == "10:00"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "17:00" && to_time_select == "10:00"){
		wrongtime();
			
		}
		
		else if(from_time_select == "17:30" && to_time_select == "10:00"){
		wrongtime();
			
		}
		
		
        //--------------------------------------------------------------------------------------------------------------

		else if(from_time_select == "7:30" && to_time_select == "9:30"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "8:00" && to_time_select == "9:30"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "8:30" && to_time_select == "9:30"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "9:00" && to_time_select == "9:30"){
		dayEntrants();
		entrants();
			
		}

		
		else if(from_time_select == "10:00" && to_time_select == "9:30"){
		wrongtime();
			
		}
		else if(from_time_select == "10:30" && to_time_select == "9:30"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "11:00" && to_time_select == "9:30"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "11:30" && to_time_select == "9:30"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "12:00" && to_time_select == "9:30"){
		dayEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "12:30" && to_time_select == "9:30"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "13:00" && to_time_select == "9:30"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "13:30" && to_time_select == "9:30"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "14:00" && to_time_select == "9:30"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "14:30" && to_time_select == "9:30"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "15:00" && to_time_select == "9:30"){
		wrongtime();
		}
		
		
		
		else if(from_time_select == "15:30" && to_time_select == "9:30"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "16:00" && to_time_select == "9:30"){
		wrongtime();
		}
		
		
		
		else if(from_time_select == "16:30" && to_time_select == "9:30"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "17:00" && to_time_select == "9:30"){
		wrongtime();
			
		}
		
		else if(from_time_select == "17:30" && to_time_select == "9:30"){
		wrongtime();
			
		}
		
		
        
        //--------------------------------------------------------------------------------------------------------------

		else if(from_time_select == "7:30" && to_time_select == "9:00"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "8:00" && to_time_select == "9:00"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "8:30" && to_time_select == "9:00"){
		dayEntrants();
		entrants();
			
		}
		

		else if(from_time_select == "9:30" && to_time_select == "9:00"){
		wrongtime();
			
		}
		
		else if(from_time_select == "10:00" && to_time_select == "9:00"){
		wrongtime();
			
		}
		else if(from_time_select == "10:30" && to_time_select == "9:00"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "11:00" && to_time_select == "9:00"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "11:30" && to_time_select == "9:00"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "12:00" && to_time_select == "9:00"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "12:30" && to_time_select == "9:00"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "13:00" && to_time_select == "9:00"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "13:30" && to_time_select == "9:00"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "14:00" && to_time_select == "9:00"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "14:30" && to_time_select == "9:00"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "15:00" && to_time_select == "9:00"){
		wrongtime();
			
		}
		
		
		
		else if(from_time_select == "15:30" && to_time_select == "9:00"){
		wrongtime();
		}
		
		
		else if(from_time_select == "16:00" && to_time_select == "9:00"){
		wrongtime();
			
		}
		
		
		
		else if(from_time_select == "16:30" && to_time_select == "9:00"){
		wrongtime();
		}
		
		
		else if(from_time_select == "17:00" && to_time_select == "9:00"){
		wrongtime();
			
		}
		
		else if(from_time_select == "17:30" && to_time_select == "9:00"){
		wrongtime();
			
		}
		
		
        
        //--------------------------------------------------------------------------------------------------------------

		else if(from_time_select == "7:30" && to_time_select == "8:30"){
		dayEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "8:00" && to_time_select == "8:30"){
		dayEntrants();
		entrants();
			
		}
		
	
		
		else if(from_time_select == "9:00" && to_time_select == "8:30"){
		wrongtime();
			
		}
		
		else if(from_time_select == "9:30" && to_time_select == "8:30"){
		wrongtime();
			
		}
		
		else if(from_time_select == "10:00" && to_time_select == "8:30"){
		wrongtime();
			
		}
		else if(from_time_select == "10:30" && to_time_select == "8:30"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "11:00" && to_time_select == "8:30"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "11:30" && to_time_select == "8:30"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "12:00" && to_time_select == "8:30"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "12:30" && to_time_select == "8:30"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "13:00" && to_time_select == "8:30"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "13:30" && to_time_select == "8:30"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "14:00" && to_time_select == "8:30"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "14:30" && to_time_select == "8:30"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "15:00" && to_time_select == "8:30"){
		wrongtime();
			
		}
		
		
		
		else if(from_time_select == "15:30" && to_time_select == "8:30"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "16:00" && to_time_select == "8:30"){
		wrongtime();
			
		}
		
		
		
		else if(from_time_select == "16:30" && to_time_select == "8:30"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "17:00" && to_time_select == "8:30"){
		wrongtime();
			
		}
		
		else if(from_time_select == "17:30" && to_time_select == "8:30"){
		wrongtime();
			
		}
		
		
        
        //--------------------------------------------------------------------------------------------------------------

		else if(from_time_select == "7:30" && to_time_select == "8:00"){
		dayEntrants();
		entrants();
			
		}
		

		
		else if(from_time_select == "8:30" && to_time_select == "8:00"){
		wrongtime();
			
		}
		
		else if(from_time_select == "9:00" && to_time_select == "8:00"){
		wrongtime();
			
		}
		
		else if(from_time_select == "9:30" && to_time_select == "8:00"){
		wrongtime();
			
		}
		
		else if(from_time_select == "10:00" && to_time_select == "8:00"){
		wrongtime();
			
		}
		else if(from_time_select == "10:30" && to_time_select == "8:00"){
		wrongtime();
		}
		
		
		else if(from_time_select == "11:00" && to_time_select == "8:00"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "11:30" && to_time_select == "8:00"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "12:00" && to_time_select == "8:00"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "12:30" && to_time_select == "8:00"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "13:00" && to_time_select == "8:00"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "13:30" && to_time_select == "8:00"){
		wrongtime();
		}
		
		
		else if(from_time_select == "14:00" && to_time_select == "8:00"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "14:30" && to_time_select == "8:00"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "15:00" && to_time_select == "8:00"){
		wrongtime();
			
		}
		
		
		
		else if(from_time_select == "15:30" && to_time_select == "8:00"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "16:00" && to_time_select == "8:00"){
		wrongtime();
			
		}
		
		
		
		else if(from_time_select == "16:30" && to_time_select == "8:00"){
		wrongtime();
			
		}
		
		
		else if(from_time_select == "17:00" && to_time_select == "8:00"){
		wrongtime();
		}
		
		else if(from_time_select == "17:30" && to_time_select == "8:00"){
		wrongtime();
			
		}
		
		
        
        
        
        
        
        
		//--------------------------------------------------------------------------------------------------------------
		
		//-----------------------------------------------------------------------------------------------------------------
		
		
		//night shift (6:00 pm to 11:00 pm) only
		
		
		else if(from_time_select == "18:00" && to_time_select == "23:00"){
		nightEntrants();
		entrants();
			
		}
		
		
		
		else if(from_time_select == "18:30" && to_time_select == "23:00"){
		nightEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "19:00" && to_time_select == "23:00"){
		nightEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "19:30" && to_time_select == "23:00"){
		nightEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "20:00" && to_time_select == "23:00"){
		nightEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "20:30" && to_time_select == "23:00"){
		nightEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "21:00" && to_time_select == "23:00"){
		nightEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "21:30" && to_time_select == "23:00"){
		nightEntrants();
		entrants();
			
		}
		
		
		else if(from_time_select == "22:00" && to_time_select == "23:00"){
		nightEntrants();
		entrants();
			
		}
		
		else if(from_time_select == "22:30" && to_time_select == "23:00"){
		nightEntrants();
		entrants();
			
		}
		
		
	
		
		
		//samehours
		
		else if(from_time_select == "7:30" && to_time_select == "7:30"){
		samehours();
		
			
		}
		
		else if(from_time_select == "8:00" && to_time_select == "8:00"){
		samehours();
		
			
		}
		
		else if(from_time_select == "8:30" && to_time_select == "8:30"){
		samehours();
		
			
		}
		
		else if(from_time_select == "9:00" && to_time_select == "9:00"){
		samehours();
		
			
		}
		
		else if(from_time_select == "9:30" && to_time_select == "9:30"){
		samehours();
		
			
		}
		
		else if(from_time_select == "10:00" && to_time_select == "10:00"){
		samehours();
		
			
		}
		
		else if(from_time_select == "10:30" && to_time_select == "10:30"){
		samehours();
		
			
		}
		
		else if(from_time_select == "11:00" && to_time_select == "11:00"){
		samehours();
		
			
		}
		
		
		
		else if(from_time_select == "11:30" && to_time_select == "11:30"){
		samehours();
		
			
		}
		
		else if(from_time_select == "12:00" && to_time_select == "12:00"){
		samehours();
		
			
		}
		
		
		else if(from_time_select == "12:30" && to_time_select == "12:30"){
		samehours();
		
			
		}
		
		else if(from_time_select == "13:00" && to_time_select == "13:00"){
		samehours();
		
			
		}
		
		
		else if(from_time_select == "13:30" && to_time_select == "13:30"){
		samehours();
		
			
		}
		
		else if(from_time_select == "14:00" && to_time_select == "14:00"){
		samehours();
		
			
		}
		
		
		else if(from_time_select == "14:30" && to_time_select == "14:30"){
		samehours();
		
			
		}
		
		else if(from_time_select == "15:00" && to_time_select == "15:00"){
		samehours();
		
			
		}
		
		else if(from_time_select == "15:30" && to_time_select == "15:30"){
		samehours();
		
			
		}
		
		else if(from_time_select == "16:00" && to_time_select == "16:00"){
		samehours();
		
			
		}
		
		
		else if(from_time_select == "16:30" && to_time_select == "16:30"){
		samehours();
		
			
		}
		
		else if(from_time_select == "17:00" && to_time_select == "17:00"){
		samehours();
		
			
		}

		
		else if(from_time_select == "18:00" && to_time_select == "18:00"){
		samehours();
		
			
		}
		
			else if(from_time_select == "18:30" && to_time_select == "18:30"){
		samehours();
		
			
		}
		
		else if(from_time_select == "19:00" && to_time_select == "19:00"){
		samehours();
		
			
		}
		
		
		else if(from_time_select == "19:30" && to_time_select == "19:30"){
		samehours();
		
			
		}
		
		else if(from_time_select == "20:00" && to_time_select == "20:00"){
		samehours();
		
			
		}
		
		else if(from_time_select == "20:30" && to_time_select == "20:30"){
		samehours();
		
			
		}
		
		else if(from_time_select == "21:00" && to_time_select == "21:00"){
		samehours();
		
			
		}
		
		
		else if(from_time_select == "21:30" && to_time_select == "21:30"){
		samehours();
		
			
		}
		
		else if(from_time_select == "22:00" && to_time_select == "22:00"){
		samehours();
		
			
		}
		
		
		else if(from_time_select == "22:30" && to_time_select == "22:30"){
		samehours();
		
			
		}
		
		else if(from_time_select == "23:00" && to_time_select == "23:00"){
		samehours();
		
			
		}
		
		
		else if(from_time_select == "23:30" && to_time_select == "23:30"){
		samehours();
		
			
		}
		
		else if(from_time_select == "24:00" && to_time_select == "24:00"){
		samehours();
		
			
		}
		
		//------------------------------------------------------------------------------------------------------------
		//------------------------------------------------------------------------------------------------------------
		//------------------------------------------------------------------------------------------------------------
		
		
		// morning shift extended hour
		else if(from_time_select == "7:30" && to_time_select == "19:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "7:30" && to_time_select == "19:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		
		else if(from_time_select == "7:30" && to_time_select == "20:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "7:30" && to_time_select == "20:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "7:30" && to_time_select == "21:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "7:30" && to_time_select == "21:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "7:30" && to_time_select == "22:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "7:30" && to_time_select == "22:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "7:30" && to_time_select == "23:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "7:30" && to_time_select == "23:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "7:30" && to_time_select == "24:00"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "7:30" && to_time_select == "24:30"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "7:30" && to_time_select == "1:00"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "7:30" && to_time_select == "1:30"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "7:30" && to_time_select == "2:00"){
		dayEntrantsExtover();
		entrants();
			
		}
		
				//--------------------------------------------------------------------------------------------------------------
        
        else if(from_time_select == "8:00" && to_time_select == "19:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "8:00" && to_time_select == "19:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		
		else if(from_time_select == "8:00" && to_time_select == "20:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "8:00" && to_time_select == "20:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "8:00" && to_time_select == "21:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "8:00" && to_time_select == "21:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "8:00" && to_time_select == "22:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "8:00" && to_time_select == "22:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "8:00" && to_time_select == "23:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "8:00" && to_time_select == "23:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "8:00" && to_time_select == "24:00"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "8:00" && to_time_select == "24:30"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "8:00" && to_time_select == "1:00"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "8:00" && to_time_select == "1:30"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "8:00" && to_time_select == "2:00"){
		dayEntrantsExtover();
		entrants();
			
		}
		
				//--------------------------------------------------------------------------------------------------------------
        
        else if(from_time_select == "8:30" && to_time_select == "19:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "8:30" && to_time_select == "19:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		
		else if(from_time_select == "8:30" && to_time_select == "20:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "8:30" && to_time_select == "20:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "8:30" && to_time_select == "21:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "8:30" && to_time_select == "21:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "8:30" && to_time_select == "22:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "8:30" && to_time_select == "22:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "8:30" && to_time_select == "23:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "8:30" && to_time_select == "23:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "8:30" && to_time_select == "24:00"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "8:30" && to_time_select == "24:30"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "8:30" && to_time_select == "1:00"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "8:30" && to_time_select == "1:30"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "8:30" && to_time_select == "2:00"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		
		
				//--------------------------------------------------------------------------------------------------------------
        
        else if(from_time_select == "9:00" && to_time_select == "19:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "9:00" && to_time_select == "19:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		
		else if(from_time_select == "9:00" && to_time_select == "20:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "9:00" && to_time_select == "20:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "9:00" && to_time_select == "21:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "9:00" && to_time_select == "21:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "9:00" && to_time_select == "22:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "9:00" && to_time_select == "22:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "9:00" && to_time_select == "23:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "9:00" && to_time_select == "23:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "9:00" && to_time_select == "24:00"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "9:00" && to_time_select == "24:30"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "9:00" && to_time_select == "1:00"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "9:00" && to_time_select == "1:30"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "9:00" && to_time_select == "2:00"){
		dayEntrantsExtover();
		entrants();
			
		}
		
				//--------------------------------------------------------------------------------------------------------------
        
        else if(from_time_select == "9:30" && to_time_select == "19:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "9:30" && to_time_select == "19:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		
		else if(from_time_select == "9:30" && to_time_select == "20:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "9:30" && to_time_select == "20:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "9:30" && to_time_select == "21:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "9:30" && to_time_select == "21:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "9:30" && to_time_select == "22:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "9:30" && to_time_select == "22:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "9:30" && to_time_select == "23:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "9:30" && to_time_select == "23:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "9:30" && to_time_select == "24:00"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "9:30" && to_time_select == "24:30"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "9:30" && to_time_select == "1:00"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "9:30" && to_time_select == "1:30"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "9:30" && to_time_select == "2:00"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		
		
				//--------------------------------------------------------------------------------------------------------------
        
        else if(from_time_select == "10:00" && to_time_select == "19:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "10:00" && to_time_select == "19:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		
		else if(from_time_select == "10:00" && to_time_select == "20:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "10:00" && to_time_select == "20:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "10:00" && to_time_select == "21:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "10:00" && to_time_select == "21:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "10:00" && to_time_select == "22:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "10:00" && to_time_select == "22:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "10:00" && to_time_select == "23:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "10:00" && to_time_select == "23:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "10:00" && to_time_select == "24:00"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "10:00" && to_time_select == "24:30"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "10:00" && to_time_select == "1:00"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "10:00" && to_time_select == "1:30"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "10:00" && to_time_select == "2:00"){
		dayEntrantsExtover();
		entrants();
			
		}
		
				//--------------------------------------------------------------------------------------------------------------
        
        else if(from_time_select == "10:30" && to_time_select == "19:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "10:30" && to_time_select == "19:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		
		else if(from_time_select == "10:30" && to_time_select == "20:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "10:30" && to_time_select == "20:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "10:30" && to_time_select == "21:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "10:30" && to_time_select == "21:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "10:30" && to_time_select == "22:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "10:30" && to_time_select == "22:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "10:30" && to_time_select == "23:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "10:30" && to_time_select == "23:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "10:30" && to_time_select == "24:00"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "10:30" && to_time_select == "24:30"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "10:30" && to_time_select == "1:00"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "10:30" && to_time_select == "1:30"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "10:30" && to_time_select == "2:00"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		
		
				//--------------------------------------------------------------------------------------------------------------
        
        else if(from_time_select == "11:00" && to_time_select == "19:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "11:00" && to_time_select == "19:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		
		else if(from_time_select == "11:00" && to_time_select == "20:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "11:00" && to_time_select == "20:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "11:00" && to_time_select == "21:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "11:00" && to_time_select == "21:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "11:00" && to_time_select == "22:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "11:00" && to_time_select == "22:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "11:00" && to_time_select == "23:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "11:00" && to_time_select == "23:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "11:00" && to_time_select == "24:00"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "11:00" && to_time_select == "24:30"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "11:00" && to_time_select == "1:00"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "11:00" && to_time_select == "1:30"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "11:00" && to_time_select == "2:00"){
		dayEntrantsExtover();
		entrants();
			
		}
		
				//--------------------------------------------------------------------------------------------------------------
        
        else if(from_time_select == "11:30" && to_time_select == "19:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "11:30" && to_time_select == "19:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		
		else if(from_time_select == "11:30" && to_time_select == "20:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "11:30" && to_time_select == "20:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "11:30" && to_time_select == "21:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "11:30" && to_time_select == "21:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "11:30" && to_time_select == "22:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "11:30" && to_time_select == "22:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "11:30" && to_time_select == "23:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "11:30" && to_time_select == "23:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "11:30" && to_time_select == "24:00"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "11:30" && to_time_select == "24:30"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "11:30" && to_time_select == "1:00"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "11:30" && to_time_select == "1:30"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "11:30" && to_time_select == "2:00"){
		dayEntrantsExtover();
		entrants();
			
		}
		
				//--------------------------------------------------------------------------------------------------------------
        
        else if(from_time_select == "12:00" && to_time_select == "19:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "12:00" && to_time_select == "19:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		
		else if(from_time_select == "12:00" && to_time_select == "20:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "12:00" && to_time_select == "20:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "12:00" && to_time_select == "21:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "12:00" && to_time_select == "21:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "12:00" && to_time_select == "22:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "12:00" && to_time_select == "22:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "12:00" && to_time_select == "23:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "12:00" && to_time_select == "23:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "12:00" && to_time_select == "24:00"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "12:00" && to_time_select == "24:30"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "12:00" && to_time_select == "1:00"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "12:00" && to_time_select == "1:30"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "12:00" && to_time_select == "2:00"){
		dayEntrantsExtover();
		entrants();
			
		}
		
				//--------------------------------------------------------------------------------------------------------------
        
        else if(from_time_select == "12:30" && to_time_select == "19:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "12:30" && to_time_select == "19:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		
		else if(from_time_select == "12:30" && to_time_select == "20:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "12:30" && to_time_select == "20:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "12:30" && to_time_select == "21:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "12:30" && to_time_select == "21:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "12:30" && to_time_select == "22:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "12:30" && to_time_select == "22:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "12:30" && to_time_select == "23:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "12:30" && to_time_select == "23:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "12:30" && to_time_select == "24:00"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "12:30" && to_time_select == "24:30"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "12:30" && to_time_select == "1:00"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "12:30" && to_time_select == "1:30"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "12:30" && to_time_select == "2:00"){
		dayEntrantsExtover();
		entrants();
			
		}
		
				//--------------------------------------------------------------------------------------------------------------
        
        else if(from_time_select == "13:00" && to_time_select == "19:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "13:00" && to_time_select == "19:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		
		else if(from_time_select == "13:00" && to_time_select == "20:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "13:00" && to_time_select == "20:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "13:00" && to_time_select == "21:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "13:00" && to_time_select == "21:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "13:00" && to_time_select == "22:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "13:00" && to_time_select == "22:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "13:00" && to_time_select == "23:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "13:00" && to_time_select == "23:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "13:00" && to_time_select == "24:00"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "13:00" && to_time_select == "24:30"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "13:00" && to_time_select == "1:00"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "13:00" && to_time_select == "1:30"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "13:00" && to_time_select == "2:00"){
		dayEntrantsExtover();
		entrants();
			
		}
		
				//--------------------------------------------------------------------------------------------------------------
        
        else if(from_time_select == "13:30" && to_time_select == "19:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "13:30" && to_time_select == "19:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		
		else if(from_time_select == "13:30" && to_time_select == "20:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "13:30" && to_time_select == "20:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "13:30" && to_time_select == "21:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "13:30" && to_time_select == "21:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "13:30" && to_time_select == "22:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "13:30" && to_time_select == "22:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "13:30" && to_time_select == "23:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "13:30" && to_time_select == "23:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "13:30" && to_time_select == "24:00"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "13:30" && to_time_select == "24:30"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "13:30" && to_time_select == "1:00"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "13:30" && to_time_select == "1:30"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "13:30" && to_time_select == "2:00"){
		dayEntrantsExtover();
		entrants();
			
		}
		
				//--------------------------------------------------------------------------------------------------------------
        
        else if(from_time_select == "14:00" && to_time_select == "19:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "14:00" && to_time_select == "19:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		
		else if(from_time_select == "14:00" && to_time_select == "20:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "14:00" && to_time_select == "20:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "14:00" && to_time_select == "21:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "14:00" && to_time_select == "21:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "14:00" && to_time_select == "22:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "14:00" && to_time_select == "22:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "14:00" && to_time_select == "23:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "14:00" && to_time_select == "23:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "14:00" && to_time_select == "24:00"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "14:00" && to_time_select == "24:30"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "14:00" && to_time_select == "1:00"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "14:00" && to_time_select == "1:30"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "14:00" && to_time_select == "2:00"){
		dayEntrantsExtover();
		entrants();
			
		}
		
				//--------------------------------------------------------------------------------------------------------------
        
        else if(from_time_select == "14:30" && to_time_select == "19:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "14:30" && to_time_select == "19:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		
		else if(from_time_select == "14:30" && to_time_select == "20:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "14:30" && to_time_select == "20:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "14:30" && to_time_select == "21:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "14:30" && to_time_select == "21:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "14:30" && to_time_select == "22:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "14:30" && to_time_select == "22:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "14:30" && to_time_select == "23:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "14:30" && to_time_select == "23:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "14:30" && to_time_select == "24:00"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "14:30" && to_time_select == "24:30"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "14:30" && to_time_select == "1:00"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "14:30" && to_time_select == "1:30"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "14:30" && to_time_select == "2:00"){
		dayEntrantsExtover();
		entrants();
			
		}
		
				//--------------------------------------------------------------------------------------------------------------
        
        else if(from_time_select == "15:00" && to_time_select == "19:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "15:00" && to_time_select == "19:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		
		else if(from_time_select == "15:00" && to_time_select == "20:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "15:00" && to_time_select == "20:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "15:00" && to_time_select == "21:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "15:00" && to_time_select == "21:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "15:00" && to_time_select == "22:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "15:00" && to_time_select == "22:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "15:00" && to_time_select == "23:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "15:00" && to_time_select == "23:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "15:00" && to_time_select == "24:00"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "15:00" && to_time_select == "24:30"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "15:00" && to_time_select == "1:00"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "15:00" && to_time_select == "1:30"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "15:00" && to_time_select == "2:00"){
		dayEntrantsExtover();
		entrants();
			
		}
		
				//--------------------------------------------------------------------------------------------------------------
        
        else if(from_time_select == "15:30" && to_time_select == "19:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "15:30" && to_time_select == "19:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		
		else if(from_time_select == "15:30" && to_time_select == "20:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "15:30" && to_time_select == "20:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "15:30" && to_time_select == "21:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "15:30" && to_time_select == "21:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "15:30" && to_time_select == "22:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "15:30" && to_time_select == "22:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "15:30" && to_time_select == "23:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "15:30" && to_time_select == "23:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "15:30" && to_time_select == "24:00"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "15:30" && to_time_select == "24:30"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "15:30" && to_time_select == "1:00"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "15:30" && to_time_select == "1:30"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "15:30" && to_time_select == "2:00"){
		dayEntrantsExtover();
		entrants();
			
		}
		
				//--------------------------------------------------------------------------------------------------------------
        
        else if(from_time_select == "16:00" && to_time_select == "19:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "16:00" && to_time_select == "19:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		
		else if(from_time_select == "16:00" && to_time_select == "20:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "16:00" && to_time_select == "20:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "16:00" && to_time_select == "21:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "16:00" && to_time_select == "21:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "16:00" && to_time_select == "22:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "16:00" && to_time_select == "22:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "16:00" && to_time_select == "23:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "16:00" && to_time_select == "23:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "16:00" && to_time_select == "24:00"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "16:00" && to_time_select == "24:30"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "16:00" && to_time_select == "1:00"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "16:00" && to_time_select == "1:30"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "16:00" && to_time_select == "2:00"){
		dayEntrantsExtover();
		entrants();
			
		}
		
				//--------------------------------------------------------------------------------------------------------------
        
        else if(from_time_select == "16:30" && to_time_select == "19:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "16:30" && to_time_select == "19:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		
		else if(from_time_select == "16:30" && to_time_select == "20:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "16:30" && to_time_select == "20:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "16:30" && to_time_select == "21:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "16:30" && to_time_select == "21:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "16:30" && to_time_select == "22:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "16:30" && to_time_select == "22:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "16:30" && to_time_select == "23:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "16:30" && to_time_select == "23:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "16:30" && to_time_select == "24:00"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "16:30" && to_time_select == "24:30"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "16:30" && to_time_select == "1:00"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "16:30" && to_time_select == "1:30"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "16:30" && to_time_select == "2:00"){
		dayEntrantsExtover();
		entrants();
			
		}
		
				//--------------------------------------------------------------------------------------------------------------
        
        else if(from_time_select == "17:00" && to_time_select == "19:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "17:00" && to_time_select == "19:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		
		else if(from_time_select == "17:00" && to_time_select == "20:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "17:00" && to_time_select == "20:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "17:00" && to_time_select == "21:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "17:00" && to_time_select == "21:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "17:00" && to_time_select == "22:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "17:00" && to_time_select == "22:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "17:00" && to_time_select == "23:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "17:00" && to_time_select == "23:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "17:00" && to_time_select == "24:00"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "17:00" && to_time_select == "24:30"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "17:00" && to_time_select == "1:00"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "17:00" && to_time_select == "1:30"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "17:00" && to_time_select == "2:00"){
		dayEntrantsExtover();
		entrants();
			
		}
		
				//--------------------------------------------------------------------------------------------------------------
        
        else if(from_time_select == "17:30" && to_time_select == "19:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "17:30" && to_time_select == "19:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		
		else if(from_time_select == "17:30" && to_time_select == "20:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "17:30" && to_time_select == "20:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "17:30" && to_time_select == "21:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "17:30" && to_time_select == "21:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "17:30" && to_time_select == "22:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "17:30" && to_time_select == "22:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "17:30" && to_time_select == "23:00"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "17:30" && to_time_select == "23:30"){
		dayEntrantsExt();
		entrants();
			
		}
		
		else if(from_time_select == "17:30" && to_time_select == "24:00"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "17:30" && to_time_select == "24:30"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "17:30" && to_time_select == "1:00"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "17:30" && to_time_select == "1:30"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		else if(from_time_select == "17:30" && to_time_select == "2:00"){
		dayEntrantsExtover();
		entrants();
			
		}
		
		
		//------------------------------------------------------------------------------------------------------------
		//------------------------------------------------------------------------------------------------------------
		//------------------------------------------------------------------------------------------------------------
		
		
		else if(from_time_select == "18:00" && to_time_select == "23:00"){
		nightEntrants();
		entrants();
	
		}
        
        else if(from_time_select == "18:30" && to_time_select == "23:00"){
		nightEntrants();
		entrants();
	
		}
        
        else if(from_time_select == "19:00" && to_time_select == "23:00"){
		nightEntrants();
		entrants();
	
		}
        
        else if(from_time_select == "19:30" && to_time_select == "23:00"){
		nightEntrants();
		entrants();
	
		}
        
        
        else if(from_time_select == "20:00" && to_time_select == "23:00"){
		nightEntrants();
		entrants();
	
		}
        
        else if(from_time_select == "20:30" && to_time_select == "23:00"){
		nightEntrants();
		entrants();
	
		}
        
        
        else if(from_time_select == "21:00" && to_time_select == "23:00"){
		nightEntrants();
		entrants();
	
		}
        
        else if(from_time_select == "21:30" && to_time_select == "23:00"){
		nightEntrants();
		entrants();
	
		}
        
        
        else if(from_time_select == "22:00" && to_time_select == "23:00"){
		nightEntrants();
		entrants();
	
		}
        
        else if(from_time_select == "22:30" && to_time_select == "23:00"){
		nightEntrants();
		entrants();
	
		}
        
        //------------------------------------------------------------------------------------------------------------
		
		
		else if(from_time_select == "18:00" && to_time_select == "22:30"){
		nightEntrants();
		entrants();
	
		}
        
        else if(from_time_select == "18:30" && to_time_select == "22:30"){
		nightEntrants();
		entrants();
	
		}
        
        else if(from_time_select == "19:00" && to_time_select == "22:30"){
		nightEntrants();
		entrants();
	
		}
        
        else if(from_time_select == "19:30" && to_time_select == "22:30"){
		nightEntrants();
		entrants();
	
		}
        
        
        else if(from_time_select == "20:00" && to_time_select == "22:30"){
		nightEntrants();
		entrants();
	
		}
        
        else if(from_time_select == "20:30" && to_time_select == "22:30"){
		nightEntrants();
		entrants();
	
		}
        
        
        else if(from_time_select == "21:00" && to_time_select == "22:30"){
		nightEntrants();
		entrants();
	
		}
        
        else if(from_time_select == "21:30" && to_time_select == "22:30"){
		nightEntrants();
		entrants();
	
		}
        
        
        else if(from_time_select == "22:00" && to_time_select == "22:30"){
		nightEntrants();
		entrants();
	
		}
    
        
        //------------------------------------------------------------------------------------------------------------
		
		
		else if(from_time_select == "18:00" && to_time_select == "22:00"){
		nightEntrants();
		entrants();
	
		}
        
        else if(from_time_select == "18:30" && to_time_select == "22:00"){
		nightEntrants();
		entrants();
	
		}
        
        else if(from_time_select == "19:00" && to_time_select == "22:00"){
		nightEntrants();
		entrants();
	
		}
        
        else if(from_time_select == "19:30" && to_time_select == "22:00"){
		nightEntrants();
		entrants();
	
		}
        
        
        else if(from_time_select == "20:00" && to_time_select == "22:00"){
		nightEntrants();
		entrants();
	
		}
        
        else if(from_time_select == "20:30" && to_time_select == "22:00"){
		nightEntrants();
		entrants();
	
		}
        
        
        else if(from_time_select == "21:00" && to_time_select == "22:00"){
		nightEntrants();
		entrants();
	
		}
        
        else if(from_time_select == "21:30" && to_time_select == "22:00"){
		nightEntrants();
		entrants();
	
		}
    
        
        else if(from_time_select == "22:30" && to_time_select == "22:00"){
		wrongtime();
	
		}
        
        
        //------------------------------------------------------------------------------------------------------------
		
		
		else if(from_time_select == "18:00" && to_time_select == "21:30"){
		nightEntrants();
		entrants();
	
		}
        
        else if(from_time_select == "18:30" && to_time_select == "21:30"){
		nightEntrants();
		entrants();
	
		}
        
        else if(from_time_select == "19:00" && to_time_select == "21:30"){
		nightEntrants();
		entrants();
	
		}
        
        else if(from_time_select == "19:30" && to_time_select == "21:30"){
		nightEntrants();
		entrants();
	
		}
        
        
        else if(from_time_select == "20:00" && to_time_select == "21:30"){
		nightEntrants();
		entrants();
	
		}
        
        else if(from_time_select == "20:30" && to_time_select == "21:30"){
		nightEntrants();
		entrants();
	
		}
        
        
        else if(from_time_select == "21:00" && to_time_select == "21:30"){
		nightEntrants();
		entrants();
	
		}
        
   
        
        else if(from_time_select == "22:00" && to_time_select == "21:30"){
		wrongtime();
	
		}
        
        else if(from_time_select == "22:30" && to_time_select == "21:30"){
		wrongtime();
	
		}
        
        
        //------------------------------------------------------------------------------------------------------------
		
		
		else if(from_time_select == "18:00" && to_time_select == "21:00"){
		nightEntrants();
		entrants();
	
		}
        
        else if(from_time_select == "18:30" && to_time_select == "21:00"){
		nightEntrants();
		entrants();
	
		}
        
        else if(from_time_select == "19:00" && to_time_select == "21:00"){
		nightEntrants();
		entrants();
	
		}
        
        else if(from_time_select == "19:30" && to_time_select == "21:00"){
		nightEntrants();
		entrants();
	
		}
        
        
        else if(from_time_select == "20:00" && to_time_select == "21:00"){
		nightEntrants();
		entrants();
	
		}
        
        else if(from_time_select == "20:30" && to_time_select == "21:00"){
		nightEntrants();
		entrants();
	
		}
        

        
        else if(from_time_select == "21:30" && to_time_select == "21:00"){
		wrongtime();
	
		}
        
        
        else if(from_time_select == "22:00" && to_time_select == "21:00"){
		wrongtime();
	
		}
        
        else if(from_time_select == "22:30" && to_time_select == "21:00"){
		wrongtime();
	
		}
        
        
        //------------------------------------------------------------------------------------------------------------
		
		
		else if(from_time_select == "18:00" && to_time_select == "20:30"){
		nightEntrants();
		entrants();
	
		}
        
        else if(from_time_select == "18:30" && to_time_select == "20:30"){
		nightEntrants();
		entrants();
	
		}
        
        else if(from_time_select == "19:00" && to_time_select == "20:30"){
		nightEntrants();
		entrants();
	
		}
        
        else if(from_time_select == "19:30" && to_time_select == "20:30"){
		nightEntrants();
		entrants();
	
		}
        
        
        else if(from_time_select == "20:00" && to_time_select == "20:30"){
		nightEntrants();
		entrants();
	
		}
   
        
        else if(from_time_select == "21:00" && to_time_select == "20:30"){
		wrongtime();
		}
        
        else if(from_time_select == "21:30" && to_time_select == "20:30"){
		wrongtime();
	
		}
        
        
        else if(from_time_select == "22:00" && to_time_select == "20:30"){
		wrongtime();
	
		}
        
        else if(from_time_select == "22:30" && to_time_select == "20:30"){
		wrongtime();
		}
        
        
        //------------------------------------------------------------------------------------------------------------
		
		
		else if(from_time_select == "18:00" && to_time_select == "20:00"){
		nightEntrants();
		entrants();
	
		}
        
        else if(from_time_select == "18:30" && to_time_select == "20:00"){
		nightEntrants();
		entrants();
	
		}
        
        else if(from_time_select == "19:00" && to_time_select == "20:00"){
		nightEntrants();
		entrants();
	
		}
        
        else if(from_time_select == "19:30" && to_time_select == "20:00"){
		nightEntrants();
		entrants();
	
		}
        
   
        
        else if(from_time_select == "20:30" && to_time_select == "20:00"){
		wrongtime();
		}
        
        
        else if(from_time_select == "21:00" && to_time_select == "20:00"){
		wrongtime();
		}
        
        else if(from_time_select == "21:30" && to_time_select == "20:00"){
		wrongtime();
	
		}
        
        
        else if(from_time_select == "22:00" && to_time_select == "20:00"){
		wrongtime();
	
		}
        
        else if(from_time_select == "22:30" && to_time_select == "20:00"){
		wrongtime();
	
		}
        
        
        //------------------------------------------------------------------------------------------------------------
		
		
		else if(from_time_select == "18:00" && to_time_select == "19:30"){
		nightEntrants();
		entrants();
	
		}
        
        else if(from_time_select == "18:30" && to_time_select == "19:30"){
		nightEntrants();
		entrants();
	
		}
        
        else if(from_time_select == "19:00" && to_time_select == "19:30"){
		nightEntrants();
		entrants();
	
		}
     
        
        else if(from_time_select == "20:00" && to_time_select == "19:30"){
		wrongtime();
	
		}
        
        else if(from_time_select == "20:30" && to_time_select == "19:30"){
		wrongtime();
	
		}
        
        
        else if(from_time_select == "21:00" && to_time_select == "19:30"){
		wrongtime();
	
		}
        
        else if(from_time_select == "21:30" && to_time_select == "19:30"){
		wrongtime();
	
		}
        
        
        else if(from_time_select == "22:00" && to_time_select == "19:30"){
		wrongtime();
	
		}
        
        else if(from_time_select == "22:30" && to_time_select == "19:30"){
		wrongtime();
		}
        
        
        //------------------------------------------------------------------------------------------------------------
		
		
		else if(from_time_select == "18:00" && to_time_select == "19:00"){
		nightEntrants();
		entrants();
	
		}
        
        else if(from_time_select == "18:30" && to_time_select == "19:00"){
		nightEntrants();
		entrants();
	
		}
        
     
        
        else if(from_time_select == "19:30" && to_time_select == "19:00"){
		wrongtime();
	
		}
        
        
        else if(from_time_select == "20:00" && to_time_select == "19:00"){
		wrongtime();
	
		}
        
        else if(from_time_select == "20:30" && to_time_select == "19:00"){
		wrongtime();
	
		}
        
        
        else if(from_time_select == "21:00" && to_time_select == "19:00"){
		wrongtime();
	
		}
        
        else if(from_time_select == "21:30" && to_time_select == "19:00"){
		wrongtime();
	
		}
        
        
        else if(from_time_select == "22:00" && to_time_select == "19:00"){
		wrongtime();
		}
        
        else if(from_time_select == "22:30" && to_time_select == "19:00"){
		wrongtime();
	
		}
        
        
        //------------------------------------------------------------------------------------------------------------
		
		
		else if(from_time_select == "18:00" && to_time_select == "18:30"){
		nightEntrants();
		entrants();
	
		}
        
  
        else if(from_time_select == "19:00" && to_time_select == "18:30"){
		wrongtime();
	
		}
        
        else if(from_time_select == "19:30" && to_time_select == "18:30"){
		wrongtime();
	
		}
        
        
        else if(from_time_select == "20:00" && to_time_select == "18:30"){
		wrongtime();
	
		}
        
        else if(from_time_select == "20:30" && to_time_select == "18:30"){
		wrongtime();
	
		}
        
        
        else if(from_time_select == "21:00" && to_time_select == "18:30"){
		wrongtime();
		}
        
        else if(from_time_select == "21:30" && to_time_select == "18:30"){
		wrongtime();
	
		}
        
        
        else if(from_time_select == "22:00" && to_time_select == "18:30"){
		wrongtime();
		}
        
        else if(from_time_select == "22:30" && to_time_select == "18:30"){
		wrongtime();
	
		}
        
        
        
        
		
		
		//-----------------------------------------------------------------------------------------------------------
		//-----------------------------------------------------------------------------------------------------------
		//-----------------------------------------------------------------------------------------------------------
		
		
		
		//overnight shift (7:00 pm  to 2:00 am)

		else if(from_time_select == "19:00" && to_time_select == "2:00"){
		onightEntrants();
		entrants();
        }
        
        else if(from_time_select == "19:30" && to_time_select == "2:00"){
		onightEntrants();
		entrants();
        
        }
        
        else if(from_time_select == "20:00" && to_time_select == "2:00"){
		onightEntrants();
		entrants();
        }
        
        else if(from_time_select == "20:30" && to_time_select == "2:00"){
		onightEntrants();
		entrants();
        
        }
        
        else if(from_time_select == "21:00" && to_time_select == "2:00"){
		onightEntrants();
		entrants();
        }
        
        else if(from_time_select == "21:30" && to_time_select == "2:00"){
		onightEntrants();
		entrants();
        
        }
        
        
        else if(from_time_select == "22:00" && to_time_select == "2:00"){
		onightEntrants();
		entrants();
        }
        
        else if(from_time_select == "22:30" && to_time_select == "2:00"){
		onightEntrants();
		entrants();
        
        }
        
        else if(from_time_select == "23:00" && to_time_select == "2:00"){
		onightEntrants();
		entrants();
        }
        
        else if(from_time_select == "23:30" && to_time_select == "2:00"){
		onightEntrants();
		entrants();
        
        }
        
        else if(from_time_select == "24:00" && to_time_select == "2:00"){
		onightEntrants();
		entrants();
        }
        
        else if(from_time_select == "24:30" && to_time_select == "2:00"){
		onightEntrants();
		entrants();
        
        }
        
        
        else if(from_time_select == "1:00" && to_time_select == "2:00"){
		onightEntrants();
		entrants();
        }
        
        else if(from_time_select == "1:30" && to_time_select == "2:00"){
		onightEntrants();
		entrants();
        
        }
		
		
		//------------------------------------------------------------------------------------------------------------

		else if(from_time_select == "19:00" && to_time_select == "1:30"){
		onightEntrants();
		entrants();
        }
        
        else if(from_time_select == "19:30" && to_time_select == "1:30"){
		onightEntrants();
		entrants();
        
        }
        
        else if(from_time_select == "20:00" && to_time_select == "1:30"){
		onightEntrants();
		entrants();
        }
        
        else if(from_time_select == "20:30" && to_time_select == "1:30"){
		onightEntrants();
		entrants();
        
        }
        
        else if(from_time_select == "21:00" && to_time_select == "1:30"){
		onightEntrants();
		entrants();
        }
        
        else if(from_time_select == "21:30" && to_time_select == "1:30"){
		onightEntrants();
		entrants();
        
        }
        
        
        else if(from_time_select == "22:00" && to_time_select == "1:30"){
		onightEntrants();
		entrants();
        }
        
        else if(from_time_select == "22:30" && to_time_select == "1:30"){
		onightEntrants();
		entrants();
        
        }
        
        else if(from_time_select == "23:00" && to_time_select == "1:30"){
		onightEntrants();
		entrants();
        }
        
        else if(from_time_select == "23:30" && to_time_select == "1:30"){
		onightEntrants();
		entrants();
        
        }
        
        else if(from_time_select == "24:00" && to_time_select == "1:30"){
		onightEntrants();
		entrants();
        }
        
        else if(from_time_select == "24:30" && to_time_select == "1:30"){
		onightEntrants();
		entrants();
        
        }
        
        
        else if(from_time_select == "1:00" && to_time_select == "1:30"){
		onightEntrants();
		entrants();
        }
        

		//------------------------------------------------------------------------------------------------------------

		else if(from_time_select == "19:00" && to_time_select == "1:00"){
		onightEntrants();
		entrants();
        }
        
        else if(from_time_select == "19:30" && to_time_select == "1:00"){
		onightEntrants();
		entrants();
        
        }
        
        else if(from_time_select == "20:00" && to_time_select == "1:00"){
		onightEntrants();
		entrants();
        }
        
        else if(from_time_select == "20:30" && to_time_select == "1:00"){
		onightEntrants();
		entrants();
        
        }
        
        else if(from_time_select == "21:00" && to_time_select == "1:00"){
		onightEntrants();
		entrants();
        }
        
        else if(from_time_select == "21:30" && to_time_select == "1:00"){
		onightEntrants();
		entrants();
        
        }
        
        
        else if(from_time_select == "22:00" && to_time_select == "1:00"){
		onightEntrants();
		entrants();
        }
        
        else if(from_time_select == "22:30" && to_time_select == "1:00"){
		onightEntrants();
		entrants();
        
        }
        
        else if(from_time_select == "23:00" && to_time_select == "1:00"){
		onightEntrants();
		entrants();
        }
        
        else if(from_time_select == "23:30" && to_time_select == "1:00"){
		onightEntrants();
		entrants();
        
        }
        
        else if(from_time_select == "24:00" && to_time_select == "1:00"){
		onightEntrants();
		entrants();
        }
        
        else if(from_time_select == "24:30" && to_time_select == "1:00"){
		onightEntrants();
		entrants();
        
        }
        
        

        
        else if(from_time_select == "1:30" && to_time_select == "1:00"){
		wrongtime();
        
        }
		//------------------------------------------------------------------------------------------------------------

		else if(from_time_select == "19:00" && to_time_select == "24:30"){
		onightEntrants();
		entrants();
        }
        
        else if(from_time_select == "19:30" && to_time_select == "24:30"){
		onightEntrants();
		entrants();
        
        }
        
        else if(from_time_select == "20:00" && to_time_select == "24:30"){
		onightEntrants();
		entrants();
        }
        
        else if(from_time_select == "20:30" && to_time_select == "24:30"){
		onightEntrants();
		entrants();
        
        }
        
        else if(from_time_select == "21:00" && to_time_select == "24:30"){
		onightEntrants();
		entrants();
        }
        
        else if(from_time_select == "21:30" && to_time_select == "24:30"){
		onightEntrants();
		entrants();
        
        }
        
        
        else if(from_time_select == "22:00" && to_time_select == "24:30"){
		onightEntrants();
		entrants();
        }
        
        else if(from_time_select == "22:30" && to_time_select == "24:30"){
		onightEntrants();
		entrants();
        
        }
        
        else if(from_time_select == "23:00" && to_time_select == "24:30"){
		onightEntrants();
		entrants();
        }
        
        else if(from_time_select == "23:30" && to_time_select == "24:30"){
		onightEntrants();
		entrants();
        
        }
        
        else if(from_time_select == "24:00" && to_time_select == "24:30"){
		onightEntrants();
		entrants();
        }
        
 
        
        else if(from_time_select == "1:00" && to_time_select == "24:30"){
		wrongtime();
        }
        
        else if(from_time_select == "1:30" && to_time_select == "24:30"){
		wrongtime();
        }
		
		
		//------------------------------------------------------------------------------------------------------------

		else if(from_time_select == "19:00" && to_time_select == "24:00"){
		onightEntrants();
		entrants();
        }
        
        else if(from_time_select == "19:30" && to_time_select == "24:00"){
		onightEntrants();
		entrants();
        
        }
        
        else if(from_time_select == "20:00" && to_time_select == "24:00"){
		onightEntrants();
		entrants();
        }
        
        else if(from_time_select == "20:30" && to_time_select == "24:00"){
		onightEntrants();
		entrants();
        
        }
        
        else if(from_time_select == "21:00" && to_time_select == "24:00"){
		onightEntrants();
		entrants();
        }
        
        else if(from_time_select == "21:30" && to_time_select == "24:00"){
		onightEntrants();
		entrants();
        
        }
        
        
        else if(from_time_select == "22:00" && to_time_select == "24:00"){
		onightEntrants();
		entrants();
        }
        
        else if(from_time_select == "22:30" && to_time_select == "24:00"){
		onightEntrants();
		entrants();
        
        }
        
        else if(from_time_select == "23:00" && to_time_select == "24:00"){
		onightEntrants();
		entrants();
        }
        
        else if(from_time_select == "23:30" && to_time_select == "24:00"){
		onightEntrants();
		entrants();
        
        }
        
  
        else if(from_time_select == "24:30" && to_time_select == "24:00"){
		wrongtime();
        
        }
        
        
        else if(from_time_select == "1:00" && to_time_select == "24:00"){
		wrongtime();
        }
        
        else if(from_time_select == "1:30" && to_time_select == "24:00"){
		wrongtime();
        
        }
		
		//------------------------------------------------------------------------------------------------------------

		else if(from_time_select == "19:00" && to_time_select == "23:30"){
		onightEntrants();
		entrants();
        }
        
        else if(from_time_select == "19:30" && to_time_select == "23:30"){
		onightEntrants();
		entrants();
        
        }
        
        else if(from_time_select == "20:00" && to_time_select == "23:30"){
		onightEntrants();
		entrants();
        }
        
        else if(from_time_select == "20:30" && to_time_select == "23:30"){
		onightEntrants();
		entrants();
        
        }
        
        else if(from_time_select == "21:00" && to_time_select == "23:30"){
		onightEntrants();
		entrants();
        }
        
        else if(from_time_select == "21:30" && to_time_select == "23:30"){
		onightEntrants();
		entrants();
        
        }
        
        
        else if(from_time_select == "22:00" && to_time_select == "23:30"){
		onightEntrants();
		entrants();
        }
        
        else if(from_time_select == "22:30" && to_time_select == "23:30"){
		onightEntrants();
		entrants();
        
        }
        
        else if(from_time_select == "23:00" && to_time_select == "23:30"){
		onightEntrants();
		entrants();
        }
        
   
        
        else if(from_time_select == "24:00" && to_time_select == "23:30"){
		wrongtime();
        }
        
        else if(from_time_select == "24:30" && to_time_select == "23:30"){
		wrongtime();
        
        }
        
        
        else if(from_time_select == "1:00" && to_time_select == "23:30"){
		wrongtime();
        }
        
        else if(from_time_select == "1:30" && to_time_select == "23:30"){
		wrongtime();
        
        }
		
		//------------------------------------------------------------------------------------------------------------

		else if(from_time_select == "19:00" && to_time_select == "22:00"){
		onightEntrants();
		entrants();
        }
        
        else if(from_time_select == "19:30" && to_time_select == "22:00"){
		onightEntrants();
		entrants();
        
        }
        
        else if(from_time_select == "20:00" && to_time_select == "22:00"){
		onightEntrants();
		entrants();
        }
        
        else if(from_time_select == "20:30" && to_time_select == "22:00"){
		onightEntrants();
		entrants();
        
        }
        
        else if(from_time_select == "21:00" && to_time_select == "22:00"){
		onightEntrants();
		entrants();
        }
        
        else if(from_time_select == "21:30" && to_time_select == "22:00"){
		onightEntrants();
		entrants();
        
        }
        
        

        
        else if(from_time_select == "22:30" && to_time_select == "22:00"){
		wrongtime();
        
        }
        
        else if(from_time_select == "23:00" && to_time_select == "22:00"){
		wrongtime();
        }
        
        else if(from_time_select == "23:30" && to_time_select == "22:00"){
		wrongtime();
        
        }
        
        else if(from_time_select == "24:00" && to_time_select == "22:00"){
		wrongtime();
        }
        
        else if(from_time_select == "24:30" && to_time_select == "22:00"){
		wrongtime();
        
        }
        
        
        else if(from_time_select == "1:00" && to_time_select == "22:00"){
		wrongtime();
        }
        
        else if(from_time_select == "1:30" && to_time_select == "22:00"){
		wrongtime();
        
        }
		
		
		//------------------------------------------------------------------------------------------------------------

		else if(from_time_select == "19:00" && to_time_select == "21:30"){
		onightEntrants();
		entrants();
        }
        
        else if(from_time_select == "19:30" && to_time_select == "21:30"){
		onightEntrants();
		entrants();
        
        }
        
        else if(from_time_select == "20:00" && to_time_select == "21:30"){
		onightEntrants();
		entrants();
        }
        
        else if(from_time_select == "20:30" && to_time_select == "21:30"){
		onightEntrants();
		entrants();
        
        }
        
        else if(from_time_select == "21:00" && to_time_select == "21:30"){
		onightEntrants();
		entrants();
        }
        

        
        else if(from_time_select == "22:00" && to_time_select == "21:30"){
		wrongtime();
        }
        
        else if(from_time_select == "22:30" && to_time_select == "21:30"){
		wrongtime();
        
        }
        
        else if(from_time_select == "23:00" && to_time_select == "21:30"){
		wrongtime();
        }
        
        else if(from_time_select == "23:30" && to_time_select == "21:30"){
		wrongtime();
        
        }
        
        else if(from_time_select == "24:00" && to_time_select == "21:30"){
		wrongtime();
        }
        
        else if(from_time_select == "24:30" && to_time_select == "21:30"){
		wrongtime();
        }
        
        
        else if(from_time_select == "1:00" && to_time_select == "21:30"){
		wrongtime();
        }
        
        else if(from_time_select == "1:30" && to_time_select == "21:30"){
		wrongtime();
        
        }
		
		
		//------------------------------------------------------------------------------------------------------------

		else if(from_time_select == "19:00" && to_time_select == "21:00"){
		onightEntrants();
		entrants();
        }
        
        else if(from_time_select == "19:30" && to_time_select == "21:00"){
		onightEntrants();
		entrants();
        
        }
        
        else if(from_time_select == "20:00" && to_time_select == "21:00"){
		onightEntrants();
		entrants();
        }
        
        else if(from_time_select == "20:30" && to_time_select == "21:00"){
		onightEntrants();
		entrants();
        
        }
        

        else if(from_time_select == "21:30" && to_time_select == "21:00"){
		wrongtime();
        
        }
        
        
        else if(from_time_select == "22:00" && to_time_select == "21:00"){
		wrongtime();
		}
        
        else if(from_time_select == "22:30" && to_time_select == "21:00"){
		wrongtime();
        
        }
        
        else if(from_time_select == "23:00" && to_time_select == "21:00"){
	wrongtime();
        }
        
        else if(from_time_select == "23:30" && to_time_select == "21:00"){
		wrongtime();
        
        }
        
        else if(from_time_select == "24:00" && to_time_select == "21:00"){
		wrongtime();
        }
        
        else if(from_time_select == "24:30" && to_time_select == "21:00"){
		wrongtime();
        
        }
        
        
        else if(from_time_select == "1:00" && to_time_select == "21:00"){
		wrongtime();
        }
        
        else if(from_time_select == "1:30" && to_time_select == "21:00"){
		wrongtime();
        
        }
		
		//------------------------------------------------------------------------------------------------------------

		else if(from_time_select == "19:00" && to_time_select == "20:30"){
		onightEntrants();
		entrants();
        }
        
        else if(from_time_select == "19:30" && to_time_select == "20:30"){
		onightEntrants();
		entrants();
        
        }
        
        else if(from_time_select == "20:00" && to_time_select == "20:30"){
		onightEntrants();
		entrants();
        }
        
        else if(from_time_select == "21:00" && to_time_select == "20:30"){
		wrongtime();
        }
        
        else if(from_time_select == "21:30" && to_time_select == "20:30"){
		wrongtime();
        
        }
        
        
        else if(from_time_select == "22:00" && to_time_select == "20:30"){
		wrongtime();
        }
        
        else if(from_time_select == "22:30" && to_time_select == "20:30"){
		wrongtime();
        
        }
        
        else if(from_time_select == "23:00" && to_time_select == "20:30"){
		wrongtime();
        }
        
        else if(from_time_select == "23:30" && to_time_select == "20:30"){
		wrongtime();
        
        }
        
        else if(from_time_select == "24:00" && to_time_select == "20:30"){
		wrongtime();
        }
        
        else if(from_time_select == "24:30" && to_time_select == "20:30"){
		wrongtime();
        
        }
        
        
        else if(from_time_select == "1:00" && to_time_select == "20:30"){
		wrongtime();
        }
        
        else if(from_time_select == "1:30" && to_time_select == "20:30"){
		wrongtime();
        
        }
		
		//------------------------------------------------------------------------------------------------------------

		else if(from_time_select == "19:00" && to_time_select == "20:00"){
		onightEntrants();
		entrants();
        }
        
        else if(from_time_select == "19:30" && to_time_select == "20:00"){
		onightEntrants();
		entrants();
        
        }
      
        
        else if(from_time_select == "20:30" && to_time_select == "20:00"){
		wrongtime();
        
        }
        
        else if(from_time_select == "21:00" && to_time_select == "20:00"){
		wrongtime();
        }
        
        else if(from_time_select == "21:30" && to_time_select == "20:00"){
		wrongtime();
        
        }
        
        
        else if(from_time_select == "22:00" && to_time_select == "20:00"){
		wrongtime();
        }
        
        else if(from_time_select == "22:30" && to_time_select == "20:00"){
		wrongtime();
        }
        
        else if(from_time_select == "23:00" && to_time_select == "20:00"){
		wrongtime();
        }
        
        else if(from_time_select == "23:30" && to_time_select == "20:00"){
		wrongtime();
        
        }
        
        else if(from_time_select == "24:00" && to_time_select == "20:00"){
		wrongtime();
        }
        
        else if(from_time_select == "24:30" && to_time_select == "20:00"){
		wrongtime();
        
        }
        
        
        else if(from_time_select == "1:00" && to_time_select == "20:00"){
		wrongtime();
        }
        
        else if(from_time_select == "1:30" && to_time_select == "20:00"){
		wrongtime();
        
        }
		
		//------------------------------------------------------------------------------------------------------------

		else if(from_time_select == "19:00" && to_time_select == "19:30"){
		onightEntrants();
		entrants();
        }
        
    
        
        else if(from_time_select == "20:00" && to_time_select == "19:30"){
		wrongtime();
        }
        
        else if(from_time_select == "20:30" && to_time_select == "19:30"){
		wrongtime();
        }
        
        else if(from_time_select == "21:00" && to_time_select == "19:30"){
		wrongtime();
        }
        
        else if(from_time_select == "21:30" && to_time_select == "19:30"){
		wrongtime();
        }
        
        
        else if(from_time_select == "22:00" && to_time_select == "19:30"){
		wrongtime();
        }
        
        else if(from_time_select == "22:30" && to_time_select == "19:30"){
		wrongtime();
        
        }
        
        else if(from_time_select == "23:00" && to_time_select == "19:30"){
		wrongtime();
        }
        
        else if(from_time_select == "23:30" && to_time_select == "19:30"){
		wrongtime();
        }
        
        else if(from_time_select == "24:00" && to_time_select == "19:30"){
		wrongtime();
        }
        
        else if(from_time_select == "24:30" && to_time_select == "19:30"){
		wrongtime();
        }
        
        
        else if(from_time_select == "1:00" && to_time_select == "19:30"){
		wrongtime();
        }
        
        else if(from_time_select == "1:30" && to_time_select == "19:30"){
		wrongtime();
        
        }
		
		//------------------------------------------------------------------------------------------------------------
	
		
	 }
	
	
	 	
		 var reg_day_adult = 120;
         var reg_day_kids = 80;

         var reg_n_adult = 140;
         var reg_n_kids = 100;

         var reg_on_adult = 200;
         var reg_on_kids = 200;

         var holi_day_adult = 140;
         var holi_day_kids = 100;

         var holi_n_adult = 150;
         var holi_n_kids = 120;

         var holi_on_adult = 200;
         var holi_on_kids = 200;
		 
		 
		 
		function dayEntrants(){
			
		 

	
		var result_reg_day_adult  = Math.abs((reg_day_adult * document.getElementById("adult").value));
		document.getElementById("tot_adult_fee").value = result_reg_day_adult.toFixed(2);
		
		var result_reg_day_kids  = Math.abs((reg_day_kids * document.getElementById("kids").value));
		document.getElementById("tot_kids_fee").value = result_reg_day_kids.toFixed(2);

			}
			
			
		function dayEntrantsExt(){
			
		 

	
		var result_reg_day_adult  = Math.abs(((reg_day_adult + reg_n_adult) * document.getElementById("adult").value));
		document.getElementById("tot_adult_fee").value = result_reg_day_adult.toFixed(2);
		
		var result_reg_day_kids  = Math.abs(((reg_day_kids + reg_n_kids) * document.getElementById("kids").value));
		document.getElementById("tot_kids_fee").value = result_reg_day_kids.toFixed(2);

			}
			
			
			function dayEntrantsExtover(){
			
		 

	
		var result_reg_day_adult  = Math.abs(((reg_day_adult + reg_n_adult + reg_on_adult) * document.getElementById("adult").value));
		document.getElementById("tot_adult_fee").value = result_reg_day_adult.toFixed(2);
		
		var result_reg_day_kids  = Math.abs(((reg_day_kids + reg_n_kids + reg_on_kids) * document.getElementById("kids").value));
		document.getElementById("tot_kids_fee").value = result_reg_day_kids.toFixed(2);

			}
		
		
		function nightEntrants(){
			
		
		var result_reg_n_adult  = Math.abs((reg_n_adult * document.getElementById("adult").value));
		document.getElementById("tot_adult_fee").value = result_reg_n_adult.toFixed(2);
		
		var result_reg_n_kids  = Math.abs((reg_n_kids * document.getElementById("kids").value));
		document.getElementById("tot_kids_fee").value = result_reg_n_kids.toFixed(2);

			}
			
			
		function onightEntrants(){
			
		
		var result_reg_on_adult  = Math.abs((reg_on_adult * document.getElementById("adult").value));
		document.getElementById("tot_adult_fee").value = result_reg_on_adult.toFixed(2);
		
		var result_reg_on_kids  = Math.abs((reg_on_kids * document.getElementById("kids").value));
		document.getElementById("tot_kids_fee").value = result_reg_on_kids.toFixed(2);

			}
	
	
	
	
	function entrants(){
	var adult = Math.abs(document.getElementById("adult").value);
	var kids = 	Math.abs(document.getElementById("kids").value);
	
	
	var tot_ent = (parseInt(adult) + parseInt(kids));
	document.getElementById("total_entrants").value = tot_ent;
		
		
		
		
		}
		
	function samehours(){

		
		
			alert("WARNING ! Your prefered time cannot be process. Selected time is the same. Please try again ...");
		
		}
	
	
	function wrongtime(){

		
		
			alert("WARNING ! Your prefered time cannot be process. Selected time is the invalid. Please try again ...");
		
		}
	
	
	
	</script>
    