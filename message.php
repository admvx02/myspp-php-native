<?php
$conn = mysqli_connect("localhost", "root", "root", "myspp-native") or die("Database Error");
$getMesg = mysqli_real_escape_string($conn, $_POST['text']);
$check_data = "SELECT replies FROM chatbot WHERE queries LIKE '%$getMesg%'";
$run_query = mysqli_query($conn, $check_data) or die("Error");

if (mysqli_num_rows($run_query) > 0) {
    $fetch_data = mysqli_fetch_assoc($run_query);
    $replay = $fetch_data['replies'];
    echo $replay;
} else {
    echo "Maaf Kamu bertanya di luar seputar Aplikasi MySPP!";
}

?>