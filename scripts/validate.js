function user_register() {
  //this function is being used with 'onsubmit' action with the form
  const error_div = document.getElementById("error");
  const password = document.getElementById("password");
  const re_password = document.getElementById("re-password");

  if (password.value == re_password.value) {
    // submit the form
    return true;
  } else {
    // send an alert to the user
    error_div.classList.add("show");
    error_div.classList.remove("hide");

    // Block submiting the form
    return false;
  }
}
