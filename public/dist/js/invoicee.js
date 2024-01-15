document.addEventListener('DOMContentLoaded', function () {
    // Mendapatkan tanggal saat ini
    var currentDate = new Date();

    // Daftar nama bulan untuk diambil berdasarkan indeks bulan
    var monthNames = [
        "January", "February", "March", "April", "May", "June", "July",
        "August", "September", "October", "November", "December"
    ];

    // Mendapatkan tanggal, bulan, dan tahun
    var day = currentDate.getDate();
    var monthIndex = currentDate.getMonth();
    var year = currentDate.getFullYear();

    // Menambahkan nol di depan tanggal jika tanggal kurang dari 10
    var formattedDay = day < 10 ? '0' + day : day;

    // Menggabungkan untuk membuat string tanggal dengan format "dd-month-yyyy"
    var dateString = formattedDay + '-' + monthNames[monthIndex].substring(0, 3) + '-' + year;

    // Menampilkan tanggal di dalam elemen dengan id "currentDate"
    document.getElementById('currentDate').innerHTML = dateString;
});

// Fungsi untuk menambahkan akhiran (suffix) pada tanggal
function getOrdinalSuffix(n) {
    var s=["th","st","nd","rd"],
    v=n%100;
    return n+(s[(v-20)%10]||s[v]||s[0]);
}
