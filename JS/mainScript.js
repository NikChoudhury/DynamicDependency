
// Submit Button



function btnclick(){
	var fullName = document.getElementById("fullName").value;
	var fullAddress = document.getElementById("fullAddress").value;
	var country = document.getElementById("selectCountry").value;
	var state = document.getElementById("selectState").value;
	var city = document.getElementById("selectCity").value;
	var pin = document.getElementById("pinNumber").value;
	if(!fullName || !fullAddress || !country || !state ||!city ||!pin){
		alert("Please Enter Value in Fields");
		
	}else{
			// Create The XMLHttpRequest object
			if (window.XMLHttpRequest) {
			   // code for modern browsers
			   xhttp = new XMLHttpRequest();
			 } else {
			   // code for IE6, IE5
			   xhttp = new ActiveXObject("Microsoft.XMLHTTP");
			 }

			 xhttp.onreadystatechange = function() {
			   if (this.readyState == 4 && this.status == 200) {
			   	// window.location = "respons.php";
			     var r = document.getElementById("respons").innerHTML = this.responseText;
			     console.log(r);
			     // alert(xhttp.responseText);
			     

			   }
			 };

			 var url = "insert.php"+ "?fullName=" + fullName + "&fullAdress=" + fullAddress + "&country=" + country + "&state=" + state + "&city=" + city + "&pin=" + pin;
			 alert("Final Submit");
			 xhttp.open("GET", url, true);
			 xhttp.send();
		};
	}

	




// Function for Load Country and State
function loadState(){
	var fullAddress = document.getElementById("fullAddress").value;
	var country = document.getElementById("selectCountry").value;
	var state = document.getElementById("selectState").value;
	var city = document.getElementById("selectCity").value;
	var pin = document.getElementById("pinNumber").value;



	// Create The XMLHttpRequest object
	if (window.XMLHttpRequest) {
	   // code for modern browsers
	   xhttp = new XMLHttpRequest();
	 } else {
	   // code for IE6, IE5
	   xhttp = new ActiveXObject("Microsoft.XMLHTTP");
	 }

	 // Display State
	 xhttp.onreadystatechange = function() {
	   if (this.readyState == 4 && this.status == 200) {
	     document.getElementById("selectState").innerHTML = this.responseText;
	   }
	 };

	 var url = "selectstate.php" + "?countryId=" + country;
	console.log(url);
	 xhttp.open("GET", url, true);
	 xhttp.send();

}



// Function for Load city
function loadCity(){
	var fullAddress = document.getElementById("fullAddress").value;
	var country = document.getElementById("selectCountry").value;
	var state = document.getElementById("selectState").value;
	var city = document.getElementById("selectCity").value;
	var pin = document.getElementById("pinNumber").value;

	// Create The XMLHttpRequest object
	if (window.XMLHttpRequest) {
	   // code for modern browsers
	   xhttp = new XMLHttpRequest();
	 } else {
	   // code for IE6, IE5
	   xhttp = new ActiveXObject("Microsoft.XMLHTTP");
	 }

	 xhttp.onreadystatechange = function() {
	   if (this.readyState == 4 && this.status == 200) {
	     var aa = document.getElementById("selectCity").innerHTML = this.responseText;
	    	 // console.log(aa); 
	   }
	 };

	  var url = "selectCity.php" + "?stateId=" + state;
	  console.log(url);
	  xhttp.open("GET", url, true);
	  xhttp.send();

}




/////////////////////////////////////////////////////////////////////////////////



// Function For insert value

// var sub = document.getElementById('submitButton');
// sub.addEventListener('click',function(){
// 	var fullName = document.getElementById("fullName").value;
// 	var fullAddress = document.getElementById("fullAddress").value;
// 	var country = document.getElementById("selectCountry").value;
// 	var state = document.getElementById("selectState").value;
// 	var city = document.getElementById("selectCity").value;
// 	var pin = document.getElementById("pinNumber").value;
// 	if(!fullName || !fullAddress || !country || !state ||!city ||!pin){
// 			alert("Please Enter Value in Fields");
// 	 	}else{
// 	 		if (window.XMLHttpRequest) {
// 	 		   // code for modern browsers
// 	 		   xhttp = new XMLHttpRequest();
// 	 		 } else {
// 	 		   // code for IE6, IE5
// 	 		   xhttp = new ActiveXObject("Microsoft.XMLHTTP");
// 	 		 }

// 	 		 xhttp.onreadystatechange = function() {
// 	 		   if (this.readyState == 4 && this.status == 200) {
// 	 		     var r = document.getElementById("respons").innerHTML = this.responseText;
// 	 		     console.log(r);
// 	 		     // alert(xhttp.responseText);
	 		     

// 	 		   }
// 	 		 };
// 	 		  var url = "insert.php"+ "?fullName=" + fullName + "&fullAdress=" + fullAddress + "&country=" + country + "&state=" + state +"&city=" + city + "&pin=" +pin;
// 	 		 alert(url);
// 	 		 xhttp.open("GET", url, true);
// 	 		 xhttp.send();
// 	 	}

	
// },);
