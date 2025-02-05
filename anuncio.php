<?php include 'includes/templates/header.php'; ?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en Venta Frente al Bosque</h1>

        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada.jpg" alt="Sobre de la propiedad">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">$3,000,000</p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorio">
                    <p>4</p>
                </li>
            </ul>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos ullam quia autem? Est cum pariatur dolorum dignissimos laborum qui recusandae eos accusantium! Voluptate possimus adipisci facilis delectus omnis corporis, voluptatum sed deserunt
                tenetur vero magni ipsam perspiciatis corrupti sapiente aliquid assumenda laborum dignissimos laboriosam doloremque consequuntur. Excepturi molestias illum ducimus, neque dolor veritatis? Tenetur atque aliquam voluptas nostrum odit molestiae,
                voluptate hic vero corporis at commodi quisquam! Rem, porro veniam assumenda ipsum expedita sequi sint cupiditate maxime harum cum ad.</p>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis vero fugiat, quasi facilis accusamus labore harum cupiditate sint dolore cum dignissimos! Cupiditate quia praesentium doloribus tenetur expedita enim non repellat?</p>
        </div>
    </main>

<?php include 'includes/templates/footer.php'; ?>