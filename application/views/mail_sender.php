<div >

<div marginwidth="0" marginheight="0"> 
		
	<table border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="ea6217" >
		
		<tbody><tr><td height="90" style="font-size:90px;line-height:90px">&nbsp;</td></tr>
		
		
		<tr><td height="3" style="font-size:3px;line-height:3px">&nbsp;</td></tr>
		<tr>
			<td>
				<table border="0" align="center" width="510" cellpadding="0" cellspacing="0" bgcolor="ffffff"  style="border-radius:4px">
					
					<tbody><tr><td height="40" style="font-size:40px;line-height:40px">&nbsp;</td></tr>
					
					<tr>
						<td>
							<table border="0" align="center" cellpadding="0" cellspacing="0">
								<tbody><tr>
			 						
									<td align="center">
										<a href="<?php echo base_url(); ?>" style="display:block;border-style:none!important;border:0!important"  target="_blank" data-saferedirecturl="#"><img width="100" border="0" style="display:block;width:100px" src="https://ford.leandrosepulveda.com/img/fuerzaFord.jpg" alt="logo" ></a>
									</td>	
								</tr>
							</tbody></table>
						</td>
					</tr>
					
					<tr><td height="45" style="font-size:45px;line-height:45px">&nbsp;</td></tr>
					
					<tr>
						<td align="center" style="color:#181c27;font-size:20px;font-family:'Oxygen',sans-serif;line-height:30px" >
							
							
							
							<div  style="line-height:30px; max-width: 400px;">
								<span >
	        					
	        				<div style="text-align: left;">			

Archivos enviados correctamente a<br /><?php echo $mailTo; ?>
	        					</div>
								</span>
							</div>
        				</td>
					</tr>
					
					<tr><td height="30" style="font-size:30px;line-height:30px">&nbsp;</td></tr>
					
					<tr>
						<td>
							<table border="0" width="440" align="center" cellpadding="0" cellspacing="0" >				
								<tbody><tr>
									<td align="center" style="color:#8d94a3;font-size:16px;font-family:'Oxygen',sans-serif;line-height:24px" >
										<div style="line-height:24px;max-width: 400px;text-align: left;">
											
											
											<span >
				        					<?php echo $message; ?><br /><br />
											<?php //var_dump($files); ?>
                                            
                                            <strong>Destinatarios</strong><br />
                                            <?php echo $mailTo; ?>
                                            <br /><br />
											<strong>Archivos(<?php echo $total; ?> kb en total)</strong><br />
											<?php foreach ($files as $item): ?>
												<?php echo $item['name']; ?> <br />
											<?php endforeach; ?>
										

											<br />
											<strong>Serán eliminados en</strong><br />
											<?php echo $expiryDate; ?> <br /><br />

											Haga click en el boton de descarga para obtener sus archivos.

											</span>
										</div>
			        				</td>	
								</tr>
							</tbody></table>
						</td>
					</tr>
					
					<tr><td height="35" style="font-size:35px;line-height:35px">&nbsp;</td></tr>
					
					<tr>
						<td align="center" >
							
							<table border="0" align="center" width="300" cellpadding="0" cellspacing="0" bgcolor="ea6217" style="border-top-left-radius:50px;border-top-right-radius:50px;border-bottom-right-radius:50px;border-bottom-left-radius:50px;background-color:#ea6217" >
								
								<tbody><tr><td height="17" style="font-size:17px;line-height:17px">&nbsp;</td></tr>
								
								<tr>
									
	                				<td align="center" style="color:#ffffff;font-size:18px;font-family:'Questrial',sans-serif" >
	                					
	                					
		                    			<div  style="line-height:24px">
		                    				<span >
			                    			<a href="<?php echo base_url(); ?>index.php/transfer/download/<?php echo $token; ?>" style="color:#ffffff;text-decoration:none" rel="nofollow" target="_blank" data-saferedirecturl="#">Descargar</a> 
		                    				</span>
		                    			</div>
		                    		</td>
		                    		
	                			</tr>
								
								<tr><td height="17" style="font-size:17px;line-height:17px">&nbsp;</td></tr>
							
							</tbody></table>
						</td>
					</tr>
					
					<tr><td height="30" style="font-size:30px;line-height:30px">&nbsp;</td></tr>
					
					
					<tr><td height="20" style="font-size:20px;line-height:20px">&nbsp;</td></tr>
					
					<tr>
    					<td align="center">
    					
                			<table border="0" align="center" cellpadding="0" cellspacing="0" width="75">
                				<tbody><tr><td height="5" style="font-size:5px;line-height:5px">&nbsp;</td></tr>
	                			<tr>
	                				<td align="center">
	                					<!--<table border="0" align="center" cellpadding="0" cellspacing="0">
	                						<tbody><tr>												
			        							<td>
			        								<a style="display:block;width:8px;height:13px;border-style:none!important;border:0!important" href="https://www.facebook.com/fordlatino" class="m_-6080722426241750278editable_img" target="_blank" data-saferedirecturl="#"><img width="8" height="13" border="0" style="display:block;width:8px;height:13px" src="https://ci3.googleusercontent.com/proxy/ZcBpfGiTts2M1o5WyXJ35ldkY393FQU8k-tBCygiI5kL3TSR6FS2Slg6MkgrnXCgVrTe944nEPRt3ruEfGFAxPNcakSBW-biH04Laa0=s0-d-e1-ft#https://themastermail.com/alerta/notif5/img/facebook.png" alt="facebook" class="CToWUd"></a>			
			        							</td>
			        							<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
			        							<td>
			        								<a style="display:block;width:13px;height:10px;border-style:none!important;border:0!important" href="https://twitter.com/fordlatino"  target="_blank" data-saferedirecturl="#"><img width="13" height="10" border="0" style="display:block;width:13px;height:10px" src="https://ci5.googleusercontent.com/proxy/vNXkDHHTetpsUclubfyhhsfaJCcpdRKw17oT_7hZPLALVodkwGNBtbmVBnWVBM0WPWejxFdWMLZ1bWc6a8FksdkGPUyP2pfTCuHvVQ=s0-d-e1-ft#https://themastermail.com/alerta/notif5/img/twitter.png" alt="twitter" class="CToWUd"></a>		
			        							</td>
			        							<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
			        							
											</tr>		
	                					</tbody></table>	-->			
	                				</td>
	                			</tr>
							</tbody></table>
    					</td>
    				</tr>
					
					<tr><td height="40" style="font-size:40px;line-height:40px">&nbsp;</td></tr>
														
				</tbody></table>
			</td>
		</tr>
		
		<tr><td height="30" style="font-size:30px;line-height:30px">&nbsp;</td></tr>
		
		<tr>
			<td>
				<table border="0" width="540" align="center" cellpadding="0" cellspacing="0" >
					<tbody><tr>
						
						<td align="center" style="color:#ffffff;font-size:14px;font-family:'Questrial',sans-serif;line-height:30px" >
							<div  style="line-height:30px">
								
								
								<span >
	        					
	        						© 2017 <b>Ford F-150 | La Carga Más Pesada</b>. Derechos Reservados.
	        					
								</span>
							</div>
        				</td>	
					</tr>
				</tbody></table>
			</td>
		</tr>
		
		<tr><td height="50" style="font-size:50px;line-height:50px">&nbsp;</td></tr>
		
	</tbody></table>
	
	 
<img src="https://ci4.googleusercontent.com/proxy/L6ZsTcu6R6Bj097qQZRjgWDyA1I8Xik-YXky13KB234VMYD1MwAVO8OJ7fK16ZYUO9WmODe_EftMMg2g1sUqlxgLplrqFWFl-qlqwYkIx28XTHadRfcL-rLbB2-ivXu6NQDI1Zm1_STq3Q=s0-d-e1-ft#https://mandrillapp.com/track/open.php?u=30502098&amp;id=ee5b773c339c43afa837510f76980edc" height="1" width="1" ></div><div ></div><div >

</div></div>