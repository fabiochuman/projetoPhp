<?php
    include("cabecalho.php");
    $cpf = $_GET['cpf'];
    for($i=0;$i<sizeof($clientes);$i++){
        if($cpf == $clientes[$i]->getCpf()){
            $nomeBusca = $clientes[$i]->getNome();
            $cpfBusca = $clientes[$i]->getCpf();
            $enderecoBusca = $clientes[$i]->getEndereco();
            $a = new Pessoa($nomeBusca,$cpfBusca,$enderecoBusca);
        }
    }
?>
        <table class="table table-bordered table-striped" style="background-color: white;">
            <thead>
            <tr>
                <th>CPF</th>
                <th>NOME</th>
                <th>ENDERECO</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?=$a->getCpf()?></td>
                    <td><?=$a->getNome()?></td>
                    <td><?=$a->getEndereco()?></td>
                </tr>
                <tr>
                    <td>
                        <form action="index.php">
                            <button class="btn btn-info">Voltar para pagina inicial</button>
                        </form>
                    </td>
                </tr>
<?php include("rodape.php")?>