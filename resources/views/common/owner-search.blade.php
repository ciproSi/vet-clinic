<form class="form-inline mt-2" action="owners/search" method="POST">
    @csrf
    <div class="input-group">
        <div class="input-group-prepend">
            <div class="input-group-text">Surname search</div>
        </div>
        <input class="form-control mr-2" id="surname" type="text" name="surname"/>
    </div>
    <button class="btn btn-primary">Search</button>
</form>