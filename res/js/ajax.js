function getXMLHTTP() { 
	var xmlhttp=false;	
	try{
		xmlhttp=new XMLHttpRequest();
	} catch(e)	{		
		try {			
			xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
		} catch(e){
			try {
			xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
			} catch(e1){
				xmlhttp=false;
			}
		}
	}
	 	
	return xmlhttp;
}
function getGender(url) {
	var req = getXMLHTTP();
	if(req) {
		req.onreadystatechange = function() {
			if(req.readyState == 4) {
				if(req.status == 200) {
					document.getElementById('gender').value = req.responseText;
				} else {
					alert("Promlem message here" + req.statusText)
				}
			}
		}
		req.open("POST", url, true);
		req.send(null);
	}
}
/*$(document).ready(function() {
	$('.button').click(function() {
		var clickBtn = $(this).val();
		var phpFunc = '../inc/buttons.php';
		data = {'action': clickBtn};
		$.post(phpFunc,data, function(response) {

		});
	});
});*/
function getEmployee(url) {
	var req = getXMLHTTP();
	if(req) {
		req.onreadystatechange = function() {
			if(req.readyState == 4) {
				if(req.status == 200) {
					document.getElementById('aAttEmpName').value = req.responseText;
				} else {
					alert("Problem message here" + req.statusText)
				}
			}
		}
		req.open("POST", url, true);
		req.send(null);
	}
}
/*$(document).ready(function() {
	$('#aAttEmpId').change(function() {
		var selected = $(this).val();
		$.get("../inc/employees.php?selected="+selected, function(data) {
			$('.result').html(data);
		});
	});
})*/;
/*
$('td', 'table').each(function(i) {
    $(this).text(i+1);
});
*/
function getName(str) {
	if (str == "") {
		document.getElementById("aAttEmpName").value = "";
		return;
	} else {
		if(window.XMLHttpRequest) {
			xmlhttp = new XMLHttpRequest();
		} else {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange = function() {
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				document.getElementById("aAttEmpName").value = xmlhttp.responseText;
			}
		}
		xmlhttp.open("GET","../system/inc/employees.php?id="+str, true);
		xmlhttp.send();
	}
}
function setEmpName(str) {
	if (str == "") {
		document.getElementById("salEmpName").value = "";
		return;
	} else {
		var ajax = getXMLHTTP();
		ajax.onreadystatechange = function() {
			if(ajax.readyState == 4 && ajax.status == 200) {
				document.getElementById("salEmpName").value = ajax.responseText;
			}
		}
		ajax.open("GET","../system/inc/salName.php?id="+str, true);
		ajax.send();
	}
}
function setEmpId(str) {
	if (str == "") {
		document.getElementById("salEmpId").value = "";
		return;
	} else {
		var ajax = getXMLHTTP();
		ajax.onreadystatechange = function() {
			if(ajax.readyState == 4 && ajax.status == 200) {
				document.getElementById("salEmpId").value = ajax.responseText;
			}
		}
		ajax.open("GET","../system/inc/salEmp0.php?id="+str, true);
		ajax.send();
	}
}
function setEmpCat(str) {
	if (str == "") {
		document.getElementById("salEmpCat").value = "";
		return;
	} else {
		var ajax = getXMLHTTP();
		ajax.onreadystatechange = function() {
			if(ajax.readyState == 4 && ajax.status == 200) {
				document.getElementById("salEmpCat").value = ajax.responseText;
			}
		}
		ajax.open("GET","../system/inc/salEmp1.php?id="+str, true);
		ajax.send();
	}
}
function setEmpDept(str) {
	if (str == "") {
		document.getElementById("salEmpDept").value = "";
		return;
	} else {
		var ajax = getXMLHTTP();
		ajax.onreadystatechange = function() {
			if(ajax.readyState == 4 && ajax.status == 200) {
				document.getElementById("salEmpDept").value = ajax.responseText;
			}
		}
		ajax.open("GET","../system/inc/salEmp2.php?id="+str, true);
		ajax.send();
	}
}
function setEmpRPH(str) {
	if (str == "") {
		document.getElementById("salEmpRPH").value = "";
		return;
	} else {
		var ajax = getXMLHTTP();
		ajax.onreadystatechange = function() {
			if(ajax.readyState == 4 && ajax.status == 200) {
				document.getElementById("salEmpRPH").value = ajax.responseText;
			}
		}
		ajax.open("GET","../system/inc/salEmp10.php?title="+str, true);
		ajax.send();
	}
}
function setEmpDesig(str) {
	if (str == "") {
		document.getElementById("salEmpDesig").value = "";
		return;
	} else {
		var ajax = getXMLHTTP();
		ajax.onreadystatechange = function() {
			if(ajax.readyState == 4 && ajax.status == 200) {
				document.getElementById("salEmpDesig").value = ajax.responseText;
			}
		}
		ajax.open("GET","../system/inc/salEmp3.php?id="+str, true);
		ajax.send();
	}
}
function setEmpSSS(str) {
	if (str == "") {
		document.getElementById("salEmpSSS").value = "";
		return;
	} else {
		var ajax = getXMLHTTP();
		ajax.onreadystatechange = function() {
			if(ajax.readyState == 4 && ajax.status == 200) {
				document.getElementById("salEmpSSS").value = ajax.responseText;
			}
		}
		ajax.open("GET","../system/inc/salEmp4.php?id="+str, true);
		ajax.send();
	}
}
function setEmpTIN(str) {
	if (str == "") {
		document.getElementById("salEmpTIN").value = "";
		return;
	} else {
		var ajax = getXMLHTTP();
		ajax.onreadystatechange = function() {
			if(ajax.readyState == 4 && ajax.status == 200) {
				document.getElementById("salEmpTIN").value = ajax.responseText;
			}
		}
		ajax.open("GET","../system/inc/salEmp5.php?id="+str, true);
		ajax.send();
	}
}
function setEmpPhilN(str) {
	if (str == "") {
		document.getElementById("salEmpPhilN").value = "";
		return;
	} else {
		var ajax = getXMLHTTP();
		ajax.onreadystatechange = function() {
			if(ajax.readyState == 4 && ajax.status == 200) {
				document.getElementById("salEmpPhilN").value = ajax.responseText;
			}
		}
		ajax.open("GET","../system/inc/salEmp6.php?id="+str, true);
		ajax.send();
	}
}
function setEmpHDMF(str) {
	if (str == "") {
		document.getElementById("salEmpHDMF").value = "";
		return;
	} else {
		var ajax = getXMLHTTP();
		ajax.onreadystatechange = function() {
			if(ajax.readyState == 4 && ajax.status == 200) {
				document.getElementById("salEmpHDMF").value = ajax.responseText;
			}
		}
		ajax.open("GET","../system/inc/salEmp7.php?id="+str, true);
		ajax.send();
	}
}
function setEmpTCode(str) {
	if (str == "") {
		document.getElementById("salEmpTCode").value = "";
		return;
	} else {
		var ajax = getXMLHTTP();
		ajax.onreadystatechange = function() {
			if(ajax.readyState == 4 && ajax.status == 200) {
				document.getElementById("salEmpTCode").value = ajax.responseText;
			}
		}
		ajax.open("GET","../system/inc/salEmp8.php?id="+str, true);
		ajax.send();
	}
}
function setEmpBankNo(str) {
	if (str == "") {
		document.getElementById("salEmpBankNo").value = "";
		return;
	} else {
		var ajax = getXMLHTTP();
		ajax.onreadystatechange = function() {
			if(ajax.readyState == 4 && ajax.status == 200) {
				document.getElementById("salEmpBankNo").value = ajax.responseText;
			}
		}
		ajax.open("GET","../system/inc/salEmp9.php?id="+str, true);
		ajax.send();
	}
}
function setHrRTotal(str,dt) {
	if (str == "") {
		document.getElementById("salEmpRTotal").value = "";
		return;
	} else {
		var ajax = getXMLHTTP();
		ajax.onreadystatechange = function() {
			if(ajax.readyState == 4 && ajax.status == 200) {
				document.getElementById("salEmpRTotal").value = ajax.responseText;
			}
		}
		ajax.open("GET","../system/inc/salHourR.php?id="+str+"&month="+dt, true);
		ajax.send();
	}
}
function setHrHTotal(str,dt) {
	if (str == "") {
		document.getElementById("salEmpHTotal").value = "";
		return;
	} else {
		var ajax = getXMLHTTP();
		ajax.onreadystatechange = function() {
			if(ajax.readyState == 4 && ajax.status == 200) {
				document.getElementById("salEmpHTotal").value = ajax.responseText;
			}
		}
		ajax.open("GET","../system/inc/salHourH.php?id="+str+"&month="+dt, true);
		ajax.send();
	}
}
function setHrNTotal(str,dt) {
	if (str == "") {
		document.getElementById("salEmpNTotal").value = "";
		return;
	} else {
		var ajax = getXMLHTTP();
		ajax.onreadystatechange = function() {
			if(ajax.readyState == 4 && ajax.status == 200) {
				document.getElementById("salEmpNTotal").value = ajax.responseText;
			}
		}
		ajax.open("GET","../system/inc/salHourN.php?id="+str+"&month="+dt, true);
		ajax.send();
	}
}
function setHrOTTotal(str,dt) {
	if (str == "") {
		document.getElementById("salEmpOTTotal").value = "";
		return;
	} else {
		var ajax = getXMLHTTP();
		ajax.onreadystatechange = function() {
			if(ajax.readyState == 4 && ajax.status == 200) {
				document.getElementById("salEmpOTTotal").value = ajax.responseText;
			}
		}
		ajax.open("GET","../system/inc/salHourOT.php?id="+str+"&month="+dt, true);
		ajax.send();
	}
}
function setHrOTotal(str,dt) {
	if (str == "") {
		document.getElementById("salEmpOTotal").value = "";
		return;
	} else {
		var ajax = getXMLHTTP();
		ajax.onreadystatechange = function() {
			if(ajax.readyState == 4 && ajax.status == 200) {
				document.getElementById("salEmpOTotal").value = ajax.responseText;
			}
		}
		ajax.open("GET","../system/inc/salHourO.php?id="+str+"&month="+dt, true);
		ajax.send();
	}
}
/*
$('table.paginated').each(function() {
    var currentPage = 0;
    var numPerPage = 10;
    var $table = $(this);
    $table.bind('repaginate', function() {
        $table.find('tbody tr').hide().slice(currentPage * numPerPage, (currentPage + 1) * numPerPage).show();
    });
    $table.trigger('repaginate');
    var numRows = $table.find('tbody tr').length;
    var numPages = Math.ceil(numRows / numPerPage);
    var $pager = $('<div class="pager"></div>');
    for (var page = 0; page < numPages; page++) {
        $('<span class="page-number"></span>').text(page + 1).bind('click', {
            newPage: page
        }, function(event) {
            currentPage = event.data['newPage'];
            $table.trigger('repaginate');
            $(this).addClass('active').siblings().removeClass('active');
        }).appendTo($pager).addClass('clickable');
    }
    $pager.insertBefore($table).find('span.page-number:first').addClass('active');
});*/