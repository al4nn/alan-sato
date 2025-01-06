$(document).ready(function () {
    $(".painel header .menu").on("click", function () {
        $(this).toggleClass("active");
        $(".painel header").toggleClass("active");
        $(".painel .wrapper aside").toggleClass("active");
        $(".painel .wrapper aside .profile").toggleClass("active");
        $(".painel .wrapper main").toggleClass("active");
    });
});
