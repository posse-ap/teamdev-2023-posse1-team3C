// モーダルを表示
const pop1 = document.querySelector('.pop-1');
const popArea1 = document.querySelector('.pop-area-1');
// トップページを開いたら、ポップ1ぺージ目を表示
window.addEventListener('load', () => {
  popArea1.style.opacity = '1';
});
// トップページを開いたとき(ポップ1ページ目)→(次へ)→ポップ2ページ目
const pop1NextBtn = document.querySelector('.pop-1-next-btn button');
const pop2 = document.querySelector('.pop-2');
pop1NextBtn.addEventListener('click', () => {
  pop1.classList.remove('active');
  pop2.classList.add('active');
});
// トップページを開いたとき(ポップ1ページ目)→(スキップする)→ポップを閉じる
const pop1SkipBtn = document.querySelector('.pop-1-skip-btn button');
pop1SkipBtn.addEventListener('click', () => {
  pop1.classList.remove('active');
});
// ポップ2ページ目→(次へ)→ポップ3ページ目
const pop2NextBtn = document.querySelector('.pop-2-next-btn button');
const pop3 = document.querySelector('.pop-3');
pop2NextBtn.addEventListener('click', () => {
  pop2.classList.remove('active');
  pop3.classList.add('active');
});
// ポップ2ページ目→(スキップする)→ポップを閉じる
const pop2SkipBtn = document.querySelector('.pop-2-skip-btn button');
pop2SkipBtn.addEventListener('click', () => {
  pop2.classList.remove('active');
});
// ポップ3ページ目→(エージェントを探す)→ポップを閉じる
const pop3btn = document.querySelector('.pop-3-btn button');
pop3btn.addEventListener('click', () => {
  pop3.classList.remove('active');
});
// 使い方はこちらをタップ→ポップ1ページ目を表示
const howToUseBtn = document.querySelector('.how-to-use-btn');
howToUseBtn.addEventListener('click', () => {
  pop1.classList.add('active');
});
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


// チェックを一個しかつけられないようにする(卒業年度)
$(function(){
  $('input[name="graduate"]').click(function(){
    var checked = $(this).prop('checked');
    $('input[name="graduate"]').prop('checked', false);
    // 選択肢の背景色を白にする
    $('input[name="graduate"]').parent().parent().css('background-color', '#fff');
    $(this).prop('checked', checked);
    if (checked) {
      $(this).parent().parent().css('background-color', '#D6EAF8');
    } else {
      $(this).parent().parent().css('background-color', '#fff');
    }
  });
});
// チェックを一個しかつけられないようにする(サポート形態)
$(function(){
  $('input[name="support"]').click(function(){
    var checked = $(this).prop('checked');
    $('input[name="support"]').prop('checked', false);
    // 選択肢の背景色を白にする
    $('input[name="support"]').parent().parent().css('background-color', '#fff');
    $(this).prop('checked', checked);
    if (checked) {
      $(this).parent().parent().css('background-color', '#D6EAF8');
    } else {
      $(this).parent().parent().css('background-color', '#fff');
    }
  });
});
// チェックを一個しかつけられないようにする(お住まいの地域)
$(function(){
  $('input[name="your-area"]').click(function(){
    var checked = $(this).prop('checked');
    $('input[name="your-area"]').prop('checked', false);
    // 選択肢の背景色を白にする
    $('input[name="your-area"]').parent().parent().css('background-color', '#fff');
    $(this).prop('checked', checked);
    if (checked) {
      $(this).parent().parent().css('background-color', '#D6EAF8');
    } else {
      $(this).parent().parent().css('background-color', '#fff');
    }
  });
});
// 卒業年度の選択肢のうちいずれかにチェックがついていることを判定する