$(PageLoadedSuccessfully);

function PageLoadedSuccessfully() {
  $("#loginBtn").on("click", loginMe);
  $("#registerBtn").on("click", resigterMe);
}
function loginMe() {
  alert("btn clicked");
}
function resigterMe() {
  alert("btn clicked");

  let fullname = $("#fullname").val();
  let username = $("#username").val();
  let email = $("#email").val();
  let password = $("#password").val();
  let confirmPassword = $("#confirm-password").val();
  if (password !== confirmPassword) {
    alert("Passwords do not match!");
    return;
  }
  let user = {
    fullname: fullname,
    username: username,
    email: email,
    password: password,
  };
  $.post("./phpLibrary.php", user, function (registartionReply) {
    console.log(registartionReply);
  });
}
