<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameRating</title>

    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/category_game.css">
    <script src="javaScript/category_game.js" defer></script>
    <script src="javaScript/navbar.js" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.9.4/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anuphan:wght@100&family=Athiti:wght@200&family=Chakra+Petch:ital,wght@0,300;1,300&family=Charm&family=IBM+Plex+Sans+Thai+Looped:wght@100&family=IBM+Plex+Sans+Thai:wght@100&family=K2D:wght@100&family=Kanit:wght@100&family=Krub:wght@200&family=Maitree:wght@200&family=Mitr:wght@200&family=Noto+Sans+Thai+Looped:wght@100&family=Noto+Serif+Thai:wght@100&family=Pridi:wght@200&family=Sarabun:wght@100&family=Taviraj:wght@300&display=swap" rel="stylesheet">

    <html data-theme="dracula">

    </html>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <div class="navbar bg-base-200">
        <details class="dropdown " id="manage">
            <summary class="m-1 btn text-lg text-white bg-base-100"><img src="images/sliders.png">จัดการ</summary>
            <ul class="ManageDrop p-2 shadow menu dropdown-content z-[1] bg-base-200 rounded-box w-max text-lg">
                <li><a href="manage_member.php" class=" mt-2 mb-2 group hover:text-xl"><i class="fa-solid fa-circle" style="color: #a3a3a3;"></i>จัดการข้อมูลสมาชิก</a></li>
                <li><a href="recommend_game.php" class=" mt-2 mb-2 group hover:text-xl"><i class="fa-solid fa-circle" style="color: #a3a3a3;"></i>จัการแนะนำเกม</a></li>
                <li><a href="category_game.php" class=" mt-2 mb-2 group hover:text-xl"><i class="fa-solid fa-circle fa-beat" style="color: #ffffff;"></i>จัดการหมวดหมู่เกม</a></li>
                <li><a href="categort_rating.php" class=" mt-2 mb-2 group hover:text-xl"><i class="fa-solid fa-circle" style="color: #a3a3a3;"></i>จัดการหมวดหมู่เรตติ้งเกม</a></li>
                <li><a href="manage_game.php" class=" mt-2 mb-2 group hover:text-xl"><i class="fa-solid fa-circle" style="color: #a3a3a3;"></i>จัดการทะเบียนเกม</a></li>
                <li><a href="manage_comment.php" class=" mt-2 mb-2 group hover:text-xl"><i class="fa-solid fa-circle" style="color: #a3a3a3;"></i>จัดการความคิดเห็น</a></li>
                <li><a href="manage_scoregame.php" class=" mt-2 mb-2 group hover:text-xl"><i class="fa-solid fa-circle" style="color: #a3a3a3;"></i>ตรวจสอบคะแนนเกม</a></li>
                <li><a href="manage_review_issue.php" class=" mt-2 mb-2 group hover:text-xl"><i class="fa-solid fa-circle" style="color: #a3a3a3;"></i>จัดการประเด็นรีวิว</a></li>
                <li><a href="manage_post.php" class=" mt-2 mb-2 group hover:text-xl"><i class="fa-solid fa-circle" style="color: #a3a3a3;"></i>จัดการโพสต์รีวิว</a></li>
                <li><a href="manage_review.php" class=" mt-2 mb-2 group hover:text-xl"><i class="fa-solid fa-circle" style="color: #a3a3a3;"></i>จัดการรีวิว</a></li>
            </ul>
        </details>
        <div class="flex-1">
            <a href="index.php" class="btn btn-ghost capitalize text-2xl">GameRating</a>
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

    <div class="ContrainerCategoryRating">
        <div class="row">
            <div class="col1">
                <p class="text-3xl">จัดการหมวดหมู่เกม</p>
            </div>
        </div>

        <div class="row">
            <div class="col3">
                <div class="container add-category">
                    <p class="fontWeight text-2xl">เพิ่มหมวดหมู่เกม</p>
                    <p class="text-lg">เพิ่มหมวดหมู่เกม</p>
                    <input type="text" id="AddCategory" placeholder="เพิ่มหมวดหมู่เกม" class="input input-bordered input-info w-full max-w-xs" />
                    <button class="AddCategoryConfirm btn w-max  text-lg">ยืนยัน</button>
                </div>

                <div class="container edit-category">
                    <p class="fontWeight text-2xl">แก้ไขหมวดหมู่เกม</p>
                    <p class="text-lg">หมวดหมู่เกม</p>
                    <input type="text" id="EditCategory" placeholder="หมวดหมู่เกม" class="input input-bordered input-info w-full max-w-xs" list="gameCategory" />
                    <datalist id="gameCategory">
                        <option value="แอ็กชั่น"></option>
                        <option value="ผู้เล่นคนเดียว"></option>
                        <option value="กีฬา"></option>
                    </datalist>
                    <p class="text-lg">แก้ไขชื่อหมวดหมู่เกม</p>
                    <input type="text" id="DescCategory" placeholder="แก้ไขชื่อหมวดหมู่เกม" class="input input-bordered input-info w-full max-w-xs" />
                    <div class="EditFooter">
                        <button class="EditCategoryClear btn w-max text-lg" onclick="EditCategoryClearButton()">ล้างข้อมูล</button>
                        <button class="EditCategoryConfirm btn w-max text-lg" onclick="EditCategoryConfirmButton()">ยืนยัน</button>
                    </div>
                </div>

                <div class="container delete-category">
                    <p class="fontWeight text-2xl">ลบหมวดหมู่เกม</p>
                    <p class="text-lg">ลบหมวดหมู่เกม</p>
                    <input type="text" id="DeleteCategory" placeholder="ลบหมวดหมู่เกม" class="input input-bordered input-info w-full max-w-xs" list="gameCategory" />
                    <datalist id="gameCategory">
                        <option value="แอ็กชั่น"></option>
                        <option value="ผู้เล่นคนเดียว"></option>
                        <option value="กีฬา"></option>
                    </datalist>
                    <button class="DeleteCategoryConfirm btn w-max text-lg">ยืนยัน</button>
                </div>
            </div>
            <div class="col4">
                <div class="container all-category">
                    <p class="fontWeight text-xl">หมวดหมู่เกมทั้งหมด : <span id="categoryCount">10</span></p>
                    <div class="tableM overflow-x-auto text-black">
                        <table class="table text-lg">
                            <!-- head -->
                            <thead>
                                <tr class="text-lg tableHeaders">
                                    <th></th>
                                    <th class="tableHeadersName">ชื่อหมวดหมู่เกม</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- row 1 -->
                                <tr class="text-lg">
                                    <th>1</th>
                                    <td id="NameCategory">แอ็กชั่น</td>
                                </tr>
                                <!-- row 2 -->
                                <tr class="text-lg">
                                    <th>2</th>
                                    <td id="NameCategory">ผู้เล่นคนเดียว</td>
                                </tr>
                                <!-- row 3 -->
                                <tr class="text-lg">
                                    <th>3</th>
                                    <td id="NameCategory">แอ็กชั่น</td>
                                </tr>
                                <!-- row 4 -->
                                <tr class="text-lg">
                                    <th>4</th>
                                    <td id="NameCategory">ผู้เล่นคนเดียว</td>
                                </tr>
                                <!-- row 5 -->
                                <tr class="text-lg">
                                    <th>5</th>
                                    <td id="NameCategory">กีฬา</td>
                                </tr>
                                <!-- row 6 -->
                                <tr class="text-lg">
                                    <th>6</th>
                                    <td id="NameCategory">แอ็กชั่น</td>
                                </tr>
                                <!-- row 7 -->
                                <tr class="text-lg">
                                    <th>7</th>
                                    <td id="NameCategory">ผู้เล่นคนเดียว</td>
                                </tr>
                                <!-- row 8 -->
                                <tr class="text-lg">
                                    <th>8</th>
                                    <td id="NameCategory">กีฬา</td>
                                </tr>
                                <!-- row 9 -->
                                <tr class="text-lg">
                                    <th>9</th>
                                    <td id="NameCategory">แอ็กชั่น</td>
                                </tr>
                                <!-- row 10 -->
                                <tr class="text-lg">
                                    <th>10</th>
                                    <td id="NameCategory">ผู้เล่นคนเดียว</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="sss">
                        <div class="AllGamePoints join grid grid-cols-2 text-lg w-72">
                            <button type="button" class="join-item btn btn-info text-lg">ก่อนหน้า</button>
                            <button type="button" class="join-item btn btn-info text-lg">ถัดไป</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                        <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path>
                    </svg></a>
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                        <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path>
                    </svg></a>
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                        <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path>
                    </svg></a>
            </div>
        </nav>
    </footer>
</body>

</html>