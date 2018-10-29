var id = 0;

function addCategory() {
    var col = document.createElement('DIV');
    col.setAttribute('class', 'col');

    var input =  document.createElement('INPUT');
    input.setAttribute('type', 'text');
    input.setAttribute('name', 'category' + id++);

    col.appendChild(input);

    var form = document.getElementById('toBeAdded');
    form.appendChild(col);
}