<html>
  <head>
    <title>Training website</title>
    <meta charset="utf-8"/>
    <link href="css/main.css" rel="stylesheet"/>
  </head>
  <body>
    <div class="wrapper">
      <div class="header">
        <section class="logo">
          <img src="img/logo.png"/>
        </section>
        <section class="header-text">
          <h1>Training centrum Den Haag</h1>
        </section>
        <section class="login">
          <form  method="POST" autocomplete="off">
            <table>
              <tr>
                <td>
                  <input type="text" autocomplete="off" placeholder="gebuikersnaam" name="usn" value='<?= isset($usn)?$usn:"";?>' required="required"/>
                </td>
              </tr>
              <tr>
                <td>
                  <input type="password" autocomplete="off" name="ww" placeholder="wachtwoord" required="required"/>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <input type="submit" value="inloggen"/>
                  <input type="reset" value="reset"/>
                </td>
              </tr>
            </table>
          </form>
        </section>
      </div>
      <div class="nav">
        <ul>
          <li><a href="?control=bezoeker&action=default">Home</a></li>
          <li><a href="?control=bezoeker&action=trainings">Trainings Aanbod</a></li>
          <li><a href="?control=bezoeker&action=register">Lid worden</a></li>
          <li><a href="?control=bezoeker&action=gedragsregels">Gedragsregels</a></li>
          <li><a href="?control=bezoeker&action=contact">Locatie & contact</a></li>
        </ul>
      </div>
