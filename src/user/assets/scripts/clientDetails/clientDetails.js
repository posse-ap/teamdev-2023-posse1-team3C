// 星をvalueの値に応じて出力
let counts = document.querySelectorAll('.list-star-value');
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
});
// サクセスストーリーのスライドショー
let mySwiper = new Swiper ('.swiper', {
  loop: true,
  pagination: {
    el: '.swiper-pagination',
    type: 'bullets',
    clickable: true,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});
// お気に入りボタンを押したら色が変わる、テキストが変更される
let favorite = document.querySelector('.favorite-btn');
let favoriteText = document.querySelector('.favorite-btn-text');
favorite.addEventListener('click', function() {
  if (favorite.classList.contains('active')) {
    favorite.classList.remove('active');
    favoriteText.textContent = 'お気に入りに追加';
  } else {
    favorite.classList.add('active');
    favoriteText.textContent = 'お気に入り済み';
  }
});