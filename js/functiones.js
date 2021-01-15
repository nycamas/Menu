function mensa()
{
  document.getElementById("picada").focus();
}
function avs(name)
{
  document.getElementById(name).submit();  
}
function reinic(elque)
{
  document.getElementById(elque).innerHTML ="";
}
function apicar(){
  document.getElementById("etq11").innerHTML = "<form method='post' class='uevo' action='php/picada.php'> <center>  <input id='picada'  name='picada' class='picada' type='text' autocomplete='off' placeholder='numero empleado'></center></form>";
  document.getElementById("picada").focus();

}

function escribeP(){
  document.getElementById("etq21").innerHTML = "<form  method='post form-inline' class='inp izq input-group'>  <label class='sr-only'>Nombre: <input id='no' name='no' class='inp form-control' type='text' placeholder='nombre empleado' require> </label><label class='sr-only'>1er Apellido: <input id='ap1' name='ap1' class='inp form-control' type='text' placeholder='Primer Apellido ...' require> </label> <label class='sr-only'>2º Apellido: <input id='ap2' name='ap2' class='inp form-control' type='text' placeholder='Segundo Apellido ...' require> </label>  <label class='sr-only'>DNI: <input id='dn' name='dn' class='inp form-control' type='text' placeholder='DNI empleado' require> </label>  <label class='sr-only'>Puesto: <select id='pu' name='pu' class='inp' require> <option value='dir'>Director Técnico</option> <option value='ger'>Gerente</option><option value='tec'>Técnico</option><option value='admon'>Administrativo</option></select></label> <label>Número: <input id='num' name='num' class='inp form-control'  type='text' placeholder='Nº empleado...' require> </label>  <label class='sr-only'>Horario: <select id='hora' name='hora'class='inp form-control'><option value='1'>De 7 a 3</option><option value='2'>De 8 a 5</option><option value='3'>De 3 a 11</option><option value='4'>De 11 a 7</option><option value='5'>De 9 a 1 y de 5 a 8</option></select> </label><label class='form-check-label'>Autoriz. Horas <input id='hora' class='inp form-check-input' name='hora' type='checkbox'>  </label><center> <input class='but' type='submit' value='Grabar'></center> </form>";
  document.getElementById("no").focus();
  }
function escribeH(){
  document.getElementById("etq21").innerHTML = "<form  method='post' class='inp cen form-inline'>  <label>ID horario:              <input id='hora' name='hora' class='inp' type='text' placeholder='ID horario' require> </label> <label>Descripcion: <input id='de' name='de' class='inp' placeholder='Descripcion...'> </label><center><input class='but' type='submit' value='Grabar'></center></form>";
document.getElementById("hora").focus();
}

function escribeA() { document.getElementById("etq21").innerHTML = "<div class='inp der form-inline'><center><button onclick='' class='but'>ajustar horas extras</button><button onclick='' class='but'>Horas anuales</button><button onclick=''class='but'>Ajustar Parámetros</button> </center></div>"; }