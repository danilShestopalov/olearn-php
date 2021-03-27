<table style='margin: 30px; width: 80%; text-align: left'>
    <tr>
        <th style='font-family: Roboto,serif; font-weight: bold'>Название</th>
        <th style='font-family: Roboto,serif; font-weight: bold'>Контент</th>
    </tr>
    <?php

    use Illuminate\Foundation\Application;use Tapp\Airtable\AirtableManager;

    $airtable = new AirtableManager(Application::getInstance());
    $courses = $airtable->table('course')->get();

    for ($i = 0; $i <= $courses->count() - 1; ++$i) {
        echo "<tr onclick='DoNav(\"lessons.blade.php?courseId=\")'>";
        echo "<th style='font-family: Roboto,serif; font-weight: normal'>", $courses[$i]["fields"]["Название"], "</th>";
        echo "<th style='font-family: Roboto,serif; font-weight: normal'>", $courses[$i]["fields"]["Контент"], "</th>";
        echo "</tr></a>";
    }
    ?>
</table>
