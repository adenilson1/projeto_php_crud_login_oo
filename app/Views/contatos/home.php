<?php $this->tituloPagina ="Home"?>


<?php $this->layout('layout.topo');?> 

<br><br><br><br>

<div class="row justify-content-center">
<br><br><br><br>

<div class="card text-white bg-warning mb-3" style="width: 18rem;">
  <div class="border-white">

    <img class="card-img-top" src="https://img.icons8.com/ios/150/000000/about.png" alt="Imagem de capa do card">
    <div class="card-body">
      <h5 class="card-title">Sobre o Projeto</h5>
      <p class="card-text">Informações sobre o desenvolvido do programa de controle de funcionarios.</p>
      <a href="/contatos/info" class="btn btn-danger">Entrar</a>
    </div>
  </div>
  </div>


  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <div class="card text-white bg-success mb-3" style="width: 18rem;">
    <img class="card-img-top" src="https://img.icons8.com/windows/96/000000/search-contacts.png" alt="Imagem de capa do card">
    <div class="card-body">
      <h5 class="card-title">Agenda de Contatos</h5>
      <p class="card-text">Caderno com o nome, cargo e emails do sfuncionarios da empresa.</p>
      <a href="/contatos" class="btn btn-danger">Entrar</a>
    </div>
  </div>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <div class="card text-white bg-info mb-3" style="width: 18rem;">
    <img class="card-img-top" src="https://img.icons8.com/windows/96/000000/add-user-male--v1.pn" alt="Imagem de capa do card">
    <div class="card-body">
      <h5 class="card-title">Incluir novo contato</h5>
      <p class="card-text">Adicionar um novo funcionario na empresa, o nome será incluido na última página da agenda.</p>
      <a href="/contatos/adicionar" class="btn btn-danger">Entrar</a>
    </div>
  </div>

</div>

      
 <?php $this->layout('layout.rodape');?>
 