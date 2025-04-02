    let video = document.getElementById("myVideo");
    let playButton = document.getElementById("playButton");

    playButton.addEventListener("click", function() {
    if (video.paused) {
        video.play();
    playButton.classList.add("hidden"); // Hide button when playing
    } else {
        video.pause();
    playButton.classList.remove("hidden"); // Show button when paused
    }
});

    // Show the play button again when the video ends
    video.addEventListener("ended", function() {
        playButton.classList.remove("hidden");
});

    // Clicking on the video itself toggles play/pause
    video.addEventListener("click", function() {
    if (video.paused) {
        video.play();
    playButton.classList.add("hidden");
    } else {
        video.pause();
    playButton.classList.remove("hidden");
    }
});


