<?php session_start(); ?>
<html>
<head>
        <!-- Bootstrap, Dependencies, and CSS styles -->
        <?php echo file_get_contents('dependencies_report.html'); ?>
    </head>

    <?php 
        include 'getStrengths.php';
        
        /* Variables from form */
        
        $firstname = "";
        $firstname = $_SESSION["firstname"];
        $lastname = "";
        $lastname = $_SESSION["lastname"];
        $form_parameters= array("First", "Second", "Third", "Fourth", "Fifth");
        
        /* CliftonStrength Categories */
        $strategic_thinking= array("Analytical", "Context", "Futuristic", "Ideation", "Input", "Intellection", "Learner", "Strategic");
        $relationship_building= array("Adaptability", "Connectedness", "Developer", "Empathy", "Harmony", "Includer", "Individualization", "Positivity", "Relator");
        $influencing= array("Activator", "Command", "Communication", "Competition", "Maximizer", "Self-Assurance", "Significance", "Woo");
        $executing= array("Achiever", "Arranger", "Belief", "Consistency", "Deliberative", "Discipline", "Focus", "Responsibility", "Restorative");
        

        foreach ($form_parameters as $parameter) {
            $$parameter = "";
            $$parameter = ucfirst(strtolower($_SESSION["$parameter"])); 
            ${"style_$parameter"} = "font-weight: bold; font-size: large; border: 1px solid black; text-align: center; ";
            
            if (in_array($$parameter, $strategic_thinking)) {
                ${"style_$parameter"} .= "background-color: #d4e8ce; color: #234d11";
            }

            if (in_array($$parameter, $relationship_building)) {
                ${"style_$parameter"} .= "background-color: #b9cfe3; color: #190058";
            }

            if (in_array($$parameter, $influencing)) {
                ${"style_$parameter"} .= "background-color: #fce5ce; color: #da7200";
            }

            if (in_array($$parameter, $executing)) {
                ${"style_$parameter"} .= "background-color: #c8bfe0; color: #500063";
            }
        }
    ?>
<div class= "report-container">
    <div class= "text-right">
            <div>&nbsp</div>
            <button type="button" onclick="window.location='index.php';" class="btn btn-secondary btn-lg">New Report</button>
            <iframe src="printable_managing_others.php" style="visibility:hidden; height:1px; width:1px" name= "frame"></iframe> 
            <!-- <button type="button" onclick="window.print()" class="btn btn-secondary btn-lg">Print Page</button> -->
            <input type="button" onclick="frames['frame'].print()" class="btn btn-secondary btn-lg" value="Print Page">
        </div>
    
        
        <h1><?php echo $firstname ?> <?php echo $lastname?></h1>
        <h1 style= "background-color: a2c4c9; padding-bottom: 1%;">When Managing Others</h1>
        

        <div class= "header"><strong>Keep in mind your Top 5 Strengths:</strong></div>
        <div class= "d-flex justify-content-center">
    
            <div style = "<?php echo $style_First?>" class= "p-2 flex-fill bd-highlight"><?php echo $First ?></div>
            <div style = "<?php echo $style_Second?>" class= "p-2 flex-fill"><?php echo $Second ?></div>
            <div style = "<?php echo $style_Third?>" class= "p-2 flex-fill"><?php echo $Third ?></div>
            <div style = "<?php echo $style_Fourth?>" class= "p-2 flex-fill"><?php echo $Fourth ?></div>
            <div style = "<?php echo $style_Fifth?>" class= "p-2 flex-fill"><?php echo $Fifth ?></div>
            
        </div>
        <br>
        <div class= "header"><strong>And remember this advice:</strong></div>
    
    </div>

    <div class= "main-container">

        
        <?php echo genOtherSection($First, $style_First); ?>
        <?php echo genOtherSection($Second, $style_Second); ?>
        <?php echo genOtherSection($Third, $style_Third); ?>
        <?php echo genOtherSection($Fourth, $style_Fourth); ?>
        <?php echo genOtherSection($Fifth, $style_Fifth); ?>
    </div>   

    <div>&nbsp</div>
    <div>&nbsp</div>
    <div class= "text-center"> <button type="button" onclick="history.back()" class="btn btn-secondary btn-lg">Previous Page</button></div>
    <div>&nbsp</div>
    <div>&nbsp</div>
</html>