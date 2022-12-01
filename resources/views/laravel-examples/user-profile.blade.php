@extends('layouts.user_type.auth')

@section('content')
    <div>
        <div class="container-fluid">
        </div>
        <div class="container-fluid py-4">
            <div class="card">
                <div class="card-header pb-0 px-3">
                    <h6 class="mb-0">{{ __('Profile Information') }}</h6>
                </div>
                <div class="card-body pt-4 p-3">
                    <form action="/add-booking" method="POST" role="form text-left">
                        @csrf
                        @if ($errors->any())
                            <div class="mt-3  alert alert-primary alert-dismissible fade show" role="alert">
                                <span class="alert-text text-white">
                                    {{ $errors->first() }}</span>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                    <i class="fa fa-close" aria-hidden="true"></i>
                                </button>
                            </div>
                        @endif
                        @if (session('success'))
                            <div class="m-3  alert alert-success alert-dismissible fade show" id="alert-success"
                                role="alert">
                                <span class="alert-text text-white">
                                    {{ session('success') }}</span>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                    <i class="fa fa-close" aria-hidden="true"></i>
                                </button>
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="user-name" class="form-control-label">{{ __('Full Name') }}</label>
                                    <div class="@error('user.name')border border-danger rounded-3 @enderror">
                                        <input class="form-control" value="{{ old('name') }}" type="text"
                                            placeholder="Name" id="user-name" name="name">
                                        @error('name')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="form-control-label">Select Room</label>
                                    <select class="form-control form-select form-select" name="room" id="">
                                        <option value="">Select Room</option>
                                        <option value="room">Room 1</option>
                                        <option value="room">Room 2</option>
                                        <option value="room">Room 3</option>
                                        <option value="room">Room 4</option>
                                        <option value="room">Room 5</option>
                                        <option value="room">Room 6</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label">Start Date</label>
                                    <div class="@error('start_date')border border-danger rounded-3 @enderror">
                                        <input class="form-control" type="date"
                                            name="start_date" value="{{ old('start_date') }}">
                                        @error('start_date')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label">End Date</label>
                                    <div class="@error('end_date')border border-danger rounded-3 @enderror">
                                        <input class="form-control" type="date"
                                            name="end_date" value="{{ old('end_date') }}">
                                        @error('end_date')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label">Start Time</label>
                                    <div class="@error('start_time')border border-danger rounded-3 @enderror">
                                        <input class="form-control" type="time"
                                            name="start_time" value="{{ old('start_time') }}">
                                        @error('start_time')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label">End Time</label>
                                    <div class="@error('end_time')border border-danger rounded-3 @enderror">
                                        <input class="form-control" type="time"
                                            name="end_time" value="{{ old('end_time') }}">
                                        @error('end_time')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit"
                                class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'submit' }}</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
