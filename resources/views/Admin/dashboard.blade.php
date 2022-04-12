<!DOCTYPE html>
<html>
<head>
	<title>js</title>
	<style>
		.d-flex
		{
			display: flex;
			align-items: center;
			background: blue;
			padding: 10px;
			color: white;
		}
		.d-flex p:last-child{
			font-weight: bolder;
			font-size: 30px;
			border: 1px solid white;
			padding: 0 10px;
			margin: 0;
			cursor: pointer;
		}

        ul li {
            list-style-type: none;
        }
        ul li a {
            text-decoration: none;
        }
        ul li ul li {
            display: none;
        }
        ul li:hover ul li {
            display: block;
        }

	</style>
</head>
<body>
    <ul>
        <li><a href="#">sam</a>
            <ul>
                <li>
                    <a href="{{route('login')}}">Loginhere</a>
                </li>
                <li>
                    <a href="{{route('login')}}">logout</a>
                </li>
            </ul>
        </li>
    </ul>
	<h1>date display</h1>
	<button type="button" onclick="clickhere()">
	click me</button>

	<p id="demo">hello</p>

<div class="d-flex">
	<p>
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</p>
	<p>&times;</p>
	<p>&;</p>
</div>

	<script type="text/javascript">
		var x = "javascript is best frontend development langauge"
		function clickhere(){
			document.getElementById('demo').innerHTML = x;
		}


	</script>

</body>
</html>