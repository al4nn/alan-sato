<?php
$currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$perPage = 25;

$depoimentos = Painel::selectAll('tb_site.depoimentos', ($currentPage - 1) * $perPage, $perPage);

if (isset($_GET['delete'])) {
    $idDelete = intval($_GET['delete']);

    Painel::delete('tb_site.depoimentos', $idDelete);
    Painel::redirect(INCLUDE_PATH_PAINEL . 'listar-depoimentos');
}

?>

<section class="box-painel listar-depoimentos">
    <div class="title flex align-center">
        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
                <path d="M14 16L16.1 18.5L20 13.5" stroke="#0f0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M10 14H3" stroke="#000" stroke-width="1.5" stroke-linecap="round"></path>
                <path d="M10 18H3" stroke="#000" stroke-width="1.5" stroke-linecap="round"></path>
                <path d="M3 6L13.5 6M20 6L17.75 6" stroke="#000" stroke-width="1.5" stroke-linecap="round"></path>
                <path d="M20 10L9.5 10M3 10H5.25" stroke="#000" stroke-width="1.5" stroke-linecap="round"></path>
            </g>
        </svg>
        <h2>
            Depoimentos Cadastrados
        </h2>
    </div>

    <div class="wrapper-table">
        <table border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td class="fw-700">
                    Nome
                </td>
                <td class="fw-700">
                    Data
                </td>
                <td class="fw-700">
                    #
                </td>
                <td class="fw-700">
                    #
                </td>
            </tr>
            <?php foreach ($depoimentos as $depoimento) : ?>
                <tr>
                    <td>
                        <?php echo $depoimento['name']; ?>
                    </td>
                    <td>
                        <?php echo $depoimento['date']; ?>
                    </td>
                    <td>
                        <a class="flex align-center justify-center no-decoration text-black btn-edit" href="<?php echo INCLUDE_PATH_PAINEL; ?>editar-depoimento?id=<?php echo $depoimento['id']; ?>">
                            <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" fill="none">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path fill="#00f" fill-rule="evenodd" d="M15.747 2.97a.864.864 0 011.177 1.265l-7.904 7.37-1.516.194.653-1.785 7.59-7.044zm2.639-1.366a2.864 2.864 0 00-4-.1L6.62 8.71a1 1 0 00-.26.39l-1.3 3.556a1 1 0 001.067 1.335l3.467-.445a1 1 0 00.555-.26l8.139-7.59a2.864 2.864 0 00.098-4.093zM3.1 3.007c0-.001 0-.003.002-.005A.013.013 0 013.106 3H8a1 1 0 100-2H3.108a2.009 2.009 0 00-2 2.19C1.256 4.814 1.5 7.848 1.5 10c0 2.153-.245 5.187-.391 6.81A2.009 2.009 0 003.108 19H17c1.103 0 2-.892 2-1.999V12a1 1 0 10-2 0v5H3.106l-.003-.002a.012.012 0 01-.002-.005v-.004c.146-1.62.399-4.735.399-6.989 0-2.254-.253-5.37-.4-6.99v-.003zM17 17c-.001 0 0 0 0 0zm0 0z"></path>
                                </g>
                            </svg>
                            <p>
                                Editar
                            </p>
                        </a>
                    </td>
                    <td>
                        <a actionBtn="delete" class="flex align-center justify-center no-decoration text-black btn-delete" href="javascript:void(0);" onclick="confirmDelete(<?php echo $depoimento['id']; ?>)">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path d="M18 6L17.1991 18.0129C17.129 19.065 17.0939 19.5911 16.8667 19.99C16.6666 20.3412 16.3648 20.6235 16.0011 20.7998C15.588 21 15.0607 21 14.0062 21H9.99377C8.93927 21 8.41202 21 7.99889 20.7998C7.63517 20.6235 7.33339 20.3412 7.13332 19.99C6.90607 19.5911 6.871 19.065 6.80086 18.0129L6 6M4 6H20M16 6L15.7294 5.18807C15.4671 4.40125 15.3359 4.00784 15.0927 3.71698C14.8779 3.46013 14.6021 3.26132 14.2905 3.13878C13.9376 3 13.523 3 12.6936 3H11.3064C10.477 3 10.0624 3 9.70951 3.13878C9.39792 3.26132 9.12208 3.46013 8.90729 3.71698C8.66405 4.00784 8.53292 4.40125 8.27064 5.18807L8 6M14 10V17M10 10V17" stroke="#f00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </g>
                            </svg>
                            <p>
                                Excluir
                            </p>
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>

    <div class="pagination flex align-center justify-center">
        <?php
        $totalPages = ceil(count(Painel::selectAll('tb_site.depoimentos')) / $perPage);

        for ($i = 1; $i <= $totalPages; $i++) :
            if ($i == $currentPage) :
        ?>
                <a class="text-black no-decoration text-center active" href="<?php echo INCLUDE_PATH_PAINEL . '/listar-depoimentos?page=' . $i; ?>">
                    <?php echo $i ?>
                </a>
            <?php else : ?>
                <a class="text-black no-decoration text-center" href="<?php echo INCLUDE_PATH_PAINEL . '/listar-depoimentos?page=' . $i; ?>">
                    <?php echo $i ?>
                </a>
            <?php endif; ?>
        <?php endfor; ?>
    </div>
</section>

<script>
    function confirmDelete(id) {
        Swal.fire({
            title: "Você tem certeza?",
            text: "Essa ação não pode ser desfeita!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#006bd4",
            cancelButtonColor: "#f00",
            confirmButtonText: "Sim, deletar!",
            cancelButtonText: "Cancelar",
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = `listar-depoimentos?delete=${id}`;
            }
        });
    }
</script>