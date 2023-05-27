/*===========================================================*/
/*パスワードの目隠し*/
/*===========================================================*/
const pswrdField = document.querySelectorAll(".form .field input[type='password']");
// .formの中の.fieldのinputのtype=がpasswordになってるやつ

function showPassword(togglebutton) {
  if (pswrdField.type == "password") {
    pswrdField.type = "text";
    togglebutton.classList.add("active");
  } else {
    pswrdField.type = "password";
    togglebutton.classList.remove("active");
  }
};

togglebuttonNow = document.querySelector(".form .fa-solid.fa-eye .toggle-password-now");
togglebuttonNow.addEventListener("click", function () {
  showPassword(togglebuttonNow);
} );

togglebuttonNew = document.querySelector(".form .fa-solid.fa-eye .toggle-password-new");
togglebuttonNew.addEventListener("click", function () {
  showPassword(togglebuttonNew);
} );

togglebuttonConfirm = document.querySelector(".form .fa-solid.fa-eye .toggle-password-confirm");
togglebuttonConfirm.addEventListener("click", function () {
  showPassword(togglebuttonConfirm);
} );