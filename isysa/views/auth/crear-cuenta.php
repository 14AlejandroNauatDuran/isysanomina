<div class="container w-55 bg-primary mt-5 rounded shadow">
    <div class="row align-items-stretch">
        <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded">

        </div>
        <div class="col bg-white p-4 rounded-end">
            <div class="text-end">
                <img src="build/img/salsol.png" width="48" alt="" srcset="">
            </div>
            <h2 class="fw-bold text-center py-5">Bienvenido</h2>
            <?php include_once __DIR__ . '/../templates/alertas.php'; ?>
            <!-- login -->
            <form action="/crear-cuenta" method="post">
                <div class="mb-4">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" id="nombre" class="form-control" name="nombre" placeholder="Tu Nombre" value="<?php echo s($usuario->nombre); ?>" />
                </div>
                <div class="mb-4">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" id="apellido" class="form-control" name="apellido" placeholder="Tu Apellido" value="<?php echo s($usuario->apellido); ?>" />
                </div>
                <div class="mb-4">
                    <label for="telefono" class="form-label">Teléfono</label>
                    <input type="tel" id="telefono" class="form-control" name="telefono" placeholder="Tu Teléfono" value="<?php echo s($usuario->telefono); ?>" />
                </div>
                <div class="mb-4">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" id="email" class="form-control" name="email" placeholder="Tu E-mail" value="<?php echo s($usuario->email); ?>" />
                </div>
                <div class="mb-4">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" name="password" placeholder="">    
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Crear cuenta</button>
                </div>
            </form>
            <!-- tener cuenta o recuperarla -->
            <div class="my-3">
            <a href="/">¿Ya tienes una cuenta? Inicia sesión</a>
            <br>
            <a href="/olvide">¿Olvidaste tu contraseña?</a>
            </div>
        </div>
    </div>
</div>