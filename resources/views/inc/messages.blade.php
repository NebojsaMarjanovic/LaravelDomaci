{{-- @if(count($errors)!=0)
<!-- error izlazi za validaciju i zato ga proveravamo -->
<!-- prolazimo kroz sve error objkete i ispisujemo ih -->
@foreach ($errors->all() as $error)
    <div class="alert alert-danger">
        {{$error}}
    </div>
@endforeach
@endif
<!-- proveravamo da li je sesija uspesna -->
@if (session('success'))
 <div class="alert alert-success">
     {{session('success')}}
 </div>
@endif
<!-- proveravamo da li je sesija neuspesna -->
@if (session('error'))
 <div class="alert alert-danger">
     {{session('error')}}
 </div>
@endif --}}
