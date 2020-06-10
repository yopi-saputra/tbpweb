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
                                <input type="text" readonly class="form-control-plaintext" name="name" id="" value="{{ $edit->title }}">
                            </div>
                        </div>
                    
                    
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Nilai</label>
                            <div class="col-sm-1">
                            <input type="number" class="form-control" id="" name="grade" value="{{ $edit->grade }}">
                            </div>
                        </div>
                    
                    
                        
                            <input type="submit" name="submit" class="btn btn-success">
                            <a class="btn btn-warning" href="/interns/{{ $edit->nim }}">Kembali</a>