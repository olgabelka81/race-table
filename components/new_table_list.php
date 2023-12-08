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
                <?php for ($i = 0; $i < count($race_participant['results']); $i++): ?>
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
              <?php foreach ($race_participants as &$race_participant): ?>
              <tr class="table__row">
                <th class="table__column table__column--number"><span class="table__column--shine"></span></th>
                <th class="table__column table__column--name"><?= $race_participant['name'] ?></th>
                <td class="table__column table__column--city"><?= $race_participant['city'] ?></td>
                <td class="table__column table__column--car"><?= $race_participant['car'] ?></td>
                <?php for ($i = 0; $i < count($race_participant['results']); $i++): ?>
                <td class="table__column table__column--result"><?= $race_participant['results'][$i] ?></td>
                <?php endfor; ?>
                <th class="table__column table__column--total"><?= $race_participant['total'] ?></th>
              </tr>
              <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>