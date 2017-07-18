$(document).ready(function()
{
	$('#search').bootstrapValidator({
		live: 'enabled',
		submitButtons: 'input[id="compute"]',
		message: 'This value is invalid',
		feedbackIcons: {
			valid: 'glyphicon glyphicon-ok',
			invalid: 'glyphicon glyphicon-remove',
			validating: 'glyphicon glyphicon-refresh'
		},
		fields: {
			searchId: {
				validators: {
					notEmpty: {
						message: 'Please enter a Employee ID in the search box'
					}
				}
			},
			searchMon: {
				validators: {
					notEmpty: {
						message: 'Please choose a month'
					}
				}
			}
		}
	});
});