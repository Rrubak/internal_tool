 <?php
    // require('fpdf/fpdf.php');
    require('WriteHTML.php');
    $pdf=new PDF_HTML();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',10);
    $pdf->Ln();
    $pdf->Ln();
    $pdf->SetFont('times','B',10);
    // $pdf->Cell(25,7,"Student name");
    $pdf->Cell(25,7,"tasks");
   
    $pdf->Ln();
    $pdf->Cell(450,7,"----------------------------------------------------------------------------------------------------------------------------------------------------------------------");
    $pdf->Ln();

         
            
            

                $servername = "localhost";
                $username = "root";
                $password = "";

                // Create connection
                $conn = mysqli_connect($servername, $username, $password,"internal_tool");

                // Check connection
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }
                $sql="select tasks_completed from tasks";
                $result = $conn->query($sql);

            while($rows=$result->fetch_assoc())
            {
                $final[] = $rows['tasks_completed'];
               // $pdf->Cell(25,7,$studid);
               //  $pdf->Cell(30,7,$name);
            
               //  $pdf->Ln(); 
            }
             //echo "<pre>";
            // print_r($final);
            //$pdf->Cell(25,7,$final);
            
            $pdf->WriteHTML(utf8_decode($final[0]));
            $pdf->Ln();  
            // foreach ($finished_tasks as $key => $finished_task) {
            //    $pdf->Cell(30,7,$finished_task);
            //     $pdf->Ln(); 
            // }
            

    $pdf->Output();
?>