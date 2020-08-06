<?php $this->tituloPagina ="Editar de Contato"?>


<?php $this->layout('layout.topo');?> 
        <br><br><br>
        <form action="/contatos/<?php echo $this->modelo->id ?>" method="post">
            <h2>Editar</h2>
        
            <input type="hidden" name="_METHOD" value="put">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputName">Nome</label>
                    <input type="text" class="form-control" name="nome" placeholder="Nome" value="<?php echo $this->modelo->nome ?>">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputName">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="E-mail", value="<?php echo $this->modelo->email ?>">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputName">Cargo Atual</label>
                    <input type="text" class="form-control"  name="cargo" placeholder="Cargo", value="<?php echo $this->modelo->cargo ?>">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputName">Cargo Novo</label>
                    <select id="inputEstado" class="form-control" name="cargo">
                        <option selected></option>
                        <option>Sem cargo</option>
                        <option>Diretor</option>
                        <option>Gerente</option>
                        <option>Secretario</option>
                    </select>
                </div>
            </div>
            <br><br>
            <button type="submit" class="btn btn-primary">ATUALIZAR</button>
            <a href="/contatos"><button type="button" class="btn btn-success">RETORNAR</button></a>
        
        </form>
        
 <?php $this->layout('layout.rodape');?>