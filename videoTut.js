$(document).ready(function(){
  $("#dbresults");
  $("#dbresults").slideDown(2000).delay(3000).slideUp(500);

  // $("#videoTag span").addClass(rotateDiag)

})

// Ajax Code
function loadContentsAsyc(whereToPlaceData, theFile){
			if (window.XMLHttpRequest) {
				xmlHttp = new XMLHttpRequest();
			} else {
				xmlHttp = new ActiveXObject('Microsoft.XMLHTTP');
			}
			xmlHttp.onreadystatechange = function () {
				if ( xmlHttp.readyState == 4 && xmlHttp.status == 200 ){
					document.getElementById(whereToPlaceData).innerHTML = xmlHttp.responseText;
				}
			}

			xmlHttp.open('GET', theFile, true);
			xmlHttp.send()
		}
