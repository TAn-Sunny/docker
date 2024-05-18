<?php
    // Function to establish database connection
    function get_connection() {
        $servername = "localhost"; 
        $username = "root"; // Replace with your database username
        $password = ""; // Replace with your database password
        $dbname = "WebProgramming"; // Replace with your database name

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        return $conn;
    }


    function get_services() {

        $conn = get_connection();
        $sql = "SELECT * FROM services";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

            $products = array();
            while ($row = $result->fetch_assoc()) {
                $products[] = $row;
            }
            $conn->close();

            return $products;
        } else {
            $conn->close();

            return false; 
        }
    }


?>
