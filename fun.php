<?php include 'header.php'; ?>

<div class="min-h-screen flex flex-col items-center justify-center bg-pink-100 py-12 px-6">
    <div class="max-w-3xl w-full bg-white p-8 rounded-xl shadow-lg text-center">
        <h2 class="text-4xl font-bold text-red-500 mb-4">How Well Do You Know Each Other? 💘</h2>
        <p class="text-lg text-gray-700 mb-6">Answer these questions and see how much you know about each other! 😊</p>

        <form id="quizForm" class="text-left space-y-6">
            <!-- Question Cards -->
            <?php 
                $questions = [
                    ["1. What is Ijaja's favorite color? 🎨", ["Purple", "Green", "Pink"], "q1", "b"],
                    ["2. Which food can't Mai eat? 🍕", ["Peanuts", "Fish", "Milk"], "q2", "a"],
                    ["3. When is Aimi and Alice's birthday? 🎉", ["14 Feb 2004", "21 Oct 2004", "26 Jan 2004"], "q3", "b"],
                    ["4. What is Amirah's favorite food during exam week?", ["Ramen", "Sorfina", "Ayam gepuk"], "q4", "a"]
                ];
                
                foreach ($questions as $index => $q) {
                    echo '<div class="bg-pink-50 p-4 rounded-lg shadow-md">
                            <p class="text-lg font-semibold text-gray-800">'.$q[0].'</p>';
                    foreach ($q[1] as $key => $option) {
                        $value = chr(97 + $key); // Convert 0 -> 'a', 1 -> 'b', 2 -> 'c'
                        echo '<label class="block mt-2">
                                <input type="radio" name="'.$q[2].'" value="'.$value.'" class="mr-2"> '.$option.'
                              </label>';
                    }
                    echo '</div>';
                }
            ?>
            
            <!-- Submit Button -->
            <button type="button" onclick="checkQuiz()" class="w-full bg-red-500 text-white py-3 px-6 rounded-lg shadow-md hover:bg-red-600 transition transform hover:scale-105">
                Submit
            </button>
        </form>

        <!-- Result Section -->
        <div id="result" class="mt-6 text-lg font-semibold text-gray-700 hidden"></div>

        <!-- Next Button (Hidden by Default) -->
        <div id="nextButton" class="mt-6 hidden">
            <a href="secret.php" class="bg-red-500 text-white py-3 px-6 rounded-lg shadow-md hover:bg-red-600 transition transform hover:scale-105">
                Next
            </a>
        </div>
    </div>
</div>

<!-- Confetti Animation Popup -->
<div id="confettiPopup" class="hidden fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center">
    <div class="bg-white p-6 rounded-lg text-center shadow-lg transform transition-all scale-95">
        <h2 class="text-3xl font-bold text-red-500">🎉 Perfect Score! 🎉</h2>
        <p class="text-lg mt-2">You know me so well! 💖</p>
        <button onclick="closeConfettiPopup()" class="mt-4 bg-red-500 text-white py-2 px-4 rounded-lg shadow-md hover:bg-red-600 transition">
            Close
        </button>
    </div>
</div>

<!-- JavaScript for Quiz and Confetti -->
<script src="./assets/vendor/canvas-confetti/confetti.browser.js"></script>
<script>
    function checkQuiz() {
        let score = 0;
        const answers = { q1: "b", q2: "a", q3: "b", q4: "a" };

        for (let key in answers) {
            const selected = document.querySelector(`input[name="${key}"]:checked`);
            if (selected && selected.value === answers[key]) {
                score++;
            }
        }

        const resultDiv = document.getElementById("result");
        resultDiv.innerHTML = `You got <span class="text-red-500">${score}/4</span> correct! 💖`;
        resultDiv.classList.remove("hidden");

        // Show confetti and popup if perfect score
        if (score === 4) {
            document.getElementById("confettiPopup").classList.remove("hidden");
            startConfetti(); 
        }

        // Show "Next" button after quiz submission
        document.getElementById("nextButton").classList.remove("hidden");
    }

    function startConfetti() {
        confetti({ particleCount: 150, spread: 100, origin: { y: 0.6 } });

        const duration = 3000;
        const end = Date.now() + duration;

        (function frame() {
            confetti({ particleCount: 10, spread: 80, origin: { y: 0.6 } });

            if (Date.now() < end) {
                requestAnimationFrame(frame);
            }
        })();
    }

    function closeConfettiPopup() {
        document.getElementById("confettiPopup").classList.add("hidden");
    }
</script>

<?php include 'footer.php'; ?>
