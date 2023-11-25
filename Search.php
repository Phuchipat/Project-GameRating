<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameRating</title>

    <link rel="stylesheet" href="css/indexStyle.css">
    <link rel="stylesheet" href="css/Search.css">
    <script src="JavaScript/Search.js" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.9.4/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anuphan:wght@100&family=Athiti:wght@200&family=Chakra+Petch:ital,wght@0,300;1,300&family=Charm&family=IBM+Plex+Sans+Thai+Looped:wght@100&family=IBM+Plex+Sans+Thai:wght@100&family=K2D:wght@100&family=Kanit:wght@100&family=Krub:wght@200&family=Maitree:wght@200&family=Mitr:wght@200&family=Noto+Sans+Thai+Looped:wght@100&family=Noto+Serif+Thai:wght@100&family=Pridi:wght@200&family=Sarabun:wght@100&family=Taviraj:wght@300&display=swap" rel="stylesheet">

    <html data-theme="dracula">

</head>

<body class="text-white">

    <div class="navbar bg-base-200">
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
                            <li><a href="Search.php">Action</a></li>
                            <li><a href="Search.php">Link 2</a></li>
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
                                <a>Solutions</a>
                                <ul>
                                    <li><a href="Search.php">Design</a></li>
                                    <li><a href="Search.php">Development</a></li>
                                    <li><a href="Search.php">Hosting</a></li>
                                    <li><a href="Search.php">Domain register</a></li>
                                </ul>
                            </li>
                            <li class="text-lg">
                                <a>Enterprise</a>
                                <ul>
                                    <li><a href="Search.php">CRM software</a></li>
                                    <li><a href="Search.php">Marketing management</a></li>
                                    <li><a href="Search.php">Security</a></li>
                                    <li><a href="Search.php">Consulting</a></li>
                                </ul>
                            </li>
                            <li class="text-lg">
                                <a>Products</a>
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
                        <img src="images/woman.jpg" id="profile-image" />
                    </div>
                </label>
                <ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-200 rounded-box lg:min-w-max" id="ProfileNavbar">
                    <li>
                        <a href="userProfile.php" class="justify-between text-lg mb-2 mt-2">
                            ข้อมูลผู้ใช้
                        </a>
                    </li>
                    <li><a class="text-lg mb-2" href="userProfile.php">ประวัติการรีวิวและโพสต์รีวิวเกม</a></li>
                    <li><a class="text-lg mb-2" href="indexlogout.php" id="logout">ออกจากระบบ</a></li>
                </ul>
            </div>
        </div>
    </div>


    <div class="contrain-fg">
        <div class="row-fg row-1-fg">
            <div class="col-fg col-1-fg">
                <p class="text-2xl">ค้นหา</p>
                <div class="join">
                    <div>
                        <div>
                            <input class="Search input input-bordered join-item text-lg w-96" placeholder="ค้นหา" />
                        </div>
                    </div>
                    <select class="select select-bordered join-item text-lg">
                        <option disabled selected>Filter</option>
                        <option>ชื่อเกม</option>
                        <option>หมวดหมู่เกม</option>
                        <option>เรตติ้งเกม</option>
                    </select>
                    <div class="indicator">
                        <button class="btn btn-outline join-item text-lg">ค้นหา</button>
                    </div>
                </div>
                <!-- <p class="text-2xl">ค้นหาจาก</p>
                <select class="select select-info w-40 max-w-xs text-lg">
                    <option>ชื่อเกม</option>
                    <option>หมวดหมู่</option>
                    <option>เรตติ้ง</option>
                </select>
                <p class="pp text-2xl">ค้นหา</p>
                <input type="text" placeholder="ค้นหา" class="input input-bordered input-info w-96  text-lg" /> -->
            </div>
        </div>

        <div class="row-fg row-2-fg">
            <div class="col-fg col-2-fg">
                <p class="text-2xl">คำค้นหา : Grand Theft Auto V</p>
            </div>
        </div>

        <div class="horizontal-lines"></div>

        <div class="row-fg row-3-fg">
            <div class="col-fg col-3-fg">
                <div class="card w-96 bg-[#fff] shadow-xl rounded-3xl">
                    <a href="#">
                        <figure><img src="imagesgame/rov.jpg" /></figure>
                    </a>
                    <div class="top-left-box-fg">
                        <div role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="--value:38"></div>
                    </div>
                    <div class="card-body text-black">
                        <a href="#" class="card-title" id="">Grand Theft Auto V</a>
                        <!-- <h2 class="card-title">Grand Theft Auto V</h2> -->
                        <p class="text-lg"><strong>เรตติ้ง :</strong> M (17 ปี ขึ้นไป)</p>
                        <p class="text-lg"><strong>ค่ายเกม :</strong> Rockstar</p>
                        <p class="text-lg"><strong>หมวดหมู่ :</strong> Action</p>
                        <p class="text-lg"><strong>จำนวนรีวิว :</strong> 100 ครั้ง</p>
                        <p class="text-lg"><strong>จำนวนโพสต์รีวิว :</strong> 50 ครั้ง</p>
                        <p class="text-lg"><strong>วันที่วางจำหน่าย :</strong> 2023-09-15</p>
                    </div>
                    <div class="bottom-box-fg">
                        <img src="images/star black.png">
                        <p class="sum-review-fg text-lg" id="sum-review-fg"><strong>13,456 ครั้ง</strong></p>
                    </div>
                </div>
            </div>
            <div class="col-fg col-4-fg">
                <div class="card w-96 bg-[#fff] shadow-xl rounded-3xl">
                    <a href="#">
                        <figure><img src="imagesgame/league of legends.jpg" /></figure>
                    </a>
                    <div class="top-left-box-fg">
                        <div role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="--value:72"></div>
                    </div>
                    <div class="card-body text-black">
                        <a href="#" class="card-title" id="">League of Legends</a>
                        <!-- <h2 class="card-title">Grand Theft Auto V</h2> -->
                        <p class="text-lg"><strong>เรตติ้ง :</strong> M (17 ปี ขึ้นไป)</p>
                        <p class="text-lg"><strong>ค่ายเกม :</strong> Rockstar</p>
                        <p class="text-lg"><strong>หมวดหมู่ :</strong> Action</p>
                        <p class="text-lg"><strong>จำนวนรีวิว :</strong> 100 ครั้ง</p>
                        <p class="text-lg"><strong>จำนวนโพสต์รีวิว :</strong> 50 ครั้ง</p>
                        <p class="text-lg"><strong>วันที่วางจำหน่าย :</strong> 2023-09-15</p>
                    </div>
                    <div class="bottom-box-fg">
                        <img src="images/star black.png">
                        <p class="sum-review-fg text-lg" id="sum-review-fg"><strong>13,456 ครั้ง</strong></p>
                    </div>
                </div>
            </div>
            <div class="col-fg col-5-fg">
                <div class="card w-96 bg-[#fff] shadow-xl rounded-3xl">
                    <a href="#">
                        <figure><img src="imagesgame/cities 2.jpg" /></figure>
                    </a>
                    <div class="top-left-box-fg">
                        <div role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="--value:15"></div>
                    </div>
                    <div class="card-body text-black">
                        <a href="#" class="card-title" id="">Cities: Skylines II</a>
                        <!-- <h2 class="card-title">Grand Theft Auto V</h2> -->
                        <p class="text-lg"><strong>เรตติ้ง :</strong> M (17 ปี ขึ้นไป)</p>
                        <p class="text-lg"><strong>ค่ายเกม :</strong> Rockstar</p>
                        <p class="text-lg"><strong>หมวดหมู่ :</strong> Action</p>
                        <p class="text-lg"><strong>จำนวนรีวิว :</strong> 100 ครั้ง</p>
                        <p class="text-lg"><strong>จำนวนโพสต์รีวิว :</strong> 50 ครั้ง</p>
                        <p class="text-lg"><strong>วันที่วางจำหน่าย :</strong> 2023-09-15</p>
                    </div>
                    <div class="bottom-box-fg">
                        <img src="images/star black.png">
                        <p class="sum-review-fg text-lg" id="sum-review-fg"><strong>13,456 ครั้ง</strong></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row-fg row-4-fg">
            <div class="col-fg col-6-fg">
                <div class="card w-96 bg-[#fff] shadow-xl rounded-3xl">
                    <a href="#">
                        <figure><img src="imagesgame/fifa online 4.jpg" /></figure>
                    </a>
                    <div class="top-left-box-fg">
                        <div role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="--value:37"></div>
                    </div>
                    <div class="card-body text-black">
                        <a href="#" class="card-title" id="">FIFA Online 4</a>
                        <!-- <h2 class="card-title">Grand Theft Auto V</h2> -->
                        <p class="text-lg"><strong>เรตติ้ง :</strong> M (17 ปี ขึ้นไป)</p>
                        <p class="text-lg"><strong>ค่ายเกม :</strong> Rockstar</p>
                        <p class="text-lg"><strong>หมวดหมู่ :</strong> Action</p>
                        <p class="text-lg"><strong>จำนวนรีวิว :</strong> 100 ครั้ง</p>
                        <p class="text-lg"><strong>จำนวนโพสต์รีวิว :</strong> 50 ครั้ง</p>
                        <p class="text-lg"><strong>วันที่วางจำหน่าย :</strong> 2023-09-15</p>
                    </div>
                    <div class="bottom-box-fg">
                        <img src="images/star black.png">
                        <p class="sum-review-fg text-lg" id="sum-review-fg"><strong>13,456 ครั้ง</strong></p>
                    </div>
                </div>
            </div>
            <div class="col-fg col-7-fg">
                <div class="card w-96 bg-[#fff] shadow-xl rounded-3xl">
                    <a href="#">
                        <figure><img src="imagesgame/VALORANT.jpg" /></figure>
                    </a>
                    <div class="top-left-box-fg">
                        <div role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="--value:61"></div>
                    </div>
                    <div class="card-body text-black">
                        <a href="#" class="card-title" id="">Valorant</a>
                        <!-- <h2 class="card-title">Grand Theft Auto V</h2> -->
                        <p class="text-lg"><strong>เรตติ้ง :</strong> M (17 ปี ขึ้นไป)</p>
                        <p class="text-lg"><strong>ค่ายเกม :</strong> Rockstar</p>
                        <p class="text-lg"><strong>หมวดหมู่ :</strong> Action</p>
                        <p class="text-lg"><strong>จำนวนรีวิว :</strong> 100 ครั้ง</p>
                        <p class="text-lg"><strong>จำนวนโพสต์รีวิว :</strong> 50 ครั้ง</p>
                        <p class="text-lg"><strong>วันที่วางจำหน่าย :</strong> 2023-09-15</p>
                    </div>
                    <div class="bottom-box-fg">
                        <img src="images/star black.png">
                        <p class="sum-review-fg text-lg" id="sum-review-fg"><strong>13,456 ครั้ง</strong></p>
                    </div>
                </div>
            </div>
            <div class="col-fg col-8-fg">
                <div class="card w-96 bg-[#fff] shadow-xl rounded-3xl">
                    <a href="#">
                        <figure><img class=" rounded-3xl" src="https://image.api.playstation.com/vulcan/img/rnd/202010/2618/itbSm3suGHSSHIpmu9CCPBRy.jpg" />
                        </figure>
                    </a>
                    <div class="top-left-box-fg">
                        <div role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="--value:44"></div>
                    </div>
                    <div class="card-body text-black">
                        <a href="#" class="card-title" id="">The Last of Us Part II</a>
                        <!-- <h2 class="card-title">Grand Theft Auto V</h2> -->
                        <p class="text-lg"><strong>เรตติ้ง :</strong> M (17 ปี ขึ้นไป)</p>
                        <p class="text-lg"><strong>ค่ายเกม :</strong> Rockstar</p>
                        <p class="text-lg"><strong>หมวดหมู่ :</strong> Action</p>
                        <p class="text-lg"><strong>จำนวนรีวิว :</strong> 100 ครั้ง</p>
                        <p class="text-lg"><strong>จำนวนโพสต์รีวิว :</strong> 50 ครั้ง</p>
                        <p class="text-lg"><strong>วันที่วางจำหน่าย :</strong> 2023-09-15</p>
                    </div>
                    <div class="bottom-box-fg">
                        <img src="images/star black.png">
                        <p class="sum-review-fg text-lg" id="sum-review-fg"><strong>13,456 ครั้ง</strong></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row-fg row-5-fg">
            <div class="col-fg col-9-fg">
                <button class="centered-button text-lg btn btn-outline">ดูเพิ่มเติม</button>
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