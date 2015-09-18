<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width" />
        <title>search</title>
        <script type="text/javascript" charset="utf-8" src="/unidades_didacticas/search/js/search.js"></script>
        <script type="text/javascript" charset="utf-8" src="/unidades_didacticas/search/js/popup.js"></script>
        <script src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>
        <link rel="stylesheet" type="text/css" href="/unidades_didacticas/search/css/jquery-ui.min.css">
        <link rel="stylesheet" type="text/css" href="/unidades_didacticas/search/css/jquery-ui.structure.min.css">
        <link rel="stylesheet" type="text/css" href="/unidades_didacticas/search/css/jquery-ui.theme.min.css">
        <link rel="stylesheet" type="text/css" href="/unidades_didacticas/search/css/estilos.css">
        <link rel="stylesheet" type="text/css" href="/unidades_didacticas/search/css/style-popup.css">
        <link rel="stylesheet" type="text/css" href="/unidades_didacticas/search/css/responsive.css">
    </head>
    <body>

        <div class="contenedorBusqueda">
            <div class="busqueda">
                <div class="contenedorInicio">
                </div>
                <div class="contenedorNivel">
                    <select id="level" name="level">
                        <option value="">Nivel</option>
                        <option value="1">Basica primaria</option>
                    </select>
                </div>
                <div class="contenedorGrado">
                    <select id="grade" name="grade">
                        <option value="">Grado</option>
                        <option value="G_1">1°</option>
                    </select>
                </div>
                <div class="contenedorArea">
                    <select id="matter" name="matter">
                        <option value="">Área</option>
                        <option value="L">Lenguaje</option>
                    </select>
                </div>
                <div class="contenedorBuscar">
                    <input type="text" id="keyword" name="keyword" value="">
                    <button id="btnFind" name="btnFilter" >Buscar</button>
                    <button id="open">Chat</button>
                </div>
            </div>
        </div>

        <div id="dialog" title="Lista de resultados" style="display:none;" >
            <ul id="lo"></ul>
        </div>
        
        <!-- Element chat -->
        <div id="popup" style="display: none;">
            <div class="content-popup">
                <div class="close"><a href="#" id="close"><img src="/unidades_didacticas/search/images/close.png"/></a></div>
                <iframe src="/unidades_didacticas/chat_im" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:600px; height:400px;" allowTransparency="true"></iframe>
            </div>
        </div>

        <div class="popup-overlay"></div>
        <!------------------>

    </body>
</html>
