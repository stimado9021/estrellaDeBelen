<?php include_once("./cuerpos/header.php") ?>
<?php include_once("./cuerpos/menu.php") ?>
  
    <div class="container"  style="height:700px"  >
                           

                    <div class="mx-auto">
                        <div class="col-12 mt-5">
                            <div class="card" style="box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);background:#C0C0C0">
                                <div class="card-header">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12">
                                                <label>Opciones de Busqueda</label>
                              <select class="form-control" id="buscarPor">
                                  <option value="">Elija opciones de busqueda</option>
                                  <option value="profesion">Profesion</option>
                                  <option value="ministerio">Ministerio</option> 
                                  <option value="status">Status</option>  
                                  <option value="sede">Sede</option>                       
                                 <!--  <option value="estadoCivil">estado Civil</option> 
                                  <option value="genero">Genero</option> 
                                  <option value="responsabilida">Responsabilidad</option> -->
                              </select>
                                            </div>       
                                             <div class="col-md-4 col-sm-12">
                                                 <label>Parametros De Busqueda</label>
                                                  <select class="form-control" id="paramSeach">
                                                 </select>    
                                            </div> 
                                            <div class="col-md-2 col-sm-12">
                                                <br>
                                                 <button id="readSearch" class="btn btn-primary btn-lg w-100 ">Buscar</button>
                                            </div> 
                                             <div class="col-md-2 col-sm-12">
                                                <br>
                                                 <a Target="_blank" onclick="genPDF()" id="CrearPDF" class="btn btn-success btn-lg w-100">Crear PDF</a>
                                            </div> 
                                        </div>
                                </div>
                                <div class="card-body">
                                    <table id="tablaItems" class="table table-responsive-sm text-center text-uppercase" style="font-size:12px">
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
const buscarPor = document.getElementById('buscarPor')
buscarPor.addEventListener('change',(e)=>{
     const search  =  e.target.value
    switch (search) {
  case "profesion":
        axios.get('/backend/traerProfesion.php')
            .then((response)=>{
               const prof = response.data
               var select=`<option>Seleccione Una Profesion</option>`
               prof.forEach((elem)=>{
                  select += `<option value="${elem.Profesion}">${elem.Profesion}</option>`
               })
               
                  document.getElementById('paramSeach').innerHTML=select
            })
    break;
  case "ministerio":
            axios.get('/backend/traerMinisterio.php')
            .then((response)=>{
               const mini = response.data
               var select=`<option>Seleccione Un Ministerio</option>`
               mini.forEach((elem)=>{
                  select += `<option value="${elem.ministerio}">${elem.ministerio}</option>`
               })
               document.getElementById('paramSeach').innerHTML=select
            })
    break;
  case "status":
                axios.get('./backend/traerStatus.php')
                .then(response => {
                    const st = response.data

                    tabla = '<option selected>Elija status de la persona</option>';
                    st.forEach(function(elem) {
                        tabla += `<option value="${elem.status}">${elem.status}</option>`
                    })
                    const conter = document.getElementById("paramSeach").innerHTML = tabla;
                })
     break;
   case "sede":
             axios.get('./backend/traersede.php')
                .then(response => {
                    const sd = response.data                  
                    tabla2 = `<option value="">Elija una Sede</option>`;
                    sd.forEach(function(elem) {
                        tabla2 += `<option value="${elem.nombreSede}">${elem.nombreSede}</option>`
                    })
                    document.getElementById('paramSeach').innerHTML=tabla2
                })
     break;
  // case "loro":
  //   console.log("Tengo un loro");
  //   break;
  default:
    console.log("No tengo mascota");
    break;
}
        
})

//***************************************************************************************************
var doc=new jsPDF();
  function genPDF(){
    const imagen = document.createElement('img')
    const titulo = 'lista de Miembros de Profesion : '
    imagen.src='./img/logoBelen2.png'
    const tabUser=document.getElementById('tablaItems')

    doc.addImage( imagen,'png', 10, 10, 20, 20)
     doc.text(40,25,titulo.toUpperCase())
    

    var linea = 40
    for(var i =0;i<tabUser.rows.length-1;i++){
     if(i===0){
        doc.setFillColor(255,0,0);
        doc.setTextColor(0,0,255)
        doc.line(10, 30, 160, 30);
    }else{
        doc.setFontSize(12)
        doc.setTextColor(255,0,0);
    }
        doc.text(10,linea,tabUser.rows[i].cells[0].innerHTML.toUpperCase())
        doc.text(80,linea,tabUser.rows[i].cells[1].innerHTML.toUpperCase())
        doc.text(140,linea  ,tabUser.rows[i].cells[2].innerHTML.toUpperCase())
        linea = linea + 10
   
    }
   
    doc.save('Test.pdf');
            // var doc=new jsPDF();
            // let mensaje=document.getElementById('esc').value;
            // doc.text(20,20,mensaje);
            // doc.addPage();
            // doc.text(20,20,'Mi trabajo!!');
            // doc.save('Test.pdf');
        }

//*************************************************************************************************    
document.getElementById('readSearch').addEventListener('click',()=>{
       const buscarPor = document.getElementById('buscarPor').value
       const indexSearch =document.getElementById('paramSeach')
       const paramSeach = document.getElementById('paramSeach').options[indexSearch.selectedIndex].text
      console.log(buscarPor)
       data={
        buscarPor,
        paramSeach
       }
         axios.post('/backend/busquedaTotal.php',data)
         .then(response=>{
            const user = response.data
           
                    if(user.length>0){
                        tabla = '';
                        user.forEach(function(elem){
                            tabla += `<tr key="${elem.id}">
                            <td>${elem.fullName}</td>            
                            <td>${elem.cedula}</td>           
                            <td>${elem.phone}</td>          
                    
                            <td><a href="asistePersona.php?id=${elem.id}"  class=" btn btn-success text-white">Asistencia</a></td></tr>` 
                        })
       
                    }
                     const conter = document.getElementById("addTabla").innerHTML=tabla;
        })
       
})


//*********************************************************
window.onload = function(){
    llenarTabla()
}

//*********************************************************
async function llenarTabla(){
            await axios.get('/backend/traerUsuarios.php')    
            .then(response => {
                    const user = response.data
                    if(user.length>0){
                        tabla = '';
                        user.forEach(function(elem){
                            tabla += `<tr key="${elem.id}">
                            <td>${elem.fullName}</td>            
                            <td>${elem.cedula}</td>           
                            <td>${elem.phone}</td>          
                    
                            <td><a href="asistePersona.php?id=${elem.id}"  class=" btn btn-success text-white">Asistencia</a></td></tr>` 
                        })
       
                    }
            const conter = document.getElementById("addTabla").innerHTML=tabla;
        })
}
//*********************************************************

//*********************************************************

//*********************************************************

//*********************************************************

//*********************************************************

//*********************************************************
    
</script>  