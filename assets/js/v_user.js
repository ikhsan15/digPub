var myButton = document.getElementsByName('dynamic');
var myInput = document.getElementsByName('viewPass');
myButton.forEach(function (element, index) {
	element.onclick = function () {
		'use strict';

		if (myInput[index].type == 'password') {
			myInput[index].setAttribute('type', 'text');
			element.firstChild.textContent = 'Hide';
			element.firstChild.className = "";

		} else {
			myInput[index].setAttribute('type', 'password');
			element.firstChild.textContent = '';
			element.firstChild.className = "glyphicon glyphicon-eye-open";
		}
	}
})
