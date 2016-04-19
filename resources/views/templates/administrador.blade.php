<!DOCTYPE html>
<html>
<head>
@yield('tpagina')
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="/css/materialize.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>

@yield('content')



<footer>
		<div class="footer-copyright">
            <div class="container">
            © 2016 Andrés Hernández Jiménez
            <a class="grey-text text-lighten-4 right btn-social" href="https://www.facebook.com/andreshj"><i class="fa fa-facebook-square fa-2x"></i></a>
             <a class="grey-text text-lighten-4 right btn-social" href="https://twitter.com/Andrs10191"><i class="fa fa-twitter-square fa-2x"></i></a>
            </div>
        </div>
</footer>
	<script src="/js/jquery-2.2.1.min.js"></script>
	<script src="/js/materialize.min.js"></script>
	<script src="/js/app.js"></script>

</body>
</html>