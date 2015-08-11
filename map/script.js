// Code goes here
//Función anónima que se llama a sí misma
//Sirve para controlar
//Tb sirve para importar librerías cuyo alcance será el mismo
//que el de la función anónima

(function(window, google){
  
  //opciones del mapa
  var opciones = {
    center: {
      lat:40.41677540,
      long:-3.7037901999999576
    },
    zoom:10
  }, 
  elemento=document.getElementById('map-canvas'),
  mapa=new google.maps.Map(elemento,opciones);
} (window, google));
