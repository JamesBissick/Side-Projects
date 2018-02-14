// ------- Else if

/* var number = Number(prompt("Enter a number:"));
if(number < 5) {
    console.log(number + " is inferior to 5");
}
else if(number > 5) {
    console.log(number + " is superior to 5");
}
else if()
else {
    console.log(number + " is 5");
}; */

// ------- Else

/* var number = Number(prompt("Enter a number"));
if((number >= 10) && (number <= 100)) {
    console.log(number + " is between 10 and 100.");
}
else {
    console.log(number + " is not between 10 and 100.");
}; */

// ------- While loop

/* console.log("Start of program");
var number = 1;
while(number <= 100) {
    console.log(number);
    number++;
}
console.log("End of program"); */

// ------- For loop

/* - Version 1 Basic 
console.log("Start of  program");
var counter;  // --- Define a variable called counter 
// -- Defining the var in the for loop is called initialization
for(counter =1; counter <= 5; counter++) { 
    console.log(counter);
}
console.log("End of program")*/

/* - Version 2 Shorter 
console.log("Start fo Program");
for(var counter = 1; counter <= 5; counter++) {
    console.log(counter);
}
console.log("End of Program"); */

/* 
// Créer un simple program de test de conditions
1) Je déclare ma variable avec une valeur
2) Je déclare la condition suivi de curly brackets (je peut me servir de console.log pour afficher le résultat)
*/
/* 
var number = Number(prompt("Enter a number"));
if(number > 5) {
    console.log(number + " is superior to 5.");
}
else if(number < 5) {
    console.log(number + " is inferior to 5.");
}

else {
    console.log(number + " is 5.")
} */

/* 
// --- While loops
1) Je déclare une valeur avec sa valeur
2) Je déclare la ou les conditions

// --- For loops
1) Je déclare la variable avec sa valeur ou je la déclare DANS la condition For loop
2) Je fait attention de ne pas faire de boucle infini en incrémentant ma valeur
*/

/* var number = 1;
while(number <= 5) {
    console.log(number);
    number++;
}; */

/* for(var number = 1; number <= 10; number++) {
    console.log(number);
} */

/* console.log("Javascript is great to work on".length) */

/* var originalWord = ("Salut les Terriens!");
console.log("Start of program lowercase");
console.log(originalWord.length); // optional: just to try out the .length
var lowercaseWord = originalWord.toLowerCase() 
    console.log(lowercaseWord);
console.log("End of program lowercase");

console.log("Start of program uppercase");
var uppercaseWord = originalWord.toLocaleUpperCase() 
    console.log(uppercaseWord);
console.log("End of program uppercase"); */

/* var word = "programming";
console.log("programming" === "programming");
console.log("programming" === "Programming"); */


// -- Using loops for taking out characters

/* var sport = "tennis"; // 6 characters

//console.log(sport.charAt(0)); // will be t
//console.log(sport[0]); // same thing 

for(var i = 0; i<sport.length; i++) {
    console.log(sport[i]);
};

var name = "Sarah"; // 5 characters
for(var i = 0; i<name.length; i++) {
    console.log(name[i]);
}; */

var pen = {
    type: "ballpoint",
    color: "blue",
    brand: "bic",
    ability: "bic eraser"
};

console.log(pen.type);
console.log(pen.color);
console.log(pen.brand);
console.log(pen.ability);

console.log("My pen is a " + pen.brand + " " + pen.type + ", its color is " + pen.color + "." + " I love this " + pen.type + " because it is a " 
+ pen.ability + ".");

pen.color = "red";
console.log("My pen is a " + pen.brand + " " + pen.type + ", its color is " + pen.color + "." + " I love this " + pen.type + " because it is a " 
+ pen.ability + ".");

pen.price = 2.00;

console.log("My pen is a " + pen.brand + " " + pen.type + ", its color is " + pen.color + "." + " I love this " + pen.type + " because it is a " + pen.ability 
+ "." + " It cost £" + pen.price + ". ");

// -- Example: cake

var cake = {
    flavour: "chocolate",
    levels: 3,
    topping: "candies",
    weight: "450g",
    price: 39.90
}

console.log("My cake is a " + cake.levels + " levels " + cake.flavour + " cake, it has " + cake.topping + " on top. Be ready, this cake is big and it weights " 
+ cake.weight + "and all that for the fair price of " + cake.price + "$.");


// -- Other example with a cake

console.log("\nStart of Program")
var cake = {
    flavour: "chocolate",
    levels: 3,
    topping: "candies",
    weight: "450g",
    price: 39.90,

    describe: function() {
        var description = "My cake is a " + this.levels + " levels " + this.flavour + " cake, it has " + this.topping + " on top. Be ready, this cake is big and it weights " 
        + this.weight + "and all that for the fair price of " + this.price + "$.";
        return description;
    } 
};

console.log(cake.describe());
console.log("End of Program");