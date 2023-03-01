let docTitle = document.title;
window.addEventListener("blur", () => {
  document.title = "Do It!";
});
window.addEventListener("focus", () => {
  document.title = docTitle;
});
