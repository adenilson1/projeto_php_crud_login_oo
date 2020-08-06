<?php $this->tituloPagina ="Lista de Contatos"?>


<?php $this->layout('layout.topo');?>
<br><br><br>
<form action="/contatos" method="post">
    <h2>Criar novo contato</h2>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputName">Nome</label>
            <input type="text" class="form-control" name="nome" id="inputEmail4" placeholder="Nome" required autofocus>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputEmail4">Email</label>
        <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Email" required autofocus>
        </div>
    </div>
    <div class="form-row">
            <div class="form-group col-md-4">
            <label for="inputEstado">Opções de Cargo</label>
            <select id="inputEstado" class="form-control" name="cargo" required autofocus>
                <option selected></option>
                <option>Sem cargo</option>
                <option>Diretor</option>
                <option>Gerente</option>
                <option>Secretario</option>
            </select>
            </div>
    </div>
    <br><br>
    <button type="submit" class="btn btn-primary">ADICIONAR NOVO CONTATO</button>
    <a href="/contatos"><button type="button" class="btn btn-success">RETORNA A LISTA DE CONTATOS</button></a>

</form>
 <?php $this->layout('layout.rodape');?>