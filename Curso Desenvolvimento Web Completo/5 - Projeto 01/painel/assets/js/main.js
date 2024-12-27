$(document).ready(function () {
    $(".painel header .menu").on("click", function () {
        $(".painel header").toggleClass("active");
        $(".painel .wrapper aside").toggleClass("active");
        $(".painel .wrapper aside .profile").toggleClass("active");
        $(".painel .wrapper main").toggleClass("active");
    });
});
