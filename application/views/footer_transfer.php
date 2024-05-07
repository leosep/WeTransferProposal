<?php
$truck = rand(1,4);
echo "<script>trucknum=".$truck.";</script>";
?>
<?php if($truck==1) { ?>
<!--SCENE 1-->    
    <div class="scene1">
        <div id="truck1">
            
            <div id="info1">
                <h3>Te ofrecemos</h3>
                <h1>5000<span id="unit">GB </span>(13,200<span id="unit">LB</span>)</h1>
                <h3>Para que lo compruebes</h3>
            </div>
            <div class="cargo1overlay">
                <div class="cargo1lines droppable">
                    <img id="c1stripe"src="img/img1_cargo_stripes.svg">
                </div>

                <div class="cargo1dashed">
                     <img src="img/img1_cargo_dashed.svg">
                </div>
                              
                 <div class="load_message">
                    <p>Haz clic o arrastra tus<br>archivos en el &aacute;rea de carga</p>
                    <img src="img/upload_icon.svg" height="15px">
                </div>
            </div>    
           <img id="t1" src="img/f150_1_isolated.png">
        </div>
    </div>
<?php } elseif($truck==2) { ?>
<!--SCENE 2-->
    <div class="scene2">    
        <!--TRUCK 2-->
        <div id="truck2">
            <div id="info2">
                <h3>Te ofrecemos</h3>
                <h1>5000<span id="unit">GB </span>(13,200<span id="unit">LB</span>)</h1>
                <h3>Para que lo compruebes</h3>
            </div>
            
            <div class="cargo2overlay">
                   
                <div class="cargo2lines droppable">
                    <img id="c2stripe"src="img/img2_cargo_stripes.svg">
                </div>
                
                <div class="cargo2dashed">
                    <img src="img/img2_cargo_dashed.svg">
                </div>
             
                <div class="load_message">
                    <p>Haz clic o arrastra tus<br>archivos en el &aacute;rea de carga</p>
                    <img src="img/upload_icon.svg" height="15px">
                </div>
            </div>    
            <img id="t2" src="img/f150_2_isolated.png">
        </div>
    </div>
<?php } elseif($truck==3) { ?>
<!--SCENE 3-->
    <div class="scene3">    
        <!--TRUCK 3-->
        <div id="truck3">
            <div id="info3">
                <h3>Te ofrecemos</h3>
                <h1>5000<span id="unit">GB </span>(13,200<span id="unit">LB</span>)</h1>
                <h3>Para que lo compruebes</h3>
            </div>
            
            <div class="cargo3overlay">
                   
                <div class="cargo3lines droppable">
                    <img id="c3stripe"src="img/img3_cargo_stripes.svg">
                </div>
                
                <div class="cargo3dashed">
                    <img src="img/img3_cargo_dashed.svg">
                </div>
             
                <div class="load_message">
                    <p>Haz clic o arrastra tus<br>archivos en el &aacute;rea de carga</p>
                    <img src="img/upload_icon.svg" height="15px">
                </div>
            </div>    

            <img id="t3" src="img/f150_3_isolated.png">
        </div>
    </div>
<?php } elseif($truck==4) { ?>
    <!--SCENE 4-->
    <div class="scene4">    
        <!--TRUCK 3-->
        <div id="truck4">
            <div id="info4">
                <h3>Te ofrecemos</h3>
                <h1>5000<span id="unit">GB </span>(13,200<span id="unit">LB</span>)</h1>
                <h3>Para que lo compruebes</h3>
            </div>
            
            <div class="cargo4overlay">
                   
                <div class="cargo4lines droppable">
                    <img id="c4stripe"src="img/img4_cargo_stripes.svg">
                </div>
                
                <div class="cargo4dashed">
                    <img src="img/img4_cargo_dashed.svg">
                </div>
             
                <div class="load_message">
                    <p>Haz clic o arrastra tus<br>archivos en el &aacute;rea de carga</p>
                    <img src="img/upload_icon.svg" height="15px">
                </div>
            </div>    
            <img id="t4" src="img/f150_4_isolated.png">
        </div>
    </div>    
<?php } ?>
<!--SCRIPT LINKS-->
<script src="scripts/script.js" type="text/javascript"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js"></script>

   
<script>window.jQuery || document.write('<script src="scripts/jquery-3.2.0.min.jsbk"><\/script>')</script>

<script src="scripts/jquery.js" type="text/javascript"></script> 
<script src="scripts/gsal.js" type="text/javascript"></script>  

   
</body>
</html> 