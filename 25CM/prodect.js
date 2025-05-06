if (eval(atob("d2luZG93LmxvY2F0aW9uLmhvc3RuYW1l")) === atob("cHJvbW9pcy5zdG9yZQ==")) {
    document.addEventListener('contextmenu', event => event.preventDefault());

    document.onkeydown = function(e) {
    if (
      e.keyCode === 123 || // F12
      (e.ctrlKey && e.shiftKey && (e.keyCode === 73 || e.keyCode === 74)) || // Ctrl+Shift+I / J
      (e.ctrlKey && e.keyCode === 85) || // Ctrl+U
      (e.ctrlKey && e.keyCode === 83) // Ctrl+S
    ) {
      return false;
    }
    };

    document.addEventListener('copy', (e) => {
    e.preventDefault();
    alert("");
    });


    const price = getPriceFromURL();
    var fulPrice = '€' + price;
    document.getElementById('price-display').textContent = fulPrice;
    document.getElementById('pay-text').textContent = 'PAY ' + fulPrice;

  } else {
    document.body.style.display = "none";
    window.location.href = "/404.html";
}
