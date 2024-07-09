let inputPrice = document.querySelector('#inputPrice')
let priceNumber = document.querySelector('#priceNumber')
priceNumber.innerHTML = inputPrice.value


inputPrice.addEventListener("input", () => {
    priceNumber.innerHTML = inputPrice.value
    // console.log(inputPrice.value);
   
});
