var PremierTrimestre = [{
    nom: "LIEGEARD",
    prenom: "Hugo",
    moyenne: {
      francais: 4,
      math: 8,
      physique: 18
    }
  }, {
    nom: "MANAS",
    prenom: "Tanguy",
    moyenne: {
      francais: 6,
      math: 15,
      physique: 9,
      anglais: 15.5
    }
  }, {
    nom: "ARAUJO",
    prenom: "Thiago",
    moyenne: {
      francais: 10,
      math: 15,
      physique: 16
    }
  }];
  
  //document.write(PremierTrimestre[1].nom);
  
  var Jesus = {
    nom: "CHRIST",
    prenom: "Jesus",
    moyenne: {
      francais: 15,
      math: 12,
      physique: 10
    }
  };
  
  PremierTrimestre.push(Jesus);
  /*document.write(PremierTrimestre[3].nom); */
  
  
  for (i = 0; i < PremierTrimestre.length; i++) {
    document.write(PremierTrimestre[i].nom + " " +
      PremierTrimestre[i].prenom + " " +
      PremierTrimestre[i].moyenne.francais + " " +
      PremierTrimestre[i].moyenne.math + " " +
      PremierTrimestre[i].moyenne.physique + " "
    );
  }
  
  var total = 0;
  for(var i = 0; i < PremierTrimestre.length; i++){
      total += PremierTrimestre[i].moyenne.math;
  }
  
  var moyenne = total / PremierTrimestre.length;

  document.write(moyenne);
  
  
  
var moyenneGenerale = 0;

for (var i = 0; i < PremierTrimestre.length; i++) {
    var moyenne = 0;
    for (var elm in PremierTrimestre[i].moyenne) {
      moyenneEleve += Number(PremierTrimestre[i].moyenne[e]);
    }
    moyenneGenerale += moyenne Eleve / Object.keys(PremierTrimestre[i].moyenne).length;
    
}

moyenneGenerale / PremierTrimestre.length;
    
/* 
Object.keys()
Renvoie un tableau qui contient les noms de toutes les propriétés propres d'un objet qui sont énumérables 
(les propriétés propres sont celles qui ne sont pas héritées). 

https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Object
*/



$('#button').click(function(){
  $('.formulaire').fadeIn(1000);
  })
  
  $('#envoyer').click(function(){
  $('.formulaire').fadeOut(1000);
  })