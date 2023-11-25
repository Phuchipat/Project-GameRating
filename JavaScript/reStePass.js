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



function ConReSetPass() {
    const newPassword = document.getElementById('new-password').value;
    const confirmNewPassword = document.getElementById('confirm-password').value;

    if (newPassword === '') {
        Swal.fire({
            title: "แจ้งเตือน!",
            text: "โปรดกรอกรหัสผ่านใหม่!",
            icon: "warning"
        });
        return false;
    } else if (newPassword.length < 8 || newPassword.length > 16) {
        Swal.fire({
            title: "แจ้งเตือน!",
            text: "รหัสผ่านใหม่ต้องมีความยาวอย่างน้อย 8 และไม่เกิน 16 ตัวอักษร!",
            icon: "warning"
        });
        return false;
    } else if (confirmNewPassword === '') {
        Swal.fire({
            title: "แจ้งเตือน!",
            text: "โปรดยืนยันรหัสผ่านใหม่!",
            icon: "warning"
        });
        return false;
    } else if (confirmNewPassword.length < 8 || confirmNewPassword.length > 16) {
        Swal.fire({
            title: "แจ้งเตือน!",
            text: "ยืนยันรหัสผ่านใหม่ต้องมีความยาวอย่างน้อย 8 และไม่เกิน 16 ตัวอักษร!",
            icon: "warning"
        });
        return false;
    } else if (newPassword !== confirmNewPassword) {
        Swal.fire({
            title: "แจ้งเตือน!",
            text: "รหัสผ่านใหม่และการยืนยันไม่ตรงกัน!",
            icon: "warning"
        });
        return false;
    }

    // กระบวนการเมื่อรหัสผ่านถูกต้อง
    Swal.fire({
        title: "แจ้งเตือน!",
        text: "รหัสผ่านใหม่ถูกเปลี่ยนเรียบร้อย!",
        icon: "success"
    });

    // ล้างค่าช่องกรอก
    document.getElementById('new-password').value = '';
    document.getElementById('confirm-password').value = '';
}


function PlessLogin() {
    // เรียกใช้ SweetAlert เพื่อแสดงการแจ้งเตือน
    Swal.fire({
        title: "แจ้งเตือน!",
        text: "โปรดเข้าสู่ระบบก่อนใช้งาน!",
        icon: "warning"
    });
}