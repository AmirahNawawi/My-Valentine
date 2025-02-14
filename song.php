<?php include 'header.php'; ?>

<div class="min-h-screen flex flex-col items-center justify-center py-12 px-6">
    <div class="max-w-4xl text-center">
        <h2 class="text-4xl font-bold text-red-500 mb-6">Valentine's Playlist 🎶</h2>
        <p class="text-lg text-gray-700 mb-8">Songs that remind me of you! 💖</p>

        <!-- Music Grid (2 Rows x 3 Columns) -->
        <div class="flex flex-wrap justify-center gap-6 max-w-2xl">
            <?php 
                $songs = [
                    ["assets/images/a.jpeg", "Ijaja", "assets/music/Daisy.mp3"],
                    ["assets/images/b.png", "Alice", "assets/music/Mixue.mp3"],
                    ["assets/images/c.jpeg", "Mai", "assets/music/Taylor.mp3"],
                    ["assets/images/d.jpeg", "Aimi", "assets/music/GetYou.mp3"],
                    ["assets/images/e.jpeg", "Rahsia Tuhan", "assets/music/Rahsia.mp3"],
                    ["assets/images/f.jpeg", "Memori Tercipta", "assets/music/memori.mp3"]
                ];

                foreach ($songs as $song) {
                    echo '
                    <div class="bg-white shadow-lg p-3 rounded-lg w-48 flex flex-col items-center transform transition hover:scale-105">
                        <img src="'.$song[0].'" alt="Album Cover" class="w-full h-48 object-cover rounded-lg shadow-md">
                        <p class="text-sm text-gray-600 font-handwritten mt-2">'.$song[1].'</p>
                        <audio controls class="w-full mt-2">
                            <source src="'.$song[2].'" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                    </div>';
                }
            ?>
        </div>

        <!-- Navigation Buttons -->
        <div class="mt-10">
            <a href="fun.php" class="bg-red-500 text-white py-3 px-6 rounded-lg shadow-md hover:bg-red-600 transition">Next</a>
        </div>
    </div>
</div>

<!-- Tailwind Custom Font -->
<style>
    @import url('https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap');
    .font-handwritten {
        font-family: 'Indie Flower', cursive;
    }
</style>

<?php include 'footer.php'; ?>
