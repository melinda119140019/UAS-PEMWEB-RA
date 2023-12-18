//client-side.js

document.addEventListener('DOMContentLoaded', function () {
    //submit form
    document.getElementById('dataForm').addEventListener('submit', function (event) {
        event.preventDefault(); // Mencegah form untuk melakukan submit standar
        handleFormSubmit();
    });

    //Implementasikan event lainnya sesuai kebutuhan
});

function handleFormSubmit() {
    //validasi input sebelum diproses (implementasikan validasi sesuai kebutuhan)
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var check = document.getElementById('check').checked;
    var radioValue = document.querySelector('input[name="radioGroup"]:checked') ? document.querySelector('input[name="radioGroup"]:checked').value : '';

    //validasi sederhana
    if (name && email) {
        //jika valid, tambahkan data ke dalam tabel
        addDataToTable(name, email, check, radioValue);
        //Bersihkan formulir setelah submit
        document.getElementById('dataForm').reset();
    } else {
        alert('Nama dan Email harus diisi!');
    }
}

function addDataToTable(name, email, check, radioValue) {
    var table = document.getElementById('dataTable').getElementsByTagName('tbody')[0];
    var newRow = table.insertRow(table.rows.length);
    var cell1 = newRow.insertCell(0);
    var cell2 = newRow.insertCell(1);
    var cell3 = newRow.insertCell(2);
    var cell4 = newRow.insertCell(3);

    cell1.innerHTML = name;
    cell2.innerHTML = email;
    cell3.innerHTML = check ? 'Ya' : 'Tidak';
    cell4.innerHTML = radioValue;
}
