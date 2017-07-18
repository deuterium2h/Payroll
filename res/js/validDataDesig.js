$(document).ready(function()
{
	$('#updDesig').bootstrapValidator({
		live: 'enabled',
		submitButtons: 'input[id="update"]',
		message: 'This value is invalid',
		fields: {
			uDesName: {
				validators: {
					notEmpty: {
						message: 'This field is required'
					},
					stringLength: {
						min: 2, 
						max: 20,
						message: 'Designation Name should at least have 2 and not more than 20 characters'
					},
					regexp: {
						regexp: /^[_# a-zA-Z0-9\.\,\-()[]]+$/,
						message: 'Invalid characters are entered' 
					}
				}
			},
			uDesRate: {
				validators: {
					notEmpty: {
						message: 'This field is Required'
					},
					regexp: {
						regexp: /^[0-9]+$/,
						message: 'Should only contain numbers'
					},
					between: {
						min: 75,
						max: 500,
						message: 'Value should be between 75 and 500'
					}
				}
			},
			uDesDesc: {
				validators: {
					notEmpty: {
						message: 'This field is Required'
					},
					regexp: {
						regexp: /^[# a-zA-Z0-9-\.\,()[]]+$/,
						message: 'Invalid characters are entered' 
					},
					stringLength: {
						min: 3, 
						max: 50,
						message: 'Designation Description should at least have 3 and not more than 50 characters'
					}
				}
			}
		}
	});
	$('#addDesig').bootstrapValidator({
		live: 'enabled',
		submitButtons: 'input[id="add"]',
		message: 'This value is invalid',
		fields: {
			jobNo: {
				validators: {
					notEmpty: {
						message: 'This field is Required'
					},
					regexp: {
						regexp: /^[0-9]+$/,
						message: 'Designation ID should only contain numbers'
					}
				}
			},
			jobName: {
				validators: {
					notEmpty: {
						message: 'This field is Required'
					},
					stringLength: {
						min: 2, 
						max: 20,
						message: 'Designation Name should at least have 2 and not more than 20 characters'
					},
					regexp: {
						regexp: /^[ a-zA-Z0-9]+$/,
						message: 'Invalid characters are entered' 
					}
				}
			},
			jobRate: {
				validators: {
					notEmpty: {
						message: 'This field is Required'
					},
					regexp: {
						regexp: /^[0-9]+$/,
						message: 'Should only contain numbers'
					},
					between: {
						min: 75,
						max: 500,
						message: 'Value should be between 75 and 500'
					}
				}
			},
			jobDesc: {
				validators: {
					notEmpty: {
						message: 'This field is Required'
					},
					regexp: {
						regexp: /^[# a-zA-Z0-9]+$/,
						message: 'Invalid characters are entered' 
					},
					stringLength: {
						min: 3, 
						max: 50,
						message: 'Designation Description should at least have 3 and not more than 50 characters'
					}
				}
			}
		}
	});
});