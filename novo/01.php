<?php include_once 'cabecalho.php'; ?>

    <h2 align="center" style="color:">Paciente</h2>

    <div class="row">
        <div class="col s10 offset-s1">
            <div class="card">
                <div class="card-content">
                    <h4>Dados Pessoais:</h4>
                    <form action="pagina.php" method="post">
                        <div class="row">
                            <div class="input-field col s5 ">
                                <input type="text" class="validate" name="nome" id="nome" required>
                                <label for="nome">*Identificador de Paciente:</label>
                            </div>
                            <div class="input-field col s5 ">
                                <input type="text" class="validate" name="nomepaciente" id="paciente" required>
                                <label for="paciente">*Nome do paciente:</label>
                            </div>
                            <div class="input-field col s5">
                                <input type="text" class="validate" name="nomeresponsavel" id="nomeresponsavel" required>
                            <label for="nomeresponsavel">*Respons&aacute;vel:</label>
                            </div>
                                <div class="input-field col s5">
                                <input type="text" class="validate" name="paren" required ="" id="paren">
                                <label for="paren">*Grau de parentesco :</label>
                            </div>
                            <div class="input-field col s5">
                                <input type="text" class="validate" name="Data de Nascimento" id="Data de Nascimento" required>
                                <label for="Data de Nascimento">*Data de Nascimento: </label>
                            </div>
                        </div>
                        
                        <input type="submit" value="Salvar" id="salvar" name="salvar" class="btn btn-success">
                        <a href="" class="btn red">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php include_once 'rodape.php'; ?>