function handleButtonClick() {
    var input = document.getElementById('AddCategory');
    var datalist = document.getElementById('gameCategories');
    
    if (input.value !== '' && !Array.from(datalist.options).some(option => option.value === input.value)) {
        // ถ้าค่าที่ใส่ไม่ใช่ค่าใน datalist ให้เพิ่มเข้าไปใน datalist
        var option = document.createElement('option');
        option.value = input.value;
        datalist.appendChild(option);
    }

    // ให้ทำการลบค่าที่ใส่เข้าไปใน input เพื่อเตรียมรับค่าใหม่
    input.value = '';
}



document.addEventListener('DOMContentLoaded', function() {
    const tableRows = document.querySelectorAll('tbody tr');

    tableRows.forEach((row, index) => {
        row.addEventListener('click', function() {
            const nameCategory = this.querySelector('#NameCategory').textContent;

            const editInput = document.getElementById('EditCategory');
            const inputContainer = document.querySelector('.input-container');

            editInput.value = nameCategory;

            // แสดง input container
            inputContainer.style.display = 'block';
        });
    });
});

function EditCategoryClearButton() {
    // ล้างข้อมูลใน input ที่มี id "EditCategory" และ "DescCategory"
    document.getElementById("EditCategory").value = "";
    document.getElementById("DescCategory").value = "";
}