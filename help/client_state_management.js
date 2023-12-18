//Fungsi untuk menetapkan cookie
function setCookie(name, value, days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + value + expires + "; path=/";
}

//Fungsi untuk mendapatkan nilai cookie
function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}

//Fungsi untuk menghapus cookie
function eraseCookie(name) {
    document.cookie = name + '=; Max-Age=-99999999;';
}

//Simpan informasi pengguna ke dalam cookie
var userData = {
    'username': 'contoh_user',
    'email': 'user@example.com'
    //informasi pengguna lainnya
};

setCookie('userData', JSON.stringify(userData), 7);

//Baca informasi dari cookie
var storedUserData = getCookie('userData');
if (storedUserData) {
    var parsedUserData = JSON.parse(storedUserData);
    console.log("Informasi pengguna dari cookie:", parsedUserData);
}

//browser storage untuk menyimpan informasi secara lokal
localStorage.setItem('localUserData', JSON.stringify(userData));

//Baca informasi dari local storage
var localStoredUserData = localStorage.getItem('localUserData');
if (localStoredUserData) {
    var parsedLocalUserData = JSON.parse(localStoredUserData);
    console.log("Informasi pengguna dari local storage:", parsedLocalUserData);
}

// Hapus cookie setelah pengguna logout atau sesuai kebutuhan
// eraseCookie('userData');
