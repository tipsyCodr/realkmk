import "./bootstrap";
import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

// import Swiper bundle with all modules installed
import Swiper from "swiper/bundle";

// import styles bundle
import "swiper/css/bundle";

// init Swiper:
const testimoniesSwiper = new Swiper(".testimonies-swiper", {
    // direction: "horizontal",
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    loop: true,
    // dynamicBullets: true,
    centeredSlides: true,
    spaceBetween: 30,
    // If we need pagination
    pagination: {
        el: ".swiper-pagination",
    },

    // Navigation arrows
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    // And if we need scrollbar
    scrollbar: {
        el: ".swiper-scrollbar",
    },

    slidesPerView: 1.5,
    breakpoints: {
        640: {
            slidesPerView: 2,
        },
        768: {
            slidesPerView: 3,
        },
        1024: {
            slidesPerView: 4,
        },
    },
});

const swiper = new Swiper(".swiper", {
    // Optional parameters
    direction: "horizontal",
    slidesPerView: "auto",
    centeredSlides: true,
    spaceBetween: 30,
    // If we need pagination
    pagination: {
        el: ".swiper-pagination",
    },

    // Navigation arrows
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    // And if we need scrollbar
    scrollbar: {
        el: ".swiper-scrollbar",
    },
});

document.querySelectorAll(".loaderButton").forEach((element) => {
    element.addEventListener("click", (event) => {
        event.preventDefault(); // prevent default form submission
        if (!element.form.reportValidity()) {
            return;
        }
        const confirmed = confirm("Are you sure you want to proceed?");
        if (confirmed) {
            // add loader icon here
            const loader = document.createElement("i");
            loader.classList.add("fa", "fa-circle", "animate-ping", "p-1");

            element.appendChild(loader);
            // submit the form
            element.form.submit();
        }
    });
});
