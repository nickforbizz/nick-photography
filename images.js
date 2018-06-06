$("#formImages").click(function() {
    $(this).delay(4000);
    document.getElementById('formImages1').reset();
});


function check() {
if(localStorage.loggedin==undefined){
$("#passmodal").css("display","block");
}else {
$("#fileModal").css("display","block");

}
}

function submit() {
  var pass=$("#xpassword").val();
  var username=$("#username1").val();
  $.ajax({
      url: "./verify.php",
      method:"post",
      data:"pass="+pass+"&username="+username,
      type:"text",
      success: function(data){

      console.log(data);

      if(data=="ACCESS_GRANTED"){

        localStorage.loggedin=data;
        $("#passmodal").hide();
        $("#fileModal").css("display","block");
        ifloggedin();
      }else {
          alert("Wrong Username password combination!");
      }

      },error:function (err) {

        console.error(err);
      }
    });
}

function logout() {
delete localStorage.loggedin;
ifloggedin();
}

function ifloggedin() {
if(localStorage.loggedin!=undefined){
$("#logoutbtn").show();
$("#loginbtn").hide();
}else {
$("#logoutbtn").hide();
$("#loginbtn").show();

}
}
ifloggedin();
// Modal Image Gallery
function onClick(element) {
document.getElementById("img01").src = element.src;
document.getElementById("modal01").style.display = "block";
}
$("#submitSrch").click(function (){
// document.getElementById('searchRes').innerHTML="";
// document.getElementsByClassName('searchRes').style.display='block';
$(".searchRes").show().delay(4000);

});
