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

let lastChangeDate;

function saveData() {
  const email = document.getElementById('email').value;
  const birthdate = document.getElementById('birthdate').value;
  const name = document.getElementById('name').value;

  const age = calculateAge(birthdate);
  const hotmailRegex = /@hotmail\.com$/;
  const gmailRegex = /@gmail\.com$/;
  if (name === '') {
    Swal.fire({
      title: "แจ้งเตือน!",
      text: "กรอกชื่อบัญชี ไม่ควรเป็นช่องว่าง!",
      icon: "warning"
    });
  } else if (email === '' || (!hotmailRegex.test(email) && !gmailRegex.test(email))) {
    Swal.fire({
      title: "แจ้งเตือน!",
      text: "กรุณาแก้ไขอีเมลให้ถูกต้อง ไม่ควรเป็นที่ว่างและเป็น @hotmail.com หรือ @gmail.com เท่านั้น!",
      icon: "warning"
    });
  } else if (age < 13) {
    Swal.fire({
      title: "แจ้งเตือน!",
      text: "คุณต้องมีอายุ 13 ปีขึ้นไป!",
      icon: "warning"
    });
  } else if (lastChangeDate && (new Date() - lastChangeDate) < 30 * 24 * 60 * 60 * 1000) {
    const timeLeft = calculateTimeLeft(30 * 24 * 60 * 60 * 1000 - (new Date() - lastChangeDate));
    Swal.fire({
      title: "แจ้งเตือน!",
      html: `คุณสามารถเปลี่ยนชื่อได้หลังจากผ่านไป 30 วัน เวลาคงเหลือ : ${timeLeft}`,
      icon: "warning"
    });
  } else {
    lastChangeDate = new Date();
    Swal.fire({
      title: "แจ้งเตือน!",
      text: "บันทึกข้อมูลเรียบร้อย!",
      icon: "success"
    });
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

function calculateTimeLeft(time) {
  const days = Math.floor(time / (24 * 60 * 60 * 1000));
  const hours = Math.floor((time % (24 * 60 * 60 * 1000)) / (60 * 60 * 1000));
  const minutes = Math.floor((time % (60 * 60 * 1000)) / (60 * 1000));
  const seconds = Math.floor((time % (60 * 1000)) / 1000);

  let timeLeftString = "";
  if (days > 0) {
    timeLeftString += `${days} วัน `;
  }
  if (hours > 0) {
    timeLeftString += `${hours} ชั่วโมง `;
  }
  if (minutes > 0) {
    timeLeftString += `${minutes} นาที `;
  }
  if (seconds > 0) {
    timeLeftString += `${seconds} วินาที`;
  }

  return timeLeftString.trim();
}



