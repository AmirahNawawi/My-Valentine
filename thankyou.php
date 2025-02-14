<?php include 'header.php'; ?>

<div class="h-screen flex items-center justify-center">
<div class="text-center my-10">
    <h2 class="text-3xl font-semibold text-red-500">Thank You for Saying Yes! 💖</h2>
    <p class="mt-4 text-lg">I'm so happy! Let's make this Valentine's Day special. 🎉</p>
    
    <!-- Countdown Timer -->
    <div class="mt-6">
        <h3 class="text-xl font-semibold">Countdown to Valentine's Day:</h3>
        <p id="countdown" class="text-2xl font-bold text-red-600 mt-2"></p>
    </div>
    <div class="mt-6">
        <img src="assets/images/ntah.jpg" 
             alt="ntah" class="mx-auto rounded-lg shadow-lg w-80">
    </div>
    
    <div class="flex justify-center items-center mt-6">
    <audio id="myAudio" controls>
        <source src="assets/music/Daddy.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>
    </div>

    <!-- to Love letter page -->
    <a href="love_letter.php" class="mt-6 inline-block bg-red-500 text-white py-2 px-4 rounded-lg shadow-md hover:bg-red-600">Next</a>
</div>
</div>

<script>
    // Set the date for Valentine's Day
    const valentineDate = new Date("Feb 14, 2025 00:00:00").getTime();

    // Update the countdown every second
    const countdown = setInterval(() => {
        const now = new Date().getTime();
        const distance = valentineDate - now;

        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        document.getElementById("countdown").innerHTML = `${days}d ${hours}h ${minutes}m ${seconds}s`;

        // Stop countdown when Valentine's Day arrives
        if (distance < 0) {
            clearInterval(countdown);
            document.getElementById("countdown").innerHTML = "Happy Valentine's Day! ❤️";
        }
    }, 1000);

    document.addEventListener("DOMContentLoaded", function () {
        const audio = document.getElementById("myAudio");

        // Play audio automatically after a delay (in milliseconds)
        setTimeout(() => {
            audio.currentTime = 159; // Start at 10 seconds (change this value)
            audio.play().catch(error => console.log("Autoplay failed:", error));
        }, 1000); // Delay for 3 seconds (3000ms)
    });
</script>

<?php include 'footer.php'; ?>
