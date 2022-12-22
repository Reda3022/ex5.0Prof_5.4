<main>
	<h2>Vue liste</h2>
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
                <td><a href="detail.php?id=<?php echo $d['id']; ?>">Detail</a></td>
                <td><a href="update.php?id=<?php echo $d['id']; ?>">Modif</a></td>
                <td><a href="test_delete.php?id=<?php echo $d['id']; ?>">sup</a></td>


            </tr>

        <?php endforeach; ?>

    </table>
</main>
