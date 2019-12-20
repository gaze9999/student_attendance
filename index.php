<?php
    require_once('./db.inc.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Noto+Sans+TC|Roboto&display=swap">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <!-- <form type="POST" action="./addStudent.php"> -->
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">學生編號</th>
                                    <th scope="col">學生姓名</th>
                                    <th scope="col">加入時間</th>
                                    <th scope="col">更新時間</th>
                                </tr>
                            </thead>
                            <?php
                                $sql = "SELECT `id`, `name`, `createdTime`, `updatedTime`
                                        FROM `students`";
                                $stmt = $pdo->prepare($sql);
                                $stmt->execute();

                                if ($stmt->rowCount() > 0){
                                    $arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                    for ($i = 0; $i < count($arr); $i++){

                            ?>
                            <tbody class="tbody">
                                <tr>
                                    <td scope="col"><?php echo $arr[$i]['id'] ?></td>
                                    <td scope="col"><?php echo $arr[$i]['name'] ?></td>
                                    <td scope="col"><?php echo $arr[$i]['createdTime'] ?></td>
                                    <td scope="col"><?php echo $arr[$i]['updatedTime'] ?></td>
                                </tr>
                            </tbody>
                            <?php } } ?>
                        <!-- <table class="table"> -->
                            <!-- <tfoot class="tfoot-dark"> -->
                            <tfoot>
                                <tr>
                                    <td scope="col">學生姓名</td>
                                </tr>
                                <tr>
                                    <td scope="col"><input type="text" id="sInput" name="name" value="" max-length="50"></td>
                                </tr>
                            <!-- </tbody> -->
                            <!-- <tfoot> -->
                                <tr>
                                    <td scope="col">
                                        <button class="btn-add btn btn-primary" id="btn-add" name="btn-add" role="button">新增</button>
                                        <button class="btn-add btn btn-primary" id="btn-refresh" name="btn-refresh" role="button">更新</button>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>                    
                    <!-- </form> -->
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="./js/custom.js"></script>
</body>
</html>