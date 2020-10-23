<form class="form-inline mt-2" action="/pets/search" method="POST">
    @csrf
    <div class="input-group">
        <div class="input-group-prepend">
            <div class="input-group-text">Pet name search</div>
        </div>
        <input class="form-control mr-2" id="pet" type="text" name="pet"/>
    </div>
    <button class="btn btn-primary">Search</button>
</form>