  <?php
 					

  		function conn(){
  			require('../fpdf/fpdf.php');
			$pdf=new FPDF();
			$pdf->AddPage();
			$pdf->SetFont('Arial','B',10);
			$pdf->SetFont('times','B',10);	
		

			$servername = "localhost";
			$username = "root";
			$password = "";

			// Create connection
			$conn = mysqli_connect($servername, $username, $password,"test");

			// Check connection
			if (!$conn) {
			    die("Connection failed: " . mysqli_connect_error());
			}
			$sql="select username,tasks_completed from task";
			$result = $conn->query($sql);
			
			while($row = $result->fetch_assoc()){
				$final[]=$row;
				
			}
			
			foreach ($final as $value) 
			{
				$name[] = $value['username'];
				$task[] = $value['tasks_completed'];
			}
		
	
			for($i=0;$i<1;$i++) 
			{
				$pdf->Cell(25,0,$name[$i]);
				for($k=0;$k<2;$k++) {
				$pdf->Cell(25,0,$task[$k]);
			}
			}
			
			$pdf->Output();

		
	}
	conn();

?>