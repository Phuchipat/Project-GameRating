function EditeGame(button) {
    var row = button.closest('tr');  
    var gameName = row.querySelector('.gameName').textContent;
    var ratingOrganization = row.querySelector('.ratingOrganization').textContent;
    var gameRating = row.querySelector('.gameRating').textContent;
    var description = row.querySelector('.description').textContent;
    var gameCompany = row.querySelector('.gameCompany').textContent;
    var gameCategory = row.querySelector('.gameCategory').textContent;
    var releaseDate = row.querySelector('.releaseDate').textContent;

    var body = document.getElementsByTagName('body')[0];
    body.style.overflow = 'hidden'; // ปิดการใช้งาน scroll bar ขณะที่ overlay ยังเปิดอยู่

    // นำข้อมูลไปแสดงในฟอร์ม
    var editForm = document.getElementById('editGameForm');
    editForm.gameName.value = gameName;
    editForm.ratingOrganization.value = ratingOrganization;
    editForm.gameRating.value = gameRating;
    editForm.description.value = description;
    editForm.gameCompany.value = gameCompany;
    editForm.gameCategory.value = gameCategory;
    editForm.releaseDate.value = releaseDate;

    // แสดง Popup
    document.getElementById('overlay').style.display = 'block';
}

function clearFields() {
    // ล้างข้อมูลในฟอร์ม
    var editForm = document.getElementById('editGameForm');
    editForm.reset();
}

function goBack() {
    // ปิดหน้าต่าง Popup
    document.getElementById('overlay').style.display = 'none';

    var body = document.getElementsByTagName('body')[0];
    body.style.overflow = 'auto'; // เปิดการใช้งาน scroll bar เมื่อ overlay ปิด
}

function closePopup(event) {
    // ตรวจสอบว่าคลิกที่ overlay หรือไม่
    if (event.target.id === 'overlay') {
        // ปิดหน้าต่าง Popup
        document.getElementById('overlay').style.display = 'none';

        var body = document.getElementsByTagName('body')[0];
        body.style.overflow = 'auto'; // เปิดการใช้งาน scroll bar เมื่อ overlay ปิด
    }
}

function ConfirmEditeDescGame() {
    var body = document.getElementsByTagName('body')[0];
    body.style.overflow = 'auto'; // เปิดการใช้งาน scroll bar เมื่อ overlay ปิด

    document.getElementById('overlay').style.display = 'none';
}

