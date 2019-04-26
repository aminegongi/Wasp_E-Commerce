///Ajouter image///////

var loadFile = function GetImage(event)
{
var output =document.getElementById("image");
output.src=URL.createObjectURL(event.target.files[0]);
}


