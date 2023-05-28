document.addEventListener("DOMContentLoaded", function () {
  const checkboxes_list = document.querySelectorAll(
    '#clientlist-name input[type="checkbox"]'
  );
  const submitButton = document.getElementById("submit-button");

  // チェックボックスの状態が変更された時の処理
  function handleCheckboxChange() {
    // 選択されたチェックボックスの数をカウント
    const checkedCount = Array.from(checkboxes_list).filter(
      (checkbox) => checkbox.checked
    ).length;

    // ボタンの状態を変更
    if (checkedCount > 0) {
      submitButton.disabled = false; // ボタンを活性化
    } else {
      submitButton.disabled = true; // ボタンを非活性化
    }
  }

  // チェックボックスの状態変更イベントを監視
  checkboxes_list.forEach((checkbox) => {
    checkbox.addEventListener("change", handleCheckboxChange);
  });

  // ページ読み込み時にボタンを非アクティブ化
  handleCheckboxChange();
});
