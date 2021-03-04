<section class="section section-md">
    <div class="container">
        <div class="row row-50">
            <div class="col-lg-8">
            <h2>Contactate con nosotros!</h2>
            <div class="divider-lg"></div>
            <p>Contactate con nosotros por cualquier duda, consulta, sugerencia o problema que tengas,<br
                class="d-none d-lg-inline">nosotros despejamos todas tus dudas, en cualquier momento de los horarios
                disponibles.
            </p>
            <!-- RD Mailform-->
            <form class="rd-mailform text-left rd-form" data-form-output="form-output-global" data-form-type="contact"
                method="post" action="php/contacto.php">
                <div class="row row-30">
                <div class="col-sm-6">
                    <div class="form-wrap">
                    <label class="form-label" for="contact-name">Nombre Completo</label>
                    <input class="form-input" id="nombre" type="text" name="nombre" data-constraints="@Required">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-wrap">
                    <label class="form-label" for="contact-sec-name">Apellido</label>
                    <input class="form-input" id="apellido" type="text" name="apellido"
                        data-constraints="@Required">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-wrap">
                    <label class="form-label" for="contact-phone">Teléfono</label>
                    <input class="form-input" id="telefono" type="number" name="telefono"
                        data-constraints="@Numeric @Required">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-wrap">
                    <label class="form-label" for="contact-email">Email</label>
                    <input class="form-input" id="email" type="email" name="email"
                        data-constraints="@Email @Required">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-wrap">
                    <label class="form-label" for="contact-message">Tu mensaje</label>
                    <textarea class="form-input" id="mensaje" name="mensaje"
                        data-constraints="@Required"></textarea>
                    </div>
                </div>
                </div>
                <div class="form-button group-sm text-left">
                <button class="button button-primary" type="submit">Enviar Mensaje</button>
                </div>
            </form>
            </div>
            <div class="col-lg-4">
            <ul class="contact-list">
                <li>
                <p class="contact-list-title">Ubicación</p>
                <div class="contact-list-content"><span class="icon mdi mdi-map-marker icon-primary"></span><a
                    href="#">Eduardo López Moreira 4846, Asunción, Paraguay </a></div>
                </li>
                <li>
                <p class="contact-list-title">Teléfono</p>
                <div class="contact-list-content"><span class="icon mdi mdi-phone icon-primary"></span><a
                    href="tel:+595984644111">+595 984 644111</a></div>
                </li>
                <li>
                <p class="contact-list-title">Email</p>
                <div class="contact-list-content"><span class="icon mdi mdi-email-outline icon-primary"></span><a
                    href="mailto:infoparaguay@energiasolaryrenovable.com">infoparaguay@energiasolaryrenovable.com</a></div>
                </li>
                <li>
                <p class="contact-list-title">Disponibilidad</p>
                <div class="contact-list-content"><span class="icon mdi mdi-clock icon-primary"></span>
                    <ul class="list-xs">
                    <li>Lun-Vie: 8:00am – 6:00pm</li>
                    <li>Sábados: 8:00am – 6:00pm</li>
                    <li>Domingos: No Respondemos</li>
                    </ul>
                </div>
                </li>
            </ul>
            </div>
        </div>
    </div>
</section>