// 利用者の声のスライドショー
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

// Dropdownでよくあるご質問の回答を表示
const q1Question = document.getElementById('q1-question');
const q1Answer = document.getElementById('q1-answer');
q1Question.addEventListener('click', () => {
  q1Answer.classList.toggle('open');
})