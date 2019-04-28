<?php
include '../core/EventC.php';
require ('db.php');


ob_start();
?>
<page backtop="20mm">
	 <h1> Tous les événements </h1>
		<table style="width:100%;border: 1px dashed">
		<tr>
			<th style="width: 20%">Id </th>
			<th style="width: 15%"> Nom</th>
			<th style="width: 15%"> Description</th>
			<th style="width: 15%"> Localisation</th>
			<th style="width: 15%"> Date</th>
			
		</tr>
		<?php
		$produit1C=new eventC();
		$liste=$produit1C->getevent();
		foreach($liste as $row) {
			?>
			<tr>
				<td> <?php echo $row['id'];?> </td>
			<td> <?php echo $row['nom'];?> </td>

			<td> <?php echo $row['description'];?> </td>
			<td> <?php echo $row['localisation'];?> </td>
			<td> <?php echo $row['date'];?> </td>
		</tr>
			<?php  
		}

?>
	</table>


</page>

<?php
$content= ob_get_clean();
require('html2pdf/html2pdf.class.php');
try{
$pdf=new html2pdf('p','A4','fr','true','UTF-8');
$pdf->pdf->SetDisplayMode('fullpage');

$pdf->writeHTML($content);
//$pdf->pdf->IncludeJS('print(true)');
$pdf->Output('test.pdf');
}
catch(HTML2PDF_exception $e)
{
	die($e);
}

?>