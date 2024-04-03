
function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
    results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}
//***************************************************************************
//***************************************************************************
const milisegundosTranscurridosEntreFechas = (inicio, fin) => {
    return new Date(fin).getTime() - new Date(inicio).getTime();
}
//***************************************************************************
//***************************************************************************
const tiempoTranscurridoPreciso = (diferenciaEnMilisegundos) => {
    const diasEnUnAño = 365.25;
    const diasEnUnMes = 30.437;
    const milisegundosEnUnSegundo = 1000;
    const milisegundosEnUnMinuto = milisegundosEnUnSegundo * 60;
    const milisegundosEnUnaHora = milisegundosEnUnMinuto * 60;
    const milisegundosEnUnDia = milisegundosEnUnaHora * 24;
    const milisegundosEnUnMes = milisegundosEnUnDia * diasEnUnMes;
    const milisegundosEnUnAño = milisegundosEnUnDia * diasEnUnAño;
    const años = Math.floor(diferenciaEnMilisegundos / milisegundosEnUnAño);
    diferenciaEnMilisegundos -= años * milisegundosEnUnAño;
    const meses = Math.floor(diferenciaEnMilisegundos / milisegundosEnUnMes);
    diferenciaEnMilisegundos -= meses * milisegundosEnUnMes;
    const dias = Math.floor(diferenciaEnMilisegundos / milisegundosEnUnDia);
    diferenciaEnMilisegundos -= dias * milisegundosEnUnDia;
    //const horas = Math.floor(diferenciaEnMilisegundos / milisegundosEnUnaHora);
    // diferenciaEnMilisegundos -= horas * milisegundosEnUnaHora;
    // const minutos = Math.floor(diferenciaEnMilisegundos / milisegundosEnUnMinuto);
    // diferenciaEnMilisegundos -= minutos * milisegundosEnUnMinuto;
    // const segundos = Math.floor(diferenciaEnMilisegundos / milisegundosEnUnSegundo);
    // diferenciaEnMilisegundos -= segundos * milisegundosEnUnSegundo;
    return { años, meses, dias};
}
//***************************************************************************
//***************************************************************************

//***************************************************************************
//***************************************************************************
   
//***************************************************************************
//***************************************************************************
document.getElementById('updateBasicos').addEventListener('click',()=>{
            data={
                  id: document.getElementById('idDB').value,
                  fullName: document.getElementById('fullName').value,
                  cedula:  document.getElementById('cedula').value,
                  phone:  document.getElementById('phone').value,
                  correo:  document.getElementById('correo').value,
                  direccion:  document.getElementById('direccion').value,
                  status:  document.getElementById('status').value,
                  estado:  document.getElementById('estado').options[document.getElementById('estado').selectedIndex].value,
                  municipio:  document.getElementById('municipio').options[document.getElementById('municipio').selectedIndex].value,
                  parroquia:  document.getElementById('parroquia').options[document.getElementById('parroquia').selectedIndex].value,
                  sector:  document.getElementById('sector').value,
                  sede:  document.getElementById('sede').value  ,                                          
            }
            console.log(data)
            axios.post('/backend/editUserBackend.php', data)
            .then(response=>{
               if(response.status===200){
                  alert('Actualizacion Exitosa')
               }
            })                             
})

//***************************************************************************
//***************************************************************************
const saveDatosG  = () => {
   const Prof =document.getElementById('profesion')
   const resP =document.getElementById('respo')
    const miniT =document.getElementById('ministerio')
    const idT = document.getElementById('idDB').value
    const tempo = document.getElementById('tiempoVisita').value
   
   var inputs = document.getElementsByName('nombreHijo');       
    var valores = [];        
    for (var i = 0; i < inputs.length; i++) {
        valores.push(inputs[i].value);
    }
    
   
    
    timeVis(idT,tempo)
   data={
         idUser: document.getElementById('idDB').value,
         estadoCivil :document.getElementById('estadoCivil').value,
         nombrePareja :document.getElementById('nombrePareja').value,
         profesion :document.getElementById('profesion').options[Prof.selectedIndex].text,
         genero :document.getElementById('genero').value,
         fNac :document.getElementById('fNac').value,
         tiempoVisita :document.getElementById('tiempoVisita').value,
         ministerio :document.getElementById('ministerio').options[miniT.selectedIndex].text,
         bauti :document.getElementById('bauti').value,
         respo :document.getElementById('respo').options[resP.selectedIndex].text,
         nhijos :document.getElementById('nhijos').value         
   }
 datosHijos={
      id:document.getElementById('idDB').value,
      nombres:valores
    }
 
 
    // axios.post('/backend/saveDatosExtraBackend.php', data)
    //         .then(response=>{ 

    //            if(response.status===200){
    //               alert('Registro Exitoso de Datos')
    //               location.href = `/datoPersona.php?id=${data.idUser}`
    //            }
    //         }) 
   
}
//***************************************************************************
//***************************************************************************
const updateDatosG  = () => {
   const Prof =document.getElementById('profesion')
   const resP =document.getElementById('respo')
    const miniT =document.getElementById('ministerio')
     const steciv =document.getElementById('estadoCivil')
     const gen =document.getElementById('genero')
     const bati =document.getElementById('bauti')
   
   data={
         idUser: document.getElementById('idDB').value,
         estadoCivil : document.getElementById('estadoCivil').options[steciv.selectedIndex].text,
         nombrePareja :document.getElementById('nombrePareja').value,
         profesion :document.getElementById('profesion').options[Prof.selectedIndex].text,
         genero :document.getElementById('genero').options[gen.selectedIndex].text,
         fNac :document.getElementById('fNac').value,
         tiempoVisita :document.getElementById('tiempoVisita').value,
         ministerio :document.getElementById('ministerio').options[miniT.selectedIndex].text,
         bauti :document.getElementById('bauti').options[bati.selectedIndex].text,
         respo :document.getElementById('respo').options[resP.selectedIndex].text,
         nhijos :document.getElementById('nhijos').value           
   }


    axios.post('/backend/editDatosExtraUserBackend.php', data)
            .then(response=>{ 
                 
               if(response.status===200){

                  alert('Actualizacion Exitosa')
               // location.href = `/datoPersona.php?id=${data.idUser}`
               }
            }) 
   
}
        
//*************************************************************************** 
 
const timeVis = (id,t)=>{
   
data={
    id:id,
    t:t
}


 axios.post('./backend/saveVisitaUserBack.php', data)
                .then(response => {
                    const json = response
                  
                 })  

}  

     

        
//***************************************************************************        