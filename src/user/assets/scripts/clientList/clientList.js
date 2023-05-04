
let counts = document.querySelectorAll('.list-star-value')
counts.forEach(count => {
  let cnt = count.getAttribute("value");
  console.log(cnt);
  let new_element = '';
  for (let i = 0; i < 5; i++) {
      if (i < cnt) {
        new_element += '<i class="fas fa-star"></i>'; // 実装に合わせて、適切なクラス名やアイコンを指定する
      }
  }
  console.log(new_element)
  count.innerHTML = new_element;
})