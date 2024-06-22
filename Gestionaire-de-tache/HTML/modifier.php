<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajouter une nouvelle tâche</title>
    <link rel="stylesheet" href="../CSS/modifier.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css">

</head>

<body>

    <form id="taskForm" onsubmit="return validateForm()" method="POST" action="add_task.php">
        <a href="user.php" class="croix">
            <i class="las la-times-circle"></i>
        </a>
        <h1>modifier ma tâche</h1>

        <div class="form-group">
            <label for="name">Nom de la tâche:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="box-shadow" id="description" name="description" required></textarea>
        </div>
        <div class="form-group">
            <label for="date">Date:</label>
            <input type="date" id="date" name="date" required>
        </div>
        <div class="form-group">
            <label for="time">Heure:</label>
            <input type="time" id="time" name="time" required>
        </div>
        <div class=" priorite">
            <input type="radio" id="priorite" value="true" name="priorite">
            <label for="priorite">prioritaire<span>*</span></label>
        </div>

        <div class="form-group">
            <input type="submit" value="Modifier la tâche">
        </div>
    </form>
</body>

</html>