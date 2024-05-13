    <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 logo-footer">
                        <img src="./img/logo.png" alt="Logo de la empresa" class="logo">
                    </div>
                    <div class="col-lg-6">
                        <div class="mapa contenedor-mapa">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d29883.843031494536!2d-100.40971000000002!3d20.568431!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d3453c4468384d%3A0x834e83d4d97acf97!2sSoprade!5e0!3m2!1ses!2sus!4v1715566093735!5m2!1ses!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" class="mapa"></iframe>
                        </div>
                        
                    </div>
                </div>
            </div>
        </footer>

        <script src="./js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jarallax@2/dist/jarallax.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jarallax@2/dist/jarallax-video.min.js"></script>
        <script>
            // Selecciona todas las tarjetas
            const cards = document.querySelectorAll('.special-card');

            // Itera sobre cada tarjeta
            cards.forEach((card, index) => {
                // Añade un event listener para el evento mouseenter (hover)
                card.addEventListener('mouseenter', () => {
                    // Cambia el fondo de la tarjeta al hacer hover usando un color morado
                    card.style.background = `linear-gradient(45deg, rgba(155, 89, 182, 0.8) 0%, rgba(155, 89, 182, 0) 100%)`;
                    card.style.backgroundSize = 'cover';
                });

                // Añade un event listener para el evento mouseleave (cuando el cursor deja la tarjeta)
                card.addEventListener('mouseleave', () => {
                    // Restaura el fondo original de la tarjeta al quitar el hover
                    card.style.background = 'none'; // O el color de fondo que desees
                });
            });
        </script>

    </body>
</html>
