
        <?php

        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "simtakes");

        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        

        // Taking all 5 values from the form data(input)
        $id_user = $_REQUEST['id_user'];
        $username = $_REQUEST['username'];
        $nama = $_REQUEST['nama'];
        $password = $_REQUEST['password'];
        $id_role = $_REQUEST['id_role'];
        

        // We are going to insert the data into our sampleDB table
        $sql = "UPDATE user SET id_user = '$id_user', username = '$username', nama = '$nama', password = '$password' ,id_role = '$id_role'";

        // Check if the query is successful
        if(mysqli_query($conn, $sql)){
            $message = "Data Berhasil Diubah!";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href= 'user.php';
        </script>";

            
        
            
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
        
        // Close connection
        mysqli_close($conn);
        ?>
    