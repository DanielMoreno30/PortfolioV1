const progress = document.getElementById("progress");
const timer = document.getElementById("timer");

function accionPlay() {
    if (!medio.paused && !medio.ended) {
        medio.pause();
        play.value = '\u25BA';
    }
    else {
        medio.play();
        play.value = '||';
        // document.body.style.backgroundColor = 'grey';
    }
}

function accionReiniciar() {
    medio.currentTime = 0;
}
function accionRetrasar() {
    medio.currentTime = medio.currentTime - 10;
}
function accionAdelantar() {
    medio.currentTime = medio.currentTime + 10;
}
function accionSilenciar() {
    medio.muted = true;
}
function accionDesSilenciar() {
    medio.muted = false;
}

function hora(segundos) {
    var d = new Date(segundos * 1000);
    var hora = (d.getHours() == 0) ? 23 : d.getHours() - 1;
    var hora = (hora < 9) ? "0" + hora : hora;
    var minuto = (d.getMinutes() < 9) ? "0" + d.getMinutes() : d.getMinutes();
    var segundo = (d.getSeconds() < 9) ? "0" + d.getSeconds() : d.getSeconds();
    return hora + ":" + minuto + ":" + segundo;
}


function iniciar() {

    medio = document.getElementById('medio');
    play = document.getElementById('play');
    reiniciar = document.getElementById('reiniciar');
    retrasar = document.getElementById('retrasar');
    adelantar = document.getElementById('adelantar');
    silenciar = document.getElementById('silenciar');
    active_silencio = document.getElementById('active_silencio');

    play.addEventListener('click', accionPlay);
    reiniciar.addEventListener('click', accionReiniciar);
    retrasar.addEventListener('click', accionRetrasar);
    adelantar.addEventListener('click', accionAdelantar);
    silenciar.addEventListener('click', accionSilenciar);
    active_silencio.addEventListener('click', accionDesSilenciar);

    medio.addEventListener("timeupdate", function (ev) {
        document.getElementById("tiempo").innerHTML = hora(medio.currentTime);
        document.getElementById("tiempoTotal").innerHTML = hora(medio.duration);
    }, true);

    function progressLoop() {
        setInterval(function () {
            var tiempoTotal;
            progress.value = Math.round((medio.currentTime / medio.duration) * 100);
            timer.innerHTML = progress.value + " %";

            if (progress.value < 80) {
                document.getElementById("tiempo").style.color = "green";
            }
            if (progress.value >= 80) {
                document.getElementById("tiempo").style.color = "orange";
            }
            if (progress.value >= 90) {
                document.getElementById("tiempo").style.color = "red";
            }
        });
    }

medio.addEventListener("play", progressLoop);
}

var sonido = document.getElementById("sonido");

medio.onended = function () {
    sonido.play();
};

window.addEventListener('load', iniciar, false);