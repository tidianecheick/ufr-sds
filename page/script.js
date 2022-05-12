var heuresDiv = document.querySelector('.heures');
var dateDiv = document.querySelector('.date');


var affichageHeure = function () {
    var today, annee, listemois, mois, listejours, joursNUmero, jourNom, heures,
        minutes, secondes, deuxChiffres;

    today = new Date();
    annee = today.getFullYear();
    listemois = ["janvier", "fevrier", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre"
        , "decembre"];
    mois = listemois[today.getMonth()];
    joursNUmero = today.getDate();



    listejours = ["dimanche", "lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi"];
    jourNom = listejours[today.getDay()];
    deuxChiffres = function (element) {
        if (element < 10) {
            return element = "0" + element;
           
        } 
        else {
            return element;
    }
}



heures = deuxChiffres(today.getHours());

minutes = deuxChiffres(today.getMinutes());

secondes = deuxChiffres(today.getSeconds());

heuresDiv.textContent = heures + ":" + minutes + ":" + secondes;
dateDiv.textContent = jourNom + "," + joursNUmero + " " + mois + " " + annee;


setTimeout(affichageHeure, 1000);
}

affichageHeure();