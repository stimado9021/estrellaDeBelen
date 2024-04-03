<?php include_once("cuerpos/header.php") ?>
<?php include_once("cuerpos/menu.php") ?>
    

<div class="container">
<div class="mx-auto text-uppercase " style="height:500px">
	<div class="row">
		<div class="col-4">
			<img class="mt-5" src="img/logoBelen2.png" width="150px" alt="iglesia">  
<h1 class="display-4 text-primary text-uppercase mx-auto"><small class="text-danger text-uppercase">iglesia </small> belen</h1>
<p class="mx-auto">Iglesia Cristiana</p> 
		</div>
		<div class="col-8 display-4 mt-4">
			<canvas id="myChart"></canvas
		</div>
	</div>

</div>  
</div>  


<?php include_once("cuerpos/footer.php") ?>

<script>
 axios.get('./backend/traerUsuarios.php')
                .then(response => {
                	const reg = response.data
                	let cantVis=0;
                  let cantNoMiembros=0;
                  let cantBauti=0
                  let cantTras=0
                  let cantMiembro=0
                  let cantDif=0
                  let cantFP=0
                	
                	reg.map((r)=>{

             switch (r.status) {
  								case "visita":
  									cantVis++
  								break;
  								case "no miembro":
  									cantNoMiembros++
  								break;
  								case "bautizado":
  									cantBauti++
  								break;
  								case "traslado":
  									cantTras++
  								break;
  								case "miembro":
  									cantMiembro++
  								break;
                case "fallecido":
                    cantDif++
                  break;
                   case "fuera del pais":
                    cantFP++
                  break;
  								default:
    							console.log("No hay Status");
  							}	
  					
                	})

                  const ctx = document.getElementById('myChart');

                      new Chart(ctx, {
                        type: 'bar',
                        data: {
                          labels: ['Visitantes', 'No Miembros', 'Bautizados', 'traslado', 'Miembro','Fallcidos','En Extranjero'],
                          datasets: [{
                            label: '# personas',
                            data: [cantVis, cantNoMiembros, cantBauti, cantTras, cantMiembro, cantDif,cantFP],
                            borderWidth: 1
                          }]
                        },
                        options: {
                          scales: {
                            y: {
                              beginAtZero: true
                            }
                          }
                        }
                      });
                })
         
  
</script>