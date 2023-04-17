// const screenWidth = window.innerWidth;
// console.log(screenWidth);
// const xhr = new XMLHttpRequest();
// xhr.open('POST', '/resize');
// xhr.setRequestHeader('Content-Type', 'application/json');
// xhr.setRequestHeader('X-CSRF-TOKEN', document.querySelector('meta[name="csrf-token"]').getAttribute('content'));
// xhr.send(JSON.stringify({screenWidth}));

window.addEventListener('resize', function() {
    const screenWidth = window.innerWidth;
    const xhr = new XMLHttpRequest();
    xhr.open('POST', '/resize');
    xhr.setRequestHeader('Content-Type', 'application/json');
    xhr.setRequestHeader('X-CSRF-TOKEN', document.querySelector('meta[name="csrf-token"]').getAttribute('content'));
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            console.log(xhr.responseText);
        }
    }
    xhr.send(JSON.stringify({screenWidth}));
});
