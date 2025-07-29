document.addEventListener('DOMContentLoaded', function () {
    const imageInput = document.getElementById('course-image');
    const imagePreview = document.getElementById('image-preview');

    if (imageInput && imagePreview) {
        imageInput.addEventListener('change', function () {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    imagePreview.innerHTML = '';
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.style.width = '100%';
                    img.style.height = '100%';
                    img.style.objectFit = 'cover';
                    imagePreview.appendChild(img);
                }
                reader.readAsDataURL(file);
            }
        });
    }
});