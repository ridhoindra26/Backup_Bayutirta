@extends('main')
@section('content')
<div class="section">
    <div class="titleWarp">
        <div class="layananTitle">Layanan Service LCD Handphone</div>
    </div>
    <div class="col d-flex">
        <div class="pengaturan">
            <div class="row gap-4">
                <div class="basic">
                    <h5>Pengaturan Dasar</h5>
                    <div class="list-group">
                        <a href="" class="list-group-item list-group-item-action active
                        {{ Request::is('/layanan/edit') ? 'active' : '' }}" aria-current="true">
                            Informasi Umum
                        </a>
                        <a href="" class="list-group-item list-group-item-action
                        {{ Request::is('/layanan/edit') ? 'active' : '' }}">
                            Deskripsi Layanan
                        </a>
                    </div>
                </div>
                <div class="additional">
                    <h5>Pengaturan Tambahan</h5>
                    <ul class="list-group">
                        <li class="list-group-item form-check form-switch form-check-reverse">
                            <a href='#' class="form-check-label" for="firstCheckboxStretched">Additional Info</a>
                            <input class="form-check-input" type="checkbox" value="" id="firstCheckboxStretched">
                        </li>
                        <li class="list-group-item form-check form-switch form-check-reverse">
                            <label class="form-check-label" for="firstCheckboxStretched">Review</label>
                            <input class="form-check-input" type="checkbox" value="" id="firstCheckboxStretched">
                        </li>
                        <li class="list-group-item form-check form-switch form-check-reverse">
                            <label class="form-check-label" for="firstCheckboxStretched">QNA</label>
                            <input class="form-check-input" type="checkbox" value="" id="firstCheckboxStretched">
                        </li>
                    </ul>
                </div>
                <div class="divider w-100"></div>
                <a href="" class="btn btn-primary btn-1" role="button">
                    Publish Layanan
                </a>

            </div>
        </div>
        <div class="editLayanan">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-info">
                        <h4>Deskripsi Layanan</h4>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <textarea id="summernote">
                            Place <em>some</em> <u>text</u> <strong>here</strong>
                          </textarea>
                        </div>
                        <div class="buttonGroup">
                            <a href="/artikel" class="btn btn btn-outline-danger" role="button">
                                Batal
                            </a>
                            <button type="button" class="btn btn-outline-success">
                                Simpan
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection