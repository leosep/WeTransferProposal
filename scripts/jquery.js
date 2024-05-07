$(function(){
    "use strict";
    
//HIDE INTRO LIGHTBOX    
    
    $('.lightboxClose').click(function(){
        $('#lightboxIntro').hide();
        $('#lightboxFilesOnWay').hide();
        //$('lightboxSmallFiles').hide();
    });
    
    $('#comenzarBtn').click(function(){
        $('#lightboxIntro').hide();
    });
    
    $('#cargaOtroBtn').click(function(){
        $('#lightboxFilesOnWay').hide();
        $(".fileList").empty();
         
        var index;
        for (index = 0; index <= fileNum; ++index) {
            formData.delete("files[" + index + "]");
        }
             
        for (var pair of formData.entries())
        {
            console.log('Exist:'+pair[0]+ ', '+ pair[1]); 
        }

        $('#sendBtn').removeAttr('disabled');
        $('#emailTo').removeAttr('disabled');
        $('#emailFrom').removeAttr('disabled');
        $('#message').removeAttr('disabled');
        $( ".progress" ).hide();
        $('.myprogress').css('width', 0 + '%');
        $( "#sendBtn" ).show();
        $('#emailFrom').val('');
        $('#emailTo').val('');
        $('#message').val('');

        $('.form').hide();
        $('.fileListModule').hide();
        $('.scene2:before').hide();
        

        //location.reload();
        //$('lightboxSmallFiles').hide();
    });
    
//SHOW FILE LIST AND FORM    

    $('.cargo1overlay').click(function(){
        /*$('.form').show();
        $('.fileListModule').show();
        $('special').show();*/
    });
    
    $('.cargo2overlay').click(function(){
        /*$('.form').show();
        $('.fileListModule').show();
        $('.scene2:before').show();*/
    });
    
    $('.cargo3overlay').click(function(){
        /*$('.form').show();
        $('.fileListModule').show();
        $('.scene3:before').show();*/
    });
    
    $('.cargo4overlay').click(function(){
        /*$('.form').show();
        $('.fileListModule').show();
        $('.scene4:before').show();*/
    });
    
//SHOW SENT FILES LIGHTBOX   

    $('#transportarBtn').click(function(){
        $('#lightboxFilesOnWay').show();
        //Show small files lightbox when 1MB or smaller files are uploaded
        //$('lightboxSmallFiles').hide();
    });
    
    
});
