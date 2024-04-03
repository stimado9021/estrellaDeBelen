<?php include_once("cuerpos/header.php") ?>
<?php include_once("cuerpos/menu.php") ?>


<div class="container">
    <div class="p-3">
        <div class="col-md-6 mx-auto">
            <div  class="card mb-5 "
                style="background:#C0C0C0;box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);height:300px">

                <div class="card-header">
                    <h3 class="text-center text-primary">Blog</h3>
                </div>

                <div class="card-body p-3" style="">
                    <div id="targetaCedula" class="mt-3">
                       <h1 class="text-white text-center">blog en construccion</h1>
                    </div>
                </div> 
           
            </div>
        </div>
    </div>
</div>    

    


<?php include_once("cuerpos/footer.php") ?>

<script>

//const autoCompleteJS = new autoComplete({ });



window.onload = function(){
  
    document.getElementById('formCedula').style.display='none'
}


document.getElementById("lista").addEventListener('click', (e)=>{
   
   var nombre=e.target.innerHTML
   tecla.value=nombre.trim()
    document.getElementById("lista").style.display="none"
});


var tecla = document.getElementById('nombres')

tecla.addEventListener('keyup', ()=>{
    document.getElementById("lista").style.display="block"

    var lista = document.getElementById('lista');
    fragmento=tecla.value
    data={
        fragmento
    }
    axios.post('./backend/buscarFragmentoUsuarioBack.php', data)
                .then(response => {
                    const json = response.data
                    
                var  tabla = '';
        json.forEach(function(elem){
           
            tabla += `<li name="fullName"
                        style="cursor:pointer;border-top:1px solid #9e9e9e;background-color:#EEEEEE;width:100% "                         
                        class="text-dark" 
                        key="${elem.id}" >
                            ${elem.fullName} 
                    </li>` 
        })       
        document.getElementById("lista").innerHTML=tabla;                    
                })
})



document.getElementById('regisVisita').addEventListener('click', ()=>{
            const id = document.getElementById('id').value
           data={
            id
         }

         axios.post('./backend/saveVisitaUserBack.php', data)
                .then(response => {
                    const json = response
                    console.log(json)
                  alert('visita de usuario registrada')
                  location.href = '/regAsistencia.php'
                })

})

document.getElementById("buscarCedula").addEventListener('click', () => {
    const fullName = document.getElementById('nombres').value
    console.log(fullName)
    data = {
        fullName,
    }
    axios.post('./backend/buscarUsuarioBack.php', data)
        .then(response => {
            const json = response.data
         console.log(json)
            if(json.length > 0) {
                document.getElementById('formCedula').style.display='block'
                document.getElementById('targetaCedula').style.display='none'
                document.getElementById('id').value=json[0].id
                document.getElementById('fullName').value=json[0].fullName             
                document.getElementById('phone').value=json[0].phone
                document.getElementById('status').value=json[0].status
            }else{
                let resp = confirm("la persona no esta registrada ¿Desea Registrarla Ahora?");
                if(resp){
                    location.href = '/addUsuario.php'
                }else{
                    location.href = '/regAsistencia.php'
                }
            }
            
        })



})
</script>