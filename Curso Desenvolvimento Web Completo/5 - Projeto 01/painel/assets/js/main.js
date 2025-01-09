$(document).ready(function () {
    $(".painel header .menu").on("click", function () {
        $(this).toggleClass("active");
        $(".painel header").toggleClass("active");
        $(".painel .wrapper aside").toggleClass("active");
        $(".painel .wrapper aside .profile").toggleClass("active");
        $(".painel .wrapper main").toggleClass("active");
    });

    $("input[name='date']").mask("00/00/0000", {
        selectOnFocus: true,
        translation: {
            0: {
                pattern: /[0-9]/,
            },
        },
    });
});
