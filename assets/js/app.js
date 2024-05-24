document.addEventListener("DOMContentLoaded", function() {
  const priceValue = document.getElementById("priceValue");
  const priceRange = document.getElementById("priceRange");

  // Update the current slider value (each time you drag the slider handle)
  priceRange.oninput = function() {
    priceValue.innerHTML = `€${this.value}`;
  }
});
