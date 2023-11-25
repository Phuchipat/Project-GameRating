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



function SendMail() {
    const email = document.getElementById('email').value;

    // ตรวจสอบรูปแบบของอีเมล
    const hotmailRegex = /@hotmail\.com$/;
    const gmailRegex = /@gmail\.com$/;

    if (email === '') {
        Swal.fire({
            title: "แจ้งเตือน!",
            text: "โปรดกรอกอีเมล!",
            icon: "warning"
        });
        return false;
    } else if (!hotmailRegex.test(email) && !gmailRegex.test(email)) {
        Swal.fire({
            title: "แจ้งเตือน!",
            text: "โปรดกรอกอีเมลที่เป็น @hotmail.com หรือ @gmail.com เท่านั้น!",
            icon: "warning"
        });
        return false;
    }

    // ทำสิ่งที่ต้องการเมื่ออีเมลถูกต้อง
    // เช่น ส่งคำร้องขอรีเซ็ตรหัสผ่านไปยังอีเมลนี้

    Swal.fire({
        title: "แจ้งเตือน!",
        text: "คำร้องขอรีเซ็ตรหัสผ่านถูกส่งไปยังอีเมลของคุณ!",
        icon: "success"
    });

    // ล้างค่าในช่องกรอกข้อความ
    document.getElementById('email').value = '';
}


function PlessLogin() {
    // เรียกใช้ SweetAlert เพื่อแสดงการแจ้งเตือน
    Swal.fire({
        title: "แจ้งเตือน!",
        text: "โปรดเข้าสู่ระบบก่อนใช้งาน!",
        icon: "warning"
    });
}