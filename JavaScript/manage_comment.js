document.addEventListener("DOMContentLoaded", function() {
    var selectElements = document.querySelectorAll(".statusSelect");

    selectElements.forEach(function(selectElement) {
        selectElement.addEventListener("change", function() {
            if (selectElement.value === "ถูกระงับ") {
                selectElement.style.backgroundColor = "#e74c3c"; // สีที่คุณต้องการเมื่อถูกระงับ
            } else {
                selectElement.style.backgroundColor = "#3498db"; // สีปกติ
            }
        });
    });
});


