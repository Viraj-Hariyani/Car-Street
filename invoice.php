<?php

include "conf.php";

if (isset($_SESSION['last_insert_id'])) {
    $lastInsertId = $_SESSION['last_insert_id'];

    // Retrieve the data from the database based on the last inserted ID
    $sql = "SELECT * FROM `payment_info` WHERE `id` = '".$lastInsertId."' ";
    $res = mysqli_query($conn, $sql);

    if ($res && mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_array($res);
    } else {
        // Handle the case where the last inserted ID doesn't exist or the query failed
        echo "Invoice not found or an error occurred.";
        exit; // Exit to prevent further execution
    }
} else {
    // Handle the case where the session variable is not set
    echo "No data available.";
    exit; // Exit to prevent further execution
}

?>

<?php include "header.php"; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .invoice {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .invoice-header {
            text-align: center;
        }

        .invoice-header h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .invoice-info {
            text-align: right;
        }

        .invoice-info p {
            margin: 0;
        }

        .customer-info {
            margin-top: 20px;
        }

        .customer-info p {
            margin: 0;
        }

        .item-table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        .item-table th,
        .item-table td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        .item-table th {
            background-color: #f2f2f2;
        }

        .total {
            margin-top: 20px;
            text-align: right;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="invoice">
        <div class="invoice-header">
            <h1>Invoice</h1>
        </div>
        
        <div class="customer-info">
            <p>Customer Name: <?php echo $row['name']; ?></p>
            <p>Address: <?php echo $row['address']; ?></p>
        </div>
        
        <table class="item-table">
            <thead>
                <tr>
                    <th>Payment Type</th>
                    <th>Visiting Charge</th>
                    <th>Test Drive</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $row['payment_type']; ?></td>
                    <td><?php echo $row['visiting_charge']; ?></td>
                    <td>Free</td>
                    <td><?php echo $row['visiting_charge']; ?></td>
                </tr>
                
            </tbody>
        </table>
        
        <div class="total">
            <p>Total : <?php echo $row['visiting_charge']; ?></p>
        </div>
        <body>
    <h4>Terms and Conditions</h4>

    <p>Thank you for choosing our services. Please read the following terms and conditions carefully:</p>

    <ol>
        <li><strong></strong> A visiting charge of $500 will be applied to cover our service costs for visiting your location.</li>
        
        <li><strong></strong> Payment must be made in full at the time of the visit. We accept cash and UPI payments.</li>
        
        <li><strong></strong> If you need to cancel the visit, please inform us at least 24 hours in advance to avoid any charges.</li>
        
        <li><strong></strong> Visiting charges are non-refundable once the service has been provided.</li>
        
    </ol>

    <p>By availing of our services and accepting this invoice, you agree to abide by these terms and conditions.</p>

    <p>If you have any questions or require further information, please contact us.</p>
</body>

    </div>
            
</body>
</html>

