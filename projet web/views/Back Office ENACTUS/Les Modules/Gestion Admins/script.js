///Ajouter image///////

var loadFile = function GetImage(event)
{
var output =document.getElementById("image");
output.src=URL.createObjectURL(event.target.files[0]);
}



//////////Verifier/////////


function surligne(champ, erreur)
{
   if(erreur)
   {
      champ.style.backgroundColor = "#fba";
   }
   else
      champ.style.backgroundColor = "#98FB98";
}
/////USERNAME/////////////
function verifPseudo(champ)
{
   if(champ.value.length < 2 || champ.value.length > 25)
   {
      surligne(champ, true);
      document.getElementById("card-user").innerHTML = "????????";
      return false;
   }
   else
   {
      surligne(champ, false);
      document.getElementById("card-user").innerHTML = champ.value;
      return true;
   }
}

///////EMAIL////////
function verifMail(champ)
{
   var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
   if(!regex.test(champ.value))
   {
      surligne(champ, true);
      document.getElementById("card-mail").innerHTML = "????????";
      return false;
   }
   else
   {
      surligne(champ, false);
      document.getElementById("card-mail").innerHTML = champ.value;
      return true;
   }
}

///////PASSWORD////////
function verifPass(champ)
{
    if(champ.value.length < 7 || champ.value.length > 25)
    {
       surligne(champ, true);
       return false;
    }
    else
    {
       surligne(champ, false);
       return true;
    }
}

///////NUMBER////////
function verifNumb(champ)
{
    if(champ.value.length < 8 || champ.value.length > 8)
    {
       surligne(champ, true);
       document.getElementById("card-number").innerHTML = "????????";
       return false;
    }
    else
    {
       surligne(champ, false);
       document.getElementById("card-number").innerHTML = champ.value;
       return true;
    }
}

////////Location//////////
function verifLocation(champ)
{
    if(champ.value == "")
    {
       surligne(champ, true);
       document.getElementById("card-adress").innerHTML = "????????";
       return false;
    }
    else
    {
       surligne(champ, false);
       document.getElementById("card-adress").innerHTML = champ.options[champ.selectedIndex].text;
       return true;
    }
}

////////Location//////////
function verifProjet(champ)
{
    if(champ.value == "")
    {
       surligne(champ, true);
       document.getElementById("card-projet").innerHTML = "????????";
       return false;
    }
    else
    {
       surligne(champ, false);
       document.getElementById("card-projet").innerHTML = champ.options[champ.selectedIndex].text;
       return true;
    }
}

////////Ajouter/////////////
function verifForm(f)
{
   var pseudoOk = verifPseudo(f.username);
   var mailOk = verifMail(f.email);
   var passOk = verifPass(f.password);
   var phoneOK = verifNumb (f.phone);
   var locationOK = verifLocation(f.select_Project);
   if(pseudoOk && mailOk && passOk && phoneOK && locationOK )  
   {
   alert("pls");
      return true;
   }
   else
   {
      alert("Veuillez remplir correctement tous les champs");
      return false;
   }
}

////////////Modifier//////////////////////


function Modifier(ID,i,nbCol)
{
   var admin = document.getElementById(ID);   
   ///////// html classes ///////////
   var serial = admin.getElementsByClassName('ID')[0];
   var name = admin.getElementsByClassName('name')[0];
   var avatar = admin.getElementsByClassName('avatar')[0];
   var projet =  admin.getElementsByClassName('projet')[0];
   var mail = admin.getElementsByClassName('mail')[0];
   var numTel =  admin.getElementsByClassName('NumTel')[0];
   var button = admin.getElementsByClassName('Bmodifier')[0];
   /////// input classes ///////////
   var serialInput=admin.getElementsByClassName('IDInput')[0];
   var nameInput=admin.getElementsByClassName('nameInput')[0];
   var projetInput=admin.getElementsByClassName('selectInput')[0];
   var mailInput = admin.getElementsByClassName('mailInput')[0];
   var numTelInput =  admin.getElementsByClassName('NumTelInput')[0];
   var avatarInput =admin.getElementsByClassName('avatarInput')[0];
   if (i == 0)
   {
      serial.innerHTML  =  "<input type=\"text\" style=\"width:70px;\" name=\"IDI\" class=\"IDInput\" value=\""+serial.innerText+"\"/>" ;
      numTel.innerHTML  =  "<input type=\"text\" style=\"width:70px;\" name=\"NTI\" oninput=\"verifNumb(this)\"  class=\"NumTelInput\" value=\""+numTel.innerText+"\"/>" ;
      name.innerHTML  =  "<input type=\"text\" style=\"width:100px;\" name=\"NI\" oninput=\"verifPseudo(this)\" class=\"nameInput\" value=\""+name.innerText+"\"/>" ;
      projet.innerHTML =  " <select name=\"select_Project\" class=\"selectInput\" class=\"form-control\" oninput=\"verifProjet(this)\" ><option value=\"\" label=\"default\"></option><option value=\"0\">Pure life</option><option value=\"1\">Acorn +</option> <option value=\"2\">JareDrops</option> <option value=\"3\">E-scope</option> </select>";
      avatar.innerHTML = "  <label for=\"file\" name=\"AI\" class=\"label-file\" ><div class=\"round-img\"><img id=\"image\" class=\"rounded-circle \" src=\""+admin.getElementsByClassName('rounded-circle')[0].src+"\"></div></label><input type=\"file\"  class=\"inputfile\" accept=\"image/*\" title=\"Ajouter des photos\" onchange=\"loadFile(event)\" />";
     button.innerHTML = "<input type=\"submit\" class=\"btn btn-outline-primary btn-sm\" name=\"Valider\" value=\"Valider\" onclick=\"Modifier('"+ID+"',1,"+nbCol+")\"/>";
     mail.innerHTML = "<input type=\"text\" style=\"width:130px;\" name=\"MI\" class=\"mailInput\" oninput=\"verifMail(this)\" value=\""+mail.innerText+"\"/>" ;
   
      for (var j=1;j<=nbCol;j++)
      {
         if (ID != 'admin'+j)
         document.getElementById('admin'+j).getElementsByClassName('Bmodifier')[0].innerHTML= "<button type=\"button\"  class=\"ff\" >Modifer</button> ";     
    }
   }
   else if (i == 1)
   {
      numTel.innerHTML  =  "<span>"+numTelInput.value+"</span>" ;
      serial.innerHTML  =  "<span>"+serialInput.value+"</span>" ;
      name.innerHTML  =  "<span>"+nameInput.value+"</span>" ;
      if (projetInput.selectedIndex != 0)
      {
      projet.innerHTML =  "<span>"+projetInput.options[projetInput.selectedIndex].text+"</span>";
      }
      else
      {
         projet.innerHTML =  "<span>Undifined</span>";
      }
      mail.innerHTML = "<span>"+mailInput.value+"</span>" ;
     for (var j=1;j<=nbCol;j++)
     {
        document.getElementById('admin'+j).getElementsByClassName('Bmodifier')[0].innerHTML="<button type=\"button\" onclick=\"Modifier('"+'admin'+j+"',0,"+nbCol+")\" class=\"btn btn-outline-primary btn-sm\" >Modifer</button> ";     
    }
    }
}

/////////////////////Supprimer/////////////////////////


function Supprimer ()
{
   if (confirm("Voulez vous vraiment supprimer ?"))
      {
         alert("done");
         return true;
      }
      else
      {
         alert("Not");
         return false;
      }
}



////////////////////MODAL///////////////////////////
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
   document.getElementById("body").className ="open";
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
   document.getElementById("body").className ="";
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
   document.getElementById("body").className ="";
    modal.style.display = "none";
  }
}