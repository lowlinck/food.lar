import $ from 'jquery';
import 'magnific-popup/dist/jquery.magnific-popup.js';

$('.link__right:nth-child(3)').magnificPopup({
  width: 561,
  height: 125,
    items: {
        src: '#search-form', // CSS selector of an element on page that should be used as a popup
        type: 'inline'
      },
      maxWidth: 561,
      maxHeight: 125,
      closeOnContentClick: false,
      closeOnBgClick: true,   
  });

// $(document).on('click', function(e) {
//   if (!$(e.target).closest('#search-form').length) {
//     $.magnificPopup.close();
//   }
// });