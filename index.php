<?php
include("include/config.php");
$page = "home";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameRating</title>

    <link rel="stylesheet" href="css/indexStyle.css">
    <script src="JavaScript/indexScript.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.9.4/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anuphan:wght@100&family=Athiti:wght@200&family=Chakra+Petch:ital,wght@0,300;1,300&family=Charm&family=IBM+Plex+Sans+Thai+Looped:wght@100&family=IBM+Plex+Sans+Thai:wght@100&family=K2D:wght@100&family=Kanit:wght@100&family=Krub:wght@200&family=Maitree:wght@200&family=Mitr:wght@200&family=Noto+Sans+Thai+Looped:wght@100&family=Noto+Serif+Thai:wght@100&family=Pridi:wght@200&family=Sarabun:wght@100&family=Taviraj:wght@300&display=swap" rel="stylesheet">

    <html data-theme="dracula">


</head>

<body class="text-white">
    <?php include('include/topbar.php'); ?>

    <div class="container ">
        <div class="left-content">
            <div class="top-content">
                <!-- เนื้อหาด้านบนทางด้านซ้าย -->
                <a class="text-3xl">
                    <span>กำลังมาแรง</span>
                    <!-- <img class="image-icon" src="images/tooltip white.png" title="อ้างอิงจาก"> -->
                    <div class="tooltip" data-tip="อ้างอิงจาก">
                        <img class="image-icon" src="images/tooltip white.png">
                    </div>
                </a>
                <div class="max-w-full mt-6">

                    <div id="default-carousel" class="relative" data-carousel="static">

                        <div class="overflow-hidden relative h-56 rounded-3xl sm:h-64 xl:h-80 2xl:h-full">

                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <span class="absolute top-1/2 left-1/2 text-2xl text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl "></span>
                                <a href="Search.php">
                                    <img src="https://images.shopcdn.co.uk/86/38/8638a710f067c10c8d117d1956eb67ce/1400x787/webp/resize" id="image-gmae" class="block absolute top-1/2 left-1/2 w-full h-full -translate-x-1/2 -translate-y-1/2">
                                </a>
                                <div class="top-left-box-in">
                                    <div class="ScoreShow" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="--value:38"></div>
                                </div>
                            </div>

                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <a href="Search.php">
                                    <img src="imagesgame/gta.jpg" id="image-gmae" class="block absolute top-1/2 left-1/2 w-full h-full -translate-x-1/2 -translate-y-1/2">
                                </a>
                                <div class="top-left-box-in">
                                    <div class="ScoreShow" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="--value:38"></div>
                                </div>
                            </div>

                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <a href="Search.php">
                                    <img src="imagesgame/league of legends.jpg" id="image-gmae" class="block absolute top-1/2 left-1/2 w-full h-full -translate-x-1/2 -translate-y-1/2">
                                </a>
                                <div class="top-left-box-in">
                                    <div class="ScoreShow" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="--value:38"></div>
                                </div>
                            </div>
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <a href="Search.php">
                                    <img src="imagesgame/gta2.jpg" id="image-gmae" class="block absolute top-1/2 left-1/2 w-full h-full -translate-x-1/2 -translate-y-1/2">
                                </a>
                                <div class="top-left-box-in">
                                    <div class="ScoreShow" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="--value:38"></div>
                                </div>
                            </div>
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <a href="Search.php">
                                    <img src="imagesgame/cities 2.jpg" id="image-gmae" class="block absolute top-1/2 left-1/2 w-full h-full -translate-x-1/2 -translate-y-1/2">
                                </a>
                                <div class="top-left-box-in">
                                    <div class="ScoreShow" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="--value:38"></div>
                                </div>
                            </div>
                        </div>

                        <div class="circle-slide flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2 ">
                            <button type="button" class="slide-button w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                            <button type="button" class="slide-button w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                            <button type="button" class="slide-button w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                            <button type="button" class="slide-button w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                            <button type="button" class="slide-button w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
                        </div>

                        <button type="button" class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
                            <span class="inline-flex justify-center items-center w-8 h-8 -ml-9 rounded-full sm:w-10 sm:h-10 bg-white/30  group-focus:ring-4 group-focus:ring-white  group-focus:outline-none">
                                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 -ml-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M15 19l-7-7 7-7">
                                    </path>
                                </svg>
                                <!-- <span class="hidden">Anterior</span> -->
                            </span>
                        </button>
                        <button type="button" class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next>
                            <span class="inline-flex justify-center items-center w-8 h-8 -mr-9 rounded-full sm:w-10 sm:h-10 bg-white/30 group-focus:ring-4 group-focus:ring-white  group-focus:outline-none">
                                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 -mr-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 5l7 7-7 7"></path>
                                </svg>
                                <!-- <span class="hidden">Siguiente</span> -->
                            </span>
                        </button>
                    </div>

                    <p class="text-2xl mt-5">
                        <a href="Search.php" class="text-game-name" id="game-name">EA Sports FC 24</a>
                    </p>
                    <div class="review-count-contrainer mt-5">
                        <img class="image-icon-review text-1xl" src="images/star w.png">
                        <p class="text-review text-1xl" id="review-count">34,994 ครั้ง</p>
                    </div>
                    <div class="CategorySlider text-lg  mt-3">
                        <p>
                            หมวดหมู่ :
                        </p>
                        <button class="btn btn-outline" id="actionButton">แอ็กชั่น</button>
                        <button class="btn btn-outline" id="actionButton">กีฬา</button>
                        <button class="btn btn-outline" id="actionButton">ผู้เล่นคนเดียว</button>
                    </div>
                    <div class="RattingSlider text-lg mt-3">
                        <p>
                            เรตติ้ง :
                        </p>
                        <button class="btn btn-outline" id="actionButton">M (17 ปี ขึ้นไป)</button>
                        <button class="btn btn-outline" id="actionButton">M (17 ปี ขึ้นไป)</button>
                    </div>
                    <!-- <div class="review-count-contrainer mt-5">
                        <img class="image-icon-review text-1xl" src="images/star w.png">
                        <p class="text-review text-1xl" id="review-count">34,994 ครั้ง</p>
                    </div> -->
                    <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
                </div>
            </div>
            <div class="bottom-content">
                <!-- เนื้อหาด้านล่างทางด้านซ้าย -->
                <div class="sort-re">
                    <p class="l-re text-2xl">รีวิวล่าสุด</p>
                    <select class="select select-info w-64 max-w-xs text-lg">
                        <option disabled selected>ล่าสุด</option>
                        <option>ล่าสุด</option>
                        <option>3 วันที่แล้ว</option>
                        <option>7 วันที่แล้ว</option>
                        <option>14 วันที่แล้ว</option>
                        <option>21 วันที่แล้ว</option>
                        <option>30 วันที่แล้ว</option>
                    </select>
                </div>
                <div class="horizontal-lines-f"></div>

                <div class="container-f">
                    <div class="left">
                        <!-- โค้ดที่คุณต้องการให้อยู่ซ้าย -->
                        <a href="Search.php">
                            <img class="gameImage-f" id="gameImageID" src="https://cdn.cloudflare.steamstatic.com/steam/apps/949230/capsule_616x353.jpg?t=1698326456">
                        </a>
                    </div>
                    <div class="content-f">
                        <!-- ส่วนเนื้อหาที่คุณต้องการให้อยู่ในกล่องสีขาว -->
                        <div class="hea">
                            <div class="circle-f">
                                <img id="userImage" src="images/woman.jpg">
                            </div>
                            <p class="game-name" id="gameID">
                                <a href="Search.php">Cities: Skylines II</a>
                                <!-- <img src="images/more.png" class="report"> -->
                            <div class="dropdownBox dropdown dropdown-bottom">
                                <label tabindex="0">
                                    <img src="images/more.png" class="report">
                                </label>
                                <ul tabindex="0" class="dropdown-content z-[1] menu p-1 shadow rounded-box -ml-5 -mt-4 bg-[#e2384f] group hover:bg-[#dd1933]">
                                    <li><a>รายงาน</a></li>
                                </ul>
                            </div>
                            </p>
                        </div>
                        <div class="user-info-f">
                            <p id="user-name-f">ชื่อบัญชี</p>
                            <p id="postDate-f">วัน/เดือน/ปี</p>
                            <p id="lv-f">ระดับ : Gold</p>
                        </div>
                        <textarea id="userReview-f" rows="2" cols="65" placeholder="ข้อความเขียนรีวิว....." readonly></textarea>
                        <div class="container container-score">
                            <div class="col-content col-content-1">
                                <!-- Content of Col 1 -->
                                <p>คะแนนเกม</p>
                                <div class="ScoreShowBotton" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="--value:38"></div>
                            </div>
                            <div class="col-content col-content-2">
                                <!-- Content of Col 2 -->
                                <p>การเล่น</p>
                                <div class="ScoreShowBotton" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="--value:38"></div>
                            </div>
                            <div class="col-content col-content-3">
                                <!-- Content of Col 3 -->
                                <p>เนื้อเรื่อง</p>
                                <div class="ScoreShowBotton" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="--value:38"></div>
                            </div>
                            <div class="col-content col-content-4">
                                <!-- Content of Col 4 -->
                                <p>ประสิทธิภาพ</p>
                                <div class="ScoreShowBotton" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="--value:38"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-f">
                    <div class="left">
                        <!-- โค้ดที่คุณต้องการให้อยู่ซ้าย -->
                        <a href="Search.php">
                            <img class="gameImage-f" id="gameImageID" src="https://image.api.playstation.com/vulcan/ap/rnd/202206/0300/E2vZwVaDJbhLZpJo7Q10IyYo.png">
                        </a>
                    </div>
                    <div class="content-f">
                        <!-- ส่วนเนื้อหาที่คุณต้องการให้อยู่ในกล่องสีขาว -->
                        <div class="hea">
                            <div class="circle-f">
                                <img id="userImage" src="images/clown.jpg">
                            </div>
                            <p class="game-name" id="gameID">
                                <a href="Search.php">Stray</a>
                                <!-- <img src="images/more.png" class="report"> -->
                            <div class="dropdownBox dropdown dropdown-bottom">
                                <label tabindex="0">
                                    <img src="images/more.png" class="report">
                                </label>
                                <ul tabindex="0" class="dropdown-content z-[1] menu p-1 shadow rounded-box -ml-5 -mt-4 bg-[#e2384f] group hover:bg-[#dd1933]">
                                    <li><a>รายงาน</a></li>
                                </ul>
                            </div>
                            </p>
                        </div>
                        <!-- <div class="circle-f">
                            <img id="userImage" src="images/peo 1.jpg">
                        </div> -->
                        <div class="user-info-f">
                            <p id="user-name-f">ชื่อบัญชี</p>
                            <p id="postDate-f">วัน/เดือน/ปี</p>
                            <p id="lv-f">ระดับ : Gold</p>
                        </div>
                        <textarea id="userReview-f" rows="2" cols="65" placeholder="ข้อความเขียนรีวิว....." readonly></textarea>
                        <div class="container container-score">
                            <div class="col-content col-content-1">
                                <!-- Content of Col 1 -->
                                <p>คะแนนเกม</p>
                                <div class="ScoreShowBotton" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="--value:38"></div>
                            </div>
                            <div class="col-content col-content-2">
                                <!-- Content of Col 2 -->
                                <p>การเล่น</p>
                                <div class="ScoreShowBotton" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="--value:38"></div>
                            </div>
                            <div class="col-content col-content-3">
                                <!-- Content of Col 3 -->
                                <p>เนื้อเรื่อง</p>
                                <div class="ScoreShowBotton" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="--value:38"></div>
                            </div>
                            <div class="col-content col-content-4">
                                <!-- Content of Col 4 -->
                                <p>ประสิทธิภาพ</p>
                                <div class="ScoreShowBotton" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="--value:38"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-f">
                    <div class="left">
                        <!-- โค้ดที่คุณต้องการให้อยู่ซ้าย -->
                        <a href="">
                            <img class="gameImage-f" id="gameImageID" src="https://image.api.playstation.com/vulcan/ap/rnd/202203/1520/e6VbPQ56CBzVPgKmWdMMrICz.png">
                        </a>
                    </div>
                    <div class="content-f">
                        <!-- ส่วนเนื้อหาที่คุณต้องการให้อยู่ในกล่องสีขาว -->
                        <div class="hea">
                            <div class="circle-f">
                                <img id="userImage" src="images/clown.jpg">
                            </div>
                            <p class="game-name" id="gameID">
                                <a href="Search.php">Dead by Daylight</a>
                                <!-- <img src="images/more.png" class="report"> -->
                            <div class="dropdownBox dropdown dropdown-bottom">
                                <label tabindex="0">
                                    <img src="images/more.png" class="report">
                                </label>
                                <ul tabindex="0" class="dropdown-content z-[1] menu p-1 shadow rounded-box -ml-5 -mt-4 bg-[#e2384f] group hover:bg-[#dd1933]">
                                    <li><a>รายงาน</a></li>
                                </ul>
                            </div>
                            </p>
                        </div>
                        <!-- <div class="circle-f">
                            <img id="userImage" src="images/peo 1.jpg">
                        </div> -->
                        <div class="user-info-f">
                            <p id="user-name-f">ชื่อบัญชี</p>
                            <p id="postDate-f">วัน/เดือน/ปี</p>
                            <p id="lv-f">ระดับ : Gold</p>
                        </div>
                        <textarea id="userReview-f" rows="2" cols="65" placeholder="ข้อความเขียนรีวิว....." readonly></textarea>
                        <div class="container container-score">
                            <div class="col-content col-content-1">
                                <!-- Content of Col 1 -->
                                <p>คะแนนเกม</p>
                                <div class="ScoreShowBotton" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="--value:38"></div>
                            </div>
                            <div class="col-content col-content-2">
                                <!-- Content of Col 2 -->
                                <p>การเล่น</p>
                                <div class="ScoreShowBotton" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="--value:38"></div>
                            </div>
                            <div class="col-content col-content-3">
                                <!-- Content of Col 3 -->
                                <p>เนื้อเรื่อง</p>
                                <div class="ScoreShowBotton" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="--value:38"></div>
                            </div>
                            <div class="col-content col-content-4">
                                <!-- Content of Col 4 -->
                                <p>ประสิทธิภาพ</p>
                                <div class="ScoreShowBotton" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="--value:38"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sh-f">
                    <button class="ShowMoreIndex btn btn-outline w-96 text-lg">ดูเพิ่มเติม</button>
                </div>
            </div>
        </div>

        <div class="right-content">
            <a class="text-3xl">
                <span>โดดเด่น</span>
                <!-- <img class="image-icon" src="images/tooltip white.png" title="อ้างอิงจาก"> -->
                <div class="tooltip" data-tip="แนะนำโดยแอดมิน">
                    <img class="image-icon" src="images/tooltip white.png">
                </div>
            </a>

            <div class="main-box">
                <div class="image-box">
                    <a href="Search.php">
                        <img src="https://bloximages.newyork1.vip.townnews.com/dailynebraskan.com/content/tncms/assets/v3/editorial/a/45/a45a52a4-87a8-11ec-84c4-73068fc6732d/620060b069298.image.jpg?resize=1200%2C675" class="small-image">
                    </a>
                    <div class="top-left-box">
                        <div class="ScoreShowRight" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="--value:38"></div>
                    </div>
                </div>
                <div class="content-box-c">
                    <a href="Search.php" class="game-name-c">Dying Light 2 Stay Human</a>
                </div>
                <div class="bottom-box-c">
                    <img src="images/star black.png">
                    <p class="sum-review">65,151 ครั้ง</p>
                </div>
            </div>

            <div class="main-box">
                <div class="image-box">
                    <a href="Search.php">
                        <img src="imagesgame/cities 2.jpg" class="small-image">
                    </a>
                    <div class="top-left-box">
                        <div class="ScoreShowRight" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="--value:38"></div>
                    </div>
                </div>
                <div class="content-box-c">
                    <a href="Search.php" class="game-name-c">Cities: Skylines II</a>
                </div>
                <div class="bottom-box-c">
                    <img src="images/star black.png">
                    <p class="sum-review">53,456 ครั้ง</p>
                </div>
            </div>

            <div class="main-box">
                <div class="image-box">
                    <a href="Search.php">
                        <img src="https://image.api.playstation.com/vulcan/img/rnd/202010/2618/itbSm3suGHSSHIpmu9CCPBRy.jpg" class="small-image">
                    </a>
                    <div class="top-left-box">
                        <div class="ScoreShowRight" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="--value:38"></div>
                    </div>
                </div>
                <div class="content-box-c">
                    <a href="Search.php" class="game-name-c">The Last of Us Part II</a>
                </div>
                <div class="bottom-box-c">
                    <img src="images/star black.png">
                    <p class="sum-review">34,994 ครั้ง</p>
                </div>
            </div>

            <div class="main-box">
                <div class="image-box">
                    <a href="Search.php">
                        <img src="https://cdn2.unrealengine.com/egs-deadbydaylight-behaviourinteractive-s1-2560x1440-077a46d66d9e.jpg?h=270&quality=medium&resize=1&w=480" class="small-image">
                    </a>
                    <div class="top-left-box">
                        <div class="ScoreShowRight" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="--value:38"></div>
                    </div>
                </div>
                <div class="content-box-c">
                    <a href="Search.php" class="game-name-c">Dead by Daylight</a>
                </div>
                <div class="bottom-box-c">
                    <img src="images/star black.png">
                    <p class="sum-review">34,994 ครั้ง</p>
                </div>
            </div>

            <div class="main-box">
                <div class="image-box">
                    <a href="Search.php">
                        <img src="https://www.cnet.com/a/img/resize/c69b3de3253ef30374f628e48276389867965614/hub/2021/09/09/1a3fc047-89b6-4459-8ff6-9813839619fc/screen-shot-2021-09-09-at-4-41-55-pm.png?auto=webp&fit=crop&height=675&width=1200" class="small-image">
                    </a>
                    <div class="top-left-box">
                        <div class="ScoreShowRight" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="--value:38"></div>
                    </div>
                </div>
                <div class="content-box-c">
                    <a href="Search.php" class="game-name-c">Spider-Man 2</a>
                </div>
                <div class="bottom-box-c">
                    <img src="images/star black.png">
                    <p class="sum-review">34,994 ครั้ง</p>
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