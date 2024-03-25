<div class="d-flex inline-block">
    <a href="{{ url('/kategori/edit', $kategori_id) }}" class="btn btn-sm btn-success mr-2">Edit</a>
    <a href="{{ url('/kategori/delete', $kategori_id) }}" onclick="return confirm('Are you sure you want to delete this item?')" class="btn btn-sm btn-danger">Delete</a>
    {{-- <form action="{{ url('kategori/delete', $kategori_id) }}" method="POST" style="display: inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
    </form> --}}
</div>