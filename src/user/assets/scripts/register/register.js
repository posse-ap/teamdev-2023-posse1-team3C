// 各入力項目の要素を取得
const lastName = document.getElementById('last-name');
const firstName = document.getElementById('first-name');
const lastNameKana = document.getElementById('last-name-kana');
const firstNameKana = document.getElementById('first-name-kana');
const sex = document.getElementById('sex');
const graduate = document.getElementById('graduate');
const university = document.getElementById('university');
const faculty = document.getElementById('faculty');
const department = document.getElementById('department');
const prefecture = document.getElementById('prefecture');
const phone = document.getElementById('phone');
const email = document.getElementById('email');
const remember = document.getElementById('remember');
// 送信ボタンの要素を取得
const submitButton = document.querySelector('.submit-button');
// 送信ボタンを活性化させる関数
const checkInput = () => {
  if(lastName.value !== '' && firstName.value !== '' && lastNameKana.value !== '' && firstNameKana.value !== '' && sex.value !== '' && graduate.value !== '' && university.value !== '' && faculty.value !== '' && department.value !== '' && prefecture.value !== '' && phone.value !== '' && email.value !== '' && remember.checked) {
    submitButton.disabled = false;
    // 送信ボタンをhoverしたら色が変わるように、クラスを付与する
    submitButton.classList.add('active');
  } else {
    submitButton.disabled = true;
  }
};
// 初期の状態で送信ボタンを非活性化させる
submitButton.disabled = true;
// 入力されたかをチェックする
lastName.addEventListener('input', checkInput);
firstName.addEventListener('input', checkInput);
lastNameKana.addEventListener('input', checkInput);
firstNameKana.addEventListener('input', checkInput);
sex.addEventListener('input', checkInput);
graduate.addEventListener('input', checkInput);
university.addEventListener('input', checkInput);
faculty.addEventListener('input', checkInput);
department.addEventListener('input', checkInput);
prefecture.addEventListener('input', checkInput);
phone.addEventListener('input', checkInput);
email.addEventListener('input', checkInput);
remember.addEventListener('change', checkInput);