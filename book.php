<?php

$host = "localhost";
$username = 'root';
$password = '';
$dbname = "forma";
$table = "projekt";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $namesurname = $_POST['name_surname'];
    $email = $_POST['email'];
    $arrival = $_POST['arrival_date'];
    $departure = $_POST['departure_date'];
    $nrAdults = $_POST['adults'];
    $nrChildren = $_POST['children'];
    $nrRooms = $_POST['nrrooms'];
    $room_type = $_POST['room_type'];

    $message = "";

    // Convert dates to DateTime objects
    $arrivalDate = new DateTime($arrival);
    $departureDate = new DateTime($departure);

    // Calculate the number of nights
    $interval = $arrivalDate->diff($departureDate);
    $numberOfNights = $interval->days;

    // Ensure the user selects a valid stay duration
    if ($numberOfNights <= 0) {
        $message = "<p style='color: red; text-align: center;'>Invalid dates. Departure must be after arrival.</p>";
    } else {
        // Determine the price based on room type
        $pricePerNight = ($room_type === "economic") ? 50 : 250;
        
        // Calculate the total price
        $totalprice = $nrRooms * $numberOfNights * $pricePerNight;

        try {
            $dsn = "mysql:host=$host;dbname=$dbname";
            $conn = new PDO($dsn, $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "INSERT INTO $table (NameSurname, Email, Arrival, Departure, Adults, Children, Rooms, TypeOfRoom) 
                    VALUES (:namesurname, :email, :arrival, :departure, :nrAdults, :nrChildren, :nrRooms, :room_type)";

            $stmt = $conn->prepare($sql);
            $stmt->execute([
                ':namesurname' => $namesurname,
                ':email' => $email,
                ':arrival' => $arrival,
                ':departure' => $departure,
                ':nrAdults' => $nrAdults,
                ':nrChildren' => $nrChildren,
                ':nrRooms' => $nrRooms,
                ':room_type' => $room_type
            ]);

            

            //Generate PDF
            require_once __DIR__ . '/vendor/autoload.php';

            $mpdf = new \Mpdf\Mpdf();

           
            $stylesheet = "
                body { font-family: Arial, sans-serif; }
                h1 { color: #333; text-align: center; }
                .booking-container { 
                    border: 2px solid #000; 
                    padding: 15px; 
                    border-radius: 10px;
                    background-color: #f8f8f8;
                }
                .booking-container strong {
                    color: #444;
                }
                .booking-container p {
                    font-size: 14px;
                    margin-bottom: 5px;
                }
                .table {
                    width: 100%;
                    border-collapse: collapse;
                    margin-top: 10px;
                }
                .table th, .table td {
                    border: 1px solid #000;
                    padding: 8px;
                    text-align: left;
                }
                .table th {
                    background-color: #7fc142;
                    color: white;
                }
            ";
            
            
            $data = "
                <h1>Your Booking Details</h1>
                <div class='booking-container'>
                    <p><strong>Full Name:</strong> $namesurname</p>
                    <p><strong>Email:</strong> $email</p>
                    <p><strong>Arrival Date:</strong> $arrival</p>
                    <p><strong>Departure Date:</strong> $departure</p>
                    <p><strong>Number of Adults:</strong> $nrAdults</p>
                    <p><strong>Number of Children:</strong> $nrChildren</p>
                    <p><strong>Number of Rooms:</strong> $nrRooms</p>
                    <p><strong>Type of Room:</strong> $room_type</p>
                    <p><strong>Total Price:</strong> $$totalprice</p>
                </div>
                <table class='table'>
                    <tr>
                        <th>Category</th>
                        <th>Details</th>
                    </tr>
                    <tr>
                        <td>Full Name</td>
                        <td>$namesurname</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>$email</td>
                    </tr>
                    <tr>
                        <td>Arrival</td>
                        <td>$arrival</td>
                    </tr>
                    <tr>
                        <td>Departure</td>
                        <td>$departure</td>
                    </tr>
                    <tr>
                        <td>Adults</td>
                        <td>$nrAdults</td>
                    </tr>
                    <tr>
                        <td>Children</td>
                        <td>$nrChildren</td>
                    </tr>
                    <tr>
                        <td>Rooms</td>
                        <td>$nrRooms</td>
                    </tr>
                    <tr>
                        <td>Room Type</td>
                        <td>$room_type</td>
                    </tr>
                    <tr>
                        <td>Total Price</td>
                        <td>$$totalprice</td>
                    </tr>
                </table>
                <h3>Thank You for Choosing Us!</h3>
            ";
            
           
            $mpdf->WriteHTML($stylesheet, \Mpdf\HTMLParserMode::HEADER_CSS);
            $mpdf->WriteHTML($data, \Mpdf\HTMLParserMode::HTML_BODY);
            
            
            $mpdf->Output('booking_details.pdf', 'D');
            
        } catch (PDOException $e) {
            echo "<p style='color: red; text-align: center;'>Error: " . $e->getMessage() . "</p>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Form</title>
    <style>
         body {
            font-family: 'Poppins', sans-serif;
            background: url("images/bg3.jpeg");
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
            margin-top: 50px;
        }
        .form-container h2 {
            text-align: center;
            color: #333;
        }
        .form-group {
            margin-bottom: 10px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }
        .form-group input, .form-group select {
            width: 95%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        .form-group input[type="submit"] {
            background-color: #7fc142;
            color: #ffffff;
            font-size: 16px;
            font-weight: bold;
            border: none;
            cursor: pointer;
            padding: 10px;
            margin-top: 10px;
            width: 100%;
        }
        .form-group input[type="submit"]:hover {
            background-color: #b58b2a;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Book Your Rooms</h2>
    <form action="" method="POST">
        <div class="form-group">
            <label>Name and Surname:</label>
            <input type="text" name="name_surname" required>
        </div>
        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" required>
        </div>
        <div class="form-group">
            <label>Arrival Date:</label>
            <input type="date" name="arrival_date" required>
        </div>
        <div class="form-group">
            <label>Departure Date:</label>
            <input type="date" name="departure_date" required>
        </div>
        <div class="form-group">
            <label>Number of Adults:</label>
            <input type="number" name="adults" min="1" required>
        </div>
        <div class="form-group">
            <label>Number of Children:</label>
            <input type="number" name="children" min="0">
        </div>
        <div class="form-group">
            <label>Number of Rooms:</label>
            <input type="number" name="nrrooms" min="1">
        </div>
        <div class="form-group">
            <label>Choose Room Type:</label>
            <select name="room_type">
                <option value="economic">Economic Room - $50</option>
                <option value="superior">Superior Room - $250</option>
            </select>
        </div>

        <?php if (!empty($message)) echo "<p style='color: green; text-align: center;'>$message</p>"; ?>

        <div class="form-group">
            <input type="submit" name="submit" value="Book & Generate PDF">
        </div>
    </form>
</div>

</body>
</html>
