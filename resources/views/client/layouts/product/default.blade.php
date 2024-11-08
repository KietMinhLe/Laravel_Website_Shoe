<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    @vite('resources/css/app.css')
    <title>@yield('name', 'Trang Sản Phẩm')</title>
</head>

<body>
    <div id="app">
        <div class="content-wrapper">
            <header>
                <div class="main-header">
                    <div class="header-contact max-w-screen-xl mx-auto">
                        <div class="container">
                            <div class="text-center py-2">
                                <strong>Hotline: 0903.150.443 Free Ship cho đơn hàng trên 1tr đồng</strong>
                            </div>
                        </div>
                    </div>
                    <div class="header-general bg-[rgba(13,13,13,1)]">`
                        <div class="header-general-main max-w-screen-xl mx-auto flex flex-wrap justify-between">
                            <div class="inner-logo my-auto">
                                <img src="https://saigonsneaker.com/wp-content/uploads/2022/02/new-logo-ss-2021-1-150x63.png.avif"
                                    alt="logo">
                            </div>
                            <div class="inner-search justify-center flex-1 mx-20">
                                <form action="" class="my-5 flex">
                                    <input class="py-3 pl-5 rounded-3xl min-w-full relative" type="text"
                                        placeholder="Nhap tu khoa...">
                                    <button class="text-white text-xl obsolute">
                                        <i class="text-black text-2xl px-2 fa-solid fa-magnifying-glass"></i>
                                    </button>
                                </form>
                            </div>
                            <div class="inner-user-cart text-white flex justify-end my-auto px-6 items-center">
                                <div class="my-account h-auto p-4 mx-2">
                                    <a class="text-3xl" href=""><i class="fa-solid fa-user"></i></a>
                                </div>
                                <div class="my-cart h-auto p-4 mx-2">
                                    <a class="text-3xl" href=""><i class="fa-solid fa-cart-shopping"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-nav ">
                        <div>
                            
                        </div>
                    </div>
                </div>
            </header>
            <div class="container pt-[20px]">
                <div class="align-middle text-[30px] text-blue-900 font-bold flex justify-center">Sản Phẩm</div>
                <div class="flex">
                    <div class="w-1/3 p-4">
                        <div>
                            <div class="align-middle flex justify-center font-bold mb-6 text-[25px]">Size</div>
                            <div class="align-middle flex justify-center">
                                <ul class="space-y-5">
                                    <li>
                                        <a href="#"
                                            class="m-2 p-[0.5rem] bg-slate-200 rounded border-solid hover:text-white hover:bg-black transition duration-300">37</a>
                                        <a href="#"
                                            class="m-2 p-[0.5rem] bg-slate-200 rounded border-solid hover:text-white hover:bg-black transition duration-300">38</a>
                                        <a href="#"
                                            class="m-2 p-[0.5rem] bg-slate-200 rounded border-solid hover:text-white hover:bg-black transition duration-300">39</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="m-2 p-[0.5rem] bg-slate-200 rounded border-solid hover:text-white hover:bg-black transition duration-300">40</a>
                                        <a href="#"
                                            class="m-2 p-[0.5rem] bg-slate-200 rounded border-solid hover:text-white hover:bg-black transition duration-300">41</a>
                                        <a href="#"
                                            class="m-2 p-[0.5rem] bg-slate-200 rounded border-solid hover:text-white hover:bg-black transition duration-300">42</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="m-2 p-[0.5rem] bg-slate-200 rounded border-solid hover:text-white hover:bg-black transition duration-300">43</a>
                                        <a href="#"
                                            class="m-2 p-[0.5rem] bg-slate-200 rounded border-solid hover:text-white hover:bg-black transition duration-300">44</a>
                                        <a href="#"
                                            class="m-2 p-[0.5rem] bg-slate-200 rounded border-solid hover:text-white hover:bg-black transition duration-300">45</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <br> <br>
                        <hr class="mx-auto pb-5 w-1/2 border-t border-gray-300">

                        <div>
                            <div class="align-middle flex justify-center font-bold mb-4 text-[25px]">Thương Hiệu</div>
                            <div class="img">
                                <div class="align-middle flex justify-center">
                                    <a href=""
                                        class="w-[100px]  bg-slate-200 rounded border-solid m-3 hover:bg-slate-700 transition duration-300"><img
                                            src="https://saigonsneaker.com/wp-content/uploads/2020/05/Adidas-Saigon-Sneaker.png"
                                            alt="Adidas"></a>
                                    <a href=""
                                        class="w-[100px]  bg-slate-200 rounded border-solid m-3 hover:bg-slate-700 transition duration-300"><img
                                            src="https://saigonsneaker.com/wp-content/uploads/2020/05/Nike-Saigon-Sneaker.png"
                                            alt="Nike"></a>
                                </div>
                                <div class="align-middle flex justify-center">
                                    <a href=""
                                        class="w-[100px]  bg-slate-200 rounded border-solid m-3 hover:bg-slate-700 transition duration-300"><img
                                            src="https://saigonsneaker.com/wp-content/uploads/2020/05/Vans-Saigon-Sneaker.png.webp"
                                            alt="Vans"></a>
                                    <a href=""
                                        class="w-[100px]  bg-slate-200 rounded border-solid m-3 hover:bg-slate-700 transition duration-300"><img
                                            src="https://saigonsneaker.com/wp-content/uploads/2020/05/Converse-Saigon-Sneaker.png.webp"
                                            alt="Converse"></a>
                                </div>
                                <div class="align-middle flex justify-center">
                                    <a href=""
                                        class="w-[100px]  bg-slate-200 rounded border-solid m-3 hover:bg-slate-700 transition duration-300"><img
                                            src="https://saigonsneaker.com/wp-content/uploads/2020/05/McQueen-Saigon-Sneaker.png.webp"
                                            alt="McQueen"></a>

                                    <a href=""
                                        class="w-[100px]  bg-slate-200 rounded border-solid m-3 hover:bg-slate-700 transition duration-300"><img
                                            src="https://saigonsneaker.com/wp-content/uploads/2020/05/Balenciaga-Saigon-Sneaker.png.webp"
                                            alt="Balenciaga"></a>
                                </div>
                            </div>
                        </div>

                        <br>
                        <hr class="mx-auto pb-5 w-1/2 border-t border-gray-300">

                        <div>
                            <div class="align-middle flex justify-center font-bold mb-4 text-[25px]">Nổi Bật</div>
                            <div class="mx-auto pb-5 w-1/2 border-gray-300">
                                <ul>
                                    <li
                                        class="flex justify-center mb-3 bg-slate-200 rounded border-solid hover:text-white hover:bg-black hover:font-bold transition duration-300">
                                        <a href="" class="m-3">Luxury Brand</a>
                                    </li>
                                    <li
                                        class="flex justify-center mb-3 bg-slate-200 rounded border-solid hover:text-white hover:bg-black hover:font-bold transition duration-300">
                                        <a href="" class="m-3 ">Phản quang</a>
                                    </li>
                                    <li
                                        class="flex justify-center mb-3 bg-slate-200 rounded border-solid hover:text-white hover:bg-black hover:font-bold transition duration-300">
                                        <a href="" class="m-3 ">Retro</a>
                                    </li>
                                    {{-- <li
                                class="flex justify-center mb-3 bg-slate-200 rounded border-solid  hover:text-white hover:bg-black hover:font-bold transition duration-300">
                                <a href="" class="m-3">Đế cao</a>
                            </li>
                            <li
                                class="flex justify-center mb-3 bg-slate-200 rounded border-solid  hover:text-white hover:bg-black hover:font-bold transition duration-300">
                                <a href="" class="m-3 ">Vintage</a>
                            </li>
                            <li
                                class="flex justify-center mb-3 bg-slate-200 rounded border-solid hover:text-white hover:bg-black hover:font-bold transition duration-300">
                                <a href="" class="m-3 ">Cổ
                                    Thấp</a>
                            </li> --}}
                                </ul>
                            </div>
                        </div>
                        <hr class="mx-auto pb-5 w-1/2 border-t border-gray-300">
                        <div>
                            <div class="align-middle flex justify-center font-bold mb-4 text-[25px]">Giá</div>
                            <div class="mx-auto pb-5 w-1/2 border-gray-300">
                                <ul>
                                    <li
                                        class="flex justify-center mb-3 bg-slate-200 rounded border-solid hover:text-white hover:bg-black hover:font-bold transition duration-300">
                                        <a href="" class="m-3">200
                                            - 500</a>
                                    </li>
                                    <li
                                        class="flex justify-center mb-3 bg-slate-200 rounded border-solid hover:text-white hover:bg-black hover:font-bold transition duration-300">
                                        <a href="" class="m-3">500
                                            - 1tr</a>
                                    </li>
                                    <li
                                        class="flex justify-center mb-3 bg-slate-200 rounded border-solid hover:text-white hover:bg-black hover:font-bold transition duration-300">
                                        <a href="" class="m-3">1tr
                                            - 2tr</a>
                                    </li>
                                    <li
                                        class="flex justify-center mb-3 bg-slate-200 rounded border-solid hover:text-white hover:bg-black hover:font-bold transition duration-300">
                                        <a href="" class="m-3">2tr
                                            trở lên</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="w-2/3 p-4 ">
                        <div class="flex">
                            <div class="w-1/2 pt-1">
                                <a href="">Trang Chủ /</a>
                                <a href="">Sản Phẩm</a>
                            </div>
                            <div class="w-1/2 justify-end flex pr-[90px]">
                                <div class="relative inline-block">
                                    <select id="sort"
                                        class="mt-1 block w-[150px] h-[30px] bg-white border text-[20px] border-gray-300 font-bold rounded focus:outline-none focus:ring focus:ring-gray-400">
                                        <option hover:bg-black">Bán chạy</option>
                                        <option hover:bg-black">Mới nhất</option>
                                        <option hover:bg-black">Giá tăng dần</option>
                                        <option hover:bg-black">Giá giảm dần</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <br>

                        <div>
                            <div class="flex justify-evenly pb-[20px]">
                                <div class="max-w-[220px] max-h-[400px] border border-gray-300 rounded-lg p-4">
                                    <div
                                        class="bg-red-600 text-white text-xs font-bold px-2 py-1 inline-block rounded-tl-md rounded-br-md mb-2">
                                        NEW
                                    </div>
                                    <a href="" class="flex justify-center "><img
                                            src="https://saigonsneaker.com/wp-content/uploads/2024/11/4-430x430.jpg"
                                            alt="New Balance 574 Rain Cloud Maple" class="w-[70%]"></a>
                                    <a href=""
                                        class="text-gray-800 font-bold text-base pt-[20px] flex justify-center">
                                        New Balance 574 Rain Cloud Maple <br>
                                    </a>
                                    <a href="" class="text-gray-500 text-xs font-bold uppercase ">
                                        New Balance
                                    </a>
                                    <p class="text-gray-900 font-bold text-base">
                                        1,895,000₫
                                    </p>
                                </div>
                                <div class="max-w-[220px] max-h-[400px] border border-gray-300 rounded-lg p-4">
                                    <div
                                        class="bg-red-600 text-white text-xs font-bold px-2 py-1 inline-block rounded-tl-md rounded-br-md mb-2">
                                        NEW
                                    </div>
                                    <a href="" class="flex justify-center "><img
                                            src="https://saigonsneaker.com/wp-content/uploads/2024/11/4-430x430.jpg"
                                            alt="New Balance 574 Rain Cloud Maple" class="w-[70%]"></a>
                                    <a href=""
                                        class="text-gray-800 font-bold text-base pt-[20px] flex justify-center">
                                        New Balance 574 Rain Cloud Maple <br>
                                    </a>
                                    <a href="" class="text-gray-500 text-xs font-bold uppercase ">
                                        New Balance
                                    </a>
                                    <p class="text-gray-900 font-bold text-base">
                                        1,895,000₫
                                    </p>
                                </div>
                                <div class="max-w-[220px] max-h-[400px] border border-gray-300 rounded-lg p-4">
                                    <div
                                        class="bg-red-600 text-white text-xs font-bold px-2 py-1 inline-block rounded-tl-md rounded-br-md mb-2">
                                        NEW
                                    </div>
                                    <a href="" class="flex justify-center "><img
                                            src="https://saigonsneaker.com/wp-content/uploads/2024/11/4-430x430.jpg"
                                            alt="New Balance 574 Rain Cloud Maple" class="w-[70%]"></a>
                                    <a href=""
                                        class="text-gray-800 font-bold text-base pt-[20px] flex justify-center">
                                        New Balance 574 Rain Cloud Maple <br>
                                    </a>
                                    <a href="" class="text-gray-500 text-xs font-bold uppercase ">
                                        New Balance
                                    </a>
                                    <p class="text-gray-900 font-bold text-base">
                                        1,895,000₫
                                    </p>
                                </div>
                                <div class="max-w-[220px] max-h-[400px] border border-gray-300 rounded-lg p-4">
                                    <div
                                        class="bg-red-600 text-white text-xs font-bold px-2 py-1 inline-block rounded-tl-md rounded-br-md mb-2">
                                        NEW
                                    </div>
                                    <a href="" class="flex justify-center "><img
                                            src="https://saigonsneaker.com/wp-content/uploads/2024/11/4-430x430.jpg"
                                            alt="New Balance 574 Rain Cloud Maple" class="w-[70%]"></a>
                                    <a href=""
                                        class="text-gray-800 font-bold text-base pt-[20px] flex justify-center">
                                        New Balance 574 Rain Cloud Maple <br>
                                    </a>
                                    <a href="" class="text-gray-500 text-xs font-bold uppercase ">
                                        New Balance
                                    </a>
                                    <p class="text-gray-900 font-bold text-base">
                                        1,895,000₫
                                    </p>
                                </div>
                            </div>
                            <div class="flex justify-evenly pb-[20px]">
                                <div class="max-w-[220px] max-h-[400px] border border-gray-300 rounded-lg p-4">
                                    <div
                                        class="bg-red-600 text-white text-xs font-bold px-2 py-1 inline-block rounded-tl-md rounded-br-md mb-2">
                                        NEW
                                    </div>
                                    <a href="" class="flex justify-center "><img
                                            src="https://saigonsneaker.com/wp-content/uploads/2024/11/4-430x430.jpg"
                                            alt="New Balance 574 Rain Cloud Maple" class="w-[70%]"></a>
                                    <a href=""
                                        class="text-gray-800 font-bold text-base pt-[20px] flex justify-center">
                                        New Balance 574 Rain Cloud Maple <br>
                                    </a>
                                    <a href="" class="text-gray-500 text-xs font-bold uppercase ">
                                        New Balance
                                    </a>
                                    <p class="text-gray-900 font-bold text-base">
                                        1,895,000₫
                                    </p>
                                </div>
                                <div class="max-w-[220px] max-h-[400px] border border-gray-300 rounded-lg p-4">
                                    <div
                                        class="bg-red-600 text-white text-xs font-bold px-2 py-1 inline-block rounded-tl-md rounded-br-md mb-2">
                                        NEW
                                    </div>
                                    <a href="" class="flex justify-center "><img
                                            src="https://saigonsneaker.com/wp-content/uploads/2024/11/4-430x430.jpg"
                                            alt="New Balance 574 Rain Cloud Maple" class="w-[70%]"></a>
                                    <a href=""
                                        class="text-gray-800 font-bold text-base pt-[20px] flex justify-center">
                                        New Balance 574 Rain Cloud Maple <br>
                                    </a>
                                    <a href="" class="text-gray-500 text-xs font-bold uppercase ">
                                        New Balance
                                    </a>
                                    <p class="text-gray-900 font-bold text-base">
                                        1,895,000₫
                                    </p>
                                </div>
                                <div class="max-w-[220px] max-h-[400px] border border-gray-300 rounded-lg p-4">
                                    <div
                                        class="bg-red-600 text-white text-xs font-bold px-2 py-1 inline-block rounded-tl-md rounded-br-md mb-2">
                                        NEW
                                    </div>
                                    <a href="" class="flex justify-center "><img
                                            src="https://saigonsneaker.com/wp-content/uploads/2024/11/4-430x430.jpg"
                                            alt="New Balance 574 Rain Cloud Maple" class="w-[70%]"></a>
                                    <a href=""
                                        class="text-gray-800 font-bold text-base pt-[20px] flex justify-center">
                                        New Balance 574 Rain Cloud Maple <br>
                                    </a>
                                    <a href="" class="text-gray-500 text-xs font-bold uppercase ">
                                        New Balance
                                    </a>
                                    <p class="text-gray-900 font-bold text-base">
                                        1,895,000₫
                                    </p>
                                </div>
                                <div class="max-w-[220px] max-h-[400px] border border-gray-300 rounded-lg p-4">
                                    <div
                                        class="bg-red-600 text-white text-xs font-bold px-2 py-1 inline-block rounded-tl-md rounded-br-md mb-2">
                                        NEW
                                    </div>
                                    <a href="" class="flex justify-center "><img
                                            src="https://saigonsneaker.com/wp-content/uploads/2024/11/4-430x430.jpg"
                                            alt="New Balance 574 Rain Cloud Maple" class="w-[70%]"></a>
                                    <a href=""
                                        class="text-gray-800 font-bold text-base pt-[20px] flex justify-center">
                                        New Balance 574 Rain Cloud Maple <br>
                                    </a>
                                    <a href="" class="text-gray-500 text-xs font-bold uppercase ">
                                        New Balance
                                    </a>
                                    <p class="text-gray-900 font-bold text-base">
                                        1,895,000₫
                                    </p>
                                </div>
                            </div>
                            <div class="flex justify-evenly pb-[20px]">
                                <div class="max-w-[220px] max-h-[400px] border border-gray-300 rounded-lg p-4">
                                    <div
                                        class="bg-red-600 text-white text-xs font-bold px-2 py-1 inline-block rounded-tl-md rounded-br-md mb-2">
                                        NEW
                                    </div>
                                    <a href="" class="flex justify-center "><img
                                            src="https://saigonsneaker.com/wp-content/uploads/2024/11/4-430x430.jpg"
                                            alt="New Balance 574 Rain Cloud Maple" class="w-[70%]"></a>
                                    <a href=""
                                        class="text-gray-800 font-bold text-base pt-[20px] flex justify-center">
                                        New Balance 574 Rain Cloud Maple <br>
                                    </a>
                                    <a href="" class="text-gray-500 text-xs font-bold uppercase ">
                                        New Balance
                                    </a>
                                    <p class="text-gray-900 font-bold text-base">
                                        1,895,000₫
                                    </p>
                                </div>
                                <div class="max-w-[220px] max-h-[400px] border border-gray-300 rounded-lg p-4">
                                    <div
                                        class="bg-red-600 text-white text-xs font-bold px-2 py-1 inline-block rounded-tl-md rounded-br-md mb-2">
                                        NEW
                                    </div>
                                    <a href="" class="flex justify-center "><img
                                            src="https://saigonsneaker.com/wp-content/uploads/2024/11/4-430x430.jpg"
                                            alt="New Balance 574 Rain Cloud Maple" class="w-[70%]"></a>
                                    <a href=""
                                        class="text-gray-800 font-bold text-base pt-[20px] flex justify-center">
                                        New Balance 574 Rain Cloud Maple <br>
                                    </a>
                                    <a href="" class="text-gray-500 text-xs font-bold uppercase ">
                                        New Balance
                                    </a>
                                    <p class="text-gray-900 font-bold text-base">
                                        1,895,000₫
                                    </p>
                                </div>
                                <div class="max-w-[220px] max-h-[400px] border border-gray-300 rounded-lg p-4">
                                    <div
                                        class="bg-red-600 text-white text-xs font-bold px-2 py-1 inline-block rounded-tl-md rounded-br-md mb-2">
                                        NEW
                                    </div>
                                    <a href="" class="flex justify-center "><img
                                            src="https://saigonsneaker.com/wp-content/uploads/2024/11/4-430x430.jpg"
                                            alt="New Balance 574 Rain Cloud Maple" class="w-[70%]"></a>
                                    <a href=""
                                        class="text-gray-800 font-bold text-base pt-[20px] flex justify-center">
                                        New Balance 574 Rain Cloud Maple <br>
                                    </a>
                                    <a href="" class="text-gray-500 text-xs font-bold uppercase ">
                                        New Balance
                                    </a>
                                    <p class="text-gray-900 font-bold text-base">
                                        1,895,000₫
                                    </p>
                                </div>
                                <div class="max-w-[220px] max-h-[400px] border border-gray-300 rounded-lg p-4">
                                    <div
                                        class="bg-red-600 text-white text-xs font-bold px-2 py-1 inline-block rounded-tl-md rounded-br-md mb-2">
                                        NEW
                                    </div>
                                    <a href="" class="flex justify-center "><img
                                            src="https://saigonsneaker.com/wp-content/uploads/2024/11/4-430x430.jpg"
                                            alt="New Balance 574 Rain Cloud Maple" class="w-[70%]"></a>
                                    <a href=""
                                        class="text-gray-800 font-bold text-base pt-[20px] flex justify-center">
                                        New Balance 574 Rain Cloud Maple <br>
                                    </a>
                                    <a href="" class="text-gray-500 text-xs font-bold uppercase ">
                                        New Balance
                                    </a>
                                    <p class="text-gray-900 font-bold text-base">
                                        1,895,000₫
                                    </p>
                                </div>
                            </div>
                            <div class="flex justify-evenly pb-[20px]">
                                <div class="max-w-[220px] max-h-[400px] border border-gray-300 rounded-lg p-4">
                                    <div
                                        class="bg-red-600 text-white text-xs font-bold px-2 py-1 inline-block rounded-tl-md rounded-br-md mb-2">
                                        NEW
                                    </div>
                                    <a href="" class="flex justify-center "><img
                                            src="https://saigonsneaker.com/wp-content/uploads/2024/11/4-430x430.jpg"
                                            alt="New Balance 574 Rain Cloud Maple" class="w-[70%]"></a>
                                    <a href=""
                                        class="text-gray-800 font-bold text-base pt-[20px] flex justify-center">
                                        New Balance 574 Rain Cloud Maple <br>
                                    </a>
                                    <a href="" class="text-gray-500 text-xs font-bold uppercase ">
                                        New Balance
                                    </a>
                                    <p class="text-gray-900 font-bold text-base">
                                        1,895,000₫
                                    </p>
                                </div>
                                <div class="max-w-[220px] max-h-[400px] border border-gray-300 rounded-lg p-4">
                                    <div
                                        class="bg-red-600 text-white text-xs font-bold px-2 py-1 inline-block rounded-tl-md rounded-br-md mb-2">
                                        NEW
                                    </div>
                                    <a href="" class="flex justify-center "><img
                                            src="https://saigonsneaker.com/wp-content/uploads/2024/11/4-430x430.jpg"
                                            alt="New Balance 574 Rain Cloud Maple" class="w-[70%]"></a>
                                    <a href=""
                                        class="text-gray-800 font-bold text-base pt-[20px] flex justify-center">
                                        New Balance 574 Rain Cloud Maple <br>
                                    </a>
                                    <a href="" class="text-gray-500 text-xs font-bold uppercase ">
                                        New Balance
                                    </a>
                                    <p class="text-gray-900 font-bold text-base">
                                        1,895,000₫
                                    </p>
                                </div>
                                <div class="max-w-[220px] max-h-[400px] border border-gray-300 rounded-lg p-4">
                                    <div
                                        class="bg-red-600 text-white text-xs font-bold px-2 py-1 inline-block rounded-tl-md rounded-br-md mb-2">
                                        NEW
                                    </div>
                                    <a href="" class="flex justify-center "><img
                                            src="https://saigonsneaker.com/wp-content/uploads/2024/11/4-430x430.jpg"
                                            alt="New Balance 574 Rain Cloud Maple" class="w-[70%]"></a>
                                    <a href=""
                                        class="text-gray-800 font-bold text-base pt-[20px] flex justify-center">
                                        New Balance 574 Rain Cloud Maple <br>
                                    </a>
                                    <a href="" class="text-gray-500 text-xs font-bold uppercase ">
                                        New Balance
                                    </a>
                                    <p class="text-gray-900 font-bold text-base">
                                        1,895,000₫
                                    </p>
                                </div>
                                <div class="max-w-[220px] max-h-[400px] border border-gray-300 rounded-lg p-4">
                                    <div
                                        class="bg-red-600 text-white text-xs font-bold px-2 py-1 inline-block rounded-tl-md rounded-br-md mb-2">
                                        NEW
                                    </div>
                                    <a href="" class="flex justify-center "><img
                                            src="https://saigonsneaker.com/wp-content/uploads/2024/11/4-430x430.jpg"
                                            alt="New Balance 574 Rain Cloud Maple" class="w-[70%]"></a>
                                    <a href=""
                                        class="text-gray-800 font-bold text-base pt-[20px] flex justify-center">
                                        New Balance 574 Rain Cloud Maple <br>
                                    </a>
                                    <a href="" class="text-gray-500 text-xs font-bold uppercase ">
                                        New Balance
                                    </a>
                                    <p class="text-gray-900 font-bold text-base">
                                        1,895,000₫
                                    </p>
                                </div>
                            </div>


                            <div class="flex justify-evenly">
                                <div class="max-w-[220px] max-h-[400px] border border-gray-300 rounded-lg p-4">
                                    <div
                                        class="bg-red-600 text-white text-xs font-bold px-2 py-1 inline-block rounded-tl-md rounded-br-md mb-2">
                                        NEW
                                    </div>
                                    <a href="" class="flex justify-center "><img
                                            src="https://saigonsneaker.com/wp-content/uploads/2024/11/4-430x430.jpg"
                                            alt="New Balance 574 Rain Cloud Maple" class="w-[70%]"></a>
                                    <a href=""
                                        class="text-gray-800 font-bold text-base pt-[20px] flex justify-center">
                                        New Balance 574 Rain Cloud Maple <br>
                                    </a>
                                    <a href="" class="text-gray-500 text-xs font-bold uppercase ">
                                        New Balance
                                    </a>
                                    <p class="text-gray-900 font-bold text-base">
                                        1,895,000₫
                                    </p>
                                </div>
                                <div class="max-w-[220px] max-h-[400px] border border-gray-300 rounded-lg p-4">
                                    <div
                                        class="bg-red-600 text-white text-xs font-bold px-2 py-1 inline-block rounded-tl-md rounded-br-md mb-2">
                                        NEW
                                    </div>
                                    <a href="" class="flex justify-center "><img
                                            src="https://saigonsneaker.com/wp-content/uploads/2024/11/4-430x430.jpg"
                                            alt="New Balance 574 Rain Cloud Maple" class="w-[70%]"></a>
                                    <a href=""
                                        class="text-gray-800 font-bold text-base pt-[20px] flex justify-center">
                                        New Balance 574 Rain Cloud Maple <br>
                                    </a>
                                    <a href="" class="text-gray-500 text-xs font-bold uppercase ">
                                        New Balance
                                    </a>
                                    <p class="text-gray-900 font-bold text-base">
                                        1,895,000₫
                                    </p>
                                </div>
                                <div class="max-w-[220px] max-h-[400px] border border-gray-300 rounded-lg p-4">
                                    <div
                                        class="bg-red-600 text-white text-xs font-bold px-2 py-1 inline-block rounded-tl-md rounded-br-md mb-2">
                                        NEW
                                    </div>
                                    <a href="" class="flex justify-center "><img
                                            src="https://saigonsneaker.com/wp-content/uploads/2024/11/4-430x430.jpg"
                                            alt="New Balance 574 Rain Cloud Maple" class="w-[70%]"></a>
                                    <a href=""
                                        class="text-gray-800 font-bold text-base pt-[20px] flex justify-center">
                                        New Balance 574 Rain Cloud Maple <br>
                                    </a>
                                    <a href="" class="text-gray-500 text-xs font-bold uppercase ">
                                        New Balance
                                    </a>
                                    <p class="text-gray-900 font-bold text-base">
                                        1,895,000₫
                                    </p>
                                </div>
                                <div class="max-w-[220px] max-h-[400px] border border-gray-300 rounded-lg p-4">
                                    <div
                                        class="bg-red-600 text-white text-xs font-bold px-2 py-1 inline-block rounded-tl-md rounded-br-md mb-2">
                                        NEW
                                    </div>
                                    <a href="" class="flex justify-center "><img
                                            src="https://saigonsneaker.com/wp-content/uploads/2024/11/4-430x430.jpg"
                                            alt="New Balance 574 Rain Cloud Maple" class="w-[70%]"></a>
                                    <a href=""
                                        class="text-gray-800 font-bold text-base pt-[20px] flex justify-center">
                                        New Balance 574 Rain Cloud Maple <br>
                                    </a>
                                    <a href="" class="text-gray-500 text-xs font-bold uppercase ">
                                        New Balance
                                    </a>
                                    <p class="text-gray-900 font-bold text-base">
                                        1,895,000₫
                                    </p>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>


        </div>

</body>

</html>
