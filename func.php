<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
<body>
    <p><b>This is a demonstration of a plugin that I have created. It serves the purpose of providing real-time weather of any location.</p>
    <label for="city">Enter City Name:</label>
    <input type="text" id="city" placeholder="Enter city name">
    <button id="get-weather">Get Weather</button>
    <div id="weather-info"></div>

    <script>
        const apiKey = '4fd89fbb946a19203565a0f988233ec2'; 
        document.getElementById('get-weather').addEventListener('click', async () => {
            const city = document.getElementById('city').value;
            const weatherInfoElement = document.getElementById('weather-info');

            if (city) {
                try {
                    const response = await fetch(`https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=${apiKey}`);
                    const data = await response.json();

                    if (data.cod === 200) {
                        const temperature = (data.main.temp - 273.15).toFixed(2); 
                        const description = data.weather[0].description;
                        weatherInfoElement.innerHTML = `<p>Weather in ${city}: ${description}, Temperature: ${temperature}°C</p>`;
                    } else {
                        weatherInfoElement.innerHTML = 'City not found.';
                    }
                } catch (error) {
                    console.error('Error fetching weather data:', error);
                }
            } else {
                weatherInfoElement.innerHTML = 'Please enter a city name.';
            }
        });
    </script>
</body>
</html>


 
