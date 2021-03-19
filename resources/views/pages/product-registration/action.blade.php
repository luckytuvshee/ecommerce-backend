{{-- <a href='javascript:void(0)' class='edit btn btn-primary btn-sm'>Харах</a> --}}

<div class="btn-group">
    <a class="btn btn-primary" href="{{ route('product.registration.show', ['id' => $row->id]) }}">Харах</a>
    <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="sr-only">Toggle Dropdown</span>
    </button>
    <div class="dropdown-menu">
		<a class="dropdown-item" href="{{ route('product.registration.edit', ['id' => $row->id]) }}">Засах</a>
		<div class="dropdown-divider"></div>

		<a class="dropdown-item" href="{{ route('product.registration.create', ['id' => $row->product->id]) }}">Бараа бүртгэх</a>
		<div class="dropdown-divider"></div>
		
			{{-- <a class="dropdown-item" href="{{ route('product.delete', ['id' => $row->id]) }}">Устгах</a> --}}

			<!-- Remove modal trigger-->
			<button type="button" class="dropdown-item" data-productregistrationid={{ $row->id }} data-toggle="modal" data-target="#product_registration_delete_modal">
				<strong>Устгах</strong>
			</button>
    </div>
</div>