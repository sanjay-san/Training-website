<?php include str_replace("\\", DIRECTORY_SEPARATOR, BASE_NAMESPACE)."view/tpls/include/header.php"; ?>
<div class="content">
    <table>
        <thead>
        <tr>
            <td>Datum</td>
            <td>Tijd</td>
            <td>Lokaal</td>
            <td>Sport</td>
            <td></td>

        </tr>
        </thead>
        <tbody>
            <?php foreach ($lessen as $les):?>
                <tr>
                    <td><?= $les->getDate();?></td>
                    <td><?= $les->getTime();?></td>
                    <td><?= $les->getlocation();?></td>
                    <td><?= $les->getDescription();?></td>
                    <?php if($les->getMax_persons()>$les->getAantalaangemeld()):?>
                        <td><a href='?control=lid&action=deelnemen&id=<?= $les->getId();?>'>deelnemen</a></td>
                    <?php endif;?>
                    <?php if($les->getMax_persons()<=$les->getAantalaangemeld()):?>
                        <td> VOL! </td>
                    <?php endif;?>
                </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>
<?php include str_replace("\\", DIRECTORY_SEPARATOR, BASE_NAMESPACE)."view/tpls/include/footer.php"; ?>
