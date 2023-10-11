<div>

    <?php $validation = \Config\Services::validation(); ?>

    <form action="<?php echo base_url(); ?>contato/cadastra_usuario" method="post">
        <div>
            <label>USUÁRIO: </label>
            <input type="text" name="usuario">
            <!-- VALIDAÇÃO DO CAMPO NOME -->
            <?php if ($validation->getError('usuario')) { ?>
                <div>
                    <?= $error = $validation->getError('usuario'); ?>
                </div>
            <?php } ?>
        </div>

        <div>
            <label>SENHA: </label>
            <input type="text" name="senha">
            <!-- VALIDAÇÃO DO CAMPO EMAIL -->
            <?php if ($validation->getError('senha')) { ?>
                <div>
                    <?= $error = $validation->getError('senha'); ?>
                </div>
            <?php } ?>
        </div>

        <div>
            <label>CONFIRME SUA SENHA: </label>
            <input type="text" name="confsenha">
            <!-- VALIDAÇÃO DO CAMPO TELEFONE -->
            <?php if ($validation->getError('confsenha')) { ?>
                <div>
                    <?= $error = $validation->getError('confsenha'); ?>
                </div>
            <?php } ?>
        </div>

    

        <div>
            <button type="submit"> SALVAR </button>
        </div>

    </form>

</div>