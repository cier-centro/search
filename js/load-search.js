$(document).ready(function() {
    var hostname = window.location.hostname;
    $("#contentSearch").load("http://"+hostname+"/unidades_didacticas/search/view-search.php");
});

