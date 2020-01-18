/* ============================================
-----------  JavaScript  function------------ 
================================================ */


/* ---------------------------------------------
------------ scripts for newStudents ---------------
------------------------------------------------------ */

// body onload events function
function bodyLoadFormStudents() {
	//console.log("working");
	getAddress("state","country","india","state-control"); // for state
	getAddress("district","state","Odisha","district-control"); // for District
}

// onchange event for district
function getDistrict() {
	//console.log("working");
	var state = document.getElementById("state-control").value;
	getAddress("district","state",state,"district-control");
}

/* ---------------------------------------------
------------ scripts for dprReports ---------------
------------------------------------------------------ */


// onchange event for afs
function getAfs() {
  //console.log("working");
  var afs = document.getElementById("afs").value;
  nextAfs(afs,"afterAfs");
}


/* ============================================
-----------  Ajax  function------------ 
================================================ */


// getAddress
function getAddress(get,refrenceName,refrenceValue,response) {
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

// dprchange i.e, dpr status
function nextAfs(afs,response) {
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
      document.getElementById(response).innerHTML = this.responseText;
  }
};
xhttp.open("GET","dprchenges.php?afs="+afs+"&action=goNow", true);
//console.log("dprchenges.php?afs="+afs+"&action=goNow");
xhttp.send();
}




/* ---------  jquery-ui datepicker    -----   */
$( function() {
   	$( "#datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true
    });
    $( "#datepicker" ).datepicker( "option", "dateFormat", "dd-mm-yy" );
    $( "#datepicker" ).datepicker( "option", "showAnim", "slideDown" );
  });
