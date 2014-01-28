/**
 * 
 */

function addButtons(id) {

	var xelement = document.getElementById(id);

	xelement.innerHTML = xelement.innerHTML
			+ "<br/><input type=\"text\" name=\"k[]\"/>";

}

function showElement(obj, elemId) {

	if ($('#'.obj).checked) {
		$("#".elemId).show();
	}else {
		$("#".elemId).hide();
	}

}