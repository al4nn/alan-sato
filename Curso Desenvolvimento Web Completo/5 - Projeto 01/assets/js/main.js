$(document).ready(function () {
    const include_path = $("base").attr("base");

    $("main").on("load", function () {
        $('input[name="telefone"]').mask("(00) 00000-0000");
    });

    $("header .menu").on("click", function () {
        $(this).toggleClass("active");
        $("nav").toggleClass("active");

        $("header nav a").on("click", function () {
            $(this).removeClass("active");
            $("nav").removeClass("active");
        });
    });

    $(".painel .wrapper aside .menu").on("click", function () {
        $(this).toggleClass("active");
        $(".painel .wrapper aside").toggleClass("active");
    });

    if ($("target").length > 0) {
        let el = "#" + $("target").attr("target");
        let scrollTo = $(el).offset().top;
        $("html,body").animate({ scrollTop: scrollTo }, 600);
    }

    function carregarDinamico() {
        $("[realtime]").click(function () {
            let page = $(this).attr("realtime");
            $("main").hide();
            $("main").load(
                include_path + "/pages/" + page + ".php",
                function () {
                    $("main").fadeIn(1000);
                    $('input[name="telefone"]').mask("(00) 00000-0000");
                }
            );
            return false;
        });
    }

    carregarDinamico();

    $("body").on("submit", "form", function (e) {
        e.preventDefault();

        let form = $(this);
        let button = form.find("input:submit");
        button.val("Enviando...").prop("disabled", true);

        $.ajax({
            url: include_path + "ajax/forms.php",
            method: "post",
            dataType: "json",
            data: form.serialize(),
        }).done(function (data) {
            if (data.sucesso) {
                console.log("Sucesso!");
                button.val("Cadastrar!").prop("disabled", false);
                Swal.fire({
                    icon: "success",
                    title: "Enviado com sucesso!",
                });
                form.trigger("reset");
            } else {
                console.log("Erro!");
                Swal.fire({
                    icon: "error",
                    title: "Erro ao enviar, tente novamente!",
                });
                button.val("Cadastrar!").prop("disabled", false);
            }
        });

        return false;
    });
});
