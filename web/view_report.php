<?php
    // include("connection.php");
    // session_start();
    // if(!isset($_SESSION['admin_session']))
    // {
    //     echo "<script>window.location.href='login.php'</script>";
    // }

    // $test_id = $_GET['id'];
	// $query = "SELECT tbl_patient.name as 'pname',tbl_hospital.name as 'hname',tbl_vaccine.name as 'vname', tbl_tresult.* FROM tbl_tresult INNER JOIN tbl_hospital ON tbl_tresult.h_id = tbl_hospital.id INNER JOIN tbl_patient ON tbl_tresult.p_id = tbl_patient.id INNER JOIN tbl_vaccine ON tbl_tresult.v_id = tbl_vaccine.id  WHERE tbl_tresult.id = $test_id";
	// $result = mysqli_query($connection,$query);
	// $test_details = mysqli_fetch_assoc($result);

?>


<?php
include('connection.php');
session_start();
if(!isset($_SESSION['patient_session']))
{
    echo "<script>window.location.href='login.php'</script>";
}

require('./fpdf/fpdf.php');

// Create instance of FPDF class
$pdf = new FPDF();
$pdf->AddPage();

// Define the cell widths and height
$width_cell = array(50, 130); // Adjust widths as needed
$cell_height = 10;

// Set font and fill color for the header
$pdf->SetFont('Arial', 'B', 12);
$pdf->SetFillColor(193, 229, 252);

// Define headers and set fill color for cells
$headers = array('Name', 'Hospital', 'Vaccine', 'Date', 'Time', 'Vaccination Status');
$pdf->SetFont('Arial', 'B', 10);

$test_id = $_GET['id'];
$sql = "SELECT tbl_patient.name as 'pname',tbl_hospital.name as 'hname',tbl_vaccine.name as 'vname', tbl_tresult.* FROM tbl_tresult INNER JOIN tbl_hospital ON tbl_tresult.h_id = tbl_hospital.id INNER JOIN tbl_patient ON tbl_tresult.p_id = tbl_patient.id INNER JOIN tbl_vaccine ON tbl_tresult.v_id = tbl_vaccine.id  WHERE tbl_tresult.id = $test_id";

// Fetch a single row of data
$row = $connection->query($sql)->fetch_assoc();

// Set font for the data rows
$pdf->SetFont('Arial', '', 12);

foreach ($headers as $index => $header) {
    $pdf->Cell($width_cell[0], $cell_height, $header, 1, 0, 'C', true); // Heading cell
    $data = '';
    switch ($index) {
        case 0:
            $data = $row['pname'];
            break;
        case 1:
            $data = $row['hname'];
            break;
        case 2:
            $data = $row['vname'];
            break;
        case 3:
            $data = $row['date'];
            break;
        case 4:
            $data = $row['time'];
            break;
        case 5:
            $data = $row['result'];
            break;
    }
    $pdf->Cell($width_cell[1], $cell_height, $data, 1, 1, 'C'); // Data cell
}

// Output the PDF
$pdf->Output();
?>
