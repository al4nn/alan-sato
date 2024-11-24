$(document).ready(function () {
    const include_path = $("base").attr("base");

    $("header .menu").on("click", function () {
        $(this).toggleClass("active");
        $("nav").toggleClass("active");

        $("header nav a").on("click", function () {
            $(this).removeClass("active");
            $("nav").removeClass("active");
        });
    });

    if ($("target").length > 0) {
        let el = "#" + $("target").attr("target");
        let scrollTo = $(el).offset().top;
        $("html,body").animate({ scrollTop: scrollTo }, 600);
    }

    var SPMaskBehavior = function (val) {
            return val.replace(/\D/g, "").length === 11
                ? "(00) 00000-0000"
                : "(00) 0000-00009";
        },
        spOptions = {
            onKeyPress: function (val, e, field, options) {
                field.mask(SPMaskBehavior.apply({}, arguments), options);
            },
        };

    $("input[name=telefone]").mask(SPMaskBehavior, spOptions);

    function carregarDinamico() {
        $("[realtime]").click(function () {
            let page = $(this).attr("realtime");
            $("main").hide();
            $("main").load(include_path + "/pages/" + page + ".php");
            $("main").fadeIn(1000);
            return false;
        });
    }

    carregarDinamico();
});
