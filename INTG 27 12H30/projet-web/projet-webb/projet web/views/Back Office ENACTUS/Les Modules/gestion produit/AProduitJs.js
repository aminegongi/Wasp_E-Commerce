function RefVerif(s1,s2) {
    var data=document.getElementById(s1) ;
    var datar = data.value.substring(0,1);
    var datanr =data.value.substring(1,data.value.length);

    if ("#" != datar || data.value.length<3 || datanr.indexOf("#")!= -1 ) {
        data.style.border = "1px solid #FF0000";
        document.getElementById(s2).innerHTML="*Referance invalide";
    }
    else {data.style.border = "";
        document.getElementById(s2).innerHTML="";
    }

}
function CheckInfoLettre(s1,s2)
{   var data=document.getElementById(s1) ;
    var regex = /^[a-zA-Z ]{3,30}$/;
    if(!regex.test(data.value) || data.value== "")
    {
        data.style.border = "1px solid #FF0000";
        document.getElementById(s2).innerHTML="*Nom invalide";
        return false;
    }
    else
    {
        data.style.border = "";
        document.getElementById(s2).innerHTML="";
        return true;
    }
}

function FloatVerif(s1,s2) {

    var data = document.getElementById(s1);
    //data.value="0";
    var regex = /^-?\d*(\.\d+)?$/;
    // var datan = data.value.substring(data.value.indexOf("."),data.value.length) ;

    if (!regex.test(data.value) || data.value == "" ) {
        data.style.border = "1px solid #FF0000";
        document.getElementById(s2).innerHTML = "*Prix invalide";
        return false;
    } else {
        data.style.border = "";
        document.getElementById(s2).innerHTML = "";
        return true;
    }

}
function CalculTax(s1,s2,s3) {

    var data1=document.getElementById(s2).value;
    var data2=document.getElementById(s3).value;

    document.getElementById(s1).value=((data2*data1*0.01)+Number(data1));
}
function VerifQuantite(s1,s2) {
    var data=document.getElementById(s1);
    var regex =/^[1-9][0-9]?$|^100$/ ;

    if (!regex.test(data.value) || data.value == "" ) {
        data.style.border = "1px solid #FF0000";
        document.getElementById(s2).innerHTML = "*Verifier la quantité";
        return false;
    } else {
        data.style.border = "";
        document.getElementById(s2).innerHTML = "";
        return true;
    }
}
function TodayDate(s1) {
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth() + 1; //January is 0!
    var yyyy = today.getFullYear();

    if (dd < 10) {
        dd = '0' + dd;
    }
    if (mm < 10) {
        mm = '0' + mm;
    }
    today = mm + '/' + dd + '/' + yyyy;
    document.getElementById(s1).value=today;
}

