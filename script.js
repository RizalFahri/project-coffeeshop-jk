function submitReservation() {
  var customerName = document.getElementById('customer-name').value;
  var tableNumber = document.getElementById('table-number').value;
  var selectedMenu = document.getElementById('menu').value;

  var welcomeMessage = document.getElementById('welcome-message');
  welcomeMessage.innerHTML = `<p class="text-success">Selamat datang, ${customerName}! Nikmati ${selectedMenu} di meja nomor ${tableNumber}.</p>`;
}
