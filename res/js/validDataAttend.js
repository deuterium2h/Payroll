$(document).ready(function()
{
	$('#updAttend').bootstrapValidator({
		live: 'enabled',
		submitButtons: 'input[id="update"]',
		message: 'This value is invalid',
		fields: {
			uAttType: {
				validators: {
					notEmpty: {
						message: 'This field is Required'
					}
				}
			},
			uAttLogin: {
				validators: {
					notEmpty: {
						message: 'This field is Required'
					}
				}
			},
			uAttLogout: {
				validators: {
					notEmpty: {
						message: 'This field is Required'
					}
				}
			},
			uAttHours: {
				validators: {
					notEmpty: {
						message: 'This field is Required'
					},
					regexp: {
						regexp: /^[0-9]+$/,
						message: 'Should only contain numbers'
					},
					stringLength: {
						min: 1,
						max: 2,
						message: 'Have a maximum of 2 digits'
					}
				}
			},
			uAttRem: {
				validators: {
					regexp: {
						regexp: /^[# a-zA-Z0-9\.\,()[]]+$/,
						message: 'Invalid characters are entered'
					},
					stringLength: {
						min: 2,
						max: 15,
						message: 'Atleast 2 and maximum of 15 characters'
					}
				}
			}
		}
	});
	$('#addAttend').bootstrapValidator({
		live: 'enabled',
		submitButtons: 'input[id="add"]',
		message: 'This value is invalid',
		fields: {
			aAttEmpId: {
				validators: {
					notEmpty: {
						message: 'This field is Required'
					}
				}
			},
			aAttType: {
				validators: {
					notEmpty: {
						message: 'This field is Required'
					}
				}
			},
			aAttLogin: {
				validators: {
					notEmpty: {
						message: 'This field is Required'
					}
				}
			},
			aAttLogout: {
				validators: {
					notEmpty: {
						message: 'This field is Required'
					}
				}
			},
			aAttHours: {
				validators: {
					notEmpty: {
						message: 'This field is Required'
					},
					regexp: {
						regexp: /^[0-9]+$/,
						message: 'Should only contain numbers'
					},
					stringLength: {
						min: 1,
						max: 2,
						message: 'Have a maximum of 2 digits'
					}
				}
			},
			aAttRem: {
				validators: {
					regexp: {
						regexp: /^[# a-zA-Z0-9\.\,]+$/,
						message: 'Invalid characters are entered'
					},
					stringLength: {
						min: 2,
						max: 15,
						message: 'Atleast 2 and maximum of 15 characters'
					}
				}
			}
		}
	});
});