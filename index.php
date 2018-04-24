<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<link rel="stylesheet" href="styles.css">
</head>
<body>
    <div id="game-container" class="col-8"></div>
    
    <div id="UI">
        <h1>clicky dot</h1>
        
        <div id="numbers" class="section">
            <p>points: <span id="points">0</span></p>
            <p>lives: <span id="lives">3</span></p>
            <p>high score: <span id="high-score">0</span></p>
        </div>
        
        <div id="difficulty" class="section">
            <p>difficulty</p>
            <label id="normal" class="radio">
                <input type="radio" id="normal-radio" name="radio" value="normal" checked/>
                <span>normal</span>
            </label>
            <label id="death" class="radio">
                <input type="radio" id="death-radio" value="death" name="radio" />
                <span>sudden death</span>
            </label>
        </div>

        <div id="game-end" class="hidden-div section">
            <p>you died, loser :(</p>
            <button id="try-again">try again?</button>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="script.js"></script>
</body>
</html>