<?php
function generateTable($conn) {
    $result = $conn->query("SELECT * FROM feedback ORDER BY request_time DESC");
    
    $tableData = '<thead>
                    <tr>
                        <th>ФИО</th>
                        <th>Адрес</th>
                        <th>Телефон</th>
                        <th>E-mail</th>
                    </tr>
                </thead>
                <tbody>';
    
    while ($row = $result->fetch_assoc()) {
        $tableData .= "<tr>
                        <td>" . htmlspecialchars($row['fio'], ENT_QUOTES, 'UTF-8') . "</td>
                        <td>" . htmlspecialchars($row['address'], ENT_QUOTES, 'UTF-8') . "</td>
                        <td>" . htmlspecialchars($row['phone'], ENT_QUOTES, 'UTF-8') . "</td>
                        <td>" . htmlspecialchars($row['email'], ENT_QUOTES, 'UTF-8') . "</td>
                       </tr>";
    }
    
    $tableData .= '</tbody>';
    
    return $tableData;
}
?>
