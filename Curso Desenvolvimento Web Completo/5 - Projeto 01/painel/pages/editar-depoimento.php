<?php
checkPermissionPage(1);

if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];

    $depoimento = Painel::select('tb_site.depoimentos', 'id = ?', array($id));
} else {
    Painel::alert('error', 'Você precisa passar o parâmetro ID!', '', '#2a1e47', 'Voltar!', false, false, INCLUDE_PATH_PAINEL . 'listar-depoimentos');

    die();
}

?>

<section class="box-painel">
    <div class="title flex align-center">
        <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" fill="none">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
                <path fill="#000" fill-rule="evenodd" d="M15.747 2.97a.864.864 0 011.177 1.265l-7.904 7.37-1.516.194.653-1.785 7.59-7.044zm2.639-1.366a2.864 2.864 0 00-4-.1L6.62 8.71a1 1 0 00-.26.39l-1.3 3.556a1 1 0 001.067 1.335l3.467-.445a1 1 0 00.555-.26l8.139-7.59a2.864 2.864 0 00.098-4.093zM3.1 3.007c0-.001 0-.003.002-.005A.013.013 0 013.106 3H8a1 1 0 100-2H3.108a2.009 2.009 0 00-2 2.19C1.256 4.814 1.5 7.848 1.5 10c0 2.153-.245 5.187-.391 6.81A2.009 2.009 0 003.108 19H17c1.103 0 2-.892 2-1.999V12a1 1 0 10-2 0v5H3.106l-.003-.002a.012.012 0 01-.002-.005v-.004c.146-1.62.399-4.735.399-6.989 0-2.254-.253-5.37-.4-6.99v-.003zM17 17c-.001 0 0 0 0 0zm0 0z"></path>
            </g>
        </svg>
        <h2>
            Editar Depoimento
        </h2>
    </div>

    <form method="post" enctype="multipart/form-data">
        <?php if (isset($_POST['acao'])) {
            if (Painel::update($_POST)) {
                Painel::alert('success', 'Depoimento atualizado com sucesso!', '', '', '', '', '', '');
                $depoimento = Painel::select('tb_site.depoimentos', 'id = ?', array($id));
            } else {
                Painel::alert('error', 'Falha ao atualizar!', 'Campos vázios não são permitidos!', '', '', '', '', '');
            }
        } ?>
        <input type="hidden" name="name_table" value="tb_site.depoimentos" />
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div class="form-group">
            <input type="text" name="name" placeholder="Nome" value="<?php echo $depoimento['name']; ?>" required />
        </div>
        <div class="form-group">
            <textarea name="testimony" rows="4" placeholder="Depoimento" required><?php echo $depoimento['testimony']; ?></textarea>
        </div>
        <div class="form-group">
            <input type="text" name="date" placeholder="Data" value="<?php echo $depoimento['date']; ?>" selectonfocus="true" />
        </div>
        <div class="form-group">
            <input class="fw-700" type="submit" name="acao" value="Atualizar!" />
        </div>
    </form>
</section>