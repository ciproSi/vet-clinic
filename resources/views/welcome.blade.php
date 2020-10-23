<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>vet-clinic homepage</title>
</head>
<body>
    <a href="">Show all owners</a>
    <a href="">Show all pets</a>
    <form action="" method="POST">
        @csrf
        <label for="surname">Search owner based to his surname:</label>
        <input id="surname" type="text" name="surname"/>
        <button>Search</button>
    </form>
    <form action="" method="POST">
        @csrf
        <label for="pet">Search pet based to its name:</label>
        <input id="pet" type="text" name="pet"/>
        <button>Search</button>
    </form>




</body>
</html>