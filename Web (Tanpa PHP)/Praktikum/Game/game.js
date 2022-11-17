function getcomputerChoice() {
    const comp = Math.random();

    if(comp < 0.34) return 'batu';
    if(comp >= 0.34 && comp < 0.67) return 'gunting';
    return 'kertas';
}

function getResult(player, computer) {
    if(player == computer) return 'SERI !!!';
    if(player == 'batu') return (computer == 'gunting') ? 'MENANG !!!' : 'KALAH !!!';
    if(player == 'gunting') return (computer == 'kertas') ? 'MENANG !!!' : 'KALAH !!!';
    if(player == 'kertas') return (computer == 'batu') ? 'MENANG !!!' : 'KALAH !!!';
}

const pilihan = document.querySelectorAll('li img');
pilihan.forEach(function(choice) {
    choice.addEventListener('click', function() {
        const computerChoice = getcomputerChoice();
        const playerChoice = choice.className;
        const result = getResult(playerChoice, computerChoice);
    
        const imgComputer = document.querySelector('.img-computer');
        imgComputer.setAttribute('src', 'img/' + computerChoice + '.png');
    
        const info = document.querySelector('.info');
        info.innerHTML = result;
    });
});