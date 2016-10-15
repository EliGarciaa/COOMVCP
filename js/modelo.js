// Nueva clase para guardar 
function GuardarUser(nombre, edad) {
	this.nombre = nombre;
	this.edad = edad;
}
// creamos nuevo metodo
GuardarUser.prototype.getGuardar = function(){
	var _this = this;

	var UserBox = {};
		UserBox.nombre = this.nombre;
		UserBox.edad = this.edad;
	var UserBoxJson = JSON.stringify(UserBox);
	//alert(UserBoxJson);
	$.ajax({
		url : 'controlador.php',
		type : 'GET',
		data : {'UserBox' : UserBoxJson},
		success : function(data){
			alert(data);
		}
	})
}