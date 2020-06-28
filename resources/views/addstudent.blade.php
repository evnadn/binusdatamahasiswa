@extends('layout/main')

@section('Binus Data Mahasiswa - Add Student')

@endsection

@section('addstudent')
<form method="POST" action="/addstudent" class="addstudent m-5" enctype="multipart/form-data">
    @csrf
    <div class="form-group row">
        <label for="fullname" class="col-sm-2 col-form-label">Full Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="fullname">
            @error('fullname')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <fieldset class="form-group">
        <div class="row">
            <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" value="Male">
                    <label class="form-check-label" for="gender">
                        Male
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" value="Female">
                    <label class="form-check-label" for="gender">
                        Female
                    </label>
                </div>
                @error('gender')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </fieldset>
    <div class="form-group row">
        <label for="placeofbirth" class="col-sm-2 col-form-label">Place of birth</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="placeofbirth">
            @error('placeofbirth')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="dateofbirth" class="col-sm-2 col-form-label">Date of birth</label>
        <div class="col-sm-10">
            <input class="form-control" type="date" name="dateofbirth">
            @error('dateofbirth')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="image" class="col-sm-2 form-control-file">Image</label>
        <div class="col-sm-10">
            <input type="file" name="image">
            @error('image')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="certificate" class="col-sm-2 form-control-file">Certificate</label>
        <div class="col-sm-10">
            <input type="file" name="certificate">
            @error('certificate')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="cv" class="col-sm-2 form-control-file">CV</label>
        <div class="col-sm-10">
            <input type="file" name="cv">
            @error('cv')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="submit" class="col-sm-2"></label>
        <div class="col-sm-1">
            <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </div>
        <div class="col-sm-1">
            <button type="reset" class="btn btn-danger mt-2">Reset</button>
        </div>
    </div>
</form>
@endsection
