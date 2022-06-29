// Check if input is valid
    // Check if input is in validStrengths
    // Make case insensitive
    // Handle blank in array
    // Warning Message if not valid
    // Check if same strength has been used

function validateForm(event) {
    //const validStrengths = ["Achiever", "Activator", "Adaptability", "Analytical", "Arranger", "Belief", "Command", "Communication", 
    //"Competition", "Connectedness", "Consistency", "Context", "Deliberative", "Developer", "Discipline", 
   // "Empathy", "Focus", "Futuristic", "Harmony", "Ideation", "Includer", "Individualization", "Input", 
   // "Intellection", "Learner", "Maximizer", "Positivity", "Relator", "Responsibility", "Restorative", 
    //"Self-Assurance", "Significance", "Strategic", "Woo"]

    const validStrengths = ['achiever', 'activator', 'adaptability', 'analytical', 'arranger', 'belief', 'command', 'communication', 
    'competition', 'connectedness', 'consistency', 'context', 'deliberative', 'developer', 'discipline', 
    'empathy', 'focus', 'futuristic', 'harmony', 'ideation', 'includer', 'individualization', 'input', 'intellection', 
    'learner', 'maximizer', 'positivity', 'relator', 'responsibility', 'restorative', 'self-assurance', 'significance', 'strategic', 'woo']

    var first = document.forms["form"]["First"].value;
    var second = document.forms["form"]["Second"].value;
    var third = document.forms["form"]["Third"].value;
    var fourth = document.forms["form"]["Fourth"].value;
    var fifth = document.forms["form"]["Fifth"].value;

    //Check if strengths have been filled out
    if (first == "" || second == "" || third == "" || fourth == "" || fifth == "") {
        alert("Must fill out CliftonStrengths")
        event.preventDefault();
        return false;
    }

    //Check if strength has already been used
    const duplicate = new Set([first, second, third, fourth, fifth])
    if (duplicate.size < 5) {
        alert("Cannot have duplicate strengths")
        event.preventDefault();
        return false;
    }
    
    if (!validStrengths.includes(first.toLowerCase()) || !validStrengths.includes(second.toLowerCase()) || 
        !validStrengths.includes(third.toLowerCase()) || !validStrengths.includes(fourth.toLowerCase()) || 
        !validStrengths.includes(fifth.toLowerCase())) {
        alert("One or more of your strengths are invalid");
        event.preventDefault();
        return false;
    }

}
