function grafico(professor, aluno){
    const ctx = $('#usuarios');
    new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: [
                'Professor(a)',
                'Aluno(a)',
            ],
            datasets: [{
                data: [professor, aluno],
                backgroundColor: [
                'rgb(255, 0, 0)',
                'rgb(0, 0, 255)',
                ],
                hoverOffset: 4
            }]
        }
    });
}