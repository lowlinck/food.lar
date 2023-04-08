const screenWidth = window.innerWidth;
console.log(screenWidth);
const xhr = new XMLHttpRequest();
xhr.open('POST', '/resize');
xhr.setRequestHeader('Content-Type', 'application/json');
xhr.setRequestHeader('X-CSRF-TOKEN', document.querySelector('meta[name="csrf-token"]').getAttribute('content'));
xhr.send(JSON.stringify({screenWidth}));


