/*===========================================================*/
/*パスワードの目隠し*/
/*===========================================================*/
const pswrdField = document.querySelector(".form .field input[type='password']"),
togglebutton = document.querySelectorAll(".form .fa-solid.fa-eye")
// .formの中の.fieldのinputのtype=がpasswordになってるやつ

togglebutton.onclick = ()=>{
  if (pswrdField.type == "password"){
    pswrdField.type = "text";
    togglebutton.classList.add("active");
  }else{
    pswrdField.type = "password";
    togglebutton.classList.remove("active");
  }
}
