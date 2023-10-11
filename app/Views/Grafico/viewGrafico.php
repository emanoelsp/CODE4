

        <div class="container">
            <div class="mt-5">
                <h2 class="text-center mb-5">Codeigniter Morris Gráficos</h2>
                <div id="MorrisStakcedChart" style="height: 400px; width: 100%"></div>
            </div>		

            <div class="mt-5">
                <h2 class="text-center mb-5">Codeigniter Morris Bar Chart Example</h2>
                <div id="MorrisBarChart" style="height: 400px; width: 100%"></div>
            </div>
        </div>


        <script>
            var serries = <?php echo json_encode($produtos); ?>;
            var data = serries,
                    config = {
                        data: <?php echo json_encode($produtos); ?>,
                        xkey: 'Dia',
                        ykeys: ['Preço'],
                        labels: ['Sales this week'],
                        fillOpacity: 0.7,
                        hideHover: 'auto',
                        resize: true,
                        behaveLikeLine: true,
                        stacked: true,
                        barColors: "455"
                    };

            // Call bar chart
            config.element = 'MorrisBarChart';
            Morris.Bar(config);

            // Call stacked chart
            config.element = 'MorrisStakcedChart';
            config.stacked = true;
            Morris.Bar(config);
        </script>
