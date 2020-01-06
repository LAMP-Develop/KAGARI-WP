// CSSインポート
import '../scss/style.scss';

// JSインポート
import '../vendor/font-awesome/js/all.min.js';
import 'bootstrap';

const $dropdown = $(".dropdown");
const $dropdownToggle = $(".dropdown-toggle");
const $dropdownMenu = $(".dropdown-menu");
const showClass = "show";

// ドロップダウン
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

$(function($) {
  // CF7
  $('button.form-btn').on('click', function() {
    let name = $(this).attr('data-name');
    $('#document-form input#document-name').val(name);
  });

  let wpcf7Elm = document.querySelector('.wpcf7');
  if (wpcf7Elm != null) {
    wpcf7Elm.addEventListener('wpcf7mailsent', function(event) {
      let inputs = event.detail.inputs;
      for (let i = 0; i < inputs.length; i++) {
        if ('document' == inputs[i].name) {
          console.log(inputs[i].value);
          break;
        }
      }
    }, false);
  }
});