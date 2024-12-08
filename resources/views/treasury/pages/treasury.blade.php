@extends('treasury.treasuryindex')
<!-- main treasury dash -->
@section('content')

<div class="p-4 sm:ml-64">
    <div class="p-4  dark:border-gray-700">
    
        <div class="totalFunds w-50 p-2 my-4 mx-auto text-center border rounded bg-light py-10">
            <p class="text-2xl text-dark font-weight-bold"><strong>Total Funds:</strong> ₱{{ number_format($funds->funds, 2) }}</p>
        </div>

        <div class="mb-4 border-b border-gray-200 dark:border-black-700 w-fit">
            <ul class="flex flex-wrap justify-center -mb-px text-sm font-medium text-center" id="default-styled-tab" data-tabs-toggle="#default-styled-tab-content" data-tabs-active-classes="text-green-600 hover:text-green-600 dark:text-green-500 dark:hover:text-green-500 border-green-600 dark:border-green-500" data-tabs-inactive-classes="dark:border-transparent text-black-500 hover:text-black-600 dark:text-black-400 border-black-100 hover:border-black-300 dark:border-black-700 dark:hover:text-black-300" role="tablist">
                <li class="me-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-styled-tab" data-tabs-target="#styled-profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Manage Purpose</button>
                </li>
                <li class="me-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-black-600 hover:border-black-300 dark:hover:text-black-300" id="dashboard-styled-tab" data-tabs-target="#styled-dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Manage Payments</button>
                </li>
                <li class="me-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-black-600 hover:border-black-300 dark:hover:text-black-300" id="settings-styled-tab" data-tabs-target="#styled-settings" type="button" role="tab" aria-controls="settings" aria-selected="false">Manage Payrolls</button>
                </li>
            </ul>
        </div>
       
       <div id="default-styled-tab-content justify-center">
           <div class="hidden p-4 rounded-lg bg-white -50 dark:bg-black-800" id="styled-profile" role="tabpanel" aria-labelledby="profile-tab">

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
           <table class="w-full text-sm text-center rtl:text-right text-black-500 dark:text-black-400 bg-[#2F4A2D]">
           <thead class="text-base text-white uppercase bg-white-50 dark:bg-white-700 dark:text-white-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    ID
                </th>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Price
                </th>
                <th scope="col" class="px-6 py-3">
                    Type
                </th>
                <th scope="col" class="px-6 py-3">
                    Created
                </th>
                <th scope="col" class="px-6 py-3">
                    Updated
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
           </thead>
               <tbody>
               @foreach (json_decode($products) as $product)
               <tr class="text-black p-8" style="background:#F3F2ED;">
                   <td>{{$product->id}}</td>
                   <td>{{$product->name}}</td>
                   <td>{{$product->price}}</td>
                   <td>{{$product->type}}</td>
                   <td>{{ $product->created_at}}</td>
                   <td>{{ $product->updated_at}}</td>
                   <td> 
                   <a href="{{route('edit_purpose', $product->id)}}"> <button id="updateProductButton">
                     <svg class="w-6 h-6 text-[#5A8277] dark:text-green" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M11.32 6.176H5c-1.105 0-2 .949-2 2.118v10.588C3 20.052 3.895 21 5 21h11c1.105 0 2-.948 2-2.118v-7.75l-3.914 4.144A2.46 2.46 0 0 1 12.81 16l-2.681.568c-1.75.37-3.292-1.263-2.942-3.115l.536-2.839c.097-.512.335-.983.684-1.352l2.914-3.086Z" clip-rule="evenodd"/>
                    <path fill-rule="evenodd" d="M19.846 4.318a2.148 2.148 0 0 0-.437-.692 2.014 2.014 0 0 0-.654-.463 1.92 1.92 0 0 0-1.544 0 2.014 2.014 0 0 0-.654.463l-.546.578 2.852 3.02.546-.579a2.14 2.14 0 0 0 .437-.692 2.244 2.244 0 0 0 0-1.635ZM17.45 8.721 14.597 5.7 9.82 10.76a.54.54 0 0 0-.137.27l-.536 2.84c-.07.37.239.696.588.622l2.682-.567a.492.492 0 0 0 .255-.145l4.778-5.06Z" clip-rule="evenodd"/>
                        </svg>
                    </button> </a>

                <form action="{{route('delete_purpose', $product->id)}}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure you want to delete this product?');">
                                        <svg class="w-6 h-6 text-red-800 dark:text-red" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z" />
                                        </svg>
                                    </button>
                </form>
            </tr>
            @endforeach
            </tbody>
        </table>
            </div>
    
        <div class="hidden p-4 rounded-lg bg-black-50 dark:bg-gray-800" id="styled-dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
        <div class="paidtable d-flex justify-content-center align-items-start ms-5" >
<div class="card d-flex justify-content-center align-items-center w-100 ms-5 mx-auto p-3">
<table class="table">
  <thead>

         <tr>
            <th scope="col" class="px-6 py-3">
                ID
            </th>
            <th scope="col" class="px-6 py-3">
                Name
            </th>
            <th scope="col" class="px-6 py-3">
                Purpose
            </th>
            <th scope="col" class="px-6 py-3">
                Price
            </th>
            <th scope="col" class="px-6 py-3">
                Amount
            </th>
            <th scope="col" class="px-6 py-3">
                Change
            </th>
            <th scope="col" class="px-6 py-3">
                Type
            </th>
            <th scope="col" class="px-6 py-3">
                IsPaid
            </th>
            <th scope="col" class="px-6 py-3">
                Created
            </th>
            <th scope="col" class="px-6 py-3">
                Updated
            </th>
            <th scope="col" class="px-6 py-3">
                Action
            </th>
        </tr>
  </thead>
    <tbody>
        @foreach (json_decode($payments) as $payment)
            <tr class="text-black" style="background:#000000;">
                <td>{{ $payment->id}}</td>
                <td>{{ $payment->name}}</td>
                <td>{{ $payment->purpose}}</td>
                <td>{{ $payment->price}}</td>
                <td>{{ $payment->amount}}</td>
                <td>{{ $payment->change}}</td>
                <td>{{ $payment->type}}</td>
                <td>{{ $payment->isPaid}}</td>
                <td>{{ $payment->created_at}}</td>
                <td>{{ $payment->updated_at}}</td>
                <td>  
                     <a href="{{route('edit_payment',$payment->id)}}"> <button id="updateProductButton">
                     <svg class="w-6 h-6 text-[#5A8277] dark:text-green" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M11.32 6.176H5c-1.105 0-2 .949-2 2.118v10.588C3 20.052 3.895 21 5 21h11c1.105 0 2-.948 2-2.118v-7.75l-3.914 4.144A2.46 2.46 0 0 1 12.81 16l-2.681.568c-1.75.37-3.292-1.263-2.942-3.115l.536-2.839c.097-.512.335-.983.684-1.352l2.914-3.086Z" clip-rule="evenodd"/>
                        <path fill-rule="evenodd" d="M19.846 4.318a2.148 2.148 0 0 0-.437-.692 2.014 2.014 0 0 0-.654-.463 1.92 1.92 0 0 0-1.544 0 2.014 2.014 0 0 0-.654.463l-.546.578 2.852 3.02.546-.579a2.14 2.14 0 0 0 .437-.692 2.244 2.244 0 0 0 0-1.635ZM17.45 8.721 14.597 5.7 9.82 10.76a.54.54 0 0 0-.137.27l-.536 2.84c-.07.37.239.696.588.622l2.682-.567a.492.492 0 0 0 .255-.145l4.778-5.06Z" clip-rule="evenodd"/>
                    </svg>
                        </button></a>

                   <form action="{{route('delete_payment', $payment->id)}}" method="POST" style="display:inline;">
                         @csrf
                         @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure you want to delete this product?');">
                        <svg class="w-6 h-6 text-red-800 dark:text-red" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z" />
                        </svg>
                        </button>
                    </form>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
</div>

           </div>
           <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-settings" role="tabpanel" aria-labelledby="settings-tab">
               <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Settings tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
           </div>
           <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-contacts" role="tabpanel" aria-labelledby="contacts-tab">
               <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Contacts tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
           </div>
       </div>
   </div>
</div>

@endsection