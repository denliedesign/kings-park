<form action="{{ route('trial.store') }}" method="POST">
    <div class="form-group row">
        <label class="d-none col-sm-0 col-form-label" for="parentName">Parent Name</label>
        <div class="col-sm-12">
            <input id="parentName" type="text" class="form-control mb-1" name="parentName" value="" placeholder="Parent Name">
        </div>
        <div>{{ $errors->first('parentName') }}</div>
    </div>
    <div class="form-group row">
        <label class="d-none col-sm-0 col-form-label" for="email">Email</label>
        <div class="col-sm-12">
            <input id="email" type="email" class="form-control mb-1" name="email" value="" placeholder="Email">
        </div>
        <div>{{ $errors->first('email') }}</div>
    </div>
    <div class="form-group row">
        <label class="d-none col-sm-0 col-form-label" for="phone">Phone Number</label>
        <div class="col-sm-12">
            <input type="text" class="form-control mb-1" name="phone" id="phone" value="" placeholder="Phone Number">
        </div>
        <div>{{ $errors->first('phone') }}</div>
    </div>
    <div class="form-group row">
        <label class="d-none col-sm-0 col-form-label" for="studentName">Student Name</label>
        <div class="col-sm-12">
            <input id="studentName" type="text" class="form-control mb-1" name="studentName" value="" placeholder="Student Name">
        </div>
        <div>{{ $errors->first('parentName') }}</div>
    </div>
    <div class="form-group row">
        <label class="d-none col-sm-0 col-form-label" for="birthdate">Birthdate</label>
        <div class="col-sm-12 d-flex justify-content-center align-items-center">
            <small class="text-white">Birthdate&nbsp;</small>
            <input type="date" class="form-control mb-1" name="birthdate" id="birthdate" required>
        </div>
    </div>
    <div class="form-group row">
        <label class="d-none col-sm-0 col-form-label" for="class">Which Class?</label>
        <div class="col-sm-12">
            <input id="class" type="text" class="form-control mb-1" name="class" value="" placeholder="Which Class?">
        </div>
        <div>{{ $errors->first('class') }}</div>
    </div>
    @csrf
    <div class="d-flex justify-content-center">
        <button type="submit" class="btn purple-rectangle-trial mt-2">BOOK FREE CLASS</button>
    </div>
</form>
