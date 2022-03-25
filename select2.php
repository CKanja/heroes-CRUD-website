 <?php
    // require_once('view-test.php');
    if (isset($_POST["id"])) {
        $output = '';
        $connect = mysqli_connect("localhost", "root", "", "hero");
        $query = "SELECT * FROM hero WHERE id = '" . $_POST["id"] . "'";
        $result = mysqli_query($connect, $query);
        // $output .= '$r["long_bio"]';
        // echo $output;
        $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';
        while ($row = mysqli_fetch_array($result)) {
            $output .= '  
                <tr>  
                     
                     <td width="70%" style="color: #805521;">' . $row["long_bio"] . '</td>  
                </tr>  
               
                ';
        }
        $output .= "</table></div>";
        echo $output;
    }
    ?>