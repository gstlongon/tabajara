<?php
require("php/config.php");

$item_category_id = isset($_GET['item_category_id']) ? $_GET['item_category_id'] : null;

$sql_categories = "SELECT * FROM categoria";
$result_categories = $conn->query($sql_categories);

if ($result_categories->num_rows > 0) {
    while ($row_category = $result_categories->fetch_assoc()) {
        $category_id = $row_category["categoria_id"];
        $category_name = ucfirst(strtolower($row_category["nome"]));

        $selected = ($category_id == $item_category_id) ? 'selected' : '';

        echo '<option value="' . $category_id . '" ' . $selected . '>' . $category_name . '</option>';
    }
}
?>
