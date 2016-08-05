<?php 


	require_once '../fpdf/fpdf.php';

	// reference the Dompdf namespace
	use Dompdf\Dompdf;

	// instantiate and use the dompdf class
	$dompdf = new fpdf();

	$html = "<h1>Hi Mam/Sir, Here the reports of all students.</h1>
<blockquote>
<p>Meena has did the following tasks</p>
<ol><li>some text goes here</li></ol>
<ol><li>some text goes here</li></ol>
<ol><li>some text goes here</li></ol>
<ol><li>some text goes here</li></ol>
</blockquote>
<hr/>
<blockquote>
<p>Meena has did the following tasks</p>
<ol><li>some text goes here</li></ol>
<ol><li>some text goes here</li></ol>
<ol><li>some text goes here</li></ol>
<ol><li>some text goes here</li></ol>
</blockquote>
<hr/>
<blockquote>
<p>Meena has did the following tasks</p>
<ol><li>some text goes here</li></ol>
<ol><li>some text goes here</li></ol>
<ol><li>some text goes here</li></ol>
<ol><li>some text goes here</li></ol>
</blockquote>
<hr/>
<blockquote>
<p>Meena has did the following tasks</p>
<ol><li>some text goes here</li></ol>
<ol><li>some text goes here</li></ol>
<ol><li>some text goes here</li></ol>
<ol><li>some text goes here</li></ol>
</blockquote>
<hr/>
<blockquote>
<p>Meena has did the following tasks</p>
<ol><li>some text goes here</li></ol>
<ol><li>some text goes here</li></ol>
<ol><li>some text goes here</li></ol>
<ol><li>some text goes here</li></ol>
</blockquote>
<hr/>
<blockquote>
<p>Meena has did the following tasks</p>
<ol><li>some text goes here</li></ol>
<ol><li>some text goes here</li></ol>
<ol><li>some text goes here</li></ol>
<ol><li>some text goes here</li></ol>
</blockquote>
<hr/>";
	$dompdf->WriteHtml($html);

	// (Optional) Setup the paper size and orientation
	$dompdf->setPaper('A4', 'landscape');

	// Render the HTML as PDF
	$dompdf->render();

	// Output the generated PDF to Browser
	$dompdf->stream();