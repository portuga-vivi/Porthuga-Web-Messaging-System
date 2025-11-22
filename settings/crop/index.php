<!DOCTYPE html>
<html>
<?php session_start(); include_once ("redirect.php");  ?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Login - PHP + MySQL - Canal TI</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="../../css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="../../css/login.css">

    <link href="../../css/bootstrap.css" rel="stylesheet">

    <script src="js/jquery.min.js"></script>
    <script src="js/js/jquery.appear.js"></script>
    <script src="js/js/jquery.cookie.js"></script>
    <script src="js/js/jquery.countdown.min.js"></script>
    <script src="js/js/jquery.cubeportfolio.min.js"></script>
    <script src="js/js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.Jcrop.min.js"></script>
    <script src="../../js/bootstrap.js"></script>


    <style>

        .hidden{
            display: none;
        }
        body{
            display: flex;
            background-color: #000016;
        }

        a.registro:hover{
            color: black;
            text-decoration: underline;
        }
        input::-webkit-input-placeholder{
            color:#C4C;
            background-color: #f5d383;
            text-transform: uppercase;
        }
        input::-moz-placeholder {
            color:#C4C;
            background-color: #f5d383;
            text-transform: uppercase;
        }



        /* jquery.Jcrop.min.css v0.9.12 (build:20130126) */
        .jcrop-holder{direction:ltr;text-align:left;}
        .jcrop-vline,.jcrop-hline{background:#FFF url(Jcrop.gif);font-size:0;position:absolute;}
        .jcrop-vline{height:100%;width:1px!important;}
        .jcrop-vline.right{right:0;}
        .jcrop-hline{height:1px!important;width:100%;}
        .jcrop-hline.bottom{bottom:0;}
        .jcrop-tracker{-webkit-tap-highlight-color:transparent;-webkit-touch-callout:none;-webkit-user-select:none;height:100%;width:100%;}
        .jcrop-handle{background-color:#333;border:1px #EEE solid;font-size:1px;height:7px;width:7px;}
        .jcrop-handle.ord-n{left:50%;margin-left:-4px;margin-top:-4px;top:0;}
        .jcrop-handle.ord-s{bottom:0;left:50%;margin-bottom:-4px;margin-left:-4px;}
        .jcrop-handle.ord-e{margin-right:-4px;margin-top:-4px;right:0;top:50%;}
        .jcrop-handle.ord-w{left:0;margin-left:-4px;margin-top:-4px;top:50%;}
        .jcrop-handle.ord-nw{left:0;margin-left:-4px;margin-top:-4px;top:0;}
        .jcrop-handle.ord-ne{margin-right:-4px;margin-top:-4px;right:0;top:0;}
        .jcrop-handle.ord-se{bottom:0;margin-bottom:-4px;margin-right:-4px;right:0;}
        .jcrop-handle.ord-sw{bottom:0;left:0;margin-bottom:-4px;margin-left:-4px;}
        .jcrop-dragbar.ord-n,.jcrop-dragbar.ord-s{height:7px;width:100%;}
        .jcrop-dragbar.ord-e,.jcrop-dragbar.ord-w{height:100%;width:7px;}
        .jcrop-dragbar.ord-n{margin-top:-4px;}
        .jcrop-dragbar.ord-s{bottom:0;margin-bottom:-4px;}
        .jcrop-dragbar.ord-e{margin-right:-4px;right:0;}
        .jcrop-dragbar.ord-w{margin-left:-4px;}
        .jcrop-light .jcrop-vline,.jcrop-light .jcrop-hline{background:#FFF;filter:alpha(opacity=70)!important;opacity:.70!important;}
        .jcrop-light .jcrop-handle{-moz-border-radius:3px;-webkit-border-radius:3px;background-color:#000;border-color:#FFF;border-radius:3px;}
        .jcrop-dark .jcrop-vline,.jcrop-dark .jcrop-hline{background:#000;filter:alpha(opacity=70)!important;opacity:.7!important;}
        .jcrop-dark .jcrop-handle{-moz-border-radius:3px;-webkit-border-radius:3px;background-color:#FFF;border-color:#000;border-radius:3px;}
        .solid-line .jcrop-vline,.solid-line .jcrop-hline{background:#FFF;}
        .jcrop-holder img,img.jcrop-preview{max-width:none;}

        body {
            width: 100%;
            font-family: Arial;

        }

        input#crop {
            padding: 5px 25px 5px 25px;
            background: lightseagreen;
            border: #485c61 1px solid;
            color: #FFF;
            visibility: hidden;
        }

        #cropped_img {
            margin-top: 40px;
        }



        input[type='file']{
            display: none;
        }










    </style>


</head>

<body>
<section class="hero is-success is-fullheight" style="width: 100%">
    <div class="hero-body" >
        <div class="container has-text-centered" >
            <div class="column is-4 is-offset-4" >


                <div class="box" >
                    <form id="upload">

                        <div id="Progresso" class="form-group" style="margin-bottom: 5px; display: none">
                            <label class="col-sm-2 control-label"></label>
                            <div class="col-sm-10"  style="width: 100%">
                                <div class="progress progress-striped active" style="margin: auto">
                                    <div class="progress-bar" style="width: 0%; "></div>
                                </div>
                            </div>
                        </div>

                                <div id="btn5" style="display: none; margin-bottom: 5px;"><div  class="button is-block is-link is-large is-fullwidth">Selecione para cortar</div></div>

                                <div id="btn1" style="margin-bottom: 5px; margin-top: 20px;"><input type="file" id="img" name="img" required><label style="height: 100px; line-height: 75px;" for="img" class="button is-block is-link is-large is-fullwidth">Escolha uma foto</label></div>


                                <div id="btn2" style="margin-bottom: 5px; display: none"><button onclick="chamar();" type="submit" id="crop" class="button is-block is-link is-large is-fullwidth">Cortar Imagem</button></div>





                        <div id="btn3"><img style="margin: auto;"  src="" id="cropbox"></div>
                        <div id="btn4"  style="display: none"><a style="text-decoration: none" href="../index.php" id="ok" class="button is-block is-link is-large is-fullwidth">OK</a></div>
                    </form>
                    <div id="mensagens"></div>
                    <div id="btn6" style="display: none; margin-top: 5px"><a style="text-decoration: none"  href='index.php' class="button is-block is-link is-large is-fullwidth">Reajustar</a><br></div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
<script>
    var Wo = 0
    var Ho = 0
    var Wi = 0
    var Hi = 0


    $(document).ready(function(){
        $("#img").change(function (){


            document.getElementById('btn1').style.display = 'none'
            document.getElementById('btn5').style.display = 'block'
            <?php  $count = 0; $_SESSION['count'] = $count;  ?>

            $('#btn3').empty();
            $('#mensagens').empty();

            var img = $('<img  src="" id="cropbox">');
            img.appendTo('#btn3');



            readUrl(this);
        });




        function readUrl(input){
            if(input.files && input.files[0]){
                var reader = new FileReader();
                reader.onload = function (e) {
                    $("#cropbox").attr("src", e.target.result);


                    var img = new Image();
                    img.onload = function() {

                        Wo = this.width
                        Ho = this.height

                    }
                    img.src = e.target.result

                    var size;
                    $('#cropbox').Jcrop({
                        aspectRatio: 1,
                        onSelect: function(c){


                            document.getElementById('btn2').style.display = 'block'
                            document.getElementById('btn5').style.display = 'none'
                            $('#mensagens').empty();
                            size = {x:c.x,y:c.y,w:c.w,h:c.h};

                        }
                    });





                    $("#upload").on("submit", (function (e){
                        document.getElementById('btn2').style.display = 'none'
                        document.getElementById('Progresso').style.display = 'block'

                        $("#cropbox").css("visibility", "visible");
                        $("#cropbox").css("display", "block");



                        Wi = document.getElementById('cropbox').width
                        Hi = document.getElementById('cropbox').height

                       // alert(Wi + " " + Hi + "\n\n" + Wo + " " + Ho + "Kwa")


                        $("#cropbox").css("visibility", "visible");
                        $("#cropbox").css("display", "none");
                        e.preventDefault();
                        $.ajax({
                            url: "upload.php?x="+size.x+"&y="+size.y+"&w="+size.w+"&h="+size.h+"&Wo="+Wo+"&Wi="+Wi+"&Ho="+Ho+"&Hi="+Hi,
                            type: "POST",
                            cache:false,
                            processData:false,
                            contentType:false,
                            data: new FormData(this),
                            /*beforeSend: function (){
                                console.log("Aguarde, estamos salvando sua imagem")
                            }*/
                            success: function (data){
                                $("#mensagens").html(data);
                            },
                            error: function (){
                                $("#mensagens").html("Tivemos um erro ao tentar salvar a sua imagem!")
                            }
                        });


                        $('#btn3').empty();
                    }))



                    $(document).on('submit', 'form', function (e){
                        e.preventDefault();
                        //Receber os dados

                        $form = $(this);
                        var formdata = new FormData ($form['0']);

                        var request = new XMLHttpRequest();

                        request.upload.addEventListener('progress', function (e){
                            var percent = Math.round(e.loaded/e.total * 100);
                            $form.find('.progress-bar').width(percent + '%').html(percent + '%');
                        });

                        //Upload Completo limpar a barra de progresso
                        request.addEventListener('load', function (e){

                            setTimeout("" +
                                "document.getElementById('Progresso').style.display = 'none';" +
                                "document.getElementById('btn4').style.display = 'block';" +
                                "document.getElementById('btn6').style.display = 'block'" +
                                "", 1000);
                        });


                        request.open('post', 'upload.php');
                        request.send(formdata);
                    });



                }
                reader.readAsDataURL(input.files[0]);
            }

        }



    });
</script>
</html>


