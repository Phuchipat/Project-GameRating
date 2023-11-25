<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameRating</title>

    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/manage_game.css">
    <script src="javaScript/manage_game.js" defer></script>
    <script src="javaScript/navbar.js" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.9.4/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anuphan:wght@100&family=Athiti:wght@200&family=Chakra+Petch:ital,wght@0,300;1,300&family=Charm&family=IBM+Plex+Sans+Thai+Looped:wght@100&family=IBM+Plex+Sans+Thai:wght@100&family=K2D:wght@100&family=Kanit:wght@100&family=Krub:wght@200&family=Maitree:wght@200&family=Mitr:wght@200&family=Noto+Sans+Thai+Looped:wght@100&family=Noto+Serif+Thai:wght@100&family=Pridi:wght@200&family=Sarabun:wght@100&family=Taviraj:wght@300&display=swap" rel="stylesheet">

    <html data-theme="dracula">

    </html>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link type="text/css" rel="stylesheet" href="style.css" />
</head>

<body>

    <div class="navbar bg-base-200">
        <details class="dropdown " id="manage">
            <summary class="m-1 btn text-lg text-white bg-base-100"><img src="images/sliders.png">จัดการ</summary>
            <ul class="ManageDrop p-2 shadow menu dropdown-content z-[1] bg-base-200 rounded-box w-max text-lg">
                <li><a href="manage_member.php" class=" mt-2 mb-2 group hover:text-xl"><i class="fa-solid fa-circle" style="color: #a3a3a3;"></i>จัดการข้อมูลสมาชิก</a></li>
                <li><a href="recommend_game.php" class=" mt-2 mb-2 group hover:text-xl"><i class="fa-solid fa-circle" style="color: #a3a3a3;"></i>จัการแนะนำเกม</a></li>
                <li><a href="category_game.php" class=" mt-2 mb-2 group hover:text-xl"><i class="fa-solid fa-circle" style="color: #a3a3a3;"></i>จัดการหมวดหมู่เกม</a></li>
                <li><a href="categort_rating.php" class=" mt-2 mb-2 group hover:text-xl"><i class="fa-solid fa-circle" style="color: #a3a3a3;"></i>จัดการหมวดหมู่เรตติ้งเกม</a>
                </li>
                <li><a href="manage_game.php" class=" mt-2 mb-2 group hover:text-xl"><i class="fa-solid fa-circle fa-beat" style="color: #ffffff;"></i>จัดการทะเบียนเกม</a></li>
                <li><a href="manage_comment.php" class=" mt-2 mb-2 group hover:text-xl"><i class="fa-solid fa-circle" style="color: #a3a3a3;"></i>จัดการความคิดเห็น</a></li>
                <li><a href="manage_scoregame.php" class=" mt-2 mb-2 group hover:text-xl"><i class="fa-solid fa-circle" style="color: #a3a3a3;"></i>ตรวจสอบคะแนนเกม</a></li>
                <li><a href="manage_review_issue.php" class=" mt-2 mb-2 group hover:text-xl"><i class="fa-solid fa-circle" style="color: #a3a3a3;"></i>จัดการประเด็นรีวิว</a>
                </li>
                <li><a href="manage_post.php" class=" mt-2 mb-2 group hover:text-xl"><i class="fa-solid fa-circle" style="color: #a3a3a3;"></i>จัดการโพสต์รีวิว</a></li>
                <li><a href="manage_review.php" class=" mt-2 mb-2 group hover:text-xl"><i class="fa-solid fa-circle" style="color: #a3a3a3;"></i>จัดการรีวิว</a></li>
            </ul>
        </details>
        <div class="flex-1">
            <a href="index.php" class="btn btn-ghost capitalize text-2xl text-white">GameRating</a>
        </div>
        <div class="flex-none">
            <ul class="menu menu-horizontal px-1 text-lg">
                <li><a href="index.php" class="group hover:text-white">หน้าแรก</a></li>
                <li>
                    <details id="games-menu">
                        <summary class="group hover:text-white">
                            หมวดหมู่เกม
                        </summary>
                        <ul class="p-2 bg-base-200 lg:min-w-max " id="CategoryNavbar">
                            <li><a href="Search.php">แอ็กชั่น</a></li>
                            <li><a href="Search.php">ผู้เล่นคนเดียว</a></li>
                        </ul>
                    </details>
                </li>
                <li>
                    <details id="ratings-menu">
                        <summary class="group hover:text-white">
                            เรตติ้ง
                        </summary>
                        <ul class="menu menu-horizontal lg:min-w-max bg-base-200 rounded-box " id="rattingBox">
                            <li class="text-lg">
                                <a>ESRB (USA)</a>
                                <ul>
                                    <li><a href="Search.php">M (17 ปี ขึ้นไป)</a></li>
                                    <li><a href="Search.php">M (17 ปี ขึ้นไป)</a></li>
                                    <li><a href="Search.php">M (17 ปี ขึ้นไป)</a></li>
                                    <li><a href="Search.php">M (17 ปี ขึ้นไป)</a></li>
                                </ul>
                            </li>
                            <li class="text-lg">
                                <a>PEGI (Europe)</a>
                                <ul>
                                    <li><a href="Search.php">CRM software</a></li>
                                    <li><a href="Search.php">Marketing management</a></li>
                                    <li><a href="Search.php">Security</a></li>
                                    <li><a href="Search.php">Consulting</a></li>
                                </ul>
                            </li>
                            <li class="text-lg">
                                <a>CERO (Japan)</a>
                                <ul>
                                    <li><a href="Search.php">UI Kit</a></li>
                                    <li><a href="Search.php">Wordpress themes</a></li>
                                    <li><a href="Search.php">Wordpress plugins</a></li>
                                    <li>
                                        <a>Open source</a>
                                        <ul>
                                            <li><a href="Search.php">Auth management system</a></li>
                                            <li><a href="Search.php">VScode theme</a></li>
                                            <li><a href="Search.php">Color picker app</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </details>
                </li>
                <li><a href="ContactUs.php" class="group hover:text-white">ติดต่อเรา</a></li>
            </ul>
        </div>
        <div class="flex-none gap-2">
            <div class="form-control">
                <div class="input-group">
                    <input type="text" placeholder="ค้นหา" class="input input-bordered text-lg" />
                    <button class="NavbarSearch btn btn-square bg-base-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="dropdown dropdown-end" id="profile-menu">
                <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                    <div class="w-10 rounded-full ring ring-[#fff]" id="profile-image-container">
                        <img src="images/cat 1.jpg" id="profile-image" />
                    </div>
                </label>
                <ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-200 rounded-box lg:min-w-max" id="ProfileNavbar">
                    <li>
                        <a class="justify-between text-lg mb-2 mt-2">
                            ข้อมูลผู้ใช้
                        </a>
                    </li>
                    <li><a class="text-lg mb-2" href="userProfile.php">ประวัติการรีวิวและโพสต์รีวิวเกม</a></li>
                    <li><a class="text-lg mb-2" href="indexlogout.php" id="logout">ออกจากระบบ</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="ContrainerManageGame">
        <div class="row">
            <div class="col1">
                <p class="text-3xl">จัดการทะเบียนเกม</p>
            </div>
        </div>
        <div class="row">
            <div class="col2">
                <p class="text-2xl">ค้นหา</p>
                <input type="text" placeholder="ค้นหา" class="input input-bordered w-96 max-w-xs text-lg" />
            </div>
            <div class="col3">
                <div class="pagination">
                    <p class="text-xl">หน้าปัจจุบัน</p>
                    <input type="number" class="text-xl" id="currentPage" placeholder="หน้าปัจจุบัน" value="1" />
                    <span class="text-xl">จาก</span>
                    <span class="text-xl" id="totalPages">1</span> <!-- จำนวนทั้งหมดจะถูกเปลี่ยนด้วย JavaScript -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col4">
                <div class="tableM overflow-x-auto text-black">
                    <table class="table text-lg">
                        <!-- head -->
                        <thead>
                            <tr class="text-lg tableHeaders">
                                <th></th>
                                <th class="tableHeadersGameName">ชื่อเกม</th>
                                <th class="tableHeadersRating">Rating Organization</th>
                                <th class="tableHeadersRating">เรตติ้ง</th>
                                <th class="tableHeadersRatingDesc">คำอธิบายเรตติ้ง</th>
                                <th class="tableHeadersCompany">ค่ายเกม</th>
                                <th class="tableHeadersCategory">หมวดหมู่เกม</th>
                                <th class="tableHeadersReleaseDate">วันวางจำหน่าย</th>
                                <th>แก้ไข/ลบเกม</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- row 1 -->
                            <tr class="text-lg">
                                <th>1</th>
                                <td class="gameName">Grand Theft Auto V1</td>
                                <td class="ratingOrganization">ESRB (USA)1</td>
                                <td class="gameRating">M1</td>
                                <td class="description">(17 ปี ขึ้นไป)1</td>
                                <td class="gameCompany">Rockstar1</td>
                                <td class="gameCategory">RPG1</td>
                                <td class="releaseDate">2023-09-16</td>
                                <td>
                                    <button class="btn-g-e btn btn-outline w-16 text-lg" onclick="EditeGame(this)">แก้ไข</button>
                                    <button class="btn-g-d btn btn-outline w-16 text-lg">ลบ</button>
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr class="text-lg">
                                <th>2</th>
                                <td class="gameName">Grand Theft Auto V2</td>
                                <td class="ratingOrganization">ESRB (USA)2</td>
                                <td class="gameRating">M2</td>
                                <td class="description">(17 ปี ขึ้นไป)2</td>
                                <td class="gameCompany">Rockstar2</td>
                                <td class="gameCategory">RPG2</td>
                                <td class="releaseDate">2023-08-15</td>
                                <td>
                                    <button class="btn-g-e btn btn-outline w-16 text-lg" onclick="EditeGame(this)">แก้ไข</button>
                                    <button class="btn-g-d btn btn-outline w-16 text-lg">ลบ</button>
                                </td>
                            </tr>
                            <!-- row 3 -->
                            <tr class="text-lg">
                                <th>3</th>
                                <td class="gameName">Grand Theft Auto V3</td>
                                <td class="ratingOrganization">ESRB (USA)3</td>
                                <td class="gameRating">M3</td>
                                <td class="description">(17 ปี ขึ้นไป)3</td>
                                <td class="gameCompany">Rockstar3</td>
                                <td class="gameCategory">RPG3</td>
                                <td class="releaseDate">2022-09-15</td>
                                <td>
                                    <button class="btn-g-e btn btn-outline w-16 text-lg" onclick="EditeGame(this)">แก้ไข</button>
                                    <button class="btn-g-d btn btn-outline w-16 text-lg">ลบ</button>
                                </td>
                            </tr>
                            <!-- row 4 -->
                            <tr class="text-lg">
                                <th>4</th>
                                <td class="gameName">Grand Theft Auto V4</td>
                                <td class="ratingOrganization">ESRB (USA)4</td>
                                <td class="gameRating">M4</td>
                                <td class="description">(17 ปี ขึ้นไป)4</td>
                                <td class="gameCompany">Rockstar4</td>
                                <td class="gameCategory">RPG4</td>
                                <td class="releaseDate">2019-07-15</td>
                                <td>
                                    <button class="btn-g-e btn btn-outline w-16 text-lg" onclick="EditeGame(this)">แก้ไข</button>
                                    <button class="btn-g-d btn btn-outline w-16 text-lg">ลบ</button>
                                </td>
                            </tr>
                            <!-- row 5 -->
                            <tr class="text-lg">
                                <th>5</th>
                                <td class="gameName">Grand Theft Auto V5</td>
                                <td class="ratingOrganization">ESRB (USA)5</td>
                                <td class="gameRating">M5</td>
                                <td class="description">(17 ปี ขึ้นไป)5</td>
                                <td class="gameCompany">Rockstar5</td>
                                <td class="gameCategory">RPG5</td>
                                <td class="releaseDate">2010-09-15</td>
                                <td>
                                    <button class="btn-g-e btn btn-outline w-16 text-lg" onclick="EditeGame(this)">แก้ไข</button>
                                    <button class="btn-g-d btn btn-outline w-16 text-lg">ลบ</button>
                                </td>
                            </tr>
                            <!-- row 6 -->
                            <tr class="text-lg">
                                <th>6</th>
                                <td class="gameName">Grand Theft Auto V6</td>
                                <td class="ratingOrganization">ESRB (USA)6</td>
                                <td class="gameRating">M6</td>
                                <td class="description">(17 ปี ขึ้นไป)6</td>
                                <td class="gameCompany">Rockstar6</td>
                                <td class="gameCategory">RPG6</td>
                                <td class="releaseDate">2017-09-01</td>
                                <td>
                                    <button class="btn-g-e btn btn-outline w-16 text-lg" onclick="EditeGame(this)">แก้ไข</button>
                                    <button class="btn-g-d btn btn-outline w-16 text-lg">ลบ</button>
                                </td>
                            </tr>
                            <!-- row 7 -->
                            <tr class="text-lg">
                                <th>7</th>
                                <td class="gameName">Grand Theft Auto V7</td>
                                <td class="ratingOrganization">ESRB (USA)7</td>
                                <td class="gameRating">M7</td>
                                <td class="description">(17 ปี ขึ้นไป)7</td>
                                <td class="gameCompany">Rockstar7</td>
                                <td class="gameCategory">RPG7</td>
                                <td class="releaseDate">2023-09-10</td>
                                <td>
                                    <button class="btn-g-e btn btn-outline w-16 text-lg" onclick="EditeGame(this)">แก้ไข</button>
                                    <button class="btn-g-d btn btn-outline w-16 text-lg">ลบ</button>
                                </td>
                            </tr>
                            <!-- row 8 -->
                            <tr class="text-lg">
                                <th>8</th>
                                <td class="gameName">Grand Theft Auto V8</td>
                                <td class="ratingOrganization">ESRB (USA)8</td>
                                <td class="gameRating">M8</td>
                                <td class="description">(17 ปี ขึ้นไป)8</td>
                                <td class="gameCompany">Rockstar8</td>
                                <td class="gameCategory">RPG8</td>
                                <td class="releaseDate">2021-09-15</td>
                                <td>
                                    <button class="btn-g-e btn btn-outline w-16 text-lg" onclick="EditeGame(this)">แก้ไข</button>
                                    <button class="btn-g-d btn btn-outline w-16 text-lg">ลบ</button>
                                </td>
                            </tr>
                            <!-- row 9 -->
                            <tr class="text-lg">
                                <th>9</th>
                                <td class="gameName">Grand Theft Auto V9</td>
                                <td class="ratingOrganization">ESRB (USA)9</td>
                                <td class="gameRating">M9</td>
                                <td class="description">(17 ปี ขึ้นไป)9</td>
                                <td class="gameCompany">Rockstar9</td>
                                <td class="gameCategory">RPG9</td>
                                <td class="releaseDate">2009-09-09</td>
                                <td>
                                    <button class="btn-g-e btn btn-outline w-16 text-lg" onclick="EditeGame(this)">แก้ไข</button>
                                    <button class="btn-g-d btn btn-outline w-16 text-lg">ลบ</button>
                                </td>
                            </tr>
                            <!-- row 10 -->
                            <tr class="text-lg">
                                <th>10</th>
                                <td class="gameName">Grand Theft Auto V10</td>
                                <td class="ratingOrganization">ESRB (USA)10</td>
                                <td class="gameRating">M10</td>
                                <td class="description">(17 ปี ขึ้นไป)10</td>
                                <td class="gameCompany">Rockstar10</td>
                                <td class="gameCategory">RPG10</td>
                                <td class="releaseDate">2010-10-10</td>
                                <td>
                                    <button class="btn-g-e btn btn-outline w-16 text-lg" onclick="EditeGame(this)">แก้ไข</button>
                                    <button class="btn-g-d btn btn-outline w-16 text-lg">ลบ</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col5">
                <select class="select w-full max-w-xs bg-[#fff] text-black text-lg">
                    <option>แสดง 10 รายการ</option>
                    <option>แสดง 15 รายการ</option>
                    <option>แสดง 20 รายการ</option>
                </select>
                <p class="text-lg" id="userCount">จำนวนเกมทั้งหมด : <span id="countValue">10</span></p>
            </div>
            <div class="col6">
                <div class="join grid grid-cols-2 text-lg w-72">
                    <button type="button" class="join-item btn btn-outline text-lg">ก่อนหน้า</button>
                    <button type="button" class="join-item btn btn-outline text-lg">ถัดไป</button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col7">
                <p class="text-lg">อัพโหลดไฟล์</p>
                <input type="file" class="UpLoadFile file-input file-input-bordered file-input-info w-full max-w-xs" />
                <p class="SizeText text-lg">ขนาดไฟล์ไม่เกิน xMB</p>
            </div>
        </div>
        <div class="row">
            <div class="col8">
                <p class="TemplateFile text-lg">ไฟล์เทมเพลต</p>
                <button class="btn btn-outline text-lg">ดาวน์โหลดไฟล์เทมเพลต</button>
            </div>
        </div>
    </div>
    <div class="overlay" id="overlay" onclick="closePopup(event)">
        <div class="popup">
            <div class="popupContentEditGame">
                <form id="editGameForm">
                    <p class="text-3xl">แก้ไขรายละเอียดเกม</p>

                    <label for="gameName">ชื่อเกม</label>
                    <input type="text" class="gameName" name="gameName"><br><br>

                    <label for="ratingOrganization">Rating Organization</label>
                    <input type="text" class="ratingOrganization" name="ratingOrganization"><br><br>

                    <label for="gameRating">เรตติ้ง</label>
                    <input type="text" class="gameRating" name="gameRating"><br><br>

                    <label for="description">คำอธิบายเรตติ้ง</label>
                    <input type="text" class="description" name="description"><br><br>

                    <label for="gameCompany">ค่ายเกม</label>
                    <input type="text" class="gameCompany" name="gameCompany"><br><br>

                    <label for="gameCategory">หมวดหมู่เกม</label>
                    <input type="text" class="gameCategory" name="gameCategory"><br><br>

                    <label for="releaseDate">วันวางจำหน่าย</label>
                    <input type="date" class="releaseDate" name="releaseDate"><br><br>

                    <label class="WeightText text-3xl">ภาพเกม</label>
                    <div class="imgGame">
                        <img src="https://static.thairath.co.th/media/B6FtNKtgSqRqbnNsbJdLVdNYnF9fpZkcJ2BmlIspgHwX1P1GlOZzglDPI1kvviHVhPknK.jpg" alt="">
                    </div>

                    <div class="buttonFotter">
                        <button type="button" onclick="clearFields()">ล้างข้อมูล</button>
                        <button type="button" onclick="goBack()">ย้อนกลับ</button>
                        <button type="button" onclick="ConfirmEditeDescGame()">ยืนยันการแก้ไข</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="overlayMa" id="overlayMa"></div>

    <footer class="footer p-10 bg-base-200 text-base-content text-lg">
        <nav>
            <header class="footer-title">เกี่ยวกับเรา</header>
            <p>เว็บไซต์เกี่ยวกับ</p>
        </nav>
        <nav>
            <header class="footer-title">บริการ</header>
            <a href="" class="link link-hover">About us</a>
            <a href="" class="link link-hover">Contact</a>
            <a href="" class="link link-hover">Jobs</a>
            <a href="" class="link link-hover">Press kit</a>
        </nav>
        <nav>
            <header class="footer-title">ช่วยเหลือ</header>
            <a href="" class="link link-hover">Terms of use</a>
            <a href="" class="link link-hover">Privacy policy</a>
            <a href="" class="link link-hover">Cookie policy</a>
        </nav>
        <nav>
            <header class="footer-title">ช่องทางการติดตาม</header>
            <div class="grid grid-flow-col gap-4">
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                        <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z">
                        </path>
                    </svg></a>
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                        <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z">
                        </path>
                    </svg></a>
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                        <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z">
                        </path>
                    </svg></a>
            </div>
        </nav>
    </footer>
</body>

</html>