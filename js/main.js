const hamburgerMenu = document.querySelector(".hamburger-button");
const navMenu = document.querySelector(".slide-menu");
hamburgerMenu.addEventListener("click", () => {
  hamburgerMenu.classList.toggle("active");
  navMenu.classList.toggle("active");
});


// スムーススクロール
document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
  anchor.addEventListener("click", function (event) {
    event.preventDefault();
    let speed = 300;
    let href = anchor.getAttribute("href");
    let target =
      href === "#" || href === ""
        ? document.documentElement
        : document.querySelector(href);
    var position = target.offsetTop;
    window.scrollTo({
      top: position,
      behavior: "smooth",
    });
    return false;
  });
});

const elementToToggle = document.getElementById('elementToToggle');
const contact = document.getElementById('contact');

// // スクロール時のイベントリスナーを追加
// window.addEventListener('scroll', () => {
//   // 要素の位置とサイズを取得
//   const elementRect = elementToToggle.getBoundingClientRect();
//   const contactRect = contact.getBoundingClientRect();

//   // 要素がフッターに近づいたら非表示にする
//   if (elementRect.bottom > contactRect.top) {
//     elementToToggle.style.transition = "opacity 0.5s";
//     elementToToggle.style.opacity = 0; // フェードアウト
//   } else {
//     elementToToggle.style.transition = "opacity 0.5s";
//     elementToToggle.style.opacity = 1; // フェードイン
//   }
// });
// フェードイン
// スクロールイベント
window.addEventListener('scroll', function(){
  //すべての.fadeを取得
  const fade = document.querySelectorAll('.fade');

  for(let i = 0; i < fade.length; i++){
    //fadeの高さ取得
    var targetTop = fade[i].offsetTop;

    //画面のスクロール量 + 300px > .fadeのoffsetの高さ
    if(window.scrollY + 300 > targetTop){
      fade[i].classList.add('show');
    }
  }
});
let swipeOption = {
  loop: true,
  effect: 'fade',
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
  speed: 2000,
}
// new Swiper('.swiper-container', swipeOption); 

let fadeInTarget = document.querySelectorAll('.fade-in');
window.addEventListener('scroll', () => {
  for (let i = 0; i < fadeInTarget.length; i++){
    const rect = fadeInTarget[i].getBoundingClientRect().top;
    const scroll = window.pageYOffset || document.documentElement.scrollTop;
    const offset = rect + scroll;
    const windowHeight = window.innerHeight; // 現在のブラウザの高さ
    if (scroll > offset - windowHeight + 150) {
      fadeInTarget[i].classList.add('scroll-in');
    }
  }
});


//モーダル
//モーダルオープン .list div を格納
const modalOpen = document.querySelectorAll('.list div');

//モーダルをforEachで取得し、コールバック関数の引数をbuttonに設定
modalOpen.forEach(function(button){

  //buttonをクリックしたとき
  button.onclick = function(){

    //data-modalの値を取得
    var modal = button.getAttribute('data-modal');

    //data-modalの値と同じIDのモーダルを表示
    document.getElementById(modal).style.display = "block";
  }
});

// モーダルクローズ
//.closeを変数に格納
const modalClose = document.querySelectorAll('.close');

//.closeをforEachで取得し、コールバック関数の引数をbuttonに設定
modalClose.forEach(function(button){

  //closeをクリックしたとき
  button.onclick = function(){

    //祖先の要素.modalを取得
    var modal = button.closest('.modal');

    // モーダルを非表示
    modal.style.display = "none";
  }
});
// フェードイン
//スクロールイベント
window.addEventListener('scroll', function(){
  //すべての.fadeを取得
  const fade = document.querySelectorAll('.fade');

  for(let i = 0; i < fade.length; i++){
    //fadeの高さ取得
    var targetTop = fade[i].offsetTop;

    //画面のスクロール量 + 300px > .fadeのoffsetの高さ
    if(window.scrollY + 300 > targetTop){
      fade[i].classList.add('show');
    }
  }
});

var swiper = new Swiper(".mySwiper", {
  spaceBetween: 30,
  centeredSlides: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

// $(function () {
//   $(".test-slick").slick({
//       autoplay: true,
//       autoplaySpeed: 0,
//       speed: 5000,
//       cssEase: 'linear',
//       slidesToShow: 3,
//       swipe: false,
//       pauseOnFocus: false, 
//       pauseOnHover: false,
//       arrows: false,
//   });
// });




$(function () {
  $(".js-slick01").slick({
      autoplay: true,
      autoplaySpeed: 0,
      speed: 5000,
      cssEase: 'linear',
      slidesToShow: 3,
      swipe: false,
      pauseOnFocus: true, 
      pauseOnHover:true,
      arrows: false,
  });
});
$(function () {
  $(".js-slick02").slick({
      autoplay: true,
      autoplaySpeed: 0,
      speed: 5000,
      cssEase: 'linear',
      slidesToShow: 3,
      swipe: false,
      pauseOnFocus: false, 
      pauseOnHover: false,
      arrows: false,
      rtl: true,
  });
});
// $(function () {
//   $(".test-slick").slick({
//       autoplay: true,
//       autoplaySpeed: 0,
//       speed: 5000,
//       cssEase: 'linear',
//       slidesToShow: 3,
//       swipe: false,
//       pauseOnFocus: false, 
//       pauseOnHover: false,
//       arrows: false,
//   });
// });
// ページの読み込み完了時にローディング画面をフェードアウト
$(window).on("load", function () {
  $(".js-loader").delay(800).fadeOut(600); // 画像をフェードアウト
  $(".js-loader-bg").delay(1300).fadeOut(600); // 背景色をフェードアウト
});
// ページの読み込みが完了しなくても5秒経ったら強制的にローディング画面をフェードアウト
setTimeout("stoploading()", 5000);
function stoploading() {
  $(".js-loader-bg").fadeOut(600);
}





//基準点の準備
var elemTop = [];

//現在地を取得するための設定を関数でまとめる
function PositionCheck(){
    //headerの高さを取得
  var headerH = $("#header").outerHeight(true);
    //.scroll-pointというクラス名がついたエリアの位置を取得する設定
  $(".scroll-point").each(function(i) {//.scroll-pointクラスがついたエリアからトップまでの距離を計算して設定
    elemTop[i] =Math.round(parseInt($(this).offset().top-headerH));//追従するheader分の高さ（70px）を引き小数点を四捨五入
  });
}

//ナビゲーションに現在地のクラスをつけるための設定
function ScrollAnime() {//スクロールした際のナビゲーションの関数にまとめる
  var scroll = Math.round($(window).scrollTop());
  var NavElem = $("#header-nav li");//ナビゲーションのliの何番目かを定義するための準備
  $("#header-nav li").removeClass('current');//全てのナビゲーションの現在地クラスを除去
  if(scroll >= 0 && scroll < elemTop[1]) {//スクロール値が0以上 .scroll-point 1つめ（area-1）の高さ未満
      $(NavElem[0]).addClass('current');//1つめのliに現在地クラスを付与
    }
  else if(scroll >= elemTop[1] && scroll < elemTop[2]) {//.scroll-point 1つめ（area-1）以上.scroll-point 2つめ（area-2）未満
     $(NavElem[1]).addClass('current');//2つめのliに現在地クラスを付与
    } 
    else if(scroll >= elemTop[2] && scroll < elemTop[3]) {//.scroll-point 2つめ（area-2）以上.scroll-point 3つめ（area-3）未満
     $(NavElem[2]).addClass('current');//3つめのliに現在地クラスを付与
    } 
    else if(scroll >= elemTop[3]) {// .scroll-point 3つめ（area-3）以上
      $(NavElem[3]).addClass('current');//4つめのliに現在地クラスを付与
    } 
}

//ナビゲーションをクリックした際のスムーススクロール
$('#header-nav a').click(function () {
  var elmHash = $(this).attr('href'); //hrefの内容を取得
  var headerH = $("#header").outerHeight(true);//追従するheader分の高さ（70px）を引く
  var pos = Math.round($(elmHash).offset().top-headerH);  //headerの高さを引き小数点を四捨五入
  $('body,html').animate({scrollTop: pos}, 500);//取得した位置にスクロール※数値が大きいほどゆっくりスクロール
  return false;//リンクの無効化
});


// 画面をスクロールをしたら動かしたい場合の記述
$(window).scroll(function () {
  PositionCheck();/* 現在地を取得する関数を呼ぶ*/
  ScrollAnime();/* ナビゲーションに現在地のクラスをつけるための関数を呼ぶ*/
});

// ページが読み込まれたらすぐに動かしたい場合の記述
$(window).on('load', function () {
  PositionCheck();/* 現在地を取得する関数を呼ぶ*/
  ScrollAnime();/* ナビゲーションに現在地のクラスをつけるための関数を呼ぶ*/
});

$(window).resize(function() {
  //リサイズされたときの処理
  PositionCheck()
});