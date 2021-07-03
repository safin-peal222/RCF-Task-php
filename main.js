$(document).ready(function(){
$("#search").on("keyup",function(){
let search_val = $(this).val();
$.ajax({
url:"ajax-live-search.php",
type:"POST",
data : {search : search_term},
success : function(data){
    $("#table-data2").html(data);
}
});
});
});