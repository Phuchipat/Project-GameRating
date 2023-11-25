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

document.querySelector('.change-password-button').addEventListener('click', function () {
    const currentPassword = document.getElementById('current-password').value;
    const newPassword = document.getElementById('new-password').value;
    const confirmNewPassword = document.getElementById('confirm-password').value;

    if (currentPassword === '') {
        Swal.fire({
            title: "แจ้งเตือน!",
            text: "โปรดกรอกรหัสผ่านปัจุบัน!",
            icon: "warning"
        });
        return false;
    } else if (currentPassword.length < 8 || currentPassword.length > 16) {
        Swal.fire({
            title: "แจ้งเตือน!",
            text: "รหัสผ่านปัจุบันต้องมีความยาวอย่างน้อย 8 และไม่เกิน 16 ตัวอักษร!",
            icon: "warning"
        });
        return false;
    } else if (newPassword === '') {
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
            text: "โปรดกรอกยืนยันรหัสผ่านใหม่!",
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

    // ตรวจสอบข้อผิดพลาดอื่น ๆ และทำการเปลี่ยนรหัสผ่านหรือการประมวลผลตามต้องการ
    Swal.fire({
        title: "แจ้งเตือน!",
        text: "รหัสผ่านถูกเปลี่ยน!",
        icon: "success"
    });
    document.getElementById('current-password').value = '';
    document.getElementById('new-password').value = '';
    document.getElementById('confirm-password').value = '';
});




function togglePassword() {
    var checkbox = document.querySelector('.show-pass-log');
    var currentPassword = document.getElementById("current-password");
    var newPassword = document.getElementById("new-password");
    var confirmPass = document.getElementById("confirm-password");

    if (checkbox.checked) {
        currentPassword.type = "text";
        newPassword.type = "text";
        confirmPass.type = "text";
        currentPassword.style.paddingLeft = "20px";
        newPassword.style.paddingLeft = "20px";
        confirmPass.style.paddingLeft = "20px";

        currentPassword.style.backgroundImage = "url('images/lock b.png')";
        newPassword.style.backgroundImage = "url('images/lock b.png')";
        confirmPass.style.backgroundImage = "url('images/lock b.png')";

        currentPassword.style.backgroundRepeat = "no-repeat";
        currentPassword.style.backgroundPosition = "right 10px center";
        currentPassword.style.backgroundSize = "20px 20px";
        currentPassword.style.paddingRight = "30px";

        newPassword.style.backgroundRepeat = "no-repeat";
        newPassword.style.backgroundPosition = "right 10px center";
        newPassword.style.backgroundSize = "20px 20px";
        newPassword.style.paddingRight = "30px";

        confirmPass.style.backgroundRepeat = "no-repeat";
        confirmPass.style.backgroundPosition = "right 10px center";
        confirmPass.style.backgroundSize = "20px 20px";
        confirmPass.style.paddingRight = "30px";
    } else {
        currentPassword.type = "password";
        newPassword.type = "password";
        confirmPass.type = "password";
        currentPassword.style.paddingLeft = "20px";
        newPassword.style.paddingLeft = "20px";
        confirmPass.style.paddingLeft = "20px";

        currentPassword.style.backgroundImage = "url('images/lock b.png')";
        newPassword.style.backgroundImage = "url('images/lock b.png')";
        confirmPass.style.backgroundImage = "url('images/lock b.png')";

        currentPassword.style.backgroundRepeat = "no-repeat";
        currentPassword.style.backgroundPosition = "right 10px center";
        currentPassword.style.backgroundSize = "20px 20px";
        currentPassword.style.paddingRight = "30px";

        newPassword.style.backgroundRepeat = "no-repeat";
        newPassword.style.backgroundPosition = "right 10px center";
        newPassword.style.backgroundSize = "20px 20px";
        newPassword.style.paddingRight = "30px";

        confirmPass.style.backgroundRepeat = "no-repeat";
        confirmPass.style.backgroundPosition = "right 10px center";
        confirmPass.style.backgroundSize = "20px 20px";
        confirmPass.style.paddingRight = "30px";
    }
}












