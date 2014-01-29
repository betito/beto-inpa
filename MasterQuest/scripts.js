/**
 * 
 */

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

function hideAll (){
	
	$('#outro_pub').hide();
	$('#outro').hide();
	$('#tipo_ilust').hide();
	$('#outroprograma').hide();
	
}