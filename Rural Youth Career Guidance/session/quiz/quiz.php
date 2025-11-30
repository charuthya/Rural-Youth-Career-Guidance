<!DOCTYPE html>
<html>
<head>
    <title>Quiz App</title>
    <script>
        let currentQuestion = 0;
        let score = 0;

        function loadQuestion() {
            fetch('get_question.php')
            .then(response => response.json())
            .then(data => {
                if (data.question) {
                    document.getElementById('question').innerText = data.question;
                    document.getElementById('option1').innerText = data.option1;
                    document.getElementById('option2').innerText = data.option2;
                    document.getElementById('option3').innerText = data.option3;
                    document.getElementById('option4').innerText = data.option4;
                }
            });
        }

        function checkAnswer(selectedOption) {
            fetch('check_answer.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ selectedOption: selectedOption })
            })
            .then(response => response.json())
            .then(data => {
                if (data.correct) {
                    score++;
                }

                currentQuestion++;

                if (currentQuestion < 3) { // Assuming 3 questions for this example
                    loadQuestion();
                } else {
                    alert(`Quiz completed! Your score is ${score}/3`);
                    // Send score to backend
                    fetch('backend.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded'
                        },
                        body: `action=submitScore&score=${score}`
                    })
                    .then(response => response.json())
                    .then(data => {
                        console.log(data.message);
                    });
                }
            });
        }

        document.addEventListener('DOMContentLoaded', () => {
            loadQuestion();
        });
    </script>
</head>
<body>
    <h1>Quiz App</h1>
    <div id="question"></div>
    <div>
        <button onclick="checkAnswer(document.getElementById('option1').innerText)">
            <span id="option1"></span>
        </button>
        <button onclick="checkAnswer(document.getElementById('option2').innerText)">
            <span id="option2"></span>
        </button>
        <button onclick="checkAnswer(document.getElementById('option3').innerText)">
            <span id="option3"></span>
        </button>
        <button onclick="checkAnswer(document.getElementById('option4').innerText)">
            <span id="option4"></span>
        </button>
    </div>
</body>
</html>
