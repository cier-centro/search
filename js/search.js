var nameFolderProject = 'unidades_didacticas_test';

$(document).ready(function() {
    
    $('#btnFind').click(function() {
        findLerningObject();
    });
    
});

function openDialog() {
    $( "#dialog" ).dialog({
        modal:true,
        width: 1000,
        height: 800,
        resizable: false
    });
};

function findLerningObject() {
    var hostname = "";
    var grade = "";
    var matter = "";
    var keyword = "";
    var url = "";
    var level = "";
    grade = $('#grade').val();
    matter = $('#matter').val();
    keyword = $('#keyword').val();
    level = $('#level').val();
    
    if(grade == "" && matter=="" && keyword=="" && level==""){
        alert("Favor seleccione al menos un criterio de busqueda");
        return false;
    }
    
    hostname = window.location.hostname;
    url = '/'+nameFolderProject+'/search/class/SearchController.php';

    $.ajax({
        type: 'post',
        url: url,
        dataType: 'json',
        async: false,
        data: {'grade': grade, 'matter': matter, 'keyword': keyword,'level':level},
        error: function(jqXHR, textStatus, errorThrown) {
            alert('Error (Petición) { ' + jqXHR + ' - ' + textStatus + ' - ' + errorThrown + ' }');
        },
        success: function(data) {
            if (data.length != 0) {
                openDialog();
                var content = "";
                content = "<table>";
                $.each(data, function(i, lo) {
                    content += '<tr>';
                    content += '<td>'+$.trim(lo.level)+'</td>';
                    content += '<td>'+$.trim(lo.grade)+'</td>';
                    content += '<td>'+$.trim(lo.matter)+'</td>';
                    content += '<td><a target="_parent" href="/'+nameFolderProject+'/'+$.trim(lo.grade)+'/'+$.trim(lo.matter)+'/menu_'+$.trim(lo.code_lo)+'">'+$.trim(lo.name_lo)+'</a></td>';
                    content += '</tr>';
                });
                
                $('#lo').html(content);
                
            } else {
                alert('Señor usuario (a), No se encontraron resultados en la busqueda.');
            }
        }

    });
}







