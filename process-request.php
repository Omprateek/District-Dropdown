<?php
if(isset($_POST["state"])){
    // Capture selected state
    $state = $_POST["state"];
     
    // Define state and district array
    $stateArr = array(
                    "haryana" => array("Faridabad", "Hisar", "Bhiwani"),
                    "maharashtra" => array("Mumbai", "Kalyan", "CSTM"),
					"aasam" => array("Jorhat", "Golaghat", "Nagaon"),
                    "sikkim" => array("North Sikkim", "South Sikkim", "East Sikkim","West Sikkim")
                );
     
    // Display district dropdown based on state name
    if($state !== 'Select'){
        echo "<label>District:</label>";
        echo "<select>";
        foreach($stateArr[$state] as $value){
            echo "<option>". $value . "</option>";
        }
        echo "</select>";
    } 
}
?>