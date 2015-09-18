var nameFolderProject = 'unidades_didacticas';

$(document).ready(function() {
    
    $('#btnFind').click(function() {
        findLerningObject();
    });
    
});

function openDialog() {
    $( "#dialog" ).dialog({
        modal:true,
        width: 600,
        height: 300,
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
    
    openDialog();
    
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
                var content = "";
                $.each(data, function(i, lo) {
                    //var event = "redirect('"+$.trim(lo.code_lo)+"')";
                    content += '<li><a target="_parent" href="/'+nameFolderProject+'/'+$.trim(lo.grade)+'/'+$.trim(lo.matter)+'/menu_'+$.trim(lo.code_lo)+'">'+$.trim(lo.name_lo)+'</a></li>';
                });
                
                $('#lo').html(content);
                
            } else {
                alert('Señor usuario (a), No se encontraron resultados en la busqueda.');
            }
        }

    });
}







