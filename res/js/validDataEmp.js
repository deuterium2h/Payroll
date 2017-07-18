$(document).ready(function()
{
	$('#addEmp').bootstrapValidator({
		live: 'enabled',
		submitButtons: 'input[id="add"]',
		message: 'This value is invalid',
		feedbackIcons: {
			valid: 'glyphicon glyphicon-ok',
			invalid: 'glyphicon glyphicon-remove',
			validating: 'glyphicon glyphicon-refresh'
		},
		fields: {
			empid: {
				validators: {
					notEmpty: {
						message: 'Employee ID is required'
					},
					stringLength: {
						min: 6,
						max: 8,
						message: 'Employee ID must be more than 6 and not less than 8 characters long'
					},
					regexp: {
						regexp: /^[a-zA-Z0-9]+$/,
						message: 'Employee ID can only consist of letters and numbers'
					}
				}
			},
			salutation: {
				validators: {
					notEmpty: {
						message: 'Please fill-up this field'
					}
				}
			},
			birthday: {
				validators: {
					notEmpty: {
						message: 'Please enter employee\'s birthday'
					}
				}
			},
			firstname: {
				validators: {
					notEmpty: {
						message: 'Please put the employee\'s first name'
					},
					stringLength: {
						min: 1,
						max: 25,
						message: 'First name must at least have 1 letter and maximum of 25'
					},
					regexp: {
						regexp: /^[ a-zA-Z]+$/,
						message: 'First name should ONLY contain letters'
					}
				}
			},
			middlename: {
				validators: {
					notEmpty: {
						message: 'Please put the employee\'s middle name'
					},
					stringLength: {
						min: 2,
						max: 25,
						message: 'Last name must at least have 2 letters and maximum of 25'
					},
					regexp: {
						regexp: /^[ a-zA-Z]+$/,
						message: 'Middle name should ONLY contain letters'
					}
				}
			},
			lastname: {
				validators: {
					notEmpty: {
						message: 'Please put the employee\'s last name'
					},
					stringLength: {
						min: 1,
						max: 25,
						message: 'Last name must at least have 2 letters and maximum of 25'
					},
					regexp: {
						regexp: /^[ a-zA-Z]+$/,
						message: 'Last name should ONLY contain letters'
					}
				}
			},
			status: {
				validators: {
					notEmpty: {
						message: 'Please fill-up this field'
					}
				}
			},
			dept: {
				validators: {
					notEmpty: {
						message: 'Please select a department'
					}
				}
			},
			empcat:{
				validators: {
					notEmpty: {
						message: 'Please select an employment category'
					}
				}
			},
			designation: {
				validators: {
					notEmpty: {
						message: 'Please select a designation'
					}
				}
			},
			email1: {
				validators: {
					notEmpty: {
						message: 'Enter at least 1 E-mail Address'
					},
					emailAddress: {
						message: 'Invalid e-mail format'
					}
				}
			},
			email2: {
				validators: {
					emailAddress: {
						message: 'Invalid e-mail format'
					}
				}
			},
			phone1: {
				validators: {
					notEmpty: {
						message: 'Enter at least 1 telephone number'
					},
					stringLength: {
						min: 7,
						max: 7,
						message: 'Telephone number should only contain 7 numbers'
					},
					regexp: {
						regexp: /^[0-9]+$/,
						message: 'Should only contain numbers'
					}
				}
			},
			phone2: {
				validators: {
					stringLength: {
						min: 7,
						max: 7,
						message: 'Telephone number should only contain 7 numbers'
					},
					regexp: {
						regexp: /^[0-9]+$/,
						message: 'Should only contain numbers'
					}
				}
			},
			mobile1: {
				validators: {
					notEmpty: {
						message: 'Enter at least 1 mobile number'
					},
					stringLength: {
						min: 11,
						max: 11,
						message: 'Mobile number should only contain 11 numbers'
					},
					regexp: {
						regexp: /^[0-9]+$/,
						message: 'Should only contain numbers'
					}
				}
			},
			mobile2: {
				validators: {
					stringLength: {
						min: 11,
						max: 11,
						message: 'Mobile number should only contain 11 numbers'
					},
					regexp: {
						regexp: /^[0-9]+$/,
						message: 'Should only contain numbers'
					}
				}
			},
			address1: {
				validators: {
					notEmpty: {
						message: 'Please enter at least 1 address'
					},
					stringLength: {
						min: 10,
						max: 150,
						message: 'Address must be not less than 10 and not more than 150 characters'
					},
					regexp: {
						regexp: /^[# a-zA-Z0-9-\.\,]+$/,
						message: 'Invalid address format'
					}
				}
			},
			address2: {
				validators: {
					stringLength: {
						min: 10,
						max: 150,
						message: 'Address should only contain not less than 10 and not more than 150 characters'
					},
					regexp: {
						regexp: /^[# a-zA-Z0-9-\.\,]+$/,
						message: 'Invalid address format'
					}
				}
			},
			sss: {
				validators: {
					notEmpty: {
						message: 'Please input SSS Number'
					},
					regexp: {
						regexp: /^[0-9]+$/,
						message: 'Should only contain numbers'
					},
					stringLength: {
						min: 10,
						max: 10,
						message: 'Should contain 10 digits'
					}
				}
			},
			tin: {
				validators: {
					notEmpty: {
						message: 'Please input T.I.N number'
					},
					regexp: {
						regexp: /^[0-9]+$/,
						message: 'Should only contain numbers'
					},
					stringLength: {
						min: 10,
						max: 10,
						message: 'Should contain 10 digits'
					}
				}
			},
			philhealth: {
				validators: {
					notEmpty: {
						message: 'Please input PhilHealth Number'
					},
					regexp: {
						regexp: /^[0-9]+$/,
						message: 'Should only contain numbers'
					},
					stringLength: {
						min: 10,
						max: 10,
						message: 'Should contain 10 digits'
					}
				}
			},
			pagibig: {
				validators: {
					notEmpty: {
						message: 'Please input HDMF Number'
					},
					regexp: {
						regexp: /^[0-9]+$/,
						message: 'Should only contain numbers'
					},
					stringLength: {
						min: 10,
						max: 10,
						message: 'Should contain 10 digits'
					}
				}
			},
			bankno: {
				validators: {
					notEmpty: {
						message: 'Please input HDMF Number'
					},
					regexp: {
						regexp: /^[0-9]+$/,
						message: 'Should only contain numbers'
					}
				}
			},
			taxcode: {
				validators: {
					notEmpty: {
						message: 'Please select Employee\'s Tax Code'
					}
				}
			}
		}
	});
});