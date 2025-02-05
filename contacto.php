<?php include 'includes/templates/header.php'; ?>

    <main class="contenedor seccion">
        <h1>Contacto</h1>
        <picture>
            <source srcset="build/img/destacada3.webp" type="image/webp">
            <source srcset="build/img/destacada3.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada3.jpg" alt="Imagen contacto">
        </picture>

        <h2>Llene el Formulario de Contacto</h2>

        <form class="formulario">
            <fieldset>
                <legend>Información Personal</legend>
                <label for="nombre">Nombre</label>
                <input id="nombre" type="text" placeholder="Tu Nombre">
                <label for="email">Email</label>
                <input id="email" type="email" placeholder="Tu Email">
                <label for="telefono">Teléfono</label>
                <input id="telefono" type="telefono" placeholder="Tu Teléfono">
                <label for="mensaje">Mensaje</label>
                <textarea id="mensaje" placeholder="Tu Mensaje"></textarea>
            </fieldset>
            <fieldset>
                <legend>Información Sobre la Propiedad</legend>
                <label for="opciones">Vender/Comprar</label>
                <select id="opciones">
                    <option value="" disabled selected>-- Selecione --</option>
                    <option value="Comprar">Comprar</option>
                    <option value="Vender">Vender</option>
                </select>
                <label for="presupuesto">Presupuesto</label>
                <input id="presupuesto" type="number" placeholder="Tu Presupuesto">
            </fieldset>
            <fieldset>
                <legend>Información sobre Contacto</legend>
                <p>Como desea ser contactado</p>
                <div class="forma-contacto">
                    <label for="contactar-telefono">Teléfono</label>
                    <input name="contacto" type="radio" value="telefono" id="contactar-telefono">
                    <label for="contactar-email">Email</label>
                    <input name="contacto" type="radio" value="email" id="contactar-email">
                </div>
                <p>Si eligió teléfono, indique la fecha y la hora</p>
                <label for="fecha">Fecha</label>
                <input id="fecha" type="date">
                <label for="hora">Hora</label>
                <input id="hora" type="time" min="09:00" max="18:00">
            </fieldset>
            <input type="submit" value="Enviar" class="boton-verde">
        </form>
    </main>

<?php include 'includes/templates/footer.php'; ?>