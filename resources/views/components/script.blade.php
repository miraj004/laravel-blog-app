<script>
    const fileInput = document.querySelectorAll("[inputs='files'");
    const postImg = document.querySelector('#thumbnail');
    fileInput[0].addEventListener('change', (e) => {
        const file = e.target.files[0];
        let fileReader = new FileReader();
        fileReader.readAsDataURL(file);
        fileReader.onload = function () {
            if (window.location.href.indexOf("/register") != -1) {
                fileInput[0].setAttribute('style', 'background-image: url(' + fileReader.result + ')');
                fileInput[0].classList.remove('dark:mix-blend-overlay');

            } else {
                postImg.setAttribute('src', fileReader.result);
                postImg.classList.remove('dark:mix-blend-overlay');
            }
        }
    })
</script>
