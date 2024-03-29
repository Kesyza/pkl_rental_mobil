@extends('backend.layouts')
@section('title', 'Ubah Data')
@section('content')
    <div class="col-lg-12">
        {{-- <div class="card border-left-primary"> --}}
        <div class="card mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">@yield('title')</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('customer.update', $data->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>NIK</label>
                                <input type="text" name="nik" value="{{ $data->nik }}" class="form-control border-dark-50"
                                    required="">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label>Nama Pelanggan</label>
                                <input type="text" name="name" value="{{ $data->name }}"
                                    class="form-control border-dark-50" required="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" name="address" value="{{ $data->address }}"
                                    class="form-control border-dark-50" required="">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select name="sex" class="form-control">
                                    <option value="laki-laki" {{ $data->sex == 'laki-laki' ? 'selected' : '' }}>Laki-Laki
                                    </option>
                                    <option value="perempuan" {{ $data->sex == 'perempuan' ? 'selected' : '' }}>Perempuan
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Nomor Telepon</label>
                                <input type="text" name="phone_number" value="{{ $data->phone_number }}"
                                    class="form-control border-dark-50" required="">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" value="{{ $data->email }}"
                                    class="form-control border-dark-50" required="">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-gorup">
                                <button type="submit" class="btn btn-primary shadow-sm">Simpan</button>
                                <a class="btn btn-light shadow-sm" href="{{ route('customer.index') }}">Batal</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
