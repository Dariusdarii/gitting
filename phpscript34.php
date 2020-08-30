<?php
//open csv and display details in table format 
$file = fopen("colorsrgb.csv","r");
echo "<html><body><table style='width:50% ; border: 1px solid black; text-align: center;'>\n\n";
while (($line = fgetcsv($file)) !== false) {
    echo "<tr>";
    foreach ($line as $cell) {
            echo "<td style='border: 1px solid black'>" . htmlspecialchars($cell) . "</td>";
    }
    echo "</tr>\n";
}
fclose($file);
echo "\n</table></body></html>";