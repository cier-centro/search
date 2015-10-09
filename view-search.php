<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width" />
        <title>search</title>
        <script type="text/javascript" charset="utf-8" src="/unidades_didacticas_test/search/js/search.js"></script>
        <script type="text/javascript" charset="utf-8" src="/unidades_didacticas_test/search/js/popup.js"></script>
        <script type="text/javascript" charset="utf-8" src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>
        <link rel="stylesheet" type="text/css" href="/unidades_didacticas_test/search/css/jquery-ui.min.css">
        <link rel="stylesheet" type="text/css" href="/unidades_didacticas_test/search/css/jquery-ui.structure.min.css">
        <link rel="stylesheet" type="text/css" href="/unidades_didacticas_test/search/css/jquery-ui.theme.min.css">
        <link rel="stylesheet" type="text/css" href="/unidades_didacticas_test/search/css/estilos.css">
        <link rel="stylesheet" type="text/css" href="/unidades_didacticas_test/search/css/style-popup.css">
        <link rel="stylesheet" type="text/css" href="/unidades_didacticas_test/search/css/responsive.css">
        
        <!--Start of Zopim Live Chat Script-->
        <script type="text/javascript">
        window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
        d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
        _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
        $.src="//v2.zopim.com/?3KPE6yIWJppZjfe4WJmJK7i0GLDNAsIg";z.t=+new Date;$.
        type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
        </script>
        <!--End of Zopim Live Chat Script-->
        
    </head>
    <body>

        <div class="contenedorBusqueda">
            <div class="busqueda">
                <div class="contenedorInicio">
                </div>
                <div class="contenedorNivel">
                    <select id="level" name="level">
                        <option value="">Nivel</option>
                        <option value="1">BÁSICA PRIMARIA</option>
                        <option value="2">BÁSICA SECUNDARIA</option>
                        <option value="3">MEDIA</option>
                    </select>
                </div>
                <div class="contenedorGrado">
                    <select id="grade" name="grade">
                        <option value="">Grado</option>
                        <option value="G_1">1°</option>
                        <option value="G_2">2°</option>
                        <option value="G_3">3°</option>
                        <option value="G_4">4°</option>
                        <option value="G_5">5°</option>
                        <option value="G_6">6°</option>
                        <option value="G_7">7°</option>
                        <option value="G_8">8°</option>
                        <option value="G_9">9°</option>
                        <option value="G_10">10°</option>
                        <option value="G_11">11°</option>
                    </select>
                </div>
                <div class="contenedorArea">
                    <select id="matter" name="matter">
                        <option value="">Área</option>
                        <option value="L">LENGUAJE</option>
                        <option value="M">MATEMÁTICAS</option>
                        <option value="L">CIENCIAS</option>
                    </select>
                </div>
                <div class="contenedorBuscar">
                    <input type="text" id="keyword" name="keyword" value="">
                    <button id="btnFind" name="btnFilter" >Buscar</button>
                </div>
            </div>
        </div>

        <div id="dialog" title="Lista de resultados" style="display:none;" >
            <table>
                <thead>
                    <tr>
                        <td>NIVEL</td>
                        <td>GRADO</td>
                        <td>ÁREA</td>
                        <td>NOMBRE DEL CONTENIDO DE APRENDIZAJE</td>
                    </tr>
                </thead>
                <tbody id="lo"></tbody>
            </table>
        </div>
    
    </body>
</html>
