<p class="titulo">Atender requisiciones</p>
<div class="accordion_requesicion">
	<button class="requisicion">Nueva requisición: 13/12/2018</button>
	<div class="informe_requisicion">
	  <div class="table_requisi">
	  	<table id="tableRequi" width="100%">
	  		<tr>
	  			<th>Concepto</th>
	  			<th>Medida</th>
	  			<th>Categoría</th>
	  			<th>Solicitud</th>
	  			<th>Solicitante</th>
	  		</tr>
	  		<tr>
	  			<td><p class="concep_requis">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	  			tempor.</p></td>
	  			<td>71378128</td>
	  			<td>Papeleria</td>
	  			<td>2342342342</td>
	  			<td>Luis Arturo Navarrete Salgado</td>
	  		</tr>
	  		<tr>
	  			<td><p class="concep_requis">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	  			tempor.</p></td>
	  			<td>71378128</td>
	  			<td>Papeleria</td>
	  			<td>2342342342</td>
	  			<td>Luis Arturo Navarrete Salgado</td>
	  		</tr>
	  		<tr>
	  			<td><p class="concep_requis">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	  			tempor.</p></td>
	  			<td>71378128</td>
	  			<td>Papeleria</td>
	  			<td>2342342342</td>
	  			<td>Luis Arturo Navarrete Salgado</td>
	  		</tr>
	  		<tr>
	  			<td><p class="concep_requis">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	  			tempor.</p></td>
	  			<td>71378128</td>
	  			<td>Papeleria</td>
	  			<td>2342342342</td>
	  			<td>Luis Arturo Navarrete Salgado</td>
	  		</tr>
	  	</table>
	  </div>
	</div>
	<button class="requisicion">Nueva requisición: 16/12/2018</button>
	<div class="informe_requisicion">
	  <div class="table_requisi">
	  	<table width="100%">
	  		<tr>
	  			<th>Concepto</th>
	  			<th>Medida</th>
	  			<th>Categoría</th>
	  			<th>Solicitud</th>
	  			<th>Solicitante</th>
	  		</tr>
	  		<tr>
	  			<td><p class="concep_requis">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	  			tempor.</p></td>
	  			<td>71378128</td>
	  			<td>Papeleria</td>
	  			<td>2342342342</td>
	  			<td>Luis Arturo Navarrete Salgado</td>
	  		</tr>
	  		<tr>
	  			<td><p class="concep_requis">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	  			tempor.</p></td>
	  			<td>71378128</td>
	  			<td>Papeleria</td>
	  			<td>2342342342</td>
	  			<td>Luis Arturo Navarrete Salgado</td>
	  		</tr>
	  		<tr>
	  			<td><p class="concep_requis">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	  			tempor.</p></td>
	  			<td>71378128</td>
	  			<td>Papeleria</td>
	  			<td>2342342342</td>
	  			<td>Luis Arturo Navarrete Salgado</td>
	  		</tr>
	  		<tr>
	  			<td><p class="concep_requis">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	  			tempor.</p></td>
	  			<td>71378128</td>
	  			<td>Papeleria</td>
	  			<td>2342342342</td>
	  			<td>Luis Arturo Navarrete Salgado</td>
	  		</tr>
	  	</table>
	  </div>
	</div>
	<button class="requisicion">Nueva requisición: 18/12/2018</button>
	<div class="informe_requisicion">
	  <div class="table_requisi">
	  	<table width="100%">
	  		<tr>
	  			<th>Concepto</th>
	  			<th>Medida</th>
	  			<th>Categoría</th>
	  			<th>Solicitud</th>
	  			<th>Solicitante</th>
	  		</tr>
	  		<tr>
	  			<td><p class="concep_requis">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	  			tempor.</p></td>
	  			<td>71378128</td>
	  			<td>Papeleria</td>
	  			<td>2342342342</td>
	  			<td>Luis Arturo Navarrete Salgado</td>
	  		</tr>
	  		<tr>
	  			<td><p class="concep_requis">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	  			tempor.</p></td>
	  			<td>71378128</td>
	  			<td>Papeleria</td>
	  			<td>2342342342</td>
	  			<td>Luis Arturo Navarrete Salgado</td>
	  		</tr>
	  		<tr>
	  			<td><p class="concep_requis">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	  			tempor.</p></td>
	  			<td>71378128</td>
	  			<td>Papeleria</td>
	  			<td>2342342342</td>
	  			<td>Luis Arturo Navarrete Salgado</td>
	  		</tr>
	  		<tr>
	  			<td><p class="concep_requis">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	  			tempor.</p></td>
	  			<td>71378128</td>
	  			<td>Papeleria</td>
	  			<td>2342342342</td>
	  			<td>Luis Arturo Navarrete Salgado</td>
	  		</tr>
	  	</table>
	  </div>
	</div>
</div>

<script src="../../js/system/panelA/requisitions.js"></script>
<script>
var acc = document.getElementsByClassName("requisicion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>