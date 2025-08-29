<?php
class TemperatureCalculator {
    private $value;
    private $unit;

    public function __construct($value, $unit = 'C') {
        $this->value = $value;
        $this->unit = strtoupper($unit);
    }

    // Konversi ke Celsius
    public function toCelsius() {
        switch ($this->unit) {
            case 'C':
                return $this->value;
            case 'F':
                return ($this->value - 32) * 5 / 9;
            case 'K':
                return $this->value - 273.15;
            default:
                throw new Exception("Satuan tidak dikenal.");
        }
    }

    // Bandingkan dengan suhu normal (37 C)
    public function compareToNormal() {
        $normal = 37.0;
        $current = $this->toCelsius();
        $difference = $current - $normal;

        $status = "";
        if ($difference == 0) {
            $status = "Suhu sekarang sama dengan suhu normal.";
        } elseif ($difference > 0) {
            $status = "Suhu sekarang lebih tinggi dari suhu normal.";
        } else {
            $status = "Suhu sekarang lebih rendah dari suhu normal.";
        }

        // Format selisih dengan nilai absolut (positif)
        return [
            'status' => $status,
            'difference' => abs(round($difference, 2)),
            'normal' => $normal,
            'current' => round($current, 2)
        ];
    }
}

// Contoh pemakaian
$suhu = new TemperatureCalculator(99, 'F'); // Suhu sekarang dalam Fahrenheit
$result = $suhu->compareToNormal();

echo "Suhu normal: {$result['normal']} °C<br>";
echo "Suhu sekarang: {$result['current']} °C<br>";
echo "Perbandingan: {$result['status']}<br>";
echo "Selisih: {$result['difference']} °C<br>";
?>
