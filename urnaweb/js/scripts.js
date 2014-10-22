/**
 * 
 */

doc = document;

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

function showElement(elemId) {

	$('#' + elemId).show();

}

function hideElement(elemId) {

	$('#' + elemId).hide();

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


function hideAll(showId) {
	var x = 0;
	for (x=1; x < 10; x++) {
		id = "#step" + x.toString();
		$(id).hide();
		console.log(id);
	}
	
	$("#"+ showId).show();
	
}
