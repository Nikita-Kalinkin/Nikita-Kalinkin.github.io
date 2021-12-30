$(function () {

    let scrollPos = $(window).scrollTop(); /*scroll*/
    let nav = $("#nav"); /*id для выпадающего списка меню*/
    let navToggle = $("#navToggle"); /*id burger при нажатии выпадает список*/
    let navcontact = $("#navcontact"); /*id для выпадающего списка контакта*/
    let navtel = $("#navtel"); /*id contact при нажатии выпадает список контакта*/


    /*Smooth scroll*/
    $("[data-scroll]").on("click", function (event) {
        event.preventDefault();

        let elementId = $(this).data('scroll');
        let elementOffset = $(elementId).offset().top;


        $("html, body").animate({
            scrollTop: elementOffset
        }, 700);
    });

    /* Mobile nav выпадающий список burger и contact
     ==================*/



    navToggle.on("click", function (event) {
        event.stopPropagation();
        nav.toggleClass("burger_show");
        navcontact.removeClass('contact_show');
    });
    $(document).click(function () {
        nav.removeClass('burger_show');

    });

    navtel.on("click", function (event) {
        event.stopPropagation();
        navcontact.toggleClass("contact_show");
        nav.removeClass('burger_show');

    });
    $(document).click(function () {
        navcontact.removeClass('contact_show');
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
            })
        });
        $(this).find('input, textarea').prop('disabled', true);
        event.preventDefault();
        $(this).find("input, select").val("");
    });
});


/* Modal переделать под себя
=====================*/

const modalCall = $("[data-modal]");
const modalClose = $("[data-close]");

modalCall.on("click", function (event) {
    event.preventDefault();

    let $this = $(this);
    let modalId = $this.data('modal');

    $(modalId).addClass('show');
    $("body").addClass('no-scroll');

    setTimeout(function () {
        $(modalId).find(".modal__dialog").css({
            transform: "scale(1)"
        });
    }, 200);

    worksSlider.slick('setPosition');
});


modalClose.on("click", function (event) {
    event.preventDefault();

    let $this = $(this);
    let modalParent = $this.parents('.modal');

    modalParent.find(".modal__dialog").css({
        transform: "scale(0)"
    });

    setTimeout(function () {
        modalParent.removeClass('show');
        $("body").removeClass('no-scroll');
    }, 200);
});


$(".modal").on("click", function (event) {
    let $this = $(this);

    $this.find(".modal__dialog").css({
        transform: "scale(0)"
    });

    setTimeout(function () {
        $this.removeClass('show');
        $("body").removeClass('no-scroll');
    }, 200);
});

$(".modal__dialog").on("click", function (event) {
    event.stopPropagation();
});