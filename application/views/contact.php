<div class="container">

    <div class="row">
        
        <div class="span6">
            <?php echo form_open('contact/send', array('id'=>'form-contact')); ?>

                <h2 class="form-signin-heading">Envie uma mensagem</h2>
                
                <?php echo validation_errors();?>
                
                <?php echo $msg;?>
                
                <div class="control-group">
                    <label class="control-label" for="name">*Nome</label>
                    <div class="controls">
                        <input type="text" name="name" id="name" class="input-block-level" placeholder="Informe seu Nome" maxlength="255" class="required" minlength="3" />
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="email">*E-mail</label>
                    <div class="controls">
                        <input type="text" name="email" id="email" class="input-block-level" placeholder="Informe um Email para contato" maxlength="100" class="required" minlength="3" />
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="telephone">Telefone</label>
                    <div class="controls">
                        <input type="text" name="telephone" id="telephone" class="input-block-level" placeholder="Informe um Telefone para contato" minlength="8" maxlength="25" />
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="message">*Mensagem</label>
                    <div class="controls">
                        <textarea name="message" id="message" cols="54" rows="7" placeholder="Envie sua mensagem"></textarea>
                    </div>
                </div>
    
                <div class="control-group">
                    <label class="checkbox">
                        <input type="checkbox" name="acept" value="1" >
                        Accepted newsletter - a melhorar o texto aqui OK ;)
                    </label>
                </div>

                <button class="btn btn-large btn-primary" type="submit">Enviar</button>

            </form>
        </div>

        <div class="span6">

            <h2 class="form-signin-heading">Contato</h2>

            <address>
                e-mail: <a href="mailto:contato@convergate.com.br">contato@convergate.com.br</a><br>
                <abbr title="Phone">tel.:</abbr> +55 (11) 5555-4444<br>
                <abbr title="Avenue">Av.</abbr> Seu Endereço, 66 &ndash; 1 andar<br>
                Bairro &ndash; CEP 00000-000 &ndash; Estado &ndash; ET &ndash; Brasil
            </address>

            <div id="maps">
                
                <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps?f=q&amp;source=s_q&amp;hl=pt-BR&amp;geocode=&amp;q=Conroy+Rd%2FConroy+Windermere+Rd&amp;aq=&amp;sll=28.492758,-81.455641&amp;sspn=0.039226,0.080338&amp;ie=UTF8&amp;hq=Conroy+Rd%2FConroy+Windermere+Rd&amp;hnear=&amp;t=m&amp;ll=28.492758,-81.455641&amp;spn=0.039226,0.080338&amp;output=embed"></iframe><br /><small><a href="https://www.google.com/maps?f=q&amp;source=embed&amp;hl=pt-BR&amp;geocode=&amp;q=Conroy+Rd%2FConroy+Windermere+Rd&amp;aq=&amp;sll=28.492758,-81.455641&amp;sspn=0.039226,0.080338&amp;ie=UTF8&amp;hq=Conroy+Rd%2FConroy+Windermere+Rd&amp;hnear=&amp;t=m&amp;ll=28.492758,-81.455641&amp;spn=0.039226,0.080338" style="color:#0000FF;text-align:left">Exibir mapa ampliado</a></small>
                <br>
                <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps?f=q&amp;source=embed&amp;hl=pt-BR&amp;geocode=&amp;q=Conroy+Rd%2FConroy+Windermere+Rd&amp;aq=&amp;sll=28.492758,-81.455641&amp;sspn=0.039226,0.080338&amp;ie=UTF8&amp;hq=Conroy+Rd%2FConroy+Windermere+Rd&amp;hnear=&amp;ll=28.492308,-81.459181&amp;spn=0.039227,0.080338&amp;t=m&amp;z=14&amp;iwloc=A&amp;layer=c&amp;cbll=28.492305,-81.459054&amp;panoid=n8Uf2JhjqvP-NwLnVVbHRQ&amp;cbp=12,269.25,,0,4.52&amp;cid=6659134041949550567&amp;output=svembed"></iframe><br /><small><a href="https://www.google.com/maps?f=q&amp;source=embed&amp;hl=pt-BR&amp;geocode=&amp;q=Conroy+Rd%2FConroy+Windermere+Rd&amp;aq=&amp;sll=28.492758,-81.455641&amp;sspn=0.039226,0.080338&amp;ie=UTF8&amp;hq=Conroy+Rd%2FConroy+Windermere+Rd&amp;hnear=&amp;ll=28.492308,-81.459181&amp;spn=0.039227,0.080338&amp;t=m&amp;z=14&amp;iwloc=A&amp;layer=c&amp;cbll=28.492305,-81.459054&amp;panoid=n8Uf2JhjqvP-NwLnVVbHRQ&amp;cbp=12,269.25,,0,4.52&amp;cid=6659134041949550567" style="color:#0000FF;text-align:left">Exibir mapa ampliado</a></small>

            </div>

        </div>

    </div> <!-- /row -->           

</div> <!-- /container -->