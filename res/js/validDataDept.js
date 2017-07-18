$(document).ready(function()
{
	$('#updDept').bootstrapValidator({
		live: 'enabled',
		submitButtons: 'input[id="update"]',
		message: 'This value is invalid',
		fields: {
			uDeptName: {
				validators: {
					notEmpty: {
						message: 'This field is Required'
					},
					stringLength: {
						min: 2, 
						max: 20,
						message: 'Department Name should at least have 2 and not more than 20 characters'
					},
					regexp: {
						regexp: /^[# a-zA-Z0-9\.\,()[]]+$/,
						message: 'Invalid characters are entered' 
					}
				}
			},
			uDeptDesc: {
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
						message: 'Department Description should at least have 3 and not more than 50 characters'
					}
				}
			}
		}
	});
	$('#addDept').bootstrapValidator({
		live: 'enabled',
		submitButtons: 'input[id="AddDept"]',
		message: 'This value is invalid',
		fields: {
			deptNo: {
				validators: {
					notEmpty: {
						message: 'This field is Required'
					},
					regexp: {
						regexp: /^[0-9]+$/,
						message: 'Department ID should only contain numbers'
					}
				}
			},
			deptName: {
				validators: {
					notEmpty: {
						message: 'This field is Required'
					},
					stringLength: {
						min: 2, 
						max: 20,
						message: 'Department Name should at least have 2 and not more than 20 characters'
					},
					regexp: {
						regexp: /^[ a-zA-Z0-9]+$/,
						message: 'Invalid characters are entered' 
					}
				}
			},
			deptDesc: {
				validators: {
					notEmpty: {
						message: 'This field is Required'
					},
					regexp: {
						regexp: /^[# a-zA-Z0-9-\.\,]+$/,
						message: 'Invalid characters are entered' 
					},
					stringLength: {
						min: 3, 
						max: 50,
						message: 'Department Description should at least have 3 and not more than 50 characters'
					}
				}
			}
		}
	});
});