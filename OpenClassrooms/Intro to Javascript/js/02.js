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