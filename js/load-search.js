var nameFolderProject = 'unidades_didacticas_test';

$(document).ready(function() {
    var hostname = window.location.hostname;
    $("#contentSearch").load("http://"+hostname+"/"+nameFolderProject+"/search/view-search.php");
});

