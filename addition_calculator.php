<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adding two numbers</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
            text-align: center;
            background:linear-gradient(to right, #179fb7, #bbc2c5);
        }
        h1 {
            color: #333;
        }
        input {
            margin-top: 10px;
            padding: 8px;
            font-size: 16px;
            border: 2px solid #333;
            border-radius: 5px;
        }
        button{
            padding: 8px 16px;
            background-color: #d27bc3;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        #result {
            margin-top: 20px;
            padding: 15px;
            background-color: #f9f9f9;
            border-radius: 10px;
            width: 300px;
            margin-left: auto;
            margin-right: auto;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }      
        #result h1 {
            color: #ff5722;
        }
        #result p {
            font-weight: bold;
            color: #333;
        }
        </style>
    <body>
        <h1> Adding two numbers </h1>
        <label type="num1">Enter first number:</label>
        <input type="number" id="num1" placeholder="Enter first number">
        <br><br>
        <label for="num2">Enter second number:</label>
        <input type="number" id="num2" placeholder="Enter second number">
        <br><br>
        <button onclick="addNumbers()">Add Numbers</button>
        <div id="result"></div>
        <script>
            function addNumbers() {
                //get the numbers from input
                let num1 = document.getElementById("num1").value;
                let num2 = document.getElementById("num2").value;
                //parse the numbers to integers
                let sum = parseInt(num1) + parseInt(num2);
                //display the result
                document.getElementById("result").innerHTML = "<h1>Result</h1><p>The sum of " + num1 + " and " + num2 + " is: " + sum + "</p>";
            }
        </script>
     </body>
</html>