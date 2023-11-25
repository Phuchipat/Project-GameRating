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




function handleLogin() {
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    // Regular expressions สำหรับตรวจสอบอีเมล
    const hotmailRegex = /@hotmail\.com$/;
    const gmailRegex = /@gmail\.com$/;

    if (email === '' || (!hotmailRegex.test(email) && !gmailRegex.test(email))) {
        Swal.fire({
            title: "แจ้งเตือน!",
            text: "กรุณากรอกอีเมลให้ถูกต้องและเป็น @hotmail.com หรือ @gmail.com เท่านั้น!",
            icon: "warning"
        });
        return false;
    } else if (password === '') {
        Swal.fire({
            title: "แจ้งเตือน!",
            text: "กรุณากรอกรหัสผ่าน!",
            icon: "warning"
        });
    } else if (password.length < 8 || password.length > 16) {
        Swal.fire({
            title: "แจ้งเตือน!",
            text: "รหัสผ่านต้องมีความยาวอย่างน้อย 8 และไม่เกิน 16 ตัวอักษร!",
            icon: "warning"
        });
        return false;
    }
    Swal.fire({
        title: "แจ้งเตือน!",
        text: "เข้าสู่ระบบสำเร็จ!",
        icon: "success"
    });


    // เข้าสู่ระบบ หรือดำเนินการต่อตามกระบวนการที่คุณต้องการ

}



function PlessLogin() {
    // เรียกใช้ SweetAlert เพื่อแสดงการแจ้งเตือน
    Swal.fire({
        title: "แจ้งเตือน!",
        text: "โปรดเข้าสู่ระบบก่อนใช้งาน!",
        icon: "warning"
    });
}
