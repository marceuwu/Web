<?php include('template/cabecera.php'); ?>   
    <main>
        <br/>
        <br/>
        <br/>
        <br/>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                    <div class="text-center mb-6 mb-lg-9">
                        <h2 class="my-3">Contacto</h2>
                        <p class="mb-0 lead"> Pregunta acerca de nuestros productos o servicios. Te responderemos a la brevedad.
                        </p>
                    </div>
                </div>
            </div>
        </div>
         <!--contact us-->
        <section class="mb-xl-9 my-5">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-10 offset-lg-1 col-md-12 col-12">
                        <div class="row g-xl-7 gy-5">
                            <div class="col-md-7 col-12">
                                <div class="card shadow-sm">
                                    <div class="card-body">
                                        <form class="row g-3 needs-validation"
                                            novalidate>
                                            <div class="col-lg-6 col-md-12">
                                                <label for="contactFirstNameInput"
                                                    class="form-label">
                                                    Nombre
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="text"
                                                    class="form-control"
                                                    id="contactFirstNameInput"
                                                    required />
                                                <div class="invalid-feedback">Please
                                                    enter firstname.</div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <label for="contactLastNameInput"
                                                    class="form-label">
                                                    Apellidos
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="text"
                                                    class="form-control"
                                                    id="contactLastNameInput"
                                                    required />
                                                <div class="invalid-feedback">Please
                                                    enter lastname.</div>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="contactEmailInput"
                                                    class="form-label">
                                                    Correo
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="email"
                                                    class="form-control"
                                                    id="contactEmailInput"
                                                    required />
                                                <div class="invalid-feedback">Please
                                                    enter email.</div>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="contactCompanyNameInput"
                                                    class="form-label">Empresa</label>
                                                <input type="text"
                                                    class="form-control"
                                                    id="contactCompanyNameInput"
                                                    required />
                                                <div class="invalid-feedback">Please
                                                    enter company name.</div>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="contactPhoneInput"
                                                    class="form-label">Teléfono</label>
                                                <input type="tel"
                                                    class="form-control"
                                                    id="contactPhoneInput"
                                                    required />
                                                <div class="invalid-feedback">Please
                                                    enter phone.</div>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="contactTextarea"
                                                    class="form-label">Mensaje</label>
                                                <textarea class="form-control"
                                                    id="contactTextarea"
                                                    placeholder="Escríbenos..."
                                                    rows="4" required></textarea>
                                                <div class="invalid-feedback">Please
                                                    enter a message.</div>
                                            </div>
                                            <div class="d-grid">
                                                <button class="btn btn-primary"
                                                    type="submit">Enviar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 col-12">
                                <div class="mb-7">
                                    <div
                                        class="icon-shape bg-primary bg-opacity-10 rounded icon-md mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16"
                                            fill="currentColor"
                                            class="bi bi-headset text-primary"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h4>Soporte técnico</h4>
                                        <p class="mb-0">
                                            ¿Encontraste un error persistente o necesitas ayuda para configurar 
                                            a un nuevo miembro del equipo? ¿No puedes resolver una función? 
                                            <a href="soporte.html" class="text-primary">¡Avísanos!</a>
                                        </p>
                                    </div>
                                <br/>
                                </div>
                                <div class="mb-7">
                                    <div class="d-flex mb-4">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                width="16" height="16"
                                                fill="currentColor"
                                                class="bi bi-geo-alt-fill"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                                            </svg>
                                        </div>
                                        
                                        <div class="ms-2">
                                            <h5 class="mb-0">Dirección:</h5>
                                            <small>Paseo Constituyentes 310-5
                                                Colonia Jardines de la Hacienda
                                                CP. 76180 Querétaro, Qro.</small>
                                        </div>
                                    </div>
                                    <div class="d-flex mb-4">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                width="16" height="16"
                                                fill="currentColor"
                                                class="bi bi-telephone"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                            </svg>
                                        </div>
                                        <div class="ms-2">
                                            <h5 class="mb-0">Teléfono:</h5>
                                            <small>
                                                (442) 242 76 42
                                            </small>
                                        </div>
                                    </div>
                                    <div class="d-flex mb-4">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                width="16" height="16"
                                                fill="currentColor"
                                                class="bi bi-envelope-check"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z" />
                                                <path
                                                    d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-1.993-1.679a.5.5 0 0 0-.686.172l-1.17 1.95-.547-.547a.5.5 0 0 0-.708.708l.774.773a.75.75 0 0 0 1.174-.144l1.335-2.226a.5.5 0 0 0-.172-.686Z" />
                                            </svg>
                                        </div>
                                        <div class="ms-2">
                                            <h5 class="mb-0">Correo:</h5>
            
                                            <small>
                                                <a href="#!"
                                                    class="text-reset">contacto@soprade.com</a>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--contact us-->
    </main>
<?php include('template/pie.php'); ?>