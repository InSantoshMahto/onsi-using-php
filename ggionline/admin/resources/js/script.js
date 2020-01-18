
// for tooltips
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

/* --------------------------------------------------------------
*************************** zone manager ************************
-------------------------------------------------------------*/

// for deactivate the zone user
function deactive(referance,type) {
	if (confirm("Are You Sure To Deactive This User")) {
		if (type == "zone") {
			$.ajax({url: "setting.php?deactive="+referance+"&type="+type+"&ajaxWithMe=one Not", success: function(result){
		        $("#zoneManagerTable").html(result);
		    }});
		}
		else if (type == "marketing") {
			$.ajax({url: "setting.php?deactive="+referance+"&type="+type+"&ajaxWithMe=one Not", success: function(result){
		        $("#marketingManagerTable").html(result);
		    }});
		}
	}
}
// for activate the zone user
function active(referance,type) {
	if (confirm("Are You Sure To Active This User")) {
		if (type == "zone") {
			$.ajax({url: "setting.php?active="+referance+"&type="+type+"&ajaxWithMe=one Not", success: function(result){
		        $("#zoneManagerTable").html(result);
		    }});
		}
		else if (type == "marketing") {
			$.ajax({url: "setting.php?active="+referance+"&type="+type+"&ajaxWithMe=one Not", success: function(result){
		        $("#marketingManagerTable").html(result);
		    }});
		}
	}
}

/* --------------------------------------------------------------
*************************** Marketing manager ************************
-------------------------------------------------------------*/

// body onload events function
function bodyLoad() {
	zoneAddress();
	marketingAddress();
}

// for zoneAddress
function zoneAddress() {
	//console.log("working");
	getAddress("state","country","india","state-control-zone"); // for state
	getAddress("district","state","Odisha","district-control-zone"); // for District
}

// for marketing Address
function marketingAddress() {
	//console.log("working");
	getAddress("state","country","india","state-control-marketing"); // for state
	getAddress("district","state","Odisha","district-control-marketing"); // for District
}

// onchange event for district for zone
function getDistrictZone() {
	//console.log("working getDistrictZone");
	var state = document.getElementById("state-control-zone").value;
	getAddress("district","state",state,"district-control-zone");
}

// onchange event for district for marketing
function getDistrictMarketing() {
	//console.log("working getDistrictMaketing");
	var state = document.getElementById("state-control-marketing").value;
	getAddress("district","state",state,"district-control-marketing");
}

/*----------  Ajax  function------------ */

// getAddress
function getAddress(get,refrenceName,refrenceValue,response) {
	//console.log("working getAddress");
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
  	if (this.readyState == 4 && this.status == 200) {
      		document.getElementById(response).innerHTML = this.responseText;
  		}
	};
	xhttp.open("GET","address.php?get="+get+"&"+refrenceName+"="+refrenceValue+"&action=goNow", true);
	//console.log("address.php?get="+get+"&"+refrenceName+"="+refrenceValue+"&action=goNow");
	xhttp.send();
}

/* ------------------------------------------
********************************************* date picker *********************************************
                                                           ------------------------------------------ */

// for dpr date
$( function() {
  $( "#dateSearch" ).datepicker({
    changeMonth: true,
    changeYear: true
  });
  $( "#dateSearch" ).datepicker( "option", "dateFormat", "dd-mm-yy" );
  $( "#dateSearch" ).datepicker( "option", "showAnim", "slideDown" );
} );
// for zone date
$( function() {
  $( "#dateSearchZone" ).datepicker({
    changeMonth: true,
    changeYear: true
  });
  $( "#dateSearchZone" ).datepicker( "option", "dateFormat", "dd-mm-yy" );
  $( "#dateSearchZone" ).datepicker( "option", "showAnim", "slideDown" );
} );
// for Marketing date
$( function() {
  $( "#dateSearchMarketing" ).datepicker({
    changeMonth: true,
    changeYear: true
  });
  $( "#dateSearchMarketing" ).datepicker( "option", "dateFormat", "dd-mm-yy" );
  $( "#dateSearchMarketing" ).datepicker( "option", "showAnim", "slideDown" );
} );