<div class="card">
    <div class="card-header">
        <h3 class="card-title">Pencarian Data Menggunakan Algoritma Boyer Moore</h3>
    </div>
    <div class="card-body">
        <form method="GET">
            <div class="row">
                <div class="col-md-10">
                    <input type="text" class="form-control" name="search" value="{{ request('search') }}">
                </div>
                <div class="col-md-2">
                    <button class="btn btn-primary btn-block">Cari Data</button>
                    <a href="" class="btn btn-primary btn-block">Reset</a>
                </div>

            </div>

            <div class="row mt-2">
                <div class="col">
                    <p>Kecepatan pencarian : {{ $searchSpeed ? round($searchSpeed, 2) . ' detik' : '-' }}</p>
                </div>
            </div>
        </form>
    </div>
</div>