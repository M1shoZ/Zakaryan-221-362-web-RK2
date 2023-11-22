function showProductDetails(productId) {
    window.location.href = 'product-details.php?productId=' + productId;
}
document.addEventListener('DOMContentLoaded', function () {
    showSlides(1); // Показываем первый слайд при загрузке страницы
});

let slideIndex = 0;

function showSlides(n) {
    let slides = document.getElementsByClassName("slide");
    let dots = document.getElementsByClassName("dot");

    if (n > slides.length) {
        slideIndex = 1;
    }

    if (n < 1) {
        slideIndex = slides.length;
    }

    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    for (let i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }

    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}

setInterval(function () {
    slideIndex++;
    if (slideIndex > document.getElementsByClassName("slide").length) {
        slideIndex = 1;
    }
    showSlides(slideIndex);
}, 5000); // Измените значение на 5000 мс (5 сек), если хотите изменить интервал смены слайдов
