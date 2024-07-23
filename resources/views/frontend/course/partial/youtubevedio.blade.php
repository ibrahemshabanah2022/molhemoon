<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Custom YouTube Controls</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }

        .video-container {
            position: relative;
            width: 100%;
            max-width: 1100px;
            aspect-ratio: 16 / 9;
            background-color: #000;
        }

        iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        .controls {
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            flex-direction: column;
            gap: 10px;
            z-index: 2;
            width: 95%;
        }

        .control-buttons {
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .control-button {
            background-color: rgba(255, 255, 255, 0.8);
            border: none;
            padding: 10px;
            font-size: 1rem;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }

        .control-button svg {
            width: 24px;
            height: 24px;
        }

        .progress-bar {
            width: 100%;
            height: 5px;
            background-color: #ccc;
            cursor: pointer;
        }

        .progress {
            height: 100%;
            background-color: #f00;
            width: 0;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 88%;
            z-index: 1;
        }
    </style>
</head>

<body>
    <div class="video-container">
        <iframe id="video-iframe"
            src="https://www.youtube.com/embed/LXb3EKWsInQ?enablejsapi=1&controls=0&modestbranding=1"
            sandbox="allow-forms allow-scripts allow-pointer-lock allow-same-origin allow-top-navigation"
            title="Michel Sajrawy: Improvisation in Maqam Bayat - تقاسيم على مقام البيات" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        <div class="overlay"></div>
        <div class="controls">
            <div class="progress-bar" onclick="seek(event)">
                <div class="progress"></div>
            </div>
            <div class="control-buttons">
                <button class="control-button" id="play-pause-button" onclick="togglePlayPause()">
                    <svg id="play-icon" viewBox="0 0 24 24">
                        <path d="M8 5v14l11-7z"></path>
                    </svg>
                    <svg id="pause-icon" viewBox="0 0 24 24" style="display: none">
                        <path d="M6 19h4V5H6v14zm8-14v14h4V5h-4z"></path>
                    </svg>
                </button>
                <select class="control-select" onchange="handleControlChange(event)">
                    <option value="">Select Speed</option>
                    <option value="speed-0.5">Speed 0.5x</option>
                    <option value="speed-1">Speed 1x</option>
                    <option value="speed-1.5">Speed 1.5x</option>
                    <option value="speed-2">Speed 2x</option>
                </select>
            </div>
        </div>
    </div>
    <script>
        var player;

        function onYouTubeIframeAPIReady() {
            player = new YT.Player("video-iframe", {
                events: {
                    onReady: onPlayerReady,
                    onStateChange: onPlayerStateChange,
                },
            });
        }

        function onPlayerReady(event) {
            updateProgress();
        }

        function onPlayerStateChange(event) {
            if (event.data == YT.PlayerState.PLAYING) {
                updateProgress();
                toggleIcon("play");
            } else if (event.data == YT.PlayerState.PAUSED) {
                toggleIcon("pause");
            }
        }

        function togglePlayPause() {
            if (player.getPlayerState() === YT.PlayerState.PLAYING) {
                player.pauseVideo();
            } else {
                player.playVideo();
            }
        }

        function toggleIcon(state) {
            var playIcon = document.getElementById("play-icon");
            var pauseIcon = document.getElementById("pause-icon");
            if (state === "play") {
                playIcon.style.display = "none";
                pauseIcon.style.display = "block";
            } else {
                playIcon.style.display = "block";
                pauseIcon.style.display = "none";
            }
        }

        function changeSpeed(speed) {
            player.setPlaybackRate(speed);
        }

        function changeQuality(quality) {
            player.setPlaybackQuality(quality);
        }

        function seek(event) {
            var progressBar = event.target;
            var x = event.clientX - progressBar.getBoundingClientRect().left;
            var clickedValue = (x * player.getDuration()) / progressBar.offsetWidth;
            player.seekTo(clickedValue, true);
        }

        function updateProgress() {
            if (player && player.getDuration) {
                var progress = document.querySelector(".progress");
                var duration = player.getDuration();
                var currentTime = player.getCurrentTime();
                progress.style.width = (currentTime / duration) * 100 + "%";
                requestAnimationFrame(updateProgress);
            }
        }

        function handleControlChange(event) {
            var value = event.target.value;
            if (value.startsWith("speed")) {
                var speed = parseFloat(value.split("-")[1]);
                changeSpeed(speed);
            } else if (value.startsWith("quality")) {
                var quality = value.split("-")[1];
                changeQuality(quality);
            }
            event.target.value = ""; // Reset select to default
        }

        // Disable right-click and inspect element
        document.addEventListener("contextmenu", (event) =>
            event.preventDefault()
        );
        document.addEventListener("keydown", (event) => {
            if (
                event.key === "F12" ||
                (event.ctrlKey && event.shiftKey && event.key === "I") ||
                (event.ctrlKey && event.shiftKey && event.key === "C") ||
                (event.ctrlKey && event.shiftKey && event.key === "J")
            ) {
                event.preventDefault();
            }
        });

        // Load the IFrame Player API code asynchronously.
        var tag = document.createElement("script");
        tag.src = "https://www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName("script")[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
    </script>
</body>

</html>
