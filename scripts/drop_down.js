const dropdownButtonType = document.getElementById('dropdownButton_type');
const dropdownContentType = document.getElementById('dropdownContent_type');

dropdownButtonType.addEventListener('click', () => {
    dropdownContentType.parentElement.classList.toggle('show');
});

document.addEventListener('click', (event) => {
    if (!dropdownButtonType.contains(event.target) && !dropdownContentType.contains(event.target)) {
        dropdownContentType.parentElement.classList.remove('show');
    }
});
