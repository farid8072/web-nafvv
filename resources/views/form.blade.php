<form action="{{ route('hitung.emisi') }}" method="POST">
    @csrf
    <label>Berat Plastik (kg):</label>
    <input type="number" name="berat" step="0.01" required>

    <label>Tipe Emisi:</label>
    <select name="tipe">
        <option value="rendah">Rendah (2.9)</option>
        <option value="tinggi">Tinggi (6)</option>
    </select>

    <button type="submit">Hitung</button>
</form>
