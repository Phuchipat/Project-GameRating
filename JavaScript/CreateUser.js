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

document.addEventListener('DOMContentLoaded', function () {
    const loginButton = document.getElementById('login-button');
    const profileMenu = document.getElementById('profile-menu');

    // ซ่อน profile menu เมื่อผู้ใช้ยังไม่ได้ล็อคอิน
    profileMenu.style.display = 'none';

    loginButton.addEventListener('click', function () {
        // สมมติว่าเมื่อมีการล็อคอินสำเร็จผ่านขั้นตอนอื่น
        // ตรวจสอบสถานะการล็อคอิน และแสดง profile menu
        const isLoggedIn = true; // ตัวอย่าง: ให้เป็นตัวแปรที่บอกถึงสถานะการล็อคอิน
        if (isLoggedIn) {
            profileMenu.style.display = 'block';
            loginButton.style.display = 'none';
        }
    });
});


function ClearD() {
    const username = document.getElementById('username');
    const email = document.getElementById('email');
    const birthdate = document.getElementById('birthdate');
    const password = document.getElementById('password');
    const confirmPassword = document.getElementById('confirm-password');

    // ล้างค่าในช่องข้อมูลทั้งหมด
    username.value = '';
    email.value = '';
    birthdate.value = '';
    password.value = '';
    confirmPassword.value = '';
}

function CreateU() {
    const username = document.getElementById('username').value;
    const email = document.getElementById('email').value;
    const birthdate = document.getElementById('birthdate').value;
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirm-password').value;

    // Calculate Age from Birthdate
    const age = calculateAge(birthdate);

    // Regular expressions สำหรับตรวจสอบอีเมล
    const hotmailRegex = /@hotmail\.com$/;
    const gmailRegex = /@gmail\.com$/;

    if (username === '') {
        Swal.fire({
            title: "แจ้งเตือน!",
            text: "กรุณากรอกชื่อบัญชี!",
            icon: "warning"
        });
    } else if (username.length > 20) {
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
    } else if (birthdate === '') {
        Swal.fire({
            title: "แจ้งเตือน!",
            text: "กรุณาเลือกวันเกิด!",
            icon: "warning"
        });

    } else if (age < 13) {
        Swal.fire({
            title: "แจ้งเตือน!",
            text: "คุณต้องมีอายุ 13 ปีขึ้นไปเพื่อสร้างบัญชี!",
            icon: "warning"
        });
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
    } else if (confirmPassword === '') {
        Swal.fire({
            title: "แจ้งเตือน!",
            text: "กรุณากรอกรหัสผ่าน!",
            icon: "warning"
        });
    } else if (confirmPassword.length < 8 || confirmPassword.length > 16) {
        Swal.fire({
            title: "แจ้งเตือน!",
            text: "ยืนยันรหัสผ่านต้องมีความยาวอย่างน้อย 8 และไม่เกิน 16 ตัวอักษร!",
            icon: "warning"
        });
        return false;
    } else if (password !== confirmPassword) {
        Swal.fire({
            title: "แจ้งเตือน!",
            text: "รหัสผ่านทั้งสองช่องไม่ตรงกัน!",
            icon: "warning"
        });
    } else {
        Swal.fire({
            title: "แจ้งเตือน!",
            text: "บัญชีถูกสร้างสำเร็จ!",
            icon: "success"
        });
        ClearD();
    }
}


// Calculate Age from Birthdate
function calculateAge(birthdate) {
    const today = new Date();
    const birthDate = new Date(birthdate);
    let age = today.getFullYear() - birthDate.getFullYear();
    const month = today.getMonth() - birthDate.getMonth();
    if (month < 0 || (month === 0 && today.getDate() < birthDate.getDate())) {
        age--;
    }
    return age;
}


function PlessLogin() {
    // เรียกใช้ SweetAlert เพื่อแสดงการแจ้งเตือน
    Swal.fire({
        title: "แจ้งเตือน!",
        text: "โปรดเข้าสู่ระบบก่อนใช้งาน!",
        icon: "warning"
    });
}
