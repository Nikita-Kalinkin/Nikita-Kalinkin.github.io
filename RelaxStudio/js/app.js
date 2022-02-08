$(function () {

    /*Fixed Header*/
    let header = $("#header"); /*id header*/
    let main = $("#main"); /*id main*/
    let mainH = main.innerHeight(); /*высота main*/


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
    });

    $(document).click(function () {
        nav.removeClass('burger_show');

    });


    navtel.on("click", function (event) {
        event.preventDefault();

        navcontact.toggleClass("contact_show");
    });

    /* Accordion
      ==================*/


    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function () {
            /* Toggle between adding and removing the "active" class,
            to highlight the button that controls the panel */
            this.classList.toggle("active");

            /* Toggle between hiding and showing the active panel */
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        });
    }

});


function initMap() {
    var uluru = { lat: -25.363, lng: 131.044 };
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 4,
        center: uluru
    });
    var marker = new google.maps.Marker({
        position: uluru,
        map: map
    });
}