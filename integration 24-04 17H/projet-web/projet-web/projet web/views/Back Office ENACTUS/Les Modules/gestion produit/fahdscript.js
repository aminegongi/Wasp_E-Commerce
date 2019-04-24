function fahd2() {
    var fahd =document.getElementById('Reftext').value ;
    var datastring ='namee='+ fahd;
    $.ajax({
        type:"post",
        url:"upload.php",
        data:datastring,
        cache:false,
        success:function (html) {
            $('#Re').html(html);
        }
    });
    return false;
}
function fahd() {
    document.getElementById("Re").value = document.getElementById('Reftext').value;
    //document.getElementById("dropzoneFrom").submit() ;
}

/* $(function() {
     $('#dropzoneFrom').on('submit', function(e) {
         var data = $("#dropzoneFrom :input").serialize();
         $.ajax({
             type: "POST",
             url: "script.php",
             data: data,
         });
         e.preventDefault();
     });
 });*/


/*function fahd {
    //$ref = document.getElementById('Reftext').value ;
    document.getElementById("Re").value = document.getElementById('Reftext').value;
}*/
$(document).ready(function(){

    Dropzone.options.dropzoneFrom = {
        autoProcessQueue: false,
        acceptedFiles:".png,.jpg,.gif,.bmp,.jpeg",
        init: function(){
            var submitButton = document.querySelector('#submit-all');
            myDropzone = this;
            submitButton.addEventListener("click", function(){
                myDropzone.processQueue();
            });
            this.on("complete", function(){
                if(this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0)
                {
                    var _this = this;
                    _this.removeAllFiles();
                }

                list_image(); // mouch héthi doub mayo5el lel page
                list_image(); //
            });
        },
    };

    list_image();
    list_image();

    function list_image()
    {   var fah =$('#Reftext').val();
        //$.post('upload.php',{postref:fah},function (data) {$('#result').html(data)});
        $.ajax({
            url:"upload.php",
            method:"POST",
            data: 'nome='+fah,
            success:function(data){
                $('#preview').html(data);
            }
        });

    }

    $(document).on('click', '.remove_image', function(){
        var name = $(this).attr('id');
        var fah =$('#Re').val();
        $.ajax({
            url:"upload.php",
            method:"POST",
            data:{name:name,nome:fah},
            success:function(data)
            {
                list_image(); // mouch héthi doub mayo5el lel page
                list_image();

            }
        })
    });

});
