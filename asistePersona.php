<?php include_once("./cuerpos/header.php") ?>
<?php include_once("./cuerpos/menu.php") ?>
                            
    <div class="container"  style="height:700px"  >
                           

                    <div class="mx-auto">
                        <div class="col-12 mt-5">
                            <div class="card" style="box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);background:#C0C0C0">
                                <div class="card-header">
                                   <div class="row">
                                        <div class="col-md-3 col-sm-12">
                                            <div id="fullname" ></div>
                                        </div>
                                         <div class="col-md-2 col-sm-12">
                                           <div id="cedula" ></div>
                                         </div>                                          
                                   
                                        <div class="col-md-3 col-sm-12">
                                            <div id="status" ></div>
                                          </div>
                                           <div class="col-md-4 col-sm-12">
                                                <div id="sede" ></div>
                                            </div>
                                   </div>
                                </div>
                                <div class="card-body">
                                    <table id="tablaItems" class="table table-responsive-sm text-center text-uppercase" style="font-size:12px">
                                    <thead class=" text-white bg-primary " >
                                    
                                        <td>ID</td>
                                      
                                        <td>Fecha Asistencia</td>
                                                                               
                                        
                                        
                                    </thead>
                                    <tbody id="addTabla" >
                                    
                                    </tbody>
                                    <tfoot  class=" text-white bg-primary" >
                                        <tr>
                                            <td class="" colspan="7">registro de personas</td>
                                        </tr>
                                    </tfoot>
                                    
                                </table>
                                </div>
                            </div>                        
                        </div>
        
                    </div>
    </div>

    



<?php include_once("./cuerpos/footer.php") ?>


<script>

//***************************************************************************************************
// var doc=new jsPDF();
//       function genPDF(){
//                 const imagen = document.createElement('img')
//                 const titulo = 'lista de Miembros de Profesion : '
//                 imagen.src='./img/logoBelen2.png'
//                 const tabUser=document.getElementById('tablaItems')

//                 doc.addImage( imagen,'png', 10, 10, 20, 20)
//                  doc.text(40,25,titulo.toUpperCase())
                

//                 var linea = 40
//                 for(var i =0;i<tabUser.rows.length-1;i++){
//                  if(i===0){
//                     doc.setFillColor(255,0,0);
//                     doc.setTextColor(0,0,255)
//                     doc.line(10, 30, 160, 30);
//                 }else{
//                     doc.setFontSize(12)
//                     doc.setTextColor(255,0,0);
//                 }
//                     doc.text(10,linea,tabUser.rows[i].cells[0].innerHTML.toUpperCase())
//                     doc.text(80,linea,tabUser.rows[i].cells[1].innerHTML.toUpperCase())
//                     doc.text(140,linea  ,tabUser.rows[i].cells[2].innerHTML.toUpperCase())
//                     linea = linea + 10
               
//                 }           
//                 doc.save('Test.pdf');
              
//             }

//*************************************************************************************************    
// window.onload = function(){
//     llenarTabla()
// }

//*********************************************************
function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
    results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

var id = getParameterByName('id');
        data={
            id
         }

         axios.post('./backend/buscarDatosPersonales.php', data)
        .then(response => {
                    const json = response.data[0]  
                    
                    document.getElementById('fullname').innerHTML =`<p class="text-white text-center text-uppercase">Nombre : ${json.fullName}</p>`
                    document.getElementById('cedula').innerHTML =`<p class="text-white text-center text-uppercase">Cedula : ${json.cedula}</p>`  
                    document.getElementById('status').innerHTML =`<p class="text-white text-center text-uppercase">Status : ${json.status}</p>` 
                    document.getElementById('sede').innerHTML =`<p class="text-white text-center text-uppercase">Sede : ${json.sede}</p>` 
        })
//*********************************************************


        axios.post('./backend/traerFechasId.php', data)    
            .then(response => {
                    const fechaData = response.data

                    if(fechaData.length>0){
                        tabla = '';
                        fechaData.forEach(function(elem){
                            tabla += `<tr class="text-center text-white">
                            <td><h3>${elem.idAsi}</h3></td>            
                            <td><h3>${elem.RegistroVisita}</h3></td>` 
                        })
       
                    }
        const conter = document.getElementById("addTabla").innerHTML=tabla;
        })

//*********************************************************


    
</script>  