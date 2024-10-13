<form action="{{ route('reservasi.store') }}" method="POST">
    @csrf
    <input type="hidden" name="rumah_id" value="{{ $rumah->id }}">
    <input type="date" name="tanggal_reservasi" required>
    <button class="bg-green-500 text-white px-4 py-2 rounded">Reservasi</button>
</form>
