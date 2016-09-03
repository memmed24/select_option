<html>
    <head>
        <script src="jquery-3.1.0.min.js"></script>
    </head>
    <style>
        body{
            margin: 0;
            padding: 0;
        }
    </style>
    <body>
        <form action="" method="post">
            <select name="color">
                <option value="red">red</option>
                <option value="blue">blue</option>
                <option value="yellow">yellow</option>
                <option value="green">green</option>
            </select>
            <input type="submit" name="submit">
        </form>
        <?php
        session_start();
            if(isset($_POST['submit'])){
                $color = $_POST['color'];
                $_SESSION['changed'] = true;
            }
        ?>


        <?php
           // if($_SESSION['changed'] ==true ){ ?>
                <script>
                    $(function () {
                        console.log('<?=$color; ?>');
                        $("select option[value='<?=$color; ?>']").attr('selected','selected');
                    })
                </script>
            <?php //}
        ?>
    <div style="height: 100px; width: 100%; background-color: <?= $color; ?>"></div>
    </body>
</html>