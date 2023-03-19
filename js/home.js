
window.addEventListener("load", (event) => {

    const swiperWork = new Swiper('.swiper-work', {
        slidesPerView: 1,
        spaceBetween: 16,
        loop: true,
        speed: 5000,
        autoplay: {
            delay: 0
        },
        breakpoints: {
            1801: {
                slidesPerView: 3.6,
                spaceBetween: 55,
            },
            1680: {
                slidesPerView: 3.4,
                spaceBetween: 50,
            },
            1540: {
                slidesPerView: 3,
                spaceBetween: 40,
            },
            1024: {
                slidesPerView: 2.5,
                spaceBetween: 30,
            },
            990: {
                slidesPerView: 2.2,
                spaceBetween: 25,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            576: {
                slidesPerView: 1.5,
                spaceBetween: 20,
            },
            481: {
                slidesPerView: 1.3,
                spaceBetween: 20,
            },
            391: {
                slidesPerView: 1.1,
                spaceBetween: 20,
            }
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