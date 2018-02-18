var Simditor = require('simditor');
var Hotkeys = require('hotkeys');
require('simditor/styles/simditor.scss');

$(document).ready(function() {
	Simditor.locale = 'en-EN';
	
	var editor = new Simditor({
		textarea: $('#recipe_description'),
		cleanPaste: true,
		toolbar: [
			'bold',
			'italic',
			'underline',
			'ol',
			'ul',
			'blockquote',
			'hr',
			'indent',
			'outdent',
			'alignment'			
			]
	});
});

