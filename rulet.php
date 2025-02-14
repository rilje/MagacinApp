<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Rulet - Sličan Mozzartu</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #2b2b2b;
        }

        .roulette-container {
            text-align: center;
        }

        #rouletteWheel {
            width: 400px;
            height: 400px;
            border-radius: 50%;
            border: 8px solid #ddd;
        }

        button {
            padding: 10px 20px;
            margin-top: 20px;
            font-size: 16px;
            background-color: #ffcc00;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        button:hover {
            background-color: #ff9900;
        }

        #result {
            margin-top: 20px;
            color: white;
            font-size: 18px;
        }
    </style>
</head>
<body>

<div class="roulette-container">
    <canvas id="rouletteWheel"></canvas>
    <button onclick="spinRoulette()">Zavrti rulet</button>
    <div id="result"></div>
</div>

<script>
    const canvas = document.getElementById('rouletteWheel');
    const ctx = canvas.getContext('2d');
    const numbers = [
        {number: '0', color: 'green'},
        {number: '32', color: 'black'}, {number: '15', color: 'red'},
        {number: '19', color: 'black'}, {number: '4', color: 'red'},
        {number: '21', color: 'black'}, {number: '2', color: 'red'},
        {number: '25', color: 'black'}, {number: '17', color: 'red'},
        {number: '34', color: 'black'}, {number: '6', color: 'red'},
        {number: '27', color: 'black'}, {number: '13', color: 'red'},
        {number: '36', color: 'black'}, {number: '11', color: 'red'},
        {number: '30', color: 'black'}, {number: '8', color: 'red'},
        {number: '23', color: 'black'}, {number: '10', color: 'red'},
        {number: '5', color: 'black'}, {number: '24', color: 'red'},
        {number: '16', color: 'black'}, {number: '33', color: 'red'},
        {number: '1', color: 'black'}, {number: '20', color: 'red'},
        {number: '14', color: 'black'}, {number: '31', color: 'red'},
        {number: '9', color: 'black'}, {number: '22', color: 'red'},
        {number: '18', color: 'black'}, {number: '29', color: 'red'},
        {number: '7', color: 'black'}, {number: '28', color: 'red'},
        {number: '12', color: 'black'}, {number: '35', color: 'red'},
        {number: '3', color: 'black'}, {number: '26', color: 'red'}
    ];

    const centerX = canvas.width / 2;
    const centerY = canvas.height / 2;
    const radius = canvas.width / 2 - 10;

    function drawRoulette() {
        const angleStep = (2 * Math.PI) / numbers.length;
        numbers.forEach((segment, index) => {
            const startAngle = index * angleStep;
            const endAngle = (index + 1) * angleStep;

            // Boja segmenta
            ctx.beginPath();
            ctx.moveTo(centerX, centerY);
            ctx.arc(centerX, centerY, radius, startAngle, endAngle);
            ctx.fillStyle = segment.color;
            ctx.fill();
            ctx.stroke();

            // Brojevi
            ctx.save();
            ctx.translate(centerX, centerY);
            ctx.rotate(startAngle + angleStep / 2);
            ctx.textAlign = "center";
            ctx.font = "16px Arial";
            ctx.fillStyle = "#fff";
            ctx.fillText(segment.number, radius - 30, 10);
            ctx.restore();
        });
    }

    drawRoulette();

    function spinRoulette() {
        const randomNumber = Math.floor(Math.random() * numbers.length);
        const selectedNumber = numbers[randomNumber];
        document.getElementById('result').innerText = "Ispao je broj: " + selectedNumber.number + " (" + selectedNumber.color + ")";
        
        // Animacija vrtnje
        let rotation = 0;
        const spinTime = 3000; // 3 sekunde
        const spinSpeed = 10;

        const spinInterval = setInterval(() => {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            ctx.save();
            ctx.translate(centerX, centerY);
            ctx.rotate(rotation);
            ctx.translate(-centerX, -centerY);
            drawRoulette();
            ctx.restore();

            rotation += Math.PI / 180; // Vrti rulet

            if (rotation > 2 * Math.PI * (spinTime / spinSpeed)) {
                clearInterval(spinInterval); // Zaustavi vrtnju
            }
        }, spinSpeed);
    }
</script>

</body>
</html>