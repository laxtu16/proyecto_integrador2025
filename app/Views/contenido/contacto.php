<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container text-center my-5">
    <div class="row align-items-start">
        <div class="col-md-6">
            <div class="formulario-contacto-soporte p-4 shadow rounded-4 bg-light">
                <h3 class="mb-4 fw-bold text-primary">Comunícate con Soporte</h3>
                <p class="text-muted mb-4">Completa el siguiente formulario y nuestro equipo se pondrá en contacto
                    contigo a la brevedad.</p>
                <form action="/enviar-soporte" method="POST">
                    <div class="form-group mb-3 text-start">
                        <label for="nombre" class="form-label fw-semibold">Nombre Completo:</label>
                        <input type="text" id="nombre" name="nombre" class="form-control" required>
                    </div>
                    <div class="form-group mb-3 text-start">
                        <label for="email" class="form-label fw-semibold">Correo Electrónico:</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group mb-3 text-start">
                        <label for="asunto" class="form-label fw-semibold">Asunto:</label>
                        <select id="asunto" name="asunto" class="form-select" required>
                            <option value="">Selecciona un asunto</option>
                            <option value="problema_compra">Problema con una compra</option>
                            <option value="duda_juego">Duda sobre un juego</option>
                            <option value="problema_tecnico">Problema técnico con la plataforma</option>
                            <option value="consulta_cuenta">Consulta sobre mi cuenta</option>
                            <option value="reembolso">Solicitud de reembolso</option>
                            <option value="otro">Otro asunto</option>
                        </select>
                    </div>
                    <div class="form-group mb-3 text-start">
                        <label for="orden_id" class="form-label fw-semibold">Número de Orden (opcional):</label>
                        <input type="text" id="orden_id" name="orden_id" class="form-control">
                        <small class="form-text text-muted">Si tu consulta está relacionada con una compra, incluye el
                            número de orden.</small>
                    </div>
                    <div class="form-group mb-3 text-start">
                        <label for="plataforma" class="form-label fw-semibold">Plataforma (opcional):</label>
                        <select id="plataforma" name="plataforma" class="form-select">
                            <option value="">Selecciona la plataforma</option>
                            <option value="pc">PC</option>
                            <option value="playstation">PlayStation</option>
                            <option value="xbox">Xbox</option>
                            <option value="nintendo_switch">Nintendo Switch</option>
                            <option value="movil">Móvil</option>
                            <option value="otro">Otro</option>
                        </select>
                    </div>
                    <div class="form-group mb-4 text-start">
                        <label for="mensaje" class="form-label fw-semibold">Descripción del Problema:</label>
                        <textarea id="mensaje" name="mensaje" class="form-control" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 fw-bold">Enviar Mensaje a Soporte</button>
                </form>
            </div>
        </div>

        <div class="col-md-6 mt-5 mt-md-0 text-start contacto-info">
            <h1 class="fw-bold text-primary mb-4">
                Contáctate con Nosotros
            </h1>
            <div class="contacto-infor p-4 shadow rounded-4">
                <h3 class="fw-bold text-secondary mb-3">Información de Contacto</h3>
                <p><strong>Titular de la Empresa:</strong> Azcona Brian Alexander & Aquino Ponce Leonardo Exequiel</p>
                <p><strong>Razón Social:</strong> CodiGames S.A</p>
                <p><strong>Domicilio Legal:</strong> Corrientes Capital, Lamadrid 1234</p>
                <p><strong>Teléfono:</strong> 0800 0025 5158</p>
                <p><strong>Email:</strong> CodiGames@gmail.com</p>
            </div>

            <div class="text-center mt-4">
                <img src="https://cdn-icons-png.freepik.com/512/3095/3095583.png" alt="Formulario de Contacto"
                    class="img-fluid rounded-4 shadow w-50">
            </div>
        </div>
    </div>
</div>