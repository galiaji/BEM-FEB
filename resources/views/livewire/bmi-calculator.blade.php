<div class="flex justify-center items-center min-h-screen bg-gray-100">
    <div class="w-full max-w-4xl bg-white shadow-lg rounded-lg p-6">
        <h2 class="text-center text-2xl font-semibold mb-4">BMI Calculator</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Form Input -->
            <div class="bg-gray-200 p-4 rounded-lg">
                <form wire:submit.prevent="calculate">
                    <div class="mb-3">
                        <label class="block text-gray-700 font-medium">Nama</label>
                        <input type="text" wire:model="name" class="w-full px-3 py-2 border rounded-lg">
                    </div>

                    <div class="mb-3">
                        <label class="block text-gray-700 font-medium">Jenis Kelamin</label>
                        <select wire:model="gender" class="w-full px-3 py-2 border rounded-lg">
                            <option value="male">Laki-laki</option>
                            <option value="female">Perempuan</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="block text-gray-700 font-medium">Tinggi Badan (cm)</label>
                        <input type="number" wire:model="height" class="w-full px-3 py-2 border rounded-lg">
                    </div>

                    <div class="mb-3">
                        <label class="block text-gray-700 font-medium">Berat Badan (kg)</label>
                        <input type="number" wire:model="weight" class="w-full px-3 py-2 border rounded-lg">
                    </div>

                    <button type="submit"
                        class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition">
                        Hitung BMI
                    </button>
                </form>
            </div>

            <!-- Hasil BMI -->
            @if ($bmi)
                <div class="bg-white p-4 rounded-lg shadow-md border">
                    <h3 class="text-lg font-semibold text-center mb-2">Hasil Perhitungan BMI</h3>

                    <p><strong>Nama:</strong> {{ $name }}</p>
                    <p><strong>Jenis Kelamin:</strong> {{ $gender == 'male' ? 'Laki-laki' : 'Perempuan' }}</p>
                    <p><strong>Tinggi Badan:</strong> {{ $height }} cm</p>
                    <p><strong>Berat Badan:</strong> {{ $weight }} kg</p>
                    <p><strong>BMI:</strong> {{ number_format($bmi, 2) }}</p>

                    <canvas id="bmiChart"></canvas>
                </div>
            @endif
        </div>
    </div>
</div>

<script>
    document.addEventListener('updateChart', event => {
        const bmiRecords = event.detail.bmiRecords.map(record => record.bmi);
        const labels = event.detail.bmiRecords.map(record => record.created_at);

        const ctx = document.getElementById('bmiChart').getContext('2d');
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: labels,
                datasets: [{
                    label: 'BMI History',
                    data: bmiRecords,
                    borderColor: 'rgb(75, 192, 192)',
                    tension: 0.1
                }]
            }
        });
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
