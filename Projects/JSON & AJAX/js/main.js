var cat = {
    "name": "Meowsalot",
    "species": "cat",
    "favFood": "tuna"
};

var myFavColors = ["blue", "green", "red"];

// One variable for multiple pets
var thePets = [
    {
        "name": "Meowsalot",
        "species": "cat",
        "favFood": "tuna"
    }, 
    {
        "name": "Barky",
        "species": "dog",
        "favFood": "sausages"
    }, 
    {
        "name": "Slolly",
        "species": "turtle",
        "favFood": "vegetables"
    }
]
// This format is called JSON (Java Script Object Notation)
// What if we want to access Slolly's favourite food?
thePets[2].favFood;