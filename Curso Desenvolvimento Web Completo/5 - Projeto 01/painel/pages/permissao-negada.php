<section class="box-permissao-negada">
    <?php Painel::alert('error', 'Você não tem permissão para acessar essa página!', '', '#2a1e47', 'Voltar para Home!', false, false, INCLUDE_PATH_PAINEL); ?>
</section>

<script src="<?php echo INCLUDE_PATH_PAINEL; ?>assets/libs/sweetalert2.js"></script>