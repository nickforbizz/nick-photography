$(document).ready(function () {
    // alert("it works");

$(".l").click(function (){
	$("#defaultContent").hide();
})
  $("#formEl").submit(function (e) {
    e.preventDefault();
    alert("submitted");
  });

$("#ajaxunk").click(function(){
  $('this').slideDown(2000 );
});

  $("#read_more_btn").click(function (){
		$("#read_more").css("height","auto");
    $("#read_more_btn").hide();
	});
    $("#read_more_btn1").click(function (){
  		$("#read_more1").css("height","auto");
      $("#read_more_btn1").hide();
  	});


      $("#softwareUploaded").click( function () {
      	  $.ajax({
      			type: "POST",
      			url: "images.php ",
      			data:"software="+$("#softwareUploaded").val()+"&text="+$("#textfield").val() ,
      			success: log_in_success
      			// error: log_in_error
      		});
      });

      $(".callcss div:even").css("color","lightblue");

      $("#viewComments").click(function () {
        $("#commentsbar").toggle( function () {
          if($("#viewComments").text()=='View Comments'){
          document.getElementById("viewComments").innerHTML="Hide Comments";
        }else {
            document.getElementById("viewComments").innerHTML="View Comments";
        }
      });
    });

      // $("#viewComments").click(function () {
      //   $("#commentsbar").toggle();
      //   document.getElementById("viewComments").innerHTML="Hide Comments";
      //
      //   $("#viewComments").click(function () {
      //     $("#commentsbar").hide();
      //     document.getElementById("viewComments").innerHTML="View Comments";
      //
      //   })
      // })


}); //end of ready function

// dropdown of navbar
  //var y = document.getElementById('btn-drp');
   //y.addEventListener("mouseover",myFunction);

function myFunction() {
      var x = document.getElementById("demo");
      if (x.className.indexOf("w3-show") == -1) {
          x.className += " w3-show";
    }else {
        //x.className = x.className.replace(" w3-show", "");
    }
  }
// nav in small screens
function navSmallScreens() {
    var x = document.getElementById("smallScreenNav");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}


function getInfoFromServer(){
  //alert("wow");
  $.ajax({
				type: "GET",
				url: "getFileNames.php",
				success: postToPage
			});
		}

		function postToPage(data, status){
			$("#databaseFiles").html(data);

		}

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
			};

			xmlHttp.open('GET', theFile, true);
			xmlHttp.send();

		}
