
<!DOCTYPE html>
<html lang="en">
    <?php
    session_start();
    $windows = getcwd().'tools/windows/speedtest.exe -p no -f json';
    $linux = getcwd().'tools/linux/';
    $ruta = $windows;
    echo '<a href="'.'tools/windows/speedtest.exe">asd</a>';
?>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SpeedTest</title>
    <style>table{width: 80%;margin: 0 auto;}tr,td,th{border: 2px solid black;}</style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th><h2>Ookla SpeedTest</h2></th>
                <th><h2>Fast SpeetTest</h2></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php echo shell_exec($windows); ?>
                <td>
                <?php echo shell_exec('C:\Users\Propietario\Desktop\speedtest.exe -p no -f json');?>
                </td>
                <td rowspan="2"><h3><?php echo shell_exec('C:\Users\Propietario\Desktop\fast-cli.exe -s'); ?></h3></td>
            </tr>
            <tr>
            <td><?php echo shell_exec('C:\Users\Propietario\Desktop\speedtest.exe -p no -f json-pretty'); ?></td>
            </tr>
        </tbody>
    </table>    
</body>
</html>