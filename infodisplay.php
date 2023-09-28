<html>
    <head>
        <title>DETAILS</title>
        <style>
            .result,.result td, .result th{
                border: 1px solid black;
                border-collapse:collapse;
                padding:7px;
                margin:auto;
                background-color:lightblue;
            }
            .result th{
                background-color:lightskyblue;
            }
        </style>
    </head>
    <body>
        <a href= "<?=base_url('Details/Employee')?>">go to employe details</a>
        <?php
        if (isset($info)){
            ?>
        <form action = "<?=base_url('Details/update')?>" method= "post">
            <table cellspacing="20">
                <tr>
                    <td>Id</td>
                    <td><input name="stid" value="<?=$info[0]->id?>"></td>
                </tr>
                <tr>
                    <td>Employe Name</td>
                    <td><input name="stname" value="<?=$info[0]->employee_name?>"></td>
                </tr>
                <tr>
                    <td>Employe ID</td>
                    <td><input name="stID" value="<?=$info[0]->employee_id?>"></td>
                </tr>
                <tr>
                    <td>Employe Department</td>
                    <td><input name="stDepartment" value="<?=$info[0]->employee_Department?>"></td>
                </tr>
                <tr>
                    <td><button>Update</button></td>
                </tr>
            </table>
        </form>
        <?php
        }else{
        ?>
        <table class ="result">
            <tr>
                <th>Action</th>
                <th>Id</th>
                <th>Employe Name</th>
                <th>Employe ID</th>
                <th>Employe Department</th>
            </tr>
            <?php
            if(isset($table)){
                foreach ($table as $row) {        
            ?>
             <tr>
                <td> <a href ="<?=base_url('Details/edit/'.$row->id)?>"> Edit</a></td>
                <td><?=$row->id?></td>
                <td><?=$row->employee_name?></td>
                <td><?=$row->employee_id?></td>
                <td><?=$row->employee_Department?></td>                 
             </tr>
             <?php
            }
        } 
    } 
        ?>           
         </table>
    </body>
</html>