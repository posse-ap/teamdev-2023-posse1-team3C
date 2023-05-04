/*===========================================================*/
/* Ajax通信してサインアップする*/
/*===========================================================*/
const form = document.querySelector(".login form"),
continueBtn = form.querySelector('.button input'),
errorText = document.querySelector('.error-text');

form.onsubmit = (e)=>{
  e.preventDefault();
  // デフォルトの動作をキャンセル
}

continueBtn.onclick = ()=>{
  // Let's start Ajax
  let xhr = new XMLHttpRequest();
  xhr.open("POST","../assets/php/auth/pwChanges.php", true);
  // xhr.openでどんな方法で？どのサーバーに？を決める
  xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
      if(xhr.status === 200){
        let data = xhr.response;
        console.log(data);
        if(data.trim() === "success"){
          location.href = '../index.php';
        }else{
          errorText.textContent = data;
          errorText.style.display = 'block';
        }
        // signup.phpでechoで返している情報がコンソールで表示されている
      }
    }
  }
  // formのデータをajaxを通してphpに送らなきゃいけない
  let formData = new FormData(form);
  // forｍDataオプジェクトを作る
  xhr.send(formData);
}