
<?php $this->tituloPagina ="Home"?>

<?php $this->layout('layout.topo');?>
<?php
use Config\Db;
$conn=Db::conexao();
$itens_por_pagina = 5;
$pagina = isset($_GET['pagina']) && is_numeric($_GET['pagina']) ? (int)$_GET['pagina'] : 1;

$sql_code = $conn->prepare("SELECT * FROM contatos ORDER BY id LIMIT :c_pagina, :itens_por_pagina");
$sql_code->bindValue(':c_pagina',($pagina-1)*$itens_por_pagina, \PDO::PARAM_INT);
$sql_code->bindValue(':itens_por_pagina', $itens_por_pagina,\PDO::PARAM_INT);
$sql_code->execute();

$num = $sql_code->fetchAll(\PDO::FETCH_ASSOC);
$num_paginas = $conn->query("SELECT COUNT(*) FROM contatos")->fetchColumn();

?>
<br><br><br>
<div class="row">
    <div class="col-lg-12">
        <h2>Lista de Contatos</h2>
        <a href="/contatos/adicionar"><button type="button" class="btn btn-success">INSERIR NOVO CONTATO</button></a>
        <br><br>
          
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Cargo</th>
                        <th scope="col">E-mail</th>
                        <th scope="col"> Editar|Deletar</th>
                    </tr>
                </thead>
                    <tbody>
                
                    <?php foreach ($num as $value):?>
                        <tr class="table-success">
                            <td><?php echo $value["nome"]?></td>
                            <td><?php echo $value["cargo"]?></td>
                            <td><?php echo $value["email"]?></td>
                            <td>
                            <form action="/contatos/deletar/<?php echo $value["id"]?>" method="post">
                                <a href="/contatos/editar/<?php echo $value["id"]?>" class="edit"><button type="button" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></button></i></a>
                                &nbsp;&nbsp;&nbsp;
                                <input type="hidden" name="_METHOD" value="Delete">
                                <a class="trash"><button class="btn btn-danger" ><i class="fa fa-trash" aria-hidden="true"></button></i></a>
                            </form>
                            </td>
                        </tr>
                    <?php endforeach ?>
              
                    </tbody>
                </table>
                <nav aria-label="Navegação de página exemplo">
                    <ul class="pagination justify-content-end">
                        
                        <?php if($pagina > 1): ?>
                            <li class="page-item"><a class="page-link" href="index.php?pagina=<?=$pagina-1?>">Anterior</a></li>
                        <?php endif; ?>
                        <?php if($pagina * $itens_por_pagina < $num_paginas):?>
                        <li class="page-item"><a class="page-link" href="index.php?pagina=<?=$pagina+1?>">Próximo</a></li>
                        <?php endif; ?>
                    </ul>
                </nav>
                   
<?php $this->layout('layout.rodape');?>

