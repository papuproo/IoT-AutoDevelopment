import { Chart } from 'chart.js';

// Configura el gráfico y representa los datos en el elemento canvas
var ctx = document.getElementById('grafica').getContext('2d');
var myChart = new Chart(ctx, {
    // Configuración del gráfico
    data: {
        labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
    datasets: [
        {
            label: 'Ventas 2023',
            data: [12, 19, 3, 5, 2], // Datos de las barras
            backgroundColor: 'rgba(75, 192, 192, 0.2)', // Color de las barras
            borderColor: 'rgba(75, 192, 192, 1)', // Borde de las barras
            borderWidth: 1 // Ancho del borde de las barras
        }
    ]
    }
});