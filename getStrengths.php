<?php 

function genSelfSection()
{ 
  /* CliftonStrength Categories */
  $strategic_thinking= array("Analytical", "Context", "Futuristic", "Ideation", "Input", "Intellection", "Learner", "Strategic");
  $relationship_building= array("Adaptability", "Connectedness", "Developer", "Empathy", "Harmony", "Includer", "Individualization", "Positivity", "Relator");
  $influencing= array("Activator", "Command", "Communication", "Competition", "Maximizer", "Self-Assurance", "Significance", "Woo");
  $executing= array("Achiever", "Arranger", "Belief", "Consistency", "Deliberative", "Discipline", "Focus", "Responsibility", "Restorative");

  /*The csv to array interprets the position as its key to access a value. E.G. Self-Achiever: 0 ; Others-Achiever: 1; Self-Activator: 2; etc
  This self_array is simply used for convenience. This way we can use the function input $strength to index the csv directly */
  $self_array = array("Achiever" => 0, "Activator" => 2, "Adaptability" => 4, "Analytical" => 6, "Arranger" => 8, 
  "Belief" => 10, "Command" => 12, "Communication" => 14, "Competition" => 16, "Connectedness" => 18,"Consistency" => 20,
  "Context" => 22,"Deliberative" => 24,"Developer" => 26,"Discipline" => 28,"Empathy" => 30,"Focus" => 32,"Futuristic" => 34,
  "Harmony" => 36,"Ideation" => 38,"Includer" => 40,"Individualization" => 42,"Input" => 44,"Intellection" => 46,
  "Learner" => 48,"Maximizer" => 50,"Positivity" => 52,"Relator" => 54,"Responsibilty" => 56,"Restorative" => 58,
  "Self-Assurance" => 60,"Significance" => 62,"Strategic" => 64,"Woo" => 66,);
    
  #Function inputs
  $strength = func_get_args()[0];
  $style1 = func_get_args()[1];

  #Titular strength display
  echo '<div class= "section" style= "' . $style1 . '">' . $strength . '</div>';

  #Actual mapping of the array occurs here
  $csv = array_map("str_getcsv", file("CliftonWebsiteHelper4.csv",FILE_SKIP_EMPTY_LINES));
  $keys = array_shift($csv);
  
  #Main loop
  $size = 0;
  foreach ($csv as $i=>$row) {
    if ( $size == 0 && (strlen($row[ $self_array[$strength] ] > 2) ) ) {
      if (in_array($strength, $strategic_thinking)) {
        echo '<div class= "section text" style = "background-color: #ebf6ed; color: #142d09">' . $row[ $self_array[$strength] ]  . '</div>';
      }
      if (in_array($strength, $relationship_building)) {
        echo '<div class= "section text" style = "background-color: #eef5fb; color: #260280">' . $row[ $self_array[$strength] ]  . '</div>';  
      }

      if (in_array($strength, $influencing)) {
        echo '<div class= "section text" style = "background-color: #fdefe0; color: #660000">' . $row[ $self_array[$strength] ]  . '</div>';
      }
      
      if (in_array($strength, $executing)) {
        echo '<div class= "section text" style = "background-color: #efeafb; color: #20124d">' . $row[ $self_array[$strength] ]  . '</div>'; 
      }
      
    }
    
    if ($size > 0 && (strlen($row[ $self_array[$strength] ] > 2) ) ) {
        if ($size % 2 == 0) {
            if (in_array($strength, $strategic_thinking)) {
                echo '<div class= "section"></div>';
                echo '<div class= "section text"  style = "background-color: #ebf6ed; color: #142d09" >' . $row[ $self_array[$strength] ]  . '</div>';  
            }
            if (in_array($strength, $relationship_building)) {
              echo '<div class= "section"></div>';
              echo '<div class= "section text"  style = "background-color: #eef5fb; color: #260280" >' . $row[ $self_array[$strength] ]  . '</div>';  
            }
            if (in_array($strength, $influencing)) {
              echo '<div class= "section"></div>';
              echo '<div class= "section text"  style = "background-color: #fdefe0; color: #660000" >' . $row[ $self_array[$strength] ]  . '</div>';  
            }
            if (in_array($strength, $executing)) {
              echo '<div class= "section"></div>';
              echo '<div class= "section text"  style = "background-color: #efeafb; color: #20124d" >' . $row[ $self_array[$strength] ]  . '</div>';  
            }
        }
        if ($size % 2 != 0) {
            if (in_array($strength, $strategic_thinking)) {
              echo '<div class= "section"></div>';
              echo '<div class= "section text"  style = "background-color: #e0efdb; color: #142d09" >' . $row[ $self_array[$strength] ]  . '</div>';  
            }
            if (in_array($strength, $relationship_building)) {
              echo '<div class= "section"></div>';
              echo '<div class= "section text"  style = "background-color: #dceaf6; color: #260280" >' . $row[ $self_array[$strength] ]  . '</div>';  
            }
            if (in_array($strength, $influencing)) {
              echo '<div class= "section"></div>';
              echo '<div class= "section text"  style = "background-color: #fce5ce; color: #660000" >' . $row[ $self_array[$strength] ]  . '</div>';  
            }
            if (in_array($strength, $executing)) {
              echo '<div class= "section"></div>';
              echo '<div class= "section text"  style = "background-color: #e6e2ef; color: #20124d" >' . $row[ $self_array[$strength] ]  . '</div>';  
            }
   
        }
      
    }

    $size += 1;
    
}
  


}



function genOtherSection()
{ 
  /* CliftonStrength Categories */
  $strategic_thinking= array("Analytical", "Context", "Futuristic", "Ideation", "Input", "Intellection", "Learner", "Strategic");
  $relationship_building= array("Adaptability", "Connectedness", "Developer", "Empathy", "Harmony", "Includer", "Individualization", "Positivity", "Relator");
  $influencing= array("Activator", "Command", "Communication", "Competition", "Maximizer", "Self-Assurance", "Significance", "Woo");
  $executing= array("Achiever", "Arranger", "Belief", "Consistency", "Deliberative", "Discipline", "Focus", "Responsibility", "Restorative");

  /*The csv to array interprets the position as its key to access a value. E.G. Self-Achiever: 0 ; Others-Achiever: 1; Self-Activator: 2; etc
  This self_array is simply used for convenience. This way we can use the function input $strength to index the csv directly */
  $self_array = array("Achiever" => 1, "Activator" => 3, "Adaptability" => 5, "Analytical" => 7, "Arranger" => 9, "Belief" => 11,
  "Command" => 13, "Communication" => 15, "Competition" => 17, "Connectedness" => 19,"Consistency" => 21,"Context" => 23,
  "Deliberative" => 25,"Developer" => 27,"Discipline" => 29,"Empathy" => 31,"Focus" => 33,"Futuristic" => 35,"Harmony" => 37,
  "Ideation" => 39,"Includer" => 41,"Individualization" => 43,"Input" => 45,"Intellection" => 47,"Learner" => 49,"Maximizer" => 51,
  "Positivity" => 53,"Relator" => 55,"Responsibilty" => 57,"Restorative" => 59,"Self-Assurance" => 61,"Significance" => 63,
  "Strategic" => 65,"Woo" => 67,);
    
  #Function inputs
  $strength = func_get_args()[0];
  $style1 = func_get_args()[1];

  #Titular strength display
  echo '<div class= "section" style= "' . $style1 . '">' . $strength . '</div>';

  #Actual mapping of the array occurs here
  $csv = array_map("str_getcsv", file("CliftonWebsiteHelper4.csv",FILE_SKIP_EMPTY_LINES));
  $keys = array_shift($csv);
  
  #Main loop
  $size = 0;
  foreach ($csv as $i=>$row) {
    if ( $size == 0 && (strlen($row[ $self_array[$strength] ] > 2) ) ) {
      if (in_array($strength, $strategic_thinking)) {
        echo '<div class= "section text" style = "background-color: #ebf6ed; color: #142d09">' . $row[ $self_array[$strength] ]  . '</div>';
      }
      if (in_array($strength, $relationship_building)) {
        echo '<div class= "section text" style = "background-color: #eef5fb; color: #260280">' . $row[ $self_array[$strength] ]  . '</div>';  
      }

      if (in_array($strength, $influencing)) {
        echo '<div class= "section text" style = "background-color: #fdefe0; color: #660000">' . $row[ $self_array[$strength] ]  . '</div>';
      }
      
      if (in_array($strength, $executing)) {
        echo '<div class= "section text" style = "background-color: #efeafb; color: #20124d">' . $row[ $self_array[$strength] ]  . '</div>'; 
      }
      
    }
    
    if ($size > 0 && (strlen($row[ $self_array[$strength] ] > 2) ) ) {
        if ($size % 2 == 0) {
            if (in_array($strength, $strategic_thinking)) {
                echo '<div class= "section"></div>';
                echo '<div class= "section text"  style = "background-color: #ebf6ed; color: #142d09" >' . $row[ $self_array[$strength] ]  . '</div>';  
            }
            if (in_array($strength, $relationship_building)) {
              echo '<div class= "section"></div>';
              echo '<div class= "section text"  style = "background-color: #eef5fb; color: #260280" >' . $row[ $self_array[$strength] ]  . '</div>';  
            }
            if (in_array($strength, $influencing)) {
              echo '<div class= "section"></div>';
              echo '<div class= "section text"  style = "background-color: #fdefe0; color: #660000" >' . $row[ $self_array[$strength] ]  . '</div>';  
            }
            if (in_array($strength, $executing)) {
              echo '<div class= "section"></div>';
              echo '<div class= "section text"  style = "background-color: #efeafb; color: #20124d" >' . $row[ $self_array[$strength] ]  . '</div>';  
            }
        }
        if ($size % 2 != 0) {
            if (in_array($strength, $strategic_thinking)) {
              echo '<div class= "section"></div>';
              echo '<div class= "section text"  style = "background-color: #e0efdb; color: #142d09" >' . $row[ $self_array[$strength] ]  . '</div>';  
            }
            if (in_array($strength, $relationship_building)) {
              echo '<div class= "section"></div>';
              echo '<div class= "section text"  style = "background-color: #dceaf6; color: #260280" >' . $row[ $self_array[$strength] ]  . '</div>';  
            }
            if (in_array($strength, $influencing)) {
              echo '<div class= "section"></div>';
              echo '<div class= "section text"  style = "background-color: #fce5ce; color: #660000" >' . $row[ $self_array[$strength] ]  . '</div>';  
            }
            if (in_array($strength, $executing)) {
              echo '<div class= "section"></div>';
              echo '<div class= "section text"  style = "background-color: #e6e2ef; color: #20124d" >' . $row[ $self_array[$strength] ]  . '</div>';  
            }
   
        }
      
    }

    $size += 1;
    
}
  


}


?>