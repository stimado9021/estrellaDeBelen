<?php include_once("./cuerpos/header.php") ?>
<?php include_once("./cuerpos/menu.php") ?>
    
    <div class="container"  style="height:1100px"  >                        
                    <div class=" mt-5">
                    <h3 class="text-center text-white">Configurar Contenido de Select en Profesion</h3>
                    
                        <div id="contenedor" class="col-4 mt-5 mb-5 mx-auto">                       
                            <div class="card" style="box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);background:#C0C0C0">
                                <div id="header" class="card-header">
                                    <h4 class="text-center text-white">Configurar Profesion</h4>
                                </div>
                                <div id="body" class="card-body">
                                   <div class="container">
                                    <label id="title"><i class="fi fi-sr-person-dolly"></i>Profesion Nueva </label>
                                       <input id="oficio" class="form-control" placeholder='ingrese Profesion'>
                                       <button id="addProfe" class="btn btn-primary mt-3 mb-3 mx-auto btn-lg w-100">Ingresar</button>
                                     
                                   </div>
                                   <div class="container">
                                       <table class="table table-bordered text-uppercase text-white text-center">
                                           <thead class="bg-dark text-white">
                                               <tr>
                                                   <td>id</td>
                                                   <td>Profesion</td>
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
   listarProfesion()
}

//***************************************************************************
//***************************************************************************
//***************************************************************************



//***************************************************************************
//***************************************************************************
//***************************************************************************
document.getElementById('addProfe').addEventListener('click',()=>{
   const profesion = document.getElementById('oficio').value
   if(profesion){
     const data={
        profesion
  }
  axios.post('./backend/saveProfesion.php', data)
                .then(response => {
                    const json = response
                    listarProfesion()
                    alert('registro Exitoso')
                    document.getElementById('oficio').value=''
                    //location.href = '/config.php'
                })
            }else{
                alert('formulario debe contener una profesion')
            }
 
})


//***************************************************************************
//***************************************************************************
//***************************************************************************
const deleteProfe = (id)=>{
    console.log(id)
   data={
        id
    }
    axios.post('/backend/deleteProfesion.php',data)
    .then(response=>{
        listarProfesion()
        
    })
        

}

//***************************************************************************
//***************************************************************************
//***************************************************************************
const listarProfesion = ()=>{  
     axios.get('/backend/traerProfesion.php')
            .then((response)=>{
                var oficio = response.data
                
                if(oficio.length>0){
                    var html = ''
                    oficio.forEach(item=>{
                      html +=  `<tr><td>${item.idProfe}</td><td>${item.Profesion}</td><td>
                                <button onclick="deleteProfe(${item.idProfe})"  class="btn btn-danger"><i class="fi fi-rr-trash"></i></button></td></tr>`
                    })
                    document.getElementById('tbody').innerHTML=html
                }else{
                    document.getElementById('tbody').innerHTML=`<tr><td colspan="3">registro vacio</td></tr>`
                }
            }) 
}



  
</script>  					