<?php include_once("cuerpos/header.php") ?>
<?php include_once("cuerpos/menu.php") ?>


<div class="container">
    <div class="p-3">
        <div class="card mb-5  " style="background: #C0C0C0;box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);">
            <div class="card-header">
                <h3 class="text-center text-primary">Datos Basicos</h3>
            </div>
            <div class="body p-3">
                <div class="container">
                 
                       <div class="col-12">
                         <label> Nombre y Apellido</label>  
                         <input id="fullName"  type="text" class="form-control w-100">  
                       </div>
                        <div class="row mt-2">
                           <div class="col-md-4 col-sm-12">
                              <label>cedula</label> 
                              <input id="cedula"   type="text" class="form-control w-100">
                           </div>
                     
                          <div class="col-md-4 col-sm-12">
                              <label>telefono</label>
                              <input id="phone"  type="text" class="form-control w-100">
                          </div>
                           
                      
                            <div class="col-md-4 col-sm-12">
                                    <label>correo</label>
                                   <input id="correo"  type="text" class="form-control w-100">
                            </div>
                        </div>
                      
                       <div class="row mt-2">
                            <div class="col-md-4 col-sm-12">
                            <label>direccion</label>
                            <input id="direccion"  type="text" class="form-control w-100"> 
                            </div>
                            <div class="col-md-2 col-sm-12">
                            <label>Estado</label>
                            <select id="estado"  class="form-control w-100">
                            </select>
                            </div>
                             <div class="col-md-2 col-sm-12">
                            <label>Municipio</label>
                            <select id="municipio"  class="form-control w-100">
                               
                            </select> 
                            </div> <div class="col-md-2 col-sm-12">
                            <label>Parroquia</label>
                            <select id="parroquia"  class="form-control w-100">
                               
                            </select> 
                            </div> <div class="col-md-2 col-sm-12">
                            <label>Sector</label>
                            <input id="sector"  type="text" class="form-control w-100"> 
                            </div>

                       </div> 
                     <div class="row mt-2">
                        
                        <div class="col-md-3 col-sm-12">
                           <label>sede</label>
                           <select id="sede" class="form-control"></select>
                       </div>

                       <div class="col-md-3 col-sm-12">
                          <label>status</label>
                           <select id="status" class="form-control"></select>
                       </div>

                     </div>
                        
                      <div class="row mt-3">
                         <div class="col-md-8 col-sm-12 mx-auto">
                            <button class="form-control btn btn-success"  id="updateBasicos">Actualizar Datos</button>
                         </div>
                      </div>
                </div>
            </div>               
        </div>
        <!-- ************************************************************************************************
        ************************************************************************************************
        ************************************************************************************************ -->
        <div class="p-3 ">
                    <div class="card mt-5 text-white mb-5 " style="background: #C0C0C0;box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);">
                        <div class="card-header">
                            <h3 class="text-center text-primary">Datos Generales</h3>
                        </div>
                    <div class="body p-3">
                        <div class="container">
                                <div class="row">
                                    <input type="hidden" id="idDB" >                                                                      
                                    <div class="col-md-3 col-sm-12">
                                        <label for="profesion">Profesion</label>
                                    <select  class="form-control col-6" id="profesion" ></select>
                                    </div>

                                     <div class="col-md-2 col-sm-12">
                                        <label for="genero">Genero</label>
                                    <select name="genero" id="genero" class="form-control " >
                                    <option value="0">Seleccione Genero </option>
                                        <option value="mujer">mujer</option>
                                        <option value="hombre">hombre</option>                                       
                                    </select>
                                    </div>

                                    <div class="col-md-2 col-sm-12">
                                        <label for="fnac">Fecha de nacimiento</label>
                                    <input type="date" class="form-control " id="fNac" >
                                    </div>

                                      <div class="col-md-3 col-sm-12">
                                        <label for="responsabilidad">Responsabilidad</label>
                                          <select name="respo" id="respo" class="form-control " >
                                              <option value="0">Seleccione Opcion </option>
                                              <option value="1">diezmo</option>
                                              <option value="2">ofrrenda</option>
                                              <option value="2">donaciones</option>                                       
                                          </select>
                                    </div>
                                    <div id="tv" class="col-md-2 col-sm-12">
                                     <label for="tiempo">Asistiendo Desde</label>
                                     <input  type="date" class="form-control " id="tiempoVisita" >
                                    </div>

                                </div>
                                <div class="row mt-3">
                                   
                                    
                                    
                                    <div class="col-md-3 col-sm-12">
                                        <label for="ministerio">Ministerio</label>
                                        <select name="ministerio" id="ministerio" class="form-control " ></select>
                                    </div>
                                    <div class="col-md-2 col-sm-12">
                                        <label for="subMinisterio">Sub Ministerio</label>
                                        <select name="subMinisterio" id="subMinisterio" class="form-control " ></select>
                                    </div>

                                     <div class="col-md-2 col-sm-12">
                                        <label for="bautizado">Bautisado</label>
                                          <select  name="bauti" id="bauti" class="form-control " >
                                              <option value="0">Seleccione Opcion </option>
                                              <option value="Si">Si</option>
                                              <option value="No">No</option>                                       
                                          </select>
                                    </div>
                                    <div class="col-md-2 col-sm-12">
                                        <label for="fbauti">Fecha Bautismo</label>
                                        <input type="date" id="fechaBautismo" class="form-control">
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <label for="iglesiaBautismo">Iglesia Bautismo</label>
                                        <input type="text" id="IgleBautismo" class="form-control">
                                    </div>

                                </div>
                                <div class="row mt-3">
                                   <div class="col-md-3 col-sm-12">
                                        <label for="estadoCivil">Estado Civil</label>
                                        <select name="estadoCivil" id="estadoCivil" class="form-control " >
                                        <option value="0">Seleccione una opcion</option>
                                            <option value="soltero">soltero</option>
                                            <option value="casado">casado</option>
                                            <option value="viudo">viudo</option>
                                            <option value="Divorciado">Divorciado</option>
                                            <option value="concubinato">concubinato</option>
                                        </select>
                                        </div>
                                        <div class="col-md-2 col-sm-12">
                                        <label for="fnac">Fecha de Boda</label>
                                        <input type="date" class="form-control " id="fBoda" >
                                        </div>
                                         <div class="col-md-4 col-sm-12">
                                        <label for="pareja">Pareja/conyugue/esposa</label>
                                    <input type="text" class="form-control " id="nombrePareja" placeholder="Ingrese Nombre De la Pareja Si lo Hubiera">
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <label for="nhijos">Numero de Hijos</label>
                                          <input id="nhijos" class="form-control" type="number">
                                    </div>
                                </div>
                                <div id="nombresHijos" class="row mt-3">
                                    
                                </div>
                                <div class="row mt-5">
                                 <div id="dEX" class="col-md-8 col-sm-12 mx-auto">
                                   
                                 </div>                                   
                                </div>
                        </div>
                    </div>
                </div>

        <?php include_once("cuerpos/footer.php") ?>

        <script>
//***************************************************************************
const contHijos = document.getElementById('nhijos')
let html=``
contHijos.addEventListener('change',()=>{
    var nro = contHijos.value
    
    if(nro>0){
      html +=  `<div class="col-md-3 col-sm-12">
            <label for="nombHijo">Nombre Del Hijo</label>
            <input type="text" name="nombreHijo" id="nombreHijo" class="form-control">
        </div>`
        document.getElementById('nombresHijos').innerHTML=html
    }

})


//***************************************************************************

        window.onload = function() {
           const estado = []
           const muni =[]
           const parro = []

            fetch('venezuela.json')
            .then(data=>data.json())
            .then(data=>{
                let contMunici = 0;
                data.map(ven=>{
                        const estados = ven.estado
                        estado.push(estados)
                        
                              muni.push(ven.municipios)
                                ven.municipios.forEach((m)=>{
                                 
                                  parro.push(m)
                                  
                                })                                              

                })
              

            const sta = document.getElementById('estado')
            let selecto=``
            estado.forEach((s)=>{
                    selecto += `<option value="${s}">${s}</option>`
            })
            sta.innerHTML=selecto
            sta.addEventListener('change',()=>{
               // console.log(sta.options[sta.selectedIndex].value)
                const mu = muni[sta.selectedIndex]
                const munis = document.getElementById('municipio')
                let muniSelecto=``
            mu.forEach((s)=>{
                    muniSelecto += `<option value="${s.municipio}">${s.municipio}</option>`
            })
                munis.innerHTML=muniSelecto;
            })
            const munis = document.getElementById('municipio')
            munis.addEventListener('change',()=>{
                        var parroMuni = []
                        let mb = munis.options[munis.selectedIndex].value
                        parroMuni=parro.filter(p=>p.municipio===mb)
                          //console.log(parroMuni)
                        const alfinParra=parroMuni[0].parroquias
                        let parroSelecto=`<option value="`
                        alfinParra.forEach((s)=>{
                            parroSelecto += `<option value="${s}">${s}</option>`
                        })
                      
                        const parodia = document.getElementById('parroquia')

                        parodia.innerHTML = parroSelecto
            })
            
       
  })
//*************************************************************************************************
         axios.get('/backend/traerProfesion.php')
            .then((response)=>{
               const prof = response.data
               var select=`<option>Seleccione Una Profesion</option>`
               prof.forEach((elem)=>{
                  select += `<option value="${elem.idProfe}">${elem.Profesion}</option>`
               })
               
                  document.getElementById('profesion').innerHTML=select
            })
         
//***************************************************************************
             axios.get('/backend/traerMinisterio.php')
            .then((response)=>{
               const mini = response.data
               var select=`<option>Seleccione Un Ministerio</option>`
               mini.forEach((elem)=>{
                  select += `<option value="${elem.idMini}">${elem.ministerio}</option>`
               })
               document.getElementById('ministerio').innerHTML=select
            })

//***************************************************************************
            var id = getParameterByName('id');
               calculaTiempo(id)
               DatosCompletos(id)

            data={
            id
         }

         axios.post('./backend/buscarDatosPersonales.php', data)
                .then(response => {
                    const json = response.data[0]  
                  
                    document.getElementById('idDB').value=json.id                  
                    document.getElementById('fullName').value=json.fullName
                    document.getElementById('cedula').value=json.cedula
                    document.getElementById('phone').value=json.phone
                    document.getElementById('correo').value=json.correo
                    document.getElementById('direccion').value=json.direccion  
                    document.getElementById('estado').options[0].text=json.estado  
                    document.getElementById('municipio').innerHTML=`<option value="${json.municipio}">${json.municipio}</option>`  
                    document.getElementById('parroquia').innerHTML=`<option value="${json.parroquia}">${json.parroquia}</option>`   
                    document.getElementById('sector').value=json.sector                
                    document.getElementById('status').value=json.status  
                    
                  
//***************************************************************************   

                        axios.get('./backend/traerStatus.php')
                        .then(response => {
                            const st = response.data
                             tabla = `<option value="${json.status}">${json.status}</option>`;
                            st.forEach(function(elem) {
                        tabla += `<option value="${elem.status}">${elem.status}</option>`
                            })
                            document.getElementById("status").innerHTML = tabla;
                         })
               
//***************************************************************************                       
                
                       
                        axios.get('./backend/traersede.php')
                .then(response => {
                    const sd = response.data                  
                    tabla2 = `<option value="${json.sede}">${json.sede}</option>`;
                    sd.forEach(function(elem) {
                        tabla2 += `<option value="${elem.nombreSede}">${elem.nombreSede}</option>`
                    })
                    document.getElementById('sede').innerHTML=tabla2
                })
             
                   
                    
                    
                
                })
        }

//**************************************************************************************
           const  DatosCompletos =  (id)=>{
                   var botonExtra = document.createElement("button");
                        data={
                           id
                        }
                     axios.post('/backend/buscarDatosExtrasPersonales.php', data)
                     .then(response=>{
                    
                         if(response.data.length<1){
                         
                         
                          botonExtra.setAttribute("onclick","saveDatosG()")
                          botonExtra.innerText ="Guardar Datos"
                          botonExtra.style.padding = '5px'
                          botonExtra.style.background = 'blue'
                          botonExtra.style.color = 'white'
                          botonExtra.style.width = '100%'
                          botonExtra.style.borderRadius = '5px'

                         document.getElementById('dEX').appendChild(botonExtra)
                     
                         
                         }else{
                        
                           botonExtra.setAttribute("onclick","updateDatosG()")
                           botonExtra.innerText='Actualizar Datos'
                           botonExtra.style.padding = '5px'
                           botonExtra.style.background = 'green'
                           botonExtra.style.color = 'white'
                           botonExtra.style.width = '100%'
                           botonExtra.style.borderRadius = '5px'

                           document.getElementById('dEX').appendChild(botonExtra)
                     
                           var ex = response.data[0]

                          //  const stateCivil=document.getElementById('estadoCivil')
                          // const estCiv = buscarEstadoCivil(ex.estadoCivil)
                                
                        document.getElementById('idDB').value = ex.id
                        // stateCivil.options[0].text = ex.estadoCivil
                        
                        document.getElementById('nombrePareja').value= ex.nombrePareja
                        document.getElementById('profesion').options[0].text= ex.profesion
                        document.getElementById('estadoCivil').options[0].text=ex.estadoCivil
                        document.getElementById('genero').options[0].text= ex.genero           
                        document.getElementById('fNac').value = ex.fechaNacimiento
                        document.getElementById('tiempoVisita').value= ex.tiempoVisita
                        document.getElementById('ministerio').options[0].text= ex.ministerio 
                        document.getElementById('bauti').options[0].text= ex.bautizado
                        document.getElementById('respo').options[0].text= ex.responsabilida
                        document.getElementById('nhijos').value=  ex.nroHijos  

                         }
                  })
            
            }
//*****************************************************************************************
const calculaTiempo = (id)=>{
   data={
      id
   }
   axios.post('/backend/buscarAsistenciaBack.php',data)
   .then(response=>{
   
      if(response.data[0]){
                             
            //   var fecha =response.data[0].RegistroVisita
            //   const fecAct=new Date() 
            // const mili =  milisegundosTranscurridosEntreFechas(fecha,fecAct)   
            // const { años, meses, dias } = tiempoTranscurridoPreciso(mili)       
            
            document.getElementById('tiempoVisita').value=response.data[0].RegistroVisita
        }
        
    
   })
}    
//***************************************************************************

       
        </script>