
window.addEventListener("load", (event) => {

    const swiperWork = new Swiper('.swiper-work', {
        slidesPerView: 4,
        spaceBetween: 55,
        loop: true,
        speed: 5000,
        autoplay: {
            delay: 0
        }
    });

    const swiperClients = new Swiper('.clients-logo-swiper', {
        slidesPerView: 1,
        spaceBetween: 55,
        speed: 800,
        navigation: {
            nextEl: '.swiper-button-next-logo',
            prevEl: '.swiper-button-prev-logo',
        },
    });
});


const chooseFile = document.getElementById("choose-file");
const imgPreview = document.getElementById("img-preview");

chooseFile.addEventListener("change", function () {
    getImgData();
});

function getImgData() {
    const files = chooseFile.files[0];
    if (files) {
        const fileReader = new FileReader();
        fileReader.readAsDataURL(files);
        // fileReader.addEventListener("load", function () {
        //     imgPreview.style.display = "block";
        // });
    }
}   