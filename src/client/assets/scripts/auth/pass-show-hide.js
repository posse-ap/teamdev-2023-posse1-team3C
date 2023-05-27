/*===========================================================*/
/*パスワードの目隠し*/
/*===========================================================*/
// const pswrdField = document.querySelectorAll(".form .field input[type='password']");
// .formの中の.fieldのinputのtype=がpasswordになってるやつ

function showPassword(togglebutton , pswrdField) {
  if (pswrdField.type == "password") {
    pswrdField.type = "text";
    togglebutton.classList.add("active");
  } else {
    pswrdField.type = "password";
    togglebutton.classList.remove("active");
  }
};

togglebuttonNow = document.querySelector(".toggle-password-now");
nowPassword = document.querySelector(".nowPassword");
togglebuttonNow.addEventListener("click", function () {
  showPassword(togglebuttonNow, nowPassword);
} );

togglebuttonNew = document.querySelector(".toggle-password-new");
newPassword = document.querySelector(".newPassword");
togglebuttonNew.addEventListener("click", function () {
  showPassword(togglebuttonNew, newPassword);
} );

togglebuttonConfirm = document.querySelector(".toggle-password-confirm");
confirmPassword = document.querySelector(".confirmPassword");
togglebuttonConfirm.addEventListener("click", function () {
  showPassword(togglebuttonConfirm, confirmPassword);
} );