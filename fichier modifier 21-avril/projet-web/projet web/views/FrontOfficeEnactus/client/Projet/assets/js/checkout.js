/* JS Document */

/******************************

[Table of Contents]

1. Vars and Inits
2. Set Header
3. Init Menu
4. Init SVG
5. InitQty


******************************/

$(document).ready(function()
{
	
	"use strict";

	/* 

	1. Vars and Inits

	*/

	var header = $('.header');

	initMenu();
	initSvg();
	initQty();

	setHeader();

	$(window).on('resize', function()
	{
		setHeader();
	});

	$(document).on('scroll', function()
	{
		setHeader();
	});

	/* 

	2. Set Header

	*/

	function setHeader()
	{
		if($(window).scrollTop() > 91)
		{
			header.addClass('scrolled');
		}
		else
		{
			header.removeClass('scrolled');
		}
	}

	/* 

	3. Init Menu

	*/

	function initMenu()
	{
		if($('.menu').length)
		{
			var hamburger = $('.hamburger');
			var header = $('.header');
			var superContainerInner = $('.super_container_inner');
			var superOverlay = $('.super_overlay');
			var headerOverlay = $('.header_overlay');
			var menu = $('.menu');
			var isActive = false;

			hamburger.on('click', function()
			{
				superContainerInner.toggleClass('active');
				menu.toggleClass('active');
				header.toggleClass('active');
				isActive = true;
			});

			superOverlay.on('click', function()
			{
				if(isActive)
				{
					superContainerInner.toggleClass('active');
					menu.toggleClass('active');
					header.toggleClass('active');
					isActive = false;
				}
			});

			headerOverlay.on('click', function()
			{
				if(isActive)
				{
					superContainerInner.toggleClass('active');
					menu.toggleClass('active');
					header.toggleClass('active');
					isActive = false;
				}
			});
		}
	}

	/* 

	4. Init SVG

	*/

	function initSvg()
	{
		if($('img.svg').length)
		{
			jQuery('img.svg').each(function()
			{
				var $img = jQuery(this);
				var imgID = $img.attr('id');
				var imgClass = $img.attr('class');
				var imgURL = $img.attr('src');

				jQuery.get(imgURL, function(data)
				{
					// Get the SVG tag, ignore the rest
					var $svg = jQuery(data).find('svg');

					// Add replaced image's ID to the new SVG
					if(typeof imgID !== 'undefined') {
					$svg = $svg.attr('id', imgID);
					}
					// Add replaced image's classes to the new SVG
					if(typeof imgClass !== 'undefined') {
					$svg = $svg.attr('class', imgClass+' replaced-svg');
					}

					// Remove any invalid XML tags as per http://validator.w3.org
					$svg = $svg.removeAttr('xmlns:a');

					// Replace image with new SVG
					$img.replaceWith($svg);
				}, 'xml');
			});
		}	
	}

	/* 

	5. Init Qty

	*/

	function initQty()
	{
		if($('.product_quantity').length)
		{
			var qtys = $('.product_quantity');

			qtys.each(function()
			{
				var qty = $(this);
				var sub = qty.find('.qty_sub');
				var add = qty.find('.qty_add');
				var num = qty.find('.product_num');
				var original;
				var newValue;

				sub.on('click', function()
				{
					original = parseFloat(qty.find('.product_num').text());
					if(original > 0)
						{
							newValue = original - 1;
						}
					num.text(newValue);
				});

				add.on('click', function()
				{
					original = parseFloat(qty.find('.product_num').text());
					newValue = original + 1;
					num.text(newValue);
				});
			});
		}
	}

});

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

function CheckInfoChiffre(e)
{
	var regex = /^[0-9]{4,5}$/;
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

function CheckInfoNumero(e)
{
	var regex = /^[0-9]{8,12}$/;
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

function CheckForm()
{
	var nom = CheckInfoLettre(checkout.checkout_name);
	var prenom = CheckInfoLettre(checkout.checkout_last_name);
	var pays = CheckInfoSelectList(checkout.checkout_country,"country");
	var adresse = CheckInfoLettreChiffre(checkout.checkout_address);
	var adresse2 = CheckInfoLettreChiffre(checkout.checkout_address_2);
	var codepostal = CheckInfoChiffre(checkout.checkout_zipcode);
	var ville = CheckInfoSelectList(checkout.checkout_city,"city");
	var telephone = CheckInfoNumero(checkout.checkout_phone);
	var email = CheckInfoEmail(checkout.checkout_email);
	var checkBox= checkout.cb_1.checked;

	if(!nom || !prenom || !pays || !adresse || !adresse2 || !codepostal || !ville || !telephone || !email || !checkBox)
	{
		return false;
	}
	else
	{
		window.open("../index.html");
		return true;
	}
}