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



function toggleDropdown() {
    const dropdownContent = document.querySelector(".dropdown-content");
    if (window.getComputedStyle(dropdownContent).getPropertyValue("display") === "none") {
        dropdownContent.style.display = "block";
    } else {
        dropdownContent.style.display = "none";
    }
}

function closeDropdown() {
    const dropdownContent = document.querySelector(".dropdown-content");
    dropdownContent.style.display = "none";
}

function changeButtonText(newText) {
    const button = document.getElementById("Sort-reviews");
    const currentText = button.textContent;

    // ไม่ต้องเช็คเงื่อนไข currentText และ newText เนื่องจากตอนที่คลิก คุณต้องการให้เปลี่ยนตลอด
    button.textContent = newText;

    // เพิ่มเอฟเฟกต์การเคลื่อนไหวเมื่อมีการเปลี่ยนข้อความ
    button.style.transform = "scale(1.1)"; // ย่อ 110%
    setTimeout(function () {
        button.style.transform = "scale(1)"; // กลับสู่ขนาดปกติ
    }, 200); // เป็นเวลา 0.2 วินาที
}
// เพิ่มอีเวนต์ลิสเนอร์เมื่อคลิกที่พื้นที่ว่าง
document.addEventListener('click', function (event) {
    const dropdown = document.getElementById('myDropdown'); // เปลี่ยนเป็น ID ของ .dropdown
    if (!dropdown.contains(event.target)) {
        // ปิด dropdown ถ้าคลิกนอกเท่านั้น
        closeDropdown();
    }
});


function toggleDropdownpost() {
    const dropdownContent = document.querySelector(".dropdown-content-post");
    if (window.getComputedStyle(dropdownContent).getPropertyValue("display") === "none") {
        dropdownContent.style.display = "block";
    } else {
        dropdownContent.style.display = "none";
    }
}

function closeDropdownpost() {
    const dropdownContent = document.querySelector(".dropdown-content-post");
    dropdownContent.style.display = "none";
}

function changeButtonTextpost(newText) {
    const button = document.getElementById("Sort-reviews-post");
    const currentText = button.textContent;

    // ไม่ต้องเช็คเงื่อนไข currentText และ newText เนื่องจากตอนที่คลิก คุณต้องการให้เปลี่ยนตลอด
    button.textContent = newText;

    // เพิ่มเอฟเฟกต์การเคลื่อนไหวเมื่อมีการเปลี่ยนข้อความ
    button.style.transform = "scale(1.1)"; // ย่อ 110%
    setTimeout(function () {
        button.style.transform = "scale(1)"; // กลับสู่ขนาดปกติ
    }, 200); // เป็นเวลา 0.2 วินาที
}
// เพิ่มอีเวนต์ลิสเนอร์เมื่อคลิกที่พื้นที่ว่าง
document.addEventListener('click', function (event) {
    const dropdown = document.getElementById('myDropdown-post'); // เปลี่ยนเป็น ID ของ .dropdown
    if (!dropdown.contains(event.target)) {
        // ปิด dropdown ถ้าคลิกนอกเท่านั้น
        closeDropdownpost();
    }
});

// สมมุติว่าคุณมีวันที่โพสต์ที่คุณต้องการแสดงอยู่ในตัวแปร postDate
// และใช้วัตถุ Date ในการแปลงวันที่เป็นข้อความ

const postDate = new Date(); // เปลี่ยนเป็นวันที่จริงที่คุณต้องการแสดง

const options = { year: 'numeric', month: 'long', day: 'numeric' };
const formattedDate = postDate.toLocaleDateString('th-TH', options);

const postDateElement = document.getElementById("postDate");
postDateElement.textContent = formattedDate;


function EditReview() {
    var overlayre = document.getElementById('overlay');
    var popup = document.querySelector('.popup');
    // var body = document.getElementsByTagName('body')[0];

    overlayre.style.display = 'block';
    popup.style.display = 'block';
    // body.style.overflow = 'hidden';
    // ปิดการใช้งาน scroll bar ขณะที่ overlay ยังเปิดอยู่
}

document.getElementById('overlay').addEventListener('click', function (event) {
    if (event.target === this) {
        var overlayre = document.getElementById('overlay');
        var popup = document.querySelector('.popup');
        // var body = document.getElementsByTagName('body')[0];

        overlayre.style.display = 'none';
        popup.style.display = 'none';
        // body.style.overflow = 'auto'; 
        // เปิดการใช้งาน scroll bar เมื่อ overlay ปิด
    }
});

document.getElementById('back').addEventListener('click', function () {
    var overlayre = document.getElementById('overlay');
    var popup = document.querySelector('.popup');
    // var body = document.getElementsByTagName('body')[0];

    overlayre.style.display = 'none';
    popup.style.display = 'none';
    // body.style.overflow = 'auto';
    // เปิดการใช้งาน scroll bar เมื่อ overlay ปิด
});

function EditPostReview() {
    var overlayre = document.getElementById('overlay-po');
    var popup = document.querySelector('.popup-po');
    // var body = document.getElementsByTagName('body')[0];

    overlayre.style.display = 'block';
    popup.style.display = 'block';
    // body.style.overflow = 'hidden';
    // ปิดการใช้งาน scroll bar ขณะที่ overlay ยังเปิดอยู่
}

document.getElementById('overlay-po').addEventListener('click', function (event) {
    if (event.target === this) {
        var overlayre = document.getElementById('overlay-po');
        var popup = document.querySelector('.popup-po');
        // var body = document.getElementsByTagName('body')[0];

        overlayre.style.display = 'none';
        popup.style.display = 'none';
        // body.style.overflow = 'auto';
        // เปิดการใช้งาน scroll bar เมื่อ overlay ปิด
    }
});

document.getElementById('back-post').addEventListener('click', function () {
    var overlayre = document.getElementById('overlay-po');
    var popup = document.querySelector('.popup-po');
    // var body = document.getElementsByTagName('body')[0];

    overlayre.style.display = 'none';
    popup.style.display = 'none';
    // body.style.overflow = 'auto';
    // เปิดการใช้งาน scroll bar เมื่อ overlay ปิด
});

// สร้างฟังก์ชันเพื่อรีเซ็ตดาวให้กลับเป็นค่าเริ่มต้น
function resetStars(stars) {
    stars.forEach(star => {
        star.classList.remove("active");
    });
}

const playingStars = document.querySelectorAll(".playing-star-rg i");
playingStars.forEach((star, index1) => {
    star.addEventListener("click", () => {
        console.log("การเล่น", index1);

        // รีเซ็ตดาวเมื่อคลิกอีกครั้ง
        if (star.classList.contains("active")) {
            resetStars(playingStars);
        } else {
            playingStars.forEach((star, index2) => {
                index1 >= index2 ? star.classList.add("active") : star.classList.remove("active");
            });
        }
    });
});

const storyStars = document.querySelectorAll(".story-star-rg i");
storyStars.forEach((star, index1) => {
    star.addEventListener("click", () => {
        console.log("เนื้อเรื่อง", index1);

        // รีเซ็ตดาวเมื่อคลิกอีกครั้ง
        if (star.classList.contains("active")) {
            resetStars(storyStars);
        } else {
            storyStars.forEach((star, index2) => {
                index1 >= index2 ? star.classList.add("active") : star.classList.remove("active");
            });
        }
    });
});

const efficiencyStars = document.querySelectorAll(".efficiency-star-rg i");
efficiencyStars.forEach((star, index1) => {
    star.addEventListener("click", () => {
        console.log("ประสิทธิภาพ", index1);

        // รีเซ็ตดาวเมื่อคลิกอีกครั้ง
        if (star.classList.contains("active")) {
            resetStars(efficiencyStars);
        } else {
            efficiencyStars.forEach((star, index2) => {
                index1 >= index2 ? star.classList.add("active") : star.classList.remove("active");
            });
        }
    });
});




// สร้างฟังก์ชันเพื่อรีเซ็ตดาวให้กลับเป็นค่าเริ่มต้น
function resetStarsPost(stars) {
    stars.forEach(star => {
        star.classList.remove("active");
    });
}

const playingStarsPost = document.querySelectorAll(".playing-star-post i");
playingStarsPost.forEach((star, index1) => {
    star.addEventListener("click", () => {
        console.log("การเล่น", index1);

        // รีเซ็ตดาวเมื่อคลิกอีกครั้ง
        if (star.classList.contains("active")) {
            resetStarsPost(playingStarsPost);
        } else {
            playingStarsPost.forEach((star, index2) => {
                index1 >= index2 ? star.classList.add("active") : star.classList.remove("active");
            });
        }
    });
});

const storyStarsPost = document.querySelectorAll(".story-star-post i");
storyStarsPost.forEach((star, index1) => {
    star.addEventListener("click", () => {
        console.log("เนื้อเรื่อง", index1);

        // รีเซ็ตดาวเมื่อคลิกอีกครั้ง
        if (star.classList.contains("active")) {
            resetStarsPost(storyStarsPost);
        } else {
            storyStarsPost.forEach((star, index2) => {
                index1 >= index2 ? star.classList.add("active") : star.classList.remove("active");
            });
        }
    });
});

const efficiencyStarsPost = document.querySelectorAll(".efficiency-star-post i");
efficiencyStarsPost.forEach((star, index1) => {
    star.addEventListener("click", () => {
        console.log("ประสิทธิภาพ", index1);

        // รีเซ็ตดาวเมื่อคลิกอีกครั้ง
        if (star.classList.contains("active")) {
            resetStarsPost(efficiencyStarsPost);
        } else {
            efficiencyStarsPost.forEach((star, index2) => {
                index1 >= index2 ? star.classList.add("active") : star.classList.remove("active");
            });
        }
    });
});

const Other = document.querySelectorAll(".other i");
Other.forEach((star, index1) => {
    star.addEventListener("click", () => {
        console.log("ประเด็นที่ 1", index1);

        // รีเซ็ตดาวเมื่อคลิกอีกครั้ง
        if (star.classList.contains("active")) {
            resetStarsPost(Other);
        } else {
            Other.forEach((star, index2) => {
                index1 >= index2 ? star.classList.add("active") : star.classList.remove("active");
            });
        }
    });
});

const Others = document.querySelectorAll(".others i");
Others.forEach((star, index1) => {
    star.addEventListener("click", () => {
        console.log("ประเด็นที่ 2", index1);

        // รีเซ็ตดาวเมื่อคลิกอีกครั้ง
        if (star.classList.contains("active")) {
            resetStarsPost(Others);
        } else {
            Others.forEach((star, index2) => {
                index1 >= index2 ? star.classList.add("active") : star.classList.remove("active");
            });
        }
    });
});


document.getElementById("review-content-one").addEventListener("click", function () {
    var popup = document.querySelector(".background-color-content");
    var reviewWindow = document.querySelector(".review-window-content");
    var reviewText = document.getElementById("review-content-one");

    // แสดง popup
    popup.style.display = "block";
    reviewWindow.classList.add("show");

    // ย้อนกลับ
    document.getElementById("back-button-content").addEventListener("click", function () {
        popup.style.display = "none";
        reviewWindow.classList.remove("show");
    });

    // ล้างข้อมูล
    document.getElementById("clear-button-content").addEventListener("click", function () {
        document.getElementById("review-input-content-one").value = '';
    });

    // ยืนยัน
    document.getElementById("confirm-button-content").addEventListener("click", function () {
        var newText = document.getElementById("review-input-content-one").value;

        // เช็คว่าค่าว่างหรือไม่ และทำการเปลี่ยนแปลงค่าของ <p>
        if (newText.trim() === '') {
            reviewText.textContent = "เพิ่มประเด็นที่ 1";
            document.querySelectorAll('.other .fa-star').forEach(star => {
                star.style.display = 'none';
            });
        } else if (newText.trim().length > 40) {
            // แสดงแจ้งเตือน
            Swal.fire({
                title: "แจ้งเตือน!",
                text: "ข้อความไม่สามารถเกิน 40 ตัวอักษรได้!",
                icon: "warning"
            });
        } else {
            reviewText.textContent = newText;
            document.querySelectorAll('.other .fa-star').forEach(star => {
                star.style.display = 'block';
            });
        }

        // ปิด popup
        popup.style.display = "none";
        reviewWindow.classList.remove("show");
    });

});


document.getElementById("review-content-two").addEventListener("click", function () {
    var popup = document.querySelector(".background-color-content2");
    var reviewWindow = document.querySelector(".review-window-content2");
    var reviewText = document.getElementById("review-content-two");

    // แสดง popup
    popup.style.display = "block";
    reviewWindow.classList.add("show");

    // ย้อนกลับ
    document.getElementById("back-button-content2").addEventListener("click", function () {
        popup.style.display = "none";
        reviewWindow.classList.remove("show");
    });

    // ล้างข้อมูล
    document.getElementById("clear-button-content2").addEventListener("click", function () {
        document.getElementById("review-input-content-two").value = '';
    });

    // ยืนยัน
    document.getElementById("confirm-button-content2").addEventListener("click", function () {
        var newText = document.getElementById("review-input-content-two").value;

        // เช็คว่าค่าว่างหรือไม่ และทำการเปลี่ยนแปลงค่าของ <p>
        if (newText.trim() === '') {
            reviewText.textContent = "เพิ่มประเด็นที่ 2";
            document.querySelectorAll('.others .fa-star').forEach(star => {
                star.style.display = 'none';
            });
        } else if (newText.trim().length > 40) {
            // แสดงแจ้งเตือน
            Swal.fire({
                title: "แจ้งเตือน!",
                text: "ข้อความไม่สามารถเกิน 40 ตัวอักษรได้!",
                icon: "warning"
            });
        } else {
            reviewText.textContent = newText;
            document.querySelectorAll('.others .fa-star').forEach(star => {
                star.style.display = 'block';
            });
        }

        // ปิด popup
        popup.style.display = "none";
        reviewWindow.classList.remove("show");
    });
});



