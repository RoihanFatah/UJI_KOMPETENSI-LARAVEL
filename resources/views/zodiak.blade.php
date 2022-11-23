<form action="/zodiak" method="POST">
    @csrf
    <label for="tanggal">Tanggal : </label>
    <input type="number" name="tanggal">
    <label for="bulan">Bulan : </label>
    <input type="number" name="bulan">
    <button type="submit">Cari</button>
</form>