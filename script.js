// Check if input is valid
    // Check if input is in validStrengths
    // Make case insensitive
    // Handle blank in array
    // Warning Message if not valid
    // Check if same strength has been used

function validateForm() {
    const validStrengths = ["Achiever", "Activator", "Adaptability", "Analytical", "Arranger", "Belief", "Command", "Communication", 
    "Competition", "Connectedness", "Consistency", "Context", "Deliberative", "Developer", "Discipline", 
    "Empathy", "Focus", "Futuristic", "Harmony", "Ideation", "Includer", "Individualization", "Input", 
    "Intellection", "Learner", "Maximizer", "Positivity", "Relator", "Responsibility", "Restorative", 
    "Self-Assurance", "Significance", "Strategic", "Woo"]

    var first = document.forms["form"]["First"].value;
    var second = document.forms["form"]["Second"].value;
    var third = document.forms["form"]["Third"].value;
    var fourth = document.forms["form"]["Fourth"].value;
    var fifth = document.forms["form"]["Fifth"].value;


    //Check if strengths have been filled out
    if (first == "" || second == "" || third == "" || fourth == "" || fifth == "") {
        alert("Must fill out CliftonStrengths")
        return false;
    }

    
}
