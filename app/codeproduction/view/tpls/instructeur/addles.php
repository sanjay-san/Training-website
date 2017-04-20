<?php
/**
 * Created by PhpStorm.
 * User: Sasagar BV
 * Date: 5-4-2017
 * Time: 20:26
 */
include str_replace("\\", DIRECTORY_SEPARATOR, BASE_NAMESPACE)."view/tpls/include/header.php"; ?>
    <div class="content">
        <form  method="post" >
            <table>
                <tr>
                    <td>Datum</td>
                    <td>
                        <input type="text" placeholder="Jaar/Maand/Dag" name="datum"
                               required="required" >
                    </td>
                </tr>
                <tr>
                    <td>Tijds duur</td>
                    <td><input type="text" placeholder="%Y-%m-%d %h:%i:%s.%f" name="time"
                               required="required" >
                    </td>
                </tr>
                <tr>
                    <td>Location</td>
                    <td>
                        <input type="text" placeholder="Plaats" name="location"
                                required="required">
                    </td>
                </tr>
                <tr>
                    <td>Training</td>
                    <td>
                        <select name="tipe">

                            <?php foreach ($lesnamen as $lesnaam):?>
                                <option value="<?= $lesnaam->getId();?>"><?= $lesnaam->getDescription(); ?></option>
                            <?php endforeach;?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Max aantal deelnemers</td>
                    <td><input type="text" placeholder="Maximum" name="maximum"
                               required="required" >
                    </td>
                </tr>
                <tr>
                    <td>Instructeur</td>
                    <td>
                        <select name="instructeur">
                            <?php foreach ($instructeurs as $instructeur):?>
                                <option value="<?= $instructeur->getId();?>"><?= $instructeur->getFirstname(); ?> <?= $instructeur->getPreprovision(); ?> <?= $instructeur->getLastname(); ?></option>
                            <?php endforeach;?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" value="toevoeggen" ></td>
                    <td><input type="reset" value="reset"></td>
                </tr>
            </table>
        </form>
    </div>
<?php include str_replace("\\", DIRECTORY_SEPARATOR, BASE_NAMESPACE)."view/tpls/include/footer.php"; ?>
