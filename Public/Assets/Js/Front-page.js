const firstPart = document.getElementsByClassName('firstPart')[0];
const secondPart = document.getElementsByClassName('secondPart')[0];
const goToSecondPart = document.getElementById('goToSecondPart');

goToSecondPart.addEventListener('click', function (e) {
    e.preventDefault();

    firstPart.classList.add('hidden');
    secondPart.classList.remove('hidden');
});