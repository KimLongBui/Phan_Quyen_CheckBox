<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.css" integrity="sha512-mVHgwOt18poO8pV1oH45RyQKuDbCXJr2e0BzGTRr1XjV2eAp+BijRLYMP8KjdHJsQbXF/BG67eBijbOb2hw24g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.js" integrity="sha512-Y9Uk9SbwwPXkLHrtpS/aoD0SjErNdsy5EDhW8roeCDg6EBPxmvLbTUGZCvmG2xTyDlGiGLYqGv0953K8+5MgXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     <title>Document</title>
</head>

<style>
    body {
      margin: 0;
      font-family: "Lato", sans-serif;
    }

    .sidebar {
      margin: 0;
      padding: 0;
      width: 200px;
      background-color: #f1f1f1;
      position: fixed;
      height: 100%;
      overflow: auto;
    }

    .sidebar a {
      display: block;
      color: black;
      padding: 16px;
      text-decoration: none;
    }

    .sidebar a.active {
      background-color: #04AA6D;
      color: white;
    }

    .sidebar a:hover:not(.active) {
      background-color: #555;
      color: white;
    }

    div.content {
      margin-left: 200px;
      padding: 1px 16px;
      height: 1000px;
    }

    @media screen and (max-width: 700px) {
      .sidebar {
        width: 100%;
        height: auto;
        position: relative;
      }
      .sidebar a {float: left;}
      div.content {margin-left: 0;}
    }

    @media screen and (max-width: 400px) {
      .sidebar a {
        text-align: center;
        float: none;
      }
    }
    </style>

<body>

    <div class="flex gap-4">

        <div class="sidebar">
            @can('QIP Search')
                <a class="active" href="#home">QIP 品質檢驗看板</a>
            @endcan

            @can('QIP')
                <a href="">QIP品檢作業</a>
            @endcan

            @can('product-storage/year')
                <a href="">年度預估產能預估作業</a>
            @endcan


            @can('product-storage')
                <a href="">每日生產統計表作業</a>
            @endcan


            @can('QIP Print')
            <a href="/news">QIP Print</a>
            @endcan

            @can('Daily Mold')
                <a href="#contact">成型小時產量追蹤作業</a>
            @endcan

            @can('Daily Mold Detail')
                <a href={{('Phan_Quyen')}}>Daily Mold Detail</a>
            @endcan

        </div>

        <div class="py-4 overflow-y-auto overflow-x-scroll">
            <ul class="space-y-4 font-medium">
                <li class="">
                    <a href="#"
                        class="flex items-center text-gray-900 rounded-lg gap-1  dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700"
                        aria-controls="dropdown-example2" data-collapse-toggle="dropdown-example2">
                        <x-right-icon></x-right-icon>
                        <x-doc-icon></x-doc-icon>
                        <span class="ml-2">登入畫面</span>
                    </a>

                    <ul id="dropdown-example2" class="hidden py-2 space-y-2">
                        <li>
                            <a href="#"
                                class="flex items-center gap-2 w-full text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">
                                <x-doc-icon></x-doc-icon>
                                首頁
                            </a>
                        </li>



                        <li class="-ml-2">
                            <a href="#"
                                class="-ml-4 flex items-center gap-2 w-full text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100"
                                aria-controls="dropdown-example351" data-collapse-toggle="dropdown-example351">
                                <x-right-icon></x-right-icon>
                                <x-doc-icon></x-doc-icon>
                                <span class="">組織管理</span>
                            </a>
                            <ul id="dropdown-example351" class="hidden py-3 space-y-3 ml-10">
                                <li class="ml-4">
                                    <a href="#"
                                        class="-ml-4 flex items-center gap-2 w-full text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">
                                        <x-doc-icon></x-doc-icon>
                                        部門管理
                                    </a>
                                </li>

                                <li class="ml-4">
                                    <a href="#"
                                        class="-ml-10 flex items-center gap-2 w-full text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100" aria-controls="dropdown-example388" data-collapse-toggle="dropdown-example388">
                                        <x-right-icon></x-right-icon>
                                        <x-doc-icon></x-doc-icon>
                                        角色管理
                                    </a>

                                    <ul id="dropdown-example388" class="hidden py-3 space-y-3 ml-10">
                                        <li class="ml-4">
                                            <a href="#"
                                                class="-ml-12 flex items-center gap-2 w-full text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">
                                                <x-doc-icon></x-doc-icon>
                                                新增角色
                                            </a>
                                        </li>

                                        <li class="ml-4">
                                            <a href="#"
                                                class="-ml-12 flex items-center gap-2 w-full text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">
                                                <x-doc-icon></x-doc-icon>
                                                修改角色
                                            </a>
                                        </li>

                                        <li class="ml-4">
                                            <a href="#"
                                                class="-ml-12 flex items-center gap-2 w-full text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">
                                                <x-doc-icon></x-doc-icon>
                                                刪除
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="ml-4">
                                    <a href="#"
                                        class="-ml-4 flex items-center gap-2 w-full text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">
                                        <x-doc-icon></x-doc-icon>
                                        用戶管理
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="-ml-2">
                            <a href="#"
                                class="-ml-4 flex items-center gap-2 w-full text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100" aria-controls="dropdown-example411" data-collapse-toggle="dropdown-example411">
                                <x-right-icon></x-right-icon>
                                <x-doc-icon></x-doc-icon>
                                <span class="ml-2">品質管理</span>
                            </a>

                            <ul id="dropdown-example411" class="hidden py-3 space-y-3 ml-8">
                                <li class="">
                                    <a href="#"
                                        class="flex items-center gap-4 w-full text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">
                                        <x-doc-icon></x-doc-icon>
                                        QIP品檢作業
                                    </a>
                                </li>


                            </ul>
                        </li>

                        <li class="-ml-6">
                            <a href="#"
                                class="flex items-center gap-2 w-full text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100"
                                aria-controls="dropdown-example401" data-collapse-toggle="dropdown-example401">
                                <x-right-icon></x-right-icon>
                                <x-doc-icon></x-doc-icon>
                                <span class="ml-2">生產管理</span>
                            </a>
                            <ul id="dropdown-example401" class="hidden py-3 space-y-3 ml-8">
                                <li class="ml-4">
                                    <a href="#"
                                        class="-ml-4 flex items-center gap-2 w-full text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100" aria-controls="dropdown-example402" data-collapse-toggle="dropdown-example402">
                                        <x-right-icon></x-right-icon>
                                        <x-doc-icon></x-doc-icon>
                                        生管產量統計
                                    </a>

                                    {{-- {{route('psadd')}} --}}
                                    <ul id="dropdown-example402" class="hidden py-3 space-y-3 ml-8">
                                        <li class="ml-2">
                                            <a href="#"
                                                class="-ml-4 flex items-center gap-2 w-full text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100"
                                                aria-controls="dropdown-example402s" data-collapse-toggle="dropdown-example402s">

                                                <x-doc-icon></x-doc-icon>
                                                年度預估產能預估作業
                                            </a>
                                        </li>


                                        {{-- {{route('psyadd')}} --}}
                                        <li class="ml-2">
                                            <a href="#"
                                                class="-ml-4 flex items-center gap-2 w-full text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100"
                                                aria-controls="dropdown-example403s" data-collapse-toggle="dropdown-example403s">

                                                <x-doc-icon></x-doc-icon>
                                                每日生產統計表作業

                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="ml-4">
                                    <a href="#"
                                        class="-ml-4 flex items-center gap-2 w-full text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100" aria-controls="dropdown-example404" data-collapse-toggle="dropdown-example404">
                                        <x-right-icon></x-right-icon>
                                        <x-doc-icon></x-doc-icon>
                                        廠務產量作業
                                    </a>

                                    <ul id="dropdown-example404" class="hidden py-3 space-y-3 ml-4">
                                        <li class="ml-4">
                                            <a href="#"
                                                class="-ml-4 flex items-center gap-2 w-full text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100"
                                                aria-controls="dropdown-example404s" data-collapse-toggle="dropdown-example404s">
                                                <x-right-icon></x-right-icon>
                                                <x-doc-icon></x-doc-icon>
                                                指令訂單
                                            </a>
                                            <ul id="dropdown-example404s" class="hidden py-3 space-y-3 ml-4">
                                                <li class="ml-8">
                                                    <a href="#"
                                                        class="-ml-4 flex items-center gap-2 w-full text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">
                                                        <x-doc-icon></x-doc-icon>
                                                        2
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                    </ul>
                                </li>

                                <li class="ml-10">
                                    <a href="#"
                                        class="-ml-4 flex items-center gap-2 w-full text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">
                                        <x-doc-icon></x-doc-icon>
                                        3
                                    </a>
                                </li>

                                <li class="ml-4">
                                    <a href="#"
                                        class="-ml-4 flex items-center gap-2 w-full text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100" aria-controls="dropdown-example405" data-collapse-toggle="dropdown-example405">
                                        <x-right-icon></x-right-icon>
                                        <x-doc-icon></x-doc-icon>
                                        4
                                    </a>

                                    <ul id="dropdown-example405" class="hidden py-3 space-y-3 ml-8">
                                        <li class="ml-4">
                                            <a href="#"
                                                class="-ml-4 flex items-center gap-2 w-full text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">
                                                <x-doc-icon></x-doc-icon>
                                                5
                                            </a>
                                        </li>

                                        <li class="ml-4">
                                            <a href="#"
                                                class="-ml-4 flex items-center gap-2 w-full text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">
                                                <x-doc-icon></x-doc-icon>
                                                6
                                            </a>
                                        </li>

                                        <li class="ml-4">
                                            <a href="#"
                                                class="-ml-4 flex items-center gap-2 w-full text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">
                                                <x-doc-icon></x-doc-icon>
                                                7
                                            </a>
                                        </li>

                                        <li class="ml-4">
                                            <a href="#"
                                                class="-ml-4 flex items-center gap-2 w-full text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">
                                                <x-doc-icon></x-doc-icon>
                                                8
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="ml-4">
                                    <a href="#"
                                        class="-ml-4 flex items-center gap-2 w-full text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100" aria-controls="dropdown-example406" data-collapse-toggle="dropdown-example406">
                                        <x-right-icon></x-right-icon>
                                        <x-doc-icon></x-doc-icon>
                                        9
                                    </a>

                                    <ul id="dropdown-example406" class="hidden py-3 space-y-3 ml-8">
                                        <li class="ml-4">
                                            <a href="#"
                                                class="-ml-4 flex items-center gap-2 w-full text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">
                                                <x-doc-icon></x-doc-icon>
                                                10
                                            </a>
                                        </li>

                                        <li class="ml-4">
                                            <a href="#"
                                                class="-ml-4 flex items-center gap-2 w-full text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">
                                                <x-doc-icon></x-doc-icon>
                                                11
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="ml-4">
                                    <a href="#"
                                        class="-ml-4 flex items-center gap-2 w-full text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100" aria-controls="dropdown-example407" data-collapse-toggle="dropdown-example407">
                                        <x-right-icon></x-right-icon>
                                        <x-doc-icon></x-doc-icon>
                                        RFID 配對作業
                                    </a>

                                    <ul id="dropdown-example407" class="hidden py-3 space-y-3 ml-8">
                                        <li class="ml-4">
                                            <a href="#"
                                                class="-ml-4 flex items-center gap-2 w-full text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">
                                                <x-doc-icon></x-doc-icon>
                                                1
                                            </a>
                                        </li>

                                        <li class="ml-4">
                                            <a href="#"
                                                class="-ml-4 flex items-center gap-2 w-full text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">
                                                <x-doc-icon></x-doc-icon>
                                                2
                                            </a>
                                        </li>

                                        <li class="ml-4">
                                            <a href="#"
                                                class="-ml-4 flex items-center gap-2 w-full text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">
                                                <x-doc-icon></x-doc-icon>
                                                3
                                            </a>
                                        </li>

                                        <li class="ml-4">
                                            <a href="#"
                                                class="-ml-4 flex items-center gap-2 w-full text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">
                                                <x-doc-icon></x-doc-icon>
                                                4
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="ml-4">
                                    <a href="#"
                                        class="-ml-4 flex items-center gap-2 w-full text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100" aria-controls="dropdown-example408" data-collapse-toggle="dropdown-example408">

                                        <x-doc-icon></x-doc-icon>
                                        大包裝巡檢檢驗作業
                                    </a>
                                </li>



                                <li class="ml-4">
                                    <a href="#"
                                        class="-ml-4 flex items-center gap-2 w-full text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100" aria-controls="dropdown-example409" data-collapse-toggle="dropdown-example409">
                                        <x-right-icon></x-right-icon>
                                        <x-doc-icon></x-doc-icon>
                                        製程步驟設置
                                    </a>

                                    <ul id="dropdown-example409" class="hidden py-3 space-y-3 ml-8">
                                        <li class="ml-8">
                                            <a href="#"
                                                class="-ml-4 flex items-center gap-2 w-full text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">
                                                <x-doc-icon></x-doc-icon>
                                                1
                                            </a>
                                        </li>

                                        <li class="ml-8">
                                            <a href="#"
                                                class="-ml-4 flex items-center gap-2 w-full text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">
                                                <x-doc-icon></x-doc-icon>
                                                2
                                            </a>
                                        </li>

                                        <li class="ml-2">
                                            <a href="#"
                                                class="-ml-4 flex items-center gap-2 w-full text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100"
                                                aria-controls="dropdown-example409s" data-collapse-toggle="dropdown-example409s">
                                                <x-right-icon></x-right-icon>
                                                <x-doc-icon></x-doc-icon>
                                                3
                                            </a>
                                            <ul id="dropdown-example409s" class="hidden py-3 space-y-3 ml-8">
                                                <li class="ml-4">
                                                    <a href="#"
                                                        class="-ml-4 flex items-center gap-2 w-full text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">
                                                        <x-doc-icon></x-doc-icon>
                                                        1
                                                    </a>
                                                </li>

                                                <li class="ml-4">
                                                    <a href="#"
                                                        class="-ml-4 flex items-center gap-2 w-full text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">
                                                        <x-doc-icon></x-doc-icon>
                                                    2
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                            </ul>
                        </li>


                        <li class="-ml-6 -mt-8">
                            <a href="#"
                                class="flex items-center gap-2 w-full text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100"
                                aria-controls="dropdown-example413" data-collapse-toggle="dropdown-example413">
                                <x-right-icon></x-right-icon>
                                <x-doc-icon></x-doc-icon>
                                <span class="ml-2">廠務報表管理</span>
                            </a>
                            <ul id="dropdown-example413" class="hidden py-3 space-y-3 ml-10">
                                <li class="ml-4">
                                    <a href="#"
                                        class="flex items-center gap-2 w-full text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">
                                        <x-doc-icon></x-doc-icon>
                                        QIP品檢報表列印
                                    </a>
                                </li>

                                <li class="ml-4">
                                    <a href="#"
                                        class="flex items-center gap-2 w-full text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">

                                        <x-doc-icon></x-doc-icon>
                                        *製程生產計劃差異

                                    </a>
                                </li>

                                <li class="ml-4">
                                    <a href="#"
                                        class="flex items-center gap-2 w-full text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">

                                        <x-doc-icon></x-doc-icon>
                                        *機台生產紀錄
                                    </a>
                                </li>

                                <li class="ml-4">
                                    <a href="#"
                                        class="flex items-center gap-2 w-full text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">

                                        <x-doc-icon></x-doc-icon>
                                        良品率

                                    </a>
                                </li>

                                <li class="ml-4">
                                    <a href="#"
                                        class="flex items-center gap-2 w-full text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">

                                        <x-doc-icon></x-doc-icon>
                                        生產目標達成率

                                    </a>
                                </li>

                                <li class="ml-4">
                                    <a href="#"
                                        class="flex items-center gap-2 w-full text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">

                                        <x-doc-icon></x-doc-icon>
                                        機台生產日報表
                                    </a>
                                </li>

                                <li class="ml-4">
                                    <a href="#"
                                        class="flex items-center gap-2 w-full text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">

                                        <x-doc-icon></x-doc-icon>
                                        維修原因統計分析
                                    </a>
                                </li>

                                <li class="ml-4">
                                    <a href="#"
                                        class="flex items-center gap-2 w-full text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">

                                        <x-doc-icon></x-doc-icon>
                                        資源生產日報表
                                    </a>
                                </li>

                                <li class="ml-4">
                                    <a href="#"
                                        class="flex items-center gap-2 w-full text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">

                                        <x-doc-icon></x-doc-icon>
                                    1
                                    </a>
                                </li>

                                <li class="ml-4">
                                    <a href="#"
                                        class="flex items-center gap-2 w-full text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">

                                        <x-doc-icon></x-doc-icon>
                                        2
                                    </a>
                                </li>
                            </ul>
                        </li>


                    </ul>
                </li>

                {{-- <li class="-ml-12 mt-2">
                    <a href="#"
                        class="flex items-center gap-2 w-full text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100"
                        aria-controls="dropdown-example415" data-collapse-toggle="dropdown-example415">
                        <x-right-icon></x-right-icon>
                        <x-doc-icon></x-doc-icon>
                        <span class="ml-2">{{__('electronic_board')}}</span>
                    </a>
                    <ul id="dropdown-example415" class="hidden py-3 space-y-3 ml-10">
                        <li class="ml-4">
                            <a href="#"
                                class="flex items-center gap-2 w-full text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">
                                <x-doc-icon></x-doc-icon>
                                {{__('Daily_molding_hour_output_tracking_table')}}
                            </a>
                        </li>

                        <li class="ml-4">
                            <a href="#"
                                class="flex items-center gap-2 w-full text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">
                                <x-doc-icon></x-doc-icon>
                                {{__('Daily_Production_Statistics')}}
                            </a>
                        </li>

                        <li class="-ml-2">
                            <a href="#"
                                class="flex items-center gap-2 w-full text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100"
                                aria-controls="dropdown-example415s" data-collapse-toggle="dropdown-example415s">
                                <x-right-icon></x-right-icon>
                                <x-doc-icon></x-doc-icon>
                                {{__('Molding_line_temperature_control_status')}}
                            </a>
                            <ul id="dropdown-example415s" class="hidden py-3 space-y-3 ml-10">
                                <li class="ml-2">
                                    <a href="#"
                                        class="flex items-center gap-2 w-full text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">
                                        <x-doc-icon></x-doc-icon>
                                        {{__('produce')}}
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="-ml-2">
                            <a href="#"
                                class="flex items-center gap-2 w-full text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100"
                                aria-controls="dropdown-example415ss" data-collapse-toggle="dropdown-example415ss">
                                <x-right-icon></x-right-icon>
                                <x-doc-icon></x-doc-icon>
                                {{__('QIP_Quality_Inspection_Kanban')}}
                            </a>
                            <ul id="dropdown-example415ss" class="hidden py-3 space-y-3 ml-10">
                                <li class="ml-2">
                                    <a href="#"
                                        class="flex items-center gap-2 w-full text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">
                                        <x-doc-icon></x-doc-icon>
                                        {{__('produce')}}
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="ml-4">
                            <a href="#"
                                class="flex items-center gap-2 w-full text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">

                                <x-doc-icon></x-doc-icon>
                                {{__('QIP_Quality_Inspection_Kanban - Phnom_Penh')}}
                            </a>
                        </li>

                        <li class="ml-4">
                            <a href="#"
                                class="flex items-center gap-2 w-full text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">

                                <x-doc-icon></x-doc-icon>
                                {{__('QIP_Quality_Inspection_Kanban - Phnom Penh - Graphics')}}
                            </a>
                        </li>

                        <li class="ml-4">
                            <a href="#"
                                class="flex items-center gap-2 w-full text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">

                                <x-doc-icon></x-doc-icon>
                                {{__('Copy_of_QIP_Quality_Inspection_Kanban - Phnom Penh - Graphic')}}
                            </a>
                        </li>

                        <li class="ml-4">
                            <a href="#"
                                class="flex items-center gap-2 w-full text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">

                                <x-doc-icon></x-doc-icon>
                                {{__('dashboard_management')}}
                            </a>
                        </li>

                        <li class="ml-4">
                            <a href="#"
                                class="flex items-center gap-2 w-full text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">

                                <x-doc-icon></x-doc-icon>
                                {{__('production_order_dashboard')}}
                            </a>
                        </li>

                        <li class="ml-4">
                            <a href="#"
                                class="flex items-center gap-2 w-full text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">

                                <x-doc-icon></x-doc-icon>
                                {{__('processing_sequence_board')}}
                            </a>
                        </li>

                        <li class="ml-4">
                            <a href="#"
                                class="flex items-center gap-2 w-full text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">

                                <x-doc-icon></x-doc-icon>
                                {{__('quality_exception_board')}}
                            </a>
                        </li>
                    </ul>
                </li> --}}


                    <form action="{{ route('logout') }}" id="logout-form" method="post">
                        @csrf
                    </form>
                </li>
            </ul>

        </div>


        <div class="w-1/2 mt-2">

            <div style="margin-left: 230px;" class="flex gap-2">
                {{-- <input type="checkbox" name="permission" class="w-6 h-6 ml-8" id="mainCheckbox">
                <label for="" class="mr-8">是否為系統管理員</label> --}}

                <div>
                    <form action="{{route('searchUser')}}" method="GET" class="flex gap-1">
                        <input type="text" name="search" placeholder="Nhập tên tài khoản" class="w-auto h-9 ml-8 ">
                        <button class="border px-3 py-1 rounded" style="background-color: red">
                            <svg class="" width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M15.7955 15.8111L21 21M18 10.5C18 14.6421 14.6421 18 10.5 18C6.35786 18 3 14.6421 3 10.5C3 6.35786 6.35786 3 10.5 3C14.6421 3 18 6.35786 18 10.5Z" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                        </button>
                    </form>

                </div>
            </div>


            <form action="{{ route('updateUserPermission') }}" method="POST" style="margin-left: 230px;">
                @csrf
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 border border-black mt-4 mb-4">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400 border border-black">
                        <tr>
                            <th scope="col" class="px-6 py-3 border border-black whitespace-nowrap">
                                User name
                            </th>

                            @foreach ($permissions as $permission)
                            <th scope="col" class="px-6 py-3 border border-black">
                            {{ $permission->title }}
                            </th>
                            @endforeach


                        </tr>
                    </thead>

                    <tbody class="border border-black">
                        @foreach ($users as $user )
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 border border-black">

                            <td class="px-6 py-3 border border-black whitespace-nowrap">
                            {{ $user->name }}
                            </td>

                            {{-- @foreach ($roles as $role)
                            <td class="w-4 border border-black px-8 py-3">
                                <div class="flex items-center">
                                    <input id="checkbox-table-search-1" type="checkbox" name="roles[]" value="{{ $role->id }}" {{ $user->role_id == $role->id ? 'checked' : '' }} class="subCheckbox w-6 h-6 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" disabled>

                                    <label for="checkbox-table-search-1" class="sr-only">
                                        {{ $role->title }}
                                    </label>
                                </div>
                            </td>
                            @endforeach --}}


                            {{-- @foreach ($permissions as $permission)
                                <td class="w-4 border border-black px-8 py-3">
                                    @foreach ($events as $event)
                                    <div class="flex items-center">
                                        <input id="checkbox-table-search-1" type="checkbox" name="permissions[{{ $event->id }}][]" value="{{ $permission->id }}" {{ $user->permissions->contains($permission->id) ? 'checked' : '' }} class="subCheckbox w-6 h-6 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">

                                        <label for="checkbox-table-search-1" class="sr-only">
                                            {{ $permission->title }}
                                        </label>
                                    </div>
                                    @endforeach
                                </td>
                            @endforeach --}}


                             @foreach ($permissions as $permission)
                                <td class="w-4 border border-black px-8 py-3">

                                    <div class="flex items-center">
                                        <input id="checkbox-table-search-1" type="checkbox" name="permissions[{{ $user->id }}][]" value="{{ $permission->id }}" {{ in_array($permission->id, $user->permissions->pluck('id')->toArray()) ? 'checked' : '' }} class="subCheckbox w-6 h-6 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">

                                        <label for="checkbox-table-search-1" class="sr-only">
                                            {{ $permission->title }}
                                        </label>
                                    </div>

                                </td>
                            @endforeach

                        </tr>
                        @endforeach


                    </tbody>
                </table>
                <button type="submit" class="border py-2 px-6 bg-cyan-200">Cập nhật quyền</button>
            </form>

        </div>

    </div>



     {{-- sự kiện khi chọn checkbox chính thì sẽ cho phép chọn các checkbox khác --}}
        <script>
            const mainCheckbox = document.getElementById('mainCheckbox');
            const subCheckboxes = document.querySelectorAll('.subCheckbox');

            mainCheckbox.addEventListener('change', function () {
                const isChecked = this.checked;

                subCheckboxes.forEach(function (checkbox) {
                    checkbox.disabled = !isChecked;
                });
            });
        </script>
</body>
</html>
