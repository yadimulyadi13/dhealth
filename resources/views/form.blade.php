<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                var tambahButton = document.querySelector("#tambahButton");
                tambahButton.addEventListener("click", function() {
                    var tbody = document.querySelector("#tableBody");
                    var newRow = document.createElement("tr");
                    newRow.className = "border-b border-dashed last:border-b-0";
                    var columnsContent = [
                        {
                            content: "#3",
                            class: "p-3 pl-0"
                        },
                        {
                            content: "ALK00000614",
                            class: "p-3 pr-0"
                        },
                        {
                            content: "KASSA NON-XRAY 10 CM X 10 CM <a href='#'><div class='inline-flex items-center px-3 py-1 text-red-500 rounded-full gap-x-2 bg-red-100/60 dark:bg-gray-800'><svg width='12' height='12' viewBox='0 0 12 12' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M9 3L3 9M3 3L9 9' stroke='currentColor' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/></svg> Hapus </div></a>",
                            class: "p-3 pr-0"
                        },
                        {
                            content: "<div class='mb-4 flex items-center'><input type='text' name='signa' placeholder='Ketikan signa ...' class='w-full rounded-md py-2.5 px-4 border text-sm outline-[#007bff]'></div>1X SEHARI 0.5 TABLET (MALAM)",
                            class: "p-3 pr-12"
                        },
                        {
                            content: "<div class='mb-4 flex items-center'><input type='number' name ='qty' placeholder='Ketikan qty ...' class='w-full rounded-md py-2.5 px-4 border text-sm outline-[#007bff]'/></div><div class='inline-flex items-center px-3 py-1 rounded-full gap-x-2 text-emerald-500 bg-emerald-100/60 dark:bg-gray-800'><svg width='12' height='12' viewBox='0 0 12 12' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M10 3L4.5 8.5L2 6' stroke='currentColor' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/></svg><h2 class='text-sm font-normal'>Stok : 999</h2></div>",
                            class: "p-3 pr-12"
                        }
                    ];
                    columnsContent.forEach(function(column) {
                        var td = document.createElement("td");
                        td.innerHTML = column.content;
                        td.className = column.class;
                        newRow.appendChild(td);
                    });
                    tbody.appendChild(newRow);
                });
            });
        </script>
    </head>
    <body class="flex items-center justify-center" style="background: #edf2f7;">
        <div class="bg-[#ecf2f7] flex items-center justify-center min-h-screen font-nunito text-slate-600">
            <section class="max-w-[968px] w-full mx-4">
                <ul class="w-full bg-white p-8 mt-5 rounded-lg gap-3 flex items-start justify-center shadow-[0px_10px_15px_9px_#DDE4F1] flex-col sm:flex-row relative overflow-hidden mb-2">
                    <li class="pr-12 overflow-hidden grow">
                        <span class="absolute slide-in-top bg-gradient-to-r from-[#6c73ff] to-[#676bbe] text-white px-24 py-[4px] rounded-br-lg left-0 top-0 text-sm">E-Prescription</span>
                        <div class="flex flex-wrap -mx-3">
                            <div class="w-full max-w-full px-3 mx-auto">
                                <div class="relative flex-[1_auto] flex flex-col break-words min-w-0 bg-clip-border rounded-[.95rem] bg-white m-2">
                                    <div class="relative flex flex-col min-w-0 break-words border border-dashed bg-clip-border rounded-2xl border-stone-200 bg-light/30">
                                        <!-- card body  -->
                                        <div class="flex-auto block py-2 pt-2">
                                            <div class="px-9 pt-5 overflow-x-auto">
                                                <div class="mb-4 flex items-center">
                                                    <input type='text' name ="name" placeholder='Ketikan nama obat ...' class="w-full rounded-md py-2.5 px-4 border text-sm outline-[#007bff]" />
                                                    <button id="tambahButton" class="ml-2 rounded-lg bg-blue-500 p-2 text-white hover:bg-blue-600">Tambah</button>
                                                </div>
                                                <div class="flex">
                                                    <label class="mr-4">
                                                        <input type="checkbox" class="mr-2" />
                                                        RACIKAN
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="w-full bg-white p-8  rounded-lg gap-3 flex items-start justify-center shadow-[0px_10px_15px_9px_#DDE4F1] flex-col sm:flex-row relative overflow-hidden mb-2">
                    <li class="pr-12 overflow-hidden grow">
                        <span class="absolute slide-in-top bg-gradient-to-r from-[#35e78e] to-[#036d38] text-white px-24 py-[4px] rounded-br-lg left-0 top-0 text-sm">Non Racikan</span>
                        <div class="flex flex-wrap -mx-3">
                            <div class="w-full max-w-full px-3 mx-auto">
                                <div class="relative flex-[1_auto] flex flex-col break-words min-w-0 bg-clip-border rounded-[.95rem] bg-white m-2">
                                    <div class="relative flex flex-col min-w-0 break-words border border-dashed bg-clip-border rounded-2xl border-stone-200 bg-light/30">
                                        <!-- card body  -->
                                        <div class="flex-auto block py-8 pt-6 px-9">
                                            <div class="overflow-x-auto">
                                                <table class="w-full my-0 align-middle text-dark border-neutral-200">
                                                    <thead class="align-bottom">
                                                            <tr class="font-semibold text-[0.95rem] text-secondary-dark">
                                                            <th class="pb-3 text-start w-[2px]">NO</th>
                                                            <th class="pb-3 text-end min-w-[100px]">KODE</th>
                                                            <th class="pb-3 text-end">NAMA</th>
                                                            <th class="pb-3 pr-12 text-end min-w-[175px]">KETERANGAN</th>
                                                            <th class="pb-3 pr-12 text-end min-w-[170px]">QTY</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="tableBody">
                                                        <tr class="border-b border-dashed last:border-b-0">
                                                            <td class="p-3 pl-0">
                                                                #1
                                                            </td>
                                                            <td class="p-3 pr-0">
                                                                ALK00000614
                                                            </td>
                                                            <td class="p-3 pr-0">
                                                                KASSA NON-XRAY 10 CM X 10 CM
                                                                <a href="#">
                                                                    <div class="inline-flex items-center px-3 py-1 text-red-500 rounded-full gap-x-2 bg-red-100/60 dark:bg-gray-800">
                                                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M9 3L3 9M3 3L9 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                        </svg> Hapus 
                                                                    </div>
                                                                </a>
                                                            </td>
                                                            <td class="p-3 pr-12">
                                                                <div class="mb-4 flex items-center">
                                                                    <input type='text' name ="name" placeholder='Ketikan signa ...' class="w-full rounded-md py-2.5 px-4 border text-sm outline-[#007bff]" />
                                                                </div>
                                                                1X SEHARI 0.5 TABLET (MALAM)
                                                            </td>
                                                            <td class="p-3 pr-12">
                                                                <div class="mb-4 flex items-center">
                                                                    <input type='number' name ="qty" placeholder='Ketikan qty ...' class="w-full rounded-md py-2.5 px-4 border text-sm outline-[#007bff]"/>
                                                                </div>
                                                                <div class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 text-emerald-500 bg-emerald-100/60 dark:bg-gray-800">
                                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M10 3L4.5 8.5L2 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                    </svg>

                                                                    <h2 class="text-sm font-normal">Stok : 999</h2>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="border-b border-dashed last:border-b-0">
                                                            <td class="p-3 pl-0">
                                                                <div class="flex items-center">
                                                                    #2
                                                                </div>
                                                            </td>
                                                            <td class="p-3 pr-0">
                                                                ALK00000095
                                                            </td>
                                                            <td class="p-3 pr-0">
                                                                CADD EXTENSION SET 76 CM/ 30 IN (21-7045-24)
                                                                <a href="#">
                                                                    <div class="inline-flex items-center px-3 py-1 text-red-500 rounded-full gap-x-2 bg-red-100/60 dark:bg-gray-800">
                                                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M9 3L3 9M3 3L9 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                        </svg> Hapus 
                                                                    </div>
                                                                </a>
                                                            </td>
                                                            <td class="p-3 pr-12">
                                                                <div class="mb-4 flex items-center">
                                                                    <input type='text' name ="signa" placeholder='Ketikan signa ...' class="w-full rounded-md py-2.5 px-4 border text-sm outline-[#007bff]" />
                                                                </div>
                                                                1X SEHARI 4 ML
                                                            </td>
                                                            <td class="p-3 pr-12">
                                                                <div class="mb-4 flex items-center">
                                                                    <input type='number' name ="qty" placeholder='Ketikan qty ...' class="w-full rounded-md py-2.5 px-4 border text-sm outline-[#007bff]"/>
                                                                </div>
                                                                <div class="inline-flex items-center px-3 py-1 text-orange-500 rounded-full gap-x-2 bg-orange-100/60 dark:bg-orange-800">
                                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M9 3L3 9M3 3L9 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                    </svg>

                                                                    <h2 class="text-sm font-normal">Stok : 5</h2>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="w-full bg-white p-8  rounded-lg gap-3 flex items-start justify-center shadow-[0px_10px_15px_9px_#DDE4F1] flex-col sm:flex-row relative overflow-hidden mb-2">
                    <li class="pr-12 overflow-hidden grow">
                        <span class="absolute slide-in-top bg-gradient-to-r from-[#ffa852] to-[#e27000] text-white px-24 py-[4px] rounded-br-lg left-0 top-0 text-sm">Racikan #1</span>
                        <div class="flex flex-wrap -mx-3">
                            <div class="w-full max-w-full px-3 mx-auto">
                                <div class="relative flex-[1_auto] flex flex-col break-words min-w-0 bg-clip-border rounded-[.95rem] bg-white m-2">
                                    <div class="relative flex flex-col min-w-0 break-words border border-dashed bg-clip-border rounded-2xl border-stone-200 bg-light/30">
                                        <!-- card body  -->
                                        <div class="flex-auto block py-2 pt-2">
                                            <div class="overflow-x-auto">
                                                <form class="rounded-lg bg-white p-10 shadow-lg">
                                                    <div class="mb-4 flex items-center">
                                                        <input type='text' name ="name" placeholder='Ketikan nama obat ...' class="w-full rounded-md py-2.5 px-4 border text-sm outline-[#007bff]" />
                                                        <button class="ml-2 rounded-lg bg-blue-500 p-2 text-white hover:bg-blue-600">Tambah</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3">
                            <div class="w-full max-w-full px-3 mx-auto">
                                <div class="relative flex-[1_auto] flex flex-col break-words min-w-0 bg-clip-border rounded-[.95rem] bg-white m-2">
                                    <div class="relative flex flex-col min-w-0 break-words border border-dashed bg-clip-border rounded-2xl border-stone-200 bg-light/30">
                                        <!-- card header -->
                                        <div class="px-9 pt-5 justify-between items-stretch flex-wrap min-h-[70px] pb-0 bg-transparent">
                                            <div class="mb-4 flex items-center">
                                                <input type='text' name ="name" placeholder='Ketikan nama racikan ...' class="w-full rounded-md py-2.5 px-4 border text-sm outline-[#007bff]" />
                                            </div>
                                        </div>
                                        <!-- end card header -->
                                        <!-- card body  -->
                                        <div class="flex-auto block py-8 pt-6 px-9">
                                            <div class="overflow-x-auto">
                                                <table class="w-full my-0 align-middle text-dark border-neutral-200">
                                                    <thead class="align-bottom">
                                                            <tr class="font-semibold text-[0.95rem] text-secondary-dark">
                                                            <th class="pb-3 text-start w-[2px]">NO</th>
                                                            <th class="pb-3 text-end min-w-[100px]">KODE</th>
                                                            <th class="pb-3 text-end">NAMA</th>
                                                            <th class="pb-3 pr-12 text-end min-w-[175px]">KETERANGAN</th>
                                                            <th class="pb-3 pr-12 text-end min-w-[175px]">QTY</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="border-b border-dashed last:border-b-0">
                                                            <td class="p-3 pl-0">
                                                                #1
                                                            </td>
                                                            <td class="p-3 pr-0">
                                                                ALK00000614
                                                            </td>
                                                            <td class="p-3 pr-0">
                                                                KASSA NON-XRAY 10 CM X 10 CM
                                                                <a href="#">
                                                                    <div class="inline-flex items-center px-3 py-1 text-red-500 rounded-full gap-x-2 bg-red-100/60 dark:bg-gray-800">
                                                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M9 3L3 9M3 3L9 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                        </svg> Hapus 
                                                                    </div>
                                                                </a>
                                                            </td>
                                                            <td class="p-3 pr-12">
                                                                <div class="mb-4 flex items-center">
                                                                    <input type='text' name ="name" placeholder='Ketikan signa ...' class="w-full rounded-md py-2.5 px-4 border text-sm outline-[#007bff]" />
                                                                </div>
                                                                1X SEHARI 0.5 TABLET (MALAM)
                                                            </td>
                                                            <td class="p-3 pr-12">
                                                                <div class="mb-4 flex items-center">
                                                                    <input type='number' name ="qty" placeholder='Ketikan qty ...' class="w-full rounded-md py-2.5 px-4 border text-sm outline-[#007bff]"/>
                                                                </div>
                                                                <div class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 text-emerald-500 bg-emerald-100/60 dark:bg-gray-800">
                                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M10 3L4.5 8.5L2 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                    </svg>

                                                                    <h2 class="text-sm font-normal">Stok : 999</h2>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="border-b border-dashed last:border-b-0">
                                                            <td class="p-3 pl-0">
                                                                <div class="flex items-center">
                                                                    #2
                                                                </div>
                                                            </td>
                                                            <td class="p-3 pr-0">
                                                                ALK00000095
                                                            </td>
                                                            <td class="p-3 pr-0">
                                                                CADD EXTENSION SET 76 CM/ 30 IN (21-7045-24)
                                                                <a href="#">
                                                                    <div class="inline-flex items-center px-3 py-1 text-red-500 rounded-full gap-x-2 bg-red-100/60 dark:bg-gray-800">
                                                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M9 3L3 9M3 3L9 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                        </svg> Hapus 
                                                                    </div>
                                                                </a>
                                                            </td>
                                                            <td class="p-3 pr-12">
                                                                <div class="mb-4 flex items-center">
                                                                    <input type='text' name ="name" placeholder='Ketikan signa ...' class="w-full rounded-md py-2.5 px-4 border text-sm outline-[#007bff]" />
                                                                </div>
                                                                1X SEHARI 4 ML
                                                            </td>
                                                            <td class="p-3 pr-12">
                                                                <div class="mb-4 flex items-center">
                                                                    <input type='number' name ="qty" placeholder='Ketikan qty ...' class="w-full rounded-md py-2.5 px-4 border text-sm outline-[#007bff]"/>
                                                                </div>
                                                                <div class="inline-flex items-center px-3 py-1 text-orange-500 rounded-full gap-x-2 bg-orange-100/60 dark:bg-orange-800">
                                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M9 3L3 9M3 3L9 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                    </svg>

                                                                    <h2 class="text-sm font-normal">Stok : 5</h2>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <button class="mb-20 px-20 py-4 text-white bg-[#f1626e] mx-auto block mt-5 rounded-xl text-lg transition-all duration-150 ease-in hover:bg-[#d14f5a]">
                    Submit
                </button>
            </section>
        </div>
    </body>
</html>
