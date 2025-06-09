
const car21_1 = parseInt(localStorage.getItem('carWr21')) || 0;
console.log('car21_1=' + car21_1);
const car21_2 = parseInt(localStorage.getItem('carIt21')) || 0;
console.log('car21_2=' + car21_2);
const car21_3 = parseInt(localStorage.getItem('carNy21')) || 0;
console.log('car21_3=' + car21_3);
const car21_4 = parseInt(localStorage.getItem('carPl21')) || 0;
console.log('car21_4=' + car21_4);
const carTotal21 = car21_1 + car21_2 + car21_3 + car21_4;
localStorage.setItem('carTotal21', carTotal21);
console.log(carTotal21);