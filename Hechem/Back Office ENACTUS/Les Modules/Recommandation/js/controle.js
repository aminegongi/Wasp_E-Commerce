function CheckInfoDesignation(e)
{

	var regex = /^[a-z A-Z]{3,20}$/;
   	if(!regex.test(e.value))
   	{
    	e.style.borderColor = "red" ;
      document.getElementById("msg_err_designation").innerHTML = "champ invalid.";
      	return false;
   	}
   	else
   	{
		e.style.borderColor = "" ;
    	document.getElementById("msg_err_designation").innerHTML = "";
      return true;
      
   	}
}

function CheckInfoDescription(e)
{

  var regex = /^[a-zA-Z0-9., -]/;
    if(!regex.test(e.value) || e.value.length>1000 || e.value.length<200)
    {
      e.style.borderColor = "red" ;
      document.getElementById("msg_err_description").innerHTML = "champ invalid.";
        return false;
    }
    else
    {
    e.style.borderColor = "" ;
    document.getElementById("msg_err_description").innerHTML = "";
      return true;
    }
}


function CheckInfoNomUtilisateur(e)
{
  var regex = /^[a-z A-Z0-9., -]{3,20}$/;
    if(!regex.test(e.value))
    {
      e.style.borderColor = "red" ;
      document.getElementById("msg_err_nom_utilisateur").innerHTML = "nom d'utilisateur invalid.";
        return false;
    }
    else
    {
    e.style.borderColor = "" ;
      document.getElementById("msg_err_nom_utilisateur").innerHTML = "";
      return true;
      
    }
}






function CheckInfoEmail(e)
{
  var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z ]{2,4}$/;
    if(!regex.test(e.value))
    {
    e.style.borderColor = "red" ;
    document.getElementById("msg_err_mail").innerHTML = "adresse mail invalide.";
        return false;
   
    }
    else
    {
    e.style.borderColor = "" ;
    document.getElementById("msg_err_mail").innerHTML = "";
      return true;
    }
}




function CheckInfoReponse(e)
{

  var regex = /^[a-zA-Z0-9., -]/;
    if(!regex.test(e.value) || e.value.length>1000 || e.value.length<200)
    {
    
    e.style.borderColor = "red" ;
    document.getElementById("msg_err_Reponse").innerHTML = "le nombre de caractéres doit etre compris entre 200 et 1000.";
        return false;
    }
    else
    {

    e.style.borderColor = "" ;
    document.getElementById("msg_err_Reponse").innerHTML = "";
      return true;
    }
}


function CheckInfoCible(e)
{
  cibles = ["agriculteurs", "medecins", "Tous"];
  var test = false;
  var regex = /^[a-z A-Z]{3,20}$/;

  for(x in cibles ){
    if(cibles.hasOwnProperty(x)&&cibles[x] == e.value){
      test = true;
      break;
    }
  }
  if(!regex.test(e.value) || test == false)
  {
    e.style.borderColor = "red" ;
    document.getElementById("msg_err_cible").innerHTML = "champ invalid.";
    return false;
    }
    else
    {
      e.style.borderColor = "" ;
      document.getElementById("msg_err_cible").innerHTML = "";
      return true;
      
    }
}



function CheckInfoCategorie(e)
{
 categories = ["agricol", "medical", "Alimentaire"];
 var test = false;
 var regex = /^[a-z A-Z]{3,20}$/;

   for(x in categories ){
    if(categories.hasOwnProperty(x)&&categories[x] == e.value){
      test = true;
      break;
    }
  }

    if(!regex.test(e.value) || test == false)
    {
      e.style.borderColor = "red" ;
      document.getElementById("msg_err_categorie").innerHTML = "catégorie invalide.";
      return false;
    }

    else
    {
      e.style.borderColor = "" ;
      document.getElementById("msg_err_categorie").innerHTML = "";
      return true;
      
    }
}


function CheckInfoNomProduit(e)
{
  var regex = /^[a-z A-Z0-9., -]{3,20}$/;
    if(!regex.test(e.value))
    {
      e.style.borderColor = "red" ;
      document.getElementById("msg_err_nom_produit").innerHTML = "nom de produit invalid.";
        return false;
    }
    else
    {
    e.style.borderColor = "" ;
      document.getElementById("msg_err_nom_produit").innerHTML = "";
      return true;
      
    }
}