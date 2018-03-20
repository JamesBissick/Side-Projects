var pageCounter = 1;
var animalContainer = document.getElementById('animal-info');

// Let's select the element we want to control, here, the button
var button = document.getElementById("button");
// Add an EventListener
button.addEventListener("click", function() {
    var ourRequest = new XMLHttpRequest();
    // Tell our variable to do receive data ('GET', url)
    ourRequest.open('GET', 'https://learnwebcode.github.io/json-example/animals-' + pageCounter + '.json');

    ourRequest.onload = function() {
        // Let's create a variable, by default read as simple text, we tell it to read as JSON
        var ourData = JSON.parse(ourRequest.responseText);
        /* 
        // Let get the first object of the data printed out
        console.log(ourData[0]); 
        */
        renderHTML(ourData);

    };
    ourRequest.send();
    pageCounter++;
    if (pageCounter > 3) {
        button.classList.add("hide-me");
    }
});

function renderHTML(data) {
    var htmlString = '';

    for (i = 0; i < data.length; i++) {
        htmlString += "<p>" + data[i].name + " is a " + data[i].species + " that likes to eat ";
        for (let ii = 0; ii < data[i].foods.likes.length; ii++) {
            if(ii == 0) {
                htmlString += data[i].foods.likes[ii];
            } else {
                htmlString += " and " + data[i].foods.likes[ii];
            }
        }
        htmlString += ' and dislikes ';
        for (let ii = 0; ii < data[i].foods.dislikes.length; ii++) {
            if(ii == 0) {
                htmlString += data[i].foods.dislikes[ii];
            } else {
                htmlString += " and " + data[i].foods.dislikes[ii];
            }
        }

        htmlString += '.</p>';
        
    }

    animalContainer.insertAdjacentHTML('beforeend', htmlString)
}
 



// Congratulation, you just wrote some AJAX!
/* 
A: Asynchronous
J: Javascript
A: And
X: XML (XML was replaced by JSON as it became a more popular data format)
*/