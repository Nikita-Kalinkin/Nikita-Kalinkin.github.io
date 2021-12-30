$(function () {
    let scrollPos = $(window).scrollTop(); /*scroll*/
    let nav = $("#nav"); /*id для выпадающего списка меню*/
    let navToggle = $("#navToggle"); /*id burger при нажатии выпадает список*/

    /*Smooth scroll*/
    $("[data-scroll]").on("click", function (event) {
        event.preventDefault();

        let elementId = $(this).data('scroll');
        let elementOffset = $(elementId).offset().top;


        $("html, body").animate({
            scrollTop: elementOffset
        }, 1000);
    });

    /* Mobile nav выпадающий список burger
     ==================*/

    navToggle.on("click", function () {

        nav.toggleClass("burger_show");

    });

});

// Form
jQuery(document).ready(function () {
    jQuery("form").submit(function () { // Событие отправки с формы
        var form_data = jQuery(this).serialize(); // Собираем данные из полей
        jQuery.ajax({
            type: "POST", // Метод отправки
            url: "send.php", // Путь к PHP обработчику send.php
            data: form_data,
            success: swal({
                title: "Спасибо за заявку!",
                type: "success",
                showConfirmButton: false,
                timer: 2000

            }),

        });
        $(this).find('input, select, button').prop('disabled', true);
        event.preventDefault();
        $(this).find("input, select").val("");

    });
});



; (function () {
    var throttle = function (type, name, obj) {
        var obj = obj || window;
        var running = false;
        var func = function () {
            if (running) { return; }
            running = true;
            requestAnimationFrame(function () {
                obj.dispatchEvent(new CustomEvent(name));
                running = false;
            });
        };
        obj.addEventListener(type, func);
    };
    throttle("scroll", "optimizedScroll");
})();



(function () {
    var throttle = function (type, name, obj) {
        var obj = obj || window;
        var running = false;
        var func = function () {
            if (running) { return; }
            running = true;
            requestAnimationFrame(function () {
                obj.dispatchEvent(new CustomEvent(name));
                running = false;
            });
        };
        obj.addEventListener(type, func);
    };
    throttle("scroll", "optimizedScroll");
})();
var smallgear = document.getElementById("smallgear"),
    biggear = document.getElementById("biggear");

window.addEventListener("optimizedScroll", function () {
    smallgear.style.transform = "rotate(" + window.pageYOffset + "deg)";
    biggear.style.transform = "rotate(-" + window.pageYOffset + "deg)";
});