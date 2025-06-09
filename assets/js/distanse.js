
const car21_1 = parseInt(localStorage.getItem("carWr21"));
const car21_2 = parseInt(localStorage.getItem('carIt21')) || 0;
const car21_3 = parseInt(localStorage.getItem('carNy21')) || 0;
const car21_4 = parseInt(localStorage.getItem('carPlr_21')) || 0;
const carTotal21 = car21_1 + car21_2 + car21_3 + car21_4;
localStorage.setItem('carTotal21', carTotal21);
console.log(carTotal21);