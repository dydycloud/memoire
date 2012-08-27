 <!--
    function couleur(obj) {
         obj.style.backgroundColor = "#FFFFFF";
    }
    function checkconnex() {
      var msg = "";
      if (document.connexion.pseudo.value == "") {
        msg += "Veuillez saisir votre pseudo\n";
        document.connexion.pseudo.style.backgroundColor = "#F3C200";
      }
     
      if (document.connexion.mdp.value == "")  {
        msg += "Veuillez saisir votre mdp\n";
        document.connexion.mdp.style.backgroundColor = "#F3C200";
      }
       if (msg == "") return(true);
      else  {
        alert(msg);
        return(false);
      }
    }

    function check() {
      var msg = "";

    if (document.inscription.pseudo.value == "") {
        msg += "Veuillez saisir votre pseudo\n";
        document.inscription.pseudo.style.backgroundColor = "#F3C200";
      }
     
    if (document.inscription.mdp.value == "")  {
        msg += "Veuillez saisir votre mdp\n";
        document.inscription.mdp.style.backgroundColor = "#F3C200";
      }

    if (document.inscription.nom.value == "")  {
        msg += "Veuillez saisir votre nom\n";
        document.inscription.nom.style.backgroundColor = "#F3C200";
      }
     
    if (document.inscription.prenom.value == "") {
        msg += "Veuillez saisir votre prenom\n";
        document.inscription.prenom.style.backgroundColor = "#F3C200";
      }

    if (document.inscription.email.value != "")  {
        indexAroba = document.inscription.email.value.indexOf('@');
        indexPoint = document.inscription.email.value.indexOf('.');
        if ((indexAroba < 0) || (indexPoint < 0))   {
        document.inscription.email.style.backgroundColor = "#F3C200";
          msg += "Email  incorrect\n";
        }
      }
      else{
        document.inscription.email.style.backgroundColor = "#F3C200";
        msg += "Veuillez saisir votre email.\n";
      }
    if (document.inscription.ville.value == "")  {
        msg += "Veuillez saisir votre ville\n";
        document.inscription.ville.style.backgroundColor = "#F3C200";
      }
    if (document.inscription.cp.value == "") {
        msg += "Veuillez saisir votre cp\n";
        document.inscription.cp.style.backgroundColor = "#F3C200";
      }

    if (document.inscription.adresse.value == "")  {
        msg += "Veuillez saisir votre adresse\n";
        document.inscription.adresse.style.backgroundColor = "#F3C200";
      }

      if (msg == "") return(true);
      else  {
        alert(msg);
        return(false);
      }
    }
    //-->