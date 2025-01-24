const dropdownButton = document.getElementById('dropdownButton');
const dropdown = document.querySelector('.dropdown');

dropdownButton.addEventListener('click', () => {
  dropdown.classList.toggle('active');
});

// Закрывать меню при клике вне его
document.addEventListener('click', (event) => {
  if (!dropdown.contains(event.target) && dropdown.classList.contains('active')) {
    dropdown.classList.remove('active');
  }
});
