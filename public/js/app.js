
function validacija(){


	if(document.forms[0].ime.value==''){
		alert("Niste uneli ime!");
		document.forms[0].ime.focus();
		return false;
	}
	if(document.forms[0].prezime.value==''){
		alert("Niste uneli prezime!");
		document.forms[0].prezime.focus();
		return false;
	}


	if(document.forms[0].email.value==''){
		alert("Niste uneli e-mail !")
		document.forms[0].email.focus();
		return false;
	}

	if(document.forms[0].email.value.indexOf('@')==-1){
		alert("Niste uneli e-mail u pravilnom formatu!")
		document.forms[0].email.focus();
		return false;
	}

	if(document.forms[0].telefon.value==''){
		alert("Niste uneli broj telefona !");
		document.forms[0].telefon.focus();
		return false;
	}

	if(document.forms[0].kartica.value==''){
		alert("Niste uneli broj kreditne kartice !");
		document.forms[0].kartica.focus();
		return false;
	}


	if(document.forms[0].datepicker1.value==''){
		alert("Niste uneli datum polaska !");
		document.forms[0].datepicker1.focus();
		return false;
	}

	if(document.forms[0].datepicker2.value==''){
		alert("Niste uneli datum povratka !");
		document.forms[0].datepicker2.focus();
		return false;
	}

	if(!checkRadio(document.forms[0].card))	{
		alert("Niste izabrali vašu karticu !");
		return false;
	}

	return alert("Sve podatke ste ispravno uneli !");
}


function checkRadio(buttons){
	for(var i=0; i < buttons.length ;i++){
		if(buttons[i].checked) return true;
	}

	return false;
}
