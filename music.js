const audio = document.getElementById('gameMusic');
const speakerIcon = document.getElementById('speakerIcon');

speakerIcon.addEventListener('click', function() {
    if (audio.muted) {
        audio.muted = false;
        audio.play().catch(error => {
            console.error('Error playing audio:', error);
        });
        speakerIcon.classList.remove('fa-volume-up');
        speakerIcon.classList.add('fa-volume-mute');
    } else {
        audio.muted = true;
        speakerIcon.classList.remove('fa-volume-mute');
        speakerIcon.classList.add('fa-volume-up');
    }
});
