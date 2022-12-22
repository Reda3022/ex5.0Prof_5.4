<?php include 'header.view.php'; ?>


<main>
    <h2>vue du détail</h2>
    <?php var_dump($data);?>
    <table>

        <tr>
            <th>ID</th>
            <th>CAT</th>
            <th>DESCRIPTION</th>
        </tr>
        <?php foreach ($data as $d):?>
            <tr>
                <td><?php echo $d['id'] ?></td>
                <td><?php echo $d['categorie'] ?></td>
                <td><?php echo $d['descr'] ?></td>


            </tr>

        <?php endforeach; ?>

    </table>
</main>
<?php include 'view/footer.view.php';?>