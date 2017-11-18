var a;           /* declaring a variable */
a = 3.14;        /* Assigning a vlaue to this variable */
console.log(a);

var a = 45 / 3; /* declaring a variable and assigning it a value in one line */
console.log(a);

// -- Increment a number variable

/* You can also increase or decrease a value of a number with +=  and ++ . The latter is called 
an increment operator, as it allows incrementation (increase by 1) of a variable's value. */

var b = 0; // b contains 0
b += 1; // b contains 1
b++; // b contains 2
console.log(b); // show 2

// -- Type conversion

/* An expression's evaluation can result in type conversion. These are called implicit conversions, 
as they happen automatically without the programmer's intervention. For example, using the  +  operator 
between a string and a number causes the concatenation of two values into a result: a string. */

var f = 100;
console.log("The f variable contains the value of: " + 100);

/* JavaScript is very tolerant in terms of type conversion. However, sometimes conversion isn't possible. 
If a number fails to convert, you'll get the result NaN  (Not a Number). */

var g = "five" * 2;
console.log(g); // Shows NaN

/* Sometimes you'll wish to convert the value of another type. This is called explicit conversion. 
JavaScript has the Number() and String() commands for this that convert numbers and strings. */

var h = "5";
console.log(h + 1); // Concatenation: shows the string "51"
h = Number("5");
console.log(h + 1); // Addition: show the number 6


// -- User interactions

var name = prompt("Hello, what is your name?");
alert("Hello " + name + ".");