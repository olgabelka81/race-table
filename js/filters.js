const columns = document.querySelectorAll('.table__column--caption');
const numberOfColumn = Array.from(columns);
const resultButtons = document.querySelectorAll('.button');

//Функция, сортирующая значения результатов
const getSortValues = (index) => {
    const sortedRows = Array.from(table.rows)
    .slice(1)
    .sort((rowA, rowB) => rowB.cells[index].innerHTML.replace(/[^0-9\.]+/g, "") - rowA.cells[index].innerHTML.replace(/[^0-9\.]+/g, ""));
    table.append(...sortedRows);
    console.log(sortedRows);
};

//Функция сортировки итогового столбца
getSortValues(numberOfColumn.length - 1);

//Функция сортировки по клику
const onClickButton = () => {
    const arrayButtons = Array.from(resultButtons);
    for (let i = 0; i < arrayButtons.length; i++) {
        arrayButtons[i].addEventListener('click', () => {
            getSortValues(i + numberOfColumn.length - arrayButtons.length);
        });
    };
};

export { onClickButton };
