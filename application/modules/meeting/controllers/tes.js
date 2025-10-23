<!-- ############################++++++++++++++++SCRIPT AJAX DELETING ================############################ -->
<!-- ############################++++++++++++++++SCRIPT AJAX DELETING ================############################ -->
<script type="text/javascript">
$(document).ready(function(){
$(".deleterow").click(function(){
var id = $(this).attr("id");
$(".erow"+id).hide('slow');
$(".drow"+id).hide('slow');
$(".crow"+id).show('slow');
});
$("#tidak").click(function(){
$(".alert").hide('slow');
$(".deleterow").show('slow');
});
$(".hapus").click(function(){
var id = $(this).attr("id");
var triger = "del";
$.ajax({
type: "POST",
url: "pros.php",
data: 'id=' + id + '&triger=' + triger,
success: function(html){
$('#successpop').show('slow');
$('.hilang').hide('slow');
$('.timbul').load('timbul2.php');
},
error: function(){
$('#gagalpop').show('slow');
}
});
var detik = 3;
function hitung(){
var to = setTimeout(hitung,1000);
detik --;
if(detik < 0){
clearTimeout(to);
$("#errorpop , #gagalpop, #successpop").hide('slow');
}
}
hitung();
});
$(document).mouseup(function(){
$(".formnya, .updaterow, .alert").hide('slow');
$(".textnya, .editrow, .deleterow").show('slow');
});
});
</script>
<!-- ############################++++++++++++++++SCRIPT AJAX EDITING ================############################ -->
<!-- ############################++++++++++++++++SCRIPT AJAX EDITING ================############################ -->
<script type="text/javascript">
$(document).ready(function(){
$(".editrow").click(function(){
var id = $(this).attr("id");
$(".erow"+id).hide('slow');
$(".urow"+id).show('slow');
$("#editmail"+id).hide('slow');
$("#editpass"+id).hide('slow');
$("#boxmail"+id).show('slow');
$("#boxpass"+id).show('slow');
});
$(".updaterow").click(function(){
var id = $(this).attr("id");
var email = $("input#boxmail"+id).val();
var pass = $("input#boxpass"+id).val();
var triger = "edit";
if( email == "" ){
$('#errorpop').show('slow');
}else{
$.ajax({
type: "POST",
url: "pros.php",
dataType: 'json',
data: 'id=' + id + '&email=' + email + '&pass=' + pass + '&triger=' + triger,
success: function(html){
$('#successpop').show('slow');
$('.hilang').hide('slow');
$('.timbul').load('timbul2.php');
},
error: function(){
$('#gagalpop').show('slow');
}
});
}
var detik = 3;
function hitung(){
var to = setTimeout(hitung,1000);
detik --;
if(detik < 0){
clearTimeout(to);
$("#errorpop , #gagalpop, #successpop").hide('slow');
}
}
hitung();
});
$(".formnya").mouseup(function(){
return false;
});
});
</script>
<!-- ############################++++++++++++++++SCRIPT AJAX ADDING ================############################ -->
<!-- ############################++++++++++++++++SCRIPT AJAX ADDING ================############################ -->
<script type="text/javascript">
$(".simpan").click(function(){
var triger = "tambah";
$.ajax({
type: "POST",
url: "pros.php",
dataType: 'json',
data: 'triger=' + triger,
success: function(){
$('#successpop').show('slow');
$('.hilang').hide('slow');
$('.timbul').load('timbul2.php');
},
error: function(){
$('#gagalpop').show('slow');
}
});
var detik = 3;
function hitung(){
var to = setTimeout(hitung,1000);
detik --;
if(detik < 0){
clearTimeout(to);
$("#errorpop , #gagalpop, #successpop").hide('slow');
}
}
hitung();
});
</script>
<script>
!function ($) {
$(document).on("click","ul.nav li.parent > a > span.icon", function(){
$(this).find('em:first').toggleClass("glyphicon-minus");
});
$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
}(window.jQuery);
 
$(window).on('resize', function () {
if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
})
$(window).on('resize', function () {
if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
})
</script>