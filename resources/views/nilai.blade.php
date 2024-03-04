@extends('master')
@section('konten')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Nilai</title>
    </head>

    <body>
        <h2>Data Nilai</h2><br />
        <table class="table table-dark table-hover m-lg-2">
            <tr>
                <th>ID Soal</th>
                <th>ID User</th>
                <th>Jawaban Tugas</th>
                <th>Nilai</th>
                <th>Status</th>
            </tr>
            @foreach ($nilai as $n)
                <tr>
                    <td>{{ $n->idsoal }}</td>
                    <td>{{ $n->name }}</td>
                    <td>{{ $n->jawabansoal }}</td>
                    <td>{{ $n->nilai }}</td>
                    <td>
                        @if (Auth::user()->role == 'admin')
                            @if ($n->status != 'selesai')
                                <button class="btn btn-danger" data-toggle="modal"
                                    data-target="#UpdateStatus{{ $n->idnilai }}">{{ $n->status }}</button>
                            @elseif($n->status == 'selesai')
                                <button class="btn btn-success">{{ $n->status }}</button>
                            @endif
                        @else
                            <button class="btn btn-primary">{{ $n->status }}</button>
                        @endif
                    </td>
                </tr>
                <div class="modal fade" id="UpdateStatus {{ $n->nilai }}" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal=-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Update Status</h1>
                            </div>
                            <div class="modal-body">
                                <form action="/nilai/storeupdate" method="post" class="form-floating">

                                    @csrf
                                    <input type="hidden" name="idnilai" id="idnilai" readonly="form-control"
                                        value="{{ $n->idnilai }}">
                                    <div class="form-floating">
                                        <label for="floatingInputValue">Nilai Tugas</label>
                                        <input type="text" name="nilai" required="required" class="form-controll"
                                            value="{{ $n->nilai }}">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
                                        <button type="submit" class="btn btn-primary">Save Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            @endforeach
        </table>
    </body>

    </html>
@endsection
