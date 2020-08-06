<?php $this->tituloPagina ="Login"?>

<?php $this->layout('layout.topologin');?> 
        <h3 class="text-center text-white pt-5">Login form</h3>
        <div class="container ">
             <div id="login-row" class="row justify-content-center align-items-center ">
                <div class="col-md-4 col-md-offset-3" style="background:#008B8B;">
                    <div id="login-row" class="row justify-content-center align-items-center rounded-circle>
                        <div id="login-column" class="col-md-12">
                            <div id="login-box" class="col-md-12">
                                <form id="login-form" class="form" action="/login" method="post">
                                    <h3 class="text-center text-info text-dark">Login</h3>
                                        <div class="form-group">
                                            <label for="username" class="text-info text-dark">E-mail:</label><br>
                                            <input type="email" name="email" id="username" class="form-control"  placeholder="E-mail" required autofocus>
                                        </div>
                                        <div class="form-group">
                                            <label for="password" class="text-info text-dark">Senha:</label><br>
                                            <input type="password" name="senha" id="password" class="form-control"  placeholder="Senha" required autofocus>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" name="submit" class="btn btn-info btn-md text-dark" value="Entrar">
                                        </div>        
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
        </div>

        
<?php $this->layout('layout.rodapelogin');?> 


        
