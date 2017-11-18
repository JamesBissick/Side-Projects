// ---------------------------- String recap -----------------------------

/* Let's recap what we already know about strings:

A string represents text.
In JavaScript, a string is defined by placing text within single quotes ('I am a string') or double quotes ("I am a string").
You can use special characters within a string by prefacing them with  \ ( backslash) followed by another character. 
For example, use \ n  to add a linebreak.*/


// ----------- String length

/* To find the length of a string (the number of characters in it), call .length on it. The length will be returned as an integer.*/

console.log("ABC".length); // will be 3
console.log("I am a string".length); // will be 13

/* Add the above contents to your course.jsfile in chapter-6/js . Open up the HTML equivalent in your browser to test it out!

.length can also be applied to string variables, and the results can be stored in variables for later use. */

// Using a period (.) to call a method or property is called dot notation!


// ----------- Converting string case

/* You can convert a string's text to lowercase by calling  .toLowerCase()  on it. 
Alternatively, you can do the same thing with  .toUpperCase() to convert it to uppercase. Both will return a new string. */

var originalWord = "Bora-Bora";
var lowercaseWord = originalWord.toLowerCase();
console.log(lowercaseWord); // will be "bora-bora"
var uppercaseWord = originalWord.toUpperCase();
console.log(uppercaseWord); // will be "BORA-BORA"

/* Notice you also used dot notation to convert the string to upper or lowercase. However, you used parentheses 
after toLowerCase()  ortoUpperCase(). That's because they're methods, not properties! */

// -------- Compare two strings

/* You can compare two strings with the === operator. This returns a boolean value:true if the strings are equal,false  if not. */

var word = "koala";
console.log(word === "koala"); // will be true
console.log(word === "kangaroo"); // will be false

// Beware: string comparison is case sensitive! You'll have to pay attention to your lower and uppercase letters. 


// ----------- Identify a particular character

/* You can think of a string as a set of characters. Each character is identified by a number called an index.

Here's the trick: */

// The first character in a string will be index number 0 -- not 1.

/* Therefore, the following index numbers would apply to the string "dogs":

0: d
1: o
2: g
3: s
The index of the last character in a string would be the string's length minus 1. */

// ---- Browse a character string by character

/* You know how to identify a character by its index. What if you want to access all characters one-by-one? 
You could individually access each letter, as seen above: */

var name = "Sarah"; // 5 characters
console.log(name[0]);
console.log(name[1]);
console.log(name[2]);
console.log(name[3]);
console.log(name[4]);

/* This is impractical if your string contains more than a few characters. What's a better solution for repeated access to characters?

Does the word "repeat" bring to mind a former concept? Loops!

You can write a loop to access each character of a string.foror while ? The choice depends largely on the number of times the loop needs to run. 
If you know in advance, a for loop is a good choice. We know here that the loop will need to run for each character in the string...so for its length! */

for (var i = 0; i < myString.length; i++) {
}

/* The loop counteriranges from 0 (the index of the string's first character) to string length - 1 (index of the last character). 
When the counter value equals the string length, the expressioni < myString.lengthbecomes false, and the loop ends. */


