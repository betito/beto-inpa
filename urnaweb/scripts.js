/**
 * 
 */

doc = document;

function showCredits(show) {

	console.log('passou aqui');
	var elemId = "credits_id";
	if (show == 1) {

		var elem = document.getElementById(elemId);
		elem.style.visibility = "visible";

	} else {
		var elem = document.getElementById(elemId);
		elem.style.visibility = "hidden";

	}
	console.log('passou aqui tbm');

}

function validadeAndConfirmEMail() {

	var error = true;
	var email = doc.getElementById("id_email");

	var confirm_email = prompt("Digite novamente seu E-mail:");

	confirm_email = trim(confirm_email);
	email.value = trim(email.value);

	console.log("INPUT\t:[" + trim(confirm_email) + "]");
	console.log("FORM\t:[" + trim(email.value) + "]");

	if ((email.value == "") || (confirm_email.value == "")) {
		console.log("ERROR: EMail vazio...");
		error = false;
	}

	if ((confirm_email == "") || (email.value != confirm_email)) {
		console.log("ERROR: Valores diferentes...");
		error = false;
	}

	if (!error) {
		alert("Erro na validacao do E-mail.")
	} else {
		console.log("RELAX...");
	}

	return error;
}

function trim(str) {

	var strtmp = String(str);

	strtmp = strtmp.replace(/\s+/g, ' ');
	strtmp = strtmp.replace(/^\s+/g, '');
	strtmp = strtmp.replace(/\s+$/g, '');

	console.log("[" + strtmp + "]");

	return strtmp;

}

function ValidateAndSubmit() {

	if (validadeAndConfirmEMail()) {

		var elem = trim(newpub.nome);
		if (elem.value == "") {
			alert("Favor, preencha o Nome!");
			elem.focus();
			return false;
		}

		elem = trim(newpub.id_email);
		if (elem.value == "") {
			alert("Favor, preencha o E-mail!");
			elem.focus();
			return false;
		}

		elem = trim(newpub.telefone);
		if (elem.value == "") {
			alert("Favor, preencha o Telefone!");
			elem.focus();
			return false;
		}

		elem = trim(newpub.tipo_vinculo);
		if (elem.value == "") {
			alert("Favor, selecione um tipo de vinculo!");
			elem.focus();
			return false;
		}

		elem = trim(newpub.titulo);
		if (elem.value == "") {
			alert("Favor, preencha o Titulo!");
			elem.focus();
			return false;
		}

		elem = trim(newpub.local);
		if (elem.value == "") {
			alert("Favor, preencha o Local!");
			elem.focus();
			return false;
		}

		elem = trim(newpub.ano_pub);
		if (elem.value == "") {
			alert("Favor, preencha o Ano de Publicacao!");
			elem.focus();
			return false;
		}

		elem = newpub.num_ara;
		if (!(isNum(elem.value))) {
			alert("Favor, preencha o Numero de folhas com valores numericos!");
			elem.focus();
			return false;
		}

		var answer = confirm("Confirmar o envio dos dados?");
		// alert(answer);
		if (answer) {
			newpub.submit();
			// alert(answer);
		}

		return true;

	}

}

function isNum(value) {

	console.log(value);
	if (parseInt(value) != NaN) {
		console.log("Eh!");
		return true;
	}
	
	console.log("NAO!");
	return false;
}

function addButtons(id) {

	var xelement = document.getElementById(id);

	xelement.innerHTML = xelement.innerHTML
			+ "<br/><input type=\"text\" name=\"k[]\"/>";

}

function showElement(elemId) {

	$('#' + elemId).show();

}

function hideElement(elemId) {

	$('#' + elemId).hide();

}

function hideAll() {

	$('#outro_pub').hide();
	$('#outro').hide();
	$('#tipo_ilust').hide();
	$('#outroprograma').hide();

}

function selectElement(elementId) {
	$("#" + elementId).attr('checked', true);
}

function cancel() {

	window.location.href = "index.php";

}

function back() {
	window.history.back();

}
