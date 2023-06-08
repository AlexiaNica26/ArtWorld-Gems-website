<?php 
    include'../inc/header.php';
?>

<style>
    body {
        text-align: center;
        background-color: #FFFFFF;
        color: #191919;
    }
    h1 {
        color: #FF69B4;
    }
    #quiz {
        margin: 0 auto;
        width: 400px;
        border: 1px solid #FF69B4;
        padding: 20px;
        background-color: #a69983;
    }
    #submit-btn {
        padding: 10px 20px;
        background-color: #FF69B4;
        color: #fff;
        border: none;
        cursor: pointer;
    }
    #submit-btn:hover {
        background-color: #FF1493;
    }
    #result {
        margin-top: 20px;
        font-weight: bold;
    }
    .quiz{
       padding: 25px;
    }
</style>
<div class="quiz">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Art Quiz</h1>
    <div id="quiz">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $score = 0;

            if (isset($_POST["q1"]) && $_POST["q1"] == "da_vinci") {
                $score++;
            }

            if (isset($_POST["q2"]) && $_POST["q2"] == "van_gogh") {
                $score++;
            }

            if (isset($_POST["q3"]) && $_POST["q3"] == "michelangelo") {
                $score++;
            }

            if (isset($_POST["q4"]) && $_POST["q4"] == "salvador_dali") {
                $score++;
            }

            echo "<h2>Results:</h2>";
            echo "<p>Your score: " . $score . "/4</p>";
        }
        ?>

        <?php if ($_SERVER["REQUEST_METHOD"] != "POST" || $score != 4) { ?>
        <form method="post" action="quiz.php">
            <h2>Question 1:</h2>
            <p>Who painted the Mona Lisa?</p>
            <input type="radio" name="q1" value="da_vinci"> Leonardo da Vinci<br>
            <input type="radio" name="q1" value="van_gogh"> Van Gogh<br>
            <input type="radio" name="q1" value="picasso"> Picasso<br>

            <h2>Question 2:</h2>
            <p>Who painted The Starry Night?</p>
            <input type="radio" name="q2" value="da_vinci"> Leonardo da Vinci<br>
            <input type="radio" name="q2" value="van_gogh"> Van Gogh<br>
            <input type="radio" name="q2" value="picasso"> Picasso<br>

            <h2>Question 3:</h2>
            <p>Who painted the ceiling of the Sistine Chapel?</p>
            <input type="radio" name="q3" value="michelangelo"> Michelangelo<br>
            <input type="radio" name="q3" value="claude_monet"> Claude Monet<br>
            <input type="radio" name="q3" value="rembrandt"> Rembrandt<br>

            <h2>Question 4:</h2>
            <p>Who painted The Persistence of Memory?</p>
            <input type="radio" name="q4" value="salvador_dali"> Salvador Dali<br>
            <input type="radio" name="q4" value="frida_kahlo"> Frida Kahlo<br>
            <input type="radio" name="q4" value="jackson_pollock"> Jackson Pollock<br>

            <br>
            <input type="submit" value="Submit" id="submit-btn">
        </form>
        <?php } ?>
    </div>

            </div>
        </div>
    </div>
</div>
    


<?php
    include'../inc/footer.php';
?>