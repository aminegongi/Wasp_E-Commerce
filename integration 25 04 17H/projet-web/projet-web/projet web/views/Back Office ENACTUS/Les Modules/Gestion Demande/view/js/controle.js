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

  var regex = /^[a-z A-Z]{0,200}$/;
    if(!regex.test(e.value))
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

function CheckInfoReponse(e)
{

  var regex = /^[a-zA-Z0-9., -]/;
    if(!regex.test(e.value) || e.value.length>1000 || e.value.length<200)
    {
      e.style.borderColor = "red" ;
      document.getElementById("msg_err_reponse").innerHTML = "champ invalid.";
        return false;
    }
    else
    {
    e.style.borderColor = "" ;
    document.getElementById("msg_err_reponse").innerHTML = "";
      return true;
    }
}

