// --------------------- Create your first objects ---------------------


/* Have you heard about object oriented programming, inheritance, or classes? Whether the answer's yes or no, 
learn more about them in this chapter!

At this point, we'll introduce a tool called CodePen that allows you to quickly create code snippets and see their previews live. 
Getting used to the file-based workflow seen earlier is imperative, but since by now you've got the hang of it, we can try something new!

Create a new pen for each code snippet you want to work with, and follow along with my examples as they appear later in the course. */


// -------- Introduction


// ---- What's an object?

/* Think about objects in the non-programming sense, like a pen. A pen can have different ink colors, be manufactured by different people, 
have a different tip, and many other properties. 

Similarly, an object in programming is an entity that has properties. Each property defines a characteristic of the object. 
A property can be information associated with the object (the color of the pen) or action (the pen's ability to write). */


// ---- What does this have to do with code?

/* Object-oriented programming (OOP for short) is a way to write programs using objects. When using OOP, you write, create, 
and modify objects, and the objects make up your program.

OOP changes the way a program is written and organized. So far, you've been writing function-based code, sometimes called the procedural programming. 
Now let's discover how to write object-oriented code. */


// -------- JavaScript and objects

/* Like many other languages, JavaScript involves programming objects, so we can say it's an object-oriented language. 
It provides a number of predefined objects while also letting you create your own. */

// ---- Creating an object

/* Here is the JavaScript representation of a blue Bic ballpoint pen. */

var pen = {
    type: "ballpoint",
    color: "blue",
    brand: "Bic"
};

//Create a new object in JavaScript by setting its properties within a pair of curly braces:  {...};.

/* The above code defines a variable named pen whose value is an object: you can therefore say pen is an object. 
This object has three properties:type,color andbrand. Each property has a name and a value and is separated by a comma, (except the last one).*/

// -------- Getting a value

/* After creating the object, you can access the value of its properties using dot notation such as myObject.myProperty .  */

console.log(pen.type); // will be "ballpoint"
console.log(pen.color); // will be "blue"
console.log(pen.brand); // will be "Bic"

/* Add the above content, including the creation of the pen variable, to your JavaScript 
file if you're still following along on your computer, or check it out on CodePen */

/* Once you know how to access properties, you can start combining them with other elements, like strings as part of a sentence. */

var pen = {
    type: "ballpoint",
    color: "blue",
    brand: "Bic"
};

console.log("My pen is a " + pen.color + " " + pen.brand + " " + pen.type + " pen.");

// -------- Modifying objects 

/* Once an object is created, you can change the values of its properties with the syntaxmyObject.myProperty = newValue. */

var pen = {
    type: "ballpoint",
    color: "blue",
    brand: "Bic"
};

console.log("The pen's a " + pen.color + " " + pen.brand + " " + pen.type + " pen.");

pen.color = "red"; // modify the pen color property

console.log("The pen's a " + pen.color + " " + pen.brand + " " + pen.type + " pen.");

/* JavaScript even offers the ability to dynamically add new properties to an already created object. */

var pen = {
    type: "ballpoint",
    color: "blue",
    brand: "Bic"
};

console.log("My pen is a " + pen.color + " " + pen.brand + " " + pen.type + " pen.");

pen.price = "2.5"; // set the pen price property

console.log("My pen costs " + pen.price);

// ------- Example: cake

/* Pens are fine, but cake is cooler. Let's create a cake in JavaScript that has several properties:

flavor, like vanilla, chocolate, etc.
price in dollars
layers (1, 2, 3...10?!) */

// ------- Creating a cake

/* Here's my first cake created in JavaScript: */

var cake = {
    flavor: "strawberry",
    layers: 2,
    price: "$10",
    occasion: "birthday",
};

//You can assign numbers, strings, and even other objects to properties! 

/* However, I'm working with a customer who wants a much more aggressive birthday cake: */

var cake = {
    flavor: "strawberry",
    levels: 2,
    price: "$10",
    occasion: "birthday",
};

console.log("The " + cake.occasion + " cake has a " + cake.flavor + " flavor, " + cake.levels + " layers, and costs " + cake.price + ".");

// The cake is actually for a wedding!
cake.occasion = "wedding";

// Its number of layers and price both go up.
cake.levels = cake.levels + 8;
cake.price = "$50";

console.log("The " + cake.occasion + " cake has a " + cake.flavor + " flavor, " + cake.levels + " layers, and costs " + cake.price + ".");

/* Add this contents to your JavaScript file and open it in your browser to see the result in the JavaScript console. */

// -------- Methods on objects

/* In the above code, we had to write lengthy console.log statements each time to show the cake description. There's a cleaner way to accomplish this.*/

// ------- Adding a method to an object

/* Observe the following example. */

// Describe a cake
function describe(cake) {
    var description = "The " + cake.occasion + " cake has a " + cake.flavor + " flavor, " + cake.levels + " layers, and costs " + cake.price + ".";
    return description;
}

console.log(describe(cake));

/* The functiondescribe()  takes an object as a parameter. We pass it the cake, and it accesses that object's properties and prints them out in that sentence.

Now for an alternative approach: creating a describeproperty that houses a method. */

var cake = {
    flavor: "strawberry",
    levels: 2,
    price: "$10",
    occasion: "birthday",

    // Describe the cake
    describe: function () {
        var description = "The " + this.occasion + " cake has a " + this.flavor + " flavor, " + this.levels + " layers, and costs " + this.price + ".";
        return description;
    }
};

console.log(cake.describe());

// The cake is actually for a wedding!
cake.occasion = "wedding";

// Its number of layers and price both go up.
cake.levels = cake.levels + 8;
cake.price = "$50";

console.log(cake.describe());

/* Now our object has a new property available to it, describe. The value of this property is a function that returns a text description of the cake.

A property whose value is a function is called a method.  */

// Remember the parentheses, even if empty, when calling a method!

// ------- The keyword this 

/* Now look at the body of the  describe()  method on ourcakeobject. You see a new word: this. 
This is automatically set by JavaScript inside a method and represents the object on which the method was called. */