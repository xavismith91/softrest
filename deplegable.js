const selectMenu = document.querySelector("#select-menu");

selectMenu.addEventListener("change", (event) => {
  const selectedOption = event.target.value;
  console.log(`Seleccionaste la opción: ${selectedOption}`);
});