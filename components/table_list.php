<section class="table-section">
    <div class="container">
        <h1 class="table-section__title">Турнирная таблица</h1>
        <table class="table" id = "table">
            <caption class="table__title visually-hidden">Турнирная таблица</caption>
            <thead class="table__head">
              <tr class="table__row--caption">
                <th class="table__column table__column--caption"></th>
                <th class="table__column table__column--caption">ФИО</th>
                <th class="table__column table__column--caption">Город</th>
                <th class="table__column table__column--caption">Машина</th>
                <?php for ($i = 0; $i < count($new_race_participant['result']); $i++): ?>
                <th class="table__column table__column--caption results">
                  <button type="button" class="button button__result">
                    <span class="button--vertical">Попытка</span><?= $i + 1 ?>
                  </button>
                </th>
                <?php endfor; ?>
                <th class="table__column table__column--caption results">
                  <button type="button" class="button button__total">
                  Итого
                  </button>
                </th>
              </tr>
            </thead>
             
            <tbody class="table__body">
              <?php foreach ($new_race_participants as $new_race_participant): ?>
              <tr class="table__row">
                <th class="table__column table__column--number"><span class="table__column--shine"></span></th>
                <th class="table__column table__column--name"><?= $new_race_participant['name'] ?></th>
                <td class="table__column table__column--city"><?= $new_race_participant['city'] ?></td>
                <td class="table__column table__column--car"><?= $new_race_participant['car'] ?></td>
                <?php for ($i = 0; $i < count($new_race_participant['result']); $i++): ?>
                <td class="table__column table__column--result"><?= $new_race_participant['result'][$i] ?></td>
                <?php endfor; ?>
                <th class="table__column table__column--total"><?= $new_race_participant['total'] ?></th>
              </tr>
              <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>