<?php include "header.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Loan Calculator</title>
    <style>
        /* Add your CSS styles here for better presentation */
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
        }
        h1 {
            text-align: center;
        }
        label {
            font-weight: bold;
        }
        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Car Loan Calculator</h1>
    <form id="loanCalculatorForm">
        <label for="carPrice">Car Price:</label>
        <input type="number" id="carPrice" name="carPrice" required><br>

        <label for="downPayment">Down Payment :</label>
        <input type="number" id="downPayment" name="downPayment" required><br>

        <label for="loanTerm">Loan Term (months):</label>
        <input type="number" id="loanTerm" name="loanTerm" required><br>

        <label for="annualInterestRate">Annual Interest Rate (%):</label>
        <input type="number" id="annualInterestRate" name="annualInterestRate" step="0.01" required><br>

        <input type="submit" value="Calculate">
    </form>

    <div id="loanDetails">
        <!-- The calculated loan details will be displayed here -->
    </div>

    <script>
        document.getElementById("loanCalculatorForm").addEventListener("submit", function (event) {
            event.preventDefault();

            // Get user inputs
            const carPrice = parseFloat(document.getElementById("carPrice").value);
            const downPayment = parseFloat(document.getElementById("downPayment").value);
            const loanTerm = parseInt(document.getElementById("loanTerm").value);
            const annualInterestRate = parseFloat(document.getElementById("annualInterestRate").value);

            // Calculate loan details
            const loanAmount = carPrice - downPayment;
            const monthlyInterestRate = (annualInterestRate / 12) / 100;
            const monthlyPayment = (loanAmount * monthlyInterestRate) / (1 - Math.pow(1 + monthlyInterestRate, -loanTerm));
            const totalInterest = (monthlyPayment * loanTerm) - loanAmount;
            const totalPayment = loanAmount + totalInterest;

            // Display the loan details
            const loanDetails = `
                <h2>Loan Details</h2>
                <p>Loan Amount: $${loanAmount.toFixed(2)}</p>
                <p>Monthly Payment: $${monthlyPayment.toFixed(2)}</p>
                <p>Total Interest: $${totalInterest.toFixed(2)}</p>
                <p>Total Payment: $${totalPayment.toFixed(2)}</p>
            `;

            document.getElementById("loanDetails").innerHTML = loanDetails;
        });
    </script>
</body>
</html>
