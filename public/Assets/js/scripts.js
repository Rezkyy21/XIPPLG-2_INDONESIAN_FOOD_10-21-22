function formatDate(date) {
    const options = { year: 'numeric', month: 'long', day: 'numeric',hour:'numeric',minute:'numeric',second:'numeric'  };
    return date.toLocaleDateString(undefined, options);
}

//Fungsi untuk memperbarui tanggal
function updateDate() {
    const today = new Date();
    const formattedDate = formatDate(today);
    const dateElement = document.getElementById('date-display');
    dateElement.textContent = formattedDate;````````````````````````````````````````````````````````````````````
}

//Panggil fungsi updateDate saat halaman dimuat
document.addEventListener('DOMContentLoaded', updateDate);
document.addEventListener('DOMContentLoaded', (event) => {
    setInterval(updateDate, 1000);
    //Ambil elemen link Sign in
    const signUpLink = document.getElementById('sign-up-link');

    //Tambahkan pendengar event klik pada link Sign in
    signUpLink.addEventListener('click', function(e) {
        e.preventDefault(); // Mencegah perilaku default link
        window.location.href = 'login.html'; // Arahkan ke login.html
    });
  // Menangani klik pada gambar untuk menampilkan overlay
document.querySelectorAll('.clickable-image').forEach(image => {
  image.addEventListener('click', function() {
      const overlay = document.getElementById('overlay');
      const overlayImage = document.getElementById('overlay-image');
      const overlayDescription = document.getElementById('overlay-description');
      
      // Mengubah sumber gambar dan deskripsi sesuai gambar yang diklik
      overlayImage.src = this.src;
      overlayDescription.textContent = this.getAttribute('data-description');
      
      // Menampilkan overlay
      overlay.style.display = 'flex';
  });
});

// Menangani klik tombol tutup untuk menyembunyikan overlay
document.querySelector('.close-btn').addEventListener('click', function() {
  document.getElementById('overlay').style.display = 'none';
});

});