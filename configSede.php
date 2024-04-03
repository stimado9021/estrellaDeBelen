<?php include_once("./cuerpos/header.php") ?>
<?php include_once("./cuerpos/menu.php") ?>
    
    <div class="container"  style="height:1100px"  >                        
                    <div class=" mt-5">
                    <h3 class="text-center text-white">Configurar Contenido de Select en Sedes de La Iglesia</h3>
                    
                        <div id="contenedor" class="col-4 mt-5 mb-5 mx-auto">                       
                            <div class="card" style="box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);background:#C0C0C0">
                                <div id="header" class="card-header">
                                    <h4 class="text-center text-white">Configurar Sedes</h4>
                                </div>
                                <div id="body" class="card-body">
                                   <div class="container">
                                    <label id="title"><i class="fi fi-sr-person-dolly"></i>Sede Nueva </label>
                                       <input id="oficio" class="form-control" placeholder='ingrese Sede'>
                                       <button id="addSede" class="btn btn-primary mt-3 mb-3 mx-auto btn-lg w-100">Ingresar</button>
                                     
                                   </div>
                                   <div class="container">
                                       <table class="table table-bordered text-uppercase text-white text-center">
                                           <thead class="bg-dark text-white">
                                               <tr>
                                                   <td>id</td>
                                                   <td>Sede</td>
                                                    <td>Accion</td>
                                               </tr>
                                           </thead>
                                           <tbody id="tbody">
                                               
                                           </tbody>
                                       </table>
                                   </div>
                                </div>
                            </div>

                            
                        </div>
        
                    </div>
    </div>

    



<?php include_once("./cuerpos/footer.php") ?>


<script>
//***************************************************************************
//***************************************************************************
//***************************************************************************

window.onload = function(){
   listarSedes()
}

//***************************************************************************
//***************************************************************************
//***************************************************************************



//***************************************************************************
//***************************************************************************
//***************************************************************************
document.getElementById('addSede').addEventListener('click',()=>{
   const sede = document.getElementById('oficio').value
  
   if(sede){
     const data={
        sede
  }
  axios.post('./backend/saveSede.php', data)
                .then(response => {
                    const json = response
                    
                    listarSedes()
                    alert('registro Exitoso')
                    document.getElementById('oficio').value=''
                    //location.href = '/config.php'
                })
            }else{
                alert('formulario debe contener una Sede')
            }
 
})


//***************************************************************************
//***************************************************************************
//***************************************************************************
const deleteSede = (id)=>{
    console.log(id)
   data={
        id
    }
    axios.post('/backend/deleteSede.php',data)
    .then(response=>{
        listarSedes()
        
    })
        

}

//***************************************************************************
//***************************************************************************
//***************************************************************************
const listarSedes = ()=>{  
     axios.get('/backend/traerSedes.php')
            .then((response)=>{
                var oficio = response.data
                
                if(oficio.length>0){
                    var html = ''
                    oficio.forEach(item=>{
                      html +=  `<tr><td>${item.idSede}</td><td>${item.nombreSede}</td><td>
                                <button onclick="deleteSede(${item.idSede})"  class="btn btn-danger"><i class="fi fi-rr-trash"></i></button></td></tr>`
                    })
                    document.getElementById('tbody').innerHTML=html
                }else{
                    document.getElementById('tbody').innerHTML=`<tr><td colspan="3">registro vacio</td></tr>`
                }
            }) 
}



  
</script>  					