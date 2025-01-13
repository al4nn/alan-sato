<?php checkPermissionPage(1); ?>

<section class="box-painel cadastrar-depoimento">
    <div class="title flex align-center">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
                <path d="M11 12H3"></path>
                <path d="M16 6H3"></path>
                <path d="M16 18H3"></path>
                <path d="M18 9v6" stroke="#0f0"></path>
                <path d="M21 12h-6" stroke="#0f0"></path>
            </g>
        </svg>
        <h2>
            Cadastrar Depoimento
        </h2>
    </div>

    <form method="post" enctype="multipart/form-data">
        <?php if (isset($_POST['acao'])) {
            if (Painel::insert($_POST)) {
                Painel::alert('success', 'Depoimento cadastrado com sucesso!', '', '', '', '', '', '');
            } else {
                Painel::alert('error', 'Campos vázios não são permitidos!', 'Tente novamente!', '', '', '', '', '');
            }
        } ?>
        <input type="hidden" name="name_table" value="tb_site.depoimentos" />
        <div class="form-group">
            <input type="text" name="name" placeholder="Nome" required />
        </div>
        <div class="form-group">
            <textarea name="testimony" rows="4" placeholder="Depoimento" required></textarea>
        </div>
        <div class="form-group">
            <input type="text" name="date" placeholder="Data" required selectonfocus="true" />
        </div>
        <div class="form-group">
            <input class="fw-700" type="submit" name="acao" value="Cadastrar!" />
        </div>
    </form>
</section>