<?php include 'header.php'; ?>

<div class="h-screen flex items-center justify-center">
<div class="max-w-lg mx-auto mt-10 bg-white p-6 rounded-xl shadow-lg text-center relative">
    <h2 class="text-4xl font-bold text-red-500 mb-4">💖 The End 💖</h2>
    <p class="text-lg text-gray-700 mb-6">
        I hope you enjoyed this little Valentine’s surprise! 💕  
        No matter what, you're special to me. Wishing you a day full of love and happiness! 🌹  
    </p>

    <!-- Floating Hearts -->
    <div class="absolute top-0 left-0 w-full h-full pointer-events-none overflow-hidden">
        <div class="heart-animation"></div>
    </div>

    <!-- Restart Button -->
    <a href="index.php" class="mt-6 inline-block bg-red-500 text-white py-2 px-4 rounded-lg shadow-md hover:bg-red-600">
        Restart 💌
    </a>
</div>
</div>

<!-- Floating Hearts Animation -->
<style>
    @keyframes float {
        0% { transform: translateY(0) scale(1); opacity: 1; }
        50% { transform: translateY(-100px) scale(1.2); opacity: 0.8; }
        100% { transform: translateY(-200px) scale(1.5); opacity: 0; }
    }

    .heart-animation::before, .heart-animation::after {
        content: "❤️";
        font-size: 24px;
        position: absolute;
        animation: float 4s infinite ease-in-out;
    }

    .heart-animation::before { left: 30%; animation-delay: 1s; }
    .heart-animation::after { left: 70%; animation-delay: 2s; }
</style>

<?php include 'footer.php'; ?>
