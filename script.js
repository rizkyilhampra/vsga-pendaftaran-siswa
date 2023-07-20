const buttonDeleteBarang = document.querySelectorAll('#deleteSiswa');
buttonDeleteBarang.forEach(function (button) {
    button.addEventListener('click', function (event) {
        event.preventDefault();
        const href = this.getAttribute('href');
        //show alert bawaan dari browser
        if (confirm('Apakah anda yakin ingin menghapus data ini?')) {
            window.location.href = href;
        }
    });
});
