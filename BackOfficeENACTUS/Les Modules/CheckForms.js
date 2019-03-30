
function CheckInfoLettre(e)
{
	var regex = /^[a-zA-Zéàèç ]{2,30}$/m;
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
	var regex = /^[a-zA-Z0-9éàèç., _-]{2,}$/ ;
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

function CheckallTextArea(e)
{
	var regex = /^[a-zA-Z0-9éàèç.,"'&\n _-]{15,}$/ ;
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

function is_url(e)
{
  regexp =  /^(?:(?:https?|ftp):\/\/)?(?:(?!(?:10|127)(?:\.\d{1,3}){3})(?!(?:169\.254|192\.168)(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)(?:\.(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)*(?:\.(?:[a-z\u00a1-\uffff]{2,})))(?::\d{2,5})?(?:\/\S*)?$/;
        if (!regexp.test(e.value))
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

function CheckDateDebut()
{
	var dateD=BanniereAjoutForm.IDateD_Banniere;
	var MyDate = new Date();
	var dateA;
	dateA = (MyDate.getFullYear() +'-'+
				 ('0' + (MyDate.getMonth()+1)).slice(-2)+'-'+
				 ('0' + MyDate.getDate()).slice(-2) );
				
	//alert(dateA);
	//alert(dateD.value);
	if(dateD.value < dateA  )
	{
		dateD.style.borderColor = "red" ;
	 	return false;
	}
	else
	{
		dateD.style.borderColor = "" ;
	 	return true;
	}
}

function CheckDateFin()
{
	var dateD=BanniereAjoutForm.IDateD_Banniere;
	var dateF=BanniereAjoutForm.IDateF_Banniere;

	if(dateF.value <= dateD.value  )
	{
		dateF.style.borderColor = "red" ;
	 	return false;
	}
	else
	{
		dateF.style.borderColor = "" ;
	 	return true;
	}
}



function OkForm()
{
	var nom=CheckInfoLettreChiffre(BanniereAjoutForm.INom_Banniere);
	var dateD=CheckDateDebut();
	var dateF=CheckDateFin();
	var url=is_url(BanniereAjoutForm.IURL_Banniere);
	var desc=CheckallTextArea(BanniereAjoutForm.IDesc_Banniere);
	var img=document.getElementById("IImage_Banniere");
	var espace= document.getElementsByName("CheckBoxEspace[]");
	var espaceS= document.getElementsByName("spanRadio[]");
	var j=0;
	for (i=0;i<espace.length;i++)
	{
		if(espace[i].checked)
		{
			j++;
		}
	}
	if(!img.value)
	{
		img.style.backgroundColor="red";
	}
	else{img.style.backgroundColor="";}

	if(j==0)
	{
		for (i=0;i<espaceS.length;i++)
		{
			espaceS[i].style.color ="red";
		}
	}
	else
	{
		for (i=0;i<espaceS.length;i++)
		{
			espaceS[i].style.color ="";
		}
	}

	if(!img.value || !nom || !dateD || !dateF || !url || !desc || j==0)
	{
		return false;
	}
	return true;
}

function OkFormModif()
{
	var nom=CheckInfoLettreChiffre(BanniereAjoutForm.INom_Banniere);
	var dateD=CheckDateDebut();
	var dateF=CheckDateFin();
	var url=is_url(BanniereAjoutForm.IURL_Banniere);
	var desc=CheckallTextArea(BanniereAjoutForm.IDesc_Banniere);
	if(!nom || !dateD || !dateF || !url || !desc)
	{
		return false;
	}
	return true;
}
