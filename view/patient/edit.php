<div class="container">
    <h1>Bijwerken</h1>
    <?php
    $day = $birthday['birthday_day'];
    $month = $birthday['birthday_month'];
    $year = $birthday['birthday_year'];
    

    if (strlen($day) == 1) {
        $day = '0' . $day;
    }
    if (strlen($month) == 1) {
        $month = '0' . $month;
    }
    if (strlen($year) == 1) {
        $year = '000' . $year;
    }
    elseif (strlen($year) == 2) {
        $year = '00' . $year;
    }
    elseif (strlen($year) == 3) {
        $year = '0' . $year;
    }

    $date = $year . '-' . $month . '-' . $day;
    ?>
    <div class="row">
        <form class="col s12" action="<?= URL ?>birthday/editSave" method="post">
            <div class="input-field col s6">
              <input id="name" type="text" name="name" value="<?= $birthday['birthday_name']; ?>">
              <label for="name">Naam</label>
            </div>
            <div class="input-field col s6">
              <input id="surname" type="text" name="surname" value="<?= $birthday['birthday_surname']; ?>">
              <label for="surname">Achternaam</label>
            </div>
            <div class="input-field col s12">  
                <input type="date" placeholder="jjjj-mm-dd" class="datepicker" name="date" value="<?= $date ?>">
            </div>
            <div class="input-field col s12">
                <textarea id="description" class="materialize-textarea" name="description" maxlength="500" data-length="500"><?= $birthday['birthday_description']; ?></textarea>
                <label for="description">Beschrijving</label>
            </div>
            <input type="hidden" name="id" value="<?= $birthday['birthday_id']; ?>">
            <input class="waves-effect waves-light btn" type="submit" value="Bijwerken">
            <a class="btn waves-effect waves-light red" href="<?= URL ?>birthday/delete/<?= $birthday['birthday_id'] ?>">Verwijder
                <i class="material-icons right">delete</i>
            </a>
            <a class="waves-effect waves-light btn grey" href="<?= URL ?>birthday/index">Annuleer</a>
        </form>
    </div>  