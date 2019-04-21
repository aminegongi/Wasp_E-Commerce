function populate(typeselected) {

		var typesel=document.getElementById(typeselected);
		
		if(typesel.value=="societe")
		{	
			document.getElementById("pers_phy_form").style.display="none";
			document.getElementById("societe_form").style.display="block";
		}
		else if(typesel.value=="persphy")
		{	
			document.getElementById("societe_form").style.display="none";
			document.getElementById("pers_phy_form").style.display="block";
		}
		else if(typesel.value=="null")
		{
			document.getElementById("societe_form").style.display="none";
			document.getElementById("pers_phy_form").style.display="none";
		}
	}
function initialiser_forms(){
	window.addEventListener("load",function(){
    
			document.getElementById("pers_phy_form").style.display="none";
			document.getElementById("societe_form").style.display="none";
},false);
}

function City(s1,s2)
{
	var s1 = document.getElementById(s1);
	var s2 = document.getElementById(s2);	
	s2.innerHTML = "";
	if(s1.value == "Tunisie"){
		var optionArray = ["tunis|Tunis","ariana|Ariana","beja|Beja","ben arous|Ben Arous","bizerte|Bizerte","el kef|El Kef","gabes|Gabes","gafsa|Gafsa","jendouba|Jendouba","kairouan|Kairouan","kasserine|Kasserine","kebili|Kebili","mahdia|Mahdia","medenine|Medenine","monastir|Monastir","nabeul|Nabeul","sfax|Sfax","sidi bou zid|Sidi Bou Zid","siliana|Siliana","sousse|Sousse","tataouine|Tataouine","touzeur|Tozeur","zaghouen|Zaghouan"];
	} 
	else if(s1.value == "Afghanistan"){
		var optionArray = ["|","avenger|Avenger","challenger|Challenger","charger|Charger"];
	} 
	else if(s1.value == "Afrique_Centrale"){
		var optionArray = ["|","avenger|Avenger","challenger|Challenger","charger|Charger"];
	}
	for(var option in optionArray){
		var pair = optionArray[option].split("|");
		var newOption = document.createElement("option");
		newOption.value = pair[0];
		newOption.innerHTML = pair[1];
		s2.options.add(newOption);
	}
}

function CheckInfoLettre(idd)
{	e=document.getElementById(idd);
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



