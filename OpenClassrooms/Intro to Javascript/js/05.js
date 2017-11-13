// -------------- Introduction: the role of functions --------------

/* 
Begin
Get out the rice cooker
Fill it with rice
Fill it with water
Cook the rice
Chop the vegetables
Stir-fry the vegetables
Taste-test the vegetables
    If the veggies are good
        Remove them from the stove
    If the veggies aren't good
        Add more pepper and spices
    If the veggies aren't cooked enough
        Keep stir-frying the veggies
Heat the tortilla
Add rice to tortilla
Add vegetables to tortilla
Roll tortilla
End 
*/

// - Here's the same general idea written more simply.

/*
Begin
Cook rice
Stir-fry vegetables
Add fillings
Roll together
End 
*/

/* The first version details all the individual actions that make up the cooking process. The second 
breaks down the recipe into broader steps and introduces concepts that could be re-used for other dishes as 
well like cook, stir-fry, add, and roll.

Our code so far has mimicked the first example, but it's time to start modularizing our example into sub-steps 
so we can re-use bits and pieces as needed. In JavaScript, these sub-steps are called functions! */

// -------- Functions

/* A function is a group of instructions that performs a particular task.

Here's a basic example of a function. */

function sayHello() {
    console.log("Hello!");
}

console.log("Start of program");
sayHello();
console.log("End of program");

/* Go ahead and add this code to your chapter-5 JavaScript file. Opening the  corresponding HTML file in your browser should display this: */

// -- Declaring a function

/* Check out the first lines of the example above. */

function sayHello() {
    console.log("Hello!");
}

/* This creates a function called sayHello(). It consists of only one statement that will make a message appear in the console: "Hello!".

Creating a function is called declaration: */

// Declaring a function called myFunction
function myFunction() {
    // Function actions
}

/* The declaration of afunctionis performed using the JavaScript keywordfunction, followed by the function name and a pair of parentheses. 
Instructions that make up the function constitute the body of the function. These instructions are enclosed in curly braces and indented. */

// -- Calling a function

/* If a function is defined in a forest, but there's no one to call it, is it real?! Functions must be called in order to actually run. */

console.log("Start of program");
sayHello();
console.log("End of program");

/* The first and third statements explicitly display messages in the console. The second line makes a call to the functionsayHello()  .

You can call a function by writing the name of the function followed by a pair of parentheses. */

// ...
myFunction(); // Call myFunction
// ...

/* Calling a function triggers the execution of actions listed therein. */

// Just remember for each function:
// Declare it.
// Call it.


// -------------- Function contents

// -- Return value

/* Here is a variation of our example program. */

function sayHello() {
    return "Hello!";
}

console.log("Start of program");
var result = sayHello();
console.log(result);
console.log("End of program");

/* Run this code, and you'll see the same result as before. */

/* In this example, the body of the sayHello()  function has changed: The statementconsole.log("Hello!")  was replaced by return "Hello!".

The keyword return  indicates that a return value will be given, which is specified immediately after the word.  */

// Declare myFunction
function myFunction() {
    // Calculate return value
    // ...
    return returnValue;
}

// Get return value from myFunction
var value = myFunction();
// ...

/* This return value can be any type (number, string, etc.). However, a function can return only one value. */

/* If you try to retrieve thereturnvalue of a function that does not actually have one, we get the JavaScript valueundefined. 
This isn't necessarily an error; it just means the function may perform certain operations without actually outputting anything specific at the end. */

function myFunction() {
    // No value returned in this function
}

var result = myFunction();

console.log(result); // Will be undefined

// A function that returns no value is sometimes called a procedure.

// A function stops running immediately after a return  statement.


// ------- Local variables

/* You can declare variables inside a function, as in the example below. */

function sayHello() {
    var message = "Hello!";
    return message;
}

console.log(sayHello());

/* The functionsayHello() declares a variable namedmessageand returns its value.

The variables declared in the body of a function are called local variables. They can be used only within the function itself! */

function sayHello() {
    var message = "Hello!";
    return message;
}

console.log(sayHello());
console.log(message); // Error: the message variable doesn't exist here

/* Each function call will declare a local variable, each separate.

The scope of a variable is all the places where the variable is accessible. 
The scope of a local variable is limited to the body of the function inside which it is declared. 
If you try to use it outside the function, you won't be able to! */

// Not being able to use local variables outside the functions in which they are 
// declared may seem like a limitation. Actually, it's a good thing! This means functions can be designed as autonomous and reusable.


// -------- Passing parameters

/* A parameter is information that the function needs in order to work. The function parameters are defined in parentheses 
immediately following the name of the function. You can then use the parameter value in the body of the function!

You supply the parameter value when calling the function, at which point we say that we're "passing an argument."  */

// Parameter: the thing passed within the function definition
// Argument: the thing passed when the function is called

/* Let's edit the above example to add a personalized greeting: */

function sayHello(name) {
    var message = "Hello, " + name + "!";
    return message;
}

console.log(sayHello("David"));
console.log(sayHello("Seicha"));

/* The function declaration of sayHello()now contains a parameter called name.
Test it out and you'll get the following result: */

/* You can also pass multiple parameters to a function! */

function sayHello(firstName, lastName) {
    var message = "Hello, " + firstName + lastName + "!";
    return message;
}

console.log(sayHello("David", "Goldman"));
console.log(sayHello("Seicha", "Miller"));

// Be sure that you pass multiple arguments in the same order as they're defined in the function!