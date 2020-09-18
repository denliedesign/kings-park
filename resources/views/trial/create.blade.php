<form action="{{ route('trial.store') }}" method="POST">
    <div class="form-group row">
        <label class="col-sm-4 col-form-label" for="parentName">Parent Name</label>
        <div class="col-sm-8">
            <input id="parentName" type="text" class="form-control" name="parentName" value="">
        </div>
        <div>{{ $errors->first('parentName') }}</div>
    </div>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label" for="email">Email</label>
        <div class="col-sm-8">
            <input id="email" type="email" class="form-control" name="email" value="">
        </div>
        <div>{{ $errors->first('email') }}</div>
    </div>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label" for="phone">Phone Number</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" name="phone" id="phone" value="">
        </div>
        <div>{{ $errors->first('phone') }}</div>
    </div>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label" for="studentName">Student Name</label>
        <div class="col-sm-8">
            <input id="studentName" type="text" class="form-control" name="studentName" value="">
        </div>
        <div>{{ $errors->first('parentName') }}</div>
    </div>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label" for="birthdate">Birthdate</label>
        <div class="col-sm-8">
            <input type="date" class="form-control" name="birthdate" id="birthdate" required>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label" for="class">Which Class?</label>
        <div class="col-sm-8">
            <input id="class" type="text" class="form-control" name="class" value="">
        </div>
        <div>{{ $errors->first('class') }}</div>
    </div>
    @csrf
    <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-danger mt-2">Claim Offer</button>
    </div>
</form>
