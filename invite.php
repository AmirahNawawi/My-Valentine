<?php include 'header.php'; ?>
<div class="h-screen flex items-center justify-center">
<div class="text-center mt-10">
    <h2 class="text-3xl font-semibold">Will you be my Valentine? 🥰</h2>
    <div class="mt-6">
        <img src="https://media2.giphy.com/media/v1.Y2lkPTc5MGI3NjExdXdyZmZtamNpaDZxcWhvOGhoY2RnMzJ4MjFsYnR0NHppcjN3YnJxZSZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/l0MYAs5E2oIDCq9So/giphy.gif" 
             alt="flower" class="mx-auto rounded-lg shadow-lg w-80">
    </div>
    <p class="mt-4">Click a button below to answer:</p>
    <div class="mt-6">
        <!-- Yes Button -->
        <a href="thankyou.php" id="yesButton" class="bg-green-500 text-white py-2 px-4 rounded-lg shadow-md hover:bg-green-600">Yes! 💕</a>

        <!-- No Button -->
        <a href="sorry.php" id="noButton" class="bg-gray-500 text-white py-2 px-4 rounded-lg shadow-md hover:bg-gray-600 ml-4">No 💔</a>
    </div>
</div>
</div>
<script src="assets/vendor/canvas-confetti/confetti.browser.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const yesButton = document.getElementById("yesButton");
        const noButton = document.getElementById("noButton");

        // Confetti animation when clicking "Yes!"
        yesButton.addEventListener("click", function (event) {
            event.preventDefault(); // Prevent immediate navigation
            
            // Confetti burst
            confetti({
                particleCount: 100,
                spread: 70,
                origin: { y: 0.6 },
                shapes: ["heart"],
                colors: ["#ff0000", "#ff66b2", "#ff1493"]
            });

            // Delay before navigating
            setTimeout(() => {
                window.location.href = "thankyou.php";
            }, 1500);
        });

        // Crying emoji rain when clicking "No 💔"
        noButton.addEventListener("click", function (event) {
            event.preventDefault(); // Prevent immediate navigation
            
            let count = 40; // Number of crying emojis
            for (let i = 0; i < count; i++) {
                setTimeout(() => {
                    createEmojiRain();
                }, Math.random() * 1000); // Random delay for each emoji (0-1s)
            }

            // Delay before navigating
            setTimeout(() => {
                window.location.href = "sorry.php";
            }, 2000);
        });

        function createEmojiRain() {
            let emoji = document.createElement("div");
            emoji.innerHTML = "😭";
            emoji.style.position = "fixed";
            emoji.style.left = Math.random() * window.innerWidth + "px";
            emoji.style.top = "-50px";
            emoji.style.fontSize = "2rem";
            emoji.style.animation = `fall ${1.5 + Math.random()}s linear forwards`; // Random duration (1.5s - 2.5s)
            document.body.appendChild(emoji);

            setTimeout(() => {
                emoji.remove();
            }, 3000); // Remove after 3s
        }
    });

    // Falling animation
    const style = document.createElement("style");
    style.innerHTML = `
        @keyframes fall {
            to {
                transform: translateY(100vh);
                opacity: 0;
            }
        }
    `;
    document.head.appendChild(style);
</script>

<?php include 'footer.php'; ?>
