<?php include 'header.php'; ?>

<div class="h-screen flex items-center justify-center">
<div class="max-w-lg mx-auto mt-10 bg-white p-6 rounded-xl shadow-lg text-center">
    <h2 class="text-3xl font-bold text-red-500 mb-4">💖 Secret Message 💖</h2>
    <p class="text-lg text-gray-700 mb-4">Enter the magic word to unlock your surprise! 🔒</p>
    <p class="text-xs text-green-500 mb-6">Hint: The month we met ;)</p>

    <!-- Password Input -->
    <input type="password" id="password" class="w-full px-4 py-2 border rounded-md text-center" placeholder="Enter the password..." />

    <!-- Unlock Button -->
    <button onclick="checkPassword()" class="mt-4 bg-red-500 text-white py-2 px-4 rounded-lg shadow-md hover:bg-red-600">
        Unlock 💘
    </button>

    <!-- Hidden Secret Message -->
    <div id="secretMessage" class="hidden mt-6 p-4 border rounded-lg bg-pink-100 text-red-600 font-semibold text-lg transition-opacity duration-500">
        🌹 "Love is not about how many days, months, or years you have been together. Love is about how much you love each other every single day." 💕  
    </div>

    <!-- Hidden Arrow Button to Redirect to End Page -->
    <div id="nextButton" class="hidden mt-6">
        <a href="end.php" class="inline-block bg-red-500 text-white py-2 px-4 rounded-full shadow-md hover:bg-red-600">
            ➡️ Next
        </a>
    </div>
</div>
</div>

<!-- JavaScript to Check Password -->
<script>
    function checkPassword() {
        const password = document.getElementById("password").value;
        const correctPassword = "september"; // Change this to your desired love-themed password
        const secretMessage = document.getElementById("secretMessage");
        const nextButton = document.getElementById("nextButton");

        if (password === correctPassword) {
            secretMessage.classList.remove("hidden");
            secretMessage.style.opacity = "1";
            nextButton.classList.remove("hidden"); // Show the arrow button
        } else {
            alert("Oops! Wrong password. Try again! 💔");
        }
    }
</script>

<?php include 'footer.php'; ?>
