let preview = document.querySelector('.preview')[0];
// preview = true;
let img = document.querySelector('img');
let photoInput = document.querySelector('#photoInput');

photoInput.addEventListener('change', function () {
    const file = this.files[0];
    if (file) {
        const reader = new FileReader();
        reader.addEventListener('load', function () {
            img.src = reader.result;
        })
    }
})