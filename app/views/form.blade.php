 <!DOCTYPE html>
 <html lang="en">
 <head>
 <title>URL Shortener</title>
 <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}">
 </head>
 <body>
 <div class="container">
     <div class="row">
         <div class="col-lg-12">
            <h2 class=" text-center">Url Shortener</h2>
         </div>
     </div>

<hr/>
 <div class="row">
        <div class="col-lg-12">
         @if(Session::has('errors'))
             <div class="alert alert-danger" role="alert">{{$errors->first('link')}}</div>
             @endif
        </div>
        </div>
     {{Form::open(array('url'=>'/','method'=>'post'))}}
      <div class="row">
      <div class="col-lg-12">
                 <div class="form-group">
                    {{Form::text('link',Input::old('link'),
                    array(
                    'placeholder'=> 'Insert your URL here and press enter!',
                    'class' => 'form-control input-lg',

                    ))}}
                 </div>
             </div>
             </div>

     {{Form::close()}}

     @if(Session::has('link'))
     <div class="row">
         <div class="col-lg-12">
         <h3 class="success text-center">

              <a href="{{Session::get('link')}}">{{Session::get('link')}}</a>
                  </h3>
         </div>
         </div>


    @endif

     </div>
 </body>
 </html>