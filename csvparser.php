<pre>
<?php
# include parseCSV class.
require_once __DIR__ . '/vendor/autoload.php';
use ParseCsv\Csv;
# create new parseCSV object.
$csv = new Csv();
$csv->auto('data.csv');
?>
</pre>
<style type="text/css" media="screen">
    table {
        background-color: #BBB;
    }
    th {
        background-color: #EEE;
    }
    td {
        background-color: #FFF;
    }
</style>
<table border="0" cellspacing="1" cellpadding="3">
    <tr>
        <?php foreach ($csv->titles as $value): ?>
        		<?php if($value == "food_req") { $value="Rice Quantity"; } ?>
            <th><?php echo str_replace("ÈÀ", "", iconv("ISO-8859-1", "UTF-8//IGNORE",$value)); ?></th>
        <?php endforeach; ?>
    </tr>
    <?php foreach ($csv->data as $key => $row): ?>
        <tr>
        	<?php $i=0; ?>
            <?php foreach ($row as $value): ?>

            	<?php
            		$data25 = str_replace("ü" , "" , iconv("ISO-8859-1", "UTF-8//IGNORE", $value));
            		$data24 = str_replace("¬","", $data25);
            		$data23 = str_replace("Û","", $data24);
            		$data22 = str_replace("Ü","", $data23);
            		$data21 = str_replace("Á","", $data22);
            		$data20 = str_replace("Ò","", $data21);
					$data19 = str_replace("»","", $data20);
					$data18 = str_replace("-","", $data19);
					$data17 = str_replace("â","", $data18);
					$data16 = str_replace("±","", $data17);
            		$data15 = str_replace("¨","", $data16);
            		$data14 = str_replace("","", $data15);
            		$data13 = str_replace("","", $data14);
            		$data12 = str_replace("à","", $data13);
            		$data11 = str_replace("ª","", $data12);
            		$data10 = str_replace("«","", $data11);
            		$data9 = str_replace("¡","", $data10);
            		$data8 = str_replace("À","", $data9);
            		$data7 = str_replace("_","", $data8);
            		$data6 = str_replace(".","", $data7);
            		$data5 = str_replace("µ","", $data6);
            		$data4 = str_replace("£","", $data5);
            		$data3 = str_replace("","", $data4);
            		$data2 = str_replace("ø","", $data3);
            		$data1 = str_replace("Ù","", $data2);
            		$datax = str_replace("", "",$data1);
            		$data = str_replace("¥","", $datax);
            	?>
                <td><?php
                if($i >= 12) {
                	$qnty = extractquantity($data);
        			echo $qnty;
            	}
                else
                {
                	echo $data; 	
                }

                 ?></td>
            <?php $i++; endforeach;  ?>
        </tr>
    <?php endforeach; ?>
</table>

<?php
function extractquantity($dta)
{
	$data = strtoupper($dta);
	switch (true){
	   case stristr($data,'RICE'):
	   	  $rc1 = explode("RICE", strtoupper($data));
	      $qty = explode("KG", strtoupper($rc1[1]));
	      $qnty = $qty[0]; 
	      $qnty = str_replace("(", "", $qnty);
	      $qnty = str_replace(":", "", $qnty);
	      $qnty = str_replace(" ", "", $qnty);
	       if (!is_numeric($qnty)) { 
	  			$qnty = "No Quantity Specified for rice";
	  		}
	  		return $qnty;
	      break;
	   case stristr($data,'SUGAR'):
	      $rc1 = explode("SUGAR", strtoupper($data));
	      $qty = explode("KG", strtoupper($rc1[1]));
	      $qnty = $qty[0]; 
	      $qnty = str_replace("(", "", $qnty);
	      $qnty = str_replace(":", "", $qnty);
	      $qnty = str_replace(" ", "", $qnty);
	       if (!is_numeric($qnty)) { 
	  			$qnty = "No Quantity Specified for sugar";
	  		}
	  		return $qnty;
	      break;
	      break;
	   case stristr($data,'MILK POWDER'):
	      $rc1 = explode("MILK POWDER", strtoupper($data));
	      $qty = explode("KG", strtoupper($rc1[1]));
	      $qnty = $qty[0]; 
	      $qnty = str_replace("(", "", $qnty);
	      $qnty = str_replace(":", "", $qnty);
	      $qnty = str_replace(" ", "", $qnty);
	       if (!is_numeric($qnty)) { 
	  			$qnty = "No Quantity Specified for milk powder";
	  		}
	  		return $qnty;
	      break;
	   case stristr($data,'BREAD'):
	      $rc1 = explode("BREAD", strtoupper($data));
	      $qty = explode("PACKS", strtoupper($rc1[1]));
	      $qnty = $qty[0]; 
	      $qnty = str_replace("(", "", $qnty);
	      $qnty = str_replace(":", "", $qnty);
	      $qnty = str_replace(" ", "", $qnty);
	       if (!is_numeric($qnty)) { 
	  			$qnty = "No Quantity Specified for milk powder";
	  		}
	  		return $qnty;
	      break;
	   case stristr($data,'PAYAR'):
	      $rc1 = explode("PAYAR", strtoupper($data));
	      $qty = explode("KG", strtoupper($rc1[1]));
	      $qnty = $qty[0]; 
	      $qnty = str_replace("(", "", $qnty);
	      $qnty = str_replace(":", "", $qnty);
	      $qnty = str_replace(" ", "", $qnty);
	       if (!is_numeric($qnty)) { 
	  			$qnty = "No Quantity Specified for milk powder";
	  		}
	  		return $qnty;
	      break;
	   case stristr($data,'NIGHTY'):
	      $rc1 = explode("NIGHTY", strtoupper($data));
	      $qty = explode("-", strtoupper($rc1[1]));
	      $qnty = $qty[0]; 
	      $qnty = str_replace("(", "", $qnty);
	      $qnty = str_replace(":", "", $qnty);
	      $qnty = str_replace(" ", "", $qnty);
	       if (!is_numeric($qnty)) { 
	  			$qnty = "No Quantity Specified for milk powder";
	  		}
	  		return $qnty;
	      break;
	}
}
?>