

// 2022
const car22_1 = parseInt(localStorage.getItem('carNv22')) || 0;
const car22_2 = parseInt(localStorage.getItem('carZz22')) || 0;
const car22_3 = parseInt(localStorage.getItem('carGr22')) || 0;
const car22_4 = parseInt(localStorage.getItem('carSl22')) || 0;
const car22_5 = parseInt(localStorage.getItem('carPszcz22')) || 0;
const car22_6 = parseInt(localStorage.getItem('carPie22')) || 0;
const car22_7 = parseInt(localStorage.getItem('carMon22')) || 0;

const carTotal22= car22_1 + car22_2 + car22_3 + car22_4 + car22_5 + car22_6 + car22_7;

const flight22_1 = parseInt(localStorage.getItem('flightZz22')) || 0;
const flight22_2 = parseInt(localStorage.getItem('flightNv22')) || 0;
const totalFlight22 = flight22_1 + flight22_2;

// 2021
const car21_1 = parseInt(localStorage.getItem('carWr21')) || 0;
const car21_2 = parseInt(localStorage.getItem('carIt21')) || 0;
const car21_3 = parseInt(localStorage.getItem('carNy21')) || 0;
const car21_4 = parseInt(localStorage.getItem('carPl21')) || 0;
const carTotal21 = car21_1 + car21_2 + car21_3 + car21_4;


const carTotal=carTotal21+carTotal22;
const flightTotal=totalFlight22;

console.log('flight='+flightTotal);
console.log('car='+carTotal);

document.getElementById("distanceCar").textContent = `razem samochodem = ${carTotal.toLocaleString()} km`;
document.getElementById("distanceFlight").textContent = `razem samolotem = ${flightTotal.toLocaleString()} km`;
