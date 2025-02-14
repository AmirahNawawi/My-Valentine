<?php include 'header.php'; ?>
<div class="h-screen flex items-center justify-center">
<div class="text-center mt-10">
    <h1 class="text-4xl font-bold text-red-500 pb-8">Happy Valentine's Day! 💖</h1>
    <p class="mt-4 text-lg">Welcome to my special Valentine invitation.</p>
    
    <div class="mt-6">
        <img src="https://media3.giphy.com/media/v1.Y2lkPTc5MGI3NjExcGNwZ3BtcDN5d2N6aGI0OTQ0NmlwZ3d6MzZsOXdyNmNuaGhsbmhxZiZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/c76IJLufpNwSULPk77/giphy.gif" 
             alt="Sad Meme" 
             class="mx-auto rounded-lg shadow-lg w-80">
    </div>

    <a href="invite.php" id="valentineButton" class="mt-8 inline-block bg-red-500 text-white py-2 px-4 rounded-lg shadow-md hover:bg-red-600">
        Open Invitation
    </a>
</div>
</div>

<script src="assets/vendor/canvas-confetti/confetti.browser.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const button = document.getElementById("valentineButton");

        button.addEventListener("mouseenter", function () {
            confetti({
                particleCount: 50,
                spread: 70,
                origin: { y: 0.6 },
                shapes: ["heart"],
                colors: ["#ff0000", "#ff66b2", "#ff1493"]
            });
        });
    });
</script>

<?php include 'footer.php'; ?>
