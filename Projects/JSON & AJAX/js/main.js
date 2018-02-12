var ourRequest = new XMLHttpRequest();

// Tell our variable to do receive data ('GET', url)
ourRequest.open('GET', 'https://learnwebcode.github.io/json-example/animals-1.json');

ourRequest.onload = function() {
    // Let's create a variable, by deafault read as simple text, we tell it to read as JSON
    var ourData = JSON.parse(ourRequest.responseText);
    // Let get the first object of the data printed out
    console.log(ourData[0]);
};

ourRequest.send();

// Congratulation, you just wrote some AJAX!
/* 
A: Asynchronous
J: Javascript
A: And
X: XML (XML was replaced by JSON as it became a more popular format)
*/