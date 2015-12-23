$(document).ready(function (){
  $( "#campo").keypress(function() {
  	$("#teste").append("<input id='nome' type='text' name='data[nome]'> </input>");
  });
});