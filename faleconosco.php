<?php require_once("header.php"); ?>

           
            

            <section class="row container-fluid ">
                <div class="col-md-4 centraliza margintop">
                    
                    <h1>Fale Conosco</h1>
                    
             <form role="form" class="" method="post" action="mail.php">
             <div class="form-group">
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required>
             </div>
             <div class="form-group">
                <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" required>
             </div>
             <div class="form-group">
                <input type="text" class="form-control" id="fone" name="fone" placeholder="Telefone" required>
             </div>
             <div class="form-group">
             <input type="text" class="form-control" id="assunto" name="assunto" placeholder="Assunto" required>
             </div>
             <div class="form-group">
                 <textarea class="form-control" type="textarea" id="msg" name="msg" placeholder="Mensagem" maxlength="180" rows="6"></textarea>
                 <span class="help-block"><p id="characterLeft" class="help-block ">You have reached the limit</p></span>                    
             </div>
             <div class="form-group">
                <br/>
                <div class="row">
                    <div class="col">
                        <button type="submit" id="submit" name="submit" value="Enviar" class="btn btn-send pull-right COLORE">Enviar</button>
                    </div>
                </div>
             </div>
            </form>   
                    
            </section>   


<?php require_once("footer.php"); ?>
                    
                    
                    