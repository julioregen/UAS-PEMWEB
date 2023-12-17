function CekDanTambahData(){
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var Kelas = document.getElementById('Kelas').checked;
    var gender = document.querySelector('input[name="gender"]:checked');

    var isValid = true;

    if (name === ""){
        document.getElementById('NameError').innerText = 'Nama harus di isi';
        isValid = false;
    }else{
        document.getElementById('NameError').innerText = '';
    }

    if (email === ""){
        document.getElementById('EmailError').innerText = 'Email harus di isi';
        isValid = false;
    }else{
        document.getElementById('EmailError').innerText = '';
    }

    if (!gender){
        document.getElementById('GenderError').innerText = 'Pilih salah satu';
        isValid = false;
    }else{
        document.getElementById('GenderError').innerText = '';
    }

    if (isValid){
        TambahData(name,email,Kelas,gender.value);
        HapusData();
    }
}
function TambahData(name,email,Kelas,gender){
    var baris = document.createElement('tr');
    baris.innerHTML = '<td>' + name + '</td><td>' + email  + '</td><td>' + (Kelas ? 'Ya' : 'Tidak') + '</td><td>' + gender + '</td>';

    document.querySelector('#Data tbody').appendChild(baris);
}

function HapusData(){
    document.getElementById('name').value = '';
    document.getElementById('email').value = '';
    document.getElementById('Kelas').checked = false;
    document.getElementById('male').checked = true;

    document.getElementById('NameError').innerText = '';
    document.getElementById('EmailError').innerText = '';
    document.getElementById('GenderError').innerText = '';
}