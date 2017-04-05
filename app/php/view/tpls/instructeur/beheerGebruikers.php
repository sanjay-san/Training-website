<?php include str_replace("\\", DIRECTORY_SEPARATOR, BASE_NAMESPACE)."view/tpls/include/header.php"; ?>
<div class="content">
    <table>
        <thead>
            <tr>
                <td>voor</td>
                <td>tussenvoegsel</td>
                <td>achternaam</td>
                <td>geboorte datum</td>
                <td>geslacht</td>
                <td>email</td>
                <td>eerste werk dag</td>
                <td>salaris</td>
                <td>straat</td>
                <td>postcode</td>
                <td>woonplaats</td>
                <td>functie</td>
                <td colspan="2">acties</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($gebruikers as $gebruiker):?>
            <tr>
                <td><?= $gebruiker->getFirstname();?></td>
                <td><?= $gebruiker->getPreprovision();?></td>
                <td><?= $gebruiker->getLastname();?></td>
                <td><?= $gebruiker->getDateofbirth();?></td>
                <td><?= $gebruiker->getGender();?></td>
                <td><?= $gebruiker->getEmailaddress();?></td>
                <td><?= $gebruiker->getHire_date();?></td>
                <td><?= $gebruiker->getSalary();?></td>
                <td><?= $gebruiker->getStreet();?></td>
                <td><?= $gebruiker->getPostal_code();?></td>
                <td><?= $gebruiker->getPlace();?></td>
                <td><?= $gebruiker->getRole();?></td>

                <td><a href='?control=medewerker&action=updatesoort&id=<?= $soortactiviteit->getId();?>'><img src="img/bewerk.png"></a></td>
                <td><a href='?control=medewerker&action=deletesoort&id=<?= $soortactiviteit->getId();?>'><img src="img/verwijder.png"></a></td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>
<?php include str_replace("\\", DIRECTORY_SEPARATOR, BASE_NAMESPACE)."view/tpls/include/footer.php"; ?>
