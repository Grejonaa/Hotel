<?php

$host = "localhost";
$username = 'root';
$password = '';
$dbname = "forma";
$table = "projekt";


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $namesurname = $_POST['name_surname'];
    $email = $_POST['email'];
    $arrival = $_POST['arrival_date'];
    $departure = $_POST['departure_date'];
    $nrAdults = $_POST['adults'];
    $nrChildren = $_POST['children'];
    $nrRooms = $_POST['nrrooms'];
    $room_type = $_POST['room_type'];
    $action = $_POST["action"];

    $message="";

    // Determine the price based on room type
    $price = ($room_type === "economic") ? 50 : 250;
    $totalprice = $nrRooms * $price;
    if ($action == "save") {
         if (empty($namesurname) || empty($email) || empty($arrival) || empty($departure) || empty($nrAdults) || empty($nrRooms) || empty($room_type)) {
        $message = "<p style='color: red; text-align: center;'>Please fill all fields.</p>";
        } else {
        try {
            $dsn = "mysql:host=$host;dbname=$dbname";
            $conn = new PDO($dsn, $username, $password);
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

            $message= "Thank You for choosing us";

        } catch (PDOException $e) {
            echo "<p style='color: red; text-align: center;'>Error: " . $e->getMessage() . "</p>";
        }
    }
  }
    elseif ($action == "generate_pdf") {
    // Code to generate PDF
    
    $data = "";
    $data .= "<h1>Your Details</h1>";
    $data .= "<strong>Full Name :</strong> " . $namesurname . "<br>";
    $data .= "<strong>Email : </strong>" . $email . "<br>";
    $data .= "<strong>Arrival Date : </strong>" . $arrival . "<br>";
    $data .= "<strong>Departure Date : </strong>" . $departure . "<br>";
    $data .= "<strong>Number of Adults : </strong>" . $nrAdults . "<br>";
    $data .= "<strong>Number of Children: </strong>" . $nrChildren . "<br>";
    $data .= "<strong>Number of Rooms : </strong>" . $nrRooms . "<br>";
    $data .= "<strong>Type of Room : </strong>" . $room_type . "<br>";
    $data .= "<strong>Total Price : </strong>" . $totalprice . "<br>";

    require_once __DIR__ . '/vendor/autoload.php';
    
    $mpdf = new \Mpdf\Mpdf();

    $mpdf->WriteHMTL($data);
    $mpdf->Output('mypdffile.pdf', 'D');

  }
}
?>
