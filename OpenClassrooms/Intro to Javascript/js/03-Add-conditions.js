// ---------------------- What's a condition? ----------------------

/* Suppose we want to write a program that makes enter a number to the user, 
who then displays a message if the number is positive. Here the corresponding algorithm. */

/* 
Enter a number
If the number is positive
    Display Message 
*/

// The message should display only if the number is positive: this means it's "subject" to a condition.

// ----------- The if statement

/* Here's how you translate the program to JavaScript. */

var number = Number (prompt("Enter a number:"));
if (number > 0) {
    console.log (number + " is positive");
};

/* The pair of opening and closing braces defines what is called a block of code associated with anif 
statement. This statement represents a test. It can result in the following: "If the condition is true, 
then executes the instructions contained in the code block."

The condition is always placed in parentheses after theif. */

// ----------- Conditions

/* A condition is an expression that evaluates whether something is true or false. When the value of a 
condition is true, we say that this condition is satisfied.

We have already studied numbers and strings, two types of data in JavaScript. Booleans are another type. 
This type has two possible values: true and false.

Any expression producing a Boolean value (either true or false) can be used as a condition in anif 
statement. If the value of this expression is true, the code block associated with it is executed.

Boolean expressions can be created using the comparison operators shown in the following table. */

/* 
    Operator : Meaning
    === : Equal to
    !== : Not equal to
    <   : Less than
    <=  : Less than or equal to
    >   : Greater than
    >=  : Greater or equal to 
*/

var number = Number(prompt("Enter a number!"));
if (number >= 0) {
    console.log(number + " is positive.");
};

// ----------- Alternative conditions

/* You'll often want to have your code execute one way when something's true and 
another way when something's false. */

// -- Else

//Let's enrich our sample with different messages depending if the number's positive or not.

var number = Number(prompt("Enter a number:"));
if (number > 0) {
    console.log(number + " is positive");
}
else {
    console.log(number + " is negative or zero");
};

/* Test this code with a positive number, negative number, and zero, while watching the 
result in the console. The code executes differently depending if the statement (number > 0) 
is true or false. */

// -- Nesting conditions

/* You can go next level and display a specific message if the entered number is zero. 
Use  else if for a second conditional. See this example, which has a positive test case, 
negative test case, and a last resort of the number being zero: */

var number = Number(prompt("Enter a number:"));
if (number > 0) {
    console.log(number + " is positive");
} else if (number < 0) {
    console.log(number + " is negative");
} else { 
    console.log(number + " is zero");
};

// ----------- Add additional logic

// -- "And" operator

/* Suppose you want to check if a number is between 0 and 100. You're essentially checking if 
it's "greater than or equal to 0" and "less than or equal to 100."

Here's how you'd translate that same check into JS. */

if ((number >= 0) && (number <= 100)) {
    console.log(number + " is between 0 and 100, both included");
};

/* The && operator (and) can apply to both types of boolean values.  
true will only be the result of the statement if both conditions are true. */

console.log(true && true); // true
console.log(true && false); // false
console.log(false && true); // false
console.log(false && false); // false

// -- "Or" operator

/* Now imagine you want to check that a number is outside the range of 0 and 100. 
To meet this requirement, the number should be less than 0 or greater than 100.

Here it is, translated into JavaScript: */

if ((number < 0) || (number > 100)) {
    console.log(number + "is not in between 0 and 100");
};

/* The || operator ("or") makes statements true if at least one of the statements is true. 
For example: */

console.log(true || true); // true
console.log(true || false); // true
console.log(false || true); // true
console.log(false || false); // false

// -- "Not" operator

/* There's another operator for when you know what you don't want: the not operator! 
You'll use a ! for this. */

if (!(number > 100)) {
    console.log(number + " is less than or equal to 100");
};

/* Therefore: */

console.log(!true); // false
console.log(!false); // true

// -- Multiple Choices

/* Let's write some code that helps people decide what to wear based on the weather using if/else. */

var weather = prompt("What's the weather like?");
if (weather === "sunny") {
    console.log("T-shirt time!");
} else if (weather === "windy") {
    console.log("Windbreaker life.");
} else if (weather === "rainy") {
    console.log("Bring that umbrella!");
} else if (weather === "snowy") {
    console.log("Just stay inside!");
} else {
    console.log("Not a valid weather type");
};

/* When a program should trigger a block from several operations depending on the value of 
an expression, you can write it using the JavaScript statement switch to do the same thing. */

var weather = prompt("What's the weather like?");
switch (weather) {
case "sunny":
    console.log("T-shirt time!");
    break;
case "windy":
    console.log("Windbreaker life.");
    break;
case "rainy":
    console.log("Bring that umbrella!");
    break;
case "snowy":
    console.log("Just stay inside!");
    break;
default:
    console.log("Not a valid weather type");
};

/* The word "switch" kicks off the execution of one code block among many. 
Only the code block that matches the relevant situation will be executed. */

//ELI5

switch (expression) {
    case value1:
        // code when the expression matches value1
        break;
    case value2:
        // code when the expression matches value2
        break;
    ...
    default:
        // code for when neither case matches
    };

/* You can set as many cases as you want! The word default, which is put at the end of switch, 
is optional. It can let you handle errors or unexpected values. */

// break; in each block is important so you get out of the switch statement!