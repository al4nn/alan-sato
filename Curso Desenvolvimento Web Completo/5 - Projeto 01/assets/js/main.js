$(document).ready(function () {
    $("header .menu").on("click", function () {
        $(this).toggleClass("active");
        $("nav").toggleClass("active");
    });
});
