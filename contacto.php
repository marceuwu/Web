<?php include('template/cabecera.php'); ?>   
    <main>
        <section class="bg-light py-lg-9 py-5">
            <div class="container">
                <br/>
                <br/>
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="card shadow-lg">
                            <div class="row g-0">
                                <div class="col-md-6 d-none d-md-block rounded-start-3"
                                    style="
                                        background-image: url(./img/img7.png);
                                        background-size: cover;
                                        background-repeat: no-repeat;
                                        background-position: center;
                                    ">
                                </div>
                                <div class="col-xl-6 col-md-6">
                                    <div class="card-body p-md-5">
                                        <form action="./config/registro.php" method="post" class="row g-3">
                                            <div class="col-lg-12">
                                                <h3>Contáctanos</h3>
                                            </div>
                                            <div class="col-lg-6 col-12">
                                                <label for="nombre" class="form-label">
                                                    Nombre
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="text" class="form-control" id="nombre" name="nombre" required>
                                            </div>
                                            <div class="col-lg-6 col-12">
                                                <label for="empresa" class="form-label">
                                                    Empresa
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="text" class="form-control" id="empresa" name="empresa" required>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="correo" class="form-label">
                                                    Correo
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="email" class="form-control" id="correo" name="correo" required>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="telefono" class="form-label">
                                                    Teléfono
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="tel" class="form-control" id="telefono" name="telefono" required>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="mensaje" class="form-label">Mensaje</label>
                                                <textarea class="form-control" id="companyTextarea" name="mensaje" placeholder="Escríbenos" rows="3" required></textarea>
                                            </div>
                                            <div class="d-grid">
                                                <input type="submit" value="Enviar" class="btn btn-primary rounded-pill">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br/>   
            <br/>   
            <br/>   
            <br/>   
            <section class="mb-xl-9">
                <div class="container">
                    <div class="row border-top border-bottom">
                        <div class="col-md-4 border-end-md border-bottom border-bottom-md-0">
                            <div class="text-center p-5 px-xl-8 px-md-0">
                                <div class="icon-lg icon-shape mb-4">
                                    <span class="material-symbols-outlined">
                                        location_on
                                    </span>
                                </div>
                                <h5>Ubicación</h5>
                                <p class="mb-0">Paseo Constituyentes 310-5 Colonia Jardines de la Hacienda CP. 76180 Querétaro, Qro.</p>
                            </div>
                        </div>
                        
                        <div class="col-md-4 border-end-md border-bottom border-bottom-md-0">
                            <div class="text-center p-5 px-xl-8 px-md-0">
                                <div class="icon-lg icon-shape mb-4">
                                    <span class="material-symbols-outlined">
                                        call
                                    </span>
                                </div>

                                <h5>Teléfono</h5>
                                <p class="mb-0">(442) 242 76 42</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="text-center p-5 px-xl-8 px-md-0">
                                <div class="icon-lg icon-shape mb-4">
                                    <span class="material-symbols-outlined">
                                        mail
                                    </span>
                                </div>

                                <h5>Correo</h5>
                                <p class="mb-0">contacto@soprade.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </main>
    
<?php include('template/pie.php'); ?>

<?php
// Mostrar la ventana emergente si existe el parámetro "errores" en la URL
if (isset($_GET['errores'])) {
    $errores = explode("\\n", $_GET['errores']);
    echo "<script>alert('Errores: \\n" . implode("\\n", $errores) . "');</script>";
} elseif (isset($_GET['exito'])) {
    // Mostrar ventana emergente de éxito si existe el parámetro "exito" en la URL
    echo "<script>alert('Información enviada exitosamente');</script>";
}
?>