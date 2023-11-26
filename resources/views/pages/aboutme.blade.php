@extends('layouts.default')

@section('content')

<section class="py-5">
   <div class="container">
     <div class="row align-items-center justify-content-center">
       <div class="col-12 col-md-9 col-lg-6 col-xl-5">
         <div class="mx-auto mb-5">
           <h2 class="display-5 fw-bold mt-2 mb-4">About Me</h2>
           <p class="lead text-muted mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque massa nibh, pulvinar vitae aliquet nec, accumsan aliquet orci.</p>           
         </div>
       </div>
       <div class="col-12 col-md-9 col-lg-6 col-xl-5 offset-xl-2">
         <div class="px-4 py-5 px-lg-5 bg-light rounded mx-auto">
           <div class="d-flex">            
             <span class="d-flex flex-shrink-0 me-3 me-lg-5 justify-content-center align-items-center rounded-circle bg-primary text-white" style="width: 25px;height: 25px">1</span>
             <div>
               <p class="lead text-muted">PHP</p>               
             </div>
           </div>
           <div class="d-flex">
             <span class="d-flex flex-shrink-0 me-3 me-lg-5 justify-content-center align-items-center rounded-circle bg-primary text-white" style="width: 25px;height: 25px">2</span>
             <div>
               <p class="lead text-muted">MySQL</p>
             </div>
           </div>
           <div class="d-flex">
             <span class="d-flex flex-shrink-0 me-3 me-lg-5 justify-content-center align-items-center rounded-circle bg-primary text-white" style="width: 25px;height: 25px">3</span>
             <div>
               <p class="lead text-muted">Javascript</p>
             </div>
           </div>
           <div class="d-flex">
            <span class="d-flex flex-shrink-0 me-3 me-lg-5 justify-content-center align-items-center rounded-circle bg-primary text-white" style="width: 25px;height: 25px">4</span>
            <div>
              <p class="lead text-muted">Wordpress</p>
            </div>
          </div>
         </div>
       </div>
     </div>
   </div>
 </section> 

@stop