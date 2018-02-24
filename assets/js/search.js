import algoliasearch from "algoliasearch";
import autocomplete from "autocomplete.js";

$(document).ready(function() {
	
	var client = algoliasearch('DH3HSW33IB','a6bb610f4982c73cd4d4fa577ba8102e');
	var index = client.initIndex('dev_recipes');
	
	var options = {
			hint: false,
			cssClasses: {
				noPrefix: true,
				input: 'form-input',
				suggestions: 'list-group',
				suggestion: 'list-group-item',
				cursor: 'pointer'
					
			}
	}
	
	autocomplete('#search',
			options,
			{
				source: autocomplete.sources.hits(index, {hitsPerPage: 5}),
				displayKey: 'name',
				templates: {
					suggestion: function(suggestion) {
						return '<span><a href="/' + $("#locale").data("locale") + '/recipe/' + suggestion.slug +'">' + suggestion._highlightResult.name.value + '</a>' +
						"</span>";						 
					}
				}
			}
	);
	
});
