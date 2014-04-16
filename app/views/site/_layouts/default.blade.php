<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>{{ $page->html_title }}</title>
  <meta name="keywords" content="{{ $page->meta_keywords }}">
  <meta name="description" content="{{ $page->meta_description }}">
  <link rel="shortcut icon" href="{{ URL::asset('assets/site/img/favicon.gif') }}">
  <link rel="stylesheet" href="{{ URL::asset('assets/site/css/app.css') }}"> 
  <script src="{{ URL::asset('assets/site/js/vendor/custom.modernizr.js') }}"></script>
</head>
<body>
    <!--[if lt IE 9]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->

    @include('site._partials.header')

		@yield('main')

	@include('site._partials.footer')



  <script>
  document.write('<script src={{ URL::asset("assets/site/' +
  ('__proto__' in {} ? 'js/vendor/zepto' : 'js/vendor/jquery') +
  '.js") }}><\/script>')
  </script>
  
  <script src="{{ URL::asset('assets/site/js/app.js') }}"></script>
</body>
</html>
