
<html>
    <head>
        <script src="jquery/jquery-3.2.1.min.js" type="text/javascript"></script>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form>
            <input id="nomusuario "type="text" name="nomusuario" >
            <input id="clave" type="password" name="clave" i>
            <input id="enviar" type="button" onclick="" value="Enviar">
        </form>
    </body>
    <script>
    $(document).ready(function()
    {
            $("#enviar").click(function()
            {
                $("form").hide();
            });
    });
    </script>
</html>
