let time = 600; // 10 minutos em segundos
const timerElement = document.getElementById('timer');
const startButton = document.getElementById('stop-button');
let countdown;
let isPaused = false;

        function updateTimer() {
            const minutes = Math.floor(time / 60);
            const seconds = time % 60;

            // Formata o tempo para MM:SS
            timerElement.textContent = `${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;

            // Verifica se o tempo acabou
            if (time <= 0) {
                clearTimeout(countdown);
                alert("O tempo acabou!");
                timerElement.textContent = "00:00";
                startButton.textContent = "Iniciar";
                countdown = null;
                return;
            }

            time--;
            countdown = setTimeout(updateTimer, 1000);
        }

        // Função para iniciar o timer
        function startTimer() {
            if (countdown) {
                if (isPaused) {
                    startButton.textContent = "Pausar";
                    isPaused = false;
                    updateTimer();
                    return;
                } else {
                    clearTimeout(countdown);
                    startButton.textContent = "Continuar";
                    isPaused = true;
                    return;
                }
            }

            startButton.textContent = "Pausar";
            updateTimer();
        }

        startButton.onclick = startTimer;