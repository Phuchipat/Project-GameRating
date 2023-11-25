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
    const dropdownContent = document.querySelector(".dropdown-content-rv");
    if (window.getComputedStyle(dropdownContent).getPropertyValue("display") === "none") {
        dropdownContent.style.display = "block";
    } else {
        dropdownContent.style.display = "none";
    }
}

function closeDropdown() {
    const dropdownContent = document.querySelector(".dropdown-content-rv");
    dropdownContent.style.display = "none";
}

function changeButtonText(newText) {
    const button = document.getElementById("Sort-reviews-rv");
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
    const dropdown = document.getElementById('myDropdown-rv'); // เปลี่ยนเป็น ID ของ .dropdown
    if (!dropdown.contains(event.target)) {
        // ปิด dropdown ถ้าคลิกนอกเท่านั้น
        closeDropdown();
    }
});



function toggleDropdownP() {
    const dropdownContent = document.querySelector(".dropdown-content-prv");
    if (window.getComputedStyle(dropdownContent).getPropertyValue("display") === "none") {
        dropdownContent.style.display = "block";
    } else {
        dropdownContent.style.display = "none";
    }
}

function closeDropdownP() {
    const dropdownContent = document.querySelector(".dropdown-content-prv");
    dropdownContent.style.display = "none";
}

function changeButtonTextP(newText) {
    const button = document.getElementById("Sort-reviews-prv");
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
    const dropdown = document.getElementById('myDropdown-prv'); // เปลี่ยนเป็น ID ของ .dropdown
    if (!dropdown.contains(event.target)) {
        // ปิด dropdown ถ้าคลิกนอกเท่านั้น
        closeDropdown();
    }
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




document.getElementById("back-to-top").addEventListener("click", function (event) {
    event.preventDefault();
    window.scrollTo({ top: 0, behavior: "smooth" }); /* ลองเพิ่ม behavior: "smooth" เพื่อให้มีการเลื่อนแบบสมูธ */
});

document.getElementById("back-to-top-icon").addEventListener("click", function (event) {
    event.preventDefault();
    window.scrollTo({ top: 0, behavior: "smooth" }); /* ลองเพิ่ม behavior: "smooth" เพื่อให้มีการเลื่อนแบบสมูธ */
});

// แสดงหรือซ่อนรูปภาพตอนเลื่อนลงหรือขึ้น
window.onscroll = function () {
    var scrollTop = window.scrollY || document.documentElement.scrollTop;
    if (scrollTop > 20) {
        document.getElementById("back-to-top-icon").style.display = "block";
    } else {
        document.getElementById("back-to-top-icon").style.display = "none";
    }
};

document.getElementById("back-to-top-post").addEventListener("click", function (event) {
    event.preventDefault();
    window.scrollTo({ top: 0, behavior: "smooth" }); /* ลองเพิ่ม behavior: "smooth" เพื่อให้มีการเลื่อนแบบสมูธ */
});

document.getElementById("back-to-top-icon-post").addEventListener("click", function (event) {
    event.preventDefault();
    window.scrollTo({ top: 0, behavior: "smooth" }); /* ลองเพิ่ม behavior: "smooth" เพื่อให้มีการเลื่อนแบบสมูธ */
});

// แสดงหรือซ่อนรูปภาพตอนเลื่อนลงหรือขึ้น
window.onscroll = function () {
    var scrollTop = window.scrollY || document.documentElement.scrollTop;
    if (scrollTop > 20) {
        document.getElementById("back-to-top-icon-post").style.display = "block";
    } else {
        document.getElementById("back-to-top-icon-post").style.display = "none";
    }
};

document.getElementById("write-review-buttonID").addEventListener("click", function () {
    var headerContainer = document.querySelector(".header-container");
    var mainBoxRp = document.querySelector(".main-box-rp");

    var headerContainerDisplay = window.getComputedStyle(headerContainer).display;
    var mainBoxRpDisplay = window.getComputedStyle(mainBoxRp).display;

    if (headerContainerDisplay === "none" || mainBoxRpDisplay === "none") {
        headerContainer.style.display = "flex";
        mainBoxRp.style.display = "block";

        // เลื่อนหน้าจอลงมาที่ .main-box-rp
        mainBoxRp.scrollIntoView({ behavior: "smooth" });

        // ซ่อนปุ่มอีกที่
        var headerContainerPost = document.querySelector(".header-container-post");
        var mainBoxPost = document.querySelector(".main-box-post");
        headerContainerPost.style.display = "none";
        mainBoxPost.style.display = "none";
    } else {
        headerContainer.style.display = "none";
        mainBoxRp.style.display = "none";
    }
});

document.getElementById("write-post-review-buttonID").addEventListener("click", function () {
    var headerContainerPost = document.querySelector(".header-container-post");
    var mainBoxPost = document.querySelector(".main-box-post");

    var headerContainerPostDisplay = window.getComputedStyle(headerContainerPost).display;
    var mainBoxPostDisplay = window.getComputedStyle(mainBoxPost).display;

    if (headerContainerPostDisplay === "none" || mainBoxPostDisplay === "none") {
        headerContainerPost.style.display = "flex";
        mainBoxPost.style.display = "block";

        // เลื่อนหน้าจอลงมาที่ .main-box-post
        mainBoxPost.scrollIntoView({ behavior: "smooth" });

        // ซ่อนปุ่มอีกที่
        var headerContainer = document.querySelector(".header-container");
        var mainBoxRp = document.querySelector(".main-box-rp");
        headerContainer.style.display = "none";
        mainBoxRp.style.display = "none";
    } else {
        headerContainerPost.style.display = "none";
        mainBoxPost.style.display = "none";
    }
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



document.getElementById('ShowComment').addEventListener('click', function() {
    var overlay = document.getElementById('overlay');
    var body = document.getElementsByTagName('body')[0];

    overlay.style.display = 'block';
    body.style.overflow = 'hidden'; // ปิดการใช้งาน scroll bar ขณะที่ overlay ยังเปิดอยู่
});

document.getElementById('overlay').addEventListener('click', function(event) {
    if (event.target === this) {
        var overlay = document.getElementById('overlay');

        var body = document.getElementsByTagName('body')[0];

        overlay.style.display = 'none';
        body.style.overflow = 'auto'; // เปิดการใช้งาน scroll bar เมื่อ overlay ปิด
    }
});

document.getElementById('hideComments').addEventListener('click', function() {
    var overlay = document.getElementById('overlay');
    var body = document.getElementsByTagName('body')[0];

    overlay.style.display = 'none';
    body.style.overflow = 'auto'; // เปิดการใช้งาน scroll bar เมื่อ overlay ปิด
});





  