function SaveData(){
	var dato1 = document.getElementById("nombre").value;
	var dato2 = document.getElementById("edad").value;
	var datocaja = new GuardarUser(dato1, dato2);
	datocaja.getGuardar();
}