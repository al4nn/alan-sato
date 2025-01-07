<section class="box-permissao-negada">
    <?php Painel::alertPermissionDenied("window.location.href = '" . INCLUDE_PATH_PAINEL . "';"); ?>
</section>

<script src="<?php echo INCLUDE_PATH_PAINEL; ?>assets/libs/sweetalert2.js"></script>