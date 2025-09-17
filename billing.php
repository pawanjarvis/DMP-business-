<?php
$data_file = "data.json";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customer_name = $_POST['customer_name'];
    $product_name = $_POST['product_name'];
    $quantity = (int)$_POST['quantity'];
    $price = (float)$_POST['price'];
    $gst_percentage = isset($_POST['gst_percentage']) ? (float)$_POST['gst_percentage'] : 18;
    $discount = isset($_POST['discount']) ? (float)$_POST['discount'] : 0;
    
    $total_amount = $quantity * $price;
    $discount_amount = $discount;
    $amount_after_discount = $total_amount - $discount_amount;
    $gst = $amount_after_discount * ($gst_percentage / 100);
    $final_amount = $amount_after_discount + $gst;
    $bill_date = date("Y-m-d");
    $bill_time = date("H:i:s");
    $bill_number = 'INV-' . date('Y') . '-' . time();
    
    // Read existing data
    if (file_exists($data_file)) {
        $data = json_decode(file_get_contents($data_file), true);
    } else {
        $data = ['users' => [], 'bills' => []];
    }
    
    // Ensure bills array exists
    if (!isset($data['bills'])) {
        $data['bills'] = [];
    }
    
    // Add bill
    $new_bill = [
        'bill_number' => $bill_number,
        'customer_name' => $customer_name,
        'product_name' => $product_name,
        'quantity' => $quantity,
        'price' => $price,
        'total_amount' => $total_amount,
        'discount' => $discount_amount,
        'gst_percentage' => $gst_percentage,
        'gst' => $gst,
        'final_amount' => $final_amount,
        'bill_date' => $bill_date,
        'bill_time' => $bill_time
    ];
    
    $data['bills'][] = $new_bill;
    
    // Save data
    if (file_put_contents($data_file, json_encode($data, JSON_PRETTY_PRINT))) {
        // Show success message with bill details
        echo "<h2>Bill Generated Successfully!</h2>";
        echo "<p><strong>Bill Number:</strong> $bill_number</p>";
        echo "<p><strong>Customer:</strong> $customer_name</p>";
        echo "<p><strong>Total Amount:</strong> ₹$final_amount</p>";
        echo "<p><a href='billing.html'>Generate Another Bill</a> | <a href='index.html'>Home</a></p>";
    } else {
        echo "Error: Unable to save bill data.";
    }
}
?>