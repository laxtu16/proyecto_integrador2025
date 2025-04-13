<footer>
 
    <div class="container text-center">
  <div class="row align-items-start">
    <div class="col">
      <div class="contacto-info">
          <h3>Información de Contacto</h3>
          <p><strong>Titular de la Empresa:</strong> Azcona Brian Alexander & Aquino Ponce Leonardo Exequiel</p>
          <p><strong>Razón Social:</strong> CodiGames S.A</p>
          <p><strong>Domicilio Legal:</strong> Corrientes Capital, Lamadrid 1234</p>
          <p><strong>Teléfonos:</strong> 3795665253, 0800 0025 5158</p>
          <p><strong>Email:</strong> CodiGames@gmail.com</p>
        
      </div>
    </div>

    <div class="col">
      <div class="formulario-contacto">
        <h3>Comunícate con Nosotros</h3>
        <form action="/enviar-formulario" method="POST">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="tel" id="telefono" name="telefono">
            </div>
            <div class="form-group">
                <label for="mensaje">Mensaje:</label>
                <textarea id="mensaje" name="mensaje" rows="5" required></textarea>
            </div>
            <button type="submit">Enviar Mensaje</button>
        </form>
    </div>

    
  </div>
  <div class="copyright", >
          <p>&copy; <?php echo date("Y"); ?> [Nombre de la Empresa]. Todos los derechos reservados.</p>
        </div>
</footer>


 
</body>

</html>