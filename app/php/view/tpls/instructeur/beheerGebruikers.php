<?php include str_replace("\\", DIRECTORY_SEPARATOR, BASE_NAMESPACE)."view/tpls/include/header-logout.php"; ?>
<section>
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
            </tr>
        </thead>
        <tbody>
            <?php forech() ?>
                <tr>
                    <td><?= ->getFirstname();?></td>
                    <td><?= ->getPreprovision();?></td>
                    <td><?= ->getLastname();?></td>
                    <td><?= ->getDateofbirth();?></td>
                    <td><?= ->getGender();?></td>
                    <td><?= ->getEmailaddress();?></td>
                    <td><?= ->getHire_date();?></td>
                    <td><?= ->getSalary();?></td>
                    <td><?= ->getStreet();?></td>
                    <td><?= ->getPostal_code();?></td>
                    <td><?= ->getPlace();?></td>
                    <td><?= ->getRole();?></td>


                    protected $preprovision;
                    protected $lastname;
                    protected $dateofbirth;
                    protected $gender;
                    protected $emailaddress;
                    protected $hire_date;
                    protected $salary;
                    protected $street;
                    protected $postal_code;
                    protected $place;
                    protected $role;
                    protected $lesson_id;
                    protected $registration_id;
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</section>
<?php include str_replace("\\", DIRECTORY_SEPARATOR, BASE_NAMESPACE)."view/tpls/include/footer.php"; ?>
