<seciton class="box-editar-usuario">
    <div class="box-painel">
        <div class="title flex align-center">
            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path d="M8.5 21H4C4 17.134 7.13401 14 11 14C11.1681 14 11.3348 14.0059 11.5 14.0176M15 7C15 9.20914 13.2091 11 11 11C8.79086 11 7 9.20914 7 7C7 4.79086 8.79086 3 11 3C13.2091 3 15 4.79086 15 7ZM12.5898 21L14.6148 20.595C14.7914 20.5597 14.8797 20.542 14.962 20.5097C15.0351 20.4811 15.1045 20.4439 15.1689 20.399C15.2414 20.3484 15.3051 20.2848 15.4324 20.1574L19.5898 16C20.1421 15.4477 20.1421 14.5523 19.5898 14C19.0376 13.4477 18.1421 13.4477 17.5898 14L13.4324 18.1574C13.3051 18.2848 13.2414 18.3484 13.1908 18.421C13.1459 18.4853 13.1088 18.5548 13.0801 18.6279C13.0478 18.7102 13.0302 18.7985 12.9948 18.975L12.5898 21Z" stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </g>
            </svg>
            <h2>
                Editar Usuário
            </h2>
        </div>

        <form method="post" enctype="multipart/form-data">
            <?php if (isset($_POST['acao'])) {
                Painel::alert('success', 'Atualizado com sucesso!', '');
                $name = $_POST['name'];
                $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
                $image = $_FILES['image'];
                $current_image = $_POST['current_image'];
                $user = new User();

                if ($image['name'] != '') {
                    if (Painel::validImage($image)) {
                        Painel::deleteFile($current_image);
                        $image = Painel::uploadFile($image);

                        if ($user->updateUser($name, $password, $image)) {
                            $_SESSION['image'] = $image;
                            Painel::alert('success', 'Atualizado com sucesso junto com a imagem!', '');
                        } else {
                            Painel::alert('error', 'Falha ao atualizar junto com a imagem, tente novamente!', '');
                        }
                    } else {
                        Painel::alert('error', 'O formato da imagem não é válido!', 'Tente imagens .jpg, .jpeg ou .png!');
                    }
                } else {
                    $image = $current_image;

                    if ($user->updateUser($name, $password, $image)) {
                        Painel::alert('success', 'Atualizado com sucesso!', '');
                    } else {
                        Painel::alert('error', 'Falha ao atualizar, tente novamente!', '');
                    }
                }
            } ?>
            <div class="form-group">
                <input type="text" name="name" placeholder="Nome" value="<?php echo $_SESSION['name']; ?>" />
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Senha" />
            </div>
            <div class="form-group">
                <input type="file" name="image" />
                <input type="hidden" name="current_image" value="<?php echo $_SESSION['image']; ?>">
            </div>
            <div class="form-group">
                <input class="fw-700" type="submit" name="acao" value="Atualizar" />
            </div>
        </form>
    </div>
</seciton>