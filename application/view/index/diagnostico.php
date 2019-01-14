<div class="progress">
  <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 100%" id="progreso"></div>
</div>
<div class="container">
    <div class="card">
        <div class="card-header bg-danger d-none" id="header.algoritmo">
            <h3 class="text-white text-center">Lo siento</h3>
        </div>
        <div class="card-header bg-secondary d-none" id="header.riesgo">
            <h3 class="text-white text-center">Riesgo de Drosophila Suzukii</h3>
        </div>
        <div class="card-body p-0" id="card.bienvenida">
            <h1 class="card-title text-center mt-4 mx-4">Diagnóstico inical para determinar riesgo de Drosophila suzukii</h1>
            <div class="media mt-2 mx-4">
                <div class="media-body">
                    <h5>Bienvenido!</h5>
                    lorem ipsum huaso chileno
                </div>
                <img alt="Campesino svg" src="img/campesino.svg" class="ml-3 w-50">
            </div>
        </div>
        <div class="card-body" id="card.uno" style="display:none">
            <h1 class="card-title text-center">Paso 1</h1>
            <p class="text-center">Seleccione el tipo de cultivo presente en su campo</p>
            <div class="form-group">
                <label for="cultivo">Cultivo:</label>
                <select class="form-control" id="cultivo"></select>
            </div>
        </div>
        <div class="card-body" id="card.dos" style="display:none">
            <h1 class="card-title text-center">Paso 2</h1>
            <p class="text-center">Seleccione el estado fenologico presente en su cultivo</p>
            <div class="form-group">
                <label for="fenologia">Fenologia:</label>
                <select class="form-control" id="fenologia"></select>
            </div>
        </div>
        <div class="card-body" id="card.riesgo" style="display:none">
            <div class="alert" role="alert" id="text.riesgo"></div>
            <p id="sugerencias.riesgo" class="text-justify"></p>
        </div>
        <div class="card-body" id="card.tres" style="display:none">
            <h1 class="card-title text-center">Paso 3</h1>
            <p class="text-center">Ya sabemos que su cultivo tiene un alto riesgo de ser atacado por la Drosophila Suzukii, ahora vamos a determinar la categoría de riesgo para lo cual necesitamos conocer la ubicación aproximada de su cultivo. Es recomendable que ejecute el test en la ubicación geográfica de su cultivo para una mayor precision.<br><br>Ahora el sistema le pedirá autorización para determinar su ubicación por gps, por favor autorice cuando el navegador se lo solicite. si no está disponible el gps podrá seleccionar su ubicación mediante una lista.</p>
        </div>
        <div class="card-body" id="card.cinco" style="display:none">
            <h1 class="card-title text-center">Paso 4</h1>
            <div class="form-group">
                <label for="trampas">¿Tiene trampas?</label>
                <select class="form-control" id="trampas"><option value="0">Seleccione</option><option value="1">Si</option><option value="2">No</option></select>
            </div>
            <div class="form-group d-none" id="captura.cinco">
                <label for="capturado">¿Has capturado?</label>
                <select class="form-control" id="capturado"><option value="0">Seleccione</option><option value="1">Si</option><option value="2">No</option></select>
            </div>
            <div class="form-group d-none" id="analisis.cinco">
                <label for="analisis">¿Has analizado?</label>
                <select class="form-control" id="analisis"><option value="0">Seleccione</option><option value="1">Si</option><option value="2">No</option></select>
            </div>
            <p class="text-center" id="sugerencia.cinco"></p>
        </div>
        <div class="card-body" id="card.algoritmo" style="display:none">
            <h1 class="card-title text-center">No hay algoritmo</h1>
            <p class="text-center">Todavía no podemos determinar el riesgo para este tipo de cultivo</p>
            <img alt="termita" src="img/termita.svg" class="w-50 d-block mx-auto">
        </div>
        <div class="card-footer bg-secondary">
            <button class="btn d-block mx-auto btn-outline-light" id="diagnostico.continuar">Realizar <br>Diagnóstico</button>
            <button class="btn mx-auto btn-outline-light d-none" id="diagnostico.reset">Volver a empezar</button>
        </div>
    </div>
</div>
<script type="text/javascript" src="js/diagnostico.js"></script>