 @extends('layouts.admin')
 @section('content')
     <main>
         <div class="flex justify-between">
             <div>
                 <h4 class="text-sm font-bold text-indigo-600">Hola nombre del admin,</h4>
                 <h1 class="text-4xl font-bold text-indigo-900 mt-">Bienvenido!</h1>
             </div>
             <div class=" flex ">
                 <div class=" m-auto">
                     {{ Auth::user()->name }}

                 </div>
                 <div class=" w-10 m-auto mx-2">
                     <img src="https://toppng.com/uploads/preview/flat-faces-icons-circle-persona-icon-115628952315akhsf8ncl.png"
                         alt="" srcset="">
                 </div>
             </div>
         </div>

     </main>
 @endsection
