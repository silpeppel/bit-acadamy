function toggleActive(event) {
  var target = event.target || event.srcElement;
  var buttonList = document.querySelectorAll(".btn");
  buttonList.forEach(function(button) {
    if (button === target && !button.classList.contains("active")) {
      return button.classList.add("active");
    }
    return button.classList.remove("active");
  });
}
