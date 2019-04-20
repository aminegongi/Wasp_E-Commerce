
function CheckInfoLettre(e)
{
	var regex = /^[a-zA-Z ]{3,30}$/;
   	if(!regex.test(e.value))
   	{
    	e.style.borderColor = "red" ;
      	return false;
   	}
   	else
   	{
		e.style.borderColor = "" ;
    	return true;
   	}
}

function CheckInfoLettreChiffre(e)
{
	var regex = /^[a-zA-Z0-9., -]{4,}$/ ;
	if(!regex.test(e.value))
	{
	 e.style.borderColor = "red" ;
	   return false;
	}
	else
	{
	 e.style.borderColor = "" ;
	 return true;
	}
}

function CheckInfoSelectList(e,value)
{
	if( e.value== value || e.value == "" )
	{
		e.style.borderColor = "red" ;
      	return false;
	}
	else
	{
		e.style.borderColor = "" ;
    	return true;
	}
}

function CheckInfoEmail(e)
{
	var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z ]{2,4}$/;
   	if(!regex.test(e.value))
   	{
    	e.style.borderColor = "red" ;
      	return false;
   	}
   	else
   	{
		e.style.borderColor = "" ;
    	return true;
	}
}

function OkForm()
{
	var lib= CheckInfoLettre(NewsletterAjoutForm.ILibelle_Newsletter);

	var liste= CheckInfoSelectList(NewsletterAjoutForm.IListeEnvoi_Newsletter);

	var listeEmail= CheckInfoEmail(NewsletterAjoutForm.IListeAutre_Newsletter);

	var objet= CheckInfoLettre(NewsletterAjoutForm.IObjet_Newsletter);

	var message= CheckInfoLettreChiffre(NewsletterAjoutForm.IMessage_Newsletter);

	alert(lib.value);

	if(!lib || !liste || !listeEmail || !objet || !message )
	{
		return false;
	}
	 else
	{
		return true;
	}
}
