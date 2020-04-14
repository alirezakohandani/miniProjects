<?php
$cars = array(
	array('valvo' , '200$', 'red'),
	array('BMW', '80$', 'black'),
	array('benz', '45$', 'white'),
	array('Ferrari', '1M$', 'red'),
);
	$row_Count = count($cars);
	$col_Count = count($cars[0]);

		for($row = 0; $row < $row_Count; $row++) {
		echo "number of row $row";
		echo "<ul>";
		for ($col=0; $col < $col_Count; $col++) { 
			echo "<li>" . $cars[$row][$col] . "</li>";
		}
		echo "</ul>";
	}
	?>
