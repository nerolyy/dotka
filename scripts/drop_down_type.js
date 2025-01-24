const dropdownButton_type = document.getElementById('dropdownButton_type');
const dropdown_type = document.querySelector('.dropdown_type');

dropdownButton_type.addEventListener('click', () => {
  dropdown_type.classList.toggle('active');
});

// Закрывать меню при клике вне его
document.addEventListener('click', (event) => {
  if (!dropdown_type.contains(event.target) && dropdown_type.classList.contains('active')) {
    dropdown_type.classList.remove('active');
  }
});
