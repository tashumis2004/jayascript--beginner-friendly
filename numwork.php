<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NumWorks Calculator</title>
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background: #f0f0f0;
      font-family: 'Segoe UI', sans-serif;
    }
    .calculator {
      background: #fff;
      border-radius: 20px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.2);
      padding: 20px;
      width: 320px;
    }
    .display {
      width: 100%;
      height: 60px;
      background: #222;
      color: #0f0;
      text-align: right;
      font-size: 2em;
      padding: 10px;
      border-radius: 10px;
      margin-bottom: 20px;
      box-sizing: border-box;
    }
    .buttons {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 10px;
    }
    button {
      height: 60px;
      font-size: 1.2em;
      border: none;
      border-radius: 10px;
      cursor: pointer;
      background: #eee;
      transition: background 0.2s;
    }
    button:hover {
      background: #ddd;
    }
    .operator {
      background: #ff9500;
      color: #fff;
    }
    .operator:hover {
      background: #ffa733;
    }
    .equal {
      grid-column: span 2;
      background: #28a745;
      color: #fff;
    }
    .equal:hover {
      background: #45c76d;
    }
    .clear {
      background: #dc3545;
      color: #fff;
    }
    .clear:hover {
      background: #e85c65;
    }
  </style>
</head>
<body>
  <div class="calculator">
    <div class="display" id="display">0</div>
    <div class="buttons">
      <button class="clear" onclick="clearDisplay()">C</button>
      <button onclick="appendValue('(')">(</button>
      <button onclick="appendValue(')')">)</button>
      <button class="operator" onclick="appendValue('/')">÷</button>

      <button onclick="appendValue('7')">7</button>
      <button onclick="appendValue('8')">8</button>
      <button onclick="appendValue('9')">9</button>
      <button class="operator" onclick="appendValue('*')">×</button>

      <button onclick="appendValue('4')">4</button>
      <button onclick="appendValue('5')">5</button>
      <button onclick="appendValue('6')">6</button>
      <button class="operator" onclick="appendValue('-')">−</button>

      <button onclick="appendValue('1')">1</button>
      <button onclick="appendValue('2')">2</button>
      <button onclick="appendValue('3')">3</button>
      <button class="operator" onclick="appendValue('+')">+</button>

      <button onclick="appendValue('0')">0</button>
      <button onclick="appendValue('.')">.</button>
      <button class="equal" onclick="calculate()">=</button>
    </div>
  </div>

  <script>
    let display = document.getElementById('display');

    function appendValue(val) {
      if (display.innerText === "0") {
        display.innerText = val;
      } else {
        display.innerText += val;
      }
    }

    function clearDisplay() {
      display.innerText = "0";
    }

    function calculate() {
      try {
        display.innerText = eval(display.innerText);
      } catch {
        display.innerText = "Error";
      }
    }
  </script>
</body>
</html>
