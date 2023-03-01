let docTitle = document.title;
window.addEventListener("blur", () => {
  document.title = "So, Do It!";
});
window.addEventListener("focus", () => {
  document.title = docTitle;
});
