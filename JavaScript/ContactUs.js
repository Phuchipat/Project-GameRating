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



function ReportCT() {
    const email = document.getElementById('email').value;
    const nameCT = document.getElementById('nameCT').value;
    const subject = document.getElementById('subject').value;
    const message = document.getElementById('message').value;

    // Regular expressions สำหรับตรวจสอบอีเมล
    const hotmailRegex = /@hotmail\.com$/;
    const gmailRegex = /@gmail\.com$/;

    if (nameCT.trim() === '') {
        Swal.fire({
            title: "แจ้งเตือน!",
            text: "กรุณากรอกชื่อของคุณ!",
            icon: "warning"
        });
    } else if (nameCT.length > 20) {
        Swal.fire({
            title: "แจ้งเตือน!",
            text: "ชื่อบัญชีควรมีไม่เกิน 20 ตัวอักษร!",
            icon: "warning"
        });
    } else if (email === '' || (!hotmailRegex.test(email) && !gmailRegex.test(email))) {
        Swal.fire({
            title: "แจ้งเตือน!",
            text: "กรุณากรอกอีเมลให้ถูกต้องและเป็น @hotmail.com หรือ @gmail.com เท่านั้น!",
            icon: "warning"
        });
    } else if (subject === '') {
        Swal.fire({
            title: "แจ้งเตือน!",
            text: "กรุณากรอกหัวเรื่อง!",
            icon: "warning"
        });
    } else if (message === '') {
        Swal.fire({
            title: "แจ้งเตือน!",
            text: "กรุณากรอกข้อความ!",
            icon: "warning"
        });
    } else {
        Swal.fire({
            title: "แจ้งเตือน!",
            text: "ส่งสำเร็จ เราจะติดต่อกลับภายใน 1-3 วัน!",
            icon: "success"
        });
    }

}