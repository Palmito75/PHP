  
function Exercice1() {


    var age = 0 
    var jeune = 0
    var vieux = 0 
    var middle = 0
    
    
    
    while (age < 100) {
    
    age = window.prompt("Entrez un âge");
    
    if (age =="") {
    
    continue;
    
    } else if (age < 20 ) { 
         
        jeune = jeune + 1  
    } else if (age >= 20 && age <= 40) {
    middle = middle + 1
    } else if (age > 40) {
    vieux = vieux + 1 
    
    }}
        
    alert("Le nombre de jeune est de : "+ jeune)
    alert("Le nombre d'âge moyen est de : "+ middle)
    alert("Le nombre de vieux est de : "+ vieux)
    
    }
    /***************************************************** */
        /***************************************************** */
         /****************************************************** */
    
    
    function TableMultiplication (x) {
    var i = 0
    var x = 0 
    var result = x * i
    var x = window.prompt("Veuillez nommer un chiffre dont vous voulez voir la table de multiplications :")
    for (i = 1; i <= 10; i++) {
    
        if (x == "") {alert("Veuillez sélectionner un nombre !");break}
    
    result = x * i
    alert(x +"x"+ i + "="+ result+"\r")     /* /r permettant de tout afficher à en sautant des lignes */
    
    
    
    }}
     /****************************************************** */
     /****************************************************** */
     /****************************************************** */
    
     /****************************************************** */
    function RechercheMot () {
 
        var prenom = ["Audrey", "Aurélien", "Flavien", "Jérémy", "Laurent", "Melik", "Nouara", "Salem", "Samuel", "Stéphane"];
       alert(prenom)
       console.log(prenom)
       var saisie = window.prompt("Saisissez un prenom");
           if ( saisie === "Audrey" || "Aurélien" || "Flavien" || "Jérémy"|| "Laurent" || "Melik" || "Nouara" || "Salem"|| "Samuel"|| "Stéphane") {
            prenom.filter((result, index) => {
                if (result === saisie) {
                    delete prenom[index];
                    prenom.push("");
                } 
                
                
     
            }); 
    
            console.log(prenom)
            alert(prenom)
        }
    } 
     /****************************************************** */
     /****************************************************** */
     /****************************************************** */
    function TotalCommande () {
    
    
        var QuantitéCommandé;
        var PORT
        var PORTMIN
       
         PU = window.prompt("Veuille saisir le prix unitaire du produit :")
         QuantitéCommandé = window.prompt("Veuillez saisir la quantité voulu :")
        
        var TOT = PU * QuantitéCommandé;  
        
        var REM5 = TOT*0.05; // pour le calcul de la remise de  5 %
        var REM10 = TOT*0.10; //  pour le calcul de la remise de  10 %
        var PORT = TOT * 0.02;
        var PORTREM = (TOT - REM10) * 0.02
        var PORTMIN = (TOT * 0.02 > 6) ? TOT * 0.02 : 6; 
     if (TOT >= 100 && TOT <= 200) {PORT = 6; PAP = TOT - REM5 + PORT} 
     else if (TOT - REM10 > 500 ) {PAP = TOT - REM10}
     else if (TOT > 200 && TOT < 500) {PAP = TOT - REM10 + PORT}
     else if (TOT > 500) {PAP = (TOT - REM10) + PORTREM; PAP = PAP.toFixed(2)}
     else { PAP = TOT + 6}
        
        
        alert("Le prix à payer est de : " + PAP + " euros");
     

  } 

 /************************************************************************************** */

document.getElementById("inscription").addEventListener("submit", function (e) {


        
var erreurNom 
var erreurPrenom
var erreurCP
var erreurMail
var erreurDDN
var erreurQuestion
var erreurSexe
var erreurCase
var Sexe1
var Sexe2
var ChoixSujet
var erreurSujet

 
erreurNom = ""; document.getElementById("erreurNom").innerHTML=erreurNom;
erreurPrenom = ""; document.getElementById("erreurPrenom").innerHTML=erreurPrenom;
erreurCP = ""; document.getElementById("erreurCP").innerHTML=erreurCP;
erreurMail = ""; document.getElementById("erreurMail").innerHTML=erreurMail;
erreurDDN = ""; document.getElementById("erreurDate").innerHTML=erreurDDN;
erreurQuestion = ""; document.getElementById("erreurQuestion").innerHTML=erreurQuestion;
erreurSexe = ""; document.getElementById("erreurSexe").innerHTML=erreurSexe;
erreurCase = ""; document.getElementById("erreurCase").innerHTML=erreurCase;
erreurSujet = ""; document.getElementById("erreurChoix").innerHTML=erreurSujet;
/***************************************************** */
         /* VERIFICATION NOM *\
/***************************************************** */
var nom = document.getElementById("nom").value
console.log(nom)
var filtre1 = new RegExp("^[A-Za-z]+$")
var resultatFiltre1 = filtre1.test(nom);
console.log(resultatFiltre1)

if (nom == "") {
    erreurNom = "Veuillez entrez votre nom !"
} else if (resultatFiltre1 == false) {
    erreurNom ="Votre nom ne doit pas comporter de chiffres !"
} else {
    console.log(resultatFiltre1)
}

if (erreurNom) {
    e.preventDefault();
    document.getElementById("erreurNom").innerHTML = erreurNom;
} 
/***************************************************** */
         /* VERIFICATION PRENOM *\
/***************************************************** */
var prenom= document.getElementById("Prénom").value
console.log(prenom)
var filtre2 = new RegExp("^[A-Za-z]+$")
var resultatFiltre2 = filtre2.test(prenom);
console.log(resultatFiltre2)

if (prenom == "") {
    erreurPrenom = "Veuillez entrez votre prénom !"
} else if (resultatFiltre2 == false) {
    erreurPrenom ="Votre prénom ne doit pas comporter de chiffres !"
} else {
    console.log(resultatFiltre2)
}


if (erreurPrenom) {
    e.preventDefault();
    document.getElementById("erreurPrenom").innerHTML = erreurPrenom;
} 
/***************************************************** */
         /* VERIFICATION CODE POSTAL *\
/***************************************************** */
var codePostal = document.getElementById("CP").value
console.log(codePostal)

var taille = codePostal.length

if (codePostal == "") {
    erreurCP = "* Veuillez entrez votre code postal !"
} else if (taille != 5) {
    erreurCP ="Votre code postal doit comporter 5 chiffres !"
} else {
    console.log(codePostal)
}

if (erreurCP) {
    e.preventDefault();
    document.getElementById("erreurCP").innerHTML =  erreurCP;
} 
/***************************************************** */
         /* VERIFICATION EMAIL *\
/***************************************************** */

var eMail = document.getElementById("eMail").value

var filtre4 = new RegExp("^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$")
var resultatFiltre3 = filtre4.test(nom);


if (eMail == "") {
    erreurMail = "* Veuillez entrez votre email !"
} else if (resultatFiltre3 == false) {
    erreurMail ="Votre nom ne doit pas comporter de chiffres !"
} else {
    console.log(resultatFiltre3)
}

if (erreurMail) {
    e.preventDefault();
    document.getElementById("erreurMail").innerHTML =  erreurMail;
} 

/***************************************************** */
         /* VERIFICATION DATE DE NAISSANCE *\
/***************************************************** */

var datedeNaissance = document.getElementById("DateDeNaissance").value
console.log(datedeNaissance)

if (datedeNaissance == "") {
    erreurDDN = "* Veuillez entrez votre date de naissance !"

} else {
    console.log(datedeNaissance)
}

if (erreurDDN) {
    e.preventDefault();
    document.getElementById("erreurDate").innerHTML =  erreurDDN;
} 
/***************************************************** */
         /* VERIFICATION QUESTION *\
/***************************************************** */

var VotreQuestion = document.getElementById("Question").value
console.log(VotreQuestion)


if (VotreQuestion == "") {
    erreurQuestion = "* Veuillez entrez votre question !"

} else {
    console.log(VotreQuestion)
}

if (erreurQuestion) {
    e.preventDefault();
    document.getElementById("erreurQuestion").innerHTML =  erreurQuestion;
} 


/***************************************************** */
         /* VERIFICATION SEXE *\
/***************************************************** */

var Sexe1 = document.getElementById("gender").checked
var Sexe2 = document.getElementById("gender1").checked



if (Sexe1 == false && Sexe2 == false) {
    erreurSexe = "* Veuillez sélectionner votre sexe !"
    console.log("+++"+Sexe1)
    console.log("---"+Sexe2)
} else {
    console.log(Sexe1)
    console.log(Sexe2)
}

if (erreurSexe) {
    e.preventDefault();
    document.getElementById("erreurSexe").innerHTML =  erreurSexe;
} 


/***************************************************** */
         /* VERIFICATION CASE TRAITEMENT *\
/***************************************************** */

var CaseCocher = document.getElementById("Case").checked
console.log(CaseCocher)


if (CaseCocher == false) {
    erreurCase = "* Veuillez accepter le traitement informatique !"

} else {
    console.log(CaseCocher)
}

if (erreurCase) {
    e.preventDefault();
    document.getElementById("erreurCase").innerHTML =  erreurCase;
} 

/***************************************************** */
         /* VERIFICATION CHOIX DES SUJETS *\
/***************************************************** */

var ChoixSujet = document.getElementById("ChoixSujet").value
console.log("le choix du sujet est "+ChoixSujet)

 
if (ChoixSujet == "Veuillez sélectionner un sujet") {
    erreurSujet = "* Veuillez sélectionner un sujet !"

} else {
    console.log(ChoixSujet)
}

if (erreurSujet) {
    e.preventDefault();

    document.getElementById("erreurChoix").innerHTML =  erreurSujet;
} 


})