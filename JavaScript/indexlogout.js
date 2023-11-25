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


function PlessLogin() {
    // เรียกใช้ SweetAlert เพื่อแสดงการแจ้งเตือน
    Swal.fire({
        title: "แจ้งเตือน!",
        text: "โปรดเข้าสู่ระบบก่อนใช้งาน!",
        icon: "warning"
    });
}



  