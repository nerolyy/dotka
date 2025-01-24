function filterSelection(color) {
    var items = document.getElementsByClassName("typedif");
    if (color === "") color = "show"; // если цвет пустой, показываем все

    for (var i = 0; i < items.length; i++) {
        items[i].classList.remove("show");
        if (items[i].classList.contains(color)) {
            items[i].classList.add("show");
        }
    }
}
