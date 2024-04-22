// to get taipei local time
function taipeiDate() {
  let localDate = new Date();
  const options = {
    timeZone: "Asia/Taipei",
    hour12: false,
    year: "numeric",
    month: "numeric",
    day: "numeric",
    hour: "numeric",
    minute: "numeric",
  };
  let taipeiTime = new Intl.DateTimeFormat("en-US", options);
  let taipeiTimeFormatted = taipeiTime.formatToParts(localDate);

  let taipeiMonth = taipeiTimeFormatted[0].value;
  let taipeiDay = taipeiTimeFormatted[2].value;
  let taipeiYear = taipeiTimeFormatted[4].value;
  let taipeiHour =
    taipeiTimeFormatted[6].value === "24" ? "00" : taipeiTimeFormatted[6].value;
  let taipeiMinute = taipeiTimeFormatted[8].value;

  let months = [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December",
  ];

  let time = document.getElementsByClassName("time");
  let date = document.getElementsByClassName("date");
  date[0].innerHTML =
    months[taipeiMonth - 1] + " " + taipeiDay + ", " + taipeiYear;
  time[0].innerHTML = taipeiHour + ":" + taipeiMinute;
}

function taipeiWeather(unit) {
  const apiKey = "8a07ef2c16ad672830cd287c75b735d2";
  const apiUrl = `https://api.openweathermap.org/data/2.5/weather?q=Taipei&APPID=${apiKey}&units=${unit}`;

  let temperature, weatherDescription;
  // Make a GET request to the API
  fetch(apiUrl)
    .then((response) => {
      if (!response.ok) {
        throw new Error("Network response was not ok");
      }
      return response.json();
    })
    .then((data) => {
      // Extract the relevant weather information
      temperature = data.main.temp;
      weatherDescription = data.weather[0].description;

      // Display the weather information
      let temp = document.getElementsByClassName("temp");
      let desc = document.getElementsByClassName("weather-desc");
      let measure = unit === "metric" ? "&deg;C" : "&deg;F";
      temp[0].innerHTML = temperature + measure;
      desc[0].innerHTML = weatherDescription;
    })
    .catch((error) => {
      console.error("There was a problem fetching the weather data: ", error);
    });
}

taipeiWeather("metric");
setInterval(taipeiDate, 1000);

function validateForm() {
  let name = document.forms["comment"]["name"].value;
  if (name == null || name == "") {
    document.forms["comments"]["name"].style.backgroundColor = "red";
    return false;
  }

  let email = document.forms["comment"]["email"].value;
  if (email == null || email == "") {
    document.forms["comments"]["email"].style.backgroundColor = "red";
    return false;
  }

  let comment = document.forms["comment"]["comment"].value;
  if (comment == null || comment == "") {
    document.forms["comment"]["comment"].style.backgroundColor = "red";
    return false;
  }
}
