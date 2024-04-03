<?php include_once("cuerpos/header.php") ?>
<?php include_once("cuerpos/menu.php") ?>


<div class="container">
    <div class="p-3">
        <div class="card mb-5 " style="background: turquoise;box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);">
            <div class="card-header">
                <h3 class="text-center text-primary">Personas</h3>
            </div>
            <div class="body p-3">
                <div>
                    <form class="form-horizontal" style="">
                        <fieldset>


                            <div class="form-group mb-2">
                                <div class="row">
                                    <span class="col-1 col-md-offset-2 text-center">
                                        <i class="fi fi-rr-user"></i>
                                    </span>
                                    <div class="col-10">
                                        <input autofocus id="nombres" name="nombres" type="text"
                                            placeholder="ingrese nombres" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="row">
                                    <span class="col-1 col-md-offset-2 text-center">
                                        <i class="fi fi-rr-user"></i>
                                    </span>
                                    <div class="col-10  col-md-offset-2">
                                        <input id="apellidos" name="apellidos" type="text"
                                            placeholder="ingrese apellidos" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mb-2">
                                <div class="row">
                                    <span class="col-1 col-md-offset-2 text-center">
                                        <i class="fi fi-rr-id-badge"></i>
                                    </span>
                                    <div class="col-10 mb-2">
                                        <input id="cedula" name="cedula" type="text" placeholder="DNI V/E 99.999.999"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mb-2">
                                <div class="row">
                                    <span class="col-1 col-md-offset-2 text-center">
                                        <i class="fi fi-rr-envelope"></i>
                                    </span>
                                    <div class="col-10">
                                        <input id="correo" name="correo" type="text" placeholder="ingrese Email"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mb-2">
                                <div class="row">
                                    <span class="col-1 col-md-offset-2 text-center">
                                        <i class="fi fi-rr-circle-phone-flip"></i>
                                    </span>
                                    <div class="col-10 mb-2">
                                        <input id="phone" name="phone" type="text" placeholder="ingrese telefono"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mb-2">
                                <div class="row">
                                    <span class="col-1 col-md-offset-2 text-center">
                                        <i class="fi fi-rr-circle-phone-flip"></i>
                                    </span>
                                    <div class="col-10 mb-2">
                                        <input id="direccion" name="direccion" type="text" placeholder="ingrese Direccion"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                        

                            <!-- <div class="form-group mb-2">
                                    <div class="row">
                                        <span class="col-md-1 col-md-offset-2 text-center">
                                            <i class="fi fi-rr-dice-d6"></i>
                                        </span>
                                        <div class="col-md-10 mb-2">
                                            <select id="status" name="status" class="form-select text-uppercase "
                                                aria-label="Default select example"></select>
                                        </div>
                                    </div>
                                </div> -->


                            <div class="form-group">
                                <div class="col-md-10 text-center mt-3 d-grid gap-2 mx-auto">
                                    <button id="savepersona" type="button"
                                        class="btn btn-primary btn-lg">Agregar</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>


        <?php include_once("cuerpos/footer.php") ?>

        <script>
        window.onload = function() {
            llenarSelect()
        }


        async function llenarSelect() {
            await axios.get('./backend/traerStatus.php')
                .then(response => {
                    const st = response.data

                    console.log(st)
                    tabla = '<option selected>Elija status de la persona</option>';
                    st.forEach(function(elem) {
                        tabla += `<option value="${elem.id_sta}">${elem.status}</option>`
                    })
                    const conter = document.getElementById("status").innerHTML = tabla;
                })
        }



        document.getElementById("savepersona").addEventListener('click', () => {
            const nombres = document.getElementById('nombres').value
            const apellidos = document.getElementById('apellidos').value
            const cedula = document.getElementById('cedula').value
            const correo = document.getElementById('correo').value
            const phone = document.getElementById('phone').value
            const direccion = document.getElementById('direccion').value
            // const status = document.getElementById('status').value
            data = {
                nombres,
                apellidos,
                cedula,
                correo,
                phone,
                // status
            }


            axios.post('./backend/saveUserBackend.php', data)
                .then(response => {
                    const json = response
                    alert('registro Exitoso')
                    location.href = '/iglesiaBelen/usuarios'
                })



        })
        </script>