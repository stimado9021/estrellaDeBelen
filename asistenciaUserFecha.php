<?php include_once("./cuerpos/header.php") ?>
<?php include_once("./cuerpos/menu.php") ?>
  
    <div class="container"  style="height:700px"  >                           
                    <div class="mx-auto">
                        <div class="col-12 mt-5">
                            <div class="card" style="box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);background:#C0C0C0">
                                <div class="card-header">
                                        <div class="row">
                                            <div class="col-md-2 col-sm-12">
                                                <label>Fecha Desde</label>
                                                    <input type="date" class="form-control" type="date" id="fechaInicio">
                                            </div>       
                                             <div class="col-md-2 col-sm-12">
                                                 <label>Fecha Hasta</label>
                                                <input type="date" class="form-control" id="fechaFin">   
                                            </div> 
                                           <!--   <div class="col-md-2 col-sm-12">
                                                 <label>Sede</label>
                                                <select  class="form-control" id="sede">
                                                </select>   
                                            </div>  -->
                                           <!--  <div class="col-md-2 col-sm-12">
                                                <br>
                                                 <button id="readSearch" class="btn btn-primary btn-lg w-100 ">Buscar</button>
                                            </div> --> 
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
                                      
                                        <td>Fecha</td>   

                                   </thead>
                                    <tbody id="addTabla" >
                                    
                                    </tbody>
                                    <tfoot  class=" text-white bg-primary" >
                                        <tr>
                                            <td class="" colspan="6">registro de personas</td>
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
    //*********************************************************
    
        // const cajasedes =document.getElementById('sede')

        //     axios.get('/backend/traerSedes.php')
        //         .then((response)=>{
        //             var oficio = response.data
        //             let  html = '<option value="">Elija Una Sede</option>';
        //              oficio.forEach(item=>{
        //                   html +=  `<option value="${item.nombreSede}">${item.nombreSede}</option>`
        //                 })
        //             cajasedes.innerHTML=html
        //         })

               
    // cajasedes.addEventListener('change',async()=>{
    //             const fechaFin = document.getElementById('fechaFin')
    //             const fechaInicio = document.getElementById('fechaInicio')
    //             const cajasedes =document.getElementById('sede')
    //             const selecto = cajasedes.options[cajasedes.selectedIndex].value
    //             const fi = fechaInicio.value
    //             const ff = fechaFin.value
       
    //      data={
    //         fi,
    //         ff,
    //         selecto 
    //     }   
          
    //    await axios.post('/backend/buscarUsuarioFechaBack.php',data)    
    //         .then(response => {
    //                 const reg = response.data
    //      console.log(reg)
    //                 if(reg.length>0){
    //                     tabla = '';
    //                     reg.forEach(function(elem){
    //                         tabla += `
    //                         <tr key="${elem.id}">
    //                         <td>${elem.fullName}</td>            
    //                         <td>${elem.RegistroVisita}</td>           
    //                     ` 
    //                     })       
    //                 }
    //      const conter = document.getElementById("addTabla").innerHTML=tabla;
    //     })
  
    // })

//*********************************************************
   

fechaInicio.addEventListener('change',  async()=>{
       const fechaInicio = document.getElementById('fechaInicio')
       const fechaFin = document.getElementById('fechaFin')
        
        // const cajasedes =document.getElementById('sede')
        //  const selecto = cajasedes.options[cajasedes.selectedIndex].value
    const fi = fechaInicio.value
    const ff = fechaFin.value
 
    data={
    fi,
    ff
}   


       await axios.post('/backend/buscarUsuarioFechaBack.php',data)    
            .then(response => {
                    const reg = response.data
        console.log(reg)
                    if(reg.length>0){
                        tabla = '';
                        reg.forEach(function(elem){
                            tabla += `
                            <tr key="${elem.id}">
                            <td>${elem.fullName}</td>            
                            <td>${elem.RegistroVisita}</td>           
                        ` 
                        })       
                    }
         const conter = document.getElementById("addTabla").innerHTML=tabla;
        })
})  


fechaFin.addEventListener('change',  async()=>{
      const fechaFin = document.getElementById('fechaFin')
        const fechaInicio = document.getElementById('fechaInicio')
        // const cajasedes =document.getElementById('sede')
        //  const selecto = cajasedes.options[cajasedes.selectedIndex].value
    const fi = fechaInicio.value
    const ff = fechaFin.value
      
    data={
    fi,
    ff
}


       await axios.post('/backend/buscarUsuarioFechaBack.php',data)    
            .then(response => {
                    const reg = response.data
                        console.log(reg)
                    if(reg.length>0){
                        tabla = '';
                        reg.forEach(function(elem){
                            tabla += `
                            <tr key="${elem.id}">
                            <td>${elem.fullName}</td>            
                            <td>${elem.RegistroVisita}</td>           
                        ` 
                        })       
                    }
                  
                   
          const conter = document.getElementById("addTabla").innerHTML=tabla;
        })
})     


//*********************************************************
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
       
        linea = linea + 10
   
    }
   
    doc.save('Test.pdf');
          
        }

//*************************************************************************************************    



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
                            ` 
                        })
       
                    }
            const conter = document.getElementById("addTabla").innerHTML=tabla;
        })
}
//*********************************************************

//*********************************************************


    
</script>  