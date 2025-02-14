<?php include 'header.php'; ?>

<div class="min-h-screen flex flex-col items-center justify-center py-12 px-6">
    <div class="max-w-4xl text-center">
        <h2 class="text-4xl font-bold text-red-500 mb-6">Memory Lane 📸</h2>
        <p class="text-lg text-gray-700 mb-8">Some of our best moments together! 💖</p>

        <!-- Memory Grid -->
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <?php 
                $memories = [
                    ["assets/images/1.jpg", "farm fresh🌳"],
                    ["assets/images/2.jpg", "first time keluar makan"],
                    ["assets/images/3.jpg", "HEEJO"],
                    ["assets/images/4.jpg", "APA NII"],
                    ["assets/images/5.jpg", "heheh"],
                    ["assets/images/6.jpg", "date w/ ijaja"],
                    ["assets/images/7.jpg", "tarawih D-1"],
                    ["assets/images/8.jpg", "CSR"],
                    ["assets/images/9.jpg", ""],
                    ["assets/images/10.jpg", "puasa D-1 masak"],
                    ["assets/images/11.jpg", "Tnight walk"],
                    ["assets/images/12.jpg", "Our silly faces selfie 🤪"],
                    ["assets/images/13.jpg", ""],
                    ["assets/images/14.jpg", "star gazing"],
                    ["assets/images/15.jpg", "PD"],
                    ["assets/images/16.jpg", "after horror movie"],
                    ["assets/images/17.jpg", "bukit tungku"],
                    ["assets/images/18.jpg", "morib"],
                    ["assets/images/19.jpg", "hiking 🌳"],
                    ["assets/images/20.jpg", "🌳"],
                    ["assets/images/21.jpg", ""],
                    ["assets/images/22.jpg", "genting?"],
                    ["assets/images/23.jpg", "fishing"],
                    ["assets/images/24.jpg", "after genting"],
                    ["assets/images/25.jpg", "teehee"],
                    ["assets/images/26.jpg", "hihih"],
                    ["assets/images/27.jpg", "ermm"],
                    ["assets/images/28.jpg", "huh"],
                    ["assets/images/29.jpg", "neigh "],
                    ["assets/images/30.jpg", " sorry jaja"],
                    ["assets/images/31.jpg", "anugerah"],
                    ["assets/images/32.jpg", "Our silly faces selfie 🤪"],
                    ["assets/images/33.jpg", "BLACKLISTED!! 🍕"],
                    ["assets/images/34.jpg", "sus🎬"],
                    ["assets/images/35.jpg", "STAYCATION 2024🌳"],
                    ["assets/images/36.jpg", "aww family"],
                    ["assets/images/37.jpg", "lope lope"],
                    ["assets/images/38.jpg", "HB Mai"],
                    ["assets/images/39.jpg", "<3"],
                    ["assets/images/40.jpg", "HB Jaja"],
                ];

                foreach ($memories as $memory) {
                    echo '
                    <div class="bg-white shadow-lg p-3 rounded-lg">
                        <img src="'.$memory[0].'" alt="Memory" class="w-full h-48 object-cover rounded-lg">
                        <p class="text-center text-sm text-gray-600 font-handwritten mt-2">'.$memory[1].'</p>
                    </div>';
                }
            ?>
        </div>

        <!-- Navigation Buttons -->
        <div class="mt-10">
            <a href="song.php" class="bg-red-500 text-white py-3 px-6 rounded-lg shadow-md hover:bg-red-600 transition">Next</a>
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
