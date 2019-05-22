<?php

// Задание 1
function task1($file) {
    $file = file_get_contents($file);
    $xml = new SimpleXMLElement($file);
    
    foreach ($xml->Address as $address_item) {
        echo '<div style="display: inline-block; border: 1px solid; margin-right: 50px;">';
        echo '<table border="1">';
        echo '<thead><tr>';
        echo '<td style="font-weight: bold;">Address Type:</td><td>' . $address_item->attributes()->Type . '</td>';
        echo '</tr></thead>';
        echo '<tbody>';
        echo "<tr><td>Name:</td><td>$address_item->Name</td>";
        echo "<tr><td>Street:</td><td>$address_item->Street</td>";
        echo "<tr><td>City:</td><td>$address_item->City</td>";
        echo "<tr><td>Zip:</td><td>$address_item->Zip</td>";
        echo "<tr><td>Country: </td><td>$address_item->Name</td>";
        echo '</tbody>';
        echo '</table>';
        echo '</div>';
    }

    // Заметки для доставки
    echo '<br><br>';
    echo '<b>Delivery Notes: </b>' . $xml->DeliveryNotes . '<br><br>';

    // Таблица с заказанными товарами
    echo '<table  border="1" style="border: 1px solid #000;">';
    echo '<caption>Order Positions</caption>';
    echo '<thead ><tr>';
    echo '<td>Part Number</td>';
    echo '<td>Product Name</td>';
    echo '<td>Quantity</td>';
    echo '<td>Price</td>';
    echo '<td>Shipment Date</td>';
    echo'<td>Comments</td>';
    echo '</tr></thead>';
    echo '<tbody style="text-align: center;">';

    foreach ($xml->Items->Item as $shipItem) {
        echo '<tr>';
        echo '<td>' . $shipItem->attributes()->PartNumber . '</td>';
        echo '<td>' . $shipItem->ProductName . '</td>';
        echo '<td>' . $shipItem->Quantity . '</td>';
        echo '<td>' . $shipItem->USPrice . ' $</td>';
        //Вывод даты
        if (empty($shipItem->ShipDate)) {
            echo '<td></td>';
        } else {
            echo '<td>' . date('d M Y', strtotime($shipItem->ShipDate)) . '</td>';
        }
        echo '<td>' . $shipItem->Comment . '</td>';
        echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';

    
}

?>