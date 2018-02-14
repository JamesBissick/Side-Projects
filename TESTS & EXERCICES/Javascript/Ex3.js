// Le but est d'imprimer le mot Welcome de façon 'descendante' puis 'montante'.

/*
Welcome
welcom
welco
welc
wel
we
w
we
wel
welc
welco
welcom
welcome */


var word = "Welcome";
var wordLength = word.length;
function sortWord(wordLength) {

    while(i = wordLength, i > 0, i--) {
        if(wordLength === 1){
            console.log(word);
        } 
        else {
            console.log((word.length-1));
        }
    }
        
}