<?php
require __DIR__ . '/db_content.php';
$stament = $pdo->query(" SELECT * FROM address_book");
$row = $stament->fetchAll();
//echo json_encode($row, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
?>
<?php include __DIR__ . '/parts/head.php'; ?>
<?php include __DIR__ . '/parts/navbar.php'; ?>

<div class="container">

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th scope="col">sid</th>
                <th scope="col">name</th>
                <th scope="col">email</th>
                <th scope="col">mobile</th>
                <th scope="col">birthday</th>
                <th scope="col">address</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($r = $stmt->fetch()) : ?>
                <tr>
                    <td><?= $r['sid'] ?></td>
                    <td><?= $r['name'] ?></td>
                    <td><?= $r['email'] ?></td>
                    <td><?= $r['mobile'] ?></td>
                    <td><?= $r['birthday'] ?></td>
                    <td><?= $r['address'] ?></td>
                </tr>
            <?php endwhile ?>
        </tbody>
    </table>


</div>
<?php include __DIR__ . '/parts/scripts.php'; ?>
<?php include __DIR__ . '/parts/foot.php'; ?>