<?php
    require 'db.php';
    $stmt = $pdo->query("SELECT * FROM expenses");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Калькулятор расходов</title>
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center">Калькулятор расходов</h1>

    <form action="process.php" method="POST" class="mt-4">
        <div class="mb-3">
            <label for="description" class="form-label">Описание</label>
            <input type="text" name="description" id="description" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="amount" class="form-label">Сумма</label>
            <input type="number" name="amount" id="amount" class="form-control" step="0.01" required>
        </div>
        <button type="submit" class="btn btn-primary">Добавить</button>
    </form>

    <h2 class="mt-5">Список расходов</h2>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Описание</th>
            <th>Сумма</th>
            <th>Дата</th>
            <th>Действия</th>
        </tr>
        </thead>
        <tbody>
            <?php foreach ($stmt as $row) : ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['description'] ?></td>
                    <td><?php echo $row['amount'] ?></td>
                    <td><?php echo $row['created_at'] ?></td>
                    <td><a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger btn-sm">Удалить</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>