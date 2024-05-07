<!--FORM-->
    
<div class="fileListModule" >

    <<!--h4>Descargar archivos</h4>-->
 
        <div class="fileListDownload">
        
        
        <div class="downico"><i class="fa fa-arrow-circle-o-down downico"></i> </div>
             
       
       <div class="downloadBox">
        <h3>Listo para descargar</h3>
        <?php if(isset($message)): ?>
        <br />
        <p><?php echo $message ?></p><br />
        <?php endif; ?>
        <div class="fileList">
        
        <?php foreach ($files as $item): ?>
         <div class="listItem" id="file"><div class="fileName"><?php echo $item['name']; ?><br><span id="fileSize"><?php echo $item['size']; ?> kb</span></div><div class="closeX"><a onclick="downloadFile('<?php echo $item['file']; ?>','<?php echo $token; ?>', event);"><i class="fa fa-arrow-circle-o-down"></i></a></div></div>
			 
		<?php endforeach; ?>
      
        </div>
       
       

        </div>
      
         <div class="downloadForm"> 
        <input type="button" value="DESCARGAR" onclick="downloadFiles('<?php echo $token; ?>', event);">
        </div>

        
        </div>
</div>
    
    
</div>