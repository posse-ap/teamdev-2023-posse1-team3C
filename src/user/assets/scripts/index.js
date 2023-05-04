// モーダルを表示

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
// Q1
const q1Question = document.getElementById('q1-question');
const q1Answer = document.getElementById('q1-answer');
q1Question.addEventListener('click', () => {
  q1Question.classList.toggle('active');
  q1Answer.classList.toggle('active');
})
// Q2
const q2Question = document.getElementById('q2-question');
const q2Answer = document.getElementById('q2-answer');
q2Question.addEventListener('click', () => {
  q2Question.classList.toggle('active');
  q2Answer.classList.toggle('active');
})
// Q3
const q3Question = document.getElementById('q3-question');
const q3Answer = document.getElementById('q3-answer');
q3Question.addEventListener('click', () => {
  q3Question.classList.toggle('active');
  q3Answer.classList.toggle('active');
})