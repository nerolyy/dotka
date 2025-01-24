function filterSelection(some) {
  var items = document.getElementsByClassName("filterDiv");
  if (some === "") some = "show"; // если цвет пустой, показываем все

  for (var i = 0; i < items.length; i++) {
      items[i].classList.remove("show");
      if (items[i].classList.contains(color)) {
          items[i].classList.add("show");
      }
  }
}
