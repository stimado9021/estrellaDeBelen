<?php include_once("./cuerpos/header.php") ?>
<?php include_once("./cuerpos/menu.php") ?>
    

   

    <div class="container">
                           

                    <div class="mx-auto">
                        <div class="col-md-12 col-sm-8 col-xm-12 mt-5">
                            <div class="card" style="box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);background:#C0C0C0">
                                <div class="card-header">
                                <div class="row mt-5">
                                <div class="col-6">
                             <input id="nombres" name="nombres" type="text" placeholder="ingrese nombres" class="form-control text-left">
                             <ul class="" id="lista" style="list-style-type:none;background:white"></ul>
                         </div>
                                <div class="col-6 justify-content-end aling-items-end ">
                                <a style="left:80%;position:absolute" href="addUsuario.php" id="meteUsuario" class="btn btn-primary ">Agregar Usuario</a>
                                </div>
                            </div>
                                </div>
                                <div class="card-body">
                                    <table id="tablaItems" class="table  text-center text-uppercase" style="font-size:12px">
                                    <thead class=" text-white bg-primary " >
                                    
                                        <td>Nombre y apellidos</td>
                                      
                                        <td>Cedula</td>
                                        
                                        <td>Telefono</td>
                                       
                                        <td >Acciones</td>
                                        
                                        
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

//*****************************************************************
window.onload = function(){
    llenarTabla()
    console.log(dataVen)
   
}
//*************************************************************************************

//**********************************************************************
var tecla = document.getElementById('nombres')
    tecla.addEventListener('keyup', ()=>{
            document.getElementById("lista").style.display="block"        
                fragmento=tecla.value
                data={ fragmento }
                    axios.post('./backend/buscarFragmentoUsuarioBack.php', data)
                        .then(response => {
                            const json = response.data                                    
                            var  tabla = '';
                                json.forEach(function(elem){                               
                                    tabla += `<tr class="text-white" key="${elem.id}">
                                            <td>${elem.fullName}</td>            
                                            <td>${elem.cedula}</td>           
                                            <td>${elem.phone}</td>          
                                                    
                                            <td><a href="datoPersona.php?id=${elem.id}"  class=" btn btn-dark">Mas Informacion</a></td></tr>`  
                            })       
                            const conter = document.getElementById("addTabla").innerHTML=tabla;                    
                        })
})
//**********************************************************************
async function llenarTabla(){
 await axios.get('/backend/traerUsuarios.php')    
    .then(response => {
        const user = response.data
if(user.length>0){
        tabla = '';
        user.forEach(function(elem){  
        tabla += `<tr class="text-white" key="${elem.id}">
            <td>${elem.fullName}</td>            
            <td>${elem.cedula}</td>           
            <td>${elem.phone}</td>          
                    
            <td><a href="datoPersona.php?id=${elem.id}"  class=" btn btn-dark">Mas Informacion</a></td></tr>`            
        })
       
    }else{
        tabla =  `<tr><td colspan="6">
                    <div class="card  mx-auto mt-3 mb-3" style="background: #717D7E;width: 50%;" >       
                                <div class="card-body text-white">
                                    <p>Presiona este boton para que puedas registrar una persona en la aplicacion</p>
                                    <a href="/addUsuario.php" class="btn-btn-primary">Crear Persona</a>
                                </div>

                    </div>
                    </td></tr>
               `
    }
    const conter = document.getElementById("addTabla").innerHTML=tabla;
    })
     
}

//*************************************************************************



    
</script>  