// le controle saisie pour les formulaire du participant
function verifpart(){
    if (document.getElementById('cin').value.length != 8) {
        alert("le n° CIN doit etre 8 chiffres");
        return false;
    }
    if (isNaN(document.getElementById('cin').value)){
        alert("le n° CIN doit etre un entier")
        return false;
    }
    if (document.getElementById('num_tel').value.length != 8){
        alert("le numero de telephone doit etre 8 chiffres");
        return false;

    }
    if (isNaN(document.getElementById('num_tel').value)){
        alert("le numero de telephone doit etre un nombre");
        return false;

    }
 }
 // le controle saisie pour les formulaire d'evenment
function verifevent(){
     if (document.getElementById('datefn').value < document.getElementById('datedb').value){
         alert("il faut mettre un date fin supperiuer a date debut");
         return false;
     }
  }