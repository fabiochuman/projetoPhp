<?php include "cabecalho.php"?>
            <table class="table table-bordered table-striped" style="background-color: white;">
                <thead>
                <tr>
                    <th>CPF</th>
                    <th>NOME</th>
                </tr>
                </thead>
                <tbody>
                    <?php for($i = 0; $i<10; $i++){
                        ?>
                        <tr>
                            <td>
                                <?php
                                    echo $clientes[$i]->getCpf();
                                ?>
                            </td>
                            <td>
                                <?php
                                    echo $clientes[$i]->getNome();
                                ?>
                            </td>
                            <td id="tdbotao">
                                <form method="POST" action="informacao.php?cpf=<?=$clientes[$i]->getCpf()?>">
                                    <button class="btn btn-info">Informações</button>
                                </form>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
<?php include("rodape.php") ?>

