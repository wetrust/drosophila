<div class="progress">
  <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 100%" id="progreso"></div>
</div>
<div class="container">
    <div class="card">
        <div class="card-body p-0" id="card.bienvenida">
            <h1 class="card-title text-center mt-4 mx-4">Diagnóstico inical para determinar riesgo de Drosophila suzukii</h1>
            <div class="media mt-2 mx-4">
                <div class="media-body">
                    <h5>Bienvenido!</h5>
                    lorem ipsum huaso chileno
                    <button class="btn mt-2 btn-outline-primary" id="diagnostico.bienvenida">Realizar <br>Diagnóstico</button>
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
            <button class="btn mt-2 btn-outline-primary" id="diagnostico.uno">Siguiente paso</button>
        </div>
        <div class="card-body" id="card.dos" style="display:none">
            <h1 class="card-title text-center">Paso 2</h1>
            <p class="text-center">Seleccione el estado fenológico de su cultivo</p>
            <div class="form-group">
                <label for="fenologia">Fenología:</label>
                <select class="form-control" id="fenologia"></select>
            </div>
            <button class="btn mt-2 btn-outline-primary" id="diagnostico.dos">Siguiente paso</button>
        </div>
    </div>
</div>
<script type="text/javascript" src="js/diagnostico.js"></script>