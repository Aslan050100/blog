<!DOCTYPE html>
<html >
<head>
  <meta charset="AL32UTF-8">
  <title>Choose your future!</title>
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

</head>

<body>
<div class="upper-main">
  <h1>Choose your future</h1>

</div>
<p>Start now</p>
<form action="{{route('blog.getData')}}" method="get">
<div class="aoyue-select2 animated zoomIn">
    <!-- You can toggle select (disabled) -->
    <label>
        <input type="checkbox" name="placeholder">
        <i class="toggle icon icon-plus"></i>
        <i class="toggle icon icon-minus"></i>
        <span class="placeholder">Subject 1</span>

        @foreach($first_subjects as $first_subject)
        <label class="option">
          <input type="radio" name="first_subject" value="{{$first_subject}}">
          <span class="title animated fadeIn">{{$first_subject}}</span>
        </label>
        @endforeach

    </label>
      
</div>

<div class="aoyue-select2 animated zoomIn">
    <!-- You can toggle select (disabled) -->
    <label>
        <input type="checkbox" name="placeholder">
        <i class="toggle icon icon-plus"></i>
        <i class="toggle icon icon-minus"></i>
        <span class="placeholder">Subject 2</span>
        @foreach($second_subjects as $second_subject)
        <label class="option">
          <input type="radio" name="second_subject" value="{{$second_subject}}">
          <span class="title animated fadeIn">{{$second_subject}}</span>
        </label>
         @endforeach
      </label>
      
</div>

<div class="aoyue-select2 animated zoomIn">
    <!-- You can toggle select (disabled) -->
    <label>
        <input type="checkbox" name="placeholder">
        <i class="toggle icon icon-plus"></i>
        <i class="toggle icon icon-minus"></i>
        <span class="placeholder">City</span>
          @foreach($cities as $city)
        <label class="option">
          <input type="radio" name="city" value="{{$city}}">
          <span class="title animated fadeIn">{{$city}}</span>
        </label>
			@endforeach
      </label>
      
</div>

<div class="aoyue-select2 animated zoomIn">
    <!-- You can toggle select (disabled) -->
    <label>
        <input type="checkbox" name="placeholder">
        <i class="toggle icon icon-plus"></i>
        <i class="toggle icon icon-minus"></i>
        <span class="placeholder">English level</span>
        <label class="option">
          <input type="radio" name="option3">
          <span class="title animated fadeIn">Beginner</span>
        </label>

        <label class="option">
          <input type="radio" name="option3">
          <span class="title animated fadeIn">Pre-Intermediate</span>
        </label>
        <label class="option">
          <input type="radio" name="option3">
          <span class="title animated fadeIn">Intermediate</span>
        </label>
        <label class="option">
          <input type="radio" name="option3">
          <span class="title animated fadeIn">Upper-Intermediate and above</span>
        </label>
      </label>
      
</div>

<div class="aoyue-select2 animated zoomIn">
    <!-- You can toggle select (disabled) -->
    <label>
        <input type="checkbox" name="placeholder">
        <i class="toggle icon icon-plus"></i>
        <i class="toggle icon icon-minus"></i>
        <span class="placeholder">Sphere</span>
        @foreach($categories as $category)
        <label class="option">
          <input type="radio" name="category" value="{{$category}}">
          <span class="title animated fadeIn">{{$category}}</span>
        </label> 
        @endforeach      
      </label>
</div>

<div class="aoyue-select2 animated zoomIn">
	<input type="submit" name="submit">
</div>
</form>
<br>
<br>
<br>

  
    <script src="{{asset('js/index.js')}}"></script>





</body>
</html>
