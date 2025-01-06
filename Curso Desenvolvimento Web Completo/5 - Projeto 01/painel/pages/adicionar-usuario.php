<?php checkPermissionPage(2); ?>

<seciton class="box-adicionar-usuario">
    <div class="box-painel">
        <div class="title flex align-center">
            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path d="M20 18L17 18M17 18L14 18M17 18V15M17 18V21M11 21H4C4 17.134 7.13401 14 11 14C11.695 14 12.3663 14.1013 13 14.2899M15 7C15 9.20914 13.2091 11 11 11C8.79086 11 7 9.20914 7 7C7 4.79086 8.79086 3 11 3C13.2091 3 15 4.79086 15 7Z" stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </g>
            </svg>
            <h2>
                Adicionar Usuário
            </h2>
        </div>

        <form method="post" enctype="multipart/form-data">
            <?php if (isset($_POST['acao'])) {
            } ?>
            <div class="form-group">
                <input type="text" name="username" placeholder="Usuário" required />
            </div>
            <div class="form-group">
                <input type="text" name="name" placeholder="Nome" required />
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Senha" required />
            </div>
            <div class="form-group">
                <input type="file" name="image" required />
            </div>
            <div class="form-group">
                <input class="fw-700" type="submit" name="acao" value="Adicionar" />
            </div>
        </form>
    </div>
</seciton>