@extends('layouts.master')

@section('title', 'Buat Tiket Bantuan Baru')
@section('body_class', 'bg-grey')

@section('content')
    <section class="section ptb_100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                    <div class="card p-4" style="box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
                        <div class="card-body">
                            <h3 class="mb-4">Buat Tiket Bantuan Baru</h3>
                            <form method="POST" action="{{ route('bantuan.store') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="subject">Subjek</label>
                                    <input type="text" id="subject" name="subject" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="message">Pesan Anda</label>
                                    <textarea id="message" name="message" class="form-control" rows="6" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary mt-3">Kirim Tiket</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection