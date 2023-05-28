function showPassword(togglebutton , pswrdField) {
  if (pswrdField.type == "password") {
    pswrdField.type = "text";
    togglebutton.classList.add("active");
  } else {
    pswrdField.type = "password";
    togglebutton.classList.remove("active");
  }
};

let togglebutton = document.querySelector('.fa-solid.fa-eye');
const password = document.querySelector('input[type="password"]');
togglebutton.addEventListener("click", function () {
  showPassword(togglebutton, password);
} );