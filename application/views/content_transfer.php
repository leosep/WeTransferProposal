<!--FORM-->
    
<div class="fileListModule">
    <h4>Archivos cargados</h4>
        <div class="fileList">
        <div></div>
        </div>
        <label id="files-error" class="error">Debe seleccionar algún archivo.</label>
</div>
    
    <div class="form"> 
        <h4>Env&iacute;a tus archivos</h4>
        <form name="transfer" id="transfer">
            <!--label for="emailFrom">Email de origen</label-->
            <input type="text" id="emailFrom" name="emailFrom" placeholder="Email de origen" type="email" required>

            <!--label for="emailTo">Email de destino</label-->
            <input type="text" id="emailTo" name="emailTo" placeholder="Email de destino" type="email" required>
      
            <textarea type="text" id="message" name="message" placeholder="Mensaje"></textarea>

            <!--label for="country">Country</label>
            <select id="country" name="country">
            <option value="australia">Australia</option>
            <option value="canada">Canada</option>
            <option value="usa">USA</option>
            </select-->
  
            <input type="button" value="TRANSPORTAR" onclick="sendFiles();" id="sendBtn" idBK="transportarBtn">
             <div class="progress">
                    <div class="progress-bar progress-bar-warning progress-bar-striped myprogress" role="progressbar" style="width:0%">0%</div>
            </div>
       </form>
    </div>
