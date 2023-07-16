
function clientlogin(){
    let clientemail = $("#clientemail").val();
    let clientpass = $("#password").val();

    $.ajax({
        url:"client/clientlogininfo.php",
        method:'POST',
        data:{
            checklogin:"login",
            clientemail : clientemail,
            clientpass : clientpass,
        },
        success:function(data){
          console.log("enter")
            console.log(data);
            if (data == "connected0") {
                console.log(data);
                // $("#statuslogmsg").html(
                //   '<small class="alert alert-danger">Envalid Email ID or Password</small>'
                // );
                alert("email or password is wrong")

              } else if (data == "connected1") {
                console.log(data);
                // $("#statuslogmsg").html(
                //   '<small class="spinner-border text-success" role="status"></small>'
                // );
               
                  // window.location.href = "dashboard.html";
                  window.location.href = "./Login/index.html"
                // }, 1000);
              }
            // console.log(clientemail,clientpass)
        }
    })

    // event.preventDefault();
}