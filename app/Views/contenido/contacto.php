<div class="container text-center">
  <div class="row align-items-start">
    <div class="col">
      <div class="formulario-contacto-soporte">
        <h3>Comunícate con Soporte</h3>
        <p>Por favor, completa el siguiente formulario y nuestro equipo de soporte se pondrá en contacto contigo a la brevedad.</p>
        <form action="/enviar-soporte" method="POST">
          <div class="form-group">
            <label for="nombre">Nombre Completo:</label>
            <input type="text" id="nombre" name="nombre" required>
          </div>
          <div class="form-group">
            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required>
          </div>
          <div class="form-group">
            <label for="asunto">Asunto:</label>
            <select id="asunto" name="asunto" required>
              <option value="">Selecciona un asunto</option>
              <option value="problema_compra">Problema con una compra</option>
              <option value="duda_juego">Duda sobre un juego</option>
              <option value="problema_tecnico">Problema técnico con la plataforma</option>
              <option value="consulta_cuenta">Consulta sobre mi cuenta</option>
              <option value="reembolso">Solicitud de reembolso</option>
              <option value="otro">Otro asunto</option>
            </select>
          </div>
          <div class="form-group">
            <label for="orden_id">Número de Orden (opcional):</label>
            <input type="text" id="orden_id" name="orden_id">
            <small>Si tu consulta está relacionada con una compra, incluye el número de orden.</small>
          </div>
          <div class="form-group">
            <label for="plataforma">Plataforma (opcional):</label>
            <select id="plataforma" name="plataforma">
              <option value="">Selecciona la plataforma</option>
              <option value="pc">PC</option>
              <option value="playstation">PlayStation</option>
              <option value="xbox">Xbox</option>
              <option value="nintendo_switch">Nintendo Switch</option>
              <option value="movil">Móvil</option>
              <option value="otro">Otro</option>
            </select>
          </div>
          <div class="form-group">
            <label for="mensaje">Descripción del Problema:</label>
            <textarea id="mensaje" name="mensaje" rows="5" required></textarea>
          </div>
          <button type="submit">Enviar Mensaje a Soporte</button>
        </form>
      </div>
    </div>
    <div class="col">
      <h1 class="fw-bold mt-5">
        Contactate con nosotros
      </h1>
      <div class="contacto-info">
          <h3>Información de Contacto</h3>
          <p><strong>Titular de la Empresa:</strong> Azcona Brian Alexander & Aquino Ponce Leonardo Exequiel</p>
          <p><strong>Razón Social:</strong> CodiGames S.A</p>
          <p><strong>Domicilio Legal:</strong> Corrientes Capital, Lamadrid 1234</p>
          <p><strong>Teléfono:</strong> 0800 0025 5158</p>
          <p><strong>Email:</strong> CodiGames@gmail.com</p>
        
      </div>
      <div>
        <img src="https://www.godaddy.com/resources/es/wp-content/uploads/sites/9/2024/06/portada_Formulario-de-contacto-WordPress.jpg?size=384x0" alt="">
      </div>
    </div>
  </div>
</div>