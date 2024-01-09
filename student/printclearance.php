<?php
include("../functions.php");
	include("tcpdf/tcpdf.php");
	$useridentity= isset($_POST['userN']) ? $_POST['userN'] : $_SESSION['userN'];
	$fullname= isset($_POST['fname']) ? $_POST['fname'] : $_SESSION['fname'];
	$width_cell = array(60, 50, 40);
	
	$sql = "SELECT Picture FROM users WHERE UserName='$useridentity'";
	$result = mysqli_query($db,$sql);
	$rows = mysqli_fetch_array($result);
	$image = $rows['Picture'];
	$image_src = '../myimages/'.$image;
	
	class Test extends TCPDF{
		function TestHeader(){
			global $width_cell, $useridentity, $db, $pdf, $image_src;
			$sql= "SELECT * FROM mainclearance WHERE UserName ='$useridentity'";
			$query= mysqli_query($db, $sql);
			$rows=mysqli_fetch_array($query);
		
			$pdf->Image($image_src, 150, 30, 30, 35, '', '', 'C', true, 100, '', false, false, 0, false, false, false);
			
			$pdf->Image('logo.jpeg', 30, 30, 30, 35, 'JPEG', '', 'C', true, 100, '', false, false, 0, false, false, false);
			
			
			
			$this->SetFont('times', 'B', 24);
			$this->Cell(65, 5, "", 0, 0, "L", false);
			$this->Cell(50, 5, "Federal University, Dutse", 0, 0, "C", false);
			$this->Cell($width_cell[2], 5, "", 0, 1, "L", false);
			
			$this->SetFont('', 'B', 16);
			$this->Cell(65, 5, "", 0, 0, "L", false);
			$this->Cell(50, 5, $rows['Faculty'], 0, 0, "C", false);
			$this->Cell($width_cell[2], 5, "", 0, 1, "L", false);
			
			$this->SetFont('helvetica', '', 15);
			$this->Cell(65, 5, "", 0, 0, "L", false);
			$this->Cell(50, 5, $rows['Department'], 0, 0, "C", false);
			$this->Cell($width_cell[2], 5, "", 0, 1, "L", false);
			
			$this->Cell($width_cell[0], 5, "", 0, 0, "L", false);
			$this->Cell($width_cell[1], 5, "", 0, 0, "L", false);
			$this->Cell($width_cell[2], 5, "", 0, 1, "L", false);
			
			$this->Cell($width_cell[0], 5, "", 0, 0, "L", false);
			$this->Cell($width_cell[1], 5, "", 0, 0, "L", false);
			$this->Cell($width_cell[2], 5, "", 0, 1, "L", false);
			
			$this->Cell($width_cell[0], 5, "", 0, 0, "L", false);
			$this->Cell($width_cell[1], 5, "", 0, 0, "L", false);
			$this->Cell($width_cell[2], 5, "", 0, 1, "L", false);
			
			$this->Cell($width_cell[0], 5, "", 0, 0, "L", false);
			$this->Cell($width_cell[1], 5, "", 0, 0, "L", false);
			$this->Cell($width_cell[2], 5, "", 0, 1, "L", false);
			
			$this->Cell($width_cell[0], 5, "", 0, 0, "L", false);
			$this->Cell($width_cell[1], 5, "", 0, 0, "L", false);
			$this->Cell($width_cell[2], 5, "", 0, 1, "L", false);
			
			
			$this->SetCellPadding(0,0,0,0);
			$this->SetFont('', '', 14);
			$this->Cell($width_cell[0], 5, $rows['StudentName'], 0, 0, "L", false);
			$this->Cell($width_cell[1], 5, "", 0, 0, "L", false);
			$this->Cell($width_cell[2], 5, "", 0, 1, "L", false);
			
			$this->Cell($width_cell[0], 5, $rows['RegNo'], 0, 0, "L", false);
			$this->Cell($width_cell[1], 5, "", 0, 0, "L", false);
			$this->Cell($width_cell[2], 5, "", 0, 1, "L", false);
			
			$this->Cell($width_cell[0], 5, $rows['Course'], 0, 0, "L", false);
			$this->Cell($width_cell[1], 5, "", 0, 0, "L", false);
			$this->Cell($width_cell[2], 5, "", 0, 1, "L", false);
			
			$this->Cell($width_cell[0], 5, "", 0, 0, "L", false);
			$this->Cell($width_cell[1], 5, "", 0, 0, "L", false);
			$this->Cell($width_cell[2], 5, "", 0, 1, "L", false);
			
			$this->SetCellPadding(4,0,0,0);
			$this->SetFont('times', 'B', 15);
			$this->Cell($width_cell[0], 5, "Department/Unit", 0, 0, "L", false);
			$this->Cell($width_cell[1], 5, "Clearance Status", 0, 0, "L", false);
			$this->Cell($width_cell[2], 5, "Cleared by", 0, 1, "L", false);
			
			$this->SetFont('', '', 14);
			$this->Cell($width_cell[0], 5, "Coordinator", 0, 0, "L", false);
			if($rows['CoordinatorStatus']=="No respond yet"){
				$this->SetTextColor(255, 0, 0);
			}
			$this->Cell($width_cell[1], 5, $rows['CoordinatorStatus'], 0, 0, "L", false);
			$this->Cell($width_cell[2], 5, $rows['Coordinator_Cleared_By'], 0, 1, "L", false);
			$this->SetTextColor(0, 0, 0);
			
			$this->Cell($width_cell[0], 5, "Head of Department", 0, 0, "L", false);
			if($rows['HoDStatus']=="No respond yet"){
				$this->SetTextColor(255, 0, 0);
			}
			$this->Cell($width_cell[1], 5, $rows['HoDStatus'], 0, 0, "L", false);
			$this->Cell($width_cell[2], 5, $rows['HoD_Cleared_By'], 0, 1, "L", false);
			$this->SetTextColor(0, 0, 0);
			
			$this->SetFont('', '', 14);
			$this->Cell($width_cell[0], 5, "Level Coordinator", 0, 0, "L", false);
			if($rows['lvlCoordinatorStatus']=="No respond yet"){
				$this->SetTextColor(255, 0, 0);
			}
			$this->Cell($width_cell[1], 5, $rows['lvlCoordinatorStatus'], 0, 0, "L", false);
			$this->Cell($width_cell[2], 5, $rows['lvlCoordinator_Cleared_By'], 0, 1, "L", false);
			$this->SetTextColor(0, 0, 0);
			
			$this->Cell($width_cell[0], 5, "SIWES Coordinator", 0, 0, "L", false);
			if($rows['sCoordinatorStatus']=="No respond yet"){
				$this->SetTextColor(255, 0, 0);
			}
			$this->Cell($width_cell[1], 5, $rows['sCoordinatorStatus'], 0, 0, "L", false);
			$this->Cell($width_cell[2], 5, $rows['sCoordinator_Cleared_By'], 0, 1, "L", false);
			$this->SetTextColor(0, 0, 0);
			
			
			$this->Cell($width_cell[0], 5, "Project Coordinator", 0, 0, "L", false);
			if($rows['pCoordinatorStatus']=="No respond yet"){
				$this->SetTextColor(255, 0, 0);
			}
			$this->Cell($width_cell[1], 5, $rows['pCoordinatorStatus'], 0, 0, "L", false);
			$this->Cell($width_cell[2], 5, $rows['pCoordinator_Cleared_By'], 0, 1, "L", false);
			$this->SetTextColor(0, 0, 0);
			
			$this->Cell($width_cell[0], 5, "Lab Technician", 0, 0, "L", false);
			if($rows['lTechnicianStatus']=="No respond yet"){
				$this->SetTextColor(255, 0, 0);
			}
			$this->Cell($width_cell[1], 5, $rows['lTechnicianStatus'], 0, 0, "L", false);
			$this->Cell($width_cell[2], 5, $rows['lTechnicianStatus'], 0, 1, "L", false);
			$this->SetTextColor(0, 0, 0);
			
			$this->SetCellPadding(30,0,0,0);
			$this->SetFont('times', '', 14);
			$this->Cell(40, 5, "", 0, 0, "L", false);
			$this->Cell($width_cell[1], 5, "Level Coordinator Sign", 0, 0, "L", false);
			$this->Cell($width_cell[2], 5, "", 0, 1, "L", false);
			
			/*
			$style = array(
				'border' => 2,
				'vpadding' => 'auto',
				'hpadding' => 'auto',
				'fgcolor' => array(0,0,0),
				'bgcolor' => false,
				'module_width' => 1,
				'module_height' => 1
			);
			$code = '[111011100110010] [111011100110010] [111011100110010] [111011100110010] [111011100110010]';
			$this->write2DBarcode($code, 'RAW', 80, 30, 30, 20, $style, 'N');
			*/
		}
	}
	
	$pdf = new Test();
	$pdf->SetPrintHeader(false);
	$pdf->SetPrintFooter(false);
	$pdf->AddPage("P");
	$pdf->TestHeader();
	$pdf->Output();
?>