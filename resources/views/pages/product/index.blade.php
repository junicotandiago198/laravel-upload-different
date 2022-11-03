<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    {{-- Data tables --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.5/datatables.min.css"/>

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
      <div class="card">
        <div class="card-header">
          <div class="card-title">Fillter Product</div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
              <label for="">Organisasi</label>
              <select name="" id="filter-organisasi" class="form-control fillter">
                <option value="">-- Pillih Organisasi --</option>
                @foreach ($products as $product)
                    <option value="{{ $product->id }}">{{ $product->organisasi }}</option>
                @endforeach
              </select>
            </div>
          </div>
        </div>
      </div>
        <div class="row mt-5">
            <a href="{{ route('product.create') }}" class="btn btn-success mb-3">+ Tambah Product</a>
            <div class="col-md-12">
                <table id="crudTable" class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Organisasi</th>
                        <th scope="col">Product Image</th>
                        <th scope="col">Vendor Image</th>
                        <th scope="col">User Image</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    {{-- Data tabels js --}}
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.11.5/datatables.min.js"></script>
  </body>
</html>

<script>
    let organisasi = $("#filter-organisasi").val()

    var datatable = $('#crudTable').DataTable({
            processing: true,
            serverSide: true,
            ordering: true,
            ajax: {
                url: '{!! url()->current() !!}',
            },
            columns: [
                { data: 'id', name: 'id' },
                { data: 'name', name: 'name' },
                { data: 'organisasi', name: 'organisasi' },
                { data: 'product_image', name: 'product_image' },
                { data: 'vendor_image', name: 'vendor_image' },
                { data: 'user_image', name: 'user_image' },
                { 
                    data: 'action', 
                    name: 'action',
                    orderable: false,
                    searcable: false,
                    width: '15%' 
                },
            ]
        })

        $(".fillter").on('change',function(){
          let organisasi = $("#filter-organisasi").val()
          console.log([organisasi])
        })
</script>