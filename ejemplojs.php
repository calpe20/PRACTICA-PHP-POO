<script language=javascript>
	function agregar(){
		var x= 0;
		var x = document.frmbasico.texto.value + 1;
		alert(typeof(x));
		scriptAr = new Array();
		alert(typeof(scriptAr));
		//scriptAr[0] = document.frmbasico.texto.value;
		//var arv = scriptAr.toString()
		//alert(arv);
		document.frmbasico.texto.value = x;
	}
</script>
<form name='frmbasico' id='frmbasico' method='post' onSubmit='agregar()'>
	<input type='text' id='texto' name='texto'>
	<input type=submit>
</form> 