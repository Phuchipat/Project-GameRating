document.addEventListener("DOMContentLoaded", function () {
    for (let i = 1; i <= 5; i++) {
        // หา DOM elements
        var recommendationDateInput = document.querySelector(
            `.row${i} .recommendation-date`
        );
        var elapsedDaysElement = document.getElementById(`LastRecommendedDate${i}`);

        // อัพเดทระยะเวลาเมื่อโหลดหน้าเว็บ
        updateElapsedDays(i);

        // เพิ่ม event listener สำหรับการเปลี่ยนแปลงของวันที่
        recommendationDateInput.addEventListener("change", function () {
            updateElapsedDays(i);
        });
    }

    function updateElapsedDays(index) {
        // ดึงวันที่แนะนำล่าสุดจาก input
        var recommendationDateInput = document.querySelector(
            `.row${index} .recommendation-date`
        );
        var recommendationDate = new Date(recommendationDateInput.value);

        // หา DOM element ที่ต้องการแสดงผล
        var elapsedDaysElement = document.getElementById(`LastRecommendedDate${index}`);

        // ถ้าวันที่ถูกป้อนไม่ถูกต้องหรือว่างเปล่า
        if (isNaN(recommendationDate.getTime())) {
            elapsedDaysElement.innerText = "ยังไม่ได้แนะนำ";
        } else {
            // คำนวณจำนวนวันที่ผ่านมา
            var currentDate = new Date();
            var elapsedDays = Math.floor((currentDate - recommendationDate) / (1000 * 60 * 60 * 24));

            // แสดงผลลัพธ์ใน HTML
            elapsedDaysElement.innerText = "ผ่านมาแล้ว " + elapsedDays + " วัน";
        }
    }
});



document.addEventListener("DOMContentLoaded", function () {
    // หา DOM elements
    var gameSelects = document.querySelectorAll(".gameSelect");
    var selectedGames = document.querySelectorAll(".selectedGame");
    
    // เพิ่ม event listener สำหรับการเลือกตัวเลือกใน select ทุกตัว
    gameSelects.forEach(function (gameSelect, index) {
        gameSelect.addEventListener("change", function () {
            // นำข้อมูลจาก select ที่เปลี่ยนแปลงมาแสดงใน textarea ที่ตรงกัน
            selectedGames[index].value = gameSelect.value;
        });
    });
});

// function SearcGame () {
//     var gameSelects = document.querySelectorAll(".gameSelect");
//     var selectedGames = document.querySelectorAll(".selectedGame");
//     var searchInput = document.querySelector(".SearcGame");

//     var searchValue = searchInput.value.toLowerCase();

//     // หา select ที่มี option ที่มีคำค้นหา
//     gameSelects.forEach(function (gameSelect) {
//         var foundOption = Array.from(gameSelect.options).find(function (option) {
//             return option.value.toLowerCase().includes(searchValue);
//         });

//         if (foundOption) {
//             // นำค่าที่ค้นหาไปแสดงใน textarea และเปลี่ยน select เพื่อตรงกับค่าที่ค้นหา
//             selectedGames[0].value = foundOption.value;
//             gameSelect.selectedIndex = foundOption.index;

//             // ล้างค่าในช่องค้นหา
//             searchInput.value = "";
//         }
//     });
// };

