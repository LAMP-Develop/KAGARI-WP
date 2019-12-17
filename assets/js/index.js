// CSSインポート
import '../scss/style.scss';

// JSインポート
import '../vendor/font-awesome/js/all.min.js';
import 'bootstrap';

// ナビゲーションバーのドロップダウンをホバーで開く
// function toggleDropdown (e) {
//   const _d = $(e.target).closest('.dropdown'),
//     _m = $('.dropdown-menu', _d);
//   setTimeout(function(){
//     const shouldOpen = e.type !== 'click' && _d.is(':hover');
//     _m.toggleClass('show', shouldOpen);
//     _d.toggleClass('show', shouldOpen);
//     $('[data-toggle="dropdown"]', _d).attr('aria-expanded', shouldOpen);
//   }, e.type === 'mouseleave' ? 50 : 0);
// }
//
// $(function($) {
//   var w = $(window).outerWidh();
//   if (w > 425) {
//     $('.dropdown-menu a').on('mouseenter mouseleave', toggleDropdown);
//   } else {
//     $('.dropdown-menu a').on('click', toggleDropdown);
//   }
// });

const $dropdown = $(".dropdown");
const $dropdownToggle = $(".dropdown-toggle");
const $dropdownMenu = $(".dropdown-menu");
const showClass = "show";

$(window).on("load resize", function() {
  if (this.matchMedia("(min-width: 768px)").matches) {
    $dropdown.hover(
      function() {
        const $this = $(this);
        $this.addClass(showClass);
        $this.find($dropdownToggle).attr("aria-expanded", "true");
        $this.find($dropdownMenu).addClass(showClass);
      },
      function() {
        const $this = $(this);
        $this.removeClass(showClass);
        $this.find($dropdownToggle).attr("aria-expanded", "false");
        $this.find($dropdownMenu).removeClass(showClass);
      }
    );
  } else {
    $dropdown.off("mouseenter mouseleave");
  }
});
