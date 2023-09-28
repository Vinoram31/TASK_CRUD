<html>
    <head>
        <title>DETAILS</title>
    </head>
    <body>
         <?php
        if(isset($msg)){
            echo '<h2>' . $msg. '<h2>';
        }
        ?>
        <form action="http://localhost/ci3/Details/saveData/" method="post">
            <table cellspacing="20">
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="stname"></td>  
                </tr>
                <tr>
                    <td>ID</td>
                    <td><input type="number" name="stID"></td>  
                </tr>
                <tr>
                    <td>Department</td>
                    <td><input type="text" name="stDepartment"></td>  
                </tr>
                            <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="Submit">
                    <a href= "<?=base_url('Details/fetchdata')?>">view details</a>
                </td>  
                </tr>
            </table>
        </form>
    </body>
</html>