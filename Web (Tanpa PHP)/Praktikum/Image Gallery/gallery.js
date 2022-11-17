const container = document.querySelector('.container');
const imgPreview = document.querySelector('.img-preview');

container.addEventListener('click', function(e) {
    if(e.target.className == 'thumb') {
        imgPreview.src = e.target.src;
    }
});