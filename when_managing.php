<html>
    <head>
        <!-- Bootstrap, Dependencies, and CSS styles -->
        <?php echo file_get_contents('dependencies_report.html'); ?>
    </head>

    <?php 
        include 'getStrengths.php';

        /* Variables from form */
        $firstname = "";
        $firstname = $_POST["firstname"];
        $lastname = "";
        $lastname = $_POST["lastname"];
        $form_parameters= array("First", "Second", "Third", "Fourth", "Fifth");
        
        /* CliftonStrength Categories */
        $strategic_thinking= array("Analytical", "Context", "Futuristic", "Ideation", "Input", "Intellection", "Learner", "Strategic");
        $relationship_building= array("Adaptability", "Connectedness", "Developer", "Empathy", "Harmony", "Includer", "Individualization", "Positivity", "Relator");
        $influencing= array("Activator", "Command", "Communication", "Competition", "Maximizer", "Self-Assurance", "Significance", "Woo");
        $executing= array("Achiever", "Arranger", "Belief", "Consistency", "Deliberative", "Discipline", "Focus", "Responsibility", "Restorative");
        

        foreach ($form_parameters as $parameter) {
            $$parameter = "";
            $$parameter = $_POST["$parameter"]; 
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
            <button type="button" onclick="window.print()" class="btn btn-secondary btn-lg">Print Page</button>
        </div>
        
        <h1 style= "background-color: a2c4c9; padding-bottom: 1%;">When You're Managing</h1>
        <h1><?php echo $firstname ?> <?php echo $lastname?></h1>

        <div class= "header"><strong>Keep in mind their Top 5 Strengths:</strong></div>
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

        
        <?php echo genSelfSection($First, $style_First); ?>
        <?php echo genSelfSection($Second, $style_Second); ?>
        <?php echo genSelfSection($Third, $style_Third); ?>
        <?php echo genSelfSection($Fourth, $style_Fourth); ?>
        <?php echo genSelfSection($Fifth, $style_Fifth); ?>
    </div>

    <div>&nbsp</div>
    <div>&nbsp</div>
    <div class= "justify-content-center d-flex">

                <div class= "p-2"> <button type="button" onclick="history.back()" class="btn btn-secondary btn-lg">Previous Page</button></div>
                
                <div class= "p-2"> <form method= "post" action="/managing_others.php">
                    <input type="hidden" name="firstname" value="<?php echo $_POST["firstname"]; ?>"/>
                    <input type="hidden" name="lastname" value="<?php echo $_POST["lastname"]; ?>"/>
                    <input type="hidden" name="First" value="<?php echo $_POST["First"]; ?>"/>
                    <input type="hidden" name="Second" value="<?php echo $_POST["Second"]; ?>"/>
                    <input type="hidden" name="Third" value="<?php echo $_POST["Third"]; ?>"/>
                    <input type="hidden" name="Fourth" value="<?php echo $_POST["Fourth"]; ?>"/>
                    <input type="hidden" name="Fifth" value="<?php echo $_POST["Fifth"]; ?>"/>
                    <button type="submit" class="btn btn-secondary btn-lg">Managing Others</button>
                </form>
                </div>
                <div>&nbsp</div>
                <div>&nbsp</div>
    </div>
    

</html>