<link rel="stylesheet" href="{{ asset('css/video.css') }}">

<div class="modal fade" id="videointeractivo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> {{trans('multi-leng.botonvideointeractivo') }}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <video id="medio" width="720" height="400">
                <source src="{{ asset('videos/itsmyturn.mp4') }}" type="video/mp4">
            </video>
            <nav style="text-align: center;">
                <input type="button" class="botonesvideo" id="reiniciar" value="Reiniciar">
                <input type="button" class="botonesvideo" id="retrasar" value="&laquo;">
                <input type="button" class="botonesvideo" id="play" value="&#9658;">
                <input type="button" class="botonesvideo" id="adelantar" value="&raquo;">
                <input type="button" class="botonesvideo" id="silenciar" value="Silenciar">
                <input type="button" class="botonesvideo" id="active_silencio" value="Activar Volumen">
                <br><br>
                Tiempo actual: <span id="tiempo"></span> || Tiempo total: <span id="tiempoTotal"></span>
                <br>
                <label id="timer" for="progress" role="timer"></label>
                <progress id="progress" max="100" value="0">Progress</progress>
            </nav>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

  <script src="{{ asset('js/video.js') }}"></script>