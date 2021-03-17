<!doctype html>
<html lang="lt">
<head>
<meta charset="8">
<meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TODO appsas</title>
</head>
<body>
    <?php include ("view/_partials/header.view.php") ; ?>
    <?php
    $title = "Uzduociu sarasas";
    ?>
    <section>
        <h2><?=$title;?></h2>
    </section>
    <p><a href="new-task.view.php"</p>
    <ul>
        <?php foreach ($tasks->allTasks()as $task): ?>
        <li><?=$task['subject'];?>
            <ul>
                <li><?=$task['priority'];?></li>
                <li><?=$task['dueDate'];?></li>
                <li><a href="/complete-task/id/<?=$task['id'];?>">Atlikta</a> </li>
                <li><a href="/delete-task/id/<?=$task['id'];?>">Salinti</a> </li>
            </ul>
            <?php endforeach;?>
            <?php include ("view/_partials/footer.view.php");?>
        </li>
    </ul>
 </body>
</html>