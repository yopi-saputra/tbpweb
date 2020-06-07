<div class="card-body"> 
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" readonly class="form-control-plaintext" name="name" id="" value="{{ $edit->name }}">
                                <small><input type="text" readonly class="form-control-plaintext" name="nim" id="" value="{{ $edit->nim }}"></small>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Judul KP</label>
                            <div class="col-sm-10">
                                <input type="text" readonly class="form-control-plaintext" name="title" id="" value="{{ $edit->title }}">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal</label>
                            <div class="col-sm-2">
                            <input type="text" readonly class="form-control-plaintext" id="" name="date" value="{{ $edit->date }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Aktifitas</label>
                            <div class="col-sm-9">
                            <input type="text" readonly class="form-control-plaintext" id="" name="activity" value="{{ $edit->activity }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Tanggapan</label>
                            <div class="col-sm-9">
                            <textarea class="form-control" id="t" name="notes" rows="9" placeholder="Beri tanggapan">{{ $edit->notes }}</textarea>
                            </div>
                        </div>

                            <input type="submit" name="submit" class="btn btn-success" value="Masukan Tanggapan">
                            <a class="btn btn-warning" href="/interns/{{$edit->nim}}/logbooks ">Kembali</a> 

                    </div>