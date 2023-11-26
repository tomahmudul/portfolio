@extends('layouts.default')

@section('content')

<section class="py-5 bg-light">
   <div class="container text-left">
     <div class="row justify-content-center">
       <div class="col-12 col-lg-10 col-xl-8">
         
         <h3>Leave your message here</h3>
         <form id="contact_form" name="contact_form" method="post" action="/contact">
            @csrf
       
            <div class="text-left">
               @include('includes.message')
            </div>

            <div class="mb-5 row">
               <div class="col">
                     <label>Name</label>
                     <input type="text" maxlength="50" class="form-control" id="name" name="name">                     
               </div>
               <div class="col">
                  <label for="email_addr">Email address</label>
                  <input type="email" maxlength="50" class="form-control" id="email_addr" name="email"
                     placeholder="name@example.com">
            </div>
            
            </div>            
            <div class="mb-5">
               <label for="message">Message</label>
               <textarea class="form-control" id="message" name="message" rows="5"></textarea>
            </div>
            <button type="submit" class="btn btn-primary px-4 btn-lg">Post</button>
         </form>

       </div>
     </div>
   </div>
 </section>

@stop