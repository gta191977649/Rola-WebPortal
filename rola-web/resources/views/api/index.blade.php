<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>The HTML5 Herald</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

  <link rel="stylesheet" href="css/styles.css?v=1.0">

</head>

<body>
    <h1>API Index</h1>
    <p>All avaiable rest api end points is listed in here.</p>
    <ul>
        <li>
            <p>「GET」View all lora endpoints: <a href={{route('api.lora.index')}}>/lora</a></p>
        </li>
        <li>
            <p>「GET」View all user: <a href={{route('api.user.index')}}>/user</a></p>
        </li>
        <li>
            <p>「POST」create a new lora endpoint: <a href={{route('api.lora.new')}}>/lora</a></p>
            <strong>tpye: form-data paramters:</strong>
            <ul>
                
                <li>name (string)</li>
                <li>indicator_switch (int)</li>
                <li>indicator_r (int 0 - 255)</li>
                <li>indicator_g (int 0 - 255)</li>
                <li>indicator_b (int 0 - 255)</li>
                <li>dim (float 0 - 1) </li>
                <li>description (string)</li>
            </ul>
        </li>
    </ul>
</body>
</html>