document.addEventListener('DOMContentLoaded', function() {
    let selectedMethod = 'BCA Virtual Account';
    let timeLeft = 7200; // 2 hours in seconds
    const timeDisplay = document.getElementById('timeLeft');
    const popupOverlay = document.getElementById('popup-overlay');
    const btnKonfirmasi = document.getElementById('btn-konfirmasi');
    const closePopupButton = document.getElementById('closePopup');

    const formatTime = (seconds) => {
        const h = Math.floor(seconds / 3600);
        const m = Math.floor((seconds % 3600) / 60);
        const s = seconds % 60;
        return `${String(h).padStart(2, '0')}:${String(m).padStart(2, '0')}:${String(s).padStart(2, '0')}`;
    };

    const updateTimer = () => {
        if (timeLeft > 0) {
            timeLeft -= 1;
            timeDisplay.textContent = formatTime(timeLeft);
        }
    };

    setInterval(updateTimer, 1000);

    document.querySelectorAll('.method').forEach(method => {
        method.addEventListener('click', function() {
            document.querySelectorAll('.method').forEach(m => m.classList.remove('selected'));
            this.classList.add('selected');
            selectedMethod = this.getAttribute('data-method');
        });
    });

    closePopupButton?.addEventListener('click', function() {
        popupOverlay.style.display = 'none';
    });

    btnKonfirmasi.addEventListener('click', function() {
        setTimeout(() => {
            popupOverlay.style.display = 'block';
            setTimeout(() => {
                window.location.href = '/home';
            }, 3000);
        }, 1000);
    });
});