<?php
require("/var/www/Chapter10/fpdf17/fpdf.php");

class People {
    public function all() {
        try {
            $db = new PDO("mysql:host=localhost;dbname=tan2", "root", "klabklab");
            $query = $db->prepare( "SELECT * FROM mix");
            $query->execute();
            $people = $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            //echo "Exeption: " .$e->getMessage();
            $result = false;
        }
        $query = null;
        $db = null;
        return $people;        
    }
}

class PeoplePDF extends FPDF {
    // Create basic table
    public function CreateTable($header, $data)
    {
        // Header
        $this->SetFillColor(0);
        $this->SetTextColor(255);
        $this->SetFont('','B');
        foreach ($header as $col) {
            //Cell(float w [, float h [, string txt [, mixed border [, int ln [, string align [, boolean fill [, mixed link]]]]]]])
            $this->Cell($col[1], 10, $col[0], 1, 0, 'L', true);
        }
        $this->Ln();
        // Data
        $this->SetFillColor(255);
        $this->SetTextColor(0);
        $this->SetFont('');
        foreach ($data as $row)
        {
            $i = 0;
            foreach ($row as $field) {
                $this->Cell($header[$i][1], 6, $field, 1, 0, 'L', true);
                $i++;
            }
            $this->Ln();
        }
    }
}

// Column headings
$header = array(
             array('ID'      ,  30), 
             array('status'  ,  30), 
             array('first'   ,  30),
             array('last'    ,  30),
             array('position',  47)
          );
// Get data
$people = new People();
$data = $people->all();

$pdf = new PeoplePDF();
$pdf->SetFont('Arial', '', 12);
$pdf->AddPage();
$pdf->CreateTable($header,$data);
$pdf->Output();
?>