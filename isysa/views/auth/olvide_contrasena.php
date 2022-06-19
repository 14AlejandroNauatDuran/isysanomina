

<div class="container w-55 bg-primary mt-5 rounded shadow">
    <div class="row align-items-stretch">
        <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded">

        </div>
        <div class="col bg-white p-4 rounded-end">
            <div class="text-end">
                <img src="build/img/salsol.png" width="48" alt="" srcset="">
            </div>
            <h2 class="fw-bold text-center py-5">¿Olvidaste tu contraseña?</h2>
            <p class="text-center">ingresa tu correo electrónico</p>
            <?php include_once __DIR__ . '/../templates/alertas.php'; ?>
            <!-- login -->
            <form action="/olvide" method="post">
                <div class="mb-4">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" id="email" class="form-control" name="email" placeholder="Tu E-mail" value="<?php echo s($usuario->email); ?>" />
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>
            <!-- tener cuenta o recuperarla -->
            <div class="my-3">
            <a href="/">¿Ya tienes una cuenta? Inicia sesión</a>
            <br>
            <a href="/crear-cuenta">¿Aún no tienes una cuenta? Crear Una</a>
            </div>
        </div>
    </div>
</div>