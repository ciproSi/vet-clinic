<h1>Create new owner</h1>
<form action="" method="post">
    @csrf
    <p>
        <label for="name">Name:</label>
        <input id="name" type="text" name="name"/>
    </p>
    <p>
        <label for="surname">Surname:</label>
        <input id="surname" type="text" name="surname"/>
    </p>
    <p>
        <label for="city">City:</label>
        <input id="city" type="text" name="city"/>
    </p>
    <p>
        <label for="street">Street:</label>
        <input id="street" type="text" name="street"/>
    </p>
    <p>
        <label for="phone">Phone:</label>
        <input id="phone" type="text" name="phone"/>
    </p>
    <p>
        <label for="email">Email:</label>
        <input id="email" type="text" name="email"/>
    </p>


    <button type="submit">Create</button>
</form>