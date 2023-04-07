const screenWidth = window.innerWidth;
console.log(screenWidth);
// let imageSize;
// if (screenWidth < 768) {
//   imageSize = { width: 340, height: 160 };
// } else if (screenWidth < 1440) {
//   imageSize = { width: 212, height: 212 };
// } else {
//   imageSize = { width: 276, height: 312 };
// }

const xhr = new XMLHttpRequest();
xhr.open('POST', '/resize');
xhr.setRequestHeader('Content-Type', 'application/json');
xhr.setRequestHeader('X-CSRF-TOKEN', document.querySelector('meta[name="csrf-token"]').getAttribute('content'));
xhr.send(JSON.stringify({screenWidth}));


