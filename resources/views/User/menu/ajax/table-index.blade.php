<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col" class="text-center">#</th>
            <th scope="col" class="text-center">Menu</th>
            <th scope="col" class="text-center">Harga</th>
            <th scope="col" class="text-center">Stock</th>
            <th scope="col" class="text-center">Dibuat</th>
            <th scope="col" class="text-center">Perbarui</th>
            <th scope="col" class="text-center">Disable Menu</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($menus as $menu)
        <tr>
            <td class="text-center">{{ $loop->iteration }}</td>
            <td class="text-center">{{ $menu->name }}</td>
            <td class="text-center">{{ number_format($menu->price) }}</td>
            <td class="text-center">{{ number_format($menu->stock) }}</td>
            <td class="text-center">{{ $menu->created_at->format('d F Y') }}</td>
            <td class="text-center">
                <a href="" class="btn btn-warning btn-sm text-secondary">Perbarui</a>
            </td>
            <td class="text-center">
                <a href="" class="btn btn-danger btn-sm">Disable Menu</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<hr>
<div class="row justify-content-center menus__table">
    {{ $menus->links('pagination::bootstrap-4') }}
</div>
