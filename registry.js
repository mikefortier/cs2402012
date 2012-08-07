function eventHookup(id, event, callback) { // a callback is the function used later, do not include parentheses
	if (document.getElementById(id).addEventListener) {
		document.getElementById(id).addEventListener(event, callback, false);
	} else {
		document.getElementById(id).attachEvent("on" + event, callback);
	}
}

function loader() { // insert eventHookup functions here
	
}