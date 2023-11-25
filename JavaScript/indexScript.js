document.addEventListener('click', function (event) {
    const gamesMenu = document.getElementById('games-menu');
    const ratingsMenu = document.getElementById('ratings-menu');

    if (gamesMenu && !gamesMenu.contains(event.target)) {
        gamesMenu.removeAttribute('open');
    }

    if (ratingsMenu && !ratingsMenu.contains(event.target)) {
        ratingsMenu.removeAttribute('open');
    }
});






  