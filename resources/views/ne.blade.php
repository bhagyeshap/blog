<html>
<head>
<title></title>
</head>
<body>
<form method="post" action="/ne">
Enter number 1:<input type="text" name="number1"><br/>
Enter number 2:<input type="text" name="number2"><br/>
<input type="submit" value="add">
{{csrf_field()}}
</form>
</body>
</html>