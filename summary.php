<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 20px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        hr {
            width: 80%;
        }

        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            position: relative;
        }

        th, td {
            border: 1px solid #dddddd;
            padding: 12px;
        }

        th {
            background-color: #ffd700;
            color: #333;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .print {
            background-color: #ffd700;
            color: #333;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            position: absolute;
            top: 10px;
            right: 10px;
        }

        .print:hover {
            background-color: orange;
        }
    </style>
    <script>
        function printTable() {
            window.print();
        }
    </script>
</head>

<body>
    <h2>Order Summary</h2>
    <hr>

    <?php
    $db_server = "localhost";
    $db_user = "appeecoc_op01";
    $db_pw = "oL1nSJ4uu6OGq29qRTfxB3@98J#3E&SPW%eX9Lr!";
    $db_name = "appeecoc_op01";

    try {
        $conn = mysqli_connect($db_server, $db_user, $db_pw, $db_name);
    } catch (mysqli_sql_exception $e) {
        echo "Could not connect. Error: " . $e->getMessage();
    }

    if (!$conn) {
        die("Failed to connect with the database");
    }

    $sql = "SELECT C.customer_id, C.first_name, C.last_name, C.email, C.country, C.postcode, C.state, SUM(S.total_sales) AS total_sales_amount
            FROM op_wc_customer_lookup AS C
            LEFT JOIN op_wc_order_stats AS S ON C.customer_id = S.customer_id
            GROUP BY C.customer_id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "
            <table>
                <tr>
                    <th>Customer ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Country</th>
                    <th>Postcode</th>
                    <th>State</th>
                    <th>Total Amount Purchase</th>
                </tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "
                <tr>
                    <td>" . $row["customer_id"] . "</td>"
                        . "<td>" . $row["first_name"] . "</td>"
                        . "<td>" . $row["last_name"] . "</td>"
                        . "<td>" . $row["email"] . "</td>"
                        . "<td>" . $row["country"] . "</td>"
                        . "<td>" . $row["postcode"] . "</td>"
                        . "<td>" . $row["state"] . "</td>"
                        . "<td>" . $row["total_sales_amount"] . "</td>
                </tr>";
        }
        echo "</table>";
    } else {
        echo "No result found";
    }

    mysqli_close($conn);
    ?>

    <button onclick="printTable()" class="print">Export as PDF</button>

</body>

</html>


